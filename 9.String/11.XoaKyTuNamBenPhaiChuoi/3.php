<?php 
	$str = "Php is hard";
	echo "Input : " . $str ."- length: ". strlen($str) . "<br>";


	$str = rtrim($str, "hard");

	echo "Output : " . $str . "- length:" . strlen($str) ;
 ?>