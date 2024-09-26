-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 25, 2023 at 05:13 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `health_center`
--

-- --------------------------------------------------------

--
-- Table structure for table `2020csc003`
--

CREATE TABLE `2020csc003` (
  `dates` date DEFAULT NULL,
  `remarks` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `users` varchar(150) NOT NULL,
  `pwd` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`users`, `pwd`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `csc`
--

CREATE TABLE `csc` (
  `regNumber` varchar(80) NOT NULL,
  `department` varchar(50) DEFAULT NULL,
  `batch` varchar(50) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `pwd` varchar(255) DEFAULT NULL,
  `nic` varchar(255) DEFAULT NULL,
  `faculty` varchar(200) DEFAULT NULL,
  `fullName` varchar(255) DEFAULT NULL,
  `nameInitial` varchar(255) DEFAULT NULL,
  `residentAddress` varchar(255) DEFAULT NULL,
  `permanentAddress` varchar(255) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `sex` varchar(30) DEFAULT NULL,
  `maritialStatus` varchar(30) DEFAULT NULL,
  `mobileNumber` int(150) DEFAULT NULL,
  `school` varchar(255) DEFAULT NULL,
  `blood` varchar(10) DEFAULT NULL,
  `height` int(20) DEFAULT NULL,
  `weight` int(20) DEFAULT NULL,
  `parentName` varchar(255) DEFAULT NULL,
  `parentMobile` int(150) DEFAULT NULL,
  `enrollDate` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `csc`
--

INSERT INTO `csc` (`regNumber`, `department`, `batch`, `email`, `pwd`, `nic`, `faculty`, `fullName`, `nameInitial`, `residentAddress`, `permanentAddress`, `dob`, `sex`, `maritialStatus`, `mobileNumber`, `school`, `blood`, `height`, `weight`, `parentName`, `parentMobile`, `enrollDate`) VALUES
('2020CSC001', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('2020CSC002', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('2020CSC003', 'csc', '2018/2019', 'abcd@gmail.com', '1234', 'Sri Lanka', 'Science', 'Asintha Modaya', 'Moda Asintha', 'Rambukkana', 'Pinnawala', '1997-03-11', 'Male', 'Single', 111111111, 'asdfasdf', 'A+', 221, 222, 'Unknown', 111111111, 'August 24, 2023'),
('2020CSC004', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('2020CSC005', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`users`);

--
-- Indexes for table `csc`
--
ALTER TABLE `csc`
  ADD PRIMARY KEY (`regNumber`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
