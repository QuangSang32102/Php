<?php 
	/*
	Hàm array_walk sẽ gửi các giá trị của mảng đến 1 hàm nào đó để xử lý và nhật kết quả trả về là 1 mảng mới
	 */
	
	$array = array("name" => "PHP", "time" => 120, "zend", "joomla");
/*
	foreach ($array as $key => $value) {
		echo $key . " : "  .$value . "<br>";
	}*/

	function myFunction($value, $key, $param){
		echo $key . $param . $value . "<br>";
	}

	array_walk($array, "myFunction", " - ");
 ?>