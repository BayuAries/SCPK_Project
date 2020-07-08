-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 08, 2020 at 06:55 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sentral`
--

-- --------------------------------------------------------

--
-- Table structure for table `bayi`
--

CREATE TABLE `bayi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ortu_id` int(11) NOT NULL,
  `usia` int(11) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `jenis_kelamin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bayi`
--

INSERT INTO `bayi` (`id`, `nama`, `ortu_id`, `usia`, `tanggal_lahir`, `jenis_kelamin`, `created_at`, `updated_at`) VALUES
(1, 'santuy', 3, 4, '2020-01-14', 'perempuan', '2020-06-27 19:19:07', '2020-07-01 02:20:07'),
(2, 'aji', 4, 1, '2020-06-08', 'laki-laki', '2020-07-01 19:26:57', '2020-07-07 20:27:00'),
(3, 'Ridho', 5, 0, '2020-07-07', 'laki-laki', '2020-07-01 20:25:16', '2020-07-07 20:35:46'),
(4, 'bam', 6, 3, '2020-04-08', 'laki-laki', '2020-07-02 06:40:27', '2020-07-07 20:39:20'),
(5, 'Bimo', 1, 5, '2020-05-23', 'laki-laki', '2020-07-05 02:35:50', '2020-07-05 02:35:50'),
(9, 'bay', 5, 1, '2020-05-13', 'laki-laki', '2020-07-07 19:49:33', '2020-07-07 19:49:33');

-- --------------------------------------------------------

--
-- Table structure for table `berat`
--

CREATE TABLE `berat` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `bulan` int(11) NOT NULL,
  `minsd` double(8,2) NOT NULL,
  `median` double(8,2) NOT NULL,
  `plussd` double(8,2) NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `berat`
--

INSERT INTO `berat` (`id`, `bulan`, `minsd`, `median`, `plussd`, `gender`, `created_at`, `updated_at`) VALUES
(1, 0, 2.90, 3.30, 3.90, 'laki-laki', '2020-06-27 17:00:00', NULL),
(2, 1, 3.90, 4.50, 5.10, 'laki-laki', '2020-06-27 17:00:00', NULL),
(3, 2, 4.90, 5.60, 6.30, 'laki-laki', '2020-06-27 17:00:00', NULL),
(4, 3, 5.70, 6.40, 7.20, 'laki-laki', '2020-06-27 17:00:00', NULL),
(5, 4, 6.20, 7.00, 7.80, 'laki-laki', '2020-06-27 17:00:00', NULL),
(6, 5, 6.70, 7.50, 8.40, 'laki-laki', '2020-06-27 17:00:00', NULL),
(7, 6, 7.10, 7.90, 8.80, 'laki-laki', '2020-06-27 17:00:00', NULL),
(8, 7, 7.40, 8.30, 9.20, 'laki-laki', '2020-06-27 17:00:00', NULL),
(9, 8, 7.70, 8.60, 9.60, 'laki-laki', '2020-06-27 17:00:00', NULL),
(10, 9, 8.00, 8.90, 9.90, 'laki-laki', '2020-06-27 17:00:00', NULL),
(11, 10, 8.20, 9.20, 10.20, 'laki-laki', '2020-06-27 17:00:00', NULL),
(12, 11, 8.40, 9.40, 10.50, 'laki-laki', '2020-06-27 17:00:00', NULL),
(13, 12, 8.60, 9.60, 10.80, 'laki-laki', '2020-06-27 17:00:00', NULL),
(14, 0, 2.80, 3.20, 3.70, 'perempuan', '2020-06-27 17:00:00', NULL),
(15, 1, 3.60, 4.20, 4.80, 'perempuan', '2020-06-27 17:00:00', NULL),
(16, 2, 4.50, 5.10, 5.80, 'perempuan', '2020-06-27 17:00:00', NULL),
(17, 3, 5.20, 5.80, 6.60, 'perempuan', '2020-06-27 17:00:00', NULL),
(18, 4, 5.70, 6.40, 7.30, 'perempuan', '2020-06-27 17:00:00', NULL),
(19, 5, 6.10, 6.90, 7.80, 'perempuan', '2020-06-27 17:00:00', NULL),
(20, 6, 6.50, 7.30, 8.20, 'perempuan', '2020-06-27 17:00:00', NULL),
(21, 7, 6.80, 7.60, 8.60, 'perempuan', '2020-06-27 17:00:00', NULL),
(22, 8, 7.00, 7.90, 9.00, 'perempuan', '2020-06-27 17:00:00', NULL),
(23, 9, 7.30, 8.20, 9.30, 'perempuan', '2020-06-27 17:00:00', NULL),
(24, 10, 7.50, 8.50, 9.60, 'perempuan', '2020-06-27 17:00:00', NULL),
(25, 11, 7.70, 8.70, 9.90, 'perempuan', '2020-06-27 17:00:00', NULL),
(26, 12, 7.90, 8.90, 10.10, 'perempuan', '2020-06-27 17:00:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gizi`
--

