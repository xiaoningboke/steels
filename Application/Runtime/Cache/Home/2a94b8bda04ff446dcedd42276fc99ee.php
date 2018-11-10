<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo ($info["keywords"]); echo ($info["company"]); ?></title>
		<!-- SEO -->
	<meta name="description" content="<?php echo ($info["content"]); ?>" />
	<meta name="keywords" content="<?php echo ($info["keywords"]); ?>" />
	<meta name="generator" content="千宇软件" />
	<meta name="template" content="Zero" />
	<link rel="stylesheet" href="/steel/Public/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="/steel/Public/bootstrap/css/bootstrap-theme.css">
	<link rel="stylesheet" href="/steel/Public/css/header.css">
	<link rel="stylesheet" href="/steel/Public/css/about.css">
	<link rel="stylesheet" href="/steel/Public/css/kefu.css">
	<script src="/steel/Public/jquery/jquery.js"></script>
	<script src="/steel/Public/bootstrap/js/bootstrap.min.js"></script>
	<script src="/steel/Public/js/swsy.js"></script>
	<script>
		$(function () {
	    $(".dropdown").mouseover(function () {
	        $(this).addClass("open");
	    });

	    $(".dropdown").mouseleave(function(){
		        $(this).removeClass("open");
		    })

		})
        $(window).ready(function () {
            $(".tab>li").mouseenter(function () {
                $(".product>div").eq($(this).index()).addClass("selected").siblings("div").removeClass("selected");
            });
            $(".tabs>li").mouseenter(function () {
                $(".products>div").eq($(this).index()).addClass("selected").siblings("div").removeClass("selected");
            });
        });
	</script>
	</head>
<body>
	<div class="content">
		<div class="header">
			<!--顶部的banner-->
			<div class="header-top">
				<div class="w">
					<p class="header-top-left">欢迎访问<?php echo ($info["company"]); ?>官网！ ！ ！ 主要销售：<?php echo ($info["protact"]); ?></p>
					<p class="header-top-right">
						<a href=# rel="sidebar"onclick="SetHome(this,window.location)" >设为首页</a>
						<a href=# rel="sidebar" onclick="javascript:addFavorite2()">加入收藏</a>
					</p>
				</div>
			</div>
			<!--logo-->
			<div class="logo w">
				<img src="/steel/Public/Uploads/<?php echo ($photodata[0]["photouri"]); ?>" alt="">
			</div>
			<div class="nav w">
				<nav class="navbar navbar-default  ww">
				  <div class="container-fluid w " >
				    <!-- Collect the nav links, forms, and other content for toggling -->
				    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				      <ul class="nav navbar-nav">
				        <li class="dropdown"><a href="<?php echo U('Home/Index/index');?>">网站首页</a></li>			
				        <li class="dropdown">
				          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">关于我们 <span class="caret"></span></a>
				          <ul class="dropdown-menu">
				            <li><a href="<?php echo U('Home/Content/index',array('classification'=>1));?>">企业概况</a></li>
				            <li><a href="<?php echo U('Home/Content/index',array('classification'=>2));?>">总经理致辞</a></li>	            
				          </ul>
				        </li>
				        <li class="dropdown">
				          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">产品服务 <span class="caret"></span></a>
				          <ul class="dropdown-menu">
				            <li><a href="<?php echo U('Home/Content/product',array('classification'=>3,'fenlei'=>1));?>">无缝钢管</a></li>
				            <li><a href="<?php echo U('Home/Content/product',array('classification'=>4,'fenlei'=>2));?>">精密钢管</a></li>
				            <li><a href="<?php echo U('Home/Content/product',array('classification'=>5,'fenlei'=>3));?>">合金钢管</a></li>
				          </ul>
				        </li>
				        <li class="dropdown">
				          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">新闻中心 <span class="caret"></span></a>
				          <ul class="dropdown-menu">
				            <li><a href="<?php echo U('Home/Content/newsList',array('classification'=>6));?>">钢管知识</a></li>
				            <li><a href="<?php echo U('Home/Content/newsList',array('classification'=>7));?>">行业动态</a></li>
				            
				          </ul>
				        </li>
				        <li class="dropdown">
				          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">钢管加工 <span class="caret"></span></a>
				          <ul class="dropdown-menu">
				            <li><a href="<?php echo U('Home/Content/product',array('classification'=>8,'fenlei'=>4));?>">自动切割</a></li>
				            <li><a href="<?php echo U('Home/Content/product',array('classification'=>9,'fenlei'=>5));?>">锯床切割</a></li>
				            <li><a href="<?php echo U('Home/Content/product',array('classification'=>10,'fenlei'=>6));?>">钢管倒角</a></li>
				          </ul>
				        </li>
				        <li class="dropdown">
				          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">行业应用 <span class="caret"></span></a>
				          <ul class="dropdown-menu">
				            <li><a href="<?php echo U('Home/Content/index',array('classification'=>11));?>">电力领域</a></li>
				            <li><a href="<?php echo U('Home/Content/index',array('classification'=>12));?>">石化领域</a></li>
				            <li><a href="<?php echo U('Home/Content/index',array('classification'=>13));?>">冶金领域</a></li>
				            <li><a href="<?php echo U('Home/Content/index',array('classification'=>14));?>">机械领域</a></li>
				            <li><a href="<?php echo U('Home/Content/index',array('classification'=>15));?>">汽车领域</a></li>
				            <li><a href="<?php echo U('Home/Content/index',array('classification'=>16));?>">其他领域</a></li>

				          </ul>
				        </li>
				        <li class="dropdown">
				          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">联系我们 <span class="caret"></span></a>
				          <ul class="dropdown-menu">
				            <li><a href="<?php echo U('Home/Content/lianxi');?>">联系方式</a></li>
				            <li><a href="<?php echo U('Home/Content/ditu');?>">电子地图</a></li>
				            <li><a href="<?php echo U('Home/Content/zixun');?>">资讯建议</a></li>
				          </ul>
				        </li>
				        <li class="dropdown"><a href="<?php echo U('Home/Content/xiazai');?>">下载中心</a></li>
				      </ul>
				      <form class="navbar-form navbar-left" action="<?php echo U('Home/Content/sousuo');?>" method="post">
				        <div class="form-group">
				          <input type="text" class="form-control" placeholder="搜索内容" name="ss">
				        </div>
				        <button type="submit" class="btn btn-default">搜索</button>
				      </form>
				    </div><!-- /.navbar-collapse -->
				  </div><!-- /.container-fluid -->
				</nav>
			</div>
		</div>
