/*
Navicat MySQL Data Transfer

Source Server         : EZT's
Source Server Version : 100125
Source Host           : localhost:3306
Source Database       : warehouse

Target Server Type    : MYSQL
Target Server Version : 100125
File Encoding         : 65001

Date: 2017-09-27 18:25:17
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for changeslog
-- ----------------------------
DROP TABLE IF EXISTS `changeslog`;
CREATE TABLE `changeslog` (
  `ID` bigint(20) NOT NULL AUTO_INCREMENT,
  `Type` char(1) NOT NULL DEFAULT 'I',
  `AffectedCode` varchar(50) DEFAULT NULL,
  `Tgl` date NOT NULL DEFAULT '0000-00-00',
  `Keterangan` text NOT NULL,
  `UserName` varchar(40) NOT NULL,
  `DateTime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`ID`),
  KEY `TglUserName` (`Tgl`,`UserName`),
  KEY `TglType` (`Tgl`,`Type`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of changeslog
-- ----------------------------

-- ----------------------------
-- Table structure for config
-- ----------------------------
DROP TABLE IF EXISTS `config`;
CREATE TABLE `config` (
  `ID` bigint(20) NOT NULL AUTO_INCREMENT,
  `Kode` varchar(255) DEFAULT NULL,
  `Keterangan` text,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of config
-- ----------------------------
INSERT INTO `config` VALUES ('1', 'cdTesting', 'TS');
INSERT INTO `config` VALUES ('2', 'dirUserProfilePic', './DataCenter/Config/ProfilePic');

-- ----------------------------
-- Table structure for employee
-- ----------------------------
DROP TABLE IF EXISTS `employee`;
CREATE TABLE `employee` (
  `ID` bigint(20) NOT NULL AUTO_INCREMENT,
  `NIP` char(10) NOT NULL,
  `Nama` varchar(40) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of employee
-- ----------------------------
INSERT INTO `employee` VALUES ('1', '0000000001', 'Gintama');
INSERT INTO `employee` VALUES ('2', '0000000002', 'Saitama');
INSERT INTO `employee` VALUES ('3', '0000000003', 'Nobita');
INSERT INTO `employee` VALUES ('4', '0000000004', 'Shizuka');

-- ----------------------------
-- Table structure for event
-- ----------------------------
DROP TABLE IF EXISTS `event`;
CREATE TABLE `event` (
  `ID` int(12) NOT NULL AUTO_INCREMENT,
  `Kode` varchar(10) NOT NULL,
  `Keterangan` varchar(255) NOT NULL,
  `TglMulai` date NOT NULL,
  `TglSelesai` date NOT NULL,
  `Team` varchar(5) NOT NULL,
  `Lokasi` text NOT NULL,
  `SPG1` varchar(5) NOT NULL,
  `SPG2` varchar(5) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of event
-- ----------------------------
INSERT INTO `event` VALUES ('1', '123456', 'Test', '2017-09-01', '2017-09-10', '', '', '', '');

-- ----------------------------
-- Table structure for inventory
-- ----------------------------
DROP TABLE IF EXISTS `inventory`;
CREATE TABLE `inventory` (
  `ID` bigint(20) NOT NULL AUTO_INCREMENT,
  `Kode` char(50) NOT NULL,
  `Keterangan` varchar(100) DEFAULT NULL,
  `Supplier` char(5) DEFAULT NULL,
  `Tgl` date DEFAULT NULL,
  `TglExp` date DEFAULT NULL,
  `Unit` double(12,0) DEFAULT NULL,
  `Jenis` char(10) DEFAULT NULL,
  `DateTime` datetime DEFAULT NULL,
  `Username` varchar(20) DEFAULT NULL,
  `HargaBeli` double(16,2) DEFAULT NULL,
  `HargaJual` double(16,2) DEFAULT NULL,
  `HargaGrosir` double(16,2) DEFAULT NULL,
  `SatuanKecil` char(4) NOT NULL,
  `SatuanBesar` char(4) NOT NULL,
  `HargaBeliBesar` double(16,2) DEFAULT NULL,
  `HargaJualBesar` double(16,2) DEFAULT NULL,
  `HargaGrosirBesar` double(16,2) DEFAULT NULL,
  `UnitBesar` double(12,0) DEFAULT NULL,
  `UnitMinimal` double(12,0) DEFAULT NULL,
  `Cabang` char(4) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=38 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of inventory
-- ----------------------------
INSERT INTO `inventory` VALUES ('37', 'ADM000000000053', 'as', '', '0000-00-00', null, '0', null, '2017-09-07 10:24:42', 'Admin', '0.00', '0.00', null, '', '', '0.00', '0.00', '0.00', null, null, null);
INSERT INTO `inventory` VALUES ('36', 'ADM000000000052', 'Monitor LG 23 inch', '00006', '2017-08-28', null, '0', null, '2017-08-28 04:48:23', 'Admin', '0.00', '0.00', null, '', '', '0.00', '0.00', '0.00', null, null, null);

-- ----------------------------
-- Table structure for lastcode
-- ----------------------------
DROP TABLE IF EXISTS `lastcode`;
CREATE TABLE `lastcode` (
  `ID` bigint(20) NOT NULL AUTO_INCREMENT,
  `Kode` varchar(100) DEFAULT NULL,
  `Keterangan` text,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of lastcode
-- ----------------------------
INSERT INTO `lastcode` VALUES ('1', 'cdTesting', 'TS');

-- ----------------------------
-- Table structure for mass_rate
-- ----------------------------
DROP TABLE IF EXISTS `mass_rate`;
CREATE TABLE `mass_rate` (
  `ID` bigint(20) NOT NULL AUTO_INCREMENT,
  `Kode` char(3) NOT NULL DEFAULT '999',
  `lowest` double(5,2) NOT NULL DEFAULT '0.00',
  `highest` double(5,2) NOT NULL DEFAULT '0.00',
  `price` double(16,2) NOT NULL DEFAULT '0.00',
  `coins` double(5,2) NOT NULL DEFAULT '0.00',
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of mass_rate
-- ----------------------------

-- ----------------------------
-- Table structure for nomorfaktur
-- ----------------------------
DROP TABLE IF EXISTS `nomorfaktur`;
CREATE TABLE `nomorfaktur` (
  `Kode` varchar(255) NOT NULL DEFAULT '',
  `ID` double(20,0) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`Kode`,`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of nomorfaktur
-- ----------------------------
INSERT INTO `nomorfaktur` VALUES ('ADM', '53');
INSERT INTO `nomorfaktur` VALUES ('EL', '8');
INSERT INTO `nomorfaktur` VALUES ('LW0120160426', '20');
INSERT INTO `nomorfaktur` VALUES ('LW0120160430', '8');
INSERT INTO `nomorfaktur` VALUES ('LW0120160502', '4');
INSERT INTO `nomorfaktur` VALUES ('LW0120160503', '1');
INSERT INTO `nomorfaktur` VALUES ('LW0120160507', '3');
INSERT INTO `nomorfaktur` VALUES ('LW0120160511', '5');
INSERT INTO `nomorfaktur` VALUES ('LW0120160512', '13');
INSERT INTO `nomorfaktur` VALUES ('LW0120160514', '3');
INSERT INTO `nomorfaktur` VALUES ('LW0120160520', '1');
INSERT INTO `nomorfaktur` VALUES ('LW0120160521', '2');
INSERT INTO `nomorfaktur` VALUES ('mstemployee', '4');
INSERT INTO `nomorfaktur` VALUES ('mstSupplier', '16');
INSERT INTO `nomorfaktur` VALUES ('SH', '4');
INSERT INTO `nomorfaktur` VALUES ('TypeOfService', '10');

-- ----------------------------
-- Table structure for satuanbesar
-- ----------------------------
DROP TABLE IF EXISTS `satuanbesar`;
CREATE TABLE `satuanbesar` (
  `ID` bigint(20) NOT NULL AUTO_INCREMENT,
  `Kode` char(4) NOT NULL,
  `Inisial` char(3) DEFAULT NULL,
  `Keterangan` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of satuanbesar
-- ----------------------------
INSERT INTO `satuanbesar` VALUES ('1', '0001', 'kd', 'Kodi');

-- ----------------------------
-- Table structure for satuankecil
-- ----------------------------
DROP TABLE IF EXISTS `satuankecil`;
CREATE TABLE `satuankecil` (
  `ID` bigint(20) NOT NULL AUTO_INCREMENT,
  `Kode` char(4) NOT NULL,
  `Inisial` char(3) DEFAULT NULL,
  `Keterangan` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of satuankecil
-- ----------------------------
INSERT INTO `satuankecil` VALUES ('1', '0001', 'pcs', 'Pieces');

-- ----------------------------
-- Table structure for supplier
-- ----------------------------
DROP TABLE IF EXISTS `supplier`;
CREATE TABLE `supplier` (
  `ID` bigint(20) NOT NULL AUTO_INCREMENT,
  `Kode` char(5) DEFAULT NULL,
  `Keterangan` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=39 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of supplier
-- ----------------------------
INSERT INTO `supplier` VALUES ('1', '00001', 'UD. Jaya Makmur Sentosa');
INSERT INTO `supplier` VALUES ('2', '00002', 'CV. Mitra Umat Bersahaja');
INSERT INTO `supplier` VALUES ('3', '00003', 'PT. Bintang Timur Bersinar');
INSERT INTO `supplier` VALUES ('23', '00007', 'PT Bintang Kejora Terang Benderang');
INSERT INTO `supplier` VALUES ('22', '00006', 'UD. Jaya Makmur Sentosa Utama');
INSERT INTO `supplier` VALUES ('20', '00004', 'PT. Percobaan Pertama ');
INSERT INTO `supplier` VALUES ('21', '00005', 'PT. Percobaan Kedua');

-- ----------------------------
-- Table structure for system_icon
-- ----------------------------
DROP TABLE IF EXISTS `system_icon`;
CREATE TABLE `system_icon` (
  `ID` bigint(20) NOT NULL AUTO_INCREMENT,
  `Kode` char(30) DEFAULT NULL,
  `Class` char(30) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of system_icon
-- ----------------------------
INSERT INTO `system_icon` VALUES ('1', 'icoLaptop', 'fa fa-laptop');
INSERT INTO `system_icon` VALUES ('2', 'icoConfiguration', 'fa fa-cogs');
INSERT INTO `system_icon` VALUES ('3', 'icoCalculator', 'fa fa-calculator');
INSERT INTO `system_icon` VALUES ('4', 'icoBook', 'fa fa-book');
INSERT INTO `system_icon` VALUES ('5', 'icoEvent', 'fa fa-calendar-o');

-- ----------------------------
-- Table structure for system_level
-- ----------------------------
DROP TABLE IF EXISTS `system_level`;
CREATE TABLE `system_level` (
  `ID` bigint(20) NOT NULL AUTO_INCREMENT,
  `Level` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of system_level
-- ----------------------------
INSERT INTO `system_level` VALUES ('1', 'Administrator');
INSERT INTO `system_level` VALUES ('2', 'Operator');
INSERT INTO `system_level` VALUES ('3', 'User');

-- ----------------------------
-- Table structure for system_menu
-- ----------------------------
DROP TABLE IF EXISTS `system_menu`;
CREATE TABLE `system_menu` (
  `ID` bigint(20) NOT NULL AUTO_INCREMENT,
  `ID_Parent` bigint(20) NOT NULL,
  `Keterangan` varchar(150) NOT NULL,
  `Path` text,
  `Request` varchar(50) DEFAULT NULL,
  `ClassIco` varchar(50) DEFAULT NULL,
  `OrderList` int(3) DEFAULT '999',
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of system_menu
-- ----------------------------
INSERT INTO `system_menu` VALUES ('1', '0', 'File', '#', null, '1', '1');
INSERT INTO `system_menu` VALUES ('2', '1', 'Master Inventory', 'pages/mstinventory/mstinventory.php', 'mst_inventory', null, '999');
INSERT INTO `system_menu` VALUES ('3', '1', 'Master Employee', 'pages/mstemployee/mstemployee.php', 'mst_employee', '', '999');
INSERT INTO `system_menu` VALUES ('4', '0', 'Configuration', '#', '', '2', '999');
INSERT INTO `system_menu` VALUES ('5', '4', 'Username & Password', 'pages/cfgusers/cfgusers.php', 'cfg_userpassword', '', '999');
INSERT INTO `system_menu` VALUES ('6', '0', 'Transaction', '#', '', '3', '2');
INSERT INTO `system_menu` VALUES ('7', '6', 'Cashier', 'pages/trcashier/trcashier.php', 'tr_cashier', '', '999');
INSERT INTO `system_menu` VALUES ('8', '6', 'Daftar Cuci', 'pages/trdaftarcuci/trdaftarcuci.php', 'tr_daftarcuci', '', '999');
INSERT INTO `system_menu` VALUES ('9', '0', 'Report', '#', '', '4', '4');
INSERT INTO `system_menu` VALUES ('10', '9', 'Laporan Pemasukan Laundry', 'pages/rpttrlaundry/rpttrlaundry.php', 'rpt_trlaundry', '', '999');
INSERT INTO `system_menu` VALUES ('11', '1', 'Master Service', 'pages/msttypeservice/msttypeservice.php', 'mst_typeservice', '', '999');
INSERT INTO `system_menu` VALUES ('12', '1', 'Data Item', 'pages/trdataitem/trdataitem.php', 'tr_dataitem', null, '999');
INSERT INTO `system_menu` VALUES ('13', '1', 'Master Supplier', '', 'mst_supplier', null, '999');
INSERT INTO `system_menu` VALUES ('14', '9', 'Data Supplier', null, 'rpt_supplier', null, '999');
INSERT INTO `system_menu` VALUES ('15', '0', 'Event', '#', '#', '5', '3');
INSERT INTO `system_menu` VALUES ('16', '15', 'Event', null, 'ev_event', null, '999');
INSERT INTO `system_menu` VALUES ('17', '15', 'Calendar Event', null, 'ev_calendar', null, '999');

-- ----------------------------
-- Table structure for system_menu_level
-- ----------------------------
DROP TABLE IF EXISTS `system_menu_level`;
CREATE TABLE `system_menu_level` (
  `ID` bigint(20) NOT NULL AUTO_INCREMENT,
  `ID_Menu` bigint(20) NOT NULL,
  `ID_Level` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of system_menu_level
-- ----------------------------
INSERT INTO `system_menu_level` VALUES ('1', '1', '1');
INSERT INTO `system_menu_level` VALUES ('2', '2', '0');
INSERT INTO `system_menu_level` VALUES ('3', '3', '0');
INSERT INTO `system_menu_level` VALUES ('4', '4', '1');
INSERT INTO `system_menu_level` VALUES ('16', '9', '2');
INSERT INTO `system_menu_level` VALUES ('15', '7', '2');
INSERT INTO `system_menu_level` VALUES ('7', '5', '1');
INSERT INTO `system_menu_level` VALUES ('8', '6', '1');
INSERT INTO `system_menu_level` VALUES ('9', '7', '1');
INSERT INTO `system_menu_level` VALUES ('10', '8', '0');
INSERT INTO `system_menu_level` VALUES ('11', '9', '1');
INSERT INTO `system_menu_level` VALUES ('12', '10', '1');
INSERT INTO `system_menu_level` VALUES ('13', '11', '1');
INSERT INTO `system_menu_level` VALUES ('14', '6', '2');
INSERT INTO `system_menu_level` VALUES ('17', '10', '2');
INSERT INTO `system_menu_level` VALUES ('18', '8', '1');
INSERT INTO `system_menu_level` VALUES ('19', '3', '1');
INSERT INTO `system_menu_level` VALUES ('20', '2', '1');
INSERT INTO `system_menu_level` VALUES ('21', '12', '1');
INSERT INTO `system_menu_level` VALUES ('22', '12', '2');
INSERT INTO `system_menu_level` VALUES ('23', '13', '1');
INSERT INTO `system_menu_level` VALUES ('24', '14', '1');
INSERT INTO `system_menu_level` VALUES ('25', '15', '1');
INSERT INTO `system_menu_level` VALUES ('26', '16', '1');
INSERT INTO `system_menu_level` VALUES ('27', '17', '1');

-- ----------------------------
-- Table structure for system_user
-- ----------------------------
DROP TABLE IF EXISTS `system_user`;
CREATE TABLE `system_user` (
  `ID` bigint(20) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `initial` varchar(4) NOT NULL,
  `password` varchar(50) NOT NULL,
  `alamat` text,
  `LastLog` varchar(50) NOT NULL,
  `Level` bigint(20) NOT NULL,
  `Cabang` char(4) NOT NULL,
  `photoPath` varchar(200) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of system_user
-- ----------------------------
INSERT INTO `system_user` VALUES ('1', 'Administrator', 'Admin', 'ADM', 'a8e52217c48d055fb98e2732c587d056', null, '2017-09-27 09:13:07', '1', '0001', 'user-photo/user-12.jpg');
INSERT INTO `system_user` VALUES ('5', 'Operator', 'Operator', 'OPR', '4a7d29465a3f19a76f1f1c72add4aa0f', null, '2016-05-21 06:24:47', '2', '0001', '');

-- ----------------------------
-- Table structure for trcashier
-- ----------------------------
DROP TABLE IF EXISTS `trcashier`;
CREATE TABLE `trcashier` (
  `ID` bigint(20) NOT NULL AUTO_INCREMENT,
  `Faktur` char(30) NOT NULL,
  `NamaCustomer` varchar(50) NOT NULL,
  `Tgl` date DEFAULT NULL,
  `TipeService` char(4) NOT NULL,
  `Berat` float(16,2) NOT NULL DEFAULT '0.00',
  `CatatanKhusus` text NOT NULL,
  `Harga` double(16,2) NOT NULL DEFAULT '0.00',
  `Coin` double(16,2) NOT NULL DEFAULT '0.00',
  `NoUrut` char(10) DEFAULT NULL,
  `DateTime` datetime NOT NULL,
  `Username` varchar(20) NOT NULL,
  `Charge` double(16,2) NOT NULL DEFAULT '0.00',
  `Cabang` char(4) NOT NULL,
  `StatusPembayaran` char(1) NOT NULL DEFAULT 'Y',
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of trcashier
-- ----------------------------

-- ----------------------------
-- Table structure for types_of_goods
-- ----------------------------
DROP TABLE IF EXISTS `types_of_goods`;
CREATE TABLE `types_of_goods` (
  `ID` bigint(20) NOT NULL AUTO_INCREMENT,
  `Kode` char(5) NOT NULL,
  `Keterangan` varchar(50) NOT NULL,
  `Inisial` char(10) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of types_of_goods
-- ----------------------------
INSERT INTO `types_of_goods` VALUES ('1', '00001', 'Electronics', 'EL');
INSERT INTO `types_of_goods` VALUES ('2', '00002', 'Home & Living', 'HL');
INSERT INTO `types_of_goods` VALUES ('3', '00003', 'Sports & Hobby', 'SH');

-- ----------------------------
-- Table structure for types_of_service
-- ----------------------------
DROP TABLE IF EXISTS `types_of_service`;
CREATE TABLE `types_of_service` (
  `ID` bigint(20) NOT NULL AUTO_INCREMENT,
  `Kode` char(4) DEFAULT NULL,
  `Keterangan` varchar(50) DEFAULT NULL,
  `Harga` double(16,2) DEFAULT '0.00',
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of types_of_service
-- ----------------------------
INSERT INTO `types_of_service` VALUES ('1', '0001', 'Cuci Lipat', '40000.00');
INSERT INTO `types_of_service` VALUES ('2', '0002', 'Cuci Lipat / Self Service', '35000.00');
INSERT INTO `types_of_service` VALUES ('3', '0003', 'Cuci Setrika', '55000.00');
INSERT INTO `types_of_service` VALUES ('4', '0004', 'Setrika', '25000.00');
INSERT INTO `types_of_service` VALUES ('5', '0005', 'Suka Suka', '100000.00');
INSERT INTO `types_of_service` VALUES ('12', '0007', 'sd', '100000.00');
INSERT INTO `types_of_service` VALUES ('13', '0008', 'sdsd', '9879879.00');
INSERT INTO `types_of_service` VALUES ('14', '0009', 'test now', '2222.00');
INSERT INTO `types_of_service` VALUES ('15', '0010', 'hooh', '2222222.00');
SET FOREIGN_KEY_CHECKS=1;
