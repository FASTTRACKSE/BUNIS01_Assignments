-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 26, 2018 at 03:16 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cp`
--

-- --------------------------------------------------------

--
-- Table structure for table `datas`
--

CREATE TABLE `datas` (
  `id` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `datas`
--

INSERT INTO `datas` (`id`, `type`, `description`) VALUES
(1, 'VISION', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.'),
(2, 'MISSION', 'Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!'),
(3, 'Customer Care', 'Address: Room 0000, Floor 00, Building 00, Da Nang, Vietnam <br>\r\nPhone number: 000.0000 0000 <br>             Fax: 000. 0000 0000 <br>       \r\nEmail: hcacustomercare@hcautovn.org  <br>           \r\nWebsite: www.hacautovn.org <br>'),
(4, 'Technical Support', 'Address: Room 0000, Floor 00, Building 00, Da Nang, Vietnam <br>\r\nPhone number: 000.0000 0000 <br>              Fax: 000. 0000 0000 <br>              \r\nEmail: hcatechnicalsupport@hcautovn.org <br>              \r\nWebsite: www.hacautovn.org <br>');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `datas`
--
ALTER TABLE `datas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `datas`
--
ALTER TABLE `datas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
