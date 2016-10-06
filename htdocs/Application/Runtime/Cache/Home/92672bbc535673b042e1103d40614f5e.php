<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>

	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="/Public/Home/css/index.css">
		<link rel="stylesheet" type="text/css" href="/Public/Home/css/style.css">
		<script src="scripts/jquery-2.0.3.min.js"></script>
		<script src="scripts/myjs.js"></script>
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
					<li ><a href="index.html">首页</a></li>
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
					<li class="this"><a href="<?php echo U('Home/Index/cases');?>?typeid=0">经典案例</a></li>
					<li><a href="<?php echo U('Home/Index/contact');?>">联系我们</a></li>
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

		<img class="banner" src="/Public/Home/images/case.jpg">

		<div class="suoyin">
			<a href="<?php echo U('Home/Index/cases');?>?typeid=0">全部</a>
			<?php if(is_array($case_type)): $i = 0; $__LIST__ = $case_type;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><a href="<?php echo U('Home/Index/cases');?>?typeid=<?php echo ($vo["id"]); ?>"><?php echo ($vo["typename"]); ?></a><?php endforeach; endif; else: echo "" ;endif; ?>
		</div>

		<div class="bigbox">
			<?php if($typeid == 8 ): ?><div style=" width:850px; margin-left:auto; margin-right:auto; margin-top:20px; margin-bottom:40px;" class="c_l_bottom">
					<iframe height=600 width=800 src="<?php echo ($video["video"]); ?>" frameborder=0 allowfullscreen></iframe>
				</div>
			<?php else: ?>
				<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="neirong">
						<a href="<?php echo U('Home/Index/goto_cases');?>?id=<?php echo ($vo["id"]); ?>"><img height="120" width="240" src="<?php echo ($vo["image"]); ?>"></a>
						<h1><?php echo ($vo["title"]); ?></h1>
						<h1>时间：<?php echo (date("Y-m-d",$vo["ptime"])); ?></h1>
					</div><?php endforeach; endif; else: echo "" ;endif; endif; ?>
			<div class="cleanfix"></div>
		</div>

		<!-- <div class="qiehuan">
			<a href=""><img src="/Public/Home/images/left.jpg"></a>
			<a class="shuzi" href="">1</a>
			<a class="shuzi" href="">2</a>
			<a class="shuzi" href="">3</a>
			<a class="shuzi" href="">4</a>
			<a href=""><img src="/Public/Home/images/right.jpg"></a>
		</div> -->
		</div>

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