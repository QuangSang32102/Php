<?php 
	function checkEmail($value){

		$pattern = '#^[a-z][a-z0-9_\.]{4,31}@[a-z0-9]{2,}(\.[a-z0-9]{2,4}){1,2}$#';

		$flag = false;
		if(preg_match($pattern, $value) ==true){
			$flag = true;
		}

		return $flag;
	}


	function checkUsername($value){
		$pattern = '#^[a-z_][a-z0-9_\.\s]{4,31}$#';

		$flag = false;
		if(preg_match($pattern, $value) ==true){
			$flag = true;
		}

		return $flag;
	}

	function checkPasswork($value){
		$pattern = '#^(?=.*\d)(?=.*[A-Z])(?=.*\W).{8,8}$#';//Lỗi code 

		$flag = false;
		if([preg_match($pattern, $value)] == true){
			$flag = true;
		}

		return $flag;
	}

/*	$result1 = checkEmail('vittsd2124@gmail.com');
	echo $result1 . "<br>";

	$result2 = checkUsername('sdasd23');
	echo $result2;*/

/*	$resul = checkPasswork('lthaln12');
	echo $resul;*/
	function checkWebsite($value){
		$pattern = '#^(http?://(www\.)?|(www\/))[a-z0-9\-]{3,}(\.[a-z]{2,4}){1,2}$#';

		$flag = false;
		if(preg_match($pattern, $value) ==true){
			$flag = true;
		}

		return $flag;
	}	

/*	$resultfinal = checkWebsite('https://www.youtube.com');//Lỗi code

	echo $resultfinal;*/

 ?>