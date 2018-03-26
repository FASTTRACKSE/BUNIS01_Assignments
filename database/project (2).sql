-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 26, 2018 at 06:52 AM
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
-- Table structure for table `accessory`
--

CREATE TABLE `accessory` (
  `AccessoryID` int(255) NOT NULL,
  `AccessoryName` varchar(255) NOT NULL,
  `AccessoryPrice` int(255) NOT NULL,
  `AccessoryDesc` varchar(255) NOT NULL,
  `AccessoryImage` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

-- --------------------------------------------------------

--
-- Table structure for table `insurance`
--

CREATE TABLE `insurance` (
  `InsuranceID` int(255) NOT NULL,
  `InsuranceName` varchar(255) NOT NULL,
  `InsurancePrice` int(255) NOT NULL,
  `InsuranceDesc` varchar(255) NOT NULL,
  `InsuranceImage` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `insurance`
--

INSERT INTO `insurance` (`InsuranceID`, `InsuranceName`, `InsurancePrice`, `InsuranceDesc`, `InsuranceImage`) VALUES
(1, 'Allstate', 5000000, 'AllState Car Insurance', 'allstate.jpg'),
(2, 'Progressive', 1000000, 'Progressive Car Insurance', 'progressive.jpg'),
(3, 'Liberty Mutual', 3000000, 'Liberty Mutual Car Insurance', 'libertymutual.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `oilandfluid`
--

CREATE TABLE `oilandfluid` (
  `OilandFluidID` int(255) NOT NULL,
  `OilandFluidName` varchar(255) NOT NULL,
  `OilandFluidPrice` int(255) NOT NULL,
  `OilandFluidDesc` varchar(255) NOT NULL,
  `OilandFluidImage` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(1, 'UsedCar1', 5000, 'UsedCar1', 'usedcars1.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accessory`
--
ALTER TABLE `accessory`
  ADD PRIMARY KEY (`AccessoryID`);

--
-- Indexes for table `carparts`
--
ALTER TABLE `carparts`
  ADD PRIMARY KEY (`CarPartsID`);

--
-- Indexes for table `insurance`
--
ALTER TABLE `insurance`
  ADD PRIMARY KEY (`InsuranceID`);

--
-- Indexes for table `oilandfluid`
--
ALTER TABLE `oilandfluid`
  ADD PRIMARY KEY (`OilandFluidID`);

--
-- Indexes for table `usedcars`
--
ALTER TABLE `usedcars`
  ADD PRIMARY KEY (`UsedCarsID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accessory`
--
ALTER TABLE `accessory`
  MODIFY `AccessoryID` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `carparts`
--
ALTER TABLE `carparts`
  MODIFY `CarPartsID` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `insurance`
--
ALTER TABLE `insurance`
  MODIFY `InsuranceID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `oilandfluid`
--
ALTER TABLE `oilandfluid`
  MODIFY `OilandFluidID` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `usedcars`
--
ALTER TABLE `usedcars`
  MODIFY `UsedCarsID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
