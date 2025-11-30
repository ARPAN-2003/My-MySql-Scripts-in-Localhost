<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Validation Found or Not Found</title>
		
		<style>
			div {
				text-align: center;
				padding: 150px;
				font-size: 30px;
			}
		</style>
	</head>
	
	<body>
		<div>
			<?php
				$firstname=$_POST["fname"];
				$midname=$_POST["mname"];
				$lastname=$_POST["lname"];
				$email=$_POST["email"];
				$country=$_POST["country"];
				
				if($_SERVER["REQUEST_METHOD"] == "POST")
				{
					echo "Your Full Name : " . $firstname . " " . $midname . " " . $lastname;
					echo "<br>Your email Address : " . $email;
					echo "<br>Your Country : " . $country . "<br><br>";
					
					if(empty($midname))
					{
						echo "<b>" . $firstname . " " . $lastname . " , You don't write any middlename. So we consider that you don't have any middlename</b>";
					}
					else
					{
						echo "<b>" . $firstname . " " . $lastname . " , Your middle name is " . $midname . "</b>";
					}
				}
			?>
		</div>
	</body>
</html>