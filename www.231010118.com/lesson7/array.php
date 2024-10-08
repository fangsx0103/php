<!DOCTYPE html>
<html lang="zh">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<style>
		.box{
			width: 300px;
			height: 350px;
			border:1px solid #ccc;
			float:left;
			margin-right:10px
		}
		.box img{
			width: 100%;
		}
	</style>
</head>
<body>
	<?php
		// 声明一个学生信息数组student，里面包含学生的姓名，学号，性别,放置4条
		/* $student = [
			['张三','231010101','男'],
			['李四','231010102','男'],
			['王五','231010103','女'],
			['赵六','231010104','男']
		];
		foreach($student as $arr){
			echo "学号：".$arr[0]." 姓名：".$arr[1]." 性别：".$arr[2]."<br>";
		} */
		/* $student = [
			['number'=>'231010101','name'=>'张三','gender'=>'男'],
			['name'=>'李四','number'=>'231010102','gender'=>'男'],
			['number'=>'231010103','name'=>'王五','gender'=>'女'],
			['number'=>'231010104','name'=>'赵六','gender'=>'男']
		];
		foreach($student as $list){
			echo '学号'.$list['number'].' 姓名'.$list['name'].' 性别'.$list['gender'].'<br>';
		} */
		$newslist = [
			['thumb'=>'image/1.jpg','title'=>'绍兴市市场监管理局与我院开展世界计量日主题活动','date'=>'2022年05月23日'],
			['thumb'=>'image/2.png','title'=>'2021年绍兴市智能楼宇管理师比赛在我校举行','date'=>' 2021年11月29日'],
			['thumb'=>'image/3.jpg','title'=>'绍兴市委宣传部副部长、网信办主任黄爱芬考察我校','date'=>' 2021年09月30日']
		];
		foreach($newslist as $news){
			echo '<div class="box">';
			echo '<img src="'.$news['thumb'].'" alt="">';
			echo '<h4>'.$news['title'].'</h4>';
			echo '<span>'.$news['date'].'</span>';
			echo '</div>';
		}
	?>
</body>
</html>