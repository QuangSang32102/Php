<?php 
	$course = array("PHP", "Joomla", "Zend FrameWork", "jQuery");

	echo "<pre>";
	print_r($course);

	echo "Current : " . current($course) . "<br>";    //PHP       (current trỏ tới phần tử hiện tại)
	echo "Next : " . next($course) . "<br>";          //Joomla    (trỏ tới phần tử tiếp theo)
	echo "Current : " . current($course) . "<br>";    //Joomla
	echo "Next : " . next($course) . "<br>";          //Zend
	echo "Previous : " . prev($course) . "<br>";      //Joomla    (trỏ tới phần tử phía trước)
	echo "Reset : " . reset($course) . "<br>";        //PHP       (quay lại phần tử đầu tiên)
	echo "End : " . end($course) . "<br>";            // jQueRy   (trỏ tới phần tử cuối cùng)

 ?>