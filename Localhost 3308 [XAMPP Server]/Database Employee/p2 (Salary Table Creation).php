<!DOCTYPE html>
<html>
	<head>
		<style>
			div {
				font-size: 30px;
				padding: 40px;
				padding-left: 200px;
			}
			font {
				font-size: 28px;
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
				
				echo "<br><b>Connection is Successfully Established</b><br>";

				//Table Creation...
				$sql = "CREATE TABLE SALARY(EMPNAME CHARACTER(40) PRIMARY KEY, BASIC_PAY FLOAT NOT NULL, HRA FLOAT, DA FLOAT, PROFESSIONAL_TAX FLOAT);";

				//Check whether the given sql query is successfully processed or Not...
				if(mysqli_query($connection, $sql)){
					echo "<br><b>The table — SALARY is Successfully Created</b>";
				}
				else{
					echo "<br><b>ERROR! Unable to create the table — SALARY</b><br><br>" . mysqli_error($connection);
				}
				
				mysqli_close($connection);
			?>
		</div>
	</body>
</html>