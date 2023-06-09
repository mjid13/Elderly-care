-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 23, 2021 at 01:36 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dprojb`
--

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `Member_ID` int(20) NOT NULL,
  `Car_number` varchar(50) NOT NULL,
  `username` varchar(30) NOT NULL,
  `address` varchar(60) NOT NULL,
  `car_tp` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`Member_ID`, `Car_number`, `username`, `address`, `car_tp`) VALUES
(1213, 'dsw23', 'user', 'muscat', 'Four wheel'),
(4443, 'dsw23', '213', 'rr', '');

-- --------------------------------------------------------

--
-- Table structure for table `que`
--

CREATE TABLE `que` (
  `questionid` int(11) NOT NULL,
  `question` varchar(200) DEFAULT NULL,
  `answer` varchar(200) DEFAULT NULL,
  `quedate` datetime DEFAULT current_timestamp(),
  `username` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `que`
--

INSERT INTO `que` (`questionid`, `question`, `answer`, `quedate`, `username`) VALUES
(9, 'dwwedwe', NULL, '2021-06-23 00:56:14', 'admin'),
(10, 'dwwedwe', NULL, '2021-06-23 01:21:20', '555'),
(11, 'dfeew', NULL, '2021-06-23 01:21:25', '555'),
(12, 'dwwedwe', NULL, '2021-06-23 01:23:43', '213');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `serviceID` int(10) NOT NULL,
  `place` varchar(30) NOT NULL,
  `start_address` varchar(100) NOT NULL,
  `finish_distention_address` varchar(100) NOT NULL,
  `username` varchar(30) NOT NULL,
  `member_id` int(20) DEFAULT NULL,
  `state` varchar(30) NOT NULL DEFAULT 'still',
  `date` date DEFAULT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`serviceID`, `place`, `start_address`, `finish_distention_address`, `username`, `member_id`, `state`, `date`, `time`) VALUES
(6, 'from hospital to home', 'fcdsf', 'dd', 'admin', NULL, 'still', '2021-06-10', '01:58:00'),
(7, 'from home to hospital', 'fcdsf', 'ewr', 'admin', NULL, 'still', '2021-06-07', '12:04:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL,
  `Email` varchar(80) NOT NULL,
  `User_control` int(3) DEFAULT NULL,
  `Gender` varchar(10) DEFAULT NULL,
  `Phone_Number` int(15) DEFAULT NULL,
  `address` varchar(60) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `Email`, `User_control`, `Gender`, `Phone_Number`, `address`) VALUES
(4443, '213', '$2y$10$FMCLD9SDV2LTgzgbILcVjOy62MqrfVNi0GL3WjPpr2eFt.x2Qxt6y', '1234@DF.DS', 0, 'male', 2312, 'rr'),
(123, '555', '$2y$10$bejw38ZvabLssh43vDROSuMoESuu2wBOKvmvXIByUJZfVpW4X2Iym', 'ss@d.d', 0, 'male', 3343, 'ss'),
(1213, 'user', '$2y$10$srrk7hYXw87musV/ieNwJ.54Xh9t/gJ/v2.zgNAlNMxDqYAQSnvTq ', 'abdulmajeed.alhadhrami@gmail.com', 0, 'male', 97474882, 'muscat'),
(12312, 'admin', '$2y$10$YSLZ4CpZNo7PWzrU8P9Cp.in2nEHNHUg86Fe1XkYLlL5p9Q4BKb0q', '1332@DD.D', 0, 'male', 99983, 'fcdsf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`Member_ID`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `que`
--
ALTER TABLE `que`
  ADD PRIMARY KEY (`questionid`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`serviceID`),
  ADD UNIQUE KEY `member_id` (`member_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD UNIQUE KEY `Email` (`Email`),
  ADD UNIQUE KEY `Phone_Number` (`Phone_Number`),
  ADD KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `que`
--
ALTER TABLE `que`
  MODIFY `questionid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `serviceID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
