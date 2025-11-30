<!DOCTYPE html>
<html>
	<head>
		<style>
			div {
				font-size: 30px;
				padding: 40px;
				padding-left: 160px;
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
				
				echo "<br><font><b>Connection is Successfully Established</b></font><br><br><br>";

				//Data Insertion...
				$sql = "INSERT INTO SALARY (EMPNAME,BASIC_PAY,HRA,DA,PROFESSIONAL_TAX) VALUES 
							('RAMESH HALDER',18000.00,NULL,NULL,NULL),
							('RAJESH SARKAR',25000.00,NULL,NULL,NULL),
							('PIYALI SAMANTA',21000.00,NULL,NULL,NULL),
							('PIYUSH GHOSH',16000.00,NULL,NULL,NULL),
							('ANUPAMA DAS',24000.00,NULL,NULL,NULL);";

				//Check whether the given sql query is successfully processed or Not...
				if(mysqli_query($connection, $sql)){
					echo "<br><font>The given data within the table — <b>SALARY</b> is Successfully Inserted</font>";
				}
				else{
					echo "<br><b>ERROR! Unable to insert the given data within the table — SALARY</b><br><br>" . mysqli_error($connection);
				}
				
				mysqli_close($connection);
			?>
		</div>
	</body>
</html>