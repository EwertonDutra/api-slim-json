/*
Navicat MySQL Data Transfer

Source Server         : --- LOCAL ---
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : slim_test

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2018-07-16 23:51:58
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for carro
-- ----------------------------
DROP TABLE IF EXISTS `carro`;
CREATE TABLE `carro` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `MODELO` varchar(30) DEFAULT NULL,
  `MARCA` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of carro
-- ----------------------------
INSERT INTO `carro` VALUES ('1', 'Mônitor', 'Sansung');
INSERT INTO `carro` VALUES ('3', 'Uno', 'Volkswagen');
INSERT INTO `carro` VALUES ('4', 'New', 'marca gol');
INSERT INTO `carro` VALUES ('5', 'Polo', 'Volkswagen');
INSERT INTO `carro` VALUES ('6', 'Uno', 'Fiat');
INSERT INTO `carro` VALUES ('7', 'Palio', 'Fíat');
INSERT INTO `carro` VALUES ('8', 'Fusca', 'Volkswagen');
INSERT INTO `carro` VALUES ('9', 'Fuscão', 'Volkswagen');
