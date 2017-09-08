/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50714
Source Host           : localhost:3306
Source Database       : report

Target Server Type    : MYSQL
Target Server Version : 50714
File Encoding         : 65001

Date: 2017-09-08 11:41:30
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for reports
-- ----------------------------
DROP TABLE IF EXISTS `reports`;
CREATE TABLE `reports` (
  `id` int(8) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `shop_code` varchar(32) NOT NULL,
  `shop_name` varchar(64) NOT NULL,
  `date` varchar(32) NOT NULL,
  `remarks` varchar(255) DEFAULT NULL COMMENT '备注',
  `state` tinyint(4) NOT NULL DEFAULT '1' COMMENT '状态识别码: 冻结: 0  开启 :1',
  `add_time` datetime NOT NULL COMMENT '添加时间',
  `modify_time` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=125 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for reports_details
-- ----------------------------
DROP TABLE IF EXISTS `reports_details`;
CREATE TABLE `reports_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `rid` int(11) NOT NULL,
  `number` varchar(255) DEFAULT NULL COMMENT '机构代码编号',
  `month` varchar(255) DEFAULT NULL COMMENT '月份',
  `data_1` varchar(255) DEFAULT NULL COMMENT '摘要',
  `data_2` varchar(255) DEFAULT NULL COMMENT '单据编号',
  `data_3` varchar(255) DEFAULT NULL COMMENT '对方店铺/大仓	',
  `data_4` varchar(255) DEFAULT NULL COMMENT '数量',
  `data_5` varchar(255) DEFAULT NULL COMMENT '单据编号',
  `data_6` varchar(255) DEFAULT NULL COMMENT '对方店铺/大仓',
  `data_7` varchar(255) DEFAULT NULL COMMENT '数量',
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
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=gb2312 COMMENT='测试报表';

-- ----------------------------
-- Table structure for rep_details_goods
-- ----------------------------
DROP TABLE IF EXISTS `rep_details_goods`;
CREATE TABLE `rep_details_goods` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `rid` int(11) NOT NULL COMMENT '报表表id',
  `in_id` varchar(32) DEFAULT NULL COMMENT '入库编号',
  `in_name` varchar(64) DEFAULT NULL COMMENT '入库 对方店铺/大仓',
  `in_num` int(11) DEFAULT NULL COMMENT '入库数量',
  `out_id` varchar(32) DEFAULT NULL COMMENT '出库 单据编号',
  `out_name` varchar(64) DEFAULT NULL COMMENT '出库 对方店铺/大仓',
  `out_num` int(11) DEFAULT NULL COMMENT '出库 数量',
  `date` date DEFAULT NULL,
  `abs` varchar(255) DEFAULT NULL COMMENT '摘要',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=403 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for rep_details_sell
-- ----------------------------
DROP TABLE IF EXISTS `rep_details_sell`;
CREATE TABLE `rep_details_sell` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `rid` int(11) unsigned NOT NULL COMMENT '报表表id',
  `date` date NOT NULL COMMENT '日期',
  `sell_num` int(11) DEFAULT NULL COMMENT '销售数量',
  `sell_mon` double(11,2) DEFAULT NULL COMMENT '销售金额',
  `sell_dvip` double(11,2) DEFAULT NULL COMMENT '减   VIP折扣',
  `sell_dpro` double(11,2) DEFAULT NULL COMMENT '减:  促销折扣',
  `sell_ddis` double(11,2) DEFAULT NULL COMMENT '减:  积分折扣',
  `sell_net` double(11,2) DEFAULT NULL COMMENT '销售净额',
  `in_card_wd` double(11,2) DEFAULT NULL COMMENT '销售收款  有线刷卡',
  `in_card_wl` double(11,2) DEFAULT NULL COMMENT '销售收款   无线刷卡',
  `in_purchase` double(11,2) DEFAULT NULL COMMENT '内购收现',
  `in_mk` double(11,2) DEFAULT NULL COMMENT '商场收现',
  `in_coupon` double(11,2) DEFAULT NULL COMMENT '代金券',
  `in_cash` double(11,2) DEFAULT NULL COMMENT '现金状态  进行金额',
  `c_ing` double(11,2) DEFAULT NULL,
  `c_balance` double(11,2) DEFAULT NULL COMMENT '现金状态:  现金余额',
  `c_purchase` double(11,2) DEFAULT NULL COMMENT '内购现金状态',
  `c_gro` double(11,2) DEFAULT NULL COMMENT '成长金状态',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=294 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for test
-- ----------------------------
DROP TABLE IF EXISTS `test`;
CREATE TABLE `test` (
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
