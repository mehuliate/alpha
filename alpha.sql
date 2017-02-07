-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 07, 2017 at 12:00 PM
-- Server version: 10.2.3-MariaDB-log
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `alpha`
--

-- --------------------------------------------------------

--
-- Table structure for table `bidangs`
--

CREATE TABLE `bidangs` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bidangs`
--

INSERT INTO `bidangs` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'UMUM', NULL, NULL),
(2, 'PERBENDAHARAAN DAN KEBERATAN', NULL, NULL),
(3, 'PELAYANAN DAN FASILITAS PABEAN DAN CUKAI I', NULL, NULL),
(4, 'PELAYANAN DAN FASILITAS PABEAN DAN CUKAI II', NULL, NULL),
(5, 'PENINDAKAN DAN PENYIDIKAN', NULL, NULL),
(6, 'KEPATUHAN INTERNAL DAN LAYANAN INFORMASI', NULL, NULL),
(7, 'FUNGSIONAL', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `dukteks`
--

CREATE TABLE `dukteks` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `lokasilainnyas`
--

CREATE TABLE `lokasilainnyas` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `lokasis`
--

CREATE TABLE `lokasis` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lokasis`
--

INSERT INTO `lokasis` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Gedung A Kantor Bea Cukai Soetta', NULL, NULL),
(2, 'Gedung B Kantor Bea Cukai Soetta', NULL, NULL),
(3, 'DHL EKSPORT', NULL, NULL),
(4, 'DHL IMPORT', NULL, NULL),
(5, 'FEDEX EKSPORT', NULL, NULL),
(6, 'FEDEX IMPORT', NULL, NULL),
(7, 'GARUDA EKSPORT', NULL, NULL),
(8, 'GARUDA IMPORT', NULL, NULL),
(9, 'JAS EKSPORT', NULL, NULL),
(10, 'JAS IMPORT', NULL, NULL),
(11, 'TNS', NULL, NULL),
(12, 'TNT', NULL, NULL),
(13, 'WD (Wahana Dirgantara)', NULL, NULL),
(14, 'CAS (Banten Global Development)', NULL, NULL),
(15, 'LAINNYA (isi kolom lainnya)', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2017_02_06_005610_create_dukteks_table', 2),
(6, '2017_02_07_014518_create_bidangs_table', 4),
(7, '2017_02_06_080225_create_lokasis_table', 5),
(8, '2017_02_07_021940_create_lokasilainnyas_table', 6),
(9, '2017_02_06_080518_create_seksis_table', 7);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `seksis`
--

CREATE TABLE `seksis` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bagian_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `seksis`
--

INSERT INTO `seksis` (`id`, `name`, `bagian_id`, `created_at`, `updated_at`) VALUES
(1, 'SUMBER DAYA MANUSIA', 1, NULL, NULL),
(2, 'KEUANGAN', 1, NULL, NULL),
(3, 'TATA USAHA DAN RUMAH TANGGA', 1, NULL, NULL),
(4, 'DUKUNGAN TEKNIS', 1, NULL, NULL),
(5, 'ADMINISTRASI PENERIMAAN DAN PENGEMBALIAN', 2, NULL, NULL),
(6, 'PENAGIHAN', 2, NULL, NULL),
(7, 'KEBERATAN DAN BANDING', 2, NULL, NULL),
(8, 'PABEAN DAN CUKAI IA', 3, NULL, NULL),
(9, 'PABEAN DAN CUKAI IB', 3, NULL, NULL),
(10, 'PABEAN DAN CUKAI IC', 3, NULL, NULL),
(11, 'FASILITAS KEPABEANAN IA', 3, NULL, NULL),
(12, 'FASILITAS KEPABEANAN IB', 3, NULL, NULL),
(13, 'ADMINISTRASI MANIFES I', 3, NULL, NULL),
(14, 'PABEAN DAN CUKAI IIA', 4, NULL, NULL),
(15, 'PABEAN DAN CUKAI IIB', 4, NULL, NULL),
(16, 'PABEAN DAN CUKAI IIC', 4, NULL, NULL),
(17, 'FASILITAS KEPABEANAN IIA', 4, NULL, NULL),
(18, 'FASILITAS KEPABEANAN IIB', 4, NULL, NULL),
(19, 'ADMINISTRASI MANIFES II', 4, NULL, NULL),
(20, 'INTELIJEN I', 5, NULL, NULL),
(21, 'INTELIJEN II', 5, NULL, NULL),
(22, 'PATROLI DAN OPERASI I', 5, NULL, NULL),
(23, 'PATROLI DAN OPERASI II', 5, NULL, NULL),
(24, 'PENYIDIKAN DAN BARANG HASIL PENINDAKAN', 5, NULL, NULL),
(25, 'SARANA OPERASI', 5, NULL, NULL),
(26, 'KEPATUHAN PELAKSANAAN TUGAS PELAYANAN', 6, NULL, NULL),
(27, 'KEPATUHAN PELAKSANAAN TUGAS PENGAWASAN', 6, NULL, NULL),
(28, 'KEPATUHAN PELAKSANAAN TUGAS ADMINISTRASI', 6, NULL, NULL),
(29, 'BIMBINGAN KEPATUHAN', 6, NULL, NULL),
(30, 'LAYANAN INFORMASI', 6, NULL, NULL),
(31, 'PFPD', 7, NULL, NULL),
(32, 'PDTT', 7, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bidangs`
--
ALTER TABLE `bidangs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dukteks`
--
ALTER TABLE `dukteks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lokasilainnyas`
--
ALTER TABLE `lokasilainnyas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lokasis`
--
ALTER TABLE `lokasis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `seksis`
--
ALTER TABLE `seksis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bidangs`
--
ALTER TABLE `bidangs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `dukteks`
--
ALTER TABLE `dukteks`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `lokasilainnyas`
--
ALTER TABLE `lokasilainnyas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `lokasis`
--
ALTER TABLE `lokasis`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `seksis`
--
ALTER TABLE `seksis`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
