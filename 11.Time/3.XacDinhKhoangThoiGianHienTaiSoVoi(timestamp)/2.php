<!-- Unix Timestamp là dạng thời gian thường được dùng trên hệ thống Unix. Là số giây được tính từ thời điểm 01/01/1970 lúc 0 giờ 0 phút 0 giây theo giờ GMT -->
<?php 
	$time = mktime(2,0,0,1,1,1970); // Các tham số lần lượt là hour, min, second, month, day, year

	echo $time;
 ?>