lesson02-0911
	PHP的基础语法
		语句		<?php  ?>
				<?=  ?>
		echo 输出
			<?php echo '我没k'; echo $name; ?>
			<?= $name ?> 输出 $name变量的值
			<img src="<?php echo $url; ?>">
			<img src="<?= $url; ?>">
		指令分隔符
			;	不能用中文符号
		注释
			单行
				//
				#
			多行
				/* */
		
		PHP变量
			变量	  存储容器	里面的数据是可变的
			声明变量
				语法：$变量名称
				变量命名规则
					
					行业规则		职业素养
						变量名有意义
						命名法则		驼峰命名法
			变量的作用域				
				全局变量	global $变量名
				局部变量	
				
		PHP常量
			常量 存储容器		里面的数据一旦定义就不能修改
			语法：define("常量名称","常量值");
			通常常量全部大写，多个单词中间用下划线
			
			当在输出的字符串中有变量时，将变量加上{ }
				echo "这位是{$name}同学";
		PHP的数据类型
			PHP是一种弱数据类型语言
			
			
			标量数据类型	int float string boolean
			复杂数据类型	复合	  数组	array	对象	  object
						其他  资源  resource  空  null
			
			int	进制数(八进制、十进制、十六进制)	正整数 负整数 0
				$a = 0123	// 83	1*8^2 + 2*8^1 + 3*8^0
				$b = 0x123	//		1*16^2 + 2*16^1 + 3*16^0
			float
				$c = 1.2
				$d = 0.009
				$e = 2.1e-6
			string 字符串
				$age = 18
				$f = "张三是{$age}"
				$g = '张三'
		
		
		
lesson03-0913
	1.PHP的运算符
		算术运算符	+ - * / %
		赋值运算符	=  +=  a+=b => a=a+b
		字符串运算符	字符串的拼接	.
				$red->name
				<?php echo $name."优秀的程序员"; ?>
				<?php echo $name,"优秀的程序员"; ?>
				<?php echo "{$name}优秀的程序员"; ?>
		.=	a.=b    	a = a.b
		递增递减		++$i 先运算再赋值 	$i++ 先赋值再运算
		比较运算符	== 字面量
					=== 字面量 数据类型
					<>	!=	不等于
					var_dump()	打印输出	输出数据类型和结果
					echo		界面输出 输出结果
		逻辑运算符	&&(and)
					||(or)
					!
		运算符的优先级：
	2.控制语句
		顺序结构、分支结构、循环结构
		1)分支结构	if
		根据不同的条件，执行不同的分支语句
			a.单分支
				条件成立，执行语句块
			语法：
			if(条件判断){
				条件成立执行语句块
			}
			网页中输入1.表单输入框2.地址栏输入(查询字符串)
			获取地址栏输入的方法
			$_GET['参数名称']
			地址栏输入参数
				url?参数1=值1&参数2=值2……
				
			b.双分支
			if(条件){
				语句块1
			}else{
				语句块2
			}
	
			c.多分支
			if(条件1){
				语句块1
			}elseif(条件2){
				语句块2
			}elseif(条件3){
				语句块3
			}……
			}else{
				语句块n
			}
			
			

lesson04-0914
	1.关于变量的函数
		isset(变量)	判断某个变量是否存在
		unset(变量)	销毁一个变量
		
		@ 忽略程序中可能出现的警告
		
		设置PHP的运行环境为宽松模式
		
	2.分支结构--switch语句	
		根据不同的结果，执行不同的程序块
		语法：
		$变量 = 表达式;
		switch($变量){
			case 结果1:
				执行语句1;
				break;	// 退出分支结构
			case 结果2:
				执行语句2;
				break;	
			……
			default:
				执行语句n;
				break;
		}
		
		<form action="" method="">
			action 	指定这个表单的处理程序，不填处理程序就是当前页面
			method	表单提交数据的方式	get(默认)	  post
				method="get"	$_GET[]		数据量少 数据出现在地址栏中
				method="post"	$_POST[]	数据量大 以正文形式
			
			
				
lesson05-0918
	1.PHP循环结构
		while 语句		循环次数不确定  满足条件执行（先再条件谈做事）
		do while语句		循环次数不确定  满足条件执行（先做事再谈条件）
		for 语句		循环次数明确
		foreach 语句		用于遍历数组
	2.while 语句
		先判断条件，如果条件成立，执行语句块
		语法：
			初始条件;
			while(条件){
				执行语句块
				条件变量迭代
			}
			{}	//循环体
	3.do while 语句
		先做事情，再判断条件，如果条件成立，执行语句块
		语法:
		初始条件;
		do{
			执行语句块
			条件变量迭代
		}while(条件);
		
	在初始条件不能满足成立条件的情况下，do while多循环一次
	
lesson06-0920
	1.for循环语句
		for(初始条件;循环成立的条件;条件变量迭代){
			循环体;
		}
		
		总结：循环三要素
			初始条件;	循环的起点
			循环成立的条件;	不满足就是循环的终点
			条件变量迭代;		循环的步幅
			
	2.数组定义
		数组将多个元素组合在一起，用一个变量来存储
		声明：
		$变量 = []
		$变量 = array();
		数组元素的访问
			$数组[下标],默认情况下,下标从0开始
		
	3.foreach语句
		遍历数组
		语法：
		foreach(数组 as 变量){
			循环体
		}