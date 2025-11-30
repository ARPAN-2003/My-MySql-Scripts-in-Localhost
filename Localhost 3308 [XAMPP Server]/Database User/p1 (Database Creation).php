<!DOCTYPE html>
<html>
	<head>
		<style>
			div {
				font-size: 30px;
				padding: 40px;
				padding-left: 200px;
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
				
				//Database Connection...
				$connection = mysqli_connect($servername, $username, $password);

				//Check whether there is any database connection error or Not...
				if(mysqli_connect_error()){
					echo "<br><b>Connection Failure</b></br>";
					exit();
				}
				
				echo "<br><b>Connection is Successfully Established</b><br><br><br><br>";

				//Database Creation...
				$sql = "CREATE DATABASE USER;";

				//Check whether the given sql query is successfully processed or Not...
				if(mysqli_query($connection, $sql)){
					echo "<br>The database — <b>USER</b> is Successfully Created";
				}
				else{
					echo "<br><b>ERROR! Unable to create the database — USER</b><br><br>" . mysqli_error($connection);
				}
				
				mysqli_close($connection);
			?>
		</div>
	</body>
</html>