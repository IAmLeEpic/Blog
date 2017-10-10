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

			<form action="index.php" method="post">
				Title:
				<input type="text" name="title">
				Message:
				<input type="text" name="message">
				<input type="submit" name="submit">
			</form>

			<?php 
				if (isset($_POST['submit'])) {
					$dbh = new PDO("mysql:host=localhost;dbname=post;charset=utf8", "root", "");

					$sql = "insert into posts(userid, title, content)
							values (1, '" . $_POST['title'] . "', '" . $_POST['message']. "')";
					$stmt = $dbh->prepare($sql);
					$stmt->execute();
				}

			$sql = "select * from posts"; 
			$stmt = $dbh->prepare($sql); 
			$stmt->execute();
			
			while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
				//echo "<pre>" . print_r($row,1) . "</pre>";
				echo "<h1> {$row['title']} </h1>";
				echo "<p> {$row['content']} </p>";
			}

			?>
		</div>
	</div>
</body>
</html>
