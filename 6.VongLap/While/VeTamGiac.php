<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="content">
	<ul>
		<li>		
			<?php 
				for ($i=1; $i <= 6; $i++) { 
					echo str_repeat("*", $i) . "<br>";
				}
			 ?>		
		</li>
		<li>
			<?php 
				for ($i=6; $i >0 ; $i--) { 
					echo str_repeat("*", $i) . "<br>";
				}
			 ?>
		</li>
	</ul>

</div>
</body>
</html>