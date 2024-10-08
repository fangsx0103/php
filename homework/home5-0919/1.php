<!DOCTYPE html>
<html lang="zh">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php
		$i=1;
		$sum=0;
		$n=@$_GET['n'];
		$result="";
		while($i<=$n){
			if($i<$n){
				$result .= $i . "+";
			}else{
				$result .= $i;
			}
			$sum+=$i;
			$i++;
		}
		$result .= "=$sum";
		echo $result;
	?>
</body>
</html>