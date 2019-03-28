<?php 
	$course = array("php" => "PHP", "zend" => "Zend FrameWork", "joomla" => "Joomla", 0 => "item 1", 1 => "item 1");
	echo "<pre>";
	print_r($course);

	if(!empty($course)){
		foreach ($course as $key => $value) {
		echo $key . " : " . $value . "<br>";
		}
	}

 ?>