-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 10, 2022 at 05:54 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookinvoice`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblbookdetails`
--

CREATE TABLE `tblbookdetails` (
  `ItemNo` int(11) NOT NULL,
  `Discription` text NOT NULL,
  `Qty` int(10) NOT NULL,
  `Rate` float NOT NULL,
  `Gst` int(10) NOT NULL,
  `CreatedDate` date NOT NULL DEFAULT current_timestamp(),
  `ModifiedDate` date NOT NULL,
  `RecStatus` tinyint(1) NOT NULL DEFAULT 1,
  `QutationId` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblbookdetails`
--

INSERT INTO `tblbookdetails` (`ItemNo`, `Discription`, `Qty`, `Rate`, `Gst`, `CreatedDate`, `ModifiedDate`, `RecStatus`, `QutationId`) VALUES
(0, 'all in one', 1, 200, 0, '2022-03-08', '0000-00-00', 1, 9),
(0, 'all in one', 1, 200, 0, '2022-03-08', '0000-00-00', 1, 10),
(0, 'washbasin', 3000, 26, 18, '2022-03-08', '0000-00-00', 1, 11),
(1, 'Padastal', 3000, 30, 18, '2022-03-08', '0000-00-00', 1, 11),
(0, 'maharana pratap', 1, 200, 0, '2022-03-08', '0000-00-00', 1, 12),
(0, 'book1', 1, 200, 0, '2022-03-08', '0000-00-00', 1, 13),
(1, 'book2', 2, 100, 0, '2022-03-08', '0000-00-00', 1, 13),
(2, 'book3', 1, 100, 5, '2022-03-08', '0000-00-00', 1, 13);

-- --------------------------------------------------------

--
-- Table structure for table `tblbookmst`
--

CREATE TABLE `tblbookmst` (
  `QutationId` int(10) NOT NULL,
  `Name` text NOT NULL,
  `QDate` date NOT NULL,
  `TotalPrice` float NOT NULL,
  `TotalGST` float NOT NULL,
  `TotalAmount` float NOT NULL,
  `CreatedDate` date NOT NULL DEFAULT current_timestamp(),
  `ModifiedDate` date NOT NULL,
  `RecStatus` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblbookmst`
--

INSERT INTO `tblbookmst` (`QutationId`, `Name`, `QDate`, `TotalPrice`, `TotalGST`, `TotalAmount`, `CreatedDate`, `ModifiedDate`, `RecStatus`) VALUES
(9, 'Joshna Rathod', '2022-03-08', 200, 0, 200, '2022-03-08', '0000-00-00', 1),
(10, 'Joshna Rathod', '2022-03-08', 200, 0, 200, '2022-03-08', '0000-00-00', 1),
(11, 'orient Ceramic', '2022-03-08', 168000, 30240, 198240, '2022-03-08', '0000-00-00', 1),
(12, 'VIjay Rajput', '2022-03-08', 200, 0, 200, '2022-03-08', '0000-00-00', 1),
(13, 'DHARMESH RATHOD', '2022-03-08', 500, 5, 505, '2022-03-08', '0000-00-00', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblbookdetails`
--
ALTER TABLE `tblbookdetails`
  ADD KEY `fk_foreign_key_name` (`QutationId`);

--
-- Indexes for table `tblbookmst`
--
ALTER TABLE `tblbookmst`
  ADD PRIMARY KEY (`QutationId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblbookmst`
--
ALTER TABLE `tblbookmst`
  MODIFY `QutationId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
