<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="forms.css">
	
</head>
<body>
<header>
	<nav>
		<ul>
			<li><a href="index.html">HOME</a></li>
			<li><a href="register.html">REGISTER</a></li>
		</ul>
	</nav>
</header>
	<h2>Online Training And Placement Cell</h2>
	<p>USER LOGIN</p>
	<?php

		session_start();
		
		$url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
		if(strpos($url,'error=login')!==false)
		{
					echo "YOUR CREDENTIALS WRONG."."<br>";
					echo "ENTER CORRECT CREDENTIALS.";
			}
		if(strpos($url,'error=name')!==false)
		{
				
					echo "PLEASE ENTER EMAIL.";
				}
			if(strpos($url,'error=success')!==false)
		{
				
					echo "YOUR PROFILE UPLOADED SUCCESSFULLY."."<br>";
					echo "PLEASE LOGIN ";
				}
		if(strpos($url,'error=session')!==false)
		{
				
					echo "PLEASE LOGIN ";
		}

	?>
<form method="POST" action="userlogin.php" >

	<div>
		<span>EMAIL:</span><input type="mail" name="uid" required/><br>
		<span>PASSWORD:</span><input type="password" name="pwd" required/><br>
	</div>
	<h4>Forget your password?<a href="pass.php">clickhere</a></h4><br><br>
	<button type="submit">LOGIN</button>
</form>

</body>
</html>