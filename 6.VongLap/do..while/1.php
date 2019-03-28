<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="content">
	<h1>Image</h1>
	<div class="image">
		<?php 
			$i = 1;
			do {
				echo '<img src="img/'. $i . '.jpg">';
				$flagshow = 0;
				if (isset($_REQUEST["show"])) {
					$flagshow = $_REQUEST["show"];
					$i++;
				}

			} while ($i <= 5 && $flagshow ==1);
		 ?>
		<a href="1.php?show=1">Show All</a>
		<br>
		<a href="1.php?show=0">Show Demo</a>
	</div>
</div>
</body>
</html>