-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 04, 2019 at 06:50 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bankum_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `dataLBH`
--

CREATE TABLE `dataLBH` (
  `uniqid` int(11) NOT NULL,
  `nama_depan` varchar(250) COLLATE utf8_bin NOT NULL,
  `nama_belakang` varchar(250) COLLATE utf8_bin NOT NULL,
  `email` varchar(250) COLLATE utf8_bin NOT NULL,
  `hp` varchar(15) COLLATE utf8_bin NOT NULL,
  `status` varchar(200) COLLATE utf8_bin NOT NULL,
  `namaLBH` text COLLATE utf8_bin NOT NULL,
  `domisili` text COLLATE utf8_bin NOT NULL,
  `kecamatan` varchar(250) COLLATE utf8_bin NOT NULL,
  `kabupaten` varchar(250) COLLATE utf8_bin NOT NULL,
  `provinsi` varchar(250) COLLATE utf8_bin NOT NULL,
  `telp` varchar(50) COLLATE utf8_bin NOT NULL,
  `website` text COLLATE utf8_bin NOT NULL,
  `bentuk_badan` varchar(30) COLLATE utf8_bin NOT NULL,
  `advokad_terdaftar` varchar(50) COLLATE utf8_bin NOT NULL,
  `akreditasi` varchar(20) COLLATE utf8_bin NOT NULL,
  `layanan` varchar(200) COLLATE utf8_bin NOT NULL,
  `kategori_layanan` varchar(250) COLLATE utf8_bin NOT NULL,
  `kategori_bantuan` text COLLATE utf8_bin NOT NULL,
  `kategori_bidang` varchar(200) COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `data_advokad`
--

CREATE TABLE `data_advokad` (
  `uniqid` int(11) NOT NULL,
  `nama_depan` varchar(250) COLLATE utf8_bin NOT NULL,
  `nama_belakang` varchar(250) COLLATE utf8_bin NOT NULL,
  `email` varchar(250) COLLATE utf8_bin NOT NULL,
  `hp` varchar(15) COLLATE utf8_bin NOT NULL,
  `tempat_lahir` text COLLATE utf8_bin NOT NULL,
  `tanggal_lahir` varchar(100) COLLATE utf8_bin NOT NULL,
  `jenis_kelamin` varchar(100) COLLATE utf8_bin NOT NULL,
  `domisili` text COLLATE utf8_bin NOT NULL,
  `pendidikan_terakhir` varchar(250) COLLATE utf8_bin NOT NULL,
  `profesi` text COLLATE utf8_bin NOT NULL,
  `layanan` text COLLATE utf8_bin NOT NULL,
  `keahlian` varchar(250) COLLATE utf8_bin NOT NULL,
  `photo` varchar(250) COLLATE utf8_bin NOT NULL,
  `ktp` varchar(250) COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `provinsi`
--

CREATE TABLE `provinsi` (
  `id_prov` char(2) COLLATE utf8_bin NOT NULL,
  `nama` tinytext COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `provinsi`
--

INSERT INTO `provinsi` (`id_prov`, `nama`) VALUES
('11', 'Aceh'),
('12', 'Sumatera Utara'),
('13', 'Sumatera Barat'),
('14', 'Riau'),
('15', 'Jambi'),
('16', 'Sumatera Selatan'),
('17', 'Bengkulu'),
('18', 'Lampung'),
('19', 'Kepulauan Bangka Belitung'),
('21', 'Kepulauan Riau'),
('31', 'DKI Jakarta'),
('32', 'Jawa Barat'),
('33', 'Jawa Tengah'),
('34', 'DI Yogyakarta'),
('35', 'Jawa Timur'),
('36', 'Banten'),
('51', 'Bali'),
('52', 'Nusa Tenggara Barat'),
('53', 'Nusa Tenggara Timur'),
('61', 'Kalimantan Barat'),
('62', 'Kalimantan Tengah'),
('63', 'Kalimantan Selatan'),
('64', 'Kalimantan Timur'),
('65', 'Kalimantan Utara'),
('71', 'Sulawesi Utara'),
('72', 'Sulawesi Tengah'),
('73', 'Sulawesi Selatan'),
('74', 'Sulawesi Tenggara'),
('75', 'Gorontalo'),
('76', 'Sulawesi Barat'),
('81', 'Maluku'),
('82', 'Maluku Utara'),
('91', 'Papua Barat'),
('92', 'Papua');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dataLBH`
--
ALTER TABLE `dataLBH`
  ADD PRIMARY KEY (`uniqid`);

--
-- Indexes for table `data_advokad`
--
ALTER TABLE `data_advokad`
  ADD PRIMARY KEY (`uniqid`);

--
-- Indexes for table `provinsi`
--
ALTER TABLE `provinsi`
  ADD PRIMARY KEY (`id_prov`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dataLBH`
--
ALTER TABLE `dataLBH`
  MODIFY `uniqid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `data_advokad`
--
ALTER TABLE `data_advokad`
  MODIFY `uniqid` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
