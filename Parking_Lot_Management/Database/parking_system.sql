-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 01, 2019 at 10:53 PM
-- Server version: 5.7.24
-- PHP Version: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `parking_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `UID` varchar(30) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `Password` varchar(30) COLLATE utf8mb4_unicode_520_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`UID`, `Password`) VALUES
('rahuls.is16@rvce.edu.in', '1111'),
('tawqeermunshi@gmail.com', '2345');

-- --------------------------------------------------------

--
-- Table structure for table `area`
--

DROP TABLE IF EXISTS `area`;
CREATE TABLE IF NOT EXISTS `area` (
  `Area_Name` varchar(30) NOT NULL,
  `No_Of_Lots` int(11) NOT NULL DEFAULT '20',
  `Occupancy` int(11) NOT NULL DEFAULT '0',
  `Max_Slots` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `area`
--

INSERT INTO `area` (`Area_Name`, `No_Of_Lots`, `Occupancy`, `Max_Slots`) VALUES
('Area-A', 10, 1, 20),
('Area-B', 13, 1, 20),
('Area-C', 16, 1, 20),
('Area-D', 25, 1, 30),
('Area-E', 13, 1, 15),
('Area-F', 19, 1, 20),
('Area-G', 19, 1, 20);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

DROP TABLE IF EXISTS `customer`;
CREATE TABLE IF NOT EXISTS `customer` (
  `UID` varchar(30) NOT NULL,
  `First_Name` varchar(30) NOT NULL,
  `Last_Name` varchar(30) NOT NULL,
  `Mobile_No` varchar(30) NOT NULL,
  `Password` varchar(60) NOT NULL,
  `Vehicle_Type` varchar(30) NOT NULL,
  `Vehicle_No` varchar(30) NOT NULL,
  `Vehicle_Name` varchar(30) NOT NULL,
  `Area_Name` varchar(30) NOT NULL,
  `Parking_Status` int(2) NOT NULL DEFAULT '0',
  `Slot_Id` int(2) NOT NULL DEFAULT '0',
  PRIMARY KEY (`UID`),
  UNIQUE KEY `Vehicle_No` (`Vehicle_No`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`UID`, `First_Name`, `Last_Name`, `Mobile_No`, `Password`, `Vehicle_Type`, `Vehicle_No`, `Vehicle_Name`, `Area_Name`, `Parking_Status`, `Slot_Id`) VALUES
('abhinavupadhya@gmail.com', 'Abhinav', 'Upadhya', '9060514628', 'abhi123', '4', 'KA01598615', 'Tata Indica', 'Area-A', 1, 15),
('abhisheka@yahoo.in', 'Abhishek', 'Ameta', '8765123490', 'abhi', '4', 'RJ09AA1232', 'Maruti Ritz', 'Area-A', 1, 13),
('adityasreerama@gmail.com', 'Aditya', 'Sreerama', '998877665443', 'ad', '4', 'KABL057819', 'Honda Camry', 'Area-A', 1, 19),
('adnan@rvce.edu.in', 'Adnan', 'Vohra', '9911252345', 'addu123', '4', 'KOL67AD1234', 'Tata Nano', 'Area-C', 1, 13),
('alanwalker@gmail.com', 'Alan', 'Walker', '9672343456', 'walker', '4', 'KA01FFK7875', 'BMW K', 'Area-F', 1, 11),
('anagha@gmail.com', 'Anagha', 'Murthy', '9060567891', 'anu123', '4', 'KA01597815', 'Tata Indica', 'Area-A', 1, 16),
('anmol@gmail.com', 'Anmol', 'Gaba', '8960500873', 'ajui123', '4', 'KA015971234', 'Tata Nano', 'Area-B', 1, 12),
('arjunacharya@gmail.com', 'Arjun', 'Acharya', '9060514679', 'ajui123', '4', 'KA01597890', 'Zeta', 'Area-B', 1, 11),
('balendu@rvce.edu.in', 'Balendu', 'Taterbay', '9393939393', 'balu', '4', 'JH09IJ6754', 'Toyota Etios', 'Area-E', 1, 12),
('bonjovi@gmail.com', 'Bon', 'Jovi', '9812343456', 'bon', '4', 'KA01JK2675', 'Volvo', 'Area-D', 1, 11),
('cb@gmail.com', 'Chirag', 'Chabbra', '8888811112', 'cb123', '4', 'JH012345BK', 'Mercedes', 'Area-B', 1, 14),
('champ@gmail.com', 'Sampath', 'Nayak', '9493929156', 'champ', '4', 'KA90YU6721', 'Tata Nano', '', 0, 0),
('Deba@gmail.com', 'Debasis', 'Mahapatra', '9010205060', 'beba123', '4', 'KA01597800', 'Honda Accord', 'Area-B', 1, 13),
('deeppurple@gmail.com', 'Deep', 'Purple', '9812343456', 'deep', '4', 'KA01JK7875', 'Volvo', 'Area-F', 1, 11),
('dostarora@gmail.com', 'Dost', 'Arora', '9902426396', 'dost', '4', 'LU 67 SD 4325', 'Ford Go', '', 0, 0),
('gargnitish@gmail.com', 'Nitish', 'Garg', '7868845452', 'ngispro', '4', 'KA05KKBK2020', 'Honda CRV', 'Area-A', 1, 17),
('lav1998@gmail.com', 'Lav', 'Gabri', '8310376132', 'lgabri', '4', 'JKBK1234HA45', 'Toyota Etios', 'Area-A', 1, 18),
('ledzep@gmail.com', 'Led', 'Zeppelin', '9812345670', 'stairways', '4', 'KA01JK2345', 'Volvo', 'Area-C', 1, 11),
('madhav@gmail.com', 'Madhav', 'Krishna', '8787878787', 'mad', '4', 'KAJH123901', 'Indica', 'Area-C', 1, 12),
('nidhi_girish@gmail.com', 'Nidhi', 'Girish', '9886364400', 'f040befd88fb907c8d6ca29058cb6993', '4', 'KA41MA8006', 'Renault Qwid', '', 0, 0),
('nividhabhandari@gmail.com', 'Nividha ', 'Bhandari', '9911462861', 'nivi123', '4', 'KA90UK3456', 'Renault Qwid', 'Area-D', 1, 16),
('omyagarde@gmail.com', 'Omkar', 'garde', '8904509122', 'omya', '2', 'KABK057800', 'Kamasaki Ninja', 'Area-A', 1, 14),
('palash@gmail.com', 'Palash', 'Bharadia', '8765439810', 'palu', '4', 'KA0912GH3456', 'Tata Indica', 'Area-C', 1, 14),
('priyamam@gmail.com', 'Priya', 'D', '9986123456', 'priya', '4', 'KA45RH1345', 'Etios', '', 0, 0),
('queens@gmail.com', 'Queens', 'Band', '981234390', 'queen', '4', 'KA01JK4575', 'Volvo', 'Area-E', 1, 11),
('rahulkushwaha@ymail.com', 'Rahul', 'Kushwaha', '9886881548', '2acb7811397a5c3bea8cba57b0388b79', '4', 'CH78GH8907', 'Audi A7', '', 0, 0),
('rahulsubramaniam0510@gmail.com', 'Rahul', 'Subramaniam', '09811262851', 'rahul123', '4', 'KABK057802', 'Etios', 'Area-D', 1, 13),
('rahul_sub@live.com', 'Rahul', 'Subramaniam', '09811262851', 'rahul123', '4', 'KKBK057823', 'Etios', 'Area-A', 1, 12),
('rg@gmail.com', 'Ricky', 'Gervais', '8686868686', 'rg', '4', 'BR34FG4327', 'Mercedes Benz S Class', 'Area-D', 1, 12),
('rohanbakshi97@live.com', 'Rohan', 'Bakshi', '8777268551', 'Roba123', '4', 'KA53B8025', 'Innova', 'Area-A', 1, 11),
('rohansanghvi@gmail.com', 'Rohan', 'Sanghvi', '9494949494', 'rohan123', '2', 'KA78GH4532', 'Pulsar', 'Area-D', 1, 15),
('samarthsanjay@microsoft.com', 'Samarth', 'Sanjay', '8712305623', 'sam', '4', 'UD568AS2167', 'Maruti 800', '', 0, 0),
('sheikha@gmail.com', 'Sheikh', 'Athar', '9012345677', 'sheikh', '4', 'HR01TH5678', 'Mercedes E-Class', 'Area-A', 1, 20),
('sk@gmail.com', 'Shivaram', 'KR', '9879879871', '5678', '4', 'MH24BH5678', 'Audi A7', 'Area-B', 1, 17),
('sp@gmail.com', 'Sudarshan', 'Purohit', '9191919191', '9090', '4', 'KABK057911', 'Mercedes', 'Area-B', 1, 18),
('surabhi4@gmail.com', 'Surabhi', 'Rakhecha', '8777654321', 'suru', '4', '', 'Tata Nano', '', 0, 0),
('tawqeermunshi@gmail.com', 'Tawqeer', 'Munshi', '9090909091', '321', '4', 'JKBK1234H098', 'Lamborgini', '', 0, 0),
('vdesh@gmail.com', 'Vishwas', 'deshpande', '9080604020', 'modi', '4', 'KABK89DF3412', 'Swift DZire', '', 0, 0),
('vk@cf.com', 'Vikas', 'Malpani', '9999998888', '12345', '4', 'KABK057818', 'Mercedes Benz', 'Area-B', 1, 16),
('yashasvi@gmail.com', 'Yashasvi ', 'Singh', '9999888877', 'yashasvi', '4', 'KA56RT1256', 'Honda City', '', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `parking_fee`
--

DROP TABLE IF EXISTS `parking_fee`;
CREATE TABLE IF NOT EXISTS `parking_fee` (
  `UID` varchar(30) NOT NULL,
  `Entry_Time` varchar(30) NOT NULL,
  `Leaving_Time` varchar(30) NOT NULL,
  `Entry_Date` varchar(30) NOT NULL,
  `Parking_Charge` double NOT NULL,
  `First_Name` varchar(30) NOT NULL,
  `Last_Name` varchar(30) NOT NULL,
  `Sr_No` int(2) NOT NULL DEFAULT '0',
  KEY `UID` (`UID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `parking_fee`
