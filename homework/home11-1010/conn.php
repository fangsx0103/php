<?php
	header('Content-type:text/html;charset=utf8');
	define("HOST","localhost");
	define("USER","root");
	define("PASS","root");
	define("DB","qihangdb");
	$conn = mysqli_connect(HOST,USER,PASS,DB) or die("连接数据库失败："
	.mysqli_connect_error());
	mysqli_query($conn,"set names utf8");
?>