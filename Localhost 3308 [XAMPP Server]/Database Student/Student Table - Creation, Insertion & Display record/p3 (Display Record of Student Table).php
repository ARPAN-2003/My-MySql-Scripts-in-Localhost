<!DOCTYPE html>
<html>
	<head>
		<style>
			div {
				font-size: 40px;
				padding: 80px;
				padding-left: 100px;
				padding-top: 70px;
			}
			table {
				text-align: center;
				width: 75%;
				font-size: 20px;
			}
			font {
				padding-left: 200px;
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
				
				echo "<font><b>Connection is Successfully Established</b></font><br><br><br>";

				//Data Display...
				$sql = "SELECT * FROM STUDENT;";

				$results = mysqli_query($connection, $sql);
				
				if(mysqli_num_rows($results) > 0){
					echo "<font>So the Student Table will be : </font><br><br>";
					
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