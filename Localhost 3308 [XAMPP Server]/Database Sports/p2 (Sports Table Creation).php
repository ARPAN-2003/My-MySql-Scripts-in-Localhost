<!DOCTYPE html>
<html>
	<head>
		<style>
			div {
				font-size: 30px;
				padding: 40px;
				padding-left: 180px;
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
				$database = "SPORTS";
				
				//Database Connection...
				$connection = mysqli_connect($servername, $username, $password, $database);

				//Check whether there is any database connection error or Not...
				if(mysqli_connect_error()){
					echo "<br><b>Connection Failure</b></br>";
					exit();
				}
				
				echo "<br><b>Connection is Successfully Established</b><br>";

				//Table Creation...
				$sql = "CREATE TABLE SPORTS(PLAYERS CHARACTER(40) PRIMARY KEY, TEST_RUNS INT NOT NULL, ODI_RUNS INT NOT NULL, T20I_RUNS INT NOT NULL);";
				
				//Check whether the given sql query 'sql' is successfully processed or Not...
				if(mysqli_query($connection, $sql)){
					echo "<br>The table — <b>SPORTS</b> is Successfully Created<br>";
				}
				else{
					echo "<br><b>ERROR! Unable to create the table — SPORTS</b><br><br>" . mysqli_error($connection);
				}

				mysqli_close($connection);
			?>
		</div>
	</body>
</html>