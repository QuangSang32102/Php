<?php 
	/*
		array_slice(array, offset, length, preserve) trích xuất lấy 1 đoạn phẩn tử của mảng từ vị trí bắt đầu offset (vị trí bắt đầu trong mảng là 0) và lấy length phần tử
	 */
	
	$array = array("a", "b", "c", "d", "e");

	$newArr = array_slice($array, 2);   //c ,d ,e
	$newArr = array_slice($array, 2, 2);   //c ,d
	$newArr = array_slice($array, 2, 0);   //null

	echo "<pre>";
	print_r($newArr);
 ?>