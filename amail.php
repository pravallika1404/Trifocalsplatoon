<?php
	session_start();
	include 'db.php';
	require 'PHPMailerAutoload.php';
	$id=$_POST['t1'];

	if(!preg_match('/[A-Z]/', $id))
	{
		header("Location: errors.php?error=captial");
		exit();
	}
	else{
				$sql="SELECT * FROM user";
				$result=$conn->query($sql);	
				$no=mysqli_num_rows($result);
				for($i=20;$i<=27;$i++)
				{
							
							$sql1="SELECT * FROM user WHERE id='$i'";
							$result1=$conn->query($sql1);
							$row1=$result1->fetch_assoc();
							$sendmail=$row1['email'];
							echo "<br>".$sendmail."<br>";
							$msg="THERE IS CAMPUS DRIVE"."<br>".$id." COMPANY IS COMING ON(30-3-2017)";


						
							
							$mail = new PHPMailer;

							$mail->isSMTP();                                      // Set mailer to use SMTP
							$mail->Host = 'smtp.gmail.com';                       // Specify main and backup server
							$mail->SMTPAuth = true;                               // Enable SMTP authentication
							$mail->Username = 'krishnapavan2707@gmail.com';                   // SMTP username
							$mail->Password = '7306796743';               // SMTP password
							$mail->SMTPSecure = 'tls';                            // Enable encryption, 'ssl' also accepted
							/*$message="YOUR  PASSWORD IS MODIFIED TO--".$opass."<br>"."Please use this password for further logins"."<br>"."Thanks "."<br>"."Regards-Graduate Career Website";*/

							echo "<br>".$msg;
							$mail->Port = 587;                                    //Set the SMTP port number - 587 for authenticated TLS
							$mail->setFrom('krishnapavan65@gmail.com', 'Graduate Career Website');     //Set who the message is to be sent from
							$mail->addReplyTo($sendmail, 'First Last');  //Set an alternative reply-to address
							$mail->addAddress($sendmail, 'Josh Adams');  // Add a recipient
							/*$mail->addAddress('ellen@example.com');               // Name is optional
							//$mail->addCC('cc@example.com');
							$mail->addBCC('bcc@example.com');*/
							$mail->WordWrap = 50;                                 // Set word wrap to 50 characters
							/*$mail->addAttachment('/usr/labnol/file.doc');         // Add attachments
							$mail->addAttachment('/images/image.jpg', 'new.jpg');*/ // Optional name
							$mail->isHTML(true);                                  // Set email format to HTML

							$mail->Subject = 'Here is the subject';
							$mail->Body    = 'This is the HTML message body <b>in bold!</b>';
							$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

							//Read an HTML message body from an external file, convert referenced images to embedded,
							//convert HTML into a basic plain-text alternative body
							$mail->msgHTML($msg);

							if(!$mail->send()) {
								header("Location: admincode.php?error=notsent");
							   echo 'Message could not be sent.';
							   echo 'Mailer Error: ' . $mail->ErrorInfo;
							   exit;
							}
							else{
								echo "<br>"."MAIL SUCCESSFULLY SENT";
								header("Location: admincode.php?error=sent");
							}
				}
	}		
?>