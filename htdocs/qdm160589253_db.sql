/*
Navicat MySQL Data Transfer

Source Server         : yzty
Source Server Version : 50148
Source Host           : qdm160589253.my3w.com:3306
Source Database       : qdm160589253_db

Target Server Type    : MYSQL
Target Server Version : 50148
File Encoding         : 65001

Date: 2016-07-05 10:29:20
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `yz_admin`
-- ----------------------------
DROP TABLE IF EXISTS `yz_admin`;
CREATE TABLE `yz_admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uname` varchar(20) CHARACTER SET gbk DEFAULT NULL,
  `password` varchar(50) CHARACTER SET gbk DEFAULT NULL,
  `c_time` int(11) DEFAULT '1',
  `rank` tinyint(1) DEFAULT '1',
  `status` tinyint(1) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of yz_admin
-- ----------------------------
INSERT INTO `yz_admin` VALUES ('1', 'admin', 'e5e2c931d4a94ecf71e12a88b0b4579b', '1', '1', '1');

-- ----------------------------
-- Table structure for `yz_case_type`
-- ----------------------------
DROP TABLE IF EXISTS `yz_case_type`;
CREATE TABLE `yz_case_type` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `typeid` int(3) NOT NULL,
  `typename` varchar(20) CHARACTER SET gbk NOT NULL,
  `sort` int(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of yz_case_type
-- ----------------------------
INSERT INTO `yz_case_type` VALUES ('1', '0', '趣味运动会', '1');
INSERT INTO `yz_case_type` VALUES ('2', '0', '主题活动', '2');
INSERT INTO `yz_case_type` VALUES ('3', '0', '青春跑系列', '3');
INSERT INTO `yz_case_type` VALUES ('5', '0', '嘉年华', '4');
INSERT INTO `yz_case_type` VALUES ('6', '0', '传统体育', '5');
INSERT INTO `yz_case_type` VALUES ('7', '0', '体育营销', '6');
INSERT INTO `yz_case_type` VALUES ('8', '0', '视频链接', '7');

-- ----------------------------
-- Table structure for `yz_cases`
-- ----------------------------
DROP TABLE IF EXISTS `yz_cases`;
CREATE TABLE `yz_cases` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `type` varchar(15) CHARACTER SET gbk DEFAULT '1' COMMENT '案例类型',
  `title` varchar(50) CHARACTER SET gbk DEFAULT '1' COMMENT '标题',
  `desc` varchar(200) CHARACTER SET gbk DEFAULT '1' COMMENT '摘要',
  `content` varchar(30000) CHARACTER SET gbk DEFAULT '1' COMMENT '正文',
  `image` varchar(50) CHARACTER SET gbk DEFAULT '1' COMMENT '图片',
  `ptime` int(11) DEFAULT '1' COMMENT '发布时间',
  `ctime` int(11) DEFAULT '1' COMMENT '活动时间',
  `address` varchar(100) CHARACTER SET gbk DEFAULT '1' COMMENT '活动地点',
  `number` int(5) DEFAULT '1' COMMENT '参与人数',
  `author` varchar(20) CHARACTER SET gbk DEFAULT '管理员' COMMENT '作者',
  `count` int(6) DEFAULT '1' COMMENT '点击量',
  `typeid` int(5) DEFAULT '1',
  `link` varchar(50) CHARACTER SET gbk DEFAULT '1' COMMENT '链接',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of yz_cases
-- ----------------------------
INSERT INTO `yz_cases` VALUES ('1', '', '2015年中建三局第五届职工趣味运动会', '2013年中建三局职工趣味运动会', '&lt;p style=&quot;padding: 20px 0px 0px 20px; border: 0px; margin-top: 0px; margin-bottom: 0px; list-style: none; outline: none; font-family: 微软雅黑; font-size: 12px; white-space: normal; line-height: 1.5em;&quot;&gt;&lt;span style=&quot;font-size: 14px; line-height: 1.5em;&quot;&gt;&amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp;中建三局工程工程总承包公司第五届职工运动会于2015年4月8日顺利召开，作为活动的总承办方，亿众体育全程策划了包括开幕式，比赛项目，闭幕式等环节，有序的组织保证了运动会的顺利进行，活动中有传统赛事也有趣味性很强的项目，本次趣味运动会缓解了中建三局职工工作之余的疲劳情绪，娱乐了他们的身心健康，为进一步提高工作效率起到一定作，通过举办本次运动会，响应了国家全民健身的号召，增强了企业凝聚力，构建了积极向上的企业形象。&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/ueditor/php/upload/image/20160622/1466589246128204.jpg&quot; title=&quot;1466589246128204.jpg&quot; alt=&quot;20160323161293179317.jpg&quot;/&gt;&lt;/p&gt;', '/Uploads/images/tu.jpg', '1430784000', '1466820000', '1', '1', '亿众体育', '78', '1', '1');
INSERT INTO `yz_cases` VALUES ('32', '', '龙净环保工程有限公司夏季趣味运动会', '1', '&lt;p style=&quot;margin-top: 0px;margin-bottom: 0px;padding: 0px;border: 0px;list-style: none;outline: none;font-stretch: normal;font-size: 12px;line-height: 25px;font-family: 微软雅黑;color: rgb(53, 53, 53);white-space: normal;background-color: rgb(255, 255, 255)&quot;&gt;&lt;span style=&quot;;padding: 0px;border: 0px;list-style: none;outline: none;font-size: 16px;font-weight: bold;color: rgb(165, 0, 0);line-height: 1.5&quot;&gt;2016年6月17日，龙净环保工程有限公司夏季趣味运动会，本次活动由亿众体育全程策划执行。亿众体育专门从事企事业单位的员工活动、趣味运动会、体育赛事策划、企业相亲会、户外活动等，亿众体育相信，在我们的不断努力下，可以给每一个企业带去更好的员工活动体验。夏季水上趣味运动会现已全面上线！&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;margin-top: 0px;margin-bottom: 0px;padding: 0px;border: 0px;list-style: none;outline: none;font-stretch: normal;font-size: 12px;line-height: 25px;font-family: 微软雅黑;color: rgb(53, 53, 53);white-space: normal;background-color: rgb(255, 255, 255)&quot;&gt;&lt;br/&gt;&lt;/p&gt;&lt;p style=&quot;margin-top: 0px;margin-bottom: 0px;padding: 0px;border: 0px;list-style: none;outline: none;font-stretch: normal;font-size: 12px;line-height: 25px;font-family: 微软雅黑;color: rgb(53, 53, 53);white-space: normal;background-color: rgb(255, 255, 255)&quot;&gt;&lt;br/&gt;&lt;/p&gt;&lt;p style=&quot;margin-top: 0px;margin-bottom: 0px;padding: 0px;border: 0px;list-style: none;outline: none;font-stretch: normal;font-size: 12px;line-height: 25px;font-family: 微软雅黑;color: rgb(53, 53, 53);white-space: normal;text-align: center;background-color: rgb(255, 255, 255)&quot;&gt;&lt;span style=&quot;;padding: 0px;border: 0px;list-style: none;outline: none;font-size: 16px;font-weight: bold;color: rgb(165, 0, 0);&quot;&gt;&lt;img src=&quot;/ueditor/php/upload/image/20160630/1467267264835468.jpg&quot; alt=&quot;&quot;/&gt;&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;', '/Uploads/images/201606301432585774bd1ac28d4.png', '1466380800', '1467267352', '1', '1', '亿众体育', '3', '1', '1');
INSERT INTO `yz_cases` VALUES ('17', '', '2009年交通银行金融服务中心趣味嘉年华', '1', '&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p class=&quot;clear&quot; style=&quot;margin-top: 0px; margin-bottom: 0px; padding: 0px; border: 0px; list-style: none; outline: none; width: 1160px; height: 1px; line-height: 25px; overflow: hidden; clear: both; font-stretch: normal; font-size: 12px; font-family: 微软雅黑; color: rgb(53, 53, 53); white-space: normal;&quot;&gt;&lt;br/&gt;&lt;/p&gt;&lt;p style=&quot;margin-top: 0px; margin-bottom: 0px; padding: 0px; border: 0px; list-style: none; outline: none; font-stretch: normal; font-size: 12px; line-height: 25px; font-family: 微软雅黑; color: rgb(53, 53, 53); white-space: normal;&quot;&gt;为了欢庆建国60周年，营造节日氛围，交通银行金融服务中心拟举办第一届职工趣味运动会。本次活动共有6支代表队参加，参加人数近1500人。各支代表队参加了1陆地龙舟、2财源滚滚、3障碍接力、4拔河、5乾坤挪移、6奥运向前冲、7运转乾坤等9个趣味集体项目。1一分钟投篮、2趣味飞镖、3趣味射门等3个个人项目。运动会从参与性、娱乐性、趣味性、团队性上都得到了很好的体现.&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/ueditor/php/upload/image/20160627/1467003519685409.jpg&quot; title=&quot;1467003519685409.jpg&quot;/&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/ueditor/php/upload/image/20160627/1467003519545462.jpg&quot; title=&quot;1467003519545462.jpg&quot;/&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/ueditor/php/upload/image/20160627/1467003519131287.jpg&quot; title=&quot;1467003519131287.jpg&quot;/&gt;&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;', '/Uploads/images/201606271257495770b24d2849e.jpg', '1465084800', '1466820000', '1', '1', '管理员', '10', '1', '1');
INSERT INTO `yz_cases` VALUES ('16', '', '2008年中信银行武汉分行职工运动会', '1', '&lt;ul class=&quot;service_ground_cons list-paddingleft-2&quot; style=&quot;list-style-type: none;&quot;&gt;&lt;li&gt;&lt;p&gt;时间：2008-04-25&lt;/p&gt;&lt;/li&gt;&lt;li&gt;&lt;p&gt;地点：汉口文化体育中心&lt;/p&gt;&lt;/li&gt;&lt;li&gt;&lt;p&gt;挑战人数：700人&lt;/p&gt;&lt;/li&gt;&lt;/ul&gt;&lt;p class=&quot;clear&quot; style=&quot;margin-top: 0px; margin-bottom: 0px; padding: 0px; border: 0px; list-style: none; outline: none; width: 1160px; height: 1px; line-height: 25px; overflow: hidden; clear: both; font-stretch: normal; font-size: 12px; font-family: 微软雅黑; color: rgb(53, 53, 53); white-space: normal;&quot;&gt;&lt;br/&gt;&lt;/p&gt;&lt;p style=&quot;margin-top: 0px; margin-bottom: 0px; padding: 0px; border: 0px; list-style: none; outline: none; font-stretch: normal; font-size: 12px; line-height: 25px; font-family: 微软雅黑; color: rgb(53, 53, 53); white-space: normal;&quot;&gt;由武汉亿众体育文化传播有限公司全程策划、执行的中信银行武汉分行第四届职工趣味运动会于2008年4月12日在汉口文化体育中心举行。本届趣味运动会有中信银行武汉分行各支行，共20支代表队参加，参赛运动员近700人，从规模、效果上看为历届比赛规模最大，参赛运动员最多、效果最好的的一次运动会，各代表队参加了14个集体项目和14个个人项目和三个娱乐项目。&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/ueditor/php/upload/image/20160627/1467003349646524.jpg&quot; title=&quot;1467003349646524.jpg&quot;/&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/ueditor/php/upload/image/20160627/1467003349512113.jpg&quot; title=&quot;1467003349512113.jpg&quot;/&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/ueditor/php/upload/image/20160627/1467003350364416.jpg&quot; title=&quot;1467003350364416.jpg&quot;/&gt;&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;', '/Uploads/images/201606271254305770b18678eed.jpg', '1436486400', '1466820000', '1', '1', '管理员 ', '9', '1', '1');
INSERT INTO `yz_cases` VALUES ('15', '', '2008年交通银行湖北省分行职工运动会', '1', '&lt;p&gt;&lt;span style=&quot;color: rgb(53, 53, 53); font-family: 微软雅黑; font-size: 12px; line-height: 25px; background-color: rgb(243, 243, 243);&quot;&gt;本届趣味运动会共16支代表队参加，参赛运动员近1000人，各代表队参加了1、齐心协力走、2、同舟共济、3、独木桥过河、4、男子4X100米接力、5、女子4X100米接力、6、奥运福娃接力、7、拔河、8、男子篮球联赛等8个趣味项目，男子100米、女子60、铅球、跳远、掷沙袋等田径项目，还有趣味高尔夫、足球射门、飞镖等娱乐项目。运动会从参与性、娱乐性、趣味性、团队性上都得到了很好的体现，赛事在亿众体育的全程策划及组织下取得圆满成功。&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/ueditor/php/upload/image/20160624/1466761272674823.jpg&quot; title=&quot;1466761272674823.jpg&quot;/&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/ueditor/php/upload/image/20160624/1466761272982649.jpg&quot; title=&quot;1466761272982649.jpg&quot;/&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/ueditor/php/upload/image/20160624/1466761272569161.jpg&quot; title=&quot;1466761272569161.jpg&quot;/&gt;&lt;/p&gt;&lt;p&gt;&lt;span style=&quot;color: rgb(53, 53, 53); font-family: 微软雅黑; font-size: 12px; line-height: 25px; background-color: rgb(243, 243, 243);&quot;&gt;&lt;/span&gt;&lt;br/&gt;&lt;/p&gt;', '/Uploads/images/20160624174014576cfffe09f94.jpg', '1467590400', '1466820000', '1', '1', '管理员', '7', '1', '1');
INSERT INTO `yz_cases` VALUES ('18', '', '2009年兴业银行武汉分行职工趣味运动会', '1', '&lt;ul class=&quot;service_ground_cons list-paddingleft-2&quot; style=&quot;list-style-type: none;&quot;&gt;&lt;li&gt;&lt;p&gt;时间：2009-10-24&lt;/p&gt;&lt;/li&gt;&lt;li&gt;&lt;p&gt;地点：武汉体育学院&lt;/p&gt;&lt;/li&gt;&lt;li&gt;&lt;p&gt;挑战人数：900人&lt;/p&gt;&lt;/li&gt;&lt;/ul&gt;&lt;p class=&quot;clear&quot; style=&quot;margin-top: 0px; margin-bottom: 0px; padding: 0px; border: 0px; list-style: none; outline: none; width: 1160px; height: 1px; line-height: 25px; overflow: hidden; clear: both; font-stretch: normal; font-size: 12px; font-family: 微软雅黑; color: rgb(53, 53, 53); white-space: normal;&quot;&gt;&lt;br/&gt;&lt;/p&gt;&lt;p style=&quot;margin-top: 0px; margin-bottom: 0px; padding: 0px; border: 0px; list-style: none; outline: none; font-stretch: normal; font-size: 12px; line-height: 25px; font-family: 微软雅黑; color: rgb(53, 53, 53); white-space: normal;&quot;&gt;武汉亿众体育总承办兴业银行武汉分行职工趣味运动会&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/ueditor/php/upload/image/20160627/1467003674802377.jpg&quot; title=&quot;1467003674802377.jpg&quot;/&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/ueditor/php/upload/image/20160627/1467003674479805.jpg&quot; title=&quot;1467003674479805.jpg&quot;/&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/ueditor/php/upload/image/20160627/1467003674716637.jpg&quot; title=&quot;1467003674716637.jpg&quot;/&gt;&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;', '/Uploads/images/201606271300435770b2fb6ec98.jpg', '1467590400', '1466820000', '1', '1', '管理员', '3', '1', '1');
INSERT INTO `yz_cases` VALUES ('19', '', '2009年烽火科技趣味运动会', '1', '&lt;p&gt;&lt;img src=&quot;/ueditor/php/upload/image/20160627/1467003773182923.jpg&quot; title=&quot;1467003773182923.jpg&quot;/&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/ueditor/php/upload/image/20160627/1467003773405596.jpg&quot; title=&quot;1467003773405596.jpg&quot;/&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/ueditor/php/upload/image/20160627/1467003773914570.jpg&quot; title=&quot;1467003773914570.jpg&quot;/&gt;&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;', '/Uploads/images/201606271302315770b367ac551.jpg', '1467590400', '1466820000', '1', '1', '管理员 ', '2', '1', '1');
INSERT INTO `yz_cases` VALUES ('20', '', '2010年中南电力设计院职工趣味运动会', '1', '&lt;ul class=&quot;service_ground_cons list-paddingleft-2&quot; style=&quot;list-style-type: none;&quot;&gt;&lt;li&gt;&lt;p&gt;时间：2010-11-13&lt;/p&gt;&lt;/li&gt;&lt;li&gt;&lt;p&gt;地点：武汉体育学院&lt;/p&gt;&lt;/li&gt;&lt;li&gt;&lt;p&gt;挑战人数：900人&lt;/p&gt;&lt;/li&gt;&lt;/ul&gt;&lt;p class=&quot;clear&quot; style=&quot;margin-top: 0px; margin-bottom: 0px; padding: 0px; border: 0px; list-style: none; outline: none; width: 1160px; height: 1px; line-height: 25px; overflow: hidden; clear: both; font-stretch: normal; font-size: 12px; font-family: 微软雅黑; color: rgb(53, 53, 53); white-space: normal;&quot;&gt;&lt;br/&gt;&lt;/p&gt;&lt;p style=&quot;margin-top: 0px; margin-bottom: 0px; padding: 0px; border: 0px; list-style: none; outline: none; font-stretch: normal; font-size: 12px; line-height: 25px; font-family: 微软雅黑; color: rgb(53, 53, 53); white-space: normal;&quot;&gt;武汉亿众体育总承办中国电力工程顾问集团中南电力设计院职工趣味运动会。&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/ueditor/php/upload/image/20160627/1467003871338334.jpg&quot; title=&quot;1467003871338334.jpg&quot;/&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/ueditor/php/upload/image/20160627/1467003873755658.jpg&quot; title=&quot;1467003873755658.jpg&quot;/&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/ueditor/php/upload/image/20160627/1467003873110984.jpg&quot; title=&quot;1467003873110984.jpg&quot;/&gt;&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;', '/Uploads/images/201606271309065770b4f280d46.png', '1467590400', '1466820000', '1', '1', '管理员', '10', '1', '1');
INSERT INTO `yz_cases` VALUES ('21', '', '2016年璟丰科技“极限探宝”主题年会', '1', '&lt;ul class=&quot;service_ground_cons list-paddingleft-2&quot; style=&quot;list-style-type: none;&quot;&gt;&lt;li&gt;&lt;p&gt;时间：2016-02-02&lt;/p&gt;&lt;/li&gt;&lt;li&gt;&lt;p&gt;地点：江夏中州府&lt;/p&gt;&lt;/li&gt;&lt;li&gt;&lt;p&gt;挑战人数：51人&lt;/p&gt;&lt;/li&gt;&lt;/ul&gt;&lt;p class=&quot;clear&quot; style=&quot;margin-top: 0px; margin-bottom: 0px; padding: 0px; border: 0px; list-style: none; outline: none; width: 1160px; height: 1px; line-height: 25px; overflow: hidden; clear: both; font-stretch: normal; font-size: 12px; font-family: 微软雅黑; color: rgb(53, 53, 53); white-space: normal;&quot;&gt;&lt;br/&gt;&lt;/p&gt;&lt;p style=&quot;margin-top: 0px; margin-bottom: 0px; padding: 0px; border: 0px; list-style: none; outline: none; font-stretch: normal; font-size: 12px; line-height: 25px; font-family: 微软雅黑; color: rgb(53, 53, 53); white-space: normal;&quot;&gt;亿众体育承办2016年璟丰科技有限公司“极限探宝”主题年会。&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/ueditor/php/upload/image/20160628/1467080022449834.jpg&quot; title=&quot;1467080022449834.jpg&quot;/&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/ueditor/php/upload/image/20160628/1467080022178990.jpg&quot; title=&quot;1467080022178990.jpg&quot;/&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/ueditor/php/upload/image/20160628/1467080023141244.jpg&quot; title=&quot;1467080023141244.jpg&quot;/&gt;&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;', '/Uploads/images/201606281013155771dd3b37c75.jpg', '1467590400', '1466820000', '1', '1', '超级管理员  ', '5', '1', '1');
INSERT INTO `yz_cases` VALUES ('22', '', '武汉三源“快乐向前冲”', '1', '&lt;ul class=&quot;service_ground_cons list-paddingleft-2&quot; style=&quot;list-style-type: none;&quot;&gt;&lt;li&gt;&lt;p&gt;时间：2012-02-01&lt;/p&gt;&lt;/li&gt;&lt;li&gt;&lt;p&gt;地点：&lt;/p&gt;&lt;/li&gt;&lt;li&gt;&lt;p&gt;挑战人数：400人&lt;/p&gt;&lt;/li&gt;&lt;/ul&gt;&lt;p class=&quot;clear&quot; style=&quot;margin-top: 0px; margin-bottom: 0px; padding: 0px; border: 0px; list-style: none; outline: none; width: 1160px; height: 1px; line-height: 25px; overflow: hidden; clear: both; font-stretch: normal; font-size: 12px; font-family: 微软雅黑; color: rgb(53, 53, 53); white-space: normal;&quot;&gt;&lt;br/&gt;&lt;/p&gt;&lt;p style=&quot;margin-top: 0px; margin-bottom: 0px; padding: 0px; border: 0px; list-style: none; outline: none; font-stretch: normal; font-size: 12px; line-height: 25px; font-family: 微软雅黑; color: rgb(53, 53, 53); white-space: normal;&quot;&gt;武汉三源“快乐向前冲”团队竞技赛由武汉亿众体育文化传播有限公司全程策划与执行，本次活动本着我我运动，我快乐，我健康的原则。着力培养员工自信，自强不息，乐观向上的意志。通过此次比赛的平台相互交流，娱乐身心，促进员工积极参与各类体育健身活动，在繁忙的工作之余使员工的身体得到很好的锻炼。赛事的成功举办体现了三源人的积极响应全民健身号召。真正从自己出发，共建和谐社会的良好意愿。&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/ueditor/php/upload/image/20160628/1467080232835419.jpg&quot; title=&quot;1467080232835419.jpg&quot;/&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/ueditor/php/upload/image/20160628/1467080232244582.jpg&quot; title=&quot;1467080232244582.jpg&quot;/&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/ueditor/php/upload/image/20160628/1467080232328478.jpg&quot; title=&quot;1467080232328478.jpg&quot;/&gt;&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;', '/Uploads/images/201606281015175771ddb5604e0.jpg', '1467590400', '1466820000', '1', '1', '管理员', '3', '1', '1');
INSERT INTO `yz_cases` VALUES ('24', '', '2015年民生银行网球赛', '1', '&lt;ul class=&quot;service_ground_cons list-paddingleft-2&quot; style=&quot;list-style-type: none;&quot;&gt;&lt;li&gt;&lt;p&gt;时间：2016-06-06&lt;/p&gt;&lt;/li&gt;&lt;li&gt;&lt;p&gt;地点：武汉体育学院&lt;/p&gt;&lt;/li&gt;&lt;li&gt;&lt;p&gt;挑战人数：300人&lt;/p&gt;&lt;/li&gt;&lt;/ul&gt;&lt;p class=&quot;clear&quot; style=&quot;margin-top: 0px; margin-bottom: 0px; padding: 0px; border: 0px; list-style: none; outline: none; width: 1160px; height: 1px; line-height: 25px; overflow: hidden; clear: both; font-stretch: normal; font-size: 12px; font-family: 微软雅黑; color: rgb(53, 53, 53); white-space: normal;&quot;&gt;&lt;br/&gt;&lt;/p&gt;&lt;p style=&quot;margin-top: 0px; margin-bottom: 0px; padding: 0px; border: 0px; list-style: none; outline: none; font-stretch: normal; font-size: 12px; line-height: 25px; font-family: 微软雅黑; color: rgb(53, 53, 53); white-space: normal;&quot;&gt;亿众体育总承办2015年民生信用卡网球俱乐部邀请赛武汉站活动。&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/ueditor/php/upload/image/20160628/1467080582429647.jpg&quot; title=&quot;1467080582429647.jpg&quot;/&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/ueditor/php/upload/image/20160628/1467080582536847.jpg&quot; title=&quot;1467080582536847.jpg&quot;/&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/ueditor/php/upload/image/20160628/1467080582691941.jpg&quot; title=&quot;1467080582691941.jpg&quot;/&gt;&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;', '/Uploads/images/201606281024085771dfc82e8ef.png', '1467590400', '1466820000', '1', '1', '管理员', '3', '1', '1');
INSERT INTO `yz_cases` VALUES ('25', '', '2016武汉市城市建设投资开发集团有限公司', '1', '&lt;ul class=&quot;service_ground_cons list-paddingleft-2&quot; style=&quot;list-style-type: none;&quot;&gt;&lt;li&gt;&lt;p&gt;时间：2016-05-28&lt;/p&gt;&lt;/li&gt;&lt;li&gt;&lt;p&gt;地点：宗关水厂职工活动中心&lt;/p&gt;&lt;/li&gt;&lt;li&gt;&lt;p&gt;挑战人数：200人&lt;/p&gt;&lt;/li&gt;&lt;/ul&gt;&lt;p class=&quot;clear&quot; style=&quot;margin-top: 0px; margin-bottom: 0px; padding: 0px; border: 0px; list-style: none; outline: none; width: 1160px; height: 1px; line-height: 25px; overflow: hidden; clear: both; font-stretch: normal; font-size: 12px; font-family: 微软雅黑; color: rgb(53, 53, 53); white-space: normal;&quot;&gt;&lt;br/&gt;&lt;/p&gt;&lt;p style=&quot;margin-top: 0px; margin-bottom: 0px; padding: 0px; border: 0px; list-style: none; outline: none; font-stretch: normal; font-size: 12px; line-height: 25px; font-family: 微软雅黑; color: rgb(53, 53, 53); white-space: normal;&quot;&gt;2016年5月28日，武汉市城市建设投资开发集团有限公司职工乒羽对抗赛，比赛全程由亿众体育策划执行。亿众体育专门从事企事业单位的员工活动、趣味运动会、体育赛事策划、企业相亲会、户外活动等，亿众体育相信，在我们的不断努力下，可以给每一个企业带去更好的员工活动体验。夏季水上趣味运动会现已全面上线！&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/ueditor/php/upload/image/20160628/1467080729178788.jpg&quot; title=&quot;1467080729178788.jpg&quot; alt=&quot;20160531145959405940.jpg&quot;/&gt;&lt;/p&gt;', '/Uploads/images/201606281025135771e00924fc3.jpg', '1467590400', '1466820000', '1', '1', '管理员', '6', '1', '1');
INSERT INTO `yz_cases` VALUES ('26', '', '龙净环保工程有限公司夏季趣味运动会', '1', '&lt;p&gt;&lt;span class=&quot;bdsharebuttonbox bdshare-button-style0-16&quot; style=&quot;;padding: 0px;border: 0px;list-style: none;outline: none;zoom: 1;float: right&quot;&gt;&lt;a href=&quot;http://www.yizhongsports.com/?read/166.html#&quot; style=&quot;margin: 6px 6px 6px 0px;padding: 0px 0px 0px 17px;border: 0px;list-style: none;outline: none;color: rgb(51, 51, 51);float: left;line-height: 16px;height: 16px;cursor: pointer;background-position: 0px 0px;background-repeat: no-repeat&quot;&gt;&lt;/a&gt;&lt;a href=&quot;http://www.yizhongsports.com/?read/166.html#&quot; title=&quot;分享到QQ空间&quot; style=&quot;margin: 6px 6px 6px 0px;padding: 0px 0px 0px 17px;border: 0px;list-style: none;outline: none;color: rgb(53, 53, 53);float: left;line-height: 16px;height: 16px;cursor: pointer;background-position: 0px -52px;background-repeat: no-repeat&quot;&gt;&lt;/a&gt;&lt;a href=&quot;http://www.yizhongsports.com/?read/166.html#&quot; title=&quot;分享到新浪微博&quot; style=&quot;margin: 6px 6px 6px 0px;padding: 0px 0px 0px 17px;border: 0px;list-style: none;outline: none;color: rgb(53, 53, 53);float: left;line-height: 16px;height: 16px;cursor: pointer;background-position: 0px -104px;background-repeat: no-repeat&quot;&gt;&lt;/a&gt;&lt;a href=&quot;http://www.yizhongsports.com/?read/166.html#&quot; title=&quot;分享到腾讯微博&quot; style=&quot;margin: 6px 6px 6px 0px;padding: 0px 0px 0px 17px;border: 0px;list-style: none;outline: none;color: rgb(53, 53, 53);float: left;line-height: 16px;height: 16px;cursor: pointer;background-position: 0px -260px;background-repeat: no-repeat&quot;&gt;&lt;/a&gt;&lt;a href=&quot;http://www.yizhongsports.com/?read/166.html#&quot; title=&quot;分享到人人网&quot; style=&quot;margin: 6px 6px 6px 0px;padding: 0px 0px 0px 17px;border: 0px;list-style: none;outline: none;color: rgb(53, 53, 53);float: left;line-height: 16px;height: 16px;cursor: pointer;background-position: 0px -208px;background-repeat: no-repeat&quot;&gt;&lt;/a&gt;&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;margin-top: 0px;margin-bottom: 0px;padding: 0px;border: 0px;list-style: none;outline: none;font-stretch: normal;line-height: 25px&quot;&gt;&lt;span style=&quot;;padding: 0px;border: 0px;list-style: none;outline: none;font-size: 16px;font-weight: bold;color: rgb(165, 0, 0);line-height: 1.5&quot;&gt;2016年6月17日，龙净环保工程有限公司夏季趣味运动会，本次活动由亿众体育全程策划执行。亿众体育专门从事企事业单位的员工活动、趣味运动会、体育赛事策划、企业相亲会、户外活动等，亿众体育相信，在我们的不断努力下，可以给每一个企业带去更好的员工活动体验。夏季水上趣味运动会现已全面上线！&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;margin-top: 0px;margin-bottom: 0px;padding: 0px;border: 0px;list-style: none;outline: none;font-stretch: normal;line-height: 25px;text-align: center&quot;&gt;&lt;span style=&quot;;padding: 0px;border: 0px;list-style: none;outline: none;font-size: 16px;font-weight: bold;color: rgb(165, 0, 0);&quot;&gt;&lt;img src=&quot;/ueditor/php/upload/image/20160629/1467182703182090.jpg&quot; alt=&quot;&quot; width=&quot;690&quot; height=&quot;442&quot;/&gt;&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;', '/Uploads/images/201606301416115774b92b3f78b.jpg', '1466467200', '1467182847', '1', '1', '亿众体育', '5', '1', '1');
INSERT INTO `yz_cases` VALUES ('30', '', '视频资料', '1', '', '/Uploads/images/201606291747395773993b8221a.jpg', '1467590400', '1467193739', '1', '1', '管理员', '8', '1', '1');

-- ----------------------------
-- Table structure for `yz_contact_info`
-- ----------------------------
DROP TABLE IF EXISTS `yz_contact_info`;
CREATE TABLE `yz_contact_info` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `tel_yw` varchar(20) CHARACTER SET gbk DEFAULT NULL,
  `tel_ch` varchar(20) CHARACTER SET gbk DEFAULT NULL,
  `tel_mj` varchar(20) CHARACTER SET gbk DEFAULT NULL,
  `tel_kf` varchar(11) CHARACTER SET gbk DEFAULT NULL,
  `email` varchar(50) CHARACTER SET gbk DEFAULT NULL,
  `address` varchar(100) CHARACTER SET gbk DEFAULT NULL,
  `road_self` varchar(100) CHARACTER SET gbk DEFAULT NULL,
  `road_bus1` varchar(100) CHARACTER SET gbk DEFAULT NULL,
  `road_bus2` varchar(100) CHARACTER SET gbk DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of yz_contact_info
-- ----------------------------
INSERT INTO `yz_contact_info` VALUES ('1', '0371-63395262', '0371-56639532', '0371-63395262', '18239915800', '18239915800@163.com', '郑州市郑东新区商务外环路09号新芒果大厦708室', '郑州市郑东新区商务外环路09号新芒果大厦708室', '乘坐公交23路 186路 265路 Y813路  站台:众意西路黄河东路', '乘坐公交G701路 G702路 B19路  站台:商务内环路众意西路');

-- ----------------------------
-- Table structure for `yz_contactus_back`
-- ----------------------------
DROP TABLE IF EXISTS `yz_contactus_back`;
CREATE TABLE `yz_contactus_back` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(10) CHARACTER SET gbk DEFAULT NULL,
  `tel` int(11) DEFAULT NULL,
  `email` varchar(50) CHARACTER SET gbk DEFAULT NULL,
  `gsname` varchar(50) CHARACTER SET gbk DEFAULT NULL,
  `gsad` varchar(50) CHARACTER SET gbk DEFAULT NULL,
  `city` varchar(50) CHARACTER SET gbk DEFAULT NULL,
  `desc` varchar(500) CHARACTER SET gbk DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of yz_contactus_back
-- ----------------------------
INSERT INTO `yz_contactus_back` VALUES ('11', '宋贺林', '2147483647', 'songhl@pcitc.com', '石化盈科信息技术有限公司', '北京市朝阳区朝外大街丰联广场', '北京', 'HTML5让Web程序员的工作变得异常简单，不是吗？不仅如此，我们得到的不仅仅只有一个“日期”类型的input，还有一系列相关的日期、时间参数让我们自定义。我们虽然称之为“日期”类型，但这里的type实际上是可以为“date”、“week”、“month”、“time”、“datetime”和“datetime-local”。下面我将用实例加图文的方式向大家演示各种type的外观表现。');

-- ----------------------------
-- Table structure for `yz_copyright`
-- ----------------------------
DROP TABLE IF EXISTS `yz_copyright`;
CREATE TABLE `yz_copyright` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tel` varchar(50) CHARACTER SET gbk DEFAULT NULL,
  `address` varchar(100) CHARACTER SET gbk DEFAULT NULL,
  `copy` varchar(100) CHARACTER SET gbk DEFAULT NULL,
  `tech` varchar(100) CHARACTER SET gbk DEFAULT NULL,
  `url` varchar(100) CHARACTER SET gbk DEFAULT NULL,
  `img_url` varchar(50) CHARACTER SET gbk DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of yz_copyright
-- ----------------------------
INSERT INTO `yz_copyright` VALUES ('1', '0371-63395262', '郑州市郑东新区商务外环路09号新芒果大厦708室', '2016 河南亿盛众联体育文化有限公司', '河南开天网络科技有限公司', 'http://ktwlkj.com//', null);

-- ----------------------------
-- Table structure for `yz_footlink`
-- ----------------------------
DROP TABLE IF EXISTS `yz_footlink`;
CREATE TABLE `yz_footlink` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(10) CHARACTER SET gbk DEFAULT NULL,
  `text` varchar(10) CHARACTER SET gbk DEFAULT NULL,
  `url` varchar(100) CHARACTER SET gbk DEFAULT NULL,
  `time` int(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of yz_footlink
-- ----------------------------

-- ----------------------------
-- Table structure for `yz_img`
-- ----------------------------
DROP TABLE IF EXISTS `yz_img`;
CREATE TABLE `yz_img` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `img_url` varchar(200) CHARACTER SET gbk DEFAULT NULL,
  `link` varchar(200) CHARACTER SET gbk DEFAULT NULL,
  `title` varchar(200) CHARACTER SET gbk DEFAULT NULL,
  `sort` tinyint(3) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `c_time` int(11) DEFAULT NULL,
  `type` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of yz_img
-- ----------------------------
INSERT INTO `yz_img` VALUES ('1', '/Uploads/images/2016062912031757734885aae4f.jpg', '', '图1', '1', '1', null, '1');
INSERT INTO `yz_img` VALUES ('2', '/Uploads/images/20160624114739576cad5b87b47.jpg', '', '图2', '2', '1', null, '1');
INSERT INTO `yz_img` VALUES ('3', '/Uploads/images/20160629152345577377813faf1.jpg', '', '图3', '3', '1', null, '1');
INSERT INTO `yz_img` VALUES ('4', '/Uploads/images/banner_4.jpg', '', '图4', '4', '1', null, '1');
INSERT INTO `yz_img` VALUES ('5', '/Uploads/images/20160629152406577377966469c.jpg', '', '图5', '5', '1', null, '1');
INSERT INTO `yz_img` VALUES ('6', '/Uploads/images/20160629152256577377506dfbd.jpg', '', '图6', '6', '1', null, '1');
INSERT INTO `yz_img` VALUES ('8', '/Uploads/images/20160625152246576e3146bdcb9.jpg', '', 'tu', '1', '1', '1466839368', '2');
INSERT INTO `yz_img` VALUES ('9', '/Uploads/images/20160625152453576e31c566ed2.jpg', '', 'tu', '1', '1', '1466839390', '3');
INSERT INTO `yz_img` VALUES ('11', '/Uploads/images/20160625152506576e31d275e4b.jpg', '', 'tu', '1', '1', '1466839430', '4');
INSERT INTO `yz_img` VALUES ('12', '/Uploads/images/20160625152517576e31ddcbff2.jpg', '', 'tu', '1', '1', '1466839442', '5');
INSERT INTO `yz_img` VALUES ('13', '/Uploads/images/20160625152528576e31e847094.jpg', '', 'tu', '1', '1', '1466839461', '6');

-- ----------------------------
-- Table structure for `yz_index`
-- ----------------------------
DROP TABLE IF EXISTS `yz_index`;
CREATE TABLE `yz_index` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `video` varchar(100) CHARACTER SET gbk DEFAULT NULL,
  `f1` varchar(100) CHARACTER SET gbk DEFAULT NULL,
  `f2` varchar(100) CHARACTER SET gbk DEFAULT NULL,
  `f3` varchar(100) CHARACTER SET gbk DEFAULT NULL,
  `f4` varchar(100) CHARACTER SET gbk DEFAULT NULL,
  `f5` varchar(100) CHARACTER SET gbk DEFAULT NULL,
  `f6` varchar(100) CHARACTER SET gbk DEFAULT NULL,
  `f7` varchar(100) CHARACTER SET gbk DEFAULT NULL,
  `w1` varchar(20) DEFAULT NULL,
  `w2` varchar(20) DEFAULT NULL,
  `w3` varchar(20) DEFAULT NULL,
  `w4` varchar(20) DEFAULT NULL,
  `w5` varchar(20) DEFAULT NULL,
  `tel1` varchar(20) DEFAULT NULL,
  `tel2` varchar(20) DEFAULT NULL,
  `v1` varchar(100) DEFAULT NULL,
  `v2` varchar(100) DEFAULT NULL,
  `v3` varchar(100) DEFAULT NULL,
  `v4` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of yz_index
-- ----------------------------
INSERT INTO `yz_index` VALUES ('1', 'http://player.youku.com/player.php/sid/XMTQyMzYyMzU3Ng==/v.swf', '八年行业积淀，汇聚精英； 追求细节完美，品质制胜', '拒绝平庸随便，独特品味； 整合产业资源，整体支撑', 'Please believe in the power of the brand', '请相信品牌的力量 ', 'HAND IN HAND TO ENJOY SPORTS', '携手亿众 享受运动            ', '', '世界500强 ', '金融行业', '地产/汽车', '企业/政府', '其他', '0371-63395262', '18239915800', 'http://player.youku.com/player.php/sid/XOTYxNzQyNDY0/v.swf', 'http://player.youku.com/player.php/sid/XOTYxNzQyNDY0/v.swf', 'http://player.youku.com/player.php/sid/XOTYxNzQyNDY0/v.swf', '');

-- ----------------------------
-- Table structure for `yz_intro_img`
-- ----------------------------
DROP TABLE IF EXISTS `yz_intro_img`;
CREATE TABLE `yz_intro_img` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `image` varchar(100) CHARACTER SET gbk DEFAULT NULL,
  `desc` varchar(100) CHARACTER SET gbk DEFAULT NULL,
  `type` int(2) DEFAULT NULL,
  `typename` varchar(5) CHARACTER SET gbk DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of yz_intro_img
-- ----------------------------

-- ----------------------------
-- Table structure for `yz_intro_intro`
-- ----------------------------
DROP TABLE IF EXISTS `yz_intro_intro`;
CREATE TABLE `yz_intro_intro` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `content` varchar(10000) CHARACTER SET gbk DEFAULT NULL,
  `type` int(2) DEFAULT '1',
  `typename` varchar(10) CHARACTER SET gbk DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of yz_intro_intro
-- ----------------------------
INSERT INTO `yz_intro_intro` VALUES ('1', '&lt;p style=&quot;padding: 0px; border: 0px; margin-bottom: 0px; list-style: none; outline: none; font-family: 微软雅黑; font-stretch: normal; font-size: 14px; white-space: normal; margin-top: 5px; line-height: 1.75em;&quot;&gt;&lt;span style=&quot;color: rgb(255, 0, 0); font-size: 16px;&quot;&gt;&lt;strong&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&lt;span style=&quot;color: rgb(255, 0, 0); line-height: 1.5em;&quot;&gt;企业口号 ：携手亿众 &amp;nbsp;享受运动 &amp;nbsp;&lt;/span&gt;&lt;/strong&gt;&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;line-height: 1.75em;&quot;&gt;&lt;span style=&quot;color: rgb(255, 0, 0); font-size: 16px;&quot;&gt;&lt;strong&gt;&lt;span style=&quot;color: rgb(0, 0, 0); font-family: 微软雅黑;&quot;&gt;&amp;nbsp; &amp;nbsp;&lt;span style=&quot;font-family: 微软雅黑; color: rgb(255, 0, 0);&quot;&gt;企业理念： 悦运动 &amp;nbsp;悦快乐&lt;/span&gt;&lt;/span&gt;&lt;/strong&gt;&lt;strong&gt;&lt;span style=&quot;font-family: 微软雅黑; color: rgb(255, 0, 0);&quot;&gt; &lt;/span&gt;&lt;/strong&gt;&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;line-height: 1.75em;&quot;&gt;&lt;span style=&quot;font-size: 16px; color: rgb(255, 0, 0);&quot;&gt;&lt;strong&gt;&lt;span style=&quot;color: rgb(255, 0, 0); font-family: 微软雅黑;&quot;&gt;&amp;nbsp; &amp;nbsp;服务宗旨： 专诚 &amp;nbsp;专注 &amp;nbsp;专业&lt;/span&gt;&lt;/strong&gt;&lt;strong&gt;&lt;span style=&quot;font-family: 微软雅黑;&quot;&gt;&lt;/span&gt;&lt;/strong&gt;&lt;strong&gt;&lt;span style=&quot;font-family: 微软雅黑;&quot;&gt;&lt;/span&gt;&lt;/strong&gt;&lt;strong&gt;&lt;span style=&quot;font-family: 微软雅黑;&quot;&gt;&lt;/span&gt;&lt;/strong&gt;&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;padding: 0px; border: 0px; margin-bottom: 0px; list-style: none; outline: none; font-family: 微软雅黑; font-stretch: normal; font-size: 14px; white-space: normal; margin-top: 5px; line-height: 2em;&quot;&gt;&lt;span style=&quot;color: rgb(0, 0, 0); font-family: 微软雅黑, &amp;#39;Microsoft YaHei&amp;#39;; font-size: 14px;&quot;&gt;&amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp;河南亿盛众联体育文化有限公司（简称亿众体育）隶属于武汉亿众体育文化传播有限公司，是华中地区首家以推广全民健身计划，发展体育文化事业为导向的新生专业体育公司，作为国家全民健身工程的推动者，亿众体育一直倡导将生命与运动，工作相结合，主张健康并快乐的生活工作。&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;padding: 0px; border: 0px; margin-bottom: 0px; list-style: none; outline: none; font-stretch: normal; white-space: normal; margin-top: 5px; line-height: 2em;&quot;&gt;&lt;span style=&quot;font-family: 微软雅黑, &amp;#39;Microsoft YaHei&amp;#39;; font-size: 14px;&quot;&gt;&amp;nbsp; &amp;nbsp; &amp;nbsp;&amp;nbsp;&lt;/span&gt;&lt;span style=&quot;font-family: 微软雅黑; font-size: 14px;&quot;&gt;&amp;nbsp;&lt;span style=&quot;font-family: 微软雅黑; font-size: 14px; color: rgb(0, 0, 0);&quot;&gt;作为中国体育文化产业的先行者，公司秉承“全民健身 服务大众 ”行业运作理念，盘活了大量体育人才，汇集了大量在体育策划、赛事执行，体育广告、体育公关、运动健康等专业的优秀顶尖人才，借力最新互联网IT技术并融合最新体育运动风尚潮流，在趣味运动、竞技体育、户外运动（嘉年华系列、青春跑系列）、体育营销、体育培训、运动健康管理（企业及个人）等领 域为客户提供优质一站式综合解决方案及服务，凭借专业精准的市场运作经验，全新的理念，优质的服务，卓越的品质，创立至今，已为上千品牌企业提供优质服务，成为华中地区最具影响力的体育产业运营机构。&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;padding: 0px; border: 0px; margin-bottom: 0px; list-style: none; outline: none; font-family: 微软雅黑; font-stretch: normal; font-size: 14px; white-space: normal; margin-top: 5px; line-height: 2em;&quot;&gt;&lt;span style=&quot;font-size: 14px; font-family: 微软雅黑, &amp;#39;Microsoft YaHei&amp;#39;; color: rgb(0, 0, 0);&quot;&gt;&lt;/span&gt;&lt;br/&gt;&lt;/p&gt;&lt;p style=&quot;line-height: 2em;&quot;&gt;&lt;br/&gt;&lt;/p&gt;', '1', '公司简介');
INSERT INTO `yz_intro_intro` VALUES ('3', '&lt;p style=&quot;padding: 0px; border: 0px; margin-top: 0px; margin-bottom: 0px; list-style: none; outline: none; font-family: 微软雅黑; font-stretch: normal; font-size: 12px; line-height: 30px; white-space: normal;&quot;&gt;&lt;span style=&quot;font-size: 14px;&quot;&gt;&amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; 没有实力，岂能领跑?谁领跑，看实力!领先有道，跑动人生.&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;padding: 0px; border: 0px; margin-top: 0px; margin-bottom: 0px; list-style: none; outline: none; font-family: 微软雅黑; font-stretch: normal; font-size: 12px; line-height: 30px; white-space: normal;&quot;&gt;&lt;span style=&quot;font-size: 14px;&quot;&gt;&amp;nbsp; &amp;nbsp; &amp;nbsp;&amp;nbsp;&lt;/span&gt;&lt;span style=&quot;font-family: 微软雅黑, &amp;#39;Microsoft YaHei&amp;#39;; font-size: 14px;&quot;&gt; &amp;nbsp;&lt;span style=&quot;font-family: 微软雅黑, &amp;#39;Microsoft YaHei&amp;#39;;&quot;&gt;河南亿盛众联体育文化有限公司（简称亿众体育）隶属于武汉亿众体育文化传播有限公司，是中原地区首家以推广全民健身计划，发展体育文化事业为导向的新生专业体育公司，作为国家全民健身工程的推动者，亿众体育一直倡导将生命与运动，工作相结合，主张健康并快乐的生活工作。&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;padding: 0px; border: 0px; margin-top: 0px; margin-bottom: 0px; list-style: none; outline: none; font-family: 微软雅黑; font-stretch: normal; font-size: 12px; line-height: 30px; white-space: normal;&quot;&gt;&lt;span style=&quot;font-size: 14px;&quot;&gt;&lt;/span&gt;&lt;br/&gt;&lt;/p&gt;&lt;p style=&quot;padding: 0px; border: 0px; margin-top: 0px; margin-bottom: 0px; list-style: none; outline: none; font-family: 微软雅黑; font-stretch: normal; font-size: 12px; line-height: 30px; white-space: normal;&quot;&gt;&lt;img src=&quot;/ueditor/php/upload/image/20160622/1466606230193083.jpg&quot; title=&quot;1466606230193083.jpg&quot; alt=&quot;teamphoto-1.jpg&quot;/&gt;&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;', '2', '公司团队');
INSERT INTO `yz_intro_intro` VALUES ('4', '&lt;p&gt;&lt;img src=&quot;/ueditor/php/upload/image/20160622/1466606754792559.png&quot; title=&quot;1466606754792559.png&quot; alt=&quot;cooperation(1).png&quot;/&gt;&lt;img src=&quot;/ueditor/php/upload/image/20160622/1466606757261805.png&quot; title=&quot;1466606757261805.png&quot; alt=&quot;cooperation(2).png&quot;/&gt;&lt;img src=&quot;/ueditor/php/upload/image/20160622/1466606782637946.png&quot; title=&quot;1466606782637946.png&quot; alt=&quot;cooperation(3).png&quot;/&gt;&lt;img src=&quot;/ueditor/php/upload/image/20160622/1466606785631362.png&quot; title=&quot;1466606785631362.png&quot; alt=&quot;cooperation(4).png&quot;/&gt;&lt;img src=&quot;/ueditor/php/upload/image/20160622/1466606787171739.png&quot; title=&quot;1466606787171739.png&quot; alt=&quot;cooperation(5).png&quot;/&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/ueditor/php/upload/image/20160622/1466606791127300.png&quot; title=&quot;1466606791127300.png&quot; alt=&quot;cooperation(6).png&quot;/&gt;&lt;img src=&quot;/ueditor/php/upload/image/20160622/1466606794111176.png&quot; title=&quot;1466606794111176.png&quot; alt=&quot;cooperation(7).png&quot;/&gt;&lt;img src=&quot;/ueditor/php/upload/image/20160622/1466606796424852.png&quot; title=&quot;1466606796424852.png&quot; alt=&quot;cooperation(8).png&quot;/&gt;&lt;img src=&quot;/ueditor/php/upload/image/20160622/1466606798397269.png&quot; title=&quot;1466606798397269.png&quot; alt=&quot;cooperation(9).png&quot;/&gt;&lt;img src=&quot;/ueditor/php/upload/image/20160622/1466606800110535.png&quot; title=&quot;1466606800110535.png&quot; alt=&quot;cooperation(10).png&quot;/&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/ueditor/php/upload/image/20160622/1466606803135106.png&quot; title=&quot;1466606803135106.png&quot; alt=&quot;cooperation(11).png&quot;/&gt;&lt;img src=&quot;/ueditor/php/upload/image/20160622/1466606805531098.png&quot; title=&quot;1466606805531098.png&quot; alt=&quot;cooperation(12).png&quot;/&gt;&lt;img src=&quot;/ueditor/php/upload/image/20160622/1466606807576109.png&quot; title=&quot;1466606807576109.png&quot; alt=&quot;cooperation(13).png&quot;/&gt;&lt;img src=&quot;/ueditor/php/upload/image/20160622/1466606810853578.png&quot; title=&quot;1466606810853578.png&quot; alt=&quot;cooperation(14).png&quot;/&gt;&lt;img src=&quot;/ueditor/php/upload/image/20160622/1466606812335045.png&quot; title=&quot;1466606812335045.png&quot; alt=&quot;cooperation(15).png&quot;/&gt;&lt;/p&gt;', '5', '客户合作');
INSERT INTO `yz_intro_intro` VALUES ('5', '&lt;table style=&quot;width: 1079px;&quot;&gt;&lt;tbody&gt;&lt;tr class=&quot;firstRow&quot;&gt;&lt;td width=&quot;344&quot; valign=&quot;top&quot; style=&quot;word-break: break-all;&quot;&gt;&lt;img src=&quot;/ueditor/php/upload/image/20160622/1466610534105165.jpg&quot; title=&quot;1466610534105165.jpg&quot; alt=&quot;qualificationphoto-1.jpg&quot;/&gt;&lt;/td&gt;&lt;td width=&quot;344&quot; valign=&quot;top&quot; style=&quot;word-break: break-all;&quot;&gt;&lt;img src=&quot;/ueditor/php/upload/image/20160622/1466610537897642.png&quot; title=&quot;1466610537897642.png&quot; alt=&quot;1466610313311334.png&quot;/&gt;&lt;/td&gt;&lt;td width=&quot;344&quot; valign=&quot;top&quot; style=&quot;word-break: break-all;&quot;&gt;&lt;img src=&quot;/ueditor/php/upload/image/20160622/1466610544256469.jpg&quot; title=&quot;1466610544256469.jpg&quot; alt=&quot;qualificationphoto-3.jpg&quot;/&gt;&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td width=&quot;344&quot; valign=&quot;top&quot; style=&quot;word-break: break-all;&quot;&gt;&lt;h3 style=&quot;padding: 0px; border: 0px; margin: 15px 0px 0px; list-style: none; outline: none; font-family: 微软雅黑; font-size: 14px; font-weight: normal; text-align: center; white-space: normal;&quot;&gt;湖北省策划协会副秘书长单位&lt;/h3&gt;&lt;/td&gt;&lt;td width=&quot;344&quot; valign=&quot;top&quot; style=&quot;word-break: break-all;&quot;&gt;&lt;h3 style=&quot;padding: 0px; border: 0px; margin: 15px 0px 0px; list-style: none; outline: none; font-family: 微软雅黑; font-size: 14px; font-weight: normal; text-align: center; white-space: normal;&quot;&gt;中网网动中国优秀 &amp;nbsp; &amp;nbsp;&lt;br/&gt;合作伙伴 &amp;nbsp;&amp;nbsp;&lt;/h3&gt;&lt;span style=&quot;font-family: 微软雅黑; font-size: 14px; text-align: center;&quot;&gt;&lt;/span&gt;&lt;/td&gt;&lt;td width=&quot;344&quot; valign=&quot;top&quot; style=&quot;word-break: break-all;&quot;&gt;&lt;h3 style=&quot;padding: 0px; border: 0px; margin: 15px 0px 0px; list-style: none; outline: none; font-family: 微软雅黑; font-size: 14px; font-weight: normal; text-align: center; white-space: normal;&quot;&gt;湖北省策划协会副秘书长单位&lt;/h3&gt;&lt;/td&gt;&lt;/tr&gt;&lt;/tbody&gt;&lt;/table&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;', '4', '公司资质');

-- ----------------------------
-- Table structure for `yz_intro_story`
-- ----------------------------
DROP TABLE IF EXISTS `yz_intro_story`;
CREATE TABLE `yz_intro_story` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `time` int(20) DEFAULT NULL,
  `content` varchar(100) CHARACTER SET gbk DEFAULT NULL,
  `yearid` int(5) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=52 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of yz_intro_story
-- ----------------------------
INSERT INTO `yz_intro_story` VALUES ('1', '1209081600', '中信银行武汉分行第四届职工运动会', '1');
INSERT INTO `yz_intro_story` VALUES ('2', '1212105600', '中信银行武汉分行首届儿童趣味运动会', '1');
INSERT INTO `yz_intro_story` VALUES ('3', '1223683200', '交通银行湖北省分行第三届职工运动会', '1');
INSERT INTO `yz_intro_story` VALUES ('4', '1223769600', '光大银行武汉分行2008年金秋职工运动会', '1');
INSERT INTO `yz_intro_story` VALUES ('5', '1243036800', '中网 网动中国武汉赛区争霸赛', '2');
INSERT INTO `yz_intro_story` VALUES ('6', '1252454400', '中国移动通信&quot;G3&quot;杯教师节乒乓球赛', '2');
INSERT INTO `yz_intro_story` VALUES ('7', '1256342400', '兴业银行武汉分行2009年职工趣味运动会', '2');
INSERT INTO `yz_intro_story` VALUES ('8', '1257552000', '交通银行华中金融服务中心2009年趣味嘉年华', '2');
INSERT INTO `yz_intro_story` VALUES ('9', '1270512000', '湖北省高校社团2010新春趣味运动会', '3');
INSERT INTO `yz_intro_story` VALUES ('10', '1284163200', '威尔逊·中国龙武汉赛区业余网球团体赛', '3');
INSERT INTO `yz_intro_story` VALUES ('11', '1289001600', '中国银行股份有限公司湖北省分行2010年职工运动会', '3');
INSERT INTO `yz_intro_story` VALUES ('12', '1289606400', '中国电力工程顾问集团中南电力设计院职工趣味运动会', '3');
INSERT INTO `yz_intro_story` VALUES ('13', '1290816000', '中国银联湖北分公司2010年金融精英网球邀请赛', '3');
INSERT INTO `yz_intro_story` VALUES ('14', '1314230400', '华润有约2011年社区运动嘉年华', '4');
INSERT INTO `yz_intro_story` VALUES ('15', '1315612800', '武汉移动全球通VIP俱乐部网球邀请赛', '4');
INSERT INTO `yz_intro_story` VALUES ('16', '1316908800', '武汉烽火网络有限责任公司第三届职工趣味运动会', '4');
INSERT INTO `yz_intro_story` VALUES ('17', '1318982400', '武田向前冲2011年武田药品第一届销售团队运动会', '4');
INSERT INTO `yz_intro_story` VALUES ('18', '1322265600', '武汉城市建设投资有限公司第三届职工运动会', '4');
INSERT INTO `yz_intro_story` VALUES ('19', '1324598400', '东风汽车公司总部2011年职工运动会', '4');
INSERT INTO `yz_intro_story` VALUES ('20', '1328054400', '2012年武汉三源&quot;快乐向前冲&quot;团体竞技赛', '5');
INSERT INTO `yz_intro_story` VALUES ('21', '1337299200', '神龙汽车有限公司成立二十周年及第七届员工田径趣味运动会', '5');
INSERT INTO `yz_intro_story` VALUES ('22', '1338595200', '华为公司武汉研究所2012年春季趣味运动会', '5');
INSERT INTO `yz_intro_story` VALUES ('23', '1339891200', '武汉东本储运有限公司&quot;团结就是力量&quot;龙舟邀请赛', '5');
INSERT INTO `yz_intro_story` VALUES ('24', '1350086400', '交通银行湖北省分行第五届职工运动会', '5');
INSERT INTO `yz_intro_story` VALUES ('25', '1351987200', '&quot;运动成就健康&quot;武汉市建设集团第三届职工运动会', '5');
INSERT INTO `yz_intro_story` VALUES ('26', '1356480000', '凯迪电力&quot;激情相约 亲情无限&quot;篮球联赛', '5');
INSERT INTO `yz_intro_story` VALUES ('27', '1366416000', '中国烟草集团2013年职工运动会', '6');
INSERT INTO `yz_intro_story` VALUES ('28', '1370131200', '光迅科技六一亲子运动会', '6');
INSERT INTO `yz_intro_story` VALUES ('29', '1372723200', '葛店人福药业2013营销精英趣味运动会', '6');
INSERT INTO `yz_intro_story` VALUES ('30', '1377388800', '湖北银行首届员工象棋围棋比赛', '6');
INSERT INTO `yz_intro_story` VALUES ('31', '1379116800', '烽火科技2013职工水上趣味运动会', '6');
INSERT INTO `yz_intro_story` VALUES ('32', '1379894400', '中建三局第三届职工运动会', '6');
INSERT INTO `yz_intro_story` VALUES ('33', '1381104000', '中国银联第四届&quot;银联杯&quot;网球精英邀请赛', '6');
INSERT INTO `yz_intro_story` VALUES ('34', '1382832000', '中国邮政储蓄银行2013年职工乒乓球赛', '6');
INSERT INTO `yz_intro_story` VALUES ('35', '1390608000', '洪山区统一战线年终总结会暨马年迎春趣味运动会', '7');
INSERT INTO `yz_intro_story` VALUES ('36', '1398556800', '&quot;舒化杯&quot;校园健身操（舞）大赛', '7');
INSERT INTO `yz_intro_story` VALUES ('37', '1400198400', '&quot;企业共青团 阳光一小时&quot;员工素质拓展游戏大赛', '7');
INSERT INTO `yz_intro_story` VALUES ('38', '1404000000', '中建三局首届&quot;争先杯&quot;羽毛球比赛', '7');
INSERT INTO `yz_intro_story` VALUES ('39', '1407542400', '2014年&quot;武汉农商行杯&quot;系列精英邀请赛', '7');
INSERT INTO `yz_intro_story` VALUES ('40', '1408752000', '2014金领结足球超级联赛', '7');
INSERT INTO `yz_intro_story` VALUES ('41', '1413590400', '交通银行湖北省分行第六届职工运动会', '7');
INSERT INTO `yz_intro_story` VALUES ('42', '1412553600', '奔跑吧九州通', '7');
INSERT INTO `yz_intro_story` VALUES ('43', '1428537600', '中建三局中承包公司第五届职工运动会', '8');
INSERT INTO `yz_intro_story` VALUES ('44', '1428624000', '人福药集团第十二届运动会', '8');
INSERT INTO `yz_intro_story` VALUES ('45', '1429315200', '亿众体育强势入驻河南，成立河南分公司', '8');
INSERT INTO `yz_intro_story` VALUES ('46', '1429920000', '世贸中南六城接力&quot;为爱奔跑&quot;暖心行动', '8');
INSERT INTO `yz_intro_story` VALUES ('47', '1430179200', '湖北石油机关第一届职工趣味运动会', '8');
INSERT INTO `yz_intro_story` VALUES ('48', '1430956800', '周大福华中区2015年SMART+运动会', '8');
INSERT INTO `yz_intro_story` VALUES ('49', '1433548800', '2015民生信用卡是网球俱乐部邀请赛武汉站活动', '8');
INSERT INTO `yz_intro_story` VALUES ('50', '1436486400', '&quot;亲亲一家人，快乐嘉年华&quot;国创资本亲子活动', '8');
INSERT INTO `yz_intro_story` VALUES ('51', '1437177600', '光大银行2015年职工水上趣味运动会', '8');

-- ----------------------------
-- Table structure for `yz_intro_year`
-- ----------------------------
DROP TABLE IF EXISTS `yz_intro_year`;
CREATE TABLE `yz_intro_year` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `yearid` int(5) DEFAULT NULL,
  `name` varchar(20) CHARACTER SET gbk DEFAULT NULL,
  `sort` int(5) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of yz_intro_year
-- ----------------------------
INSERT INTO `yz_intro_year` VALUES ('1', null, '2009 成长', '1');
INSERT INTO `yz_intro_year` VALUES ('2', null, '2010 发展', '2');
INSERT INTO `yz_intro_year` VALUES ('3', null, '2011 精进', '3');
INSERT INTO `yz_intro_year` VALUES ('4', null, '2012 创新', '4');
INSERT INTO `yz_intro_year` VALUES ('5', null, '2013 谋势', '5');
INSERT INTO `yz_intro_year` VALUES ('6', null, '2014 跨越', '6');
INSERT INTO `yz_intro_year` VALUES ('7', null, '2015 锐变', '7');
INSERT INTO `yz_intro_year` VALUES ('8', null, '2016 探索', '8');

-- ----------------------------
-- Table structure for `yz_news`
-- ----------------------------
DROP TABLE IF EXISTS `yz_news`;
CREATE TABLE `yz_news` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `type` varchar(15) CHARACTER SET gbk DEFAULT NULL COMMENT '新闻类型',
  `title` varchar(50) CHARACTER SET gbk DEFAULT NULL COMMENT '标题',
  `desc` varchar(200) CHARACTER SET gbk DEFAULT NULL,
  `content` varchar(20000) CHARACTER SET gbk DEFAULT NULL,
  `image` varchar(50) CHARACTER SET gbk DEFAULT NULL,
  `ptime` int(11) DEFAULT NULL,
  `author` varchar(20) CHARACTER SET gbk DEFAULT NULL,
  `count` int(6) DEFAULT NULL COMMENT '点击量',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of yz_news
-- ----------------------------
INSERT INTO `yz_news` VALUES ('23', '', '换个思路办体育', '', '&lt;p style=&quot;margin-top: 0px; margin-bottom: 24px; padding: 0px; min-height: 1em; white-space: pre-wrap; clear: both; color: rgb(62, 62, 62); font-family: Helvetica, 宋体; text-indent: 32px; line-height: 27px; box-sizing: border-box !important; background-color: rgb(255, 255, 255);&quot;&gt;&lt;strong style=&quot;box-sizing: border-box !important;&quot;&gt;&lt;span style=&quot;font-family: 宋体; color: green; box-sizing: border-box !important;&quot;&gt;&lt;img src=&quot;/ueditor/php/upload/image/20160701/1467343446131722.png&quot; title=&quot;1467343446131722.png&quot; alt=&quot;A.png&quot;/&gt;&lt;/span&gt;&lt;/strong&gt;&lt;/p&gt;&lt;p style=&quot;margin-top: 0px; margin-bottom: 24px; padding: 0px; min-height: 1em; white-space: pre-wrap; clear: both; color: rgb(62, 62, 62); font-family: Helvetica, 宋体; text-indent: 32px; line-height: 27px; box-sizing: border-box !important; background-color: rgb(255, 255, 255);&quot;&gt;&lt;strong style=&quot;box-sizing: border-box !important;&quot;&gt;&lt;span style=&quot;font-family: 宋体; color: green; box-sizing: border-box !important;&quot;&gt;以敬畏之心办体育、以服务之实办体育、以高远之志办体育，理应逐渐内化为体育人的执着追求与自觉行动。&lt;/span&gt;&lt;/strong&gt;&lt;/p&gt;&lt;p style=&quot;margin-top: 0px; margin-bottom: 24px; padding: 0px; min-height: 1em; white-space: pre-wrap; clear: both; color: rgb(62, 62, 62); font-family: Helvetica, 宋体; text-indent: 32px; line-height: 27px; box-sizing: border-box !important; background-color: rgb(255, 255, 255);&quot;&gt;&lt;span style=&quot;font-family: 宋体; box-sizing: border-box !important;&quot;&gt;轰轰烈烈的体育改革正处在攻坚阶段：率先破冰的足球改革不无意外地遭遇了阻力，却仍在有条不紊地奋力前行；追随足球改革的脚步，其他运动项目的改革将毫无例外地陆续展开。&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;margin-top: 0px; margin-bottom: 24px; padding: 0px; min-height: 1em; white-space: pre-wrap; clear: both; color: rgb(62, 62, 62); font-family: Helvetica, 宋体; text-indent: 32px; line-height: 27px; box-sizing: border-box !important; background-color: rgb(255, 255, 255);&quot;&gt;&lt;span style=&quot;font-family: 宋体; box-sizing: border-box !important;&quot;&gt;体育改革从足球项目起步，大抵和这个项目的社会影响力相关；而体育改革的整体进展并未带给人们惊喜，可能和体育系统缺少主动求变的锐气不无关系。&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;margin-top: 0px; margin-bottom: 24px; padding: 0px; min-height: 1em; white-space: pre-wrap; clear: both; color: rgb(62, 62, 62); font-family: Helvetica, 宋体; text-indent: 32px; line-height: 27px; box-sizing: border-box !important; background-color: rgb(255, 255, 255);&quot;&gt;&lt;span style=&quot;font-family: 宋体; box-sizing: border-box !important;&quot;&gt;时至今日，再去讨论体育改革有无必要，已属落伍。但体育系统对改革抱有什么态度、采取什么行动、希望达到什么效果，却对改革进程有着实实在在的影响。&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;margin-top: 0px; margin-bottom: 24px; padding: 0px; min-height: 1em; white-space: pre-wrap; clear: both; color: rgb(62, 62, 62); font-family: Helvetica, 宋体; text-indent: 32px; line-height: 27px; box-sizing: border-box !important; background-color: rgb(255, 255, 255);&quot;&gt;&lt;span style=&quot;font-family: 宋体; box-sizing: border-box !important;&quot;&gt;从本位主义出发看待体育改革，看到的可能只是既有利益的渐行渐远，想到的可能只是优裕生活（以奖牌换奖金）的一去不返。从这样的角度看问题、想问题，就会有千方百计将既得利益改头换面后重新攥在手中的冲动，就会生出以阻碍改革进程为代价留住优裕生活的念头。尽管改革浪潮势不可挡，尽管社会监督无处不在，但相信打这样算盘、动这样念头的顽固分子并未绝迹。&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;margin-top: 0px; margin-bottom: 24px; padding: 0px; min-height: 1em; white-space: pre-wrap; clear: both; color: rgb(62, 62, 62); font-family: Helvetica, 宋体; text-indent: 32px; line-height: 27px; box-sizing: border-box !important; background-color: rgb(255, 255, 255);&quot;&gt;&lt;strong style=&quot;box-sizing: border-box !important;&quot;&gt;&lt;span style=&quot;font-family: 宋体; color: green; box-sizing: border-box !important;&quot;&gt;明知旧有发展模式已经难以为继，依然铤而走险试图保住“从中渔利”的可能，这不仅是顽固分子的贪念使然，更与管理部门的失职紧密相连。&lt;/span&gt;&lt;/strong&gt;&lt;span style=&quot;font-family: 宋体; box-sizing: border-box !important;&quot;&gt;作为一场颠覆旧有发展模式的大变革，体育系统仅仅按部就班推动改革举措的落实还远远不够，真正做到认识高度、行动自觉与改革进程高度匹配方为上策。&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;margin-top: 0px; margin-bottom: 24px; padding: 0px; min-height: 1em; white-space: pre-wrap; clear: both; color: rgb(62, 62, 62); font-family: Helvetica, 宋体; text-indent: 32px; line-height: 27px; box-sizing: border-box !important; background-color: rgb(255, 255, 255);&quot;&gt;&lt;strong style=&quot;box-sizing: border-box !important;&quot;&gt;&lt;span style=&quot;font-family: 宋体; color: green; box-sizing: border-box !important;&quot;&gt;推进体育改革，需要换个思路办体育；争取社会支持，同样需要换个思路办体育。&lt;/span&gt;&lt;/strong&gt;&lt;span style=&quot;font-family: 宋体; box-sizing: border-box !important;&quot;&gt;当体育不再仅仅承载争金夺银的单一功能，当体育产业已经成为吸纳社会资本的上佳载体，当全民健身终于上升为国家战略，以敬畏之心办体育、以服务之实办体育、以高远之志办体育，理应逐渐内化为体育人的执着追求与自觉行动。而在此基础上谋划以新理念引领体育发展新格局，不仅是推进体育改革的题中应有之义，更是从体育大国迈向体育强国的水到渠成之选。&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;margin-top: 0px; margin-bottom: 24px; padding: 0px; min-height: 1em; white-space: pre-wrap; clear: both; color: rgb(62, 62, 62); font-family: Helvetica, 宋体; text-indent: 32px; line-height: 27px; box-sizing: border-box !important; background-color: rgb(255, 255, 255);&quot;&gt;&lt;strong style=&quot;box-sizing: border-box !important;&quot;&gt;&lt;span style=&quot;font-family: 宋体; color: green; box-sizing: border-box !important;&quot;&gt;能否换个思路办体育，能否以新理念引领新格局，事关体育改革的成败得失，事关体育强国梦的实现路径。&lt;/span&gt;&lt;/strong&gt;&lt;span style=&quot;font-family: 宋体; box-sizing: border-box !important;&quot;&gt;又逢各方角力的奥运年，时值体育改革的关键阶段，曾经一次次与转型发展擦肩而过的中国体育，已经没有贻误战机的资本，唯有踏准节拍、顺势而上，中国体育才能迎来更加美好的明天。&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;', '/Uploads/images/201607011121355775e1bf10720.png', '1467331200', '亿众体育', '7');

-- ----------------------------
-- Table structure for `yz_pro_detail`
-- ----------------------------
DROP TABLE IF EXISTS `yz_pro_detail`;
CREATE TABLE `yz_pro_detail` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) CHARACTER SET gbk DEFAULT NULL,
  `src` varchar(70) CHARACTER SET gbk DEFAULT NULL,
  `img1` varchar(70) CHARACTER SET gbk DEFAULT NULL,
  `img2` varchar(70) CHARACTER SET gbk DEFAULT NULL,
  `sort` int(5) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of yz_pro_detail
-- ----------------------------
INSERT INTO `yz_pro_detail` VALUES ('1', '奔跑吧兄弟', '/Uploads/images/201606301517575774c7a59d74c.jpg', '/Uploads/images/20160623091019576b36fb057f4.jpg', '/Uploads/images/20160623091021576b36fd9c604.jpg', '1');
INSERT INTO `yz_pro_detail` VALUES ('2', '穿越主题', '/Uploads/images/201606301525045774c9506e5a8.jpg', '/Uploads/images/20160623095107576b408bc2644.jpg', '/Uploads/images/20160623095110576b408e79afc.jpg', '2');
INSERT INTO `yz_pro_detail` VALUES ('4', '大富翁', '/Uploads/images/201606301527315774c9e3ad849.jpg', '/Uploads/images/20160623091917576b39150013e.jpg', '/Uploads/images/20160623091919576b391762906.jpg', '3');
INSERT INTO `yz_pro_detail` VALUES ('5', '多米诺骨牌', '/Uploads/images/201606301529445774ca6806ada.jpg', '/Uploads/images/20160623095136576b40a869864.jpg', '/Uploads/images/20160623095138576b40aab014c.jpg', '4');
INSERT INTO `yz_pro_detail` VALUES ('6', '疯狂过山车', '/Uploads/images/201606301445575774c025952df.jpg', '/Uploads/images/20160623094446576b3f0ed88f2.jpg', '/Uploads/images/20160623094449576b3f11247b2.jpg', '5');
INSERT INTO `yz_pro_detail` VALUES ('7', '激情非洲鼓', '/Uploads/images/201606301447545774c09a29cc5.jpg', '/Uploads/images/20160623095148576b40b47595c.jpg', '/Uploads/images/20160623095150576b40b6818c4.jpg', '6');
INSERT INTO `yz_pro_detail` VALUES ('8', '极限探宝', '/Uploads/images/201606301449365774c100cc3a8.jpg', '/Uploads/images/20160623094517576b3f2d30fb2.jpg', '/Uploads/images/20160623095205576b40c5bbe5c.jpg', '7');
INSERT INTO `yz_pro_detail` VALUES ('9', '假面舞会', '/Uploads/images/201606301451215774c1696c64c.jpg', '/Uploads/images/20160623095217576b40d198e34.jpg', '/Uploads/images/20160623095219576b40d3943fc.jpg', '8');
INSERT INTO `yz_pro_detail` VALUES ('10', '军事主题', '/Uploads/images/201606301453315774c1ebbbea3.jpg', '/Uploads/images/20160623094548576b3f4c987f2.jpg', '/Uploads/images/20160623094551576b3f4f2eee2.jpg', '9');
INSERT INTO `yz_pro_detail` VALUES ('11', '拉斯维加斯', '/Uploads/images/201606301456515774c2b366a22.jpg', '/Uploads/images/20160623095230576b40deb848c.jpg', '/Uploads/images/20160623095233576b40e1bebac.jpg', '10');
INSERT INTO `yz_pro_detail` VALUES ('12', '企业好声音', '/Uploads/images/201606301459415774c35d91eeb.jpg', '/Uploads/images/20160623094623576b3f6f27f2b.jpg', '/Uploads/images/20160623094625576b3f71c658b.jpg', '11');
INSERT INTO `yz_pro_detail` VALUES ('13', '企业家庭日', '/Uploads/images/201606301504485774c490d9fe9.jpg', '/Uploads/images/20160623095242576b40ea96274.jpg', '/Uploads/images/20160623095244576b40ecb7b2c.jpg', '12');
INSERT INTO `yz_pro_detail` VALUES ('14', '趣味运动会', '/Uploads/images/201606301507075774c51bb97f8.jpg', '/Uploads/images/20160623094707576b3f9b57feb.jpg', '/Uploads/images/20160623094709576b3f9d113e3.jpg', '13');
INSERT INTO `yz_pro_detail` VALUES ('15', '烧烤主题', '/Uploads/images/201606301508485774c5808049c.jpg', '/Uploads/images/20160623095258576b40fae692c.jpg', '/Uploads/images/20160623095303576b40ffafa44.jpg', '14');
INSERT INTO `yz_pro_detail` VALUES ('16', '拓展训练', '/Uploads/images/201606301510515774c5fb0d48f.jpg', '/Uploads/images/20160623094757576b3fcd13643.jpg', '/Uploads/images/20160623094801576b3fd192713.jpg', '15');
INSERT INTO `yz_pro_detail` VALUES ('17', '温泉主题', '/Uploads/images/201606301512335774c661dc98d.jpg', '/Uploads/images/20160623095319576b410f1da54.jpg', '/Uploads/images/20160623095315576b410b93e84.jpg', '16');
INSERT INTO `yz_pro_detail` VALUES ('18', '真人CS', '/Uploads/images/201606301515025774c6f60db5f.jpg', '/Uploads/images/20160623094833576b3ff1680f3.jpg', '/Uploads/images/20160623094836576b3ff490edb.jpg', '17');
INSERT INTO `yz_pro_detail` VALUES ('24', '', '/Uploads/images/201606301134185774933a0cad6.jpg', '/Uploads/images/201606301134225774933e4e800.jpg', '/Uploads/images/201606301134265774934200c6f.jpg', '0');

-- ----------------------------
-- Table structure for `yz_pro_dlist`
-- ----------------------------
DROP TABLE IF EXISTS `yz_pro_dlist`;
CREATE TABLE `yz_pro_dlist` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `typeid` int(10) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=31 DEFAULT CHARSET=gbk;

-- ----------------------------
-- Records of yz_pro_dlist
-- ----------------------------
INSERT INTO `yz_pro_dlist` VALUES ('1', '1', '彩色跑');
INSERT INTO `yz_pro_dlist` VALUES ('2', '1', '泡泡跑');
INSERT INTO `yz_pro_dlist` VALUES ('3', '1', '荧光跑');
INSERT INTO `yz_pro_dlist` VALUES ('4', '1', '四季跑');
INSERT INTO `yz_pro_dlist` VALUES ('5', '1', '迷你马拉松');
INSERT INTO `yz_pro_dlist` VALUES ('6', '2', '运动嘉年华');
INSERT INTO `yz_pro_dlist` VALUES ('7', '2', '水上嘉年华');
INSERT INTO `yz_pro_dlist` VALUES ('8', '0', '');
INSERT INTO `yz_pro_dlist` VALUES ('9', '0', '');
INSERT INTO `yz_pro_dlist` VALUES ('10', '0', '');
INSERT INTO `yz_pro_dlist` VALUES ('11', '3', '职工趣味运动会');
INSERT INTO `yz_pro_dlist` VALUES ('12', '3', '亲子趣味运动会');
INSERT INTO `yz_pro_dlist` VALUES ('13', '3', '泥浆趣味运动会');
INSERT INTO `yz_pro_dlist` VALUES ('14', '3', '水上趣味运动会');
INSERT INTO `yz_pro_dlist` VALUES ('15', '3', '减压趣味运动会');
INSERT INTO `yz_pro_dlist` VALUES ('16', '4', '企业员工家庭日');
INSERT INTO `yz_pro_dlist` VALUES ('17', '4', '主题年会');
INSERT INTO `yz_pro_dlist` VALUES ('18', '4', '节庆主题活动');
INSERT INTO `yz_pro_dlist` VALUES ('19', '4', '企业相亲会');
INSERT INTO `yz_pro_dlist` VALUES ('20', '4', '拓展训练');
INSERT INTO `yz_pro_dlist` VALUES ('21', '5', '田径类比赛策划承办');
INSERT INTO `yz_pro_dlist` VALUES ('22', '5', '篮/足球比赛');
INSERT INTO `yz_pro_dlist` VALUES ('23', '5', '羽毛球比赛');
INSERT INTO `yz_pro_dlist` VALUES ('24', '5', '乒乓球比赛');
INSERT INTO `yz_pro_dlist` VALUES ('25', '5', '高尔夫比赛');
INSERT INTO `yz_pro_dlist` VALUES ('26', '6', '城市全民运动赛事策划');
INSERT INTO `yz_pro_dlist` VALUES ('27', '6', '地产体育营销 ');
INSERT INTO `yz_pro_dlist` VALUES ('28', '6', '品牌体育营销策划');
INSERT INTO `yz_pro_dlist` VALUES ('29', '6', '体育明星广告代言');
INSERT INTO `yz_pro_dlist` VALUES ('30', '6', '体育广告策划代理');

-- ----------------------------
-- Table structure for `yz_pro_list`
-- ----------------------------
DROP TABLE IF EXISTS `yz_pro_list`;
CREATE TABLE `yz_pro_list` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) CHARACTER SET gbk DEFAULT NULL,
  `desc` varchar(100) CHARACTER SET gbk DEFAULT NULL,
  `image` varchar(100) CHARACTER SET gbk DEFAULT NULL,
  `content` varchar(5000) CHARACTER SET gbk DEFAULT NULL,
  `sort` int(5) DEFAULT NULL,
  `src` varchar(50) CHARACTER SET gbk DEFAULT NULL,
  `index_desc` varchar(200) DEFAULT NULL,
  `index_img` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of yz_pro_list
-- ----------------------------
INSERT INTO `yz_pro_list` VALUES ('1', '青春跑', '谁说青春留不住?             带着青春跑起来!', '/Uploads/images/201606271230495770abf987fd9.jpg', '&lt;h1&gt;&lt;img src=&quot;/ueditor/php/upload/image/20160623/1466670481904355.jpg&quot; title=&quot;1466670481904355.jpg&quot; alt=&quot;1.jpg&quot;/&gt;&lt;/h1&gt;&lt;p&gt;&lt;img src=&quot;/ueditor/php/upload/image/20160623/1466670484554507.jpg&quot; title=&quot;1466670484554507.jpg&quot; alt=&quot;2.jpg&quot;/&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/ueditor/php/upload/image/20160623/1466670488131935.png&quot; title=&quot;1466670488131935.png&quot; alt=&quot;3.png&quot;/&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/ueditor/php/upload/image/20160623/1466670491329193.png&quot; title=&quot;1466670491329193.png&quot; alt=&quot;4.png&quot;/&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/ueditor/php/upload/image/20160623/1466670495839291.png&quot; title=&quot;1466670495839291.png&quot; alt=&quot;5.png&quot;/&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/ueditor/php/upload/image/20160623/1466670499596850.png&quot; title=&quot;1466670499596850.png&quot; alt=&quot;QQ截图20160623161705.png&quot;/&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/ueditor/php/upload/image/20160623/1466670502135894.png&quot; title=&quot;1466670502135894.png&quot; alt=&quot;QQ截图20160623162647.png&quot;/&gt;&lt;/p&gt;', '1', null, '谁说青春留不住?带着青春放肆跑!来一次说跑就跑的青春之旅吧，给自己一次任性的机会，重新找回青春岁月里的冲动活力！', '/Uploads/images/2016062913410257735f6e8c97d.png');
INSERT INTO `yz_pro_list` VALUES ('2', '嘉年华', '运动嘉年华                    欢乐无极限', '/Uploads/images/20160628164315577238a3b030c.jpg', '&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p style=&quot;text-align:center&quot;&gt;&lt;img src=&quot;/ueditor/php/upload/image/20160628/1467105945706848.jpg&quot; title=&quot;1467105945706848.jpg&quot; alt=&quot;运动嘉年华11.jpg&quot; width=&quot;1108&quot; height=&quot;132&quot;/&gt;&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/ueditor/php/upload/image/20160628/1467103230384772.jpg&quot; title=&quot;1467103230384772.jpg&quot; width=&quot;1089&quot; height=&quot;313&quot;/&gt;&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/ueditor/php/upload/image/20160628/1467107057934173.jpg&quot; title=&quot;1467107057934173.jpg&quot; alt=&quot;1467107057934173.jpg&quot; width=&quot;1108&quot; height=&quot;132&quot;/&gt;&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/ueditor/php/upload/image/20160629/1467168354577105.jpg&quot; title=&quot;1467168354577105.jpg&quot; alt=&quot;1467168354577105.jpg&quot; width=&quot;1089&quot; height=&quot;313&quot;/&gt;&lt;/p&gt;', '2', null, '综合性大型文体娱乐狂欢节庆活动，场面雄伟壮观，内容非富多彩，融体育,文化 ,娱乐三大元素的综合性狂欢节庆活动。', '/Uploads/images/2016062913394657735f22b4466.png');
INSERT INTO `yz_pro_list` VALUES ('3', '趣味运动会', '体育无处不在                                        运动无限精彩', '/Uploads/images/201606271231385770ac2aed0da.jpg', '&lt;p&gt;&lt;img src=&quot;/ueditor/php/upload/image/20160623/1466668924223765.jpg&quot; title=&quot;1466668924223765.jpg&quot; alt=&quot;sport_pic1.jpg&quot;/&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/ueditor/php/upload/image/20160623/1466668929127589.png&quot; title=&quot;1466668929127589.png&quot; alt=&quot;QQ截图20160623155900.png&quot;/&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/ueditor/php/upload/image/20160623/1466668964135627.png&quot; title=&quot;1466668964135627.png&quot; alt=&quot;QQ截图20160623160022.png&quot;/&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/ueditor/php/upload/image/20160623/1466668968372310.png&quot; title=&quot;1466668968372310.png&quot; alt=&quot;QQ截图20160623160113.png&quot;/&gt;&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;', '3', null, '项目新颖，参与性强，气氛活跃，可控性强，形式多变，玩法独特，\r\n寓教于娱，赏心悦目的.......阳光健康的运动新形式.', '/Uploads/images/20160629140024577363f8553cc.png');
INSERT INTO `yz_pro_list` VALUES ('4', '主题活动', '您需要的 就是我们专注的', '/Uploads/images/201606271233255770ac95c0269.png', '&lt;p style=&quot;margin-bottom: 5px; text-align: center;&quot;&gt;&lt;img src=&quot;/ueditor/php/upload/image/20160623/1466669237856633.jpg&quot; title=&quot;1466669237856633.jpg&quot; alt=&quot;outdoor_rec_title.jpg&quot;/&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/ueditor/php/upload/image/20160623/1466669240809384.jpg&quot; title=&quot;1466669240809384.jpg&quot; alt=&quot;outdoor_rec_pic1.jpg&quot;/&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/ueditor/php/upload/image/20160623/1466669244343823.jpg&quot; title=&quot;1466669244343823.jpg&quot; alt=&quot;outdoor_rec_pic2.jpg&quot;/&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/ueditor/php/upload/image/20160623/1466669453514358.jpg&quot; title=&quot;1466669453514358.jpg&quot; alt=&quot;outdoor_rec_title.jpg&quot;/&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/ueditor/php/upload/image/20160701/1467355654874528.jpg&quot; title=&quot;1467355654874528.jpg&quot; alt=&quot;1467355654874528.jpg&quot; width=&quot;1200&quot; height=&quot;288&quot;/&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/ueditor/php/upload/image/20160701/1467358812744914.jpg&quot; title=&quot;1467358812744914.jpg&quot; alt=&quot;1467358812744914.jpg&quot; width=&quot;1200&quot; height=&quot;834&quot;/&gt;&lt;/p&gt;', '4', null, '传统节庆活动，企业员工家庭日，企业相亲会，拓展训练，主题年会，体育旅游......您需要的，就是我们所专注的。', '/Uploads/images/2016062913382857735ed47d317.png');
INSERT INTO `yz_pro_list` VALUES ('5', '体育赛事', '悦运动 悦快乐', '/Uploads/images/201606271234475770ace7d6f4c.jpg', '&lt;p&gt;&lt;img src=&quot;/ueditor/php/upload/image/20160623/1466670928793032.jpg&quot; title=&quot;1466670928793032.jpg&quot; alt=&quot;event_pic1.jpg&quot;/&gt;&lt;/p&gt;&lt;p&gt;&lt;img class=&quot;loadingclass&quot; id=&quot;loading_iq4g9vxy&quot; src=&quot;http://www.sports-yizhong.com/Public/UEditor/themes/default/images/spacer.gif&quot; title=&quot;正在上传...&quot;/&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/ueditor/php/upload/image/20160623/1466670934113436.png&quot; title=&quot;1466670934113436.png&quot; alt=&quot;QQ截图20160623163214.png&quot;/&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/ueditor/php/upload/image/20160702/1467421287446668.png&quot; title=&quot;1467421287446668.png&quot; alt=&quot;1466670931873157.png&quot;/&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/ueditor/php/upload/image/20160623/1466670945134074.png&quot; title=&quot;1466670945134074.png&quot; alt=&quot;QQ截图20160623163304.png&quot;/&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/ueditor/php/upload/image/20160623/1466670948109864.png&quot; title=&quot;1466670948109864.png&quot; alt=&quot;QQ截图20160623163323.png&quot;/&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/ueditor/php/upload/image/20160623/1466670951136810.png&quot; title=&quot;1466670951136810.png&quot; alt=&quot;QQ截图20160623163346.png&quot;/&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/ueditor/php/upload/image/20160623/1466670953649779.png&quot; title=&quot;1466670953649779.png&quot; alt=&quot;QQ截图20160623163405.png&quot;/&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/ueditor/php/upload/image/20160623/1466670963167436.png&quot; title=&quot;1466670963167436.png&quot; alt=&quot;QQ截图20160623163429.png&quot;/&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/ueditor/php/upload/image/20160623/1466670966451833.png&quot; title=&quot;1466670966451833.png&quot; alt=&quot;QQ截图20160623163447.png&quot;/&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/ueditor/php/upload/image/20160623/1466670969118488.png&quot; title=&quot;1466670969118488.png&quot; alt=&quot;QQ截图20160623163506.png&quot;/&gt;&lt;/p&gt;', '5', null, '众多的体育营销专业人才，众多体育明星资源，众多的媒体资源，运动营销一举多得，不一样的主题，最大化的宣传.', '/Uploads/images/2016062913375557735eb343e02.png');
INSERT INTO `yz_pro_list` VALUES ('6', '体育营销 ', '洞察体育力量   打造营销爆点', '/Uploads/images/201606271236525770ad6436ab3.jpg', '&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/ueditor/php/upload/image/20160702/1467429871949820.jpg&quot; title=&quot;1467429871949820.jpg&quot; alt=&quot;1467429871949820.jpg&quot; width=&quot;1109&quot; height=&quot;234&quot;/&gt;&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/ueditor/php/upload/image/20160702/1467427981919993.jpg&quot; title=&quot;1467427981919993.jpg&quot; alt=&quot;1467427981919993.jpg&quot; width=&quot;1120&quot; height=&quot;497&quot;/&gt;&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/ueditor/php/upload/image/20160702/1467430094422479.jpg&quot; title=&quot;1467430094422479.jpg&quot; alt=&quot;11.jpg&quot; width=&quot;1138&quot; height=&quot;304&quot;/&gt;&lt;/p&gt;', '6', null, '专业的赛事策划，专业的裁判服务、专业的运动器材，亿众体育为您提供一站式的传统类体育比赛。', '/Uploads/images/2016062913381257735ec403bf2.png');

-- ----------------------------
-- Table structure for `yz_pro_road`
-- ----------------------------
DROP TABLE IF EXISTS `yz_pro_road`;
CREATE TABLE `yz_pro_road` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(20) DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL,
  `desc` varchar(1000) DEFAULT NULL,
  `sort` int(10) DEFAULT NULL,
  `type` int(2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=gbk;

-- ----------------------------
-- Records of yz_pro_road
-- ----------------------------

-- ----------------------------
-- Table structure for `yz_video`
-- ----------------------------
DROP TABLE IF EXISTS `yz_video`;
CREATE TABLE `yz_video` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sort` int(11) DEFAULT NULL,
  `video` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk;

-- ----------------------------
-- Records of yz_video
-- ----------------------------

-- ----------------------------
-- Table structure for `yz_wubai`
-- ----------------------------
DROP TABLE IF EXISTS `yz_wubai`;
CREATE TABLE `yz_wubai` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `image` varchar(70) CHARACTER SET gbk DEFAULT NULL,
  `sort` int(3) DEFAULT NULL,
  `typeid` int(3) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=51 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of yz_wubai
-- ----------------------------
INSERT INTO `yz_wubai` VALUES ('1', '/Uploads/images/20160624140558576ccdc633e69.png', '1', '1');
INSERT INTO `yz_wubai` VALUES ('2', '/Uploads/images/20160624140612576ccdd450f3b.png', '2', '1');
INSERT INTO `yz_wubai` VALUES ('3', '/Uploads/images/20160624140629576ccde57bb4b.png', '3', '1');
INSERT INTO `yz_wubai` VALUES ('4', '/Uploads/images/20160624140641576ccdf17e311.png', '4', '1');
INSERT INTO `yz_wubai` VALUES ('5', '/Uploads/images/20160624140653576ccdfd9960d.png', '5', '1');
INSERT INTO `yz_wubai` VALUES ('6', '/Uploads/images/20160624140707576cce0b5af1a.png', '6', '1');
INSERT INTO `yz_wubai` VALUES ('7', '/Uploads/images/20160624140717576cce15da693.png', '7', '1');
INSERT INTO `yz_wubai` VALUES ('8', '/Uploads/images/20160624140729576cce21b2335.png', '8', '1');
INSERT INTO `yz_wubai` VALUES ('9', '/Uploads/images/20160624140739576cce2b67e63.png', '9', '1');
INSERT INTO `yz_wubai` VALUES ('10', '/Uploads/images/20160624140754576cce3a34edb.png', '10', '1');
INSERT INTO `yz_wubai` VALUES ('11', '/Uploads/images/20160624140806576cce46947b0.png', '1', '2');
INSERT INTO `yz_wubai` VALUES ('12', '/Uploads/images/20160624140818576cce52a0d26.png', '2', '2');
INSERT INTO `yz_wubai` VALUES ('13', '/Uploads/images/20160624140828576cce5c67692.png', '3', '2');
INSERT INTO `yz_wubai` VALUES ('14', '/Uploads/images/20160624140837576cce651fe11.png', '4', '2');
INSERT INTO `yz_wubai` VALUES ('15', '/Uploads/images/20160624140855576cce779f108.png', '5', '2');
INSERT INTO `yz_wubai` VALUES ('16', '/Uploads/images/20160624102936576c9b10d0fd4.jpg', '6', '2');
INSERT INTO `yz_wubai` VALUES ('17', '/Uploads/images/20160624140912576cce8816ede.png', '7', '2');
INSERT INTO `yz_wubai` VALUES ('18', '/Uploads/images/20160624140925576cce9510b50.png', '8', '2');
INSERT INTO `yz_wubai` VALUES ('19', '/Uploads/images/20160624140935576cce9f210ab.png', '9', '2');
INSERT INTO `yz_wubai` VALUES ('20', '/Uploads/images/20160624140944576ccea8ce7ab.png', '10', '2');
INSERT INTO `yz_wubai` VALUES ('21', '/Uploads/images/20160624140956576cceb43ff96.png', '1', '3');
INSERT INTO `yz_wubai` VALUES ('22', '/Uploads/images/20160624141011576ccec39a65d.png', '2', '3');
INSERT INTO `yz_wubai` VALUES ('23', '/Uploads/images/20160624141022576cceced023a.png', '3', '3');
INSERT INTO `yz_wubai` VALUES ('24', '/Uploads/images/20160624141042576ccee2cc0ec.png', '4', '3');
INSERT INTO `yz_wubai` VALUES ('25', '/Uploads/images/20160624141051576cceeb8e83c.png', '5', '3');
INSERT INTO `yz_wubai` VALUES ('26', '/Uploads/images/20160624141105576ccef952ebb.png', '6', '3');
INSERT INTO `yz_wubai` VALUES ('27', '/Uploads/images/20160624141114576ccf02ef406.png', '7', '3');
INSERT INTO `yz_wubai` VALUES ('28', '/Uploads/images/20160624141122576ccf0aac7b1.png', '8', '3');
INSERT INTO `yz_wubai` VALUES ('29', '/Uploads/images/20160624141133576ccf15d93a7.png', '9', '3');
INSERT INTO `yz_wubai` VALUES ('30', '/Uploads/images/20160624141148576ccf242ed03.png', '10', '3');
INSERT INTO `yz_wubai` VALUES ('31', '/Uploads/images/20160624141201576ccf31e69ee.png', '1', '4');
INSERT INTO `yz_wubai` VALUES ('32', '/Uploads/images/20160624141211576ccf3b77e0a.png', '2', '4');
INSERT INTO `yz_wubai` VALUES ('33', '/Uploads/images/20160624141220576ccf446ac6c.png', '3', '4');
INSERT INTO `yz_wubai` VALUES ('34', '/Uploads/images/20160624141231576ccf4f1474b.png', '4', '4');
INSERT INTO `yz_wubai` VALUES ('35', '/Uploads/images/20160624141238576ccf5683540.png', '5', '4');
INSERT INTO `yz_wubai` VALUES ('36', '/Uploads/images/20160624141247576ccf5f2a0a0.png', '6', '4');
INSERT INTO `yz_wubai` VALUES ('37', '/Uploads/images/20160624141305576ccf71431d5.png', '7', '4');
INSERT INTO `yz_wubai` VALUES ('38', '/Uploads/images/20160624141318576ccf7e946d9.png', '8', '4');
INSERT INTO `yz_wubai` VALUES ('39', '/Uploads/images/20160624141332576ccf8c68ead.png', '9', '4');
INSERT INTO `yz_wubai` VALUES ('40', '/Uploads/images/20160624141405576ccfad308e2.png', '10', '4');
INSERT INTO `yz_wubai` VALUES ('41', '/Uploads/images/20160624141417576ccfb9e1339.png', '1', '5');
INSERT INTO `yz_wubai` VALUES ('42', '/Uploads/images/20160624141427576ccfc38e7e5.png', '2', '5');
INSERT INTO `yz_wubai` VALUES ('43', '/Uploads/images/20160624141435576ccfcb412ca.png', '3', '5');
INSERT INTO `yz_wubai` VALUES ('44', '/Uploads/images/20160624141444576ccfd4090a2.png', '4', '5');
INSERT INTO `yz_wubai` VALUES ('45', '/Uploads/images/20160624141453576ccfddcbf9d.png', '5', '5');
INSERT INTO `yz_wubai` VALUES ('46', '/Uploads/images/20160624141502576ccfe63e973.png', '6', '5');
INSERT INTO `yz_wubai` VALUES ('47', '/Uploads/images/20160624141512576ccff043b85.png', '7', '5');
INSERT INTO `yz_wubai` VALUES ('48', '/Uploads/images/20160624141519576ccff7ed12c.png', '8', '5');
INSERT INTO `yz_wubai` VALUES ('49', '/Uploads/images/20160624141526576ccffe92bc0.png', '9', '5');
INSERT INTO `yz_wubai` VALUES ('50', '/Uploads/images/20160624141535576cd0071808a.png', '10', '5');

-- ----------------------------
-- Table structure for `yz_yzser`
-- ----------------------------
DROP TABLE IF EXISTS `yz_yzser`;
CREATE TABLE `yz_yzser` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(10) DEFAULT NULL,
  `icon` varchar(50) DEFAULT NULL,
  `content` varchar(5000) DEFAULT NULL,
  `sort` int(3) DEFAULT NULL,
  `icon2` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=gbk;

-- ----------------------------
-- Records of yz_yzser
-- ----------------------------
INSERT INTO `yz_yzser` VALUES ('1', '舞台搭建', '/Uploads/images/20160624143637576cd4f541b57.jpg', '&lt;p style=&quot;padding: 0px; border: 0px; margin-top: 0px; margin-bottom: 0px; list-style: none; outline: none; font-family: 微软雅黑; font-stretch: normal; font-size: 12px; line-height: 25px; white-space: normal;&quot;&gt;&lt;span style=&quot;padding: 0px; border: 0px; margin: 0px; list-style: none; outline: none; font-size: 16px; font-weight: bold; color: rgb(165, 0, 0);&quot;&gt;舞台 / 背板 / 龙门架&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;padding: 0px; border: 0px; margin-top: 0px; margin-bottom: 0px; list-style: none; outline: none; font-family: 微软雅黑; font-stretch: normal; font-size: 12px; line-height: 25px; white-space: normal;&quot;&gt;&lt;span style=&quot;padding: 0px; border: 0px; margin: 0px; list-style: none; outline: none; font-size: 16px; font-weight: bold; color: rgb(165, 0, 0);&quot;&gt;&lt;br/&gt;&lt;/span&gt;&lt;/p&gt;&lt;p class=&quot;tents&quot; style=&quot;padding: 0px; border: 0px; margin-top: 0px; margin-bottom: 0px; list-style: none; outline: none; font-family: 微软雅黑; text-indent: 25px; text-align: left; word-break: break-all; word-wrap: break-word; font-stretch: normal; font-size: 12px; line-height: 25px; white-space: normal;&quot;&gt;&lt;span style=&quot;font-size: 14px; font-family: 宋体, SimSun; color: rgb(127, 127, 127);&quot;&gt;举办活动时，通常会需要舞台和背景板，如果有这方面的要求，只需一个电话，亿众体育会安排搭建厂商亲临活动场所，观察、量场地大小，给出专业的建议。亿众体育具备丰富的设计、现场施工及全案执行能力，能为客户提供由设计制作到后期安装的一站式服务，为客户减少了中间环节带来的风险和成本。&lt;/span&gt;&lt;/p&gt;&lt;p class=&quot;alignc&quot; style=&quot;padding: 0px; border: 0px; margin-top: 0px; margin-bottom: 0px; list-style: none; outline: none; font-family: 微软雅黑; text-align: center; font-stretch: normal; font-size: 12px; line-height: 25px; white-space: normal;&quot;&gt;&lt;br/&gt;&lt;br/&gt;&lt;br/&gt;&lt;span style=&quot;padding: 0px; border: 0px; margin: 0px; list-style: none; outline: none; font-size: 16px; font-weight: bold; color: rgb(165, 0, 0);&quot;&gt;客户需求请拨打：0371-63395262&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/ueditor/php/upload/image/20160624/1466752632203791.jpg&quot; title=&quot;1466752632203791.jpg&quot; alt=&quot;service_pic1.jpg&quot;/&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/ueditor/php/upload/image/20160624/1466752640795587.jpg&quot; title=&quot;1466752640795587.jpg&quot; alt=&quot;service_pic2.jpg&quot;/&gt;&lt;/p&gt;', '1', '/Uploads/images/20160624144226576cd652b16eb.jpg');
INSERT INTO `yz_yzser` VALUES ('2', '音响租赁', '/Uploads/images/20160624144405576cd6b5dd101.jpg', '&lt;h1 style=&quot;text-align: left; text-indent: 0px;&quot;&gt;&lt;span style=&quot;text-align: justify; text-indent: 25px; font-size: 24px; font-weight: normal; line-height: 35px; color: rgb(216, 46, 59); font-family: 微软雅黑; background-color: rgb(255, 255, 255);&quot;&gt;&amp;nbsp; &amp;nbsp; &amp;nbsp; &lt;span style=&quot;text-align: justify; text-indent: 25px; font-weight: normal; line-height: 35px; font-family: 宋体, SimSun; font-size: 14px; color: rgb(127, 127, 127); background-color: rgb(255, 255, 255);&quot;&gt;&amp;nbsp;&lt;/span&gt;&lt;/span&gt;&lt;span style=&quot;line-height: 25px; text-align: justify; text-indent: 25px; font-family: 宋体, SimSun; font-size: 14px; color: rgb(89, 89, 89); background-color: rgb(255, 255, 255);&quot;&gt;亿众体育有多年的活动服务经验，可以在完全满足设备要求的基础上，以最少的配置实现最大的利用，在完美实现视觉效果处理的同时，为客户有效节省设备租赁和使用成本。各种大型活动中音响设备特别重要，它是现场所有声音来源的保障，亿众会根据场地的不同和活动性质的不同给出定向的音响解决方案。音响解决方案的因素，总结为以下几点：活动场地的面积、场地高度、活动形式等几个方面。&lt;/span&gt;&lt;/h1&gt;&lt;h1 style=&quot;text-align: left; text-indent: 0px;&quot;&gt;&lt;br/&gt;&lt;/h1&gt;&lt;p style=&quot;text-align: left;&quot;&gt;&lt;span style=&quot;color: rgb(165, 0, 0); font-weight: bold; line-height: 25px; text-align: center; font-family: 宋体, SimSun;&quot;&gt;&amp;nbsp; &amp;nbsp; &lt;/span&gt;&lt;span style=&quot;color: rgb(165, 0, 0); font-family: 微软雅黑; font-weight: bold; line-height: 25px; text-align: center;&quot;&gt;&lt;img src=&quot;/ueditor/php/upload/image/20160624/1466757474690734.png&quot; title=&quot;1466757474690734.png&quot; alt=&quot;1.png&quot;/&gt;&amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp;&amp;nbsp;&lt;/span&gt;&lt;br/&gt;&lt;span style=&quot;color: rgb(165, 0, 0); font-family: 微软雅黑; font-weight: bold; line-height: 25px; text-align: center;&quot;&gt;&lt;/span&gt;&lt;/p&gt;', '2', '/Uploads/images/20160624144408576cd6b8464a3.jpg');
INSERT INTO `yz_yzser` VALUES ('3', '服装定制', '/Uploads/images/20160624144423576cd6c72b725.jpg', '&lt;p style=&quot;margin-top: 0px; margin-bottom: 0px; padding: 0px; border: 0px; list-style: none; outline: none; font-stretch: normal; font-size: 12px; line-height: 25px; font-family: 微软雅黑; color: rgb(53, 53, 53); white-space: normal; background-color: rgb(255, 255, 255);&quot;&gt;&lt;span style=&quot;margin: 0px; padding: 0px; border: 0px; list-style: none; outline: none; font-size: 16px; font-weight: bold; color: rgb(165, 0, 0);&quot;&gt;团体服/队服&lt;/span&gt;&lt;/p&gt;&lt;p class=&quot;tents&quot; style=&quot;margin-top: 0px; margin-bottom: 0px; padding: 0px; border: 0px; list-style: none; outline: none; text-indent: 25px; text-align: left; word-break: break-all; word-wrap: break-word; font-stretch: normal; font-size: 12px; line-height: 25px; font-family: 微软雅黑; color: rgb(53, 53, 53); white-space: normal; background-color: rgb(255, 255, 255);&quot;&gt;&lt;span style=&quot;font-family: 宋体, SimSun; font-size: 14px; color: rgb(127, 127, 127);&quot;&gt;大型活动中整体的着装很重要，同时也可以树立参加活动团队的形象及凝聚力，创造独特的团队文化，更好的体现团队精神面貌，能呈现出更好的视觉效果，为奉献一场完美的盛会奠定良好的基础。亿众体育有多年大型活动举办的经验，我们会针对您的不同需求，为您提供整体的服装解决方案，减少中间环节的繁琐工作，更好的帮您控制成本。&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/ueditor/php/upload/image/20160627/1466992778941144.png&quot; title=&quot;1466992778941144.png&quot;/&gt;&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;', '3', '/Uploads/images/20160624144530576cd70a58cdf.jpg');
INSERT INTO `yz_yzser` VALUES ('4', '摄影摄像', '/Uploads/images/20160624144446576cd6de943e1.jpg', '&lt;p style=&quot;margin-top: 0px; margin-bottom: 0px; padding: 0px; border: 0px; list-style: none; outline: none; font-stretch: normal; font-size: 12px; line-height: 25px; font-family: 微软雅黑; color: rgb(53, 53, 53); white-space: normal; background-color: rgb(255, 255, 255);&quot;&gt;&lt;span style=&quot;margin: 0px; padding: 0px; border: 0px; list-style: none; outline: none; font-size: 16px; font-weight: bold; color: rgb(165, 0, 0);&quot;&gt;无人机/DV数码/摇臂/集体合影&lt;/span&gt;&lt;/p&gt;&lt;p class=&quot;tents&quot; style=&quot;margin-top: 0px; margin-bottom: 0px; padding: 0px; border: 0px; list-style: none; outline: none; text-indent: 25px; text-align: left; word-break: break-all; word-wrap: break-word; font-stretch: normal; font-size: 12px; line-height: 25px; font-family: 微软雅黑; color: rgb(53, 53, 53); white-space: normal; background-color: rgb(255, 255, 255);&quot;&gt;&lt;span style=&quot;font-family: 宋体, SimSun; font-size: 14px; color: rgb(127, 127, 127);&quot;&gt;&amp;nbsp;由于摄影在画面方面的局限性，决定了摄影除了对活动流程记录的功能之外，最大的目的在于对个体的纪念和留存。可以根据活动时间发展顺序，记录活动各个环节，完成一套完整的拍摄。如此一来，摄影对个体、单环节和特定内容的记录功能就会被体现得淋漓尽致，让一场完整活动的任何一个重要环节都能够得到完整的保留和记录。&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;text-align:center&quot;&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/ueditor/php/upload/image/20160627/1467011445346266.jpg&quot; title=&quot;1467011445346266.jpg&quot; alt=&quot;FotorCreated.jpg&quot;/&gt;&lt;/p&gt;', '4', '/Uploads/images/20160624144538576cd7122c596.jpg');
INSERT INTO `yz_yzser` VALUES ('5', '奖品定制', '/Uploads/images/20160624144506576cd6f214e9b.jpg', '&lt;p style=&quot;margin-top: 0px; margin-bottom: 0px; padding: 0px; border: 0px; list-style: none; outline: none; font-stretch: normal; font-size: 12px; line-height: 25px; font-family: 微软雅黑; color: rgb(53, 53, 53); white-space: normal; background-color: rgb(255, 255, 255);&quot;&gt;&lt;span style=&quot;margin: 0px; padding: 0px; border: 0px; list-style: none; outline: none; font-size: 16px; font-weight: bold; color: rgb(165, 0, 0);&quot;&gt;奖杯/奖牌/奖状/奖品&lt;/span&gt;&lt;/p&gt;&lt;p class=&quot;tents&quot; style=&quot;margin-top: 0px; margin-bottom: 0px; padding: 0px; border: 0px; list-style: none; outline: none; text-indent: 25px; text-align: left; word-break: break-all; word-wrap: break-word; font-stretch: normal; font-size: 12px; line-height: 25px; font-family: 微软雅黑; color: rgb(53, 53, 53); white-space: normal; background-color: rgb(255, 255, 255);&quot;&gt;&lt;span style=&quot;font-family: 宋体, SimSun; font-size: 14px; color: rgb(127, 127, 127);&quot;&gt;运动会中无论是团体项目还是个人项目，都会分出不同的名次，作为对参赛人员的肯定及鼓励，最后一个环节都会涉及颁奖仪式，需要有不同的奖品对应不同的参赛项目，主要分为团体奖和个人奖。亿众体育有丰富的奖品规划经验和奖品供应商，同时会按照客户的需求与供应商一起参与奖品的规划设计，以快捷的服务和专业的实力赢得客户的认可。&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/ueditor/php/upload/image/20160627/1467010273549529.jpg&quot; title=&quot;1467010273549529.jpg&quot; alt=&quot;22.jpg&quot;/&gt;&lt;/p&gt;', '5', '/Uploads/images/20160624144514576cd6fa1b9ce.jpg');
INSERT INTO `yz_yzser` VALUES ('6', '体质检测', '/Uploads/images/20160624144601576cd7296e0ea.jpg', '&lt;p style=&quot;line-height: 15px; text-align: left;&quot;&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&lt;span style=&quot;font-size: 14px;&quot;&gt;&amp;nbsp; &lt;span style=&quot;font-size: 14px; font-family: 宋体, SimSun;&quot;&gt;&amp;nbsp;&lt;span style=&quot;font-size: 14px; font-family: 宋体, SimSun; color: rgb(127, 127, 127);&quot;&gt;体质是指人体的质量，是人类生产和生活的物质基础。体质检测与一般意义上的医疗体检不同。体质检测不是为人们检查和诊断疾病；目的在于帮助人们了解自己的身体素质状况总体结果和总体的评价。亿众体育有丰富的体育活动举办经验，前期对活动参与者进行体质监测是非常有必要的，可以为组织锻炼人员开展体育运动提供科学的依据。亿众体育有专业的体质监测供应商，为活动开展提供科学健康的保证。&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;&lt;center&gt;&lt;img src=&quot;/ueditor/php/upload/image/20160624/1466756220505061.png&quot; title=&quot;1466756220505061.png&quot; alt=&quot;QQ截图20160624161631.png&quot; width=&quot;646&quot; height=&quot;333&quot;/&gt;&lt;/center&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;', '6', '/Uploads/images/20160624144604576cd72c51a97.jpg');
INSERT INTO `yz_yzser` VALUES ('7', '车辆租赁', '/Uploads/images/20160624144619576cd73b8898d.jpg', '&lt;p style=&quot;margin-top: 0px; margin-bottom: 0px; padding: 0px; border: 0px; list-style: none; outline: none; font-stretch: normal; font-size: 12px; line-height: 25px; font-family: 微软雅黑; color: rgb(53, 53, 53); white-space: normal; background-color: rgb(255, 255, 255);&quot;&gt;&lt;span style=&quot;margin: 0px; padding: 0px; border: 0px; list-style: none; outline: none; font-size: 16px; font-weight: bold; color: rgb(165, 0, 0);&quot;&gt;客车/商务车/轿车&lt;/span&gt;&lt;/p&gt;&lt;p class=&quot;tents&quot; style=&quot;margin-top: 0px; margin-bottom: 0px; padding: 0px; border: 0px; list-style: none; outline: none; text-indent: 25px; text-align: left; word-break: break-all; word-wrap: break-word; font-stretch: normal; font-size: 12px; line-height: 25px; font-family: 微软雅黑; color: rgb(53, 53, 53); white-space: normal; background-color: rgb(255, 255, 255);&quot;&gt;&lt;span style=&quot;font-family: 宋体, SimSun; font-size: 14px; color: rgb(127, 127, 127);&quot;&gt;不同的活动需要不同的车辆规划，不同的乘客构成需要不同的车型搭配、不同的车辆服务形式。客户只需要告知服务需求和基本信息，就可以得到优质、专业的解决方案。对于任何车辆服务，关注重点都在于：第一，硬件要求：安全、卫生、舒适；第二，驾乘人员：驾驶技术、驾驶记录、服务语言、仪容仪表；第三，后方支持：应急服务及预案制定、车辆调度、车辆辅助设施、旅程翻译服务。&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/ueditor/php/upload/image/20160627/1466993688712919.png&quot; title=&quot;1466993688712919.png&quot; alt=&quot;a.png&quot;/&gt;&lt;/p&gt;', '7', '/Uploads/images/20160624144622576cd73eed2cb.jpg');
INSERT INTO `yz_yzser` VALUES ('8', '创意甜点', '/Uploads/images/20160624144730576cd782b5729.jpg', '&lt;h1 class=&quot;h24 alignc&quot; style=&quot;margin: 0px; padding: 0px; border: 0px; list-style: none; outline: none; text-align: center; font-weight: normal; font-stretch: normal; font-size: 24px; line-height: 35px; font-family: 微软雅黑; color: rgb(216, 46, 59); white-space: normal;&quot;&gt;创意甜点&lt;/h1&gt;&lt;p class=&quot;tents&quot; style=&quot;margin-top: 0px; margin-bottom: 0px; padding: 0px; border: 0px; list-style: none; outline: none; text-indent: 25px; text-align: left; word-break: break-all; word-wrap: break-word; font-stretch: normal; line-height: 25px;&quot;&gt;&lt;span style=&quot;font-family: 宋体, SimSun; font-size: 14px; color: rgb(127, 127, 127);&quot;&gt;爱美食，爱分享已成为人们的一种休闲生活态度，工作休闲之余、朋友圈、微博等场景总能看到各种美食分享。美食是能拉近人与人之间的距离，增进人与人之间感情的交流。所以说，美食是可以作为团队成员和谐氛围营造的润滑剂。试想，活动完美落幕后，浓香的奶茶配上精美的甜品，团队成员在一起分享美食分享生活，是有多美好。亿众体育可以提供精美甜点及轻食服务，让您的活动现场更加赏心悦目。&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/ueditor/php/upload/image/20160627/1466993747488078.jpg&quot; title=&quot;1466993747488078.jpg&quot; alt=&quot;B.jpg&quot;/&gt;&lt;/p&gt;', '8', '/Uploads/images/20160624144733576cd785741f9.jpg');
INSERT INTO `yz_yzser` VALUES ('9', '礼仪小姐', '/Uploads/images/20160624144754576cd79ae338d.jpg', '&lt;h1 class=&quot;h24 alignc&quot; style=&quot;margin: 0px; padding: 0px; border: 0px; list-style: none; outline: none; text-align: center; font-weight: normal; font-stretch: normal; font-size: 24px; line-height: 35px; font-family: 微软雅黑; color: rgb(216, 46, 59); white-space: normal;&quot;&gt;礼仪小姐&lt;/h1&gt;&lt;p style=&quot;margin-top: 0px; margin-bottom: 0px; padding: 0px; border: 0px; list-style: none; outline: none; font-stretch: normal; line-height: 25px;&quot;&gt;&lt;span style=&quot;margin: 0px; padding: 0px; border: 0px; list-style: none; outline: none; font-size: 16px; font-weight: bold; color: rgb(165, 0, 0);&quot;&gt;礼仪/主持/模特/接待/引导&lt;/span&gt;&lt;/p&gt;&lt;p class=&quot;tents&quot; style=&quot;margin-top: 0px; margin-bottom: 0px; padding: 0px; border: 0px; list-style: none; outline: none; text-indent: 25px; text-align: left; word-break: break-all; word-wrap: break-word; font-stretch: normal; line-height: 25px;&quot;&gt;&lt;span style=&quot;font-family: 宋体, SimSun; font-size: 14px; color: rgb(127, 127, 127);&quot;&gt;主持人在整个活动中起到至关重要的作用，要根据活动的不同而选择不同的主持人，一般情况下按照活动的不同将主持人分为：年会、庆典类；拓展类；运动会类。主持人的现场控制能力需要非常强。应该根据不同的人群采取不同的方法，把现场来宾的情绪调动起来。主持人的好坏，会直接影响到一场活动的效果，不能不说是关键而微妙的一个角色。专业的礼仪接待对一场活动也很重要，活动中的一些环节礼仪必不可少，专业的礼仪可以提升一场活动的整体效果和水平。&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/ueditor/php/upload/image/20160627/1466993788283179.jpg&quot; title=&quot;1466993788283179.jpg&quot; alt=&quot;C.jpg&quot;/&gt;&lt;/p&gt;', '9', '/Uploads/images/20160624144800576cd7a04ac8c.jpg');
INSERT INTO `yz_yzser` VALUES ('10', '画册制作', '/Uploads/images/20160624144814576cd7aeee4da.jpg', '&lt;p class=&quot;tents&quot; style=&quot;margin-top: 0px; margin-bottom: 0px; padding: 0px; border: 0px; list-style: none; outline: none; text-indent: 25px; text-align: left; word-break: break-all; word-wrap: break-word; font-stretch: normal; line-height: 25px;&quot;&gt;&amp;nbsp; &lt;span style=&quot;font-family: 宋体, SimSun; font-size: 14px; color: rgb(127, 127, 127);&quot;&gt;一场活动结束，会有许多精彩的过程与瞬间。凝聚经典，决定瞬间，亿众体育拥有8年活动摄影与后期制作的一线经验，将光影照片绘制成册，以方便您长久保留及翻阅，同时也可作为您企业文化成果的展示。&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/ueditor/php/upload/image/20160627/1466994552654610.jpg&quot; title=&quot;1466994552654610.jpg&quot; alt=&quot;F.jpg&quot;/&gt;&lt;/p&gt;', '10', '/Uploads/images/20160624144817576cd7b16213e.jpg');
INSERT INTO `yz_yzser` VALUES ('11', '场地锁定', '/Uploads/images/20160624144835576cd7c379fe0.jpg', '&lt;p style=&quot;text-align: left;&quot;&gt;&amp;nbsp; &amp;nbsp; &lt;span style=&quot;font-family: 宋体, SimSun; font-size: 14px; color: rgb(127, 127, 127);&quot;&gt;&amp;nbsp;亿众体育经过多年发展，与众多室外运动场，市内运动馆以及专业比赛场地场馆达成了长期的合作关系，根据您的需求，为您推荐最适合的场馆方案选择， 并为您提供一站式的场地布置方案。&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;text-align: left;&quot;&gt;&lt;span style=&quot;font-family: 宋体, SimSun; font-size: 14px; color: rgb(127, 127, 127);&quot;&gt;&lt;img src=&quot;/ueditor/php/upload/image/20160629/1467190024330873.png&quot; title=&quot;1467190024330873.png&quot; alt=&quot;图1.png&quot;/&gt;&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;text-align: left;&quot;&gt;&lt;span style=&quot;font-family: 宋体, SimSun; font-size: 14px; color: rgb(127, 127, 127);&quot;&gt;&lt;img src=&quot;/ueditor/php/upload/image/20160629/1467190114280046.jpg&quot; title=&quot;1467190114280046.jpg&quot; alt=&quot;图2.jpg&quot;/&gt;&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;text-align: left;&quot;&gt;&lt;span style=&quot;font-family: 宋体, SimSun; font-size: 14px; color: rgb(127, 127, 127);&quot;&gt;&lt;img src=&quot;/ueditor/php/upload/image/20160629/1467190070322044.png&quot; title=&quot;1467190070322044.png&quot; alt=&quot;图3.png&quot;/&gt;&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;text-align: left;&quot;&gt;&lt;span style=&quot;font-family: 宋体, SimSun; font-size: 14px; color: rgb(127, 127, 127);&quot;&gt;&lt;br/&gt;&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;text-align: left;&quot;&gt;&lt;br/&gt;&lt;/p&gt;', '11', '/Uploads/images/20160624144837576cd7c56b436.jpg');
INSERT INTO `yz_yzser` VALUES ('12', '视频制作', '/Uploads/images/20160624144854576cd7d604a4e.jpg', '&lt;p&gt;&lt;a style=&quot;margin: 0px; padding: 0px; border: 0px; list-style: none; outline: none;&quot;&gt;&lt;img src=&quot;/ueditor/php/upload/image/20160627/1466993878840306.jpg&quot;/&gt;&lt;span style=&quot;margin: 0px; padding: 0px; border: 0px; list-style: none; outline: none; font-stretch: normal; font-size: 30px; line-height: 41px; color: rgb(216, 46, 59); vertical-align: middle;&quot;&gt;一站式服务 SERVICE&lt;/span&gt;&lt;/a&gt;&lt;/p&gt;&lt;p style=&quot;margin-top: 0px; margin-bottom: 0px; padding: 0px; border: 0px; list-style: none; outline: none; font-stretch: normal; font-size: 14px; line-height: 16px; color: rgb(185, 185, 185);&quot;&gt;省心省力，贴心服务&lt;/p&gt;&lt;p class=&quot;tents&quot; style=&quot;margin-top: 0px; margin-bottom: 0px; padding: 0px; border: 0px; list-style: none; outline: none; text-indent: 25px; text-align: left; word-break: break-all; word-wrap: break-word; font-stretch: normal; line-height: 25px;&quot;&gt;&lt;span style=&quot;font-family: 宋体, SimSun; font-size: 14px; color: rgb(127, 127, 127);&quot;&gt;视频是视觉动态的呈现，是动态影像的记录与再现，可以捕捉细节，留住经典。亿众体育拥有强大专业的影视制作团队，可以对活动进行全程跟踪拍摄，根据客户不同需求进行后期剪辑，制作成生动的视频，作为您活动的动态资料，完美演绎客户梦想，同时减少客户活动后期的资料收集工作。&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/ueditor/php/upload/image/20160627/1466994155797642.jpg&quot; title=&quot;1466994155797642.jpg&quot; alt=&quot;E.jpg&quot;/&gt;&lt;/p&gt;', '12', '/Uploads/images/20160624144856576cd7d81a1da.jpg');
