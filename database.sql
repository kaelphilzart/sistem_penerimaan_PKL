-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 18, 2023 at 05:30 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `penerimaan_laura`
--

-- --------------------------------------------------------

--
-- Table structure for table `anak`
--

CREATE TABLE `anak` (
  `id_magang` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `tempat_lahir` varchar(255) NOT NULL,
  `tanggal_lahir` varchar(50) NOT NULL,
  `asal_instansi` varchar(50) NOT NULL,
  `minat` varchar(50) NOT NULL,
  `surat_pengantar` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `anak`
--

INSERT INTO `anak` (`id_magang`, `email`, `nama_lengkap`, `tempat_lahir`, `tanggal_lahir`, `asal_instansi`, `minat`, `surat_pengantar`, `created_at`, `updated_at`) VALUES
(6, 'kurop.99@gmail.com', 'Muhammad Rizal Firdaus', 'bandung', '2023-10-18', 'polinema', 'Design UI UX', 'storage/pengantar/zainal,+Journal+manager,+06.+JE-Unisla+Robi+Bagja.pdf', '2023-10-29 14:55:32', '2023-10-29 15:01:55'),
(7, 'editorzal@gmail.com', 'rizal firdaus', 'solo', '2023-10-04', 'unik', 'Web Developers', 'storage/pengantar/zainal,+Journal+manager,+06.+JE-Unisla+Robi+Bagja (1).pdf', '2023-10-29 17:16:25', '2023-10-29 17:16:59');

-- --------------------------------------------------------

--
-- Table structure for table `c_magang`
--

CREATE TABLE `c_magang` (
  `id_cmagang` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `tempat_lahir` varchar(255) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `asal_instansi` varchar(30) NOT NULL,
  `minat` varchar(30) NOT NULL,
  `skill` text NOT NULL,
  `cv` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(2, '2023_07_27_030506_m_user', 1),
(3, '2023_07_27_030542_t_membership', 1);

-- --------------------------------------------------------

--
-- Table structure for table `m_user`
--

CREATE TABLE `m_user` (
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` varchar(50) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` bigint(20) UNSIGNED DEFAULT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `m_user`
--

INSERT INTO `m_user` (`id_user`, `email`, `username`, `password`, `level`, `remember_token`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
(1, '', 'admin', '$2y$10$yHBWy5R0GBcqOJ0H5C1jGeBR8/v.yCaLtPF61Vz3WEQ4k/Ai08a3G', 'admin', NULL, '2023-08-15 22:04:26', '2023-08-15 22:04:26', NULL, NULL),
(3, '', 'laura', '$2y$10$K4VMcIzdQhnjE2RTrt2to.oV8aGmvEYB8q21BCt6.gry9o2T8hwky', '', NULL, '2023-10-03 23:13:10', '2023-10-03 23:13:10', NULL, NULL),
(5, '', 'muhammad rizal firdaus', '$2y$10$wD5q2EVfjOL5z3wlKjjfRuJm4TjA078cJj/ef2pjd3MpDmdkOkYde', 'magang', NULL, '2023-10-15 21:13:59', '2023-10-15 21:13:59', 1, NULL),
(8, 'kurop.99@gmail.com', 'muhammad', '$2y$10$DYGU2SyTRrbbQ4TQxou9tenKdJzPoa6Kmz60GJSRoNcygx1XbCdxO', 'magang', NULL, '2023-10-29 14:55:32', '2023-10-29 14:55:32', 1, NULL),
(9, 'editorzal@gmail.com', 'rizal', '$2y$10$qIizTOmObOhqGC1aFsy1xuhUv/siyauD0aA5STrdGi3TJWDhKmd/m', 'magang', NULL, '2023-10-29 17:16:25', '2023-10-29 17:16:25', 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `t_membership`
--

CREATE TABLE `t_membership` (
  `id_member` bigint(20) UNSIGNED NOT NULL,
  `kode_member` varchar(50) NOT NULL,
  `nama_depan` varchar(150) NOT NULL,
  `nama_belakang` varchar(150) NOT NULL,
  `nickname` varchar(150) NOT NULL,
  `kelamin` tinyint(4) NOT NULL DEFAULT 0,
  `tempat_lahir` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `email` varchar(150) NOT NULL,
  `no_hp` varchar(30) NOT NULL,
  `id_discord` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `t_membership`
--

INSERT INTO `t_membership` (`id_member`, `kode_member`, `nama_depan`, `nama_belakang`, `nickname`, `kelamin`, `tempat_lahir`, `tanggal_lahir`, `email`, `no_hp`, `id_discord`, `created_at`, `updated_at`) VALUES
(1, 'SONIC_001_arab00', 'agus', 'salim', 'arab00', 1, 'bandung', '0220-09-01', 'ri@gmail.com', '0897763421', '77854312', '2023-08-20 21:14:46', '2023-08-20 21:14:46');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anak`
--
ALTER TABLE `anak`
  ADD PRIMARY KEY (`id_magang`);

--
-- Indexes for table `c_magang`
--
ALTER TABLE `c_magang`
  ADD PRIMARY KEY (`id_cmagang`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `m_user`
--
ALTER TABLE `m_user`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `m_user_created_by_foreign` (`created_by`),
  ADD KEY `m_user_updated_by_foreign` (`updated_by`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `t_membership`
--
ALTER TABLE `t_membership`
  ADD PRIMARY KEY (`id_member`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anak`
--
ALTER TABLE `anak`
  MODIFY `id_magang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `c_magang`
--
ALTER TABLE `c_magang`
  MODIFY `id_cmagang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `m_user`
--
ALTER TABLE `m_user`
  MODIFY `id_user` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t_membership`
--
ALTER TABLE `t_membership`
  MODIFY `id_member` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `m_user`
--
ALTER TABLE `m_user`
  ADD CONSTRAINT `m_user_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `m_user` (`id_user`) ON DELETE SET NULL,
  ADD CONSTRAINT `m_user_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `m_user` (`id_user`) ON DELETE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
