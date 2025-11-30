<!DOCTYPE html>
	<head>
		<title>PHP BASICS PAGE-4</title>
	</head>
	
	<body>
		<?php
			echo "<h2>PHP Control Statements</h2>";
			
			echo "Control statements are used to perform different actions based on different conditions. ";
			echo "In PHP we have the following control statements :~
			<ul><li><b>if statement</b> —> executes some code if one condition is true</li>
			    <li><b>if...else statement</b> —> executes some code if a condition is true and another code if that condition is false</li>
				<li><b>if...elseif...else statement</b> —> executes different codes for more than two conditions</li>";
			
			$x=10;	$y=20;	$z=30;

			//if statement...
			echo "<br><b>Using only if statement</b> ---> ";
			if($x<15){
				echo "The number present in the variable 'x' (" . $x . ") is lesser than 15";
			}
			
			//if...else statement
			echo "<br><b>Using if...else statement</b> ---> ";
			if($y>15){
				echo "The number present in the variable 'y' (" . $y . ") is greater than 15";
			}
			else{
				echo "The number present in the variable 'y' (" . $y . ") is lesser than or equal to 15";
			}
			
			//if...else if...else statement
			echo "<br><b>Using if...else if...else statement</b> ---> ";
			if($x>$y && $x>$z){
				echo "The number present in the variable 'x' (" . $x . ") is the Largest number";
			}
			else if($y>$z){
				echo "The number present in the variable 'y' (" . $y . ") is the Largest number";
			}
			else{
				echo "The number present in the variable 'z' (" . $z . ") is the Largest number";
			}
			
			echo "</ul><br><h2>PHP Switch Case</h2>";
			
			echo "The <b>switch</b> statement is used to perform different actions based on different conditions. The <b>switch</b> statement is mainly used to select one of many blocks of code to be executed. ";
			
			$favcolor = "green";

			echo "<br><ul><b>Using switch statement</b> ---> ";
			switch($favcolor){
				case "red":
					echo "My favorite color is Red!";
					break;
				case "blue":
					echo "My favorite color is Blue!";
					break;
				case "green":
					echo "My favorite color is Green!";
					break;
				default:
					echo "My favorite color is neither Red, Blue, nor Green!";
			}
			
			echo "</ul><br><h2>PHP Loops</h2>";
			
			echo "Loops are used to execute the same block of code again and again, as long as a certain condition is true. Instead of adding several almost equal code-lines in a script, we can use loops. ";
			
			echo "In PHP, we have the following loop types:~
			<ul><li><b>while</b> —> loops through a block of code as long as the specified condition is true</li>
				<li><b>do...while</b> —> loops through a block of code once, and then repeats the loop as long as the specified condition is true</li>
				<li><b>for</b> —> loops through a block of code a specified number of times</li>
				<li><b>foreach</b> —> loops through a block of code for each element in an array</li>";
			
			$i = 1;
			//using while loop
			echo "<br><b>Using while loop</b> ---> ";
			while($i <= 10){
				echo $i . " ";
				$i++;
			}

			$i=1;
			//using do...while loop
			echo "<br><b>Using do...while loop</b> ---> ";
			do{
				echo $i . " ";
				$i++;
			}while($i <= 10);
			
			//using for loop
			echo "<br><b>Using for loop</b> ---> ";
			for($i = 1; $i <= 10; $i++) {
				echo $i . " ";
			}

			//using foreach loop
			echo "<br><b>Using foreach loop</b> ---> ";
			$colors = array("Red", "Green", "Blue", "Yellow");
			
			foreach($colors as $i){
				echo $i . " &nbsp; ";
			}
			
			echo "</ul>";
		?>
	</body>
</html>