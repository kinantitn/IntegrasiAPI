-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Bulan Mei 2021 pada 16.57
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
-- Struktur dari tabel `data_karyawan`
--

CREATE TABLE `data_karyawan` (
  `nik` varchar(50) NOT NULL,
  `jabatan_prshn` varchar(255) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `tgl_lahir` varchar(20) NOT NULL,
  `tempat_lahir` varchar(15) NOT NULL,
  `jenis_kelamin` varchar(15) NOT NULL,
  `alamat` text NOT NULL,
  `no_telp` varchar(20) NOT NULL,
  `id_cuti` int(30) NOT NULL,
  `sisa_cuti` varchar(15) NOT NULL,
  `id_penilaian` int(30) NOT NULL,
  `evaluasi_karyawan` varchar(10) NOT NULL,
  `id_penggajian` int(30) NOT NULL,
  `no_rekening` int(30) NOT NULL,
  `id_dept` int(30) NOT NULL,
  `status` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_karyawan`
--

INSERT INTO `data_karyawan` (`nik`, `jabatan_prshn`, `nama`, `tgl_lahir`, `tempat_lahir`, `jenis_kelamin`, `alamat`, `no_telp`, `id_cuti`, `sisa_cuti`, `id_penilaian`, `evaluasi_karyawan`, `id_penggajian`, `no_rekening`, `id_dept`, `status`) VALUES
('1304040605900001', 'Direksi', 'ANDIKO PERDANA', '03-04-1994', 'Cimanuk', 'Laki-Laki', 'Jalan raya Kedondong desa Cimanuk kecamatan way Lima kab.pesawaran', '+6287300340351', 82, '3', 406, '5', 1, 2439988, 1, 'lama'),
('1304040605900011', 'Karyawan B.2', 'DWI ASIH RETNO PRATIWI', '11-11-1990', 'Surakarta', 'Perempuan', 'Jajar RT 02/04 Laweyan, Surakarta', '+6287247427374', 85, '2', 413, '6', 2, 2785514, 2, 'lama'),
('1375026004890002', 'Direktur Utama', 'RAMA YANTO', '05-06-1996', 'Sukabumi', 'Laki-Laki', 'Kp. Ciemas RT01/01 desa. Ciemas kec. Ceimas kab. Sukabumi prov. Jawa barat', '+6287899705363', 80, '3', 435, '7', 3, 2338802, 3, 'lama'),
('1406031611900001', 'Direktur', 'WAHYUDIN ROMO', '06-07-1997', 'Makassar', 'Laki-Laki', 'BTN Dewi Kumalasari Blok AF 1 no.25, Kec.Biring Kanaya, Kota Makassar, Sulawesi Selatan.', '+6287302448591', 3, '1', 488, '8', 4, 2552557, 4, 'lama'),
('1671145809910002', 'Direktur Keuangan', 'DEVI SEPTIANI', '05-05-1994', 'Jepara', 'Perempuan', 'Desa Kelet Rt 23 Rw 4 Kecamatan Keling Kabupaten Jepara Provinsi Jawa Tengah', '+6283502491389', 26, '9', 421, '9', 5, 2241354, 5, 'lama'),
('3174105607900002', 'Direktur Personalia', 'LIEKE AGRIJANTI MULJANTO', '07-08-1998', 'Sritejo Kencono', 'Perempuan', 'Rt 04/Rw 04 Sritejo Kencono Kec. Kota gajah Kab. Lampung Tengah Lampung', '+6289751788515', 55, '5', 472, '10', 6, 2710823, 6, 'lama'),
('3175092308900003', 'Manajer', 'RUHUL JIHAD', '03-03-1992', 'Klaten', 'Laki-Laki', 'Dk. Ceper RT 01/06, Ds. Ceper, Kec. Ceper, Kab. Klaten', '+6288471482569', 27, '9', 448, '1', 7, 2375637, 7, 'lama'),
('3201294611920002', 'Manajer Personalia', 'LISNA SUMIATI', '10-10-1999', ' Barito Timur', 'Perempuan', 'Magantis, Kec.Dusun Timur Kab. Barito Timur, Kalimantan Tengah', '+6284466196177', 58, '7', 496, '2', 8, 2612315, 8, 'lama'),
('3201371511910002', 'Manajer Pemasaran', 'IMAM PRATOMO BUDI SANTOSO', '12-12-1991', 'Hulu Sungai Ten', 'Laki-Laki', 'Desa Limpasu kecamatan Limpasu kabupaten hulu sungai tengah', '+6287516420309', 2, '9', 438, '3', 9, 2807128, 9, 'lama'),
('3203044709900009', 'Manajer Pabrik', 'HANA FARADILA', '06-06-1995', 'Meran', 'Perempuan', 'JL.CUT NYAK DHIEN LOR III,KOTA LHOKSUKON,LHOKSUKON', '+6286014371285', 75, '5', 410, '4', 10, 2445013, 10, 'lama'),
('3216065426277212', 'Manager', 'KINANTI TIARA NINGTYAS', '11-05-2000', 'Bekasi', 'Perempuan', 'Villa Setia Mekar', '+6281291873072', 77, '7', 400, '20', 21, 5335881, 11, 'baru'),
('3217021210870001 ', 'Divisi A', 'MUHAMMAD BERNALDY', '08-09-1999', 'Pekalongan', 'Laki-Laki', 'Perum Arohmah jl Pemuda no91A Kadilang Kauman Batang', '+6280511158526', 22, '6', 415, '19', 11, 2285136, 12, 'lama'),
('3271025806900007', 'Divisi B', 'ARSYANNISA RAHMA', '08-08-1997', 'Cianjur', 'Perempuan', 'Kp. Padakati Peuntas RT/RW 01/05 Desa Tegallega Kec. Warungkondang Kab. Cianjur', '+6280220469335', 2, '5', 440, '18', 12, 2939210, 13, 'lama'),
('3271046504930002', 'Divisi C', 'INDAH RATNA FURI', '01-01-1990', 'Surakarta', 'Perempuan', 'Jln. Mangga 5 blok D 62 RT 001 RW 003 Perumah', '+6286561636974', 20, '4', 428, '17', 13, 2684284, 14, ''),
('3276024907900002', 'Divisi D', 'ELIS ANITA SARI', '07-07-1996', 'Jakarta', 'Perempuan', 'Jl.wijaya kusuma 3 no.139 jakarta timur,prumnas klender, kec:Duren sawit.kel:Malaka sari', '+6287205717200', 65, '0', 439, '16', 14, 2689071, 15, 'lama'),
('3276046501920003', '', 'MUTIFANY CHAIRINA', '02-02-1991', 'Depok', 'Perempuan', 'Jl. Meran No.88 Cilodong', '+6280719199998', 69, '8', 481, '15', 15, 8765271, 16, 'lama'),
('3276056208850017', 'Karyawan B.1', 'ADHISTY GUZNIARNY', '01-02-1992', 'Magelang', 'Perempuan', 'Batur citrosono Grabag Magelang Jawa tengah', '+6280066424241', 38, '1', 489, '14', 16, 8279238, 17, 'lama'),
('3513141812850002', 'Karyawan C.1', 'CAHYO KURNIAWAN SETIHADI', '02-03-1993', 'Jakarta ', 'Laki-Laki', 'Parung permata indah , kel.kalisuren , kec. tajurhalang kab.Bogor', '+6288990628156', 19, '6', 418, '13', 17, 1252789, 18, 'lama'),
('3518134107910008', 'Karyawan D.1', 'AISAH LATIFAH RAHMAH PUTRI', '09-09-1998', 'Samarinda', 'Perempuan', 'jl tarmidi samarinda kaltim', '+6285982111649', 5, '9', 438, '12', 18, 6273823, 19, 'lama'),
('3573054909920001', 'Karyawan D.2', 'FIRDAUSY CAHYONO', '04-05-1995', 'Bekasi', 'Laki-Laki', 'Parung permata indah blok C1 no 39 kecamatan Tajurhalang desa Kalisuren kabupaten Bogor Jawa barat', '+6282795229378', 57, '8', 481, '11', 19, 8277192, 20, 'baru'),
('5102082206920002', 'Karyawan C.2', 'AMERTA CANDRA ERDIKA', '04-04-1993', 'Karanganyar', 'Laki-Laki', 'Blulukan II rt01/06 Colomadu, Karanganyar', '+6283087674115', 20, '5', 406, '21', 20, 7272710, 21, 'baru');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_karyawan`
--
ALTER TABLE `data_karyawan`
  ADD PRIMARY KEY (`nik`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
