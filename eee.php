<!DOCTYPE html>
<html>
<head>
	<title>EEE</title>
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
<h2>GRADUATE CAREER WEBSITE</h2>
<p>REGISTRATION FORM</p>
<?php
				$url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
				if(strpos($url,'error=number')!==false)
					echo "PHONE NUMBER MUST CONTAIN 10 DIGITS";
				if(strpos($url,'error=mail')!==false)
					echo "PLEASE ENTER A VALID MAIL WITH EXTENSION";
				if(strpos($url,'error=pass')!==false)
					echo "PASSWORD SHOULD CONSISTS OF 1 UPPERCASE AND LOWERCASE LETTERS";
				if(strpos($url,'error=username')!==false)
					echo "THE NAME IS ALREADY EXISTED.PLEASE CHOOSE ANOTHER NAME";
			?>
<form method="POST" action="insert.php" enctype="multipart/form-data">
		<div>
			<span>NAME:</span><input type="text" name="t1" autofocus required/><br>
			<span>ROLL NO:</span><input type="text"  minlength="10"  name="t2" required/><br>
			<span>PASSWORD:</span><input type="password" minlength="6" name="t3" required/><br>
			<span>CGPA:</span><input type="float" name="t4" required/><br>
			<span>EMAIL:</span><input type="mail" name="t5" required/><br>
			<span>MOBILE NUMBER:</span><input type="number" name="t6" maxlength="10" required/><br>
			<input type="hidden" name="t7" value="eee" required/><br>
		
			<h3>INTERNSHIP DETAILS</h3><hr><br>
			<span>COMPANY NAME:</span><input type="text" name="t8" /><br>
			<span>PROFILE:</span><input type="text" name="t9" placeholder="ex:sales-person"/><br>
			<span>START DATE:</span><input type="date" name="t10"/><br>
			<span>END DATE:</span><input type="date" name="t11"/><br>
		</div>
		<h3>SKILLS</h3><hr><br>
		<input type="checkbox" name="c1" value="c">&nbsp;<span>C</span><br>
		<input type="checkbox" name="c2" value="power systems">&nbsp;<span>POWER SYSTEMS</span><br>
		<input type="checkbox" name="c3" value="power electronics">&nbsp;<span>POWER ELECTRONICS</span><br>
		<input type="checkbox" name="c4" value="machines">&nbsp;<span>MACHINES</span><br>
		<input type="checkbox" name="c5" value="controlsystem">&nbsp;<span>CONTROL SYSTEM</span><br>
		<input type="checkbox" name="c6" value="matlab">&nbsp;<span>MATLAB</span><br><br>
		<h3>PROFILE PHOTO</h3><hr><br>
		<input type="file" name="file"/><br><br>
		<button type="submit">REGISTER</button>
</form>
</body>
</html>