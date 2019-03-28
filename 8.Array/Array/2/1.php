<?php 
	//Cach 1
	/*$course = array();
	$course[] = "PHP";		       //0
	$course[] = "Zen FrameWork";   //1
	$course[] = "Joomla";		   //2

	//Cach 2
	$course = array();
	$course[0] = "PHP";
	$course[1] = "Zen FrameWork";
	$course[2] = "Joomla";
*/
	//Cach 3
	$course = array("PHP", "Zen FrameWork", "Joomla");
	/*echo $course[0];*/

	for ($i=0; $i < count($course); $i++) { 
		echo $course[$i] . "<br>";
	}
?>