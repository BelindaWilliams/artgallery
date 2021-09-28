# ************************************************************
# Sequel Pro SQL dump
# Version 5446
#
# https://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.7.35)
# Database: project02
# Generation Time: 2021-09-28 08:57:47 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
SET NAMES utf8mb4;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table artcollection
# ------------------------------------------------------------

DROP TABLE IF EXISTS `artcollection`;

CREATE TABLE `artcollection` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `artist` varchar(255) NOT NULL DEFAULT '',
  `title` varchar(255) NOT NULL DEFAULT '',
  `medium` varchar(255) DEFAULT NULL,
  `size` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `artcollection` WRITE;
/*!40000 ALTER TABLE `artcollection` DISABLE KEYS */;

INSERT INTO `artcollection` (`id`, `artist`, `title`, `medium`, `size`, `image`)
VALUES
	(1,'Amanda Hoskin','Golden Light Upon the Snow, Bodmin Moor','oil on canvas','61 x 89cm.','1.jpg'),
	(2,'Rosemary Gray','St Thomas Beckett Church, Box','watercolour on paper','22 x 33cm.','2.jpg'),
	(3,'Rosemary Gray','Quiet Street, Bath','watercolour on paper','32 x 26cm.','3.jpg'),
	(5,'Utagawa Hiroshige','Hodogaya: Entrance to Shinmachi, from the series The Fifty-three Stations of the Tokaido Road','woodblock print','20 x 32cm.','5.jpg'),
	(6,'Unknown Artist','View of Pagoda','woodbloack print','22 x 17cm.','6.jpg'),
	(7,'Ed Collacott','Autumn Evening, Rhossilli','photograph','24 x 60cm.','7.jpg'),
	(8,'B. Tomlinson','Lake District','watercolour on paper','25 x 35cm.','8.jpg'),
	(9,'Gesso Yoshimoto','Sparrow on Bamboo in Snow','woodblock print','24 x 12.5cm.','9.jpg'),
	(10,'Utagawa Hiroshige','View of Mountains','woodblock print','8.5 x 9.5cm','10.jpg'),
	(11,'Utagawa Hiroshige','View of Mountains','woodblock print','8.5 x 9.5cm.','11.jpg'),
	(13,'Utagawa Hiroshige','Sakanoshita, from the series The Fifty-three Stations of the Tokaido Road','woodblock print','16 x 21cm.','13.jpg'),
	(14,'ASCO','First Supper (After a Major Riot)','photograph','42 x 59.4cm.','14.jpg'),
	(15,'Belinda Boot','By the Fire Side','gouache and watercolour on paper','38 x 28cm.','15.jpg'),
	(16,'Shoda Koho','Woman Carrying a Basket of Plants','woodblock print','33 x 7.5cm.','16.jpg'),
	(17,'Ed Collacott','The Four Seasons','photograph','4 x 6.5cm. (4)','17.jpg'),
	(18,'Amanda Hoskin','Stunning Light across the Bay, Start Point','oil on paper','50.8 x 53.3cm.','18.jpg'),
	(19,'Imao Keinen','Three finches in rose bush','woodblock print','31 x 22cm.','19.jpg'),
	(20,'Imao Keinen','Nuthatch in blossom tree','woodblock print','31 x 22cm.','20.jpg'),
	(21,'Imao Keinen','Dunnock in dandelions','woodblock print','31 x 22cm.','21.jpg'),
	(22,'Amanda Hoskin','First Snow of Winter','oil on paper','20.3 x 20.3cm.','22.jpg');

/*!40000 ALTER TABLE `artcollection` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
