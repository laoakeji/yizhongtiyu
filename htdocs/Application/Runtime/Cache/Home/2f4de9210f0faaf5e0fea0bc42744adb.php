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
					<li class="this"><a href="centre.html">产品中心</a>
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
					<li><a href="News.html">行业动态</a></li>
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
		<a id="company"><img class="ai2" src="/Public/Home/picture/about_tb.jpg"><span><?php echo ($conlist["title"]); ?> RUN</span></a>
			<p>体育无处不在，运动无限精彩</p>
		</div>
		<!--标题结束-->
		<!--青春跑项目开始-->
		<div class="width1">
          	<?php echo ($conlist["content"]); ?>
		</div>
		<ul class="run_rec_pic width1">
			<li>
				<div class="divz">
					<p><span>彩色跑</span>
						<font>"彩色跑"(The Color Run)，是一项2011年发源于美国的运动，被称为"地球上最快乐的5公里赛跑"，参加者身着白色T恤，跑步过程中经过不同的彩色站，会被从头到脚抛撒彩色粉末。</font>
					</p><img src="picture/run_pic3.jpg"></div>
			</li>

			<li class="run_recbg">
				<div class="divs"><img src="picture/run_pic4.jpg">
					<p><span>泡泡跑</span>
						<font>BubbleRun泡泡跑，在5公里跑道上，4个彩色泡泡"城堡"基站，超大功率大风扇不断喷涌红、黄、绿、蓝色泡泡，充满了整个跑道，从一大堆泡泡里冲出来。</font>
					</p>
				</div>
			</li>

			<li>
				<h1>四季跑</h1><img src="picture/run_pic5.jpg"></li>

			<li class="run_recbg">
				<div class="divs"><img src="picture/run_pic6.jpg">
					<p><span>荧光跑</span>
						<font>荧光跑，被称为"地球上最闪亮的5公里赛跑"。荧光跑是参与者利用荧光装备随性装扮，与其他参与者盛装出席，进行无排名之分，无速度之争的运动，沿途欣赏赛区特制的荧光装置艺术，终点享受音乐派对的快乐氛围，是一场结合荧光元素的跑步。</font>
					</p>
				</div>
			</li>

			<li>
				<div class="divz">
					<p><span>迷你马拉松</span>
						<font>马拉松是一项全民运，迷你马拉松一般指小于10KM的马拉松，一般不限时，加马拉松赛，不是为了拿名次。更多的是为了参与，感受全名运动的那种气氛。</font>
					</p><img src="picture/run_pic7.jpg"></div>
			</li>

			<li class="run_recbg">
				<div class="divs"><img src="picture/run_pic8.jpg">
					<p><span>趣味马拉松</span>
						<font>"趣味迷你马拉松"，不同于一般的竞技性质的马拉松比赛，赛段只有5-10千米，提倡参加者们充分享受到跑步带来的多样趣味。有演唱会、减肥、cosplay（角色扮演）等各种不同的主题和形式。</font>
					</p>
				</div>
			</li>

			<li>
				<div class="divz">
					<p><span>健步走</span>
						<font>健步走是一项以促进身心健康为目的、讲究姿势、速度和时间的一项步行运动，它行走的速度和运动量介于散步和竞走之间。突出的特点是方法易于掌握，不易发生运动伤害；不受年龄、时间和场地的限制，运动装备简单。</font>
					</p><img src="picture/run_pic9.jpg"></div>
			</li>
		</ul>
		<!--青春跑项目结束-->
		<p class="kong2"> </p>
		<!--线路推荐开始-->
		<div class="width1 run_title">
			<img src="picture/run_road_title.jpg">
			<p>青春无极限，青春必须炫。在一个装满青春的小小方盒里，微小的分子永不停息地跳着、蹦着、前行着，似乎想要闯出一段铺就成功的路。<br> 青春的气息犹如炽热的阳光洒在我们头上，我们决定用运动，展现自己最娇艳、最美好的一面。
			</p>
		</div>
		<div class="run_road_pic">
			<ul>
				<li>
					<h1><img src="picture/run_road_pic1.jpg"></h1>
					<h2><span>武汉市蔡甸区后官湖湿地公园</span>
<font>1. 半程马拉松：<br />
比赛（起点）→围绕后官湖一期绿道一圈→白莲湖广场（终点）<br>
2. 10公里健康跑：<br>
比赛（起点）→绿道示范段→职工疗养院（折返）→白莲湖广场（终点）<br></font></h2></li>
				<li>
					<h2><span>东湖磨山线路</span>
