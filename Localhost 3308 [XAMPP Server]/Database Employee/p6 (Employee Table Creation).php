<!DOCTYPE html>
<html>
	<head>
		<style>
			div {
				font-size: 30px;
				padding: 40px;
				padding-left: 240px;
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
				$sql = "CREATE TABLE EMPLOYEE(EMPNAME CHARACTER(40) PRIMARY KEY, ADDRESS VARCHAR(50) NOT NULL, PHONE_NUMBER BIGINT(11) NOT NULL, SALARY FLOAT NOT NULL, CATEGORY CHARACTER(10) NOT NULL, LANGUAGES VARCHAR(50) NOT NULL, FOREIGN KEY(EMPNAME) REFERENCES SALARY(EMPNAME));";

				//Check whether the given sql query is successfully processed or Not...
				if(mysqli_query($connection, $sql)){
					echo "<br>The table — <b>EMPLOYEE</b> is Successfully Created";
				}
				else{
					echo "<br><b>ERROR! Unable to create the table — EMPLOYEE</b><br><br>" . mysqli_error($connection);
				}
				
				mysqli_close($connection);
			?>
		</div>
	</body>
</html>