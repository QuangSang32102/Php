<?php 
	$course = array("PHP", "Zend FrameWork", "Joom");
	if (!empty($course)) {
		for ($i=0; $i < count($course); $i++) { 
			echo $course[$i] . "<br>";
		}
	}
 ?>