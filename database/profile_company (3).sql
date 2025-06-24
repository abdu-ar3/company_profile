-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 24 Jun 2025 pada 09.52
-- Versi server: 8.0.30
-- Versi PHP: 8.3.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `profile_company`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin_users`
--

CREATE TABLE `admin_users` (
  `id` bigint UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `beritas`
--

CREATE TABLE `beritas` (
  `id` bigint UNSIGNED NOT NULL,
  `judul` varchar(55) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci,
  `jenis_berita` enum('internal','eksternal') COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail_berita` text COLLATE utf8mb4_unicode_ci,
  `link_berita` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `beritas`
--

INSERT INTO `beritas` (`id`, `judul`, `gambar`, `deskripsi`, `jenis_berita`, `detail_berita`, `link_berita`, `tanggal`, `created_at`, `updated_at`) VALUES
(5, 'Saham indonesia sedang naik', 'beritas/djBl5NcFv9J9dtMVtztCBOAdK9Ohu7pdbvDSBSD2.png', 'Berita news', 'eksternal', NULL, 'https://www.idx.co.id/id', '2025-06-09', '2025-06-08 21:05:48', '2025-06-08 21:05:48'),
(7, 'Jepang Turunkan Lapis kedua vs Indonesia', 'beritas/BZ2zwEtT6yr8KNAg8oA8gxAABhwn5Qd0FVdwy7FK.jpg', 'Jelang Pertandingan. update\r\nJepang Turunkan Lapis kedua vs Indonesia', 'eksternal', NULL, 'https://www.bolasport.com/read/314260041/jepang-turunkan-tim-lapis-kedua-lawan-timnas-indonesia-patrick-kluivert-tetap-waspada-mereka-tetap-tim-kuat', '2025-06-22', '2025-06-08 21:20:14', '2025-06-22 03:04:49'),
(8, 'CV. Lestari Elektrik Akan cuti bersama', 'beritas/11q2IFgLcaGVzszwEHDtDwCrdXhCa8UYSQ4cT2VW.jpg', 'Annoucment cuti bersama', 'internal', 'Annoucment cuti bersama\r\nDikarenakannn sedang ada Covid', NULL, '2025-06-23', '2025-06-22 22:50:29', '2025-06-22 22:50:29');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori_produks`
--

CREATE TABLE `kategori_produks` (
  `id` bigint UNSIGNED NOT NULL,
  `nama_kategori` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kategori_produks`
--

