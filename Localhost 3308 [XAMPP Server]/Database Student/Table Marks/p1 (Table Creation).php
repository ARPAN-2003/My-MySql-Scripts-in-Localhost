<!DOCTYPE html>
<html>
	<head>
		<style>
			div {
				font-size: 40px;
				padding: 80px;
				padding-left: 100px;
				padding-top: 70px;
			}
			font {
				padding-left: 150px;
				font-size: 50px;
			}
		</style>
	</head>
	
	<body>
		<div>
			<?php
				//The servername, username and password is taken from user...
				$servername="localhost:3308";
				$username="root";
				$password="";
				$database="STUDENT";
				
				//Database Connection...
				$connection = mysqli_connect($servername, $username, $password, $database);

				//Check whether there is any database connection error or Not...
				if(mysqli_connect_error()){
					echo "<br><font><b>Connection Failure</b></font></br>";
					exit();
				}
				
				echo "<font><b>Connection is Successfully Established</b></font><br><br><br>";

				//Table Creation...
				$sql = "CREATE TABLE MARKS(
							ROLL VARCHAR(10) PRIMARY KEY,
							NAME CHARACTER(40) NOT NULL,
							MATH_MARKS INT NOT NULL,
							PHYS_MARKS INT NOT NULL,
							COMP_SC_MARKS INT NOT NULL,
							CHECK (MATH_MARKS >= 0 AND MATH_MARKS <= 100),
							CHECK (PHYS_MARKS >= 0 AND PHYS_MARKS <= 100),
							CHECK (COMP_SC_MARKS >= 0 AND COMP_SC_MARKS <= 100)
						);";

				//Check whether the given sql query is successfully processed or Not...
				if(mysqli_query($connection, $sql)){
					echo "<br><font>The table — <b>Marks</b> is Successfully Created";
				}
				else{
					echo "<br><font><b>ERROR! Unable to create the table — Marks</b></font><br><br>" . mysqli_error($connection);
				}
				
				mysqli_close($connection);
			?>
		</div>
	</body>
</html>