-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 30, 2019 at 02:34 PM
-- Server version: 5.7.25-0ubuntu0.16.04.2
-- PHP Version: 7.2.7-1+ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `metro`
--

-- --------------------------------------------------------

--
-- Table structure for table `ADMIN`
--

CREATE TABLE `ADMIN` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ADMIN`
--

INSERT INTO `ADMIN` (`username`, `password`) VALUES
('rahulsubru', '123hello'),
('rajgarg', 'hi123'),
('shakti', '123hi'),
('tawqeermunshi', 'hello123');

-- --------------------------------------------------------

--
-- Table structure for table `stations`
--

CREATE TABLE `stations` (
  `name` varchar(20) NOT NULL,
  `color` varchar(10) NOT NULL,
  `status` varchar(5) NOT NULL,
  `station_id` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stations`
--

INSERT INTO `stations` (`name`, `color`, `status`, `station_id`) VALUES
('Nagasandra', 'green', '0', 'GG01'),
('Dasarahalli', 'green', '0', 'GG02'),
('jalahalli', 'green', '0', 'GG03'),
('peenya industry', 'green', '0', 'GG04'),
('peenya', 'green', '0', 'GG05'),
('Yeshwantpur industry', 'green', '0', 'GG06'),
('Yeshwantpur', 'GREEN', '0', 'GG07'),
('sandal soap factory', 'green', '0', 'GG08'),
('mahalaxami', 'green', '0', 'GG09'),
('rajajinagar', 'green', '0', 'GG10'),
('kuvempu road', 'green', '0', 'GG11'),
('srirampura', 'green', '0', 'GG12'),
('sampige road', 'green', '0', 'GG13'),
('chickpete', 'green', '0', 'GG14'),
('KR market', 'green', '0', 'GG15'),
('national college', 'green', '0', 'GG16'),
('Lalbagh', 'green', '0', 'GG17'),
('southend circle', 'green', '0', 'GG18'),
('jayanagar', 'green', '0', 'GG19'),
('RV road', 'green', '0', 'GG20'),
('banashankari', 'green', '0', 'GG21'),
('jayaprakash nagar', 'green', '0', 'GG22'),
('puttenahalli', 'green', '0', 'GG23'),
('majestic', 'both', '0', 'PG01'),
('mysore road', 'purple', '0', 'PP01'),
('deepanjali nagar', 'purple', '0', 'PP02'),
('attiguppe', 'purple', '0', 'PP03'),
('vijayanagar', 'purple', '0', 'PP04'),
('hosahalli', 'purple', '0', 'PP05'),
('magadi road', 'purple', '0', 'PP06'),
('city railway station', 'purple', '0', 'PP07'),
('Sir M Vishveshwaraya', 'purple', '0', 'PP08'),
('vidhana souda', 'purple', '0', 'PP09'),
('cubbon park', 'purple', '0', 'PP10'),
('MG road', 'purple', '0', 'PP11'),
('trinity', 'purple', '0', 'PP12'),
('halasuru', 'purple', '0', 'PP13'),
('indiranagar', 'purple ', '0', 'PP14'),
('Swami vivekananda ', 'purple', '0', 'PP15'),
('baiyappanahalli', 'purple', '0', 'PP16');

-- --------------------------------------------------------

--
-- Table structure for table `stops`
--

