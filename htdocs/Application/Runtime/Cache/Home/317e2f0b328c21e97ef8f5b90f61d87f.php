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
					<li class="this"><a href="index.html">首页</a></li>
					<li><a href="<?php echo U('Home/Index/intro_intro');?>?type=1">关于亿众</a></li>
					<li><a href="<?php echo U('Home/Index/pro_detail');?>">产品中心</a>
						<div class="slide">
							<dl>
								<?php if(is_array($protitle)): $i = 0; $__LIST__ = $protitle;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><dd>                                                     
										<a href="<?php echo U('Home/Index/product');?>?type=<?php echo ($vo["id"]); ?>">
											<h2><?php echo ($vo["title"]); ?></h2>
											<div class="images"><img style="width:120px;height: 60px" src="<?php echo ($vo["desc"]); ?>" alt="图片"></div>
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

		<!--大图开始-->
		<img class="banner" src="/Public/Home/picture/run.jpg"></div>
		<p class="clear"> </p>
		</div>
		</div>
		</div>
		<!--大图结束-->
		<p class="clear"> </p>
		<!--标题开始-->
		<div class="about_title">
			<a id="company"><img class="ai" src="/Public/Home/picture/about_tb.jpg"><span>嘉年华  CARNIVAL</span></a>
			<p>体育无处不在，运动无限精彩</p>
		</div>
		<!--标题结束-->
		<p class="kong2"><br />
		</p>
		<div class="width1"><img src="/Public/Home/picture/outdoor_line_title.jpg" /></div>
		<div class="outdoor_line_title">【滑雪拓展】</div>
		<div class="width1 overflow-x">
			<ul class="outdoor_line_pic">
				<li><img src="/Public/Home/picture/outdoor_line_pic1.jpg" />
					<p>老界岭滑雪场<br /> 地址：河南省南阳市西峡县太平镇
					</p>
				</li>
				<li><img src="/Public/Home/picture/outdoor_line_pic2.jpg" />
					<p>神农架滑雪场<br /> 地址：湖北省神农架国家森林公园
					</p>
				</li>
			</ul>
		</div>
		<!--线路推荐结束-->
		<!--漂流拓展开始-->
		<p class="kong2"><br />
		</p>
		<div class="width1 outdoor_driftbg overflow-x">
			<div class="outdoor_line_title">【漂流拓展】</div>
			<ul class="outdoor_drift_pic">
				<li class="outdoor_drift_pic1"><img src="/Public/Home/picture/outdoor_drift_pic1.jpg" />
					<p>腾龙溪漂流<br /> 地址：湖北省通山县大畈镇下杨村
					</p>
				</li>
				<li class="outdoor_drift_pic1"><img src="/Public/Home/picture/outdoor_drift_pic2.jpg" />
					<p>朝天吼漂流<br /> 地址：湖北宜昌兴山县
					</p>
				</li>
				<li class="outdoor_drift_pic1"><img src="/Public/Home/picture/outdoor_drift_pic3.jpg" />
					<p>进士河漂流<br /> 地址：湖北省黄冈市罗田县大河岸镇
					</p>
				</li>
			</ul>
			<p class="kong2"><br />
			</p>
		</div>
		<!--漂流拓展结束-->
		<!--徒步拓展开始-->
		<div class="outdoor_line_title">【徒步拓展】</div>
		<div class="width1 overflow-x">
			<ul class="outdoor_line_pic">
				<li><img src="/Public/Home/picture/outdoor_walk_pic1.jpg" /><span>汉口江滩线路</span>
					<p>从汉口江滩防洪纪念碑往长江二桥方向直行，经过长江二桥继续前行可以到达二七长江大桥。这条线路四季游人如织，徒步时间为约需90分钟。</p>
				</li>
				<li><img src="/Public/Home/picture/outdoor_walk_pic2.jpg" /><span>牛山湖半岛线路</span>
					<p>江夏区牛山湖南侧有一条乡村公路，纵贯其上的乡村陆地，乡村公路全长约30公里，从东侧的长堤进入，两边都是清澈的湖水和乡村风光，是徒步的好地方。</p>
				</li>
			</ul>
		</div>
		<p class="kong2"><br />
		</p>

		<!--青春跑项目开始-->
		<div class="width1"> </div>
		<ul class="run_rec_pic width1">
			<li>
				<h1>四季跑</h1>
				<img src="/Public/Home/picture/run_pic5.jpg"></li>
			<li class="run_recbg">
				<div class="divs"><img src="/Public/Home/picture/run_pic6.jpg">
					<p><span>荧光跑</span>
						<font>荧光跑，被称为"地球上最闪亮的5公里赛跑"。荧光跑是参与者利用荧光装备随性装扮，与其他参与者盛装出席，进行无排名之分，无速度之争的运动，沿途欣赏赛区特制的荧光装置艺术，终点享受音乐派对的快乐氛围，是一场结合荧光元素的跑步。</font>
					</p>
				</div>
			</li>
			<li>
				<div class="divz">
					<p><span>迷你马拉松</span>
						<font>马拉松是一项全民运，迷你马拉松一般指小于10KM的马拉松，一般不限时，加马拉松赛，不是为了拿名次。更多的是为了参与，感受全名运动的那种气氛。</font>
					</p>
					<img src="/Public/Home/picture/run_pic7.jpg"></div>
			</li>
			<li class="run_recbg">
				<div class="divs"><img src="/Public/Home/picture/run_pic8.jpg">
					<p><span>趣味马拉松</span>
						<font>"趣味迷你马拉松"，不同于一般的竞技性质的马拉松比赛，赛段只有5-10千米，提倡参加者们充分享受到跑步带来的多样趣味。有演唱会、减肥、cosplay（角色扮演）等各种不同的主题和形式。</font>
					</p>
				</div>
			</li>
			<li>
				<div class="divz">
					<p><span>健步走</span>
						<font>健步走是一项以促进身心健康为目的、讲究姿势、速度和时间的一项步行运动，它行走的速度和运动量介于散步和竞走之间。突出的特点是方法易于掌握，不易发生运动伤害；不受年龄、时间和场地的限制，运动装备简单。</font>
					</p>
					<img src="/Public/Home/picture/run_pic9.jpg"></div>
			</li>
		</ul>
		<!--青春跑项目结束-->
		<p class="kong2"> </p>
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
					<li><span><a href="?cls/5/1.html">【趣味运动会】</a></span><a href="?cls/5/1.html">职工趣味运动会</a><a href="?cls/5/1.html">亲子趣味运动会</a><a href="?cls/5/1.html">泥浆趣味运动会</a><a href="?cls/5/1.html">水上趣味运动会</a><a href="?cls/5/1.html">减压趣味运动会</a></li>
					<li><span><a href="?cls/6/1.html">【主题年会】</a></span><a href="?cls/6/1.html">奔跑吧兄弟主题年会</a><a href="?cls/6/1.html">大富翁主题年会</a><a href="?cls/6/1.html">多米诺主题年会</a><a href="?cls/6/1.html">军事主题年会</a><a href="?cls/6/1.html">公益主题年会</a></li>
					<li><span><a href="?cls/7/1.html">【体育赛事】</a></span><a href="?cls/7/1.html">足球比赛</a><a href="?cls/7/1.html">篮球比赛</a><a href="?cls/7/1.html">羽毛球比赛</a><a href="?cls/7/1.html">乒乓球比赛</a><a href="?cls/7/1.html">高尔夫比赛</a></li>
					<li><span><a href="?cls/8/1.html">【户外拓展】</a></span><a href="?cls/8/1.html">基地拓展</a><a href="?cls/8/1.html">徒步拓展</a><a href="?cls/8/1.html">登山拓展</a><a href="?cls/8/1.html">滑雪拓展</a><a href="?cls/8/1.html">漂流拓展</a></li>
					<li><span><a href="?cls/9/1.html">【青春跑】</a></span><a href="?cls/9/1.html">彩色跑</a><a href="?cls/9/1.html">泡泡跑</a><a href="?cls/9/1.html">荧光跑</a><a href="?cls/9/1.html">四季跑</a><a href="?cls/9/1.html">迷你马拉松</a></li>
				</ul>
				<div class="bottom_code left"><img src="/Public/Home/picture/qcode.jpg"><span>扫描网站二维码</span></div>
				<p class="clear"> </p>
			</div>
			<div class="bottom_con"> <a href="?cls/4/1.html" class="menu2">关于我们</a> | <a href="?cls/4/1.html#brand" class="menu2">品牌故事</a> | <a href="?cls/4/1.html#contact" class="menu2">联系我们</a><br> 全国服务热线：027-59279307 &nbsp; &nbsp; 地址:郑州市郑东新区商务外环路5号10层1003号<br> 版权所有 ©2016 河南亿众体育文化传播有限公司
				&nbsp; &nbsp; 技术支持：<a href="http://ktwlkj.com//" target="_blank" class="menu2">河南开天网络科技有限公司</a> </div>
		</div>
		<!--脚注结束-->
	</body>

</html>