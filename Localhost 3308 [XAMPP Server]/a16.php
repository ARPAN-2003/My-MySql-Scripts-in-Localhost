<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Form Valid / Invalid</title>
		
		<style>
			div {
				text-align: center;
				padding: 150px;
				font-size: 50px;
			}
		</style>
	</head>
	
	<body>
		<div>
			<?php
				$username=$_POST["username"];
				$password=$_POST["password"];
				
				if($_SERVER["REQUEST_METHOD"] == "POST")
				{
					if(empty($username))
					{
						echo "You have not entered any name yet.. Please try again";
					}
					else if($username == "admin")
					{
						echo "Welcome <b>" . strrev($username) . "</b><br><br>";
						echo "Your password is : " . $password;
					}
					else
					{
						echo "Your entered username is wrong... <br><br>Please try again";
					}
				}
			?>
		</div>
	</body>
</html>