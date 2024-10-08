<!DOCTYPE html>
<html lang="zh">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<style>
		.red{
			color:red;
		}
		.green{
			color:green;
		}
	</style>
</head>
<body>
	<?php
		// 输出 8个超链接，链接地址分别是1.html-8.html 链接文字是“就这样一直晒，晒足180天1”
		/* $i = 1;
		while($i<=8){
			echo "<a href='$i.html'>就这样一直晒，晒足180天".$i."</a><br>";
			$i++;
		} */
		for($i=1;$i<=180;$i++){
			if($i%2==0){
				echo "<a href='$i.html' class='red'>就这样一直晒，晒足180天---第".$i."天</a><br>";
			}else{
				echo "<a href='$i.html' class='green'>就这样一直晒，晒足180天---第".$i."天</a><br>";
			}
		}
	?>
</body>
</html>