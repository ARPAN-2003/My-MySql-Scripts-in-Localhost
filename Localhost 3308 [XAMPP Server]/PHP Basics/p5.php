<!DOCTYPE html>
	<head>
		<title>PHP BASICS PAGE-5</title>
	</head>
	
	<body>
		<?php
			echo "<h2>PHP Arrays</h2>";
			
			echo "An array is a special variable that can hold many values under a single name, and you can access the values by referring to an index number or name.";
			echo "In PHP, there are three types of arrays:~ <ul><li><b>Indexed arrays</b> - Arrays with a numeric index, here each item has an index number.</li>
				<li><b>Associative arrays</b> - Arrays with assigning named keys, here each item has a key-value pair.</li>
				<li><b>Multidimensional arrays</b> - Arrays containing one or more arrays, it is used to store values with more than one key.</li>";
			
			//Indexed array...
			echo "<br><b>Using Indexed array</b> ---> ";
			$train = array("Gatimaan Express","Duronto Express","Shatabdi Express","Rajdhani Express","Vande Bharat Express");
			echo "My favourite trains are : ";
			for($i=0; $i<count($train); $i++){
				echo $train[$i] . " &nbsp; ";
			}
			echo "<br>";
			//Associative array...
			echo "<br><b>Using Associative array</b> ---> ";
			$train = array("Gatimaan Express"=>"160","Duronto Express"=>"120","Shatabdi Express"=>"110","Rajdhani Express"=>"140","Vande Bharat Express"=>"130");
			echo "The maximum speed of Rajdhani Express is " . $train['Rajdhani Express'] . " km/h &nbsp;&nbsp;&nbsp;;;&nbsp;&nbsp;&nbsp;";
			echo "&nbsp;The maximum speed of Gatimaan Express is " . $train['Gatimaan Express'] . "km/h";
			echo "<br>";
			//Multi-dimensional array...
			echo "<br><b>Using Multi-dimensional array</b> ---> ";
			$train = array(
						array("Gatimaan Express",160),
						array("Duronto Express",120),
						array("Shatabdi Express",110),
						array("Rajdhani Express",140),
						array("Vande Bharat Express",130)
					);
			echo "The maximum speed of " . $train[1][0] . " is " . $train[1][1] . " km/h &nbsp;&nbsp;&nbsp;;;&nbsp;&nbsp;&nbsp;";
			echo "&nbsp;The maximum speed of " . $train[4][0] . " is " . $train[4][1] . "km/h";
			
			echo "</ul><br><h2>PHP Classes and Objects</h2>";
			
			echo "A class is a template for objects and an object is an instance of class. A class is defined by using the <b>class</b> keyword, followed by the name of the class and Objects of a class are created using the <b>new</b> keyword. ";
			echo "We can create multiple objects from a class. Each object has all the properties and methods defined in the class, but they will have different property values — ";
			
			class Fruit{
				public $name, $color;

				function set_name($name){
					$this->name = $name;
				}

				function get_name() {
					return $this->name;
				}
			}
			
			$apple = new Fruit();		//object is created...
			$banana = new Fruit();		//object is created...
			$apple->set_name('Apple');
			$banana->set_name('Banana');

			echo "<ul><br><b>Using objects</b> ---> ";
			echo "The fruits are: <b>" . $apple->get_name() . "</b> and <b>" . $banana->get_name() . "</b><br>";
			
			echo "</ul>";
		?>
	</body>
</html>