<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login Page</title>
</head>
<body>
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
		<label for="username">Username: </label>
		<input type="text" name="username">
		<input type="submit" value="Submit">

		<?php
			if($_SERVER["REQUEST_METHOD"] == "POST")
			{
				$username=$_POST['username'];
				$actual_username="ADMIN";

				if($username == $actual_username)
				{
					echo "<br><br>Welcome " . strrev($username) . " ! Hamare Website mein aapka Hardik Swagat Hai";
				}
				else
				{
					echo "<br><br>Sorry !! Your entered username '" . $username . "' is incorrect ... Please Try Again";
				}
			}
		?>
	</form>
</body>
</html>