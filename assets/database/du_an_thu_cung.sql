-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 21, 2024 at 03:20 AM
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
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `danh_muc`
--

INSERT INTO `danh_muc` (`id_dm`, `ten_dm`) VALUES
(18, 'Chó'),
(19, 'Mèo'),
(20, 'Gà'),
(22, 'Rồng'),
(23, 'Phượng'),
(24, 'Cá'),
(25, 'Hươu');

-- --------------------------------------------------------

--
-- Table structure for table `gioi_thieu`
--

DROP TABLE IF EXISTS `gioi_thieu`;
CREATE TABLE IF NOT EXISTS `gioi_thieu` (
  `id_gt` int NOT NULL,
  `tieu_de` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `noi_dung` text COLLATE utf8mb4_unicode_520_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gioi_tinh`
--

DROP TABLE IF EXISTS `gioi_tinh`;
CREATE TABLE IF NOT EXISTS `gioi_tinh` (
  `id_gt` int NOT NULL AUTO_INCREMENT,
  `ten_gt` varchar(50) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  PRIMARY KEY (`id_gt`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `gioi_tinh`
--

INSERT INTO `gioi_tinh` (`id_gt`, `ten_gt`) VALUES
(1, 'Đực'),
(2, 'Cái');

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
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `mau_sac`
--

INSERT INTO `mau_sac` (`id_ms`, `ten_ms`) VALUES
(11, 'Trắng'),
(12, 'Vàng'),
(13, 'Hồng'),
(14, 'Tím'),
(15, 'Xanh lá cây'),
(16, 'Xanh nước biển'),
(17, 'Nâu đất');

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
  `hinh_anh` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `nguon_goc` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `so_luong` int NOT NULL,
  `luot_xem` int DEFAULT NULL,
  `ghi_chu` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci,
  `ngay_tao` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ngay_cap_nhat` datetime DEFAULT NULL,
  `id_dm` int NOT NULL,
  `id_ms` int NOT NULL,
  `id_gt` int NOT NULL,
  `id_tc` int NOT NULL,
  PRIMARY KEY (`id_sp`),
  KEY `fk_sanpham_mausac` (`id_ms`),
  KEY `fk_sanpham_danhmuc` (`id_dm`),
  KEY `fk_sanpham_gioitinh` (`id_gt`),
  KEY `fk_sanpham_tiemchung` (`id_tc`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `san_pham`
--

INSERT INTO `san_pham` (`id_sp`, `ten_sp`, `gia_sp`, `tuoi`, `hinh_anh`, `nguon_goc`, `so_luong`, `luot_xem`, `ghi_chu`, `ngay_tao`, `ngay_cap_nhat`, `id_dm`, `id_ms`, `id_gt`, `id_tc`) VALUES
(18, 'Alaska', 100000.00, 1, 'Alaska.jpg', 'Mỹ', 10, 100, 'Nhập khẩu từ Mỹ', '2024-03-18 19:33:44', NULL, 18, 17, 1, 2),
(19, 'Hươu cao cổ', 90000.00, 40, 'Alaska.jpg', 'Châu Âu', 19, 0, 'None', '2024-03-18 22:05:26', NULL, 25, 12, 2, 2),
(20, 'Hươu', 100000.00, 1, 'Alaska.jpg', 'Mỹ', 10, 0, 'none', '2024-03-19 19:13:04', NULL, 18, 14, 1, 2),
(21, 'Hươu', 100000.00, 1, 'Alaska.jpg', 'Mỹ', 10, 0, 'none', '2024-03-19 19:13:16', NULL, 18, 14, 1, 2),
(22, 'Hươu', 100000.00, 1, 'null', 'Mỹ', 10, 0, 'none', '2024-03-19 19:13:16', NULL, 18, 14, 1, 2),
(23, 'Hươu', 100000.00, 1, 'null', 'Mỹ', 10, 0, 'none', '2024-03-19 19:13:16', NULL, 18, 14, 1, 2),
(24, 'Hươu', 100000.00, 1, 'null', 'Mỹ', 10, 0, 'none', '2024-03-19 19:13:16', NULL, 18, 14, 1, 2),
(25, 'Hươu', 100000.00, 1, 'null', 'Mỹ', 10, 0, 'none', '2024-03-19 19:13:16', NULL, 18, 14, 1, 2),
(26, 'Hươu', 100000.00, 1, 'null', 'Mỹ', 10, 0, 'none', '2024-03-19 19:13:16', NULL, 18, 14, 1, 2),
(27, 'Hươu', 100000.00, 1, 'null', 'Mỹ', 10, 0, 'none', '2024-03-19 19:13:16', NULL, 18, 14, 1, 2),
(28, 'Hươu', 100000.00, 1, 'null', 'Mỹ', 10, 0, 'none', '2024-03-19 19:13:16', NULL, 18, 14, 1, 2),
(29, 'Hươu', 100000.00, 1, 'null', 'Mỹ', 10, 0, 'none', '2024-03-19 19:13:16', NULL, 18, 14, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tai_khoan`
--

DROP TABLE IF EXISTS `tai_khoan`;
CREATE TABLE IF NOT EXISTS `tai_khoan` (
  `id_tk` int NOT NULL AUTO_INCREMENT,
  `ten_nguoi_dung` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `mat_khau` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `quyen` tinyint DEFAULT NULL,
  PRIMARY KEY (`id_tk`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `tai_khoan`
--

INSERT INTO `tai_khoan` (`id_tk`, `ten_nguoi_dung`, `email`, `mat_khau`, `quyen`) VALUES
(1, '', 'vuongvu10899@gmail.com', '1234', NULL),
(2, '', 'vuongvu10899@gmail.com', '1234', NULL),
(3, '', 'vuongvu10899@gmail.com', '1234', NULL),
(4, '', 'vuongvu10899@gmail.com', '1234', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tiem_chung`
--

DROP TABLE IF EXISTS `tiem_chung`;
CREATE TABLE IF NOT EXISTS `tiem_chung` (
  `id_tc` int NOT NULL AUTO_INCREMENT,
  `trang_thai` varchar(100) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  PRIMARY KEY (`id_tc`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `tiem_chung`
--

INSERT INTO `tiem_chung` (`id_tc`, `trang_thai`) VALUES
(1, 'Đã tiêm'),
(2, 'Chưa tiêm');

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

--
-- Constraints for dumped tables
--

--
-- Constraints for table `san_pham`
--
ALTER TABLE `san_pham`
  ADD CONSTRAINT `fk_sanpham_danhmuc` FOREIGN KEY (`id_dm`) REFERENCES `danh_muc` (`id_dm`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `fk_sanpham_gioitinh` FOREIGN KEY (`id_gt`) REFERENCES `gioi_tinh` (`id_gt`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `fk_sanpham_mausac` FOREIGN KEY (`id_ms`) REFERENCES `mau_sac` (`id_ms`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `fk_sanpham_tiemchung` FOREIGN KEY (`id_tc`) REFERENCES `tiem_chung` (`id_tc`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
