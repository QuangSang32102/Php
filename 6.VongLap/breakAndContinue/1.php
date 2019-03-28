<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php 
		$temp = 0;
		for($i =0 ; $i<=100 ;$i +=8){
			if($i % 2 ==0 && $i > 0){
				echo $i . "<br>";
				$temp += 1;
				if ($temp == 3) {
					break;
				}
			}
		}
	 ?>
</body>
</html>