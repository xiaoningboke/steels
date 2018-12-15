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

<body>
<div class="margin clearfix">
 <div class="stystems_style">
  <div class="tabbable">
    <div class="tab-content">
      <form action="<?php echo U('Admin/Index/exitInformation');?>" method="post" id="test_form">
		<div id="home" class="tab-pane active">
         <div class="form-group"><label class="col-sm-1 control-label no-padding-right" for="form-field-1"><i>*</i>公司名称： </label>
          <div class="col-sm-9"><input type="text" id="website-title" placeholder="控制在25个字、50个字节以内" name = "company" value="<?php echo ($data["company"]); ?>" class="col-xs-10 "></div>
          </div>
           <div class="form-group"><label class="col-sm-1 control-label no-padding-right" for="form-field-1"><i>*</i>联系人： </label>
          <div class="col-sm-9"><input type="text" id="website-title" placeholder="请输入联系人" name="people" value="<?php echo ($data["people"]); ?>" class="col-xs-10 "></div>
          </div>
          <div class="form-group"><label class="col-sm-1 control-label no-padding-right" for="form-field-1"><i>*</i>关键词： </label>
          <div class="col-sm-9"><input type="text" id="website-title" placeholder="4个左右,8汉字以内,用英文,隔开" name="keywords" value="<?php echo ($data["keywords"]); ?>" class="col-xs-10 "></div>
          </div>
	      <div class="form-group"><label class="col-sm-1 control-label no-padding-right" for="form-field-1"><i>*</i>网站描述： </label>
          <div class="col-sm-9"><input type="text" id="website-title" placeholder="空制在80个汉字，160个字符以内" name="content" value="<?php echo ($data["content"]); ?>" class="col-xs-10"></div>
          </div>
          <div class="form-group"><label class="col-sm-1 control-label no-padding-right" for="form-field-1"><i>*</i>网址： </label>
          <div class="col-sm-9"><input type="text" id="website-title" placeholder="请输入您的域名，以http://或者https://开头" name="url" value="<?php echo ($data["url"]); ?>" class="col-xs-10"></div>
          </div>
          <div class="form-group"><label class="col-sm-1 control-label no-padding-right" for="form-field-1"><i>*</i>手机： </label>
          <div class="col-sm-9"><input type="text" id="website-title" placeholder="请输入您的电话" name="phone" value="<?php echo ($data["phone"]); ?>" class="col-xs-10"></div>
          </div>
          <div class="form-group"><label class="col-sm-1 control-label no-padding-right" for="form-field-1"><i>*</i>电话： </label>
          <div class="col-sm-9"><input type="text" id="website-title" placeholder="请输入您的电话" name="tell" value="<?php echo ($data["tell"]); ?>" class="col-xs-10"></div>
          </div>
          <div class="form-group"><label class="col-sm-1 control-label no-padding-right" for="form-field-1"><i>*</i>传真： </label>
          <div class="col-sm-9"><input type="text" id="website-title" placeholder="请输入您的传真" name="chuanzhen" value="<?php echo ($data["chuanzhen"]); ?>" class="col-xs-10"></div>
          </div>
          <div class="form-group"><label class="col-sm-1 control-label no-padding-right" for="form-field-1"><i>*</i>QQ： </label>
          <div class="col-sm-9"><input type="text" id="website-title" placeholder="请输入您的QQ" name="qq" value="<?php echo ($data["qq"]); ?>" class="col-xs-10"></div>
          </div>
          <div class="form-group"><label class="col-sm-1 control-label no-padding-right" for="form-field-1"><i>*</i>客服QQ： </label>
          <div class="col-sm-9"><input type="text" id="website-title" placeholder="请输入您的QQ" name="kefu" value="<?php echo ($data["kefu"]); ?>" class="col-xs-10"></div>
          </div>
          <div class="form-group"><label class="col-sm-1 control-label no-padding-right" for="form-field-1"><i>*</i>邮箱： </label>
          <div class="col-sm-9"><input type="text" id="website-title" placeholder="请输入您的邮箱" name="email" value="<?php echo ($data["email"]); ?>" class="col-xs-10"></div>
          </div>
          <div class="form-group"><label class="col-sm-1 control-label no-padding-right" for="form-field-1"><i>*</i>微信： </label>
          <div class="col-sm-9"><input type="text" id="website-title" placeholder="请输入您的微信" name="wetch" value="<?php echo ($data["wetch"]); ?>" class="col-xs-10"></div>
          </div><div class="form-group"><label class="col-sm-1 control-label no-padding-right" for="form-field-1"><i>*</i>地址： </label>
          <div class="col-sm-9"><input type="text" id="website-title" placeholder="请输入您的地址" name="address" value="<?php echo ($data["address"]); ?>" class="col-xs-10"></div>
          </div><div class="form-group"><label class="col-sm-1 control-label no-padding-right" for="form-field-1"><i>*</i>产品： </label>
          <div class="col-sm-9"><input type="text" id="website-title" placeholder="空制在80个汉字，160个字符以内" name="protact" value="<?php echo ($data["protact"]); ?>" class="col-xs-10"></div>
          </div>
          <div class="form-group"><label class="col-sm-1 control-label no-padding-right" for="form-field-1"><i>*</i>底部版权信息： </label>
          <div class="col-sm-9"><input type="text" id="website-title" placeholder="" name="banquan" value="<?php echo ($data["banquan"]); ?>" class="col-xs-10 "></div>
          </div>
          <div class="form-group"><label class="col-sm-1 control-label no-padding-right" for="form-field-1"><i>*</i>备案号： </label>
          <div class="col-sm-9"><input type="text" id="website-title" placeholder="" name="beian" value="<?php echo ($data["beian"]); ?>" class="col-xs-10 "></div>
          </div>
           <div class="form-group"><label class="col-sm-1 control-label no-padding-right" for="form-field-1"><i>*</i>经度： </label>
          <div class="col-sm-9"><input type="text" id="website-title" placeholder="" name="jingdu" value="<?php echo ($data["jingdu"]); ?>" class="col-xs-10 "></div>
          </div>
           <div class="form-group"><label class="col-sm-1 control-label no-padding-right" for="form-field-1"><i>*</i>纬度： </label>
          <div class="col-sm-9"><input type="text" id="website-title" placeholder="" name="weidu" value="<?php echo ($data["weidu"]); ?>" class="col-xs-10 "></div>
          </div>
          <div class="form-group"><label class="col-sm-1 control-label no-padding-right" for="form-field-1"><i>*</i>公司简介： </label>
          <div class="col-sm-9"><textarea class="textarea" name="jianjie"><?php echo ($data["jianjie"]); ?></textarea></div>
          </div>
           <div class="form-group"><label class="col-sm-1 control-label no-padding-right" for="form-field-1"><i>*</i>统计代码： </label>
          <div class="col-sm-9"><textarea class="textarea" name="tongji"><?php echo ($data["tongji"]); ?></textarea></div>
          </div>
          <div class="Button_operation"> 
				<button onclick="submit_form();" class="btn btn-primary radius" type="submit"><i class="fa fa-save "></i>&nbsp;保存</button>
			</div>
        </div>
        <div id="profile" class="tab-pane ">
        
        </div>
        <div id="dropdown" class="tab-pane">
          </form>
		</div>
		</div>
		</div>
 </div>

</div>
</body>
</html>
<script>

  function submit_form(argument) {
    var form = document.getElementById('test_form');

    form.submit();
  }

</script>