CREATE TABLE `stops` (
  `station` varchar(20) NOT NULL,
  `arr_time` varchar(20) NOT NULL,
  `train_id` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stops`
--

INSERT INTO `stops` (`station`, `arr_time`, `train_id`) VALUES
('GG01', '5:00am', '01'),
('GG02', '5:20am', '01'),
('GG03', '5:35am', '01'),
('GG04', '5:45am', '01'),
('GG05', '5:50am', '01'),
('GG06', '6:00am', '01'),
('GG07', '6:20am', '01'),
('GG08', '6:30am', '01'),
('GG09', '6:40am', '01'),
('GG10', '6:50am', '01'),
('GG11', '7:00am', '01'),
('GG12', '7:10am', '01'),
('GG13', '7:15am', '01'),
('GG14', '7:20am', '01'),
('GG15', '7:25am', '01'),
('GG16', '7:35am', '01'),
('GG17', '7:40am', '01'),
('GG18', '7:50am', '01'),
('GG19', '8:00am', '01'),
('GG20', '8:10am', '01'),
('GG21', '8:20am', '01'),
('GG22', '8:25am', '01'),
('GG23', '8:30', '01'),
('GG23', '5:00am', '02'),
('GG22', '5:10am', '02'),
('GG21', '5:15am', '02'),
('GG20', '5:20am', '02'),
('GG19', '5:25am', '02'),
('GG18', '5:30am', '02'),
('GG17', '5:40am', '02'),
('GG16', '5:45am', '02'),
('GG15', '5:50am', '02'),
('GG14', '6:00am', '02'),
('PP01', '6:05am', '02'),
('GG12', '6:20am', '02'),
('GG11', '6:25am', '02'),
('GG10', '6:35am', '02'),
('GG09', '6:45am', '02'),
('GG08', '6:50am', '02'),
('GG07', '6:55am', '02'),
('GG06', '7:00am', '02'),
('GG05', '7:20am', '02'),
('GG04', '7:30am', '02'),
('GG03', '7:40am', '02'),
('GG02', '7:55am', '02'),
('GG01', '8:00am', '02'),
('PP01', '5:00am', '03'),
('PP02', '5:15am', '03'),
('PP03', '5:20am', '03'),
('PP04', '5:30am', '03'),
('PP05', '5:40am', '03'),
('PP06', '5:50am', '03'),
('PP07', '6:00am', '03'),
('PP01', '6:10am', '03'),
('PP09', '6:20', '03'),
('PP10', '6:30am', '03'),
('PP11', '6:35am', '03'),
('PP12', '6:45am', '03'),
('PP13', '6:55am', '03'),
('PP14', '7:05am', '03'),
('PP15', '7:15am', '03'),
('PP16', '7:20am', '03'),
('PP16', '5:00am', '04'),
('PP15', '5:15am', '04'),
('PP14', '5:25am', '04'),
('PP13', '5:30am', '04'),
('PP12', '5:35am', '04'),
('PP11', '5:40am', '04'),
('PP10', '5:50am', '04'),
('PP09', '6:00am', '04'),
('PP08', '6:20am', '04'),
('PP07', '6:25am', '04'),
('PP06', '6:30am', '04'),
('PP05', '6:40am', '04'),
('PP04', '6:50am', '04'),
('PP03', '7:15am', '04'),
('PP02', '7:25am', '04'),
('PP01', '7:45am', '04'),
('PG01', '6:40am', '02'),
('PG01', '6:05am', '03'),
('PG01', '6:10am', '04');

-- --------------------------------------------------------

--
-- Table structure for table `trains`
--

CREATE TABLE `trains` (
  `ID` varchar(20) NOT NULL,
  `starts_at` varchar(25) NOT NULL,
  `ends_at` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trains`
--

INSERT INTO `trains` (`ID`, `starts_at`, `ends_at`) VALUES
('01', 'nagasasndra', 'puttenahalli'),
('02', 'puttenahalli', 'nagasasndra'),
('03', 'mysore road', 'baiyappanahalli'),
('04', 'baiyappanahalli', 'mysore road');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ADMIN`
--
ALTER TABLE `ADMIN`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `stations`
--
ALTER TABLE `stations`
  ADD PRIMARY KEY (`station_id`);

--
-- Indexes for table `stops`
--
ALTER TABLE `stops`
  ADD KEY `train_id` (`train_id`),
  ADD KEY `station` (`station`);

--
-- Indexes for table `trains`
--
ALTER TABLE `trains`
  ADD PRIMARY KEY (`ID`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `stops`
--
ALTER TABLE `stops`
  ADD CONSTRAINT `stops_ibfk_1` FOREIGN KEY (`train_id`) REFERENCES `trains` (`ID`),
  ADD CONSTRAINT `stops_ibfk_2` FOREIGN KEY (`station`) REFERENCES `stations` (`station_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
