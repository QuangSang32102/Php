<?php 
	$time = getdate();

	echo "<pre>";
	print_r($time);

	$hour = $time["hours"];

	echo $hour;
 ?>