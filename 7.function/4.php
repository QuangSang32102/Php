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
			function checkNumber($value){
				echo $value . "<br>";
				if ($value %12 == 0) {
					return true;
				}
				else{
					return false;
				}
			}
			$result = checkNumber(15);
			if ($result==true) {
				echo "So Chan";
			}
			else{
				echo "So le";
			}
		 ?>					
	</div>
</body>
</html>