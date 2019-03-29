<?php 
	/*
	array_intersect($array1, $array2) trả về một mảng bao gồm phần tử giống nhau và giá trị giữa 2 mảng $array 1 và $array2	
	
	array_intersect_key($array1, $array2) trả về 1 mảng bao gồm các phẩn tử giống nhau về khóa giữa 2 mảng $array1 và $array2

	array_intersect_assoc($array1, $array2) trả về 1 mảng bao gồm các phần tử giống nhau về khóa và giá trị giữa 2 mảng $array1 và $array2
	 */
	
	$array1 = array("name" => "PHP", "time" => 120,"zend","joomla"); //name ,time , 0, 1
	$array2 = array("PHP", 100);									 //0, 1

	$diff = array_intersect_key($array1, $array2);					 //0 => zend, 1=>joomla

	echo "<pre>";
	print_r($array1);

	echo "<pre>";
	print_r($array2);	

	echo "<pre>";
	print_r($diff);
 ?>