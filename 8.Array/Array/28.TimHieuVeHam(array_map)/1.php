<?php 
	$array = array(2,3,1);  //("even", "old", "old")

	$newArr = array();
	foreach ($array as $key => $value) {
/*		if($value % 2 ==0){
			$newArr[] == "even";
		}
		else{
			$newArr[] == "old";
		}
*/
		$newArr[] = ($value % 2 == 0) ? "even" : "old";
	}

	echo "<pre>";
	print_r($array);

	echo "<pre>";
	print_r($newArr);
 ?>