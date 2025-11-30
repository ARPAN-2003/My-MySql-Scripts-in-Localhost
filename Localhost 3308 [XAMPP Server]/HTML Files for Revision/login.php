<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login page</title>
</head>
<body>
	<?php
		$username=$_POST['username'];
		$actual_username="ADMIN";

		if($_SERVER['REQUEST_METHOD'] == 'POST')
		{
			if($username == $actual_username)
			{
				echo "Welcome " . strrev($username) . " ! Hamare Website mein aapka Hardik Swagat Hai";
			}
			else
			{
				echo "Sorry !! Your entered username '" . $username . "' is incorrect ... Please Try Again";
			}
		}
	?>
</body>
</html>