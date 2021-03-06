<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>

	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="/Public/Home/css/index.css">
		<link rel="stylesheet" type="text/css" href="/Public/Home/css/style.css">
		<script src="/Public/Home/scripts/jquery-2.0.3.min.js"></script>
		<script src="/Public/Home/scripts/myjs.js"></script>
		<title>河南亿众体育</title>
	</head>

	<body>
		<div class="header">
			<div class="logo">
				<a href="index.html"><img src="/Public/Home/images/logo.png" alt="LOGO"></a>
			</div>
			<div class="header_right">每一天 一起动<span><?php echo ($ind["tel1"]); ?><br/><?php echo ($ind["tel2"]); ?></span></div>
		</div>
		<div class="nav_out">
			<div class="nav">
				<ul>
					<li><a href="index.html">首页</a></li>
					<li><a href="<?php echo U('Home/Index/intro_intro');?>?type=1">关于亿众</a></li>
					<li><a href="<?php echo U('Home/Index/pro_detail');?>">产品中心</a>
						<div class="slide">
							<dl>
								<?php if(is_array($protitle)): $i = 0; $__LIST__ = $protitle;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><dd>                                                     
										<a href="<?php echo U('Home/Index/product');?>?type=<?php echo ($vo["id"]); ?>">
											<h2><?php echo ($vo["title"]); ?></h2>
											<div class="images"><img src="<?php echo ($vo["image"]); ?>" style="width:160px;height: 80px" alt="图片"></div>
										</a>              
									</dd><?php endforeach; endif; else: echo "" ;endif; ?>
							</dl>
						</div>
					</li>
					<li><a href="<?php echo U('Home/Index/news');?>">行业动态</a></li>
					<li><a href="<?php echo U('Home/Index/cases');?>?typeid=0">经典案例</a></li>
					<li class="this"><a href="<?php echo U('Home/Index/contact');?>">联系我们</a></li>
				</ul>
			</div>
		</div>
		<script>
			$(function() {
				var nav = $(".nav").find("li");
				for (var i = 0; i < nav.length; i++) {
					var n = nav.eq(i).children(".slide").length;
					if (n == 1) {
						nav.eq(i).bind({
							"mouseover": jr,
							"mouseout": lk
						})
					}
				}

				function jr() {
					$(this).children(".slide").stop(true).slideDown();
				}

				function lk() {
					$(this).children(".slide").slideUp("fast");
				}
			})
		</script>

		<img class="banner" src="/Public/Home/images/banner_5.jpg">
		<div class="lianxi">
			<img src="/Public/Home/images/lianxiwomen.jpg">
		</div>

		<div class="kuang">
			<div class="xiaokuang">
				<ul>
					<li>业务部：<?php echo ($list["tel_yw"]); ?></li>
					<li>策划部：<?php echo ($list["tel_ch"]); ?></li>
					<li>媒介部：<?php echo ($list["tel_mj"]); ?></li>
				</ul>
				<ul>
					<li class="guding">客服电话：<?php echo ($list["tel_kf"]); ?></li>
					<li class="youjian">邮箱：<?php echo ($list["email"]); ?></li>
					<li class="dizhi">地址：<?php echo ($list["address"]); ?></li>
				</ul>
				<ul>
					<li class="chuzu">自驾路线:<?php echo ($list["road_self"]); ?></li>
					<li class="gongjia">公交车路线:<?php echo ($list["road_bus1"]); ?></li><!-- <?php echo ($list["road_bus1"]); ?> -->
					<li class="gongjia">公交车路线:<?php echo ($list["road_bus2"]); ?></li>
				</ul>
			</div>

		</div>

		<!--地图开始-->
		<!--百度地图容器-->
		<div style="width:1100px;height:400px;border:#ccc solid 1px; margin-left:auto; margin-right:auto;" id="dituContent"></div>

		<!--引用百度地图API-->
		<style type="text/css">
			html,
			body {
				margin: 0;
				padding: 0;
			}
			
			.iw_poi_title {
				color: #CC5522;
				font-size: 14px;
				font-weight: bold;
				overflow: hidden;
				padding-right: 13px;
				white-space: nowrap
			}
			
			.iw_poi_content {
				font: 12px arial, sans-serif;
				overflow: visible;
				padding-top: 4px;
				white-space: -moz-pre-wrap;
				word-wrap: break-word
			}
		</style>
		<script type="text/javascript" src="http://api.map.baidu.com/api?key=&v=1.1&services=true"></script>
		</head>

		<body>
		</body>
		<script type="text/javascript">
			//创建和初始化地图函数：
			function initMap() {
				createMap(); //创建地图
				setMapEvent(); //设置地图事件
				addMapControl(); //向地图添加控件
			}

			//创建地图函数：
			function createMap() {
				var map = new BMap.Map("dituContent"); //在百度地图容器中创建一个地图
				var point = new BMap.Point(113.724842, 34.779885); //定义一个中心点坐标
				var marker = new BMap.Marker(point);        // 创建标注  
　　 			map.addOverlay(marker);                     // 将标注添加到地图中
				map.centerAndZoom(point, 17); //设定地图的中心点和坐标并将地图显示在地图容器中
				window.map = map; //将map变量存储在全局
			}

			//地图事件设置函数：
			function setMapEvent() {
				map.enableDragging(); //启用地图拖拽事件，默认启用(可不写)
				map.enableScrollWheelZoom(); //启用地图滚轮放大缩小
				map.enableDoubleClickZoom(); //启用鼠标双击放大，默认启用(可不写)
				map.enableKeyboard(); //启用键盘上下左右键移动地图
			}

			//地图控件添加函数：
			function addMapControl() {
				//向地图中添加缩放控件
				var ctrl_nav = new BMap.NavigationControl({
					anchor: BMAP_ANCHOR_TOP_LEFT,
					type: BMAP_NAVIGATION_CONTROL_LARGE
				});
				map.addControl(ctrl_nav);
				//向地图中添加缩略图控件
				var ctrl_ove = new BMap.OverviewMapControl({
					anchor: BMAP_ANCHOR_BOTTOM_RIGHT,
					isOpen: 1
				});
				map.addControl(ctrl_ove);
				//向地图中添加比例尺控件
				var ctrl_sca = new BMap.ScaleControl({
					anchor: BMAP_ANCHOR_BOTTOM_LEFT
				});
				map.addControl(ctrl_sca);
			}
			initMap(); //创建和初始化地图
		</script>

