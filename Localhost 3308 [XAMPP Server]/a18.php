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
				$name=$_GET["name"];
				$password=$_GET["password"];
				$text=$_GET["text"];

				if($_SERVER["REQUEST_METHOD"] == "GET")
				{
					echo "Your Name : " . $name;
					echo "<br>Your password : " . $password;

					$text=preg_replace('/[0-9\s]/', '', $text);

					echo "<br>Your entered text without all digits and spaces : " . $text;
				}
			?>
		</div>
	</body>
</html>