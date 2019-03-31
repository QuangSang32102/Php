 <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Lam Tron So</title>
	<link rel="stylesheet" href="style.css">
	<script>
		function refreshPage(){
			window.location.reload();
		}
	</script>
</head>
<body>

 <div class="content">
 	<h1>Hình Ảnh Ngẫu Nhiên</h1>
	<div class="image">
		<?php
			$number = rand(1,4);
			echo '<img src="img/'.$number.'.jpg" alt="">';
		?>
	</div>
	<a href="javascript:refreshPage();">Random image</a>
 </div>
</body>
</html>