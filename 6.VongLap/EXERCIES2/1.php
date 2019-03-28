<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<?php 
		$money ="";
		$r1 = "";
		$r2 = "";
		$r3 = "";
		$r4 = "";
		$t1 = "";
		$t2 = "";
		$t3 = "";
		$t4 = "";
		if (isset($_REQUEST["money"])) {
			$money = $_REQUEST["money"];
			if (is_numeric($money)) {
				$t1 = 1;
				$t2 = 1;
				$t3 = 1;
				$t4 = 1;
				for ($i=50000;; $i+=$i) { 
					if ($i + $j + $z + $k >= $money) {
						break;
					}
					$t4++;
					for ($j=100000;; $j+=$j) { 
						if($j + $z + $k >= $money)
						{
							break;
						}
						$t3++;
						for ($k=200000;; $k+=$k) { 
							if ($k + $z >= $money) {
								break;
							}
							$t2++;
							for ($z=500000;; $z+=$z) { 
								if ($z >= $money) {
									break;
								}
								$t1++;
							}
						}
					}
				}
				$r1 = $t1 * 500000;
				$r2 = $t2 * 200000;
				$r3 = $t3 * 100000;
				$r4 = $t4 * 50000;
			}
			else{
				$result = "Bạn phải nhập số";
			}
		}
	 ?>
	<div class="content">
		<h1>Mô Phỏng ATM</h1>
		<div class="f">
			<div class="l">
				<img src="img/1.jpg" alt="">
			</div>
			<div class="r">
				<form action="" method="post">
					<p>Vui lòng nhập vào số tiền mà quý khách muốn thực hiện giao dịch</p>
					<input type="text" name="money" value="<?php echo $money?>"><input type="submit" name="submit" value="Rút Tiền">
				</form>
			</div>
			<br style="clear: both;">
		</div>
		<div class="s">
			<p><span>Mệnh Giá</span><span>Số Lượng</span><span>Thành Tiền</span></p>
			<p>
				<span>500.000</span>
				<span><?php echo $t1; ?></span>
				<span><?php echo $r1; ?></span>
			</p>
			<p>
				<span>200.000</span>
				<span><?php echo $t2; ?></span>
				<span><?php echo $r2; ?></span>
			</p>
			<p>
				<span>100.000</span>
				<span><?php echo $t3; ?></span>
				<span><?php echo $r3; ?></span>
			</p>
			<p>
				<span>50.000</span>
				<span><?php echo $t4; ?></span>
				<span><?php echo $r4; ?></span>
			</p>
		</div>
	</div>
</body>
</html>