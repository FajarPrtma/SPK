-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 29, 2024 at 10:19 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spk`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kelass`
--

CREATE TABLE `kelass` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kelass`
--

INSERT INTO `kelass` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Kelas 10', NULL, NULL),
(2, 'Kelas 11', NULL, NULL),
(3, 'Kelas 12', NULL, NULL),
(4, 'Bukan Siswa', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_07_21_095830_create_roles_table', 1),
(6, '2024_07_21_095941_add_role_id_to_users_table', 1),
(11, '2024_07_26_073912_create_quisioners_table', 2),
(18, '2024_07_26_205158_create_prostus_table', 3),
(22, '2024_07_28_015652_create_results_table', 4),
(23, '2024_07_28_215507_create_kelass_table', 5),
(24, '2024_07_28_215830_add_kelas_id_to_users_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `prostus`
--

CREATE TABLE `prostus` (
  `id` bigint UNSIGNED NOT NULL,
  `prodi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `prostus`
--

INSERT INTO `prostus` (`id`, `prodi`, `gambar`, `deskripsi`, `created_at`, `updated_at`) VALUES
(7, 'Teknik Informatika', 'libels.jpeg', 'IMAM GACOR', '2024-07-26 16:57:37', '2024-07-27 17:32:05'),
(11, 'BBBBBB', 'WhatsApp Image 2024-07-24 at 11.50.58.jpeg', 'TEKNIK INFORMATIKA', '2024-07-27 15:27:14', '2024-07-27 15:28:30'),
(13, 'aaaaaa', 'gdblue.jpg', 'aaaaa', '2024-07-29 09:42:05', '2024-07-29 09:42:05');

-- --------------------------------------------------------

--
-- Table structure for table `quisioners`
--

