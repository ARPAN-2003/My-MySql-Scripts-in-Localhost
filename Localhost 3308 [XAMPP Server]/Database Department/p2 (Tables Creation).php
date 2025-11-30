<!DOCTYPE html>
<html>
	<head>
		<style>
			div {
				font-size: 30px;
				padding: 40px;
				padding-left: 220px;
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
				$database = "DEPARTMENT";
				
				//Database Connection...
				$connection = mysqli_connect($servername, $username, $password, $database);

				//Check whether there is any database connection error or Not...
				if(mysqli_connect_error()){
					echo "<br><b>Connection Failure</b></br>";
					exit();
				}
				
				echo "<br><b>Connection is Successfully Established</b><br><br><br>";

				//Table Creation...
				$sql = "CREATE TABLE DEPARTMENT(DEPT_NO VARCHAR(10) PRIMARY KEY, DEPT_NAME CHARACTER(40) NOT NULL);";
				$sql1 = "CREATE TABLE EMPLOYEE(EMP_NO VARCHAR(10) PRIMARY KEY, EMP_NAME CHARACTER(40) NOT NULL, CITY CHARACTER(40) NOT NULL, SALARY FLOAT NOT NULL, JOIN_DATE DATE NOT NULL, DEPT_NO VARCHAR(10) NOT NULL, FOREIGN KEY(DEPT_NO) REFERENCES DEPARTMENT(DEPT_NO), CHECK(JOIN_DATE >= '2016-01-01'));";

				//Check whether the given sql query 'sql' is successfully processed or Not...
				if(mysqli_query($connection, $sql)){
					echo "<br>The table — <b>DEPARTMENT</b> is Successfully Created<br>";
				}
				else{
					echo "<br><b>ERROR! Unable to create the table — DEPARTMENT</b><br><br>" . mysqli_error($connection);
				}
				
				//Check whether the given sql query 'sql1' is successfully processed or Not...
				if(mysqli_query($connection, $sql1)){
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