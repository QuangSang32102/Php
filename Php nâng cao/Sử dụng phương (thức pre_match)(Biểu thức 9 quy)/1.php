<?php 
	$subject = 'Php is hard';
	$pattern = '/Php/';
	
	if(preg_match($pattern, $subject, $match) == true){ //Trả về kết quả cho biến $match 
		echo "Tim thay";
	}
	else{
		echo "Khong tim thay";
	}

	echo "<pre>";
	print_r($match);
 ?>