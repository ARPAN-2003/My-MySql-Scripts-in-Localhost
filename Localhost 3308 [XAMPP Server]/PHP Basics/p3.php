<!DOCTYPE html>
	<head>
		<title>PHP BASICS PAGE-3</title>
	</head>
	
	<body>
		<?php
			echo "<h2>PHP Type Casting</h2>";
			
			echo "Sometimes we need to change a variable from one data type into another and sometimes we want a variable to have a specific data type. This can be done with Type Casting. ";
			
			echo "Type Casting in PHP is done with these statements:
			<ul><li>(string) - Converts to data type String</li>
			<li>(int) - Converts to data type Integer</li>
			<li>(float) - Converts to data type Float</li>
			<li>(bool) - Converts to data type Boolean</li>
			<li>(array) - Converts to data type Array</li>
			<li>(object) - Converts to data type Object</li>
			<li>(unset) - Converts to data type NULL</li></ul>";
			
			echo "<b>The values of some variables are ---> a=5 &nbsp; b=5.34 &nbsp; c=\"25 kilometers\" &nbsp; d=\"hello\" &nbsp; e=true &nbsp; f=NULL</b><br><br>";
			
			echo "<b><u>Cast to Integer</u></b>: ";
			
			$a = 5;										// Integer
			$b = 5.34;									// Float
			$c = "25 kilometers";	$d = "hello";		// String
			$e = true;									// Boolean
			$f = NULL;									// NULL

			$a = (int) $a;		$b = (int) $b;		$c = (int) $c;
			$d = (int) $d;		$e = (int) $e;		$f = (int) $f;
			
			//To verify the type of any object in PHP, use the var_dump() function...
			echo "Output ---> </b>&nbsp;&nbsp;";
			echo "&nbsp;&nbsp;" . var_dump($a);
			echo "&nbsp;&nbsp;" . var_dump($b);
			echo "&nbsp;&nbsp;" . var_dump($c);
			echo "&nbsp;&nbsp;" . var_dump($d);
			echo "&nbsp;&nbsp;" . var_dump($e);
			echo "&nbsp;&nbsp;" . var_dump($f);
			
			echo "<p>*Note that when casting a string that starts with a number, the <b>(int)</b> function uses that number. If it does not start with a number, the <b>(int)</b> function convert strings into the number 0. </p>";
			
			echo "<b><u>Cast to Float</u></b>: ";
			
			$a = 5;										// Integer
			$b = 5.34;									// Float
			$c = "25 kilometers";	$d = "hello";		// String
			$e = true;									// Boolean
			$f = NULL;									// NULL
			
			$a = (float) $a;		$b = (float) $b;		$c = (float) $c;
			$d = (float) $d;		$e = (float) $e;		$f = (float) $f;
			
			//To verify the type of any object in PHP, use the var_dump() function...
			echo "Output ---> </b>&nbsp;&nbsp;";
			echo "&nbsp;&nbsp;" . var_dump($a);
			echo "&nbsp;&nbsp;" . var_dump($b);
			echo "&nbsp;&nbsp;" . var_dump($c);
			echo "&nbsp;&nbsp;" . var_dump($d);
			echo "&nbsp;&nbsp;" . var_dump($e);
			echo "&nbsp;&nbsp;" . var_dump($f);
			
			echo "<p>*Note that when casting a string that starts with a number, the <b>(float)</b> function uses that number. If it does not start with a number, the <b>(float)</b> function convert strings into the number 0.</p>";
			
			echo "<b><u>Cast to String</u></b>: ";
			
			$a = 5;										// Integer
			$b = 5.34;									// Float
			$c = "25 kilometers";	$d = "hello";		// String
			$e = true;									// Boolean
			$f = NULL;									// NULL
			
			$a = (string) $a;		$b = (string) $b;		$c = (string) $c;
			$d = (string) $d;		$e = (string) $e;		$f = (string) $f;
			
			//To verify the type of any object in PHP, use the var_dump() function...
			echo "Output ---> </b>&nbsp;&nbsp;";
			echo "&nbsp;&nbsp;" . var_dump($a);
			echo "&nbsp;&nbsp;" . var_dump($b);
			echo "&nbsp;&nbsp;" . var_dump($c);
			echo "&nbsp;&nbsp;" . var_dump($d);
			echo "&nbsp;&nbsp;" . var_dump($e);
			echo "&nbsp;&nbsp;" . var_dump($f);
			
			echo "<p>*Note that when casting a Boolean into string it gets the value \"1\", and when casting NULL into string it is converted into an empty string \"\".</p>";
			
			echo "<b><u>Cast to Boolean</u></b>: ";
			
			$a = 5;										// Integer
			$b = 5.34;									// Float
			$c = "25 kilometers";	$d = "hello";		// String
			$e = true;									// Boolean
			$f = NULL;									// NULL
			
			$a = (bool) $a;		$b = (bool) $b;		$c = (bool) $c;
			$d = (bool) $d;		$e = (bool) $e;		$f = (bool) $f;
			
			//To verify the type of any object in PHP, use the var_dump() function...
			echo "Output ---> </b>&nbsp;&nbsp;";
			echo "&nbsp;&nbsp;" . var_dump($a);
			echo "&nbsp;&nbsp;" . var_dump($b);
			echo "&nbsp;&nbsp;" . var_dump($c);
			echo "&nbsp;&nbsp;" . var_dump($d);
			echo "&nbsp;&nbsp;" . var_dump($e);
			echo "&nbsp;&nbsp;" . var_dump($f);
			
			echo "<p>If a value is 0, NULL, false, or empty, the <b>(bool)</b> converts it into false, otherwise true. Even -1 converts to true.</p>";
			
			echo "";
		?>
	</body>
</html>