CREATE TABLE `gizi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `bayi_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `berat_badan` double(8,2) NOT NULL,
  `tinggi` double(8,2) NOT NULL,
  `bb_u` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hasil1` double(8,2) DEFAULT NULL,
  `tb_u` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hasil2` double(8,2) DEFAULT NULL,
  `usia` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gizi`
--

INSERT INTO `gizi` (`id`, `bayi_id`, `berat_badan`, `tinggi`, `bb_u`, `hasil1`, `tb_u`, `hasil2`, `usia`, `created_at`, `updated_at`) VALUES
(13, '9', 7.10, 50.00, 'Lebih', 4.33, 'Pendek', -2.47, 1, '2020-07-07 19:56:20', '2020-07-07 19:56:20'),
(14, '9', 7.10, 62.10, 'Lebih', 4.33, 'Tinggi', 3.70, 1, '2020-07-07 20:17:51', '2020-07-07 20:17:51'),
(15, '9', 7.10, 62.10, 'Lebih', 4.33, 'Tinggi', 3.70, 1, '2020-07-07 20:18:12', '2020-07-07 20:18:12'),
(16, '2', 7.10, 62.10, 'Lebih', 6.33, 'Tinggi', 6.42, 0, '2020-07-07 20:18:34', '2020-07-07 20:18:34'),
(18, '2', 7.10, 62.10, 'Lebih', 6.33, 'Tinggi', 6.42, 0, '2020-07-07 20:20:05', '2020-07-07 20:20:05'),
(19, '2', 7.10, 62.10, 'Lebih', 6.33, 'Tinggi', 6.42, 0, '2020-07-07 20:20:18', '2020-07-07 20:20:18'),
(20, '2', 7.10, 62.10, 'Lebih', 6.33, 'Tinggi', 6.42, 0, '2020-07-07 20:22:57', '2020-07-07 20:22:57'),
(21, '2', 7.10, 62.10, 'Lebih', 6.33, 'Tinggi', 6.42, 0, '2020-07-07 20:26:37', '2020-07-07 20:26:37'),
(24, '3', 7.10, 61.00, 'Lebih', 6.33, 'Tinggi', 5.84, 0, '2020-07-07 20:35:46', '2020-07-07 20:35:46'),
(25, '2', 6.00, 61.00, 'Lebih', 2.50, 'Tinggi', 3.15, 1, '2020-07-07 20:37:42', '2020-07-07 20:37:42'),
(26, '4', 7.10, 50.00, 'Lebih', 6.33, 'Normal', 0.05, 0, '2020-07-07 20:38:18', '2020-07-07 20:38:18'),
(28, '2', 7.10, 61.00, 'Lebih', 4.33, 'Tinggi', 3.15, 1, '2020-07-07 20:40:18', '2020-07-07 20:40:18'),
(29, '4', 6.00, 50.00, 'Baik', -0.57, 'Sangat Pendek', -5.70, 3, '2020-07-07 20:45:01', '2020-07-07 20:45:01');

-- --------------------------------------------------------

--
-- Table structure for table `kader`
--

CREATE TABLE `kader` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(82, '2014_10_12_000000_create_users_table', 1),
(83, '2014_10_12_100000_create_password_resets_table', 1),
(84, '2019_08_19_000000_create_failed_jobs_table', 1),
(85, '2020_06_23_043111_create_kader_tabel', 1),
(86, '2020_06_23_044610_create_ortu_table', 1),
(87, '2020_06_23_044634_create_bayi_table', 1),
(89, '2020_06_23_044719_create_vaksin_table', 1),
(90, '2020_06_28_093545_tinggi', 2),
(91, '2020_06_28_093558_berat', 2),
(93, '2020_06_23_044659_create_gizi_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `ortu`
--

CREATE TABLE `ortu` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_tlp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ortu`
--

INSERT INTO `ortu` (`id`, `nama`, `no_tlp`, `alamat`, `created_at`, `updated_at`) VALUES
(1, 'bambang', '0812345678', 'gedongan', '2020-06-27 18:38:58', '2020-06-27 18:38:58'),
(3, 'baba', '4353453454', 'saasaa', '2020-06-27 18:40:50', '2020-06-27 18:40:50'),
(4, 'sinta', '0812536374841', 'jalan  baru', '2020-07-01 19:24:41', '2020-07-01 19:24:41'),
(5, 'sasa', '081265841902', 'jalan damai 2', '2020-07-01 20:24:57', '2020-07-01 20:24:57'),
(6, 'Bayu Aries Wicaksono', '0812345678', 'jalan siaga', '2020-07-02 06:38:43', '2020-07-02 06:38:43');

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
-- Table structure for table `tinggi`
--

CREATE TABLE `tinggi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `bulan` int(11) NOT NULL,
  `minsd` double(8,2) NOT NULL,
  `median` double(8,2) NOT NULL,
  `plussd` double(8,2) NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tinggi`
--

