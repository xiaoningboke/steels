<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>网站后台管理系统  </title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link href="/Public/assets/css/bootstrap.min.css" rel="stylesheet" />
	<link rel="stylesheet" href="/Public/assets/css/font-awesome.min.css" />
	<!--[if IE 7]>
	<link rel="stylesheet" href="assets/css/font-awesome-ie7.min.css" />
	<![endif]-->
	<link rel="stylesheet" href="/Public/assets/css/ace.min.css" />
	<link rel="stylesheet" href="/Public/assets/css/ace-rtl.min.css" />
	<link rel="stylesheet" href="/Public/assets/css/ace-skins.min.css" />
	<link rel="stylesheet" href="/Public/css/style.css" />
	<!--[if lte IE 8]>
	<link rel="stylesheet" href="assets/css/ace-ie.min.css" />

	<![endif]-->
	<script src="/Public/assets/js/ace-extra.min.js"></script>
	<!--[if lt IE 9]>
	<script src="assets/js/html5shiv.js"></script>
	<script src="assets/js/respond.min.js"></script>
	<![endif]-->
	<!--[if !IE]> -->
	<script src="/Public/js/jquery-1.9.1.min.js"></script>
	<!-- <![endif]-->
	<!--[if IE]>
	<script type="text/javascript">window.jQuery || document.write("<script src='assets/js/jquery-1.10.2.min.js'>"+"<"+"script>");</script>
	<![endif]-->
	<script type="text/javascript">
        if("ontouchend" in document) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>"+"<"+"script>");
	</script>
	<script src="/Public/assets/js/bootstrap.min.js"></script>
	<script src="/Public/assets/js/typeahead-bs2.min.js"></script>
	<!--[if lte IE 8]>
	<script src="assets/js/excanvas.min.js"></script>
	<![endif]-->
	<script src="/Public/assets/js/ace-elements.min.js"></script>
	<script src="/Public/assets/js/ace.min.js"></script>
	<script src="/Public/assets/layer/layer.js" type="text/javascript"></script>
	<script src="/Public/assets/laydate/laydate.js" type="text/javascript"></script>
	<script src="/Public/js/jquery.nicescroll.js" type="text/javascript"></script>
	<script type="text/javascript">
        $(function(){
            var cid = $('#nav_list> li>.submenu');
            cid.each(function(i){
                $(this).attr('id',"Sort_link_"+i);

            })
        })
        jQuery(document).ready(function(){
            $.each($(".submenu"),function(){
                var $aobjs=$(this).children("li");
                var rowCount=$aobjs.size();
                var divHeigth=$(this).height();
                $aobjs.height(divHeigth/rowCount);
            });
            //初始化宽度、高度

            $("#main-container").height($(window).height()-76);
            $("#iframe").height($(window).height()-140);

            $(".sidebar").height($(window).height()-99);
            var thisHeight = $("#nav_list").height($(window).outerHeight()-173);
            $(".submenu").height();
            $("#nav_list").children(".submenu").css("height",thisHeight);

            //当文档窗口发生改变时 触发
            $(window).resize(function(){
                $("#main-container").height($(window).height()-76);
                $("#iframe").height($(window).height()-140);
                $(".sidebar").height($(window).height()-99);

                var thisHeight = $("#nav_list").height($(window).outerHeight()-173);
                $(".submenu").height();
                $("#nav_list").children(".submenu").css("height",thisHeight);
            });
            $(document).on('click','.iframeurl',function(){
                var cid = $(this).attr("name");
                var cname = $(this).attr("title");
                $("#iframe").attr("src",cid).ready();
                $("#Bcrumbs").attr("href",cid).ready();
                $(".Current_page a").attr('href',cid).ready();
                $(".Current_page").attr('name',cid);
                $(".Current_page").html(cname).css({"color":"#333333","cursor":"default"}).ready();
                $("#parentIframe").html('<span class="parentIframe iframeurl"> </span>').css("display","none").ready();
                $("#parentIfour").html(''). css("display","none").ready();
            });



        });
        /******/
        $(document).on('click','.link_cz > li',function(){
            $('.link_cz > li').removeClass('active');
            $(this).addClass('active');
        });
 


        /*********************点击事件*********************/
        $( document).ready(function(){
            $('#nav_list,.link_cz').find('li.home').on('click',function(){
                $('#nav_list,.link_cz').find('li.home').removeClass('active');
                $(this).addClass('active');
            });
//时间设置
            function currentTime(){
                var d=new Date(),str='';
                str+=d.getFullYear()+'年';
                str+=d.getMonth() + 1+'月';
                str+=d.getDate()+'日';
                str+=d.getHours()+'时';
                str+=d.getMinutes()+'分';
                str+= d.getSeconds()+'秒';
                return str;
            }

            setInterval(function(){$('#time').html(currentTime)},1000);
//修改密码
            $('.change_Password').on('click', function(){
                layer.open({
                    type: 1,
                    title:'修改密码',
                    area: ['300px','300px'],
                    shadeClose: true,
                    content: $('#change_Pass'),
                    btn:['确认修改'],
                    yes:function(index, layero){
                        if ($("#password").val()==""){
                            layer.alert('原密码不能为空!',{
                                title: '提示框',
                                icon:0,

                            });
                            return false;
                        }
                        if ($("#Nes_pas").val()==""){
                            layer.alert('新密码不能为空!',{
                                title: '提示框',
                                icon:0,

                            });
                            return false;
                        }

                        if ($("#c_mew_pas").val()==""){
                            layer.alert('确认新密码不能为空!',{
                                title: '提示框',
                                icon:0,

                            });
                            return false;
                        }
                        if(!$("#c_mew_pas").val || $("#c_mew_pas").val() != $("#Nes_pas").val() )
                        {
                            layer.alert('密码不一致!',{
                                title: '提示框',
                                icon:0,

                            });
                            return false;
                        }
                        else{
                            layer.alert('修改成功！',{
                                title: '提示框',
                                icon:1,
                            });
                            layer.close(index);
                        }
                    }
                });
            });
            $('#Exit_system').on('click', function(){
                layer.confirm('是否确定退出系统？', {
                        btn: ['是','否'] ,//按钮
                        icon:2,
                    },
                    function(){
                        location.href="<?php echo U('Login/Index/quit');?>";

                    });
            });
        });
        function link_operating(name,title){
            var cid = $(this).name;
            var cname = $(this).title;
            $("#iframe").attr("src",cid).ready();
            $("#Bcrumbs").attr("href",cid).ready();
            $(".Current_page a").attr('href',cid).ready();
            $(".Current_page").attr('name',cid);
            $(".Current_page").html(cname).css({"color":"#333333","cursor":"default"}).ready();
            $("#parentIframe").html('<span class="parentIframe iframeurl"> </span>').css("display","none").ready();
            $("#parentIfour").html(''). css("display","none").ready();


        }
	</script>
