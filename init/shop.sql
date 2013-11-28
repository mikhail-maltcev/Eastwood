/*
Navicat MySQL Data Transfer

Source Server         : local
Source Server Version : 50534
Source Host           : localhost:3306
Source Database       : shop

Target Server Type    : MYSQL
Target Server Version : 50534
File Encoding         : 65001

Date: 2013-11-28 11:11:45
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for lmb_cms_document
-- ----------------------------
DROP TABLE IF EXISTS `lmb_cms_document`;
CREATE TABLE `lmb_cms_document` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL DEFAULT '',
  `description` varchar(255) NOT NULL DEFAULT '',
  `keywords` varchar(255) NOT NULL DEFAULT '',
  `content` text,
  `is_published` tinyint(1) DEFAULT '0',
  `parent_id` int(11) NOT NULL DEFAULT '0',
  `level` int(11) NOT NULL DEFAULT '0',
  `identifier` varchar(128) NOT NULL DEFAULT '',
  `priority` int(11) NOT NULL DEFAULT '0',
  `path` varchar(255) NOT NULL DEFAULT '',
  `ctime` int(11) NOT NULL DEFAULT '0',
  `utime` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `level` (`level`),
  KEY `parent_id` (`parent_id`),
  KEY `id` (`id`,`parent_id`),
  KEY `identifier` (`identifier`,`level`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of lmb_cms_document
-- ----------------------------
INSERT INTO `lmb_cms_document` VALUES ('1', '/', '', '', '\n<h1>   Limb!</h1>\n    <div style=\"text-align:right\">\n      <blockquote> -  !</blockquote>\n      <cite><a href=\"http://ru.wikipedia.org/wiki/%D0%98_%D0%B2%D1%81%D1%91-%D1%82%D0%B0%D0%BA%D0%B8_%D0%BE%D0%BD%D0%B0_%D0%B2%D0%B5%D1%80%D1%82%D0%B8%D1%82%D1%81%D1%8F!\"> </a></cite>\n    </div>\n    <h2><a name=\"__\" id=\"__\">  </a></h2>\n    <p>  Limb3  2  :</p>\n    <ul>\n      <li class=\"level1\"><div class=\"li\"> <a href=\"http://wiki.limb-project.com/doku.php?id=limb3:ru:tutorials:basic\" class=\"wikilink1\" title=\"limb3:ru:tutorials:basic\"> </a>,        WEB_APP, ACTIVE_RECORD  MACRO.</div></li>\n      <li class=\"level1\"><div class=\"li\"> <a href=\"http://wiki.limb-project.com/doku.php?id=limb3:ru:tutorials:shop\" class=\"wikilink1\" title=\"limb3:ru:tutorials:shop\">    </a>,         Limb3.</div></li>\n    </ul>\n\n    <p>      SVN   :</p>\n    <pre class=\"code\">  svn co https://svn.limb-project.com/limb/3.x/examples</pre>\n\n    <p>    <a href=\"http://bits.limb-project.com/\" class=\"urlextern\" title=\"http://bits.limb-project.com/\" rel=\"nofollow\">Code Bits</a>,      ,       .</p>\n\n    <p>         :</p>\n    <ul>\n      <li class=\"level1\"><div class=\"li\">    <a href=\"http://limb-project.com\" class=\"urlextern\" title=\"http://limb-project.com\" rel=\"nofollow\">http://limb-project.com</a>   Limb3</div></li>\n      <li class=\"level1\"><div class=\"li\">    CRUD-</div></li>\n      <li class=\"level1\"><div class=\"li\">     </div></li>\n      <li class=\"level1\"><div class=\"li\">      </div></li>\n      <li class=\"level1\"><div class=\"li\">    MACRO</div></li>\n      <li class=\"level1\"><div class=\"li\">     Limb3: <a href=\"http://syncman.limb-project.com\" class=\"urlextern\" title=\"http://syncman.limb-project.com\" rel=\"nofollow\">Syncman</a>  <a href=\"http://buildman.limb-project.com\" class=\"urlextern\" title=\"http://buildman.limb-project.com\" rel=\"nofollow\">Buildman</a></div></li>\n    </ul>\n\n    <h2><a name=\"\" id=\"\"></a></h2>\n    <p>  Limb3  .     <a href=\"/doku.php?id=limb3:ru:packages:macro\" class=\"wikilink1\" title=\"limb3:ru:packages:macro\"> MACRO</a>  <a href=\"/doku.php?id=limb3:ru:packages:active_record\" class=\"wikilink1\" title=\"limb3:ru:packages:active_record\">  ACTIVE_RECORD</a>.        <a href=\"/doku.php?id=limb3:ru:tutorials:basic\" class=\"wikilink1\" title=\"limb3:ru:tutorials:basic\"> </a>.</p>\n\n    <p>  <a href=\"/doku.php?id=limb3:ru:packages\" class=\"wikilink1\" title=\"limb3:ru:packages\">    Limb3</a>.     ,  -  , .     ,      ,      .  ,  -      ,     <a href=\"http://forum.limb-project.com/\" class=\"urlextern\" title=\"http://forum.limb-project.com/\" rel=\"nofollow\"></a> -         .</p>\n\n    <h2><a name=\"_\" id=\"_\"> </a></h2>\n    <p>     Limb3   .               .           <a href=\"/doku.php?id=limb3:ru:how_to_run_tests\" class=\"wikilink1\" title=\"limb3:ru:how_to_run_tests\"> </a>.</p>\n\n    <h2><a name=\"__limb3\" id=\"__limb3\">  Limb3</a></h2>\n    <p>   Limb3    ,             , :</p>\n\n    <ul>\n      <li class=\"level1\"><div class=\"li\"> TESTS_RUNNER -    </div></li>\n      <li class=\"level1\"><div class=\"li\"> ACTIVE_RECORD -   ActiveRecord,       </div></li>\n      <li class=\"level1\"><div class=\"li\"> MACRO - </div></li>\n      <li class=\"level1\"><div class=\"li\"> TOOLKIT -    </div></li>\n      <li class=\"level1\"><div class=\"li\">  ..</div></li>\n    </ul>\n\n    <h2><a name=\"__\" id=\"__\">  </a></h2>\n    <p>   ,     Limb3,     <a href=\"/doku.php?id=limb3:ru:claim\" class=\"wikilink1\" title=\"limb3:ru:claim\"> </a>.</p>\n\n    <h2><a name=\"___\" id=\"___\">   </a></h2>\n    <p> ,   <a href=\"http://forum.limb-project.com\" class=\"urlextern\" title=\"http://forum.limb-project.com\" rel=\"nofollow\"></a>.       .</p>\n\n    <h2> limb3   </h2>\n    <p>         wiki .</p>\n\n    <h3>core</h3>\n      <p> ,      .           .       .</p>\n      <ul>\n        <li>       (autoload)</li>\n        <li>  </li>\n        <li>  ( ,     )</li>\n        <li>  call_back </li>\n        <li>    ,    ,    </li>\n      </ul>\n\n    <h3>toolkit</h3>\n    <p>   <a href=\"/wiki/%D0%9F%D0%B0%D1%82%D1%82%D0%B5%D1%80%D0%BD\" title=\"\"></a> <a href=\"/w/index.php?title=Dynamic_Service_Locator&amp;action=edit&amp;redlink=1\" class=\"new\" title=\"Dynamic Service Locator ( )\">Dynamic Service Locator</a>.     ,      ,           ()   ,       .</p>\n\n    <h3>macro</h3>\n    <p>     ,   :</p>\n\n    <ul>\n      <li>   -</li>\n      <li>    (  )</li>\n      <li>    (   )</li>\n      <li> runtime  </li>\n      <li>     </li>\n    </ul>\n\n    <h3>dbal (Data Base Abstraction Layer)</h3>\n    <p>  -   <a href=\"/wiki/%D0%91%D0%B0%D0%B7%D0%B0_%D0%B4%D0%B0%D0%BD%D0%BD%D1%8B%D1%85\" title=\" \"> </a>,     .       : <a href=\"/wiki/MySQL\" title=\"MySQL\">MySQL</a> (<a href=\"/wiki/MySQLi\" title=\"MySQLi\">MySQLi</a>), <a href=\"/wiki/PostgreSQL\" title=\"PostgreSQL\">PostgreSQL</a>, <a href=\"/wiki/SQLite\" title=\"SQLite\">SQLite</a>  <a href=\"/wiki/Oracle\" title=\"Oracle\">Oracle</a>.</p>\n\n    <p><a name=\"active_record\" id=\"active_record\"></a></p>\n\n    <h3>active_record</h3>\n    <p> <a href=\"/wiki/%D0%9F%D0%B0%D1%82%D1%82%D0%B5%D1%80%D0%BD\" title=\"\"></a> <a href=\"/w/index.php?title=ActiveRecord&amp;action=edit&amp;redlink=1\" class=\"new\" title=\"ActiveRecord ( )\">ActiveRecord</a>,        <a href=\"/wiki/Ruby_on_Rails\" title=\"Ruby on Rails\">Ruby on Rails</a>.</p>\n\n    <ul>\n      <li>      </li>\n      <li>  --, --  --</li>\n      <li> ValueObjects</li>\n\n      <li>      (Single Table Inheritance)</li>\n      <li> « » (LazyLoading)  </li>\n      <li>   </li>\n    </ul>\n\n    <h3>web_app</h3>\n    <p>   -,   <a href=\"/wiki/MVC\" title=\"MVC\" class=\"mw-redirect\">MVC</a>.        Controller-.              ,  WEB_APP   ,      ,       «»  Limb3  DBAL  ACTIVE_RECORD,       VIEW.</p>\n\n    <h3>tests_runner</h3>\n    <p>     <a href=\"/w/index.php?title=SimpleTest&amp;action=edit&amp;redlink=1\" class=\"new\" title=\"SimpleTest ( )\">SimpleTest</a>   ,     .      ,      <a href=\"/wiki/CLI\" title=\"CLI\">cli</a>  <a href=\"/wiki/Web\" title=\"Web\" class=\"mw-redirect\">web</a>-.</p>\n', '1', '0', '0', '', '0', '', '0', '0');

-- ----------------------------
-- Table structure for lmb_cms_seo
-- ----------------------------
DROP TABLE IF EXISTS `lmb_cms_seo`;
CREATE TABLE `lmb_cms_seo` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `url` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `keywords` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of lmb_cms_seo
-- ----------------------------
INSERT INTO `lmb_cms_seo` VALUES ('1', '/', '  ', '', ' ');

-- ----------------------------
-- Table structure for lmb_cms_text_block
-- ----------------------------
DROP TABLE IF EXISTS `lmb_cms_text_block`;
CREATE TABLE `lmb_cms_text_block` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `identifier` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `content` longtext,
  PRIMARY KEY (`id`),
  KEY `identifier` (`identifier`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of lmb_cms_text_block
-- ----------------------------

-- ----------------------------
-- Table structure for lmb_cms_user
-- ----------------------------
DROP TABLE IF EXISTS `lmb_cms_user`;
CREATE TABLE `lmb_cms_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `hashed_password` varchar(64) DEFAULT NULL,
  `generated_password` varchar(64) DEFAULT NULL,
  `login` varchar(50) DEFAULT NULL,
  `role_type` varchar(10) NOT NULL DEFAULT '0',
  `ctime` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `login` (`login`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of lmb_cms_user
-- ----------------------------
INSERT INTO `lmb_cms_user` VALUES ('1', 'support@limb-project.com', 'Admin', 'b9fb54d1cf88c8c9141cdb01215969221899ff97', null, 'admin', 'admin', '1');

-- ----------------------------
-- Table structure for order
-- ----------------------------
DROP TABLE IF EXISTS `order`;
CREATE TABLE `order` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL DEFAULT '0',
  `date` int(11) NOT NULL DEFAULT '0',
  `summ` float DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of order
-- ----------------------------
INSERT INTO `order` VALUES ('8', '2147483647', '1385617011', '10266', '2', 'Penzas');
INSERT INTO `order` VALUES ('9', '2147483647', '1385619432', '2766', '1', '1456');
INSERT INTO `order` VALUES ('10', '2147483647', '1385620093', '10266', '1', 'Vologda');

-- ----------------------------
-- Table structure for order_line
-- ----------------------------
DROP TABLE IF EXISTS `order_line`;
CREATE TABLE `order_line` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `order_id` int(11) NOT NULL DEFAULT '0',
  `product_id` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `order_id` (`order_id`),
  KEY `product_id` (`product_id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of order_line
-- ----------------------------
INSERT INTO `order_line` VALUES ('13', '8', '55', '1', '2766');
INSERT INTO `order_line` VALUES ('14', '8', '62', '1', '7500');
INSERT INTO `order_line` VALUES ('15', '9', '55', '1', '2766');
INSERT INTO `order_line` VALUES ('16', '10', '62', '1', '7500');
INSERT INTO `order_line` VALUES ('17', '10', '55', '1', '2766');

-- ----------------------------
-- Table structure for product
-- ----------------------------
DROP TABLE IF EXISTS `product`;
CREATE TABLE `product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `description` text,
  `is_available` tinyint(1) DEFAULT NULL,
  `price` float DEFAULT NULL,
  `image_name` varchar(255) DEFAULT NULL,
  `node_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=63 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of product
-- ----------------------------
INSERT INTO `product` VALUES ('55', '500GB Seagate Constellation ES (ST500NM0011) SATA3, 7200, 64Mb', 'test', '1', '2766', 'hard0.jpg', '19');
INSERT INTO `product` VALUES ('61', 'SSD 120GB Crucial M500 (CT120M500SSD1)', 'very fast', '0', '4250', 'hard1.jpg', '19');
INSERT INTO `product` VALUES ('62', 'Gainward GTX650Ti BOOST GS', 'best video card', '1', '7500', 'vga1.jpg', '15');

-- ----------------------------
-- Table structure for property
-- ----------------------------
DROP TABLE IF EXISTS `property`;
CREATE TABLE `property` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `property_name` varchar(128) DEFAULT '',
  `node_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=latin1 COMMENT='latin1_swedish_ci';

-- ----------------------------
-- Records of property
-- ----------------------------
INSERT INTO `property` VALUES ('28', 'interface', '19');
INSERT INTO `property` VALUES ('29', 'Buffer Size', '19');
INSERT INTO `property` VALUES ('30', 'Speed', '19');
INSERT INTO `property` VALUES ('31', 'Disk size', '19');
INSERT INTO `property` VALUES ('32', 'ram', '15');
INSERT INTO `property` VALUES ('33', 'interface', '15');

-- ----------------------------
-- Table structure for property_value
-- ----------------------------
DROP TABLE IF EXISTS `property_value`;
CREATE TABLE `property_value` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `property_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `value` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of property_value
-- ----------------------------
INSERT INTO `property_value` VALUES ('8', '28', '55', 'SATA');
INSERT INTO `property_value` VALUES ('9', '29', '55', '64 Mb');
INSERT INTO `property_value` VALUES ('10', '30', '55', '7200 rpm');
INSERT INTO `property_value` VALUES ('11', '31', '55', '500 Gb');
INSERT INTO `property_value` VALUES ('24', '28', '61', 'SATA III');
INSERT INTO `property_value` VALUES ('25', '29', '61', null);
INSERT INTO `property_value` VALUES ('26', '30', '61', null);
INSERT INTO `property_value` VALUES ('27', '31', '61', '120 Gb');
INSERT INTO `property_value` VALUES ('28', '32', '62', '1024');
INSERT INTO `property_value` VALUES ('29', '33', '62', 'PCI-E');

-- ----------------------------
-- Table structure for Tree
-- ----------------------------
DROP TABLE IF EXISTS `Tree`;
CREATE TABLE `Tree` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) DEFAULT NULL,
  `level` int(11) DEFAULT NULL,
  `identifier` varchar(128) NOT NULL,
  `path` varchar(128) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1 COMMENT='latin1_swedish_ci';

-- ----------------------------
-- Records of Tree
-- ----------------------------
INSERT INTO `Tree` VALUES ('1', '0', '0', '', '/1/');
INSERT INTO `Tree` VALUES ('14', '13', '1', 'Computer Parts', '/1/14/');
INSERT INTO `Tree` VALUES ('15', '14', '2', 'VGA', '/1/14/17/');
INSERT INTO `Tree` VALUES ('16', '14', '2', 'Processor', '/1/14/16/');
INSERT INTO `Tree` VALUES ('19', '14', '2', 'Hard Disk', '/1/14/19/');
INSERT INTO `Tree` VALUES ('20', '1', '1', 'Books', '/1/20/');

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `login` varchar(30) DEFAULT NULL,
  `hashed_password` varchar(32) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `is_admin` tinyint(1) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;