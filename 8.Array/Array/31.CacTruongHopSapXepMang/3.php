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
	
	$array = array("f" =>"PHP", "d" => 80, "g" => 100);
	echo "Input";
	echo "<pre>";
	print_r($array);

	ksort($array);

	echo "Output";
	echo "<pre>";
	print_r($array);

 ?>