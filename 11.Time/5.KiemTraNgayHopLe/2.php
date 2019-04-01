<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Thao Tac Voi Ngay Thang</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>

	<?php 
		// 1-> 31
		$arrDay = range(1, 31);
		$arrMonth = range(1, 12);
		$arrYear = range(1970, 2019);

		function createSelectBox($arrData, $name, $keySelected){
			$strDay = "";

			if(!empty($arrData)){
				$strDay = '<select name="'.$name.'" id="">';
				for ($i=0; $i < count($arrData); $i++) { 
					if($keySelected == $i){
						$strDay .= '<option value="'.$i.'" selected="true"> '.$arrData[$i].'</option>'; 
					}
					else{
						$strDay .= '<option value="'.$i.'">'.$arrData[$i].'</option>';
					}					
				}

				$strDay .= '</select>';
			}

			return $strDay;
		}


		$day = (isset($_REQUEST['day-select'])) ? $_REQUEST['day-select'] : 0;
		$month = (isset($_REQUEST['month-select'])) ? $_REQUEST['month-select'] : 0;
		$year = (isset($_REQUEST['year-select'])) ? $_REQUEST['year-select'] : 0;

		$strDay = createSelectBox($arrDay, "day-select", $day);
		$strMonth = createSelectBox($arrMonth, "month-select", $month);
		$strYear = createSelectBox($arrYear, "year-select", $year);		
	 ?>
	<div class="content">
		<h1>Thao Tác Với Thời Gian</h1>
		<form action="#" method="post" id="main-form" name="main-form">
			<div class="row">
				<span>Ngày</span>
				<?php 
					echo $strDay;
				 ?>				
			</div>
			<div class="row">
				<span>Tháng</span>
				<?php echo $strMonth; ?>
			</div>
			<div class="row">
				<span>Năm</span>
				<?php echo $strYear; ?>
			</div>	
			<div class="row">
				<input type="submit" value="Check Date">
			</div>	
			<div class="result">
				<?php 
					echo "Ngày Được Chọn : $arrDay[$day]/$arrMonth[$month]/$arrYear[$year]";
					if (checkdate($arrMonth[$month], $arrDay[$day], $arrYear[$year])) {
						echo "<p>Ngày Hợp Lệ</p>";
					}
					else{
						echo "<p>Ngày Không Hợp Lệ</p>";
					}
				 ?>
			</div>	
		</form>
	</div>
</body>
</html>