<?php
	$servername = "localhost:3308";
	$username = "root";
	$password = "";
	$database = "Conference";
	
	$connection = mysqli_connect($servername, $username, $password, $database);
	
	if(mysqli_connect_error()){
		echo "connection Failure";
		exit;
	}
	
	echo "Connection is successfully Established";
	
	$a_id = $_POST["a_id"];
	$aname = $_POST["aname"];
	$email = $_POST["email"];
	$affiliation = $_POST["affiliation"];
	
	$sql = "INSERT INTO Author (a_id,aname,email,affiliation) VALUES ('$a_id', '$aname', '$email', '$affiliation');";
	
	if(mysqli_query($connection, $sql)){
		echo "Data is successfully inserted";
	}
	else{
		echo "Data is unable to insert into the table" . mysqli_error($connection);
	}
	
	mysqli_close($connection);
?>