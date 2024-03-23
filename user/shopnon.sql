-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 20, 2024 at 08:01 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shopnon`
--

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `idcomment` int(11) NOT NULL,
  `idkh` int(11) NOT NULL,
  `idhanghoa` int(11) NOT NULL,
  `content` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `luotthich` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`idcomment`, `idkh`, `idhanghoa`, `content`, `luotthich`) VALUES
(1, 8, 9, '  jjjj', 0),
(2, 2, 9, 'adsad', 0);

-- --------------------------------------------------------

--
-- Table structure for table `cthanghoa`
--

CREATE TABLE `cthanghoa` (
  `idhanghoa` int(11) NOT NULL,
  `idsize` int(11) NOT NULL,
  `dongia` float NOT NULL,
  `soluongton` int(11) NOT NULL,
  `hinh` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `mahanghoa` int(11) DEFAULT NULL,
  `giamgia` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cthanghoa`
--

INSERT INTO `cthanghoa` (`idhanghoa`, `idsize`, `dongia`, `soluongton`, `hinh`, `mahanghoa`, `giamgia`) VALUES
(1, 1, 500000, 2, '2.jpg', 0, 400000),
(2, 1, 100000, 9, '3.jpg', 3, 0),
(3, 1, 120000, 5, '1.jpg', 1, 100000),
(4, 1, 500000, 9, '4.jpg', 4, 0),
(5, 2, 500000, 2, '5.jpg', 5, 450000),
(6, 1, 350000, 5, '7.jpg', 7, 300000),
(7, 2, 1000000, 6, '6.jpg', 6, 860000),
(8, 1, 370000, 100, '8.jpg', 8, 0),
(9, 1, 500000, 1, '9.jpg', 9, 450000),
(10, 1, 600000, 20, '10.jpg', 10, 400000),
(11, 2, 370000, 12, '8.jpg', 8, NULL),
(17, 2, 10000, 123, '1.jpg', 11, 1);

-- --------------------------------------------------------

--
-- Table structure for table `cthoadon`
--

