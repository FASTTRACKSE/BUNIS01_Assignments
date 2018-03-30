-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 30, 2018 at 04:46 AM
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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
