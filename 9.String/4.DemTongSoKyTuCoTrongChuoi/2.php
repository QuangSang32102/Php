<?php 
	/*
		Tổng số ký tự có trong chuỗi, chúng ta thường gọi ngắn gọn là chiều dài của chuỗi
		Trong PHP để lấy chiều dài của chuỗi, chúng ta dùng hàm strlen()
		Lưu ý trường hợp chuỗi có chứa các ký tự UTF-8 chúng ta sử dụng hàm mb_strlen()
	 */
	
	$str = "Nguyễn Văn Bình"; //15
	$length = mb_strlen($str);

	echo $length;

	var_dump($str);
 ?>