<!DOCTYPE html>
	<head>
		<title>PHP BASICS PAGE-2</title>
	</head>
	
	<body>
		<?php
			echo "<h2>PHP Parameter Scope</h2>";
			
			echo "PHP has three different parameter scopes: <ul><li>LOCAL</li> <li>GLOBAL</li> <li>STATIC</li></ul>";
			
			echo "<br>A variable declared within a function has a <b>LOCAL Scope</b> and can only be accessed within that function:<br>";
			
			function display_x(){
				$x = 18;		//local scope...
				echo "<br><b>Inside function the value of the variable x will be: " . $x . "</b><br>";
			}
			
			display_x();
			echo "Outside function the value of the variable x will be: ............ " . /* . $x . */ "<i>(SO AN ERROR WILL BE OCCURRED)</i>";
			
			echo "<br><br><br>A variable declared outside a function has a <b>GLOBAL Scope</b> and can only be accessed outside a function:<br>";
			
			$y = 45;			//global scope...
			
			function display_y(){
				echo "<br>Inside function the value of the variable y will be: ............ " . /* . $y . */ "<i>(SO AN ERROR WILL BE OCCURRED)</i>";
			}
			
			display_y();
			echo "<br><b>Outside function the value of the variable y will be: " . $y . "</b><br><br>";
			
			echo "<br>The <b><i>global</i></b> keyword is used to access a global variable from within a function:<br><br>";
			
			$a = 5;
			$b = 7;
			
			function test(){
				global $a, $b;
				$b = $a + $b;
			}
			
			test();
			echo "<b>The sum of a and b is " . $b . "</b><br>";
			
			echo "<br><br>Normally, when a function is completed/executed, all of its variables are deleted. ";
			echo "However, sometimes we want a local variable NOT to be deleted. We need it for a further job. ";
			echo "To do this, the <b>STATIC</b> keyword is used when the variable is declared: <br><br>";
			
			function useStatic(){
				static $p = 1;
				echo " <b>" . $p . "</b> ";
				$p++;
			}
			
			echo "The values of the variable 'p' are: ";
			useStatic();	useStatic();	useStatic();
			useStatic();	useStatic();	useStatic();
			useStatic();	useStatic();	useStatic();	useStatic();	//so the variable is still local to the function...
			
			echo "";
		?>
	</body>
</html>