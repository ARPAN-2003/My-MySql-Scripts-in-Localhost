<!DOCTYPE html>
<html>
	<head>
		<style>
			div {
				font-size: 36px;
				padding: 40px;
				padding-left: 240px;
			}
		</style>
	</head>
	
	<body>
		<div>
			<?php
				if($_SERVER["REQUEST_METHOD"] == "POST"){
					if(isset($_POST["submit"])){
						if(!empty($_POST["name"]) && !empty($_POST["address"]) && !empty($_POST["phone"]) && !empty($_POST["salary"]) && !empty($_POST["category"]) && !empty($_POST["language"])){
							$EMPNAME = $_POST["name"];
							$ADDRESS = $_POST["address"];
							$PHONE_NUMBER = $_POST["phone"];
							$SALARY = $_POST["salary"];
							$CATEGORY = $_POST["category"];
							$lang = $_POST["language"];
							$LANGUAGES = "";
							
							for($i = count($lang)-1; $i >= 0 ; $i--){
								$LANGUAGES = $lang[$i] . ", " . $LANGUAGES;
							}
						
							//The servername, username and password is taken from user...
							$servername="localhost:3308";
							$username="root";
							$password="";
							$database = "EMPLOYEE";
							
							//Database Connection...
							$connection = mysqli_connect($servername, $username, $password, $database);

							//Check whether there is any database connection error or Not...
							if(mysqli_connect_error()){
								echo "<br><b>Connection Failure</b></br>";
								exit();
							}
							
							echo "<br><b>Connection is Successfully Established</b><br><br><br>";

							//Data Insertion from the Form...
							$sql = "INSERT INTO EMPLOYEE (EMPNAME,ADDRESS,PHONE_NUMBER,SALARY,CATEGORY,LANGUAGES) VALUES ('$EMPNAME','$ADDRESS','$PHONE_NUMBER','$SALARY','$CATEGORY','$LANGUAGES');";

							//Check whether the given sql query is successfully processed or Not...
							if(mysqli_query($connection, $sql)){
								echo "<br><b>The given data within the table — EMPLOYEE is Successfully Inserted</b>";
							}
							else{
								echo "<br><b>ERROR! Unable to insert the given data within the table — EMPLOYEE</b><br><br>" . mysqli_error($connection);
							}
							
							mysqli_close($connection);

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