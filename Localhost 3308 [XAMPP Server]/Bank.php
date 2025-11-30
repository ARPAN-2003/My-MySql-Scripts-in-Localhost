<!DOCTYPE html>
<html>
	<head>
		<style>
			div {
				font-size: 28px;
			}
			h2{
				font-size: 25px;
				padding-left: 320px;
			}
			font {
				font-size: 25px;
				padding-left: 180px;
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
				$database = "BANK";
				
				//Database Connection...
				$connection = mysqli_connect($servername, $username, $password, $database);

				//Check whether there is any database connection error or Not...
				if(mysqli_connect_error()){
					echo "<br><font><b>Connection Failure</b></font></br>";
					exit();
				}
				
				echo "<br><h2><b>Connection is Successfully Established</b></h2><br>";

				//Table Display...
				$sql = "SELECT CITY,COUNT(CID) AS \"TOTAL COUNT\" FROM BANK,ACCOUNT WHERE BANK.BID = ACCOUNT.BID GROUP BY BANK.BID ORDER BY COUNT(CID) DESC LIMIT 1;";

				$results = mysqli_query($connection, $sql);

				if(mysqli_num_rows($results) > 0){
					echo "<br><br><font>The name of the City where the Maximum number of Customers reside : </font><br><br>";

					echo "<table border=4 cellspacing=1 cellpadding=20 align=center>
						<tr>
							<th>City</th>
							<th>Total Customers</th>
						</tr>";
					
					while($table = mysqli_fetch_assoc($results)){
						echo "<tr>";
							echo "<td align=center>" . $table["CITY"] . "</td>";
							echo "<td align=center>" . $table["TOTAL COUNT"] . "</td>";
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