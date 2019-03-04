<?php
	session_start();
	include 'db.php';
	$mail=$_POST['uid'];
	
	 echo $mail;

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
			$opass=$name1."123456";

			echo $name1;
			echo "<br>".$opass;
		}
	
	/*$to="krishnapavan2707@gmail.com";
	$subject="ABOUT PASSWORD";
	$txt="YOUR CHANGED PASSWORD IS".$opass;
	$headers="From: GRADUATECAREER@gmail.com";

	mail($to,$subject,$txt,$headers);

	echo "<br>".$opass;
	 	//echo "<br>".$name1;
      

         /*
           if($hash == 0){
					 header("Location: login.php?error=login");
		   	    	 exit();
                }
            else{
   	          
				$_SESSION['id'] = $row['id'];
				$_SESSION['name'] = $row['uname'];
				header("Location: display.php");
			
			}*/
?>