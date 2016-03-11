-- MySQL dump 10.13  Distrib 5.6.24, for osx10.8 (x86_64)
--
-- Host: 127.0.0.1    Database: dbVote+
-- ------------------------------------------------------
-- Server version	5.6.26

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
-- Table structure for table `tblAnswer`
--

DROP TABLE IF EXISTS `tblAnswer`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tblAnswer` (
  `intAnswerId` int(11) NOT NULL AUTO_INCREMENT,
  `strAnsMemId` varchar(45) NOT NULL,
  `intQuestId` int(11) NOT NULL,
  `intAnsSurvFormId` int(11) NOT NULL,
  `txtAnswer` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`intAnswerId`),
  KEY `fkAnsMem_idx` (`strAnsMemId`),
  KEY `fkAnsQuest_idx` (`intQuestId`),
  KEY `fkAnsSurvForm_idx` (`intAnsSurvFormId`),
  CONSTRAINT `fkAnsMem` FOREIGN KEY (`strAnsMemId`) REFERENCES `tblMember` (`strMemberId`) ON UPDATE CASCADE,
  CONSTRAINT `fkAnsQuest` FOREIGN KEY (`intQuestId`) REFERENCES `tblQuestion` (`intQuestId`) ON UPDATE CASCADE,
  CONSTRAINT `fkAnsSurvForm` FOREIGN KEY (`intAnsSurvFormId`) REFERENCES `tblSurveyForm` (`intSurveyFormId`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tblAnswer`
--

