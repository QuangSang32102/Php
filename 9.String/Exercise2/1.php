<?php 
	/*
											Chuẩn Hóa Chuỗi
					1 chuỗi được xem là chuẩn hóa khi:
					*	Không có khoảng trắng ở đầu và cuối chuỗi
					*	Giữa các từ trong chuỗi chỉ tồn tại 1 khoảng trắng duy nhất
					*	Ký tự đầu tiên trong chuỗi phải là ký tự in hoa. Nếu chuỗi là 1 danh từ riêng thì yêu cầu 	  các ký tự đầu tiên phải được viết hoa. Các ký tự còn lại dạng chữ thường
	 */
	
	$str = "    nguyen  VAn   aN ";

	function formatString($str, $type = null){
		//Dua tat ca cac ky tu ve chu thuong
		
		$str = strtolower($str);

		//Loai bo khoang trang dau va cuoi chuoi
	
		$str = trim($str);
		//Loai bo khoang trang du thua giua cac tu
		
		$array = explode(" ", $str);

		foreach ($array as $key => $value) {
			if (trim($value) == null) {
				unset($array[$key]);
				continue;
			}

			//Xu ly cho danh tu
			if ($type =="danh-tu") {
				$array[$key] = ucfirst($value);
			}
		}

		$result = implode(" ", $array);

		//Chuyen ky tu dau tien thanh chu hoa
		$result = ucfirst($result);
		return $result;
	}

	$result = formatString($str, "danh-tu");
	echo $result . "<br>";
	echo strlen($result);
 ?>