<?php 
	$str = "Chia sẻ kiến thức lập trình và chia sẻ kiến thức về kỹ năng mềm hoàn toàn miễn phí từ ZendVN luôn được cộng đồng lập trình viên ủng hộ và đánh giá cao";

	function truncateString($str, $maxChars = 50, $holder = "..."){
		$result = $str;

		if (strlen($str) > $maxChars) {
			$result = substr($str, 0, $maxChars) . $holder;	
		}

		return $result;
	}

	$str = truncateString($str, 50, "...");
	echo "<br>" . $str;
 ?>