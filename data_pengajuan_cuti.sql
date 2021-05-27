-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Bulan Mei 2021 pada 16.17
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
-- Database: `integrasiapi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_pengajuan_cuti`
--

CREATE TABLE `data_pengajuan_cuti` (
  `id_cuti` int(30) NOT NULL,
  `nik` varchar(50) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `jabatan` varchar(30) NOT NULL,
  `status` varchar(25) NOT NULL,
  `jenis_cuti` varchar(60) NOT NULL,
  `lama_cuti` int(30) NOT NULL,
  `keputusan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_pengajuan_cuti`
--

INSERT INTO `data_pengajuan_cuti` (`id_cuti`, `nik`, `nama`, `jabatan`, `status`, `jenis_cuti`, `lama_cuti`, `keputusan`) VALUES
(1, '3174105607900002', 'LIEKE AGRIJANTI MULJANTO', 'Direktur Personalia', 'lama', 'Cuti Diluar Tanggungan Pemerintah', 5, 'Tidak Disetujui'),
(2, '3175092308900003', 'RUHUL JIHAD', 'Manajer', 'Lama', 'Cuti Sakit', 10, 'Disetujui');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_pengajuan_cuti`
--
ALTER TABLE `data_pengajuan_cuti`
  ADD PRIMARY KEY (`id_cuti`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data_pengajuan_cuti`
--
ALTER TABLE `data_pengajuan_cuti`
  MODIFY `id_cuti` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