<link rel="stylesheet" href="/steel/Public/css/index.css">
		<div class="main w">
			<!--轮播图-->
			<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
			  <!-- Indicators -->
			  <ol class="carousel-indicators">
			    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
			    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
			    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
			  </ol>

			  <!-- Wrapper for slides -->
			  <div class="carousel-inner" role="listbox">
			    <div class="item active">
			      <img class="center-block" src="/steel/Public/Uploads/<?php echo ($photodata[1]["photouri"]); ?>" alt="...">
			      <div class="carousel-caption">
			        one
			      </div>
			    </div>
			    <div class="item">
			      <img class="center-block" src="/steel/Public/Uploads/<?php echo ($photodata[2]["photouri"]); ?>" alt="...">
			      <div class="carousel-caption">
			        two
			      </div>
			    </div>
			    <div class="item">
			      <img class="center-block" src="/steel/Public/Uploads/<?php echo ($photodata[3]["photouri"]); ?>" alt="...">
			      <div class="carousel-caption">
			        three
			      </div>
			    </div>
			  </div>

			  <!-- Controls -->
			  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
			    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			    <span class="sr-only">Previous</span>
			  </a>
			  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
			    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			    <span class="sr-only">Next</span>
			  </a>
			</div>
			<!-- 公司简介 -->
			<div class="gsjj w">
				<div class="gsjjleft">
					<div class="gsjjTitle">
						<p class="gsjjTitleText">公司简介</p>
						<p class="gd"><a href="<?php echo U('Home/Content/index',array('classification'=>1));?>">更多>></a></p>
					</div>
					<div class="gsjjCon">
						<img src="/steel/Public/Uploads/<?php echo ($photodata[4]["photouri"]); ?>" class="gsjjIcon">
						<div class="gsjjConText">
							<?php echo ($info["jianjie"]); ?>
						</div>
					</div>
				</div>
				<div class="gsjjright">
					<div class="gsjjTitle">
						<p class="gsjjTitleText">联系方式</p>
						<p class="gd"><a href="<?php echo U('Home/Content/lianxi');?>">更多>></a></p>
					</div>
					<div class="lxwmCon">
						<h3><?php echo ($info["company"]); ?></h3>
						<p><span>联系人：</span><?php echo ($info["people"]); ?></p>
						<p><span>联系电话：</span><?php echo ($info["phone"]); ?>&nbsp;&nbsp;<?php echo ($info["tell"]); ?></p>
						<p><span>QQ：</span><?php echo ($info["qq"]); ?></p>
						<p><span>微信：</span><?php echo ($info["wetch"]); ?></p>
						<p><span>地址：</span><?php echo ($info["address"]); ?></p>
						<p><span>销售：</span><?php echo ($info["protact"]); ?></p>
						<p><span>扫码关注我们</span></p>
						<img src="/steel/Public/Uploads/<?php echo ($photodata[5]["photouri"]); ?>" alt="">
					</div>
				</div>	
			</div>
			<!-- 产品中心 -->
			<div class="cpzx w">
				<div class="gsjjTitle">
					<p class="gsjjTitleText">产品中心</p>
					<p class="gd"><a href="<?php echo U('Home/Content/product',array('classification'=>3,'fenlei'=>1));?>">更多>></a></p>
				</div>
				<div class="cpzxLeft">
					<ul class="tab"  style="padding-left: 0">
				        <li class="tab-item">无缝钢管</li>
				        <li class="tab-item">精密钢管</li>
				        <li class="tab-item">合金钢管</li>
				    </ul>
				</div>
				<div class="product">
				    <div class="mains selected">
				    	<?php if(is_array($wufeng)): foreach($wufeng as $key=>$vo): ?><a href="<?php echo U('Home/Content/product',array('classification'=>3,'fenlei'=>1));?>">
						    		<div class="chzsicon">
						        	<img src="/steel/Public/Uploads/<?php echo ($vo["picname"]); ?>" alt="">
						    		<p>无缝钢管</p>
						    	</div>
						    </a><?php endforeach; endif; ?>
				    </div>
				     <div class="mains">
				    	<?php if(is_array($jingmi)): foreach($jingmi as $key=>$vo): ?><a href="<?php echo U('Home/Content/product',array('classification'=>4,'fenlei'=>2));?>">
						    		<div class="chzsicon">
						        	<img src="/steel/Public/Uploads/<?php echo ($vo["picname"]); ?>" alt="">
						    		<p>精密钢管</p>
						    	</div>
						    </a><?php endforeach; endif; ?>
				    </div>
				     <div class="mains">
				    	<?php if(is_array($hejin)): foreach($hejin as $key=>$vo): ?><a href="<?php echo U('Home/Content/product',array('classification'=>5,'fenlei'=>3));?>">
						    		<div class="chzsicon">
						        	<img src="/steel/Public/Uploads/<?php echo ($vo["picname"]); ?>" alt="">
						    		<p>合金钢管</p>
						    	</div>
						    </a><?php endforeach; endif; ?>
				    </div>
				 </div>
			</div>
			<!-- 产品中心2 -->
			<div class="cpzx w">
				<div class="gsjjTitle">
					<p class="gsjjTitleText">钢管加工</p>
					<p class="gd"><a href="<?php echo U('Home/Content/product',array('classification'=>8,'fenlei'=>4));?>">更多>></a></p>
				</div>
				<div class="cpzxLeft">
					<ul class="tabs" style="padding-left: 0">
				        <li class="tab-item">锯床切割</li>
				        <li class="tab-item">自动切割</li>
				        <li class="tab-item">钢管倒角</li>
				    </ul>
				</div>
				<div class="products">
				    <div class="mains selected">
				    	<?php if(is_array($juchuang)): foreach($juchuang as $key=>$vo): ?><a href="<?php echo U('Home/Content/product',array('classification'=>9,'fenlei'=>5));?>">
						    		<div class="chzsicon">
						        	<img src="/steel/Public/Uploads/<?php echo ($vo["picname"]); ?>" alt="">
						    		<p>锯床切割</p>
						    	</div>
						    </a><?php endforeach; endif; ?>
				    </div>
				     <div class="mains">
				    	<?php if(is_array($zidong)): foreach($zidong as $key=>$vo): ?><a href="<?php echo U('Home/Content/product',array('classification'=>8,'fenlei'=>4));?>">
						    		<div class="chzsicon">
						        	<img src="/steel/Public/Uploads/<?php echo ($vo["picname"]); ?>" alt="">
						    		<p>自动切割</p>
						    	</div>
						    </a><?php endforeach; endif; ?>
				    </div>
				     <div class="mains">
				    	<?php if(is_array($daojiao)): foreach($daojiao as $key=>$vo): ?><a href="<?php echo U('Home/Content/product',array('classification'=>10,'fenlei'=>6));?>">
						    		<div class="chzsicon">
						        	<img src="/steel/Public/Uploads/<?php echo ($vo["picname"]); ?>" alt="">
						    		<p>钢管倒角</p>
						    	</div>
						    </a><?php endforeach; endif; ?>
				    </div>
				 </div>
			</div>
			<!-- 底部文章列表 -->
			<div class="list w">
				<div class="listOne">
					<div class="gsjjTitle">
						<p class="gsjjTitleText">新闻中心</p>
						<p class="gd"><a href="<?php echo U('Home/Content/newsList',array('classification'=>6));?>">更多>></a></p>
					</div>
					<div class="listCon">
						<ul  style="padding-left: 0">
							<?php if(is_array($news)): foreach($news as $key=>$vo): ?><li><a href="<?php echo U('Home/Content/disNews',array('id'=>$vo[id]));?>"><?php echo ($vo["title"]); ?></a><span><?php echo ($vo["time"]); ?></span></li><?php endforeach; endif; ?>
						</ul>
					</div>
				</div>
				<div class="listOne gsjjTitleTextZhong">
					<div class="gsjjTitle">
						<p class="gsjjTitleText ">钢管知识</p>
						<p class="gd"><a href="<?php echo U('Home/Content/newsList',array('classification'=>6));?>">更多>></a></p>
					</div>
					<div class="listCon">
						<ul>
							<?php if(is_array($zhishi)): foreach($zhishi as $key=>$vo): ?><li><a href="<?php echo U('Home/Content/disNews',array('id'=>$vo[id]));?>"><?php echo ($vo["title"]); ?></a><span><?php echo ($vo["time"]); ?></span></li><?php endforeach; endif; ?>
						</ul>
					</div>
				</div>
				<div class="listOne">
					<div class="gsjjTitle">
						<p class="gsjjTitleText">行业动态</p>
						<p class="gd"><a href="<?php echo U('Home/Content/newsList',array('classification'=>7));?>">更多>></a></p>
					</div>
					<div class="listCon">
						<ul>
							<?php if(is_array($dongtai)): foreach($dongtai as $key=>$vo): ?><li><a href="<?php echo U('Home/Content/disNews',array('id'=>$vo[id]));?>"><?php echo ($vo["title"]); ?></a><span><?php echo ($vo["time"]); ?></span></li><?php endforeach; endif; ?>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="footer ">
			<div class="footernav w">
				<ul>
					<li><a href="<?php echo U('Home/Index/index');?>">网站首页</a></li>
				</ul>
				<ul>
					<li class="navbars">关于我们</li>
					<li><a href="<?php echo U('Home/Content/index',array('classification'=>1));?>">企业概况</a></li>
					<li><a href="<?php echo U('Home/Content/index',array('classification'=>2));?>">总经理致辞</a></li>
				</ul>
				<ul>
					<li class="navbars">产品中心</li>
					<li><a href="<?php echo U('Home/Content/product',array('classification'=>3,'fenlei'=>1));?>">无缝钢管</a></li>
					<li><a href="<?php echo U('Home/Content/product',array('classification'=>4,'fenlei'=>2));?>">精密钢管</a></li>
					<li><a href="<?php echo U('Home/Content/product',array('classification'=>5,'fenlei'=>3));?>">合金钢管</a></li>
				</ul>
				<ul>
					<li class="navbars">新闻中心</li>
					<li><a href="<?php echo U('Home/Content/newsList',array('classification'=>6));?>">钢管知识</a></li>
					<li><a href="<?php echo U('Home/Content/newsList',array('classification'=>7));?>">行业动态</a></li>
				</ul>
				<ul>
					<li class="navbars">钢管加工</li>
					<li><a href="<?php echo U('Home/Content/product',array('classification'=>8,'fenlei'=>4));?>">自动切割</a></li>
					<li><a href="<?php echo U('Home/Content/product',array('classification'=>9,'fenlei'=>5));?>">锯床切割</a></li>
					<li><a href="<?php echo U('Home/Content/product',array('classification'=>10,'fenlei'=>6));?>">钢管倒角</a></li>
				</ul>
				<ul>
					<li class="navbars">行业应用</li>
					<li><a href="<?php echo U('Home/Content/index',array('classification'=>11));?>">电力领域</a></li>
					<li><a href="<?php echo U('Home/Content/index',array('classification'=>12));?>">石化领域</a></li>
					<li><a href="<?php echo U('Home/Content/index',array('classification'=>13));?>">冶金领域</a></li>
					<li><a href="<?php echo U('Home/Content/index',array('classification'=>14));?>">机械领域</a></li>
					<li><a href="<?php echo U('Home/Content/index',array('classification'=>15));?>">汽车领域</a></li>
					<li><a href="<?php echo U('Home/Content/index',array('classification'=>16));?>">其他领域</a></li>
				</ul>
				<ul>
					<li class="navbars">联系我们</li>
					<li><a href="<?php echo U('Home/Content/lianxi');?>">联系方式</a></li>
					<li><a href="<?php echo U('Home/Content/ditu');?>">电子地图</a></li>
					<li><a href="<?php echo U('Home/Content/zixun');?>">资讯建议</a></li>
				</ul>
				<div class="gsjjright" style="margin:15px;padding-left: 80px;">
					<div class="lxwmCons">
						<img src="/steel/Public/Uploads/<?php echo ($photodata[6]["photouri"]); ?>" alt="">
					</div>
				</div>	

			</div>
			<div class="dibu">页面版权所有：<?php echo ($info["company"]); ?> &nbsp;&nbsp;<?php echo ($info["beian"]); ?> &nbsp;&nbsp;网站建设：千宇软件</div>
		</div>
	</div>
