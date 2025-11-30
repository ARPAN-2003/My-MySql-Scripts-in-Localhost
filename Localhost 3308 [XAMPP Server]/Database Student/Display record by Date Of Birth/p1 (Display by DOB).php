<!DOCTYPE html>
<html>
	<head>
		<style>
			div {
				font-size: 40px;
				padding-left: 100px;
				padding-top: 40px;
			}
			table {
				text-align: center;
				width: 75%;
				font-size: 20px;
			}
			font {
				padding-left: 50px;
				font-size: 30px;
			}
			h2 {
				padding-left: 240px;
				font-size: 40px;
			}
		</style>
	</head>
	
	<body>
		<div>
			<?php
				//The servername, username and password is taken from user...
				$servername="localhost:3308";
				$username="root";
				$password="";
				$database="STUDENT";
				
				//Database Connection...
				$connection = mysqli_connect($servername, $username, $password, $database);

				//Check whether there is any database connection error or Not...
				if(mysqli_connect_error()){
					echo "<br><b>Connection Failure</b></br>";
					exit();
				}
				
				echo "<h2><b>Connection is Successfully Established</b></h2><br><br>";

				//Data Display...
				$sql = "SELECT * FROM STUDENT WHERE DATE_OF_BIRTH BETWEEN '2000-01-01' AND '2005-12-31';";

				$results = mysqli_query($connection, $sql);
				
				if(mysqli_num_rows($results) > 0){
					echo "<font>The Student(s) Details whose Date of Birth will be between 01/01/2000 & 31/12/2005 : </font><br><br>";
					
					echo "<table border=4 cellspacing=1 cellpadding=18 align=center>
						<tr>
							<th>Student Name</th>
							<th>Roll No</th>
							<th>City</th>
							<th>Email Id</th>
							<th>Date of Birth</th>
						</tr>";
					
					while($table = mysqli_fetch_assoc($results)){
						echo "<tr>";
							echo "<td>" . $table["NAME"] . "</td>";
							echo "<td>" . $table["ROLL"] . "</td>";
							echo "<td>" . $table["CITY"] . "</td>";
							echo "<td>" . $table["EMAIL"] . "</td>";
							echo "<td>" . $table["DATE_OF_BIRTH"] . "</td>";
						echo "</tr>";
					}
					
					echo "</table>";
				}
				else{
					echo "<br><br>";
					echo "<font><i>---No Row(s) have been selected---</i>";
				}
				
				mysqli_close($connection);
			?>
			
			</table>
		</div>
	</body>
</html>