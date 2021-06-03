-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Jun 2021 pada 19.28
-- Versi server: 10.4.18-MariaDB
-- Versi PHP: 8.0.3

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
-- Struktur dari tabel `penggajian_karyawan`
--

CREATE TABLE `penggajian_karyawan` (
  `id_penggajian` int(30) NOT NULL,
  `nik` varchar(50) NOT NULL,
  `nama_karyawan` varchar(30) NOT NULL,
  `jabatan_prshn` varchar(255) NOT NULL,
  `id_absensi` int(30) NOT NULL,
  `jumlah_gaji` varchar(255) NOT NULL,
  `no_rekening` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `penggajian_karyawan`
--

INSERT INTO `penggajian_karyawan` (`id_penggajian`, `nik`, `nama_karyawan`, `jabatan_prshn`, `id_absensi`, `jumlah_gaji`, `no_rekening`) VALUES
(0, '', '', '', 0, '', 0),
(1, '1304040605900001', 'ANDIKO PERDANA', 'Karyawan 4', 4, '8000000', 1234567891),
(2, '1304040605900011', 'DWI ASIH RETNO PRATIWI', 'Karyawan B.2', 5, '9000000', 987654321),
(3, '1375026004890002', 'RAMA YANTO', 'Direktur Utama', 6, '30000000', 2338802),
(5, '134423364', 'siapa aja', 'karyawan', 23, '20003000', 12344321);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `penggajian_karyawan`
--
ALTER TABLE `penggajian_karyawan`
  ADD PRIMARY KEY (`id_penggajian`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
