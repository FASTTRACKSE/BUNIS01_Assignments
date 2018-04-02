-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 02, 2018 at 09:10 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hcauto`
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

--
-- Dumping data for table `accessory`
--

INSERT INTO `accessory` (`AccessoryID`, `AccessoryName`, `AccessoryPrice`, `AccessoryDesc`, `AccessoryImage`) VALUES
(1, 'Car Seat ', 100, 'asd', 'carseat.jpg'),
(2, 'Charger', 200, 'odkasopk', 'charger.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'd1f15b413510e5aaf87b31dca5a85e8a');

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

-- --------------------------------------------------------

--
-- Table structure for table `datas`
--

CREATE TABLE `datas` (
  `id` int(11) NOT NULL,
  `type` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `datas`
--

INSERT INTO `datas` (`id`, `type`, `description`) VALUES
(1, 'VISION', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dol'),
(2, 'MISSION', 'Mission Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute ir'),
(3, 'Customer Care', 'Address: Room 0000, Floor 00, Building 00, Da Nang, Vietnam <br>\r\nPhone number: 000.0000 0000 <br>             Fax: 000. 0000 0000 <br>       \r\nEmail: hcacustomercare@hcautovn.org  <br>           \r\nWebsite: www.hacautovn.org <br>'),
(4, 'Technical Support', 'Address: Room 0000, Floor 00, Building 00, Da Nang, Vietnam <br>\r\nPhone number: 000.0000 0000 <br>              Fax: 000. 0000 0000 <br>              \r\nEmail: hcatechnicalsupport@hcautovn.org <br>              \r\nWebsite: www.hacautovn.org <br>');

-- --------------------------------------------------------

--
-- Table structure for table `datas_about`
--

CREATE TABLE `datas_about` (
  `id` int(11) NOT NULL,
  `date` varchar(255) DEFAULT NULL,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `datas_about`
--

INSERT INTO `datas_about` (`id`, `date`, `title`, `description`, `img`) VALUES
(1, '2009-2011', 'Our Humble Beginnings', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!', '1.jpg'),
(2, 'March 2011', 'An Agency is Born', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!', '2.jpg'),
(3, 'December 2012', 'Transition to Full Service', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!', '3.jpg'),
(4, 'July 2014', 'Phase Two Expansion', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!', '4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `homeslider`
--

CREATE TABLE `homeslider` (
  `id` int(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `homeslider`
--

INSERT INTO `homeslider` (`id`, `image`) VALUES
(1, '1200x350a.jpg'),
(3, '1200x350b.jpg'),
(7, '.jpg');

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
(9, 'Progressive', 200000, 'Insurance', 'Progressive.png'),
(10, 'Liberty Mutual', 300000, 'Insurance', 'libertymutual.jpg'),
(11, 'AllState', 100000, 'Insurance', 'AllState.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `postDate` date NOT NULL,
  `type` varchar(255) NOT NULL,
  `newsDescription` mediumtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `imageNews` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `postDate`, `type`, `newsDescription`, `imageNews`) VALUES
(1, 'Bộ Công thương công bố lộ', '2018-03-01', 'promoprog', 'Ngày 2/12, tại Hà Nội, Chi hội Doanh nghiệp cung cấp Thiết bị giám sát hành trình (Chi hội GSHT) thuộc Hiệp hội Vận tải ô tô Việt Nam đã có buổi tổng kết các hoạt động của chi hội trong nhiệm kỳ 2013-2016 và đề ra phương hướng của nhiệm kỳ mới 2016-2021.\r\n\r\nBáo cáo tổng kết hoạt động chi hội doanh nghiệp cung cấp thiết bị GSHT giai đoạn 2013 – 2016, ông Đào Thanh Anh – Phó Chi hội trưởng Chi hội GSHT cho biết: Trước đòi hỏi ngày càng khắt khe của các doanh nghiệp vận tải về chất lượng, sự cạnh tranh quyết liệt về giá cả đã áp sát giá sản xuất, cùng với việc quản lý sát sao của cơ quan quản lý nhà nước và sự bùng nổ của công nghệ thông tin nên chất lượng sản phẩm và dịch vụ của các Hội viên được nâng lên rõ rệt.\r\n\r\nTrong 3 năm qua, dù thị ngành GSHT ngày một khó khăn và cạnh tranh gay gắt, giá bán thiết bị GSHT trên thị trường tiến sát tới giá thành sản xuất nhưng chi hội GSHT ngày một lớn mạnh, trưởng thành thông qua việc tiếp nhận hơn 10 hội viên mới\r\n\r\nĐại hội cũng đã thống nhất thông qua phương hướng tổ chức và hoạt động của Chi hội nhiệm kỳ 2016 – 2021. Theo đó, Chi hội sẽ tiếp tục duy trì hoạt động hỗ trợ, tư vấn cho các Hội viên trong những vấn đề liên quan đến các văn bản pháp luật trong ngành GSHT; Phát triển hội viên sâu rộng, nâng cao chất lượng hoạt động của Chi hội. Đồng thời xây dựng và phát triển nhân lực cho lĩnh vực nghiên cứu, sản xuất và lắp đặt thiết bị GSHT.', 'Bộ_Công_thương_công_bố_lộ.jpg'),
(3, 'GGWP', '2018-03-01', 'autonews', 'ini yang baru', 'GGWP.png'),
(4, 'GGWP', '2018-03-01', 'techcons', 'cccccccccccccccccccccccccccccccc bbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbb aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 'GGWP.jpg'),
(5, 'GGWP', '2018-03-01', 'promoprog', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa bbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbb cccccccccccccccccccccccccccccccccccccccccccccccc ', '5.jpg'),
(6, 'GGWP', '2018-03-01', 'techcons', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa bbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbb cccccccccccccccccccccccccccccccccccccccccccccccc ', '6.jpg'),
(7, 'GGWP', '2018-03-01', 'techcons', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa bbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbb cccccccccccccccccccccccccccccccccccccccccccccccc ', '7.jpg'),
(8, 'GGWP', '2018-03-01', 'promoprog', 'cccccccccccccccccccccccccccccccccc bbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbb aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '8.jpg'),
(9, 'GGWP', '2018-03-01', 'promoprog', 'Ngày 2/12, tại Hà Nội, Chi hội Doanh nghiệp cung cấp Thiết bị giám sát hành trình (Chi hội GSHT) thuộc Hiệp hội Vận tải ô tô Việt Nam đã có buổi tổng kết các hoạt động của chi hội trong nhiệm kỳ 2013-2016 và đề ra phương hướng của nhiệm kỳ mới 2016-2021.\r\n\r\nBáo cáo tổng kết hoạt động chi hội doanh nghiệp cung cấp thiết bị GSHT giai đoạn 2013 – 2016, ông Đào Thanh Anh – Phó Chi hội trưởng Chi hội GSHT cho biết: Trước đòi hỏi ngày càng khắt khe của các doanh nghiệp vận tải về chất lượng, sự cạnh tranh quyết liệt về giá cả đã áp sát giá sản xuất, cùng với việc quản lý sát sao của cơ quan quản lý nhà nước và sự bùng nổ của công nghệ thông tin nên chất lượng sản phẩm và dịch vụ của các Hội viên được nâng lên rõ rệt.\r\n\r\nTrong 3 năm qua, dù thị ngành GSHT ngày một khó khăn và cạnh tranh gay gắt, giá bán thiết bị GSHT trên thị trường tiến sát tới giá thành sản xuất nhưng chi hội GSHT ngày một lớn mạnh, trưởng thành thông qua việc tiếp nhận hơn 10 hội viên mới\r\n\r\nĐại hội cũng đã thống nhất thông qua phương hướng tổ chức và hoạt động của Chi hội nhiệm kỳ 2016 – 2021. Theo đó, Chi hội sẽ tiếp tục duy trì hoạt động hỗ trợ, tư vấn cho các Hội viên trong những vấn đề liên quan đến các văn bản pháp luật trong ngành GSHT; Phát triển hội viên sâu rộng, nâng cao chất lượng hoạt động của Chi hội. Đồng thời xây dựng và phát triển nhân lực cho lĩnh vực nghiên cứu, sản xuất và lắp đặt thiết bị GSHT.', '1.jpg'),
(10, 'GGWP', '2018-03-01', 'promoprog', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa bbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbb cccccccccccccccccccccccccccccccccccccccccccccccc ', '2.jpg'),
(11, 'GGWP', '2018-03-01', 'promoprog', 'Ngày 2/12, tại Hà Nội, Chi hội Doanh nghiệp cung cấp Thiết bị giám sát hành trình (Chi hội GSHT) thuộc Hiệp hội Vận tải ô tô Việt Nam đã có buổi tổng kết các hoạt động của chi hội trong nhiệm kỳ 2013-2016 và đề ra phương hướng của nhiệm kỳ mới 2016-2021.\r\n\r\nBáo cáo tổng kết hoạt động chi hội doanh nghiệp cung cấp thiết bị GSHT giai đoạn 2013 – 2016, ông Đào Thanh Anh – Phó Chi hội trưởng Chi hội GSHT cho biết: Trước đòi hỏi ngày càng khắt khe của các doanh nghiệp vận tải về chất lượng, sự cạnh tranh quyết liệt về giá cả đã áp sát giá sản xuất, cùng với việc quản lý sát sao của cơ quan quản lý nhà nước và sự bùng nổ của công nghệ thông tin nên chất lượng sản phẩm và dịch vụ của các Hội viên được nâng lên rõ rệt.\r\n\r\nTrong 3 năm qua, dù thị ngành GSHT ngày một khó khăn và cạnh tranh gay gắt, giá bán thiết bị GSHT trên thị trường tiến sát tới giá thành sản xuất nhưng chi hội GSHT ngày một lớn mạnh, trưởng thành thông qua việc tiếp nhận hơn 10 hội viên mới\r\n\r\nĐại hội cũng đã thống nhất thông qua phương hướng tổ chức và hoạt động của Chi hội nhiệm kỳ 2016 – 2021. Theo đó, Chi hội sẽ tiếp tục duy trì hoạt động hỗ trợ, tư vấn cho các Hội viên trong những vấn đề liên quan đến các văn bản pháp luật trong ngành GSHT; Phát triển hội viên sâu rộng, nâng cao chất lượng hoạt động của Chi hội. Đồng thời xây dựng và phát triển nhân lực cho lĩnh vực nghiên cứu, sản xuất và lắp đặt thiết bị GSHT.', '1.jpg'),
(15, 'Bộ Công thương công bố lộ trình áp dụng tiêu chuẩn khí thải', '2018-03-29', 'promoprog', 'Theo Bộ Công thương, hiện nay, tất các loại xe ôtô, xe mô tô hai bánh có lắp động cơ nhiệt đang lưu thông và sản xuất mới ở Việt nam có tiêu chuẩn khí thải mức 2 (EURO 2) và sử dụng nhiên liệu xăng hoặc đi-ê-zen có chất lượng tương ứng với các quy chuẩn do Bộ Khoa học và Công nghệ ban hành. Việc áp dụng tiêu chuẩn khí thải theo mức 2 đối với ô tô, xe máy đã thể hiện quan điểm về việc nâng cao chất lượng môi trường không khí của Chính phủ mặc dù điều kiện cụ thể của Việt Nam còn rất nhiều khó khăn khi thực hiện do một số lượng lớn ô tô, xe máy cũ có nguồn gốc xuất xứ từ nhiều nước khác nhau đang được sử dụng.', 'Bộ_Công_thương_công_bố_lộ_trình_áp_dụng_tiêu_chuẩn_khí_thải.jpg');

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

--
-- Dumping data for table `oilandfluid`
--

INSERT INTO `oilandfluid` (`OilandFluidID`, `OilandFluidName`, `OilandFluidPrice`, `OilandFluidDesc`, `OilandFluidImage`) VALUES
(1, 'Castrol', 5000, 'asdasd', 'castrol.jpg'),
(2, 'Shell', 900, 'kokookpa', 'shell.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `partners`
--

CREATE TABLE `partners` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `partners`
--

INSERT INTO `partners` (`id`, `name`, `link`, `img`) VALUES
(1, 'htl', 'google.co.id', 'htl.png'),
(2, 'mailinh', '#', 'mailinh.png'),
(3, 'mobifone', '#', 'mobifone.png'),
(4, 'songha', '#', 'songha.png'),
(5, 'vnpt', '#', 'vnpt.png'),
(6, 'vtv', '#', 'vtv.png');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `ID` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `picture` varchar(255) NOT NULL,
  `tag` varchar(255) NOT NULL,
  `longDesc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`ID`, `name`, `description`, `picture`, `tag`, `longDesc`) VALUES
