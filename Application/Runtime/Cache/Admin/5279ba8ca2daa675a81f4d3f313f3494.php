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
    <div class="add_content" id="form-article-add">
     <ul>
      <form action="<?php echo U('Admin/Index/upfile');?>" enctype="multipart/form-data"  method="post">
      <li class="clearfix Mandatory">
      <label class="label_name"><i>*</i>文件名称</label><span class="formControls col-10">
        <input type="text" id="form-field-1" class="col-xs-10 col-sm-5 " name="filename">
      </span>
      </li>
      <li class="clearfix Mandatory"><label class="label_name"><i>*</i>发布时间</label>
      <span class="formControls col-xs-10 col-sm-5 ">    
        <input type="text" id="start" class="form-control laydate-icon" name="time" /> 
      </span>
      </li>
      <li class="clearfix"><label class="label_name">是否置顶</label>
        <span class="formControls col-10">
        <span class="add_date l_f">
         <label><input  type="radio" class="ace" name="settop" value="1" ><span class="lbl">置顶</span></label>&nbsp;
         <label><input  type="radio" class="ace" name="settop" value="0" ><span class="lbl">不置顶</span></label></span>
       </span>
      </li>
      <li class="clearfix"><label class="label_name">文件</label>
        <span class="formControls col-10">
        <span class="add_date l_f">
         <label><input type="file" id="id-input-file-2" name="picname" /></label>
       </span>
      </li>
    </span>
     </ul>
    <div class="Button_operation">
				<button onclick="article_save_submit();" class="btn btn-primary radius" type="submit">保存并提交</button>
			</div>
    </div>
 </div>
</div>
</body>
</html> 
<script type="text/javascript" src="/steel/Public/assets/laydate/laydate.js"></script>
<script type="text/javascript">

$(function(){
	var content = UE.getEditor('editor');
});

/**日期选择**/
var start = {
    elem: '#start',
    format: 'YYYY/MM/DD',
    //min: laydate.now(), //设定最小日期为当前日期
    max: '2099-06-16', //最大日期
    istime: false,
    istoday: false,
    choose: function(datas){
         end.min = datas; //开始日选好后，重置结束日的最小日期
         end.start = datas //将结束日的初始值设定为开始日
    }
};
var end = {
    elem: '#end',
    format: 'YYYY/MM/DD',
    min: laydate.now(),
    max: '2099-06-16 ',
    istime: true,
    istoday: false,
    choose: function(datas){
        start.max = datas; //结束日选好后，重置开始日的最大日期
    }
};
laydate(start);
laydate(end);
</script>