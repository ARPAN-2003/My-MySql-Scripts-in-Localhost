<!DOCTYPE html>
<html>
	<head>
		<style>
			font {
				padding-top: 20px;
				padding-left: 200px;
				font-size: 28px;
			}
		</style>
	</head>
	
	<body>
		<?php
			//The servername, username and password is taken from user...
			$servername = "localhost:3308";
			$username = "root";
			$password = "";
			$database = "PURI";
			
			//Database Connection...
			$connection = mysqli_connect($servername, $username, $password, $database);

			//Check whether there is any database connection error or Not...
			if(mysqli_connect_error()){
				echo "Connection Failure";
				exit();
			}
			
			echo "<br><br><font><b>Connection is Successfully Built/Established</b></font><br><br><br>";
			
			//Data Insertion...
			$sql = "INSERT INTO HOTEL (NAME,ADDRESS,RATING,CONTACT) VALUES 
						('HOTEL GOLDEN SAND','GOUR BADSAHI, PURI, ODISHA - 752001',3.3,09861905748),
						('HOTEL SUV PALACE','NEW MARINE DRIVE ROAD, SEA BEACH, PURI, ODISHA - 752001',3.8,08895345485),
						('HOTEL DIAMOND PALACE','NEW MARINE DRIVE ROAD, GOUR BADSAHI, PURI, ODISHA - 752001',3.7,06752230300),
						('HOTEL NEW SEA HAWK','NEW MARINE DRIVE, SWARGADWAR, PURI, ODISHA - 752001',4.0,06752231500),
						('HOTEL PULIN PURI','SWARGADWAR, PURI, ODISHA - 752001',3.9,06752222360);";

			//Check whether the given sql query is successfully processed or Not...
			if(mysqli_query($connection, $sql)){
				echo "<br><br><br><font>The given data within the table - HOTEL is Successfully Inserted</font>";
			}
			else{
				echo "<br><br><br><font>ERROR! Unable to insert the given data within the table - HOTEL </font>" . mysqli_connect_error();
			}
			
			//Connection is closed here...
			mysqli_close($connection);
		?>
	</body>
</html>