--

INSERT INTO `parking_fee` (`UID`, `Entry_Time`, `Leaving_Time`, `Entry_Date`, `Parking_Charge`, `First_Name`, `Last_Name`, `Sr_No`) VALUES
('yashasvi@gmail.com', '05:23:38pm', '05:24:05pm', '03.28.19', 25.5, 'Yashasvi ', 'Singh', 1),
('yashasvi@gmail.com', '05:31:50pm', '05:32:06pm', '03.28.19', 30, 'Yashasvi ', 'Singh', 2),
('palash@gmail.com', '06:19:35pm', '06:19:46pm', '03.28.19', 30, 'Palash', 'Bharadia', 3),
('champ@gmail.com', '08:43:13pm', '09:15:00pm', '03.28.19', 30, 'Sampath', 'Nayak', 4),
('nividhabhandari@gmail.com', '05:17:36pm', '', '03.31.19', 30, 'Nividha ', 'Bhandari', 5),
('palash@gmail.com', '06:12:23pm', '', '03.31.19', 30, 'Palash', 'Bharadia', 6),
('champ@gmail.com', '08:30:57pm', '08:31:00pm', '03.31.19', 30, 'Sampath', 'Nayak', 7),
('champ@gmail.com', '08:34:15pm', '08:34:23pm', '03.31.19', 30, 'Sampath', 'Nayak', 8),
('champ@gmail.com', '08:35:06pm', '08:35:09pm', '03.31.19', 30, 'Sampath', 'Nayak', 9),
('champ@gmail.com', '08:54:28pm', '08:54:33pm', '03.31.19', 30, 'Sampath', 'Nayak', 10),
('dostarora@gmail.com', '06:58:45am', '06:58:53am', '04.01.19', 30, 'Dost', 'Arora', 11),
('nidhi_girish@gmail.com', '08:07:55am', '08:08:05am', '04.01.19', 30, 'Nidhi', 'Girish', 12),
('rahulkushwaha@ymail.com', '10:59:49am', '10:59:56am', '04.01.19', 30, 'Rahul', 'Kushwaha', 13),
('rahulkushwaha@ymail.com', '11:00:21am', '11:56:14am', '04.01.19', 30, 'Rahul', 'Kushwaha', 14),
('rahulkushwaha@ymail.com', '12:19:26pm', '04:55:22pm', '04.01.19', 30, 'Rahul', 'Kushwaha', 15),
('nidhi_girish@gmail.com', '04:54:18pm', '04:54:21pm', '04.01.19', 30, 'Nidhi', 'Girish', 16),
('nidhi_girish@gmail.com', '05:02:45pm', '05:02:47pm', '04.01.19', 30, 'Nidhi', 'Girish', 17),
('nidhi_girish@gmail.com', '10:21:28pm', '10:21:32pm', '04.01.19', 30, 'Nidhi', 'Girish', 18);

