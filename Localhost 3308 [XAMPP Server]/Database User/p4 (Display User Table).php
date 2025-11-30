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
				$database = "USER";
				
				//Database Connection...
				$connection = mysqli_connect($servername, $username, $password, $database);

				//Check whether there is any database connection error or Not...
				if(mysqli_connect_error()){
					echo "<br><b>Connection Failure</b></br>";
					exit();
				}
				
				echo "<br><b>Connection is Successfully Established</b><br><br><br><br>";

				//Table Display...
				$sql = "SELECT * FROM USER;";

				$results = mysqli_query($connection, $sql);
					
				if(mysqli_num_rows($results) > 0){
					echo "<font>The User Table will be : </font><br><br>";
					
					echo "<table border=4 cellspacing=1 cellpadding=18 align=center>
						<tr>
							<th>User's Name</th>
							<th>City</th>
							<th>Contact No</th>
							<th>Email</th>
							<th>Password</th>
						</tr>";
					
					while($table = mysqli_fetch_assoc($results)){
						echo "<tr>";
							echo "<td>" . $table["NAME"] . "</td>";
							echo "<td>" . $table["CITY"] . "</td>";
							echo "<td>" . $table["PHONE_NUMBER"] . "</td>";
							echo "<td>" . $table["EMAIL"] . "</td>";
							echo "<td>" . $table["PASSWORD"] . "</td>";
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