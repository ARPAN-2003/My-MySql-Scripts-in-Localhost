<!DOCTYPE html>
	<head>
		<title>PHP BASICS PAGE-1</title>
	</head>
	
	<body>
		<?php
			echo "<h2>PHP Variables & Data Types</h2>";
			echo "In PHP, a variable starts with the <b>$</b> sign, followed by the name of the variable. ";
			echo "It must start with a letter or the underscore character, ";
			echo "it cannot start with a number, ";
			echo "it can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ ). ";
			echo "Variable names are case-sensitive (<b>\$age</b> and <b>\$AGE</b> are two different variables).<br>";
			
			echo "<br>Variables can store data of different types, and different data types can do different things.";
			echo "PHP supports the following data types: String, Integer, Float (floating point numbers), Boolean, Array, Object, NULL, Resource. ";
			echo "We can get the data type of an object by using the <b>var_dump()</b> function<br>";

			$x = 5;
			$str = "Hello World!";

			echo "<br><b>Input:</b> &nbsp; \$x = 5; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
			echo "\$str = \"Hello World!\"; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
			echo "var_dump(3.14); &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
			echo "var_dump(true); &nbsp;&nbsp;&nbsp;";
			echo "var_dump([2, 3, 56]);<br>";
			echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;var_dump(\$x) &nbsp;&nbsp; var_dump(\$str);<br>";
			echo "<br><b>Output:</b> "; var_dump($x); echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
			var_dump($str); echo "&nbsp;&nbsp;&nbsp;&nbsp;";
			var_dump(3.14); echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
			var_dump(true); echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
			var_dump([2, 3, 56]); echo "<br><br>";
			
			echo "<h2>PHP Global Array</h2>";
			echo "Super global variables are built-in variables that are always available in all scopes. ";
			echo "<b>\$GLOBALS</b> is a PHP super global variable which is used to access global variables from anywhere in the PHP script (also from within functions or methods). ";
			echo "PHP stores all global variables in an array called <b>\$GLOBALS[<i>index</i>]</b>. The <i>index</i> holds the name of the variable.<br><br>";

			$x = 75;
			$y = 25;
			
			echo "<b>x = 75</b> ; &nbsp; <b>y = 25</b><br>";
			echo "<br>Now 'z' is a variable present within the <b>\$GLOBALS</b> array, defining <b>z = x + y</b> . So it is also accessible from outside the function! ";
			echo "Now the value of <b>z</b> can be found.<br>";

			function addition() {
				$GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
			}

			addition();
			echo "<br>So &nbsp; <b>z = " . $z . "</b>";

			echo "";
		?>
	</body>
</html>