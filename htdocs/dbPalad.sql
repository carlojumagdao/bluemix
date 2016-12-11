CREATE DATABASE  IF NOT EXISTS `dbPalad` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `dbPalad`;
-- MySQL dump 10.13  Distrib 5.6.24, for osx10.8 (x86_64)
--
-- Host: 127.0.0.1    Database: dbPalad
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
-- Table structure for table `tblAdmin`
--

DROP TABLE IF EXISTS `tblAdmin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tblAdmin` (
  `intAdminID` int(11) NOT NULL AUTO_INCREMENT,
  `strFirstname` varchar(45) NOT NULL,
  `strLastname` varchar(45) NOT NULL,
  `strEmail` varchar(45) NOT NULL,
  `strUsername` varchar(45) NOT NULL,
  `strPassword` varchar(45) NOT NULL,
  `strPicturePath` varchar(300) DEFAULT NULL,
  `blDelete` tinyint(4) NOT NULL DEFAULT '0',
  `TIMESTAMP` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`intAdminID`),
  UNIQUE KEY `strEmail_UNIQUE` (`strEmail`),
  UNIQUE KEY `strUsername_UNIQUE` (`strUsername`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tblAdmin`
--

LOCK TABLES `tblAdmin` WRITE;
/*!40000 ALTER TABLE `tblAdmin` DISABLE KEYS */;
/*!40000 ALTER TABLE `tblAdmin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tblAnswerDetail`
--

DROP TABLE IF EXISTS `tblAnswerDetail`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tblAnswerDetail` (
  `intAnswerDetailID` int(11) NOT NULL AUTO_INCREMENT,
  `intAnswerHeaderID` int(11) NOT NULL,
  `intQuestionID` int(11) NOT NULL,
  `strAnswer` varchar(100) DEFAULT NULL,
  `dblAnswerValue` double DEFAULT NULL,
  PRIMARY KEY (`intAnswerDetailID`),
  KEY `FKAnswerDetailHeader_idx` (`intAnswerHeaderID`),
  KEY `FKAnswerDetailQuestion_idx` (`intQuestionID`),
  CONSTRAINT `FKAnswerDetailHeader` FOREIGN KEY (`intAnswerHeaderID`) REFERENCES `tblAnswerHeader` (`intAnswerHeaderID`) ON UPDATE CASCADE,
  CONSTRAINT `FKAnswerDetailQuestion` FOREIGN KEY (`intQuestionID`) REFERENCES `tblQuestion` (`intQuestionID`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tblAnswerDetail`
--

LOCK TABLES `tblAnswerDetail` WRITE;
/*!40000 ALTER TABLE `tblAnswerDetail` DISABLE KEYS */;
/*!40000 ALTER TABLE `tblAnswerDetail` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tblAnswerHeader`
--

DROP TABLE IF EXISTS `tblAnswerHeader`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tblAnswerHeader` (
  `intAnswerHeaderID` int(11) NOT NULL AUTO_INCREMENT,
  `intUserID` int(11) NOT NULL,
  `intEventID` int(11) NOT NULL,
  `TIMESTAMP` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`intAnswerHeaderID`),
  KEY `FKAnswerHeaderUser_idx` (`intUserID`),
  KEY `FKAnswerHeaderEvent_idx` (`intEventID`),
  CONSTRAINT `FKAnswerHeaderEvent` FOREIGN KEY (`intEventID`) REFERENCES `tblEvent` (`intEventID`) ON UPDATE CASCADE,
  CONSTRAINT `FKAnswerHeaderUser` FOREIGN KEY (`intUserID`) REFERENCES `tblUser` (`intUserID`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tblAnswerHeader`
--

LOCK TABLES `tblAnswerHeader` WRITE;
/*!40000 ALTER TABLE `tblAnswerHeader` DISABLE KEYS */;
/*!40000 ALTER TABLE `tblAnswerHeader` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tblCategory`
--

DROP TABLE IF EXISTS `tblCategory`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tblCategory` (
  `intCategoryID` int(11) NOT NULL AUTO_INCREMENT,
  `strCategoryName` varchar(100) NOT NULL,
  `strCategoryDesc` varchar(200) DEFAULT NULL,
  `strPicturePath` varchar(300) DEFAULT NULL,
  `blDelete` tinyint(4) NOT NULL DEFAULT '0',
  `TIMESTAMP` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`intCategoryID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tblCategory`
--

LOCK TABLES `tblCategory` WRITE;
/*!40000 ALTER TABLE `tblCategory` DISABLE KEYS */;
/*!40000 ALTER TABLE `tblCategory` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tblEvent`
--

DROP TABLE IF EXISTS `tblEvent`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tblEvent` (
  `intEventID` int(11) NOT NULL AUTO_INCREMENT,
  `strEventDesc` varchar(200) NOT NULL,
  `dblFund` double NOT NULL,
  `dblConditionalFund` double NOT NULL,
  `dblAnswerValue` double NOT NULL,
  `strPIcturePath` varchar(300) DEFAULT NULL,
  `intCategoryID` int(11) NOT NULL,
  `blDelete` tinyint(4) NOT NULL DEFAULT '0',
  `TIMESTAMP` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`intEventID`),
  KEY `FKEventCategory_idx` (`intCategoryID`),
  CONSTRAINT `FKEventCategory` FOREIGN KEY (`intCategoryID`) REFERENCES `tblCategory` (`intCategoryID`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tblEvent`
--

LOCK TABLES `tblEvent` WRITE;
/*!40000 ALTER TABLE `tblEvent` DISABLE KEYS */;
/*!40000 ALTER TABLE `tblEvent` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tblQuestion`
--

DROP TABLE IF EXISTS `tblQuestion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tblQuestion` (
  `intQuestionID` int(11) NOT NULL AUTO_INCREMENT,
  `strQuestionDesc` varchar(200) NOT NULL,
  `strAnswer` varchar(200) NOT NULL,
  `strPicturePath` varchar(300) DEFAULT NULL,
  `intCategoryID` int(11) NOT NULL,
  `blDelete` tinyint(4) NOT NULL DEFAULT '0',
  `TIMESTAMP` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`intQuestionID`),
  KEY `FKQuestionCategory_idx` (`intCategoryID`),
  CONSTRAINT `FKQuestionCategory` FOREIGN KEY (`intCategoryID`) REFERENCES `tblCategory` (`intCategoryID`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tblQuestion`
--

LOCK TABLES `tblQuestion` WRITE;
/*!40000 ALTER TABLE `tblQuestion` DISABLE KEYS */;
/*!40000 ALTER TABLE `tblQuestion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tblUser`
--

DROP TABLE IF EXISTS `tblUser`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tblUser` (
  `intUserID` int(11) NOT NULL AUTO_INCREMENT,
  `strFirstname` varchar(45) NOT NULL,
  `strLastname` varchar(45) NOT NULL,
  `strUsername` varchar(45) NOT NULL,
  `strPassword` varchar(45) NOT NULL,
  `strEmail` varchar(45) NOT NULL,
  `strPicturePath` varchar(300) DEFAULT NULL,
  `blSex` tinyint(4) NOT NULL,
  `blDelete` tinyint(4) NOT NULL DEFAULT '0',
  `TIMESTAMP` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`intUserID`),
  UNIQUE KEY `strUsername_UNIQUE` (`strUsername`),
  UNIQUE KEY `strEmail_UNIQUE` (`strEmail`),
  UNIQUE KEY `strPassword_UNIQUE` (`strPassword`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tblUser`
--

LOCK TABLES `tblUser` WRITE;
/*!40000 ALTER TABLE `tblUser` DISABLE KEYS */;
/*!40000 ALTER TABLE `tblUser` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'dbPalad'
--

--
-- Dumping routines for database 'dbPalad'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-12-11  2:15:54
