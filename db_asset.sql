-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 07, 2017 at 02:30 PM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 7.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_asset`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_inven`
--

CREATE TABLE `tb_inven` (
  `id` int(11) NOT NULL,
  `jenis` enum('Notebook','Desktop','Router','Switch','Access Point','Converter E1','Printer') NOT NULL,
  `brand` varchar(255) NOT NULL,
  `tipe` varchar(255) NOT NULL,
  `seri` varchar(255) DEFAULT NULL,
  `spek` text,
  `ip` varchar(255) DEFAULT NULL,
  `mac` varchar(255) DEFAULT NULL,
  `status` enum('Dipakai','Backup','Lelang','') NOT NULL,
  `nik` varchar(255) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `bast` varchar(255) DEFAULT NULL,
  `ket` varchar(255) DEFAULT '-',
  `id_pegawai` int(11) DEFAULT NULL,
  `id_kantor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_inven`
--

INSERT INTO `tb_inven` (`id`, `jenis`, `brand`, `tipe`, `seri`, `spek`, `ip`, `mac`, `status`, `nik`, `nama`, `bast`, `ket`, `id_pegawai`, `id_kantor`) VALUES
(4, 'Notebook', 'Lenovo', 'A450xx', 'X876', 'Core i5', '', '0', 'Dipakai', '101010', 'Satria Megananda Purnama', 'BAST_asd_A450xx.png', 'Hibah', NULL, 2),
(5, 'Desktop', 'ACER', '2300 Series', 'CKGK489YS', 'INTEL® CORE™ I5-3320M (2.2 GHZ, 3 MB CACHE, 4 CORES)/4 GB/500 GB', '', '0', 'Dipakai', '111111', 'Fahmi Yanuar', 'BAST_ACER_2300_Series.png', '', NULL, 2),
(18, 'Router', 'CISCO', '2300 Series', 'CGK49XT', '', '20.20.20.160', 'EF:8A:01:10', 'Dipakai', '', '', NULL, '', NULL, 3),
(19, 'Router', 'Cisco', '2300', 'MX76', '', '10.12.12.254', '22:E0:FF:2A', 'Backup', '', '', NULL, '', NULL, 5),
(22, 'Desktop', 'ASUS', 'A450LC', 'CNU251CJGP', 'INTEL® CORE™ I5-3320M (2.2 GHZ, 3 MB CACHE, 4 CORES)/4 GB/500 GB', '', '0', 'Dipakai', '121212', 'Faisal', 'BAST_ASUS_A450LC.jpg', '', NULL, 3),
(25, 'Desktop', 'Dell', 'X48CU', 'SN43807', 'INTEL® CORE™ I5-3320M (2.2 GHZ, 3 MB CACHE, 4 CORES)/4 GB/500 GB', '', '0', 'Dipakai', '123123', 'Purnama', 'BAST_Dell_X48CU.JPG', '', NULL, 3),
(31, 'Desktop', 'HP', 'X817YO', 'CKGK489YS', 'INTEL® CORE™ I5-3320M (2.2 GHZ, 3 MB CACHE, 4 CORES)/4 GB/500 GB', '', '0', 'Dipakai', '909090', 'Mega', 'BAST_HP_X817YO.png', '', NULL, 2),
(34, 'Desktop', 'ACER', 'X90KZ', 'V87XH', 'INTEL® CORE™ I5-3320M (2.6 GHZ, 3 MB CACHE, 2 CORES) / 4 GB/500 GB', '', '0', 'Dipakai', '321123', 'Nanda', 'BAST_ACER_X90KZ.jpg', '', NULL, 4),
(35, 'Router', 'Huawei', '4875GX', '123123123', '', '10.12.12.1', '22:E0:FF:2A', 'Dipakai', '', '', NULL, '', NULL, 2),
(36, 'Desktop', 'HP', 'AIO6471', 'CVG32R', 'INTEL® CORE™ I5-3320M (2.6 GHZ, 3 MB CACHE, 2 CORES) / 4 GB/500 GB', '', '', 'Dipakai', '9019019', 'Asep', 'BAST_HP_AIO6471.PNG', '-', NULL, 2),
(37, 'Notebook', 'ASUS', 'X450LCP', 'VN31QZ', 'INTEL® CORE™ I5-4200U (1.6 GHZ, 3 MB CACHE, 2 CORES) / 4 GB/500 GB', '', '', 'Dipakai', '101010', 'Satria Megananda Purnama', 'BAST_ASUS_X450LCP.png', '', NULL, 3),
(38, 'Printer', 'Epson', 'Stylus Photo', 'R3000', '', '', '', 'Dipakai', '', '', NULL, '', NULL, 2),
(39, 'Printer', 'Canon', 'DX890', '4300C', '', '', '', 'Dipakai', '', '', NULL, '', NULL, 3),
(40, 'Notebook', 'ASUS', 'X450LCP', 'GHZ578', 'INTEL® CORE™ I5-4200U (1.6 GHZ, 3 MB CACHE, 2 CORES) / 4 GB/500 GB', '', '', 'Dipakai', '101010', 'Satria Megananda Purnama', 'BAST_ASUS_X450LCP1.png', '', NULL, 5),
(41, 'Notebook', 'Lenovo', 'X70', 'FZ8001', 'INTEL® CORE™ I5-4200U (1.6 GHZ, 3 MB CACHE, 2 CORES) / 4 GB/500 GB', '', '', 'Backup', '', '', NULL, '', NULL, 2),
(42, 'Desktop', 'Dell', 'X90KZ', 'W172JK', 'INTEL® CORE™ I5-3320M (2.2 GHZ, 3 MB CACHE, 4 CORES)/4 GB/500 GB', '', '', 'Backup', '', '', NULL, '', NULL, 2),
(43, 'Converter E1', 'TP-Link', 'X87', '90LPX', '', '10.12.12.1', '22:E0:FF:2A', 'Dipakai', '', '', NULL, '', NULL, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tb_kantor`
--

CREATE TABLE `tb_kantor` (
  `id` int(11) NOT NULL,
  `kantor` enum('Bandung - Asia Afrika','Bandung - Landing Point Buah Batu','Bandung - Soekarno-Hatta','Bandung - BEC','Bandung - Miko Mall','Bandung - Jatos','Purwakarta','Tasikmalaya','Sukabumi','Jatiluhur','Cirebon','Super Admin') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kantor`
--

INSERT INTO `tb_kantor` (`id`, `kantor`) VALUES
(1, 'Super Admin'),
(2, 'Bandung - Asia Afrika'),
(3, 'Bandung - Landing Point Buah Batu'),
(4, 'Bandung - Soekarno-Hatta'),
(5, 'Bandung - BEC'),
(6, 'Bandung - Miko Mall'),
(7, 'Bandung - Jatos'),
(8, 'Purwakarta'),
(9, 'Tasikmalaya'),
(10, 'Sukabumi'),
(11, 'Jatiluhur'),
(12, 'Cirebon');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pegawai`
--

CREATE TABLE `tb_pegawai` (
  `id` int(11) NOT NULL,
  `nik` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `id_inven` int(11) NOT NULL,
  `id_kantor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pegawai`
--

INSERT INTO `tb_pegawai` (`id`, `nik`, `nama`, `id_inven`, `id_kantor`) VALUES
(1, '101010', 'Satria', 21, 0),
(2, '101010', 'Satria', 27, 0),
(3, '121212', 'Megananda', 33, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_users`
--

CREATE TABLE `tb_users` (
  `id` int(11) NOT NULL,
  `user` varchar(255) NOT NULL,
  `pwd` varchar(255) NOT NULL,
  `id_kantor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_users`
--

INSERT INTO `tb_users` (`id`, `user`, `pwd`, `id_kantor`) VALUES
(1, 'Superadmin', '477054c78baea7a1242f79d898a2ca46', 1),
(2, 'Fahmi', 'f11d50d63d3891a44c332e46d6d7d561', 1),
(3, 'sukanto', 'fba7e7e6a1e3e1cab7f16e777e2c3f8c', 1),
(19, 'bandung_aa', '4124bc0a9335c27f086f24ba207a4912', 2),
(20, 'bandung_lp', 'lp', 3),
(21, 'bandung_soehat', 'soehat', 4),
(22, 'bandung_bec', 'bec', 5),
(23, 'bandung_miko', 'miko', 6),
(24, 'bandung_jatos', 'jatos', 7),
(25, 'purwakarta', 'purwakarta', 8),
(26, 'tasikmalaya', 'tasik', 9),
(27, 'sukabumi', 'sukabumi', 10),
(28, 'jatiluhur', 'jatiluhur', 11),
(29, 'cirebon', 'cirebon', 12);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_inven`
--
ALTER TABLE `tb_inven`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_kantor`
--
ALTER TABLE `tb_kantor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_pegawai`
--
ALTER TABLE `tb_pegawai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_users`
--
ALTER TABLE `tb_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_inven`
--
ALTER TABLE `tb_inven`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
--
-- AUTO_INCREMENT for table `tb_kantor`
--
ALTER TABLE `tb_kantor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `tb_pegawai`
--
ALTER TABLE `tb_pegawai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tb_users`
--
ALTER TABLE `tb_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
