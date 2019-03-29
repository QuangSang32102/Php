<?php 
	$course = array("php" => "PHP", "jl" => "Joomla", "Zend" => "FrameWork");

	$keyArr = array_rand($course, 2);

	echo "<pre>";
	print_r($course);

	echo "<pre>";
	print_r($keyArr);
 ?>