-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 09, 2022 at 10:42 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `1951064201_kttv_bdkh`
--

-- --------------------------------------------------------

--
-- Table structure for table `duan`
--

CREATE TABLE `duan` (
  `maduan` int(20) NOT NULL,
  `tenduan` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `namthuchien` year(4) NOT NULL,
  `linhvuc` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nhiemvu` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `coquanthuchien` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `duan`
--

INSERT INTO `duan` (`maduan`, `tenduan`, `namthuchien`, `linhvuc`, `nhiemvu`, `coquanthuchien`) VALUES
(0, 'Xây dựng và triển khai kế hoạch hành động ứng phó với biến đổi khí hậu tỉnh Bắc Ninh', 2020, 'Biến đổi khí hậu', 'Nghiên cứu biến đổi khí hậu', 'Trung tâm ứng phó biến đổi khí hậu '),
(1, 'Đánh giá mức độ biến đổi khí và xây dựng kịch bản biến đổi khí hậu tỉnh Bắc Ninh', 2020, 'Biến đổi khí hậu', 'Nghiên cứu biến đổi khí hậu', 'Trung tâm ứng phó biến đổi khí hậu');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `duan`
--
ALTER TABLE `duan`
  ADD PRIMARY KEY (`maduan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
