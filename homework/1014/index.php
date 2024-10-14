<?php include "inc/conn.php"; ?>

<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>启航纺织</title>
    <link href="home/css/bootstrap.min.css" rel="stylesheet">
    <link href="home/css/master.css" rel="stylesheet">
	<link href="home/css/index.css" rel="stylesheet">
	<link href="home/css/model.css" rel="stylesheet">	
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->

</head>

<body>
<!-- ##########页首########## -->
<?php include "inc/header.php"; ?>
<!-- ##########页首（end）########## -->

<!-- 广告轮播 -->
<?php
			// 定义查询命令
			$sql = "select * from adv where isdisplay=1 order by sort asc";
			// 执行SQL命令
			$res = mysqli_query($conn,$sql) or die("我的SQL命令写错了……");
			// 输出数据
			// 先取出数据
			$imglist = '';//存储所有图片
			$dotlist = '';
			$i=1;
			while($row = mysqli_fetch_array($res,MYSQLI_ASSOC)){
				if($i==1){
					$imglist .= '<div class="item active">';
					$dotlist .= '<li data-target="#ad-carousel" data-slide-to="'.($i-1).'" class="active"></li>';
				}else{
					$imglist .= '<div class="item">';
					$dotlist .= '<li data-target="#ad-carousel" data-slide-to="'.($i-1).'"></li>';
				}
				$imglist .= ' <img src="'.$row['image'].'" alt="1 slide">
					</div>';
				$i++;
			}
			
			
		?>
<div id="ad-carousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
		<?php echo $dotlist;?>
        
    </ol>
    <div class="carousel-inner">
		<?php
			echo $imglist;
		?>
        
        
         
    </div>
    <a class="left carousel-control" href="#ad-carousel" data-slide="prev"><span
            class="glyphicon glyphicon-chevron-left"></span></a>
    <a class="right carousel-control" href="#ad-carousel" data-slide="next"><span
            class="glyphicon glyphicon-chevron-right"></span></a>
</div>
<!-- ##########页首（end）########## -->

