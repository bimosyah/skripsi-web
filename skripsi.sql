-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 29 Apr 2020 pada 05.28
-- Versi server: 10.1.35-MariaDB
-- Versi PHP: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `skripsi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `table_alpha`
--

CREATE TABLE `table_alpha` (
  `id` int(1) NOT NULL,
  `nilai_alpha` float NOT NULL,
  `update_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `table_alpha`
--

INSERT INTO `table_alpha` (`id`, `nilai_alpha`, `update_at`) VALUES
(1, 0.2, '2020-02-16 15:38:39');

-- --------------------------------------------------------

--
-- Struktur dari tabel `table_data`
--

CREATE TABLE `table_data` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `jumlah` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `table_data`
--

INSERT INTO `table_data` (`id`, `jumlah`, `create_at`) VALUES
(1, '12', '2020-04-28 13:50:16'),
(2, '12', '2020-04-28 13:51:04'),
(3, '12', '2020-04-28 13:51:11'),
(4, '8', '2020-04-28 13:53:33'),
(5, '5', '2020-04-28 13:53:36'),
(6, '0', '2020-04-28 13:53:39'),
(7, '0', '2020-04-28 13:53:42'),
(8, '0', '2020-04-28 13:53:45'),
(9, '0', '2020-04-28 13:53:49'),
(10, '0', '2020-04-28 13:53:52'),
(11, '2', '2020-04-28 13:53:55'),
(12, '3', '2020-04-28 13:53:58'),
(13, '0', '2020-04-28 13:54:02'),
(14, '0', '2020-04-28 13:54:05'),
(15, '0', '2020-04-28 13:54:08'),
(16, '5', '2020-04-28 13:54:11'),
(17, '8', '2020-04-28 13:54:14'),
(18, '10', '2020-04-28 13:54:17'),
(19, '9', '2020-04-28 13:54:20'),
(20, '0', '2020-04-28 13:54:24'),
(21, '0', '2020-04-28 13:54:27'),
(22, '0', '2020-04-28 13:54:30'),
(23, '0', '2020-04-28 13:54:33'),
(24, '0', '2020-04-28 13:54:36'),
(25, '0', '2020-04-28 13:54:40'),
(26, '0', '2020-04-28 13:54:43'),
(27, '4', '2020-04-28 13:54:46'),
(28, '7', '2020-04-28 13:54:49'),
(29, '0', '2020-04-28 13:54:52'),
(30, '0', '2020-04-28 13:54:56'),
(31, '0', '2020-04-28 13:54:59'),
(32, '0', '2020-04-28 13:55:02'),
(33, '0', '2020-04-28 13:55:05'),
(34, '0', '2020-04-28 13:55:08');

-- --------------------------------------------------------

--
-- Struktur dari tabel `table_data_deteksi`
--

CREATE TABLE `table_data_deteksi` (
  `id` int(11) NOT NULL,
  `jumlah_person` int(11) NOT NULL,
  `jumlah_bicycle` int(11) NOT NULL,
  `jumlah_car` int(11) NOT NULL,
  `jumlah_motorbike` int(11) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `table_data_deteksi`
--

INSERT INTO `table_data_deteksi` (`id`, `jumlah_person`, `jumlah_bicycle`, `jumlah_car`, `jumlah_motorbike`, `timestamp`) VALUES
(1, 1, 1, 1, 1, '0000-00-00 00:00:00'),
(2, 1, 1, 1, 1, '2020-04-29 03:27:39');

-- --------------------------------------------------------

--
-- Struktur dari tabel `table_kategori`
--

CREATE TABLE `table_kategori` (
  `id` int(11) NOT NULL,
  `nama_kategori` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `table_kategori`
--

INSERT INTO `table_kategori` (`id`, `nama_kategori`) VALUES
(1, 'person'),
(2, 'bicycle'),
(3, 'car'),
(4, 'motorbike');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `table_alpha`
--
ALTER TABLE `table_alpha`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `table_data`
--
ALTER TABLE `table_data`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `table_data_deteksi`
--
ALTER TABLE `table_data_deteksi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `table_kategori`
--
ALTER TABLE `table_kategori`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `table_alpha`
--
ALTER TABLE `table_alpha`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `table_data`
--
ALTER TABLE `table_data`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT untuk tabel `table_data_deteksi`
--
ALTER TABLE `table_data_deteksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `table_kategori`
--
ALTER TABLE `table_kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
