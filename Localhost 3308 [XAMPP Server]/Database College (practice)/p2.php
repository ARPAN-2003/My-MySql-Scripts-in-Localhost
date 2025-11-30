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
	$sql = "INSERT INTO teacher VALUES ('T007','DR. KALPANA SANTRA (MAJI)','KOLKATA','PHYSICS');";
	$sql.= "INSERT INTO teacher VALUES ('T008','DEBASHISH KUNDU','SEALDAH','COMPUTER SCIENCE');";
	
	if(mysqli_multi_query($connection, $sql)){
		echo "<br>Data in Table-Teacher is successfully inserted";
	}
	else{
		echo "<br>ERROR! Unable to insert the given data in the Table-Teacher" . mysqli_error($connection);
	}
	
	mysqli_close($connection);
?>