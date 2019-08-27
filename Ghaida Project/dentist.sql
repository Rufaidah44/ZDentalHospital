-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 27, 2019 at 09:26 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.1.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dentist`
--

-- --------------------------------------------------------

--
-- Table structure for table `apointments`
--

CREATE TABLE `apointments` (
  `aid` int(10) NOT NULL,
  `pid` varchar(10) NOT NULL,
  `did` varchar(10) NOT NULL,
  `date` date NOT NULL,
  `time` varchar(50) NOT NULL,
  `attachement` mediumblob,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `apointments`
--

INSERT INTO `apointments` (`aid`, `pid`, `did`, `date`, `time`, `attachement`, `status`) VALUES
(1020, '444', '10001', '2019-03-04', '15:00 - 15:30', '', 'مؤكد'),
(1021, '444', '10001', '2019-03-04', '11:30 - 12:00', '', 'مؤكد'),
(1022, '444', '10001', '2019-03-01', '14:00 - 14:30', '', 'مؤكد');

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `did` varchar(10) NOT NULL,
  `f_name` varchar(50) NOT NULL,
  `m_name` varchar(50) DEFAULT NULL,
  `l_name` varchar(50) NOT NULL,
  `nationality` varchar(50) NOT NULL,
  `b_date` date NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(1000) NOT NULL,
  `password` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`did`, `f_name`, `m_name`, `l_name`, `nationality`, `b_date`, `mobile`, `email`, `address`, `password`) VALUES
('10001', 'محمد', NULL, 'عزت', 'مصري', '1970-07-18', '050000001', 'ezzat@mail.com', 'Zulfi, AH st', '12345'),
('10002', 'شيف ', NULL, 'شيرما', 'هندي', '1970-07-18', '05000002', 'shirma@mail.com', 'Zulfi, SD st', '12345'),
('10003', 'يدر الدين ', NULL, 'بازمي', 'هندي', '1975-07-22', '05000003', 'bazmi@mail.com', 'zulfi RE st', '12345'),
('10004', 'ليللا', NULL, 'فاني', 'هندية', '1980-04-09', '05000004', 'fani@mail.com', 'zulfi , GG st', '12345'),
('10005', 'عادل', NULL, 'البلوي', 'سعودي', '1983-02-05', '05000005', 'balawi@mail.com', 'zulfi , ui st', '12345'),
('10006', 'عبد العزيز', NULL, 'العصيمي', 'سعودي', '1990-05-13', '0500006', 'osaimi@mail.com', 'zulfi, ff st', '12345'),
('10007', 'أبو بكر ', NULL, 'الناصر', 'سوري', '1977-09-11', '05000007', 'nasser@mail.com', 'zulfi, LL st', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `emplyees`
--

CREATE TABLE `emplyees` (
  `eid` varchar(10) NOT NULL,
  `f_name` varchar(50) NOT NULL,
  `m_name` varchar(50) NOT NULL,
  `l_name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `nationalty` varchar(50) NOT NULL,
  `address` varchar(1000) NOT NULL,
  `b_date` date NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `emplyees`
--

INSERT INTO `emplyees` (`eid`, `f_name`, `m_name`, `l_name`, `email`, `mobile`, `nationalty`, `address`, `b_date`, `password`) VALUES
('EM1001', 'admin', 'admin', 'admin', 'admin@mail.com', '050000000', 'saudi', 'Zulfi', '1990-02-13', '1111');

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `pid` varchar(10) NOT NULL,
  `f_name` varchar(50) NOT NULL,
  `m_name` varchar(50) NOT NULL,
  `l_name` varchar(50) NOT NULL,
  `nationality` varchar(50) NOT NULL,
  `b_date` date NOT NULL,
  `age` int(11) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(1000) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`pid`, `f_name`, `m_name`, `l_name`, `nationality`, `b_date`, `age`, `gender`, `mobile`, `email`, `address`, `password`) VALUES
('444', 'أحمد', 'محمد', 'عبد الله', 'سعودي', '2018-02-19', 44, 'Male', '0666666', 'ff', 'ff', '11');

-- --------------------------------------------------------

--
-- Table structure for table `working_hours`
--

CREATE TABLE `working_hours` (
  `date` date NOT NULL,
  `time` varchar(50) NOT NULL,
  `did` varchar(10) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `apointments`
--
ALTER TABLE `apointments`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`did`);

--
-- Indexes for table `emplyees`
--
ALTER TABLE `emplyees`
  ADD PRIMARY KEY (`eid`);

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `working_hours`
--
ALTER TABLE `working_hours`
  ADD PRIMARY KEY (`date`,`time`,`did`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `apointments`
--
ALTER TABLE `apointments`
  MODIFY `aid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1023;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
