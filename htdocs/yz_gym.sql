/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50540
Source Host           : localhost:3306
Source Database       : yz_gym

Target Server Type    : MYSQL
Target Server Version : 50540
File Encoding         : 65001

Date: 2016-06-23 18:48:23
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `yz_admin`
-- ----------------------------
DROP TABLE IF EXISTS `yz_admin`;
CREATE TABLE `yz_admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uname` varchar(20) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `c_time` int(11) DEFAULT '1',
  `rank` tinyint(1) DEFAULT '1',
  `status` tinyint(1) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=gbk;

-- ----------------------------
-- Records of yz_admin
-- ----------------------------
INSERT INTO `yz_admin` VALUES ('1', 'admin', 'e5e2c931d4a94ecf71e12a88b0b4579b', '1', '1', '1');

-- ----------------------------
-- Table structure for `yz_cases`
-- ----------------------------
DROP TABLE IF EXISTS `yz_cases`;
CREATE TABLE `yz_cases` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `type` varchar(15) DEFAULT '1' COMMENT '案例类型',
  `title` varchar(50) DEFAULT '1' COMMENT '标题',
  `desc` varchar(200) DEFAULT '1' COMMENT '摘要',
  `content` varchar(2000) DEFAULT '1' COMMENT '正文',
  `image` varchar(50) DEFAULT '1' COMMENT '图片',
  `ptime` int(11) DEFAULT '1' COMMENT '发布时间',
  `ctime` int(11) DEFAULT '1' COMMENT '活动时间',
  `address` varchar(100) DEFAULT '1' COMMENT '活动地点',
  `number` int(5) DEFAULT '1' COMMENT '参与人数',
  `author` varchar(20) DEFAULT '管理员' COMMENT '作者',
  `count` int(6) DEFAULT '1' COMMENT '点击量',
  `typeid` int(5) DEFAULT '1',
  `link` varchar(50) DEFAULT '1' COMMENT '链接',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=gbk;

-- ----------------------------
-- Records of yz_cases
-- ----------------------------
INSERT INTO `yz_cases` VALUES ('1', '', '2013年中建三局职工趣味运动会', '2013年中建三局职工趣味运动会', '&lt;p style=&quot;padding: 20px 0px 0px 20px; border: 0px; margin-top: 0px; margin-bottom: 0px; list-style: none; outline: none; font-family: 微软雅黑; font-size: 12px; line-height: 20px; white-space: normal;&quot;&gt;时间：2013-09-23&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;地点：汉口文体中心体育馆&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;挑战人数：3000人&lt;/p&gt;&lt;p style=&quot;padding: 20px 0px 0px 20px; border: 0px; margin-top: 0px; margin-bottom: 0px; list-style: none; outline: none; font-family: 微软雅黑; font-size: 12px; line-height: 20px; white-space: normal;&quot;&gt;2013年10月在汉口文体中心体育馆顺利召开，本次活动由武汉亿众体育文化传播有限公司承办。活动中有传统赛事也有趣味性很强的项目，本次趣味运动会缓解了中建三局职工工作之余的疲劳情绪，娱乐了他们的身心健康，为进一步提高工作效率起到一定作用。&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/ueditor/php/upload/image/20160622/1466589246128204.jpg&quot; title=&quot;1466589246128204.jpg&quot; alt=&quot;20160323161293179317.jpg&quot;/&gt;&lt;/p&gt;', '/Uploads/images/tu.jpg', '1232553600', '1', '1', '1', '管理员', '44', '1', '1');
INSERT INTO `yz_cases` VALUES ('2', '', '1', '1', '&lt;p&gt;1&lt;/p&gt;', '/Uploads/images/20160621213412576942545d922.jpg', '1232553600', '1', '1', '1', '管理员', '8', '2', '1');
INSERT INTO `yz_cases` VALUES ('5', '', '1', '1', '&lt;p&gt;1&lt;/p&gt;', '/Uploads/images/201606212138455769436528c55.jpg', '1232553600', '1', '1', '1', '管理员', '3', '3', '1');
INSERT INTO `yz_cases` VALUES ('6', '4', '1', '1', '1', '1', '1232553600', '1', '1', '1', '管理员', '1', '4', '1');
INSERT INTO `yz_cases` VALUES ('13', '', '1', '1', '1', '1', '1', '1', '', '1', '管理员', '1', '1', '1');

