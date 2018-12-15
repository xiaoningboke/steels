<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>咨询建议_<?php echo ($info["company"]); ?></title>
		<!-- SEO -->
	<meta name="description" content="<?php echo ($info["content"]); ?>" />
	<meta name="keywords" content="<?php echo ($info["keywords"]); ?>" />
	<meta name="generator" content="千宇软件" />
	<meta name="template" content="Zero" />
	<link rel="stylesheet" href="/Public/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="/Public/bootstrap/css/bootstrap-theme.css">
	<link rel="stylesheet" href="/Public/css/header.css">
	<link rel="stylesheet" href="/Public/css/about.css">
	<link rel="stylesheet" href="/Public/css/kefu.css">
	<script src="/Public/jquery/jquery.js"></script>
	<script src="/Public/bootstrap/js/bootstrap.min.js"></script>
	<script src="/Public/js/swsy.js"></script>
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
				<img src="/Public/Uploads/<?php echo ($photodata[0]["photouri"]); ?>" alt="">
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
				          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">产品中心 <span class="caret"></span></a>
				          <ul class="dropdown-menu">
				            <li><a href="<?php echo U('Home/Content/product',array('classification'=>3,'fenlei'=>1));?>">无缝钢管</a></li>
				            <li><a href="<?php echo U('Home/Content/product',array('classification'=>4,'fenlei'=>2));?>">精密钢管</a></li>
				            <li><a href="<?php echo U('Home/Content/product',array('classification'=>5,'fenlei'=>3));?>">合金钢管</a></li>
				          </ul>
				        </li>
				        <li class="dropdown">
				          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">新闻中心 <span class="caret"></span></a>
				          <ul class="dropdown-menu">
				          	<li><a href="<?php echo U('Home/Content/newsList',array('classification'=>17));?>">热点资讯</a></li>
				            <li><a href="<?php echo U('Home/Content/newsList',array('classification'=>6));?>">钢管知识</a></li>
				            <li><a href="<?php echo U('Home/Content/newsList',array('classification'=>7));?>">行业动态</a></li>
				            
				          </ul>
				        </li>
				        <li class="dropdown">
				          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">钢管加工 <span class="caret"></span></a>
				          <ul class="dropdown-menu">
				            <li><a href="<?php echo U('Home/Content/product',array('classification'=>8,'fenlei'=>4));?>">自动切割</a></li>
				            <li><a href="<?php echo U('Home/Content/product',array('classification'=>9,'fenlei'=>5));?>">锯床切割</a></li>
				            <li><a href="<?php echo U('Home/Content/product',array('classification'=>10,'fenlei'=>6));?>">无缝方管</a></li>
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
<link rel="stylesheet" href="/Public/css/about.css">

<div class="main">
	<div class="bigImgDiv w">
		<img src="/Public/Uploads/<?php echo ($photodata[12]["photouri"]); ?>" alt="" class="bigImg">
	</div>
	<div class="fynews">
		<div class="w">
			<img src="/Public/img/fynews.jpg" alt="">
			<ul class="fynewsnr">
				<?php if(is_array($tuijiannews)): foreach($tuijiannews as $key=>$vo): ?><li><a href="<?php echo U('Home/Content/disNews',array('id'=>$vo[id]));?>"><?php echo ($vo["title"]); ?></a></li><?php endforeach; endif; ?>
			</ul>
		</div>
	</div>
	<div class="w con">
		<div class="Conleft">
			<div class="leftTop">
				<div class="leftTopTitle">关于我们</div>
				<ul class="leftfenlei">
					<li><a href="<?php echo U('Home/Content/product',array('classification'=>3,'fenlei'=>1));?>">无缝钢管</a></li>
					<li><a href="<?php echo U('Home/Content/product',array('classification'=>4,'fenlei'=>2));?>">精密钢管</a></li>
					<li><a href="<?php echo U('Home/Content/product',array('classification'=>5,'fenlei'=>3));?>">合金钢管</a></li>
				</ul>
				<div class="leftTopTitle">钢管加工</div>
				<ul class="leftfenlei">
					<li><a href="<?php echo U('Home/Content/product',array('classification'=>8,'fenlei'=>4));?>">自动切割</a></li>
					<li><a href="<?php echo U('Home/Content/product',array('classification'=>9,'fenlei'=>5));?>">锯床切割</a></li>
					<li><a href="<?php echo U('Home/Content/product',array('classification'=>10,'fenlei'=>6));?>">无缝方管</a></li>
				</ul>
			</div>
			<div class="leftBottom">
				<div class="leftTopTitle">联系方式</div>
				<img src="/Public/Uploads/<?php echo ($photodata[7]["photouri"]); ?>" alt="">
				<h4><?php echo ($info["company"]); ?></h4>
				<p><span>联系人：</span><?php echo ($info["people"]); ?></p>
				<p><span>QQ：</span><?php echo ($info["qq"]); ?></p>
				<p><span>电话：</span><?php echo ($info["phone"]); ?></p>
				<p><span>微信：</span><?php echo ($info["wetch"]); ?></p>
				<p><span>邮箱：</span><?php echo ($info["email"]); ?></p>
				<p><span>网址：</span><?php echo ($info["url"]); ?></p>
				<p><span>地址：</span><?php echo ($info["address"]); ?></p>
			</div>
		</div>
		<div class="Conright">
			<div class="leftTopTitle">咨询建议</div>
			<div class="rightCon" style="padding: 40px;padding-left: 0;">
				<form class="form-horizontal" method="post" action="<?php echo U('Home/Content/tijiaojianyi');?>" onsubmit = "return checkUser();" id = "userMsg">
				  <div class="form-group">
				    <label for="inputEmail3" class="col-sm-2 control-label">昵称：</label>
				    <div class="col-sm-10">
				      <input type="text" class="form-control" placeholder="请输入昵称" id="nickname" name="nickname">
				    </div>
				  </div>
				  <div class="form-group">
				    <label for="inputPassword3" class="col-sm-2 control-label">电话：</label>
				    <div class="col-sm-10">
				      <input type="text" class="form-control" placeholder="请输入电话" name="phone" id="phone">
				    </div>
				  </div>
				  <div class="form-group">
				    <label for="inputPassword3" class="col-sm-2 control-label">邮箱：</label>
				    <div class="col-sm-10">
				      <input type="text" class="form-control"  placeholder="请输入邮箱" name="email" id="email">
				    </div>
				  </div>
				  <div class="form-group">
				    <label for="inputPassword3" class="col-sm-2 control-label">内容：</label>
				    <div class="col-sm-10">
				      <textarea class="form-control" rows="5" name="content"></textarea>
				    </div>
				  </div>
				  <div class="form-group">
				    <div class="col-sm-offset-2 col-sm-10">
				      <button  onclick = "checkUser()" class="btn btn-default">提交</button>
				    </div>
				  </div>
				</form>
			</div>
		</div>
	</div>