INSERT INTO `tinggi` (`id`, `bulan`, `minsd`, `median`, `plussd`, `gender`, `created_at`, `updated_at`) VALUES
(1, 0, 48.00, 49.90, 51.80, 'laki-laki', '2020-06-27 17:00:00', NULL),
(2, 1, 52.80, 54.70, 56.70, 'laki-laki', '2020-06-27 17:00:00', NULL),
(3, 2, 56.40, 58.40, 60.40, 'laki-laki', '2020-06-27 17:00:00', NULL),
(4, 3, 59.40, 61.40, 63.50, 'laki-laki', '2020-06-27 17:00:00', NULL),
(5, 4, 61.80, 63.90, 66.00, 'laki-laki', '2020-06-27 17:00:00', NULL),
(6, 5, 63.80, 65.90, 68.00, 'laki-laki', '2020-06-27 17:00:00', NULL),
(7, 6, 65.50, 67.60, 69.80, 'laki-laki', '2020-06-27 17:00:00', NULL),
(8, 7, 67.00, 69.20, 71.30, 'laki-laki', '2020-06-27 17:00:00', NULL),
(9, 8, 68.40, 70.60, 72.80, 'laki-laki', '2020-06-27 17:00:00', NULL),
(10, 9, 69.70, 72.00, 74.20, 'laki-laki', '2020-06-27 17:00:00', NULL),
(11, 10, 71.00, 73.30, 75.60, 'laki-laki', '2020-06-27 17:00:00', NULL),
(12, 11, 72.20, 74.50, 76.90, 'laki-laki', '2020-06-27 17:00:00', NULL),
(13, 12, 73.40, 75.70, 78.10, 'laki-laki', '2020-06-27 17:00:00', NULL),
(14, 0, 47.30, 49.10, 51.00, 'perempuan', '2020-06-27 17:00:00', NULL),
(15, 1, 51.70, 53.70, 55.60, 'perempuan', '2020-06-27 17:00:00', NULL),
(16, 2, 55.00, 57.10, 59.10, 'perempuan', '2020-06-27 17:00:00', NULL),
(17, 3, 57.70, 59.80, 61.90, 'perempuan', '2020-06-27 17:00:00', NULL),
(18, 4, 59.90, 62.10, 64.30, 'perempuan', '2020-06-27 17:00:00', NULL),
(19, 5, 61.80, 64.00, 66.20, 'perempuan', '2020-06-27 17:00:00', NULL),
(20, 6, 63.50, 65.70, 68.00, 'perempuan', '2020-06-27 17:00:00', NULL),
(21, 7, 65.00, 67.30, 69.60, 'perempuan', '2020-06-27 17:00:00', NULL),
(22, 8, 66.40, 68.70, 71.10, 'perempuan', '2020-06-27 17:00:00', NULL),
(23, 9, 67.70, 70.10, 72.60, 'perempuan', '2020-06-27 17:00:00', NULL),
(24, 10, 69.00, 71.50, 73.90, 'perempuan', '2020-06-27 17:00:00', NULL),
(25, 11, 70.30, 72.80, 75.30, 'perempuan', '2020-06-27 17:00:00', NULL),
(26, 12, 71.40, 74.00, 76.60, 'perempuan', '2020-06-27 17:00:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'bayu', 'bayu@gmail.com', NULL, '$2y$10$D7duEHUeCbFCBkfkj8rsZOMXxXucb0tc/IkZ1JGqVC3pqNoyT6QH6', NULL, '2020-06-27 18:34:06', '2020-06-27 18:34:06');

-- --------------------------------------------------------

--
-- Table structure for table `vaksin`
--

CREATE TABLE `vaksin` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bulan` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vaksin`
--

INSERT INTO `vaksin` (`id`, `nama`, `bulan`, `created_at`, `updated_at`) VALUES
(3, 'BCG', 0, NULL, NULL),
(5, 'Polio-1', 2, '2020-07-05 01:53:45', '2020-07-05 01:53:45'),
(7, 'Hepatitis B-2', 2, '2020-07-05 01:56:10', '2020-07-05 01:56:10'),
(8, 'DTP-1', 2, '2020-07-05 01:57:19', '2020-07-05 01:57:19'),
(9, 'Hepatitis B-3', 3, '2020-07-05 01:58:54', '2020-07-05 01:58:54'),
(10, 'Hib-1', 2, '2020-07-05 01:59:12', '2020-07-05 01:59:12'),
(11, 'Hepatitis B-1', 0, '2020-07-05 02:31:37', '2020-07-05 02:31:37'),
(12, 'Polio-0', 0, '2020-07-05 02:32:00', '2020-07-05 02:32:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bayi`
--
ALTER TABLE `bayi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `berat`
--
ALTER TABLE `berat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gizi`
--
ALTER TABLE `gizi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kader`
--
ALTER TABLE `kader`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ortu`
--
ALTER TABLE `ortu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `tinggi`
--
ALTER TABLE `tinggi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `vaksin`
--
ALTER TABLE `vaksin`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bayi`
--
ALTER TABLE `bayi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `berat`
--
ALTER TABLE `berat`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gizi`
--
ALTER TABLE `gizi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `kader`
--
ALTER TABLE `kader`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;

--
-- AUTO_INCREMENT for table `ortu`
--
ALTER TABLE `ortu`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tinggi`
--
ALTER TABLE `tinggi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `vaksin`
--
ALTER TABLE `vaksin`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