INSERT INTO `kategori_produks` (`id`, `nama_kategori`, `created_at`, `updated_at`) VALUES
(1, 'Elektronik', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `lamarans`
--

CREATE TABLE `lamarans` (
  `id` bigint UNSIGNED NOT NULL,
  `nama_pelamar` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(31) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_cv` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `posisi_dilamar` varchar(35) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_lamar` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `lamarans`
--

INSERT INTO `lamarans` (`id`, `nama_pelamar`, `email`, `file_cv`, `posisi_dilamar`, `tanggal_lamar`, `created_at`, `updated_at`) VALUES
(1, 'Abduu', 'abdhurohman7@gmail.com', 'cv/XnjlNHtTbR9KFZeSIn83rDNXfdDXCTyZ8stOoXzP.pdf', '1', '2025-05-28', '2025-05-27 23:39:23', '2025-05-27 23:39:23'),
(2, 'Aaan', 'aan@gmail.com', 'cv/ucW5Qp3AHJcLa0uChBakQEOvsrbF0HrWDUcNJMFs.pdf', '1', '2025-06-08', '2025-06-08 03:08:35', '2025-06-08 03:08:35'),
(3, 'Abdu Rohman', 'asdaW@gmauiil.com', 'public/cv_files/wdcmDQDmOo31HYj45mGBO6H8JNPNxWd2vGNPip3w.pdf', 'Manager HR', '2025-06-09', '2025-06-08 19:42:41', '2025-06-08 19:42:41'),
(4, 'Percobaan', 'coba@gmail.com', 'public/cv_files/JKtymKymJpzkMPAc47BKR1uaz8kBytev3TotUbUU.pdf', 'Manager HR', '2025-06-09', '2025-06-08 19:47:43', '2025-06-08 19:47:43');

-- --------------------------------------------------------

--
-- Struktur dari tabel `lowongans`
--

CREATE TABLE `lowongans` (
  `id` bigint UNSIGNED NOT NULL,
  `posisi` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `kualifikasi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `batas_lamaran` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `lowongans`
--

INSERT INTO `lowongans` (`id`, `posisi`, `kualifikasi`, `deskripsi`, `batas_lamaran`, `created_at`, `updated_at`) VALUES
(1, 'Manager HR', 'Pendidikan:\r\n\r\nMinimal S1 di bidang Psikologi, Manajemen Sumber Daya Manusia, atau bidang terkait.\r\n\r\nPendidikan lanjutan seperti S2 di bidang terkait akan menjadi nilai tambah.\r\n\r\nPengalaman Kerja:\r\n\r\nPengalaman minimal 5 tahun di bidang SDM, dengan setidaknya 2 tahun dalam posisi manajerial.\r\n\r\nPengalaman dalam mengelola tim HR dan menjalankan berbagai fungsi HR seperti rekrutmen, pelatihan, pengembangan karyawan, manajemen kinerja, dan kebijakan SDM.\r\n\r\nPengalaman dalam menangani isu-isu ketenagakerjaan dan kepatuhan hukum terkait ketenagakerjaan.', 'Lowongan career flexibel', '2025-05-28', '2025-05-27 21:12:35', '2025-06-22 03:06:38'),
(2, 'Manager IT', 'Berpengalaman Minimal 4 tahun\r\nKemampuan leadership\r\nProblem solving', 'Silakan dicoba', '2025-06-22', '2025-06-22 03:10:24', '2025-06-22 03:10:24'),
(3, 'Manager Audit', 'Bisa bahasa inggris \r\nBerpengalaman 2 tahun', 'Apply ya siapa tau beruntung', '2025-06-23', '2025-06-22 22:48:40', '2025-06-22 22:48:40');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2025_05_20_070202_create_sessions_table', 1),
(7, '2025_05_25_062519_create_permission_tables', 1),
(8, '2025_05_26_081623_create_admin_users_table', 1),
(9, '2025_05_26_081624_create_profil_perusahaans_table', 1),
(10, '2025_05_26_081625_create_kategori_produks_table', 1),
(11, '2025_05_26_081625_create_produks_table', 1),
(12, '2025_05_26_081626_create_lowongans_table', 1),
(13, '2025_05_26_081627_create_lamarans_table', 1),
(14, '2025_05_26_081628_create_beritas_table', 1),
(15, '2025_05_26_081632_create_pesan_kontaks_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesan_kontaks`
--

CREATE TABLE `pesan_kontaks` (
  `id` bigint UNSIGNED NOT NULL,
  `nama` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(31) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `pesan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pesan_kontaks`
--

INSERT INTO `pesan_kontaks` (`id`, `nama`, `email`, `pesan`, `tanggal`, `created_at`, `updated_at`) VALUES
(1, 'Abdu Rohman', 'abdhurohman7@gmail.com', 'Okeee', '2025-06-09', '2025-06-08 19:29:16', '2025-06-08 19:29:16'),
(2, 'Abdu Rohman Anas', 'abdhurohman7@gmail.com', 'Okeeeeea', '2025-06-18', '2025-06-18 00:45:24', '2025-06-18 00:45:24'),
(3, 'Aaannn', 'aan@gmail.com', 'Oke lah', '2025-06-18', '2025-06-18 00:48:02', '2025-06-18 00:48:02');

-- --------------------------------------------------------

--
-- Struktur dari tabel `produks`
--

CREATE TABLE `produks` (
  `id` bigint UNSIGNED NOT NULL,
  `nama_produk` varchar(65) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kategori_id` bigint UNSIGNED NOT NULL,
  `harga` decimal(15,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `produks`
--

INSERT INTO `produks` (`id`, `nama_produk`, `deskripsi`, `gambar`, `kategori_id`, `harga`, `created_at`, `updated_at`) VALUES
(5, 'Push Button 1Pcs', 'Produk terjamin mutu', 'produk/UDUkD8bYbSlmdR5RmzwvjPEfgMy5W0u00ovNF9b3.png', 1, 24000.00, '2025-06-08 21:24:02', '2025-06-08 21:24:02'),
(6, 'POWTRAN PI550 0R7G1 INVERTER 0.75 kW, 1 PHASE Update', 'POWTRAN PI550 0R7G1 INVERTER 0.75 kW, 1 PHASE,\r\nProduk Original Pabrik', 'produk/9SQQm98EGxOc9gJxBbGlRuVaCyapo00vdptNskZs.jpg', 1, 76000.00, '2025-06-08 21:25:12', '2025-06-22 03:17:09'),
(7, 'Selector', 'Okee Update', 'produk/Msy4eTUANChNEw6mDPItW9GK2Q2OpwgvEfrHE6Rm.jpg', 1, 250000.00, '2025-06-22 22:47:35', '2025-06-22 22:47:59');

-- --------------------------------------------------------

--
-- Struktur dari tabel `profil_perusahaans`
--

CREATE TABLE `profil_perusahaans` (
  `id` bigint UNSIGNED NOT NULL,
  `judul` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `profil_perusahaans`
--

INSERT INTO `profil_perusahaans` (`id`, `judul`, `isi`, `jenis`, `created_at`, `updated_at`) VALUES
(1, 'CV. Lestari Elektrik', 'Berkelanjutan dan Bermanfaat serta Profit Gede', 'misi', '2025-06-22 03:57:30', '2025-06-22 22:51:00'),
(4, 'CV. Lestari Elektrik', 'CV Lestari Elektrik didirikan pada awal tahun 2000 di kota Surabaya sebagai perusahaan yang bergerak di bidang penyediaan peralatan dan solusi kelistrikan industri. Berawal dari usaha kecil dengan fokus utama pada distribusi komponen listrik skala lokal, perusahaan terus berkembang berkat komitmen terhadap kualitas, layanan pelanggan, dan inovasi berkelanjutan.\n\nDalam dua dekade perjalanan bisnisnya, CV Lestari Elektrik telah berhasil memperluas jangkauan layanan ke berbagai sektor industri seperti manufaktur, pertambangan, dan infrastruktur publik. Dengan dukungan tim teknis yang profesional serta mitra kerja dari berbagai brand ternama, perusahaan mampu memberikan solusi kelistrikan yang andal dan efisien.\n\nHingga saat ini, CV Lestari Elektrik terus memperkuat reputasinya sebagai mitra terpercaya dalam menyediakan produk dan sistem kelistrikan berkualitas tinggi, serta tetap berkomitmen untuk beradaptasi dengan perkembangan teknologi dan kebutuhan industri modern.', 'sejarah', '2025-06-22 04:34:48', '2025-06-22 04:39:38');

-- --------------------------------------------------------

--
-- Struktur dari tabel `roles`
--

CREATE TABLE `roles` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'web', NULL, NULL),
(2, 'user', 'web', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint UNSIGNED NOT NULL,
  `role_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `role_user`
--

CREATE TABLE `role_user` (
  `id` bigint UNSIGNED NOT NULL,
  `role_id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `role_user`
--

INSERT INTO `role_user` (`id`, `role_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL),
(2, 1, 4, '2025-06-24 02:50:19', '2025-06-24 02:50:19');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('u8ynGIyVqWZ5t0kPRKgmMtsKlN3ddu9FEZtqqK72', 4, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/137.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiSW1QMWw2dTVtZHcyUW1jMjBwSVhSOE5GQnlON1pXZENJSGhONzQ0UiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzY6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZG1pbi9sb3dvbmdhbiI7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjQ7fQ==', 1750758625);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'abdu', 'abdhurohman7@gmail.com', NULL, '$2y$10$M9pF6egKQ7l2mPZWJ8v.OeF1fn0260K1rYt/NTnPpn3AnK9quQ/O2', NULL, NULL, NULL, 'byAdIXhfdBqrCddGeAfgpgbtUYbsJjXmgRkFjnwvnDjL3oF3Ejj1u1HfTJjI', NULL, NULL, NULL, NULL),
(2, 'Aan', 'aan@gmail.com', NULL, '$2y$12$m3s9wLd2QaN8JCyih55PIO50iuZSgqx1jnBcdytMLwAyYypIQz17W', NULL, NULL, NULL, NULL, NULL, NULL, '2025-06-24 02:42:00', '2025-06-24 02:42:00'),
(3, 'Yusuf', 'yusuf@gmail.com', NULL, '$2y$12$xsIMfX1IFmGCshQe4pnuc.47XreC/Sj2EN/lO9X9oz/VCqv6upONi', NULL, NULL, NULL, NULL, NULL, NULL, '2025-06-24 02:45:53', '2025-06-24 02:45:53'),
(4, 'indah', 'indah@gmail.com', NULL, '$2y$12$LcOJaHJR5aHtBlbG0UTnROoWCG5cen3Aa3spuTtgnseX0oQZvKdWi', NULL, NULL, NULL, NULL, NULL, NULL, '2025-06-24 02:50:19', '2025-06-24 02:50:19');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin_users`
--
ALTER TABLE `admin_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admin_users_username_unique` (`username`);

--
-- Indeks untuk tabel `beritas`
--
ALTER TABLE `beritas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kategori_produks`
--
ALTER TABLE `kategori_produks`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `lamarans`
--
ALTER TABLE `lamarans`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `lowongans`
--
ALTER TABLE `lowongans`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indeks untuk tabel `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indeks untuk tabel `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indeks untuk tabel `pesan_kontaks`
--
ALTER TABLE `pesan_kontaks`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `produks`
--
ALTER TABLE `produks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `produks_kategori_id_foreign` (`kategori_id`);

--
-- Indeks untuk tabel `profil_perusahaans`
--
ALTER TABLE `profil_perusahaans`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indeks untuk tabel `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indeks untuk tabel `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `role_user_role_id_user_id_unique` (`role_id`,`user_id`),
  ADD KEY `role_user_user_id_foreign` (`user_id`);

--
-- Indeks untuk tabel `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin_users`
--
ALTER TABLE `admin_users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `beritas`
--
ALTER TABLE `beritas`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `kategori_produks`
--
ALTER TABLE `kategori_produks`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `lamarans`
--
ALTER TABLE `lamarans`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `lowongans`
--
ALTER TABLE `lowongans`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pesan_kontaks`
--
ALTER TABLE `pesan_kontaks`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `produks`
--
ALTER TABLE `produks`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `profil_perusahaans`
--
ALTER TABLE `profil_perusahaans`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `role_user`
--
ALTER TABLE `role_user`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `produks`
--
ALTER TABLE `produks`
  ADD CONSTRAINT `produks_kategori_id_foreign` FOREIGN KEY (`kategori_id`) REFERENCES `kategori_produks` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
