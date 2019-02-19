-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 28, 2017 at 09:29 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `college_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE `results` (
  `S.NO` int(11) NOT NULL,
  `Marks` double DEFAULT NULL,
  `StudentID` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `results`
--

INSERT INTO `results` (`S.NO`, `Marks`, `StudentID`) VALUES
(1, 8.2, 1),
(2, 9.4, 2),
(3, 8.2, 3),
(4, 5, 4);

-- --------------------------------------------------------

--
-- Table structure for table `userprofile`
--

CREATE TABLE `userprofile` (
  `ID` int(11) NOT NULL,
  `NAME` varchar(100) DEFAULT NULL,
  `Password` varchar(20) DEFAULT NULL,
  `Age` int(11) DEFAULT NULL,
  `Contact` bigint(11) DEFAULT NULL,
  `RollNo` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userprofile`
--

INSERT INTO `userprofile` (`ID`, `NAME`, `Password`, `Age`, `Contact`, `RollNo`) VALUES
(1, 'Kusum ', 'kusum', 23, 7, 1),
(2, 'Akash', 'akash', 20, 9062701376, 130001),
(3, 'garg', 'garg', 21, 9875923451, 130007),
(4, 'neeraj', 'neeraj', 21, 9875923451, 130009),
(5, 'Shivam', 'shivam@123', 20, 9062701377, 1300098),
(6, 'Neeraj', '121211', 25, 212121222121, 1130012),
(7, 'kumar', '888', 0, 999, 99),
(8, 'AMAN', 'AMAN123', 21, 9898985643, 1300014),
(9, 'satyam', '43434334', 22, 45, 23);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `results`
--
ALTER TABLE `results`
  ADD PRIMARY KEY (`S.NO`),
  ADD KEY `StudentID` (`StudentID`),
  ADD KEY `ID` (`S.NO`);

--
-- Indexes for table `userprofile`
--
ALTER TABLE `userprofile`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ID` (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `results`
--
ALTER TABLE `results`
  MODIFY `S.NO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `userprofile`
--
ALTER TABLE `userprofile`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