<?php echo ($info["tongji"]); ?>

<div id="rightArrow"><a href="javascript:;" title="在线客户"></a></div>
<div id="floatDivBoxs">
  <div class="floatDtt">在线客服</div>
  <div class="floatShadow">
    <ul class="floatDqq">
      <li style="padding-left:0px;"><a target="_blank" href="tencent://message/?uin=<?php echo ($info["qq"]); ?>&Site=sc.chinaz.com&Menu=yes"><img src="/steel/Public/img/qq.png" align="absmiddle">&nbsp;&nbsp;在线客服1号</a></li>
      <li style="padding-left:0px;"><a target="_blank" href="tencent://message/?uin=<?php echo ($info["kefu"]); ?>&Site=sc.chinaz.com&Menu=yes"><img src="/steel/Public/img/qq.png" align="absmiddle">&nbsp;&nbsp;在线客服2号</a></li>
    </ul>
    <div class="floatDtxt">热线电话</div>
    <div class="floatDtel">
		<?php echo ($info["phone"]); ?>
		<?php echo ($info["tell"]); ?>
    </div>
    <div style="text-align:center;padding:10px;background:#EBEBEB;"><img src="/steel/Public/Uploads/<?php echo ($photodata[5]["photouri"]); ?>" width="100%" alt=""><br>
      微信公众账号</div>
  </div>
  <div class="floatDbg"></div>