-- --------------------------------------------------------

--
-- Table structure for table `parking_slip`
--

DROP TABLE IF EXISTS `parking_slip`;
CREATE TABLE IF NOT EXISTS `parking_slip` (
  `UID` varchar(30) NOT NULL,
  `Area_Name` varchar(30) NOT NULL,
  `Slot_Id` int(11) NOT NULL,
  `Parking_Time` varchar(30) NOT NULL,
  `Parking_Date` varchar(30) NOT NULL,
  `First_Name` varchar(30) NOT NULL,
  `Last_Name` varchar(30) NOT NULL,
  KEY `UID` (`UID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `parking_slip`
--

INSERT INTO `parking_slip` (`UID`, `Area_Name`, `Slot_Id`, `Parking_Time`, `Parking_Date`, `First_Name`, `Last_Name`) VALUES
('yashasvi@gmail.com', 'Area-D', 16, '05:31:50pm', '03.28.19', 'Yashasvi ', 'Singh'),
('palash@gmail.com', 'Area-C', 14, '06:19:35pm', '03.28.19', 'Palash', 'Bharadia'),
('champ@gmail.com', 'Area-D', 16, '08:43:13pm', '03.28.19', 'Sampath', 'Nayak'),
('nividhabhandari@gmail.com', 'Area-D', 16, '05:17:36pm', '03.31.19', 'Nividha ', 'Bhandari'),
('palash@gmail.com', 'Area-C', 14, '06:12:23pm', '03.31.19', 'Palash', 'Bharadia'),
('champ@gmail.com', 'Area-B', 19, '08:30:57pm', '03.31.19', 'Sampath', 'Nayak'),
('champ@gmail.com', 'Area-C', 15, '08:34:15pm', '03.31.19', 'Sampath', 'Nayak'),
('champ@gmail.com', 'Area-C', 15, '08:35:06pm', '03.31.19', 'Sampath', 'Nayak'),
('champ@gmail.com', 'Area-B', 19, '08:54:28pm', '03.31.19', 'Sampath', 'Nayak'),
('dostarora@gmail.com', 'Area-C', 15, '06:58:45am', '04.01.19', 'Dost', 'Arora'),
('nidhi_girish@gmail.com', 'Area-B', 19, '08:07:55am', '04.01.19', 'Nidhi', 'Girish'),
('rahulkushwaha@ymail.com', 'Area-B', 19, '10:59:49am', '04.01.19', 'Rahul', 'Kushwaha'),
('rahulkushwaha@ymail.com', 'Area-B', 19, '11:00:21am', '04.01.19', 'Rahul', 'Kushwaha'),
('rahulkushwaha@ymail.com', 'Area-B', 19, '12:19:26pm', '04.01.19', 'Rahul', 'Kushwaha'),
('nidhi_girish@gmail.com', 'Area-B', 20, '04:54:18pm', '04.01.19', 'Nidhi', 'Girish'),
('nidhi_girish@gmail.com', 'Area-B', 19, '05:02:45pm', '04.01.19', 'Nidhi', 'Girish'),
('nidhi_girish@gmail.com', 'Area-B', 19, '10:21:28pm', '04.01.19', 'Nidhi', 'Girish');

-- --------------------------------------------------------

--
-- Table structure for table `parking_slot`
--

DROP TABLE IF EXISTS `parking_slot`;
CREATE TABLE IF NOT EXISTS `parking_slot` (
  `Area_Name` varchar(30) NOT NULL,
  `Number` int(11) NOT NULL,
  `Occupancy` int(11) NOT NULL DEFAULT '0',
  `Parking_Type` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `parking_slot`
--

INSERT INTO `parking_slot` (`Area_Name`, `Number`, `Occupancy`, `Parking_Type`) VALUES
('Area-A', 12, 1, '4'),
('Area-A', 11, 1, '4'),
('Area-A', 13, 1, '4'),
('Area-A', 14, 1, '4'),
('Area-A', 15, 1, '4'),
('Area-A', 16, 1, '4'),
('Area-A', 17, 1, '4'),
('Area-A', 18, 1, '4'),
('Area-A', 19, 1, '4'),
('Area-A', 20, 1, '4'),
('Area-B', 11, 1, '4'),
('Area-B', 12, 1, '4'),
('Area-B', 13, 1, '4'),
('Area-B', 14, 1, '4'),
('Area-B', 15, 0, 'N'),
('Area-B', 16, 1, '4'),
('Area-B', 17, 1, '4'),
('Area-B', 18, 1, '4'),
('Area-B', 19, 0, 'N'),
('Area-B', 20, 0, 'N'),
('Area-C', 11, 1, '4'),
('Area-C', 12, 1, '4'),
('Area-C', 13, 1, '4'),
('Area-C', 14, 1, '4'),
('Area-C', 15, 0, 'N'),
('Area-C', 16, 0, 'N'),
('Area-C', 17, 0, 'N'),
('Area-C', 18, 0, 'N'),
('Area-C', 19, 0, 'N'),
('Area-C', 20, 0, 'N'),
('Area-D', 21, 0, 'N'),
('Area-D', 22, 0, 'N'),
('Area-D', 23, 0, 'N'),
('Area-D', 24, 0, 'N'),
('Area-D', 25, 0, 'N'),
('Area-D', 26, 0, 'N'),
('Area-D', 27, 0, 'N'),
('Area-D', 28, 0, 'N'),
('Area-D', 29, 0, 'N'),
('Area-D', 30, 0, 'N'),
('Area-E', 1, 0, 'N'),
('Area-E', 2, 0, 'N'),
('Area-E', 3, 0, 'N'),
('Area-E', 4, 0, 'N'),
('Area-E', 5, 0, 'N'),
('Area-E', 6, 0, 'N'),
('Area-E', 7, 0, 'N'),
('Area-E', 8, 0, 'N'),
('Area-E', 9, 0, 'N'),
('Area-E', 10, 0, 'N'),
('Area-E', 11, 1, '4'),
('Area-E', 12, 1, '4'),
('Area-E', 13, 0, 'N'),
('Area-E', 14, 0, 'N'),
('Area-E', 15, 0, 'N'),
('Area-F', 11, 1, '4'),
('Area-F', 12, 0, 'N'),
('Area-F', 13, 0, 'N'),
('Area-F', 14, 0, 'N'),
('Area-F', 15, 0, 'N'),
('Area-F', 16, 0, 'N'),
('Area-F', 17, 0, 'N'),
('Area-F', 18, 0, 'N'),
('Area-F', 19, 0, 'N'),
('Area-F', 20, 0, 'N'),
('Area-G', 11, 1, '4'),
('Area-G', 12, 0, 'N'),
('Area-G', 13, 0, 'N'),
('Area-G', 14, 0, 'N'),
('Area-G', 15, 0, 'N'),
('Area-G', 16, 0, 'N'),
('Area-G', 17, 0, 'N'),
('Area-G', 18, 0, 'N'),
('Area-G', 19, 0, 'N'),
('Area-G', 20, 0, 'N'),
('Area-D', 11, 1, '4'),
('Area-D', 12, 1, '4'),
('Area-D', 13, 1, '4'),
('Area-D', 14, 0, 'N'),
('Area-D', 15, 1, '4'),
('Area-D', 16, 1, '2'),
('Area-D', 17, 0, 'N'),
('Area-D', 18, 0, 'N'),
('Area-D', 19, 0, 'N'),
('Area-D', 20, 0, 'N');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

DROP TABLE IF EXISTS `payment`;
CREATE TABLE IF NOT EXISTS `payment` (
  `UID` varchar(30) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `Mode` varchar(30) COLLATE utf8mb4_unicode_520_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`UID`, `Mode`) VALUES
('palash@gmail.com', ''),
('dostarora@gmail.com', ''),
('champ@gmail.com', ''),
('champ@gmail.com', 'Cash Payment'),
('champ@gmail.com', 'Cash Payment'),
('champ@gmail.com', 'Cash Payment'),
('champ@gmail.com', 'Paytm Payment'),
('champ@gmail.com', 'Cash Payment'),
('champ@gmail.com', 'Paytm Payment'),
('champ@gmail.com', 'Cash Payment'),
('dostarora@gmail.com', 'Cash Payment'),
('nidhi_girish@gmail.com', 'Cash Payment'),
('rahulkushwaha@ymail.com', 'Cash Payment'),
('rahulkushwaha@ymail.com', 'Cash Payment'),
('nidhi_girish@gmail.com', 'Cash Payment'),
('nidhi_girish@gmail.com', 'Cash Payment');

-- --------------------------------------------------------

--
-- Table structure for table `ratings`
--

DROP TABLE IF EXISTS `ratings`;
CREATE TABLE IF NOT EXISTS `ratings` (
  `UID` varchar(30) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `Rating` varchar(30) COLLATE utf8mb4_unicode_520_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `ratings`
--

INSERT INTO `ratings` (`UID`, `Rating`) VALUES
('palash@gmail.com', '0'),
('dostarora@gmail.com', '0'),
('champ@gmail.com', '0'),
('champ@gmail.com', ''),
('champ@gmail.com', ''),
('champ@gmail.com', ''),
('champ@gmail.com', '5'),
('champ@gmail.com', '5'),
('champ@gmail.com', '5'),
('champ@gmail.com', '4'),
('champ@gmail.com', '4'),
('dostarora@gmail.com', '4'),
('dostarora@gmail.com', '4'),
('nidhi_girish@gmail.com', '4'),
('rahulkushwaha@ymail.com', '4'),
('rahulkushwaha@ymail.com', '4'),
('nidhi_girish@gmail.com', '4'),
('nidhi_girish@gmail.com', '');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `parking_fee`
--
ALTER TABLE `parking_fee`
  ADD CONSTRAINT `parking_fee_ibfk_1` FOREIGN KEY (`UID`) REFERENCES `customer` (`UID`);

--
-- Constraints for table `parking_slip`
--
ALTER TABLE `parking_slip`
  ADD CONSTRAINT `parking_slip_ibfk_1` FOREIGN KEY (`UID`) REFERENCES `customer` (`UID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
