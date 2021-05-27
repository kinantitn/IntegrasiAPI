-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 27, 2021 at 07:35 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

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
-- Table structure for table `data_pengajuan_cuti`
--

CREATE TABLE `data_pengajuan_cuti` (
  `id_data` int(30) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `nik` varchar(50) NOT NULL,
  `jabatan` varchar(30) NOT NULL,
  `status` varchar(25) NOT NULL,
  `jenis_cuti` varchar(60) NOT NULL,
  `lama_cuti` int(30) NOT NULL,
  `keputusan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_pengajuan_cuti`
--

INSERT INTO `data_pengajuan_cuti` (`id_data`, `nama`, `nik`, `jabatan`, `status`, `jenis_cuti`, `lama_cuti`, `keputusan`) VALUES
(1, 'DWI ASIH RETNO PRATIWI', '1304040605900011', 'Karyawan B.2', 'Lama', 'Cuti Melahirkan', 14, 'Disetujui'),
(2, 'IMAM PRATOMO BUDI SANTOSO', '3201371511910002', 'Manajer Pemasaran', 'lama', 'Cuti Sakit', 7, 'Disetujui'),
(3, 'KINANTI TIARA NINNGTYAS', '3216065426277212', 'Manager', 'Lama', 'Cuti Tahunan', 30, 'Tidak disetujui'),
(4, 'MUHAMMAD BERNALDY', '3217021210870001', 'Divisi A', 'Lama', 'Cuti Besar', 40, 'Tidak Disetujui'),
(5, 'DEVI SEPTIANI', '1671145809910002', 'Direktur Keuangan', 'Lama', 'Cuti Karena Alasan Penting', 3, 'Disetujui');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_pengajuan_cuti`
--
ALTER TABLE `data_pengajuan_cuti`
  ADD PRIMARY KEY (`id_data`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_pengajuan_cuti`
--
ALTER TABLE `data_pengajuan_cuti`
  MODIFY `id_data` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
