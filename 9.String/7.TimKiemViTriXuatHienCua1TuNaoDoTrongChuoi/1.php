 <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
<?php 
	/*
		Sữ dụng hàm stripos() để tìm kiếm chỉ số xuất hiện đầu tiên của 1 từ nào đó trong chuỗi
		
		Sữ dụng hàm strripos() để tìm kiếm chỉ số xuất hiện cuối cùng của 1 từ nào đó trong chuỗi

		Lưu ý strpos() và strripos() dành cho PHP version 4
	 */
	
	$str = "hello php is easy, php is easy";
	$world = "php";
	echo $str[6];
 ?>
 <div class="content">
 	<h1>Chuyển Đổi Chữ Hoa, Chữ Thường</h1>
 	<ul class="function">
 		<li><span>source</span><?php echo $str; ?></li>
 		<li><span>world</span><?php echo $world; ?></li>
 		<li><span>stripos</span><?php echo stripos($str, /*"php"*/$world); ?></li>
 		<li><span>strripos</span><?php echo strripos($str, /*"php"*/$world); ?></li>
 	</ul>
 </div>
</body>
</html>