</div>
<script>
	function checkUser(){
   var nickname = document.getElementById("nickname").value;
   var phone = document.getElementById("phone").value;
   var email = document.getElementById("email").value;

   if(nickname == ""  ){
     alert("昵称不能为空");
     return false;
   }

  if(phone == ""  ){
     alert("手机号不能为空");
     return false;
   }
  if(email == ""  ){
     alert("邮箱不能为空");
     return false;
   }


    var reg = new RegExp("^[a-z0-9]+([._\\-]*[a-z0-9])*@([a-z0-9]+[-a-z0-9]*[a-z0-9]+.){1,63}[a-z0-9]+$"); //正则表达式
　　if(!reg.test(email)){ //正则验证不通过，格式不对
　　　　alert("请输入正确的邮箱!");
　　　　return false;
　　}
  
  document.getElementById("userMsg").submit();
}
</script>
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
          <li><a href="<?php echo U('Home/Content/newsList',array('classification'=>17));?>">热点资讯</a></li>
					<li><a href="<?php echo U('Home/Content/newsList',array('classification'=>6));?>">钢管知识</a></li>
					<li><a href="<?php echo U('Home/Content/newsList',array('classification'=>7));?>">行业动态</a></li>
				</ul>
				<ul>
					<li class="navbars">钢管加工</li>
					<li><a href="<?php echo U('Home/Content/product',array('classification'=>8,'fenlei'=>4));?>">自动切割</a></li>
					<li><a href="<?php echo U('Home/Content/product',array('classification'=>9,'fenlei'=>5));?>">锯床切割</a></li>
					<li><a href="<?php echo U('Home/Content/product',array('classification'=>10,'fenlei'=>6));?>">无缝方管</a></li>
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
						<img src="/Public/Uploads/<?php echo ($photodata[6]["photouri"]); ?>" alt="">
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
      <li style="padding-left:0px;"><a target="_blank" href="tencent://message/?uin=<?php echo ($info["qq"]); ?>&Site=sc.chinaz.com&Menu=yes"><img src="/Public/img/qq.png" align="absmiddle">&nbsp;&nbsp;在线客服1号</a></li>
      <li style="padding-left:0px;"><a target="_blank" href="tencent://message/?uin=<?php echo ($info["kefu"]); ?>&Site=sc.chinaz.com&Menu=yes"><img src="/Public/img/qq.png" align="absmiddle">&nbsp;&nbsp;在线客服2号</a></li>
    </ul>
    <div class="floatDtxt">热线电话</div>
    <div class="floatDtel">
		<?php echo ($info["phone"]); ?>
		<?php echo ($info["tell"]); ?>
    </div>
    <div style="text-align:center;padding:10px;background:#EBEBEB;"><img src="/Public/Uploads/<?php echo ($photodata[5]["photouri"]); ?>" width="100%" alt=""><br>
      微信公众账号</div>
  </div>
  <div class="floatDbg"></div>
</div>
	<script src="/Public/js/rightArrow.js"></script>





               <button data-method="offset" data-type="auto" id="leftbox" class="leftbox" data-type="auto" onclick="OpenDiv()"><img src="/Public/img/r-number.png" />
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