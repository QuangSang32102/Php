<?php 
	$course = array("name" => "PHP", "time" => 200);

	echo "<pre>";
	print_r($course);

	$newArr =  array_values($course);
	$newArr2 = array_keys($course);

	echo "<pre>";
	print_r($newArr);
	echo "<pre>";
	print_r($newArr2);
 ?>