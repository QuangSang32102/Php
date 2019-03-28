<?php 
	echo $_POST["username"] . "<br/>";
	echo $_POST["password"] . "<br/>";
	echo $_REQUEST["username"] . "<br/>";
	echo $_REQUEST["password"] . "<br/>";
	$username = $_POST["username"];
	$password = $_POST["password"];
	echo $username . "<br/>";

	$result = ($username == "admin" && $password == "12345") ? "Dang nhap thanh cong" : "Dang nhap thai bai";
	echo $result;
 ?>