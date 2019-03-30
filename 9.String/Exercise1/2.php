<?php 

	$url = "http://210.245.126.171/Music/NhacTre/TinhYeu_LyMaiTrang/wma32/06_BienTham_TinhYeu_LyMaiTrang.wma";

	//Cach 3
	
	function getInfor3($url){
		$index = strripos($url, "/");		
		$result = substr($url, $index+1);
		return $result;
	}
	$info = getInfor3($url);

	$arrayInfo = explode("_", $info);

	//ID
	$result["id"] = $arrayInfo[0];
	echo $arrayInfo[3];

	//Type
	$arrType = explode(".", $arrayInfo[3]);
	$result ["type"] = $arrType[1];

	//Name, Audio, Singer
	$arrayInfo[3] = $arrType[0];

	function format($str){
		//str = LyMaiTrang -> result Ly Mai Trang
		// result = Ly Mai Trang
		$result = $str[0];

		for($i = 1; $i < strlen($str); $i++){
			if(ctype_upper($str[$i]) == true){
				$result .= " " . $str[$i];
			}
			else{
				$result .= $str[$i];
			}
		}
		return $result;
	}

	$result["singer"] = format($arrayInfo[3]);
	$result["album"] = format($arrayInfo[2]);
	$result["name"] = format($arrayInfo[1]);

	echo "<pre>";
	print_r($result);
 ?>