<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<?php
	$ns = "";
	$ts = "";

	$image = "";
	$time = "";
	$name = "";
	$flag = true;	
		if(isset($_REQUEST["ns"]) && isset($_REQUEST["ts"]))
		{
			$ns = $_REQUEST["ns"];
			$ts = $_REQUEST["ts"];
			if (is_numeric($ns) && (is_numeric($ts))) {
				/*
					Capricorn   23/12 - 19/01 Ma Kết
					Aquarius    20/01 - 19/02 Bảo Bình
					Pisces      20/02 - 21/03 Song ngư
					Aries       22/03 - 20/04 Bạch Dương
					Taurus      21/04 - 21/05 Kim Ngưu
					Gemini      22/05 - 22/06 Sont Tử
					Cancer      23/06 - 23/07 Cự Giãi
					Leo         24/07 - 23/08 Sư Tử
					Virgo       24/08 - 23/09 Xử Nữ
					Libra       24/09 - 23/10 Thiên Bình
					Scorpio     24/10 - 22/11 Hổ Cáp  
					Sagittarius 23/11 - 22/12 Nhân Mã
				 */
				switch ($ts) {
					case '1':
						if ($ns <= 19) { $image = "Capricorn"; $name  = "Ma Kết"; $time  = "23/12 - 19/01";}
						if ($ns >= 20 && $ns <= 31) { $image = "Aquarius"; $name  = "Bảo Bình"; $time  = "20/01 - 19/02";}
						break;
					
					case '2':
						if ($ns <= 19) { $image = "Aquarius"; $name  = "Bảo Bình"; $time  = "20/01 - 19/02";}

						if($ns >= 20 && $ns <= 29){ $image = "Pisces"; $name  = "Song Ngư"; $time  = "20/02 - 21/03";}
						break;

					case '3':
						if ($ns <= 21) { $image = "Pisces"; $name  = "Song Ngư"; $time  = "20/02 - 21/03";}

						if ($ns >= 22 && $ns <= 31) { $image = "Aries"; $name  = "Bạch Dương"; $time  = "22/03 - 20/04";}
						break;

					case '4':
						if ($ns <= 20) { $image = "Aries"; $name  = "Bạch Dương"; $time  = "22/03 - 20/04";}

						if ($ns >= 21 && $ns <= 30) { $image = "Taurus"; $name  = "Kim Ngưu"; $time  = "21/04 - 21/05";}
						break;

					case '5':
						if ($ns <= 21) { $image = "Taurus"; $name  = "Kim Ngưu"; $time  = "21/04 - 21/05";}

						if ($ns >= 22 && $ns <= 31) { $image = "Gemini"; $name  = "Song Tử"; $time  = "22/05 - 22/06";}
						break;

					case '6':
						if ($ns <= 22) { $image = "Gemini"; $name  = "Song Tử"; $time  = "22/05 - 22/06";}

						if ($ns >= 23 && $ns <= 30) {
							$image = "Cancer"; $name  = "Cự Giải"; $time  = "23/06 - 23/07";}
						break;

					case '7':
						if ($ns <= 23) { $image = "Cancer"; $name  = "Cự Giải"; $time  = "23/06 - 23/07";}

						if ($ns >= 24 && $ns <= 31) { $image = "Leo"; $name  = "Sư Tử"; $time  = "24/07 - 23/08";}
						break;

					case '8':
						if ($ns <= 23) { $image = "Leo"; $name  = "Sư Tử"; $time  = "24/07 - 23/08";}

						if ($ns >= 24 && $ns <= 31) { $image = "Virgo"; $name  = "Xữ Nữ"; $time  = "24/08 - 23/09";}
						break;

					case '9':
						if ($ns <= 23) { $image = "Virgo"; $name  = "Xữ Nữ"; $time  = "24/08 - 23/09";}

						if ($ns >= 24 && $ns <= 30) { $image = "Libra"; $name  = "Thiên Bình"; $time  = "24/09 - 23/10";}
						break;

					case '10':
						if ($ns <= 23) { $image = "Libra"; $name  = "Thiên Bình"; $time  = "24/09 - 23/10";}

						if ($ns >= 24 && $ns <= 31) { $image = "Scorpio"; $name  = "Hổ Cáp"; $time  = "24/10 - 22/11";}
						break;

					case '11':
						if ($ns <= 22) { $image = "Scorpio"; $name  = "Hổ Cáp"; $time  = "24/10 - 22/11";}

						if ($ns >= 23 && $ns <= 30) { $image = "Sagittarius"; $name  = "Nhân Mã"; $time  = "23/11 - 22/12";}
						break;

					case '12':
						if ($ns <= 22) { $image = "Sagittarius"; $name  = "Nhân Mã"; $time  = "23/11 - 22/12";}

						if ($ns >= 23 && $ns <= 31) { $image = "Capricorn"; $name  = "Ma Kết"; $time  = "23/12 - 19/01";}
						break;																		
					default:
						$flag = false;
						break;
				}
			}
			else{
				$flag = false;
			}	
		} 
	 ?>
<div class="content">
	<div class="row">
		<h1>Bạn Thuộc Chòm Sao Gì</h1>
	</div>
	<form action="" method="post" name="main-form">
		<div class="row">
			<span>Ngày Sinh</span>
			<input type="text" name="ns" value="<?php echo $ns; ?>">
		</div>
		<div class="row">
			<span>Tháng Sinh</span>
			<input type="text" name="ts" value="<?php echo $ts; ?>">
		</div>
		<div class="row">
			<input type="submit" value="Submit">
		</div>
		<div class="row">
			<p>Kết Quả</p>
		</div>
	</form>
	<div class="result">
		<img src="img/<?php echo $image;?>.jpg" alt="<?php echo $image;?>">
		<p><?php echo $name . " "; ?><span><?php echo $image . " "; ?> <?php echo $time; ?></span></p>
		<br style="clear: both;">
		<?php 
			if ($flag == false) {
				echo "Dữ liệu không hợp lệ";
			}
			else
			{
				echo " ";
			}
		 ?>
	</div>	
</div>
</body>
</html>