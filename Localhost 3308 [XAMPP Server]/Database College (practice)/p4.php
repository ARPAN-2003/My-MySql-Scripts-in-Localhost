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
	
	//Data Insertion/Updation...
	$sql = "UPDATE teacher SET PHONE_NUM = 9748641572 WHERE TID = 'T001';";
	$sql.= "UPDATE teacher SET PHONE_NUM = 7003504894 WHERE TID = 'T002';";
	$sql.= "UPDATE teacher SET PHONE_NUM = 9830735593 WHERE TID = 'T003';";
	$sql.= "UPDATE teacher SET PHONE_NUM = 8777806928 WHERE TID = 'T004';";
	$sql.= "UPDATE teacher SET PHONE_NUM = 9830509029 WHERE TID = 'T005';";
	$sql.= "UPDATE teacher SET PHONE_NUM = 7595880408 WHERE TID = 'T006';";
	$sql.= "UPDATE teacher SET PHONE_NUM = 9674545911 WHERE TID = 'T007';";
	$sql.= "UPDATE teacher SET PHONE_NUM = 9830091576 WHERE TID = 'T008';";
	
	if(mysqli_multi_query($connection, $sql)){
		echo "<br>Data in Table-Teacher is successfully updated";
	}
	else{
		echo "<br>ERROR! Unable to update the given data in the Table-Teacher" . mysqli_error($connection);
	}
	
	mysqli_close($connection);
?>