<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo ($data[0][title]); ?>_<?php echo ($info["company"]); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1, maximum-scale=1, user-scalable=no" />
	<meta name="description" content="<?php echo ($info["content"]); ?>" />
	<meta name="keywords" content="<?php echo ($info["keywords"]); ?>" />
	<meta name="generator" content="千宇软件" />
	<meta name="template" content="Zero" />
	<!--必要样式-->
	<link type="text/css" href="/Public/m/css/style.css" rel="stylesheet">
	<link href="/Public/m/css/component.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="/Public/m/css/header.css">
	<link rel="stylesheet" type="text/css" href="/Public/m/css/lunbo.css">
	<link rel="stylesheet" type="text/css" href="/Public/m/dist/swipeslider.css">
	<link rel="stylesheet" href="/Public/m/css/index.css">
	<script type="text/javascript" src="/Public/m/js/jquery.js"></script>
	<script type="text/javascript" src="/Public/m/js/modernizr.custom.js"></script>
	<script type="text/javascript" src="/Public/m/js/jquery.dlmenu.js"></script>
</head>
<body>
<header class="header">
	<a href="#" class="logo">
		<?php echo ($info["company"]); ?>
	</a>
	<div id="dl-menu" class="dl-menuwrapper">
		<button id="dl-menu-button">Open Menu</button>
		<ul class="dl-menu">
			<li><a href="<?php echo U('Home/Index/index');?>">首页</a></li>
			<li>
				<a href="Line">关于我们</a>
				<ul class="dl-submenu">
					<li class="dl-back"><a href="#">返回上一级</a></li>
					<li><a href="<?php echo U('Home/Content/index',array('classification'=>1));?>">企业概况</a></li>
					<li><a href="<?php echo U('Home/Content/index',array('classification'=>2));?>">总经理致辞</a></li>
				</ul>
			</li>
			<li>
				<a href="Line">产品服务</a>
				<ul class="dl-submenu">
					<li class="dl-back"><a href="#">返回上一级</a></li>
					<li><a href="<?php echo U('Home/Content/product',array('classification'=>3,'fenlei'=>1));?>">无缝钢管</a></li>
					<li><a href="<?php echo U('Home/Content/product',array('classification'=>4,'fenlei'=>2));?>">精密钢管</a></li>
					<li><a href="<?php echo U('Home/Content/product',array('classification'=>5,'fenlei'=>3));?>">合金钢管</a></li>
				</ul>
			</li>
			<li>
				<a href="Line">新闻中心</a>
				<ul class="dl-submenu">
					<li class="dl-back"><a href="#">返回上一级</a></li>
					<li><a href="<?php echo U('Home/Content/newsList',array('classification'=>6));?>">钢管知识</a></li>
					<li><a href="<?php echo U('Home/Content/newsList',array('classification'=>7));?>">行业动态</a></li>
				</ul>
			</li>
			<li>
				<a href="Line">钢管加工</a>
				<ul class="dl-submenu">
					<li class="dl-back"><a href="#">返回上一级</a></li>
					<li><a href="<?php echo U('Home/Content/product',array('classification'=>8,'fenlei'=>4));?>">自动切割</a></li>
					<li><a href="<?php echo U('Home/Content/product',array('classification'=>9,'fenlei'=>5));?>">锯床切割</a></li>
					<li><a href="<?php echo U('Home/Content/product',array('classification'=>10,'fenlei'=>6));?>">钢管倒角</a></li>
				</ul>
			</li>
			<li>
				<a href="Line">行业应用</a>
				<ul class="dl-submenu">
					<li class="dl-back"><a href="#">返回上一级</a></li>
					 <li><a href="<?php echo U('Home/Content/index',array('classification'=>11));?>">电力领域</a></li>
				    <li><a href="<?php echo U('Home/Content/index',array('classification'=>12));?>">石化领域</a></li>
				    <li><a href="<?php echo U('Home/Content/index',array('classification'=>13));?>">冶金领域</a></li>
				    <li><a href="<?php echo U('Home/Content/index',array('classification'=>14));?>">机械领域</a></li>
				    <li><a href="<?php echo U('Home/Content/index',array('classification'=>15));?>">汽车领域</a></li>
				    <li><a href="<?php echo U('Home/Content/index',array('classification'=>16));?>">其他领域</a></li>
				</ul>
			</li>
			<li>
				<a href="Line">联系我们</a>
				<ul class="dl-submenu">
					<li class="dl-back"><a href="#">返回上一级</a></li>
					<li><a href="<?php echo U('Home/Content/lianxi');?>">联系方式</a></li>
				    <li><a href="<?php echo U('Home/Content/ditu');?>">电子地图</a></li>
				    <li><a href="<?php echo U('Home/Content/zixun');?>">资讯建议</a></li>
				</ul>
			</li>
		</ul>
	</div>
