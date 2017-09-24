/*
Navicat MySQL Data Transfer

Source Server         : navicat
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : phoneshop

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2017-09-24 06:56:08
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for `category`
-- ----------------------------
DROP TABLE IF EXISTS `category`;
CREATE TABLE `category` (
  `catId` int(11) NOT NULL AUTO_INCREMENT,
  `catName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `parentId` int(11) DEFAULT NULL,
  `status` smallint(6) NOT NULL DEFAULT '1',
  `dateCreate` int(11) NOT NULL,
  PRIMARY KEY (`catId`),
  UNIQUE KEY `catName` (`catName`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of category
-- ----------------------------
INSERT INTO category VALUES ('1', 'Product', null, '1', '0');
INSERT INTO category VALUES ('2', 'Iphone', '1', '0', '1505785511');
INSERT INTO category VALUES ('3', 'Sam Sung', '1', '1', '1505785527');
INSERT INTO category VALUES ('4', 'Sony', '1', '1', '1505785606');
INSERT INTO category VALUES ('5', 'Htc', '1', '1', '1505785625');
INSERT INTO category VALUES ('6', 'Oppo', '1', '1', '1505785648');
INSERT INTO category VALUES ('7', 'Xiaomi', '1', '1', '1505785684');
INSERT INTO category VALUES ('9', 'Lenovo', '1', '1', '1505814156');
INSERT INTO category VALUES ('10', 'Iphone 6', '2', '1', '1505814176');
INSERT INTO category VALUES ('11', 'Iphone 7', '2', '1', '1506051504');
INSERT INTO category VALUES ('12', 'Samsung Galaxy S8', '3', '1', '1506091122');
INSERT INTO category VALUES ('13', 'Samsung Galaxy S7', '3', '1', '1506091137');

-- ----------------------------
-- Table structure for `factory`
-- ----------------------------
DROP TABLE IF EXISTS `factory`;
CREATE TABLE `factory` (
  `facId` int(11) NOT NULL AUTO_INCREMENT,
  `facName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `logo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '1',
  `dateCreate` int(11) NOT NULL,
  PRIMARY KEY (`facId`),
  UNIQUE KEY `facName` (`facName`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of factory
-- ----------------------------
INSERT INTO factory VALUES ('1', 'SamSung', 'http://localhost/phoneshop/uploads/images/4a81afd3541df821012996703e4edb17.jpg', '1', '1505891602');
INSERT INTO factory VALUES ('2', 'Xiaomi', 'http://localhost/phoneshop/uploads/images/images%20(3).jpg', '1', '1505891812');
INSERT INTO factory VALUES ('3', 'Apple', 'http://localhost/phoneshop/uploads/images/images%20(3).jpg', '1', '1506068731');
INSERT INTO factory VALUES ('4', 'Oppo', 'http://localhost/phoneshop/uploads/images/Products/thumbC5-300x350.jpg', '1', '1506091543');

-- ----------------------------
-- Table structure for `migration`
-- ----------------------------
DROP TABLE IF EXISTS `migration`;
CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of migration
-- ----------------------------
INSERT INTO migration VALUES ('m000000_000000_base', '1504067605');
INSERT INTO migration VALUES ('m130524_201442_init', '1504067652');
INSERT INTO migration VALUES ('m170830_063128_tbl_province', '1504085061');
INSERT INTO migration VALUES ('m170831_122139_tbl_group', '1504182698');
INSERT INTO migration VALUES ('m170831_135153_tbl_group', '1504187603');
INSERT INTO migration VALUES ('m170901_022130_tbl_category', '1504232780');
INSERT INTO migration VALUES ('m170901_024406_tbl_category', '1504234186');
INSERT INTO migration VALUES ('m170901_025524_tbl_category', '1504234542');
INSERT INTO migration VALUES ('m170901_030034_tbl_category', '1504234885');
INSERT INTO migration VALUES ('m170905_134025_tbl_product', '1504661638');
INSERT INTO migration VALUES ('m170906_065606_tbl_product', '1504681230');
INSERT INTO migration VALUES ('m170913_014933_Category', '1505267847');
INSERT INTO migration VALUES ('m170913_090541_Category', '1505293679');
INSERT INTO migration VALUES ('m170914_020927_Product', '1505356092');
INSERT INTO migration VALUES ('m170914_024101_Product', '1505357031');
INSERT INTO migration VALUES ('m170914_024908_Product', '1505357427');
INSERT INTO migration VALUES ('m170916_014724_category', '1505527420');
INSERT INTO migration VALUES ('m170917_135423_category', '1505656535');
INSERT INTO migration VALUES ('m170918_030848_category', '1505704175');
INSERT INTO migration VALUES ('m170920_065900_factory', '1505891161');

-- ----------------------------
-- Table structure for `news`
-- ----------------------------
DROP TABLE IF EXISTS `news`;
CREATE TABLE `news` (
  `newsId` int(11) NOT NULL AUTO_INCREMENT,
  `newsCatId` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `summary` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `dateCreate` int(11) NOT NULL,
  `updateAt` int(11) NOT NULL,
  PRIMARY KEY (`newsId`),
  UNIQUE KEY `name` (`name`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of news
-- ----------------------------

-- ----------------------------
-- Table structure for `news_category`
-- ----------------------------
DROP TABLE IF EXISTS `news_category`;
CREATE TABLE `news_category` (
  `newsCatId` int(11) NOT NULL AUTO_INCREMENT,
  `newsCatName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `parentId` int(11) DEFAULT NULL,
  `status` smallint(6) NOT NULL DEFAULT '1',
  `dateCreate` int(11) NOT NULL,
  `updateAt` int(11) NOT NULL,
  PRIMARY KEY (`newsCatId`),
  UNIQUE KEY `newsCatName` (`newsCatName`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of news_category
-- ----------------------------
INSERT INTO news_category VALUES ('1', 'News', null, '1', '1', '0');
INSERT INTO news_category VALUES ('2', 'Tin thế giới', '1', '1', '0', '1505808396');
INSERT INTO news_category VALUES ('3', 'Sản phẩm mới', '1', '1', '0', '0');
INSERT INTO news_category VALUES ('5', 'Góc Sáng Tạo', '1', '1', '1505812764', '0');

-- ----------------------------
-- Table structure for `product`
-- ----------------------------
DROP TABLE IF EXISTS `product`;
CREATE TABLE `product` (
  `proId` int(11) NOT NULL AUTO_INCREMENT,
  `proName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `catId` int(11) NOT NULL,
  `factoryId` int(11) NOT NULL,
  `images` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `saleOf` int(11) NOT NULL,
  `startSale` date NOT NULL,
  `endSale` date NOT NULL,
  `color` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `screenSize` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `resolution` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `peratingSystem` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cpu` int(11) NOT NULL,
  `ram` int(11) NOT NULL,
  `rom` int(11) NOT NULL,
  `mainCamera` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `secondaryCamera` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pin` int(11) NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '1',
  `dateCreate` int(11) NOT NULL,
  PRIMARY KEY (`proId`),
  UNIQUE KEY `proName` (`proName`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of product
-- ----------------------------
INSERT INTO product VALUES ('9', 'Apple Iphon 6', '10', '3', 'http://localhost/phoneshop/uploads/images/Products/iphone-6-32gb-vang-400-400x460.png', '200', '189', '0000-00-00', '0000-00-00', 'Vàng đồng', '18:9', 'FuLL hd', 'ios', '11', '1', '64', '12.0', '8.0', '4000', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry.&nbsp;</p>', '<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem&nbsp;</p>', '1', '1506090488');
INSERT INTO product VALUES ('10', 'Apple Iphon 7 Black', '11', '3', 'http://localhost/phoneshop/uploads/images/Products/iphone-7BLACK1-300x350.png', '455', '444', '0000-00-00', '0000-00-00', 'Black', '18:9', 'FuLL hd', 'ios', '11', '5', '64', '12.0', '8.0', '4000', '<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>', '<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>', '1', '1506090683');
INSERT INTO product VALUES ('11', 'iphone 6 - 64GB', '10', '3', 'http://localhost/phoneshop/uploads/images/Products/iphone-6s.png', '355', '344', '0000-00-00', '0000-00-00', 'Trắng', '18:9', 'FuLL hd', 'ios', '11', '3', '64', '12.0', '8.0', '4000', '<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>', '<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>', '1', '1506090784');
INSERT INTO product VALUES ('12', 'iphone 7 Plus', '11', '3', 'http://localhost/phoneshop/uploads/images/Products/iphone-8-forbes.png', '467', '444', '0000-00-00', '0000-00-00', 'Black', '18:9', 'FuLL hd', 'ios', '11', '5', '64', '12.0', '8.0', '4000', '<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>', '<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>', '1', '1506090899');
INSERT INTO product VALUES ('13', 'iphone 7 Plus Lock', '11', '3', 'http://localhost/phoneshop/uploads/images/Products/iphone-8-forbes.png', '455', '344', '0000-00-00', '0000-00-00', 'Black', '18:9', 'FuLL hd', 'ios', '5', '2', '64', '12.0', '8.0', '4000', '<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>', '<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>', '1', '1506091014');
INSERT INTO product VALUES ('14', 'Samsung Galaxy S8 ', '12', '1', 'http://localhost/phoneshop/uploads/images/Products/s8-troi-300x350.png', '258', '230', '0000-00-00', '0000-00-00', 'Black', '18:9', 'FuLL hd', 'ios', '11', '5', '64', '12.0', '8.0', '4000', '<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>', '<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>', '1', '1506091227');
INSERT INTO product VALUES ('15', 'Samsung Galaxy S7 ', '13', '1', 'http://localhost/phoneshop/uploads/images/Products/samsung-galaxy-s8-plus-543542304-jpg.jpg', '200', '168', '0000-00-00', '0000-00-00', 'Black', '18:9', 'FuLL hd', '1', '11', '5', '64', '12.0', '8.0', '4000', '<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>', '<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>', '1', '1506091307');
INSERT INTO product VALUES ('16', 'Sam Sung Galaxy A9', '13', '1', 'http://localhost/phoneshop/uploads/images/Products/thumbC5-300x350.jpg', '355', '321', '0000-00-00', '0000-00-00', 'Trắng', '18:9', 'FuLL hd', 'Androi 7.0', '11', '3', '64', '12.0', '8.0', '4000', '<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>', '<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>', '1', '1506091444');
INSERT INTO product VALUES ('17', 'Oppo F3 Lite ', '6', '4', 'http://localhost/phoneshop/uploads/images/Products/21.jpg', '256', '243', '0000-00-00', '0000-00-00', 'Black', '18:9', 'FuLL hd', 'Androi 7.0', '11', '5', '64', '12.0', '8.0', '4000', '<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>', '<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>', '1', '1506091647');

-- ----------------------------
-- Table structure for `user`
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `gender` int(1) DEFAULT NULL,
  `province` int(11) NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '1',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `password_reset_token` (`password_reset_token`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO user VALUES ('1', 'admin', 'N_tY3ThbcM17iUTak8ay9J-lnZ9CgpZB', '$2y$13$WR6BQYk.2Nm1LOzN6Q8xc.XO8lw.xUIrZAroonYmXDVDNm6NRTAyS', null, 'thangbx@gmail.com', null, '0', '10', '1504085439', '1504085439');
