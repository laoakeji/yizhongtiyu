<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="keywords" content="职工文体活动,趣味运动会,趣味运动会策划,趣味运动会项目,职工运动会,水上运动会,体育赛事策划,社区活动策划,城市乐跑策划,健步走活动策划">
		<link rel="stylesheet" type="text/css" href="/Public/Home/css/index.css">
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
					<li class="this"><a href="index.html">首页</a></li>
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

		<!--图片切换-->
		<div class="play" id="play">
			<a href="javascript:" id="next">>><div class="nextImg"><img width="80" height="54" src="" /></div></a>
			<a href="javascript:" id="prev">
				<div class="prevImg"><img width="80" height="54" src="" /></div>
		</a>
		<ol></ol>
		<ul>
			<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
					<a href=><img src="<?php echo ($vo["img_url"]); ?>" /></a>
				</li><?php endforeach; endif; else: echo "" ;endif; ?>
		</ul>
		</div>

		<div class="product">
			<!-- <?php if(is_array($protitle)): $i = 0; $__LIST__ = $protitle;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="picture">
					<a href="<?php echo U('Home/Index/product');?>?type=<?php echo ($vo["id"]); ?>">
						<img src="<?php echo ($vo["index_img"]); ?>">
						<h1><?php echo ($vo["title"]); ?></h1>
						<center><p><?php echo ($vo["desc"]); ?></p></center>
					</a>
				</div><?php endforeach; endif; else: echo "" ;endif; ?> -->
			<div class="picture">
					<a href="<?php echo U('Home/Index/product');?>?type=<?php echo ($protitle[0]["id"]); ?>">
						<img src="<?php echo ($protitle[0]["index_img"]); ?>">
						<h1><?php echo ($protitle[0]["title"]); ?></h1>
						<center>
							<p>
								谁说青春留不住</br>
								带着青春跑起来</br>
							</p>
						</center>
					</a>
				</div>
				<div class="picture">
					<a href="<?php echo U('Home/Index/product');?>?type=<?php echo ($protitle[1]["id"]); ?>">
						<img src="<?php echo ($protitle[1]["index_img"]); ?>">
						<h1><?php echo ($protitle[1]["title"]); ?></h1>
						<center>
							<p>
								运动嘉年华</br>
								欢乐无极限</br>
							</p>
						</center>
					</a>
				</div>
				<div class="picture">
					<a href="<?php echo U('Home/Index/product');?>?type=<?php echo ($protitle[2]["id"]); ?>">
						<img src="<?php echo ($protitle[2]["index_img"]); ?>">
						<h1><?php echo ($protitle[2]["title"]); ?></h1>
						<center>
							<p>
								体育无处不在</br>
								运动无限精彩</br>
							</p>
						</center>
					</a>
				</div>
				<div class="picture">
					<a href="<?php echo U('Home/Index/product');?>?type=<?php echo ($protitle[3]["id"]); ?>">
						<img src="<?php echo ($protitle[3]["index_img"]); ?>">
						<h1><?php echo ($protitle[3]["title"]); ?></h1>
						<center>
							<p>
								您需要的</br>
								就是我们专注的</br>
							</p>
						</center>
					</a>
				</div>
				<div class="picture">
					<a href="<?php echo U('Home/Index/product');?>?type=<?php echo ($protitle[4]["id"]); ?>">
						<img src="<?php echo ($protitle[4]["index_img"]); ?>">
						<h1><?php echo ($protitle[4]["title"]); ?></h1>
						<center>
							<p>
								悦运动 悦快乐</br>
							</p>
						</center>
					</a>
				</div>
				<div class="picture">
					<a href="<?php echo U('Home/Index/product');?>?type=<?php echo ($protitle[5]["id"]); ?>">
						<img src="<?php echo ($protitle[5]["index_img"]); ?>">
						<h1><?php echo ($protitle[5]["title"]); ?></h1>
						<center>
							<p>
								洞察体育力量</br>
								打造营销爆点</br>
							</p>
						</center>
					</a>
				</div>
		</div>

		<script type="text/javascript" src="/Public/Home/scripts/jquery-2.0.3.min.js"></script>
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
					<iframe height=300 width=600 src="<?php echo ($ind["video"]); ?>" frameborder=0 allowfullscreen></iframe>
					
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
						<?php if(is_array($yzser)): $i = 0; $__LIST__ = $yzser;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
								<a href="<?php echo U('Home/Index/service');?>?id=<?php echo ($vo["id"]); ?>">
									<img src="/Public/Home/images/c_r_img<?php echo ($vo["id"]); ?>.png" alt="图标">
									<span><?php echo ($vo["name"]); ?></span>
								</a>
							</li><?php endforeach; endif; else: echo "" ;endif; ?>
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
				<img src="/Public/Home/images/con2_img.png" alt="图片">
				<p><?php echo ($ind["f1"]); ?></p>
				<p class="p1"><?php echo ($ind["f2"]); ?></p>
				<h6><?php echo ($ind["f3"]); ?></h6>
				<h2><?php echo ($ind["f4"]); ?></h2>
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
						<div class="images"><img src="/Public/Home/images/con2_img1.jpg" alt="图片"></div>
						<div class="texts">
							<span>服务快</span>
							<p>15分钟内品牌策划师一对一服务</p>
						</div>
					</a>
				</li>
				<li>
					<a>
						<div class="images"><img src="/Public/Home/images/con2_img2.jpg" alt="图片"></div>
						<div class="texts">
							<span>专业强</span>
							<p>八年专注文体活动行业</p>
						</div>
					</a>
				</li>
				<li>
					<a>
						<div class="images"><img src="/Public/Home/images/con2_img3.jpg" alt="图片"></div>
						<div class="texts">
							<span>创意精</span>
							<p>独家定制</p>
						</div>
					</a>
				</li>
			</ul>
			<div class="con2_2">
				<img src="/Public/Home/images/con2_2_img.png" alt="图片">
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
				<h6><?php echo ($ind["f5"]); ?></h6>
				<h2><?php echo ($ind["f6"]); ?></h2>
				<p><?php echo ($ind["f7"]); ?></p>
			</div>
			<div class="con3_con" id="con3_con">
				<div class="con3_top">
					<div class="c_t_con">
						<ul class="c_t_1">
							<li>
								<a href="#"><img src="<?php echo ($wulist1[0]["image"]); ?>" alt="图片"><?php echo ($wulist[0]["sort"]); ?></a>
							</li>
						</ul>
						<ul class="c_t_2">
							<li>
								<a href="#"><img src="<?php echo ($wulist1[1]["image"]); ?>" alt="图片"></a>
							</li>
							<li>
								<a href="#"><img src="<?php echo ($wulist1[2]["image"]); ?>" alt="图片"></a>
							</li>
						</ul>
						<ul class="c_t_3">
							<li>
								<a href="#"><img src="<?php echo ($wulist1[3]["image"]); ?>" alt="图片"></a>
							</li>
							<li>
								<a href="#"><img src="<?php echo ($wulist1[4]["image"]); ?>" alt="图片"></a>
							</li>
							<li>
								<a href="#"><img src="<?php echo ($wulist1[5]["image"]); ?>" alt="图片"></a>
							</li>
						</ul>
						<ul class="c_t_4">
							<li>
								<a href="#"><img src="<?php echo ($wulist1[6]["image"]); ?>" alt="图片"></a>
							</li>
							<li>
								<a href="#"><img src="<?php echo ($wulist1[7]["image"]); ?>" alt="图片"></a>
							</li>
							<li>
								<a href="#"><img src="<?php echo ($wulist1[8]["image"]); ?>" alt="图片"></a>
							</li>
							<li>
								<a href="#"><img src="<?php echo ($wulist1[9]["image"]); ?>" alt="图片"></a>
							</li>
						</ul>
					</div>
					<div class="c_t_con">
						<ul class="c_t_1">
							<li>
								<a href="#"><img src="<?php echo ($wulist2[0]["image"]); ?>" alt="图片"><?php echo ($wulist[0]["sort"]); ?></a>
							</li>
						</ul>
						<ul class="c_t_2">
							<li>
								<a href="#"><img src="<?php echo ($wulist2[1]["image"]); ?>" alt="图片"></a>
							</li>
							<li>
								<a href="#"><img src="<?php echo ($wulist2[2]["image"]); ?>" alt="图片"></a>
							</li>
						</ul>
						<ul class="c_t_3">
							<li>
								<a href="#"><img src="<?php echo ($wulist2[3]["image"]); ?>" alt="图片"></a>
							</li>
							<li>
								<a href="#"><img src="<?php echo ($wulist2[4]["image"]); ?>" alt="图片"></a>
							</li>
							<li>
								<a href="#"><img src="<?php echo ($wulist2[5]["image"]); ?>" alt="图片"></a>
							</li>
						</ul>
						<ul class="c_t_4">
							<li>
								<a href="#"><img src="<?php echo ($wulist2[6]["image"]); ?>" alt="图片"></a>
							</li>
							<li>
								<a href="#"><img src="<?php echo ($wulist2[7]["image"]); ?>" alt="图片"></a>
							</li>
							<li>
								<a href="#"><img src="<?php echo ($wulist2[8]["image"]); ?>" alt="图片"></a>
							</li>
							<li>
								<a href="#"><img src="<?php echo ($wulist2[9]["image"]); ?>" alt="图片"></a>
							</li>
						</ul>
					</div>
					<div class="c_t_con">
						<ul class="c_t_1">
							<li>
								<a href="#"><img src="<?php echo ($wulist3[0]["image"]); ?>" alt="图片"><?php echo ($wulist[0]["sort"]); ?></a>
							</li>
						</ul>
						<ul class="c_t_2">
							<li>
								<a href="#"><img src="<?php echo ($wulist3[1]["image"]); ?>" alt="图片"></a>
							</li>
							<li>
								<a href="#"><img src="<?php echo ($wulist3[2]["image"]); ?>" alt="图片"></a>
							</li>
						</ul>
						<ul class="c_t_3">
							<li>
								<a href="#"><img src="<?php echo ($wulist3[3]["image"]); ?>" alt="图片"></a>
							</li>
							<li>
								<a href="#"><img src="<?php echo ($wulist3[4]["image"]); ?>" alt="图片"></a>
							</li>
							<li>
								<a href="#"><img src="<?php echo ($wulist3[5]["image"]); ?>" alt="图片"></a>
							</li>
						</ul>
						<ul class="c_t_4">
							<li>
								<a href="#"><img src="<?php echo ($wulist3[6]["image"]); ?>" alt="图片"></a>
							</li>
							<li>
								<a href="#"><img src="<?php echo ($wulist3[7]["image"]); ?>" alt="图片"></a>
							</li>
							<li>
								<a href="#"><img src="<?php echo ($wulist3[8]["image"]); ?>" alt="图片"></a>
							</li>
							<li>
								<a href="#"><img src="<?php echo ($wulist3[9]["image"]); ?>" alt="图片"></a>
							</li>
						</ul>
					</div>
					<div class="c_t_con">
						<ul class="c_t_1">
							<li>
								<a href="#"><img src="<?php echo ($wulist4[0]["image"]); ?>" alt="图片"><?php echo ($wulist[0]["sort"]); ?></a>
							</li>
						</ul>
						<ul class="c_t_2">
							<li>
								<a href="#"><img src="<?php echo ($wulist4[1]["image"]); ?>" alt="图片"></a>
							</li>
							<li>
								<a href="#"><img src="<?php echo ($wulist4[2]["image"]); ?>" alt="图片"></a>
							</li>
						</ul>
						<ul class="c_t_3">
							<li>
								<a href="#"><img src="<?php echo ($wulist4[3]["image"]); ?>" alt="图片"></a>
							</li>
							<li>
								<a href="#"><img src="<?php echo ($wulist4[4]["image"]); ?>" alt="图片"></a>
							</li>
							<li>
								<a href="#"><img src="<?php echo ($wulist4[5]["image"]); ?>" alt="图片"></a>
							</li>
						</ul>
						<ul class="c_t_4">
							<li>
								<a href="#"><img src="<?php echo ($wulist4[6]["image"]); ?>" alt="图片"></a>
							</li>
							<li>
								<a href="#"><img src="<?php echo ($wulist4[7]["image"]); ?>" alt="图片"></a>
							</li>
							<li>
								<a href="#"><img src="<?php echo ($wulist4[8]["image"]); ?>" alt="图片"></a>
							</li>
							<li>
								<a href="#"><img src="<?php echo ($wulist4[9]["image"]); ?>" alt="图片"></a>
							</li>
						</ul>
					</div>
					<div class="c_t_con">
						<ul class="c_t_1">
							<li>
								<a href="#"><img src="<?php echo ($wulist5[0]["image"]); ?>" alt="图片"><?php echo ($wulist[0]["sort"]); ?></a>
							</li>
						</ul>
						<ul class="c_t_2">
							<li>
								<a href="#"><img src="<?php echo ($wulist5[1]["image"]); ?>" alt="图片"></a>
							</li>
							<li>
								<a href="#"><img src="<?php echo ($wulist5[2]["image"]); ?>" alt="图片"></a>
							</li>
						</ul>
						<ul class="c_t_3">
							<li>
								<a href="#"><img src="<?php echo ($wulist5[3]["image"]); ?>" alt="图片"></a>
							</li>
							<li>
								<a href="#"><img src="<?php echo ($wulist5[4]["image"]); ?>" alt="图片"></a>
							</li>
							<li>
								<a href="#"><img src="<?php echo ($wulist5[5]["image"]); ?>" alt="图片"></a>
							</li>
						</ul>
						<ul class="c_t_4">
							<li>
								<a href="#"><img src="<?php echo ($wulist5[6]["image"]); ?>" alt="图片"></a>
							</li>
							<li>
								<a href="#"><img src="<?php echo ($wulist5[7]["image"]); ?>" alt="图片"></a>
							</li>
							<li>
								<a href="#"><img src="<?php echo ($wulist5[8]["image"]); ?>" alt="图片"></a>
							</li>
							<li>
								<a href="#"><img src="<?php echo ($wulist5[9]["image"]); ?>" alt="图片"></a>
							</li>
						</ul>
					</div>
				</div>
				<div class="con3_bottom">
					<ul>
						<li style="background-image: url('/Public/Home/images/Top1.png')">
							<div><span><?php echo ($ind["w1"]); ?></span> <em style=" padding-left:30px;">Top 500</em></div>
						</li>
						<li style="background-image: url('/Public/Home/images/Top2.png')">
							<div>
								<span><?php echo ($ind["w2"]); ?></span>
								<i>Top 500</i>
							</div>
						</li>
						<li style="background-image: url('/Public/Home/images/Top3.png')">
							<div>
								<span><?php echo ($ind["w3"]); ?></span>
								<i>Top 500</i>
							</div>
						</li>
						<li style="background-image: url('/Public/Home/images/Top4.png')">
							<div>
								<span><?php echo ($ind["w4"]); ?></span>
								<i>Top 500</i>
							</div>
						</li>
						<li style="background-image: url('/Public/Home/images/Top5.png')">
							<div>
								<span><?php echo ($ind["w5"]); ?></span>
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
				li_1.mouseenter(function() {
					var n = $(this).index();
					li_2.hide().eq(n).show();
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