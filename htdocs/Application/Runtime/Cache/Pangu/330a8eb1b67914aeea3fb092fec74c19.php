<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<!--[if lt IE 9]>
<script type="text/javascript" src="lib/html5.js"></script>
<script type="text/javascript" src="lib/respond.min.js"></script>
<script type="text/javascript" src="lib/PIE_IE678.js"></script>
<![endif]-->
<link href="/Public/Pangu/css/H-ui.min.css" rel="stylesheet" type="text/css" />
<link href="/Public/Pangu/css/H-ui.admin.css" rel="stylesheet" type="text/css" />
<link href="/Public/Pangu/lib/icheck/icheck.css" rel="stylesheet" type="text/css" />
<link href="/Public/Pangu/lib/Hui-iconfont/1.0.1/iconfont.css" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" type="text/css" href="/Public/Pangu/lib/web2/webuploader.css" />
    <link rel="stylesheet" type="text/css" href="/Public/Pangu/lib/web2/style.css" />
<!--[if IE 6]>
<script type="text/javascript" src="lib/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->
<title>编辑</title>
<style type="text/css">  
.comments {  
 width:100%;/*自动适应父布局宽度*/  
 overflow:auto;  
 word-break:break-all;  
}  
</style>
</head>
<body>
<div class="pd-20">
	<form id="form2" method="post" class="form form-horizontal" id="form-article-add">

    <div class="row cl">
      <label class="form-label col-2"><span class="c-red">*</span>您的姓名：</label>
      <div class="formControls col-6">
       <input type="text" class="input-text" placeholder="" value="<?php echo ($list["name"]); ?>" name="name" id="name">
      </div>
    </div>
    
    <div class="row cl">
      <label class="form-label col-2"><span class="c-red">*</span>联系电话：</label>
      <div class="formControls col-6">
       <input type="text" class="input-text" placeholder="" value="<?php echo ($list["tel"]); ?>" name="tel" id="tel">
      </div>   
    </div>
    
    <div class="row cl">
      <label class="form-label col-2"><span class="c-red">*</span>电子邮件：</label>
      <div class="formControls col-6">
       <input type="text" class="input-text" placeholder="" value="<?php echo ($list["email"]); ?>" name="email" id="email">
      </div>   
    </div>
    
    <div class="row cl">
      <label class="form-label col-2"><span class="c-red">*</span>公司名称：</label>
      <div class="formControls col-6">
       <input type="text" class="input-text" placeholder="" value="<?php echo ($list["gsname"]); ?>" name="gsname" id="gsname">
      </div>   
    </div>

    <div class="row cl">
      <label class="form-label col-2"><span class="c-red">*</span>公司地址：</label>
      <div class="formControls col-6">
       <input type="text" class="input-text" placeholder="" value="<?php echo ($list["gsad"]); ?>" name="gsad" id="gsad">
      </div>   
    </div>
    
    <div class="row cl">
      <label class="form-label col-2"><span class="c-red">*</span>所在城市：</label>
      <div class="formControls col-6">
       <input type="text" class="input-text" placeholder="" value="<?php echo ($list["city"]); ?>" name="city" id="city">
      </div>   
    </div>

    <div class="row cl">
      <label class="form-label col-2"><span class="c-red">*</span>需求：</label>
      <div class="formControls col-6">
       <!-- <input type="text" class="input-text" placeholder="" value="<?php echo ($list["desc"]); ?>" name="desc" id="desc"> -->
        <textarea class="comments" rows="10" cols="10"  type="text" class="input-text" placeholder="" name="desc" id="desc"><?php echo ($list["desc"]); ?></textarea>
      </div>
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
	$('.skin-minimal input').iCheck({
		checkboxClass: 'icheckbox-blue',
		radioClass: 'iradio-blue',
		increaseArea: '20%'
	});
});
</script>



<script type="text/javascript" src="/Public/uploadify/jquery.uploadify.min.js"></script>
<script type="text/javascript">
$(function(){



$('#file_upload3').uploadify({
         'buttonText':'上传',
        'queueID'  : 'some_file_queue',//取消上传进度显示
        'swf'      : "/Public/uploadify/uploadify.swf",
        'uploader' : "<?php echo U('Home/Other/upload');?>",
        'onFallback':function(){
            alert("您未安装FLASH控件，无法上传图片！请安装FLASH控件后再试。");
        },
        "onUploadSuccess":function(file, data, response){
            if (data!=-1) {
              var s=$('#img_url3').val();
              s=s+',' +data;
              str='<img style="hight:64px;width:64px;float:left" src="'+data+'">';
              $("#spp3").append(str);
              $('#img_url3').val(s);           
            }else{
              alert('上传失败，请重新上传');
            }
        }
        // Put your options here
    });



})

</script>

<script type="text/javascript" charset="utf-8" src="/Public/ueditor/ueditor.config.js"></script>
<script type="text/javascript" charset="utf-8" src="/Public/ueditor/ueditor.all.min.js"> </script>
<script type="text/javascript" charset="utf-8" src="/Public/ueditor/lang/zh-cn/zh-cn.js"></script>




<script type="text/javascript">
  $(function(){
  var ue2 = UE.getEditor('remark2');
  var ue3 = UE.getEditor('remark3');

    ue2.ready(function() {
     var w_t=$('#w_re2').val();
    
     ue2.setContent(w_t);
   });
  ue3.ready(function() {
     var w_t=$('#w_re3').val();
    
     ue3.setContent(w_t);
   });
  })
</script>
</body>
</html>