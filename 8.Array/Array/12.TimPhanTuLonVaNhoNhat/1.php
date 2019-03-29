<?php 
	$score = array(15, 64, 12, 99, 45, 37);

	echo "<pre>";
	print_r($score);

	$total = array_sum($score);
	$length = count($score);

	echo "Trung Binh Cong : " . $total / $length . "<br>";
	echo "Tong :" . $total . "<br>";
	echo "Max :" . max($score) . "<br>"; 
	echo "Min :" . min($score); 
 ?>