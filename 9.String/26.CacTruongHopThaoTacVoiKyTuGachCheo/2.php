<?php 

	$str = 'Php is hard'; 

	$str = addcslashes($str, "iea"/* ==$character */);// Thêm ký tự \ vào trước ký tự $character
	echo $str;
 ?>