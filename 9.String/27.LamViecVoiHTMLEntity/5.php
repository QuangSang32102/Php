<?php 
	$str = "&lt;b&gt;Php&lt;/b&gt; is hard &copy;";

	echo "Input : " . $str . "<br>";
	echo "Output : " . html_entity_decode($str);// Chuyển đổi các giá trị html enttities được gọi bởi hàm htmlentities về giá trị ban đầu
	
 ?>