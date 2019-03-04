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
		</ul>
	</nav>
</header>
	<h2>ONLINE TRAINING AND PLACEMENT</h2>
	<p>ADMIN LOGIN</p>
		
<form method="POST" action="adminvalid.php">

	<div>
		<span>USER NAME:</span><input type="mail" name="uid" required/><br>
		<span>PASSWORD:</span><input type="password" name="pwd" required/><br>
	</div>
	<button type="submit">LOGIN</button>
</form>
	<?php
		$url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
		if(strpos($url,'error=name')!==false)
		{
					echo "YOUR USERNAME IS WRONG."."<br>";
					echo "CHECK YOUR USER NAME.";
			}
		if(strpos($url,'error=pass')!==false)
		{
				
					echo "PLEASE CHECK YOUR PASSWORD ONCE.";
				}
	?>
</body>
</html>