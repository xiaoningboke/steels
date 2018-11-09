<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta http-equiv="Cache-Control" content="no-siteapp" />
		<link href="/steel/Public/assets/css/bootstrap.min.css" rel="stylesheet" />
        <link rel="stylesheet" href="/steel/Public/css/style.css"/>       
        <link href="/steel/Public/assets/css/codemirror.css" rel="stylesheet">
        <link rel="stylesheet" href="/steel/Public/assets/css/ace.min.css" />
        <link rel="stylesheet" href="/steel/Public/assets/css/font-awesome.min.css" />
<link rel="stylesheet" href="/steel/Public/font/css/font-awesome.min.css" />
        
        	<!--[if IE 7]>
		  <link rel="stylesheet" href="assets/css/font-awesome-ie7.min.css" />
		<![endif]-->
        <!--[if lte IE 8]>
		  <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
		<![endif]-->
		<script src="/steel/Public/js/jquery-1.9.1.min.js"></script>
        <script src="/steel/Public/assets/js/bootstrap.min.js"></script>
		<script src="/steel/Public/assets/js/typeahead-bs2.min.js"></script>           	
        <script src="/steel/Public/assets/layer/layer.js" type="text/javascript" ></script>          
        <script src="/steel/Public/assets/js/jquery-ui-1.10.3.custom.min.js"></script>
		<script src="/steel/Public/assets/js/jquery.ui.touch-punch.min.js"></script>
        <script src="/steel/Public/assets/js/ace-elements.min.js"></script>
		<script src="/steel/Public/assets/js/ace.min.js"></script>
<title>系统设置</title>

</head>

</head>
<body>
<div class="margin clearfix">
 <div class="article_style">
  <form class="form-horizontal" method="post" action="<?php echo U('Admin/Index/exitpassword');?>" onsubmit = "return checkUser();" id = "userMsg">
    <div class="add_content" id="form-article-add">
     <ul>
      <li class="clearfix Mandatory">
      <label class="label_name"><i>*</i>原密码</label><span class="formControls col-10">
        <input type="password" id="oldpassword" class="col-xs-10 col-sm-5 " name="oldpassword">
      </span>
      </li>
      <li class="clearfix Mandatory">
      <label class="label_name"><i>*</i>新密码</label><span class="formControls col-10">
        <input type="password" id="password" class="col-xs-10 col-sm-5 " name="password">
      </span>
      </li>
      <li class="clearfix Mandatory">
      <label class="label_name"><i>*</i>确认密码</label><span class="formControls col-10">
        <input type="password" id="newpassword" class="col-xs-10 col-sm-5 " name="newpassword">
      </span>
      </li>
     </ul>
      <div class="Button_operation">
				<button  class="btn btn-primary radius" type="submit">保存并提交</button>
			</div>
      </form>
    </div>
 </div>
</div>
</body>
</html>
<script>
  function checkUser(){
   var oldpassword = document.getElementById("oldpassword").value;
   var password = document.getElementById("password").value;
   var newpassword = document.getElementById("newpassword").value;

   if(oldpassword == ""  ){
     alert("原密码不能为空");
     return false;
   }

  if(password == ""  ){
     alert("密码不能为空");
     return false;
   }
  if(newpassword == ""  ){
     alert("确认密码不能为空");
     return false;
   }
   if(password!=newpassword){
      alert("两次密码不一致");
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