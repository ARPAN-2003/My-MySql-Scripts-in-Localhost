<!DOCTYPE html>
<html>
	<head>
		<style>
			* {
				box-sizing: border-box;
			}
			div {
				font-size: 35px;
				padding: 80px;
				padding-left: 100px;
				padding-top: 70px;
			}
			table {
				text-align: center;
				width: 75%;
				font-size: 20px;
			}
			font {
				padding-left: 150px;
				font-size: 22px;
			}
		</style>
	</head>
	
	<body>
		<div>
			<?php
				if($_SERVER["REQUEST_METHOD"] == "POST"){
					//The servername, username and password is taken from user...
					$servername="localhost:3308";
					$username="root";
					$password="";
					$database="STUDENT";
					
					//Database Connection...
					$connection = mysqli_connect($servername, $username, $password, $database);

					//Check whether there is any database connection error or Not...
					if(mysqli_connect_error()){
						echo "<br><b>Connection Failure</b></br>";
						exit();
					}
					
					echo "<font><b>Connection is Successfully Established</b></font><br><br><br>";
					
					$old_username = $_POST["old_username"];
					$old_password = $_POST["old_password"];
					$new_password = $_POST["new_password"];

					//Password Updation depending on old password...
					$sql = "UPDATE LOGIN SET PASSWORD = '$new_password' WHERE USERNAME = '$old_username' AND PASSWORD = '$old_password';";

					$results = mysqli_query($connection, $sql);
					
					if(mysqli_affected_rows($connection) > 0){
						echo "<font>---Your Password has been Changed succesfully---</font><br><br>";
						
						//Data Display...
						$sql1 = "SELECT * FROM LOGIN;";

						$results1 = mysqli_query($connection, $sql1);
						
						if(mysqli_num_rows($results1) > 0){
							echo "<font>So the Login Table will be : </font><br><br>";
							
							echo "<table border=4 cellspacing=1 cellpadding=18 align=center>
								<tr>
									<th>Roll Number</th>
									<th>Username</th>
									<th>Password</th>
								</tr>";
							
							while($table = mysqli_fetch_assoc($results1)){
								echo "<tr>";
									echo "<td>" . $table["ROLL"] . "</td>";
									echo "<td>" . $table["USERNAME"] . "</td>";
									echo "<td>" . $table["PASSWORD"] . "</td>";
								echo "</tr>";
							}
							
							echo "</table>";
						}
						else{
							echo "<br><br>";
							echo "<font><i>---No Row(s) have been selected---</i>";
						}
					}
					else{
						echo "<br><br>";
						echo "<font color=red>SORRY! You have entered Incorrect details... Please try again</font>";
					}
					
					mysqli_close($connection);
				}
			?>
			
			</table>
		</div>
	</body>
</html>