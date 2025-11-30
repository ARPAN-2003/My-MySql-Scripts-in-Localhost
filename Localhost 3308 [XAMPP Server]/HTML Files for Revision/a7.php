<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Generate Fibonacci Series</title>
</head>
<body>
	<form action="a7.php" method="POST">
		<label>Enter your name: </label>
		<input type="text" name="username">
		<br>
		<br>
		<label>Enter a number: </label>
		<input type="number" name="term">
		<input type="submit" name="submit" value="Generate Fibonacci Series">
		<br>
		<br>

		<?php
			if($_SERVER['REQUEST_METHOD'] == 'POST')
			{
				$name=$_POST['username'];
				$num=$_POST['term'];

				$a=0;
				$b=1;
				$c=$a+$b;

				$Fibonacci = array($a, $b);

				while ($c <= $num)
				{
					array_push($Fibonacci, $c);
					$a=$b;
					$b=$c;
					$c=$a+$b;
				}
			}

			$i=0;

			while ($i < count($Fibonacci)){
				echo $Fibonacci[$i] . " &nbsp;&nbsp;";
				$i++;
			}
		?>
	</form>
</body>
</html>