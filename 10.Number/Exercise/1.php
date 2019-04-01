<?php 
	require 'fraction.php';

	$fraction = "52/6";



	$result = optimizaFraction($fraction);
	$result = implode("/", $result);
	echo $result;
 ?>