<font>从楚城出发，经楚市、楚天台、楚才园、湖边小径，到落雁岛，单程6.5公里，往返耗时约120分钟，这是最大的楚文化游览中心，山水宜人，四季风景各异，适合休闲健身。<br></font></h2>
					<h1><img src="picture/run_road_pic2.jpg"></h1>
				</li>
				<li>
					<h1><img src="picture/run_road_pic3.jpg"></h1>
					<h2><span>马鞍山森林公园线路</span>
<font>从公园正大门出发，在公园内可徒步长线（9公里）和短线（约7公里），长线约需时85分钟，短线70分钟。这条线路是天然氧吧，还可观赏森林和湿地两大生态特色。<br></font></h2></li>
				<li>
					<h2><span>黄鹤楼公园线路</span>
<font>起点位于黄鹤楼新大门，经蛇山顶炮台、白云楼、大东门、龙华寺、表烈祠、抱冰堂、辛亥革命武昌首义纪念碑、省图书馆旧址、古楼洞、红楼、孙中山铜像、首义广场、首义汇，最后环紫阳湖公园，全程大约6公里，耗时60分钟到90分钟，适合日常健身徒步。<br></font></h2>
					<h1><img src="picture/run_road_pic4.jpg"></h1>
				</li>
				<li>
					<h1><img src="picture/run_road_pic5.jpg"></h1>
					<h2><span>九峰山森林公园线路</span>
<font>九峰山森林公园是武汉地区唯一的国家级森林公园，因有九峰得名，从森林公园大门出发，穿越目前能徒步的5个山峰，大约需要3小时。<br></font></h2></li>
				<li>
					<h2><span>牛山湖半岛线路</span>
<font>从汉口江滩防洪纪念碑往长江二桥方向直行，经过长江二桥继续前行可以到达二七长江大桥。这条线路四季游人如织，徒步时间为约需90分钟。<br></font></h2>
					<h1><img src="picture/run_road_pic6.jpg"></h1>
				</li>
				<li>
					<h1><img src="picture/run_road_pic7.jpg"></h1>
					<h2><span>江夏八分山线路</span>
<font>江夏八分山海拔272.3米，是纸坊最高的山，沿着乡间小路徒步上山，山间竹林掩映，如世外桃源，总耗时约3小时。<br></font></h2></li>
				<li>
					<h2><span>汉口江滩线路</span>
<font>从汉口江滩防洪纪念碑往长江二桥方向直行，经过长江二桥继续前行可以到达二七长江大桥。这条线路四季游人如织，徒步时间为约需90分钟。<br></font></h2>
					<h1><img src="picture/run_road_pic8.jpg"></h1>
				</li>
				<li>
					<h1><img src="picture/run_road_pic9.jpg"></h1>
					<h2><span>汉阳江滩线路</span>
<font>从汉阳公园出发，经莲花湖、汉阳长江江滩、晴川阁、南岸嘴、晴川桥、汉阳汉江江滩、江汉一桥、月湖文化艺术区、古琴台，到钟家村，此线路闹中取静，江风习习，耗时60分钟到90分钟。<br></font></h2></li>
				<li>
					<h2><span>喻家山六山连纵线路</span>
<font>磨山大门出发，经茶园、风筝山、斧头山、团山、喻家山、南望山、猴山下来，到达东湖边，全程大约12公里山路，耗时120分钟到150分钟，途中空气清新，可纵山，可沿半山腰前行，适合周末健身。<br></font></h2>
					<h1><img src="picture/run_road_pic10.jpg"></h1>
				</li>
				<li>
					<h1><img src="picture/run_road_pic11.jpg"></h1>
					<h2><span>半程马拉松</span>
<font>武昌江滩蓝湾俊园（起点）一临江大道——新河街——新生路——友谊大道——湖北大学——徐东路（地下通道）——三弓路——和平大道——长江二桥——麻阳街转盘——汉口江滩麻阳街入口——汉口江滩市政步道——市政广场——山峡石广场（终点）； 21.0975公里<br></font></h2></li>
				<li>
					<h2><span>健康跑</span>
<font>汉口江滩一期天津路闸口内（起点）——汉口江滩市政步道——途经三阳路闸口——麻阳街闸口——转至汉口江滩运动步道——汉口江滩山峡石广场（终点）。5公里<br></font></h2>
					<h1><img src="picture/run_road_pic12.jpg"></h1>
				</li>
			</ul>
		</div>
		<!--线路推荐结束-->
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