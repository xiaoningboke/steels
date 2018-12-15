<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta http-equiv="Cache-Control" content="no-siteapp" />
		<link href="/Public/assets/css/bootstrap.min.css" rel="stylesheet" />
        <link rel="stylesheet" href="/Public/css/style.css"/>       
        <link href="/Public/assets/css/codemirror.css" rel="stylesheet">
        <link rel="stylesheet" href="/Public/assets/css/ace.min.css" />
        <link rel="stylesheet" href="/Public/assets/css/font-awesome.min.css" />
<link rel="stylesheet" href="/Public/font/css/font-awesome.min.css" />
        
        	<!--[if IE 7]>
		  <link rel="stylesheet" href="assets/css/font-awesome-ie7.min.css" />
		<![endif]-->
        <!--[if lte IE 8]>
		  <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
		<![endif]-->
		<script src="/Public/js/jquery-1.9.1.min.js"></script>
        <script src="/Public/assets/js/bootstrap.min.js"></script>
		<script src="/Public/assets/js/typeahead-bs2.min.js"></script>           	
        <script src="/Public/assets/layer/layer.js" type="text/javascript" ></script>          
        <script src="/Public/assets/js/jquery-ui-1.10.3.custom.min.js"></script>
		<script src="/Public/assets/js/jquery.ui.touch-punch.min.js"></script>
        <script src="/Public/assets/js/ace-elements.min.js"></script>
		<script src="/Public/assets/js/ace.min.js"></script>
<title>系统设置</title>

</head>

</head>

<body>
<div class="margin clearfix">
 <div class="article_style">
    <div class="add_content" id="form-article-add">
     <ul>
      <li class="clearfix Mandatory">
      <label class="label_name"><i>*</i>标题</label><span class="formControls col-10"><input name="title" value="<?php echo ($data[0][title]); ?>" type="text" id="form-field-1" class="col-xs-10 col-sm-5 "></span>
      </li>
      <li class="clearfix"><label class="label_name">内容</label>
      <span class="formControls col-10"><script id="editor" type="text/plain" style="width:100%;height:400px; margin-left:10px;"><?php echo ($data[0][content]); ?></script> </span>
      </li>
     </ul>
    <div class="Button_operation">
				<button onclick="article_save_submit();" class="btn btn-primary radius" type="submit">保存并提交</button>
				<button onclick="layer_close();" class="btn btn-default radius" type="button">&nbsp;&nbsp;取消&nbsp;&nbsp;</button>
			</div>
    </div>
 <div class="tabbable">
    <div class="tab-content">
      <div id="home" class="tab-pane active">
        <div class="form-group" style="text-align: center;"><label class="col-sm-1 control-label no-padding-right" for="form-field-1"><i>*</i>图片： </label>
          <form action="<?php echo U('Admin/Index/uppictures');?>" enctype="multipart/form-data"  method="post">
          <div class="col-sm-9">
            <input type="file" id="id-input-file-2" name="picname" />
            <input type="hidden" name = "id" value="<?php echo ($data[0][id]); ?>">
            <input type="hidden" name="fenlei" value="2">
          </div>
           <input type="submit" class="btn btn-default radius" value="替换" />
          </form>
          <img src="/Public/Uploads/<?php echo ($data[0][photouri]); ?>" alt="" width="700px">
        </div>
        </div>
      </div>
    </div>
<div class="tabbable">
    <div class="tab-content">
      <div id="home" class="tab-pane active">
        <div class="form-group"><label class="col-sm-1 control-label no-padding-right" for="form-field-1"><i>*</i>图片： </label>
          <form action="<?php echo U('Admin/Index/uppicture');?>" enctype="multipart/form-data"  method="post">
          <div class="col-sm-9">
            <input type="file" id="id-input-file-2" name="picname" />
            <input type="hidden" name="fenlei" value="6">
          </div>
           <input type="submit" class="btn btn-default radius" value="上传" />
          </form>
        </div>
        </div>
      </div>
    </div>
