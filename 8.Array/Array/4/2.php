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
 ?>