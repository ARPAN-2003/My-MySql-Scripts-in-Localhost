<!DOCTYPE html>
<html>
	<head>
		<style>
			font {
				padding-top: 20px;
				padding-left: 250px;
				font-size: 28px;
			}
		</style>
	</head>
	
	<body>
		<div>
			<?php
				$lang = $_POST["language"];
				$LANGUAGES = "";
				
				for($i = count($lang)-1; $i >= 0 ; $i--){
					$LANGUAGES = $lang[$i] . ", " . $LANGUAGES;
				}
				
				echo $LANGUAGES;
			?>
			
		</div>
	</body>
</html>