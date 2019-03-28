<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php 
		for ($i=1; $i <= 10 ; $i++) { 
			if($i == 3 || $i ==8){
				continue;
			}
			echo $i . "<br>";
		}
	 ?>
</body>
</html>