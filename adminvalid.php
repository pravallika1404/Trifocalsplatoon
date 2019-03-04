<?php
	session_start();
	include 'db.php';

	$aname=$_POST['uid'];
	$apass=$_POST['pwd'];


	$sql="SELECT * FROM admin WHERE aname='$aname'";
	$result=$conn->query($sql);
	$row=$result->fetch_assoc();
	$opass=$row['apass'];
	$no=mysqli_num_rows($result);
	if($no == 0){
		header("Location: admin.php?error=name");
		
	}
	elseif($apass!=$opass){
		header("Location: admin.php?error=pass");
	}
	else{
		$_SESSION['id']=$row['aname'];
		header("Location:admincode.php");
	}
		/*
		$_SESSION['id']=$row['id'];
		$_SESSION['name']=$row['uname'];
		header("Location: display.php");
	}*/


?>