</div>

     <div class="table_menu_list">
       <table class="table table-striped table-bordered table-hover" id="sample-table">
    <thead>
     <tr>
        <th width="100">序号</th>
        <th width="100">图片</th>               
        <th width="100">操作</th>
      </tr>
    </thead>
  <tbody>
    <?php if(is_array($picdata)): foreach($picdata as $k=>$vo): ?><tr>
            <td><?php echo ($k+1); ?></td>
            <td> 
              <img src="/Public/Uploads/<?php echo ($vo["picname"]); ?>" alt="" width="200px;">
            </td>
            <td class="td-manage">
            <a title="删除" href="<?php echo U('Admin/Index/delpicture',array('id'=>$vo[id]));?>"  class="btn btn-xs btn-warning" ><i class="icon-trash  bigger-120"></i></a>
            </td>
      </tr><?php endforeach; endif; ?>



      </tbody>
  </table>
   </div>




 </div>
</div>
</body>
</html>
<script type="text/javascript" src="/Public/Widget/ueditor/1.4.3/ueditor.config.js"></script>
<script type="text/javascript" src="/Public/Widget/ueditor/1.4.3/ueditor.all.min.js"> </script>
<script type="text/javascript" src="/Public/Widget/ueditor/1.4.3/lang/zh-cn/zh-cn.js"></script> 



<script>

  function member_del(obj,id){
  layer.confirm('确认要删除吗？',function(index){
    $(obj).parents("tr").remove();
    layer.msg('已删除!',{icon:1,time:1000});
  });
}
$('#id-input-file-2').ace_file_input({
          no_file:'选择上传图标 ...',
          btn_choose:'选择',
          btn_change:'更改',
          droppable:true,
          onchange:null,
          thumbnail:false, //| true | large
          whitelist:'gif|png|jpg|jpeg'

        });
</script>
<script type="text/javascript">
/**提交操作**/
function article_save_submit(){
	   var num=0;
		 var str="";
     $(".Mandatory input[type$='text']").each(function(n){
          if($(this).val()=="")
          {
               
			   layer.alert(str+=""+$(this).attr("name")+"不能为空！\r\n",{
                title: '提示框',				
				icon:0,								
          }); 
		    num++;
            return false;            
          }else{
            var data = {
              "id" : <?php echo ($data[0][id]); ?>,
              "title" : $(this).val(),
              "classification" : "10",
              "content" : UE.getEditor('editor').getContent()
            }
              $.ajax({
                url:"<?php echo U('Admin/Index/exitjianjie');?>",//请求地址
                data:data,//发送的数据
                type:'POST',//请求的方式
                success:function (argument) {
                  if(argument==0){  return false;}    
                    else{
                  layer.alert('修改成功！',{
                         title: '提示框',        
                icon:1,   
                  });
                   layer.close(index);  
                } 
                },// 请求成功执行的方法
                error:function (argument) {
                 if(argument>0){  return false;}    
                    else{
                  layer.alert('修改失败！',{
                         title: '提示框',        
                icon:1,   
                  });
                   layer.close(index);  
                } 
                },//请求失败调用
            })
          } 
		 });
		  	  		     					
	}
$(function(){
	var ue = UE.getEditor('editor');
});

function tijiao($data){

}





/*radio激发事件*/
function Enable(){ $('.date_Select').css('display','block');}
function closes(){$('.date_Select').css('display','none')}
laydate(start);
laydate(end);
</script>
<script type="text/javascript" charset="utf-8">  
   window.UEDITOR_HOME_URL = "/Public/Ueditor/";  
    $(document).ready(function () {  
      UE.getEditor('info', {  
      initialFrameHeight: 500,  
      initialFrameWidth: 1100,  
      serverUrl: "<?php echo U(MODULE_NAME.'/Index/save_info');?>"  
    });  
  });    
</script>