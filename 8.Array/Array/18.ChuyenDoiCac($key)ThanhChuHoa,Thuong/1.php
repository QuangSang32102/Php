<?php 
	$course = array("pHp" => "PHP", "jL" => "Joomla", "Zend" => "FrameWork");

	$newArr = array_change_key_case($course, CASE_UPPER/*And CASE_LOWER*/);

	echo "<pre>";
	print_r($course);

	echo "<pre>";
	print_r($newArr);
 ?>