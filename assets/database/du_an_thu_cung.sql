-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 16, 2024 at 04:45 AM
-- Server version: 8.2.0
-- PHP Version: 8.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `du_an_thu_cung`
--

-- --------------------------------------------------------

--
-- Table structure for table `binh_luan`
--

DROP TABLE IF EXISTS `binh_luan`;
CREATE TABLE IF NOT EXISTS `binh_luan` (
  `id_bl` int NOT NULL AUTO_INCREMENT,
  `ngay_tao` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `noi_dung` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `danh_gia` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `id_hd` int NOT NULL,
  `id_tk` int NOT NULL,
  PRIMARY KEY (`id_bl`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Table structure for table `chi_tiet_hoa_don`
--

DROP TABLE IF EXISTS `chi_tiet_hoa_don`;
CREATE TABLE IF NOT EXISTS `chi_tiet_hoa_don` (
  `id_cthd` int NOT NULL AUTO_INCREMENT,
  `so_luong` int NOT NULL,
  `gia_tien` double(10,2) NOT NULL,
  PRIMARY KEY (`id_cthd`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Table structure for table `chi_tiet_tai_khoan`
--

DROP TABLE IF EXISTS `chi_tiet_tai_khoan`;
CREATE TABLE IF NOT EXISTS `chi_tiet_tai_khoan` (
  `id_cttk` int NOT NULL AUTO_INCREMENT,
  `ho_ten` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `nam_sinh` date NOT NULL,
  `hinh_anh` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `dia_chi` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `sdt` int NOT NULL,
  `id_tk` int NOT NULL,
  PRIMARY KEY (`id_cttk`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Table structure for table `danh_muc`
--

DROP TABLE IF EXISTS `danh_muc`;
CREATE TABLE IF NOT EXISTS `danh_muc` (
  `id_dm` int NOT NULL AUTO_INCREMENT,
  `ten_dm` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  PRIMARY KEY (`id_dm`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `danh_muc`
--

INSERT INTO `danh_muc` (`id_dm`, `ten_dm`) VALUES
(1, 'Chó'),
(2, 'Mèo'),
(3, 'Gà'),
(4, 'Vịt'),
(5, 'Lợn'),
(6, 'Vịt'),
(7, 'Rồng'),
(8, 'Phượng'),
(9, 'Rùa');

-- --------------------------------------------------------

--
-- Table structure for table `gioi_thieu`
--

DROP TABLE IF EXISTS `gioi_thieu`;
CREATE TABLE IF NOT EXISTS `gioi_thieu` (
  `tieu_de` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `noi_dung` text COLLATE utf8mb4_unicode_520_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hoa_don`
--

DROP TABLE IF EXISTS `hoa_don`;
CREATE TABLE IF NOT EXISTS `hoa_don` (
  `id_hd` int NOT NULL,
  `hinh_thuc_thanh_toan` tinyint NOT NULL,
  `tinh_trang_thanh_toan` tinyint NOT NULL,
  `tong_tien` double(10,2) NOT NULL,
  `id_tk` int NOT NULL,
  `id_voucher` int NOT NULL,
  PRIMARY KEY (`id_hd`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Table structure for table `lien_he`
--

DROP TABLE IF EXISTS `lien_he`;
CREATE TABLE IF NOT EXISTS `lien_he` (
  `id_lh` int NOT NULL AUTO_INCREMENT,
  `sdt` int NOT NULL,
  `dia_chi` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  PRIMARY KEY (`id_lh`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mau_sac`
--

DROP TABLE IF EXISTS `mau_sac`;
CREATE TABLE IF NOT EXISTS `mau_sac` (
  `id_ms` int NOT NULL AUTO_INCREMENT,
  `ten_ms` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  PRIMARY KEY (`id_ms`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `mau_sac`
--

INSERT INTO `mau_sac` (`id_ms`, `ten_ms`) VALUES
(1, 'Đen'),
(2, 'Đỏ'),
(3, 'Vàng'),
(4, 'Xanh lá cây'),
(5, 'Xanh nước biển'),
(6, 'Tím'),
(7, 'Trắng'),
(8, 'Hồng');

-- --------------------------------------------------------

--
-- Table structure for table `san_pham`
--

DROP TABLE IF EXISTS `san_pham`;
CREATE TABLE IF NOT EXISTS `san_pham` (
  `id_sp` int NOT NULL AUTO_INCREMENT,
  `ten_sp` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `gia_sp` double(10,2) NOT NULL,
  `tuoi` int NOT NULL,
  `gioi_tinh` tinyint NOT NULL,
  `hinh_anh` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `nguon_goc` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `tiem_chung` tinyint(1) NOT NULL,
  `so_luong` int NOT NULL,
  `ghi_chu` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `ngay_tao` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ngay_cap_nhat` datetime NOT NULL,
  `id_dm` int NOT NULL,
  `id_ms` int NOT NULL,
  PRIMARY KEY (`id_sp`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `san_pham`
--

INSERT INTO `san_pham` (`id_sp`, `ten_sp`, `gia_sp`, `tuoi`, `gioi_tinh`, `hinh_anh`, `nguon_goc`, `tiem_chung`, `so_luong`, `ghi_chu`, `ngay_tao`, `ngay_cap_nhat`, `id_dm`, `id_ms`) VALUES
(1, 'Cairn Terrier', 100000.00, 1, 1, 'Null', 'Mỹ', 1, 10, 'Trung Quốc', '2024-03-14 21:47:17', '0000-00-00 00:00:00', 1, 1),
(2, 'Cairn Terrier', 100000.00, 1, 1, 'Null', 'Mỹ', 1, 10, 'Trung Quốc', '2024-03-14 21:47:33', '0000-00-00 00:00:00', 1, 1),
(3, 'Cairn Terrier', 100000.00, 1, 1, 'Null', 'Mỹ', 1, 10, 'Trung Quốc', '2024-03-14 21:47:33', '0000-00-00 00:00:00', 1, 1),
(4, 'Cairn Terrier', 100000.00, 1, 1, 'Null', 'Mỹ', 1, 10, 'Trung Quốc', '2024-03-14 21:47:33', '0000-00-00 00:00:00', 1, 1),
(5, 'Cairn Terrier', 100000.00, 1, 1, 'Null', 'Mỹ', 1, 10, 'Trung Quốc', '2024-03-14 21:47:33', '0000-00-00 00:00:00', 1, 1),
(6, 'Cairn Terrier', 100000.00, 1, 1, 'Null', 'Mỹ', 1, 10, 'Trung Quốc', '2024-03-14 21:47:33', '0000-00-00 00:00:00', 1, 1),
(7, 'Cairn Terrier', 100000.00, 1, 1, 'Null', 'Mỹ', 1, 10, 'Trung Quốc', '2024-03-14 21:47:33', '0000-00-00 00:00:00', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tai_khoan`
--

DROP TABLE IF EXISTS `tai_khoan`;
CREATE TABLE IF NOT EXISTS `tai_khoan` (
  `id_tk` int NOT NULL AUTO_INCREMENT,
  `email` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `mat_khau` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `quyen` tinyint NOT NULL,
  PRIMARY KEY (`id_tk`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Table structure for table `voucher`
--

DROP TABLE IF EXISTS `voucher`;
CREATE TABLE IF NOT EXISTS `voucher` (
  `id_voucher` int NOT NULL AUTO_INCREMENT,
  `ten_voucher` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `ngay_bat_dau` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ngay_ket_thuc` datetime NOT NULL,
  `giam_gia` double NOT NULL,
  `ghi_chu` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `ma_giam_gia` int NOT NULL,
  `dieu_kien` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `giam_toi_da` int NOT NULL,
  PRIMARY KEY (`id_voucher`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
