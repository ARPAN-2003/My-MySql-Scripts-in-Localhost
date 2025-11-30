<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Maximum number from dataset</title>
</head>
<body>
	<?php
		$data_set = array(
							array(5,4,8,1,3),
							array(6,11,4,9,18),
							array(2,7,1,0,9),
							array(9,5,1,8,3),
							array(6,3,7,1,9),
							array(1,4,2,5,8),
							array(11,3,77,14,8),
							array(8,1,4,100,0),
							array(3,2,9,5,16),
						);

		$max = $data_set[0][0];

		for ($row=0; $row < count($data_set); $row++)
		{
			for ($column=0; $column < 5; $column++)
			{
				if ($max < $data_set[$row][$column])
				{
					$max = $data_set[$row][$column];
				}
			}
		}

		echo "\nSo the maximum number from given two dimensional array is " . $max;
	?>
</body>
</html>