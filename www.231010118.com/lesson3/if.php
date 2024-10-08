<!DOCTYPE html>
<html lang="zh">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<a href="if.php?c=1">红色</a>
	<a href="if.php?c=2">绿色</a>
	<a href="if.php?c=3">蓝色</a>
	
	<?php
		//$num = $_GET['number'];	//获取地址栏中的参数number的值，并将值 赋值 到 $num变量中 
		// echo $num;
		/* if($num != '17338480273'){
			echo "<script>alert('输入手机号错误,请重新输入');</script>";
		} */
		// 输入一个手机号，如果正确输出打勾图片，错误输出再打×图片
		/* if($num == '17338480273'){
			echo '<img src="./image/success.png">';
		}else{
			echo '<img src="./image/error.png">';
		} */
		// 3个超链接，点击不同链接，出现不同颜色
		$color = $_GET['c'];
		if($color == 1){
			echo '<div style="height:200px;background:red"></div>';
		}elseif($color == 2){
			echo '<div style="height:200px;background:green"></div>';
		}elseif($color == 3){
			echo '<div style="height:200px;background:blue"></div>';
		}
	?>
	
</body>
</html>