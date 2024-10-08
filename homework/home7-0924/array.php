<!DOCTYPE html>
<html lang="zh">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php
		/**
		 * author：Mr.fang
		 * @param stuId ->学号
		 * @param name ->姓名
		 * @param gender ->性别
		 * @param age ->年龄
		 * @param stuClass ->班级
		 * @param tel ->电话
		 * 请在$student数组的单引号处填数据，填完之后删除以上注释，最好修改变量名
		 */
		$student = [
			['stuId'=>'','name'=>'','gender'=>'','age'=>'','stuClass'=>'','tel'=>''],
			['stuId'=>'','name'=>'','gender'=>'','age'=>'','stuClass'=>'','tel'=>''],
			['stuId'=>'','name'=>'','gender'=>'','age'=>'','stuClass'=>'','tel'=>''],
			['stuId'=>'','name'=>'','gender'=>'','age'=>'','stuClass'=>'','tel'=>'']
		];
		echo "<table border='1' cellspacing='0' cellpadding='15'>";
		echo "<tr>
				<th>班级</th>
				<th>学号</th>
				<th>姓名</th>
				<th>性别</th>
				<th>年龄</th>
				<th>联系电话</th>
			</tr>";
		foreach($student as $stu){
			echo "<tr><td>".$stu['stuClass']."</td>
			<td>".$stu['stuId']."</td>
			<td>".$stu['name']."</td>
			<td>".$stu['gender']."</td>
			<td>".$stu['age']."</td>
			<td>".$stu['tel']."</td>
			</tr>";
		}
		echo "</table>";
	?>
</body>
</html>