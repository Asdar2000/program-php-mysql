-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Jun 2019 pada 03.31
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.1.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_uho`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `table_mahasiswa`
--

CREATE TABLE `table_mahasiswa` (
  `id` int(11) NOT NULL,
  `Nama` varchar(25) NOT NULL,
  `NIM` varchar(9) NOT NULL,
  `Tempat_Lahir` varchar(225) NOT NULL,
  `Tanggal_Lahir` varchar(225) NOT NULL,
  `Jurusan` varchar(225) NOT NULL,
  `Alamat` text NOT NULL,
  `No_hp` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `table_mahasiswa`
--

INSERT INTO `table_mahasiswa` (`id`, `Nama`, `NIM`, `Tempat_Lahir`, `Tanggal_Lahir`, `Jurusan`, `Alamat`, `No_hp`) VALUES
(6, 'Asdar', 'E1E118017', 'LEMBAH SUBUR', '2000-06-10', 'Informatika', 'PERDOS blok O', '082293926259'),
(7, 'Astina', 'J1A115014', 'LEMBAH SUBUR', '1997-11-09', 'Kesehatan Masyarakat', 'Lorong Salangga', '082240729847');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `table_mahasiswa`
--
ALTER TABLE `table_mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `table_mahasiswa`
--
ALTER TABLE `table_mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
