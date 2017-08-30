/*
MySQL Backup
Source Server Version: 5.7.14
Source Database: report
Date: 2017/8/30 15:43:18
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
--  Table structure for `reports`
-- ----------------------------
DROP TABLE IF EXISTS `reports`;
CREATE TABLE `reports` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `shop_code` varchar(32) NOT NULL,
  `shop_name` varchar(64) NOT NULL,
  `date` varchar(32) NOT NULL,
  `state` tinyint(4) NOT NULL DEFAULT '1' COMMENT '状态识别码: 冻结: 0  开启 :1',
  `add_time` datetime NOT NULL COMMENT '添加时间',
  `modify_time` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=53 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Table structure for `reports_details`
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
--  Table structure for `rep_details_goods`
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
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8;

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
INSERT INTO `reports` VALUES ('52','2342','42342','2017-08','1','2017-08-30 15:40:53',NULL);
INSERT INTO `reports_details` VALUES ('1','1234',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL), ('2','1234',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL), ('3','1234',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL), ('4','1234',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL), ('5','1234',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL), ('6','1234',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `rep_details_goods` VALUES ('19','1','BHCA0060002PJ','以纯电力店','10','BHCACBH0000AW','恒信源仓储公司仓库','6',NULL,''), ('20','1','BHCA0060002PJ','以纯电力店','13','BHCACBH0000AX','以纯万达店','8',NULL,''), ('21','1','BHCA0Y10001J6','以纯七星岗店','11','BHCACBH0000AY','以纯金沙专卖店','3',NULL,''), ('22','1','BHCA0Y10001K2','以纯七星岗店','20','BHCACBH0000AZ','以纯黄泥磅店','5',NULL,''), ('23','1','BHCA0Y10001K2','以纯七星岗店','6','BHCACBH0000B0','以纯黄桷坪','19',NULL,''), ('24','1','BHCA2XZ0001C1','以纯万州白岩路店','4','BHCACBH0000B1','以纯电力店','9',NULL,''), ('25','52','BHCA0060002PJ','以纯电力店','10','BHCACBH0000AW','恒信源仓储公司仓库','6',NULL,''), ('26','52','BHCA0060002PJ','以纯电力店','13','BHCACBH0000AX','以纯万达店','8',NULL,''), ('27','52','BHCA0Y10001J6','以纯七星岗店','11','BHCACBH0000AY','以纯金沙专卖店','3',NULL,''), ('28','52','BHCA0Y10001K2','以纯七星岗店','20','BHCACBH0000AZ','以纯黄泥磅店','5',NULL,''), ('29','52','BHCA0Y10001K2','以纯七星岗店','6','BHCACBH0000B0','以纯黄桷坪','19',NULL,''), ('30','52','BHCA2XZ0001C1','以纯万州白岩路店','4','BHCACBH0000B1','以纯电力店','9',NULL,'');
INSERT INTO `test` VALUES ('1111');
