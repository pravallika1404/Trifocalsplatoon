<!DOCTYPE html>
<html>
<head>
	<title>DETAILS</title>
	<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
</head>
<body>

	<?php
				$url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
				if(strpos($url,'error=size')!==false)
				{
					echo "IMAGE CAPACITY IS TOO BIG!";
					echo "<br>"."TRY ANOTHER IMAGE";
				}
				if(strpos($url,'error=upload')!==false)
				{
						echo "<br>";
						echo "ERROR IN IMAGE UPLOADING";
						echo  "<br>"."PLEASE CHOOSE ANOTHER IMAGE";
				}
				if(strpos($url,'error=captial')!==false)
				{
						echo "PLEASE ENTER COMPANY NAME IN UPPER CASE";
						echo "<a href='admincode.php'>Clickhere</a>";
				}
				/*if(strpos($url,'error=success')!==false)
				{
						echo "<br>";
						echo "YOUR PROFILE UPLOADED SUCCESSFULLY";
						echo "<br>"."PLEASE CLICK ON THE LINK TO NAVIGATE TO LOGIN PAGE"."<a href='login.php'>LOGIN</a>";
				}*/

			?>
</body>
</html>