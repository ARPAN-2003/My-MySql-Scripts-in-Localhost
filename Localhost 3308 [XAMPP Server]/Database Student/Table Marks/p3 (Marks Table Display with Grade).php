<!DOCTYPE html>
<html>
	<head>
		<style>
			div {
				font-size: 30px;
				padding: 40px;
				padding-left: 100px;
			}
			h2 {
				padding-left: 560px;
			}
			font {
				padding-left: 180px;
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
				$database = "STUDENT";
				
				//Database Connection...
				$connection = mysqli_connect($servername, $username, $password, $database);

				//Check whether there is any database connection error or Not...
				if(mysqli_connect_error()){
					echo "<br><b>Connection Failure</b></br>";
					exit();
				}
				
				echo "<br><h2><b>Connection is Successfully Established</b></h2><br><br>";

				//Table Display...
				$sql = "SELECT ROLL,NAME,MATH_MARKS,PHYS_MARKS,COMP_SC_MARKS FROM MARKS;";

				$results = mysqli_query($connection, $sql);

				if(mysqli_num_rows($results) > 0){
					echo "<br><font>The Marks Table (with their Grades) will be : </font><br><br>";
					
					echo "<table border=4 cellspacing=1 cellpadding=18 align=center>
						<tr>
							<th>Student Roll</th>
							<th>Student Name</th>
							<th>Mathematics Marks</th>
							<th>Physics Marks</th>
							<th>Computer Science Marks</th>
							<th>Average Marks</th>
							<th>Grade</th>
						</tr>";
					
					while($table = mysqli_fetch_assoc($results)){
						echo "<tr>";
							echo "<td align=center>" . $table["ROLL"] . "</td>";
							echo "<td align=center>" . $table["NAME"] . "</td>";
							echo "<td align=center>" . $table["MATH_MARKS"] . "</td>";
							echo "<td align=center>" . $table["PHYS_MARKS"] . "</td>";
							echo "<td align=center>" . $table["COMP_SC_MARKS"] . "</td>";
							
							$AVERAGE = round((($table["MATH_MARKS"] + $table["PHYS_MARKS"] + $table["COMP_SC_MARKS"]) / 3.0),2);
							
							echo "<td align=center>" . $AVERAGE . "</td>";
							
							if($AVERAGE >= 0 && $AVERAGE < 40){
								echo "<td align=center> Grade — D </td>";
							}
							else if($AVERAGE >= 40 && $AVERAGE < 60){
								echo "<td align=center> Grade — C </td>";
							}
							else if($AVERAGE >= 60 && $AVERAGE < 80){
								echo "<td align=center> Grade — B </td>";
							}
							else{
								echo "<td align=center> Grade — A </td>";
							}
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