<?php 
	date_default_timezone_set('Asia/Ho_Chi_Minh'); // Thiết lập múi giờ date_default_timezone_set()
	$timeZone = date_default_timezone_get();

	echo $timeZone;

	$time = getdate();
	echo "<pre>";
	print_r($time);
 ?>