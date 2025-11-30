<html>
	<head>
		<style>
			div {
				font-size: 36px;
				padding: 100px;
			}
		</style>
	</head>
	
	<body>
		<div>
			<?php
				$fname=$_GET["FName"];
				$lname=$_GET["LName"];
				$email=$_GET["Email"];

				echo "Welcome Mr. " . $fname . " " . $lname;
				echo "<br> <br>";
				echo "Your email  <b>" . $email . "</b>  has been successfully registered for Employee Registration";
			?>
		</div>
	</body>
</html>