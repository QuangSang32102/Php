<?php 
	$course = array("php" => "PHP", "jl" => "Joomla", "Zned" => "FrameWork");

	echo "<pre>";
	print_r($course);

	if (array_key_exists("jl", $course)) {
		echo "Exists";
	}
	if (array_key_exists("j", $course)) {
		echo "Exists";
	}
 ?>