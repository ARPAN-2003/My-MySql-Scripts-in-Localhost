<!DOCTYPE html>
<html>
	<head>
		<style>
			table {
				text-align: center;
				width: 75%;
				font-size: 15px;
			}
			body {
				padding-top: 80px;
			}
			font {
				padding-left: 200px;
				font-size: 50px;
			}
		</style>
	</head>
	
	<body>
		<table border="1" cellspacing="1" cellpadding="10" align="center">
			<tr>
				<th>Roll Number</th>
				<th>Student Name</th>
				<th>Subject (learned)</th>
			</tr>
		<?php
			$servername = "localhost:3308";
			$username = "root";
			$password = "";
			$database = "college";
			
			//Database Connection...
			$connection = mysqli_connect($servername, $username, $password, $database);
			
			if(mysqli_connect_error()){
				echo "Connection Failure";
				exit;
			}
			
			// echo "Connection is Successfully Established<br><br>";
			
			//Data Display...
			$sql = "SELECT STUDENT.ROLL,SNAME,STITLE FROM STUDENT,TAUGHTBY,SUBJECT WHERE STUDENT.ROLL=TAUGHTBY.ROLL AND TAUGHTBY.SNUM=SUBJECT.SNUM AND STITLE='DBMS';";
			
			$results = mysqli_query($connection, $sql);
			
			if(mysqli_num_rows($results) > 0){
				echo "<font>The Resultant Table will be : </font><br><br><br>";

				//Print the result here...
				while($row = mysqli_fetch_assoc($results)){
					echo "<tr>";
						echo "<td>" . $row["ROLL"] . "</td>";
						echo "<td>" . $row["SNAME"] . "</td>";
						echo "<td>" . $row["STITLE"] . "</td>";
					echo "</tr>";
				}
			}
			else{
				echo "No Rows have been selected";
			}
			
			mysqli_close($connection);
		?>
	</body>
</html>