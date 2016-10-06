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

		<div><img class="banner" alt="" src="/Public/Home/picture/outdoor.jpg" </div>
			<!--标题开始-->
			<div class="about_title">
				<a id="company"><img class="ai3" src="/Public/Home/picture/about_tb.jpg" /><span>体育营销  SPORTS MARKETING</span></a>
				<p>体育无处不在，运动无限精彩</p>
			</div>
			<!--标题结束-->
			<!--线路推荐开始-->
			<div class="width1 run_title">

			</div>
			<div class="run_road_pic">
				<ul>
					<li>
						<h1><img src="/Public/Home/picture/run_road_pic1.jpg"></h1>
						<h2><span>武汉市蔡甸区后官湖湿地公园</span> <font>1. 半程马拉松：<br />
        比赛（起点）→围绕后官湖一期绿道一圈→白莲湖广场（终点）<br>
        2. 10公里健康跑：<br>
        比赛（起点）→绿道示范段→职工疗养院（折返）→白莲湖广场（终点）<br>
        </font></h2>
					</li>
					<li>
						<h2><span>东湖磨山线路</span> <font>从楚城出发，经楚市、楚天台、楚才园、湖边小径，到落雁岛，单程6.5公里，往返耗时约120分钟，这是最大的楚文化游览中心，山水宜人，四季风景各异，适合休闲健身。<br>
        </font></h2>
						<h1><img src="/Public/Home/picture/run_road_pic2.jpg"></h1>
					</li>
					<li>
						<h1><img src="/Public/Home/picture/run_road_pic3.jpg"></h1>
						<h2><span>马鞍山森林公园线路</span> <font>从公园正大门出发，在公园内可徒步长线（9公里）和短线（约7公里），长线约需时85分钟，短线70分钟。这条线路是天然氧吧，还可观赏森林和湿地两大生态特色。<br>
        </font></h2>
					</li>
					<li>
						<h2><span>黄鹤楼公园线路</span> <font>起点位于黄鹤楼新大门，经蛇山顶炮台、白云楼、大东门、龙华寺、表烈祠、抱冰堂、辛亥革命武昌首义纪念碑、省图书馆旧址、古楼洞、红楼、孙中山铜像、首义广场、首义汇，最后环紫阳湖公园，全程大约6公里，耗时60分钟到90分钟，适合日常健身徒步。<br>
        </font></h2>
						<h1><img src="/Public/Home/picture/run_road_pic4.jpg"></h1>
					</li>
					<li>
						<h1><img src="/Public/Home/picture/run_road_pic5.jpg"></h1>
						<h2><span>九峰山森林公园线路</span> <font>九峰山森林公园是武汉地区唯一的国家级森林公园，因有九峰得名，从森林公园大门出发，穿越目前能徒步的5个山峰，大约需要3小时。<br>
        </font></h2>
					</li>
					<li>
						<h2><span>牛山湖半岛线路</span> <font>从汉口江滩防洪纪念碑往长江二桥方向直行，经过长江二桥继续前行可以到达二七长江大桥。这条线路四季游人如织，徒步时间为约需90分钟。<br>
        </font></h2>
						<h1><img src="/Public/Home/picture/run_road_pic6.jpg"></h1>
					</li>
					<li>
						<h1><img src="/Public/Home/picture/run_road_pic7.jpg"></h1>
						<h2><span>江夏八分山线路</span> <font>江夏八分山海拔272.3米，是纸坊最高的山，沿着乡间小路徒步上山，山间竹林掩映，如世外桃源，总耗时约3小时。<br>
        </font></h2>
					</li>
					<li>
						<h2><span>汉口江滩线路</span> <font>从汉口江滩防洪纪念碑往长江二桥方向直行，经过长江二桥继续前行可以到达二七长江大桥。这条线路四季游人如织，徒步时间为约需90分钟。<br>
        </font></h2>
						<h1><img src="/Public/Home/picture/run_road_pic8.jpg"></h1>
					</li>

				</ul>
			</div>
			<!--线路推荐结束-->
			<!--推荐项目开始-->
			<div class="outdoor_recbg">
				<div class="width1">
					<?php echo ($conlist["content"]); ?>
					<p class="kong2"><br />
					</p>
				</div>
			</div>
			<!--推荐项目结束-->

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