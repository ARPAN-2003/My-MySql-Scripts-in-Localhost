<!DOCTYPE html>
<html>
	<head>
		<style>
			div {
				font-size: 30px;
				padding: 40px;
				padding-left: 160px;
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

				//Data Deletion...
				$sql = "DELETE FROM EMPLOYEE WHERE EMP_NO = 'EMP002';";
				$sql.= "DELETE FROM EMPLOYEE WHERE SALARY = 21000;";

				//Check whether the given sql query is successfully processed or Not...
				if(mysqli_multi_query($connection, $sql)){
					echo "<br><font>The given data from the table - <b>EMPLOYEE</b> is Successfully Deleted</font>";
				}
				else{
					echo "<br><b>ERROR! Unable to delete the data from the table — EMPLOYEE</b><br><br>" . mysqli_error($connection);
				}
				
				mysqli_close($connection);
			?>
		</div>
	</body>
</html>