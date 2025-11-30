<!DOCTYPE html>
<html>
	<head>
		<style>
			div {
				font-size: 30px;
				padding: 40px;
				padding-left: 200px;
			}
			font {
				font-size: 28px;
			}
		</style>
	</head>
	
	<body>
		<div>
			<?php
				$EMPNAME = $_POST['name'];
				$HRA = $_POST['HRA'];
				$DA = $_POST['DA'];
				$PROF_TAX = $_POST['PROF_TAX'];

				if($_SERVER["REQUEST_METHOD"] == "POST"){
					if(isset($_POST["submit"])){
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
						
						echo "<br><font><b>Connection is Successfully Established</b></font><br><br><br>";

						//Table Update...
						$sql = "UPDATE SALARY SET HRA = (BASIC_PAY * $HRA / 100) WHERE EMPNAME = '$EMPNAME';";
						$sql.= "UPDATE SALARY SET DA = (BASIC_PAY * $DA / 100) WHERE EMPNAME = '$EMPNAME';";
						$sql.= "UPDATE SALARY SET PROFESSIONAL_TAX = '$PROF_TAX' WHERE EMPNAME = '$EMPNAME';";

						//Check whether the given sql query is successfully processed or Not...
						if(mysqli_multi_query($connection, $sql)){
							echo "<br><font>The table — <b>SALARY</b> is Successfully Updated with the data fetched from the Previous Form</font>";
						}
						else{
							echo "<br><b>ERROR! Unable to update the table — SALARY with the data fetched from the Previous Form</b><br><br>" . mysqli_error($connection);
						}
						
						mysqli_close($connection);
					}
				}
			?>
		</div>
	</body>
</html>