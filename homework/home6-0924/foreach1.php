<!DOCTYPE html>
<html lang="zh">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<style>
		li{
			border-bottom: 1px solid #ccc;
		}
	</style>
</head>
<body>
	
		
	
	<?php
		$list = [
			'Web程序设计(PHP)',
			'JS框架设计',
			'移动Web开发技术',
			'音视频处理技术',
			'数据库应用基础'
		];
		echo "<ol>";
		foreach($list as $news){
			echo "<li>".$news."</li>";
		}
		echo "</ol>";
	?>
</body>
</html>