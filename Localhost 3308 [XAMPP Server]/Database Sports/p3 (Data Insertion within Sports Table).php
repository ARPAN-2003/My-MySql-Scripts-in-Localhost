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
				$database = "SPORTS";
				
				//Database Connection...
				$connection = mysqli_connect($servername, $username, $password, $database);

				//Check whether there is any database connection error or Not...
				if(mysqli_connect_error()){
					echo "<br><b>Connection Failure</b></br>";
					exit();
				}
				
				echo "<br><b>Connection is Successfully Established</b><br><br><br>";

				//Data Insertion...
				$sql = "INSERT INTO SPORTS (PLAYERS,TEST_RUNS,ODI_RUNS,T20I_RUNS) VALUES 
							('KL RAHUL',2755,2820,2265),
							('VIRAT KOHLI',8848,13848,4008),
							('SHREYAS IYER',707,2383,1104),
							('ROHIT SHARMA',3737,10709,3853),
							('RISHABH PANT',2271,865,987),
							('RAVINDRA JADEJA',2804,2756,480);";

				//Check whether the given sql query 'sql' is successfully processed or Not...
				if(mysqli_query($connection, $sql)){
					echo "<br>The given data within the table — <b>SPORTS</b> is Successfully Inserted";
				}
				else{
					echo "<br><b>ERROR! Unable to insert the given data within the table — SPORTS</b><br><br>" . mysqli_error($connection);
				}

				mysqli_close($connection);
			?>
		</div>
	</body>
</html>