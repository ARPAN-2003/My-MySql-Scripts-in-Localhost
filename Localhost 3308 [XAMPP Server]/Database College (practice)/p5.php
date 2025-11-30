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
				<th>Teacher ID</th>
				<th>Teacher Name</th>
				<th>Address</th>
				<th>Department</th>
				<th>Contact</th>
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
			$sql = "SELECT TID,TNAME,TADDR,DEPTNAME,PHONE_NUM FROM TEACHER;";
			
			$results = mysqli_query($connection, $sql);
			
			if(mysqli_num_rows($results) > 0){
				// echo "<table>";
				// echo "<tr>";
				// echo "<th>Teacher ID</th>";
				// echo "<th>Teacher Name</th>";
				// echo "<th>Address</th>";
				// echo "<th>Department</th>";
				// echo "<th>Contact</th>";
				// echo "</tr>";
				echo "<font>The Resultant Table will be : </font><br><br><br>";
				//Print the result here...
				while($row = mysqli_fetch_assoc($results)){
					echo "<tr>";
						echo "<td>" . $row["TID"] . "</td>";
						echo "<td>" . $row["TNAME"] . "</td>";
						echo "<td>" . $row["TADDR"] . "</td>";
						echo "<td>" . $row["DEPTNAME"] . "</td>";
						echo "<td>" . $row["PHONE_NUM"] . "</td>";
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