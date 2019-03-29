<?php 

	$array1 = array("name" => "PHP", "time" => 120,"zend","joomla"); //name, time, 0, 1
	$array2 = array("PHP", "time" => 120);									 //0, 1

	$diff = array_diff_assoc($array1, $array2); // "name" => "PHP", "zend", "joomla"

	echo "<pre>";
	print_r($array1);

	echo "<pre>";
	print_r($array2);	

	echo "<pre>";
	print_r($diff);
 ?>