LOCK TABLES `tblAnswer` WRITE;
/*!40000 ALTER TABLE `tblAnswer` DISABLE KEYS */;
/*!40000 ALTER TABLE `tblAnswer` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tblCandidate`
--

DROP TABLE IF EXISTS `tblCandidate`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tblCandidate` (
  `strCandId` varchar(45) NOT NULL,
  `strCandMemId` varchar(45) NOT NULL,
  `strCandPosId` varchar(45) NOT NULL,
  `txtPic` tinytext NOT NULL,
  `blDelete` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`strCandMemId`,`strCandPosId`),
  UNIQUE KEY `strCandId_UNIQUE` (`strCandId`),
  KEY `fkCandMem_idx` (`strCandMemId`),
  KEY `fkCandPos_idx` (`strCandPosId`),
  CONSTRAINT `fkCandMem` FOREIGN KEY (`strCandMemId`) REFERENCES `tblMember` (`strMemberId`) ON UPDATE CASCADE,
  CONSTRAINT `fkCandPos` FOREIGN KEY (`strCandPosId`) REFERENCES `tblPosition` (`strPositionId`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tblCandidate`
--

LOCK TABLES `tblCandidate` WRITE;
/*!40000 ALTER TABLE `tblCandidate` DISABLE KEYS */;
INSERT INTO `tblCandidate` VALUES ('CAND-001-MN','CODE010','CODE001','../assets/img/uploads/cj-obligacion.jpg',0),('CAND-002-MN','CODE011','CODE001','../assets/img/uploads/balanga.png',0),('CAND-003-MN','CODE012','CODE005','../assets/img/uploads/arvin.jpg',0);
/*!40000 ALTER TABLE `tblCandidate` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tblDynamicField`
--

DROP TABLE IF EXISTS `tblDynamicField`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tblDynamicField` (
  `intDynFieldId` int(11) NOT NULL AUTO_INCREMENT,
  `strDynFieldName` varchar(100) NOT NULL,
  `blDynStatus` tinyint(1) NOT NULL,
  PRIMARY KEY (`intDynFieldId`),
  UNIQUE KEY `strDynFieldName_UNIQUE` (`strDynFieldName`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tblDynamicField`
--

LOCK TABLES `tblDynamicField` WRITE;
/*!40000 ALTER TABLE `tblDynamicField` DISABLE KEYS */;
INSERT INTO `tblDynamicField` VALUES (17,'civil_status',1),(18,'untitled',1),(19,'location',1),(20,'number',0);
/*!40000 ALTER TABLE `tblDynamicField` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tblElection`
--

DROP TABLE IF EXISTS `tblElection`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tblElection` (
  `intElectionId` int(11) NOT NULL AUTO_INCREMENT,
  `strElecTitle` varchar(80) NOT NULL,
  `strElecDesc` varchar(100) DEFAULT NULL,
  `blElecStatus` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`intElectionId`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tblElection`
--

LOCK TABLES `tblElection` WRITE;
/*!40000 ALTER TABLE `tblElection` DISABLE KEYS */;
INSERT INTO `tblElection` VALUES (1,'National Election 2016','This is a sample description for  National election 2016',0);
/*!40000 ALTER TABLE `tblElection` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tblMember`
--

DROP TABLE IF EXISTS `tblMember`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tblMember` (
  `strMemberId` varchar(45) NOT NULL,
  `strMemFname` varchar(45) NOT NULL,
  `strMemMname` varchar(45) DEFAULT NULL,
  `strMemLname` varchar(45) NOT NULL,
  `strMemEmail` varchar(45) NOT NULL,
  `intMemSecId` int(11) NOT NULL DEFAULT '0',
  `strMemSecAnswer` varchar(80) DEFAULT NULL,
  `strMemPasscode` char(8) DEFAULT NULL,
  `datMemVoted` date DEFAULT NULL,
  `blDelete` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`strMemberId`),
  UNIQUE KEY `strMemPasscode_UNIQUE` (`strMemPasscode`),
  KEY `fkMemSec_idx` (`intMemSecId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tblMember`
--

LOCK TABLES `tblMember` WRITE;
/*!40000 ALTER TABLE `tblMember` DISABLE KEYS */;
INSERT INTO `tblMember` VALUES ('CODE001','O\'haro','O@#$','O\'neal','vingresola@yahoo.com',0,NULL,'hkzGejOE',NULL,0),('CODE002','Geneva','Ordy','Cruz','vingresola@yahoo.com',0,NULL,'wZQf9AWt',NULL,1),('CODE003','O\'hara','O\'may Gali','A\'baya','yup@yaoo.com',0,NULL,'IEz5ACZa',NULL,1),('CODE0034','Melody','','H\'aynako','melods@gmail.com',0,NULL,'rApwZoHk',NULL,1),('CODE004','Jejejeje','O\'neal','O\'owtidi','o\'neal@yahoo.com',0,NULL,'0sC9JeBW',NULL,1),('CODE005','Carlo','Labrague','O\'haro','carlojumagdao@gmail.com',0,NULL,'JsDFX0Ql',NULL,1),('CODE006','Jebs','Jeb\'s','lalo','jes@yahoo.com',0,NULL,'HiUYZA4L',NULL,1),('CODE007','Angelina','Pitt','Jolie','Ange@yahoo.com',0,NULL,'nI64O90H',NULL,0),('CODE008','Gabriel','Labrague','Jumagdao','gab@gmail.com',0,NULL,'R8mHBkl0',NULL,0),('CODE009','Dionisio','Labrague','Jumagdao','dioni@yahoo.com',0,NULL,'rQwkbUGq',NULL,0),('CODE010','AJ','Jeje','Rojoa','aj@yahoo.com',0,NULL,'xVHfBU6Q',NULL,0),('CODE011','Jeremy','lala','Linn','je@yahoo.com',0,NULL,'bErv2Aax',NULL,0),('CODE012','Arvin','Niebla','Gresola','arvin@yahoo.com',0,NULL,'GArzoi2T',NULL,0);
/*!40000 ALTER TABLE `tblMember` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tblMemberDetail`
--

DROP TABLE IF EXISTS `tblMemberDetail`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tblMemberDetail` (
  `intMemDeId` int(11) NOT NULL AUTO_INCREMENT,
  `strMemDeMemId` varchar(45) NOT NULL,
  `strMemDeFieldName` varchar(45) NOT NULL,
  `strMemDeFieldData` varchar(80) DEFAULT NULL,
  PRIMARY KEY (`strMemDeMemId`,`strMemDeFieldName`),
  UNIQUE KEY `intMemDeId_UNIQUE` (`intMemDeId`),
  KEY `fkMemDeMem_idx` (`strMemDeMemId`),
  KEY `fkMemDeFieldName_idx1` (`strMemDeFieldName`),
  CONSTRAINT `fkMemDeMem` FOREIGN KEY (`strMemDeMemId`) REFERENCES `tblMember` (`strMemberId`) ON UPDATE CASCADE,
  CONSTRAINT `fkMemDeMemFieldName` FOREIGN KEY (`strMemDeFieldName`) REFERENCES `tblDynamicField` (`strDynFieldName`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=247 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tblMemberDetail`
--

LOCK TABLES `tblMemberDetail` WRITE;
/*!40000 ALTER TABLE `tblMemberDetail` DISABLE KEYS */;
INSERT INTO `tblMemberDetail` VALUES (83,'CODE001','location','Visayas'),(82,'CODE001','untitled','Second Choice'),(217,'CODE003','civil_status','Single'),(219,'CODE003','location','Visayas'),(220,'CODE003','number','41'),(218,'CODE003','untitled','Second Choice'),(193,'CODE0034','civil_status','Single'),(195,'CODE0034','location','Mindanao'),(196,'CODE0034','number','12'),(194,'CODE0034','untitled','Third Choice'),(189,'CODE004','civil_status','Married'),(191,'CODE004','location','Visayas'),(192,'CODE004','number','12'),(190,'CODE004','untitled','Second Choice'),(205,'CODE005','civil_status','Married'),(207,'CODE005','location','Mindanao'),(208,'CODE005','number','100'),(206,'CODE005','untitled','Second Choice'),(209,'CODE006','civil_status','Married'),(211,'CODE006','location','Visayas'),(212,'CODE006','number','14'),(210,'CODE006','untitled','Second Choice'),(221,'CODE007','number',''),(232,'CODE008','civil_status','Married'),(234,'CODE008','location','Mindanao'),(235,'CODE008','number','12'),(233,'CODE008','untitled','Second Choice'),(236,'CODE009','civil_status','Married'),(238,'CODE009','location','Visayas'),(239,'CODE009','number','19'),(237,'CODE009','untitled','Third Choice'),(241,'CODE010','civil_status','Single'),(240,'CODE010','location','Luzon'),(242,'CODE010','untitled','Third Choice'),(243,'CODE011','location','Luzon'),(245,'CODE012','civil_status','Single'),(244,'CODE012','location','Luzon'),(246,'CODE012','untitled','Second Choice');
/*!40000 ALTER TABLE `tblMemberDetail` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tblMemberForm`
--

DROP TABLE IF EXISTS `tblMemberForm`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tblMemberForm` (
  `intMemForm` int(11) NOT NULL AUTO_INCREMENT,
  `strMemForm` text NOT NULL,
  PRIMARY KEY (`intMemForm`)
) ENGINE=InnoDB AUTO_INCREMENT=56 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tblMemberForm`
--

LOCK TABLES `tblMemberForm` WRITE;
/*!40000 ALTER TABLE `tblMemberForm` DISABLE KEYS */;
INSERT INTO `tblMemberForm` VALUES (39,'{\"title\":\"Member Forms\",\"fields\":[{\"title\":\"Member ID\",\"type\":\"element-single-line-text-default\",\"required\":true,\"position\":1},{\"title\":\"First Name\",\"type\":\"element-single-line-text-default\",\"required\":true,\"position\":2},{\"title\":\"Middle Name\",\"type\":\"element-single-line-text\",\"required\":false,\"position\":3},{\"title\":\"Last Name\",\"type\":\"element-single-line-text-default\",\"required\":true,\"position\":4},{\"title\":\"Email\",\"type\":\"element-single-line-text-default\",\"required\":true,\"position\":5},{\"title\":\"Nickname\",\"type\":\"element-single-line-text\",\"required\":false,\"position\":6},{\"title\":\"Location\",\"type\":\"element-dropdown\",\"required\":false,\"position\":7,\"choices\":[{\"title\":\"Mindanao\",\"value\":\"Mindanao\",\"checked\":true},{\"title\":\"Luzon\",\"value\":\"Luzon\",\"checked\":false},{\"title\":\"Visayas\",\"value\":\"Visayas\",\"checked\":false}]},{\"title\":\"Sex\",\"type\":\"element-multiple-choice\",\"required\":false,\"position\":8,\"choices\":[{\"title\":\"Male\",\"value\":\"Male\",\"checked\":true},{\"title\":\"Female\",\"value\":\"Female\",\"checked\":false}]},{\"title\":\"Age\",\"type\":\"element-number\",\"required\":false,\"position\":9},{\"title\":\"Age\",\"type\":\"element-single-line-text\",\"required\":false,\"position\":10}]}'),(43,'{\"title\":\"Member Forms\",\"fields\":[{\"title\":\"Member ID\",\"type\":\"element-single-line-text-default\",\"required\":true,\"position\":1},{\"title\":\"First Name\",\"type\":\"element-single-line-text-default\",\"required\":true,\"position\":2},{\"title\":\"Middle Name\",\"type\":\"element-single-line-text\",\"required\":false,\"position\":3},{\"title\":\"Last Name\",\"type\":\"element-single-line-text-default\",\"required\":true,\"position\":4},{\"title\":\"Email\",\"type\":\"element-single-line-text-default\",\"required\":true,\"position\":5}]}'),(44,'{\"title\":\"Member Forms\",\"fields\":[{\"title\":\"Member ID\",\"type\":\"element-single-line-text-default\",\"required\":true,\"position\":1},{\"title\":\"First Name\",\"type\":\"element-single-line-text-default\",\"required\":true,\"position\":2},{\"title\":\"Middle Name\",\"type\":\"element-single-line-text\",\"required\":false,\"position\":3},{\"title\":\"Last Name\",\"type\":\"element-single-line-text-default\",\"required\":true,\"position\":4},{\"title\":\"Email\",\"type\":\"element-single-line-text-default\",\"required\":true,\"position\":5}]}'),(45,'{\"title\":\"Member Forms\",\"fields\":[{\"title\":\"Member ID\",\"type\":\"element-single-line-text-default\",\"required\":true,\"position\":1},{\"title\":\"First Name\",\"type\":\"element-single-line-text-default\",\"required\":true,\"position\":2},{\"title\":\"Middle Name\",\"type\":\"element-single-line-text\",\"required\":false,\"position\":3},{\"title\":\"Last Name\",\"type\":\"element-single-line-text-default\",\"required\":true,\"position\":4},{\"title\":\"Email\",\"type\":\"element-single-line-text-default\",\"required\":true,\"position\":5},{\"title\":\"Civil Status\",\"type\":\"element-dropdown\",\"required\":true,\"position\":6,\"choices\":[{\"title\":\"Single\",\"value\":\"Single\",\"checked\":true},{\"title\":\"Married\",\"value\":\"Married\",\"checked\":false},{\"title\":\"Widowed\",\"value\":\"Widowed\",\"checked\":false}]}]}'),(46,'{\"title\":\"Member Forms\",\"fields\":[{\"title\":\"Member ID\",\"type\":\"element-single-line-text-default\",\"required\":true,\"position\":1},{\"title\":\"First Name\",\"type\":\"element-single-line-text-default\",\"required\":true,\"position\":2},{\"title\":\"Middle Name\",\"type\":\"element-single-line-text\",\"required\":false,\"position\":3},{\"title\":\"Last Name\",\"type\":\"element-single-line-text-default\",\"required\":true,\"position\":4},{\"title\":\"Email\",\"type\":\"element-single-line-text-default\",\"required\":true,\"position\":5},{\"title\":\"Civil Status\",\"type\":\"element-dropdown\",\"required\":true,\"position\":6,\"choices\":[{\"title\":\"Single\",\"value\":\"Single\",\"checked\":true},{\"title\":\"Married\",\"value\":\"Married\",\"checked\":false},{\"title\":\"Widowed\",\"value\":\"Widowed\",\"checked\":false}]},{\"title\":\"Untitled\",\"type\":\"element-multiple-choice\",\"required\":false,\"position\":7,\"choices\":[{\"title\":\"First Choice\",\"value\":\"First Choice\",\"checked\":true},{\"title\":\"Second Choice\",\"value\":\"Second Choice\",\"checked\":false},{\"title\":\"Third Choice\",\"value\":\"Third Choice\",\"checked\":false}]}]}'),(47,'{\"title\":\"Member Forms\",\"fields\":[{\"title\":\"Member ID\",\"type\":\"element-single-line-text-default\",\"required\":true,\"position\":1},{\"title\":\"First Name\",\"type\":\"element-single-line-text-default\",\"required\":true,\"position\":2},{\"title\":\"Middle Name\",\"type\":\"element-single-line-text\",\"required\":false,\"position\":3},{\"title\":\"Last Name\",\"type\":\"element-single-line-text-default\",\"required\":true,\"position\":4},{\"title\":\"Email\",\"type\":\"element-single-line-text-default\",\"required\":true,\"position\":5},{\"title\":\"Civil Status\",\"type\":\"element-dropdown\",\"required\":true,\"position\":6,\"choices\":[{\"title\":\"Single\",\"value\":\"Single\",\"checked\":true},{\"title\":\"Married\",\"value\":\"Married\",\"checked\":false},{\"title\":\"Widowed\",\"value\":\"Widowed\",\"checked\":false}]},{\"title\":\"Untitled\",\"type\":\"element-multiple-choice\",\"required\":false,\"position\":7,\"choices\":[{\"title\":\"First Choice\",\"value\":\"First Choice\",\"checked\":true},{\"title\":\"Second Choice\",\"value\":\"Second Choice\",\"checked\":false},{\"title\":\"Third Choice\",\"value\":\"Third Choice\",\"checked\":false}]},{\"title\":\"Location\",\"type\":\"element-dropdown\",\"required\":false,\"position\":8,\"choices\":[{\"title\":\"Luzon\",\"value\":\"Luzon\",\"checked\":true},{\"title\":\"Visayas\",\"value\":\"Visayas\",\"checked\":false},{\"title\":\"Mindanao\",\"value\":\"Mindanao\",\"checked\":false}]}]}'),(48,'{\"title\":\"Member Forms\",\"fields\":[{\"title\":\"Member ID\",\"type\":\"element-single-line-text-default\",\"required\":true,\"position\":1},{\"title\":\"First Name\",\"type\":\"element-single-line-text-default\",\"required\":true,\"position\":2},{\"title\":\"Middle Name\",\"type\":\"element-single-line-text\",\"required\":false,\"position\":3},{\"title\":\"Last Name\",\"type\":\"element-single-line-text-default\",\"required\":true,\"position\":4},{\"title\":\"Email\",\"type\":\"element-single-line-text-default\",\"required\":true,\"position\":5},{\"title\":\"Civil Status\",\"type\":\"element-dropdown\",\"required\":true,\"position\":6,\"choices\":[{\"title\":\"Single\",\"value\":\"Single\",\"checked\":true},{\"title\":\"Married\",\"value\":\"Married\",\"checked\":false},{\"title\":\"Widowed\",\"value\":\"Widowed\",\"checked\":false}]},{\"title\":\"Untitled\",\"type\":\"element-multiple-choice\",\"required\":false,\"position\":7,\"choices\":[{\"title\":\"First Choice\",\"value\":\"First Choice\",\"checked\":true},{\"title\":\"Second Choice\",\"value\":\"Second Choice\",\"checked\":false},{\"title\":\"Third Choice\",\"value\":\"Third Choice\",\"checked\":false}]},{\"title\":\"Location\",\"type\":\"element-dropdown\",\"required\":false,\"position\":8,\"choices\":[{\"title\":\"Luzon\",\"value\":\"Luzon\",\"checked\":true},{\"title\":\"Visayas\",\"value\":\"Visayas\",\"checked\":false},{\"title\":\"Mindanao\",\"value\":\"Mindanao\",\"checked\":false}]},{\"title\":\"Number\",\"type\":\"element-number\",\"required\":false,\"position\":9}]}'),(49,'{\"title\":\"Candidate Forms\",\"fields\":[{\"title\":\"Member ID\",\"type\":\"element-single-line-text-default\",\"required\":true,\"position\":1},{\"title\":\"First Name\",\"type\":\"element-single-line-text-default\",\"required\":true,\"position\":2},{\"title\":\"Middle Name\",\"type\":\"element-single-line-text\",\"required\":false,\"position\":3},{\"title\":\"Last Name\",\"type\":\"element-single-line-text-default\",\"required\":true,\"position\":4},{\"title\":\"Email\",\"type\":\"element-single-line-text-default\",\"required\":true,\"position\":5},{\"title\":\"Civil Status\",\"type\":\"element-dropdown\",\"required\":true,\"position\":6,\"choices\":[{\"title\":\"Single\",\"value\":\"Single\",\"checked\":true},{\"title\":\"Married\",\"value\":\"Married\",\"checked\":false},{\"title\":\"Widowed\",\"value\":\"Widowed\",\"checked\":false}]},{\"title\":\"Untitled\",\"type\":\"element-multiple-choice\",\"required\":false,\"position\":7,\"choices\":[{\"title\":\"First Choice\",\"value\":\"First Choice\",\"checked\":true},{\"title\":\"Second Choice\",\"value\":\"Second Choice\",\"checked\":false},{\"title\":\"Third Choice\",\"value\":\"Third Choice\",\"checked\":false}]},{\"title\":\"Location\",\"type\":\"element-dropdown\",\"required\":false,\"position\":8,\"choices\":[{\"title\":\"Luzon\",\"value\":\"Luzon\",\"checked\":true},{\"title\":\"Visayas\",\"value\":\"Visayas\",\"checked\":false},{\"title\":\"Mindanao\",\"value\":\"Mindanao\",\"checked\":false}]},{\"title\":\"Number\",\"type\":\"element-number\",\"required\":false,\"position\":9},{\"title\":\"Untitled\",\"type\":\"element-number\",\"required\":false,\"position\":10}]}'),(50,'{\"title\":\"Candidate Forms\",\"fields\":[{\"title\":\"Member ID\",\"type\":\"element-single-line-text-default\",\"required\":true,\"position\":1},{\"title\":\"First Name\",\"type\":\"element-single-line-text-default\",\"required\":true,\"position\":2},{\"title\":\"Middle Name\",\"type\":\"element-single-line-text\",\"required\":false,\"position\":3},{\"title\":\"Last Name\",\"type\":\"element-single-line-text-default\",\"required\":true,\"position\":4},{\"title\":\"Email\",\"type\":\"element-single-line-text-default\",\"required\":true,\"position\":5},{\"title\":\"Civil Status\",\"type\":\"element-dropdown\",\"required\":true,\"position\":6,\"choices\":[{\"title\":\"Single\",\"value\":\"Single\",\"checked\":true},{\"title\":\"Married\",\"value\":\"Married\",\"checked\":false},{\"title\":\"Widowed\",\"value\":\"Widowed\",\"checked\":false}]},{\"title\":\"Untitled\",\"type\":\"element-multiple-choice\",\"required\":false,\"position\":7,\"choices\":[{\"title\":\"First Choice\",\"value\":\"First Choice\",\"checked\":true},{\"title\":\"Second Choice\",\"value\":\"Second Choice\",\"checked\":false},{\"title\":\"Third Choice\",\"value\":\"Third Choice\",\"checked\":false}]},{\"title\":\"Location\",\"type\":\"element-dropdown\",\"required\":false,\"position\":8,\"choices\":[{\"title\":\"Luzon\",\"value\":\"Luzon\",\"checked\":true},{\"title\":\"Visayas\",\"value\":\"Visayas\",\"checked\":false},{\"title\":\"Mindanao\",\"value\":\"Mindanao\",\"checked\":false}]},{\"title\":\"Number\",\"type\":\"element-number\",\"required\":false,\"position\":9}]}'),(51,'{\"title\":\"Member Form\",\"fields\":[{\"title\":\"Member ID\",\"type\":\"element-single-line-text-default\",\"required\":true,\"position\":1},{\"title\":\"First Name\",\"type\":\"element-single-line-text-default\",\"required\":true,\"position\":2},{\"title\":\"Middle Name\",\"type\":\"element-single-line-text\",\"required\":false,\"position\":3},{\"title\":\"Last Name\",\"type\":\"element-single-line-text-default\",\"required\":true,\"position\":4},{\"title\":\"Email\",\"type\":\"element-single-line-text-default\",\"required\":true,\"position\":5},{\"title\":\"Civil Status\",\"type\":\"element-dropdown\",\"required\":true,\"position\":6,\"choices\":[{\"title\":\"Single\",\"value\":\"Single\",\"checked\":true},{\"title\":\"Married\",\"value\":\"Married\",\"checked\":false},{\"title\":\"Widowed\",\"value\":\"Widowed\",\"checked\":false}]},{\"title\":\"Untitled\",\"type\":\"element-multiple-choice\",\"required\":false,\"position\":7,\"choices\":[{\"title\":\"First Choice\",\"value\":\"First Choice\",\"checked\":true},{\"title\":\"Second Choice\",\"value\":\"Second Choice\",\"checked\":false},{\"title\":\"Third Choice\",\"value\":\"Third Choice\",\"checked\":false}]},{\"title\":\"Location\",\"type\":\"element-dropdown\",\"required\":false,\"position\":8,\"choices\":[{\"title\":\"Luzon\",\"value\":\"Luzon\",\"checked\":true},{\"title\":\"Visayas\",\"value\":\"Visayas\",\"checked\":false},{\"title\":\"Mindanao\",\"value\":\"Mindanao\",\"checked\":false}]},{\"title\":\"Number\",\"type\":\"element-number\",\"required\":false,\"position\":9}]}'),(52,'{\"title\":\"Member Form\",\"fields\":[{\"title\":\"Member ID\",\"type\":\"element-single-line-text-default\",\"required\":true,\"position\":1},{\"title\":\"First Name\",\"type\":\"element-single-line-text-default\",\"required\":true,\"position\":2},{\"title\":\"Middle Name\",\"type\":\"element-single-line-text-default\",\"required\":true,\"position\":3},{\"title\":\"Last Name\",\"type\":\"element-single-line-text-default\",\"required\":true,\"position\":4},{\"title\":\"Email\",\"type\":\"element-single-line-text-default\",\"required\":true,\"position\":5},{\"title\":\"Civil Status\",\"type\":\"element-dropdown\",\"required\":true,\"position\":6,\"choices\":[{\"title\":\"Single\",\"value\":\"Single\",\"checked\":true},{\"title\":\"Married\",\"value\":\"Married\",\"checked\":false},{\"title\":\"Widowed\",\"value\":\"Widowed\",\"checked\":false}]},{\"title\":\"Untitled\",\"type\":\"element-multiple-choice\",\"required\":false,\"position\":7,\"choices\":[{\"title\":\"First Choice\",\"value\":\"First Choice\",\"checked\":true},{\"title\":\"Third Choice\",\"value\":\"Third Choice\",\"checked\":false},{\"title\":\"Third Choice\",\"value\":\"Third Choice\",\"checked\":false}]},{\"title\":\"Location\",\"type\":\"element-dropdown\",\"required\":false,\"position\":8,\"choices\":[{\"title\":\"Luzon\",\"value\":\"Luzon\",\"checked\":true},{\"title\":\"Visayas\",\"value\":\"Visayas\",\"checked\":false},{\"title\":\"Mindanao\",\"value\":\"Mindanao\",\"checked\":false}]},{\"title\":\"Number\",\"type\":\"element-number\",\"required\":false,\"position\":9}]}'),(53,'{\"title\":\"Member Form\",\"fields\":[{\"title\":\"Member ID\",\"type\":\"element-single-line-text-default\",\"required\":true,\"position\":1},{\"title\":\"First Name\",\"type\":\"element-single-line-text-default\",\"required\":true,\"position\":2},{\"title\":\"Middle Name\",\"type\":\"element-single-line-text-default\",\"required\":true,\"position\":3},{\"title\":\"Last Name\",\"type\":\"element-single-line-text-default\",\"required\":true,\"position\":4},{\"title\":\"Email\",\"type\":\"element-single-line-text-default\",\"required\":true,\"position\":5},{\"title\":\"Civil Status\",\"type\":\"element-dropdown\",\"required\":true,\"position\":6,\"choices\":[{\"title\":\"Single\",\"value\":\"Single\",\"checked\":true},{\"title\":\"Married\",\"value\":\"Married\",\"checked\":false},{\"title\":\"Widowed\",\"value\":\"Widowed\",\"checked\":false}]},{\"title\":\"Untitled\",\"type\":\"element-multiple-choice\",\"required\":false,\"position\":7,\"choices\":[{\"title\":\"First Choice\",\"value\":\"First Choice\",\"checked\":true},{\"title\":\"Second Choice\",\"value\":\"Second Choice\",\"checked\":false},{\"title\":\"Third Choice\",\"value\":\"Third Choice\",\"checked\":false}]},{\"title\":\"Location\",\"type\":\"element-dropdown\",\"required\":false,\"position\":8,\"choices\":[{\"title\":\"Luzon\",\"value\":\"Luzon\",\"checked\":true},{\"title\":\"Visayas\",\"value\":\"Visayas\",\"checked\":false},{\"title\":\"Mindanao\",\"value\":\"Mindanao\",\"checked\":false}]},{\"title\":\"Number\",\"type\":\"element-number\",\"required\":false,\"position\":9}]}'),(54,'{\"title\":\"Member Form\",\"fields\":[{\"title\":\"Member ID\",\"type\":\"element-single-line-text-default\",\"required\":true,\"position\":1},{\"title\":\"First Name\",\"type\":\"element-single-line-text-default\",\"required\":true,\"position\":2},{\"title\":\"Middle Name\",\"type\":\"element-single-line-text-default\",\"required\":true,\"position\":3},{\"title\":\"Last Name\",\"type\":\"element-single-line-text-default\",\"required\":true,\"position\":4},{\"title\":\"Email\",\"type\":\"element-single-line-text-default\",\"required\":true,\"position\":5},{\"title\":\"Location\",\"type\":\"element-dropdown\",\"required\":false,\"position\":6,\"choices\":[{\"title\":\"Luzon\",\"value\":\"Luzon\",\"checked\":true},{\"title\":\"Visayas\",\"value\":\"Visayas\",\"checked\":false},{\"title\":\"Mindanao\",\"value\":\"Mindanao\",\"checked\":false}]},{\"title\":\"Civil Status\",\"type\":\"element-dropdown\",\"required\":true,\"position\":7,\"choices\":[{\"title\":\"Single\",\"value\":\"Single\",\"checked\":true},{\"title\":\"Married\",\"value\":\"Married\",\"checked\":false},{\"title\":\"Widowed\",\"value\":\"Widowed\",\"checked\":false}]},{\"title\":\"Untitled\",\"type\":\"element-multiple-choice\",\"required\":false,\"position\":8,\"choices\":[{\"title\":\"First Choice\",\"value\":\"First Choice\",\"checked\":true},{\"title\":\"Second Choice\",\"value\":\"Second Choice\",\"checked\":false},{\"title\":\"Third Choice\",\"value\":\"Third Choice\",\"checked\":false}]},{\"title\":\"Number\",\"type\":\"element-number\",\"required\":false,\"position\":9}]}'),(55,'{\"title\":\"Member Form\",\"fields\":[{\"title\":\"Member ID\",\"type\":\"element-single-line-text-default\",\"required\":true,\"position\":1},{\"title\":\"First Name\",\"type\":\"element-single-line-text-default\",\"required\":true,\"position\":2},{\"title\":\"Middle Name\",\"type\":\"element-single-line-text-default\",\"required\":true,\"position\":3},{\"title\":\"Last Name\",\"type\":\"element-single-line-text-default\",\"required\":true,\"position\":4},{\"title\":\"Email\",\"type\":\"element-single-line-text-default\",\"required\":true,\"position\":5},{\"title\":\"Location\",\"type\":\"element-dropdown\",\"required\":false,\"position\":6,\"choices\":[{\"title\":\"Luzon\",\"value\":\"Luzon\",\"checked\":true},{\"title\":\"Visayas\",\"value\":\"Visayas\",\"checked\":false},{\"title\":\"Mindanao\",\"value\":\"Mindanao\",\"checked\":false}]},{\"title\":\"Civil Status\",\"type\":\"element-dropdown\",\"required\":true,\"position\":7,\"choices\":[{\"title\":\"Single\",\"value\":\"Single\",\"checked\":true},{\"title\":\"Married\",\"value\":\"Married\",\"checked\":false},{\"title\":\"Widowed\",\"value\":\"Widowed\",\"checked\":false}]},{\"title\":\"Untitled\",\"type\":\"element-multiple-choice\",\"required\":false,\"position\":8,\"choices\":[{\"title\":\"First Choice\",\"value\":\"First Choice\",\"checked\":true},{\"title\":\"Second Choice\",\"value\":\"Second Choice\",\"checked\":false},{\"title\":\"Third Choice\",\"value\":\"Third Choice\",\"checked\":false}]}]}');
/*!40000 ALTER TABLE `tblMemberForm` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tblPosition`
--

DROP TABLE IF EXISTS `tblPosition`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tblPosition` (
  `strPositionId` varchar(45) NOT NULL,
  `strPosName` varchar(45) NOT NULL,
  `intPosVoteLimit` int(11) NOT NULL,
  `blDelete` tinyint(1) NOT NULL,
  PRIMARY KEY (`strPosName`,`blDelete`),
  UNIQUE KEY `strPositionId_UNIQUE` (`strPositionId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tblPosition`
--

LOCK TABLES `tblPosition` WRITE;
/*!40000 ALTER TABLE `tblPosition` DISABLE KEYS */;
INSERT INTO `tblPosition` VALUES ('CODE004','Auditor',2,0),('POS-003-CODE','Escort',1,0),('CODE001','President',1,0),('CODE003','Secretary of foreign affairs',3,0),('POS-002-CODE','South Luzon Vice President',1,0),('CODE002','South Luzon Vice President',2,1),('CODE005','Vice President for Luzon',1,0),('POS-001-CODE','Vice President for Visayas',1,0);
/*!40000 ALTER TABLE `tblPosition` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tblPositionDetail`
--

DROP TABLE IF EXISTS `tblPositionDetail`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tblPositionDetail` (
  `intPosDeId` int(11) NOT NULL AUTO_INCREMENT,
  `strPosDePosId` varchar(45) NOT NULL,
  `strPosDeFieldName` varchar(80) NOT NULL,
  `strPosDeFieldData` varchar(80) NOT NULL,
  PRIMARY KEY (`intPosDeId`),
  KEY `fkPosDePos_idx` (`strPosDePosId`),
  KEY `fkPosDeFieldName_idx` (`strPosDeFieldName`),
  CONSTRAINT `fkPosDePos` FOREIGN KEY (`strPosDePosId`) REFERENCES `tblPosition` (`strPositionId`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tblPositionDetail`
--

LOCK TABLES `tblPositionDetail` WRITE;
/*!40000 ALTER TABLE `tblPositionDetail` DISABLE KEYS */;
INSERT INTO `tblPositionDetail` VALUES (3,'CODE004','location','Mindanao'),(4,'CODE004','civil_status','Single'),(7,'CODE003','civil_status','Single'),(8,'CODE003','untitled','First Choice'),(9,'CODE001','location','Luzon'),(10,'CODE002','location','Luzon'),(11,'CODE005','location','Luzon'),(12,'POS-001-CODE','location','Visayas');
/*!40000 ALTER TABLE `tblPositionDetail` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tblQuestion`
--

DROP TABLE IF EXISTS `tblQuestion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tblQuestion` (
  `intQuestId` int(11) NOT NULL AUTO_INCREMENT,
  `txtQuestDesc` tinytext,
  PRIMARY KEY (`intQuestId`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tblQuestion`
--

LOCK TABLES `tblQuestion` WRITE;
/*!40000 ALTER TABLE `tblQuestion` DISABLE KEYS */;
INSERT INTO `tblQuestion` VALUES (1,'What is your favorite pet\'s name?'),(2,'What is your mother\'s maiden name?'),(3,'Who is your first kiss?'),(4,'Who is your favorite dota 2 hero?');
/*!40000 ALTER TABLE `tblQuestion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tblSchedule`
--

DROP TABLE IF EXISTS `tblSchedule`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tblSchedule` (
  `intSchedId` int(11) NOT NULL AUTO_INCREMENT,
  `datSchedStart` date NOT NULL,
  `datSchedEnd` date NOT NULL,
  PRIMARY KEY (`intSchedId`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tblSchedule`
--

LOCK TABLES `tblSchedule` WRITE;
/*!40000 ALTER TABLE `tblSchedule` DISABLE KEYS */;
INSERT INTO `tblSchedule` VALUES (1,'2016-05-02','2016-05-12');
/*!40000 ALTER TABLE `tblSchedule` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tblSecQuestion`
--

DROP TABLE IF EXISTS `tblSecQuestion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tblSecQuestion` (
  `intSecQuesId` int(11) NOT NULL AUTO_INCREMENT,
  `strSecQuestion` varchar(100) NOT NULL,
  PRIMARY KEY (`intSecQuesId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tblSecQuestion`
--

LOCK TABLES `tblSecQuestion` WRITE;
/*!40000 ALTER TABLE `tblSecQuestion` DISABLE KEYS */;
/*!40000 ALTER TABLE `tblSecQuestion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tblSurvey`
--

DROP TABLE IF EXISTS `tblSurvey`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tblSurvey` (
  `strSurveyId` varchar(45) NOT NULL,
  `strSurveyTitle` varchar(45) NOT NULL,
  `strSurveyDesc` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`strSurveyId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tblSurvey`
--

LOCK TABLES `tblSurvey` WRITE;
/*!40000 ALTER TABLE `tblSurvey` DISABLE KEYS */;
/*!40000 ALTER TABLE `tblSurvey` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tblSurveyForm`
--

DROP TABLE IF EXISTS `tblSurveyForm`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tblSurveyForm` (
  `intSurveyFormId` int(11) NOT NULL AUTO_INCREMENT,
  `strSFSurveyId` varchar(45) NOT NULL,
  `txtSurveyForm` text NOT NULL,
  PRIMARY KEY (`intSurveyFormId`),
  KEY `fkSFSurvey_idx` (`strSFSurveyId`),
  CONSTRAINT `fkSFSurvey` FOREIGN KEY (`strSFSurveyId`) REFERENCES `tblSurvey` (`strSurveyId`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tblSurveyForm`
--

LOCK TABLES `tblSurveyForm` WRITE;
/*!40000 ALTER TABLE `tblSurveyForm` DISABLE KEYS */;
/*!40000 ALTER TABLE `tblSurveyForm` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tblUser`
--

DROP TABLE IF EXISTS `tblUser`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tblUser` (
  `intUserId` int(11) NOT NULL AUTO_INCREMENT,
  `strUsername` varchar(45) NOT NULL,
  `strPassword` varchar(45) NOT NULL,
  `strUserEmail` varchar(45) DEFAULT NULL,
  `strUserFname` varchar(45) DEFAULT NULL,
  `strUserLname` varchar(45) DEFAULT NULL,
  `strAccountType` varchar(45) NOT NULL,
  `blDelete` tinyint(1) NOT NULL DEFAULT '0',
  `txtPicPath` tinytext,
  PRIMARY KEY (`intUserId`),
  UNIQUE KEY `strUsername_UNIQUE` (`strUsername`),
  UNIQUE KEY `strUserEmail_UNIQUE` (`strUserEmail`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tblUser`
--

LOCK TABLES `tblUser` WRITE;
/*!40000 ALTER TABLE `tblUser` DISABLE KEYS */;
INSERT INTO `tblUser` VALUES (1,'carlojumagdao','12345','carlojumgdao@gmail.com','Carlo','Jumagdao','Administrator',0,NULL),(2,'wendellclarete','123456789','wendogs@yahoo.com','Wendell','Clarete','Administrator',0,NULL),(4,'melodylegaspi','moimoi','melody@yahoo.com','Melody','Legaspi','Encoder',0,'../assets/img/uploads/tumblr_lkzyc3vNuh1qk266vo1_500.jpg'),(5,'Arvin','jessa','arvin@yahoo.com','Arvin','Gresola','Administrator',0,'../assets/img/uploads/arvinbagito.jpg');
/*!40000 ALTER TABLE `tblUser` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tblVotedCand`
--

DROP TABLE IF EXISTS `tblVotedCand`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tblVotedCand` (
  `strVotedCandId` int(11) NOT NULL AUTO_INCREMENT,
  `strVCMemId` varchar(45) NOT NULL,
  `strVCCandId` varchar(45) NOT NULL,
  PRIMARY KEY (`strVotedCandId`),
  KEY `fkVCMem_idx` (`strVCMemId`),
  KEY `fkVCCand_idx` (`strVCCandId`),
  CONSTRAINT `fkVCCand` FOREIGN KEY (`strVCCandId`) REFERENCES `tblCandidate` (`strCandId`) ON UPDATE CASCADE,
  CONSTRAINT `fkVCMem` FOREIGN KEY (`strVCMemId`) REFERENCES `tblMember` (`strMemberId`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tblVotedCand`
--

LOCK TABLES `tblVotedCand` WRITE;
/*!40000 ALTER TABLE `tblVotedCand` DISABLE KEYS */;
/*!40000 ALTER TABLE `tblVotedCand` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-03-11 20:31:05
