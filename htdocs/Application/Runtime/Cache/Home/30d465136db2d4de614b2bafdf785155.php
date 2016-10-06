<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>

    <head>
        <meta charset="utf-8">
        <meta name="keywords" http-equiv="keywords" content="" />
        <meta name="description" http-equiv="description" content="" />
        <link rel="shortcut icon" href=" /favicon.ico" />
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
        <div><img class="banner" src="<?php echo ($imgdlist[1]["img_url"]); ?>"></div>
        <style>
            .chanpin_box h1,
            p {
                color: #FFFFFF;
                font-weight: bolder;
            }
            
            .chanpin_box p {
                color: #FFFFFF;
            }
        </style>

        <script>
            function ddd(obj, sType) {
                var oDiv = document.getElementById(obj);
                if (sType == 'show') {
                    oDiv.style.display = 'block';
                }
                if (sType == 'hide') {
                    oDiv.style.display = 'none';
                }
            }
        </script>
        <div style=" height:364px; width:1096px; margin:80px auto; overflow: hidden;" class="chanpin_box">
            <div style="position:relative; top:91px;;"><img src="/Public/Home/picture/chanpin5.png"></div>

            <div style="position:relative; left:137px; top:-182px;">
                <a><img src="/Public/Home/picture/chanpin2.png" onmouseover="ddd('aa', 'show');" onmouseout="ddd('aa', 'hide');"></a>
                <div style="display:none;" id="aa" onmouseover="ddd('aa', 'show');" onmouseout="ddd('aa', 'hide');">
                    <a href="<?php echo U('Home/Index/product');?>?type=1"><img style="position:absolute; top:0; z-index:2;" src="/Public/Home/picture/chanpin1.png"></a>
                </div>
                <!-- <div style=" position:absolute; left:35px; top:55px; text-align:center;"><a href="<?php echo U('Home/Index/product');?>?type=1"><h1>1&nbsp;<?php echo ($prolist[0]["title"]); ?></h1><p style="font:12px/16px 微软雅黑;">增强团队融合，使员工进一步明确和认<br />同组织目标，形成积极向上<br />的氛围改进内部的沟通</p></a></div> -->
                <div style=" position:absolute; left:35px; top:55px; text-align:center;"><a href="<?php echo U('Home/Index/product');?>?type=1"><h1>1&nbsp;<?php echo ($prolist[0]["title"]); ?></h1><p style="font:12px/16px 微软雅黑;">谁说青春留不住?带着青春放肆跑!来一<br />次说跑就跑的青春之旅吧，给自<br />己一次任性的机会，重新<br/>找回青春岁月里的<br/>冲动活力！</p></a></div>
            </div>

            <div style="position:relative; left:137px; top:-182px;">
                <a><img src="/Public/Home/picture/chanpin2.png" onmouseover="ddd('bb', 'show');" onmouseout="ddd('bb', 'hide');"></a>
                <div style="display:none;" id="bb" onmouseover="ddd('bb', 'show');" onmouseout="ddd('bb', 'hide');">
                    <a href="<?php echo U('Home/Index/product');?>?type=2"><img style="position:absolute; top:0px; z-index:2;" src="/Public/Home/picture/chanpin1.png"></a>
                </div>
                <div style=" position:absolute; left:35px; top:55px; text-align:center;"><a href="<?php echo U('Home/Index/product');?>?type=2"><h1 >2&nbsp;<?php echo ($prolist[1]["title"]); ?></h1><p style="font:12px/16px 微软雅黑;">综合性大型文体娱乐狂欢节庆活动，场<br />面雄伟壮观，内容非富多彩，融<br />体育,文化 ,娱乐三大元素<br/>的综合性狂欢节庆<br/>活动。</p></a></div>
            </div>

            <div style="position:relative; left:274px; top:-455px;">
                <a><img src="/Public/Home/picture/chanpin2.png" onmouseover="ddd('dd', 'show');" onmouseout="ddd('dd', 'hide');"></a>
                <div style="display:none;" id="dd" onmouseover="ddd('dd', 'show');" onmouseout="ddd('dd', 'hide');">
                    <a href="<?php echo U('Home/Index/product');?>?type=3"><img style="position:absolute; top:0px; z-index:2;" src="/Public/Home/picture/chanpin1.png"></a>
                </div>
                <div style=" position:absolute; left:35px; top:55px; text-align:center;"><a href="<?php echo U('Home/Index/product');?>?type=3"><h1 >3&nbsp;<?php echo ($prolist[2]["title"]); ?></h1><p style="font:12px/16px 微软雅黑;">项目新颖，参与性强，气氛活跃，可控<br />性强，形式多变，玩法独特，寓<br />教于娱，赏心悦目的.......<br/>阳光健康的运动新形式.</p></a></div>
            </div>

            <div style="position:relative; left:411px; top:-546px;"><img src="/Public/Home/picture/chanpin4.png">
            </div>
            <div style="position:relative; left:411px; top:-910px;"><img src="/Public/Home/picture/chanpin6.png">
            </div>

            <div style="position:relative; left:548px; top:-1001px;">
                <a><img src="/Public/Home/picture/chanpin2.png" onmouseover="ddd('cc', 'show');" onmouseout="ddd('cc', 'hide');"></a>
                <div style="display:none;" id="cc" onmouseover="ddd('cc', 'show');" onmouseout="ddd('cc', 'hide');">
                    <a href="<?php echo U('Home/Index/product');?>?type=4"><img style="position:absolute; top:0px; z-index:2;" src="/Public/Home/picture/chanpin1.png"></a>
                </div>
                <div style=" position:absolute; left:35px; top:55px; text-align:center;"><a href="<?php echo U('Home/Index/product');?>?type=4"><h1 >4&nbsp;<?php echo ($prolist[3]["title"]); ?></h1><p style="font:12px/16px 微软雅黑;">传统节庆活动，企业员工家庭日，企业<br />相亲会，拓展训练，主题年会，<br />体育旅游......您需要的，<br/>就是我们所专注的。</p></div></div>
    
    
                <div style="position:relative; left:685px; top:-1092px;"><a><img src="/Public/Home/picture/chanpin2.png" onmouseover="ddd('ee', 'show');" onmouseout="ddd('ee', 'hide');"></a>
                    <div style="display:none;" id="ee" onmouseover="ddd('ee', 'show');" onmouseout="ddd('ee', 'hide');">
                        <a href="<?php echo U('Home/Index/product');?>?type=5"><img style="position:absolute; top:0px; z-index:2;" src="/Public/Home/picture/chanpin1.png"></a>
                    </div>
                    <div style=" position:absolute; left:35px; top:55px; text-align:center;"><a href="<?php echo U('Home/Index/product');?>?type=5"><h1 >6&nbsp;<?php echo ($prolist[4]["title"]); ?></h1><p style="font:12px/16px 微软雅黑;">众多的体育营销专业人才，众多体育明<br />星资源，众多的媒体资源，运动<br />营销一举多得，不一样的<br/>主题，最大化的<br />宣传。</p></a></div>
                </div>

                <div style="position:relative; left:685px; top:-1456px;">
                    <a><img src="/Public/Home/picture/chanpin2.png" onmouseover="ddd('ff', 'show');" onmouseout="ddd('ff', 'hide');"></a>
                    <div style="display:none;" id="ff" onmouseover="ddd('ff', 'show');" onmouseout="ddd('ff', 'hide');">
                        <a href="<?php echo U('Home/Index/product');?>?type=6"><img style="position:absolute; top:0px; z-index:2;" src="/Public/Home/picture/chanpin1.png"></a>
                    </div>
                    <div style=" position:absolute; left:35px; top:55px; text-align:center;"><a href="<?php echo U('Home/Index/product');?>?type=6"><h1 >5&nbsp;<?php echo ($prolist[5]["title"]); ?></h1><p style="font:12px/16px 微软雅黑;">专业的赛事策划，专业的裁判服务、<br />专业的运动器材，亿众体育为您提<br />供一站式的传统类体育比赛。</p></a></div>
                </div>

                <div style="position:relative; left:822px; top:-1547px;"><img src="/Public/Home/picture/chanpin3.png">
                </div>

            </div>

            <!--内容开始-->
            <link rel="stylesheet" href="/Public/Home/css/documentation.css" />
            <link rel="stylesheet" href="/Public/Home/css/jquery.classylightbox.min.css" />
            <script src="/Public/Home/scripts/jquery.classylightbox.min.js"></script>
            <div class="">

                <style>
                    .xmh1 {
                        text-align: center;
                        font: 32px "微软雅黑";
                        font-weight: 900;
                        margin-bottom: 50px;
                        float: left;
                        position: relative;
                        top: 120px;
                        right: 300px;
                    }
                </style>

                <div class="width3" style="overflow: hidden;">
                    <div class="block">
                        <div class="clearfix">
                        
                            <a class="thumbnails"><img src="<?php echo ($url["img1"]); ?>" /></a>
                            
                            <?php if(is_array($detail)): $i = 0; $__LIST__ = $detail;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><a data-title="<?php echo ($vo["name"]); ?>" rel="group1" class="thumbnail box" href="<?php echo ($vo["src"]); ?>"><img src="<?php echo ($vo["img1"]); ?>"/><i><img src="<?php echo ($vo["img2"]); ?>"><i></a><?php endforeach; endif; else: echo "" ;endif; ?>
                            
                        </div>
      <script>
$(document).ready(function() {
$('.box').lightbox();
});
</script> 
    </div>
  </div>
</div>
<!--内容结束-->
<!--脚注开始-->
<div class="clear"> </div>
<div class="width1 bottom_top"><a><img onClick="window.scroll(0,0)" src="/Public/Home/picture/btop.png"></a></div>
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