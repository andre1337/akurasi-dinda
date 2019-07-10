-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 07, 2019 at 11:34 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `00f_unsada_seleksi_beasiswa`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_datalatih`
--

CREATE TABLE IF NOT EXISTS `tbl_datalatih` (
`id_datalatih` int(8) NOT NULL,
  `ipk` float NOT NULL,
  `prestasi` varchar(40) NOT NULL,
  `penghasilan` varchar(30) NOT NULL,
  `jumlah_tanggungan` varchar(30) NOT NULL,
  `organisasi` varchar(30) NOT NULL,
  `penilaian` varchar(30) NOT NULL,
  `keterangan` text NOT NULL,
  `n1` varchar(15) NOT NULL,
  `n2` varchar(15) NOT NULL,
  `n3` varchar(15) NOT NULL,
  `n4` varchar(15) NOT NULL,
  `n5` varchar(15) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=101 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_datalatih`
--

INSERT INTO `tbl_datalatih` (`id_datalatih`, `ipk`, `prestasi`, `penghasilan`, `jumlah_tanggungan`, `organisasi`, `penilaian`, `keterangan`, `n1`, `n2`, `n3`, `n4`, `n5`) VALUES
(1, 2.9, 'Tidak Ada', '2500000', '1', '', 'Tidak Layak', 'training2.xls', 'Rendah', 'Tidak Ada', 'Kurang', 'Sedikit', 'Tidak'),
(2, 2.81, 'Tidak Ada', '2500000', '1', 'UKM', 'Tidak Layak', 'training2.xls', 'Rendah', 'Tidak Ada', 'Kurang', 'Sedikit', 'Sedikit'),
(3, 3, 'Propinsi', '2500000', '1', 'UKM,Himpunan,Karang Taruna', 'Layak', 'training2.xls', 'Rendah', 'Propinsi', 'Kurang', 'Sedikit', 'Banyak'),
(4, 2.75, 'Tidak Ada', '3500000', '1', '', 'Tidak Layak', 'training2.xls', 'Rendah', 'Tidak Ada', 'Menengah', 'Sedikit', 'Tidak'),
(5, 2.9, 'Tidak Ada', '3500000', '1', 'UKM,Himpunan', 'Tidak Layak', 'training2.xls', 'Rendah', 'Tidak Ada', 'Menengah', 'Sedikit', 'Sedikit'),
(6, 3.15, 'Propinsi', '2500000', '1', '', 'Tidak Layak', 'training2.xls', 'Sedang', 'Propinsi', 'Kurang', 'Sedikit', 'Tidak'),
(7, 3.2, 'Propinsi', '2500000', '1', 'BEM', 'Layak', 'training2.xls', 'Sedang', 'Propinsi', 'Kurang', 'Sedikit', 'Sedikit'),
(8, 3.43, 'Propinsi', '2500000', '1', 'UKM,BEM,Himpunan', 'Layak', 'training2.xls', 'Sedang', 'Propinsi', 'Kurang', 'Sedikit', 'Banyak'),
(9, 3.22, 'Propinsi', '3500000', '1', '', 'Tidak Layak', 'training2.xls', 'Sedang', 'Propinsi', 'Menengah', 'Sedikit', 'Tidak'),
(10, 3.29, 'Propinsi', '3500000', '1', 'Komunitas', 'Layak', 'training2.xls', 'Sedang', 'Propinsi', 'Menengah', 'Sedikit', 'Sedikit'),
(11, 3.26, 'Propinsi', '3500000', '1', 'UKM,BEM,Himpunan', 'Layak', 'training2.xls', 'Sedang', 'Propinsi', 'Menengah', 'Sedikit', 'Banyak'),
(12, 3.31, 'Propinsi', '4500000', '1', 'Himpunan', 'Tidak Layak', 'training2.xls', 'Sedang', 'Propinsi', 'Mampu', 'Sedikit', 'Sedikit'),
(13, 3.41, 'Nasional', '2500000', '1', 'UKM', 'Layak', 'training2.xls', 'Sedang', 'Nasional', 'Kurang', 'Sedikit', 'Sedikit'),
(14, 3.34, 'Nasional', '3500000', '1', 'UKM,Himpunan', 'Tidak Layak', 'training2.xls', 'Sedang', 'Nasional', 'Menengah', 'Sedikit', 'Sedikit'),
(15, 3.33, 'Nasional', '3500000', '1', 'BEM', 'Layak', 'training2.xls', 'Sedang', 'Nasional', 'Menengah', 'Sedikit', 'Sedikit'),
(16, 3.48, 'Nasional', '3500000', '1', 'Komunitas', 'Layak', 'training2.xls', 'Sedang', 'Nasional', 'Menengah', 'Sedikit', 'Sedikit'),
(17, 3.29, 'Nasional', '4500000', '1', 'Himpunan', 'Tidak Layak', 'training2.xls', 'Sedang', 'Nasional', 'Mampu', 'Sedikit', 'Sedikit'),
(18, 3.13, 'Nasional', '4500000', '1', 'UKM', 'Layak', 'training2.xls', 'Sedang', 'Nasional', 'Mampu', 'Sedikit', 'Sedikit'),
(19, 3.16, 'Nasional', '4500000', '1', 'UKM,Himpunan', 'Layak', 'training2.xls', 'Sedang', 'Nasional', 'Mampu', 'Sedikit', 'Sedikit'),
(20, 3.76, 'Propinsi', '2500000', '1', 'BEM', 'Layak', 'training2.xls', 'Tinggi', 'Propinsi', 'Kurang', 'Sedikit', 'Sedikit'),
(21, 3.66, 'Propinsi', '2500000', '1', 'Komunitas', 'Layak', 'training2.xls', 'Tinggi', 'Propinsi', 'Kurang', 'Sedikit', 'Sedikit'),
(22, 3.54, 'Propinsi', '2500000', '1', 'Himpunan', 'Layak', 'training2.xls', 'Tinggi', 'Propinsi', 'Kurang', 'Sedikit', 'Sedikit'),
(23, 3.6, 'Propinsi', '3500000', '1', 'UKM', 'Layak', 'training2.xls', 'Tinggi', 'Propinsi', 'Menengah', 'Sedikit', 'Sedikit'),
(24, 3.81, 'Propinsi', '3500000', '1', 'BEM', 'Layak', 'training2.xls', 'Tinggi', 'Propinsi', 'Menengah', 'Sedikit', 'Sedikit'),
(25, 3.67, 'International', '2500000', '1', '', 'Layak', 'training2.xls', 'Tinggi', 'International', 'Kurang', 'Sedikit', 'Tidak'),
(26, 3.54, 'International', '3500000', '1', 'UKM,BEM,Himpunan', 'Layak', 'training2.xls', 'Tinggi', 'International', 'Menengah', 'Sedikit', 'Banyak'),
(27, 3.59, 'International', '4500000', '1', 'UKM,BEM,Himpunan', 'Layak', 'training2.xls', 'Tinggi', 'International', 'Mampu', 'Sedikit', 'Banyak'),
(28, 3.88, 'Nasional', '2500000', '1', '', 'Layak', 'training2.xls', 'Tinggi', 'Nasional', 'Kurang', 'Sedikit', 'Tidak'),
(29, 3.65, 'Nasional', '2500000', '1', 'UKM', 'Layak', 'training2.xls', 'Tinggi', 'Nasional', 'Kurang', 'Sedikit', 'Sedikit'),
(30, 3.71, 'Nasional', '2500000', '1', 'UKM,Himpunan', 'Layak', 'training2.xls', 'Tinggi', 'Nasional', 'Kurang', 'Sedikit', 'Sedikit'),
(31, 3.62, 'Nasional', '3500000', '1', 'BEM', 'Layak', 'training2.xls', 'Tinggi', 'Nasional', 'Menengah', 'Sedikit', 'Sedikit'),
(32, 3.64, 'Nasional', '4500000', '1', 'Komunitas', 'Layak', 'training2.xls', 'Tinggi', 'Nasional', 'Mampu', 'Sedikit', 'Sedikit'),
(33, 3.69, 'Nasional', '4500000', '1', 'Himpunan', 'Layak', 'training2.xls', 'Tinggi', 'Nasional', 'Mampu', 'Sedikit', 'Sedikit'),
(34, 3.75, 'Nasional', '4500000', '1', 'UKM', 'Layak', 'training2.xls', 'Tinggi', 'Nasional', 'Mampu', 'Sedikit', 'Sedikit'),
(35, 2.99, 'Propinsi', '2500000', '2', 'BEM', 'Layak', 'training2.xls', 'Rendah', 'Propinsi', 'Kurang', 'Cukup', 'Sedikit'),
(36, 2.87, 'Nasional', '2500000', '3', 'Komunitas', 'Layak', 'training2.xls', 'Rendah', 'Nasional', 'Kurang', 'Cukup', 'Sedikit'),
(37, 3.29, 'Propinsi', '2500000', '2', 'Himpunan', 'Layak', 'training2.xls', 'Sedang', 'Propinsi', 'Kurang', 'Cukup', 'Sedikit'),
(38, 3.26, 'Propinsi', '2500000', '2', 'UKM', 'Layak', 'training2.xls', 'Sedang', 'Propinsi', 'Kurang', 'Cukup', 'Sedikit'),
(39, 3.31, 'Tidak Ada', '2500000', '2', 'BEM', 'Layak', 'training2.xls', 'Sedang', 'Tidak Ada', 'Kurang', 'Cukup', 'Sedikit'),
(40, 3.27, 'Tidak Ada', '2500000', '3', 'UKM,BEM,Himpunan', 'Layak', 'training2.xls', 'Sedang', 'Tidak Ada', 'Kurang', 'Cukup', 'Banyak'),
(41, 3.19, 'Tidak Ada', '3500000', '2', 'UKM,BEM,Komunitas', 'Tidak Layak', 'training2.xls', 'Sedang', 'Tidak Ada', 'Menengah', 'Cukup', 'Banyak'),
(42, 3.19, 'Tidak Ada', '4500000', '2', 'UKM,Himpunan,Karang Taruna', 'Tidak Layak', 'training2.xls', 'Sedang', 'Tidak Ada', 'Mampu', 'Cukup', 'Banyak'),
(43, 3.19, 'International', '2500000', '2', 'UKM', 'Layak', 'training2.xls', 'Sedang', 'International', 'Kurang', 'Cukup', 'Sedikit'),
(44, 3.32, 'International', '2500000', '2', 'UKM,Himpunan', 'Layak', 'training2.xls', 'Sedang', 'International', 'Kurang', 'Cukup', 'Sedikit'),
(45, 3.38, 'International', '3500000', '3', 'BEM', 'Layak', 'training2.xls', 'Sedang', 'International', 'Menengah', 'Cukup', 'Sedikit'),
(46, 3.47, 'International', '3500000', '3', 'Komunitas', 'Layak', 'training2.xls', 'Sedang', 'International', 'Menengah', 'Cukup', 'Sedikit'),
(47, 3.37, 'Tidak Ada', '4500000', '3', 'Himpunan', 'Tidak Layak', 'training2.xls', 'Sedang', 'Tidak Ada', 'Mampu', 'Cukup', 'Sedikit'),
(48, 3.41, 'Nasional', '2500000', '3', 'UKM', 'Layak', 'training2.xls', 'Sedang', 'Nasional', 'Kurang', 'Cukup', 'Sedikit'),
(49, 3.41, 'Nasional', '2500000', '2', 'BEM', 'Layak', 'training2.xls', 'Sedang', 'Nasional', 'Kurang', 'Cukup', 'Sedikit'),
(50, 3.28, 'Nasional', '3500000', '2', 'UKM', 'Layak', 'training2.xls', 'Sedang', 'Nasional', 'Menengah', 'Cukup', 'Sedikit'),
(51, 3.35, 'Nasional', '3500000', '2', 'UKM,Himpunan', 'Layak', 'training2.xls', 'Sedang', 'Nasional', 'Menengah', 'Cukup', 'Sedikit'),
(52, 3.19, 'Nasional', '5000000', '2', 'BEM', 'Layak', 'training2.xls', 'Sedang', 'Nasional', 'Mampu', 'Cukup', 'Sedikit'),
(53, 3.28, 'Nasional', '5000000', '2', 'Komunitas', 'Layak', 'training2.xls', 'Sedang', 'Nasional', 'Mampu', 'Cukup', 'Sedikit'),
(54, 3.74, 'Propinsi', '2500000', '2', 'Himpunan', 'Layak', 'training2.xls', 'Tinggi', 'Propinsi', 'Kurang', 'Cukup', 'Sedikit'),
(55, 3.91, 'Propinsi', '2500000', '2', 'UKM', 'Layak', 'training2.xls', 'Tinggi', 'Propinsi', 'Kurang', 'Cukup', 'Sedikit'),
(56, 3.64, 'Propinsi', '3500000', '3', 'BEM', 'Layak', 'training2.xls', 'Tinggi', 'Propinsi', 'Menengah', 'Cukup', 'Sedikit'),
(57, 3.69, 'Propinsi', '3500000', '2', 'UKM,BEM,Himpunan', 'Layak', 'training2.xls', 'Tinggi', 'Propinsi', 'Menengah', 'Cukup', 'Banyak'),
(58, 3.7, 'Propinsi', '4500000', '2', 'UKM', 'Layak', 'training2.xls', 'Tinggi', 'Propinsi', 'Mampu', 'Cukup', 'Sedikit'),
(59, 3.59, 'Propinsi', '4500000', '3', 'UKM,Himpunan', 'Layak', 'training2.xls', 'Tinggi', 'Propinsi', 'Mampu', 'Cukup', 'Sedikit'),
(60, 3.72, 'Tidak Ada', '2500000', '3', 'BEM', 'Layak', 'training2.xls', 'Tinggi', 'Tidak Ada', 'Kurang', 'Cukup', 'Sedikit'),
(61, 3.73, 'Tidak Ada', '2500000', '3', 'Komunitas', 'Layak', 'training2.xls', 'Tinggi', 'Tidak Ada', 'Kurang', 'Cukup', 'Sedikit'),
(62, 3.66, 'International', '2500000', '2', 'Himpunan', 'Layak', 'training2.xls', 'Tinggi', 'International', 'Kurang', 'Cukup', 'Sedikit'),
(63, 3.65, 'International', '2500000', '2', 'UKM', 'Layak', 'training2.xls', 'Tinggi', 'International', 'Kurang', 'Cukup', 'Sedikit'),
(64, 3.54, 'International', '3500000', '2', 'BEM', 'Layak', 'training2.xls', 'Tinggi', 'International', 'Menengah', 'Cukup', 'Sedikit'),
(65, 3.66, 'International', '3500000', '2', 'UKM,BEM,Himpunan', 'Layak', 'training2.xls', 'Tinggi', 'International', 'Menengah', 'Cukup', 'Banyak'),
(66, 3.78, 'International', '4500000', '3', 'UKM', 'Layak', 'training2.xls', 'Tinggi', 'International', 'Mampu', 'Cukup', 'Sedikit'),
(67, 3.79, 'International', '4500000', '3', 'UKM,Himpunan', 'Layak', 'training2.xls', 'Tinggi', 'International', 'Mampu', 'Cukup', 'Sedikit'),
(68, 3.8, 'Nasional', '2500000', '3', 'BEM', 'Layak', 'training2.xls', 'Tinggi', 'Nasional', 'Kurang', 'Cukup', 'Sedikit'),
(69, 3.81, 'Nasional', '2500000', '2', 'Komunitas', 'Layak', 'training2.xls', 'Tinggi', 'Nasional', 'Kurang', 'Cukup', 'Sedikit'),
(70, 3.82, 'Nasional', '3500000', '2', 'Himpunan', 'Layak', 'training2.xls', 'Tinggi', 'Nasional', 'Menengah', 'Cukup', 'Sedikit'),
(71, 3.77, 'Nasional', '3500000', '2', 'UKM', 'Layak', 'training2.xls', 'Tinggi', 'Nasional', 'Menengah', 'Cukup', 'Sedikit'),
(72, 3.84, 'Nasional', '4500000', '2', 'BEM', 'Layak', 'training2.xls', 'Tinggi', 'Nasional', 'Mampu', 'Cukup', 'Sedikit'),
(73, 3.63, 'Nasional', '4500000', '3', 'UKM', 'Layak', 'training2.xls', 'Tinggi', 'Nasional', 'Mampu', 'Cukup', 'Sedikit'),
(74, 3.87, 'Nasional', '4500000', '3', 'UKM,Himpunan', 'Layak', 'training2.xls', 'Tinggi', 'Nasional', 'Mampu', 'Cukup', 'Sedikit'),
(75, 3, 'Propinsi', '2500000', '4', 'BEM', 'Layak', 'training2.xls', 'Rendah', 'Propinsi', 'Kurang', 'Banyak', 'Sedikit'),
(76, 3, 'Tidak Ada', '4500000', '1', 'Komunitas', 'Tidak Layak', 'training2.xls', 'Rendah', 'Tidak Ada', 'Mampu', 'Sedikit', 'Sedikit'),
(77, 2.95, 'Nasional', '3500000', '4', 'Himpunan', 'Layak', 'training2.xls', 'Rendah', 'Nasional', 'Menengah', 'Banyak', 'Sedikit'),
(78, 2.88, 'Tidak Ada', '4500000', '5', 'UKM', 'Tidak Layak', 'training2.xls', 'Rendah', 'Tidak Ada', 'Mampu', 'Banyak', 'Sedikit'),
(79, 2.94, 'Nasional', '4500000', '4', 'BEM', 'Layak', 'training2.xls', 'Rendah', 'Nasional', 'Mampu', 'Banyak', 'Sedikit'),
(80, 3.28, 'Propinsi', '2500000', '4', '', 'Layak', 'training2.xls', 'Sedang', 'Propinsi', 'Kurang', 'Banyak', 'Tidak'),
(81, 3.15, 'Propinsi', '2500000', '4', 'Karang Taruna', 'Layak', 'training2.xls', 'Sedang', 'Propinsi', 'Kurang', 'Banyak', 'Sedikit'),
(82, 3.26, 'Propinsi', '2500000', '4', 'UKM,BEM,Himpunan', 'Layak', 'training2.xls', 'Sedang', 'Propinsi', 'Kurang', 'Banyak', 'Banyak'),
(83, 3.41, 'Propinsi', '3500000', '4', '', 'Layak', 'training2.xls', 'Sedang', 'Propinsi', 'Menengah', 'Banyak', 'Tidak'),
(84, 3.41, 'Propinsi', '3500000', '4', 'UKM', 'Layak', 'training2.xls', 'Sedang', 'Propinsi', 'Menengah', 'Banyak', 'Sedikit'),
(85, 3.28, 'Propinsi', '3500000', '4', 'UKM,BEM,Komunitas', 'Layak', 'training2.xls', 'Sedang', 'Propinsi', 'Menengah', 'Banyak', 'Banyak'),
(86, 3.35, 'Propinsi', '4500000', '4', 'UKM', 'Layak', 'training2.xls', 'Sedang', 'Propinsi', 'Mampu', 'Banyak', 'Sedikit'),
(87, 3.19, 'Propinsi', '4500000', '4', 'UKM,Himpunan', 'Layak', 'training2.xls', 'Sedang', 'Propinsi', 'Mampu', 'Banyak', 'Sedikit'),
(88, 3.28, 'Tidak Ada', '3500000', '5', 'BEM', 'Layak', 'training2.xls', 'Sedang', 'Tidak Ada', 'Menengah', 'Banyak', 'Sedikit'),
(89, 3.35, 'International', '2500000', '4', 'Himpunan', 'Layak', 'training2.xls', 'Sedang', 'International', 'Kurang', 'Banyak', 'Sedikit'),
(90, 3.19, 'International', '2500000', '4', 'Himpunan', 'Layak', 'training2.xls', 'Sedang', 'International', 'Kurang', 'Banyak', 'Sedikit'),
(91, 3.28, 'Nasional', '2500000', '4', 'UKM', 'Tidak Layak', 'training2.xls', 'Sedang', 'Nasional', 'Kurang', 'Banyak', 'Sedikit'),
(92, 3.25, 'Nasional', '2500000', '5', 'UKM', 'Layak', 'training2.xls', 'Sedang', 'Nasional', 'Kurang', 'Banyak', 'Sedikit'),
(93, 3.27, 'Nasional', '3500000', '4', '', 'Tidak Layak', 'training2.xls', 'Sedang', 'Nasional', 'Menengah', 'Banyak', 'Tidak'),
(94, 3.44, 'Nasional', '3500000', '4', 'Komunitas', 'Layak', 'training2.xls', 'Sedang', 'Nasional', 'Menengah', 'Banyak', 'Sedikit'),
(95, 3.8, 'Propinsi', '4500000', '4', 'Komunitas', 'Layak', 'training2.xls', 'Tinggi', 'Propinsi', 'Mampu', 'Banyak', 'Sedikit'),
(96, 3.71, 'Propinsi', '4500000', '4', 'UKM,BEM,Himpunan', 'Layak', 'training2.xls', 'Tinggi', 'Propinsi', 'Mampu', 'Banyak', 'Banyak'),
(97, 3.67, 'International', '2500000', '4', 'Komunitas', 'Layak', 'training2.xls', 'Tinggi', 'International', 'Kurang', 'Banyak', 'Sedikit'),
(98, 3.64, 'International', '2500000', '4', 'UKM,BEM,Komunitas', 'Layak', 'training2.xls', 'Tinggi', 'International', 'Kurang', 'Banyak', 'Banyak'),
(99, 3.58, 'International', '3500000', '4', 'Komunitas', 'Layak', 'training2.xls', 'Tinggi', 'International', 'Menengah', 'Banyak', 'Sedikit'),
(100, 3.68, 'Nasional', '2500000', '4', '', 'Layak', 'training2.xls', 'Tinggi', 'Nasional', 'Kurang', 'Banyak', 'Tidak');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_datatesting`
--

CREATE TABLE IF NOT EXISTS `tbl_datatesting` (
`id_datatesting` int(50) NOT NULL,
  `ipk` double NOT NULL,
  `prestasi` varchar(50) NOT NULL,
  `penghasilan` varchar(50) NOT NULL,
  `jumlah_tanggungan` varchar(50) NOT NULL,
  `organisasi` varchar(50) NOT NULL,
  `kelas` varchar(60) NOT NULL,
  `prediksi` varchar(50) NOT NULL,
  `nilailayak` double NOT NULL,
  `nilaitidak` double NOT NULL,
  `kesesuaian` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_hasil`
