<!DOCTYPE html>
<html>
	<head>
		<style>
			div {
				font-size: 30px;
				padding: 40px;
				padding-left: 200px;
			}
		</style>
	</head>
	
	<body>
		<div>
			<?php
				if($_SERVER["REQUEST_METHOD"] == "POST"){
					if(isset($_POST["submit"])){
						if(!empty($_POST["roll"]) && !empty($_POST["name"]) && !empty($_POST["math"]) && !empty($_POST["physics"]) && !empty($_POST["computer_science"])){
							$ROLL = $_POST["roll"];
							$NAME = $_POST["name"];
							$MATH_MARKS = $_POST["math"];
							$PHYS_MARKS = $_POST["physics"];
							$COMP_SC_MARKS = $_POST["computer_science"];

							//The servername, username and password is taken from user...
							$servername="localhost:3308";
							$username="root";
							$password="";
							$database = "STUDENT";
							
							//Database Connection...
							$connection = mysqli_connect($servername, $username, $password, $database);

							//Check whether there is any database connection error or Not...
							if(mysqli_connect_error()){
								echo "<br><b>Connection Failure</b></br>";
								exit();
							}
							
							echo "<br><b>Connection is Successfully Established</b><br><br><br><br>";

							//Data Insertion from the Form...
							$sql = "INSERT INTO MARKS (ROLL,NAME,MATH_MARKS,PHYS_MARKS,COMP_SC_MARKS) VALUES ('$ROLL','$NAME','$MATH_MARKS','$PHYS_MARKS','$COMP_SC_MARKS');";

							//Check whether the given sql query is successfully processed or Not...
							if(mysqli_query($connection, $sql)){
								echo "<br>The given data within the table — <b>MARKS</b> is Successfully Inserted";
							}
							else{
								echo "<br><b>ERROR! Unable to insert the given data within the table — MARKS</b><br><br>" . mysqli_error($connection);
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