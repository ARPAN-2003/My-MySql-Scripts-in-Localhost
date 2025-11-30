<!DOCTYPE html>
<html>
	<head>
		<style>
			div {
				font-size: 28px;
			}
			font {
				font-size: 25px;
				padding-left: 350px;
			}
			table {
				font-size: 20px;
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
				$database = "PLAYER";
				
				//Database Connection...
				$connection = mysqli_connect($servername, $username, $password, $database);

				//Check whether there is any database connection error or Not...
				if(mysqli_connect_error()){
					echo "<br><font><b>Connection Failure</b></font></br>";
					exit();
				}
				
				echo "<br><font><b>Connection is Successfully Established</b></font><br>";

				//Table Display...
				$sql = "SELECT PLAYER.PID,PNAME FROM PLAYER,CRICKET_MATCH WHERE PLAYER.PID = CRICKET_MATCH.PID AND RUNS_SCORED > 20 AND WICKETS_TAKEN >= 2 ORDER BY PID;";

				$results = mysqli_query($connection, $sql);

				if(mysqli_num_rows($results) > 0){
					echo "<br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The Players details who has scored more than 20 runs and atleast 2 wickets : <br><br>";

					echo "<table border=4 cellspacing=1 cellpadding=20 align=center>
						<tr>
							<th>Player Id</th>
							<th>Player Name</th>
						</tr>";
					
					while($table = mysqli_fetch_assoc($results)){
						echo "<tr>";
							echo "<td align=center>" . $table["PID"] . "</td>";
							echo "<td align=center>" . $table["PNAME"] . "</td>";
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