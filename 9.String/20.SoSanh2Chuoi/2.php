<?php 
	$str1 = "Php is hard";
	$str2 = "Php";

	$result = substr_compare($str1, $str2, 0, 3);

	echo $result;
 ?>