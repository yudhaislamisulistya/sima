-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 05 Sep 2021 pada 23.54
-- Versi server: 5.7.33
-- Versi PHP: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `skripsi_sima`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `curriculum_vitae`
--

CREATE TABLE `curriculum_vitae` (
  `id_curriculum_vitae` int(11) NOT NULL,
  `nama_penyetor` varchar(255) DEFAULT NULL,
  `nama_file` varchar(255) DEFAULT NULL,
  `tanggal_upload` varchar(12) DEFAULT NULL,
  `keterangan` text,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `daftar_arsip`
--

CREATE TABLE `daftar_arsip` (
  `id_daftar_arsip` int(11) NOT NULL,
  `kode` varchar(10) DEFAULT NULL,
  `tahun` varchar(4) DEFAULT NULL,
  `jenis` varchar(255) DEFAULT NULL,
  `nik` varchar(16) DEFAULT NULL,
  `jenis_kelamin` varchar(25) DEFAULT NULL,
  `tempat` text,
  `informasi_lainnya` text,
  `lampiran` text,
  `keterangan` text,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `daftar_instansi_lokasi`
--

CREATE TABLE `daftar_instansi_lokasi` (
  `id_daftar_instansi_lokasi` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `alamat` text,
  `keterangan` text,
  `tanggal_buat` varchar(12) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_jabatan`
--

CREATE TABLE `data_jabatan` (
  `id_data_jabatan` int(11) NOT NULL,
  `nama_jabatan` varchar(255) DEFAULT NULL,
  `keterangan` text,
  `tanggal_buat` varchar(12) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_jabatan`
--

INSERT INTO `data_jabatan` (`id_data_jabatan`, `nama_jabatan`, `keterangan`, `tanggal_buat`, `created_at`, `updated_at`) VALUES
(1, 'Direksi bbb', 'yhh', '2021-09-06', '2021-09-06 06:01:44', '2021-09-06 06:02:38');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_pegawai`
--

CREATE TABLE `data_pegawai` (
  `id_data_pegawai` int(11) NOT NULL,
  `nik` varchar(24) DEFAULT NULL,
  `nip` varchar(24) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `alamat` text,
  `jenis_kelamin` varchar(20) DEFAULT NULL,
  `kontak` text,
  `jabatan` varchar(255) DEFAULT NULL,
  `keterangan` text,
  `status` varchar(12) DEFAULT NULL,
  `tanggal_masuk` varchar(12) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_pegawai`
--

INSERT INTO `data_pegawai` (`id_data_pegawai`, `nik`, `nip`, `nama`, `alamat`, `jenis_kelamin`, `kontak`, `jabatan`, `keterangan`, `status`, `tanggal_masuk`, `created_at`, `updated_at`) VALUES
(2, NULL, NULL, NULL, NULL, 'Laki-Laki', NULL, NULL, NULL, 'Aktif', NULL, '2021-09-06 01:34:01', '2021-09-06 01:34:01'),
(3, '7890', NULL, NULL, NULL, 'Laki-Laki', NULL, NULL, NULL, 'Aktif', NULL, '2021-09-06 01:37:15', '2021-09-06 01:38:15');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dokumen`
--

CREATE TABLE `dokumen` (
  `id_dokumen` int(11) NOT NULL,
  `nama_dokumen` varchar(255) DEFAULT NULL,
  `tipe_file` varchar(10) DEFAULT NULL,
  `keterangan` text,
  `tanggal_upload` varchar(12) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dokumen`
--

INSERT INTO `dokumen` (`id_dokumen`, `nama_dokumen`, `tipe_file`, `keterangan`, `tanggal_upload`, `created_at`, `updated_at`) VALUES
(4, 'CAXI81AFT1MacBook Pro - 2.png', '', 'asd', '2021-09-06', '2021-09-06 00:03:19', '2021-09-06 00:03:19');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis_dokumen`
--

CREATE TABLE `jenis_dokumen` (
  `id_jenis_dokumen` int(11) NOT NULL,
  `kode` varchar(12) DEFAULT NULL,
  `jenis_dokumen` varchar(255) DEFAULT NULL,
  `keterangan` text,
  `tanggal_buat` varchar(12) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2014_10_12_200000_add_two_factor_columns_to_users_table', 2),
(6, '2021_08_28_000521_create_sessions_table', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('l27YrtpLDEMgYe69pgERzvMUS6dzz6a8NIXcabRy', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/93.0.4577.63 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoibmVHVnZuU2NqQkRuaVJ1bHZIVE9JdE00NWRmaHYwOGlicWYySWdPQiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzc6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9zdGFmZi9kYXNoYm9hcmQiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1630886074);

-- --------------------------------------------------------

--
-- Struktur dari tabel `surat_keluar`
--

CREATE TABLE `surat_keluar` (
  `id_surat_keluar` int(11) NOT NULL,
  `no_surat` varchar(100) DEFAULT NULL,
  `tgl_surat` varchar(12) DEFAULT NULL,
  `pengola` varchar(244) DEFAULT NULL,
  `tujuan_surat` varchar(244) DEFAULT NULL,
  `perihal` text,
  `keterangan` text,
  `file_surat` text,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `surat_keluar`
--

INSERT INTO `surat_keluar` (`id_surat_keluar`, `no_surat`, `tgl_surat`, `pengola`, `tujuan_surat`, `perihal`, `keterangan`, `file_surat`, `created_at`, `updated_at`) VALUES
(1, '2939/LP/X/2021', '2021-06-15', 'Supervisior', 'PT. Wika Beton Tbk.', 'Rapat', NULL, NULL, '2021-09-05 11:26:14', '2021-09-05 11:26:14'),
(5, NULL, NULL, NULL, NULL, NULL, NULL, 'Desain Stiker Biru Siviastudio.png', '2021-09-05 21:07:01', '2021-09-05 21:07:01'),
(6, NULL, NULL, NULL, NULL, NULL, NULL, 'OAYsnFNetpMacBook Pro - 1.png', '2021-09-05 21:30:04', '2021-09-05 21:30:04'),
(7, NULL, NULL, NULL, NULL, NULL, NULL, 'sqXW6ba8inDesain Stiker Biru Siviastudio.png', '2021-09-05 23:39:45', '2021-09-05 23:39:45');

-- --------------------------------------------------------

--
-- Struktur dari tabel `surat_masuk`
--

CREATE TABLE `surat_masuk` (
  `id_surat_masuk` int(11) NOT NULL,
  `no_agenda` varchar(100) DEFAULT NULL,
  `no_surat` varchar(100) DEFAULT NULL,
  `tgl_surat` varchar(12) DEFAULT NULL,
  `tgl_terima` varchar(12) DEFAULT NULL,
  `sumber_surat` text,
  `perihal` text,
  `keterangan` text,
  `file_surat` text,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `surat_masuk`
--

INSERT INTO `surat_masuk` (`id_surat_masuk`, `no_agenda`, `no_surat`, `tgl_surat`, `tgl_terima`, `sumber_surat`, `perihal`, `keterangan`, `file_surat`, `created_at`, `updated_at`) VALUES
(7, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Desain Stiker Biru Siviastudio.png', '2021-09-05 21:19:56', '2021-09-05 21:19:56'),
(8, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Desain Stiker Biru Siviastudio.png', '2021-09-05 21:19:57', '2021-09-05 21:19:57'),
(9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Desain Stiker Biru Siviastudio.png', '2021-09-05 21:22:25', '2021-09-05 21:22:25'),
(14, '00112', '001', '2021-09-05', '2021-09-05', '001', '001', '001', '41ChtTt1kXDesain Stiker Biru Siviastudio.png', '2021-09-05 22:41:18', '2021-09-05 22:41:18');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Apriyadi Aries', 'admin@gmail.com', NULL, '$2y$10$VTLLpjjUHWL0ZCWdZ0cqAObGXAJGaGugESfLV4cZVm7TutKuS95iK', NULL, NULL, NULL, '2021-08-27 16:12:34', '2021-08-27 16:12:34');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `curriculum_vitae`
--
ALTER TABLE `curriculum_vitae`
  ADD PRIMARY KEY (`id_curriculum_vitae`);

--
-- Indeks untuk tabel `daftar_arsip`
--
ALTER TABLE `daftar_arsip`
  ADD PRIMARY KEY (`id_daftar_arsip`);

--
-- Indeks untuk tabel `daftar_instansi_lokasi`
--
ALTER TABLE `daftar_instansi_lokasi`
  ADD PRIMARY KEY (`id_daftar_instansi_lokasi`);

--
-- Indeks untuk tabel `data_jabatan`
--
ALTER TABLE `data_jabatan`
  ADD PRIMARY KEY (`id_data_jabatan`);

--
-- Indeks untuk tabel `data_pegawai`
--
ALTER TABLE `data_pegawai`
  ADD PRIMARY KEY (`id_data_pegawai`);

--
-- Indeks untuk tabel `dokumen`
--
ALTER TABLE `dokumen`
  ADD PRIMARY KEY (`id_dokumen`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `jenis_dokumen`
--
ALTER TABLE `jenis_dokumen`
  ADD PRIMARY KEY (`id_jenis_dokumen`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indeks untuk tabel `surat_keluar`
--
ALTER TABLE `surat_keluar`
  ADD PRIMARY KEY (`id_surat_keluar`);

--
-- Indeks untuk tabel `surat_masuk`
--
ALTER TABLE `surat_masuk`
  ADD PRIMARY KEY (`id_surat_masuk`);

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
-- AUTO_INCREMENT untuk tabel `curriculum_vitae`
--
ALTER TABLE `curriculum_vitae`
  MODIFY `id_curriculum_vitae` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `daftar_arsip`
--
ALTER TABLE `daftar_arsip`
  MODIFY `id_daftar_arsip` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `daftar_instansi_lokasi`
--
ALTER TABLE `daftar_instansi_lokasi`
  MODIFY `id_daftar_instansi_lokasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `data_jabatan`
--
ALTER TABLE `data_jabatan`
  MODIFY `id_data_jabatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `data_pegawai`
--
ALTER TABLE `data_pegawai`
  MODIFY `id_data_pegawai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `dokumen`
--
ALTER TABLE `dokumen`
  MODIFY `id_dokumen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `jenis_dokumen`
--
ALTER TABLE `jenis_dokumen`
  MODIFY `id_jenis_dokumen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `surat_keluar`
--
ALTER TABLE `surat_keluar`
  MODIFY `id_surat_keluar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `surat_masuk`
--
ALTER TABLE `surat_masuk`
  MODIFY `id_surat_masuk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
