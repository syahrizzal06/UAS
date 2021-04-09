-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Apr 2021 pada 15.53
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
-- Database: `relawan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `covid`
--

CREATE TABLE `covid` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `provinsi` varchar(50) NOT NULL,
  `email` varchar(20) NOT NULL,
  `hp` varchar(20) NOT NULL,
  `ahli` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `covid`
--

INSERT INTO `covid` (`id`, `nama`, `alamat`, `provinsi`, `email`, `hp`, `ahli`) VALUES
(46, 'Dian Eka Prasetyo', 'jalan moh khamid ', 'Banten - Serang', 'ekoooodok@ gmail.com', '085883225988', 'Barista');

-- --------------------------------------------------------

--
-- Struktur dari tabel `provinsi`
--

CREATE TABLE `provinsi` (
  `provinsi` varchar(32) NOT NULL,
  `prov_id` int(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `provinsi`
--

INSERT INTO `provinsi` (`provinsi`, `prov_id`) VALUES
('Aceh - Banda Aceh', 1),
('Sumatera Utara - Medan', 2),
('Sumatera Barat - Padang', 3),
('Riau - Pekanbaru', 4),
('Kepulauan Riau - Tanjungpinang', 5),
('Jambi - Jambi', 6),
('Sumatera Selatan - Palembang', 7),
('Kepulauan Bangka Belitung - Pang', 8),
('Bengkulu - Bengkulu', 9),
('Lampung - Bandar Lampung', 10),
('DKI Jakarta - Jakarta', 11),
('Banten - Serang', 12),
('Jawa Barat - Bandung', 13),
('Jawa Tengah - Semarang', 14),
('DI Yogyakarta - Yogyakarta', 15),
('Jawa Timur - Surabaya', 16),
('Bali - Denpasar', 17),
('Nusa Tenggara Barat - Mataram', 18),
('Nusa Tenggara Timur - Kupang', 19),
('Kalimantan Barat - Pontianak', 20),
('Kalimantan Tengah - Palangkaraya', 21),
('Provinsi Kalimantan Selatan - Ba', 22),
('Kalimantan Timur - Samarinda', 23),
('Kalimantan Utara - Tanjung Selor', 24),
('Sulawesi Utara - Manado', 25),
('Gorontalo - Gorontalo', 26),
('Sulawesi Tengah - Palu', 27),
('Sulawesi Barat - Mamuju', 28),
('Provinsi Sulawesi Selatan - Maka', 29),
('Sulawesi Tenggara - Kendari', 30),
('Maluku - Ambon', 31),
('Maluku Utara - Sofifi', 32),
('Papua Barat - Manokwari', 33),
('Papua - Jayapura', 34);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `covid`
--
ALTER TABLE `covid`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `provinsi`
--
ALTER TABLE `provinsi`
  ADD PRIMARY KEY (`prov_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `covid`
--
ALTER TABLE `covid`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT untuk tabel `provinsi`
--
ALTER TABLE `provinsi`
  MODIFY `prov_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
