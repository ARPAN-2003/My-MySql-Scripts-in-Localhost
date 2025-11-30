<!DOCTYPE html>
<html>
	<head>
		<style>
			h2 {
				font-size: 32px;
				padding: 40px;
				padding-left: 300px;
			}
			font {
				padding-left: 30px;
				font-size: 22px;
			}
		</style>
	</head>
	
	<body>
		<div>
			<?php
				if($_SERVER["REQUEST_METHOD"] == "POST"){
					if(isset($_POST["submit"])){
						if(!empty($_POST["name"]) && !empty($_POST["city"]) && !empty($_POST["phone"]) && !empty($_POST["email"]) && !empty($_POST["password"])){
							$NAME = $_POST["name"];
							$CITY = $_POST["city"];
							$PHONE_NUMBER = $_POST["phone"];
							$EMAIL = $_POST["email"];
							$PASSWORD = $_POST["password"];

							//The servername, username and password is taken from user...
							$servername="localhost:3308";
							$username="root";
							$password="";
							$database = "USER";
							
							//Database Connection...
							$connection = mysqli_connect($servername, $username, $password, $database);

							//Check whether there is any database connection error or Not...
							if(mysqli_connect_error()){
								echo "<br><b>Connection Failure</b></br>";
								exit();
							}
							
							echo "<br><h2><b>Connection is Successfully Established</b></h2><br><br><br>";
							
							$sql1 = "SELECT * FROM USER WHERE PHONE_NUMBER = '$PHONE_NUMBER';";
							$sql2 = "SELECT * FROM USER WHERE EMAIL = '$EMAIL';";
							
							$result1 = mysqli_query($connection, $sql1);
							$result2 = mysqli_query($connection, $sql2);
							
							//Check whether the number of results from 'result1' is more than 0 or Not...
							if(mysqli_num_rows($result1) > 0){
								echo "<font color=red>The phone number <b>'$PHONE_NUMBER'</b> is already Registered in the User Table... Please try with Different phone number</font><br>";
								exit();
							}
							//Check whether the number of results from 'result2' is more than 0 or Not...
							else if(mysqli_num_rows($result2) > 0){
								echo "<font color=red>The email id <b>'$EMAIL'</b> is already Registered in the User Table... Please try with Different email id</font><br>";
								exit();
							}
							else{
								//Data Insertion from the Form...
								$sql = "INSERT INTO USER (NAME,CITY,PHONE_NUMBER,EMAIL,PASSWORD) VALUES ('$NAME','$CITY','$PHONE_NUMBER','$EMAIL','$PASSWORD');";
								
								//Check whether the given sql query is successfully processed or Not...
								if(mysqli_query($connection, $sql)){
									echo "<br><font>The given data within the table — <b>USER</b> is Successfully Inserted</font>";
								}
								else{
									echo "<br><b>ERROR! Unable to insert the given data within the table — USER</b><br><br>" . mysqli_error($connection);
								}
								
								mysqli_close($connection);
							}
						}
						else{
							echo "<br><br><b>All Fields should be Required to fulfil</b>";
						}
					}
				}
			?>
		</div>
	</body>
</html>