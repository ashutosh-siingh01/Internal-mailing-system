-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 24, 2023 at 10:23 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `comaildb`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedbacktb`
--

CREATE TABLE `feedbacktb` (
  `FID` int(11) NOT NULL,
  `Firstname` varchar(50) NOT NULL,
  `LastName` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Feedback` text NOT NULL,
  `FeedbackDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedbacktb`
--

INSERT INTO `feedbacktb` (`FID`, `Firstname`, `LastName`, `Email`, `Feedback`, `FeedbackDate`) VALUES
(7, 'vishal', 'kapoor', 'vishal@gmal.com', 'nyc', '2023-08-04 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `mailtb`
--

CREATE TABLE `mailtb` (
  `mid` int(11) NOT NULL,
  `mailfrom` varchar(50) NOT NULL,
  `mailto` varchar(50) NOT NULL,
  `mailsubject` varchar(200) NOT NULL,
  `mailmessage` text NOT NULL,
  `maildate` datetime NOT NULL,
  `delfrom` char(1) NOT NULL,
  `delto` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mailtb`
--

INSERT INTO `mailtb` (`mid`, `mailfrom`, `mailto`, `mailsubject`, `mailmessage`, `maildate`, `delfrom`, `delto`) VALUES
(2, 'nadeem@gmail.com', 'kartik@gmail.com', 'meeting', 'covid-19', '2023-08-04 01:49:27', 'n', 'n'),
(3, 'tarun@gmail.com', 'nadeem@gmail.com', 'exams', 'today is reporting', '2023-08-16 04:13:03', 'n', 'n'),
(4, 'tarun@gmail.com', 'kartik@gmail.com', 'exams', 'today is reporting', '2023-08-16 04:13:03', 'n', 'n'),
(5, 'rajni@gmail.com', 'shalini@gmail.com', 'covid 19', 'meeting about covid 19', '2023-10-15 09:42:48', 'n', 'n'),
(6, 'rajni@gmail.com', 'shalini@gmail.com', 'about g20', 'g20 summit off today', '2023-10-15 09:44:06', 'y', 'n');

-- --------------------------------------------------------

--
-- Table structure for table `regtb`
--

CREATE TABLE `regtb` (
  `RID` int(11) NOT NULL,
  `Firstname` varchar(50) NOT NULL,
  `Lastname` varchar(50) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Role` varchar(50) NOT NULL,
  `RegDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `regtb`
--

INSERT INTO `regtb` (`RID`, `Firstname`, `Lastname`, `Username`, `Password`, `Role`, `RegDate`) VALUES
(1, '', '', 'admin', '0192023a7bbd73250516f069df18b500', 'admin', '0000-00-00 00:00:00'),
(35, 'NADEEM', 'RANA', 'nadeem@gmail.com', '58c3b9afbccfcdd695af971248b9cf0b', 'user', '2023-08-04 00:00:00'),
(36, 'KARTIK', 'CHAUHAN', 'kartik@gmail.com', '4f537b538cb32179c57c59b461abdf09', 'user', '2023-08-04 00:00:00'),
(37, 'TARUN', 'KUMAR', 'tarun@gmail.com', 'c974f8a563d92fdc1de4ff6852b22c84', 'user', '2023-08-16 00:00:00'),
(38, 'RAJNI', 'RANI', 'rajni@gmail.com', '1b50b6fe9ece8f46f6fa01d612d713ae', 'user', '2023-10-15 00:00:00'),
(39, 'SHALINI', 'RANI', 'shalini@gmail.com', '1fc4cd38110b3311815196a47065f227', 'user', '2023-10-15 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `feedbacktb`
--
ALTER TABLE `feedbacktb`
  ADD PRIMARY KEY (`FID`);

--
-- Indexes for table `mailtb`
--
ALTER TABLE `mailtb`
  ADD PRIMARY KEY (`mid`);

--
-- Indexes for table `regtb`
--
ALTER TABLE `regtb`
  ADD PRIMARY KEY (`RID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `feedbacktb`
--
ALTER TABLE `feedbacktb`
  MODIFY `FID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `mailtb`
--
ALTER TABLE `mailtb`
  MODIFY `mid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `regtb`
--
ALTER TABLE `regtb`
  MODIFY `RID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
