<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="content">
		<?php 
			function createBox($value='')
			{
				echo '<div style="width: 200px; height: 50px">';
				echo '<p>Box A <span>(200x50)</span></p>';
				echo '</div>';
			}
			createBox();
			createBox();
		 ?>					
	</div>
</body>
</html>