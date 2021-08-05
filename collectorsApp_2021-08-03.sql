# ************************************************************
# Sequel Pro SQL dump
# Version 5446
#
# https://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.5.5-10.6.3-MariaDB-1:10.6.3+maria~focal)
# Database: collectorsApp
# Generation Time: 2021-08-03 15:18:28 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
SET NAMES utf8mb4;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table gwent_cards
# ------------------------------------------------------------

DROP TABLE IF EXISTS `gwent_cards`;

CREATE TABLE `gwent_cards` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `image_link` varchar(1000) DEFAULT NULL,
  `unit_strength` int(11) DEFAULT NULL,
  `type` varchar(1000) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `territory` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

LOCK TABLES `gwent_cards` WRITE;
/*!40000 ALTER TABLE `gwent_cards` DISABLE KEYS */;

INSERT INTO `gwent_cards` (`id`, `name`, `image_link`, `unit_strength`, `type`, `price`, `territory`)
VALUES
	(1,'Geralt of Rivia','images/Geralt-of-Rivia-gwent-card.jpg',15,'Hero',50,'Novigrad'),
	(2,'Avallach','images/Avallach-gwent-card.jpg',0,'Spy',20,'Skellige'),
	(3,'Triss Merigold','images/Triss-Merigold-gwent-card.jpg',7,'Sorcerres',20,'Novigrad'),
	(4,'Cirilla Fiona Elen Rianno','images/Cirilla-Fiona-Elen-Riannon-gwent-card.jpg',15,'Special',50,'Grassy Knoll'),
	(5,'Vesemir','images/Vesemir-gwent-card.jpg',6,'Master',20,'Novigrad'),
	(6,'Yennefer of Vengerberg','images/Yennefer-of-Vengerberg-gwent-card.jpg',7,'Medic',50,'Novigrad'),
	(7,'Dandelion','images/Dandelion-gwent-card.jpg',2,'Morale',20,'Gustfields'),
	(8,'Zoltan Chivay','images/Zoltan-Chivay-gwent-card.jpg',5,'Berserk',10,'Random'),
	(9,'Emiel Regis Rohellec Terzieff','images/Emiel-Regis-Rohellec-Terzieff-gwent-card.jpg',5,'Special',10,'Random');

/*!40000 ALTER TABLE `gwent_cards` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
