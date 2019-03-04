<!DOCTYPE html>
<html>
<head>
	<title>ADMIN</title>
	<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
</head>
<body>
<?php
	session_start();
	include 'db.php';

	$sql="SELECT * FROM company";
	$result=$conn->query($sql);
	$id=mysqli_num_rows($result);

	for($i=1;$i<$id+1;$i++){
		$sql1="SELECT * FROM company WHERE id='$i'";
		$result1=$conn->query($sql1);
		$row1=$result1->fetch_assoc();
		$cname=$row['name'];
		echo "<img width='150px' height='100px' src='uploads/".$cname.".jpg'>".;
	}
?>
</body>
</html>
