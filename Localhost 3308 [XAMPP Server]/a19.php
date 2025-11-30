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
				$name=$_POST["name"];
				$password=$_POST["password"];
				$year=$_POST["yearofbirth"];
				
				if($_SERVER["REQUEST_METHOD"] == "POST")
				{
					if(($year%4 == 0) and ($year%100 != 0) or ($year%400 == 0))
					{
						echo "Your year of birth " . $year . " is a Leap Year... Congratulations";
					}
					else
					{
						echo "Your year of birth " . $year . " is not a Leap Year... Sorry";
					}
				}
			?>
		</div>
	</body>
</html>