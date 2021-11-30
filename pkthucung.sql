-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2021 at 05:42 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pkthucung`
--
CREATE DATABASE IF NOT EXISTS `pkthucung` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `pkthucung`;

-- --------------------------------------------------------

--
-- Table structure for table `donhang`
--

CREATE TABLE `donhang` (
  `id_dh` int(11) NOT NULL,
  `id_gh` varchar(100) DEFAULT NULL,
  `id_dvvc` int(11) DEFAULT NULL,
  `id_km` int(11) DEFAULT NULL,
  `ngaydat` datetime DEFAULT NULL,
  `diachigiaohang` varchar(255) DEFAULT NULL,
  `phuongthucthanhtoan` varchar(255) DEFAULT NULL,
  `tongtien` double DEFAULT NULL,
  `tinhtrang` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `donvivanchuyen`
--

CREATE TABLE `donvivanchuyen` (
  `id_dvvc` int(11) NOT NULL,
  `ten_dvvc` varchar(255) DEFAULT NULL,
  `cuocphi` double DEFAULT NULL,
  `display_dvvc` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `giohang`
--

CREATE TABLE `giohang` (
  `id_gh` int(11) NOT NULL,
  `id_sp` int(11) DEFAULT NULL,
  `id_kh` varchar(100) DEFAULT NULL,
  `soluong` int(11) DEFAULT NULL,
  `tongtien` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `khanhhang`
--

CREATE TABLE `khanhhang` (
  `id_kh` varchar(100) NOT NULL,
  `ten_kh` varchar(50) DEFAULT NULL,
  `anh_kh` varchar(255) DEFAULT NULL,
  `ngaysinh_kh` date DEFAULT NULL,
  `gioitinh_kh` varchar(10) DEFAULT NULL,
  `Email_kh` varchar(255) DEFAULT NULL,
  `SDT_kh` char(10) DEFAULT NULL,
  `diachi_kh` varchar(255) DEFAULT NULL,
  `display_kh` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `khanhhang`
--

INSERT INTO `khanhhang` (`id_kh`, `ten_kh`, `anh_kh`, `ngaysinh_kh`, `gioitinh_kh`, `Email_kh`, `SDT_kh`, `diachi_kh`, `display_kh`) VALUES
('KH1', 'Lâm Văn Thái', NULL, '2000-06-09', 'Nam', 'lamvanthai0609@gmail.com', '0963326948', 'Điền Xá, Nam Trực, Nam Định', 'block');

-- --------------------------------------------------------

--
-- Table structure for table `khuyenmai`
--

CREATE TABLE `khuyenmai` (
  `id_km` int(11) NOT NULL,
  `ma_km` varchar(100) DEFAULT NULL,
  `ten_km` varchar(100) DEFAULT NULL,
  `sotien_km` double DEFAULT NULL,
  `sotientoithieu` double DEFAULT NULL,
  `timestart` datetime DEFAULT NULL,
  `timeend` datetime DEFAULT NULL,
  `soluong` int(11) DEFAULT NULL,
  `tinhtrang` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `khuyenmai`
--

INSERT INTO `khuyenmai` (`id_km`, `ma_km`, `ten_km`, `sotien_km`, `sotientoithieu`, `timestart`, `timeend`, `soluong`, `tinhtrang`) VALUES
(1, 'KM20K251120210930', 'Khuyến mãi 20k mừng sinh nhật 09h30 ngày 25/11/2021', 20000, 0, '2021-11-25 09:30:00', '2021-12-15 09:30:00', 10, 'Notstarted'),
(2, 'KM30K251120210930', 'Khuyến mãi 30k mừng sinh nhật 09h30 ngày 25/11/2021', 30000, 50000, '2021-11-25 09:30:00', '2021-12-15 09:30:00', 10, 'Notstarted'),
(3, 'KM40K251120210930', 'Khuyến mãi 40k mừng sinh nhật 09h30 ngày 25/11/2021', 40000, 50000, '2021-11-25 09:30:00', '2021-12-15 09:30:00', 10, 'Notstarted'),
(4, 'KM50K251120210930', 'Khuyến mãi 50k mừng sinh nhật 09h30 ngày 25/11/2021', 50000, 50000, '0000-00-00 00:00:00', '2021-12-15 09:30:00', 10, 'Happenning'),
(5, 'KM20K251120211630', 'Khuyến mãi 20k mừng sinh nhật 16h30 ngày 25/11/2021', 20000, 0, '2021-11-25 16:30:00', '2021-12-15 16:30:00', 10, 'Notstarted'),
(6, 'KM30K251120211630', 'Khuyến mãi 30k mừng sinh nhật 16h30 ngày 25/11/2021', 30000, 50000, '2021-11-25 16:30:00', '2021-12-15 16:30:00', 10, 'Notstarted'),
(7, 'KM40K251120211630', 'Khuyến mãi 40k mừng sinh nhật 16h30 ngày 25/11/2021', 40000, 50000, '2021-11-25 16:30:00', '2021-12-15 16:30:00', 10, 'Notstarted'),
(8, 'KM50K251120211630', 'Khuyến mãi 50k mừng sinh nhật 16h30 ngày 25/11/2021', 50000, 50000, '2021-11-25 16:30:00', '2021-12-15 16:30:00', 10, 'Notstarted'),
(9, 'KM20K251120212130', 'Khuyến mãi 20k mừng sinh nhật 21h30 ngày 25/11/2021', 20000, 0, '2021-11-25 21:30:00', '2021-12-15 21:30:00', 10, 'Notstarted'),
(10, 'KM30K251120212130', 'Khuyến mãi 30k mừng sinh nhật 21h30 ngày 25/11/2021', 30000, 50000, '2021-11-25 21:30:00', '2021-12-15 21:30:00', 10, 'Notstarted'),
(11, 'KM40K251120212130', 'Khuyến mãi 40k mừng sinh nhật 21h30 ngày 25/11/2021', 40000, 50000, '2021-11-25 21:30:00', '2021-12-15 21:30:00', 10, 'Notstarted'),
(12, 'KM50K251120212130', 'Khuyến mãi 50k mừng sinh nhật 21h30 ngày 25/11/2021', 50000, 50000, '2021-11-25 21:30:00', '2021-12-15 21:30:00', 10, 'Notstarted'),
(13, 'KM20K201120212130', 'Khuyến mãi 20k mừng sinh nhật 21h30 ngày 20/11/2021', 20000, 0, '0000-00-00 00:00:00', '2021-12-30 21:30:00', 20, 'Happenning'),
(14, 'KM30K201120212130', 'Khuyến mãi 30k mừng sinh nhật 21h30 ngày 20/11/2021', 30000, 50000, '2021-11-20 21:30:00', '2021-12-30 21:30:00', 10, 'Happenning'),
(15, 'KM40K201120212130', 'Khuyến mãi 40k mừng sinh nhật 21h30 ngày 20/11/2021', 40000, 50000, '2021-11-20 21:30:00', '2021-12-30 21:30:00', 10, 'Happenning'),
(16, 'KM50K201120212130', 'Khuyến mãi 50k mừng sinh nhật 21h30 ngày 20/11/2021', 50000, 50000, '2021-11-20 21:30:00', '2021-12-30 21:30:00', 10, 'Happenning'),
(18, 'testmakm', 'km các thứ các thứ ', 50000, 100000, '2021-11-23 19:17:00', '2021-11-27 19:17:00', 10, 'Notstarted');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id_login` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `chucvu` varchar(255) DEFAULT NULL,
  `id_nv` varchar(100) DEFAULT NULL,
  `id_kh` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id_login`, `username`, `password`, `chucvu`, `id_nv`, `id_kh`) VALUES
(1, 'thai', 'c4ca4238a0b923820dcc509a6f75849b', 'Admin', 'NV1', NULL),
(2, 'thaidui', 'c4ca4238a0b923820dcc509a6f75849b', 'NhanVien', 'NV2', NULL),
(6, 'caothu', 'c4ca4238a0b923820dcc509a6f75849b', 'NhanVien', 'NV3', NULL),
(7, 'dangthuy', 'c4ca4238a0b923820dcc509a6f75849b', 'NhanVien', 'NV4', NULL),
(8, 'quanta', 'c4ca4238a0b923820dcc509a6f75849b', 'NhanVien', 'NV5', NULL),
(9, 'zxc', 'c4ca4238a0b923820dcc509a6f75849b', 'NhanVien', 'NV6', NULL),
(10, '123', 'c4ca4238a0b923820dcc509a6f75849b', 'NhanVien', 'NV7', NULL),
(11, 'khthai', 'c4ca4238a0b923820dcc509a6f75849b', 'KhachHang', NULL, 'KH1');

-- --------------------------------------------------------

--
-- Table structure for table `luong`
--

CREATE TABLE `luong` (
  `id_lg` int(11) NOT NULL,
  `datetimestart_lg` datetime DEFAULT NULL,
  `datetimeend_lg` datetime DEFAULT NULL,
  `luong1h` double DEFAULT NULL,
  `tongtimelam` float DEFAULT NULL,
  `phat` double DEFAULT NULL,
  `thuong` double DEFAULT NULL,
  `tongtien` double DEFAULT NULL,
  `id_nv` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `luong`
--

INSERT INTO `luong` (`id_lg`, `datetimestart_lg`, `datetimeend_lg`, `luong1h`, `tongtimelam`, `phat`, `thuong`, `tongtien`, `id_nv`) VALUES
(1, '2021-10-01 07:00:14', '2021-10-01 17:04:14', 40000, 10, 0, 0, 400000, 'NV1'),
(2, '2021-10-01 07:00:14', '2021-10-01 17:04:14', 40000, 10, 0, 0, 400000, 'NV2'),
(3, '2021-10-01 07:00:14', '2021-10-01 17:04:14', 40000, 10, 0, 0, 400000, 'NV3'),
(4, '2021-10-02 07:00:14', '2021-10-02 17:04:14', 40000, 10, 0, 0, 400000, 'NV1'),
(5, '2021-10-02 07:00:14', '2021-10-02 17:04:14', 40000, 10, 0, 0, 400000, 'NV2'),
(6, '2021-10-02 07:00:14', '2021-10-02 17:04:14', 40000, 10, 0, 0, 400000, 'NV3'),
(7, '2021-10-03 07:00:14', '2021-10-03 17:04:14', 40000, 10, 0, 0, 400000, 'NV1'),
(8, '2021-10-03 07:00:14', '2021-10-03 17:04:14', 40000, 10, 0, 0, 400000, 'NV2'),
(9, '2021-10-03 07:00:14', '2021-10-03 17:04:14', 40000, 10, 0, 0, 400000, 'NV3'),
(10, '2021-10-04 07:00:14', '2021-10-04 17:04:14', 40000, 10, 0, 0, 400000, 'NV1'),
(11, '2021-10-04 07:00:14', '2021-10-04 17:04:14', 40000, 10, 0, 0, 400000, 'NV2'),
(12, '2021-10-04 07:00:14', '2021-10-04 17:04:14', 40000, 10, 0, 0, 400000, 'NV3'),
(13, '2021-10-05 07:00:14', '2021-10-05 17:04:14', 40000, 10, 0, 0, 400000, 'NV1'),
(14, '2021-10-05 07:00:14', '2021-10-05 17:04:14', 40000, 10, 0, 0, 400000, 'NV2'),
(15, '2021-10-05 07:00:14', '2021-10-05 17:04:14', 40000, 10, 0, 0, 400000, 'NV3'),
(16, '2021-10-06 07:00:14', '2021-10-06 17:04:14', 40000, 10, 0, 0, 400000, 'NV1'),
(17, '2021-10-06 07:00:14', '2021-10-06 17:04:14', 40000, 10, 0, 0, 400000, 'NV2'),
(18, '2021-10-06 07:00:14', '2021-10-06 17:04:14', 40000, 10, 0, 0, 400000, 'NV3'),
(19, '2021-10-07 07:00:14', '2021-10-07 17:04:14', 40000, 10, 0, 0, 400000, 'NV1'),
(20, '2021-10-07 07:00:14', '2021-10-07 17:04:14', 40000, 10, 0, 0, 400000, 'NV2'),
(21, '2021-10-07 07:00:14', '2021-10-07 17:04:14', 40000, 10, 0, 0, 400000, 'NV3'),
(22, '2021-10-08 07:00:14', '2021-10-08 17:04:14', 40000, 10, 0, 0, 400000, 'NV1'),
(23, '2021-10-08 07:00:14', '2021-10-08 17:04:14', 40000, 10, 0, 0, 400000, 'NV2'),
(24, '2021-10-08 07:00:14', '2021-10-08 17:04:14', 40000, 10, 0, 0, 400000, 'NV3'),
(25, '2021-10-09 07:00:14', '2021-10-09 17:04:14', 40000, 10, 0, 0, 400000, 'NV1'),
(26, '2021-10-09 07:00:14', '2021-10-09 17:04:14', 40000, 10, 0, 0, 400000, 'NV2'),
(27, '2021-10-09 07:00:14', '2021-10-09 17:04:14', 40000, 10, 0, 0, 400000, 'NV3'),
(28, '2021-10-10 07:00:14', '2021-10-10 17:04:14', 40000, 10, 0, 0, 400000, 'NV1'),
(29, '2021-10-11 07:00:14', '2021-10-11 17:04:14', 40000, 10, 0, 0, 400000, 'NV1'),
(30, '2021-10-11 07:00:14', '2021-10-11 17:04:14', 40000, 10, 0, 0, 400000, 'NV2'),
(31, '2021-10-11 07:00:14', '2021-10-11 17:04:14', 40000, 10, 0, 0, 400000, 'NV3'),
(32, '2021-10-12 07:00:14', '2021-10-12 17:04:14', 40000, 10, 0, 0, 400000, 'NV1'),
(33, '2021-10-13 07:00:14', '2021-10-13 17:04:14', 40000, 10, 0, 0, 400000, 'NV1'),
(34, '2021-10-13 07:00:14', '2021-10-13 17:04:14', 40000, 10, 0, 0, 400000, 'NV2'),
(35, '2021-10-13 07:00:14', '2021-10-13 17:04:14', 40000, 10, 0, 0, 400000, 'NV3'),
(36, '2021-10-14 07:00:14', '2021-10-14 17:04:14', 40000, 10, 0, 0, 400000, 'NV1'),
(37, '2021-10-14 07:00:14', '2021-10-14 17:04:14', 40000, 10, 0, 0, 400000, 'NV2'),
(38, '2021-10-14 07:00:14', '2021-10-14 17:04:14', 40000, 10, 0, 0, 400000, 'NV3'),
(39, '2021-10-15 07:00:14', '2021-10-15 17:04:14', 40000, 10, 0, 0, 400000, 'NV1'),
(40, '2021-10-15 07:00:14', '2021-10-15 17:04:14', 40000, 10, 0, 0, 400000, 'NV2'),
(41, '2021-10-16 07:00:14', '2021-10-16 17:04:14', 40000, 10, 0, 0, 400000, 'NV1'),
(42, '2021-10-16 07:00:14', '2021-10-16 17:04:14', 40000, 10, 0, 0, 400000, 'NV2'),
(43, '2021-10-17 07:00:14', '2021-10-17 17:04:14', 40000, 10, 0, 0, 400000, 'NV1'),
(44, '2021-10-17 07:00:14', '2021-10-17 17:04:14', 40000, 10, 0, 0, 400000, 'NV2'),
(45, '2021-10-17 07:00:14', '2021-10-17 17:04:14', 40000, 10, 0, 0, 400000, 'NV3'),
(46, '2021-10-18 07:00:14', '2021-10-18 17:04:14', 40000, 10, 0, 0, 400000, 'NV1'),
(47, '2021-10-18 07:00:14', '2021-10-18 17:04:14', 40000, 10, 0, 0, 400000, 'NV2'),
(48, '2021-10-18 07:00:14', '2021-10-18 17:04:14', 40000, 10, 0, 0, 400000, 'NV3'),
(49, '2021-10-19 07:00:14', '2021-10-19 17:04:14', 40000, 10, 0, 0, 400000, 'NV1'),
(50, '2021-10-19 07:00:14', '2021-10-19 17:04:14', 40000, 10, 0, 0, 400000, 'NV2'),
(51, '2021-10-19 07:00:14', '2021-10-19 17:04:14', 40000, 10, 0, 0, 400000, 'NV3'),
(52, '2021-10-20 07:00:14', '2021-10-20 17:04:14', 40000, 10, 0, 0, 400000, 'NV1'),
(53, '2021-10-20 07:00:14', '2021-10-20 17:04:14', 40000, 10, 0, 0, 400000, 'NV2'),
(54, '2021-10-20 07:00:14', '2021-10-20 17:04:14', 40000, 10, 0, 0, 400000, 'NV3'),
(55, '2021-10-21 07:00:14', '2021-10-21 17:04:14', 40000, 10, 0, 0, 400000, 'NV1'),
(56, '2021-10-21 07:00:14', '2021-10-21 17:04:14', 40000, 10, 0, 0, 400000, 'NV2'),
(57, '2021-10-21 07:00:14', '2021-10-21 17:04:14', 40000, 10, 0, 0, 400000, 'NV3'),
(58, '2021-10-22 07:00:14', '2021-10-22 17:04:14', 40000, 10, 0, 0, 400000, 'NV1'),
(59, '2021-10-22 07:00:14', '2021-10-22 17:04:14', 40000, 10, 0, 0, 400000, 'NV2'),
(60, '2021-10-22 07:00:14', '2021-10-22 17:04:14', 40000, 10, 0, 0, 400000, 'NV3'),
(61, '2021-10-23 07:00:14', '2021-10-23 17:04:14', 40000, 10, 0, 0, 400000, 'NV1'),
(62, '2021-10-23 07:00:14', '2021-10-23 17:04:14', 40000, 10, 0, 0, 400000, 'NV2'),
(63, '2021-10-23 07:00:14', '2021-10-23 17:04:14', 40000, 10, 0, 0, 400000, 'NV3'),
(64, '2021-10-24 07:00:14', '2021-10-24 17:04:14', 40000, 10, 0, 0, 400000, 'NV1'),
(65, '2021-10-24 07:00:14', '2021-10-24 17:04:14', 40000, 10, 0, 0, 400000, 'NV2'),
(66, '2021-10-24 07:00:14', '2021-10-24 17:04:14', 40000, 10, 0, 0, 400000, 'NV3'),
(67, '2021-10-25 07:00:14', '2021-10-25 17:04:14', 40000, 10, 0, 0, 400000, 'NV1'),
(68, '2021-10-25 07:00:14', '2021-10-25 17:04:14', 40000, 10, 0, 0, 400000, 'NV2'),
(69, '2021-10-25 07:00:14', '2021-10-25 17:04:14', 40000, 10, 0, 0, 400000, 'NV3'),
(70, '2021-10-26 07:00:14', '2021-10-26 17:04:14', 40000, 10, 0, 0, 400000, 'NV1'),
(71, '2021-10-26 07:00:14', '2021-10-26 17:04:14', 40000, 10, 0, 0, 400000, 'NV2'),
(72, '2021-10-26 07:00:14', '2021-10-26 17:04:14', 40000, 10, 0, 0, 400000, 'NV3'),
(73, '2021-10-27 07:00:14', '2021-10-27 17:04:14', 40000, 10, 0, 0, 400000, 'NV1'),
(74, '2021-10-27 07:00:14', '2021-10-27 17:04:14', 40000, 10, 0, 0, 400000, 'NV2'),
(75, '2021-10-27 07:00:14', '2021-10-27 17:04:14', 40000, 10, 0, 0, 400000, 'NV3'),
(76, '2021-10-28 07:00:14', '2021-10-28 17:04:14', 40000, 10, 0, 0, 400000, 'NV1'),
(77, '2021-10-28 07:00:14', '2021-10-28 17:04:14', 40000, 10, 0, 0, 400000, 'NV2'),
(78, '2021-10-28 07:00:14', '2021-10-28 17:04:14', 40000, 10, 0, 0, 400000, 'NV3'),
(79, '2021-10-29 07:00:14', '2021-10-29 17:04:14', 40000, 10, 0, 0, 400000, 'NV1'),
(80, '2021-10-29 07:00:14', '2021-10-29 17:04:14', 40000, 10, 0, 0, 400000, 'NV2'),
(81, '2021-10-29 07:00:14', '2021-10-29 17:04:14', 40000, 10, 0, 0, 400000, 'NV3'),
(82, '2021-10-30 07:00:14', '2021-10-30 17:04:14', 40000, 10, 0, 0, 400000, 'NV1'),
(83, '2021-10-30 07:00:14', '2021-10-30 17:04:14', 40000, 10, 0, 0, 400000, 'NV2'),
(84, '2021-10-30 07:00:14', '2021-10-30 17:04:14', 40000, 10, 0, 0, 400000, 'NV3');

-- --------------------------------------------------------

--
-- Table structure for table `nhacungcap`
--

CREATE TABLE `nhacungcap` (
  `id_ncc` int(11) NOT NULL,
  `ten_ncc` varchar(200) DEFAULT NULL,
  `Email_ncc` varchar(255) DEFAULT NULL,
  `SDT_ncc` char(10) DEFAULT NULL,
  `diachi_ncc` varchar(255) DEFAULT NULL,
  `display_ncc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nhacungcap`
--

INSERT INTO `nhacungcap` (`id_ncc`, `ten_ncc`, `Email_ncc`, `SDT_ncc`, `diachi_ncc`, `display_ncc`) VALUES
(1, 'Cty TNHH Việt Thái', 'vietthai159@gmail', '0396485769', 'Gia Lâm - Hà Nội', 'block'),
(2, 'Cty TNHH Phú Thái', 'phuthai014@gmail', '0985147436', 'Hoài Đức - Hà Nội', 'block'),
(3, 'Cty TNHH Hoàng Lan', 'hoanglan@gmail', '0963745846', 'Gia Lâm - Hà Nội', 'block'),
(4, 'Cty TNHH Nhật Hoàng', 'nhathoang756@gmail', '0369748034', 'Hải Hậu - Nam Định', 'block'),
(5, 'Cty TNHH Hoàng Hà', 'hoangha2587@gmail', '0824964321', 'Hà Nội', 'block'),
(6, 'Cty TNHH Thức ăn Nhật Mai', 'nhatmai4566@gmail', '0874456982', 'Hà Nội', 'none'),
(7, 'Haki PetToys', 'hakipettoy@gmail.com', '0934344566', '77, Tôn Đức Thắng, Đống Đa, Hà Nội', 'block'),
(8, 'Hill Pet', 'hillpet@gmail.com', '0234345456', '123 Nguyễn Trãi, Thanh Xuân, Hà Nội', 'block');

-- --------------------------------------------------------

--
-- Table structure for table `nhanvien`
--

CREATE TABLE `nhanvien` (
  `id_nv` varchar(100) NOT NULL,
  `ten_nv` varchar(50) DEFAULT NULL,
  `anh_nv` varchar(255) DEFAULT NULL,
  `ngaysinh_nv` date DEFAULT NULL,
  `gioitinh_nv` varchar(10) DEFAULT NULL,
  `Email_nv` varchar(255) DEFAULT NULL,
  `SDT_nv` char(10) DEFAULT NULL,
  `chucvu_nv` varchar(30) DEFAULT NULL,
  `diachi_nv` varchar(255) DEFAULT NULL,
  `display_nv` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nhanvien`
