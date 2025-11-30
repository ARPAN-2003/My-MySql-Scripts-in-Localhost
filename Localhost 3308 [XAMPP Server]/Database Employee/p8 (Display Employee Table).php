<!DOCTYPE html>
<html>
	<head>
		<style>
			div {
				font-size: 30px;
				padding: 40px;
				padding-left: 200px;
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
				$database = "EMPLOYEE";
				
				//Database Connection...
				$connection = mysqli_connect($servername, $username, $password, $database);

				//Check whether there is any database connection error or Not...
				if(mysqli_connect_error()){
					echo "<br><b>Connection Failure</b></br>";
					exit();
				}
				
				echo "<br><b>Connection is Successfully Established</b><br><br><br>";

				//Table Display...
				$sql = "SELECT * FROM EMPLOYEE;";

				$results = mysqli_query($connection, $sql);
					
				if(mysqli_num_rows($results) > 0){
					echo "<br><font>The Employee Table will be : </font><br><br>";
					
					echo "<table border=4 cellspacing=1 cellpadding=18 align=center>
						<tr>
							<th>Employee Name</th>
							<th>Address</th>
							<th>Contact No</th>
							<th>Salary</th>
							<th>Category</th>
							<th>Language(s)</th>
						</tr>";
					
					while($table = mysqli_fetch_assoc($results)){
						echo "<tr>";
							echo "<td align=center>" . $table["EMPNAME"] . "</td>";
							echo "<td align=center>" . $table["ADDRESS"] . "</td>";
							echo "<td align=center>" . $table["PHONE_NUMBER"] . "</td>";
							echo "<td align=center>" . $table["SALARY"] . "</td>";
							echo "<td align=center>" . $table["CATEGORY"] . "</td>";
							echo "<td>" . $table["LANGUAGES"] . "</td>";
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
		</div>
	</body>
</html>