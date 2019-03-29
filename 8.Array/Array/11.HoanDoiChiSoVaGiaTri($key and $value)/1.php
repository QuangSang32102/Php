<?php 
	$course = array("php" => "PHP","jl" => "Joomla", "Zend FrameWork", "jQuery");

	echo "<pre>";
	print_r($course);

	$newArr = array_flip($course);

	echo "<pre>";
	print_r($newArr);
 ?>