<?php 
	$course = array("PHP", "Zend FrameWork", "Joom");

	echo "<pre>";
	print_r($course);
	echo "</pre>";
	if (!empty($course)) {
		foreach ($course as $key => $value) {
			echo $value . "<br>";
		}
	}
	/*
		[0] = key -> [PHP] = value
	 */
 ?>