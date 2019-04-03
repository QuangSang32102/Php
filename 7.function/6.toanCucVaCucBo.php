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
			$value = "ABC";
			function createBox($content, $width = 150, $height = 50)
			{
				$result = '<div style="width: '.$width.'px; height: '.$height.'px">';
				$result .= '<p>'.$content.' <span>(200x50)</span></p>';
				$result .= '</div>';
				//Cach 1
				//global $value;
				//echo $value;
				//
				//Cach 2
				echo $GLOBALS["value"];// Hàm $GLOBALS[] dùng để gọi các giá trị nằm ở biến toàn cục
				return $result;
			}
			$boxA = createBox("Box A");
			echo $boxA;
		 ?>					
	</div>
</body>
</html>