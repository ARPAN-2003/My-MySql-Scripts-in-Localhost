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
			font {
				padding-left: 150px;
				font-size: 50px;
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
					echo "<br><font><b>Connection Failure</b></font></br>";
					exit();
				}
				
				echo "<font><b>Connection is Successfully Established</b></font><br><br><br>";

				//Table Creation...
				$sql = "CREATE TABLE STUDENT(
							NAME CHARACTER(40) NOT NULL,
							ROLL INT PRIMARY KEY,
							CITY CHARACTER(20) NOT NULL,
							EMAIL VARCHAR(50) NOT NULL,
							DATE_OF_BIRTH DATE NOT NULL
						);";

				//Check whether the given sql query is successfully processed or Not...
				if(mysqli_query($connection, $sql)){
					echo "<br><font>The table — <b>Student</b> is Successfully Created</font>";
				}
				else{
					echo "<br><font><b>ERROR! Unable to create the table — Student</b></font><br><br>" . mysqli_error($connection);
				}
				
				mysqli_close($connection);
			?>
		</div>
	</body>
</html>