CREATE TABLE `quisioners` (
  `id` bigint UNSIGNED NOT NULL,
  `jurusan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cita` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `cita_nilai` double(8,2) NOT NULL DEFAULT '0.30',
  `pendidikan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `pendidikan_nilai` double(8,2) NOT NULL DEFAULT '0.15',
  `hobi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `hobi_nilai` double(8,2) NOT NULL DEFAULT '0.20',
  `keahlian` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `keahlian_nilai` double(8,2) NOT NULL DEFAULT '0.20',
  `lingkungan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `lingkungan_nilai` double(8,2) NOT NULL DEFAULT '0.15',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `quisioners`
--

INSERT INTO `quisioners` (`id`, `jurusan`, `cita`, `cita_nilai`, `pendidikan`, `pendidikan_nilai`, `hobi`, `hobi_nilai`, `keahlian`, `keahlian_nilai`, `lingkungan`, `lingkungan_nilai`, `created_at`, `updated_at`) VALUES
(1, 'Teknik Informatika', '1', 0.30, '2', 0.15, '3', 0.20, '4', 0.20, '5', 0.15, '2024-07-26 03:23:04', '2024-07-26 03:23:04'),
(3, 'Sistem Informasi', 'b', 0.30, 'b', 0.15, 'b', 0.20, 'b', 0.20, 'b', 0.15, '2024-07-27 20:09:41', '2024-07-27 20:09:41'),
(6, 'Farmasi', 'V', 0.30, 'V', 0.15, 'V', 0.20, 'V', 0.20, 'V', 0.15, '2024-07-28 04:44:57', '2024-07-28 04:44:57'),
(7, 'Hukum', 'k', 0.30, 'k', 0.15, 'k', 0.20, 'k', 0.20, 'k', 0.15, '2024-07-28 04:45:08', '2024-07-28 04:45:08'),
(8, 'Desain', 'l', 0.30, 'l', 0.15, 'l', 0.20, 'l', 0.20, 'l', 0.15, '2024-07-28 04:45:17', '2024-07-28 04:45:17');

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE `results` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `quisioner_id` bigint UNSIGNED NOT NULL,
  `cita_cita` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pendidikan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hobi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keahlian` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lingkungan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `results`
--

INSERT INTO `results` (`id`, `user_id`, `quisioner_id`, `cita_cita`, `pendidikan`, `hobi`, `keahlian`, `lingkungan`, `total`, `created_at`, `updated_at`) VALUES
(31, 3, 1, '0.8999999999999999', '0.3', '0.4', '0.8', '0.44999999999999996', 2.85, '2024-07-28 07:59:25', '2024-07-28 07:59:25'),
(32, 3, 3, '0.3', '0.3', '0.4', '0.2', '0.6', 1.80, '2024-07-28 07:59:25', '2024-07-28 07:59:25'),
(33, 3, 6, '1.2', '0.3', '0.4', '0.6000000000000001', '0.15', 2.65, '2024-07-28 07:59:25', '2024-07-28 07:59:25'),
(34, 3, 7, '0.6', '0.44999999999999996', '0.2', '0.4', '0.3', 1.95, '2024-07-28 07:59:25', '2024-07-28 07:59:25'),
(35, 3, 8, '0.3', '0.15', '0.4', '0.6000000000000001', '0.6', 2.05, '2024-07-28 07:59:25', '2024-07-28 07:59:25'),
(36, 7, 1, '0.6', '0.44999999999999996', '0.6000000000000001', '0.8', '0.6', 3.05, '2024-07-28 08:00:30', '2024-07-28 08:00:30'),
(37, 7, 3, '1.2', '0.44999999999999996', '0.4', '0.4', '0.6', 3.05, '2024-07-28 08:00:30', '2024-07-28 08:00:30'),
(38, 7, 6, '0.6', '0.44999999999999996', '0.4', '0.6000000000000001', '0.44999999999999996', 2.50, '2024-07-28 08:00:30', '2024-07-28 08:00:30'),
(39, 7, 7, '0.6', '0.3', '0.6000000000000001', '0.6000000000000001', '0.44999999999999996', 2.55, '2024-07-28 08:00:30', '2024-07-28 08:00:30'),
(40, 7, 8, '0.6', '0.44999999999999996', '0.2', '0.8', '0.6', 2.65, '2024-07-28 08:00:30', '2024-07-28 08:00:30');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'admin', NULL, NULL),
(2, 'siswa', NULL, NULL),
(3, 'guru', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `kelas_id` bigint UNSIGNED NOT NULL,
  `role_id` bigint UNSIGNED NOT NULL,
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

INSERT INTO `users` (`id`, `kelas_id`, `role_id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 4, 1, 'Fajar P', 'fajar@mail.tes', NULL, '$2y$10$RJB.u1ALeKshYQok3Vu7s.QnjHhSO/imh8PuGsdJdse0TFIw58t92', NULL, '2024-07-24 09:07:18', '2024-07-29 09:06:50'),
(3, 3, 2, 'Husein S', 'fajar2@mail.tes', NULL, '$2y$10$p.PCvxftdjHHpXutmXvrBu.G2gYLhpqmzwt5ezS7N4hWhXfLx1Rj6', NULL, '2024-07-25 23:07:43', '2024-07-29 09:13:50'),
(7, 1, 2, 'Imam Syiva', 'fajar1@mail.tes', NULL, '$2y$10$wooUv97V8IZaY3QZrnaUK.x7.bOMeWcN4KHombSb6VJtoYZsLqlpu', NULL, '2024-07-27 22:29:50', '2024-07-29 09:33:22'),
(8, 3, 2, 'Adhe I', 'fajar3@mail.tes', NULL, '$2y$10$NtyAtnXVnAoQ5O4JtOp02u9UdfX3L2HbsxtV8.ymEnlTwWr9R7Y0e', NULL, '2024-07-28 16:13:47', '2024-07-29 09:14:04'),
(9, 2, 2, 'Andhika', 'fajar4@mail.tes', NULL, '$2y$10$qZTLyjEiwCTjcFUHvOHJxelkDW62lKtZpYnXiggE2cDlb.9P8Y7N6', NULL, '2024-07-29 09:00:30', '2024-07-29 09:14:10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `kelass`
--
ALTER TABLE `kelass`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `prostus`
--
ALTER TABLE `prostus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quisioners`
--
ALTER TABLE `quisioners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `results`
--
ALTER TABLE `results`
  ADD PRIMARY KEY (`id`),
  ADD KEY `results_user_id_foreign` (`user_id`),
  ADD KEY `results_quisioner_id_foreign` (`quisioner_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_role_id_foreign` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kelass`
--
ALTER TABLE `kelass`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `prostus`
--
ALTER TABLE `prostus`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `quisioners`
--
ALTER TABLE `quisioners`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `results`
--
ALTER TABLE `results`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `results`
--
ALTER TABLE `results`
  ADD CONSTRAINT `results_quisioner_id_foreign` FOREIGN KEY (`quisioner_id`) REFERENCES `quisioners` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `results_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
