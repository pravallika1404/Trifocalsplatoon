<!DOCTYPE html>
<html>
<head>
	<title>ADMIN</title>
	<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="adisplay.css">
</head>
<body >
	<header>
		<nav>
			<ul>
				<li><a href="logout.php">LOGOUT</a></li>
			</ul>
		</nav>
	</header><br><br><br>
	<center><img src="images/logo.png" width=""/>
	<h1>TRAINING AND PLACEMENT CELL</h1><br>
	<p>LIST OF COMPANIES</p></center><br><br>
<?php
			$url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
			if(strpos($url,'error=sent')!==false)
			{
				
					echo "MAIL IS SENT SUCCESSFULLY.";
			}
			if(strpos($url,'error=notsent')!==false)
			{
				
					echo "MAIL IS NOT SENT.";
			}
			session_start();
			include 'db.php';
			$uid=$_SESSION['id'];
			$sql="SELECT * FROM company";
			$result=$conn->query($sql);
			$id=mysqli_num_rows($result);

			for($i=1;$i<$id+1;$i++){
				$sql1="SELECT * FROM company WHERE id='$i'";
				$result1=$conn->query($sql1);
				$row1=$result1->fetch_assoc();
				$cname=$row1['name'];
				echo "<br>";
				echo "<center>";
				echo "<table cellspacing='75'>";
				echo "<tr>";
				echo "<td>";
				echo "<br>"."<img width='150px' height='100px' src='uploads/".$cname.".jpg'>";
				echo "</td>";
				echo "<td>";
				echo "IF COMPANY IS ARRIVING CLICK MAIL TO SEND EMAILS";
				echo "</td>";
				echo "<td>";
				echo "<form method='post' action='amail.php'>";
				echo "<input type='text' name='t1' placeholder='company name'>";
				echo "<button type='submit'>MAIL</button>";
				echo "</form>";
				echo "</td>";
				echo "</tr>";
				echo "</table>";
				echo "</center>";
			}
		
?>
</body>
</html>
