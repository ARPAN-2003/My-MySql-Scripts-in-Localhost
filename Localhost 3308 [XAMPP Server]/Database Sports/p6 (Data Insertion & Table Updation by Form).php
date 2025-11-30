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
				if($_SERVER["REQUEST_METHOD"] == "POST"){
					$PLAYERS = $_POST["name"];
					$TEST_RUNS = $_POST["test"];
					$ODI_RUNS = $_POST["odi"];
					$T20I_RUNS = $_POST["t20i"];

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
					
					echo "<br><h2><b>Connection is Successfully Established</b></h2><br><br>";
					
					if(isset($_POST["insert"])){
						//Data Insertion from the Form...
						$sql = "INSERT INTO SPORTS (PLAYERS,TEST_RUNS,ODI_RUNS,T20I_RUNS) VALUES ('$PLAYERS','$TEST_RUNS','$ODI_RUNS','$T20I_RUNS');";
						
						//Check whether the given sql query is successfully processed or Not...
						if(mysqli_query($connection, $sql)){
							echo "<br><font>The given data within the table — <b>SPORTS</b> is Successfully Inserted</font><br><br>";
							
							//Data Display...
							$sql1 = "SELECT * FROM SPORTS;";

							$results1 = mysqli_query($connection, $sql1);
							
							if(mysqli_num_rows($results1) > 0){
								echo "<br><font>So the Sports Table will be : </font><br><br>";
								
								echo "<table border=4 cellspacing=1 cellpadding=26 align=center>
									<tr>
										<th>Player Name</th>
										<th>Test Runs</th>
										<th>ODI Runs</th>
										<th>T20I Runs</th>
										<th>Total Runs</th>
									</tr>";
								
								while($table = mysqli_fetch_assoc($results1)){
									echo "<tr>";
										echo "<td align=center>" . $table["PLAYERS"] . "</td>";
										echo "<td align=center>" . $table["TEST_RUNS"] . "</td>";
										echo "<td align=center>" . $table["ODI_RUNS"] . "</td>";
										echo "<td align=center>" . $table["T20I_RUNS"] . "</td>";
										
										$TOTAL = $table["TEST_RUNS"] + $table["ODI_RUNS"] + $table["T20I_RUNS"];
										
										echo "<td align=center>" . $TOTAL . "</td>";
									echo "</tr>";
								}
								
								echo "</table>";
							}
						}
						else{
							echo "<br><b>ERROR! Unable to insert the given data within the table — SPORTS</b><br><br>" . mysqli_error($connection);
						}
					}
					
					if(isset($_POST["update"])){
						//Table Updation from the Form...
						$sql = "UPDATE SPORTS SET TEST_RUNS='$TEST_RUNS' WHERE PLAYERS='$PLAYERS';";
						$sql.= "UPDATE SPORTS SET ODI_RUNS='$ODI_RUNS' WHERE PLAYERS='$PLAYERS';";
						$sql.= "UPDATE SPORTS SET T20I_RUNS='$T20I_RUNS' WHERE PLAYERS='$PLAYERS';";
						
						$results = mysqli_multi_query($connection, $sql);
						
						if(mysqli_affected_rows($connection) > 0){
							echo "<br><br><font>The table — <b>SPORTS</b> is Successfully Updated with the data fetched from the Form</font><br><br>";
						}
						else{
							echo "<br><br>";
							echo "<font color=red>SORRY! Unable to update the table — <b>SPORTS</b> with the given data... Please try again</font>";
						}
					}

					mysqli_close($connection);
				}
			?>
		</div>
	</body>
</html>