</div>
	<script src="/steel/Public/js/rightArrow.js"></script>





               <button data-method="offset" data-type="auto" id="leftbox" class="leftbox" data-type="auto" onclick="OpenDiv()"><img src="/steel/Public/img/r-number.png" />
                <p>重量计算器</p>
                </button>

                 <div id="div1">
                
                <div class="title">重量计算器</div>
                <div class="con">
                    <script LANGUAGE="JavaScript"> 
                    function enfocus()
                    {
                        var t1 = $("input[name='Data']").val();
                        var t2 = $("input[name='Data2']").val();
                        var t3 = $("input[name='Data3']").val();
                        var t4 = $("input[name='Data4']").val();

                    if(t1!="" && t2!="" && t3!=""){

                    document.getElementById("copy").value =( parseFloat(t1) - parseFloat(t2)) * parseFloat(t2)*0.02466*parseFloat(t3);
                    }
                    else {document.getElementById("copy").value = "";}
                    }

                    </script>
                    <form>
                        <div class="layui-form-item">
                         <label class="layui-form-label">外径(mm)：</label>
                            <div class="layui-input-inline">
                              <input lay-verify="required" placeholder="请输入外径" autocomplete="off" class="layui-input" type="text" name="Data" onkeyup="enfocus()">
                            </div>
                          </div>
                        <div class="layui-form-item">
                         <label class="layui-form-label">壁厚(mm)：</label>
                            <div class="layui-input-inline">
                              <input lay-verify="required" placeholder="请输入壁厚" autocomplete="off" class="layui-input" type="text" NAME="Data2" onkeyup="enfocus()">
                            </div>
                          </div>
                          <div class="layui-form-item">
                         <label class="layui-form-label">长度(M)：</label>
                            <div class="layui-input-inline">
                              <input lay-verify="required" placeholder="请输入壁厚" autocomplete="off" class="layui-input" type="text" NAME="Data3" onkeyup="enfocus()">
                            </div>
                          </div>
                           <div class="layui-form-item">
                         <label class="layui-form-label">重量(KG)：</label>
                            <div class="layui-input-inline">
                              <input lay-verify="required" placeholder="重量" autocomplete="off" class="layui-input" type="text" AME="Copy" id="copy">
                            </div>
                          </div>
                      </form>
                </div>
               <a href="javascript:CloseDiv();">关闭</a>
        </div>

<script>
	 function OpenDiv(){
                 document.getElementById("div1").style.display="block";
            }

            function CloseDiv(){
                document.getElementById("div1").style.display="none";
            }
</script>




</body>
</html>