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

		<!--头部开始-->

		<!--头部结束-->

		<!--导航开始-->
		<div class="menu">
			<div class="nav" id="nav">
				<div class="subnav" style="display: none; ">
					<div class="subnav-box nav-about" style="display: none;"></div>
					<div class='subnav-box nav-case' style='display: none; '>
						<dl>
							<dt><a href='?cls/5/1.html'>趣味运动会</a></dt>
							<dd>
								<a href='?cls/5/1.html'><img src='/Public/Home/picture/sport_nav_pic.jpg' /></a>
							</dd>
						</dl>
						<dl>
							<dt><a href='?cls/6/1.html'>主题年会</a></dt>
							<dd>
								<a href='?cls/6/1.html'><img src='/Public/Home/picture/nianhui_nav_pic.jpg' /></a>
							</dd>
						</dl>
						<dl>
							<dt><a href='?cls/7/1.html'>体育赛事</a></dt>
							<dd>
								<a href='?cls/7/1.html'><img src='/Public/Home/picture/event_nav_pic.jpg' /></a>
							</dd>
						</dl>
						<dl>
							<dt><a href='?cls/8/1.html'>户外拓展</a></dt>
							<dd>
								<a href='?cls/8/1.html'><img src='/Public/Home/picture/outdoor_nav_pic.jpg' /></a>
							</dd>
						</dl>
						<dl>
							<dt><a href='?cls/9/1.html'>青春跑</a></dt>
							<dd>
								<a href='?cls/9/1.html'><img src='/Public/Home/picture/run_nav_pic.jpg' /></a>
							</dd>
						</dl>
					</div>
					<div class='subnav-box nav-pro' style='display: none; '>
						<ul class='subnav-list'>
							<li><a href='?cls/10/1.html'>最新活动</a></li>
							<li><a href='?cls/11/1.html'>公司动态</a></li>
							<li><a href='?cls/12/1.html'>业界动态</a></li>
						</ul>
						<div class='subnav-theme'>
							<h3>亿众，快乐运动</h3>
							<h4>2016，更多奇迹，等待你来创造...</h4>
							<p><img src='/Public/Home/picture/menu_t2.jpg'></p>
						</div>
					</div>
					<div class='subnav-box nav-invest' style='display: none; '>
						<dl>
							<dt><a href='?cls/13/1.html'>趣味运动会</a></dt>
							<dd>
								<a href='?cls/13/1.html'><img src='/Public/Home/picture/sport_nav_pic.jpg' /></a>
							</dd>
						</dl>
						<dl>
							<dt><a href='?cls/14/1.html'>主题年会</a></dt>
							<dd>
								<a href='?cls/14/1.html'><img src='/Public/Home/picture/nianhui_nav_pic.jpg' /></a>
							</dd>
						</dl>
						<dl>
							<dt><a href='?cls/15/1.html'>体育赛事</a></dt>
							<dd>
								<a href='?cls/15/1.html'><img src='/Public/Home/picture/event_nav_pic.jpg' /></a>
							</dd>
						</dl>
						<dl>
							<dt><a href='?cls/16/1.html'>户外拓展</a></dt>
							<dd>
								<a href='?cls/16/1.html'><img src='/Public/Home/picture/outdoor_nav_pic.jpg' /></a>
							</dd>
						</dl>
						<dl>
							<dt><a href='?cls/17/1.html'>青春跑</a></dt>
							<dd>
								<a href='?cls/17/1.html'><img src='/Public/Home/picture/run_nav_pic.jpg' /></a>
							</dd>
						</dl>
					</div>
					<div class='subnav-box nav-news' style='display: none; '>
						<ul class='subnav-list'>
							<li><a href='?cls/18/1.html'>公司简介</a></li>
							<li><a href='?cls/20/1.html'>公司团队</a></li>
							<li><a href='?cls/19/1.html'>品牌故事</a></li>
							<li><a href='?cls/21/1.html'>公司资质</a></li>
							<li><a href='?cls/22/1.html'>联系我们</a></li>
							<li><a href='?cls/57/1.html'>合作客户</a></li>
						</ul>
						<div class='subnav-theme'>
							<h3>品质第一、信誉为根、创新为本</h3>
							<h4>不断创新服务模式，以客户为关注焦点</h4>
							<p><img src='/Public/Home/picture/menu_t1.jpg'></p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<script src='Scripts/common.js'></script>
		<!--导航结束-->
		</div>
		<p class="clear"> </p>
		</div>
		<!--大图开始-->
		<div class="flash3">
			<div class="flash4">
				<div class="flash5">
					<div class="tops2"></div>
					<div class="flash6"><img src="<?php echo ($imgdlist[1]["img_url"]); ?>" /></div>
					<p class="clear"><br />
					</p>
				</div>
			</div>
		</div>
		<!--大图结束-->
		<p class="clear"><br />
		</p>
		<!--标题开始-->
		<div class="about_title">
			<a id="company"><img class="ai" src="/Public/Home/picture/about_tb.jpg" /><span>趣味运动会 GAMES</span></a>
			<p>体育无处不在，运动无限精彩</p>
		</div>
		<!--标题结束-->
		<!--导航开始-->
		<div class="width1 overflow-x">
			<?php echo ($conlist["content"]); ?>
		</div>
		<!--闭幕式结束-->
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