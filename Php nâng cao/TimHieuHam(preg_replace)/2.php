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
	$content = file('script.txt') or die('Cannot read file');
	$content = implode('', $content);


	$pattern = array('#<script([^>]*)>#i', '#</script([^>]*)>#i');
	$replacement = array('<pre>&lt;script\\1&gt;', '&lt;script\\1&gt;</pre>');
	$result = preg_replace($pattern, $replacement, $content);
	echo $result;
 ?>