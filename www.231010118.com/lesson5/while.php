<!DOCTYPE html>
<html lang="zh">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<style>
		.box{
			width:50px;
			height:50px;
			text-align:center;
			line-height:50px;
			border:1px solid #ccc;
			margin-bottom:1px;
			color:#999;
			float:left;
			margin-right:1px;
		}
		.clear{
			clear:both;
		}
		.red{
			color:#F00;
		}
	</style>
</head>
<body>
	<?php
		// 在网页中输出是个盒子，并编上序号1……10
		/* $i=1;//计数变量
		while($i<=10){
			if($i<=3){
				echo '<div class="box red">'. $i.'</div>';
			}else{
				echo '<div class="box">'. $i.'</div>';
			}
			if($i%4==0){
				echo '<div class="clear"></div>';
			}
			$i++;
		} */
		/* $i=1;
		echo '<ul>';
			while($i<=10){
				echo '<li>列表'.$i.'</li>';
				$i++;
			}
		echo '</ul>'; */
		// 输出表达式1+2+3……+10=？
		$i=1;
		$sum = 0;
		$n = 10;
		do{
			echo $i;
			$sum += $i;
			if($i<$n){echo '+';}
			$i++;
		}while($i<=$n);
		echo '='.$sum;
	?>
</body>
</html>