-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 29, 2018 at 06:28 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `usedcars`
--

CREATE TABLE `usedcars` (
  `UsedCarsID` int(255) NOT NULL,
  `UsedCarsName` varchar(255) NOT NULL,
  `UsedCarsPrice` int(255) NOT NULL,
  `UsedCarsDesc` varchar(255) NOT NULL,
  `UsedCarsImage` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usedcars`
--

INSERT INTO `usedcars` (`UsedCarsID`, `UsedCarsName`, `UsedCarsPrice`, `UsedCarsDesc`, `UsedCarsImage`) VALUES
(1, 'usedcars1', 200, 'dffff', 'usedcars1.jpg'),
(2, 'usedcars2', 400, 'qweeq', 'usedcars2.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `usedcars`
--
ALTER TABLE `usedcars`
  ADD PRIMARY KEY (`UsedCarsID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `usedcars`
--
ALTER TABLE `usedcars`
  MODIFY `UsedCarsID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
