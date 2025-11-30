<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Find GCD Value of two user given numbers</title>
		
		<style>
			div {
				text-align: center;
				padding-top: 200px;
				font-size: 40px;
			}
		</style>
	</head>
	
	<body>
		<?php
			$num1=150;
			$num2=250;
			global $gcd;
			
			if($num1 > $num2)
			{
				$temp=$num1;
				$num1=$num2;
				$num2=$temp;
			}
			
			function Find_GCD($num1, $num2)
			{
				global $num1, $num2;
				for($i=1 ; $i<=$num1 ; $i++)
				{
					if(($num1%$i) == 0 and ($num2%$i) == 0)
					{
						$gcd=$i;
					}
				}
				return $gcd;
			}
			
			echo "<div>The GCD of two given numbers " . $num1 . " and " . $num2 . " is -- <b>" . Find_GCD($num1, $num2) . "</b></div>";
		?>
	</body>
</html>