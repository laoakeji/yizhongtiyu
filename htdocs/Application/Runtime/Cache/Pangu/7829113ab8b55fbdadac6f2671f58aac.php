<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<LINK rel="Bookmark" href="/favicon.ico" >
<LINK rel="Shortcut Icon" href="/favicon.ico" />
<!--[if lt IE 9]>
<script type="text/javascript" src="lib/html5.js"></script>
<script type="text/javascript" src="lib/respond.min.js"></script>
<script type="text/javascript" src="lib/PIE_IE678.js"></script>
<![endif]-->
<link href="/Public/Pangu/css/H-ui.min.css" rel="stylesheet" type="text/css" />
<link href="/Public/Pangu/css/H-ui.admin.css" rel="stylesheet" type="text/css" />
<link href="/Public/Pangu/skin/default/skin.css" rel="stylesheet" type="text/css" id="skin" />
<link href="/Public/Pangu/lib/Hui-iconfont/1.0.1/iconfont.css" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="/Public/Pangu/lib/jquery/1.9.1/jquery.min.js"></script> 
<!--[if IE 6]>
<script type="text/javascript" src="http://lib.h-ui.net/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->
<!--[if IE 6]>
<script type="text/javascript" src="http://lib.h-ui.net/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->
<title><?php echo ($title); ?>列表</title>
</head>
<body>
<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> <?php echo ($title); ?>列表 <span class="c-gray en">&gt;</span> <?php echo ($title); ?>列表 <a class="btn btn-success radius r mr-20" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
<div class="pd-20">


<form id="form2" method="post" class="form form-horizontal" id="form-article-add">

    <div class="row cl">
      <label class="form-label col-2"><span class="c-red">*</span>类型1：</label>
      <div class="formControls col-6">
       <input type="text" class="input-text" placeholder="" value="<?php echo ($typelist["w1"]); ?>" name="w1" id="w1">
      </div>
    </div>
    
    <div class="row cl">
      <label class="form-label col-2"><span class="c-red">*</span>类型2：</label>
      <div class="formControls col-6">
       <input type="text" class="input-text" placeholder="" value="<?php echo ($typelist["w2"]); ?>" name="w2" id="w2">
      </div>   
    </div>
    
    <div class="row cl">
      <label class="form-label col-2"><span class="c-red">*</span>类型3：</label>
      <div class="formControls col-6">
       <input type="text" class="input-text" placeholder="" value="<?php echo ($typelist["w3"]); ?>" name="w3" id="w3">
      </div>   
    </div>
    
    <div class="row cl">
      <label class="form-label col-2"><span class="c-red">*</span>类型4：</label>
      <div class="formControls col-6">
       <input type="text" class="input-text" placeholder="" value="<?php echo ($typelist["w4"]); ?>" name="w4" id="w4">
      </div>   
    </div>

    <div class="row cl">
      <label class="form-label col-2"><span class="c-red">*</span>类型5：</label>
      <div class="formControls col-6">
       <input type="text" class="input-text" placeholder="" value="<?php echo ($typelist["w5"]); ?>" name="w5" id="w5">
      </div>   
    </div>

    <div class="row cl">
      <div class="col-10 col-offset-2">
        <button id="sub_form2" class="btn btn-primary radius" type="button"><i class="Hui-iconfont">&#xe632;</i> 保存</button>
    </div>
  </div>
  </form>






<div class="cl pd-5 bg-1 bk-gray mt-20"> 
  <span class="l"><a href="javascript:;" id="" class="btn btn-danger radius del_all"><i class="Hui-iconfont">&#xe6e2;</i> 批量删除</a>
  <a class="btn btn-primary radius" onclick="admin_add('添加','<?php echo U('Pangu/Index/edit');?>?table=wubai&type=<?php echo ($type); ?>','600','400')" href="javascript:;"><i class="Hui-iconfont">&#xe600;</i> 添加</a>
   </span> 
