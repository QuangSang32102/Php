<?php 
	$str = "      Php      is      hard    ";

	//Khoảng trắng thừa ở bên trái và phải
	$str = trim($str);

	//Khoảng trắng dư thừa của các từ
	//Php is hard
	
	$array = explode(" ", $str);

	echo "<pre>";
	print_r($array);

	foreach ($array as $key => $value) {
		if(trim($value) == null){
			unset($array[$key]);
		}
	}

	/*echo "<pre>";
	print_r($array);*/

	$str = implode(" ", $array);

	echo $str . "- length : " .strlen($str);
 ?>