-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Jun 2025 pada 22.30
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kknunbari1`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `foto` varchar(255) NOT NULL,
  `nama_lengkap` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `nomer_whatsapp` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `user_id`, `foto`, `nama_lengkap`, `email`, `nomer_whatsapp`, `created_at`, `updated_at`) VALUES
(1, 1, 'storage/images/profiles/admin.png', 'admin', 'tesadmin@gmail.com', '0821221238213', '2025-05-31 10:04:50', '2025-05-31 03:25:18');

-- --------------------------------------------------------

--
-- Struktur dari tabel `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `dokumen`
--

CREATE TABLE `dokumen` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kelompok_kkn_id` bigint(20) UNSIGNED NOT NULL,
  `file_dokumen` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `dpl`
--

CREATE TABLE `dpl` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `foto` varchar(255) NOT NULL,
  `nama_lengkap` varchar(255) DEFAULT NULL,
  `nip` varchar(255) DEFAULT NULL,
  `gelar` varchar(255) DEFAULT NULL,
  `fakultas` varchar(255) DEFAULT NULL,
  `prodi` varchar(255) DEFAULT NULL,
  `nama_bank` varchar(255) DEFAULT NULL,
  `nomer_rekening` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `nomer_whatsapp` varchar(255) DEFAULT NULL,
  `status` enum('belum terdaftar','terdaftar') NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `dpl`
--

INSERT INTO `dpl` (`id`, `user_id`, `foto`, `nama_lengkap`, `nip`, `gelar`, `fakultas`, `prodi`, `nama_bank`, `nomer_rekening`, `email`, `nomer_whatsapp`, `status`, `created_at`, `updated_at`) VALUES
(1, 3, '', 'tesdosen', '123456', 'S.Kom, M.Si', 'Fakultas Ekonomi', 'Ekonomi Pembangunan', 'Bank BCA', '7879999200', 'tesdosen@gmail.com', '123123123', 'terdaftar', '2025-05-31 10:17:00', '2025-05-31 04:49:17');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
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
-- Struktur dari tabel `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kalender_kegiatan`
--

CREATE TABLE `kalender_kegiatan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tanggal` date NOT NULL,
  `waktu` varchar(255) NOT NULL,
  `tempat` varchar(255) NOT NULL,
  `pembahasan` varchar(255) NOT NULL,
  `narasumber` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kalender_kegiatan`
--

INSERT INTO `kalender_kegiatan` (`id`, `tanggal`, `waktu`, `tempat`, `pembahasan`, `narasumber`, `created_at`, `updated_at`) VALUES
(1, '2025-06-02', '10:25 - 12:00', 'Universitas Batanghari', 'Workshop Audience', 'Tes, S.E, M.E', '2025-05-31 04:38:38', '2025-05-31 04:38:38');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelompok_kkn`
--

CREATE TABLE `kelompok_kkn` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_kelompok` varchar(255) NOT NULL,
  `lokasi` varchar(255) DEFAULT NULL,
  `dpl_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kelompok_kkn`
--

