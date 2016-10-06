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
					<li ><a href="index.html">首页</a></li>
					<li><a href="<?php echo U('Home/Index/intro_intro');?>?type=1">关于亿众</a></li>
					<li class="this"><a href="<?php echo U('Home/Index/pro_detail');?>">产品中心</a>
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

		<div><img class="banner" alt="" src="<?php echo ($imgdlist[1]["img_url"]); ?>" /></div>
		<!--标题开始-->
		<div class="about_title">
			<a id="company"><img class="ai" src="/Public/Home/picture/about_tb.jpg" /><span>户外拓展 OUTDOOR</span></a>
			<p>体育无处不在，运动无限精彩</p>
		</div>
		<!--标题结束-->
		<div class="width1">
			<div class="outdoor_l left">
				<!--为什么要做拓展开始-->
				<div class="outdoor_title">Why do you want to expand<span>为什么要做拓展？</span></div>
				<ul>
					<li class="outdoor_bg1">
						<h1>01</h1>
						<div>增强团队融合，使员工进一步明确和认同组织目标</div>
					</li>
					<li class="outdoor_bg2">
						<h1>02</h1>
						<div>增强凝聚力树立相互配合、相互支持的团队精神和整体意识改善人际关系</div>
					</li>
					<li class="outdoor_bg1">
						<h1>03</h1>
						<div>形成积极向上的氛围改进内部的沟通与信息交流，使员工表现出更佳的领导与管理才能，挖掘员工的内在能量，并在工作中全部释放出来</div>
					</li>
				</ul>
				<p class="clear"><br />
				</p>
				<!--为什么要做拓展结束-->
			</div>
			<div class="outdoor_r left">
				<!--为什么选择亿众开始-->
				<div class="outdoor_title">Why choose YIZHONG<span>为什么选择亿众？</span></div>
				<ul>
					<li class="outdoor_bg3">
						<h1>01</h1>
						<div>专业的拓展教练团队</div>
					</li>
					<li class="outdoor_bg4">
						<h1>02</h1>
						<div>完善的拓展培训体系</div>
					</li>
					<li class="outdoor_bg3">
						<h1>03</h1>
						<div>多样化的拓展项目</div>
					</li>
					<li class="outdoor_bg4">
						<h1>04</h1>
						<div>丰富的大型活动组织经验</div>
					</li>
				</ul>
				<!--为什么选择亿众结束-->
			</div>
			<p class="kong2"><br />
			</p>
		</div>

		<div class="width1 overflow-x">
			<?php echo ($conlist["content"]); ?>
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