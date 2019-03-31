<?php 
	$arrayNumber = array(1, -3, 8.5, 8.51, 4, 9);

	echo "<pre>";
	print_r($arrayNumber) . "<br>";

	echo "Max : ". max($arrayNumber) . "<br>";

	echo "Min : " . min($arrayNumber) . "<br>";

	echo "Sum : " . array_sum($arrayNumber);
 ?>