</head>
<body>
<div class="navbar navbar-default" id="navbar">
	<script type="text/javascript">
        try{ace.settings.check('navbar' , 'fixed')}catch(e){}
	</script>
	<div class="navbar-container" id="navbar-container">
		<div class="navbar-header pull-left">
			<!--<a href="#" class="navbar-brand">-->
			<!--<small>					-->
			<!--<img src="images/logo.png" width="470px">-->
			<!--</small>-->
			<!--</a>&lt;!&ndash; /.brand &ndash;&gt;-->
			<img src="/Public/images/潍坊科技学院校徽.png" height="75" width="500" />
		</div>
		<!-- /.navbar-header -->
		<div class="navbar-header operating pull-left">
		</div>
		<div class="navbar-header pull-right" role="navigation">
			<ul class="nav ace-nav">
				<li class="light-blue"> <a data-toggle="dropdown" href="#" class="dropdown-toggle"> <span class="time"><em id="time"></em></span><span class="user-info"><small>欢迎光临,</small>超级管理员</span> <i class="icon-caret-down"></i> </a>
					<ul class="user-menu pull-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
						<!--<li><a href="javascript:void(0" name="Systems.html" title="系统设置" class="iframeurl"><i class="icon-cog"></i>网站设置</a></li>-->
						<li><a href="javascript:void(0)" name="<?php echo U('Admin/Index/dispassword');?>" title="个人信息" class="iframeurl"><i class="icon-user"></i>个人资料</a></li>
						<li class="divider"></li>
						<li><a href="javascript:void(0)" id="Exit_system"><i class="icon-off"></i>退出</a></li>
					</ul> </li>
				
			</ul>
		</div>
	</div>
