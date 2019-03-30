 <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
<?php 
	$str = "hello php is easy, php is easy";
	$world = "php";
	echo $str[6];
 ?>
 <div class="content">
 	<h1>Chuyển Đổi Chữ Hoa, Chữ Thường</h1>
 	<ul class="function">
 		<li><span>source</span><?php echo $str; ?></li>
 		<li><span>substr(2)</span><?php echo substr($str, 2); ?></li>

 		<li><span>substr(2,5)</span><?php echo substr($str, 2, 5); ?></li>

 		<li><span>substr(0,5)</span><?php echo substr($str, 0, 5); ?></li>

 		<li><span>substr(-1)</span><?php echo substr($str, -1); ?></li>
 		
 		<li><span>substr(-3, 2)</span><?php echo substr($str, -3, 2); ?></li>

 	</ul>
 </div>
</body>
</html>