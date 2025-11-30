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
	
	echo "Connection is Successfully Established<br>";
	
	//Data Insertion...
	$sql = "INSERT INTO student VALUES ('S007','ABCDE','PQRST');";
	
	if(mysqli_query($connection, $sql)){
		echo "<br>Data in Table-Student is successfully inserted";
	}
	else{
		echo "<br>ERROR! Unable to insert the given data in the Table-Student";
	}
	
	mysqli_close($connection);
?>