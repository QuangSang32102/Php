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

/*	$core = array(7,8,9);
	$result = 0;
	for ($i=0; $i <count($core) ; $i++) { 
		$result += $core[$i];
	}
	echo $result;*/
	echo "<pre>";
	print_r($student);

	//John - Boy - 15
	//Peter - Boy - 19
	if(!empty($student)){
		foreach ($student as $key => $value) {
			$name = $value["name"];
			$sex  = ($value["sex"] == 1) ? "Male" : "Female";
/*			$score = $value["score"];

			$total = 0;
			for ($i=0; $i < count($score); $i++) { 
				$total += $score[$i];
			}*/
			$score = array_sum($value["score"]);
			echo "Name : " . $name . " Sex : " . $sex . " Score : " . $score . "<br>";
		}
	}
 ?>