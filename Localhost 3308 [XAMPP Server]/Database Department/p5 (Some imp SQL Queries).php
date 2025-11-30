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
				$database = "DEPARTMENT";
				
				//Database Connection...
				$connection = mysqli_connect($servername, $username, $password, $database);

				//Check whether there is any database connection error or Not...
				if(mysqli_connect_error()){
					echo "<br><b>Connection Failure</b></br>";
					exit();
				}
				
				echo "<br><b>Connection is Successfully Established</b><br><br>";

				//Table Display...
				$sql1 = "SELECT EMP_NO,EMP_NAME FROM EMPLOYEE WHERE EMP_NAME LIKE 'A%';";
				$sql2 = "SELECT DEPARTMENT.DEPT_NO,DEPT_NAME FROM DEPARTMENT WHERE DEPT_NO NOT IN (SELECT DEPT_NO FROM EMPLOYEE);";
				$sql3 = "SELECT EMP_NO,EMP_NAME,CITY,SALARY FROM EMPLOYEE WHERE SALARY IN (SELECT MAX(SALARY) FROM EMPLOYEE);";
				$sql4 = "SELECT DEPARTMENT.DEPT_NO,DEPT_NAME,COUNT(EMP_NO) AS \"TOTAL NO OF EMPLOYEE\" FROM DEPARTMENT LEFT JOIN EMPLOYEE ON DEPARTMENT.DEPT_NO = EMPLOYEE.DEPT_NO GROUP BY DEPT_NO ORDER BY DEPT_NO ASC;";
				$sql5 = "SELECT DEPARTMENT.DEPT_NO,DEPT_NAME,COUNT(EMP_NO) AS \"TOTAL NO OF EMPLOYEE\" FROM DEPARTMENT LEFT JOIN EMPLOYEE ON DEPARTMENT.DEPT_NO = EMPLOYEE.DEPT_NO GROUP BY DEPT_NO HAVING COUNT(EMP_NO) > 2 ORDER BY DEPT_NO ASC;";

				$results1 = mysqli_query($connection, $sql1);
				$results2 = mysqli_query($connection, $sql2);
				$results3 = mysqli_query($connection, $sql3);
				$results4 = mysqli_query($connection, $sql4);
				$results5 = mysqli_query($connection, $sql5);
				
				if(mysqli_num_rows($results1) > 0){
					echo "<br><font>The Employees whose name starts with 'A' (using <b>LIKE</b> operator): </font><br><br>";
					
					echo "<table border=4 cellspacing=1 cellpadding=18 align=center>
						<tr>
							<th>Employee No</th>
							<th>Employee Name</th>
						</tr>";
					
					while($table = mysqli_fetch_assoc($results1)){
						echo "<tr>";
							echo "<td align=center>" . $table["EMP_NO"] . "</td>";
							echo "<td align=center>" . $table["EMP_NAME"] . "</td>";
						echo "</tr>";
					}
					
					echo "</table><br>";
				}
				else{
					echo "<br><br>";
					echo "<font><i>---No Row(s) have been selected---</i>";
				}
				
				if(mysqli_num_rows($results2) > 0){
					echo "<br><font>The Department(s) which don't have any employee (using <b>NOT IN</b> operator): </font><br><br>";
					
					echo "<table border=4 cellspacing=1 cellpadding=18 align=center>
						<tr>
							<th>Department No</th>
							<th>Department Name</th>
						</tr>";
					
					while($table = mysqli_fetch_assoc($results2)){
						echo "<tr>";
							echo "<td align=center>" . $table["DEPT_NO"] . "</td>";
							echo "<td align=center>" . $table["DEPT_NAME"] . "</td>";
						echo "</tr>";
					}
					
					echo "</table>";
				}
				else{
					echo "<br><br>";
					echo "<font><i>---No Row(s) have been selected---</i>";
				}
				
				if(mysqli_num_rows($results3) > 0){
					echo "<br><br><font>The Employee(s) who have maximum salary (using Aggregate function <b>MAX</b>): </font><br><br>";
					
					echo "<table border=4 cellspacing=1 cellpadding=18 align=center>
						<tr>
							<th>Employee No</th>
							<th>Employee Name</th>
							<th>City</th>
							<th>Salary</th>
						</tr>";
					
					while($table = mysqli_fetch_assoc($results3)){
						echo "<tr>";
							echo "<td align=center>" . $table["EMP_NO"] . "</td>";
							echo "<td align=center>" . $table["EMP_NAME"] . "</td>";
							echo "<td align=center>" . $table["CITY"] . "</td>";
							echo "<td align=center>" . $table["SALARY"] . "</td>";
						echo "</tr>";
					}
					
					echo "</table>";
				}
				else{
					echo "<br><br>";
					echo "<font><i>---No Row(s) have been selected---</i>";
				}
				
				if(mysqli_num_rows($results4) > 0){
					echo "<br><font>The Total number of employees present in each Department (using <b>GROUP BY</b> and <b>ORDER BY</b> clauses): </font><br><br>";
					
					echo "<table border=4 cellspacing=1 cellpadding=18 align=center>
						<tr>
							<th>Department No</th>
							<th>Total Number of Employee</th>
						</tr>";
					
					while($table = mysqli_fetch_assoc($results4)){
						echo "<tr>";
							echo "<td align=center>" . $table["DEPT_NO"] . "</td>";
							echo "<td align=center>" . $table["TOTAL NO OF EMPLOYEE"] . "</td>";
						echo "</tr>";
					}
					
					echo "</table>";
				}
				else{
					echo "<br><br>";
					echo "<font><i>---No Row(s) have been selected---</i>";
				}
				
				if(mysqli_num_rows($results5) > 0){
					echo "<br><font>The Department(s) which have maximum employee (using <b>GROUP BY</b>, <b>HAVING</b> and <b>ORDER BY</b> clauses): </font><br><br>";
					
					echo "<table border=4 cellspacing=1 cellpadding=18 align=center>
						<tr>
							<th>Department No</th>
							<th>Total Number of Employee</th>
						</tr>";
					
					while($table = mysqli_fetch_assoc($results5)){
						echo "<tr>";
							echo "<td align=center>" . $table["DEPT_NO"] . "</td>";
							echo "<td align=center>" . $table["TOTAL NO OF EMPLOYEE"] . "</td>";
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