-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 29 Apr 2020 pada 05.57
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
(2, 1, 1, 1, 1, '2020-04-29 03:27:39'),
(3, 8, 0, 0, 0, '2020-04-29 03:46:47'),
(4, 3, 0, 0, 0, '2020-04-29 03:46:50'),
(5, 0, 0, 0, 0, '2020-04-29 03:46:54'),
(6, 0, 0, 0, 0, '2020-04-29 03:46:56'),
(7, 1, 0, 0, 0, '2020-04-29 03:46:59'),
(8, 0, 0, 0, 0, '2020-04-29 03:47:02'),
(9, 0, 0, 0, 0, '2020-04-29 03:47:06'),
(10, 1, 0, 0, 0, '2020-04-29 03:47:09'),
(11, 0, 0, 0, 0, '2020-04-29 03:47:12'),
(12, 0, 0, 0, 0, '2020-04-29 03:47:15'),
(13, 5, 0, 1, 0, '2020-04-29 03:48:56'),
(14, 9, 0, 8, 0, '2020-04-29 03:48:59'),
(15, 12, 0, 8, 1, '2020-04-29 03:49:02'),
(16, 5, 0, 7, 1, '2020-04-29 03:49:05'),
(17, 7, 0, 8, 0, '2020-04-29 03:49:08'),
(18, 12, 0, 9, 4, '2020-04-29 03:49:11'),
(19, 11, 0, 11, 0, '2020-04-29 03:49:14'),
(20, 9, 0, 11, 6, '2020-04-29 03:49:18'),
(21, 3, 0, 3, 1, '2020-04-29 03:49:21'),
(22, 0, 0, 0, 0, '2020-04-29 03:49:24'),
(23, 0, 0, 0, 0, '2020-04-29 03:49:27'),
(24, 0, 0, 0, 0, '2020-04-29 03:49:30'),
(25, 0, 0, 0, 0, '2020-04-29 03:49:34'),
(26, 0, 0, 0, 0, '2020-04-29 03:49:37'),
(27, 0, 0, 0, 0, '2020-04-29 03:49:40'),
(28, 0, 0, 0, 0, '2020-04-29 03:49:43'),
(29, 0, 0, 12, 0, '2020-04-29 03:49:46'),
(30, 0, 0, 6, 0, '2020-04-29 03:49:50'),
(31, 0, 0, 4, 0, '2020-04-29 03:49:53'),
(32, 0, 0, 8, 0, '2020-04-29 03:49:56'),
(33, 0, 0, 2, 0, '2020-04-29 03:49:59'),
(34, 0, 0, 0, 0, '2020-04-29 03:50:02'),
(35, 0, 0, 0, 0, '2020-04-29 03:50:05'),
(36, 0, 0, 0, 0, '2020-04-29 03:50:09'),
(37, 4, 0, 11, 8, '2020-04-29 03:50:12'),
(38, 3, 0, 14, 9, '2020-04-29 03:50:15'),
(39, 3, 0, 4, 2, '2020-04-29 03:50:18'),
(40, 0, 0, 0, 0, '2020-04-29 03:50:21'),
(41, 0, 0, 0, 0, '2020-04-29 03:50:24'),
(42, 0, 0, 0, 0, '2020-04-29 03:50:28'),
(43, 0, 0, 0, 0, '2020-04-29 03:50:31'),
(44, 0, 0, 0, 0, '2020-04-29 03:50:34'),
(45, 0, 0, 0, 0, '2020-04-29 03:50:37'),
(46, 0, 0, 0, 0, '2020-04-29 03:50:40'),
(47, 0, 0, 0, 0, '2020-04-29 03:50:44'),
(48, 0, 0, 0, 0, '2020-04-29 03:50:47'),
(49, 0, 0, 0, 0, '2020-04-29 03:50:50'),
(50, 0, 0, 0, 0, '2020-04-29 03:50:53'),
(51, 0, 0, 0, 0, '2020-04-29 03:50:56'),
(52, 0, 0, 0, 0, '2020-04-29 03:50:59'),
(53, 0, 0, 0, 0, '2020-04-29 03:51:02'),
(54, 0, 0, 0, 0, '2020-04-29 03:51:05'),
(55, 0, 0, 0, 0, '2020-04-29 03:51:08'),
(56, 0, 27, 0, 0, '2020-04-29 03:51:12'),
(57, 0, 5, 0, 0, '2020-04-29 03:51:15'),
(58, 0, 0, 0, 0, '2020-04-29 03:51:18'),
(59, 0, 0, 0, 0, '2020-04-29 03:51:21'),
(60, 0, 0, 0, 0, '2020-04-29 03:51:24'),
(61, 4, 0, 0, 0, '2020-04-29 03:51:27'),
(62, 0, 0, 0, 0, '2020-04-29 03:51:30');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT untuk tabel `table_kategori`
--
ALTER TABLE `table_kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
