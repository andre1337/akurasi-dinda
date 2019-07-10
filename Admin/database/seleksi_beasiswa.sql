-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2019 at 05:58 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `seleksi_beasiswa`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE IF NOT EXISTS `tbl_admin` (
  `kode_admin` varchar(8) COLLATE latin1_general_ci NOT NULL,
  `username` varchar(25) COLLATE latin1_general_ci NOT NULL,
  `password` varchar(25) COLLATE latin1_general_ci NOT NULL,
  `telepon` varchar(15) COLLATE latin1_general_ci NOT NULL,
  `email` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `gambar` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `status` enum('Aktif','Tidak Aktif') COLLATE latin1_general_ci NOT NULL DEFAULT 'Aktif'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`kode_admin`, `username`, `password`, `telepon`, `email`, `gambar`, `status`) VALUES
('ADM02', 'a', 'a', '0234567845678', 'admin@yahoo.com', 'wifi.png', 'Aktif'),
('ADM01', 'jokowi', 'jokowi', '021-11111111', 'presidenri@gmail.com', 'key.jpg', 'Aktif');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_datalatih`
--

CREATE TABLE IF NOT EXISTS `tbl_datalatih` (
  `id_datalatih` varchar(10) NOT NULL,
  `ipk` varchar(10) NOT NULL,
  `prestasi` varchar(40) NOT NULL,
  `penghasilan` varchar(40) NOT NULL,
  `jumlah_tanggungan` varchar(50) NOT NULL,
  `organisasi` varchar(50) NOT NULL,
  `penilaian` varchar(50) NOT NULL,
  `keterangan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_datalatih`
--

INSERT INTO `tbl_datalatih` (`id_datalatih`, `ipk`, `prestasi`, `penghasilan`, `jumlah_tanggungan`, `organisasi`, `penilaian`, `keterangan`) VALUES
('USR1905001', 'q', 'q', 'q', 'q', 'q', 'q', 'q'),
('USR1905002', 'jhghj', 'hg', 'hh', 'gg', 'hg', 'gh', 'ghg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pendaftar`
--

CREATE TABLE IF NOT EXISTS `tbl_pendaftar` (
  `id_pendaftar` varchar(50) NOT NULL,
  `nama_pendaftar` varchar(50) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` text NOT NULL,
  `no_tlpa` varchar(60) NOT NULL,
  `no_tlpo` varchar(60) NOT NULL,
  `ipk` varchar(40) NOT NULL,
  `prestasi` varchar(40) NOT NULL,
  `nama_ortu` varchar(50) NOT NULL,
  `penghasilan` varchar(50) NOT NULL,
  `jumlah_tanggungan` varchar(50) NOT NULL,
  `upload_khs` varchar(50) NOT NULL,
  `upload_kk` varchar(50) NOT NULL,
  `upload_prestasi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pendaftar`
--

INSERT INTO `tbl_pendaftar` (`id_pendaftar`, `nama_pendaftar`, `tempat_lahir`, `tgl_lahir`, `alamat`, `no_tlpa`, `no_tlpo`, `ipk`, `prestasi`, `nama_ortu`, `penghasilan`, `jumlah_tanggungan`, `upload_khs`, `upload_kk`, `upload_prestasi`) VALUES
('P001905001', 'dinda', 'bekasi', '2019-05-02', 'hjh', '989', '9898', '3.9', '3', 'Bapaknya budi', '4000000', '4', '100-202-1-SM.pdf', '100-202-1-SM.pdf', '180-660-1-PB.pdf');

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
('USR1905001', 'jhk', 'jkhkj', 'h', 'h', 'jhk', 'hjk', 'hjk'),
('USR1905002', 'hg', 'ghjgj', 'gjhg', 'jhg', 'jhjhg', 'jhg', 'hgj');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
 ADD PRIMARY KEY (`kode_admin`);

--
-- Indexes for table `tbl_pendaftar`
--
ALTER TABLE `tbl_pendaftar`
 ADD PRIMARY KEY (`id_pendaftar`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
 ADD PRIMARY KEY (`id_user`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
