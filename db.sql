-- MySQL dump 10.16  Distrib 10.1.48-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: nohahoststatus
-- ------------------------------------------------------
-- Server version	10.1.48-MariaDB-0+deb9u2

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Current Database: `nohahoststatus`
--


--
-- Table structure for table `issues`
--

DROP TABLE IF EXISTS `issues`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `issues` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(512) NOT NULL,
  `desc` longtext NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `Status` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `issues`
--

LOCK TABLES `issues` WRITE;
/*!40000 ALTER TABLE `issues` DISABLE KEYS */;
/*!40000 ALTER TABLE `issues` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mainsettings`
--

DROP TABLE IF EXISTS `mainsettings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mainsettings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mainstatus` varchar(512) NOT NULL,
  `checker` int(11) DEFAULT NULL,
  `webhookdiscord` varchar(512) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mainsettings`
--

LOCK TABLES `mainsettings` WRITE;
/*!40000 ALTER TABLE `mainsettings` DISABLE KEYS */;
INSERT INTO `mainsettings` VALUES (1,'online',60,'/');
/*!40000 ALTER TABLE `mainsettings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `news`
--

DROP TABLE IF EXISTS `news`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(512) NOT NULL,
  `desc` longtext NOT NULL,
  `role` enum('all','customer','support','admin') NOT NULL,
  `writer_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `news`
--

LOCK TABLES `news` WRITE;
/*!40000 ALTER TABLE `news` DISABLE KEYS */;
/*!40000 ALTER TABLE `news` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `services`
--

DROP TABLE IF EXISTS `services`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `services` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(512) NOT NULL,
  `status` text NOT NULL,
  `anzeigen` text,
  `icon` text,
  `standort` text,
  `sort_id` int(11) DEFAULT NULL,
  `link` text,
  `uptime` decimal(12,2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `services`
--

LOCK TABLES `services` WRITE;
/*!40000 ALTER TABLE `services` DISABLE KEYS */;
INSERT INTO `services` VALUES (1,'SK-CAGE-01','Online','Ja','fa fa-building','SKYLINK',3,'Kein Link vorhanden',100.00),(2,'SK-CAGE-02','Online','Ja','fa fa-building','SKYLINK',3,'Kein Link vorhanden',100.00),(3,'SK-CAGE-03','Online','Ja','fa fa-building','SKYLINK',3,'Kein Link vorhanden',100.00),(4,'SK-CAGE-04','Online','Ja','fa fa-building','SKYLINK',3,'Kein Link vorhanden',93.85),(5,'SK-CAGE-05','Online','Ja','fa fa-building','SKYLINK',3,'Kein Link vorhanden',100.00),(6,'SK-CAGE-06','Online','Ja','fa fa-building','SKYLINK',3,'Kein Link vorhanden',100.00),(7,'SK-CAGE-07','Online','Ja','fa fa-building','SKYLINK',3,'Kein Link vorhanden',100.00),(8,'SK-CAGE-08','Online','Ja','fa fa-building','SKYLINK',3,'Kein Link vorhanden',100.00),(9,'SK-CAGE-09','Online','Ja','fa fa-building','SKYLINK',3,'Kein Link vorhanden',100.00),(10,'SK-CAGE-10','Online','Ja','fa fa-building','SKYLINK',3,'Kein Link vorhanden',100.00),(11,'NH-CAGE-01','Online','Ja','fa fa-building','NOHAHOST',5,'Kein Link vorhanden',100.00),(12,'NH-CAGE-02','Online','Ja','fa fa-building','NOHAHOST',5,'Kein Link vorhanden',100.00),(13,'NH-CAGE-03','Online','Ja','fa fa-building','NOHAHOST',5,'Kein Link vorhanden',100.00),(14,'NH-CAGE-04','Online','Ja','fa fa-building','NOHAHOST',5,'Kein Link vorhanden',100.00),(15,'NH-CAGE-05','Online','Ja','fa fa-building','NOHAHOST',5,'Kein Link vorhanden',100.00),(16,'NH-CAGE-06','Online','Ja','fa fa-building','NOHAHOST',5,'Kein Link vorhanden',100.00),(17,'NH-CAGE-07','Online','Ja','fa fa-building','NOHAHOST',5,'Kein Link vorhanden',100.00),(18,'NH-CAGE-08','Online','Ja','fa fa-building','NOHAHOST',5,'Kein Link vorhanden',100.00),(19,'NH-CAGE-09','Online','Ja','fa fa-building','NOHAHOST',5,'Kein Link vorhanden',100.00),(20,'NH-CAGE-10','Online','Ja','fa fa-building','NOHAHOST',5,'Kein Link vorhanden',100.00),(21,'NH-CAGE-11','Online','Ja','fa fa-building','NOHAHOST',5,'Kein Link vorhanden',100.00),(22,'NH-CAGE-12','Online','Ja','fa fa-building','NOHAHOST',5,'Kein Link vorhanden',100.00),(23,'NH-CAGE-13','Online','Ja','fa fa-building','NOHAHOST',5,'Kein Link vorhanden',100.00),(24,'NH-CAGE-14','Online','Ja','fa fa-building','NOHAHOST',5,'Kein Link vorhanden',100.00),(25,'NH-CAGE-15','Online','Ja','fa fa-building','NOHAHOST',5,'Kein Link vorhanden',100.00),(26,'NH-CAGE-16','Online','Ja','fa fa-building','NOHAHOST',5,'Kein Link vorhanden',100.00),(27,'NH-CAGE-17','Online','Ja','fa fa-building','NOHAHOST',5,'Kein Link vorhanden',100.00),(28,'NH-CAGE-18','Online','Ja','fa fa-building','NOHAHOST',5,'Kein Link vorhanden',100.00),(29,'NH-CAGE-19','Online','Ja','fa fa-building','NOHAHOST',5,'Kein Link vorhanden',100.00),(30,'NH-CAGE-20','Online','Ja','fa fa-building','NOHAHOST',5,'Kein Link vorhanden',100.00),(31,'NH-CAGE-21','Online','Ja','fa fa-building','NOHAHOST',5,'Kein Link vorhanden',100.00),(32,'NH-CAGE-22','Online','Ja','fa fa-building','NOHAHOST',5,'Kein Link vorhanden',100.00),(33,'NH-CAGE-23','Online','Ja','fa fa-building','NOHAHOST',5,'Kein Link vorhanden',100.00),(34,'NH-CAGE-24','Online','Ja','fa fa-building','NOHAHOST',5,'Kein Link vorhanden',100.00),(35,'NH-CAGE-25','Online','Ja','fa fa-building','NOHAHOST',5,'Kein Link vorhanden',100.00),(36,'NH-CAGE-26','Online','Ja','fa fa-building','NOHAHOST',5,'Kein Link vorhanden',100.00),(37,'NH-CAGE-27','Online','Ja','fa fa-building','NOHAHOST',5,'Kein Link vorhanden',100.00),(38,'NH-CAGE-28','Online','Ja','fa fa-building','NOHAHOST',5,'Kein Link vorhanden',100.00),(39,'NH-CAGE-29','Online','Ja','fa fa-building','NOHAHOST',5,'Kein Link vorhanden',100.00),(40,'NH-CAGE-30','Online','Ja','fa fa-building','NOHAHOST',5,'Kein Link vorhanden',100.00),(41,'DDOS-SCHUTZ LVL-1','Online','Ja','fa fa-shield-alt','SKYLINK',100,'Kein Link vorhanden',100.00),(42,'DDOS-SCHUTZ LVL-2','Online','Ja','fa fa-shield-alt','SKYLINK',100,'Kein Link vorhanden',100.00),(43,'DDOS-SCHUTZ LVL-3','Online','Ja','fa fa-shield-alt','SKYLINK',100,'Kein Link vorhanden',100.00),(44,'DDOS-SCHUTZ LVL-4','Online','Ja','fa fa-shield-alt','SKYLINK',100,'Kein Link vorhanden',100.00),(45,'NOHA-ADDOS-1','Online','Ja','fa fa-shield-alt','NOHAHOST',150,'Kein Link vorhanden',100.00),(46,'NOHA-ADDOS-2','Online','Ja','fa fa-shield-alt','NOHAHOST',150,'Kein Link vorhanden',100.00),(47,'USA-CAGE-01','Online','Ja','fa fa-building','NEW-YORK',500,'Kein Link vorhanden',100.00),(48,'USA-CAGE-02','Online','Ja','fa fa-building','NEW-YORK',500,'Kein Link vorhanden',100.00),(49,'USA-CAGE-03','Online','Ja','fa fa-building','NEW-YORK',500,'Kein Link vorhanden',100.00),(50,'USA-CAGE-04','Online','Ja','fa fa-building','NEW-YORK',500,'Kein Link vorhanden',100.00),(51,'USA-CAGE-05','Online','Ja','fa fa-building','NEW-YORK',500,'Kein Link vorhanden',100.00);
/*!40000 ALTER TABLE `services` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `settings`
--

DROP TABLE IF EXISTS `settings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `settings` (
  `login` int(11) NOT NULL,
  `register` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `settings`
--

LOCK TABLES `settings` WRITE;
/*!40000 ALTER TABLE `settings` DISABLE KEYS */;
INSERT INTO `settings` VALUES (1,1);
/*!40000 ALTER TABLE `settings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` longtext NOT NULL,
  `amount` decimal(12,2) NOT NULL,
  `state` enum('pending','active','banned') NOT NULL,
  `role` enum('customer','support','admin') NOT NULL,
  `verify_code` varchar(255) DEFAULT NULL,
  `session_token` varchar(255) DEFAULT NULL,
  `user_addr` varchar(255) DEFAULT NULL,
  `firstname` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `street` varchar(255) DEFAULT NULL,
  `number` varchar(255) DEFAULT NULL,
  `postcode` int(11) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Admin','Info@black-host.eu','$2y$10$wQsm3P7yPsGkQhv4DN1vY.4w1Z/3xTUOcNbPdaM73tp5/xtnRg/YW',0.00,'active','admin','YJaorIEGP5ns','6Vdslw1ilvey2xudia7sz7OwqAHEXi','84.182.207.20',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2021-06-12 14:46:23','2021-10-23 03:02:56');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `wartungen`
--

DROP TABLE IF EXISTS `wartungen`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wartungen` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(512) NOT NULL,
  `desc` longtext NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `Status` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wartungen`
--

LOCK TABLES `wartungen` WRITE;
/*!40000 ALTER TABLE `wartungen` DISABLE KEYS */;
INSERT INTO `wartungen` VALUES (1,'IP-Erweiterung im SkyLink Rechenzentrum','Die Wartung dient zur Erweiterungen der vorhandenen IP-Adressen. Einberufen wurde diese Wartung von Qualitätsmanagement des SkyLink Rechenzentrum und wird daher mit sofortiger Wirkung morgen zwischen 12:00 und 12:30 Uhr durchgeführt.\r\n\r\nDer Grund dieser Erweiterung liegt aktuell leider noch in der Verwaltung ist aktuell nur der Geschäftsführung sowie dem Management bekannt und darf aufgrund der Datenschutzverordnungen auch nicht an die Öffentlichkeit geraten.','2021-08-22 23:37:46','2021-08-24 14:37:39','Closed');
/*!40000 ALTER TABLE `wartungen` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-11-11 17:56:05