--

INSERT INTO `nhanvien` (`id_nv`, `ten_nv`, `anh_nv`, `ngaysinh_nv`, `gioitinh_nv`, `Email_nv`, `SDT_nv`, `chucvu_nv`, `diachi_nv`, `display_nv`) VALUES
('NV1', 'Lâm Văn Thái', NULL, '2000-09-06', 'Nam', 'lamvanthai0609@gmail.com', '0963326948', 'NV Kho', 'Xóm 18, Phú Hào, Điền Xá, Nam Trực, Nam Định', 'block'),
('NV2', 'Lâm Thái', '../../../img/241281711_2377421639058390_7169646685551476486_n-20211119-030230.jpg', '2000-09-06', 'Nam', 'lamvanthai0609@gmail.com', '0934344566', 'NV Kho', 'Nam Định', 'block'),
('NV3', 'Thủ Cao', '', '2021-11-07', 'Nam', 'lamvanthai0609@gmail.com', '0934344566', 'NV Kho', 'Nam Định', 'none'),
('NV4', 'Đặng Thúy', '', '2000-01-18', 'Nam', 'thuy@gmail.com', '0234345456', 'NV Kho', 'Hà Nội', 'block'),
('NV5', 'Tạ Quân', '', '2021-11-07', 'Nam', 'quantata@gmail.com', '123', 'NV Kho', 'Tuyên Quang', 'block'),
('NV6', 'zxc zxc', '', '2021-11-15', 'Nam', 'khach1@gm', '123', 'NV Kho', 'Nam Định', 'none'),
('NV7', '123 123', '', '0000-00-00', 'Nam', 'lamvanthai0609@gmail.com', '123', 'NV Kho', '123', 'none');

