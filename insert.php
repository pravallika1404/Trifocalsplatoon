<?php
	include 'db.php';
	$uname=$_POST['t1'];
	$rollno=$_POST['t2'];
	$pass=$_POST['t3'];
	$cgpa=$_POST['t4'];
	$email=$_POST['t5'];
	$pnumber=$_POST['t6'];
	$department=$_POST['t7'];
	$plen=strlen($pnumber);

	/*intializing company details*/
	$cmp1=$_POST['t8'];
	$cmp2=$_POST['t9'];
	$cmp3=$_POST['t10'];
	$cmp4=$_POST['t11'];

	/*intializing skills details*/
	$skill1=$_POST['c1'];
	$skill2=$_POST['c2'];
	$skill3=$_POST['c3'];
	$skill4=$_POST['c4'];
	$skill5=$_POST['c5'];
	$skill6=$_POST['c6'];

	$img='no';

	/*code for skills data empty or not*/
	/*skill1*/
	if($skill1!=null){
		$i1=$skill1;
	}
	else{
		$i1="";
	}
	/*skill2*/
	if($skill2!=null){
		$i2=$skill2;
	}
	else{
		$i2="";
	}
	/*skill3*/
	if($skill3!=null){
		$i3=$skill3;
	}
	else{
		$i3="";
	}
	/*skill4*/
	if($skill4!=null){
		$i4=$skill4;
	}
	else{
		$i4="";
	}
	/**skill5*/
	if($skill5!=null){
		$i5=$skill5;
	}
	else{
		$i5="";
	}
	/*skill6*/
	if($skill6!=null){
		$i6=$skill6;
	}
	else{
		$i6="";
	}
	
	/*checking null value for company*/
	/*copmany name*/
	if($cmp1!=null){
		$cname=$cmp1;
	}
	else{
		$cname="";
	}
	/*profile value*/
	if($cmp2!=null){
		$profile=$cmp2;
	}
	else{
		$profile="";
	}
	/*start date value*/
	if($cmp3!=null){
		$sdate=$cmp3;
	}
	else{
		$sdate="";
	}
	/*end date value*/
	if($cmp4!=null){
		$edate=$cmp4;
	}
	else{
		$edate="";
	}
	/*this is the code for validating form data*/
	switch ($department) {
		case 'ece':
				if(!preg_match('/[A-Za-z]/', $pass)){
					header("Location: ece.php?error=pass");
						exit();
				}
				if(!preg_match('/[@,.]/', $email)){
						header("Location: ece.php?error=mail");
							exit();
					}
					if($plen<10){
					header("Location: ece.php?error=number");
						exit();
				}
				$sql5="SELECT uname FROM user WHERE uname='$uname'";
				$result5=$conn->query($sql5);
				$unamecheck=mysqli_num_rows($result5);
				if($unamecheck>0){
						header("Location: ece.php?error=username");
						exit();
				}
				break;
		case 'cse':
				if(!preg_match('/[A-Za-z]/', $pass)){
					header("Location: cse.php?error=pass");
						exit();
				}
				if(!preg_match('/[@,.]/', $email)){
						header("Location: cse.php?error=mail");
							exit();
					}
					if($plen<10){
					header("Location: cse.php?error=number");
						exit();
				}
				$sql5="SELECT uname FROM user WHERE uname='$uname'";
				$result5=$conn->query($sql5);
				$unamecheck=mysqli_num_rows($result5);
				if($unamecheck>0){
						header("Location: cse.php?error=username");
						exit();
				}
				break;
		case 'mech':
			if(!preg_match('/[A-Za-z]/', $pass)){
					header("Location: mech.php?error=pass");
					exit();
				}
				if(!preg_match('/[@,.]/', $email)){
						header("Location: mech.php?error=mail");
							exit();	
					}
					if($plen<10){
					header("Location: mech.php?error=number");
					exit();
				}
				$sql5="SELECT uname FROM user WHERE uname='$uname'";
				$result5=$conn->query($sql5);
				$unamecheck=mysqli_num_rows($result5);
				if($unamecheck>0){
						header("Location: mech.php?error=username");
						exit();
				}
				break;
		case 'civil':
			if(!preg_match('/[A-Za-z]/', $pass)){
					header("Location: civil.php?error=pass");
					exit();
				}
				if(!preg_match('/[@,.]/', $email)){
						header("Location: civil.php?error=mail");
							exit();	
					}
					if($plen<10){
					header("Location: civil.php?error=number");
					exit();
				}
				$sql5="SELECT uname FROM user WHERE uname='$uname'";
				$result5=$conn->query($sql5);
				$unamecheck=mysqli_num_rows($result5);
				if($unamecheck>0){
						header("Location: civil.php?error=username");
						exit();
				}
				break;
		case 'eee':
			if(!preg_match('/[A-Za-z]/', $pass)){
					header("Location: eee.php?error=pass");
					exit();
				}
				if(!preg_match('/[@,.]/', $email)){
						header("Location: eee.php?error=mail");
							exit();	
					}
					if($plen<10){
					header("Location: eee.php?error=number");
					exit();
				}
				$sql5="SELECT uname FROM user WHERE uname='$uname'";
				$result5=$conn->query($sql5);
				$unamecheck=mysqli_num_rows($result5);
				if($unamecheck>0){
						header("Location: eee.php?error=username");
						exit();
				}
				break;
		case 'it':
			if(!preg_match('/[A-Za-z]/', $pass)){
					header("Location: it.php?error=pass");
					exit();
				}
				if(!preg_match('/[@,.]/', $email)){
						header("Location: it.php?error=mail");
							exit();	
					}
					if($plen<10){
					header("Location: it.php?error=number");
					exit();
				}
				$sql5="SELECT uname FROM user WHERE uname='$uname'";
				$result5=$conn->query($sql5);
				$unamecheck=mysqli_num_rows($result5);
				if($unamecheck>0){
						header("Location: it.php?error=username");
						exit();
				}
				break;
		default:
				echo "choose corect department";
			break;
	}

		
	/*tis is the code for uploading profile pics*/
		$file=$_FILES['file'];
		$fileName=$_FILES['file']['name'];
		$fileTmpName=$_FILES['file']['tmp_name'];
		$fileSize=$_FILES['file']['size'];
		$fileError=$_FILES['file']['error'];
		$fileType=$_FILES['file']['type'];


		$fileExt=explode('.',$fileName);
		$fileActualExt=strtolower(end($fileExt));

		if($fileError === 0){
			if($fileSize<1000000){
				$fileNewName=$uname.".".$fileActualExt;
				$fileDestination='uploads/'.$fileNewName;
				move_uploaded_file($fileTmpName,$fileDestination);
				$img='yes';
				/*echo "<br>";
				echo "image uploaded successfully";*/
			}else{
				/*echo "IMAGE CAPACITY IS TOO BIG!";
				echo "<br>"."TRY ANOTHER IMAGE";*/
				header("Location: errors.php?error=size");
				exit();
			}
		}else{
			/*echo "<br>";
			echo "ERROR IN IMAGE UPLOADING";
			echo "PLEASE CHOOSE ANOTHER IMAGE";*/
			header("Location: errors.php?error=upload");
				exit();
		}
	
	/*echo "<br>".$uname."<br>";
	echo $rollno."<br>";
	echo $pass."<br>";
	echo $cgpa."<br>";
	echo $email."<br>";
	echo $pnumber."<br>";
	echo $department."<br>";

	echo $cname."<br>";
	echo $profile."<br>";
	echo $sdate."<br>";
	echo $edate."<br>";
	
	echo $i1."<br>";
	echo $i2."<br>";
	echo $i3."<br>";
	echo $i4."<br>";
	echo $i5."<br>";
	echo $i6."<br>";

	echo $img;*/

	
	/*code for enxrypting password*/
	$encryptpass=password_hash($pass,PASSWORD_DEFAULT);
	/*code for inserting personal details into database*/
    $sql="INSERT INTO user(uname,rollno,pass,cgpa,email,pnumber,department) VALUES('$uname','$rollno','$encryptpass','$cgpa','$email','$pnumber','$department')";
    if($result=$conn->query($sql)){
            echo "<br>"."DETAILS IS INSERTED INTO DATABASE";

    }
    /*retreving user id from details databse*/
    $sql3="SELECT * FROM user WHERE uname='$uname'";
    $result3=$conn->query($sql3);
    $row=$result3->fetch_assoc();
    $uid=$row['id'];

    //echo $uid;
    /*inserting companydetails into database */
        $sql1="INSERT INTO usercompany(uid,uname,cname,profile,sdate,edate) VALUES('$uid','$uname','$cname','$profile','$sdate','$edate')";
    if($result1=$conn->query($sql1)){
            echo "<br>"."COMPANY DETAILS IS INSERTED INTO DATABASE";

    }

    /*inserting skills into database*/
        $sql2="INSERT INTO userskill(uid,uname,skill1,skill2,skill3,skill4,skill5,skill6) VALUES('$uid','$uname','$i1','$i2','$i3','$i4','$i5','$i6')";
    if($result2=$conn->query($sql2)){
            echo "<br>"."SKILL DETAILS IS INSERTED INTO DATABASE";

    }

    /*iserting about img database*/
    $sql4="INSERT INTO image(uid,uname,status) VALUES('$uid','$uname','$img')";
    if($result4=$conn->query($sql4))
    {
        echo "<br>"."IMAGE DETAILS ARE INSERTED";
    }

    header("Location: login.php?error=success");