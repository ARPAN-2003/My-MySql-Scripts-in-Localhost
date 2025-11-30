<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Address - Valid or Invalid</title>
		
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
				$StreetNo=$_POST["streetno"];
				$StreetName=$_POST["streetname"];
				$City=$_POST["city"];
				$State=$_POST["state"];
				$PIN=$_POST["pin"];
				
				$text1=preg_match('/[a-zA-Z]/', $City);
				$others1=preg_match('/[0-9\'^£$%&*()}{@#~?><>,|=_+¬-]/', $City);
				
				$text2=preg_match('/[a-zA-Z]/', $State);
				$others2=preg_match('/[0-9\'^£$%&*()}{@#~?><>,|=_+¬-]/', $State);
				
				$text3=preg_match('/[0-9]/', $PIN);
				$others3=preg_match('/[a-zA-Z\'^£$%&*()}{@#~?><>,|=_+¬-]/', $PIN);
				
				if($_SERVER["REQUEST_METHOD"] == "POST")
				{
					if($text1 and !$others1)
					{
						echo "The entered City name <font color=#6a5bff><b>'" . $City . "'</b></font> is given in Characters properly<br><br>";
					}
					else
					{
						echo "The entered City name <font color=#ff0080><b>'" . $City . "'</b></font> is not given in Characters properly<br><br>";
					}
					
					if($text2 and !$others2)
					{
						echo "The entered State name <font color=#6a5bff><b>'" . $State . "'</b></font> is given in Characters properly<br><br>";
					}
					else
					{
						echo "The entered State name <font color=#ff0080><b>'" . $State . "'</b></font> is not given in Characters properly<br><br>";
					}
					
					if($text3 and !$others3)
					{
						echo "The entered PIN Code <font color=#6a5bff><b>'" . $PIN . "'</b></font> is given in Digits properly<br><br>";
					}
					else
					{
						echo "The entered PIN Code <font color=#ff0080><b>'" . $PIN . "'</b></font> is not given in Digits properly<br><br>";
					}
				}
				
				
			?>
		</div>
	</body>
</html>