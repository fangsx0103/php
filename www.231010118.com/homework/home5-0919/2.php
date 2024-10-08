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
			border:1px solid #999;
			margin-bottom:2px;
			color:#333;
			margin-right:1px;
		}
		.red{
			color:#F00;
		}
	</style>
</head>
<body>
	<?php
		$i=1;
		do{
			if($i<=3){
				echo '<div class="box red">'. $i.'</div>';
			}else{
				echo '<div class="box">'. $i.'</div>';
			}
			$i++;
		}while($i<=10)
	?>
</body>
</html>