</div>
<div class="main-container" id="main-container">
	<script type="text/javascript">
        try{ace.settings.check('main-container' , 'fixed')}catch(e){}
	</script>
	<div class="main-container-inner">
		<a class="menu-toggler" id="menu-toggler" href="#"> <span class="menu-text"></span> </a>
		<div class="sidebar" id="sidebar">
			<script type="text/javascript">
                try{ace.settings.check('sidebar' , 'fixed')}catch(e){}
			</script>
			<div class="sidebar-shortcuts" id="sidebar-shortcuts">
				<div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
					<span style="color: #585858">超级管理员</span>&nbsp;&nbsp;&nbsp;&nbsp;
					<span style="color: #585858">管理员</span>
				</div>
				<div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
					<span class="btn btn-success"></span>
					<span class="btn btn-info"></span>
					<span class="btn btn-warning"></span>
					<span class="btn btn-danger"></span>
				</div>
			</div>
			<!-- #sidebar-shortcuts -->
			<div id="menu_style" class="menu_style">
				<ul class="nav nav-list" id="nav_list">
					<li class="home"><a href="javascript:void(0)" name="<?php echo U('Home/Index/index');?>" class="iframeurl" title=""><i class="icon-list"></i><span class="menu-text"> 系统首页 </span></a></li>
					<li><a href="#" class="dropdown-toggle"><i class="icon-list"></i><span class="menu-text"> 网站信息 </span><b class="arrow icon-angle-down"></b></a>
						<ul class="submenu">
							<li class="home"><a href="javascript:void(0)" name="<?php echo U('Admin/Index/setup');?>" title="产品类表" class="iframeurl"><i class="icon-double-angle-right"></i>配置信息</a></li>
							<li class="home"><a href="javascript:void(0)" name="<?php echo U('Admin/Index/jianjie');?>" title="品牌管理" class="iframeurl"><i class="icon-double-angle-right"></i>公司简介</a></li>
							<li class="home"><a href="javascript:void(0)" name="<?php echo U('Admin/Index/speech');?>"  title="分类管理" class="iframeurl"><i class="icon-double-angle-right"></i>总经理致辞</a></li>
						</ul> </li>
					<li> <a href="#" class="dropdown-toggle"><i class="icon-list"></i><span class="menu-text"> 产品服务 </span><b class="arrow icon-angle-down"></b></a>
						<ul class="submenu">
							<li class="home"><a href="javascript:void(0)" name="<?php echo U('Admin/Index/wufeng');?>" title="广告管理" class="iframeurl"><i class="icon-double-angle-right"></i>无缝钢管</a></li>
							<li class="home"><a href="javascript:void(0)" name="<?php echo U('Admin/Index/jingmi');?>" title="分类管理" class="iframeurl"><i class="icon-double-angle-right"></i>精密钢管</a></li>
							<li class="home"><a href="javascript:void(0)" name="<?php echo U('Admin/Index/hejin');?>" title="分类管理" class="iframeurl"><i class="icon-double-angle-right"></i>合金钢管</a></li>
						</ul> </li>
					<li> <a href="#" class="dropdown-toggle"><i class="icon-list"></i><span class="menu-text"> 新闻中心 </span><b class="arrow icon-angle-down"></b></a>
						<ul class="submenu">
							<li class="home"><a href="javascript:void(0)" name="<?php echo U('Admin/Index/addNews');?>" title="交易信息" class="iframeurl"><i class="icon-double-angle-right"></i>发布新闻</a></li>
							<li class="home"><a href="javascript:void(0)" name="<?php echo U('Admin/Index/newslist');?>" title="新闻列表" class="iframeurl"><i class="icon-double-angle-right"></i>新闻列表</a></li>
						</ul> </li>
					<li> <a href="#" class="dropdown-toggle"><i class="icon-list"></i><span class="menu-text"> 钢管加工 </span><b class="arrow icon-angle-down"></b></a>
						<ul class="submenu">
							<li class="home"><a href="javascript:void(0)" name="<?php echo U('Admin/Index/zidong');?>" title="自动切割" class="iframeurl"><i class="icon-double-angle-right"></i>自动切割</a></li>
							<li class="home"><a href="javascript:void(0)" name="<?php echo U('Admin/Index/juchuang');?>" title="锯床切割" class="iframeurl"><i class="icon-double-angle-right"></i>锯床切割</a></li>
							<li class="home"><a href="javascript:void(0)" name="<?php echo U('Admin/Index/daojiao');?>" title="钢管倒角" class="iframeurl"><i class="icon-double-angle-right"></i>钢管倒角</a></li>
						</ul> </li>
					<li> <a href="#" class="dropdown-toggle"><i class="icon-list"></i><span class="menu-text"> 行业领域 </span><b class="arrow icon-angle-down"></b></a>
						<ul class="submenu">
							<li class="home"><a href="javascript:void(0)" name="<?php echo U('Admin/Index/dianli');?>" title="电力领域" class="iframeurl"><i class="icon-double-angle-right"></i>电力领域</a></li>
							<li class="home"><a href="javascript:void(0)" name="<?php echo U('Admin/Index/yejin');?>" title="冶金领域" class="iframeurl"><i class="icon-double-angle-right"></i>冶金领域</a></li>
							<li class="home"><a href="javascript:void(0)" name="<?php echo U('Admin/Index/shihua');?>" title="石化领域" class="iframeurl"><i class="icon-double-angle-right"></i>石化领域</a></li>
							<li class="home"><a href="javascript:void(0)" name="<?php echo U('Admin/Index/jixie');?>" title="机械领域" class="iframeurl"><i class="icon-double-angle-right"></i>机械领域</a></li>
							<li class="home"><a href="javascript:void(0)" name="<?php echo U('Admin/Index/qiche');?>" title="汽车领域" class="iframeurl"><i class="icon-double-angle-right"></i>汽车领域</a></li>
							<li class="home"><a href="javascript:void(0)" name="<?php echo U('Admin/Index/qita');?>" title="其他领域" class="iframeurl"><i class="icon-double-angle-right"></i>其他领域</a></li>
						</ul> </li>
					<li><a href="#" class="dropdown-toggle"><i class="icon-list"></i><span class="menu-text"> 文件管理 </span><b class="arrow icon-angle-down"></b></a>
						<ul class="submenu">
							<li class="home"><a href="javascript:void(0)" name="<?php echo U('Admin/Index/file');?>" title="上传文件" class="iframeurl"><i class="icon-double-angle-right"></i>上传文件</a></li>
							<li class="home"><a href="javascript:void(0)" name="<?php echo U('Admin/Index/fileList');?>" title="文件列表" class="iframeurl"><i class="icon-double-angle-right"></i>文件列表</a></li>
							<li class="home"><a href="javascript:void(0)" name="<?php echo U('Admin/Index/picList');?>" title="网站图片" class="iframeurl"><i class="icon-double-angle-right"></i>网站图片</a></li>
						</ul> </li>
					<li><a href="#" class="dropdown-toggle"><i class="icon-list"></i><span class="menu-text"> 消息管理 </span><b class="arrow icon-angle-down"></b></a>
						<ul class="submenu">
							<li class="home"><a href="javascript:void(0)" name="<?php echo U('Admin/Index/liuyan');?>" title="留言列表" class="iframeurl"><i class="icon-double-angle-right"></i>留言列表</a></li>
							
						</ul> </li>
				
					
					
				</ul>
			</div>
			<script type="text/javascript">
                $("#menu_style").niceScroll({
                    cursorcolor:"#888888",
                    cursoropacitymax:1,
                    touchbehavior:false,
                    cursorwidth:"5px",
                    cursorborder:"0",
                    cursorborderradius:"5px"
                });
			</script>
			<div class="sidebar-collapse" id="sidebar-collapse">
				<i class="icon-double-angle-left" data-icon1="icon-double-angle-left" data-icon2="icon-double-angle-right"></i>
			</div>
			<script type="text/javascript">
                try{ace.settings.check('sidebar' , 'collapsed')}catch(e){}
			</script>
		</div>
		<div class="main-content">
			<script type="text/javascript">
                try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
			</script>
			<div class="breadcrumbs" id="breadcrumbs">
				<ul class="breadcrumb">
					<li> <i class="icon-home home-icon"></i> <a href="<?php echo U('Home/Index/index');?>">首页</a> </li>
					<li class="active"><span class="Current_page iframeurl"></span></li>
					<li class="active" id="parentIframe"><span class="parentIframe iframeurl"></span></li>
					<li class="active" id="parentIfour"><span class="parentIfour iframeurl"></span></li>
				</ul>
			</div>
			<iframe id="iframe" style="border:0; width:100%; background-color:#FFF;" name="iframe" frameborder="0" src="<?php echo U('Home/Index/index');?>"> </iframe>
			<!-- /.page-content -->
		</div>
		<!-- /.main-content -->
		<div class="ace-settings-container" id="ace-settings-container">
			<div class="btn btn-app btn-xs btn-warning ace-settings-btn" id="ace-settings-btn">
				<i class="icon-cog bigger-150"></i>
			</div>
			<div class="ace-settings-box" id="ace-settings-box">
				<div>
					<div class="pull-left">
						<select id="skin-colorpicker" class="hide"> <option data-skin="default" value="#438EB9">#438EB9</option> <option data-skin="skin-1" value="#222A2D">#222A2D</option> <option data-skin="skin-2" value="#C6487E">#C6487E</option> <option data-skin="skin-3" value="#D0D0D0">#D0D0D0</option> </select>
					</div>
					<span>&nbsp; 选择皮肤</span>
				</div>
				<div>
					<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-sidebar" />
					<label class="lbl" for="ace-settings-sidebar"> 固定滑动条</label>
				</div>
				<div>
					<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-rtl" />
					<label class="lbl" for="ace-settings-rtl">切换到左边</label>
				</div>
				<div>
					<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-add-container" />
					<label class="lbl" for="ace-settings-add-container"> 切换窄屏 <b></b> </label>
				</div>
			</div>
		</div>
		<!-- /#ace-settings-container -->
	</div>
	<!-- /.main-container-inner -->
</div>
<!--底部样式-->
<div class="footer_style" id="footerstyle">
	<script type="text/javascript">try{ace.settings.check('footerstyle' , 'fixed')}catch(e){}</script>
	<p class="l_f">技术支持：千宇信息科技有限责任公司</p>
	<p class="r_f">电话：17852661518</p>
</div>
<!-- /.main-container -->
<!-- basic scripts -->
</body>
</html>