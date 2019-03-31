 <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Lam Tron So</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
<?php 
	$number = 8.5; //8 9
 ?>
 <div class="content">
 	<h1>Lam Tron So</h1>
 	<ul class="function">
 		<li><span>source</span><?php echo $number; ?></li>
 		<li><span>Round</span><?php echo round($number); ?></li>
 		<li><span>Round(n, 0)</span><?php echo round($number,0); ?></li>
 		<li><span>Round(n, 0, PHP_ROUND_HALF_UP)</span><?php echo round($number,0, PHP_ROUND_HALF_UP); ?></li>
 		<li><span>Round(n, 0, PHP_ROUND_HALF_DOWN)</span><?php echo round($number,0, PHP_ROUND_HALF_DOWN); ?></li>
 		<li><span>Round(n, 0, PHP_ROUND_HALF_ODD)</span><?php echo round($number,0, PHP_ROUND_HALF_ODD); ?></li>
 		<li><span>Round(n, 0, PHP_ROUND_HALF_EVEN)</span><?php echo round($number,0, PHP_ROUND_HALF_EVEN); ?></li>
 	</ul>
 </div>
</body>
</html>