<!-- ##########主体########## -->
<div class="container">
	<!-- 栏目 -->
	<div class="row">

		<!-- 公告信息 -->
		<div class="col-md-4">
			<span class="part1">
				<a href="#" >关于启航</a>
			</span>
			<span class="part1 en">
				&nbsp;&nbsp;/ About Us
			</span>
			<div class="line1">
				<div class="line2 theme"></div>
			</div>
			<div>
				<img class="img-responsive" src="uploadfiles/image/20170910/1591234555.jpg" alt="公司近景">
				<p class="text1">
				 启航纺织以“成为全球领先的棉纺织企业，创意精彩生活；致力于发展高附加值产品，全面提供增值服务；为员工、客户和股东创造最大价值，真诚回馈和服务社会”为企业愿景使命。
				</p>
			</div>
		</div>
		
		<!-- 技术中心 -->
		<div class="col-md-4">
			<span class="part1">
				<a href="#" >纺织动态</a>
			</span>
			<span class="part1 en">
				&nbsp;&nbsp;/ News
			</span>
			<div class="line1">
				<div class="line2 theme"></div>
			</div>
			<div>
				<ul class="list-unstyled list-new">
					<?php
						// 定义检索内容
						$sql="select title,createtime,id,istop from news order by istop desc,createtime desc limit 7";
						// 执行检索命令
						$res=mysqli_query($conn,$sql) or die("执行检索文章命令错误");
						$current = time();	//获得当前时间
						$deff=(7*24*60*60);	//设置标新的时间范围，此处为一周，单位为秒
						// 循环输出
						while($row=mysqli_fetch_assoc($res)){
							echo '<li>';
							echo '<a href="details.php?id='.$row['id'].'" title="'.$row['title'].'">';
							// 标新
							if(($current-$row['createtime'])<$deff){
								echo '<span class="new"></span>';
							}
							// 置顶
							if($row['istop']==1){
								echo '<b class="red">'.substr_text($row['title'],0,18).'</b>';
							}else{
								// echo '<script>alert(1)</script>';
								echo substr_text($row['title'],0,18);
							}
							echo '</a><span>【'.date("Y-m-d",$row['createtime']).'】</span>';
							echo '</li>';
						}
					?>
					
						
					
					
				</ul>
			</div>
		</div>
		
		<!-- 采购需求 -->
		<div class="col-md-4">
			<span class="part1">
				<a href="#" >产品搜索</a>
			</span>
			<span class="part1 en">
				&nbsp;&nbsp;/ Search
			</span>
			<div class="line1">
				<div class="line2 theme"></div>
			</div>
			<div>
				<ul class="list-unstyled procurement-li classlist ">
					<li class="bg1">
						<a href="product.html"> 提花面料</a>
					</li>
					<li class="bg2">
						<a href="product2.html"> 印花面料</a>
					</li>
					<li class="bg3">
						<a href="product3.html"> 素色面料</a>
					</li>
					<li class="bg4">
						<a href="product4.html"> 格子面料</a>
					</li>
					<li class="bg5">
						<a href="product5.html"> 条子面料</a>
					</li> 
					<li class="bg6">
						<a href="product6.html"> 绣花面料</a>
					</li>
					<li class="bg7">
						<a href="product7.html"> 麻料面料</a>
					</li>
					<li class="bg8">
						<a href="product8.html"> 毛纺面料</a>
					</li>
					<li class="bg9">
						<a href="product9.html"> 皮革面料</a>
					</li> 
					<li class="bg10">
						<a href="product10.html"> 里布面料</a>
					</li>
					
				</ul>
				
			</div>
			<div style="clear:both;"></div>
			<div style="margin-bottom:10px;">产品检索</div>
			<form action="products.html" method="get">
				<div style="margin-bottom:10px;">	
					<div class="input-group">	      
				        <select class="form-control"  name="cid" >
							<option value="" selected="selected">选择产品类别</option>
							<option value="1">提花面料</option>
							<option value="2">印花面料</option>
							<option value="3">素色面料</option>
							<option value="4">格子面料</option>							
						</select>
			    	</div>
				</div>
							
    			<div class="input-group">				   
      				<input type="text" class="form-control" placeholder="输入名称关键词..." name="wd">
      				<span class="input-group-btn">
        				<button class="btn btn-default" type="submit">搜索</button>
        				<!-- 按钮(button无功能 submit提交 reset重置)-->
      				</span>
    			</div> 
			</form>
		</div>
	</div>	
		
	<!-- 产品展示 -->
	<div class="row">		
		<div class="col-md-12">
			<span class="part1">
				<a href="#" >产品展示</a>
			</span>
			<span class="part1 en">
				&nbsp;&nbsp;/ Products
			</span>
			<button type="button" class="btn btn-default btn-xs more-btn">+&nbsp;MORE</button>
			<div class="line1" style="margin-bottom:5px;">
				<div class="line2 theme"></div>
			</div>
		</div>
	</div>
	
	<div class="row">
		<div class="col-md-3 mb30">
		  	<div class="productbox">
		      <a href="show.html" >
		        <img class="img-responsive" src="uploadfiles/image/20170910/1591234567.jpg" alt="现货	几何	 妈妈装  纬编 单面 60314-20" style="height:200px;">
		        <div class="overlay">
		           	<h2>现货	几何	 妈妈装  纬编 单面 60314-20</h2>
					<p>
						成分：T:95% SP5% <br/>
						密度：无 <br/>
						门幅：177cm<br/>
						价格：34.00元/米
					</p>
		        </div>
		      </a>		        		        
		    </div>
		</div>

		<div class="col-md-3 mb30">
		  	<div class="productbox">
		      <a href="show.html" >
		        <img class="img-responsive" src="uploadfiles/image/20170910/1591234568.jpg" alt="人棉	几何	印花 棉感 70522-47" style="height:200px;">
		        <div class="overlay">
		            <h2>人棉	几何	印花 棉感 70522-47</h2>
					<p>
						成分：人棉 <br/>
						密度：100*80 <br/>
						门幅：142cm<br/>
						价格：7.80元/米
					</p>
		        </div>
		      </a>
		      <div class="istop"></div>	<div class="hot"></div>		        
		    </div>
		</div>

		<div class="col-md-3 mb30">
		  	<div class="productbox">
		      <a href="show.html" >
		        <img class="img-responsive" src="uploadfiles/image/20170910/1591234569.jpg" alt="人棉	几何	  70522-57" style="height:200px;">
		        <div class="overlay">
		            <h2>人棉	几何	  70522-57</h2>
					<p>
						成分：人棉 <br/>
						密度：100*80 <br/>
						门幅：142cm<br/>
						价格：10.00元/米
					</p>
		        </div>
		      </a>		        		        
		    </div>
		</div>

		<div class="col-md-3 mb30">
		  	<div class="productbox">
		      <a href="show.html" >
		        <img class="img-responsive" src="uploadfiles/image/20170910/1591234570.jpg" alt="人棉	 棉感 70531-43" style="height:200px;">
		        <div class="overlay">
		            <h2>人棉	 棉感 70531-43</h2>
					<p>
						成分：人棉 <br/>
						密度：100*80 <br/>
						门幅：142cm<br/>
						价格：10.00元/米
					</p>
		        </div>
		      </a>	        
		    </div>
		</div>

		<div class="col-md-3 mb30">
		  	<div class="productbox">
		      <a href="show.html" >
		        <img class="img-responsive" src="uploadfiles/image/20170910/1591234571.jpg" alt="人棉	民族风 70522-39" style="height:200px;">
		        <div class="overlay">
		            <h2>人棉	民族风 70522-39</h2>
					<p>
						成分：人棉 <br/>
						密度：100*80 <br/>
						门幅：142cm<br/>
						价格：12.00元/米
					</p>
		        </div>
		      </a>		        		        
		    </div>
		</div>

		<div class="col-md-3 mb30">
		  	<div class="productbox">
		      <a href="show.html" >
		        <img class="img-responsive" src="uploadfiles/image/20170910/1591234572.jpg" alt="梭织  70305-16" style="height:200px;">
		        <div class="overlay">
		            <h2>梭织  70305-16</h2>
					<p>
						成分：T:100 <br/>
						密度：无 <br/>
						门幅：142cm<br/>
						价格：35.00元/米
					</p>
		        </div>
		      </a>
		      <div class="hot"></div>		        
		    </div>
		</div>

		<div class="col-md-3 mb30">
		  	<div class="productbox">
		      <a href="show.html" >
		        <img class="img-responsive" src="uploadfiles/image/20170910/1591234777.jpg" alt="梭织 衬衫 70305-3" style="height:200px;">
		        <div class="overlay">
		            <h2>梭织 衬衫 70305-3</h2>
					<p>
						成分：T:100 <br/>
						密度：无 <br/>
						门幅：142cm<br/>
						价格：18.00元/米
					</p>
		        </div>
		      </a>		        		        
		    </div>
		</div>
		
		<div class="col-md-3 mb30">
		  	<div class="productbox">
		      <a href="show.html" >
		        <img class="img-responsive" src="uploadfiles/image/20170910/1591234779.jpg" alt="梭织  连衣裙 衬衫 70305-1" style="height:200px;">
		        <div class="overlay">
		            <h2>梭织  连衣裙 衬衫 70305-1</h2>
					<p>
						成分：T:100 <br/>
						密度：无 <br/>
						门幅：142cm<br/>
						价格：17.50元/米
					</p>
		        </div>
		      </a>
		      <div class="istop"></div>		        
		    </div>
		</div>
	</div>
	
	<div class="row">
		<!-- 友情链接 -->
		<div class="col-md-12">
			<h6>友情链接：</h6>
			<ul class="list-inline youq-li">
				<li><a href="#"><img src="uploadfiles/image/20170911/youq1.jpg" width="200" height="70"></a></li>
				<li><a href="#"><img src="uploadfiles/image/20170911/youq2.jpg" width="200" height="70"></a></li>
				<li><a href="#"><img src="uploadfiles/image/20170911/youq3.jpg" width="200" height="70"></a></li>
				<li><a href="#"><img src="uploadfiles/image/20170911/youq4.jpg" width="200" height="70"></a></li>
				<li><a href="#"><img src="uploadfiles/image/20170911/youq5.jpg" width="200" height="70"></a></li>
				
			</ul>
		</div>
	</div>
</div>
<!-- ##########主体（end）########## -->

<!-- ##########页脚########## -->
<?php include "inc/footer.php"; ?>

</script>
</body>
</html>
