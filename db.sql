CREATE DATABASE `restoration` /*!40100 DEFAULT CHARACTER SET utf8 */;

CREATE TABLE `resturant` (
  `id_r` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `e-mail` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `descript` mediumtext,
  `photo1` varchar(100) DEFAULT NULL,
  `photo2` varchar(100) DEFAULT NULL,
  `photo3` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_r`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8;