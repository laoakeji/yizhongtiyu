<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>

	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="/Public/Home/css/index.css">
		<link rel="stylesheet" type="text/css" href="/Public/Home/css/style.css">
		<script src="/Public/Home/scripts/jquery-2.0.3.min.js"></script>
		<script src="/Public/Home/scripts/myjs.js"></script>
		<title>无标题文档</title>
	</head>

	<body>
		<div class="header">
			<div class="logo">
				<a href="index.html"><img src="/Public/Home/images/logo.png" alt="LOGO"></a>
			</div>
			<div class="header_right">每一天 一起动<span>4000-365-170</br>4000-365-170</span></div>
		</div>
		<div class="nav_out">
			<div class="nav">
				<ul>
					<li><a href="index.html">首页</a></li>
					<li><a href="intro.html">关于亿众</a></li>
					<li><a href="centre.html">产品中心</a>
						<div class="slide">
							<dl>
								<dd>
									<a href="Product1.html">
										<h2>项目1</h2>
										<div class="images"><img src="/Public/Home/images/con2_img2.jpg" alt="图片"></div>
									</a>
								</dd>
								<dd>
									<a href="Product2.html">
										<h2>项目1</h2>
										<div class="images"><img src="/Public/Home/images/con2_img2.jpg" alt="图片"></div>
									</a>
								</dd>
								<dd>
									<a href="Product3.html">
										<h2>项目1</h2>
										<div class="images"><img src="/Public/Home/images/con2_img2.jpg" alt="图片"></div>
									</a>
								</dd>
								<dd>
									<a href="Product4.html">
										<h2>项目1</h2>
										<div class="images"><img src="/Public/Home/images/con2_img2.jpg" alt="图片"></div>
									</a>
								</dd>
								<dd>
									<a href="Product5.html">
										<h2>项目1</h2>
										<div class="images"><img src="/Public/Home/images/con2_img2.jpg" alt="图片"></div>
									</a>
								</dd>
								<dd>
									<a href="Product6.html">
										<h2>项目1</h2>
										<div class="images"><img src="/Public/Home/images/con2_img2.jpg" alt="图片"></div>
									</a>
								</dd>
							</dl>
						</div>
					</li>
					<li class="this"><a href="News.html">行业动态</a></li>
					<li><a href="case.html">经典案例</a></li>
					<li><a href="contact.html">联系我们</a></li>
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

		<img class="banner" src="/Public/Home/images/active.jpg">

		<div class="huodong">
			<h1>最新活动</h1>
		</div>

		<div class="wenzi">
			<h2>2016年武汉城市投资集团棋牌运动会</h2>
			<div class="pei">
				<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;发布时间：2016/5/17&nbsp;&nbsp;&nbsp;发布人：管理员&nbsp;&nbsp;&nbsp;点击量：22 </p>
			</div>
			<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;学校趣味运动会就是以学生为主体，以娱乐为中心，以趣味游戏为载体，在锻炼身体的同时同时兼顾培养学生坚韧不拔的精神和团结协作意识的一种体育比赛形式。</br>

				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;学校趣味运动会是以“发展体能，突出趣味竞技性”为主题的运动会，趣味运动会比赛项目乐趣十足、竞技性强，丰富学生的课外生活，给学生与教师一个交流、合作的空间。在活动中让学生体验运动的趣味和快乐、学会合作，且培养学生集体荣誉感和竞争意识，使孩子们的身心得到健康全面发展。</br>

				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;学校趣味运动会的特点就是体力、智力和合作，核心体现一个“趣”字， “趣味”不仅充分激发了孩子们对体育活动的兴趣，也培养了他们团结协作的精神。趣味运动会是田径运动会的一个有效补充，趣味运动会能广泛而持久地吸引学生的兴趣和热情，为学生终生体育打下良好的基础。
			</p>
			<img src="/Public/Home/images/20160517141731143114.jpg">
		</div>

		<div class="qiehuan456">
			<a href="News.html" class="shuzi456" href="">返回</a>
		</div>

		<!--脚注开始-->
		<div class="clear"> </div>
		<div class="width1 bottom_top">
			<a><img onClick="window.scroll(0,0)" src="picture/btop.png"></a>
		</div>
		<div class="bottom_bg width2">
			<ul class="bottom_link">
				<li><span>友情链接：</span></li>
				<li><a href="http://ktwlkj.com//" target="_blank">河南开天网络科技有限公司</a> </li>
			</ul>
			<p class="clear"> </p>
			<div class="bottom_nav">
				<ul class="left">
					<li><span><a href="?cls/5/1.html">【趣味运动会】</a></span><a href="?cls/5/1.html">职工趣味运动会</a><a href="?cls/5/1.html">亲子趣味运动会</a><a href="?cls/5/1.html">泥浆趣味运动会</a><a href="?cls/5/1.html">水上趣味运动会</a><a href="?cls/5/1.html">减压趣味运动会</a></li>
					<li><span><a href="?cls/6/1.html">【主题年会】</a></span><a href="?cls/6/1.html">奔跑吧兄弟主题年会</a><a href="?cls/6/1.html">大富翁主题年会</a><a href="?cls/6/1.html">多米诺主题年会</a><a href="?cls/6/1.html">军事主题年会</a><a href="?cls/6/1.html">公益主题年会</a></li>
					<li><span><a href="?cls/7/1.html">【体育赛事】</a></span><a href="?cls/7/1.html">足球比赛</a><a href="?cls/7/1.html">篮球比赛</a><a href="?cls/7/1.html">羽毛球比赛</a><a href="?cls/7/1.html">乒乓球比赛</a><a href="?cls/7/1.html">高尔夫比赛</a></li>
					<li><span><a href="?cls/8/1.html">【户外拓展】</a></span><a href="?cls/8/1.html">基地拓展</a><a href="?cls/8/1.html">徒步拓展</a><a href="?cls/8/1.html">登山拓展</a><a href="?cls/8/1.html">滑雪拓展</a><a href="?cls/8/1.html">漂流拓展</a></li>
					<li><span><a href="?cls/9/1.html">【青春跑】</a></span><a href="?cls/9/1.html">彩色跑</a><a href="?cls/9/1.html">泡泡跑</a><a href="?cls/9/1.html">荧光跑</a><a href="?cls/9/1.html">四季跑</a><a href="?cls/9/1.html">迷你马拉松</a></li>
				</ul>
				<div class="bottom_code left"><img src="picture/qcode.jpg"><span>扫描网站二维码</span></div>
				<p class="clear"> </p>
			</div>
			<div class="bottom_con"> <a href="?cls/4/1.html" class="menu2">关于我们</a> | <a href="?cls/4/1.html#brand" class="menu2">品牌故事</a> | <a href="?cls/4/1.html#contact" class="menu2">联系我们</a><br> 全国服务热线：027-59279307 &nbsp; &nbsp; 地址:郑州市郑东新区商务外环路5号10层1003号<br> 版权所有 ©2016 河南亿众体育文化传播有限公司
				&nbsp; &nbsp; 技术支持：<a href="http://ktwlkj.com//" target="_blank" class="menu2">河南开天网络科技有限公司</a> </div>
		</div>
		<!--脚注结束-->
	</body>

</html>