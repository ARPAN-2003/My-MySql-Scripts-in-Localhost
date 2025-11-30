<!DOCTYPE html>
<html>
	<head>
		<style>
			div {
				font-size: 30px;
				padding-left: 150px;
				padding-top: 50px;
			}
			font {
				padding-left: 130px;
				font-size: 32px;
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

				//Data Insertion...
				$sql = "INSERT INTO STUDENT VALUES ('SAPTARSHI DEY',118,'KOLKATA','deysaptarshi1994@gmail.com','1994-02-10');";
				$sql.= "INSERT INTO STUDENT VALUES ('TITIKSHA HALDER',275,'BALASORE','titikshahalder2000@gmail.com','2000-06-26');";
				$sql.= "INSERT INTO STUDENT VALUES ('SUMIT SEN',78,'VISAKHAPATNAM','sensumit1999@gmail.com','1999-01-25');";
				$sql.= "INSERT INTO STUDENT VALUES ('TARUN JANA',222,'BHUBANESWAR','tarun1996@gmail.com','1996-11-07');";
				$sql.= "INSERT INTO STUDENT VALUES ('NATASHA SHARMA',121,'VIJAYAWADA','dearnatasha2003@gmail.com','2003-08-18');";

				//Check whether the given sql query is successfully processed or Not...
				if(mysqli_multi_query($connection, $sql)){
					echo "<br><font><b>The table — Student is Successfully Created</b>";
				}
				else{
					echo "<br><font><b>ERROR! Unable to create the table — Student</b></font><br><br>" . mysqli_error($connection);
				}
				
				mysqli_close($connection);
			?>
		</div>
	</body>
</html>