</html>

<!--地图结束-->
<div class="tijiao">
	<h1>向我们提交您的需求</h1>
	<form id="form2" method="post" class="form form-horizontal" id="form-article-add">
	<div class="xiangxi">
		<h2>您的详细信息</h2>
		<div class="sousuo" style="margin-top:10px;">
			<input type="text" name="name" id="name" value="您的姓名" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = '您的姓名';}">
		</div>
		<div class="sousuo">
			<input type="text" name="tel" id="tel" value="联系电话" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = '联系电话';}">
		</div>
		<div class="sousuo">
			<input type="text" name="email" id="email" value="电子邮箱" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = '电子邮箱';}">
		</div>
	</div>
	<div class="xiangxi">
		<h3>您的公司信息</h3>
		<div class="sousuo" style="margin-top:14px;">
			<input type="text" name="gsname" id="gsname" value="公司名称" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = '公司名称';}">
		</div>
		<div class="sousuo">
			<input type="text" name="gsad" id="gsad" value="公司地址" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = '公司地址';}">
		</div>
		<div class="sousuo">
			<input type="text" name="city" id="city" value="所在城市" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = '所在城市';}">
		</div>
	</div>
	<div class="xiangxi">
		<h2>您的详细需求</h2>
		<div class="sousuo1">
			<textarea name="desc" id="desc"  style=" height:162px; width:550px; margin-top:10px; " placeholder="请输入您的详细需求" onBlur="if(this.value.length>500){alert('字数太多')}"></textarea>
		</div>
	</div>
	</form>
</div>

<div class="shangchuan">
	<span style="DISPLAY:none">
		<center><button  id="sub_form" width="100" type="hidden">保存</button></center>
	</span>
	<a id="sub_form2" href=""><img src="/Public/Home/images/tijiaoxq.jpg"></a>
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

          var name = $("#name").val();
          var desc = $("#desc").val();

          if(name == '您的姓名'){
          	alert("请输入你的姓名");
          	return;
          }

          if(desc == '请输入您的详细需求'){
          	alert("请输入您的详细需求");
          	return;
          }

          var id="<?php echo ($id); ?>";
          alert(name);
          $.post("<?php echo U('Index/do_contact');?>",data,function(data){
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

<!--脚注开始-->
<div class="clear"> </div>
<div class="width1 bottom_top">
	<a><img onClick="window.scroll(0,0)" src="/Public/Home/picture/btop.png"></a>
</div>
<div class="bottom_bg width2">
	<ul class="bottom_link">
		<li><span>友情链接：</span></li>
		<li><a href="http://ktwlkj.com//" target="_blank">河南开天网络科技有限公司</a> </li>
	</ul>
	<p class="clear"> </p>
	<div class="bottom_nav">
		<ul class="left">
					<?php if(is_array($listtlist)): $i = 0; $__LIST__ = $listtlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$tvo): $mod = ($i % 2 );++$i;?><li>
							<span>
								<a href="<?php echo U('Home/Index/product');?>?type=<?php echo ($tvo["id"]); ?>">【<?php echo ($tvo["title"]); ?>】</a>
							</span>
							<?php if(is_array($listlist)): $i = 0; $__LIST__ = $listlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if(($vo["typeid"]) == $tvo["id"]): ?><a href="<?php echo U('Home/Index/product');?>?type=<?php echo ($tvo["id"]); ?>"><?php echo ($vo["name"]); ?></a><?php endif; endforeach; endif; else: echo "" ;endif; ?>
						</li><?php endforeach; endif; else: echo "" ;endif; ?>
				</ul>
		<div class="bottom_code left"><img src="/Public/Home/picture/qcode.jpg"><span>扫描网站二维码</span></div>
		<p class="clear"> </p>
	</div>
	<div class="bottom_con"> 
				<a href="http://www.sports-yizhong.com/index.php/Home/Index/intro_intro.html?type=1" class="menu2">关于我们</a> | <a href="http://www.sports-yizhong.com/index.php/Home/Index/intro_story.html" class="menu2">品牌故事</a> | <a href="http://www.sports-yizhong.com/index.php/Home/Index/contact.html" class="menu2">联系我们</a><br> 全国服务热线：<?php echo ($copylist["tel"]); ?> &nbsp; &nbsp; 地址:<?php echo ($copylist["address"]); ?><br> 版权所有 ©<?php echo ($copylist["copy"]); ?>
				&nbsp; &nbsp; 技术支持：<a href="<?php echo ($copylist["url"]); ?>" target="_blank" class="menu2"><?php echo ($copylist["tech"]); ?></a> 
			</div>
</div>
<!--脚注结束-->
</body>

</html>