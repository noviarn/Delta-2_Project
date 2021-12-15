-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2021 at 03:14 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kerusakan_hp_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `id_history` int(5) NOT NULL,
  `gejala` int(11) NOT NULL,
  `jenis_kerusakan` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `master_data_kerusakan`
--

CREATE TABLE `master_data_kerusakan` (
  `id_data` int(5) NOT NULL,
  `gejala_id` int(5) UNSIGNED NOT NULL,
  `jenis_id` int(5) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `master_data_kerusakan`
--

INSERT INTO `master_data_kerusakan` (`id_data`, `gejala_id`, `jenis_id`) VALUES
(1, 1, 1),
(2, 2, 1),
(3, 2, 6),
(4, 3, 2),
(5, 3, 7),
(6, 3, 8),
(7, 4, 9),
(8, 5, 7),
(9, 5, 8),
(10, 6, 1),
(11, 7, 1),
(12, 8, 2),
(13, 8, 4),
(14, 9, 2),
(15, 9, 4),
(16, 10, 7),
(17, 10, 8),
(18, 11, 3),
(19, 11, 6),
(20, 12, 3),
(21, 12, 6),
(22, 13, 6),
(23, 14, 10),
(24, 15, 6),
(25, 16, 5);

-- --------------------------------------------------------

--
-- Table structure for table `master_gejala`
--

CREATE TABLE `master_gejala` (
  `id_gejala` int(5) NOT NULL,
  `nama_gejala` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `master_gejala`
--

INSERT INTO `master_gejala` (`id_gejala`, `nama_gejala`) VALUES
(1, 'Terdapat bercak hitam pada layar'),
(2, 'Layar blank saat smartphone dinyalakan'),
(3, 'Saat dicharge persentase baterai tidak bertambah'),
(4, 'Layar tidak merespon ketika ditekan'),
(5, 'Baterai smartphone menurun drastis ketika digunakan'),
(6, 'Perubahan warna dan kontras pada seluruh tampilan layar'),
(7, 'Layar smartphone rusak retak, bergaris, dan berkedip'),
(8, 'Mikrofon pada smartphone tidak berfungsi'),
(9, 'Speaker pada smartphone tidak berfungsi'),
(10, 'Saat dicharge persentase baterai bertambah tapi lamban'),
(11, 'Performa smartphone sangat lamban'),
(12, 'Sering tiba-tiba hang ketika digunakan'),
(13, 'Aplikasi tidak berjalan seperti sebelumnya/aplikasi error'),
(14, 'Tidak bisa disambungkan ke WiFi'),
(15, 'Kartu SIM tidak terdeteksi'),
(16, 'Ketika menggunakan kamera hasil gambarnya berembun');

-- --------------------------------------------------------

--
-- Table structure for table `master_jenis_kerusakan`
--

CREATE TABLE `master_jenis_kerusakan` (
  `id_jenis` int(5) NOT NULL,
  `nama_jenis_kerusakan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `master_jenis_kerusakan`
--

INSERT INTO `master_jenis_kerusakan` (`id_jenis`, `nama_jenis_kerusakan`) VALUES
(1, 'LCD'),
(2, 'IC Power'),
(3, 'IC RAM'),
(4, 'IC Audio'),
(5, 'Kamera'),
(6, 'Software'),
(7, 'Baterai'),
(8, 'Kabel konektor'),
(9, 'Touchscreen'),
(10, 'IC WiFi');

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
(2, '2019_12_14_000001_create_personal_access_tokens_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `fname` varchar(55) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lname` varchar(55) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(55) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(55) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `fname`, `lname`, `email`, `username`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Taylor', 'Swift', 'taylorswift13@gmail.com', 'tswift13', '$2y$10$cP9UzfliogIdWhBo2Bufb.ckP5lA.RPTQ1lVT0CwgoNAHkrOgBWAu', 'ZEz7bRcSjzqqbWi', '2021-11-27 06:33:28', '2021-11-27 06:33:28'),
(2, 'Joe', 'Alwyn', 'joealwyn@gmail.com', 'joealwyn', '$2y$10$vGQP9A9spmackgkWyKr2peRYRSRbZjPbxPo2auHo6MDIEs/02tzMe', 'AGydsq7wSbEUejt', '2021-11-27 07:30:30', '2021-11-27 07:30:30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`id_history`);

--
-- Indexes for table `master_data_kerusakan`
--
ALTER TABLE `master_data_kerusakan`
  ADD PRIMARY KEY (`id_data`),
  ADD KEY `master_data_gejala_id_foreign` (`gejala_id`) USING BTREE,
  ADD KEY `master_data_jenis_id_foreign` (`jenis_id`) USING BTREE;

--
-- Indexes for table `master_gejala`
--
ALTER TABLE `master_gejala`
  ADD PRIMARY KEY (`id_gejala`);

--
-- Indexes for table `master_jenis_kerusakan`
--
ALTER TABLE `master_jenis_kerusakan`
  ADD PRIMARY KEY (`id_jenis`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_username_unique` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `id_history` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `master_data_kerusakan`
--
ALTER TABLE `master_data_kerusakan`
  MODIFY `id_data` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `master_gejala`
--
ALTER TABLE `master_gejala`
  MODIFY `id_gejala` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `master_jenis_kerusakan`
--
ALTER TABLE `master_jenis_kerusakan`
  MODIFY `id_jenis` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
