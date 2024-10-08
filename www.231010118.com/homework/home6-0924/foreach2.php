<!DOCTYPE html>
<html lang="zh">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<style>
		.box{
			width: 100px;
			height: 100px;
			margin-right: 3px;
			text-align: center;
			line-height: 100px;
			font-size: 30px;
			display: inline-block;
		}
		.bg1{
			background-color: #0099cc;
		}
		.bg2{
			background-color: #cccccc;
		}
		.bg3{
			background-color: #ff6666;
		}
	</style>
</head>
<body>
	<?php
		for($i=1;$i<=12;$i++){
			if($i % 3 == 1){
				echo "<div class='box bg1'>".$i."</div>";
			}elseif($i % 3 == 2){
				echo "<div class='box bg2'>".$i."</div>";
			}elseif($i % 3 == 0){
				echo "<div class='box bg3'>".$i."</div>";
			}
		}
	?>
</body>
</html>