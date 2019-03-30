<?php 
	/*
		* implode($str, $array) chuyển các giá trị của mảng $array thành 1 chuỗi bao gồm các phần tử cách nhau bởi ký tự $str
		
		* explode($delimiter, $str) chuyển 1 chuỗi thành 1 mảng . Tách chuỗi dựa vào $delimiter, mỗi đoàn tách ra sẽ thành 1 phần tử của mảng mới 

	 */
	
	$array = array("yellow", "pink", "blue");

	echo "<pre>";
	print_r($array);

	$str = implode("+", $array);
	echo $str;
 ?>