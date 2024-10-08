<!DOCTYPE html>
<html lang="zh">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	
	<?php
		// 定义一个新闻列表数据，存放8条新闻
		$list = [
			["范蠡商学院一学生工作案例入选省学生资助育人工作典型案例","2024-09-14","https://sxvtc.com/info/1006/9789.htm"],
			["祝贺这些获奖学子","2024-09-19","https://sxvtc.com/info/1006/9787.htm"],
			["我校召开庆祝第40个教师节暨2024-2025学年教职工大会","2024-09-10","https://mp.weixin.qq.com/s/plxnzK3CMZ8yu70RU1ZbjQ"],
			["到企业去！我校教师暑期深入一线实践锻炼","2024-09-14","4.html"],
			["我校获第七届中国高校智能机器人创意大赛一等奖","2024-09-17","5.html"],
			["我校获第十七届“高教杯”全国大学生先进成图技术与产品信息建模创新大赛二等奖","2024-09-13","6.html"],
			["台湾高校师生代表团来我校访问交流","2024-09-14","7.html"],
			["“舞雩风”鲍贤伦沈伟陈建明书法作品展回瞻","2024-09-12","8.html"]
		];
		foreach($list as $news){
			echo "<a href='".$news[2]."'>".$news[1].$news[0]."</a><br>";
		}
	?>
</body>
</html>