-- MySQL dump 10.16  Distrib 10.1.16-MariaDB, for Linux (x86_64)
--
-- Host: localhost    Database: opentutorials
-- ------------------------------------------------------
-- Server version	10.1.16-MariaDB

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
-- Table structure for table `girl_syohing`
--

DROP TABLE IF EXISTS `girl_syohing`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `girl_syohing` (
  `number` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(80) DEFAULT NULL,
  `picture` varchar(100) DEFAULT NULL,
  `nedan` int(11) DEFAULT NULL,
  `ea` int(11) DEFAULT NULL,
  PRIMARY KEY (`number`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `girl_syohing`
--

LOCK TABLES `girl_syohing` WRITE;
/*!40000 ALTER TABLE `girl_syohing` DISABLE KEYS */;
INSERT INTO `girl_syohing` VALUES (1,'스베누칠성시장1호','undow1.jpg',320000,996),(2,'스베련누칠성시장2호','undow2.jpg',540000,991),(3,'스베누칠성시장3호','undow3.jpg',710000,979),(4,'스베누평화시장1호','undow4.jpg',190000,1000),(5,'스베누평화시장2호','undow5.jpg',240000,1000),(6,'스베누평화시장3호','undow6.jpg',150000,947),(7,'스베누평화시장4호','undow7.jpg',310000,976),(8,'스베누목련시장1호','undow8.jpg',326000,755);
/*!40000 ALTER TABLE `girl_syohing` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `guest_write`
--

DROP TABLE IF EXISTS `guest_write`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `guest_write` (
  `number` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) DEFAULT NULL,
  `content` text,
  `picture` varchar(100) DEFAULT NULL,
  `nickname` varchar(50) DEFAULT NULL,
  `now_time` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`number`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `guest_write`
--

LOCK TABLES `guest_write` WRITE;
/*!40000 ALTER TABLE `guest_write` DISABLE KEYS */;
INSERT INTO `guest_write` VALUES (1,'손님 여러분 물건을 싸게사세요.','그게 좋습니다.','nice.sql','관리자','12/15 9:40'),(2,'물건이 왜이리 비싸나요','ㅡㅡ','','손님이야','12/15 9:40');
/*!40000 ALTER TABLE `guest_write` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `member_history`
--

DROP TABLE IF EXISTS `member_history`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `member_history` (
  `id` char(30) DEFAULT NULL,
  `picture` char(100) DEFAULT NULL,
  `money` int(11) DEFAULT NULL,
  `ea` int(11) DEFAULT NULL,
  `day` char(100) DEFAULT NULL,
  `size` char(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `member_history`
--

LOCK TABLES `member_history` WRITE;
/*!40000 ALTER TABLE `member_history` DISABLE KEYS */;
INSERT INTO `member_history` VALUES ('guest','undow3.jpg',14910000,21,'12/15','215~225'),('guest','undow8.jpg',79870000,245,'12/15','215~225'),('guest','undow7.jpg',7440000,24,'12/15','215~225'),('guest','undow6.jpg',7950000,53,'12/15','275~285');
/*!40000 ALTER TABLE `member_history` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `members`
--

DROP TABLE IF EXISTS `members`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `members` (
  `id` char(30) NOT NULL,
  `password` char(30) DEFAULT NULL,
  `name` char(30) DEFAULT NULL,
  `phone` char(20) DEFAULT NULL,
  `email` char(50) DEFAULT NULL,
  `birthday` char(40) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `members`
--

LOCK TABLES `members` WRITE;
/*!40000 ALTER TABLE `members` DISABLE KEYS */;
INSERT INTO `members` VALUES ('guest','999','손님이야','010-8824-8373','@','1910년1월1일'),('manager','123123','관리자','010-2928-2827','jin03192@spenu.com','2010년9월1일'),('youngjin','2323','김영진','--','@','1925년12월4일');
/*!40000 ALTER TABLE `members` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-12-15 17:52:44
