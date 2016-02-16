/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50625
Source Host           : localhost:3306
Source Database       : dic

Target Server Type    : MYSQL
Target Server Version : 50625
File Encoding         : 65001

Date: 2016-02-16 13:35:33
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for admins
-- ----------------------------
DROP TABLE IF EXISTS `admins`;
CREATE TABLE `admins` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL DEFAULT '',
  `password` varchar(50) NOT NULL,
  `email` varchar(60) NOT NULL DEFAULT '',
  `salt` varchar(32) DEFAULT NULL COMMENT '盐值',
  `last_ip` varchar(15) NOT NULL DEFAULT '',
  `last_login` int(10) DEFAULT NULL COMMENT '最后登录时间',
  `action_list` text NOT NULL,
  `role_id` int(10) DEFAULT NULL COMMENT '角色id',
  `branch_id` varchar(50) DEFAULT NULL COMMENT '门店id',
  `created` int(10) NOT NULL DEFAULT '0',
  `updated` int(10) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `user_name` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of admins
-- ----------------------------
INSERT INTO `admins` VALUES ('1', 'admin', '55209228209aec56427780de7c4b2f12', 'bzs2001@163.com', 'be47', '182.40.1.26', null, '', '8', '1,2', '1417839452', '1430871466', '2015-06-08 16:40:34', null);

-- ----------------------------
-- Table structure for dbs
-- ----------------------------
DROP TABLE IF EXISTS `dbs`;
CREATE TABLE `dbs` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `db_name` varchar(200) DEFAULT NULL,
  `db_note` varchar(200) DEFAULT NULL,
  `host` varchar(200) DEFAULT NULL,
  `username` varchar(200) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL,
  `imported` tinyint(1) DEFAULT '0' COMMENT '是否倒入',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of dbs
-- ----------------------------
INSERT INTO `dbs` VALUES ('1', 'gas', '天然气', 'localhost', 'root', '', '1');

-- ----------------------------
-- Table structure for fields
-- ----------------------------
DROP TABLE IF EXISTS `fields`;
CREATE TABLE `fields` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `table_id` varchar(255) DEFAULT NULL,
  `field_name` varchar(255) DEFAULT NULL,
  `field_type` varchar(255) DEFAULT NULL,
  `field_length` int(10) DEFAULT NULL,
  `field_note` varchar(50) DEFAULT NULL COMMENT '字段说明',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=118 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of fields
-- ----------------------------


-- ----------------------------
-- Table structure for tables
-- ----------------------------
DROP TABLE IF EXISTS `tables`;
CREATE TABLE `tables` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `db_id` varchar(255) DEFAULT NULL,
  `table_name` varchar(255) DEFAULT NULL,
  `table_note` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tables
-- ----------------------------
INSERT INTO `tables` VALUES ('1', '1', 'abnormal', '');
INSERT INTO `tables` VALUES ('2', '1', 'device', '场站');
INSERT INTO `tables` VALUES ('3', '1', 'device_data', '小型4路及以下');
INSERT INTO `tables` VALUES ('4', '1', 'device_data_set', '');
