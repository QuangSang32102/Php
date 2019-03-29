<?php 
	$course = array("name" => "PHP", "time" => 80,100);

	echo "<pre>";
	print_r($course);

	echo $result = serialize($course); //Để lưu vào cơ sở dữ liệu
 ?>