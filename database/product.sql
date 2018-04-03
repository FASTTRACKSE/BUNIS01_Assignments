-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 03, 2018 at 10:06 AM
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
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `ProductID` int(255) NOT NULL,
  `ProductName` varchar(255) NOT NULL,
  `ProductPrice` varchar(255) NOT NULL,
  `ProductDesc` varchar(255) NOT NULL,
  `ProductType` varchar(255) NOT NULL,
  `ProductImage` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`ProductID`, `ProductName`, `ProductPrice`, `ProductDesc`, `ProductType`, `ProductImage`) VALUES
(1, 'Allstate', '100', 'Insurance', 'Insurance', 'allstate.jpg'),
(2, 'Progressive', '200', 'Insurance', 'Insurance', 'allstate.jpg'),
(3, 'Steering Wheel', '100', 'CarParts', 'CarParts', 'allstate.jpg'),
(4, 'Car Mirror', '200', 'CarParts', 'CarParts', 'allstate.jpg'),
(5, 'Car Seat', '100', 'Accessory', 'Accessory', 'allstate.jpg'),
(6, 'Charger', '200', 'Accessory', 'Accessory', 'allstate.jpg'),
(7, 'Castrol', '100', 'Oil and Fluid', 'OilandFluid', 'allstate.jpg'),
(8, 'Shell', '200', 'Oil and Fluid', 'OilandFluid', 'allstate.jpg'),
(9, 'Usedcar1', '100', 'Usedcar1', 'UsedCars', 'allstate.jpg'),
(10, 'Usedcar2', '200', 'aaaa', 'UsedCars', 'Usedcar2.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`ProductID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `ProductID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
