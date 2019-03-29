<?php 
	$course = array("PHP", "Joomla", "Zend FrameWork", "jQuery");

	function removeItem(&$array, $type = "first", $total = 2){
		$result = array();

		if(!empty($array)){
			if ($total >= count($array)) {
				$result = $array;
				$array = null;
			}
			else{
				if($type == "first"){
					for ($i=1; $i <= $total ; $i++) { 
						$result[] = array_shift($array);
					}
				}
				else if($type == "last"){
					for ($i=1; $i <= $total ; $i++) { 
						$result[] = array_pop($array);
					}
				}
			}

		}
		return $result;
	}

	echo "<pre>" . "<br>";
	print_r($course);

	$arrTemp = removeItem($course, "first", 2);

	echo "arrTemp" . "<br>";
	echo "<pre>";
	print_r($arrTemp);

	echo "course" . "<br>";
	echo "<pre>";
	print_r($course);

 ?>