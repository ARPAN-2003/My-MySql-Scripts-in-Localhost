<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Regular Expressions Uses Checking</title>
</head>
<body>
	<?php
		/*$input1 = ["It is 5 o' clock", "40 Days", "No numbers here", "In the year 2023"];

		$result1 = preg_filter('/[0-9]+/', '($0)', $input1);	   //Returns string or array of strings in which the matched pattern havebeen replaced with replacement string

		print_r($result1);*/


		/*$input2 = ["Red", "Pink", "Green", "Orange", "Yellow", "Gray", "Violet", "Blue", "Sky", "Purple"];

		$result2 = preg_grep('/^p/i', $input2);					//Returns an array containing only elements from the input that match the given pattern
		print_r($result2);
		echo "<br>";
		$result2 = preg_grep('/e$/i', $input2);
		print_r($result2);
		echo "<br>";
		$result2 = preg_grep('/e/', $input2);
		print_r($result2);
		echo "<br>";
		$result2 = preg_grep('/l/', $input2);
		print_r($result2);
		echo "<br>";
		$result2 = preg_grep('/e/', $input2, PREG_GREP_INVERT);
		print_r($result2);*/


		/*$date = "2023-08-21 21:00:05";

		$pattern = "/[-\s:]/";
		$result3 = preg_split($pattern, $date);					//Breaks a string into an array using matches of a regular expression as separators
		print_r($result3);
		echo "<br>";
		$pattern = "/([-\s:])/";
		$result3 = preg_split($pattern, $date, -1, PREG_SPLIT_DELIM_CAPTURE);
		print_r($result3);
		echo "<br>";
		$pattern = "/-/";
		$result3 = preg_split($pattern, $date, -1, PREG_SPLIT_OFFSET_CAPTURE);
		print_r($result3);*/


		/*$cuRollNumber = "CU-2023-2258-01";

		$pattern = "/CU-2023/";
		echo preg_match($pattern, $cuRollNumber) . "<br>";		//Returns 1 if the pattern was found & returns 0 if not found
		$pattern = "/cu-2023/";
		echo preg_match($pattern, $cuRollNumber) . "<br>";
		$pattern = "/cu-2023/i";
		echo preg_match($pattern, $cuRollNumber);*/


		/*$text = "I a23m a go23663od bo3232y";
		$pattern = "/[0-9\s]/";
		echo preg_replace($pattern, "", $text);					//It will replace all of the matched pattern in given string with another string*/


		/*$string = "THE RAIN IN SPAIN FAILS MAINLY ON THE PLAINS";
		$pattern = "/ain/i";
		echo preg_match_all($pattern, $string, $matches);		//It returns the number of matches of a pattern that were found in a string*/
	?>
</body>
</html>