<?php 
	$course = array("PHP", "Joomla", "Zend FrameWork", "jQuery", "PHP", "Joomla");

	echo "<pre>";
	print_r($course);

	$newArr = array_unique($course);

	echo "<pre>";
	print_r($newArr);
 ?>