<?php 
	/*
		Sắp xếp theo giá trị 
			sort(array) sắp xếp các phần tử trong mảng array tăng dần theo giá trị
			rsort(array) sắp xếp các phẩn tử trong mảng array giảm dần theo giá trị
	 */
	
	/*
		Sắp xếp theo khóa :
			ksort(array) sắp xếp các phần tử trong mảng array tăng dần theo khóa
			krsort(array) sắp xếp các phần tử trong mảng array giảm dần theo khóa

	 */
	
	$array = array(1,4,2,14,29,23);
	echo "Input";
	echo "<pre>";
	print_r($array);

	rsort($array);

	echo "Output";
	echo "<pre>";
	print_r($array);

 ?>