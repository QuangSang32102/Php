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
 		<li><span>ceil()</span><?php echo ceil($number); // ceil() làm tròn đến số nguyên gần nhất và lớn nhất?></li> 
 		<li><span>floor()</span><?php echo floor($number); // floor() làm tròn đến số nguyên gần nhất và nhỏ nhất?></li> 

 	</ul>
 </div>
</body>
</html>