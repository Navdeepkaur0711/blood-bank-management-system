-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 22, 2024 at 05:49 AM
-- Server version: 8.0.36
-- PHP Version: 8.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bbms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int NOT NULL,
  `Name` varchar(20) DEFAULT NULL,
  `Email` varchar(20) NOT NULL,
  `Password` varchar(10) NOT NULL,
  `Mobile` bigint NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `Password` (`Password`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `Name`, `Email`, `Password`, `Mobile`) VALUES
(1, 'admin', 'admin@gmail.com', 'a123', 9876543210);

-- --------------------------------------------------------

--
-- Table structure for table `donation`
--

DROP TABLE IF EXISTS `donation`;
CREATE TABLE IF NOT EXISTS `donation` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `DONOR_ID` int DEFAULT NULL,
  `BLOOD_GROUP` varchar(5) DEFAULT NULL,
  `NO_OF_UNITS` int DEFAULT NULL,
  `DISEASE` varchar(25) DEFAULT NULL,
  `STATUS` int DEFAULT NULL,
  PRIMARY KEY (`ID`),
  KEY `donation_ibfk_2` (`BLOOD_GROUP`),
  KEY `donation_ibfk_3` (`DONOR_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=710 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `donation`
--

INSERT INTO `donation` (`ID`, `DONOR_ID`, `BLOOD_GROUP`, `NO_OF_UNITS`, `DISEASE`, `STATUS`) VALUES
(1, 507, 'A+', 25, 'no', NULL),
(709, NULL, 'A+', 34, 'no', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `donor`
--

DROP TABLE IF EXISTS `donor`;
CREATE TABLE IF NOT EXISTS `donor` (
  `DID` int NOT NULL AUTO_INCREMENT,
  `NAME` varchar(20) DEFAULT NULL,
  `EMAIL` varchar(25) DEFAULT NULL,
  `PASSWORD` varchar(20) DEFAULT NULL,
  `MOBILE` bigint DEFAULT NULL,
  PRIMARY KEY (`DID`)
) ENGINE=InnoDB AUTO_INCREMENT=530 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `donor`
--

INSERT INTO `donor` (`DID`, `NAME`, `EMAIL`, `PASSWORD`, `MOBILE`) VALUES
(507, 'SIMRAN', 'simranjeet19844@gmail.com', 'mymaroon', 6005972865),
(510, 'Navdeep Kaur', 'xcfvgbh@gmail.com', '12345', 7087336953),
(511, 'aman', 'abc@gmail.com', '12345', 9876556789),
(512, 'donor1', 'd1@gmail.com', '12345', 9876556789),
(516, 'neelam', 'neelam@gmail.com', '12345', 9876556789),
(529, 'ram', 'xcfvgbh@gmail.com', '123456', 7087336953);

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

DROP TABLE IF EXISTS `patients`;
CREATE TABLE IF NOT EXISTS `patients` (
  `PID` int NOT NULL AUTO_INCREMENT,
  `NAME` varchar(20) DEFAULT NULL,
  `EMAIL` varchar(20) DEFAULT NULL,
  `PASSWORD` varchar(10) DEFAULT NULL,
  `MOBILE` bigint DEFAULT NULL,
  PRIMARY KEY (`PID`)
) ENGINE=InnoDB AUTO_INCREMENT=108 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`PID`, `NAME`, `EMAIL`, `PASSWORD`, `MOBILE`) VALUES
(101, 'patient1', 'p1@gmail.com', 'patient1', 9876543234),
(102, 'patient2', 'p2@gmail.com', 'ptient2', 9876545678),
(103, 'patient3', 'p3@gmail.com', 'patient3', 8765445678),
(104, 'patient4', 'p4@gmail.com', 'patient4', 1234554321),
(105, 'patient5', 'p5@gmail.com', 'patient5', 3456789098),
(106, 'Navdeep Kaur', 'xcfvgbh@gmail.com', '1234', 7087336953),
(107, 'Navdeep Kaur', 'xcfvgbh@gmail.com', '12345', 7087336953);

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

DROP TABLE IF EXISTS `request`;
CREATE TABLE IF NOT EXISTS `request` (
  `RID` int NOT NULL AUTO_INCREMENT,
  `PATIENT_ID` int DEFAULT NULL,
  `BLOOD_GROUP` varchar(5) DEFAULT NULL,
  `NO_OF_UNITS` int DEFAULT NULL,
  `REASON` varchar(25) DEFAULT NULL,
  `STATUS` int DEFAULT NULL,
  PRIMARY KEY (`RID`),
  KEY `BLOOD_GROUP` (`BLOOD_GROUP`),
  KEY `PATIENT_ID` (`PATIENT_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`RID`, `PATIENT_ID`, `BLOOD_GROUP`, `NO_OF_UNITS`, `REASON`, `STATUS`) VALUES
(1, 101, 'O+', 27, 'needed', NULL),
(2, NULL, 'A-', 25, 'needed', NULL),
(3, NULL, 'A+', 25, 'needed', NULL),
(4, NULL, 'O-', 25, 'needed', NULL),
(5, NULL, 'B-', 25, 'needed', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `stocks`
--

DROP TABLE IF EXISTS `stocks`;
CREATE TABLE IF NOT EXISTS `stocks` (
  `SNO` int DEFAULT NULL,
  `BLOOD_GROUP` varchar(5) NOT NULL,
  `STOCK` int DEFAULT NULL,
  PRIMARY KEY (`BLOOD_GROUP`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `stocks`
--

INSERT INTO `stocks` (`SNO`, `BLOOD_GROUP`, `STOCK`) VALUES
(3, 'A-', NULL),
(2, 'A+', 1),
(8, 'AB-', NULL),
(7, 'AB+', NULL),
(6, 'B-', NULL),
(5, 'B+', NULL),
(4, 'O-', NULL),
(NULL, 'O+', 1);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `donation`
--
ALTER TABLE `donation`
  ADD CONSTRAINT `donation_ibfk_2` FOREIGN KEY (`BLOOD_GROUP`) REFERENCES `stocks` (`BLOOD_GROUP`) ON DELETE CASCADE ON UPDATE RESTRICT,
  ADD CONSTRAINT `donation_ibfk_3` FOREIGN KEY (`DONOR_ID`) REFERENCES `donor` (`DID`) ON DELETE CASCADE ON UPDATE RESTRICT;

--
-- Constraints for table `request`
--
ALTER TABLE `request`
  ADD CONSTRAINT `request_ibfk_2` FOREIGN KEY (`BLOOD_GROUP`) REFERENCES `stocks` (`BLOOD_GROUP`) ON DELETE CASCADE,
  ADD CONSTRAINT `request_ibfk_3` FOREIGN KEY (`PATIENT_ID`) REFERENCES `patients` (`PID`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
