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
-- Table structure for table `questions`
--

DROP TABLE IF EXISTS `questions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `questions` (
  `question_id` int(11) NOT NULL AUTO_INCREMENT,
  `question_user_id` int(11) NOT NULL,
  `question_text` text NOT NULL,
  `question_type` varchar(255) NOT NULL,
  `answers` int(11) NOT NULL,
  PRIMARY KEY (`question_id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `questions`
--

LOCK TABLES `questions` WRITE;
/*!40000 ALTER TABLE `questions` DISABLE KEYS */;
INSERT INTO `questions` VALUES (1,14,'Question # 1','intermediate',10),(2,14,'Question # 2','intermediate',0),(3,14,'Question # 3','intermediate',0),(4,14,'Question # 4','intermediate',0),(5,14,'Question # 5','intermediate',0),(6,14,'Question # 6','intermediate',0),(7,14,'Question # 7','intermediate',0),(8,14,'Question # 8','intermediate',0),(9,14,'Question # 9','intermediate',0),(10,14,'Question # ','intermediate',0),(11,14,'Question # 10','intermediate',0),(12,14,'Question # 1','upperintermediate',10),(13,14,'Question # 2','upperintermediate',0),(14,14,'Question # 3','upperintermediate',0),(15,14,'Question # 4','upperintermediate',0),(16,14,'Question # 5','upperintermediate',0),(17,14,'Question # 6','upperintermediate',0),(18,14,'Question # 7','upperintermediate',0),(19,14,'Question # 8','upperintermediate',0),(20,14,'Question # 9','upperintermediate',0),(21,14,'Question # 10','upperintermediate',0),(22,14,'Question # 1','high',10),(23,14,'Question # 2','high',0),(24,14,'Question # 3','high',0),(25,14,'Question # 4','high',0),(26,14,'Question # 5','high',0),(27,14,'Question # 6','high',0),(28,14,'Question # 7','high',0),(29,14,'Question # 8','high',0),(30,14,'Question # 9','high',0),(31,14,'Question # 10','high',0);
/*!40000 ALTER TABLE `questions` ENABLE KEYS */;
UNLOCK TABLES;

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
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (19,'Сергей','Leguest','Сергеевич','Житенев','55cd180709923','132421521','test@test.ru','upperIntermediate','2015-08-14 01:19:51','ожидает подверждения',''),(20,'Анастасия','Настя','Александровна','Князева','55cd183926a83','1234','test@test.ru','intermediate','2015-08-14 01:20:41','ожидает подверждения','');
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

-- Dump completed on 2015-08-14  1:22:44
