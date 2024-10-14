<?php include 'inc/conn.php' ?>
<?php
	// 得到新闻的id号
	$id = intval(@$_GET['id']);
	
	// 更新阅读次数
	$sql = "update news set hits = hits + 1 where id = {$id}";
	mysqli_query($conn,$sql) or die("命令写错了……");
	// 检索新闻的sql	将id作为条件 去检索新闻news数据，所有字段
	$sql = "select * from news where id = {$id} ";
	// 执行sql命令，并存储结果
	$res = mysqli_query($conn,$sql) or die("命令写错了……");
	$count = mysqli_num_rows($res);	// 统计结果集中记录条数
	if($count == 0 ){
		die("<script>location.href='errors/404/'</script>");
	}
	// 将结果取出，存储
	$row = mysqli_fetch_array($res,MYSQLI_ASSOC);
	// 输出
	
?>


<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?=$row['title']?> —— 启航纺织</title>
    <link href="home/css/bootstrap.min.css" rel="stylesheet">
    <link href="home/css/master.css" rel="stylesheet">
	<link href="home/css/model.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>

<body>
<!-- ##########页首########## -->
<?php include 'inc/header.php' ?>
<!-- ##########页首（end）########## -->

<!-- ##########主体########## -->


<div class="container">
	<!-- 固定图片广告 -->
	<div class="row">
		<img class="img-responsive model-img" src="uploadfiles/image/20170911/5557875ae0a45e1.jpg" alt="">
	</div>
	
	<!-- 内容 -->
	<div class="row row-3">
		<div class="col-md-3">
			<div class="model-title theme">
				纺织动态
			</div>
			<div class="model-list">
				<ul class="list-group">
                    <li class="list-group-item">
						<a href="#">公司要闻</a>
					</li>
					<li class="list-group-item">
						<a href="#">纺织业界</a>
					</li>
					<li class="list-group-item">
						<a href="#">纺织知识</a>
					</li>
					
				</ul>
      
			</div>
		</div>
		<div class="col-md-9">
			<div class="model-details-title center">
				<?=$row['title']?>
			</div>
			<div class="model-details">
				<div class="page-header center">
				 日期： <?=date("Y-m-d H:i:s",$row['createtime'])?> &nbsp;&nbsp;&nbsp;&nbsp;阅读：<span class="badge"><?=$row['hits']?></span> 
				 
				</div>
				<div >
					<?=$row['content']?>
				</div>
				
			</div>
			<div class="row" style="width:100%; clear:both;line-height:30px; margin-bottom:10px;">
				<?php
					// 上一篇
					$psql = "select id,title from news where id < {$id} order by id desc limit 1";
					// 查询id小于当前id的一条新闻，id最接近当前id
					$presults = mysqli_query($conn,$psql) or die("检索上一篇失败");
					if(mysqli_num_rows($presults)>0){
						$prow = mysqli_fetch_assoc($presults);
						echo '上一篇:<a href="details.php?id='.$prow['id'].'">'.$prow['title'].'</a>';
					}else{
						echo '上一篇：没有了';
					}
					echo '<br/>';
					
					// 下一篇
					$psql = "select id,title from news where id > {$id} order by id desc limit 1";
					// 查询id大于当前id的一条新闻，id最接近当前id
					$presults = mysqli_query($conn,$psql) or die("检索上一篇失败");
					if(mysqli_num_rows($presults)>0){
						$prow = mysqli_fetch_assoc($presults);
						echo '下一篇:<a href="details.php?id='.$prow['id'].'">'.$prow['title'].'</a>';
					}else{
						echo '下一篇：没有了';
					}
					echo '<br/>';
				?>			
			</div>
			<div class="row" style="width:100%; clear:both;">
			 
			    <!-- JiaThis Button BEGIN -->
					<div class="jiathis_style_24x24">
						<a class="jiathis_button_qzone"></a>
						<a class="jiathis_button_tsina"></a>
						<a class="jiathis_button_tqq"></a>
						<a class="jiathis_button_weixin"></a>
						<a class="jiathis_button_renren"></a>
						<a href="http://www.jiathis.com/share" class="jiathis jiathis_txt jtico jtico_jiathis" target="_blank"></a>
						<a class="jiathis_counter_style" style="border-right:1px solid #CCC"></a>
					</div>
					<script type="text/javascript" src="http://v3.jiathis.com/code/jia.js" charset="utf-8"></script>
					<!-- JiaThis Button END -->
					<!-- UJian Button BEGIN -->
						<div class="ujian-hook"></div>
						<script type="text/javascript" src="http://v1.ujian.cc/code/ujian.js"></script>
					<!-- UJian Button END -->
			  </div>
			</div>
	
		
	</div>
</div>
<!-- ##########主体（end）########## -->

<!-- ##########页脚########## -->
<?php include 'inc/footer.php' ?>
</body>
</html>
