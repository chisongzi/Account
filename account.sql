/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50721
Source Host           : localhost:3306
Source Database       : account

Target Server Type    : MYSQL
Target Server Version : 50721
File Encoding         : 65001

Date: 2018-09-15 16:01:29
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `acc_account`
-- ----------------------------
DROP TABLE IF EXISTS `acc_account`;
CREATE TABLE `acc_account` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) CHARACTER SET utf8 DEFAULT NULL COMMENT '账户名称',
  `note` text CHARACTER SET utf8 COMMENT '备注',
  `balance` decimal(10,0) DEFAULT NULL COMMENT '余额',
  `is_default` tinyint(4) DEFAULT NULL COMMENT '是否默认账户 0 不是1是',
  `currency` varchar(20) CHARACTER SET utf8 DEFAULT NULL COMMENT '币别',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1 COMMENT='资金账户表';

-- ----------------------------
-- Records of acc_account
-- ----------------------------
INSERT INTO `acc_account` VALUES ('1', '账户1', '备注1', '12', '0', '人民币');
INSERT INTO `acc_account` VALUES ('2', '账户2', 'sfasdf', '122', '0', '人民币');

-- ----------------------------
-- Table structure for `acc_admin`
-- ----------------------------
DROP TABLE IF EXISTS `acc_admin`;
CREATE TABLE `acc_admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) DEFAULT NULL COMMENT '用户名',
  `password` varchar(50) DEFAULT NULL COMMENT '密码',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COMMENT='用户表\r\n';

-- ----------------------------
-- Records of acc_admin
-- ----------------------------
INSERT INTO `acc_admin` VALUES ('1', 'admin', '972262e4efe2e00f364d979a7c6ae7ee');

-- ----------------------------
-- Table structure for `acc_agent`
-- ----------------------------
DROP TABLE IF EXISTS `acc_agent`;
CREATE TABLE `acc_agent` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) CHARACTER SET utf8 DEFAULT NULL COMMENT '经办人名称',
  `phone` varchar(11) CHARACTER SET utf8 DEFAULT NULL COMMENT '联系电话',
  `note` text CHARACTER SET utf8 COMMENT '备注',
  `is_default` tinyint(4) DEFAULT NULL COMMENT '是否为默认 0  不是1是',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1 COMMENT='经办人表';

-- ----------------------------
-- Records of acc_agent
-- ----------------------------
INSERT INTO `acc_agent` VALUES ('1', '经办人1', '12365481522', '沙发上', '0');
INSERT INTO `acc_agent` VALUES ('2', '枯', '12365481522', '地胜多负少', '0');

-- ----------------------------
-- Table structure for `acc_item`
-- ----------------------------
DROP TABLE IF EXISTS `acc_item`;
CREATE TABLE `acc_item` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) DEFAULT NULL COMMENT '项目名称',
  `method` tinyint(4) NOT NULL DEFAULT '0' COMMENT '0自营项目1联营项目',
  `method_str` varchar(20) DEFAULT NULL COMMENT '自营项目 联营项目',
  `type` tinyint(4) NOT NULL DEFAULT '0' COMMENT '项目类型 0签约型 1流水型',
  `type_str` varchar(20) DEFAULT NULL COMMENT '项目类型 签约型 流水型',
  `company` varchar(30) DEFAULT NULL COMMENT '所属公司',
  `address` varchar(50) DEFAULT NULL COMMENT '工程地址',
  `phone` varchar(11) DEFAULT NULL COMMENT '联系电话',
  `book_build_date` int(11) DEFAULT NULL COMMENT '建档日期',
  `book_build_date_str` varchar(20) DEFAULT NULL COMMENT '建档日期',
  `build_unit` varchar(25) DEFAULT NULL COMMENT '建设单位',
  `design_unit` varchar(25) DEFAULT NULL COMMENT '设计单位',
  `supervisor_unit` varchar(25) DEFAULT NULL COMMENT '监理单位',
  `advisory_body` varchar(25) DEFAULT NULL COMMENT '咨询机构',
  `start_time` int(11) DEFAULT NULL COMMENT '开工时间',
  `start_time_str` varchar(25) DEFAULT NULL COMMENT '开工时间',
  `end_time` int(11) DEFAULT NULL COMMENT '竣工时间',
  `end_time_str` varchar(25) DEFAULT NULL COMMENT '竣工时间',
  `bond_ratio` int(11) DEFAULT NULL COMMENT '保证金比例',
  `bond` decimal(10,0) DEFAULT NULL COMMENT '保证金数额',
  `estimate_cost` decimal(10,0) DEFAULT NULL COMMENT '预估成本',
  `contract_amount` decimal(10,0) DEFAULT NULL COMMENT '合同金额',
  `settlement_amount` decimal(10,0) DEFAULT NULL COMMENT '结算金额',
  `leader` varchar(25) DEFAULT NULL COMMENT '项目负责人',
  `note` text COMMENT '备注',
  `invoice_company` varchar(25) DEFAULT NULL COMMENT '开票公司名称',
  `duty_paragraph` int(11) DEFAULT NULL COMMENT '税号',
  `bank_address` varchar(50) DEFAULT NULL COMMENT '开户行地址',
  `bank_name` varchar(25) DEFAULT NULL COMMENT '开户行名称',
  `bank_number` varchar(25) DEFAULT NULL COMMENT '账号',
  `status` tinyint(4) DEFAULT '0' COMMENT '项目当前状态 0 进行中 1 已归档',
  `is_del` tinyint(4) DEFAULT '0' COMMENT '是否删除 0未删除 1 已删除',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COMMENT='项目信息表';

-- ----------------------------
-- Records of acc_item
-- ----------------------------
INSERT INTO `acc_item` VALUES ('1', '项目名称', '0', '自营项目', '0', '签约型', '所属公司名称', '工程地址', '15369852632', null, '2018-08-18', '建设单位名称', '设计单位名称', '监理单位名称', '咨询机构名称', null, '2018-08-18', null, '2018-08-18', '88', '888', '777', '888', '888', '项目负责人', '备注信息', '开票公司名称', '4155112', '开户行地址', '开户行名称', '12365521485225', '0', '0');
INSERT INTO `acc_item` VALUES ('2', '项目名称', '0', '自营项目', '0', '签约型', '所属公司名称', '工程地址', '15369852632', null, '2018-08-18', '建设单位名称', '设计单位名称', '监理单位名称', '咨询机构名称', null, '2018-08-18', null, '2018-08-18', '88', '888', '777', '888', '888', '项目负责人', '备注信息', '开票公司名称', '4155112', '开户行地址', '开户行名称', '12365521485225', '0', '0');
INSERT INTO `acc_item` VALUES ('3', '项目名称', '0', '自营项目', '0', '签约型', '所属公司名称', '工程地址', '15369852632', null, '2018-08-18', '建设单位名称', '设计单位名称', '监理单位名称', '咨询机构名称', null, '2018-08-18', null, '2018-08-18', '88', '888', '777', '888', '888', '项目负责人', '备注信息', '开票公司名称', '4155112', '开户行地址', '开户行名称', '12365521485225', '0', '0');
INSERT INTO `acc_item` VALUES ('4', '项目名称', '0', '自营项目', '1', '流水型', '所属公司名称', '工程地址', '15369852632', null, '2018-08-18', '建设单位名称', '设计单位名称', '监理单位名称', '咨询机构名称', null, '2018-08-18', null, '2018-08-18', '88', '888', '777', '888', '888', '项目负责人', '备注信息', '开票公司名称', '4155112', '开户行地址', '开户行名称', '12365521485225', '0', '0');
INSERT INTO `acc_item` VALUES ('5', '一起科技', '0', '自营项目', '0', '签约型', '所属公司名称', '工程地址', '15369852632', null, '2018-08-18', '建设单位名称', '设计单位名称', '监理单位名称', '咨询机构名称', null, '2018-08-18', null, '2018-08-18', '88', '888', '777', '888', '888', '项目负责人', '备注信息', '开票公司名称', '4155112', '开户行地址', '开户行名称', '12365521485225', '0', '0');
INSERT INTO `acc_item` VALUES ('6', '项目名称', '1', '联营项目', '1', '流水型', '所属公司名称', '工程地址', '15369852632', null, '2018-08-18', '建设单位名称', '设计单位名称', '监理单位名称', '咨询机构名称', null, '2018-08-18', null, '2018-08-18', '88', '888', '777', '888', '888', '项目负责人', '备注信息', '开票公司名称', '4155112', '开户行地址', '开户行名称', '12365521485225', '0', '0');

-- ----------------------------
-- Table structure for `acc_partner`
-- ----------------------------
DROP TABLE IF EXISTS `acc_partner`;
CREATE TABLE `acc_partner` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) CHARACTER SET utf8 DEFAULT NULL COMMENT '伙伴名称',
  `phone` varchar(11) CHARACTER SET utf8 DEFAULT NULL COMMENT '联系电话',
  `note` text CHARACTER SET utf8 COMMENT '备注',
  `is_default` tinyint(4) DEFAULT NULL COMMENT '是否为默认 0  不是1是',
  `is_del` tinyint(4) DEFAULT '0' COMMENT '是否删除 0未删除 1 已删除',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1 COMMENT='生意伙伴表';

-- ----------------------------
-- Records of acc_partner
-- ----------------------------
INSERT INTO `acc_partner` VALUES ('1', '木公子', '12365481522', 'sdfasdf', '1', '0');
INSERT INTO `acc_partner` VALUES ('2', 'dddd', '12365481522', 'qweqweq', '0', '0');
INSERT INTO `acc_partner` VALUES ('3', '顶面', '12365481522', 'sfas fdasdfasdf asdfasdfasd', '0', '0');

-- ----------------------------
-- Table structure for `acc_payable`
-- ----------------------------
DROP TABLE IF EXISTS `acc_payable`;
CREATE TABLE `acc_payable` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `number` varchar(20) DEFAULT NULL COMMENT '单号',
  `amount` decimal(10,0) DEFAULT '0' COMMENT '应付金额',
  `type` tinyint(4) DEFAULT NULL COMMENT '支出类型',
  `type_str` varchar(20) DEFAULT NULL COMMENT '支出类型',
  `partner` tinyint(4) DEFAULT NULL COMMENT '生意伙伴',
  `partner_str` varchar(20) DEFAULT NULL COMMENT '生意伙伴',
  `project` tinyint(4) DEFAULT NULL COMMENT '业务项目',
  `project_str` varchar(20) DEFAULT NULL COMMENT '业务项目',
  `agent` tinyint(4) DEFAULT NULL COMMENT '经办人',
  `agent_str` varchar(20) DEFAULT NULL COMMENT '经办人',
  `account` tinyint(4) DEFAULT NULL COMMENT '支付账户',
  `account_str` varchar(20) DEFAULT NULL COMMENT '支付账户',
  `account_date` int(11) DEFAULT NULL COMMENT '记账日期',
  `account_date_str` datetime DEFAULT NULL COMMENT '记账日期',
  `is_advance_charge` tinyint(4) DEFAULT '0' COMMENT '是否为预付款 0不是1是',
  `repayment_date` int(11) DEFAULT NULL COMMENT '还款限期',
  `repayment_date_str` datetime DEFAULT NULL COMMENT '还款限期',
  `supplier` int(11) DEFAULT NULL COMMENT '供货商',
  `supplier_str` varchar(20) DEFAULT NULL COMMENT '供货商',
  `note` text COMMENT '备注',
  `payment_date` int(11) DEFAULT NULL COMMENT '付款时间',
  `payment_date_str` varchar(20) DEFAULT NULL COMMENT '付款时间',
  `is_del` tinyint(4) NOT NULL DEFAULT '0' COMMENT '是否删除 0 未删除 1 已删除',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COMMENT='应付记账表';

-- ----------------------------
-- Records of acc_payable
-- ----------------------------
INSERT INTO `acc_payable` VALUES ('1', '12346', '12', '1', null, '1', '-', '1', '-', '1', '-', '1', '-', null, null, '0', null, null, null, null, null, null, '2018-09-15', '0');
INSERT INTO `acc_payable` VALUES ('2', '12346', '33', '1', null, '2', 'dddd', '5', '0', '1', '经办人1', '1', '账户1', null, null, '0', null, null, null, null, null, null, '2018-09-25', '0');
INSERT INTO `acc_payable` VALUES ('3', '12346', '12', '1', null, '1', '木公子', '5', '一起科技', '2', '枯', '1', '账户1', null, null, '0', null, null, null, null, null, null, '2018-09-15', '0');
INSERT INTO `acc_payable` VALUES ('4', '12346', '44', null, '电子产品', '1', '木公子', '5', '一起科技', '2', '枯', '1', '账户1', null, null, '0', null, null, null, null, null, null, '2018-09-22', '0');
INSERT INTO `acc_payable` VALUES ('5', '12346', '6666', null, '电子产品', '3', '顶面', '5', '一起科技', '2', '枯', '2', '账户2', null, null, '0', null, null, null, null, null, null, '2018-09-28', '0');

-- ----------------------------
-- Table structure for `acc_receivable`
-- ----------------------------
DROP TABLE IF EXISTS `acc_receivable`;
CREATE TABLE `acc_receivable` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `number` varchar(20) DEFAULT NULL COMMENT '单号',
  `amount` decimal(10,0) DEFAULT '0' COMMENT '应收金额',
  `type` tinyint(4) DEFAULT NULL COMMENT '收入类型',
  `type_str` varchar(20) DEFAULT NULL COMMENT '收入类型',
  `partner` tinyint(4) DEFAULT NULL COMMENT '生意伙伴',
  `partner_str` varchar(20) DEFAULT NULL COMMENT '生意伙伴',
  `project` tinyint(4) DEFAULT NULL COMMENT '业务项目',
  `project_str` varchar(20) DEFAULT NULL COMMENT '业务项目',
  `agent` tinyint(4) DEFAULT NULL COMMENT '经办人',
  `agent_str` varchar(20) DEFAULT NULL COMMENT '经办人',
  `account` tinyint(4) DEFAULT NULL COMMENT '收入账户',
  `account_str` varchar(20) DEFAULT NULL COMMENT '收入账户',
  `account_date` int(11) DEFAULT NULL COMMENT '收款日期',
  `account_date_str` datetime DEFAULT NULL COMMENT '收款日期',
  `is_advance_charge` tinyint(4) DEFAULT '0' COMMENT '是否为预付款 0不是1是',
  `receivable_date` int(11) DEFAULT NULL COMMENT '收款限期',
  `receivable_date_str` datetime DEFAULT NULL COMMENT '收款限期',
  `supplier` int(11) DEFAULT NULL COMMENT '供货商',
  `supplier_str` varchar(20) DEFAULT NULL COMMENT '供货商',
  `note` text COMMENT '备注',
  `income_date` int(11) DEFAULT NULL COMMENT '收款时间',
  `income_date_str` varchar(20) DEFAULT NULL COMMENT '收款时间',
  `is_del` tinyint(4) NOT NULL DEFAULT '0' COMMENT '是否删除 0 未删除 1 已删除',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COMMENT='应收记账表\r\n';

-- ----------------------------
-- Records of acc_receivable
-- ----------------------------
INSERT INTO `acc_receivable` VALUES ('1', '12346', '22', null, '生活用品', '2', 'dddd', '5', '一起科技', '1', '经办人1', '1', '账户1', null, null, '0', null, null, null, null, null, null, '2018-09-15', '0');
INSERT INTO `acc_receivable` VALUES ('2', '12346', '1111', null, '生活用品', '2', 'dddd', '3', '项目名称', '1', '经办人1', '1', '账户1', null, null, '0', null, null, null, null, null, null, '2018-09-28', '0');
