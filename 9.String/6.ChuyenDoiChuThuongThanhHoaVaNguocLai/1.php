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
		Chuyển đổi chữ Thường thành chữ Hoa, chúng ta dùng hàm strtoupper($str). Ngược lại chúng ta dùng hàm strtolower($str)

		Chuyển đổi ký tự đầu tiên trong chuỗi thành chữ HOA ucfirst($str)

		Chuyển đổi ký tự đầu tiên trong chuỗi thành chữ thường lcfirst($str)

		Chuyển đổi tất cả các ký tự đầu tiên của các từ trong 1 chuỗi thành chữ HOA ucwords($str)
	 */
	$str = "PHP is hard";
 ?>
 <div class="content">
 	<h1>Chuyển Đổi Chữ Hoa, Chữ Thường</h1>
 	<ul class="function">
 		<li><span>source</span><?php echo $str; ?></li>
 		<li><span>strtoupper</span><?php echo strtoupper($str); ?></li>
 		<li><span>strtolower</span><?php echo strtolower($str); ?></li>
 		<li><span>ucfirst</span><?php echo ucfirst($str); ?></li>
 		<li><span>lcfirst</span><?php echo lcfirst($str); ?></li>
 		<li><span>ucwords</span><?php echo ucwords($str); ?></li>
 	</ul>
 </div>
</body>
</html>