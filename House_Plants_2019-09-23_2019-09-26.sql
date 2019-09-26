# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.7.27)
# Database: House_Plants_2019-09-23
# Generation Time: 2019-09-26 14:32:01 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table House_Plants
# ------------------------------------------------------------

DROP TABLE IF EXISTS `House_Plants`;

CREATE TABLE `House_Plants` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `latin_name` varchar(255) NOT NULL DEFAULT '',
  `level_of_watering` varchar(5) NOT NULL DEFAULT '',
  `level_of_sunlight` varchar(8) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `House_Plants` WRITE;
/*!40000 ALTER TABLE `House_Plants` DISABLE KEYS */;

INSERT INTO `House_Plants` (`id`, `latin_name`, `level_of_watering`, `level_of_sunlight`)
VALUES
	(1,'Philodendron Scandens','light','bright'),
	(2,'Hedera Helix','light','bright'),
	(3,'Pilea Involucrata','heavy','moderate'),
	(4,'Peperomia Caperata','light','low'),
	(7,'Ivy','Light','Moderate'),
	(9,'Sunflower','Light','Bright');

/*!40000 ALTER TABLE `House_Plants` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