--

CREATE TABLE IF NOT EXISTS `tbl_hasil` (
`id_hasil` int(8) NOT NULL,
  `id_pendaftar` varchar(15) NOT NULL,
  `id_periode` varchar(15) NOT NULL,
  `rekapitulasi` text NOT NULL,
  `penilaian` varchar(30) NOT NULL,
  `status` varchar(15) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=98 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_hasil`
--

INSERT INTO `tbl_hasil` (`id_hasil`, `id_pendaftar`, `id_periode`, `rekapitulasi`, `penilaian`, `status`, `keterangan`) VALUES
(86, 'P001905003', '2', 'Layak => (84/100) x (36/84) x (30/84) x (25/84) x (22/84) x (67/84)  =0.0079936311259198<br>Tidak Layak => (16/100) x (10/16) x (3/16) x (6/16) x (3/16) x (9/16)  =0.0007415771484375<br>Nilai Tertinggi Adalah : Layak dengan Nilai Bobot: 0.0079936311259198', 'Layak', 'Proses', '0.0079936311259198'),
(94, 'P001906001', '2', 'Layak => (84/100) x (6/84) x (5/84) x (20/84) x (25/84) x (67/84)  =0.00020185937186666<br>Tidak Layak => (16/100) x (6/16) x (9/16) x (6/16) x (10/16) x (9/16)  =0.004449462890625<br>Nilai Tertinggi Adalah : Tidak Layak dengan Nilai Bobot: 0.004449462890625', 'Tidak Layak', 'Proses', '0.004449462890625'),
(97, 'P001907001', '2', 'Layak => (84/100) x (42/84) x (5/84) x (39/84) x (37/84) x (67/84)  =0.0040779630304503<br>Tidak Layak => (16/100) x (0/16) x (9/16) x (4/16) x (3/16) x (9/16)  =0<br>Nilai Tertinggi Adalah : Layak dengan Nilai Bobot: 0.0040779630304503', 'Layak', 'Proses', '0.0040779630304503');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_info`
--

CREATE TABLE IF NOT EXISTS `tbl_info` (
`id_info` int(50) NOT NULL,
  `gambar` varchar(1000) NOT NULL,
  `keterangan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pendaftar`
--

CREATE TABLE IF NOT EXISTS `tbl_pendaftar` (
  `id_pendaftar` varchar(15) NOT NULL,
  `nama_pendaftar` varchar(30) NOT NULL,
  `tempat_lahir` varchar(30) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` text NOT NULL,
  `no_tlpa` varchar(15) NOT NULL,
  `no_tlpo` varchar(15) NOT NULL,
  `ipk` float NOT NULL,
  `prestasi` varchar(30) NOT NULL,
  `nama_ortu` varchar(50) NOT NULL,
  `penghasilan` varchar(30) NOT NULL,
  `jumlah_tanggungan` varchar(30) NOT NULL,
  `upload_khs` varchar(100) NOT NULL,
  `upload_kk` varchar(100) NOT NULL,
  `upload_prestasi` varchar(100) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  `id_periode` varchar(15) NOT NULL,
  `organisasi` varchar(200) NOT NULL,
  `hasil` varchar(30) NOT NULL DEFAULT 'Proses'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pendaftar`
--

INSERT INTO `tbl_pendaftar` (`id_pendaftar`, `nama_pendaftar`, `tempat_lahir`, `tgl_lahir`, `alamat`, `no_tlpa`, `no_tlpo`, `ipk`, `prestasi`, `nama_ortu`, `penghasilan`, `jumlah_tanggungan`, `upload_khs`, `upload_kk`, `upload_prestasi`, `username`, `password`, `id_periode`, `organisasi`, `hasil`) VALUES
('P001905003', 'Dita Sari', 'Depok', '1999-05-09', 'Tambun', '089999897797', '08577887878', 3.11, 'Propinsi', 'Dadang', '3500000', '4', 'avatar.jpg', 'avatar.jpg', 'avatar.jpg', 'b', 'b', '2', 'BEM', 'Layak'),
('P001906001', 'Dianti Mardia Hartanti', 'Bekasi', '2001-03-29', 'Graha Prima Blok IE 4 No 3A', '089898987851', '081377767512', 2.8, 'Tidak Ada', 'Muryati', '5000000', '1', 'avatar.jpg', 'avatar.jpg', 'avatar.jpg', 'dianti', 'dianti', '2', 'UKM', 'Tidak Layak'),
('P001907001', 'Nadia Salsabil', 'Bekasi', '2001-07-03', 'Mangun Jaya 06', '089897887687', '085776566756', 3.51, 'Tidak Ada', 'Pramuji', '3000000', '2', '807-1526-1-SM.pdf', '807-1526-1-SM.pdf', '807-1526-1-SM.pdf', 'nadia', 'nadia', '2', 'UKM', 'Layak');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_periode`
--

CREATE TABLE IF NOT EXISTS `tbl_periode` (
`id_periode` int(50) NOT NULL,
  `nama_periode` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `status` varchar(15) NOT NULL,
  `keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_periode`
--

INSERT INTO `tbl_periode` (`id_periode`, `nama_periode`, `deskripsi`, `status`, `keterangan`) VALUES
(2, 'Ganjil 2019/2020', '', 'Aktif', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE IF NOT EXISTS `tbl_user` (
  `id_user` varchar(10) NOT NULL,
  `nama_user` varchar(50) NOT NULL,
  `tlp_user` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `status` varchar(60) NOT NULL,
  `keterangan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `nama_user`, `tlp_user`, `email`, `username`, `password`, `status`, `keterangan`) VALUES
('USR02', 'Admin', '081352615718', 'admin@gmail.co', 'admin', 'admin', 'Aktif', '-');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_datalatih`
--
ALTER TABLE `tbl_datalatih`
 ADD UNIQUE KEY `id_datalatih` (`id_datalatih`);

--
-- Indexes for table `tbl_datatesting`
--
ALTER TABLE `tbl_datatesting`
 ADD PRIMARY KEY (`id_datatesting`);

--
-- Indexes for table `tbl_hasil`
--
ALTER TABLE `tbl_hasil`
 ADD UNIQUE KEY `id_hasil` (`id_hasil`);

--
-- Indexes for table `tbl_info`
--
ALTER TABLE `tbl_info`
 ADD PRIMARY KEY (`id_info`);

--
-- Indexes for table `tbl_pendaftar`
--
ALTER TABLE `tbl_pendaftar`
 ADD PRIMARY KEY (`id_pendaftar`);

--
-- Indexes for table `tbl_periode`
--
ALTER TABLE `tbl_periode`
 ADD UNIQUE KEY `id_periode` (`id_periode`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
 ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_datalatih`
--
ALTER TABLE `tbl_datalatih`
MODIFY `id_datalatih` int(8) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=101;
--
-- AUTO_INCREMENT for table `tbl_datatesting`
--
ALTER TABLE `tbl_datatesting`
MODIFY `id_datatesting` int(50) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_hasil`
--
ALTER TABLE `tbl_hasil`
MODIFY `id_hasil` int(8) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=98;
--
-- AUTO_INCREMENT for table `tbl_info`
--
ALTER TABLE `tbl_info`
MODIFY `id_info` int(50) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_periode`
--
ALTER TABLE `tbl_periode`
MODIFY `id_periode` int(50) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
