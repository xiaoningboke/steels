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
<div class="Columns_style margin">
  <table class="table table-striped table-bordered table-hover" id="sample-table">
       <thead>
		 <tr>
            <th width="">文件名称</th>
            <th width="150px">添加时间</th>
            <th width="100px">是否置顶</th>             
            <th width="250px">操作</th>
			</tr>
		</thead>
        <tbody>
          <?php if(is_array($data)): foreach($data as $key=>$vo): ?><tr>
             <td class="displayPart" displayLength="80"><?php echo ($vo["filename"]); ?></td>
             <td><?php echo ($vo["time"]); ?></td>
              <td class="td-status"><span>
                <?php if($vo["setup"] == 0 ): ?><button class="label label-success radius" onclick="setup(1,<?php echo ($vo["id"]); ?>)">不置顶</button>
                  <?php else: ?> <button class="label label-success radius" onclick="setup(0,<?php echo ($vo["id"]); ?>)" >置顶</button><?php endif; ?>
              </span></td>
               <td class="td-manage">
                <a title="删除" href="<?php echo U('Admin/Index/delfile',array(id=>$vo[id]));?>"   class="btn btn-xs btn-warning" ><i class="fa fa-trash  bigger-120"></i></a>
               </td>
              </tr><?php endforeach; endif; ?>
        </tbody>
        </table>

</div>
</body>
</html>
<script>
  function setup(i,id){
    var data = {
      "id":id,
      "setup":i
    }
    console.log(data)
    $.ajax({
        url:"<?php echo U('Admin/Index/filesetup');?>",//请求地址
        data:data,//发送的数据
        type:'POST',//请求的方式
        success:function (argument) {
          if(argument>0){
            window.location.reload();
            alert("更新成功");
          }
        },// 请求成功执行的方法
        beforeSend:function (argument) {},// 在发送请求之前调用,可以做一些验证之类的处理
        error:function (argument) {console.log(argument);},//请求失败调用
    })
  }
$(function() {
		var oTable1 = $('#sample-table').dataTable( {
		"aaSorting": [],//默认第几个排序
		"bStateSave": false,//状态保存
		//"dom": 't',
		"bFilter":false,
		"aoColumnDefs": [
		  //{"bVisible": false, "aTargets": [ 3 ]} //控制列的隐藏显示
		  {"orderable":false,"aTargets":[0,1,2,3,4,5,6,7]}// 制定列不参与排序
		] } );
				$('table th input:checkbox').on('click' , function(){
					var that = this;
					$(this).closest('table').find('tr > td:first-child input:checkbox')
					.each(function(){
						this.checked = that.checked;
						$(this).closest('tr').toggleClass('selected');
					});
						
				});
})
/*删除*/
function member_del(obj,id){
	layer.confirm('确认要删除吗？',{icon:0,},function(index){
		$(obj).parents("tr").remove();
		layer.msg('已删除!',{icon:1,time:1000});
	});
}
</script>