<?php 
	/*
		array_slice(array, offset, length, preserve) trích xuất lấy 1 đoạn phẩn tử của mảng từ vị trí bắt đầu offset (vị trí bắt đầu trong mảng là 0) và lấy length phần tử
	 */
	
	$array = array("a", "b", "c", "d", "e");

	$newArr = array_slice($array, 2, 2, true);   //c(2) ,d(3) 
	$newArr = array_slice($array, 2, 2, false);   //c ,d 



	echo "<pre>";
	print_r($newArr);
 ?>