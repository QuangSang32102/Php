<?php 
	$number = "2";
	$number = "-1.23";
	$number = "12s";
	$number = "02,000,000";

	if(is_numeric($number)){
		echo "Number";
	}
	else{
		echo "Not Number";
	}
 ?>