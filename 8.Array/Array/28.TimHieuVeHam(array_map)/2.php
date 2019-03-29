<?php 
	$array = array(2,3,1);  //("even", "old", "old")

	function checkNumber($number){
		$result = ($number % 2 == 0) ? "even" : "old";
		return $result;
	}

	$newArr = array_map("checkNumber", $array);

	echo "<pre>";
	print_r($array);

	echo "<pre>";
	print_r($newArr);
 ?>