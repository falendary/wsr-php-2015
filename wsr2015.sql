-- MySQL dump 10.13  Distrib 5.5.43, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: wsr2015
-- ------------------------------------------------------
-- Server version	5.6.19-0ubuntu0.14.04.1

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
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(255) NOT NULL,
  `user_nickname` varchar(255) NOT NULL,
  `user_middlename` varchar(255) NOT NULL,
  `user_lastname` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_phone` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_education` varchar(255) NOT NULL,
  `user_registered` datetime NOT NULL,
  `user_status` varchar(255) NOT NULL,
  `user_question` text NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'','ÐµÐµÑƒÑ‹Ðµ','','','','','','','0000-00-00 00:00:00','',''),(2,'Ð¡ÐµÑ€Ð³ÐµÐ¹','Leguest','Ð¡ÐµÑ€Ð³ÐµÐµÐ²Ð¸Ñ‡','Ð–Ð¸Ñ‚ÐµÐ½ÐµÐ²','','12412412521\"','test@test.ru','','0000-00-00 00:00:00','',''),(3,'','','','','','','','','0000-00-00 00:00:00','',''),(4,'Сергеевич','Leguest','еерые','Сергей','','','','','0000-00-00 00:00:00','',''),(5,'Сергеевич','Leguest','еерые','Сергей','55cba126dc881','','','','0000-00-00 00:00:00','',''),(6,'Сергеевич','Leguest','еерые','Сергей','55cba31b02ffb','','','','0000-00-00 00:00:00','ожидает подверждения',''),(7,'Сергеевич','Leguest','еерые','Сергей','55cba326d3d56','','','','0000-00-00 00:00:00','ожидает подверждения',''),(8,'Сергеевич','Leguest','еерые','Сергей','55cba3368868a','','','','0000-00-00 00:00:00','ожидает подверждения',''),(9,'Сергеевич','Leguest','еерые','Сергей','55cba38ee7fd3','','','','0000-00-00 00:00:00','ожидает подверждения',''),(10,'Сергеевич','Leguest','еерые','Сергей','55cba3956cba3','','','','0000-00-00 00:00:00','ожидает подверждения',''),(11,'Сергеевич','Leguest','еерые','Сергей','55cba3ded8bcf','','','','0000-00-00 00:00:00','ожидает подверждения',''),(12,'Сергеевич','Leguest','еерые','Сергей','55cba4029c3d9','','','','0000-00-00 00:00:00','ожидает подверждения','');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-08-12 23:53:47
