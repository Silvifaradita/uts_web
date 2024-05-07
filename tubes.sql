-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 24 Bulan Mei 2022 pada 14.50
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tubes`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_peserta`
--

CREATE TABLE `data_peserta` (
  `id` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `jkel` varchar(16) NOT NULL,
  `email` varchar(100) NOT NULL,
  `instansi` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_peserta`
--

INSERT INTO `data_peserta` (`id`, `nama`, `jkel`, `email`, `instansi`) VALUES
(24, 'Fajar Ega Firmansyah', 'Laki-laki', 'fajarega0@gmail.com', 'PT Neuronworks Indonesia'),
(25, 'Bambang Santika', 'Laki-laki', 'bambangsantika04@gmail.com', 'PT Telkom Indonesia'),
(26, 'Randi', 'Laki-laki', 'randiabdul25@gmail.com', 'PT Indonesia'),
(27, 'Fajar Ega Firmansyah', 'Laki-laki', 'fajarega0@gmail.com', 'PT Webinar Lainnya');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_webinar`
--

CREATE TABLE `data_webinar` (
  `id_webinar` int(11) NOT NULL,
  `judul_webinar` varchar(200) NOT NULL,
  `tgl_webinar` varchar(200) NOT NULL,
  `waktu_webinar` varchar(200) NOT NULL,
  `pemateri` varchar(200) NOT NULL,
  `link_webinar` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_webinar`
--

INSERT INTO `data_webinar` (`id_webinar`, `judul_webinar`, `tgl_webinar`, `waktu_webinar`, `pemateri`, `link_webinar`) VALUES
(11, 'Event Teknologi 4.0', '2022-05-25', '20:00', 'Bpk Ali', 'https://meet.google.com/deb-rywx-gnb'),
(12, 'Webinar Lainnya', '2022-05-25', '20:00', 'Bpk Dosen Baru', 'https://meet.google.com/xno-xgkk-grq');

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE `login` (
  `id_login` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`id_login`, `username`, `password`) VALUES
(1, 'admin', '12345');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_peserta`
--
ALTER TABLE `data_peserta`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `data_webinar`
--
ALTER TABLE `data_webinar`
  ADD PRIMARY KEY (`id_webinar`);

--
-- Indeks untuk tabel `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id_login`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data_peserta`
--
ALTER TABLE `data_peserta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT untuk tabel `data_webinar`
--
ALTER TABLE `data_webinar`
  MODIFY `id_webinar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `login`
--
ALTER TABLE `login`
  MODIFY `id_login` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
