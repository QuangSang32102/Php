<?php 
	$str = "Php is hard\n\n\n";
	echo "Input : " . $str ."- length: ". strlen($str) . "<br>";


	$str = rtrim($str);

	echo "Output : " . $str . "- length:" . strlen($str) ;
 ?>