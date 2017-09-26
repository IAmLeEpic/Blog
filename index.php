<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>

	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Bitter|Lora|Playfair+Display" rel="stylesheet">
</head>
<body>
	<div class="blogContainer">
		<div class="blogContent">
			<?php 
			include_once("data.php");

			foreach ($data as $key => $value) {
				echo "<article><h1> {$value["title"]}</h1>";
				echo "<p>{$value["message"]}</p>";
				echo "<p>\"Written By\" {$value["author"]}</p>";
				echo "</article>";	
			}

			?>
		</div>
	</div>
</body>
</html>
