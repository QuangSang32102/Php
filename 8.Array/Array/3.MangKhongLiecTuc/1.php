<?php 
	//Cach 1
	$course = array();
	$course["php"] = "PHP";					// index: php (key)
	$course["zend"] = "Zend FrameWork";		// index: zend
	$course["joomla"] = "Joomla";			// key: joomla
	$course[] = "item 1";					// key: 0
	$course[] = "item 1";					// key: 1

	echo "<pre>";
	print_r($course);

	echo $course["0"];
 ?>