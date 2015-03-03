/*
Navicat MySQL Data Transfer

Source Server         : phpstduy
Source Server Version : 50538
Source Host           : localhost:3306
Source Database       : appli

Target Server Type    : MYSQL
Target Server Version : 50538
File Encoding         : 65001

Date: 2015-01-15 17:36:46
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for cus_custom
-- ----------------------------
DROP TABLE IF EXISTS `cus_custom`;
CREATE TABLE `cus_custom` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ids` varchar(50) DEFAULT NULL,
  `Province` varchar(100) DEFAULT NULL,
  `Province_manager` varchar(100) DEFAULT NULL,
  `Custom` varchar(100) DEFAULT NULL,
  `Business` varchar(100) DEFAULT NULL,
  `Receiver` varchar(100) DEFAULT NULL,
  `Bill_info` varchar(255) DEFAULT NULL,
  `Invoice_info` varchar(255) DEFAULT NULL,
  `Cus_info` varchar(100) DEFAULT NULL,
  `Goods` varchar(100) DEFAULT NULL,
  `Requirement` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cus_custom
-- ----------------------------
INSERT INTO `cus_custom` VALUES ('8', ' 苏0084', '江苏', '杨文才，13913981629', '钱志国', '安徽省徽都药业有限公司', '', '安徽省徽都药业有限公司合肥市经开区医药产业园常青建设14楼0551-65953710，黄琦', '安徽省徽都药业有限公司合肥市经开区医药产业园常青建设14楼0551-65953710，黄琦', '', '卡络7.5', '\r\r\r\r\r\r\r\r\r（如每次购货要求不一致，在汇总申请表中反映。）');
INSERT INTO `cus_custom` VALUES ('7', ' 苏0083', '江苏', '杨文才，13913981629', '钱志国', '安徽省徽都药业有限公司', '', '安徽省徽都药业有限公司合肥市经开区医药产业园常青建设14楼0551-65953710，黄琦', '安徽省徽都药业有限公司合肥市经开区医药产业园常青建设14楼0551-65953710，黄琦', '', '卡络7.5', '\r\r\r\r\r\r\r\r\r（如每次购货要求不一致，在汇总申请表中反映。）');
INSERT INTO `cus_custom` VALUES ('6', ' 苏0082', '江苏', '杨文才，13913981629', '钱志国', '安徽省徽都药业有限公司', '', '安徽省徽都药业有限公司合肥市经开区医药产业园常青建设14楼0551-65953710，黄琦', '安徽省徽都药业有限公司合肥市经开区医药产业园常青建设14楼0551-65953710，黄琦', '', '卡络7.5', '\r\r\r\r\r\r\r\r\r（如每次购货要求不一致，在汇总申请表中反映。）');
INSERT INTO `cus_custom` VALUES ('5', ' 苏0081', '江苏', '杨文才，13913981629', '钱志国', '安徽省徽都药业有限公司', '', '安徽省徽都药业有限公司合肥市经开区医药产业园常青建设14楼0551-65953710，黄琦', '安徽省徽都药业有限公司合肥市经开区医药产业园常青建设14楼0551-65953710，黄琦', '', '卡络7.5', '\r\r\r\r\r\r\r\r\r（如每次购货要求不一致，在汇总申请表中反映。）');
INSERT INTO `cus_custom` VALUES ('9', ' 苏0081', '江苏', '杨文才，13913981629', '钱志国', '安徽省徽都药业有限公司', '', '安徽省徽都药业有限公司合肥市经开区医药产业园常青建设14楼0551-65953710，黄琦', '安徽省徽都药业有限公司合肥市经开区医药产业园常青建设14楼0551-65953710，黄琦', '', '卡络7.5', '\r\r\r\r\r\r\r\r\r（如每次购货要求不一致，在汇总申请表中反映。）');
INSERT INTO `cus_custom` VALUES ('10', ' 苏0082', '江苏', '杨文才，13913981629', '钱志国', '安徽省徽都药业有限公司', '', '安徽省徽都药业有限公司合肥市经开区医药产业园常青建设14楼0551-65953710，黄琦', '安徽省徽都药业有限公司合肥市经开区医药产业园常青建设14楼0551-65953710，黄琦', '', '卡络7.5', '\r\r\r\r\r\r\r\r\r（如每次购货要求不一致，在汇总申请表中反映。）');
INSERT INTO `cus_custom` VALUES ('11', ' 苏0083', '江苏', '杨文才，13913981629', '钱志国', '安徽省徽都药业有限公司', '', '安徽省徽都药业有限公司合肥市经开区医药产业园常青建设14楼0551-65953710，黄琦', '安徽省徽都药业有限公司合肥市经开区医药产业园常青建设14楼0551-65953710，黄琦', '', '卡络7.5', '\r\r\r\r\r\r\r\r\r（如每次购货要求不一致，在汇总申请表中反映。）');
INSERT INTO `cus_custom` VALUES ('12', ' 苏0084', '江苏', '杨文才，13913981629', '钱志国', '安徽省徽都药业有限公司', '', '安徽省徽都药业有限公司合肥市经开区医药产业园常青建设14楼0551-65953710，黄琦', '安徽省徽都药业有限公司合肥市经开区医药产业园常青建设14楼0551-65953710，黄琦', '', '卡络7.5', '\r\r\r\r\r\r\r\r\r（如每次购货要求不一致，在汇总申请表中反映。）');
INSERT INTO `cus_custom` VALUES ('13', ' 苏0081', '江苏', '杨文才，13913981629', '钱志国', '安徽省徽都药业有限公司', '', '安徽省徽都药业有限公司合肥市经开区医药产业园常青建设14楼0551-65953710，黄琦', '安徽省徽都药业有限公司合肥市经开区医药产业园常青建设14楼0551-65953710，黄琦', '', '卡络7.5', '\r\r\r\r\r\r\r\r\r（如每次购货要求不一致，在汇总申请表中反映。）');
INSERT INTO `cus_custom` VALUES ('14', ' 苏0082', '江苏', '杨文才，13913981629', '钱志国', '安徽省徽都药业有限公司', '', '安徽省徽都药业有限公司合肥市经开区医药产业园常青建设14楼0551-65953710，黄琦', '安徽省徽都药业有限公司合肥市经开区医药产业园常青建设14楼0551-65953710，黄琦', '', '卡络7.5', '\r\r\r\r\r\r\r\r\r（如每次购货要求不一致，在汇总申请表中反映。）');
INSERT INTO `cus_custom` VALUES ('15', ' 苏0083', '江苏', '杨文才，13913981629', '钱志国', '安徽省徽都药业有限公司', '', '安徽省徽都药业有限公司合肥市经开区医药产业园常青建设14楼0551-65953710，黄琦', '安徽省徽都药业有限公司合肥市经开区医药产业园常青建设14楼0551-65953710，黄琦', '', '卡络7.5', '\r\r\r\r\r\r\r\r\r（如每次购货要求不一致，在汇总申请表中反映。）');
INSERT INTO `cus_custom` VALUES ('16', ' 苏0084', '江苏', '杨文才，13913981629', '钱志国', '安徽省徽都药业有限公司', '', '安徽省徽都药业有限公司合肥市经开区医药产业园常青建设14楼0551-65953710，黄琦', '安徽省徽都药业有限公司合肥市经开区医药产业园常青建设14楼0551-65953710，黄琦', '', '卡络7.5', '\r\r\r\r\r\r\r\r\r（如每次购货要求不一致，在汇总申请表中反映。）');