</header>

<link rel="stylesheet" href="/Public/m/css/about.css">
<div class="main">
	<div class="bigImgDiv">
		<img src="/Public/Uploads/<?php echo ($data[0][photouri]); ?>" alt="" class="bigImg">
	</div>
	<div class="w con">


	<div>	
		<div class="Conright">
			<div class="leftTopTitle"><?php echo ($data[0][title]); ?></div>
			
    
	<section>  
		<figure id="full_feature" class="swipslider">
		    <ul class="sw-slides">


		    	<?php if(is_array($picdata)): foreach($picdata as $k=>$vo): ?><li class="sw-slide">
			            <img src="/Public/Uploads/<?php echo ($vo["picname"]); ?>" alt="<?php echo ($data[0][title]); ?>">
			        </li><?php endforeach; endif; ?>
		    </ul>
		</figure>   
	</section>
	<div class="rightCon">
				<?php echo ($data[0][content]); ?>
			</div>
</div>
	</div>	
	</div>
</div>
<div class="bq">
		技术支持：千宇软件
	</div>

<div class="footer">
	<div class="footerCon">
		<a href="<?php echo U('Home/Index/index');?>">
			<img src="/Public/img/icon_sy.png" alt="">
			<p>首页</p>
		</a>
	</div>
	<div class="footerCon">
		<a href="tel:{{<?php echo ($info["phone"]); ?>}}">
			<img src="/Public/img/icon_dh.png" alt="">
			<p>拨打电话</p>
		</a>
	</div>
	<div class="footerCon">
		<a href="<?php echo U('Home/Content/ditu');?>">
			<img src="/Public/img/icon_wz.png" alt="">
			<p>在线地图</p>
		</a>
	</div>
	<div class="footerCon">
		<a href="<?php echo U('Home/Content/zixun');?>">
			<img src="/Public/img/icon_ly.png" alt="">
			<p>在线留言</p>
		</a>
	</div>
</div>

<script type="text/javascript">
$(function(){
	$( '#dl-menu' ).dlmenu();
});
</script>
		<script type="text/javascript">
			window.onload=function(){
				var odiv = document.getElementById('div1');
				var oul = odiv.getElementsByTagName('ul')[0];
				var ali = oul.getElementsByTagName('li');
				var spa = -2;				
				oul.innerHTML=oul.innerHTML+oul.innerHTML;
				oul.style.width=ali[0].offsetWidth*ali.length+'px';
				function move(){
					if(oul.offsetLeft<-oul.offsetWidth/2){
						oul.style.left='0';
					}
					if(oul.offsetLeft>0){
						oul.style.left=-oul.offsetWidth/2+'px'
					}
					oul.style.left=oul.offsetLeft+spa+'px';
				}
				var timer = setInterval(move,30)
				
				odiv.onmousemove=function(){clearInterval(timer);}
				odiv.onmouseout=function(){timer = setInterval(move,30)};
				document.getElementsByTagName('a')[0].onclick = function(){
					spa=-2;
				}
				document.getElementsByTagName('a')[1].onclick = function(){
					spa=2;
				}
			}
		</script>
	<script type="text/javascript" src="/Public/m/dist/swipeslider.min.js"></script>
	<script type="text/javascript">
		$(window).load(function() {
		      $('#full_feature').swipeslider();
		      $('#content_slider').swipeslider({
		        transitionDuration: 600,
		        autoPlayTimeout: 10000,
		        sliderHeight: '300px'
		      });
		      $('#responsiveness').swipeslider();
		      $('#customizability').swipeslider({
		        transitionDuration: 1500, 
		        autoPlayTimeout: 4000, 
		        timingFunction: 'cubic-bezier(0.38, 0.96, 0.7, 0.07)',
		        sliderHeight: '30%'});
		    });
	</script>
</body>
</html>