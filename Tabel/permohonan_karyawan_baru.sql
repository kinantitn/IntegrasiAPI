-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 03, 2021 at 06:35 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `utsintegrasiapi`
--

-- --------------------------------------------------------

--
-- Table structure for table `permohonan_karyawan_baru`
--

CREATE TABLE `permohonan_karyawan_baru` (
  `id_permohonan` int(30) NOT NULL,
  `divisi` varchar(50) NOT NULL,
  `nik` varchar(50) NOT NULL,
  `nama_karyawan` varchar(50) NOT NULL,
  `jabatan` varchar(30) NOT NULL,
  `permintaan` varchar(50) NOT NULL,
  `keputusan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `permohonan_karyawan_baru`
--

INSERT INTO `permohonan_karyawan_baru` (`id_permohonan`, `divisi`, `nik`, `nama_karyawan`, `jabatan`, `permintaan`, `keputusan`) VALUES
(72972, 'Marketing', '3000051231245', 'Eka Shafira Hidajat', 'Manajer', 'Penambahan karyawan baru', 'Diterima');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `permohonan_karyawan_baru`
--
ALTER TABLE `permohonan_karyawan_baru`
  ADD PRIMARY KEY (`id_permohonan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
