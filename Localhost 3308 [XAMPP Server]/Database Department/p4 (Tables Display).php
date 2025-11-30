<!DOCTYPE html>
<html>
	<head>
		<style>
			div {
				font-size: 30px;
				padding-left: 100px;
			}
			table {
				font-size: 12px;
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
				$database = "DEPARTMENT";
				
				//Database Connection...
				$connection = mysqli_connect($servername, $username, $password, $database);

				//Check whether there is any database connection error or Not...
				if(mysqli_connect_error()){
					echo "<b>Connection Failure</b></br>";
					exit();
				}
				
				echo "<br><b>Connection is Successfully Established</b><br><br>";

				//Table Display...
				$sql = "SELECT * FROM DEPARTMENT;";
				$sql1 = "SELECT * FROM EMPLOYEE;";

				$results = mysqli_query($connection, $sql);
				$results1 = mysqli_query($connection, $sql1);
				
				if(mysqli_num_rows($results) > 0){
					echo "<font>The Department Table will be : </font>";
					
					echo "<table border=4 cellspacing=1 cellpadding=18 align=center>
						<tr>
							<th align=center>Department No</th>
							<th align=center>Department Name</th>
						</tr>";
					
					while($table = mysqli_fetch_assoc($results)){
						echo "<tr>";
							echo "<td align=center>" . $table["DEPT_NO"] . "</td>";
							echo "<td align=center><b>" . $table["DEPT_NAME"] . "</b></td>";
						echo "</tr>";
					}
					
					echo "</table>";
				}
				else{
					echo "<br><br>";
					echo "<font><i>---No Row(s) have been selected---</i>";
				}
				
				if(mysqli_num_rows($results1) > 0){
					echo "<font>The Employee Table will be : </font>";
					
					echo "<table border=4 cellspacing=1 cellpadding=18 align=center>
						<tr>
							<th align=center>Employee No</th>
							<th align=center>Employee Name</th>
							<th align=center>City</th>
							<th align=center>Salary</th>
							<th align=center>Joining Date</th>
							<th align=center>Department No</th>
						</tr>";
					
					while($table = mysqli_fetch_assoc($results1)){
						echo "<tr>";
							echo "<td align=center>" . $table["EMP_NO"] . "</td>";
							echo "<td align=center><b>" . $table["EMP_NAME"] . "</b></td>";
							echo "<td align=center>" . $table["CITY"] . "</td>";
							echo "<td align=center><b>" . $table["SALARY"] . "</b></td>";
							echo "<td align=center>" . $table["JOIN_DATE"] . "</td>";
							echo "<td align=center>" . $table["DEPT_NO"] . "</td>";
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