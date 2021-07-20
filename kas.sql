-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 20, 2021 at 09:36 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kas`
--

-- --------------------------------------------------------

--
-- Table structure for table `iuran`
--

CREATE TABLE `iuran` (
  `id` int(11) NOT NULL,
  `keterangan` tinytext NOT NULL,
  `tanggal` date NOT NULL,
  `bulan` int(2) NOT NULL,
  `tahun` year(4) NOT NULL,
  `jumlah` decimal(10,2) NOT NULL,
  `warga_nik` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `iuran`
--

INSERT INTO `iuran` (`id`, `keterangan`, `tanggal`, `bulan`, `tahun`, `jumlah`, `warga_nik`) VALUES
(9, 'Kas bulanan', '2020-01-05', 1, 2020, '50000.00', '3000123276541234'),
(10, 'Kas bulanan', '2020-01-07', 1, 2020, '50000.00', '3000213487652314'),
(11, 'Kas bulanan', '2020-01-08', 1, 2020, '50000.00', '3000231476239087'),
(13, 'Kas bulanan', '2020-02-04', 2, 2020, '50000.00', '3000123187653124'),
(14, 'Kas bulanan', '2021-02-12', 2, 2020, '50000.00', '3000213487652314'),
(15, 'Kas bulanan', '2020-03-05', 3, 2020, '50000.00', '3000231476239087'),
(16, 'Kas bulanan', '2020-03-17', 3, 2020, '50000.00', '3000231237623100'),
(17, 'Kas bulanan', '2021-01-06', 1, 2021, '50000.00', '3000123276541234'),
(18, 'Kas bulanan', '2021-01-12', 1, 2021, '50000.00', '3000213487652314'),
(19, 'Kas bulanan', '2021-01-12', 1, 2021, '50000.00', '3000231476239087');

-- --------------------------------------------------------

--
-- Table structure for table `warga`
--

CREATE TABLE `warga` (
  `id` int(11) NOT NULL,
  `nik` varchar(50) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `kelamin` enum('L','P') NOT NULL,
  `alamat` tinytext NOT NULL,
  `no_rumah` varchar(10) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `warga`
--

INSERT INTO `warga` (`id`, `nik`, `nama`, `kelamin`, `alamat`, `no_rumah`, `status`) VALUES
(1, '3000123276541234', 'Rina Ahmad', 'P', 'Kampung Selang Cau RT 01 RW 03', '20', 1),
(2, '3000213487652314', 'Karso Lindo Indro', 'L', 'Kampung Selang Cau RT 01 RW 03', '26', 1),
(4, '3000231476239087', 'Purwanto', 'L', 'Selang Cau RT 01 RW 03', '98', 1),
(5, '3000231237623100', 'Anita', 'P', 'Selang Cau Juga', '12', 1),
(6, '3000123187653124', 'Yoga Ahmad', 'L', 'Selang Cau RT 01 RW 03', '28', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `iuran`
--
ALTER TABLE `iuran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `warga`
--
ALTER TABLE `warga`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nik` (`nik`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `iuran`
--
ALTER TABLE `iuran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `warga`
--
ALTER TABLE `warga`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
