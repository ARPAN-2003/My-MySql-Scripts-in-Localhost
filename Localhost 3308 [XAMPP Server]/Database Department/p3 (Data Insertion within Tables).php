<!DOCTYPE html>
<html>
	<head>
		<style>
			div {
				font-size: 30px;
				padding: 40px;
				padding-left: 220px;
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
				$database = "DEPARTMENT";
				
				//Database Connection...
				$connection = mysqli_connect($servername, $username, $password, $database);

				//Check whether there is any database connection error or Not...
				if(mysqli_connect_error()){
					echo "<br><b>Connection Failure</b></br>";
					exit();
				}
				
				echo "<br><b>Connection is Successfully Established</b><br><br><br>";

				//Data Insertion...
				$sql = "INSERT INTO DEPARTMENT (DEPT_NO,DEPT_NAME) VALUES 
							('D001','MATHEMATICS'),
							('D002','PHYSICS'),
							('D003','CHEMISTRY'),
							('D004','GEOGRAPHY'),
							('D005','COMPUTER SCIENCE');";
				
				$sql1 = "INSERT INTO EMPLOYEE (EMP_NO,EMP_NAME,CITY,SALARY,JOIN_DATE,DEPT_NO) VALUES 
							('EMP001','RAMCHARAN DAS','HYDERABAD',20000.00,'2018-12-18','D005'),
							('EMP002','KALICHARAN BOSE','BENGALURU',18000.00,'2021-07-05','D004'),
							('EMP003','KREETIKA CHOWDHURY','HYDERABAD',24000.00,'2016-11-07','D005'),
							('EMP004','TARUN HALDER','BHUBANESHWAR',21000,'2016-02-04','D004'),
							('EMP005','ANKITA SEN','THIRUVANANTHAPURAM',25000.00,'2022-01-26','D005'),
							('EMP006','ADITYA SHARMA','HYDERABAD',23000.00,'2022-02-06','D001'),
							('EMP007','ANUSHKA CHAKRABORTY','MUMBAI',25000.00,'2018-09-29','D004'),
							('EMP008','RAMANATH DASARI','PUNE',20000.00,'2021-08-02','D001'),
							('EMP009','KESHAV DESHPANDE','NEW DELHI',21000.00,'2019-05-20','D004'),
							('EMP010','RAMAKANTA ACHARYA','CHENNAI',25000.00,'2022-02-18','D005');";

				//Check whether the given sql query 'sql' is successfully processed or Not...
				if(mysqli_query($connection, $sql)){
					echo "<br>The given data within the table — <b>DEPARTMENT</b> is Successfully Inserted";
				}
				else{
					echo "<br><b>ERROR! Unable to insert the given data within the table — DEPARTMENT</b><br><br>" . mysqli_error($connection);
				}
				
				//Check whether the given sql query 'sql1' is successfully processed or Not...
				if(mysqli_query($connection, $sql1)){
					echo "<br>The given data within the table — <b>EMPLOYEE</b> is Successfully Inserted";
				}
				else{
					echo "<br><b>ERROR! Unable to insert the given data within the table — EMPLOYEE</b><br><br>" . mysqli_error($connection);
				}
				
				mysqli_close($connection);
			?>
		</div>
	</body>
</html>