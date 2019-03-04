<!DOCTYPE html>
<html>
<head>
	<title>Graduate Career</title>
	<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="display.css">
</head>
<body>
	<header>
		<nav>
			<ul>
				<li><a href="logout.php">LOGOUT</a></li>
			</ul>
		</nav>
	</header><br><br><br>
		<marquee behavior="scroll" direction="left" scrollamount="7" onmouseover="this.stop();" onmouseout="this.start();">
						<strong><img src="images/new.gif"/>(25-03-2017) Attend Weekend Exam<a href="https://goo.gl/forms/52C4nx10uLHvvco42">(Click Here)</a></strong>&nbsp;&nbsp;
						<strong><img src="images/new.gif"/>There is a campus drive on(4-04-2017)<a href="">(Click Here)</a></strong>
		</marquee>
	<?php
		session_start();
		include 'db.php';
		$uid=$_SESSION['id'];
		$uname=$_SESSION['name'];
		
		$company="";
		$select=array();
		$count=0;

			$sql="SELECT * FROM image WHERE uid='$uid'";
			$result=$conn->query($sql);
			$row=$result->fetch_assoc();
			if($row['status']=='yes')
			{

				/*retrieving values from databse to update profile photo and values*/
				$sql1="SELECT * FROM user WHERE id='$uid'";
				$result1=$conn->query($sql1);
				$row1=$result1->fetch_assoc();
				$username=strtoupper($row1['uname']);
				$rollno=strtoupper($row1['rollno']);
				$cgpa=strtoupper($row1['cgpa']);
				$email=$row1['email'];
				$number=strtoupper($row1['pnumber']);	


				/*retrieving values and comparing values*/
				$sql2="SELECT * FROM userskill WHERE uid='$uid'";
				$result2=$conn->query($sql2);
				$row2=$result2->fetch_assoc();
				
					if($row2['skill1']!=""){
						$uskill1=$row2['skill1'];
					}
					else{
						$uskill1=1;
					}

					if($row2['skill2']!=""){
						$uskill2=$row2['skill2'];
					}
					else{
						$uskill2=1;
					}

					if($row2['skill3']!=""){
						$uskill3=$row2['skill3'];
					}
					else{
						$uskill3=1;
					}

					if($row2['skill4']!=""){
						$uskill4=$row2['skill4'];
					}
					else{
						$uskill4=1;
					}

					if($row2['skill5']!=""){
						$uskill5=$row2['skill5'];
					}
					else{
						$uskill5=1;
					}

					if($row2['skill6']!=""){
						$uskill6=$row2['skill6'];
					}
					else{
						$uskill6=1;
					}
			/*	echo $uskill1."<br>";
				echo $uskill2."<br>";
				echo $uskill3."<br>";
				echo $uskill4."<br>";
				echo $uskill5."<br>";
				echo $uskill6."<br>";*/
				/*comparing values*/
				$sql3="SELECT * FROM company";
				$result3=$conn->query($sql3);
				$no=mysqli_num_rows($result3);
			
				for($i=1;$i<=$no;$i++)
				{
					
					$sql4="SELECT * FROM company WHERE id='$i'";
					$result4=$conn->query($sql4);
					$row4=$result4->fetch_assoc();
					//echo $row4['name']."<br>";
							$value=0;
					
					if($row4['skill1']!=""){
						$cskill1=$row4['skill1'];
					}
					else{
						$cskill1=1;
					}

					if($row4['skill2']!=""){
						$cskill2=$row4['skill2'];
					}
					else{
						$cskill2=1;
					}

					if($row4['skill3']!=""){
						$cskill3=$row4['skill3'];
					}
					else{
						$cskill3=1;
					}

					if($row4['skill4']!=""){
						$cskill4=$row4['skill4'];
					}
					else{
						$cskill4=1;
					}

					if($row4['skill5']!=""){
						$cskill5=$row4['skill5'];
					}
					else{
						$cskill5=1;
					}

					if($row4['skill6']!=""){
						$cskill6=$row4['skill6'];
					}
					else{
						$cskill6=1;
					}
						/*echo $cskill1."<br>";
						echo $cskill2."<br>";
						echo $cskill3."<br>";
						echo $cskill4."<br>";
						echo $cskill5."<br>";
						echo $cskill6."<br>";*/
					if($uskill1==$cskill1){
							
							 $value++;
							 //echo $value."<br>";
					}
					if($uskill2==$cskill2){
							
							 $value++;
							// echo $value."<br>";
					}
					if($uskill3==$cskill3){
							
							 $value++;
							 //echo $value."<br>";
					}
					if($uskill4==$cskill4){
							
							 $value++;
							 //echo $value."<br>";
					}
					if($uskill5==$cskill5){
							
							 $value++;
							// echo $value."<br>";
					}

					if($uskill6==$cskill6){
							
							 $value++;
							// echo $value."<br>";
					}
					if($value==6){
						$select[]=$row4['name'];
						$count++;
					}
					
				}
				echo "<table  cellspacing='4'>";
				echo "<tr>";
				echo "<td width='50%'>";
				echo "<div class='box'>";
				echo "<h2>PROFILE</h2>"."<br>";
				$filename="uploads/".$uname."*";
				$fileinfo=glob($filename);
				$fileext=explode(".",$fileinfo[0]);
				$fileactualext=$fileext[1];

				echo "<img src='uploads/".$uname.".".$fileactualext."'>"."<br>";
				echo "<span>NAME:</span>".$username."<br>";
				echo "<span>ROLLNO:</span>".$rollno."<br>";
				echo "<span>CGPA:</span>".$cgpa."<br>";
				echo "<span>EMAIL:</span>".$email."<br>";
				echo "<span>MOBILE:</span>".$number."<br>";
				echo "</div>";
				echo "</td>";
				echo "<td >";
				if($count==0){
					echo "<span>YOU ARE NOT ELIGIBLE ANY COMPANIES.</span>";
				}
				else{
					for($i=0;$i<$count;$i++){
						echo "<img width='150px' height='100px' src='uploads/".$select[$i].".jpg'>"."<br>";
						echo "<h3>YOUR PROFILE MATCHES WITH:  ".$select[$i]."</h3>";
					}
				}
				
				echo "</td>";
				echo "</tr>";
				echo "</table>";
			}
			else{
				header("Location: login.php?error=session");
				echo "<br>"."ERROR OCCURED";
			}
	?>
</body>
</html>