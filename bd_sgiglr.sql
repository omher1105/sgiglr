/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : bd_sgiglr

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2018-01-24 00:35:24
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `tb_dimensiones`
-- ----------------------------
DROP TABLE IF EXISTS `tb_dimensiones`;
CREATE TABLE `tb_dimensiones` (
  `id` int(4) NOT NULL,
  `description` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tb_dimensiones
-- ----------------------------
INSERT INTO `tb_dimensiones` VALUES ('1', 'DIMENSION AMBIENTAL');
INSERT INTO `tb_dimensiones` VALUES ('2', 'DIMENSION ECONOMICA');
INSERT INTO `tb_dimensiones` VALUES ('3', 'DIMENSION INSTITUCIONAL');
INSERT INTO `tb_dimensiones` VALUES ('4', 'DIMENSION SOCIAL');

-- ----------------------------
-- Table structure for `tb_objetivo`
-- ----------------------------
DROP TABLE IF EXISTS `tb_objetivo`;
CREATE TABLE `tb_objetivo` (
  `id` int(4) NOT NULL,
  `description` varchar(100) DEFAULT NULL,
  `dimension` int(4) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tb_objetivo
-- ----------------------------
INSERT INTO `tb_objetivo` VALUES ('1', 'FIN DE LA POBREZA', '1');
INSERT INTO `tb_objetivo` VALUES ('2', 'HAMBRE CERO', '1');
INSERT INTO `tb_objetivo` VALUES ('3', 'SALUD Y BIENESTAR', '1');
INSERT INTO `tb_objetivo` VALUES ('4', 'EDUCACIÓN DE CALIDAD', '1');
INSERT INTO `tb_objetivo` VALUES ('5', 'IGUALDAD DE GÉNERO', '1');
INSERT INTO `tb_objetivo` VALUES ('6', 'AGUA LIMPIA Y SANEAMIENTO', '2');
INSERT INTO `tb_objetivo` VALUES ('7', 'ENERGÍA ASEQUIBLE Y NO CONTAMINANTE', '2');
INSERT INTO `tb_objetivo` VALUES ('8', 'TRABAJO DECENTE Y CRECIMIENTO ECONÓMICO', '2');
INSERT INTO `tb_objetivo` VALUES ('9', 'INDUSTRIA INNOVACIÓN E INFRAESTRUCTURA', '2');
INSERT INTO `tb_objetivo` VALUES ('10', 'REDUCCIÓN DE LAS DESIGUALDADES', '2');
INSERT INTO `tb_objetivo` VALUES ('11', 'CIUDADES Y COMUNIDADES SOSTENIBLES', '3');
INSERT INTO `tb_objetivo` VALUES ('12', 'PRODUCCIÓN Y CONSUMO RESPONSABLES', '3');
INSERT INTO `tb_objetivo` VALUES ('13', 'ACCIÓN POR EL CLIMA', '3');
INSERT INTO `tb_objetivo` VALUES ('14', 'VIDA SUBMARINA', '4');
INSERT INTO `tb_objetivo` VALUES ('15', 'VIDA DE ECOSISTEMAS TERRESTRE', '4');
INSERT INTO `tb_objetivo` VALUES ('16', 'PAZ, JUSTICIA E INSTITUCIONES SÓLIDAS', '4');
INSERT INTO `tb_objetivo` VALUES ('17', 'ALIANZAS PARA LOGRAR LOS OBJETIVOS', '4');
