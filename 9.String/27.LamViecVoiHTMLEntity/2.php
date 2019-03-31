<?php 
	$str = "<b>Php</b> is hard";

	echo "Input : " . $str . "<br>";
	echo "Output : " . htmlspecialchars($str);// Chuyển đổi các ký tự được quy định trước sang giá trị html enttities
 ?>