<?php 
	$course = array("PHP", "Joomla", "Zend FrameWork", "jQuery", "PHP", "Joomla");

	echo "<pre>";
	print_r($course);

	unset($course[0], $course[2]);

	echo "<pre>";
	print_r($course);
 ?>