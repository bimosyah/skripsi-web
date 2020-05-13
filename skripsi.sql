-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Bulan Mei 2020 pada 12.03
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
(1, 0.1, '2020-05-09 11:30:46'),
(2, 0.2, '2020-05-09 11:31:03'),
(3, 0.3, '2020-05-09 11:31:47'),
(4, 0.4, '2020-05-09 11:32:27'),
(5, 0.5, '2020-05-09 11:32:31'),
(6, 0.6, '2020-05-09 11:33:04'),
(7, 0.7, '2020-05-09 11:33:04'),
(8, 0.8, '2020-05-09 11:33:18'),
(9, 0.9, '2020-05-09 11:33:18');

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
(62, 0, 0, 0, 0, '2020-04-29 03:51:30'),
(63, 0, 3, 8, 0, '2020-04-29 04:16:38'),
(64, 0, 8, 10, 0, '2020-04-29 04:16:41'),
(65, 4, 1, 10, 0, '2020-04-29 04:16:44'),
(66, 2, 6, 9, 0, '2020-04-29 04:16:47'),
(67, 5, 7, 10, 0, '2020-04-29 04:16:50'),
(68, 5, 2, 12, 0, '2020-04-29 04:16:53'),
(69, 2, 0, 11, 0, '2020-04-29 04:16:56'),
(70, 0, 5, 9, 0, '2020-04-29 04:17:00'),
(71, 1, 9, 9, 0, '2020-04-29 04:17:03'),
(72, 4, 0, 12, 0, '2020-04-29 04:17:06');

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

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `view_jumlah_per_hari`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `view_jumlah_per_hari` (
`jumlah_person` decimal(32,0)
,`jumlah_bicycle` decimal(32,0)
,`jumlah_car` decimal(32,0)
,`jumlah_motorbike` decimal(32,0)
,`tanggal` date
);

-- --------------------------------------------------------

--
-- Struktur untuk view `view_jumlah_per_hari`
--
DROP TABLE IF EXISTS `view_jumlah_per_hari`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_jumlah_per_hari`  AS  select sum(`table_data_deteksi`.`jumlah_person`) AS `jumlah_person`,sum(`table_data_deteksi`.`jumlah_bicycle`) AS `jumlah_bicycle`,sum(`table_data_deteksi`.`jumlah_car`) AS `jumlah_car`,sum(`table_data_deteksi`.`jumlah_motorbike`) AS `jumlah_motorbike`,cast(`table_data_deteksi`.`timestamp` as date) AS `tanggal` from `table_data_deteksi` group by cast(`table_data_deteksi`.`timestamp` as date) ;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `table_alpha`
--
ALTER TABLE `table_alpha`
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
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `table_data_deteksi`
--
ALTER TABLE `table_data_deteksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT untuk tabel `table_kategori`
--
ALTER TABLE `table_kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
