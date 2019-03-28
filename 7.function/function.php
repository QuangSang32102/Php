<?php 
	// 18 = 1 + 8 = 9
	// 232 = 2 + 3 + 2
	function sumDigit($number){
		//18 -> 8 : sum = 8, n = 1
		//1 -> 1 : sum = 9
		//232 -> 2 : sum = 2, n =23
		//23 -> 3 : sum = 5, n = 2
		//2 -> 2 : sum = 7, n = 0
		
			$sum = 0;
			while ($number > 0) {
				$digit = $number %10;
				$sum += $digit;
				$number = ($number - $digit) / 10;
			}
			return $sum;
		}
 ?>