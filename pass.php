<!DOCTYPE html>
<html>
<head>
	<title>PASSWORD</title>
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
	<h2>GRADUATE CAREER WEBSITE</h2>
	<?php
			$url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
			if(strpos($url,'error=mail')!==false)
			{
				
					echo "YOUR MAIL IS  MIS-MATCHED.";
			}
			if(strpos($url,'error=notsent')!==false)
			{
				
					echo "MESSAGE COULD NOT BE SENT.";
			}
			if(strpos($url,'error=sent')!==false)
			{
				
					echo "PASSWORD IS SENT TO YOUR MAIL"."<br>";
					echo "<a href='http://www.gmail.com'>Login Gmail</a>";
			}

	?>
<form method="POST" action="mail.php">

	<div>
		<span> ENTER YOUR EMAIL:</span><input type="mail" name="uid" required/><br>
	</div>
		<button type="submit">MAIL ME</button>
</form>

</body>
</html>