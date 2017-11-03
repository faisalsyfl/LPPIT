-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 03 Nov 2017 pada 09.52
-- Versi Server: 10.1.9-MariaDB
-- PHP Version: 7.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_lp2it`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_akun`
--

CREATE TABLE `tb_akun` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `ll` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_akun`
--

INSERT INTO `tb_akun` (`id`, `username`, `password`, `ll`) VALUES
(1, 'admin', 'admin', '2017-11-03 07:20:01');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_berita`
--

CREATE TABLE `tb_berita` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `kategori` varchar(255) NOT NULL,
  `penulis` varchar(255) NOT NULL,
  `teks` text NOT NULL,
  `path` varchar(255) NOT NULL,
  `stats` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_berita`
--

INSERT INTO `tb_berita` (`id`, `judul`, `tanggal`, `kategori`, `penulis`, `teks`, `path`, `stats`) VALUES
(3, 'PAHAMI SECARA KOMPREHENSIF PEREMPUAN DAN ANAK', '2017-11-02', 'Umum', 'Faisal Syaiful Anwar, S.Kom.', 'Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.\n\n\n\nCras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.\n\n\n\nCras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.\n\n\n\nCras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.\n\n\n\nCras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.\n\n<br></p>', 'Berita_1509600485.jpg', 1),
(5, 'UPI – BANK BJB TANDATANGANI NOTA KESEPAHAMAN', '2017-11-02', 'Umum', 'Faisal Syaiful Anwar, S.Kom.', '<p>Batok kalapa&nbsp;\n\nBatok kalapa&nbsp;\n\nBatok kalapa&nbsp;\n\nBatok kalapa v\n\nBatok kalapa \n\n</p>', 'Berita_1509601081.gif', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_galeri`
--

CREATE TABLE `tb_galeri` (
  `id` int(11) NOT NULL,
  `idp` int(11) NOT NULL,
  `filename` varchar(255) NOT NULL,
  `tag` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_galeri`
--

INSERT INTO `tb_galeri` (`id`, `idp`, `filename`, `tag`) VALUES
(19, 2, 'Photo_1509605475.jpg', NULL),
(20, 2, 'Photo_1509605476.jpg', NULL),
(21, 1, 'Photo_1509605785.jpg', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kontak`
--

CREATE TABLE `tb_kontak` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `instansi` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telp` varchar(255) NOT NULL,
  `pesan` text NOT NULL,
  `stats` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_kontak`
--

INSERT INTO `tb_kontak` (`id`, `nama`, `instansi`, `email`, `telp`, `pesan`, `stats`) VALUES
(1, 'Faisal', 'UPI', 'kampakhitam_berkarat@yahoo.com', '085793434357', 'aku adalah anak yang ganteng, semoga LP2it makin maju haha. aku adalah anak yang ganteng, semoga LP2it makin maju haha.', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pelatihan`
--

CREATE TABLE `tb_pelatihan` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `kategori` varchar(255) NOT NULL,
  `tempat` varchar(255) NOT NULL,
  `pemateri` varchar(255) NOT NULL,
  `start` date NOT NULL,
  `end` date NOT NULL,
  `path` varchar(255) NOT NULL,
  `stats` tinyint(1) NOT NULL DEFAULT '0',
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_pelatihan`
--

INSERT INTO `tb_pelatihan` (`id`, `nama`, `kategori`, `tempat`, `pemateri`, `start`, `end`, `path`, `stats`, `keterangan`) VALUES
(1, 'Seminar Literasi Keuangan', 'Sastra', 'Kantor Balai Kota, Bandung', 'Dede Azis S.Pd', '2017-10-19', '2017-10-21', '', 1, '<p>Seminar ini menitik beratkan.Seminar ini menitik beratkan.Seminar ini menitik beratkan.Seminar ini menitik beratkan.Seminar ini menitik beratkan.Seminar ini menitik beratkan.Seminar ini menitik beratkan.Seminar ini menitik beratkan.Seminar ini menitik beratkan.Seminar ini menitik beratkan.Seminar ini menitik beratkan.Seminar ini menitik beratkan.Seminar ini menitik beratkan.Seminar ini menitik beratkan.Seminar ini menitik beratkan.Seminar ini menitik beratkan.Seminar ini menitik beratkan.Seminar ini menitik beratkan.Seminar ini menitik beratkan.Seminar ini menitik beratkan.Seminar ini menitik beratkan.Seminar ini menitik beratkan.Seminar ini menitik beratkan.Seminar ini menitik beratkan.Seminar ini menitik beratkan.Seminar ini menitik beratkan.Seminar ini menitik beratkan.Seminar ini menitik beratkan.Seminar ini menitik beratkan.Seminar ini menitik beratkan.</p>'),
(2, 'Networking', 'Teknologi Informasi', 'Bumi Siliwangi', 'Ayat Suhaya SE', '2017-10-19', '2017-10-21', '', 1, '<p>ASADASDasdasd</p>');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_request`
--

CREATE TABLE `tb_request` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `instansi` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telepon` varchar(255) NOT NULL,
  `kategori` varchar(255) NOT NULL,
  `keterangan` text NOT NULL,
  `file` varchar(255) NOT NULL,
  `stats` int(2) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_request`
--

INSERT INTO `tb_request` (`id`, `nama`, `instansi`, `email`, `telepon`, `kategori`, `keterangan`, `file`, `stats`) VALUES
(1, 'Ayat Suhaya SE', 'Universitas Pasundan', 'asuh68@gmail.com', '08122116162', 'Hukum', 'Saya ingin membuat pelatihan menjadi Hakim Agung Pengadilan Negeri. Apakah bisa?', '.xlsx', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_akun`
--
ALTER TABLE `tb_akun`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_berita`
--
ALTER TABLE `tb_berita`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_galeri`
--
ALTER TABLE `tb_galeri`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_kontak`
--
ALTER TABLE `tb_kontak`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_pelatihan`
--
ALTER TABLE `tb_pelatihan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_request`
--
ALTER TABLE `tb_request`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_akun`
--
ALTER TABLE `tb_akun`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tb_berita`
--
ALTER TABLE `tb_berita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tb_galeri`
--
ALTER TABLE `tb_galeri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `tb_kontak`
--
ALTER TABLE `tb_kontak`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tb_pelatihan`
--
ALTER TABLE `tb_pelatihan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tb_request`
--
ALTER TABLE `tb_request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
