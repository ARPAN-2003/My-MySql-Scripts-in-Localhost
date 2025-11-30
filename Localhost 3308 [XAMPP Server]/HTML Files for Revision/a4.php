<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Access Granted or Denied</title>
</head>
<body>
	<?php
		$password_matches = array("admin" => "admin123", "myadmin" => "967477", "okadmin" => "123okadmin");

		if ($_SERVER['REQUEST_METHOD'] == 'GET')
		{
			if (isset($_GET['submit']))
			{
				$input_username = $_GET['username'];

				if (isset($password_matches[$input_username]))
				{
					$input_password=$_GET['password'];

					if ($input_password === $password_matches[$input_username])
					{
						echo "You have successfully logged in the page";
					}
					else
					{
						echo "You have entered an incorrect password ... Please try again !!";
					}
				}
				else
				{
					echo "Sorry !! The entered username is not found";   
				}
				
			}
		}
	?>
</body>
</html>