<?php 
	/*
		array_splice(array1, offset, length, array2) xóa bỏ 1 đoạn phần tử của mảng array1 từ vị trí off set và lấy length phần tử. Sau đó thay thế các phần tử bị loại bỏ bằng mảng array2
	 */
	$array = array("a", "b", "c" ,"d", "e");

	echo "Input : ";
	echo "<pre>";
	print_r($array);

	/*$newArr = array_splice($array, 2);*/
	$newArr = array_splice($array, 2, 1);

	echo "NewArray : ";
	echo "<pre>";
	print_r($newArr);

	echo "Output : ";
	echo "<pre>";
	print_r($array);
 ?>