<?php
session_start();
include 'db.php';

$uid = $_POST['uid'];
$pwd = $_POST['pwd'];



$sql ="SELECT * FROM user WHERE email='$uid'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$hash_pwd = $row['pass'];
         $hash = password_verify($pwd, $hash_pwd);
           if($hash == 0){
					 header("Location: login.php?error=login");
		   	    	 exit();
                }
            else{
   	          
				$_SESSION['id'] = $row['id'];
				$_SESSION['name'] = $row['uname'];
				header("Location: display.php");
			
			}