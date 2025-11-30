<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Show 50% of text</title>
</head>
<body>
	<h1>Show 50% of the Text</h1>
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
		<label for="text">Enter your text: </label>
		<input type="text" name="text">
		<input type="submit" value="Show 50% of text">
	</form>

	<?php
		if($_SERVER['REQUEST_METHOD'] == "POST")
		{
			$text=$_POST['text'];

			if(!empty($text))
			{
				echo "<br>The 50% of the text is -- ";

				for ($i=0; $i < strlen($text) / 2; $i++)
				{ 
					echo $text[$i];
				}
			}
			else
			{
				echo "<br>Please enter some text";
			}
		}
	?>
</body>
</html>