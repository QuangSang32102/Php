<?php 
	$str = "&lt;b&gt;Php&lt;/b&gt; is hard";

	echo "Input : " . $str . "<br>";
	echo "Output : " . htmlspecialchars_decode($str);// Chuyển đổi các giá trị html enttities được gọi bởi hàm htmlspecialchars về giá trị ban đầu
 ?>