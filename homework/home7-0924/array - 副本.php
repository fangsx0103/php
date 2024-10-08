<!DOCTYPE html>
<html lang="zh">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php
		$student = [
			['stuId'=>'231010118','name'=>'方守祥','gender'=>'男','age'=>'20','stuClass'=>'23计应1班','tel'=>'17338480273'],
			['stuId'=>'231010113','name'=>'陈德甲','gender'=>'男','age'=>'19','stuClass'=>'23计应1班','tel'=>'13276870932'],
			['stuId'=>'231010122','name'=>'金煜航','gender'=>'男','age'=>'19','stuClass'=>'23计应1班','tel'=>'13858427562'],
			['stuId'=>'231010146','name'=>'赵佳翔','gender'=>'男','age'=>'19','stuClass'=>'23计应1班','tel'=>'19005859127']
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
			echo "<tr>";
			echo "<td>".$stu['stuClass']."</td>";
			echo "<td>".$stu['stuId']."</td>";
			echo "<td>".$stu['name']."</td>";
			echo "<td>".$stu['gender']."</td>";
			echo "<td>".$stu['age']."</td>";
			echo "<td>".$stu['tel']."</td>";
			echo "</tr>";
		}
		echo "</table>";
	?>
</body>
</html>