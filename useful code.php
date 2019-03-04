for($i=2;$i<=$id+1;$i++)
	{
			$count=0;
		
				$sql2="SELECT * FROM userskill WHERE uid='$i'";
			
				$result2=$conn->query($sql2);
				$row2=$result2->fetch_assoc();
					$uname=$row2['uname'];
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
				/*echo $uskill1."<br>";
				echo $uskill2."<br>";
				echo $uskill3."<br>";
				echo $uskill4."<br>";
				echo $uskill5."<br>";
				echo $uskill6."<br>";*/
				/*comparing values*/
				$sql3="SELECT * FROM company";
				$result3=$conn->query($sql3);
				$no=mysqli_num_rows($result3);
			
				for($j=1;$j<=$no;$j++)
				{
					
					$sql4="SELECT * FROM company WHERE id='$j'";
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
				
				echo "<table border='1' cellspacing='5'>";
				echo "<tr>";
				echo "<td>";
					echo "<h4>".$uname.":"."</h4>";
					echo "</td>";
		
				if($count==0){
					
					echo "<td>";
					echo "YOU ARE NOT ELIGIBLE ANY COMPANIES.<br>";
					echo "</td>";
				}
				else{
					for($k=0;$k<$count;$k++)
					{
					
						echo "<td>";
						echo "HE IS ELIGIBLE FOR:  ".$select[$k]."<br>";
						echo "</td>";
					}
				}
				
				echo "</tr>";
				echo "</table>";
	}