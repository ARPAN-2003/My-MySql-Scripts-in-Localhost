<!DOCTYPE html>
<html>
	<head>
		<style>
			div {
				font-size: 30px;
				padding: 40px;
				padding-left: 120px;
			}
			h2 {
				padding-left: 580px;
			}
			font {
				padding-left: 420px;
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
				
				echo "<br><h2><b>Connection is Successfully Established</b></h2><br><br><br>";

				//Table Display...
				$sql = "SELECT * FROM SPORTS;";

				$results = mysqli_query($connection, $sql);

				if(mysqli_num_rows($results) > 0){
					echo "<font>The Sports Table (with Total Individual Runs) will be : </font><br><br>";
					
					echo "<table border=4 cellspacing=1 cellpadding=30 align=center>
						<tr>
							<th>Player Name</th>
							<th>Test Runs</th>
							<th>ODI Runs</th>
							<th>T20I Runs</th>
							<th>Total Runs (Individual)</th>
						</tr>";
					
					while($table = mysqli_fetch_assoc($results)){
						echo "<tr>";
							echo "<td align=center>" . $table["PLAYERS"] . "</td>";
							echo "<td align=center>" . $table["TEST_RUNS"] . "</td>";
							echo "<td align=center>" . $table["ODI_RUNS"] . "</td>";
							echo "<td align=center>" . $table["T20I_RUNS"] . "</td>";
							
							$Total = $table["TEST_RUNS"] + $table["ODI_RUNS"] + $table["T20I_RUNS"];
							
							echo "<td align=center>" . $Total . "</td>";
						echo "</tr>";
					}
					
					echo "</table><br>";
				}
				else{
					echo "<br><br>";
					echo "<font><i>---No Row(s) have been selected---</i>";
				}

				mysqli_close($connection);
			?>
		</div>
	</body>
</html>