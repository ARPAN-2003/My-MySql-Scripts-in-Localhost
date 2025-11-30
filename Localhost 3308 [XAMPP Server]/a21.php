<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Details Found or Not Found</title>
		
		<style>
			div {
				text-align: center;
				padding: 100px;
				font-size: 30px;
			}
		</style>
	</head>
	
	<body>
		<div>
			<?php
				$cuRoll=$_GET["roll"];
				$cuRegNumber=$_GET["regno"];
				$collegeSemester=$_GET["semester"];
				$CollegeSession=$_GET["session"];
				
				$str="/CU-2023/i";
				$check_pattern=preg_match($str, $cuRegNumber);
				
				if($_SERVER["REQUEST_METHOD"] == "GET")
				{
					if(!$check_pattern)
					{
						echo "Sorry... only the details of students, whose Registration number starts with 'CU-2023', will be shown here";
					}
					else
					{
						Display();
					}
				}
				
				function Display()
				{
					global $cuRoll, $cuRegNumber, $collegeSemester, $CollegeSession;
					echo "<font color=blue>Hey User, ARPAN MITRA</font><br><br>";
					echo "<br><br>Your CU Roll Number : <b>" . $cuRoll;
					echo "</b><br><br>Your CU Registration Number : <b>" . $cuRegNumber;
					echo "</b><br><br>You are currently studying in <b>" . $collegeSemester . "</b>";
					echo "<br><br>Your Academic session is -- <b>" . $CollegeSession . "</b>";
				}
			?>
		</div>
	</body>
</html>