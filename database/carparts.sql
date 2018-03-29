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
-- Table structure for table `carparts`
--

CREATE TABLE `carparts` (
  `CarPartsID` int(255) NOT NULL,
  `CarPartsName` varchar(255) NOT NULL,
  `CarPartsPrice` int(255) NOT NULL,
  `CarPartsDesc` varchar(255) NOT NULL,
  `CarPartsImage` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `carparts`
--

INSERT INTO `carparts` (`CarPartsID`, `CarPartsName`, `CarPartsPrice`, `CarPartsDesc`, `CarPartsImage`) VALUES
(1, 'Steering Wheel', 5000, 'ad', 'steeringwheel.jpg'),
(2, 'Car Mirror', 5000, 'carparts', 'carmirror.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carparts`
--
ALTER TABLE `carparts`
  ADD PRIMARY KEY (`CarPartsID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carparts`
--
ALTER TABLE `carparts`
  MODIFY `CarPartsID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
