<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
	<ul class="pagination pagination-lg">
		<li><a href="apply.php?page=1">1</a></li>
		<li><a href="apply.php?page=2">2</a></li>
		<li><a href="apply.php?page=3">3</a></li>
		<li><a href="apply.php?page=4">4</a></li>
		<li><a href="apply.php?page=5">5</a></li>
	</ul>

	 <?php 
	 	$resul = (isset($_REQUEST["page"]) == true ? $_REQUEST["page"] : 0);
	 	echo $resul;
	  ?>
</div>
</body>
</html>