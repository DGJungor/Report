/*
MySQL Backup
Source Server Version: 5.7.14
Source Database: report
Date: 2017/9/1 10:46:51
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
--  Table structure for `reports`
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
) ENGINE=InnoDB AUTO_INCREMENT=77 DEFAULT CHARSET=utf8;

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
) ENGINE=InnoDB AUTO_INCREMENT=151 DEFAULT CHARSET=utf8;

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
INSERT INTO `reports` VALUES ('00000064','qqqqq','qqqqqq','2017-08',NULL,'1','2017-08-31 09:20:09',NULL), ('00000065','333333','222222','2017-08',NULL,'1','2017-08-31 09:21:20',NULL), ('00000066','123122','12313','2017-07',NULL,'1','2017-08-31 14:41:48',NULL), ('00000069','12312','1231','2017-01',NULL,'1','2017-08-31 14:42:47',NULL), ('00000070','12314241','12321','2017-03',NULL,'1','2017-08-31 14:43:06',NULL), ('00000071','2341','4141','2017-04',NULL,'1','2017-08-31 14:43:27',NULL), ('00000072','3212321','12312321','2017-06',NULL,'1','2017-08-31 14:51:52','2017-08-31 00:00:00'), ('00000073','46463','24242','2017-08',NULL,'1','2017-08-31 15:29:22','2017-08-31 15:29:22'), ('00000074','1231231','123213','2017-09',NULL,'1','2017-09-01 10:40:23','2017-09-01 10:40:23'), ('00000075','123','二位无群二23112313','2017-03',NULL,'1','2017-09-01 10:40:42','2017-09-01 10:40:42'), ('00000076','123213','3213123','2017-09',NULL,'1','2017-09-01 10:41:02','2017-09-01 10:41:02');
INSERT INTO `reports_details` VALUES ('1','1234',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL), ('2','1234',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL), ('3','1234',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL), ('4','1234',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL), ('5','1234',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL), ('6','1234',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO `rep_details_goods` VALUES ('85','64','BHCA0060002PJ','以纯电力店','10','BHCACBH0000AW','恒信源仓储公司仓库','6',NULL,''), ('86','64','BHCA0060002PJ','以纯电力店','13','BHCACBH0000AX','以纯万达店','8',NULL,''), ('87','64','BHCA0Y10001J6','以纯七星岗店','11','BHCACBH0000AY','以纯金沙专卖店','3',NULL,''), ('88','64','BHCA0Y10001K2','以纯七星岗店','20','BHCACBH0000AZ','以纯黄泥磅店','5',NULL,''), ('89','64','BHCA0Y10001K2','以纯七星岗店','6','BHCACBH0000B0','以纯黄桷坪','19',NULL,''), ('90','64','BHCA2XZ0001C1','以纯万州白岩路店','4','BHCACBH0000B1','以纯电力店','9',NULL,''), ('91','65','BHCA0060002PJ','以纯电力店','10','BHCACBH0000AW','恒信源仓储公司仓库','6',NULL,''), ('92','65','BHCA0060002PJ','以纯电力店','13','BHCACBH0000AX','以纯万达店','8',NULL,''), ('93','65','BHCA0Y10001J6','以纯七星岗店','11','BHCACBH0000AY','以纯金沙专卖店','3',NULL,''), ('94','65','BHCA0Y10001K2','以纯七星岗店','20','BHCACBH0000AZ','以纯黄泥磅店','5',NULL,''), ('95','65','BHCA0Y10001K2','以纯七星岗店','6','BHCACBH0000B0','以纯黄桷坪','19',NULL,''), ('96','65','BHCA2XZ0001C1','以纯万州白岩路店','4','BHCACBH0000B1','以纯电力店','9',NULL,''), ('97','66','BHCA0060002PJ','以纯电力店','10','BHCACBH0000AW','恒信源仓储公司仓库','6',NULL,''), ('98','66','BHCA0060002PJ','以纯电力店','13','BHCACBH0000AX','以纯万达店','8',NULL,''), ('99','66','BHCA0Y10001J6','以纯七星岗店','11','BHCACBH0000AY','以纯金沙专卖店','3',NULL,''), ('100','66','BHCA0Y10001K2','以纯七星岗店','20','BHCACBH0000AZ','以纯黄泥磅店','5',NULL,''), ('101','66','BHCA0Y10001K2','以纯七星岗店','6','BHCACBH0000B0','以纯黄桷坪','19',NULL,''), ('102','66','BHCA2XZ0001C1','以纯万州白岩路店','4','BHCACBH0000B1','以纯电力店','9',NULL,''), ('103','69','BHCA0060002PJ','以纯电力店','10','BHCACBH0000AW','恒信源仓储公司仓库','6',NULL,''), ('104','69','BHCA0060002PJ','以纯电力店','13','BHCACBH0000AX','以纯万达店','8',NULL,''), ('105','69','BHCA0Y10001J6','以纯七星岗店','11','BHCACBH0000AY','以纯金沙专卖店','3',NULL,''), ('106','69','BHCA0Y10001K2','以纯七星岗店','20','BHCACBH0000AZ','以纯黄泥磅店','5',NULL,''), ('107','69','BHCA0Y10001K2','以纯七星岗店','6','BHCACBH0000B0','以纯黄桷坪','19',NULL,''), ('108','69','BHCA2XZ0001C1','以纯万州白岩路店','4','BHCACBH0000B1','以纯电力店','9',NULL,''), ('109','70','BHCA0060002PJ','以纯电力店','10','BHCACBH0000AW','恒信源仓储公司仓库','6',NULL,''), ('110','70','BHCA0060002PJ','以纯电力店','13','BHCACBH0000AX','以纯万达店','8',NULL,''), ('111','70','BHCA0Y10001J6','以纯七星岗店','11','BHCACBH0000AY','以纯金沙专卖店','3',NULL,''), ('112','70','BHCA0Y10001K2','以纯七星岗店','20','BHCACBH0000AZ','以纯黄泥磅店','5',NULL,''), ('113','70','BHCA0Y10001K2','以纯七星岗店','6','BHCACBH0000B0','以纯黄桷坪','19',NULL,''), ('114','70','BHCA2XZ0001C1','以纯万州白岩路店','4','BHCACBH0000B1','以纯电力店','9',NULL,''), ('115','71','BHCA0060002PJ','以纯电力店','10','BHCACBH0000AW','恒信源仓储公司仓库','6',NULL,''), ('116','71','BHCA0060002PJ','以纯电力店','13','BHCACBH0000AX','以纯万达店','8',NULL,''), ('117','71','BHCA0Y10001J6','以纯七星岗店','11','BHCACBH0000AY','以纯金沙专卖店','3',NULL,''), ('118','71','BHCA0Y10001K2','以纯七星岗店','20','BHCACBH0000AZ','以纯黄泥磅店','5',NULL,''), ('119','71','BHCA0Y10001K2','以纯七星岗店','6','BHCACBH0000B0','以纯黄桷坪','19',NULL,''), ('120','71','BHCA2XZ0001C1','以纯万州白岩路店','4','BHCACBH0000B1','以纯电力店','9',NULL,''), ('121','72','BHCA0060002PJ','以纯电力店','10','BHCACBH0000AW','恒信源仓储公司仓库','6',NULL,''), ('122','72','BHCA0060002PJ','以纯电力店','13','BHCACBH0000AX','以纯万达店','8',NULL,''), ('123','72','BHCA0Y10001J6','以纯七星岗店','11','BHCACBH0000AY','以纯金沙专卖店','3',NULL,''), ('124','72','BHCA0Y10001K2','以纯七星岗店','20','BHCACBH0000AZ','以纯黄泥磅店','5',NULL,''), ('125','72','BHCA0Y10001K2','以纯七星岗店','6','BHCACBH0000B0','以纯黄桷坪','19',NULL,''), ('126','72','BHCA2XZ0001C1','以纯万州白岩路店','4','BHCACBH0000B1','以纯电力店','9',NULL,''), ('127','73','BHCA0060002PJ','以纯电力店','10','BHCACBH0000AW','恒信源仓储公司仓库','6',NULL,''), ('128','73','BHCA0060002PJ','以纯电力店','13','BHCACBH0000AX','以纯万达店','8',NULL,''), ('129','73','BHCA0Y10001J6','以纯七星岗店','11','BHCACBH0000AY','以纯金沙专卖店','3',NULL,''), ('130','73','BHCA0Y10001K2','以纯七星岗店','20','BHCACBH0000AZ','以纯黄泥磅店','5',NULL,''), ('131','73','BHCA0Y10001K2','以纯七星岗店','6','BHCACBH0000B0','以纯黄桷坪','19',NULL,''), ('132','73','BHCA2XZ0001C1','以纯万州白岩路店','4','BHCACBH0000B1','以纯电力店','9',NULL,''), ('133','74','BHCA0060002PJ','以纯电力店','10','BHCACBH0000AW','恒信源仓储公司仓库','6',NULL,''), ('134','74','BHCA0060002PJ','以纯电力店','13','BHCACBH0000AX','以纯万达店','8',NULL,''), ('135','74','BHCA0Y10001J6','以纯七星岗店','11','BHCACBH0000AY','以纯金沙专卖店','3',NULL,''), ('136','74','BHCA0Y10001K2','以纯七星岗店','20','BHCACBH0000AZ','以纯黄泥磅店','5',NULL,''), ('137','74','BHCA0Y10001K2','以纯七星岗店','6','BHCACBH0000B0','以纯黄桷坪','19',NULL,''), ('138','74','BHCA2XZ0001C1','以纯万州白岩路店','4','BHCACBH0000B1','以纯电力店','9',NULL,''), ('139','75','BHCA0060002PJ','以纯电力店','10','BHCACBH0000AW','恒信源仓储公司仓库','6',NULL,''), ('140','75','BHCA0060002PJ','以纯电力店','13','BHCACBH0000AX','以纯万达店','8',NULL,''), ('141','75','BHCA0Y10001J6','以纯七星岗店','11','BHCACBH0000AY','以纯金沙专卖店','3',NULL,''), ('142','75','BHCA0Y10001K2','以纯七星岗店','20','BHCACBH0000AZ','以纯黄泥磅店','5',NULL,''), ('143','75','BHCA0Y10001K2','以纯七星岗店','6','BHCACBH0000B0','以纯黄桷坪','19',NULL,''), ('144','75','BHCA2XZ0001C1','以纯万州白岩路店','4','BHCACBH0000B1','以纯电力店','9',NULL,''), ('145','76','BHCA0060002PJ','以纯电力店','10','BHCACBH0000AW','恒信源仓储公司仓库','6',NULL,''), ('146','76','BHCA0060002PJ','以纯电力店','13','BHCACBH0000AX','以纯万达店','8',NULL,''), ('147','76','BHCA0Y10001J6','以纯七星岗店','11','BHCACBH0000AY','以纯金沙专卖店','3',NULL,''), ('148','76','BHCA0Y10001K2','以纯七星岗店','20','BHCACBH0000AZ','以纯黄泥磅店','5',NULL,''), ('149','76','BHCA0Y10001K2','以纯七星岗店','6','BHCACBH0000B0','以纯黄桷坪','19',NULL,''), ('150','76','BHCA2XZ0001C1','以纯万州白岩路店','4','BHCACBH0000B1','以纯电力店','9',NULL,'');
INSERT INTO `test` VALUES ('1111');
