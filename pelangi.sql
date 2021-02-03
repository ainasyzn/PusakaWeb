-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 03, 2021 at 08:11 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.3.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pelangi`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(2) NOT NULL,
  `adName` varchar(255) NOT NULL,
  `adPassword` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(2) NOT NULL,
  `contactName` varchar(255) NOT NULL,
  `contact_no` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id` int(10) NOT NULL,
  `memberName` varchar(255) NOT NULL,
  `posisi` varchar(255) NOT NULL,
  `imej` varchar(255) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `twitter` varchar(255) NOT NULL,
  `gmail` varchar(255) NOT NULL,
  `linkedin` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `partner`
--

CREATE TABLE `partner` (
  `id` int(10) NOT NULL,
  `partnerName` varchar(255) NOT NULL,
  `posisi` varchar(255) NOT NULL,
  `partnerDesc` varchar(255) NOT NULL,
  `partnerImej` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `perkhidmatan`
--

CREATE TABLE `perkhidmatan` (
  `id` int(2) NOT NULL,
  `khidmatName` varchar(255) NOT NULL,
  `khidmatDescription` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `projek`
--

CREATE TABLE `projek` (
  `id` int(10) NOT NULL,
  `projekName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `projek_imej`
--

CREATE TABLE `projek_imej` (
  `id` int(10) NOT NULL,
  `projekid` int(10) NOT NULL,
  `imej` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tentang`
--

CREATE TABLE `tentang` (
  `id` int(2) NOT NULL,
  `pengenalan_desc` varchar(400) NOT NULL,
  `pengenalan_vid_desc` varchar(400) NOT NULL,
  `projek_desc` varchar(400) NOT NULL,
  `team_desc` varchar(400) NOT NULL,
  `jam_bekerja` int(10) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `bilanganprojek` int(10) NOT NULL,
  `bilanganklien` int(10) NOT NULL,
  `SSM` varchar(255) NOT NULL,
  `bilangansuka` int(11) NOT NULL,
  `video` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tentang`
--

INSERT INTO `tentang` (`id`, `pengenalan_desc`, `pengenalan_vid_desc`, `projek_desc`, `team_desc`, `jam_bekerja`, `alamat`, `bilanganprojek`, `bilanganklien`, `SSM`, `bilangansuka`, `video`) VALUES
(1, 'Pusaka Pelangi Sdn Bhd ditubuhkan pada bulan Julai 1993. Syarikat ini ditubuhkan untuk menyediakan perkhidmatan yang secukupnya kepada klien kami dalam bidang gas dan minyak dengan cekap, mapan dan lestari. A team of professional service personals are the', 'Aliquam vestibulum cursus felis. In iaculis iaculis sapien ac condimentum. Vestibulum congue posuere lacus, id tincidunt nisi porta sit amet. Suspendisse et sapien varius, pellentesque dui non, semper orci.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat, dignissimos!\r\nLorem ipsum dolor sit amet, consectetur.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat, dignissimos!\r\nLorem ipsum dolor sit amet, consectetur.', 100, 'No 4, Pusat Perdagangan Jelapang 2 Jelapang Business Centre, Jalan Jelapang, 30000 Ipoh Perak Darul Ridzuan', 1500, 800, '219614-k', 20000, 'test');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partner`
--
ALTER TABLE `partner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `perkhidmatan`
--
ALTER TABLE `perkhidmatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projek`
--
ALTER TABLE `projek`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projek_imej`
--
ALTER TABLE `projek_imej`
  ADD PRIMARY KEY (`id`),
  ADD KEY `projekid` (`projekid`);

--
-- Indexes for table `tentang`
--
ALTER TABLE `tentang`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `partner`
--
ALTER TABLE `partner`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `perkhidmatan`
--
ALTER TABLE `perkhidmatan`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `projek`
--
ALTER TABLE `projek`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `projek_imej`
--
ALTER TABLE `projek_imej`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tentang`
--
ALTER TABLE `tentang`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `projek_imej`
--
ALTER TABLE `projek_imej`
  ADD CONSTRAINT `projek_imej_ibfk_1` FOREIGN KEY (`projekid`) REFERENCES `projek` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
