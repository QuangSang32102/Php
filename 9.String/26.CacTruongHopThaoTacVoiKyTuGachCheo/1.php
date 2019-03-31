<?php 

	$str = '"Php"  is \hard\\'; 

	$str = addslashes($str);// addslashes($str) thêm ký tự \ vào trước các ký tự '' "" \
	echo $str;
 ?>