-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Bulan Mei 2020 pada 15.42
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
  `nilai_alpha` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `table_alpha`
--

INSERT INTO `table_alpha` (`id`, `nilai_alpha`) VALUES
(1, 0.1),
(2, 0.2),
(3, 0.3),
(4, 0.4),
(5, 0.5),
(6, 0.6),
(7, 0.7),
(8, 0.8),
(9, 0.9);

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
(73, 5, 5, 20, 30, '2020-05-18 01:10:00'),
(74, 10, 10, 15, 20, '2020-05-18 01:20:00'),
(75, 11, 23, 21, 31, '2020-05-18 01:30:00'),
(76, 10, 27, 19, 17, '2020-05-19 01:10:00'),
(77, 13, 26, 15, 10, '2020-05-19 01:20:00'),
(78, 6, 19, 27, 20, '2020-05-19 01:30:00'),
(79, 9, 29, 16, 18, '2020-05-20 01:10:00'),
(80, 5, 10, 23, 26, '2020-05-20 01:20:00'),
(81, 4, 13, 26, 30, '2020-05-20 01:30:00'),
(82, 5, 7, 22, 19, '2020-05-21 01:10:00'),
(83, 5, 4, 25, 20, '2020-05-21 01:20:00'),
(84, 3, 5, 21, 17, '2020-05-21 01:30:00'),
(85, 1, 4, 19, 15, '2020-05-22 01:10:00'),
(86, 3, 5, 20, 19, '2020-05-22 01:20:00'),
(87, 3, 4, 23, 24, '2020-05-22 01:30:00'),
(88, 4, 2, 23, 25, '2020-05-23 01:10:00'),
(89, 6, 6, 20, 26, '2020-05-23 01:20:00'),
(90, 7, 3, 26, 23, '2020-05-23 01:30:00'),
(91, 5, 5, 20, 16, '2020-05-24 01:10:00'),
(92, 3, 3, 16, 17, '2020-05-24 01:20:00'),
(93, 5, 4, 17, 14, '2020-05-24 01:30:00');

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
-- Stand-in struktur untuk tampilan `view_jumlah_menit10`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `view_jumlah_menit10` (
`tanggal` date
,`jam` time
,`jumlah_person` int(11)
,`jumlah_bicycle` int(11)
,`jumlah_car` int(11)
,`jumlah_motorbike` int(11)
);

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `view_jumlah_menit20`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `view_jumlah_menit20` (
`tanggal` date
,`jam` time
,`jumlah_person` int(11)
,`jumlah_bicycle` int(11)
,`jumlah_car` int(11)
,`jumlah_motorbike` int(11)
);

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `view_jumlah_menit30`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `view_jumlah_menit30` (
`tanggal` date
,`jam` time
,`jumlah_person` int(11)
,`jumlah_bicycle` int(11)
,`jumlah_car` int(11)
,`jumlah_motorbike` int(11)
);

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
-- Struktur untuk view `view_jumlah_menit10`
--
DROP TABLE IF EXISTS `view_jumlah_menit10`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_jumlah_menit10`  AS  select cast(`table_data_deteksi`.`timestamp` as date) AS `tanggal`,cast(`table_data_deteksi`.`timestamp` as time) AS `jam`,`table_data_deteksi`.`jumlah_person` AS `jumlah_person`,`table_data_deteksi`.`jumlah_bicycle` AS `jumlah_bicycle`,`table_data_deteksi`.`jumlah_car` AS `jumlah_car`,`table_data_deteksi`.`jumlah_motorbike` AS `jumlah_motorbike` from `table_data_deteksi` where (minute(`table_data_deteksi`.`timestamp`) = '10') ;

-- --------------------------------------------------------

--
-- Struktur untuk view `view_jumlah_menit20`
--
DROP TABLE IF EXISTS `view_jumlah_menit20`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_jumlah_menit20`  AS  select cast(`table_data_deteksi`.`timestamp` as date) AS `tanggal`,cast(`table_data_deteksi`.`timestamp` as time) AS `jam`,`table_data_deteksi`.`jumlah_person` AS `jumlah_person`,`table_data_deteksi`.`jumlah_bicycle` AS `jumlah_bicycle`,`table_data_deteksi`.`jumlah_car` AS `jumlah_car`,`table_data_deteksi`.`jumlah_motorbike` AS `jumlah_motorbike` from `table_data_deteksi` where (minute(`table_data_deteksi`.`timestamp`) = '20') ;

-- --------------------------------------------------------

--
-- Struktur untuk view `view_jumlah_menit30`
--
DROP TABLE IF EXISTS `view_jumlah_menit30`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_jumlah_menit30`  AS  select cast(`table_data_deteksi`.`timestamp` as date) AS `tanggal`,cast(`table_data_deteksi`.`timestamp` as time) AS `jam`,`table_data_deteksi`.`jumlah_person` AS `jumlah_person`,`table_data_deteksi`.`jumlah_bicycle` AS `jumlah_bicycle`,`table_data_deteksi`.`jumlah_car` AS `jumlah_car`,`table_data_deteksi`.`jumlah_motorbike` AS `jumlah_motorbike` from `table_data_deteksi` where (minute(`table_data_deteksi`.`timestamp`) = '30') ;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;

--
-- AUTO_INCREMENT untuk tabel `table_kategori`
--
ALTER TABLE `table_kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
