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
			
			//Table Display...
			$sql = "SELECT * FROM HOTEL;";

			$results = mysqli_query($connection, $sql);

			//Check whether the number of results is more than 0 or Not...
			if(mysqli_num_rows($results) > 0){
				echo "<br><br><br><font>The Table - HOTEL will be : </font><br><br>";
				
				echo "<table border=4 cellspacing=1 cellpadding=18 align=center>
					<tr>
						<th>Hotel Name</th>
						<th>Address</th>
						<th>Rating</th>
						<th>Contact</th>
					</tr>";
				
				while($table = mysqli_fetch_assoc($results)){
					echo "<tr>";
						echo "<td>" . $table["NAME"] . "</td>";
						echo "<td>" . $table["ADDRESS"] . "</td>";
						echo "<td>" . $table["RATING"] . "</td>";
						echo "<td>" . $table["CONTACT"] . "</td>";
					echo "</tr>";
				}
			}
			else{
				echo "<i>---No Row(s) have been selected---</i>";
			}
			
			//Connection is closed here...
			mysqli_close($connection);
		?>
	</body>
</html>