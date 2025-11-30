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
				if($_SERVER["REQUEST_METHOD"] == "POST"){
					$CHOICE = $_POST["choice"];
					
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
					
					echo "<br><b>Connection is Successfully Established</b><br><br><br><br>";

					//Table Display...
					$sql = "SELECT * FROM EMPLOYEE ORDER BY $CHOICE;";

					$results = mysqli_query($connection, $sql);
						
					if(mysqli_num_rows($results) > 0){
						echo "<font>The Employee Table (order by <b>$CHOICE</b>) will be : </font><br><br>";
						
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
								echo "<td>" . $table["EMPNAME"] . "</td>";
								echo "<td>" . $table["ADDRESS"] . "</td>";
								echo "<td>" . $table["PHONE_NUMBER"] . "</td>";
								echo "<td>" . $table["SALARY"] . "</td>";
								echo "<td>" . $table["CATEGORY"] . "</td>";
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
				}
			?>
		</div>
	</body>
</html>