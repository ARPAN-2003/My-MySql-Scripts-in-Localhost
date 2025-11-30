<!DOCTYPE html>
<html>
	<head>
		<style>
			div {
				font-size: 30px;
				padding: 40px;
				padding-left: 200px;
			}
			font {
				font-size: 26px;
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
				$database = "EMPLOYEE";
				
				//Database Connection...
				$connection = mysqli_connect($servername, $username, $password, $database);

				//Check whether there is any database connection error or Not...
				if(mysqli_connect_error()){
					echo "<br><b>Connection Failure</b></br>";
					exit();
				}
				
				echo "<br><font><b>Connection is Successfully Established</b></font><br>";

				//Table Display...
				$sql = "SELECT * FROM SALARY;";

				$results = mysqli_query($connection, $sql);
					
				if(mysqli_num_rows($results) > 0){
					echo "<br><br><font>The Salary Table will be : </font><br><br>";
					
					echo "<table border=4 cellspacing=1 cellpadding=18 align=center>
						<tr>
							<th>Employee Name</th>
							<th>Basic Pay</th>
							<th align=center>HRA</th>
							<th align=center>DA</th>
							<th>Professional Tax</th>
							<th align=center>Net Salary</th>
						</tr>";
					
					while($table = mysqli_fetch_assoc($results)){
						echo "<tr>";
							echo "<td align=center>" . $table["EMPNAME"] . "</td>";
							echo "<td align=center>" . $table["BASIC_PAY"] . "</td>";
							echo "<td align=center>" . $table["HRA"] . "</td>";
							echo "<td align=center>" . $table["DA"] . "</td>";
							echo "<td align=center>" . $table["PROFESSIONAL_TAX"] . "</td>";
							
							$NET_SALARY = $table["BASIC_PAY"] + $table["HRA"] + $table["DA"] + $table["PROFESSIONAL_TAX"];
							
							echo "<td align=center>" . $NET_SALARY . "</td>";
							
						echo "</tr>";
					}
					
					echo "</table>";
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