-- --------------------------------------------------------

--
-- Table structure for table `phieunhap`
--

CREATE TABLE `phieunhap` (
  `id_pn` int(11) NOT NULL,
  `id_sp` int(11) DEFAULT NULL,
  `id_ncc` int(11) DEFAULT NULL,
  `ngaynhap` datetime DEFAULT NULL,
  `soluong` int(11) DEFAULT NULL,
  `dongianhap` double DEFAULT NULL,
  `tongtien` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `id_sp` int(11) NOT NULL,
  `ten_sp` varchar(255) DEFAULT NULL,
  `anh_sp` varchar(255) DEFAULT NULL,
  `solgton_sp` int(11) DEFAULT NULL,
  `mota` varchar(10000) DEFAULT NULL,
  `theloai_sp` varchar(30) DEFAULT NULL,
  `display_sp` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `spdochoi`
--

CREATE TABLE `spdochoi` (
  `id_dc` int(11) NOT NULL,
  `id_sp` int(11) DEFAULT NULL,
  `dongia` float DEFAULT NULL,
  `mau` varchar(50) DEFAULT NULL,
  `size` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `spthucan`
--

CREATE TABLE `spthucan` (
  `id_ta` int(11) NOT NULL,
  `id_sp` int(11) DEFAULT NULL,
  `dongia` double DEFAULT NULL,
  `ngaysx` date DEFAULT NULL,
  `hansd` date DEFAULT NULL,
  `khoiluong` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ttkhinhanhang`
--

CREATE TABLE `ttkhinhanhang` (
  `id_ttnh` int(11) NOT NULL,
  `id_dh` int(11) DEFAULT NULL,
  `ngaythanhtoan` datetime DEFAULT NULL,
  `tinhtrangthutien` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tttructuyen`
--

CREATE TABLE `tttructuyen` (
  `id_tttt` int(11) NOT NULL,
  `id_dh` int(11) DEFAULT NULL,
  `ngaythanhtoan` datetime DEFAULT NULL,
  `loaithanhtoan` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`id_dh`),
  ADD KEY `id_dvvc` (`id_dvvc`),
  ADD KEY `id_km` (`id_km`);

--
-- Indexes for table `donvivanchuyen`
--
ALTER TABLE `donvivanchuyen`
  ADD PRIMARY KEY (`id_dvvc`);

--
-- Indexes for table `giohang`
--
ALTER TABLE `giohang`
  ADD PRIMARY KEY (`id_gh`),
  ADD KEY `id_sp` (`id_sp`),
  ADD KEY `id_kh` (`id_kh`);

--
-- Indexes for table `khanhhang`
--
ALTER TABLE `khanhhang`
  ADD PRIMARY KEY (`id_kh`);

--
-- Indexes for table `khuyenmai`
--
ALTER TABLE `khuyenmai`
  ADD PRIMARY KEY (`id_km`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id_login`),
  ADD KEY `id_nv` (`id_nv`),
  ADD KEY `id_kh` (`id_kh`);

--
-- Indexes for table `luong`
--
ALTER TABLE `luong`
  ADD PRIMARY KEY (`id_lg`),
  ADD KEY `id_nv` (`id_nv`);

--
-- Indexes for table `nhacungcap`
--
ALTER TABLE `nhacungcap`
  ADD PRIMARY KEY (`id_ncc`);

--
-- Indexes for table `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`id_nv`);

--
-- Indexes for table `phieunhap`
--
ALTER TABLE `phieunhap`
  ADD PRIMARY KEY (`id_pn`),
  ADD KEY `id_sp` (`id_sp`),
  ADD KEY `id_ncc` (`id_ncc`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id_sp`);

--
-- Indexes for table `spdochoi`
--
ALTER TABLE `spdochoi`
  ADD PRIMARY KEY (`id_dc`),
  ADD KEY `id_sp` (`id_sp`);

--
-- Indexes for table `spthucan`
--
ALTER TABLE `spthucan`
  ADD PRIMARY KEY (`id_ta`),
  ADD KEY `id_sp` (`id_sp`);

--
-- Indexes for table `ttkhinhanhang`
--
ALTER TABLE `ttkhinhanhang`
  ADD PRIMARY KEY (`id_ttnh`),
  ADD KEY `id_dh` (`id_dh`);

--
-- Indexes for table `tttructuyen`
--
ALTER TABLE `tttructuyen`
  ADD PRIMARY KEY (`id_tttt`),
  ADD KEY `id_dh` (`id_dh`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `donhang`
--
ALTER TABLE `donhang`
  MODIFY `id_dh` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `donvivanchuyen`
--
ALTER TABLE `donvivanchuyen`
  MODIFY `id_dvvc` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `giohang`
--
ALTER TABLE `giohang`
  MODIFY `id_gh` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `khuyenmai`
--
ALTER TABLE `khuyenmai`
  MODIFY `id_km` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id_login` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `luong`
--
ALTER TABLE `luong`
  MODIFY `id_lg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT for table `nhacungcap`
--
ALTER TABLE `nhacungcap`
  MODIFY `id_ncc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `phieunhap`
--
ALTER TABLE `phieunhap`
  MODIFY `id_pn` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id_sp` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `spdochoi`
--
ALTER TABLE `spdochoi`
  MODIFY `id_dc` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `spthucan`
--
ALTER TABLE `spthucan`
  MODIFY `id_ta` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ttkhinhanhang`
--
ALTER TABLE `ttkhinhanhang`
  MODIFY `id_ttnh` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tttructuyen`
--
ALTER TABLE `tttructuyen`
  MODIFY `id_tttt` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `donhang`
--
ALTER TABLE `donhang`
  ADD CONSTRAINT `donhang_ibfk_1` FOREIGN KEY (`id_dvvc`) REFERENCES `donvivanchuyen` (`id_dvvc`),
  ADD CONSTRAINT `donhang_ibfk_2` FOREIGN KEY (`id_km`) REFERENCES `khuyenmai` (`id_km`);

--
-- Constraints for table `giohang`
--
ALTER TABLE `giohang`
  ADD CONSTRAINT `giohang_ibfk_1` FOREIGN KEY (`id_sp`) REFERENCES `sanpham` (`id_sp`),
  ADD CONSTRAINT `giohang_ibfk_2` FOREIGN KEY (`id_kh`) REFERENCES `khanhhang` (`id_kh`);

--
-- Constraints for table `login`
--
ALTER TABLE `login`
  ADD CONSTRAINT `login_ibfk_1` FOREIGN KEY (`id_nv`) REFERENCES `nhanvien` (`id_nv`),
  ADD CONSTRAINT `login_ibfk_2` FOREIGN KEY (`id_kh`) REFERENCES `khanhhang` (`id_kh`);

--
-- Constraints for table `luong`
--
ALTER TABLE `luong`
  ADD CONSTRAINT `luong_ibfk_1` FOREIGN KEY (`id_nv`) REFERENCES `nhanvien` (`id_nv`);

--
-- Constraints for table `phieunhap`
--
ALTER TABLE `phieunhap`
  ADD CONSTRAINT `phieunhap_ibfk_1` FOREIGN KEY (`id_sp`) REFERENCES `sanpham` (`id_sp`),
  ADD CONSTRAINT `phieunhap_ibfk_2` FOREIGN KEY (`id_ncc`) REFERENCES `nhacungcap` (`id_ncc`);

--
-- Constraints for table `spdochoi`
--
ALTER TABLE `spdochoi`
  ADD CONSTRAINT `spdochoi_ibfk_1` FOREIGN KEY (`id_sp`) REFERENCES `sanpham` (`id_sp`);

--
-- Constraints for table `spthucan`
--
ALTER TABLE `spthucan`
  ADD CONSTRAINT `spthucan_ibfk_1` FOREIGN KEY (`id_sp`) REFERENCES `sanpham` (`id_sp`);

--
-- Constraints for table `ttkhinhanhang`
--
ALTER TABLE `ttkhinhanhang`
  ADD CONSTRAINT `ttkhinhanhang_ibfk_1` FOREIGN KEY (`id_dh`) REFERENCES `donhang` (`id_dh`);

--
-- Constraints for table `tttructuyen`
--
ALTER TABLE `tttructuyen`
  ADD CONSTRAINT `tttructuyen_ibfk_1` FOREIGN KEY (`id_dh`) REFERENCES `donhang` (`id_dh`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
