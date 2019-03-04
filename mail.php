<?php
	session_start();
	include 'db.php';
	require 'PHPMailerAutoload.php';

	$mail=$_POST['uid'];
	
	 echo "<br>".$mail;

	 /*code for validating user for correct email*/
	 $sql="SELECT * FROM user WHERE email='$mail'";
	 $result=$conn->query($sql);
	 $no=mysqli_num_rows($result);
	 if($no==0)
	 {
	 	header("Location: pass.php?error=mail");
	 }
	  else
	 {
	 		$row = $result->fetch_assoc();
	 		$name = $row['uname'];
	 		$i=strlen($name);

			$name1=substr($name,$i-2,$i);
			$opass=$name1.rand(100000,1000000);

			echo $name1;
			echo "<br>".$opass;

			$hashpass=password_hash($opass,PASSWORD_DEFAULT);

			$sql1="UPDATE user SET pass='$hashpass' WHERE email='$mail'";
			$result1=$conn->query($sql1);

			
				$sendmail=$row['email'];
				$mail = new PHPMailer;

				$mail->isSMTP();                                      // Set mailer to use SMTP
				$mail->Host = 'smtp.gmail.com';                       // Specify main and backup server
				$mail->SMTPAuth = true;                               // Enable SMTP authentication
				$mail->Username = 'krishnapavan2707@gmail.com';                   // SMTP username
				$mail->Password = '7306796743';               // SMTP password
				$mail->SMTPSecure = 'tls';                            // Enable encryption, 'ssl' also accepted
				$message="YOUR  PASSWORD IS MODIFIED TO--".$opass."<br>"."Please use this password for further logins"."<br>"."Thanks "."<br>"."Regards-Graduate Career Website";

				echo "<br>".$message;
				$mail->Port = 587;                                    //Set the SMTP port number - 587 for authenticated TLS
				$mail->setFrom('krishnapavan2707@gmail.com', 'Graduate Career Website');     //Set who the message is to be sent from
				$mail->addReplyTo($sendmail, 'First Last');  //Set an alternative reply-to address
				$mail->addAddress($sendmail, 'KRISHNA PAVAN');  // Add a recipient
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
				$mail->msgHTML($message);

				if(!$mail->send()) {
					header("Location: pass.php?error=notsent");
				   echo 'Message could not be sent.';
				   echo 'Mailer Error: ' . $mail->ErrorInfo;
				   exit;
				}
				else{
					header("Location: pass.php?error=sent");
				}

				
		}
?>