INSERT INTO `kelompok_kkn` (`id`, `nama_kelompok`, `lokasi`, `dpl_id`, `created_at`, `updated_at`) VALUES
(1, 'Jaguar', 'Kumpe Kota Karang', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelompok_mahasiswa`
--

CREATE TABLE `kelompok_mahasiswa` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kelompok_kkn_id` bigint(20) UNSIGNED NOT NULL,
  `mahasiswa_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kelompok_mahasiswa`
--

INSERT INTO `kelompok_mahasiswa` (`id`, `kelompok_kkn_id`, `mahasiswa_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2025-05-31 04:35:39', '2025-05-31 04:35:39');

-- --------------------------------------------------------

--
-- Struktur dari tabel `logbook`
--

CREATE TABLE `logbook` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `mahasiswa_id` bigint(20) UNSIGNED NOT NULL,
  `kelompok_kkn_id` bigint(20) UNSIGNED NOT NULL,
  `tanggal` date NOT NULL,
  `jam` varchar(255) NOT NULL,
  `kegiatan` varchar(255) NOT NULL,
  `tempat` varchar(255) NOT NULL,
  `file_foto` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `foto` varchar(255) NOT NULL,
  `nama_lengkap` varchar(255) DEFAULT NULL,
  `npm` varchar(255) DEFAULT NULL,
  `fakultas` varchar(255) DEFAULT NULL,
  `prodi` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `nomer_whatsapp` varchar(255) DEFAULT NULL,
  `status` enum('belum terdaftar','diproses','terdaftar') NOT NULL,
  `file_ktm` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `user_id`, `foto`, `nama_lengkap`, `npm`, `fakultas`, `prodi`, `email`, `nomer_whatsapp`, `status`, `file_ktm`, `created_at`, `updated_at`) VALUES
(1, 2, '', 'tesmahasiswa', '123123123', 'Fakultas Ekonomi', 'Ekonomi Pembangunan', 'tesmaha@gmail.com', '123521231231', 'terdaftar', 'sad', NULL, '2025-05-31 05:18:45');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2024_12_03_052830_create_dpl_table', 1),
(5, '2024_12_03_052830_create_mahasiswa_table', 1),
(6, '2024_12_03_052831_create_admin_table', 1),
(7, '2024_12_03_053112_create_kelompok_kkn_table', 1),
(8, '2024_12_03_053138_create_kelompok_mahasiswa_table', 1),
(9, '2024_12_03_053154_create_logbook_table', 1),
(10, '2024_12_06_173418_create_dokumen_table', 1),
(11, '2024_12_18_193145_create_kalender_kegiatan_table', 1),
(12, '2024_12_18_193157_create_sumber_daya_table', 1),
(13, '2025_01_01_000000_create_sessions_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` text NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('BMaxKFDu15LdfTcuJhyU9Du3mXEwjn1vsyARmpn1', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/137.0.0.0 Safari/537.36 Edg/137.0.0.0', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiYnBzZUJsbDJuYmd5eHR6cm5IU0ZVR0lCalJWckQ0YWhjOXhScDd4ZCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJuZXciO2E6MDp7fXM6Mzoib2xkIjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjk6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9wcm9maWxlIjt9czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTt9', 1750061808),
('nkubBMsXk6LNzZOT32FLRfO6yPesCqEvGwDgVoBI', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/137.0.0.0 Safari/537.36 Edg/137.0.0.0', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiTU9RWVFndU5HYlUxNENFM2c4MTd1cTlZeUQ0d2pmZnZpMGREa0puTyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7fQ==', 1750060363),
('pvStHVR7Ksv3I3YL0RRtTdi1tnOoNtBJA7ZRZwvD', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/137.0.0.0 Safari/537.36 Edg/137.0.0.0', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoiT1FPSHdGbDl4RXBQa0FydmpjUnFOamNUejhublltZWFxREdLSWdtaiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1750060884);

-- --------------------------------------------------------

--
-- Struktur dari tabel `sumber_daya`
--

CREATE TABLE `sumber_daya` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) NOT NULL,
  `tipe_file` varchar(255) NOT NULL,
  `size` bigint(20) NOT NULL,
  `path` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('mahasiswa','admin','dpl') NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role`, `created_at`, `updated_at`) VALUES
(1, 'admin', '$2y$12$P1igJQxbpIS3jZrXF/N6M.UHTUDHWCcjMPnVX0rFrmjfc914rgwja', 'admin', '2025-05-31 02:58:51', '2025-05-31 04:16:28'),
(2, 'mahasiswa', '$2y$12$qOUcq07XXzHewqf3u/dry.ivH.jYSpadRlRffrlTwQEx9zeqodpFe', 'mahasiswa', '2025-05-31 02:58:51', '2025-05-31 02:58:51'),
(3, 'dpl', '$2y$12$vOFKJqLKdkKmeJJ.OYTt4OhiH2z3CuJh6hjpSIXoXGfuifgZtNtWe', 'dpl', '2025-05-31 02:58:51', '2025-05-31 02:58:51');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admin_email_unique` (`email`),
  ADD KEY `admin_user_id_foreign` (`user_id`);

--
-- Indeks untuk tabel `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indeks untuk tabel `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indeks untuk tabel `dokumen`
--
ALTER TABLE `dokumen`
  ADD PRIMARY KEY (`id`),
  ADD KEY `dokumen_kelompok_kkn_id_foreign` (`kelompok_kkn_id`);

--
-- Indeks untuk tabel `dpl`
--
ALTER TABLE `dpl`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `dpl_nip_unique` (`nip`),
  ADD UNIQUE KEY `dpl_email_unique` (`email`),
  ADD KEY `dpl_user_id_foreign` (`user_id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indeks untuk tabel `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kalender_kegiatan`
--
ALTER TABLE `kalender_kegiatan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kelompok_kkn`
--
ALTER TABLE `kelompok_kkn`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kelompok_kkn_nama_kelompok_unique` (`nama_kelompok`),
  ADD KEY `kelompok_kkn_dpl_id_foreign` (`dpl_id`);

--
-- Indeks untuk tabel `kelompok_mahasiswa`
--
ALTER TABLE `kelompok_mahasiswa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kelompok_mahasiswa_kelompok_kkn_id_foreign` (`kelompok_kkn_id`),
  ADD KEY `kelompok_mahasiswa_mahasiswa_id_foreign` (`mahasiswa_id`);

--
-- Indeks untuk tabel `logbook`
--
ALTER TABLE `logbook`
  ADD PRIMARY KEY (`id`),
  ADD KEY `logbook_mahasiswa_id_foreign` (`mahasiswa_id`),
  ADD KEY `logbook_kelompok_kkn_id_foreign` (`kelompok_kkn_id`);

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `mahasiswa_npm_unique` (`npm`),
  ADD UNIQUE KEY `mahasiswa_email_unique` (`email`),
  ADD KEY `mahasiswa_user_id_foreign` (`user_id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indeks untuk tabel `sumber_daya`
--
ALTER TABLE `sumber_daya`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `dokumen`
--
ALTER TABLE `dokumen`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `dpl`
--
ALTER TABLE `dpl`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `kalender_kegiatan`
--
ALTER TABLE `kalender_kegiatan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `kelompok_kkn`
--
ALTER TABLE `kelompok_kkn`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `kelompok_mahasiswa`
--
ALTER TABLE `kelompok_mahasiswa`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `logbook`
--
ALTER TABLE `logbook`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `sumber_daya`
--
ALTER TABLE `sumber_daya`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `admin_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Ketidakleluasaan untuk tabel `dokumen`
--
ALTER TABLE `dokumen`
  ADD CONSTRAINT `dokumen_kelompok_kkn_id_foreign` FOREIGN KEY (`kelompok_kkn_id`) REFERENCES `kelompok_kkn` (`id`);

--
-- Ketidakleluasaan untuk tabel `dpl`
--
ALTER TABLE `dpl`
  ADD CONSTRAINT `dpl_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Ketidakleluasaan untuk tabel `kelompok_kkn`
--
ALTER TABLE `kelompok_kkn`
  ADD CONSTRAINT `kelompok_kkn_dpl_id_foreign` FOREIGN KEY (`dpl_id`) REFERENCES `dpl` (`id`);

--
-- Ketidakleluasaan untuk tabel `kelompok_mahasiswa`
--
ALTER TABLE `kelompok_mahasiswa`
  ADD CONSTRAINT `kelompok_mahasiswa_kelompok_kkn_id_foreign` FOREIGN KEY (`kelompok_kkn_id`) REFERENCES `kelompok_kkn` (`id`),
  ADD CONSTRAINT `kelompok_mahasiswa_mahasiswa_id_foreign` FOREIGN KEY (`mahasiswa_id`) REFERENCES `mahasiswa` (`id`);

--
-- Ketidakleluasaan untuk tabel `logbook`
--
ALTER TABLE `logbook`
  ADD CONSTRAINT `logbook_kelompok_kkn_id_foreign` FOREIGN KEY (`kelompok_kkn_id`) REFERENCES `kelompok_kkn` (`id`),
  ADD CONSTRAINT `logbook_mahasiswa_id_foreign` FOREIGN KEY (`mahasiswa_id`) REFERENCES `mahasiswa` (`id`);

--
-- Ketidakleluasaan untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD CONSTRAINT `mahasiswa_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
