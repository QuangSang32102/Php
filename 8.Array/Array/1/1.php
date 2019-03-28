<?php 

	$course = array();
	$course[] = "PHP";
	$course[] = "Zen FrameWork";
	$course[] = "Joomla";

	$length = count($course);
	echo $length;

	//C1 : length
	if($length > 0){
		echo "Khong la mang rong";
	}
	else{
		echo "Mang rong";
	}

	//C2 : empty
	if(!empty($course)){
		echo "Khong la mang rong";
	}
	else{
		echo "Mang rong";
	}
 ?>