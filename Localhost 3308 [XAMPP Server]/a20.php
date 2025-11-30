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
				$username=$_POST["username"];
				$password=$_POST["password"];
				$email=$_POST["email"];
				
				$symbol_check=preg_match('@[*]@', $password);
				
				if($_SERVER["REQUEST_METHOD"] == "POST")
				{
					if(!$symbol_check || strlen($password)<6 || strlen($password)>12)
					{
						echo "Your password must contain a * symbol & minimum length is 6 , maximum length is 12 ... Please follow the conditions";
						echo "<br><br><font color=red>LOGIN FAILURE</font>";
					}
					else
					{
						echo "<font color=#4d60eb>You have successfully logged in your profile</font><br><br>";
						echo "Your name : " . $username;
						echo "<br>Your password : " . $password;
					}
				}
			?>
		</div>
	</body>
</html>