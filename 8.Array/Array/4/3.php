<?php 
	// Quan ly thong tin sinh vien
	// SV 1 : name , sex, score
/*	$student = array();
	$student["SV001"] = array("name" => "John", "sex" => 1, "score" => array(4,5,6));
	$student["SV002"] = array("name" => "Peter", "sex" => 1, "score" => array(1,10,8));
	$student["SV003"] = array("name" => "Marry", "sex" => 0, "score" => array(5,9,7));*/

	$student = array(
						"SV001" => array("name" => "John",
										 "sex"  => 1,
										 "score"=> array(4,5,6)
										),

						"SV002" => array("name" => "Peter",
										 "sex"  => 1,
										 "score"=> array(1,10,8)
										),
						"SV003" => array("name" => "Marry",
										 "sex"  => 0,
										 "score"=> array(5,9,7)
										)																
					);

	echo "<pre>";
	print_r($student);

	//Ten cua SV002
/*	echo "pre";
	print_r($student["SV002"]);*/
	echo $student["SV002"]["name"] . "<br>";      //Peter

	//Cho biet diem cua SV003
	echo $student["SV003"]["score"][1] . "<br>";  // 9

	//Thay doi ten cua SV003 thanh Anne
	$student["SV003"]["name"] = "Anne";

	//Thay doi diem cua SV003 thanh 10
	$student["SV003"]["score"][2] = 10;

	echo "<pre>";
	print_r($student);

 ?>