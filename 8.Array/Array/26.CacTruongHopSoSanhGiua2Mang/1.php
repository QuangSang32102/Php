<?php 
	/*Hàm array_diff($array1, $array2) trả về 1 mảng bao gồm phần tử có giá trị tồn tại trong mảng $array1 nhưng ko
	tồn tại trong mảng $array2
		
	Hàm array_diff_key($array1, $array2) trả về 1 mảng bao gồm phần tử có khóa tồn tại trong mảng $array1 nhưng ko
	tồn tại trong mảng $array2

	Hàm array_diff_assoc($array1, $array2) trả về 1 mảng bao gồm các phần tử có khóa và giá trị tồn tại trong mảng
	$array1 nhưng ko tồn tại trong mảng $array2
	*/

	$array1 = array("name" => "PHP", "time" => 120,"zend","joomla");
	$array2 = array("PHP", 100);

	$diff = array_diff($array1, $array2);

	echo "<pre>";
	print_r($array1);

	echo "<pre>";
	print_r($array2);	

	echo "<pre>";
	print_r($diff);
 ?>