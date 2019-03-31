<?php 

	$str = '\"Php\" is \\hard\\'; 

	$str = stripslashes($str);// hiển thị chuỗi ko có các ký tự gạch chéo được tạo bởi hàm addslashes
	echo $str;
 ?>