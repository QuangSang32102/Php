<?php 
	$course = array("php" => "PHP", "jl" => "Joomla", "Zned" => "FrameWork");

	echo "<pre>";
	print_r($course);

	if (in_array("PHP", $course)) {
		echo "Exists";
	}
	if (in_array("PH", $course)) {
		echo "Exists";
	}
 ?>