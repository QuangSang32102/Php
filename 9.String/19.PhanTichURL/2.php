<?php 
	$str = "https://www.thegioididong.com:88/dien-thoai/iphone-x.php?id=79&page=2#item1";

	$date = parse_url($str);

	echo "<pre>";
	print_r($date);
 ?>