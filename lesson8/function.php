<!DOCTYPE html>
<html lang="zh">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>函数</title>
</head>
<body>
	<?php
		//自定义函数生成字符串 showmsg 生成某个字符串n次
		echo showmsg('自定义字符串',10);
		
		function showmsg($string,$n)
		{
			$str = '';
			for($i=1;$i<=$n;$i++){
				$str .= $string.'<br>';
			}
			return $str;
		}
	
		/* date_default_timezone_set("PRC");
		$time = time();
		echo date("Y年m月d日 H:i:s"); */
		
		/* $letters = array("a","p");
		$fruit = array("apple","pear");
		$text = "a p b";
		$new = str_replace($letters,$fruit,$text);
		echo $new; */
		
		/* $stu = [
			"张三","lisi","wangwu"
		];
		
		echo createOl($stu);
		
		function createOl($array)
		{
			$str = "<ol>";
			foreach($array as $v){
				$str .= "<li>".$v."</li>";
			}
			$str .= "</ol>";
			return $str;
		} */
	?>
</body>
</html>