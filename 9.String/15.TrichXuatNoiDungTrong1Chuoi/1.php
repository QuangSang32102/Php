<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Trich xuat noi dung 1 chuoi</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<?php 
		$str = "Php is hard";

	 ?>

	 <div class="content">
	 	<h1>Trich Xuat Noi Dung</h1>
	 	<ul class="function">
	 		<li><span>source</span><?php echo $str ?></li>
	 		<li><span>$str(0, 3)</span><?php echo substr($str, 0, 3) ?></li>
	 		<li><span>$str(3, 3)</span><?php echo substr($str, 3, 3) ?></li>
	 		<li><span>$str(3, -3)</span><?php echo substr($str, 3, -3) ?></li>
	 		<li><span>$str(-3, 3)</span><?php echo substr($str, -3, 3) ?></li>
	 		<li><span>$str(-3, 0)</span><?php echo substr($str, -3, 0) ?></li>
	 		<li><span>$str(-3, -3)</span><?php echo substr($str, -3, -3) ?></li>
	 	</ul>
	 </div>
</body>
</html>