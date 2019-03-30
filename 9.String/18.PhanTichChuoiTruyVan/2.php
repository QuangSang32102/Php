<?php 
	/*
		Chúng ta sẽ sử dụng hàm parse_str() để chuyển các nội dung truy vấn vào các biến hoặc mảng

	 */
	
	$str = "name=Peter&age=23";

	parse_str($str, $arr);

	echo "<pre>";
	print_r($arr);
 ?>