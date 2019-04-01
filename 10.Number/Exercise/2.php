<?php
	require_once 'fraction.php';

	$fraction1 = "52/6";
	$fraction2 = "34/8";


	echo "<hr /> Input : <br/>";
	echo "Phan so 1 : " . $fraction1 . "<br>";
	echo "Phan so 2 : " . $fraction2 . "<br>";

	$fraction1 = optimizaFraction($fraction1);
	$fraction2 = optimizaFraction($fraction2);


	echo "<hr/> Toi Gian : <br/>";
	echo "Phan so 1 : " . implode("/", $fraction1) . "<br>";
	echo "Phan so 2 : " . implode("/", $fraction2) . "<br>";

	$result[0] = $fraction1[0] * $fraction2[0];
	$result[1] = $fraction1[1] * $fraction2[1];

	echo "Tich : " . implode("/", $result) . "<br>";
	$result = implode("/", $result);
	$result = optimizaFraction($result);
	echo "Tich : " . implode("/", $result) . "<br>";

	echo "<pre>";
	print_r($result);
 ?>