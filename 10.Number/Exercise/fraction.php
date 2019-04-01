<?php 
	function UCLN($n1, $n2){
		for ($i=1; $i <= $n1 ; $i++) { 
			if ($n1 % $i == 0) {
				$ucln1[] = $i;
			}
		}

		for ($i=1; $i <= $n2 ; $i++) { 
			if ($n2 % $i == 0) {
				$ucln2[] = $i;
			}
		}

		$temp = array_intersect($ucln1, $ucln2);
		$result = max($temp);
		return $result;
	}

	function optimizaFraction($fraction){
		// 01 - Lay Phan So
		$arrFraction = explode("/", $fraction);

		// 02 - UCLN
		$ucln = UCLN($arrFraction[0], $arrFraction[1]);

		// 03 - Chia tu so va mau so cho UCLN
		$arrFraction[0] /= $ucln;
		$arrFraction[1] /= $ucln;

		return $arrFraction;
	}
 ?>