(1, 'test', 'testing', 'testing.jpg', 'Body', 'long testing'),
(2, 'test1', 'testing1', '', 'Body', ''),
(3, 'test2', 'testing2', '', 'Engine', ''),
(4, 'test3', 'testing3', '', 'Car Rescue', '');

-- --------------------------------------------------------

--
-- Table structure for table `staffs`
--

CREATE TABLE `staffs` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `job` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `twitter` varchar(255) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `linkedin` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staffs`
--

INSERT INTO `staffs` (`id`, `name`, `job`, `img`, `twitter`, `facebook`, `linkedin`) VALUES
(1, 'Kay Garland', 'Lead Designer', 'Kay Garland.jpg', 'kayTwitter', 'kayFacebook', 'kayLinkedin'),
(2, 'Larry Parker', 'Lead Marketer', 'Larry Parker.jpg', 'larryTwitter', 'larryFacebook', 'larryLinkedin'),
(3, 'Diana Pertersen', 'Lead Developer', 'Diana Pertersen.jpg', 'dianaTwitter', 'dianaFacebook', 'dianaLinkedin');

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
-- Indexes for table `accessory`
--
ALTER TABLE `accessory`
  ADD PRIMARY KEY (`AccessoryID`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `carparts`
--
ALTER TABLE `carparts`
  ADD PRIMARY KEY (`CarPartsID`);

--
-- Indexes for table `datas`
--
ALTER TABLE `datas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `datas_about`
--
ALTER TABLE `datas_about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `homeslider`
--
ALTER TABLE `homeslider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `insurance`
--
ALTER TABLE `insurance`
  ADD PRIMARY KEY (`InsuranceID`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oilandfluid`
--
ALTER TABLE `oilandfluid`
  ADD PRIMARY KEY (`OilandFluidID`);

--
-- Indexes for table `partners`
--
ALTER TABLE `partners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `staffs`
--
ALTER TABLE `staffs`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `AccessoryID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `carparts`
--
ALTER TABLE `carparts`
  MODIFY `CarPartsID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `datas`
--
ALTER TABLE `datas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `datas_about`
--
ALTER TABLE `datas_about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `homeslider`
--
ALTER TABLE `homeslider`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `insurance`
--
ALTER TABLE `insurance`
  MODIFY `InsuranceID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `oilandfluid`
--
ALTER TABLE `oilandfluid`
  MODIFY `OilandFluidID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `partners`
--
ALTER TABLE `partners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `staffs`
--
ALTER TABLE `staffs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `usedcars`
--
ALTER TABLE `usedcars`
  MODIFY `UsedCarsID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