-- ----------------------------
-- Table structure for `yz_case_type`
-- ----------------------------
DROP TABLE IF EXISTS `yz_case_type`;
CREATE TABLE `yz_case_type` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `typeid` int(3) NOT NULL,
  `typename` varchar(20) NOT NULL,
  `sort` int(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=gbk;

-- ----------------------------
-- Records of yz_case_type
-- ----------------------------
INSERT INTO `yz_case_type` VALUES ('1', '0', '趣味运动会', '1');
INSERT INTO `yz_case_type` VALUES ('2', '0', '主题活动', '2');
INSERT INTO `yz_case_type` VALUES ('3', '0', '传统体育', '3');
INSERT INTO `yz_case_type` VALUES ('5', '0', '体育营销', '4');
INSERT INTO `yz_case_type` VALUES ('6', '0', '青春跑', '5');
INSERT INTO `yz_case_type` VALUES ('7', '0', '嘉年华', '6');
INSERT INTO `yz_case_type` VALUES ('8', '0', '视频链接', '7');

-- ----------------------------
-- Table structure for `yz_contactus_back`
-- ----------------------------
DROP TABLE IF EXISTS `yz_contactus_back`;
CREATE TABLE `yz_contactus_back` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(10) DEFAULT NULL,
  `tel` int(11) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `gsname` varchar(50) DEFAULT NULL,
  `gsad` varchar(50) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `desc` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=gbk;

-- ----------------------------
-- Records of yz_contactus_back
-- ----------------------------
INSERT INTO `yz_contactus_back` VALUES ('1', '宋贺林', '2147483647', 'shlsuccessd@126.com', '石化盈科信息技术有限公司', '北京市朝阳区朝外大街丰联广场', '北京', '石化盈科信息技术有限公司石化盈科信息技术有限公司石化盈科信息技术有限公司石化盈科信息技术有限公司石化盈科信息技术有限公司石化盈科信息技术有限公司');
INSERT INTO `yz_contactus_back` VALUES ('6', '宋贺林', '0', '电子邮箱', '公司名称', '公司地址', '所在城市', '');
INSERT INTO `yz_contactus_back` VALUES ('4', '陈群', '0', '??电子邮箱', '石化盈科', '??公司地址', '??所在城市', '');
INSERT INTO `yz_contactus_back` VALUES ('5', '您的姓名', '0', '电子邮箱', '公司名称', '公司地址', '所在城市', '');
INSERT INTO `yz_contactus_back` VALUES ('7', '宋贺林', '0', '电子邮箱', '公司名称', '公司地址', '所在城市', '');

-- ----------------------------
-- Table structure for `yz_contact_info`
-- ----------------------------
DROP TABLE IF EXISTS `yz_contact_info`;
CREATE TABLE `yz_contact_info` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `tel_yw` varchar(11) DEFAULT NULL,
  `tel_ch` varchar(11) DEFAULT NULL,
  `tel_mj` varchar(11) DEFAULT NULL,
  `tel_kf` varchar(11) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `road_self` varchar(100) DEFAULT NULL,
  `road_bus1` varchar(100) DEFAULT NULL,
  `road_bus2` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=gbk;

-- ----------------------------
-- Records of yz_contact_info
-- ----------------------------
INSERT INTO `yz_contact_info` VALUES ('1', '027-8752917', '027-8752917', '027-8752917', '400-365-170', 'yizhongsports@163.com', '洪山区野芷湖西路16号OVU创客星6楼', '郑州市郑东新区商务外环路5号10层1003号', '乘坐590路 777路 320路,站台:野芷湖西路保利心语公交场站', '乘坐590路 777路 320路,站台:野芷湖西路保利心语公交场站');

-- ----------------------------
-- Table structure for `yz_copyright`
-- ----------------------------
DROP TABLE IF EXISTS `yz_copyright`;
CREATE TABLE `yz_copyright` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tel` varchar(50) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `copy` varchar(100) DEFAULT NULL,
  `tech` varchar(100) DEFAULT NULL,
  `url` varchar(100) DEFAULT NULL,
  `img_url` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=gbk;

-- ----------------------------
-- Records of yz_copyright
-- ----------------------------
INSERT INTO `yz_copyright` VALUES ('1', '027-59279307', '郑州市郑东新区商务外环路5号10层1003号', '@2016 河南亿众体育文化传播有限公司', '河南开天网络科技有限公司', 'http://ktwlkj.com//', null);

-- ----------------------------
-- Table structure for `yz_footlink`
-- ----------------------------
DROP TABLE IF EXISTS `yz_footlink`;
CREATE TABLE `yz_footlink` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(10) DEFAULT NULL,
  `text` varchar(10) DEFAULT NULL,
  `url` varchar(100) DEFAULT NULL,
  `time` int(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk;

-- ----------------------------
-- Records of yz_footlink
-- ----------------------------

-- ----------------------------
-- Table structure for `yz_img`
-- ----------------------------
DROP TABLE IF EXISTS `yz_img`;
CREATE TABLE `yz_img` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `img_url` varchar(200) DEFAULT NULL,
  `link` varchar(200) DEFAULT NULL,
  `title` varchar(200) DEFAULT NULL,
  `sort` tinyint(3) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `c_time` int(11) DEFAULT NULL,
  `type` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=gbk;

-- ----------------------------
-- Records of yz_img
-- ----------------------------
INSERT INTO `yz_img` VALUES ('1', '/Uploads/images/banner_1.jpg', '', '图1', '1', '1', null, '1');
INSERT INTO `yz_img` VALUES ('2', '/Uploads/images/banner_2.jpg', null, '图2', '2', '1', null, '1');
INSERT INTO `yz_img` VALUES ('3', '/Uploads/images/banner_3.jpg', null, '图3', '3', '1', null, '1');
INSERT INTO `yz_img` VALUES ('4', '/Uploads/images/banner_4.jpg', null, '图4', '4', '1', null, '1');
INSERT INTO `yz_img` VALUES ('5', '/Uploads/images/banner_5.jpg', null, '图5', '5', '1', null, '1');
INSERT INTO `yz_img` VALUES ('6', '/Uploads/images/banner_6.jpg', null, '图6', '6', '1', null, '1');

-- ----------------------------
-- Table structure for `yz_index`
-- ----------------------------
DROP TABLE IF EXISTS `yz_index`;
CREATE TABLE `yz_index` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `video` varchar(100) DEFAULT NULL,
  `f1` varchar(100) DEFAULT NULL,
  `f2` varchar(100) DEFAULT NULL,
  `f3` varchar(100) DEFAULT NULL,
  `f4` varchar(100) DEFAULT NULL,
  `f5` varchar(100) DEFAULT NULL,
  `f6` varchar(100) DEFAULT NULL,
  `f7` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=gbk;

-- ----------------------------
-- Records of yz_index
-- ----------------------------
INSERT INTO `yz_index` VALUES ('1', 'http://player.youku.com/embed/XMTU5NTI0MDI4OA==', '十年行业积淀，汇聚精英； 追求细节完美，品质制胜', '全国最具实力体育文化创意机构之一', 'Please believe in the power of the brand', '请相信品牌的力量', 'HAND IN HAND TO ENJOY SPORTS', '携手亿众 享受运动', '作为国家全民健身工程的推动者，亿众体育一直倡导将生命与运动，工作相结合，主张健康并快乐的生活工作。');

-- ----------------------------
-- Table structure for `yz_intro_img`
-- ----------------------------
DROP TABLE IF EXISTS `yz_intro_img`;
CREATE TABLE `yz_intro_img` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `image` varchar(100) DEFAULT NULL,
  `desc` varchar(100) DEFAULT NULL,
  `type` int(2) DEFAULT NULL,
  `typename` varchar(5) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk;

-- ----------------------------
-- Records of yz_intro_img
-- ----------------------------

-- ----------------------------
-- Table structure for `yz_intro_intro`
-- ----------------------------
DROP TABLE IF EXISTS `yz_intro_intro`;
CREATE TABLE `yz_intro_intro` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `content` varchar(3000) DEFAULT NULL,
  `type` int(2) DEFAULT '1',
  `typename` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=gbk;

-- ----------------------------
-- Records of yz_intro_intro
-- ----------------------------
INSERT INTO `yz_intro_intro` VALUES ('1', '&lt;p style=&quot;padding: 0px; border: 0px; margin-top: 0px; margin-bottom: 0px; list-style: none; outline: none; font-family: 微软雅黑; font-stretch: normal; font-size: 14px; line-height: 30px; white-space: normal;&quot;&gt;&amp;nbsp; &amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;河南亿盛众联体育文化有限公司（简称亿众体育）隶属于武汉亿众体育文化传播有限公司，是中原地区首家以推广全民健身计划，发展体育文化事业为导向的新生专业体育公司，作为国家全民健身工程的推动者，亿众体育一直倡导将生命与运动，工作相结合，主张健康并快乐的生活工作。&lt;/p&gt;&lt;p style=&quot;padding: 0px; border: 0px; margin-top: 0px; margin-bottom: 0px; list-style: none; outline: none; font-family: 微软雅黑; font-stretch: normal; font-size: 14px; line-height: 30px; white-space: normal;&quot;&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;作为一家高起点的新型体育机构，公司秉承“健身全民 服务大众”的行业运作理念，盘活了大量体育专业人才，汇聚了大批体育策划精英，专业从事大型体育赛事的策划执行以及企事业单位，各大行业的运动会，趣味运动会，运动嘉年华，青春跑系列，体育营销活动策划，凭借专业精准的市场运作经验，全新的管理理念，周到的服务，卓越的品质，全力打造中国最有影响力的体育产业运营机构。&lt;/p&gt;&lt;p style=&quot;padding: 0px; border: 0px; margin-top: 0px; margin-bottom: 0px; list-style: none; outline: none; font-family: 微软雅黑; font-stretch: normal; font-size: 14px; line-height: 30px; white-space: normal;&quot;&gt;企业口号：&lt;span style=&quot;padding: 0px; border: 0px; margin: 0px; list-style: none; outline: none; color: red;&quot;&gt;携手亿众 享受运动&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;padding: 0px; border: 0px; margin-top: 0px; margin-bottom: 0px; list-style: none; outline: none; font-family: 微软雅黑; font-stretch: normal; font-size: 14px; line-height: 30px; white-space: normal;&quot;&gt;企业理念：&lt;span style=&quot;padding: 0px; border: 0px; margin: 0px; list-style: none; outline: none; color: red;&quot;&gt;悦运动 悦快乐&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;padding: 0px; border: 0px; margin-top: 0px; margin-bottom: 0px; list-style: none; outline: none; font-family: 微软雅黑; font-stretch: normal; font-size: 14px; line-height: 30px; white-space: normal;&quot;&gt;服务宗旨：&lt;span style=&quot;padding: 0px; border: 0px; margin: 0px; list-style: none; outline: none; color: red;&quot;&gt;专诚 专注 专业&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;', '1', '公司简介');
INSERT INTO `yz_intro_intro` VALUES ('3', '&lt;p style=&quot;padding: 0px; border: 0px; margin-top: 0px; margin-bottom: 0px; list-style: none; outline: none; font-family: 微软雅黑; font-stretch: normal; font-size: 12px; line-height: 30px; white-space: normal;&quot;&gt;&lt;span style=&quot;font-size: 14px;&quot;&gt;&amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; 没有实力，岂能领跑?谁领跑，看实力!领先有道，跑动人生.&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;padding: 0px; border: 0px; margin-top: 0px; margin-bottom: 0px; list-style: none; outline: none; font-family: 微软雅黑; font-stretch: normal; font-size: 12px; line-height: 30px; white-space: normal;&quot;&gt;&lt;span style=&quot;font-size: 14px;&quot;&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;武汉亿众体育文化传播有限公司成立于2007年，是武汉市首家以推广国家全民健身计划、发展体育文化事业为导向成立的新生体育文化传播公司。作为国家&amp;quot;全民健身工程&amp;quot;的推动者，亿众体育一直倡导将运动与生命、工作紧密结合，主张健康并快乐的生活、工作，作为一家高起点的新型机构，亿众体育成立。&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;padding: 0px; border: 0px; margin-top: 0px; margin-bottom: 0px; list-style: none; outline: none; font-family: 微软雅黑; font-stretch: normal; font-size: 12px; line-height: 30px; white-space: normal;&quot;&gt;&lt;img src=&quot;/ueditor/php/upload/image/20160622/1466606230193083.jpg&quot; title=&quot;1466606230193083.jpg&quot; alt=&quot;teamphoto-1.jpg&quot;/&gt;&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;', '2', '公司团队');
INSERT INTO `yz_intro_intro` VALUES ('4', '&lt;p&gt;&lt;img src=&quot;/ueditor/php/upload/image/20160622/1466606754792559.png&quot; title=&quot;1466606754792559.png&quot; alt=&quot;cooperation(1).png&quot;/&gt;&lt;img src=&quot;/ueditor/php/upload/image/20160622/1466606757261805.png&quot; title=&quot;1466606757261805.png&quot; alt=&quot;cooperation(2).png&quot;/&gt;&lt;img src=&quot;/ueditor/php/upload/image/20160622/1466606782637946.png&quot; title=&quot;1466606782637946.png&quot; alt=&quot;cooperation(3).png&quot;/&gt;&lt;img src=&quot;/ueditor/php/upload/image/20160622/1466606785631362.png&quot; title=&quot;1466606785631362.png&quot; alt=&quot;cooperation(4).png&quot;/&gt;&lt;img src=&quot;/ueditor/php/upload/image/20160622/1466606787171739.png&quot; title=&quot;1466606787171739.png&quot; alt=&quot;cooperation(5).png&quot;/&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/ueditor/php/upload/image/20160622/1466606791127300.png&quot; title=&quot;1466606791127300.png&quot; alt=&quot;cooperation(6).png&quot;/&gt;&lt;img src=&quot;/ueditor/php/upload/image/20160622/1466606794111176.png&quot; title=&quot;1466606794111176.png&quot; alt=&quot;cooperation(7).png&quot;/&gt;&lt;img src=&quot;/ueditor/php/upload/image/20160622/1466606796424852.png&quot; title=&quot;1466606796424852.png&quot; alt=&quot;cooperation(8).png&quot;/&gt;&lt;img src=&quot;/ueditor/php/upload/image/20160622/1466606798397269.png&quot; title=&quot;1466606798397269.png&quot; alt=&quot;cooperation(9).png&quot;/&gt;&lt;img src=&quot;/ueditor/php/upload/image/20160622/1466606800110535.png&quot; title=&quot;1466606800110535.png&quot; alt=&quot;cooperation(10).png&quot;/&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/ueditor/php/upload/image/20160622/1466606803135106.png&quot; title=&quot;1466606803135106.png&quot; alt=&quot;cooperation(11).png&quot;/&gt;&lt;img src=&quot;/ueditor/php/upload/image/20160622/1466606805531098.png&quot; title=&quot;1466606805531098.png&quot; alt=&quot;cooperation(12).png&quot;/&gt;&lt;img src=&quot;/ueditor/php/upload/image/20160622/1466606807576109.png&quot; title=&quot;1466606807576109.png&quot; alt=&quot;cooperation(13).png&quot;/&gt;&lt;img src=&quot;/ueditor/php/upload/image/20160622/1466606810853578.png&quot; title=&quot;1466606810853578.png&quot; alt=&quot;cooperation(14).png&quot;/&gt;&lt;img src=&quot;/ueditor/php/upload/image/20160622/1466606812335045.png&quot; title=&quot;1466606812335045.png&quot; alt=&quot;cooperation(15).png&quot;/&gt;&lt;/p&gt;', '5', '客户合作');
INSERT INTO `yz_intro_intro` VALUES ('5', '&lt;table style=&quot;width: 1079px;&quot;&gt;&lt;tbody&gt;&lt;tr class=&quot;firstRow&quot;&gt;&lt;td width=&quot;344&quot; valign=&quot;top&quot; style=&quot;word-break: break-all;&quot;&gt;&lt;img src=&quot;/ueditor/php/upload/image/20160622/1466610534105165.jpg&quot; title=&quot;1466610534105165.jpg&quot; alt=&quot;qualificationphoto-1.jpg&quot;/&gt;&lt;/td&gt;&lt;td width=&quot;344&quot; valign=&quot;top&quot; style=&quot;word-break: break-all;&quot;&gt;&lt;img src=&quot;/ueditor/php/upload/image/20160622/1466610537897642.png&quot; title=&quot;1466610537897642.png&quot; alt=&quot;1466610313311334.png&quot;/&gt;&lt;/td&gt;&lt;td width=&quot;344&quot; valign=&quot;top&quot; style=&quot;word-break: break-all;&quot;&gt;&lt;img src=&quot;/ueditor/php/upload/image/20160622/1466610544256469.jpg&quot; title=&quot;1466610544256469.jpg&quot; alt=&quot;qualificationphoto-3.jpg&quot;/&gt;&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td width=&quot;344&quot; valign=&quot;top&quot; style=&quot;word-break: break-all;&quot;&gt;&lt;h3 style=&quot;padding: 0px; border: 0px; margin: 15px 0px 0px; list-style: none; outline: none; font-family: 微软雅黑; font-size: 14px; font-weight: normal; text-align: center; white-space: normal;&quot;&gt;湖北省策划协会副秘书长单位&lt;/h3&gt;&lt;/td&gt;&lt;td width=&quot;344&quot; valign=&quot;top&quot; style=&quot;word-break: break-all;&quot;&gt;&lt;h3 style=&quot;padding: 0px; border: 0px; margin: 15px 0px 0px; list-style: none; outline: none; font-family: 微软雅黑; font-size: 14px; font-weight: normal; text-align: center; white-space: normal;&quot;&gt;中网网动中国优秀 &amp;nbsp; &amp;nbsp;&lt;br/&gt;合作伙伴 &amp;nbsp;&amp;nbsp;&lt;/h3&gt;&lt;span style=&quot;font-family: 微软雅黑; font-size: 14px; text-align: center;&quot;&gt;&lt;/span&gt;&lt;/td&gt;&lt;td width=&quot;344&quot; valign=&quot;top&quot; style=&quot;word-break: break-all;&quot;&gt;&lt;h3 style=&quot;padding: 0px; border: 0px; margin: 15px 0px 0px; list-style: none; outline: none; font-family: 微软雅黑; font-size: 14px; font-weight: normal; text-align: center; white-space: normal;&quot;&gt;湖北省策划协会副秘书长单位&lt;/h3&gt;&lt;/td&gt;&lt;/tr&gt;&lt;/tbody&gt;&lt;/table&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;', '4', '公司资质');

-- ----------------------------
-- Table structure for `yz_intro_story`
-- ----------------------------
DROP TABLE IF EXISTS `yz_intro_story`;
CREATE TABLE `yz_intro_story` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `time` int(20) DEFAULT NULL,
  `content` varchar(100) DEFAULT NULL,
  `yearid` int(5) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=52 DEFAULT CHARSET=gbk;

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
INSERT INTO `yz_intro_story` VALUES ('45', '1429315200', '2015年&quot;JJ比赛被&quot;全国二打一扑克锦标赛湖北站', '8');
INSERT INTO `yz_intro_story` VALUES ('46', '1429920000', '世贸中南六城接力&quot;为爱奔跑&quot;暖心行动', '8');
INSERT INTO `yz_intro_story` VALUES ('47', '1430179200', '湖北石油机关第一届职工趣味运动会', '8');
INSERT INTO `yz_intro_story` VALUES ('48', '1430956800', '周大福华中区2015年SMART+运动会', '8');
INSERT INTO `yz_intro_story` VALUES ('49', '1433548800', '2015民生信用卡是网球俱乐部邀请赛武汉站活动', '8');
INSERT INTO `yz_intro_story` VALUES ('50', '1436486400', '&quot;亲亲一家人，快乐嘉年华&quot;武汉国创资本亲子活动', '8');
INSERT INTO `yz_intro_story` VALUES ('51', '1437177600', '中国光大银行武汉分行2015年职工水上趣味运动会', '8');

-- ----------------------------
-- Table structure for `yz_intro_year`
-- ----------------------------
DROP TABLE IF EXISTS `yz_intro_year`;
CREATE TABLE `yz_intro_year` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `yearid` int(5) DEFAULT NULL,
  `name` varchar(20) DEFAULT NULL,
  `sort` int(5) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=gbk;

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
  `type` varchar(15) DEFAULT NULL COMMENT '新闻类型',
  `title` varchar(50) DEFAULT NULL COMMENT '标题',
  `desc` varchar(200) DEFAULT NULL,
  `content` varchar(3000) DEFAULT NULL,
  `image` varchar(50) DEFAULT NULL,
  `ptime` int(11) DEFAULT NULL,
  `author` varchar(20) DEFAULT NULL,
  `count` int(6) DEFAULT NULL COMMENT '点击量',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=gbk;

-- ----------------------------
-- Records of yz_news
-- ----------------------------
INSERT INTO `yz_news` VALUES ('1', '户外扩展', '2016武汉城市投资集团棋牌运动会', '2016年4月6号，招商银行武汉分行第十二届企业文化节，“行庆生日跑”活动', '&lt;p&gt;&lt;span style=&quot;font-family: 微软雅黑; font-size: 14px; line-height: 25px;&quot;&gt;学校趣味运动会就是以学生为主体，以娱乐为中心，以趣味游戏为载体，在锻炼身体的同时同时兼顾培养学生坚韧不拔的精神和团结协作意识的一种体育比赛形式。&lt;/span&gt;&lt;br/&gt;&lt;span style=&quot;font-family: 微软雅黑; font-size: 14px; line-height: 25px;&quot;&gt;学校趣味运动会是以“发展体能，突出趣味竞技性”为主题的运动会，趣味运动会比赛项目乐趣十足、竞技性强，丰富学生的课外生活，给学生与教师一个交流、合作的空间。在活动中让学生体验运动的趣味和快乐、学会合作，且培养学生集体荣誉感和竞争意识，使孩子们的身心得到健康全面发展。&lt;/span&gt;&lt;br/&gt;&lt;span style=&quot;font-family: 微软雅黑; font-size: 14px; line-height: 25px;&quot;&gt;学校趣味运动会的特点就是体力、智力和合作，核心体现一个“趣”字， “趣味”不仅充分激发了孩子们对体育活动的兴趣，也培养了他们团结协作的精神。趣味运动会是田径运动会的一个有效补充，趣味运动会能广泛而持久地吸引学生的兴趣和热情，为学生终生体育打下良好的基础。&lt;/span&gt;&lt;img src=&quot;/ueditor/php/upload/image/20160622/1466588394136531.jpg&quot; title=&quot;1466588394136531.jpg&quot; alt=&quot;20160517141731143114.jpg&quot;/&gt;&lt;/p&gt;', '/Uploads/images/20160406154155185518.jpg', '1466588915', '管理员', '119');

-- ----------------------------
-- Table structure for `yz_pro_detail`
-- ----------------------------
DROP TABLE IF EXISTS `yz_pro_detail`;
CREATE TABLE `yz_pro_detail` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) DEFAULT NULL,
  `src` varchar(70) DEFAULT NULL,
  `img1` varchar(70) DEFAULT NULL,
  `img2` varchar(70) DEFAULT NULL,
  `sort` int(5) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=gbk;

-- ----------------------------
-- Records of yz_pro_detail
-- ----------------------------
INSERT INTO `yz_pro_detail` VALUES ('1', '奔跑吧兄弟', '/Uploads/images/20160623095039576b406f3585c.jpg', '/Uploads/images/20160623091019576b36fb057f4.jpg', '/Uploads/images/20160623091021576b36fd9c604.jpg', '1');
INSERT INTO `yz_pro_detail` VALUES ('2', '穿越主题', '/Uploads/images/20160623095348576b412c09e50.jpg', '/Uploads/images/20160623095107576b408bc2644.jpg', '/Uploads/images/20160623095110576b408e79afc.jpg', '2');
INSERT INTO `yz_pro_detail` VALUES ('4', '大富翁', 'http://localhost/Uploads/source/none.jpg', '/Uploads/images/20160623091917576b39150013e.jpg', '/Uploads/images/20160623091919576b391762906.jpg', '3');
INSERT INTO `yz_pro_detail` VALUES ('5', '多米诺骨牌', 'http://localhost/Uploads/source/none.jpg', '/Uploads/images/20160623095136576b40a869864.jpg', '/Uploads/images/20160623095138576b40aab014c.jpg', '4');
INSERT INTO `yz_pro_detail` VALUES ('6', '疯狂过山车', 'http://localhost/Uploads/source/none.jpg', '/Uploads/images/20160623094446576b3f0ed88f2.jpg', '/Uploads/images/20160623094449576b3f11247b2.jpg', '5');
INSERT INTO `yz_pro_detail` VALUES ('7', '激情非洲鼓', 'http://localhost/Uploads/source/none.jpg', '/Uploads/images/20160623095148576b40b47595c.jpg', '/Uploads/images/20160623095150576b40b6818c4.jpg', '6');
INSERT INTO `yz_pro_detail` VALUES ('8', '极限探宝', 'http://localhost/Uploads/source/none.jpg', '/Uploads/images/20160623094517576b3f2d30fb2.jpg', '/Uploads/images/20160623095205576b40c5bbe5c.jpg', '7');
INSERT INTO `yz_pro_detail` VALUES ('9', '假面舞会', 'http://localhost/Uploads/source/none.jpg', '/Uploads/images/20160623095217576b40d198e34.jpg', '/Uploads/images/20160623095219576b40d3943fc.jpg', '8');
INSERT INTO `yz_pro_detail` VALUES ('10', '军事主题', 'http://localhost/Uploads/source/none.jpg', '/Uploads/images/20160623094548576b3f4c987f2.jpg', '/Uploads/images/20160623094551576b3f4f2eee2.jpg', '9');
INSERT INTO `yz_pro_detail` VALUES ('11', '拉斯维加斯', 'http://localhost/Uploads/source/none.jpg', '/Uploads/images/20160623095230576b40deb848c.jpg', '/Uploads/images/20160623095233576b40e1bebac.jpg', '10');
INSERT INTO `yz_pro_detail` VALUES ('12', '企业好声音', 'http://localhost/Uploads/source/none.jpg', '/Uploads/images/20160623094623576b3f6f27f2b.jpg', '/Uploads/images/20160623094625576b3f71c658b.jpg', '11');
INSERT INTO `yz_pro_detail` VALUES ('13', '企业家庭日', 'http://localhost/Uploads/source/none.jpg', '/Uploads/images/20160623095242576b40ea96274.jpg', '/Uploads/images/20160623095244576b40ecb7b2c.jpg', '12');
INSERT INTO `yz_pro_detail` VALUES ('14', '趣味运动会', 'http://localhost/Uploads/source/none.jpg', '/Uploads/images/20160623094707576b3f9b57feb.jpg', '/Uploads/images/20160623094709576b3f9d113e3.jpg', '13');
INSERT INTO `yz_pro_detail` VALUES ('15', '烧烤主题', 'http://localhost/Uploads/source/none.jpg', '/Uploads/images/20160623095258576b40fae692c.jpg', '/Uploads/images/20160623095303576b40ffafa44.jpg', '14');
INSERT INTO `yz_pro_detail` VALUES ('16', '拓展训练', 'http://localhost/Uploads/source/none.jpg', '/Uploads/images/20160623094757576b3fcd13643.jpg', '/Uploads/images/20160623094801576b3fd192713.jpg', '15');
INSERT INTO `yz_pro_detail` VALUES ('17', '温泉主题', 'http://localhost/Uploads/source/none.jpg', '/Uploads/images/20160623095319576b410f1da54.jpg', '/Uploads/images/20160623095315576b410b93e84.jpg', '16');
INSERT INTO `yz_pro_detail` VALUES ('18', '真人CS', 'http://localhost/Uploads/source/none.jpg', '/Uploads/images/20160623094833576b3ff1680f3.jpg', '/Uploads/images/20160623094836576b3ff490edb.jpg', '17');

-- ----------------------------
-- Table structure for `yz_pro_list`
-- ----------------------------
DROP TABLE IF EXISTS `yz_pro_list`;
CREATE TABLE `yz_pro_list` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) DEFAULT NULL,
  `desc` varchar(100) DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL,
  `content` varchar(5000) DEFAULT NULL,
  `sort` int(5) DEFAULT NULL,
  `src` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=gbk;

-- ----------------------------
-- Records of yz_pro_list
-- ----------------------------
INSERT INTO `yz_pro_list` VALUES ('1', '青春跑', '体育无处不在，运动无限精彩', '/Uploads/images/20160623112506576b5692d3e74.jpg', '&lt;p&gt;&lt;img src=&quot;/ueditor/php/upload/image/20160623/1466670481904355.jpg&quot; title=&quot;1466670481904355.jpg&quot; alt=&quot;1.jpg&quot;/&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/ueditor/php/upload/image/20160623/1466670484554507.jpg&quot; title=&quot;1466670484554507.jpg&quot; alt=&quot;2.jpg&quot;/&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/ueditor/php/upload/image/20160623/1466670488131935.png&quot; title=&quot;1466670488131935.png&quot; alt=&quot;3.png&quot;/&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/ueditor/php/upload/image/20160623/1466670491329193.png&quot; title=&quot;1466670491329193.png&quot; alt=&quot;4.png&quot;/&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/ueditor/php/upload/image/20160623/1466670495839291.png&quot; title=&quot;1466670495839291.png&quot; alt=&quot;5.png&quot;/&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/ueditor/php/upload/image/20160623/1466670499596850.png&quot; title=&quot;1466670499596850.png&quot; alt=&quot;QQ截图20160623161705.png&quot;/&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/ueditor/php/upload/image/20160623/1466670502135894.png&quot; title=&quot;1466670502135894.png&quot; alt=&quot;QQ截图20160623162647.png&quot;/&gt;&lt;/p&gt;', null, null);
INSERT INTO `yz_pro_list` VALUES ('2', '嘉年华', '体育无处不在，运动无限精彩', '/Uploads/images/20160623112726576b571e6f76d.jpg', '&lt;p&gt;&lt;img src=&quot;/ueditor/php/upload/image/20160623/1466669965986546.jpg&quot; title=&quot;1466669965986546.jpg&quot; alt=&quot;outdoor_rec_title.jpg&quot;/&gt;&lt;img src=&quot;/ueditor/php/upload/image/20160623/1466669968680074.png&quot; title=&quot;1466669968680074.png&quot; alt=&quot;QQ截图20160623160752.png&quot;/&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/ueditor/php/upload/image/20160623/1466669976662689.png&quot; title=&quot;1466669976662689.png&quot; alt=&quot;QQ截图20160623160805.png&quot;/&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/ueditor/php/upload/image/20160623/1466669982134018.png&quot; title=&quot;1466669982134018.png&quot; alt=&quot;QQ截图20160623160814.png&quot;/&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/ueditor/php/upload/image/20160623/1466670004136582.png&quot; title=&quot;1466670004136582.png&quot; alt=&quot;QQ截图20160623161653.png&quot;/&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/ueditor/php/upload/image/20160623/1466670009917437.png&quot; title=&quot;1466670009917437.png&quot; alt=&quot;QQ截图20160623161659.png&quot;/&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/ueditor/php/upload/image/20160623/1466670011985427.png&quot; title=&quot;1466670011985427.png&quot; alt=&quot;QQ截图20160623161705.png&quot;/&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/ueditor/php/upload/image/20160623/1466670014944633.png&quot; title=&quot;1466670014944633.png&quot; alt=&quot;QQ截图20160623161712.png&quot;/&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/ueditor/php/upload/image/20160623/1466670017729732.png&quot; title=&quot;1466670017729732.png&quot; alt=&quot;QQ截图20160623161718.png&quot;/&gt;&lt;/p&gt;', null, null);
INSERT INTO `yz_pro_list` VALUES ('3', '趣味运动会', '体育无处不在，运动无限精彩', '/Uploads/images/20160623112742576b572ec534d.jpg', '&lt;p&gt;&lt;img src=&quot;/ueditor/php/upload/image/20160623/1466668924223765.jpg&quot; title=&quot;1466668924223765.jpg&quot; alt=&quot;sport_pic1.jpg&quot;/&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/ueditor/php/upload/image/20160623/1466668929127589.png&quot; title=&quot;1466668929127589.png&quot; alt=&quot;QQ截图20160623155900.png&quot;/&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/ueditor/php/upload/image/20160623/1466668964135627.png&quot; title=&quot;1466668964135627.png&quot; alt=&quot;QQ截图20160623160022.png&quot;/&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/ueditor/php/upload/image/20160623/1466668968372310.png&quot; title=&quot;1466668968372310.png&quot; alt=&quot;QQ截图20160623160113.png&quot;/&gt;&lt;/p&gt;&lt;p&gt;&lt;/p&gt;', null, null);
INSERT INTO `yz_pro_list` VALUES ('4', '户外拓展', '体育无处不在，运动无限精彩', '/Uploads/images/20160623112750576b57364672d.jpg', '&lt;p style=&quot;margin-bottom: 5px; text-align: center;&quot;&gt;&lt;img src=&quot;/ueditor/php/upload/image/20160623/1466669237856633.jpg&quot; title=&quot;1466669237856633.jpg&quot; alt=&quot;outdoor_rec_title.jpg&quot;/&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/ueditor/php/upload/image/20160623/1466669240809384.jpg&quot; title=&quot;1466669240809384.jpg&quot; alt=&quot;outdoor_rec_pic1.jpg&quot;/&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/ueditor/php/upload/image/20160623/1466669244343823.jpg&quot; title=&quot;1466669244343823.jpg&quot; alt=&quot;outdoor_rec_pic2.jpg&quot;/&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/ueditor/php/upload/image/20160623/1466669453514358.jpg&quot; title=&quot;1466669453514358.jpg&quot; alt=&quot;outdoor_rec_title.jpg&quot;/&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/ueditor/php/upload/image/20160623/1466669457606877.png&quot; title=&quot;1466669457606877.png&quot; alt=&quot;QQ截图20160623160752.png&quot;/&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/ueditor/php/upload/image/20160623/1466669460542630.png&quot; title=&quot;1466669460542630.png&quot; alt=&quot;QQ截图20160623160805.png&quot;/&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/ueditor/php/upload/image/20160623/1466669463503428.png&quot; title=&quot;1466669463503428.png&quot; alt=&quot;QQ截图20160623160814.png&quot;/&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/ueditor/php/upload/image/20160623/1466669466320586.png&quot; title=&quot;1466669466320586.png&quot; alt=&quot;QQ截图20160623160822.png&quot;/&gt;&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;', null, null);
INSERT INTO `yz_pro_list` VALUES ('5', '体育赛事', '体育无处不在，运动无限精彩', '/Uploads/images/20160623112801576b57416373d.jpg', '&lt;p&gt;&lt;img src=&quot;/ueditor/php/upload/image/20160623/1466670928793032.jpg&quot; title=&quot;1466670928793032.jpg&quot; alt=&quot;event_pic1.jpg&quot;/&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/ueditor/php/upload/image/20160623/1466670931873157.png&quot; title=&quot;1466670931873157.png&quot; alt=&quot;QQ截图20160623163135.png&quot;/&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/ueditor/php/upload/image/20160623/1466670934113436.png&quot; title=&quot;1466670934113436.png&quot; alt=&quot;QQ截图20160623163214.png&quot;/&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/ueditor/php/upload/image/20160623/1466670942315293.png&quot; title=&quot;1466670942315293.png&quot; alt=&quot;QQ截图20160623163237.png&quot;/&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/ueditor/php/upload/image/20160623/1466670945134074.png&quot; title=&quot;1466670945134074.png&quot; alt=&quot;QQ截图20160623163304.png&quot;/&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/ueditor/php/upload/image/20160623/1466670948109864.png&quot; title=&quot;1466670948109864.png&quot; alt=&quot;QQ截图20160623163323.png&quot;/&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/ueditor/php/upload/image/20160623/1466670951136810.png&quot; title=&quot;1466670951136810.png&quot; alt=&quot;QQ截图20160623163346.png&quot;/&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/ueditor/php/upload/image/20160623/1466670953649779.png&quot; title=&quot;1466670953649779.png&quot; alt=&quot;QQ截图20160623163405.png&quot;/&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/ueditor/php/upload/image/20160623/1466670963167436.png&quot; title=&quot;1466670963167436.png&quot; alt=&quot;QQ截图20160623163429.png&quot;/&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/ueditor/php/upload/image/20160623/1466670966451833.png&quot; title=&quot;1466670966451833.png&quot; alt=&quot;QQ截图20160623163447.png&quot;/&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/ueditor/php/upload/image/20160623/1466670969118488.png&quot; title=&quot;1466670969118488.png&quot; alt=&quot;QQ截图20160623163506.png&quot;/&gt;&lt;/p&gt;', null, null);
INSERT INTO `yz_pro_list` VALUES ('6', '体育营销 ', '体育无处不在，运动无限精彩', '/Uploads/images/20160623112807576b574760795.jpg', '&lt;p&gt;&lt;img src=&quot;/ueditor/php/upload/image/20160623/1466669057125355.jpg&quot; title=&quot;1466669057125355.jpg&quot; alt=&quot;outdoor_rec_title.jpg&quot;/&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/ueditor/php/upload/image/20160623/1466669062106585.jpg&quot; title=&quot;1466669062106585.jpg&quot; alt=&quot;outdoor_rec_pic1.jpg&quot;/&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/ueditor/php/upload/image/20160623/1466669076105371.jpg&quot; title=&quot;1466669076105371.jpg&quot; alt=&quot;outdoor_rec_pic2.jpg&quot;/&gt;&lt;/p&gt;', null, null);

-- ----------------------------
-- Table structure for `yz_wubai`
-- ----------------------------
DROP TABLE IF EXISTS `yz_wubai`;
CREATE TABLE `yz_wubai` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `image` varchar(70) DEFAULT NULL,
  `sort` int(3) DEFAULT NULL,
  `typeid` int(3) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=gbk;

-- ----------------------------
-- Records of yz_wubai
-- ----------------------------
INSERT INTO `yz_wubai` VALUES ('1', '/Uploads/images/20160623145009576b86a1c0ad3.jpg', '1', '1');
INSERT INTO `yz_wubai` VALUES ('2', '/Uploads/images/20160623145049576b86c9a6d8b.jpg', '2', '1');
INSERT INTO `yz_wubai` VALUES ('3', '/Uploads/images/20160623145103576b86d75ab93.jpg', '3', '1');
INSERT INTO `yz_wubai` VALUES ('4', '/Uploads/images/20160623145117576b86e5f0a03.jpg', '4', '1');
INSERT INTO `yz_wubai` VALUES ('5', '/Uploads/images/20160623145643576b882bef8d5.jpg', '5', '1');
INSERT INTO `yz_wubai` VALUES ('6', '/Uploads/images/20160623145654576b88365b045.jpg', '6', '1');
INSERT INTO `yz_wubai` VALUES ('7', '/Uploads/images/20160623145703576b883fefd85.jpg', '7', '1');
INSERT INTO `yz_wubai` VALUES ('8', '/Uploads/images/20160623145712576b884856c4d.jpg', '8', '1');
INSERT INTO `yz_wubai` VALUES ('9', '/Uploads/images/20160623145722576b88529a4c5.jpg', '9', '1');
INSERT INTO `yz_wubai` VALUES ('10', '/Uploads/images/20160623145731576b885be9025.jpg', '10', '1');
