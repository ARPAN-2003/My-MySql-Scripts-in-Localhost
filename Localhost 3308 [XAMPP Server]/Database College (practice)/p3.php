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
	
	//Data Updation...
	$sql = "ALTER TABLE TEACHER ADD PHONE_NUM DOUBLE;";
	
	if(mysqli_query($connection, $sql)){
		echo "<br>The Table-Teacher is now successfully updated";
	}
	else{
		echo "<br>ERROR! Unable to update the given data in the Table-Teacher" . mysqli_error($connection);
	}
	
	mysqli_close($connection);
?>