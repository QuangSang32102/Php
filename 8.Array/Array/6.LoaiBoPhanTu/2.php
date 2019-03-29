<?php 
	$course = array("PHP", "Joomla", "Zend FrameWork", "jQuery");

	echo "<pre>";
	print_r($course);

	$firstItem = array_shift($course);
	echo $firstItem;

	echo "<pre>";
	print_r($course);
 ?>