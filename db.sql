-- MySQL dump 10.13  Distrib 5.6.24, for linux-glibc2.5 (x86_64)
--
-- Host: localhost    Database: restoration
-- ------------------------------------------------------
-- Server version	5.5.43-0ubuntu0.14.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `orders` (
  `id_o` int(11) NOT NULL AUTO_INCREMENT,
  `date` varchar(100) DEFAULT NULL,
  `time` time DEFAULT NULL,
  `client` varchar(100) DEFAULT NULL,
  `guests` int(11) DEFAULT NULL,
  `resturant` int(11) NOT NULL,
  PRIMARY KEY (`id_o`),
  KEY `orders_idx` (`resturant`),
  CONSTRAINT `orders` FOREIGN KEY (`resturant`) REFERENCES `resturant` (`id_r`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orders`
--

LOCK TABLES `orders` WRITE;
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
INSERT INTO `orders` VALUES (7,'06/23/2015','14:00:00','Ragnar',8,34),(8,'06/23/2015','19:00:00','Sergo',6,48),(9,'06/23/2015','16:25:00','ÐÐ½Ð´Ñ€Ñ–Ð¹',6,36),(10,'06/23/2015','18:00:00','Vlad',4,36);
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `resturant`
--

DROP TABLE IF EXISTS `resturant`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `resturant` (
  `id_r` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `tel` varchar(45) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `e-mail` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `descript` mediumtext,
  `photo1` varchar(100) DEFAULT NULL,
  `photo2` varchar(100) DEFAULT NULL,
  `photo3` varchar(100) DEFAULT NULL,
  `tablesCount` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_r`)
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `resturant`
--

LOCK TABLES `resturant` WRITE;
/*!40000 ALTER TABLE `resturant` DISABLE KEYS */;
INSERT INTO `resturant` VALUES (29,'HardRock Cafe',NULL,NULL,'q@i.ua','efe6398127928f1b2e9ef3207fb82663','Hard rock Hard rock Hard rock Hard rockv Hard rock Hard rock Hard rock Hard rock v v v v Hard rockHard rockHard rock Hard rock','images/q@i.ua/growth.png','images/q@i.ua/images.jpg','images/q@i.ua/',NULL),(30,'Karakow',NULL,NULL,'2@i.ua','4297f44b13955235245b2497399d7a93','sadasdasdasdasdasdasdsadasdasdasdkdfkjldfvo;dfvkldfbvkdfvgldflv,rb,d,bg/d;','images/2@i.ua/images (1).jpg','images/2@i.ua/images.jpg','images/2@i.ua/search.png',NULL),(31,'Italia',NULL,NULL,'a@i.ua','a8f5f167f44f4964e6c998dee827110c','Italia in every element','images/a@i.ua/r3.jpg','images/a@i.ua/r2.jpg','images/a@i.ua/r1.jpg',NULL),(33,'radÑ–','937993','psycho2','qweqwe@a.ua','efe6398127928f1b2e9ef3207fb82663','lolÑ–ws2','images/qweqwe@a.ua/search.png','images/qweqwe@a.ua/r1.jpg','images/qweqwe@a.ua/images.jpg',NULL),(34,'Ð“ÐžÐ¡Ð¢ Ð±Ð°Ñ€','+38 (066) 109-21-92','Ð²ÑƒÐ». Ð›ÐµÑÑ ÐšÑƒÑ€Ð±Ð°ÑÐ° 5','gost@i.ua','4297f44b13955235245b2497399d7a93','Ð¦ÐµÐ¹ Ð±Ð°Ñ€ Ñ” ÑÑƒÑ‡Ð°ÑÐ½Ð¾ÑŽ Ñ–Ð½Ñ‚ÐµÑ€Ð¿Ñ€ÐµÑ‚Ð°Ñ†Ñ–Ñ”ÑŽ Ð·Ð°ÐºÐ»Ð°Ð´Ñ–Ð² 80-Ñ… Ñ€Ð¾ÐºÑ–Ð². Ð’Ð¸ Ð±ÑƒÐ´ÐµÑ‚Ðµ Ð¿Ñ€Ð¸Ñ”Ð¼Ð½Ð¾ Ð·Ð´Ð¸Ð²Ð¾Ð²Ð°Ð½Ñ– Ñ–Ð½Ñ‚ÐµÑ€\'Ñ”Ñ€Ð¾Ð¼, ÑÐºÐ¸Ð¹ Ð½Ð°Ð¿Ð¾Ð²Ð½ÐµÐ½Ð¸Ð¹ Ñ€ÐµÑ‡Ð°Ð¼Ð¸ Ð· Ð´Ð¸Ñ‚Ð¸Ð½ÑÑ‚Ð²Ð°. Ð¢ÑƒÑ‚ Ð´ÐµÐ¼Ð¾ÐºÑ€Ð°Ñ‚Ð¸Ñ‡Ð½Ñ– Ñ†Ñ–Ð½Ð¸, Ñ‚ÐµÐ¿Ð»Ð° Ð°Ñ‚Ð¼Ð¾ÑÑ„ÐµÑ€Ð° Ñ‚Ð° Ñ€Ñ–Ð·Ð½Ð¾Ð¼Ð°Ð½Ñ–Ñ‚Ð½Ð° ÐºÑƒÑ…Ð½Ñ. Ð”Ð»Ñ Ð¿Ð¾Ñ†Ñ–Ð½Ð¾Ð²ÑƒÐ²Ð°Ñ‡Ñ–Ð² Ð²Ð¸ÑˆÑƒÐºÐ°Ð½Ð¸Ñ… ÑÑ‚Ñ€Ð°Ð² Ð¼Ð¸ Ð¿Ñ€Ð¾Ð¿Ð¾Ð½ÑƒÑ”Ð¼Ð¾ Ð¼ÐµÐ½ÑŽ \"Ð†Ð½Ñ‚ÑƒÑ€Ð¸ÑÑ‚\", Ð»ÑŽÐ±Ð¸Ñ‚ÐµÐ»Ñ– Ð´Ð¾Ð¼Ð°ÑˆÐ½ÑŒÐ¾Ñ– ÐºÑƒÑ…Ð½Ñ– Ñ‚Ð°ÐºÐ¾Ð¶ Ð·Ð°Ð»Ð¸ÑˆÐ°Ñ‚ÑŒÑÑ Ð·Ð°Ð´Ð¾Ð²Ð¾Ð»ÐµÐ½Ð¸Ð¼Ð¸. Ð’ Ð±ÑƒÐ´Ð½Ñ– Ð´Ð½Ñ– Ð´Ñ–Ñ” Ð¾Ð±Ñ–Ð´Ð½Ñ Ð¿Ñ€Ð¾Ð¿Ð¾Ð·Ð¸Ñ†Ñ–Ñ Ð´Ð»Ñ Ð±Ð°Ð¶Ð°ÑŽÑ‡Ð¸Ñ… ÑÐ¸Ñ‚Ð½Ð¾ Ñ‚Ð° ÑˆÐ²Ð¸Ð´ÐºÐ¾ Ð¿Ð¾Ñ–ÑÑ‚Ð¸ Ð²ÑÑŒÐ¾Ð³Ð¾ Ð·Ð° 25 Ð³Ñ€Ð½!\r\nÐšÐ¾Ð¶ÐµÐ½ Ð´ÐµÐ½ÑŒ Ð· 16.00-20.00 Ð¼Ð¸ Ð¿Ñ€Ð¾Ð¿Ð¾Ð½ÑƒÑ”Ð¼Ð¾ Ð·Ð°Ð²ÐµÑ€ÑˆÑƒÐ²Ð°Ñ‚Ð¸ ÑÐ²Ñ–Ð¹ Ñ€Ð¾Ð±Ð¾Ñ‡Ð¸Ð¹ Ð´ÐµÐ½ÑŒ Ð·Ñ– ÑÑ‚Ñ€Ð°Ð²Ð°Ð¼Ð¸ Ð· Ð¼ÐµÐ½ÑŽ \"Ð†Ð½Ñ‚ÑƒÑ€Ð¸ÑÑ‚\" Ð´Ð¾ ÑÐºÐ¸Ñ… Ð¼Ð¸ Ð´Ð°Ñ€ÑƒÑ”Ð¼Ð¾ ÐºÐµÐ»Ð¸Ñ… Ñ–Ñ‚Ð°Ð»Ñ–Ð¹ÑÑŒÐºÐ³Ð¾ ÑÑƒÑ…Ð¾Ð³Ð¾ Ð²Ð¸Ð½Ð° Ð°Ð±Ð¾ Ñ‡Ð°Ñ€ÐºÑƒ Ð¼Ñ–Ñ†Ð½Ð¾Ñ– Ð³Ð¾Ñ€Ñ–Ð»ÐºÐ¸!','images/gost@i.ua/logo_b.jpg','images/gost@i.ua/fc4ea69b7268533.jpg','images/gost@i.ua/Ð·Ð°Ð²Ð°Ð½Ñ‚Ð°Ð¶ÐµÐ½Ð½Ñ.jpg',NULL),(36,'Whiskey Pub  Ð¡Ñ‚Ð°Ñ€Ð¸Ð¹ ÐŸÐµÑ ','067 555 777 5','Ð¿Ð». Ð. ÐœÑ–Ñ†ÐºÐµÐ²Ð¸Ñ‡Ð° 4','olddog@i.ua','8bf998eceb4a6d22fedf68a0937c84da','ÐŸÐµÑ€ÑˆÐ¸Ð¹ Ñ– Ñ”Ð´Ð¸Ð½Ð¸Ð¹ Ð² ÑÐ²Ð¾Ñ”Ð¼Ñƒ Ñ€Ð¾Ð´Ñ– Ð’Ñ–ÑÐºÑ– ÐŸÐ°Ð± Ð†Ð²Ð°Ð½Ð¾-Ð¤Ñ€Ð°Ð½ÐºÑ–Ð²ÑÑŒÐºÐ°.','images/olddog@i.ua/olddog1.jpg','images/olddog@i.ua/olddog2.jpg','images/olddog@i.ua/olddog3.jpg',''),(48,'Pasage Cartenberg','+8(034) 213-1343','Ð’ÑƒÐ»Ð¸Ñ†Ñ ÐÐµÐ·Ð°Ð»ÐµÐ¶Ð½Ð¾ÑÑ‚Ñ–, 3','pasge@i.ua','d7a19a1a2bda412d77091e5aa8707faa','ÐŸÐ°ÑÐ°Ð¶ Ð“Ð°Ñ€Ñ‚ÐµÐ½Ð±ÐµÑ€Ð³ â€” Ñ†Ðµ Ð²Ð¸ÑˆÑƒÐºÐ°Ð½Ð¸Ð¹ Ñ‚Ð° Ð·Ð°Ñ‚Ð¸ÑˆÐ½Ð¸Ð¹ Ñ–Ð½Ñ‚ÐµÑ€Ñ”Ñ€, ÑÐºÑ–ÑÐ½Ð¸Ð¹ ÑÐµÑ€Ð²Ñ–Ñ, Ð¿Ð¾Ð¼Ñ–Ñ€Ð½Ñ– Ñ†Ñ–Ð½Ð¸ Ñ‚Ð° Ð·Ð°Ð²Ð¶Ð´Ð¸ Ð³Ð°Ñ€Ð½Ð¸Ð¹ Ð½Ð°ÑÑ‚Ñ€Ñ–Ð¹.\r\nÐšÐ¾Ð¼Ð¿Ð»ÐµÐºÑ Ð²Ð¼Ñ–Ñ‰Ð°Ñ” Ð² ÑÐ¾Ð±Ñ– ÐºÐ°Ð²â€™ÑÑ€Ð½ÑŽ, Ð¿Ñ–Ñ†ÐµÑ€Ñ–ÑŽ, Ð±Ð°Ñ€, Ñ€ÐµÑÑ‚Ð¾Ñ€Ð°Ð½, Ð´Ð¸Ñ‚ÑÑ‡Ñƒ ÐºÑ–Ð¼Ð½Ð°Ñ‚Ñƒ, Ð½Ñ–Ñ‡Ð½Ð¸Ð¹ ÐºÐ»ÑƒÐ± Ñ‚Ð° ÐºÑ–Ð½Ð¾Ñ‚ÐµÐ°Ñ‚Ñ€ 5D.','images/pasge@i.ua/pasage.png','images/pasge@i.ua/pasage2.jpg','images/pasge@i.ua/pasage3.jpg','78');
/*!40000 ALTER TABLE `resturant` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-06-22  0:48:16
