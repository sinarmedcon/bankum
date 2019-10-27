-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 25, 2019 at 04:32 PM
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
-- Table structure for table `adminQ`
--

CREATE TABLE `adminQ` (
  `keyid` int(11) NOT NULL,
  `username` text COLLATE utf8_bin NOT NULL,
  `password` text COLLATE utf8_bin NOT NULL,
  `admID` text COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `adminQ`
--

INSERT INTO `adminQ` (`keyid`, `username`, `password`, `admID`) VALUES
(3, 'bc3c057e6e4af7456e1cae972ef79835', 'b09125f22e3cb5ff99b2d2a8966fbf49', '568750ddbfa42b1f2957e4d075e393f7');

-- --------------------------------------------------------

--
-- Table structure for table `blogger`
--

CREATE TABLE `blogger` (
  `userid` int(11) NOT NULL,
  `username` text COLLATE utf8_bin NOT NULL,
  `password` text COLLATE utf8_bin NOT NULL,
  `nama` varchar(250) COLLATE utf8_bin NOT NULL,
  `photo` varchar(250) COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `blogger`
--

INSERT INTO `blogger` (`userid`, `username`, `password`, `nama`, `photo`) VALUES
(20, 'e3afed0047b08059d0fada10f400c1e5', '9d6a61941a730f576503335dbb90cc04', 'Admin', 'default.png'),
(19, '18979dc2a6841ae0bd595ce765127963', '584efb473a3b44c204eb1ac7efe154ab', 'Malvin', 'default.png'),
(18, '71b91b9ca4b73b0197d2905e7713d13b', '3241231d3325a51f04359a7c68aadc4b', 'Ajun', 'default.png'),
(17, '272e04f3315b5ffaa8a9ac48c454481b', 'cc6bb496bcdc6167e29598a5a88f0fd6', 'Era', 'default.png'),
(16, '041996305aa6f32705b82b6f2ff217a0', 'caf32166364aad16da91b54ba119b0d1', 'Angga', 'default.png'),
(15, '9048d07348e59dcbf50c227937d4b906', '595604b46daf36eb3817055e63f0eec2', 'Farhan', 'default.png'),
(14, '91b3b0325353c4aed256c15df071105f', '607761093f178fab173e841ccc3673e4', 'Putra', 'default.png'),
(13, '6ce0e9c7dff424bb377cb6dd043fcad7', '2ea1a2054dd2f9bd9492d9cba110f85c', 'Wahyu Krisna Aji', 'default.png'),
(12, 'd2a3ab82dc56e3296f8b8b09b6729ffe', '875f96c58ed6dfecb9ceeaaf641f15b4', 'Dicky', 'default.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminQ`
--
ALTER TABLE `adminQ`
  ADD PRIMARY KEY (`keyid`);

--
-- Indexes for table `blogger`
--
ALTER TABLE `blogger`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminQ`
--
ALTER TABLE `adminQ`
  MODIFY `keyid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `blogger`
--
ALTER TABLE `blogger`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
