<?php 
	$array1 = array("a", "b", "c");
	$array2 = array(1,2,3);
	$array3 = array("php" => "PHP","jl" => "Joomla");

	$newArr = array_merge($array1,$array2,$array3);

	echo "<pre>";
	print_r($newArr);
 ?>