</div>

	<div class="mt-20">
		<table class="table table-border table-bordered table-bg table-hover table-sort">
			<thead>
				<tr class="text-c">
					
					<th width="25"><input type="checkbox" name="" value=""></th>
				
					<th width="80">ID</th>
 					<th width="80">图片</th>
 					<th width="80">类型ID</th>
 					<th width="80">显示顺序</th>
					<th width="120">操作</th>
				</tr>
			</thead>
			<tbody>
				<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr class="text-c">
					<td class="hidden-xs" aid="<?php echo ($vo["id"]); ?>"><input type="checkbox" value="<?php echo ($vo["id"]); ?>" aid="<?php echo ($vo["id"]); ?>" name=""></td>
					<td><?php echo ($vo["id"]); ?></td>
					<td><img src="<?php echo ($vo["image"]); ?>" style="width:120px;height: 60px"></td>
					<td><?php echo ($vo["typeid"]); ?></td>
					<td><?php echo ($vo["sort"]); ?></td>
					<td class="f-14 td-manage">
						<a style="text-decoration:none" class="ml-5" onClick="admin_edit('编辑','<?php echo U('Index/edit');?>?table=wubai&type=<?php echo ($type); ?>&id=<?php echo ($vo["id"]); ?>','800','500')" href="javascript:;" title="编辑"><i class="Hui-iconfont">&#xe6df;</i></a>
					</td>
				</tr><?php endforeach; endif; else: echo "" ;endif; ?>
			</tbody>
		</table>
		<?php echo ($page); ?>
	</div>
</div>
<script type="text/javascript" src="/Public/Pangu/lib/jquery/1.9.1/jquery.min.js"></script> 
<script type="text/javascript" src="/Public/Pangu/lib/layer/1.9.3/layer.js"></script> 
<script type="text/javascript" src="/Public/Pangu/lib/My97DatePicker/WdatePicker.js"></script> 
<script type="text/javascript" src="/Public/Pangu/lib/datatables/1.10.0/jquery.dataTables.min.js"></script> 
<script type="text/javascript" src="/Public/Pangu/js/H-ui.js"></script> 
<script type="text/javascript" src="/Public/Pangu/js/H-ui.admin.js"></script>
<script type="text/javascript">
// $('.table-sort').dataTable({
// 	"aaSorting": [[ 1, "desc" ]],//默认第几个排序
// 	"bStateSave": true,//状态保存
// 	"aoColumnDefs": [
// 	  //{"bVisible": false, "aTargets": [ 3 ]} //控制列的隐藏显示
// 	  {"orderable":false,"aTargets":[0,8]}// 制定列不参与排序
// 	]
// });
function admin_add(title,url,w,h){
	layer_show(title,url,w,h);
}
function admin_edit(title,url,w,h){
	layer_show(title,url,w,h);
}
</script> 


<script type="text/javascript" src="/Public/Pangu/js/H-ui.js"></script> 
<script type="text/javascript" src="/Public/Pangu/js/H-ui.admin.js"></script> 

  <script type="text/javascript">
      $(function(){
        $('#sub_form2').click(function(){
          var data=$("#form2").serialize();
          var id="<?php echo ($typelist["id"]); ?>";
          $.post("<?php echo U('Index/do_edit');?>?table=index&id="+id,data,function(data){
            if (data>=1) {
              //layer.msg("修改成功");
              alert("修改成功");
              parent.location.reload();
          }else{
            //alert('失败'+data);
            alert('失败'+data);
          };
          })
        })

      })
    </script>


<script type="text/javascript">
$(function(){
  $(".del_all").click(function(){
      var ids="";
      
      $(".hidden-xs").each(function(){
          var p=$(this);
          if (p.children().is(":checked")) {
            ids+=p.attr('aid')+',';
          }
      })

          if (ids=="") {alert("您什么都没有选择呢");return false};
          var r=confirm("确认删除吗");
          if (r==true){
          }else{
            return false;
          }           
          $.get("<?php echo U('Index/do_del_all');?>?table=img&ids="+ids,function(data,s){
           
            if (data>0) {alert("删除成功");location.reload()}else{
              alert("失败");alert(data);
            }
          })

     
  })


  $(".w_del").click(function(){
    var r=confirm("确认删除吗");
    if (r==true){
    }else{
      return false;
    } 
    var p=$(this);
    var id=$(this).attr("aid");
    $.post("<?php echo U('Index/do_del');?>",{id:id,table:"img"},function(data){
      if (data==1) {
      alert("删除成功")     
      p.parent().parent().remove();return false;
      };
    });
  })

})

</script>





</body>
</html>