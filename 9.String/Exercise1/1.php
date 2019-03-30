<?php 
	/*
		Cho URL như sau

		http://210.245.126.171/Music/NhacTre/TinhYeu_LyMaiTrang/wma32/06_BienTham_TinhYeu_LyMaiTrang.wma

		Lấy các giá trị :

		No 				: 06
		Name 			: Bien Tham
		Album 			: Tinh Yeu
		Singer 			: Ly Mai Trang
		Type 			: wma
	 */
	
	$url = "http://210.245.126.171/Music/NhacTre/TinhYeu_LyMaiTrang/wma32/06_BienTham_TinhYeu_LyMaiTrang.wma";

	//URL 			: 06_BienTham_TinhYeu_LyMaiTrang.wma
	//ID 			: 06
	//Name 			: Bien Tham
	//Album 		: Tinh Yeu
	//Singer 		: Ly Mai Trang
	//Type 			: wma 
	

	//Cach 1
	function getInfor1($url){
		$info = explode("/", $url);
		$result = $info[count($info) -1];
		return $result;
	}

	echo getInfor1($url) . "<br>";

	//Cach 2
	
	function getInfor2($url){
		$arrayURL = parse_url($url);
		$info     = explode("/", $arrayURL['path']);
		return $result = $info[count($info) -1];		
	}

	//Cach 3

	function getInfor3($url){
		$index = strripos($url, "/");		
		$result = substr($url, $index+1);
		return $result;
	}
	getInfor3($url);

 ?>