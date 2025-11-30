<?php
	$servername = "localhost:3308";
	$username = "root";
	$password = "";
	$database = "Conference";
	
	$connection = mysqli_connect($servername, $username, $password, $database);
	
	if(mysqli_connect_error()){
		echo "Connection Failure";
		exit;
	}
	
	echo "Connection is successfully Established";
	
	$sql = "UPDATE Author SET affiliation = 'UNIVERSITY OF CALCUTTA' WHERE a_id = 'A001';";
	
	$results = mysqli_query($connection, $sql);
	
	if(mysqli_affected_rows($connection) > 0){
		$sql1 = "SELECT * FROM Author;";
		
		$results1 = mysqli_query($connection, $sql1);
		
		if(mysqli_num_rows($results1) > 0){
			echo "<table border=4 cellspacing=1 cellpadding=18 align=center>
				<tr>
					<th>Author Id</th>
					<th>Author Name</th>
					<th>Author's Email</th>
					<th>Author's Affiliation</th>
				</tr>";
			
			while($table = mysqli_fetch_assoc($results1)){
				echo "<tr>";
					echo "<td>" . $table["a_id"] . "</td>";
					echo "<td>" . $table["aname"] . "</td>";
					echo "<td>" . $table["email"] . "</td>";
					echo "<td>" . $table["affiliation"] . "</td>";
				echo "</tr>";
			}
		}
		else{
			echo "---No Rows have been selected---";
		}
	}
	else{
		echo "SORRY! Unable to update the data";
	}
	
	mysqli_close($connection);
?>