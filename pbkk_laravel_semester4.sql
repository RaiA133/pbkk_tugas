-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2023 at 04:03 PM
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
-- Database: `pbkk_laravel_semester4`
--

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE `dosen` (
  `id` int(32) NOT NULL,
  `nama_dosen` varchar(100) DEFAULT NULL,
  `nidn` char(32) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`id`, `nama_dosen`, `nidn`, `created_at`, `updated_at`) VALUES
(0, 'Pak Galih', '27463', '2023-06-12 12:23:20', '2023-06-12 12:23:20'),
(1, 'Pak Irwan', '23123', '2023-06-12 12:23:20', '2023-06-12 12:23:20');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jk` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `hp` varchar(255) NOT NULL,
  `jurusan` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `dosen_id` char(32) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nama`, `jk`, `alamat`, `hp`, `jurusan`, `email`, `dosen_id`, `created_at`, `updated_at`) VALUES
(1, 'Raie Aswajjillah', 'Laki-laki', 'Jl. Baladewa Utara No.32', '088218136394', 'Teknik Informatika', 'aswajjillah.kuliah@gmail.com', '0', '2023-06-10 07:15:47', '2023-06-10 07:15:47'),
(2, 'Sarah Maya Sefa', 'Perempuan', 'Jl. Cipedes Hegar No.43', '088348288142', 'Manajemen', 'sarah.maya13@gmail.com', '0', '2023-06-10 07:18:49', '2023-06-11 20:17:27'),
(3, 'Hafidz Abdullah', 'Laki-laki', 'Jl. Cimalaya Girang No.112', '092838281232', 'Agroteknologi', 'hafidz12234@gmail.com', '0', '2023-06-10 07:17:44', '2023-06-10 07:17:44'),
(4, 'Adi Ferdiansyah', 'Laki-Laki', 'JL. Manukwari no.223', '081237273271', 'agroteknologi', 'adi123@gmail.com', '1', '2023-06-11 09:40:17', '2023-06-11 20:17:36'),
(5, 'udin', 'Laki-Laki', 'bandung', '62812345', 'informatika', 'udin@gmail.com', '1', '2023-06-11 23:50:26', '2023-06-11 23:50:26'),
(6, 'Bayu Anggara', 'Laki-Laki', 'Jl. Pagarsih, No. 224', '088291938211', 'Teknik Sipil', 'Bayu34@gmail.com', '1', '2023-06-12 01:05:53', '2023-06-12 01:15:11');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa_matkul`
--

CREATE TABLE `mahasiswa_matkul` (
  `id` int(11) NOT NULL,
  `mahasiswa_id` int(11) NOT NULL,
  `matkul_id` int(11) DEFAULT NULL,
  `nilai` char(10) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mahasiswa_matkul`
--

INSERT INTO `mahasiswa_matkul` (`id`, `mahasiswa_id`, `matkul_id`, `nilai`, `created_at`, `updated_at`) VALUES
(0, 1, 0, '90', '2023-06-12 12:54:18', '2023-06-12 12:54:18'),
(1, 2, 0, '86', '2023-06-12 12:54:18', '2023-06-12 12:54:18'),
(2, 3, 1, '85', '2023-06-12 12:54:18', '2023-06-12 12:54:18'),
(3, 4, 1, '95', '2023-06-12 12:54:18', '2023-06-12 12:54:18'),
(4, 5, 2, '74', '2023-06-12 12:54:18', '2023-06-12 12:54:18'),
(5, 6, 2, '78', '2023-06-12 12:54:18', '2023-06-12 12:54:18');

-- --------------------------------------------------------

--
-- Table structure for table `matkul`
--

CREATE TABLE `matkul` (
  `id` int(11) NOT NULL,
  `kode_matkul` varchar(50) NOT NULL,
  `nama_matkul` varchar(50) NOT NULL,
  `semester` varchar(3) NOT NULL,
  `dosen` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `matkul`
--

INSERT INTO `matkul` (`id`, `kode_matkul`, `nama_matkul`, `semester`, `dosen`, `created_at`, `updated_at`) VALUES
(0, 'P1001', 'Web Programming', '4', 'Pak Galih', '2023-06-12 12:51:04', '2023-06-12 12:51:04'),
(1, 'P1002', 'Java Developemnt', '6', 'Pak Irwan', '2023-06-12 12:51:04', '2023-06-12 12:51:04'),
(2, 'P1003', 'Kalkulus Diferensial', '2', 'Pak Handoyo', '2023-06-12 12:53:04', '2023-06-12 12:53:04');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_06_10_132327_create_mahasiswa_table', 1),
(6, '2023_06_12_133348_create_tendik_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `tendik`
--

CREATE TABLE `tendik` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jenkel` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `hp` varchar(255) NOT NULL,
  `bagian` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `no_ktp` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tendik`
--

INSERT INTO `tendik` (`id`, `nama`, `jenkel`, `alamat`, `hp`, `bagian`, `email`, `foto`, `no_ktp`, `created_at`, `updated_at`) VALUES
(1, 'raie aswajjillah', 'Pria', 'Jl. Baladewa utara No.32', '088218136394', 'Pemasaran', 'rai010303@gmail.com', 'pp3.png', 'KTP DIGITAL.png', '2023-06-12 06:53:50', '2023-06-12 06:53:50');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `wali`
--

CREATE TABLE `wali` (
  `id` int(10) NOT NULL,
  `nama_wali` varchar(50) DEFAULT NULL,
  `pekerjaan` varchar(100) DEFAULT NULL,
  `mahasiswa_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `wali`
--

INSERT INTO `wali` (`id`, `nama_wali`, `pekerjaan`, `mahasiswa_id`, `created_at`, `updated_at`) VALUES
(0, 'Bapak Supri', 'Penjahit', 1, '2023-06-12 03:20:05', '2023-06-12 03:20:17'),
(1, 'Bapak Herman', 'PNS', 2, '2023-06-12 03:21:06', '2023-06-12 03:21:06'),
(2, 'Bapak Soleh', 'Pekerja Kantoran', 3, '2023-06-12 03:21:06', '2023-06-12 03:21:06'),
(3, 'Bapak Dody', 'Pengusaha Warung', 4, '2023-06-12 03:22:49', '2023-06-12 03:22:49'),
(4, 'Pak Burhan', 'Pengangguran', 5, NULL, NULL),
(5, 'Bu Rika', 'Affiliator Tiktok', 6, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mahasiswa_matkul`
--
ALTER TABLE `mahasiswa_matkul`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `matkul`
--
ALTER TABLE `matkul`
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
-- Indexes for table `tendik`
--
ALTER TABLE `tendik`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `wali`
--
ALTER TABLE `wali`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tendik`
--
ALTER TABLE `tendik`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
