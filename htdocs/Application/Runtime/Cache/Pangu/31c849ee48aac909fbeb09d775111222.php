<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<link href="/Public/Pangu/css/H-ui.min.css" rel="stylesheet" type="text/css" />
<link href="/Public/Pangu/css/H-ui.admin.css" rel="stylesheet" type="text/css" />
<link href="/Public/Pangu/lib/icheck/icheck.css" rel="stylesheet" type="text/css" />
<link href="/Public/Pangu/lib/Hui-iconfont/1.0.1/iconfont.css" rel="stylesheet" type="text/css" />

<link rel="stylesheet" type="text/css" href="/Public/Pangu/lib/web2/webuploader.css" />
<link rel="stylesheet" type="text/css" href="/Public/Pangu/lib/web2/style.css" />

<title>编辑</title>
</head>
<body>
<div class="pd-20">
  <form id="form2" method="post" class="form form-horizontal" id="form-article-add">

   <input type="hidden" name="type" value="<?php echo ($type); ?>"></input>

    <div class="row cl">
      <label class="form-label col-2"><span class="c-red">*</span>业务部：</label>
      <div class="formControls col-8">
       <input type="text" class="input-text" placeholder="" value="<?php echo ($list["tel_yw"]); ?>" name="tel_yw" id="tel_yw">
      </div>   
    </div>

    <div class="row cl">
      <label class="form-label col-2"><span class="c-red">*</span>策划部：</label>
      <div class="formControls col-8">
       <input type="text" class="input-text" placeholder="" value="<?php echo ($list["tel_ch"]); ?>" name="tel_ch" id="tel_ch">
      </div>   
    </div>

    <div class="row cl">
      <label class="form-label col-2"><span class="c-red">*</span>媒介部：</label>
      <div class="formControls col-8">
       <input type="text" class="input-text" placeholder="" value="<?php echo ($list["tel_mj"]); ?>" name="tel_mj" id="tel_mj">
      </div>   
    </div>

    <div class="row cl">
      <label class="form-label col-2"><span class="c-red">*</span>客服电话：</label>
      <div class="formControls col-8">
       <input type="text" class="input-text" placeholder="" value="<?php echo ($list["tel_kf"]); ?>" name="tel_kf" id="tel_kf">
      </div>   
    </div>

    <div class="row cl">
      <label class="form-label col-2"><span class="c-red">*</span>邮箱：</label>
      <div class="formControls col-8">
       <input type="text" class="input-text" placeholder="" value="<?php echo ($list["email"]); ?>" name="email" id="email">
      </div>   
    </div>

    <div class="row cl">
      <label class="form-label col-2"><span class="c-red">*</span>地址：</label>
      <div class="formControls col-8">
       <input type="text" class="input-text" placeholder="" value="<?php echo ($list["address"]); ?>" name="address" id="address">
      </div>   
    </div>

    <div class="row cl">
      <label class="form-label col-2"><span class="c-red">*</span>自驾路线：</label>
      <div class="formControls col-8">
       <input type="text" class="input-text" placeholder="" value="<?php echo ($list["road_self"]); ?>" name="road_self" id="road_self">
      </div>   
    </div>

    <div class="row cl">
      <label class="form-label col-2"><span class="c-red">*</span>公交车路线：</label>
      <div class="formControls col-8">
       <input type="text" class="input-text" placeholder="" value="<?php echo ($list["road_bus1"]); ?>" name="road_bus1" id="road_bus1">
      </div>   
    </div>

    <div class="row cl">
      <label class="form-label col-2"><span class="c-red">*</span>公交车路线：</label>
      <div class="formControls col-8">
       <input type="text" class="input-text" placeholder="" value="<?php echo ($list["road_bus2"]); ?>" name="road_bus2" id="road_bus2">
      </div>   
    </div>

</div>
 
    <div class="row cl">
      <div class="col-10 col-offset-2">
        <button id="sub_form2" class="btn btn-primary radius" type="button"><i class="Hui-iconfont">&#xe632;</i> 保存</button>
      </div>
    </div>
  </form>
</div>
<script type="text/javascript" src="/Public/Pangu/lib/jquery/1.9.1/jquery.min.js"></script> 
<script type="text/javascript" src="/Public/Pangu/lib/layer/1.9.3/layer.js"></script> 
<script type="text/javascript" src="/Public/Pangu/lib/My97DatePicker/WdatePicker.js"></script> 
<script type="text/javascript" src="/Public/Pangu/lib/icheck/jquery.icheck.min.js"></script> 
<script type="text/javascript" src="/Public/Pangu/lib/Validform/5.3.2/Validform.min.js"></script> 
<script type="text/javascript" src="/Public/Pangu/js/H-ui.js"></script> 
<script type="text/javascript" src="/Public/Pangu/js/H-ui.admin.js"></script> 

  <script type="text/javascript">
      $(function(){
        $('#sub_form2').click(function(){
          var data=$("#form2").serialize();
          var id="1";
          $.post("<?php echo U('Index/do_edit');?>?table=contact_info&id="+id,data,function(data){
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
  $('.skin-minimal input').iCheck({
    checkboxClass: 'icheckbox-blue',
    radioClass: 'iradio-blue',
    increaseArea: '20%'
  });
});
</script>


</body>
</html>