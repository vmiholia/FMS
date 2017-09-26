-- MySQL dump 10.13  Distrib 5.7.19, for Linux (x86_64)
--
-- Host: localhost    Database: billdb
-- ------------------------------------------------------
-- Server version	5.7.19-0ubuntu0.16.04.1

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
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin` (
  `admin_id` int(128) NOT NULL AUTO_INCREMENT,
  `fname` varchar(128) NOT NULL,
  `lname` varchar(128) NOT NULL,
  `username` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin`
--

LOCK TABLES `admin` WRITE;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` VALUES (32,'Jannah','Mazo','comezo','1234'),(37,'admin','admin','loading','93'),(38,'waqas','yaqoob','waqas','waqas');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `bill`
--

DROP TABLE IF EXISTS `bill`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bill` (
  `bill_id` int(128) NOT NULL,
  `ttl_electric` int(11) NOT NULL,
  `ttl_rental` int(11) NOT NULL,
  `ttl_water` int(11) NOT NULL,
  `date_issued` varchar(128) NOT NULL,
  `tenant_id` int(128) NOT NULL,
  `room_id` int(11) NOT NULL,
  `issued_by` varchar(28) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bill`
--

LOCK TABLES `bill` WRITE;
/*!40000 ALTER TABLE `bill` DISABLE KEYS */;
INSERT INTO `bill` VALUES (2,50,1000,0,'13:44:15 PM  /  Thu, Jul 6th, 2017',2,1,'waqas yaqoob',1),(3,0,0,0,'13:45:30 PM  /  Thu, Jul 6th, 2017',3,2,'waqas yaqoob',1),(4,0,0,0,'0000-00-00',4,2,'waqas yaqoob',1),(8,0,0,0,'0000-00-00',8,4,'waqas yaqoob',1),(1,0,0,0,'14:24:54 PM  /  Thu, Jul 6th, 2017',1,1,'waqas yaqoob',1),(9,0,0,0,'15:13:08 PM  /  Thu, Jul 6th, 2017',9,5,'waqas yaqoob',1),(15,0,0,0,'2017-07-30 16:00:42',15,8,'waqas yaqoob',1),(10,0,0,0,'',10,5,'waqas yaqoob',1),(16,0,0,0,'16:04:41 PM  /  Sun, Jul 30th, 2017',16,8,'waqas yaqoob',1),(17,0,0,0,'2017-07-30 16:15:39',17,9,'waqas yaqoob',1),(20,0,0,0,'17:16:13 PM  /  Sun, Jul 30th, 2017',20,14,'waqas yaqoob',1),(13,0,0,0,'2017-07-30 18:26:37',13,7,'waqas yaqoob',1),(12,0,0,0,'2017-07-30 19:00:45',12,6,'waqas yaqoob',1),(4605,0,0,0,'2017-6-13',4605,7,'admin',0),(4608,0,0,0,'2017-6-13',4608,7,'admin',0),(4612,0,0,0,'2017-08-07 23:17:21',4612,7,'admin',1),(4612,0,0,0,'2017-08-07 23:17:21',4612,7,'admin',1),(4612,0,0,0,'2017-08-07 23:17:21',4612,7,'admin',1),(4612,0,0,0,'2017-08-07 23:17:21',4612,7,'admin',1),(4612,0,0,0,'2017-08-07 23:17:21',4612,7,'admin',1),(4612,0,0,0,'2017-08-07 23:17:21',4612,7,'admin',1),(4612,0,0,0,'2017-08-07 23:17:21',4612,7,'admin',1),(4612,0,0,0,'2017-08-07 23:17:21',4612,7,'admin',1),(4612,0,0,0,'2017-08-07 23:17:21',4612,7,'admin',1),(4612,0,0,0,'2017-08-07 23:17:21',4612,7,'admin',1),(4612,0,0,0,'2017-08-07 23:17:21',4612,7,'admin',1),(4612,0,0,0,'2017-08-07 23:17:21',4612,7,'admin',1),(4612,0,0,0,'2017-08-07 23:17:21',4612,7,'admin',1),(4612,0,0,0,'2017-08-07 23:17:21',4612,7,'admin',1),(4612,0,0,0,'2017-08-07 23:17:21',4612,7,'admin',1),(4612,0,0,0,'2017-08-07 23:17:21',4612,7,'admin',1),(4612,0,0,0,'2017-08-07 23:17:21',4612,7,'admin',1),(4612,0,0,0,'2017-08-07 23:17:21',4612,7,'admin',1),(4612,0,0,0,'2017-08-07 23:17:21',4612,7,'admin',1),(4612,0,0,0,'2017-08-07 23:17:21',4612,7,'admin',1),(4612,0,0,0,'2017-08-07 23:17:21',4612,7,'admin',1),(4612,0,0,0,'2017-08-07 23:17:21',4612,7,'admin',1),(4612,0,0,0,'2017-08-07 23:17:21',4612,7,'admin',1),(4612,0,0,0,'2017-08-07 23:17:21',4612,7,'admin',1),(4612,0,0,0,'2017-08-07 23:17:21',4612,7,'admin',1),(4612,0,0,0,'2017-08-07 23:17:21',4612,7,'admin',1),(4612,0,0,0,'2017-08-07 23:17:21',4612,7,'admin',1),(4612,0,0,0,'2017-08-07 23:17:21',4612,7,'admin',1),(4612,0,0,0,'2017-08-07 23:17:21',4612,7,'admin',1),(4612,0,0,0,'2017-08-07 23:17:21',4612,7,'admin',1),(4612,0,0,0,'2017-08-07 23:17:21',4612,7,'admin',1),(4612,0,0,0,'2017-08-07 23:17:21',4612,7,'admin',1),(4625,0,0,0,'2017-08-07 23:17:38',4625,7,'admin',1),(4625,0,0,0,'2017-08-07 23:17:38',4625,7,'admin',1),(4625,0,0,0,'2017-08-07 23:17:38',4625,7,'admin',1),(4625,0,0,0,'2017-08-07 23:17:38',4625,7,'admin',1),(4625,0,0,0,'2017-08-07 23:17:38',4625,7,'admin',1),(4689,0,0,0,'2017-08-07 23:17:55',4689,7,'admin',1),(4513,0,0,0,'2017-08-07 20:36:26',4513,7,'admin',1),(4568,0,0,0,'2017-08-07 20:36:34',4568,7,'admin',1),(4515,0,0,0,'2017-08-07 20:36:41',4515,7,'admin',1),(4601,0,0,0,'2017-08-07 22:03:12',4601,7,'admin',1),(4602,0,0,0,'2017-08-07 22:03:30',4602,7,'admin',1),(4603,0,0,0,'2017-08-07 22:03:47',4603,7,'admin',1);
/*!40000 ALTER TABLE `bill` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `discount`
--

DROP TABLE IF EXISTS `discount`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `discount` (
  `dis_id` int(11) NOT NULL AUTO_INCREMENT,
  `dis_prc` text NOT NULL,
  `dis_val` text NOT NULL,
  PRIMARY KEY (`dis_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `discount`
--

LOCK TABLES `discount` WRITE;
/*!40000 ALTER TABLE `discount` DISABLE KEYS */;
INSERT INTO `discount` VALUES (0,'0%','0'),(2,'10%','0.10'),(3,'20%','0.20'),(4,'30%','0.30'),(5,'40%','0.40'),(6,'50%','0.50'),(7,'60%','0.60'),(8,'70%','0.70'),(9,'80%','0.80'),(10,'90%','0.90'),(11,'100%','0.100');
/*!40000 ALTER TABLE `discount` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `electricity`
--

DROP TABLE IF EXISTS `electricity`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `electricity` (
  `electric_id` int(128) NOT NULL AUTO_INCREMENT,
  `amount` varchar(128) NOT NULL,
  `room_id` int(128) NOT NULL,
  `date_st` date NOT NULL,
  `date_end` date NOT NULL,
  PRIMARY KEY (`electric_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `electricity`
--

LOCK TABLES `electricity` WRITE;
/*!40000 ALTER TABLE `electricity` DISABLE KEYS */;
INSERT INTO `electricity` VALUES (1,'100',1,'2015-03-12','2015-03-16'),(2,'200',2,'2015-03-12','2015-03-16'),(3,'200',3,'2015-03-12','2015-03-16'),(4,'200',4,'2015-03-12','2015-03-16'),(5,'200',5,'2015-03-12','2015-03-16'),(6,'200',6,'2015-03-12','2015-03-16'),(7,'200',7,'2015-03-12','2015-03-16'),(8,'200',8,'2015-03-12','2015-03-16'),(9,'200',9,'2015-03-12','2015-03-16'),(10,'200',10,'2015-03-12','2015-03-16'),(11,'200',11,'2015-03-12','2015-03-16'),(12,'200',12,'2015-03-12','2015-03-16');
/*!40000 ALTER TABLE `electricity` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `months`
--

DROP TABLE IF EXISTS `months`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `months` (
  `mon_id` int(11) NOT NULL AUTO_INCREMENT,
  `month` varchar(128) DEFAULT NULL,
  PRIMARY KEY (`mon_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `months`
--

LOCK TABLES `months` WRITE;
/*!40000 ALTER TABLE `months` DISABLE KEYS */;
INSERT INTO `months` VALUES (1,'Jan-Feb'),(2,NULL),(3,'Mar-Apr'),(4,NULL),(5,'May-Jun'),(6,NULL),(7,'July-Aug'),(8,NULL),(9,'Sep-Oct'),(10,NULL),(11,'Nov-Dec'),(12,NULL);
/*!40000 ALTER TABLE `months` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `paym_info`
--

DROP TABLE IF EXISTS `paym_info`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `paym_info` (
  `paym_mode` varchar(128) NOT NULL,
  `trn_id` varchar(128) NOT NULL,
  `mode_id` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `paym_info`
--

LOCK TABLES `paym_info` WRITE;
/*!40000 ALTER TABLE `paym_info` DISABLE KEYS */;
INSERT INTO `paym_info` VALUES ('Cash','cash',1),('Cheque','0',2),('Demand Draft','0',3),('Credit/Debit Card','0',4),('Paytm','0',5),('NEFT','0',6),('Online','0',7);
/*!40000 ALTER TABLE `paym_info` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `room`
--

DROP TABLE IF EXISTS `room`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `room` (
  `room_id` int(128) NOT NULL AUTO_INCREMENT,
  `room_name` varchar(128) NOT NULL,
  `rental` varchar(128) NOT NULL,
  `rental1` varchar(128) DEFAULT NULL,
  `rental2` varchar(128) DEFAULT NULL,
  `rental3` varchar(128) DEFAULT NULL,
  `rental4` varchar(128) DEFAULT NULL,
  `rental5` varchar(128) DEFAULT NULL,
  `new` varchar(128) DEFAULT NULL,
  `adm_fee` int(10) NOT NULL,
  PRIMARY KEY (`room_id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `room`
--

LOCK TABLES `room` WRITE;
/*!40000 ALTER TABLE `room` DISABLE KEYS */;
INSERT INTO `room` VALUES (1,'NUR A','2700','',NULL,NULL,NULL,'','10',500),(2,'NUR B','2700',NULL,NULL,NULL,NULL,NULL,'4625',1000),(3,'NUR C','2700',NULL,NULL,NULL,NULL,NULL,NULL,0),(4,'K.G A','2700',NULL,NULL,NULL,NULL,NULL,NULL,0),(5,'K.G B','2700',NULL,NULL,NULL,NULL,NULL,NULL,0),(6,'K.G C','2700',NULL,NULL,NULL,NULL,NULL,NULL,0),(7,'Class 1 A','2260','240','100',NULL,NULL,NULL,NULL,0),(8,'Class 1 B','2260','240','100',NULL,NULL,NULL,NULL,0),(9,'Class 1 C','2260','240','100',NULL,NULL,NULL,NULL,0),(10,'Class 2 A','2260','240','100',NULL,NULL,NULL,NULL,0),(11,'Class 2 B','2260','240','100',NULL,NULL,NULL,NULL,0),(12,'Class 2 C','2260','240','100',NULL,NULL,NULL,NULL,0),(13,'Class 3 A','2260','240','100',NULL,NULL,NULL,NULL,0),(14,'Class 3 B','2285','215','100','','','',NULL,0),(15,'Class 3 C','2285','215','100','','','',NULL,0),(16,'Class 4 A','2285','215','100','','','',NULL,0),(17,'Class 4 B','2285','215','100','','','',NULL,0),(18,'Class 4 C','2285','215','100','','','',NULL,0),(19,'Class 5 A','2300','260','100','','','',NULL,0),(20,'Class 5 B','2300','260','100','','','',NULL,0),(21,'Class 5 C','2300','260','100','','','',NULL,0),(22,'Class 6 A','2300','260','100','','','',NULL,0),(23,'Class 6 B','2300','260','100','','','',NULL,0),(24,'Class 6 C','2300','260','100','','','',NULL,0),(25,'Class 7 A','2310','300','100','','','',NULL,0),(26,'Class 7 B','2310','300','100','','','',NULL,0),(27,'Class 7 C','2310','300','100','','','',NULL,0),(28,'Class 8 A','2310','300','100','','','',NULL,0),(29,'Class 8 B','2310','300','100','','','',NULL,0),(30,'Class 8 C','2310','300','100','','','',NULL,0);
/*!40000 ALTER TABLE `room` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `table_name`
--

DROP TABLE IF EXISTS `table_name`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `table_name` (
  `rname` varchar(128) NOT NULL,
  `busfee` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `table_name`
--

LOCK TABLES `table_name` WRITE;
/*!40000 ALTER TABLE `table_name` DISABLE KEYS */;
INSERT INTO `table_name` VALUES ('r1',100),('r2',200),('r3',300),('r4',400),('r5',500);
/*!40000 ALTER TABLE `table_name` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ten_paym`
--

DROP TABLE IF EXISTS `ten_paym`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ten_paym` (
  `tenant_id` int(11) NOT NULL,
  `paym_mode` varchar(128) NOT NULL,
  `trn_id` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ten_paym`
--

LOCK TABLES `ten_paym` WRITE;
/*!40000 ALTER TABLE `ten_paym` DISABLE KEYS */;
/*!40000 ALTER TABLE `ten_paym` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tenant`
--

DROP TABLE IF EXISTS `tenant`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tenant` (
  `tenant_id` int(128) NOT NULL,
  `room_id` int(11) NOT NULL,
  `gender` varchar(128) NOT NULL,
  `fname` varchar(128) NOT NULL,
  `mname` varchar(128) NOT NULL,
  `lname` varchar(128) NOT NULL,
  `nname` varchar(128) NOT NULL,
  `age` text NOT NULL,
  `bdate` date NOT NULL,
  `address` varchar(128) NOT NULL,
  `contact` text NOT NULL,
  `water` varchar(128) NOT NULL,
  `date_registered` date NOT NULL,
  `due1` int(11) NOT NULL,
  `dis_id` int(11) NOT NULL,
  `busroute` varchar(128) DEFAULT NULL,
  `dis_id2` int(10) DEFAULT NULL,
  `dis_id3` int(10) DEFAULT NULL,
  `due` int(10) DEFAULT '0',
  `Jan` int(10) DEFAULT NULL,
  `Feb` int(10) DEFAULT NULL,
  `Mar` int(10) DEFAULT NULL,
  `Apr` int(10) DEFAULT NULL,
  `May` int(10) DEFAULT NULL,
  `Jun` int(10) DEFAULT NULL,
  `Jul` int(10) DEFAULT NULL,
  `Aug` int(10) DEFAULT NULL,
  `Sep` int(10) DEFAULT NULL,
  `Oct` int(10) DEFAULT NULL,
  `Nov` int(10) DEFAULT NULL,
  `Dece` int(10) DEFAULT NULL,
  `Stat` int(11) NOT NULL,
  `status_dec` int(11) NOT NULL,
  `status_nov` int(11) NOT NULL,
  `status_oct` int(11) NOT NULL,
  `status_sep` int(11) NOT NULL,
  `status_aug` int(11) NOT NULL,
  `status_jul` int(11) NOT NULL,
  `status_jun` int(11) NOT NULL,
  `status_may` int(11) NOT NULL,
  `status_apr` int(11) NOT NULL,
  `status_mar` int(11) NOT NULL,
  `status_feb` int(11) NOT NULL,
  `status_jan` int(11) NOT NULL,
  `daat` varchar(64) DEFAULT NULL,
  `timeStamp` varchar(128) NOT NULL,
  `amtpaid` int(10) DEFAULT NULL,
  `paym_mode` varchar(128) NOT NULL,
  `trn_id` varchar(128) NOT NULL,
  `email` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tenant`
--

LOCK TABLES `tenant` WRITE;
/*!40000 ALTER TABLE `tenant` DISABLE KEYS */;
INSERT INTO `tenant` VALUES (0,7,'','Zoya Ilahi','','','','','0000-00-00','C-7/90 Yamuna Vihar Delhi-110053','','','0000-00-00',0,0,'',0,0,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,0,0,0,0,0,0,0,0,0,0,NULL,'',NULL,'','','alpeshvash@gmail.com'),(4513,7,'','Yash Sharma','','','','','0000-00-00','2/1 B Puri Gali No 1 Maujpur Delhi-110053','','','0000-00-00',9050,0,'',0,0,0,1700,NULL,2600,NULL,NULL,NULL,2600,NULL,NULL,NULL,150,NULL,0,0,2,0,0,0,1,0,0,0,1,0,2,'07/08/2017','2017-08-07 20:36:26',150,'Cheque','defalult transinfo','vaibhav@comezo.in'),(4514,7,'','Mohd. Usman','','','','','0000-00-00','D-113 Gokal Puri Delhi-110094','','','0000-00-00',16100,0,'',0,0,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,0,0,0,0,0,0,0,0,0,0,NULL,'',NULL,'','','alpeshvash@gmail.com'),(4515,7,'','Dhairya Sharma','','','','','0000-00-00','V-586 Gali No 15a Vijay Park Delhi-110053','9958885999','','0000-00-00',7530,0,'',0,0,0,2600,NULL,2610,NULL,NULL,NULL,3200,NULL,NULL,NULL,160,NULL,0,0,2,0,0,0,1,0,0,0,1,0,1,'07/08/2017','2017-08-07 20:36:41',150,'Cheque','defalult transinfo','alpeshvash@gmail.com'),(4516,7,'','Amaal Khan','','','','','0000-00-00','V-236, G.No-18, Vijay Park, Maujpur, D-53','9958060730','','0000-00-00',0,0,'',0,0,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,0,0,0,0,0,0,0,0,0,0,NULL,'',NULL,'','','alpeshvash@gmail.com'),(4517,7,'','Vedika Singh','','','','','0000-00-00','B-85 Mangal Bhawan Gali No 3 Ganga Vihar Delhi-110094','','','0000-00-00',0,0,'',0,0,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,0,0,0,0,0,0,0,0,0,0,NULL,'',NULL,'','','alpeshvash@gmail.com'),(4518,7,'','Shreya','','','','','2016-09-12','H.No E 73/A-317 ,Sanjay Colony Gokal Puri Delhi-110094','','','0000-00-00',0,0,'',0,0,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,0,0,0,0,0,0,0,0,0,0,NULL,'',NULL,'','','alpeshvash@gmail.com'),(4519,7,'','Garvit Kaushik ','','','','','2027-03-14','H. No 611/9 Krishna Gali No 13 Maujpur Delhi-110053','','','0000-00-00',0,0,'',0,0,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,0,0,0,0,0,0,0,0,0,0,NULL,'',NULL,'','','alpeshvash@gmail.com'),(4520,7,'','Charvi Sharma','','','','','2030-09-13','B-9/11 Near Ambedker College Gokal Pur Delhi-','9899800594','','0000-00-00',0,0,'',0,0,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,0,0,0,0,0,0,0,0,0,0,NULL,'',NULL,'','','alpeshvash@gmail.com'),(4521,7,'','Kyna Bhardwaj','','','','','2031-08-13','C-315 Street No 14 Bhajan Pura Delhi-110053','','','0000-00-00',0,0,'',0,0,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,0,0,0,0,0,0,0,0,0,0,NULL,'',NULL,'','','alpeshvash@gmail.com'),(4522,7,'','Lunassha','','','','','0000-00-00','C-3/18 Yamuna Vihar Delhi-110053','','','0000-00-00',0,0,'',0,0,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,0,0,0,0,0,0,0,0,0,0,NULL,'',NULL,'','','alpeshvash@gmail.com'),(4523,7,'','Rushda','','','','','0000-00-00','B-754 2nd Floor G N 13/6 & 10 Near Zakariya Masjid North Ghonda,S.Vihar.Del-53 ','','','0000-00-00',0,0,'',0,0,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,0,0,0,0,0,0,0,0,0,0,NULL,'',NULL,'','','alpeshvash@gmail.com'),(4524,7,'','Abhi','','','','','2026-08-13','31/5a Gali No 1 Shastri Marg Maujpur Delhi-110053','9899559165','','0000-00-00',0,0,'',0,0,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,0,0,0,0,0,0,0,0,0,0,NULL,'',NULL,'','','alpeshvash@gmail.com'),(4551,7,'','Aarav Panwar','','','','','2025-11-13','O-36 Gali No-15/2nd, Brahampuri Delhi-110053','9910475006','','0000-00-00',0,0,'',0,0,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,0,0,0,0,0,0,0,0,0,0,NULL,'',NULL,'','','alpeshvash@gmail.com'),(4552,7,'','Aarav Choudhary','','','','','2030-07-13','N.No.-90a B-Block Street No -2 Brijpuri  Delhi-11094','9953231111','','0000-00-00',0,0,'',0,0,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,0,0,0,0,0,0,0,0,0,0,NULL,'',NULL,'','','alpeshvash@gmail.com'),(4553,7,'','Anant Jain','','','','','0000-00-00','C-7/130 Yamuna Vihar Delhi-110053','9999135880','','0000-00-00',0,0,'',0,0,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,0,0,0,0,0,0,0,0,0,0,NULL,'',NULL,'','','alpeshvash@gmail.com'),(4554,7,'','Rishabh Choudhary','','','','','0000-00-00','C-1/343 Yamuna Vihar Delhi-110053','','','0000-00-00',0,0,'',0,0,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,0,0,0,0,0,0,0,0,0,0,NULL,'',NULL,'','','alpeshvash@gmail.com'),(4555,7,'','Raghav','','','','','0000-00-00','C-419 Street No 17 Bhajan Pura Delhi-110053','','','0000-00-00',0,0,'',0,0,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,0,0,0,0,0,0,0,0,0,0,NULL,'',NULL,'','','alpeshvash@gmail.com'),(4566,7,'','Divyansh Vashist','','','','','2024-03-14','A-47 A Block Village Gokal Pur Delhi-110094','9990060786','','0000-00-00',0,0,'',0,0,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,0,0,0,0,0,0,0,0,0,0,NULL,'',NULL,'','','alpeshvash@gmail.com'),(4567,7,'','Vivaan Sachdeva','','','','','0000-00-00','C-12/439 Yamuna Vihar Delhi-110053','','','0000-00-00',0,0,'',0,0,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,0,0,0,0,0,0,0,0,0,0,NULL,'',NULL,'','','alpeshvash@gmail.com'),(4568,7,'','Adhiraj Dhaka','','','','','0000-00-00','H.No. C-12/29 Yamuna Vihar Delhi-110053','9868211176','','0000-00-00',15460,0,'',0,0,0,630,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,160,NULL,0,0,2,0,0,0,0,0,0,0,0,0,2,'07/08/2017','2017-08-07 20:36:33',150,'Cheque','defalult transinfo','alpeshvash@gmail.com'),(4569,7,'','Moksh Soni','','','','','2015-03-14','C-12/152 Yamuna Vihar Delhi-110053','','','0000-00-00',0,0,'',0,0,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,0,0,0,0,0,0,0,0,0,0,NULL,'',NULL,'','','alpeshvash@gmail.com'),(4588,7,'','Shorya Sharma','','','','','2023-11-13','631/8a Krishna Gali No 13 Adarsh Mohalla Maujpur Delhi-110053','','','0000-00-00',0,0,'',0,0,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,0,0,0,0,0,0,0,0,0,0,NULL,'',NULL,'','','alpeshvash@gmail.com'),(4592,7,'','Dhruv Bhardwaj','','','','','0000-00-00','C-2/319 Yamuna Vihar Delhi-110053','9811958111','','0000-00-00',0,0,'',0,0,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,0,0,0,0,0,0,0,0,0,0,NULL,'',NULL,'','','alpeshvash@gmail.com'),(4593,7,'','Kumkum','','','','','2026-09-13','B-126 Gokal Puri Delhi-110094','','','0000-00-00',0,0,'',0,0,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,0,0,0,0,0,0,0,0,0,0,NULL,'',NULL,'','','alpeshvash@gmail.com'),(4595,7,'','Ifra','','','','','2028-11-13','B-842 Gali No 13 Subhash Mohalla North Gonda Delhi-110053','','','0000-00-00',0,0,'',0,0,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,0,0,0,0,0,0,0,0,0,0,NULL,'',NULL,'','','alpeshvash@gmail.com'),(4596,7,'','Mohd. Shahan','','','','','0000-00-00','V-1/164 B Gali No 18 Vijay Park Delhi-110053','','','0000-00-00',0,0,'',0,0,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,0,0,0,0,0,0,0,0,0,0,NULL,'',NULL,'','','alpeshvash@gmail.com'),(4597,7,'','Mysha Hanif','','','','','2014-04-13','H.No. 700/16 Street No 21-B Vijay Park Delhi-110053','','','0000-00-00',0,0,'',0,0,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,0,0,0,0,0,0,0,0,0,0,NULL,'',NULL,'','','alpeshvash@gmail.com'),(4598,7,'','Shreyansh Goyal','','','','','2023-07-13','B-5/340 Ground Floor Yamuna Vihar Delhi-110053','','','0000-00-00',0,0,'',0,0,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,0,0,0,0,0,0,0,0,0,0,NULL,'',NULL,'','','alpeshvash@gmail.com'),(4599,7,'','Ali Mehdi','','','','','2025-01-13','V-355 Lane No 7 Vijay Park Maujpur Delhi-110053','9911338863','','0000-00-00',0,0,'',0,0,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,0,0,0,0,0,0,0,0,0,0,NULL,'',NULL,'','','alpeshvash@gmail.com'),(4600,7,'','Archit Malik','','','','','2019-01-14','V-584 Gali No 15 V-Block Vijay Park Maujpur  North East Delhi-110053','9811909314','','0000-00-00',0,0,'',0,0,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,0,0,0,0,0,0,0,0,0,0,NULL,'',NULL,'','','alpeshvash@gmail.com'),(4601,7,'','Taabish','','','','','2018-11-13','E-461/13 Street No-11 Subhash Vihar North Gonda Delhi-110053','','','0000-00-00',15800,0,'',0,0,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,300,NULL,0,0,2,0,0,0,0,0,0,0,0,0,0,'07/08/2017','2017-08-07 22:03:11',150,'Cheque','defalult transinfo','alpeshvash@gmail.com'),(4602,7,'','Aaryan','','','','','0000-00-00','D-521 Gokal Puri Delhi-110094','8130275631','','0000-00-00',0,0,'',0,0,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,300,NULL,0,0,0,0,0,0,0,0,0,0,0,0,0,'07/08/2017','2017-08-07 22:03:30',150,'Cheque','defalult transinfo','alpeshvash@gmail.com'),(4603,7,'','Kanishka','','','','','2017-10-13','A-149 Gali No 3 Bhagirathi Vihar Delhi-110094','','','0000-00-00',0,0,'',0,0,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,300,NULL,0,0,0,0,0,0,0,0,0,0,0,0,0,'07/08/2017','2017-08-07 22:03:47',150,'Cheque','defalult transinfo','alpeshvash@gmail.com'),(4604,7,'','Aarika','','','','','2027-02-14','C-13/158 Khajuri Khas Delhi-110090','9811171165','','0000-00-00',0,0,'',0,0,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,0,0,0,0,0,0,0,0,0,0,NULL,'',NULL,'','','alpeshvash@gmail.com'),(4605,7,'Male','mkar','jkr','lkr','pkr','21','0000-00-00','jgjh','9872495778','500','0000-00-00',0,3,'r2',4,5,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,0,0,0,0,0,0,0,0,0,0,NULL,'',NULL,'','','alpeshvash@gmail.com'),(4608,7,'','Aadhya Sharma','','','','','0000-00-00','D-280, Ganga Vihar ,Delhi-110094','9599527404','','0000-00-00',0,0,'',0,0,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,0,0,0,0,0,0,0,0,0,0,NULL,'',NULL,'','','alpeshvash@gmail.com'),(4612,7,'','Aadya Babbar','','','','','2015-09-13','B-3/19 Yamuna Vihar Delhi-110053','9582897282','','0000-00-00',0,0,'',0,0,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1200,NULL,0,0,0,0,0,0,0,0,0,0,0,0,0,'07/08/2017','2017-08-07 23:17:20',150,'Cheque','defalult transinfo','alpeshvash@gmail.com'),(4625,7,'','Vedanshi Gupta','','','','','0000-00-00',' B-16 Gali No 5 Arjun Mohalla Maujpur Delhi-110053','','','0000-00-00',15200,0,'',0,0,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,900,NULL,0,0,2,0,0,0,0,0,0,0,0,0,0,'07/08/2017','2017-08-07 23:17:38',150,'Cheque','defalult transinfo','alpeshvash@gmail.com'),(4689,7,'','Daksh Farshwal','','','','','0000-00-00','H.No-C-225, G.No-8, Ganga Vihar, Delhi -94','','','0000-00-00',15200,0,'',0,0,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,900,NULL,0,0,2,0,0,0,0,0,0,0,0,0,0,'07/08/2017','2017-08-07 23:17:55',150,'Cheque','defalult transinfo','alpeshvash@gmail.com');
/*!40000 ALTER TABLE `tenant` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-08-07 23:22:42
