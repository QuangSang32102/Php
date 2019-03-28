<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Caculate</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<?php
		$n1 = "";
		$n2 = "";
		$cacul = "";
		$flag = false;
		$result = "";
		if (isset($_REQUEST["number1"]) && isset($_REQUEST["number2"]) && isset($_REQUEST["caculate"]))
		{
			$n1 = $_REQUEST["number1"];
			$n2 = $_REQUEST["number2"];
			$cacul = $_REQUEST["caculate"];
			$flag = true;
			if(is_numeric($n1) && is_numeric($n2))
			{
				switch ($cacul) {
					case '+':
						$result = $n1 + $n2;
						break;
					case '-':
						$result = $n1 - $n2;
						break;
					case '*':
					case 'x':
						$result = $n1 * $n2;
						break;
					case '/':
					case ':':
						$result = $n1 / $n2;
						break;
					case '%':
						$result = $n1 % $n2;
						break;
					default:
						$cacul = "+";
						$result = $n1 + $n2;
						break;
				}
			}
			else
			{
				$result = "Ban phai nhap so";
				$flag = false;
			}

		}
	 ?>
<div class="content">
	<form method="post" action="" name="main-form">
		<div class="row">
			<span>Số thứ nhất</span>
			<input type="text" name="number1" value="<?php echo $n1; ?>">
		</div>
		<div class="row">
			<span>Số thứ hai</span>
			<input type="text" name="number2" value="<?php  echo $n2; ?>">
		</div>
		<div class="row">
			<span>Phép tính</span>
			<input type="text" name="caculate" value="<?php echo $cacul; ?>">
		</div>
		<div class="row">
			<input type="submit">
		</div>
		<div class="row">
			<p>
				Kết Quả
				<?php
					if($flag == true)
					{
						echo " " . $n1 . " " . $cacul . " " . $n2 . " = " . $result;
					} 
					else{
						echo $result;
					}
				 ?>
			</p>
		</div>
	</form>
</div>
</body>
</html>