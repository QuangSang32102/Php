<style>
	*{
		margin: 0px;
		padding: 0px;
	}
	a{
		font-weight: bold;
		color: red;
	}
</style>

<?php 
	$content = file('text.txt') or die('Cannot read file');
	$content = implode('', $content);

	$pattern = '#UBND#i';//Thêm chữ i để không phân biệt chữ hoa chữ thường
	$replacement = '<a href= "https://www.youtube.com/">UBND</a>';
	$result = preg_replace($pattern, $replacement, $content);
	echo $result;
 ?>