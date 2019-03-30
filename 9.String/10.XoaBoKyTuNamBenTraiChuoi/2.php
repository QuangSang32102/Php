<?php 
	/*
		ltrim($str, $params) sẽ xóa các ký tự nằm bên trái của 1 chuỗi nào đó

		tham số $params khi bằng rỗng sẽ xóa bỏ các ký tự sau:

		"\0" - NULL
		"\t" - tab
		"\n" - new line
		"\x0B" - vertical tab
		"\r" - carriage return
		" " - ordinary white space 
	 */
	
	$str = "\n\n\nPhp is hard";
	echo "Input : " . $str ."- length: ". strlen($str) . "<br>";

	$str = ltrim($str);

	echo "Output : " . $str . "- length:" . strlen($str) ;
 ?>