<?php 
	$str1 = "Php is hard";
	$str2 = "hard";

	echo $test = substr($str1, -4,4);

	$result = substr_compare($str1, $str2, -4, 4);

	echo $result;
 ?>