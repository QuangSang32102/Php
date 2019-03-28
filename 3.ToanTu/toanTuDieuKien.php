<?php 
	$var = "Monster";
	$result = (is_string($var) == 1) ? "Chuỗi" :"Không phải chuỗi";
	echo $result . "<br/>";
	$n = 0;
	$ketqua = ($n > 0) ? "Số dương" : (($n < 0) ? "Số âm" : "Số 0");
	echo $ketqua;
 ?>