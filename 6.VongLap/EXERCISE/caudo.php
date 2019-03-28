<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="content">
		<h1>Giãi Câu Đố Bằng Vòng Lặp</h1>
		<div class="bot">
			<p>Yêu nhau cau sáu bổ ba</p>
			<p>Ghét nhau cau sáu bổ ra làm mười</p>
			<p>Mỗi người một miếng trăm người</p>
			<p>Có mười bảy quả hỏi người ghét yêu</p>
			<p class="f">Hỏi có bao nhiêu người yêu nhau, ghét nhau?</p>
			<br style="clear: both;">
			<?php 
				//x , y
				//x + y = 17
				//3x + 10y = 100
				for ($x=1; $x <= 17; $x++) { 
					for ($y=1; $y <= 17; $y++) { 
						if ($x + $y == 17 && $x * 3 + $y *10 == 100) {
							echo "Số người yêu nhau = " . $x ."<br>";
							echo "Số người ghét nhau = " . $y;
						}
					}
				}
			 ?>
		</div>
	</div>
</body>
</html>