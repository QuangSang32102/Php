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
			function createBox($content, $width = 150, $height = 50)
			{
				$result = '<div style="width: '.$width.'px; height: '.$height.'px">';
				$result .= '<p>'.$content.' <span>('.$width.'x'.$height.')</span></p>';
				$result .= '</div>';
				return $result;
			}
			$boxA = createBox("Box A", 500, 100);
			$boxB = createBox("Box B");
			echo $boxA . $boxB;
		 ?>					
	</div>
</body>
</html>