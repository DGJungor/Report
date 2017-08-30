/*
MySQL Backup
Source Server Version: 5.7.14
Source Database: report
Date: 2017/8/30 12:06:57
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
--  Table structure for `reports`
-- ----------------------------
DROP TABLE IF EXISTS `reports`;
CREATE TABLE `reports` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `add_time` datetime NOT NULL COMMENT '添加时间',
  `modify_time` date DEFAULT NULL,
  `date` varchar(32) CHARACTER SET utf8 NOT NULL,
  `shop_code` varchar(32) CHARACTER SET utf8 NOT NULL,
  `shop_name` varchar(64) CHARACTER SET utf8 NOT NULL,
  `state` tinyint(4) NOT NULL DEFAULT '1' COMMENT '状态识别码: 冻结: 0  开启 :1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

-- ----------------------------
--  Table structure for `reports_details`
-- ----------------------------
DROP TABLE IF EXISTS `reports_details`;
CREATE TABLE `reports_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `reports_id` int(11) NOT NULL,
  `number` varchar(255) NOT NULL COMMENT '机构代码编号',
  `month` varchar(255) NOT NULL COMMENT '月份',
  `data_1` varchar(255) NOT NULL COMMENT '摘要',
  `data_2` varchar(255) NOT NULL COMMENT '单据编号',
  `data_3` varchar(255) NOT NULL COMMENT '对方店铺/大仓	',
  `data_4` varchar(255) NOT NULL COMMENT '数量',
  `data_5` varchar(255) NOT NULL COMMENT '单据编号',
  `data_6` varchar(255) NOT NULL COMMENT '对方店铺/大仓',
  `data_7` varchar(255) NOT NULL COMMENT '数量',
  `data_8` varchar(255) DEFAULT NULL COMMENT '日期',
  `data_9` varchar(255) DEFAULT NULL COMMENT '数量',
  `data_10` varchar(255) DEFAULT NULL COMMENT '金额',
  `data_11` varchar(255) DEFAULT NULL COMMENT '减：VIP折扣	',
  `data_12` varchar(255) DEFAULT NULL COMMENT '减：促销折扣',
  `data_13` varchar(255) DEFAULT NULL COMMENT '减：积分折扣',
  `data_14` varchar(255) DEFAULT NULL COMMENT '销售净额',
  `data_15` varchar(255) DEFAULT NULL COMMENT '有线刷卡',
  `data_16` varchar(255) DEFAULT NULL COMMENT '无线刷卡',
  `data_17` varchar(255) DEFAULT NULL COMMENT '内购收现',
  `data_18` varchar(255) DEFAULT NULL COMMENT '商场收款',
  `data_19` varchar(255) DEFAULT NULL COMMENT '代金券',
  `data_20` varchar(255) DEFAULT NULL COMMENT '现金收入',
  `data_21` varchar(255) DEFAULT NULL COMMENT '进行金额',
  `data_22` varchar(255) DEFAULT NULL COMMENT '现金余额',
  `data_23` varchar(255) DEFAULT NULL COMMENT '内购现金',
  `data_24` varchar(255) DEFAULT NULL COMMENT '成长金',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=gb2312 COMMENT='测试报表';

-- ----------------------------
--  Table structure for `test`
-- ----------------------------
DROP TABLE IF EXISTS `test`;
CREATE TABLE `test` (
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- ----------------------------
--  Records 
-- ----------------------------
INSERT INTO `test` VALUES ('1111');
