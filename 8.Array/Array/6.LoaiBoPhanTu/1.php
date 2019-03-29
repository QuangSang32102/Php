<?php 
	$course = array("PHP", "Joomla", "Zend FrameWork", "jQuery");

	echo "<pre>";
	print_r($course);

	$lastItem = array_pop($course);
	echo $lastItem;

	echo "<pre>";
	print_r($course);
 ?>