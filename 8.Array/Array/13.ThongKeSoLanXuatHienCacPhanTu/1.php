<?php 
	$score = array(1,1, 2, 4,8,4);

	$newArr = array_count_values($score);
	echo "<pre>";
	print_r($score);

	echo "<pre>";
	print_r($newArr);
 ?>