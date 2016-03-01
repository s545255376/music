/*
Navicat MySQL Data Transfer

Source Server         : down
Source Server Version : 50624
Source Host           : localhost:3306
Source Database       : book

Target Server Type    : MYSQL
Target Server Version : 50624
File Encoding         : 65001

Date: 2016-02-07 23:31:51
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `thinks_category`
-- ----------------------------
DROP TABLE IF EXISTS `thinks_category`;
CREATE TABLE `thinks_category` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `name` varchar(10) DEFAULT NULL,
  `pid` int(5) DEFAULT NULL,
  `path` varchar(10) CHARACTER SET armscii8 DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=gbk;

-- ----------------------------
-- Records of thinks_category
-- ----------------------------
INSERT INTO `thinks_category` VALUES ('1', '古典音乐', '0', '0');
INSERT INTO `thinks_category` VALUES ('2', '流行音乐', '0', '0');
INSERT INTO `thinks_category` VALUES ('3', '越国古典', '1', '0-1');
INSERT INTO `thinks_category` VALUES ('4', '国内流行', '2', '0-2');
INSERT INTO `thinks_category` VALUES ('5', '生生世世', '2', '0-2');
INSERT INTO `thinks_category` VALUES ('6', '恶为恶无无v', '2', '0-2');

-- ----------------------------
-- Table structure for `thinks_download`
-- ----------------------------
DROP TABLE IF EXISTS `thinks_download`;
CREATE TABLE `thinks_download` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(10) NOT NULL,
  `cid` int(11) NOT NULL,
  `filename1` varchar(50) NOT NULL,
  `txtname1` varchar(50) NOT NULL,
  `area` varchar(10) NOT NULL,
  `singer` varchar(10) NOT NULL,
  `imagefile` varchar(100) DEFAULT NULL,
  `url` varchar(100) DEFAULT NULL,
  `downsize` varchar(50) DEFAULT NULL,
  `softid` int(11) DEFAULT NULL,
  `dnote` varchar(100) DEFAULT NULL,
  `hotstars` int(11) DEFAULT NULL,
  `dayhits` int(11) DEFAULT NULL,
  `weekhits` int(11) DEFAULT NULL,
  `lasthittime` datetime DEFAULT NULL,
  `createtime` datetime DEFAULT NULL,
  `totalhits` int(11) DEFAULT NULL,
  `ishide` tinyint(4) DEFAULT NULL,
  `ishot` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=gbk;

-- ----------------------------
-- Records of thinks_download
-- ----------------------------
INSERT INTO `thinks_download` VALUES ('1', '111', '3', '2121', '212', '212', '1221', '2112', 'http://2121211', '121221Byte', '1', '', '1', null, null, null, null, null, '1', '0');

-- ----------------------------
-- Table structure for `thinks_news`
-- ----------------------------
DROP TABLE IF EXISTS `thinks_news`;
CREATE TABLE `thinks_news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(10) DEFAULT NULL,
  `memos` varchar(100) DEFAULT NULL,
  `createtime` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=gbk;

-- ----------------------------
-- Records of thinks_news
-- ----------------------------

-- ----------------------------
-- Table structure for `thinks_software`
-- ----------------------------
DROP TABLE IF EXISTS `thinks_software`;
CREATE TABLE `thinks_software` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) CHARACTER SET gbk DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=ascii;

-- ----------------------------
-- Records of thinks_software
-- ----------------------------
INSERT INTO `thinks_software` VALUES ('1', 'media');

-- ----------------------------
-- Table structure for `thinks_upfile`
-- ----------------------------
DROP TABLE IF EXISTS `thinks_upfile`;
CREATE TABLE `thinks_upfile` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `url` varchar(100) DEFAULT NULL,
  `uname` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=gbk;

-- ----------------------------
-- Records of thinks_upfile
-- ----------------------------
INSERT INTO `thinks_upfile` VALUES ('2', '201625204836.mp3', 'G:\\apache\\htdocs\\down\\Public\\Music\\201625204836.mp3', '爱有路可退-飞儿乐团.mp3');
INSERT INTO `thinks_upfile` VALUES ('3', '20166224315.mp3', 'G:\\apache\\htdocs\\down\\Public\\Music\\20166224315.mp3', '庄心妍 - 爱囚.mp3');
INSERT INTO `thinks_upfile` VALUES ('4', '20166224328.mp3', 'G:\\apache\\htdocs\\down\\Public\\Music\\20166224328.mp3', '庄心妍 - 不要以为.mp3');
INSERT INTO `thinks_upfile` VALUES ('5', '20166224345.mp3', 'G:\\apache\\htdocs\\down\\Public\\Music\\20166224345.mp3', '庄心妍、祁隆 - 一万个舍不得.mp3');
INSERT INTO `thinks_upfile` VALUES ('6', '20166224357.mp3', 'G:\\apache\\htdocs\\down\\Public\\Music\\20166224357.mp3', '庄心妍 - 以后的以后.mp3');

-- ----------------------------
-- Table structure for `thinks_users`
-- ----------------------------
DROP TABLE IF EXISTS `thinks_users`;
CREATE TABLE `thinks_users` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `UserName` varchar(50) DEFAULT NULL,
  `UserPwd` varchar(50) DEFAULT NULL,
  `ShowNmae` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=gbk;

-- ----------------------------
-- Records of thinks_users
-- ----------------------------
INSERT INTO `thinks_users` VALUES ('1', 'admin', '112233', null);

-- ----------------------------
-- Table structure for `thinks_votes`
-- ----------------------------
DROP TABLE IF EXISTS `thinks_votes`;
CREATE TABLE `thinks_votes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content` varchar(200) DEFAULT NULL,
  `did` int(11) DEFAULT NULL,
  `grade` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=gbk;

-- ----------------------------
-- Records of thinks_votes
-- ----------------------------
