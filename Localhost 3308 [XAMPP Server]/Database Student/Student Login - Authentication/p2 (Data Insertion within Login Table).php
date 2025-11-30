<!DOCTYPE html>
<html>
	<head>
		<style>
			div {
				font-size: 30px;
				padding-left: 150px;
				padding-top: 50px;
			}
			font {
				padding-left: 160px;
				font-size: 32px;
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

				//Data Insertion...
				$sql = "INSERT INTO LOGIN VALUES (118,'saptarshidey94','sapta@94');";
				$sql.= "INSERT INTO LOGIN VALUES (275,'titiksha2000','deartitu-2000');";
				$sql.= "INSERT INTO LOGIN VALUES (78,'sumitsen','sumit_1999');";
				$sql.= "INSERT INTO LOGIN VALUES (222,'tarun1996','tarun-071196');";
				$sql.= "INSERT INTO LOGIN VALUES (121,'natasha','natashadear@2003');";
				
				//Check whether the given sql query is successfully processed or Not...
				if(mysqli_multi_query($connection, $sql)){
					echo "<br><font>The given data within the table — <b>Login</b> is Successfully Inserted";
				}
				else{
					echo "<br><font><b>ERROR! Unable to insert the given data within the table — Login</b></font><br><br>" . mysqli_error($connection);
				}
				
				mysqli_close($connection);
			?>
		</div>
	</body>
</html>