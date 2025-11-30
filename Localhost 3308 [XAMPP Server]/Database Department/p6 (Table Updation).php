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
				
				echo "<br><font><b>Connection is Successfully Established</b></font><br><br><br>";

				//Table Update...
				$sql = "UPDATE EMPLOYEE SET CITY = 'BANGALORE' WHERE EMP_NO = 'EMP008';";
				$sql.= "UPDATE EMPLOYEE SET SALARY = 22000 WHERE SALARY = 20000 AND CITY = 'HYDERABAD';";

				//Check whether the given sql query is successfully processed or Not...
				if(mysqli_multi_query($connection, $sql)){
					echo "<br><font>The table — <b>DEPARTMENT</b> is Successfully Updated with the given data</font>";
				}
				else{
					echo "<br><b>ERROR! Unable to update the table — DEPARTMENT with the given data</b><br><br>" . mysqli_error($connection);
				}
				
				mysqli_close($connection);
			?>
		</div>
	</body>
</html>