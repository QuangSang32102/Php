<?php 
	$str = 'Php is hard \n It \is \east';
	echo $str . "<br>";

	$str1 = stripslashes($str);
	echo "stripslashes : " . nl2br($str1) . "<br>";

	$str2 = stripcslashes($str);
	echo "stripcslashes : " . nl2br($str2);// nl2br neu co /n thi no se xuong hang

 ?>