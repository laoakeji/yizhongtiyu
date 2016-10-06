<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>

	<head>
		<meta charset="utf-8">
		<meta name="keywords" content="职工文体活动,趣味运动会,趣味运动会策划,趣味运动会项目,职工运动会,水上运动会,体育赛事策划,社区活动策划,城市乐跑策划,健步走活动策划">
		<link rel="stylesheet" type="text/css" href="css/index.css">
		<script src="/Public/Home/scripts/jquery-2.0.3.min.js"></script>
		<script src="/Public/Home/scripts/myjs.js"></script>
		<title>亿众体育</title>
	</head>

	<body>
		<div class="header">
			<div class="logo">
				<a href="index.html"><img src="images/logo.png" alt="LOGO"></a>
			</div>
			<div class="header_right">每一天 一起动<span>4000-365-170<br/>4000-365-170</span></div>
		</div>
		<div class="nav_out">
			<div class="nav">
				<ul>
					<li class="this"><a href="index.html">首页</a></li>
					<li><a href="intro.html">关于亿众</a></li>
					<li><a href="centre.html">产品中心</a>
						<div class="slide">
							<dl>
								<dd>
									<a href="Product1.html">
										<h2>项目1</h2>
										<div class="images"><img src="images/con2_img2.jpg" alt="图片"></div>
									</a>
								</dd>
								<dd>
									<a href="Product2.html">
										<h2>项目1</h2>
										<div class="images"><img src="images/con2_img2.jpg" alt="图片"></div>
									</a>
								</dd>
								<dd>
									<a href="Product3.html">
										<h2>项目1</h2>
										<div class="images"><img src="images/con2_img2.jpg" alt="图片"></div>
									</a>
								</dd>
								<dd>
									<a href="Product4.html">
										<h2>项目1</h2>
										<div class="images"><img src="images/con2_img2.jpg" alt="图片"></div>
									</a>
								</dd>
								<dd>
									<a href="Product5.html">
										<h2>项目1</h2>
										<div class="images"><img src="images/con2_img2.jpg" alt="图片"></div>
									</a>
								</dd>
								<dd>
									<a href="Product6.html">
										<h2>项目1</h2>
										<div class="images"><img src="images/con2_img2.jpg" alt="图片"></div>
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

		<!--图片切换-->
		<div class="play" id="play">
			<a href="javascript:" id="next">>><div class="nextImg"><img width="80" height="54" src="" /></div></a>
			<a href="javascript:" id="prev">
				<<<div class="prevImg"><img width="80" height="54" src="" /></div>
		</a>
		<ol></ol>
		<ul>
			<li>
				<a href=><img src="images/banner_1.jpg" /></a>
			</li>
			<li>
				<a href=><img src="images/banner_2.jpg"/></a>
			</li>
			<li>
				<a href=><img src="images/banner_3.jpg" /></a>
			</li>
			<li>
				<a href=><img src="images/banner_4.jpg" /></a>
			</li>
			<li>
				<a href=><img src="images/banner_5.jpg"/></a>
			</li>
			<li>
				<a href=><img src="images/banner_6.jpg" /></a>
			</li>
		</ul>
		</div>

		<div class="product">
			<div class="picture">
				<a href="Product1.html">
					<img src="images/balloon.png">
					<h1>趣味运动会</h1>
					<p>一种别开生面同场竞技的大型团队活动</p>
				</a>
			</div>
			<div class="picture">
				<a href="Product2.html">
					<img src="images/balloon.png">
					<h1>趣味运动会</h1>
					<p>一种别开生面同场竞技的大型团队活动</p>
				</a>
			</div>
			<div class="picture">
				<a href="Product3.html">
					<img src="images/balloon.png">
					<h1>趣味运动会</h1>
					<p>一种别开生面同场竞技的大型团队活动</p>
				</a>
			</div>
			<div class="picture">
				<a href="Product4.html">
					<img src="images/balloon.png">
					<h1>趣味运动会</h1>
					<p>一种别开生面同场竞技的大型团队活动</p>
				</a>
			</div>
			<div class="picture">
				<a href="Product5.html">
					<img src="images/balloon.png">
					<h1>趣味运动会</h1>
					<p>一种别开生面同场竞技的大型团队活动</p>
				</a>
			</div>
			<div class="picture">
				<a href="Product6.html">
					<img src="images/balloon.png">
					<h1>趣味运动会</h1>
					<p>一种别开生面同场竞技的大型团队活动</p>
				</a>
			</div>
		</div>

		<!--<script type="text/javascript">-->
		<!--$(".picture").mouseover(function()-->
		<!--<?php echo --> <!--$("#play ol li:first").addClass("active");--> <!--;?>).mouseout(function()    -->
		<!--<?php echo --> <!--$(this).removeClass(" active"); --> <!--;?>);-->
		<!--</script>-->

		<script type="text/javascript" src="scripts/jquery-2.0.3.min.js"></script>
		<script type="text/javascript">
			window.onload=function(){
				var oDiv = $("#play"); //外部盒子
				var count = $("#play ul li").length; //内部图片数量
				var countwidth = $("#play ul li").width(); //图片边框宽度
				var oUl = $("#play ul").css("width", count * countwidth); //ul li总宽度
				var pic = $(".product").find(".picture");
				var now = 0;
				var next = $("#next");
				var prev = $("#prev");
				//点击按钮数量
				for (var i = 0; i < count; i++) {
					$("#play ol").append("<li>" + Number(i + 1) + "</li>");
					$("#play ol li:first").addClass("active");
				}
				//左右点击图片获取
				var nI = $("#play ul li:nth-child(2)").find("img").attr("src");
				$(".nextImg img").attr("src", nI);
				var pI = $("#play ul li:last-child").find("img").attr("src");
				$(".prevImg img").attr("src", pI);
				//按钮点击事件
				var aBtn = $("#play ol li");
				aBtn.each(function(index) {
					$(this).click(function() {
						clearInterval(timer);
						tab(index);
						nextImg();
						prevImg();
						timer = setInterval(autoRun, 2000);
					});
				});
				//图片循环事件
				function tab(index) {
					now = index;
					aBtn.removeClass("active");
					aBtn.eq(index).addClass("active");
					oUl.stop(true, false).animate({
						"left": -countwidth * now
					}, 800);
				}
				//下一张按钮图片切换
				function nextImg() {
					var d = $("#play ul li").find("img").eq(now + 1).attr("src");
					var nI = $("#play ul li:nth-child(1)").find("img").attr("src");
					$(".nextImg").find("img").attr("src", d);
					if (now == count - 1) {
						$(".nextImg").find("img").attr("src", nI);
					}
				}
				//上一张图片按钮切换
				function prevImg() {
					var f = $("#play ul li").find("img").eq(now - 1).attr("src");
					$(".prevImg").find("img").attr("src", f);
				}

				//下一张点击事件
				next.click(function() {
					clearInterval(timer);
					now++;
					if (now == count) {
						now = 0;
					}
					tab(now);
					nextImg();
					prevImg();
					timer = setInterval(autoRun, 2000);
				});
				//上一张点击事件
				prev.click(function() {
					clearInterval(timer);
					now--;
					if (now == -1) {
						now = count - 1;
					}
					tab(now);
					nextImg();
					prevImg();
					timer = setInterval(autoRun, 2000);
				});
				//自动轮播定义
				function autoRun() {
					now++;
					if (now == count) {
						now = 0;
					}
					tab(now);
					nextImg();
					prevImg();
				};
				//bottm list
				pic.mouseover(function() {
					clearInterval(timer);
					var n = $(this).index();
					now = n;
					aBtn.removeClass("active");
					aBtn.eq(now).addClass("active");
					oUl.stop(true, false).animate({
						"left": -countwidth * now
					}, 800);
				})
				pic.mouseout(function() {
					timer = setInterval(autoRun, 4000);
				})
				var timer = setInterval(autoRun, 4000);
			}
		</script>

		<div class="con1">
			<div class="con1_left">
				<div class="c_l_top">
					<span>视频案例</span>
					<div>
						<b>精彩活动，尽在亿众</b>
						<i>Wonderful activities,all in Yizhhong</i>
					</div>
				</div>
				<div class="c_l_bottom">
					<iframe height=300 width=600 src="http://player.youku.com/embed/XMTU5NTI0MDI4OA==" frameborder=0 allowfullscreen></iframe>
					
				</div>
			</div>
			<div class="con1_right">
				<div class="c_l_top">
					<span>一站式服务</span>
					<div>
						<b>省心省力，贴心服务</b>
						<i>Worry and effort,caring service</i>
					</div>
				</div>
				<div class="c_r_bottom">
					<!--此部分限制下数据 最多12条-->
					<ul>
						<li>
							<a href="service.html">
								<img src="images/c_r_img.png" alt="图标">
								<span>舞台搭建</span>
							</a>
						</li>
						<li>
							<a href="service.html">
								<img src="images/c_r_img.png" alt="图标">
								<span>舞台搭建</span>
							</a>
						</li>
						<li>
							<a href="service.html">
								<img src="images/c_r_img.png" alt="图标">
								<span>舞台搭建</span>
							</a>
						</li>
						<li>
							<a href="service.html">
								<img src="images/c_r_img.png" alt="图标">
								<span>舞台搭建</span>
							</a>
						</li>
						<li>
							<a href="service.html">
								<img src="images/c_r_img.png" alt="图标">
								<span>舞台搭建</span>
							</a>
						</li>
						<li>
							<a href="service.html">
								<img src="images/c_r_img.png" alt="图标">
								<span>舞台搭建</span>
							</a>
						</li>
						<li>
							<a href="service.html">
								<img src="images/c_r_img.png" alt="图标">
								<span>舞台搭建</span>
							</a>
						</li>
						<li>
							<a href="service.html">
								<img src="images/c_r_img.png" alt="图标">
								<span>舞台搭建</span>
							</a>
						</li>
						<li>
							<a href="service.html">
								<img src="images/c_r_img.png" alt="图标">
								<span>舞台搭建</span>
							</a>
						</li>
						<li>
							<a href="service.html">
								<img src="images/c_r_img.png" alt="图标">
								<span>舞台搭建</span>
							</a>
						</li>
						<li>
							<a href="service.html">
								<img src="images/c_r_img.png" alt="图标">
								<span>舞台搭建</span>
							</a>
						</li>
						<li>
							<a href="service.html">
								<img src="images/c_r_img.png" alt="图标">
								<span>舞台搭建</span>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="con2">
			<div class="con2_top">
				<span>选择亿众的理由</span>
				<div>
					<b>有你们，才有阵营</b>
					<i>There are you,there are camps</i>
				</div>
			</div>
			<div class="con2_1">
				<img src="images/con2_img.png" alt="图片">
				<p>十年行业积淀，汇聚精英； 追求细节完美，品质制胜<br/>拒绝平庸随便，独特品味； 整合多元资源，整体支撑</p>
				<p class="p1">全国最具<span>实力</span>体育文化创意机构之一<br/>最值得客户<span>信赖</span>体育公关营销策划服务品牌<br/>最优秀的<span>一站式</span>综合体育多维平台服务</p>
				<h6>Please believe in the power of the brand</h6>
				<h2>请相信品牌的力量</h2>
			</div>
			<div class="con2_top">
				<span>服务流程</span>
				<div>
					<b>让我们与运动进行一次快乐的对话</b>
					<i>Let us br a happy conversatiot Movement</i>
				</div>
			</div>
			<ul>
				<li>
					<a>
						<div class="images"><img src="images/con2_img1.jpg" alt="图片"></div>
						<div class="texts">
							<span>服务快</span>
							<p>15分钟内品牌策划师一对一服务</p>
						</div>
					</a>
				</li>
				<li>
					<a>
						<div class="images"><img src="images/con2_img2.jpg" alt="图片"></div>
						<div class="texts">
							<span>专业强</span>
							<p>八年专注文体活动行业</p>
						</div>
					</a>
				</li>
				<li>
					<a>
						<div class="images"><img src="images/con2_img3.jpg" alt="图片"></div>
						<div class="texts">
							<span>创意精</span>
							<p>独家定制</p>
						</div>
					</a>
				</li>
			</ul>
			<div class="con2_2">
				<img src="images/con2_2_img.png" alt="图片">
			</div>
		</div>
		<div class="con3">
			<div class="con2_top">
				<span>合作客户</span>
				<div>
					<b>选择我们，成就你我</b>
					<i>We choose,achievements you and me</i>
				</div>
			</div>
			<div class="con3_texts">
				<h6>HAND IN HAND TO ENJOY SPORTS</h6>
				<h2>携手亿众  享受运动</h2>
				<p>作为国家全民健身工程的推动者，亿众体育一直倡导将生命与运动，工作相结合，主张健康并快乐的生活工作。</p>
			</div>
			<div class="con3_con" id="con3_con">
				<div class="con3_top">
					<div class="c_t_con">
						<ul class="c_t_1">
							<li>
								<a href="#"><img src="images/c_t_1.jpg" alt="图片"></a>
							</li>
						</ul>
						<ul class="c_t_2">
							<li>
								<a href="#"><img src="images/c_t_1.jpg" alt="图片"></a>
							</li>
							<li>
								<a href="#"><img src="images/c_t_1.jpg" alt="图片"></a>
							</li>
						</ul>
						<ul class="c_t_3">
							<li>
								<a href="#"><img src="images/c_t_1.jpg" alt="图片"></a>
							</li>
							<li>
								<a href="#"><img src="images/c_t_1.jpg" alt="图片"></a>
							</li>
							<li>
								<a href="#"><img src="images/c_t_1.jpg" alt="图片"></a>
							</li>
						</ul>
						<ul class="c_t_4">
							<li>
								<a href="#"><img src="images/c_t_1.jpg" alt="图片"></a>
							</li>
							<li>
								<a href="#"><img src="images/c_t_1.jpg" alt="图片"></a>
							</li>
							<li>
								<a href="#"><img src="images/c_t_1.jpg" alt="图片"></a>
							</li>
							<li>
								<a href="#"><img src="images/c_t_1.jpg" alt="图片"></a>
							</li>
						</ul>
					</div>
					<div class="c_t_con">
						<ul class="c_t_1">
							<li>
								<a href="#"><img src="images/c_t_1.jpg" alt="图片"></a>
							</li>
						</ul>
						<ul class="c_t_2">
							<li>
								<a href="#"><img src="images/c_t_1.jpg" alt="图片"></a>
							</li>
							<li>
								<a href="#"><img src="images/c_t_1.jpg" alt="图片"></a>
							</li>
						</ul>
						<ul class="c_t_3">
							<li>
								<a href="#"><img src="images/c_t_1.jpg" alt="图片"></a>
							</li>
							<li>
								<a href="#"><img src="images/c_t_1.jpg" alt="图片"></a>
							</li>
							<li>
								<a href="#"><img src="images/c_t_1.jpg" alt="图片"></a>
							</li>
						</ul>
						<ul class="c_t_4">
							<li>
								<a href="#"><img src="images/c_t_1.jpg" alt="图片"></a>
							</li>
							<li>
								<a href="#"><img src="images/c_t_1.jpg" alt="图片"></a>
							</li>
							<li>
								<a href="#"><img src="images/c_t_1.jpg" alt="图片"></a>
							</li>
							<li>
								<a href="#"><img src="images/c_t_1.jpg" alt="图片"></a>
							</li>
						</ul>
					</div>
					<div class="c_t_con">
						<ul class="c_t_1">
							<li>
								<a href="#"><img src="images/c_t_1.jpg" alt="图片"></a>
							</li>
						</ul>
						<ul class="c_t_2">
							<li>
								<a href="#"><img src="images/c_t_1.jpg" alt="图片"></a>
							</li>
							<li>
								<a href="#"><img src="images/c_t_1.jpg" alt="图片"></a>
							</li>
						</ul>
						<ul class="c_t_3">
							<li>
								<a href="#"><img src="images/c_t_1.jpg" alt="图片"></a>
							</li>
							<li>
								<a href="#"><img src="images/c_t_1.jpg" alt="图片"></a>
							</li>
							<li>
								<a href="#"><img src="images/c_t_1.jpg" alt="图片"></a>
							</li>
						</ul>
						<ul class="c_t_4">
							<li>
								<a href="#"><img src="images/c_t_1.jpg" alt="图片"></a>
							</li>
							<li>
								<a href="#"><img src="images/c_t_1.jpg" alt="图片"></a>
							</li>
							<li>
								<a href="#"><img src="images/c_t_1.jpg" alt="图片"></a>
							</li>
							<li>
								<a href="#"><img src="images/c_t_1.jpg" alt="图片"></a>
							</li>
						</ul>
					</div>
					<div class="c_t_con">
						<ul class="c_t_1">
							<li>
								<a href="#"><img src="images/c_t_1.jpg" alt="图片"></a>
							</li>
						</ul>
						<ul class="c_t_2">
							<li>
								<a href="#"><img src="images/c_t_1.jpg" alt="图片"></a>
							</li>
							<li>
								<a href="#"><img src="images/c_t_1.jpg" alt="图片"></a>
							</li>
						</ul>
						<ul class="c_t_3">
							<li>
								<a href="#"><img src="images/c_t_1.jpg" alt="图片"></a>
							</li>
							<li>
								<a href="#"><img src="images/c_t_1.jpg" alt="图片"></a>
							</li>
							<li>
								<a href="#"><img src="images/c_t_1.jpg" alt="图片"></a>
							</li>
						</ul>
						<ul class="c_t_4">
							<li>
								<a href="#"><img src="images/c_t_1.jpg" alt="图片"></a>
							</li>
							<li>
								<a href="#"><img src="images/c_t_1.jpg" alt="图片"></a>
							</li>
							<li>
								<a href="#"><img src="images/c_t_1.jpg" alt="图片"></a>
							</li>
							<li>
								<a href="#"><img src="images/c_t_1.jpg" alt="图片"></a>
							</li>
						</ul>
					</div>
					<div class="c_t_con">
						<ul class="c_t_1">
							<li>
								<a href="#"><img src="images/c_t_1.jpg" alt="图片"></a>
							</li>
						</ul>
						<ul class="c_t_2">
							<li>
								<a href="#"><img src="images/c_t_1.jpg" alt="图片"></a>
							</li>
							<li>
								<a href="#"><img src="images/c_t_1.jpg" alt="图片"></a>
							</li>
						</ul>
						<ul class="c_t_3">
							<li>
								<a href="#"><img src="images/c_t_1.jpg" alt="图片"></a>
							</li>
							<li>
								<a href="#"><img src="images/c_t_1.jpg" alt="图片"></a>
							</li>
							<li>
								<a href="#"><img src="images/c_t_1.jpg" alt="图片"></a>
							</li>
						</ul>
						<ul class="c_t_4">
							<li>
								<a href="#"><img src="images/c_t_1.jpg" alt="图片"></a>
							</li>
							<li>
								<a href="#"><img src="images/c_t_1.jpg" alt="图片"></a>
							</li>
							<li>
								<a href="#"><img src="images/c_t_1.jpg" alt="图片"></a>
							</li>
							<li>
								<a href="#"><img src="images/c_t_1.jpg" alt="图片"></a>
							</li>
						</ul>
					</div>
				</div>
				<div class="con3_bottom">
					<ul>
						<li style="background-image: url('images/Top1.png')">
							<div><span>500强</span> <em style=" padding-left:30px;">Top 500</em></div>
						</li>
						<li style="background-image: url('images/Top2.png')">
							<div>
								<span>500强</span>
								<i>Top 500</i>
							</div>
						</li>
						<li style="background-image: url('images/Top3.png')">
							<div>
								<span>500强</span>
								<i>Top 500</i>
							</div>
						</li>
						<li style="background-image: url('images/Top4.png')">
							<div>
								<span>500强</span>
								<i>Top 500</i>
							</div>
						</li>
						<li style="background-image: url('images/Top5.png')">
							<div>
								<span>500强</span>
								<i>Top 500</i>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<script>
			$(function() {
				var con3 = $("#con3_con");
				var li_2 = con3.children(".con3_top").find(".c_t_con");
				var li_1 = con3.children(".con3_bottom").find("li");
				li_2.hide().eq(0).show();
				li_1.click(function() {
					var n = $(this).index();
					li_2.hide().eq(n).show();
				})
			})
		</script>

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