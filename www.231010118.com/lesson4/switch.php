<!DOCTYPE html>
<html lang="zh">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<!--<form action="">
		订单查询:
		<select name="state" id="">
			<option value="0">未付款订单</option>
			<option value="1">已付款订单</option>
			<option value="2">已发货订单</option>
			<option value="3">已收货订单</option>
			<option value="4">已完成订单</option>
		</select>
		<button type="submit">查询</button>
	</form>-->
	<?php
		// 根据订单的状态查询，0下单未付款  1已付款  2 发货  3 收货
		 /* $states = @$_GET['state'];
		 switch($states){
			case 0:
				echo "未付款订单";
				break;
			case 1:
				echo "已付款订单";
				break;
			case 2:
				echo "已发货订单";
				break;
			case 3:
				echo "已收货订单";
				break;
			case 4:
				echo "已完成订单";
				break;
		 } */
		 $phone = @$_GET['phone'];
		 if($phone == ''){	// 验证是否为空
			 // 为空
			 echo "手机号不能为空";
		 }else{
			$pattern = '/^1(3[0-9]|4[579]|5[0-3,5-9]|6[6]|7[0135678]|8[0-9]|9[89])\d{8}$/';	// 验证手机号的正则表达式
			if(!preg_match($pattern, $phone)){
				echo "输入手机号有误";
			}else{
				echo "输入手机号正确";
			}
		 }
	?>
</body>
</html>