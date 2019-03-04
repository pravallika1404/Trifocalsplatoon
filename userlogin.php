<?php
	session_start();
	include 'db.php';

	$mail=$_POST['uid'];
	$pass=$_POST['pwd'];

	echo "<br>".$mail;
	echo "<br>".$pass;

	$sql="SELECT * FROM user WHERE email='$mail'";
	$result=$conn->query($sql);
	$row=$result->fetch_assoc();
	$hashpass=$row['pass'];

	echo "<br>".$hashpass;
	
	$decrypt=password_verify($pass, $hashpass);
	echo "<br>".$decrypt;
	if($decrypt == 0){
		header("Location: login.php?error=login");
		
	}
	else{
		$_SESSION['id']=$row['id'];
		$_SESSION['name']=$row['uname'];
		header("Location: display.php");
	}

	//echo "<br>".$hash;
	/*if($decrypt==0){
		header("Location: login.php?error=login");
	}
	else{
		header("Location: display.php");
	}*/

?>