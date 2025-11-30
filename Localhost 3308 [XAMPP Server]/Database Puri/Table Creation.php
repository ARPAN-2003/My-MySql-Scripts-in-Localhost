<!DOCTYPE html>
<html>
	<head>
		<style>
			font {
				padding-top: 20px;
				padding-left: 250px;
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
			
			//Table Creation...
			$sql = "CREATE TABLE HOTEL(NAME CHARACTER(50) PRIMARY KEY, ADDRESS VARCHAR(100) NOT NULL, RATING FLOAT NOT NULL, CONTACT BIGINT(20) NOT NULL);";

			//Check whether the given sql query is successfully processed or Not...
			if(mysqli_query($connection, $sql)){
				echo "<br><br><br><font>The table - HOTEL is Successfully Created</font>";
			}
			else{
				echo "<br><br><br><font>ERROR! Unable to create the table - HOTEL </font>" . mysqli_connect_error();
			}
			
			//Connection is closed here...
			mysqli_close($connection);
		?>
	</body>
</html>