<!DOCTYPE html>
<html lang="zh">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php  
		/* $a = 3;
		$b = 9;
		echo $a + $b; */
		/**
		 * 求和函数
		 * @param {Object} $a
		 * @param {Object} $b
		 * @return
		 */
		function sum($a,$b){
			return $a + $b;
		}
		
		define("HOST","127.0.0.1");
		echo HOST;
		$name = "陈智康";
		$age = 18;
		echo "这位是{$name}同学";
	?>
	
</body>
</html>