CREATE TABLE `cthoadon` (
  `masohd` int(11) NOT NULL,
  `mahh` int(11) NOT NULL,
  `soluongmua` int(11) NOT NULL,
  `size` varchar(100) NOT NULL,
  `thanhtien` int(11) NOT NULL,
  `tinhtrang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cthoadon`
--

INSERT INTO `cthoadon` (`masohd`, `mahh`, `soluongmua`, `size`, `thanhtien`, `tinhtrang`) VALUES
(3, 8, 2, 'Size L (Kích thước lòng nón 57,5 cm)', 740000, 0),
(4, 8, 2, 'Size L (Kích thước lòng nón 57,5 cm)', 740000, 0),
(5, 8, 2, 'Size L (Kích thước lòng nón 57,5 cm)', 740000, 0),
(6, 8, 2, 'Size L (Kích thước lòng nón 57,5 cm)', 740000, 0),
(7, 8, 2, 'Size L (Kích thước lòng nón 57,5 cm)', 740000, 0),
(8, 8, 2, 'Size L (Kích thước lòng nón 57,5 cm)', 740000, 0),
(9, 8, 2, 'Size L (Kích thước lòng nón 57,5 cm)', 740000, 0),
(10, 8, 2, 'Size L (Kích thước lòng nón 57,5 cm)', 740000, 0),
(11, 8, 2, 'Size L (Kích thước lòng nón 57,5 cm)', 740000, 0),
(12, 8, 2, 'Size L (Kích thước lòng nón 57,5 cm)', 740000, 0),
(13, 8, 2, 'Size L (Kích thước lòng nón 57,5 cm)', 740000, 0),
(14, 8, 2, 'Size L (Kích thước lòng nón 57,5 cm)', 740000, 0),
(15, 8, 2, 'Size L (Kích thước lòng nón 57,5 cm)', 740000, 0),
(16, 8, 2, 'Size L (Kích thước lòng nón 57,5 cm)', 740000, 0),
(17, 8, 2, 'Size L (Kích thước lòng nón 57,5 cm)', 740000, 0),
(18, 8, 2, 'Size L (Kích thước lòng nón 57,5 cm)', 740000, 0),
(19, 8, 2, 'Size L (Kích thước lòng nón 57,5 cm)', 740000, 0),
(20, 8, 2, 'Size L (Kích thước lòng nón 57,5 cm)', 740000, 0),
(21, 8, 2, 'Size L (Kích thước lòng nón 57,5 cm)', 740000, 0),
(22, 8, 2, 'Size L (Kích thước lòng nón 57,5 cm)', 740000, 0),
(23, 8, 2, 'Size L (Kích thước lòng nón 57,5 cm)', 740000, 0),
(24, 8, 2, 'Size L (Kích thước lòng nón 57,5 cm)', 740000, 0),
(25, 8, 2, 'Size L (Kích thước lòng nón 57,5 cm)', 740000, 0),
(26, 8, 2, 'Size L (Kích thước lòng nón 57,5 cm)', 740000, 0),
(27, 8, 2, 'Size L (Kích thước lòng nón 57,5 cm)', 740000, 0),
(28, 8, 2, 'Size L (Kích thước lòng nón 57,5 cm)', 740000, 0),
(29, 8, 2, 'Size L (Kích thước lòng nón 57,5 cm)', 740000, 0),
(30, 8, 2, 'Size L (Kích thước lòng nón 57,5 cm)', 740000, 0),
(33, 9, 2, 'Size L (Kích thước lòng nón 57,5 cm)', 1000000, 0),
(34, 8, 1, 'Size M (Kích thước lòng nón 56,5 cm)', 370000, 0),
(34, 9, 2, 'Size L (Kích thước lòng nón 57,5 cm)', 1000000, 0),
(35, 8, 1, 'Size M (Kích thước lòng nón 56,5 cm)', 370000, 0),
(35, 9, 2, 'Size L (Kích thước lòng nón 57,5 cm)', 1000000, 0),
(36, 8, 1, 'Size M (Kích thước lòng nón 56,5 cm)', 370000, 0),
(36, 9, 2, 'Size L (Kích thước lòng nón 57,5 cm)', 1000000, 0),
(37, 8, 1, 'Size M (Kích thước lòng nón 56,5 cm)', 370000, 0),
(37, 9, 2, 'Size L (Kích thước lòng nón 57,5 cm)', 1000000, 0),
(38, 8, 1, 'Size M (Kích thước lòng nón 56,5 cm)', 370000, 0),
(38, 9, 2, 'Size L (Kích thước lòng nón 57,5 cm)', 1000000, 0),
(39, 8, 1, 'Size M (Kích thước lòng nón 56,5 cm)', 370000, 0),
(39, 9, 2, 'Size L (Kích thước lòng nón 57,5 cm)', 1000000, 0),
(40, 8, 1, 'Size M (Kích thước lòng nón 56,5 cm)', 370000, 0),
(40, 9, 2, 'Size L (Kích thước lòng nón 57,5 cm)', 1000000, 0),
(41, 8, 1, 'Size M (Kích thước lòng nón 56,5 cm)', 370000, 0),
(41, 9, 2, 'Size L (Kích thước lòng nón 57,5 cm)', 1000000, 0),
(42, 8, 1, 'Size M (Kích thước lòng nón 56,5 cm)', 370000, 0),
(42, 9, 2, 'Size L (Kích thước lòng nón 57,5 cm)', 1000000, 0),
(43, 8, 3, 'Size L (Kích thước lòng nón 57,5 cm)', 1110000, 0),
(44, 8, 1, 'Size L (Kích thước lòng nón 57,5 cm)', 370000, 0),
(44, 9, 1, 'Size L (Kích thước lòng nón 57,5 cm)', 500000, 0),
(45, 9, 1, 'Size L (Kích thước lòng nón 57,5 cm)', 500000, 0),
(46, 6, 4, '0', 4000000, 0),
(46, 6, 8, 'Size M (Kích thước lòng nón 56,5 cm)', 8000000, 0),
(47, 7, 2, 'Size L (Kích thước lòng nón 57,5 cm)', 700000, 0),
(47, 8, 1, 'Size L (Kích thước lòng nón 57,5 cm)', 370000, 0),
(49, 8, 1, 'Size L (Kích thước lòng nón 57,5 cm)', 370000, 0),
(50, 8, 1, 'Size L (Kích thước lòng nón 57,5 cm)', 370000, 0),
(51, 8, 1, 'Size L (Kích thước lòng nón 57,5 cm)', 370000, 0),
(52, 8, 1, 'Size L (Kích thước lòng nón 57,5 cm)', 370000, 0),
(53, 8, 1, 'Size L (Kích thước lòng nón 57,5 cm)', 370000, 0),
(54, 8, 1, 'Size L (Kích thước lòng nón 57,5 cm)', 370000, 0),
(55, 8, 1, 'Size L (Kích thước lòng nón 57,5 cm)', 370000, 0),
(56, 8, 1, 'Size L (Kích thước lòng nón 57,5 cm)', 370000, 0),
(57, 8, 1, 'Size L (Kích thước lòng nón 57,5 cm)', 370000, 0),
(58, 8, 1, 'Size L (Kích thước lòng nón 57,5 cm)', 370000, 0),
(59, 8, 1, 'Size L (Kích thước lòng nón 57,5 cm)', 370000, 0),
(60, 8, 1, 'Size L (Kích thước lòng nón 57,5 cm)', 370000, 0),
(61, 8, 1, 'Size L (Kích thước lòng nón 57,5 cm)', 370000, 0),
(62, 8, 1, 'Size L (Kích thước lòng nón 57,5 cm)', 370000, 0),
(63, 8, 1, 'Size L (Kích thước lòng nón 57,5 cm)', 370000, 0),
(64, 8, 1, 'Size L (Kích thước lòng nón 57,5 cm)', 370000, 0),
(65, 8, 1, 'Size L (Kích thước lòng nón 57,5 cm)', 370000, 0),
(66, 8, 1, 'Size L (Kích thước lòng nón 57,5 cm)', 370000, 0),
(67, 8, 1, 'Size L (Kích thước lòng nón 57,5 cm)', 370000, 0),
(68, 8, 1, 'Size L (Kích thước lòng nón 57,5 cm)', 370000, 0),
(69, 8, 1, 'Size L (Kích thước lòng nón 57,5 cm)', 370000, 0),
(70, 8, 1, 'Size L (Kích thước lòng nón 57,5 cm)', 370000, 0),
(71, 8, 1, 'Size L (Kích thước lòng nón 57,5 cm)', 370000, 0),
(72, 8, 1, 'Size L (Kích thước lòng nón 57,5 cm)', 370000, 0),
(73, 8, 1, 'Size L (Kích thước lòng nón 57,5 cm)', 370000, 0),
(74, 8, 1, 'Size L (Kích thước lòng nón 57,5 cm)', 370000, 0),
(75, 8, 1, 'Size L (Kích thước lòng nón 57,5 cm)', 370000, 0),
(75, 9, 1, 'Size L (Kích thước lòng nón 57,5 cm)', 500000, 0),
(76, 8, 1, 'Size L (Kích thước lòng nón 57,5 cm)', 370000, 0),
(76, 9, 1, 'Size L (Kích thước lòng nón 57,5 cm)', 500000, 0),
(77, 8, 1, 'Size L (Kích thước lòng nón 57,5 cm)', 370000, 0),
(77, 9, 1, 'Size L (Kích thước lòng nón 57,5 cm)', 500000, 0),
(78, 8, 1, 'Size L (Kích thước lòng nón 57,5 cm)', 370000, 0),
(78, 9, 1, 'Size L (Kích thước lòng nón 57,5 cm)', 500000, 0),
(79, 8, 1, 'Size L (Kích thước lòng nón 57,5 cm)', 370000, 0),
(79, 9, 1, 'Size L (Kích thước lòng nón 57,5 cm)', 500000, 0),
(80, 8, 1, 'Size L (Kích thước lòng nón 57,5 cm)', 370000, 0),
(80, 9, 1, 'Size L (Kích thước lòng nón 57,5 cm)', 500000, 0),
(81, 8, 1, 'Size L (Kích thước lòng nón 57,5 cm)', 370000, 0),
(81, 9, 1, 'Size L (Kích thước lòng nón 57,5 cm)', 500000, 0),
(82, 8, 1, 'Size L (Kích thước lòng nón 57,5 cm)', 370000, 0),
(82, 9, 2, 'Size L (Kích thước lòng nón 57,5 cm)', 1000000, 0),
(83, 8, 1, 'Size L (Kích thước lòng nón 57,5 cm)', 370000, 0),
(83, 9, 2, 'Size L (Kích thước lòng nón 57,5 cm)', 1000000, 0),
(84, 8, 1, 'Size L (Kích thước lòng nón 57,5 cm)', 370000, 0),
(84, 9, 2, 'Size L (Kích thước lòng nón 57,5 cm)', 1000000, 0),
(85, 8, 1, 'Size L (Kích thước lòng nón 57,5 cm)', 370000, 0),
(85, 9, 2, 'Size L (Kích thước lòng nón 57,5 cm)', 1000000, 0),
(86, 8, 1, 'Size L (Kích thước lòng nón 57,5 cm)', 370000, 0),
(86, 9, 2, 'Size L (Kích thước lòng nón 57,5 cm)', 1000000, 0),
(87, 8, 1, 'Size L (Kích thước lòng nón 57,5 cm)', 370000, 0),
(87, 9, 2, 'Size L (Kích thước lòng nón 57,5 cm)', 1000000, 0),
(88, 8, 1, 'Size L (Kích thước lòng nón 57,5 cm)', 370000, 0),
(88, 9, 2, 'Size L (Kích thước lòng nón 57,5 cm)', 1000000, 0),
(89, 8, 1, 'Size L (Kích thước lòng nón 57,5 cm)', 370000, 0),
(89, 9, 2, 'Size L (Kích thước lòng nón 57,5 cm)', 1000000, 0),
(90, 8, 1, 'Size L (Kích thước lòng nón 57,5 cm)', 370000, 0),
(90, 9, 2, 'Size L (Kích thước lòng nón 57,5 cm)', 1000000, 0),
(91, 8, 1, 'Size L (Kích thước lòng nón 57,5 cm)', 370000, 0),
(91, 9, 2, 'Size L (Kích thước lòng nón 57,5 cm)', 1000000, 0),
(92, 8, 1, 'Size L (Kích thước lòng nón 57,5 cm)', 370000, 0),
(92, 9, 2, 'Size L (Kích thước lòng nón 57,5 cm)', 1000000, 0),
(93, 8, 1, 'Size L (Kích thước lòng nón 57,5 cm)', 370000, 0),
(93, 9, 2, 'Size L (Kích thước lòng nón 57,5 cm)', 1000000, 0),
(94, 8, 1, 'Size L (Kích thước lòng nón 57,5 cm)', 370000, 0),
(94, 9, 2, 'Size L (Kích thước lòng nón 57,5 cm)', 1000000, 0),
(95, 8, 1, 'Size L (Kích thước lòng nón 57,5 cm)', 370000, 0),
(95, 9, 2, 'Size L (Kích thước lòng nón 57,5 cm)', 1000000, 0),
(96, 8, 1, 'Size L (Kích thước lòng nón 57,5 cm)', 370000, 0),
(96, 9, 2, 'Size L (Kích thước lòng nón 57,5 cm)', 1000000, 0),
(97, 8, 1, 'Size L (Kích thước lòng nón 57,5 cm)', 370000, 0),
(97, 9, 2, 'Size L (Kích thước lòng nón 57,5 cm)', 1000000, 0),
(98, 8, 1, 'Size L (Kích thước lòng nón 57,5 cm)', 370000, 0),
(98, 9, 2, 'Size L (Kích thước lòng nón 57,5 cm)', 1000000, 0),
(99, 8, 1, 'Size L (Kích thước lòng nón 57,5 cm)', 370000, 0),
(99, 9, 2, 'Size L (Kích thước lòng nón 57,5 cm)', 1000000, 0),
(100, 8, 1, 'Size L (Kích thước lòng nón 57,5 cm)', 370000, 0),
(100, 9, 2, 'Size L (Kích thước lòng nón 57,5 cm)', 1000000, 0),
(101, 8, 1, 'Size L (Kích thước lòng nón 57,5 cm)', 370000, 0),
(102, 7, 1, 'Size L (Kích thước lòng nón 57,5 cm)', 350000, 0),
(102, 8, 1, 'Size L (Kích thước lòng nón 57,5 cm)', 370000, 0),
(103, 7, 1, 'Size L (Kích thước lòng nón 57,5 cm)', 350000, 0),
(103, 8, 1, 'Size L (Kích thước lòng nón 57,5 cm)', 370000, 0),
(104, 7, 1, 'Size L (Kích thước lòng nón 57,5 cm)', 350000, 0),
(104, 8, 1, 'Size L (Kích thước lòng nón 57,5 cm)', 370000, 0),
(105, 7, 1, 'Size L (Kích thước lòng nón 57,5 cm)', 350000, 0),
(105, 8, 1, 'Size L (Kích thước lòng nón 57,5 cm)', 370000, 0),
(106, 7, 1, 'Size L (Kích thước lòng nón 57,5 cm)', 350000, 0),
(106, 8, 1, 'Size L (Kích thước lòng nón 57,5 cm)', 370000, 0),
(107, 7, 1, 'Size L (Kích thước lòng nón 57,5 cm)', 350000, 0),
(107, 8, 1, 'Size L (Kích thước lòng nón 57,5 cm)', 370000, 0),
(108, 7, 1, 'Size L (Kích thước lòng nón 57,5 cm)', 350000, 0),
(108, 8, 1, 'Size L (Kích thước lòng nón 57,5 cm)', 370000, 0),
(109, 7, 1, 'Size L (Kích thước lòng nón 57,5 cm)', 350000, 0),
(109, 8, 1, 'Size L (Kích thước lòng nón 57,5 cm)', 370000, 0),
(110, 7, 1, 'Size L (Kích thước lòng nón 57,5 cm)', 350000, 0),
(110, 8, 1, 'Size L (Kích thước lòng nón 57,5 cm)', 370000, 0),
(111, 7, 1, 'Size L (Kích thước lòng nón 57,5 cm)', 350000, 0),
(111, 8, 1, 'Size L (Kích thước lòng nón 57,5 cm)', 370000, 0),
(112, 7, 1, 'Size L (Kích thước lòng nón 57,5 cm)', 350000, 0),
(112, 8, 1, 'Size L (Kích thước lòng nón 57,5 cm)', 370000, 0),
(113, 7, 1, 'Size L (Kích thước lòng nón 57,5 cm)', 350000, 0),
(113, 8, 1, 'Size L (Kích thước lòng nón 57,5 cm)', 370000, 0),
(114, 7, 1, 'Size L (Kích thước lòng nón 57,5 cm)', 350000, 0),
(114, 8, 1, 'Size L (Kích thước lòng nón 57,5 cm)', 370000, 0),
(115, 7, 1, 'Size L (Kích thước lòng nón 57,5 cm)', 350000, 0),
(115, 8, 1, 'Size L (Kích thước lòng nón 57,5 cm)', 370000, 0),
(116, 7, 1, 'Size L (Kích thước lòng nón 57,5 cm)', 350000, 0),
(116, 8, 27, 'Size L (Kích thước lòng nón 57,5 cm)', 9990000, 0),
(117, 7, 1, 'Size L (Kích thước lòng nón 57,5 cm)', 350000, 0),
(117, 8, 28, 'Size L (Kích thước lòng nón 57,5 cm)', 10360000, 0),
(118, 7, 1, 'Size L (Kích thước lòng nón 57,5 cm)', 350000, 0),
(118, 8, 28, 'Size L (Kích thước lòng nón 57,5 cm)', 10360000, 0),
(119, 7, 1, 'Size L (Kích thước lòng nón 57,5 cm)', 350000, 0),
(119, 8, 28, 'Size L (Kích thước lòng nón 57,5 cm)', 10360000, 0),
(120, 7, 1, 'Size L (Kích thước lòng nón 57,5 cm)', 350000, 0),
(120, 8, 28, 'Size L (Kích thước lòng nón 57,5 cm)', 10360000, 0),
(121, 7, 1, 'Size L (Kích thước lòng nón 57,5 cm)', 350000, 0),
(121, 8, 28, 'Size L (Kích thước lòng nón 57,5 cm)', 10360000, 0),
(122, 7, 1, 'Size L (Kích thước lòng nón 57,5 cm)', 350000, 0),
(122, 8, 28, 'Size L (Kích thước lòng nón 57,5 cm)', 10360000, 0),
(123, 7, 1, 'Size L (Kích thước lòng nón 57,5 cm)', 350000, 0),
(123, 8, 28, 'Size L (Kích thước lòng nón 57,5 cm)', 10360000, 0),
(124, 7, 1, 'Size L (Kích thước lòng nón 57,5 cm)', 350000, 0),
(124, 8, 28, 'Size L (Kích thước lòng nón 57,5 cm)', 10360000, 0),
(125, 7, 1, 'Size L (Kích thước lòng nón 57,5 cm)', 350000, 0),
(125, 8, 28, 'Size L (Kích thước lòng nón 57,5 cm)', 10360000, 0),
(126, 7, 1, 'Size L (Kích thước lòng nón 57,5 cm)', 350000, 0),
(126, 8, 28, 'Size L (Kích thước lòng nón 57,5 cm)', 10360000, 0),
(127, 7, 1, 'Size L (Kích thước lòng nón 57,5 cm)', 350000, 0),
(127, 8, 28, 'Size L (Kích thước lòng nón 57,5 cm)', 10360000, 0),
(128, 7, 1, 'Size L (Kích thước lòng nón 57,5 cm)', 350000, 0),
(128, 8, 28, 'Size L (Kích thước lòng nón 57,5 cm)', 10360000, 0),
(129, 7, 1, 'Size L (Kích thước lòng nón 57,5 cm)', 350000, 0),
(129, 8, 28, 'Size L (Kích thước lòng nón 57,5 cm)', 10360000, 0),
(130, 7, 1, 'Size L (Kích thước lòng nón 57,5 cm)', 350000, 0),
(130, 8, 28, 'Size L (Kích thước lòng nón 57,5 cm)', 10360000, 0),
(131, 7, 1, 'Size L (Kích thước lòng nón 57,5 cm)', 350000, 0),
(131, 8, 28, 'Size L (Kích thước lòng nón 57,5 cm)', 10360000, 0),
(132, 7, 1, 'Size L (Kích thước lòng nón 57,5 cm)', 350000, 0),
(132, 8, 28, 'Size L (Kích thước lòng nón 57,5 cm)', 10360000, 0),
(133, 7, 1, 'Size L (Kích thước lòng nón 57,5 cm)', 350000, 0),
(133, 8, 28, 'Size L (Kích thước lòng nón 57,5 cm)', 10360000, 0),
(134, 7, 1, 'Size L (Kích thước lòng nón 57,5 cm)', 350000, 0),
(134, 8, 28, 'Size L (Kích thước lòng nón 57,5 cm)', 10360000, 0),
(135, 7, 1, 'Size L (Kích thước lòng nón 57,5 cm)', 350000, 0),
(135, 8, 28, 'Size L (Kích thước lòng nón 57,5 cm)', 10360000, 0),
(136, 7, 1, 'Size L (Kích thước lòng nón 57,5 cm)', 350000, 0),
(136, 8, 28, 'Size L (Kích thước lòng nón 57,5 cm)', 10360000, 0),
(137, 7, 1, 'Size L (Kích thước lòng nón 57,5 cm)', 350000, 0),
(137, 8, 28, 'Size L (Kích thước lòng nón 57,5 cm)', 10360000, 0),
(138, 7, 1, 'Size L (Kích thước lòng nón 57,5 cm)', 350000, 0),
(138, 8, 28, 'Size L (Kích thước lòng nón 57,5 cm)', 10360000, 0),
(139, 7, 1, 'Size L (Kích thước lòng nón 57,5 cm)', 350000, 0),
(139, 8, 28, 'Size L (Kích thước lòng nón 57,5 cm)', 10360000, 0),
(140, 7, 1, 'Size L (Kích thước lòng nón 57,5 cm)', 350000, 0),
(140, 8, 28, 'Size L (Kích thước lòng nón 57,5 cm)', 10360000, 0),
(141, 7, 1, 'Size L (Kích thước lòng nón 57,5 cm)', 350000, 0),
(141, 8, 28, 'Size L (Kích thước lòng nón 57,5 cm)', 10360000, 0),
(142, 7, 1, 'Size L (Kích thước lòng nón 57,5 cm)', 350000, 0),
(142, 8, 28, 'Size L (Kích thước lòng nón 57,5 cm)', 10360000, 0),
(143, 7, 1, 'Size L (Kích thước lòng nón 57,5 cm)', 350000, 0),
(143, 8, 28, 'Size L (Kích thước lòng nón 57,5 cm)', 10360000, 0),
(144, 8, 2, 'Size L (Kích thước lòng nón 57,5 cm)', 740000, 0),
(145, 8, 2, 'Size L (Kích thước lòng nón 57,5 cm)', 740000, 0),
(145, 10, 1, 'Size L (Kích thước lòng nón 57,5 cm)', 600000, 0),
(146, 0, 2, 'Size L (Kích thước lòng nón 57,5 cm)', 1000000, 0),
(146, 8, 2, 'Size L (Kích thước lòng nón 57,5 cm)', 740000, 0),
(146, 10, 1, 'Size L (Kích thước lòng nón 57,5 cm)', 600000, 0),
(147, 9, 1, 'Size L (Kích thước lòng nón 57,5 cm)', 500000, 0),
(148, 9, 3, 'Size L (Kích thước lòng nón 57,5 cm)', 1500000, 0),
(149, 8, 1, 'Size L (Kích thước lòng nón 57,5 cm)', 370000, 0),
(150, 8, 1, 'Size L (Kích thước lòng nón 57,5 cm)', 370000, 0),
(151, 8, 1, 'Size L (Kích thước lòng nón 57,5 cm)', 370000, 0),
(152, 8, 1, 'Size L (Kích thước lòng nón 57,5 cm)', 370000, 0),
(153, 8, 1, 'Size L (Kích thước lòng nón 57,5 cm)', 370000, 0),
(154, 8, 1, 'Size L (Kích thước lòng nón 57,5 cm)', 370000, 0),
(155, 8, 1, 'Size L (Kích thước lòng nón 57,5 cm)', 370000, 0),
(156, 8, 1, 'Size L (Kích thước lòng nón 57,5 cm)', 370000, 0),
(157, 8, 1, 'Size L (Kích thước lòng nón 57,5 cm)', 370000, 0),
(158, 8, 1, 'Size L (Kích thước lòng nón 57,5 cm)', 370000, 0),
(159, 8, 1, 'Size L (Kích thước lòng nón 57,5 cm)', 370000, 0),
(160, 8, 1, 'Size L (Kích thước lòng nón 57,5 cm)', 370000, 0),
(161, 8, 1, 'Size L (Kích thước lòng nón 57,5 cm)', 370000, 0),
(162, 8, 8, 'Size L (Kích thước lòng nón 57,5 cm)', 2960000, 0),
(162, 10, 3, 'Size L (Kích thước lòng nón 57,5 cm)', 1800000, 0),
(163, 8, 8, 'Size L (Kích thước lòng nón 57,5 cm)', 2960000, 0),
(163, 10, 3, 'Size L (Kích thước lòng nón 57,5 cm)', 1800000, 0),
(164, 8, 8, 'Size L (Kích thước lòng nón 57,5 cm)', 2960000, 0),
(164, 10, 3, 'Size L (Kích thước lòng nón 57,5 cm)', 1800000, 0),
(165, 8, 8, 'Size L (Kích thước lòng nón 57,5 cm)', 2960000, 0),
(165, 10, 3, 'Size L (Kích thước lòng nón 57,5 cm)', 1800000, 0),
(166, 8, 8, 'Size L (Kích thước lòng nón 57,5 cm)', 2960000, 0),
(166, 10, 3, 'Size L (Kích thước lòng nón 57,5 cm)', 1800000, 0),
(167, 8, 8, 'Size L (Kích thước lòng nón 57,5 cm)', 2960000, 0),
(167, 10, 3, 'Size L (Kích thước lòng nón 57,5 cm)', 1800000, 0),
(168, 8, 8, 'Size L (Kích thước lòng nón 57,5 cm)', 2960000, 0),
(168, 10, 3, 'Size L (Kích thước lòng nón 57,5 cm)', 1800000, 0);

-- --------------------------------------------------------

--
-- Table structure for table `hanghoa`
--

CREATE TABLE `hanghoa` (
  `mahh` int(11) NOT NULL,
  `tenhh` varchar(60) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `maloai` int(11) NOT NULL,
  `soluotxem` int(11) NOT NULL,
  `mota` varchar(2000) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `ngaylap` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hanghoa`
--

INSERT INTO `hanghoa` (`mahh`, `tenhh`, `maloai`, `soluotxem`, `mota`, `ngaylap`) VALUES
(0, 'Nón beret da MDC012D-1', 1, 112, 'Nón da là một biểu tượng của phong cách và đẳng cấp, mang lại sự sang trọng và mạnh mẽ cho người sử dụng. Được chế tác từ chất liệu da cao cấp, nón da không chỉ là một sản phẩm thời trang mà còn là biểu tượng của sự bền bỉ và tinh tế.Da, với vẻ ngoại hình mượt mà và độ bóng tự nhiên, tạo nên sự lịch lãm và sang trọng cho nón. Sự chắc chắn của chất liệu da không chỉ bảo vệ đầu khỏi tác động của thời tiết mà còn tạo nên cảm giác thoải mái khi đeo.', '2023-12-06'),
(1, 'Nón đan tay DH149-', 3, 12, 'Nón đan tay là một sản phẩm thủ công tinh tế, được làm từ sợi tự nhiên hoặc sợi nhân tạo, thông qua quá trình đan móc tinh xảo bằng đôi bàn tay khéo léo của người nghệ nhân. Với sự tỉ mỉ và tâm huyết, nón đan tay không chỉ là một phụ kiện thời trang, mà còn là biểu tượng của sự tinh tế và sáng tạo.\r\n\r\nVật liệu chất lượng cao được sử dụng để tạo ra nón đan tay, giúp nó trở nên nhẹ nhàng, thoáng khí và thoải mái khi đeo. Đặc trưng bởi các hoa văn độc đáo, họa tiết tự nhiên hoặc các chi tiết trang trí được thêm vào bằng cách sử dụng các kỹ thuật đặc biệt.', '2023-12-05'),
(3, 'Nón bảo hiểm SM-XM178', 2, 11, 'Nón bảo hiểm, còn được gọi là mũ bảo hiểm, là một sản phẩm quan trọng giúp bảo vệ đầu của người đội khi tham gia các hoạt động có nguy cơ chấn thương. Được thiết kế với mục đích chính là đảm bảo an toàn và giảm thiểu nguy cơ chấn thương đầu', '2023-12-05'),
(4, 'Nón bảo hiểm SM-DN095', 2, 10, 'Nón bảo hiểm, còn được gọi là mũ bảo hiểm, là một sản phẩm quan trọng giúp bảo vệ đầu của người đội khi tham gia các hoạt động có nguy cơ chấn thương. Được thiết kế với mục đích chính là đảm bảo an toàn và giảm thiểu nguy cơ chấn thương đầu', '2023-12-05'),
(5, 'Nón đan tay DH143-D01', 3, 22, 'Nón đan tay là một sản phẩm thủ công tinh tế, được làm từ sợi tự nhiên hoặc sợi nhân tạo, thông qua quá trình đan móc tinh xảo bằng đôi bàn tay khéo léo của người nghệ nhân. Với sự tỉ mỉ và tâm huyết, nón đan tay không chỉ là một phụ kiện thời trang, mà còn là biểu tượng của sự tinh tế và sáng tạo.\r\n\r\nVật liệu chất lượng cao được sử dụng để tạo ra nón đan tay, giúp nó trở nên nhẹ nhàng, thoáng khí và thoải mái khi đeo. Đặc trưng bởi các hoa văn độc đáo, họa tiết tự nhiên hoặc các chi tiết trang trí được thêm vào bằng cách sử dụng các kỹ thuật đặc biệt.', '2023-12-06'),
(6, 'Nón bucket da MH194AD', 1, 16, 'Nón da là một biểu tượng của phong cách và đẳng cấp, mang lại sự sang trọng và mạnh mẽ cho người sử dụng. Được chế tác từ chất liệu da cao cấp, nón da không chỉ là một sản phẩm thời trang mà còn là biểu tượng của sự bền bỉ và tinh tế.\r\n\r\nDa, với vẻ ngoại hình mượt mà và độ bóng tự nhiên, tạo nên sự lịch lãm và sang trọng cho nón. Sự chắc chắn của chất liệu da không chỉ bảo vệ đầu khỏi tác động của thời tiết mà còn tạo nên cảm giác thoải mái khi đeo.', '2023-12-08'),
(7, 'Mũ bảo hiểm TG-XM179', 1, 31, 'chienne', '2023-12-07'),
(8, 'Mũ bảo hiểm MP-TM447', 2, 14, 'Nón bảo hiểm, còn được gọi là mũ bảo hiểm, là một sản phẩm quan trọng giúp bảo vệ đầu của người đội khi tham gia các hoạt động có nguy cơ chấn thương. Được thiết kế với mục đích chính là đảm bảo an toàn và giảm thiểu nguy cơ chấn thương đầu', '2023-12-07'),
(9, 'Mũ bảo hiểm KP-DN092', 2, 10, 'Nón bảo hiểm, còn được gọi là mũ bảo hiểm, là một sản phẩm quan trọng giúp bảo vệ đầu của người đội khi tham gia các hoạt động có nguy cơ chấn thương. Được thiết kế với mục đích chính là đảm bảo an toàn và giảm thiểu nguy cơ chấn thương đầu', '2023-12-08'),
(10, 'Nón bucket MH022D-NU1', 1, 31, 'Nón da là một biểu tượng của phong cách và đẳng cấp, mang lại sự sang trọng và mạnh mẽ cho người sử dụng. Được chế tác từ chất liệu da cao cấp, nón da không chỉ là một sản phẩm thời trang mà còn là biểu tượng của sự bền bỉ và tinh tế.\r\n\r\nDa, với vẻ ngoại hình mượt mà và độ bóng tự nhiên, tạo nên sự lịch lãm và sang trọng cho nón. Sự chắc chắn của chất liệu da không chỉ bảo vệ đầu khỏi tác động của thời tiết mà còn tạo nên cảm giác thoải mái khi đeo.', '2023-12-07'),
(11, 'Mũ bảo hiểm MP-TM2', 2, 2, '22', '2023-12-07');

-- --------------------------------------------------------

--
-- Table structure for table `hoadon`
--

CREATE TABLE `hoadon` (
  `masohd` int(11) NOT NULL,
  `makh` int(11) NOT NULL,
  `ngaydat` date NOT NULL,
  `tongtien` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hoadon`
--

INSERT INTO `hoadon` (`masohd`, `makh`, `ngaydat`, `tongtien`) VALUES
(47, 11, '2024-02-29', 1070000),
(48, 11, '2024-02-29', 0),
(49, 11, '2024-03-18', 370000),
(50, 11, '2024-03-18', 370000),
(51, 11, '2024-03-18', 370000),
(52, 11, '2024-03-18', 370000),
(53, 11, '2024-03-18', 370000),
(54, 11, '2024-03-18', 370000),
(55, 11, '2024-03-18', 370000),
(56, 11, '2024-03-18', 370000),
(57, 11, '2024-03-18', 370000),
(58, 11, '2024-03-18', 370000),
(59, 11, '2024-03-18', 370000),
(60, 11, '2024-03-18', 370000),
(61, 11, '2024-03-18', 370000),
(62, 11, '2024-03-18', 370000),
(63, 11, '2024-03-18', 370000),
(64, 11, '2024-03-18', 370000),
(65, 11, '2024-03-18', 370000),
(66, 11, '2024-03-18', 370000),
(67, 11, '2024-03-18', 370000),
(68, 11, '2024-03-18', 370000),
(69, 11, '2024-03-18', 370000),
(70, 11, '2024-03-18', 370000),
(71, 11, '2024-03-18', 370000),
(72, 11, '2024-03-18', 370000),
(73, 11, '2024-03-18', 370000),
(74, 11, '2024-03-18', 370000),
(75, 11, '2024-03-18', 870000),
(76, 11, '2024-03-18', 870000),
(77, 11, '2024-03-18', 870000),
(78, 11, '2024-03-18', 870000),
(79, 11, '2024-03-18', 870000),
(80, 11, '2024-03-18', 870000),
(81, 11, '2024-03-18', 870000),
(82, 11, '2024-03-18', 1370000),
(83, 11, '2024-03-18', 1370000),
(84, 11, '2024-03-18', 1370000),
(85, 11, '2024-03-18', 1370000),
(86, 11, '2024-03-18', 1370000),
(87, 11, '2024-03-18', 1370000),
(88, 11, '2024-03-18', 1370000),
(89, 11, '2024-03-18', 1370000),
(90, 11, '2024-03-18', 1370000),
(91, 11, '2024-03-18', 1370000),
(92, 11, '2024-03-18', 1370000),
(93, 11, '2024-03-18', 1370000),
(94, 11, '2024-03-18', 1370000),
(95, 11, '2024-03-18', 1370000),
(96, 11, '2024-03-18', 1370000),
(97, 11, '2024-03-18', 1370000),
(98, 11, '2024-03-18', 1370000),
(99, 11, '2024-03-18', 1370000),
(100, 11, '2024-03-18', 1370000),
(101, 11, '2024-03-18', 370000),
(102, 11, '2024-03-18', 720000),
(103, 11, '2024-03-18', 720000),
(104, 11, '2024-03-18', 720000),
(105, 11, '2024-03-18', 720000),
(106, 11, '2024-03-18', 720000),
(107, 11, '2024-03-18', 720000),
(108, 11, '2024-03-18', 720000),
(109, 11, '2024-03-18', 720000),
(110, 11, '2024-03-18', 720000),
(111, 11, '2024-03-18', 720000),
(112, 11, '2024-03-18', 720000),
(113, 11, '2024-03-18', 720000),
(114, 11, '2024-03-18', 720000),
(115, 11, '2024-03-18', 720000),
(116, 11, '2024-03-18', 10340000),
(117, 11, '2024-03-18', 10710000),
(118, 11, '2024-03-18', 10710000),
(119, 11, '2024-03-18', 10710000),
(120, 11, '2024-03-18', 10710000),
(121, 11, '2024-03-18', 10710000),
(122, 11, '2024-03-18', 10710000),
(123, 11, '2024-03-18', 10710000),
(124, 11, '2024-03-18', 10710000),
(125, 11, '2024-03-18', 10710000),
(126, 11, '2024-03-18', 10710000),
(127, 11, '2024-03-18', 10710000),
(128, 11, '2024-03-18', 10710000),
(129, 11, '2024-03-18', 10710000),
(130, 11, '2024-03-18', 10710000),
(131, 11, '2024-03-18', 10710000),
(132, 11, '2024-03-18', 10710000),
(133, 11, '2024-03-18', 10710000),
(134, 11, '2024-03-18', 10710000),
(135, 11, '2024-03-18', 10710000),
(136, 11, '2024-03-18', 10710000),
(137, 11, '2024-03-18', 10710000),
(138, 11, '2024-03-18', 10710000),
(139, 11, '2024-03-18', 10710000),
(140, 11, '2024-03-18', 10710000),
(141, 11, '2024-03-18', 10710000),
(142, 11, '2024-03-18', 10710000),
(143, 11, '2024-03-18', 10710000),
(144, 11, '2024-03-19', 740000),
(145, 11, '2024-03-19', 1340000),
(146, 11, '2024-03-19', 2340000),
(147, 11, '2024-03-19', 500000),
(148, 11, '2024-03-19', 1500000),
(149, 11, '2024-03-20', 370000),
(150, 11, '2024-03-20', 370000),
(151, 11, '2024-03-20', 370000),
(152, 11, '2024-03-20', 370000),
(153, 11, '2024-03-20', 370000),
(154, 11, '2024-03-20', 370000),
(155, 11, '2024-03-20', 370000),
(156, 11, '2024-03-20', 370000),
(157, 11, '2024-03-20', 370000),
(158, 11, '2024-03-20', 370000),
(159, 11, '2024-03-20', 370000),
(160, 11, '2024-03-20', 370000),
(161, 11, '2024-03-20', 370000),
(162, 11, '2024-03-20', 4760000),
(163, 11, '2024-03-20', 4760000),
(164, 11, '2024-03-20', 4760000),
(165, 11, '2024-03-20', 4760000),
(166, 11, '2024-03-20', 4760000),
(167, 11, '2024-03-20', 4760000),
(168, 11, '2024-03-20', 4760000);

-- --------------------------------------------------------

--
-- Table structure for table `khachhang`
--

CREATE TABLE `khachhang` (
  `makh` int(11) NOT NULL,
  `username` varchar(25) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `matkhau` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `email` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `sodienthoai` varchar(12) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `khachhang`
--

INSERT INTO `khachhang` (`makh`, `username`, `matkhau`, `email`, `sodienthoai`) VALUES
(4, 'chienminhcao', '5320cf35653f1c06b303424eec637b2d', 'dong123@gmail.com', '0908222333'),
(11, 'chien123', '5320cf35653f1c06b303424eec637b2d', 'ncminhchien123@gmail.com', '0907125461'),
(12, '', '2613b85aa3ec9fa4bf4ac4cbee410b70', 'ncminhchien@gmail.com', ''),
(13, 'nhan123', '123', 'nhan123@gmail.com', '0907417214'),
(14, 'chienngu', '5320cf35653f1c06b303424eec637b2d', 'gm@gmail.com', '09083517123');

-- --------------------------------------------------------

--
-- Table structure for table `loai`
--

CREATE TABLE `loai` (
  `maloai` int(11) NOT NULL,
  `tenloai` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `loai`
--

INSERT INTO `loai` (`maloai`, `tenloai`) VALUES
(1, 'Nón da'),
(2, 'Nón bảo hiểm'),
(3, 'Nón đan tay');

-- --------------------------------------------------------

--
-- Table structure for table `nhanvien`
--

CREATE TABLE `nhanvien` (
  `idnv` int(11) NOT NULL,
  `hoten` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `dia` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `username` varchar(250) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `matkhau` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `nhanvien`
--

INSERT INTO `nhanvien` (`idnv`, `hoten`, `dia`, `username`, `matkhau`) VALUES
(1, 'chien', 'hcm', 'admin', '123'),
(2, 'chien', '213', 'admin1', 'mật khẩu mới');

-- --------------------------------------------------------

--
-- Table structure for table `sizenon`
--

CREATE TABLE `sizenon` (
  `idsize` int(11) NOT NULL,
  `size` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sizenon`
--

INSERT INTO `sizenon` (`idsize`, `size`) VALUES
(1, 'Size L (Kích thước lòng nón 57,5 cm)'),
(2, 'Size M (Kích thước lòng nón 56,5 cm)');

-- --------------------------------------------------------

--
-- Table structure for table `star_rating`
--

CREATE TABLE `star_rating` (
  `idhanghoa` int(11) NOT NULL,
  `idkhachhang` int(11) NOT NULL,
  `rating` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`idcomment`);

--
-- Indexes for table `cthanghoa`
--
ALTER TABLE `cthanghoa`
  ADD PRIMARY KEY (`idhanghoa`),
  ADD KEY `FK_size` (`idsize`),
  ADD KEY `FK_ma` (`mahanghoa`);

--
-- Indexes for table `cthoadon`
--
ALTER TABLE `cthoadon`
  ADD PRIMARY KEY (`masohd`,`mahh`,`size`);

--
-- Indexes for table `hanghoa`
--
ALTER TABLE `hanghoa`
  ADD PRIMARY KEY (`mahh`),
  ADD KEY `FK_loai` (`maloai`);

--
-- Indexes for table `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`masohd`),
  ADD KEY `FK_makh` (`makh`);

--
-- Indexes for table `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`makh`);

--
-- Indexes for table `loai`
--
ALTER TABLE `loai`
  ADD PRIMARY KEY (`maloai`);

--
-- Indexes for table `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`idnv`);

--
-- Indexes for table `sizenon`
--
ALTER TABLE `sizenon`
  ADD PRIMARY KEY (`idsize`);

--
-- Indexes for table `star_rating`
--
ALTER TABLE `star_rating`
  ADD PRIMARY KEY (`idhanghoa`,`idkhachhang`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `idcomment` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cthanghoa`
--
ALTER TABLE `cthanghoa`
  MODIFY `idhanghoa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `cthoadon`
--
ALTER TABLE `cthoadon`
  MODIFY `masohd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=169;

--
-- AUTO_INCREMENT for table `hanghoa`
--
ALTER TABLE `hanghoa`
  MODIFY `mahh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `masohd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=169;

--
-- AUTO_INCREMENT for table `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `makh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `loai`
--
ALTER TABLE `loai`
  MODIFY `maloai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `nhanvien`
--
ALTER TABLE `nhanvien`
  MODIFY `idnv` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sizenon`
--
ALTER TABLE `sizenon`
  MODIFY `idsize` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cthanghoa`
--
ALTER TABLE `cthanghoa`
  ADD CONSTRAINT `FK_ma` FOREIGN KEY (`mahanghoa`) REFERENCES `hanghoa` (`mahh`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_size` FOREIGN KEY (`idsize`) REFERENCES `sizenon` (`idsize`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `hanghoa`
--
ALTER TABLE `hanghoa`
  ADD CONSTRAINT `FK_loai` FOREIGN KEY (`maloai`) REFERENCES `loai` (`maloai`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `hoadon`
--
ALTER TABLE `hoadon`
  ADD CONSTRAINT `FK_makh` FOREIGN KEY (`makh`) REFERENCES `khachhang` (`makh`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
