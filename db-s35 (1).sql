-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 06 Des 2022 pada 09.54
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db-s35`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_activation_attempts`
--

CREATE TABLE `auth_activation_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_groups`
--

CREATE TABLE `auth_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `auth_groups`
--

INSERT INTO `auth_groups` (`id`, `name`, `description`) VALUES
(1, 'kp-toko', 'user kepala toko'),
(2, 'kp-gudang', 'user kepala gudang'),
(3, 'bos', 'user pemilik Toko(BOS)');

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_groups_permissions`
--

CREATE TABLE `auth_groups_permissions` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_groups_users`
--

CREATE TABLE `auth_groups_users` (
  `id_AGU` int(10) NOT NULL,
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `auth_groups_users`
--

INSERT INTO `auth_groups_users` (`id_AGU`, `group_id`, `user_id`) VALUES
(1, 1, 1),
(2, 2, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_logins`
--

CREATE TABLE `auth_logins` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `user_id` int(11) UNSIGNED DEFAULT NULL,
  `date` datetime NOT NULL,
  `success` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `auth_logins`
--

INSERT INTO `auth_logins` (`id`, `ip_address`, `email`, `user_id`, `date`, `success`) VALUES
(1, '::1', 'muhayminurdin@gmail.com', 1, '2022-11-07 20:34:08', 1),
(2, '::1', 'muhayminurdin@gmail.com', 1, '2022-11-08 05:24:02', 1),
(3, '::1', 'muhayminurdin@gmail.com', 1, '2022-11-08 07:46:49', 1),
(4, '::1', 'muhayminurdin@gmail.com', 1, '2022-11-08 22:32:03', 1),
(5, '::1', 'muhayminurdin@gmail.com', 1, '2022-11-09 04:09:49', 1),
(6, '::1', 'muhayminurdin@gmail.com', 1, '2022-11-09 09:53:48', 1),
(7, '::1', 'muhayminurdin@gmail.com', NULL, '2022-11-09 20:45:50', 0),
(8, '::1', 'muhayminurdin@gmail.com', 1, '2022-11-09 20:46:00', 1),
(9, '::1', 'muhayminurdin@gmail.com', 1, '2022-11-10 05:33:34', 1),
(10, '::1', 'muhayminurdin@gmail.com', 1, '2022-11-10 05:33:36', 1),
(11, '::1', 'muhayminurdin@gmail.com', 1, '2022-11-10 09:45:15', 1),
(12, '::1', 'muhayminurdin@gmail.com', 1, '2022-11-11 09:29:53', 1),
(13, '::1', 'muhayminurdin@gmail.com', 1, '2022-11-11 19:08:47', 1),
(14, '::1', 'duta@gmail.com', 2, '2022-11-11 19:20:19', 1),
(15, '::1', 'muhayminurdin@gmail.com', 1, '2022-11-11 19:25:04', 1),
(16, '::1', 'duta@gmail.com', NULL, '2022-11-11 19:25:22', 0),
(17, '::1', 'duta@gmail.com', 2, '2022-11-11 19:25:29', 1),
(18, '::1', 'muhayminurdin@gmail.com', 1, '2022-11-11 19:28:24', 1),
(19, '::1', 'duta@gmail.com', 2, '2022-11-11 19:34:27', 1),
(20, '::1', 'muhayminurdin@gmail.com', NULL, '2022-11-11 20:09:40', 0),
(21, '::1', 'muhayminurdin@gmail.com', NULL, '2022-11-11 20:09:49', 0),
(22, '::1', 'duta@gmail.com', NULL, '2022-11-11 20:10:01', 0),
(23, '::1', 'muhayminurdin@gmail.com', NULL, '2022-11-11 20:10:27', 0),
(24, '::1', 'muhayminurdin@gmail.com', NULL, '2022-11-11 20:11:02', 0),
(25, '::1', 'muhayminurdin@gmail.com', 1, '2022-11-11 20:12:45', 1),
(26, '::1', 'duta@gmail.com', 2, '2022-11-11 20:13:21', 1),
(27, '::1', 'duta@gmail.com', 2, '2022-11-12 01:55:40', 1),
(28, '::1', 'duta@gmail.com', 2, '2022-11-12 07:59:28', 1),
(29, '::1', 'duta@gmail.com', NULL, '2022-11-12 10:38:14', 0),
(30, '::1', 'duta@gmail.com', 2, '2022-11-12 10:38:23', 1),
(31, '::1', 'muhayminurdin@gmail.com', 1, '2022-11-12 18:02:15', 1),
(32, '::1', 'duta@gmail.com', 2, '2022-11-12 18:36:06', 1),
(33, '::1', 'muhayminurdin@gmail.com', 1, '2022-11-13 05:50:47', 1),
(34, '::1', 'muhayminurdin@gmail.com', 1, '2022-11-13 08:42:15', 1),
(35, '::1', 'duta@gmail.com', 2, '2022-11-13 08:52:33', 1),
(36, '::1', 'muhayminurdin@gmail.com', 1, '2022-11-14 14:08:28', 1),
(37, '::1', 'muhayminurdin@gmail.com', 1, '2022-11-14 17:53:59', 1),
(38, '::1', 'muhayminurdin@gmail.com', 1, '2022-11-15 01:49:36', 1),
(39, '::1', 'muhayminurdin@gmail.com', 1, '2022-11-15 06:43:07', 1),
(40, '::1', 'duta@gmail.com', 2, '2022-11-15 06:49:10', 1),
(41, '::1', 'muhayminurdin@gmail.com', 1, '2022-11-15 15:04:33', 1),
(42, '::1', 'muhayminurdin@gmail.com', 1, '2022-11-15 15:10:19', 1),
(43, '::1', 'muhayminurdin@gmail.com', 1, '2022-11-15 20:54:52', 1),
(44, '::1', 'muhayminurdin@gmail.com', 1, '2022-11-15 22:00:30', 1),
(45, '::1', 'duta@gmail.com', 2, '2022-11-15 22:01:48', 1),
(46, '::1', 'muhayminurdin@gmail.com', 1, '2022-11-16 21:46:42', 1),
(47, '::1', 'muhayminurdin@gmail.com', 1, '2022-11-17 11:16:17', 1),
(48, '::1', 'duta@gmail.com', 2, '2022-11-17 13:00:31', 1),
(49, '::1', 'muhayminurdin@gmail.com', 1, '2022-11-21 01:19:44', 1),
(50, '::1', 'duta@gmail.com', 2, '2022-11-21 01:22:43', 1),
(51, '::1', 'muhayminurdin@gmail.com', 1, '2022-11-23 11:10:20', 1),
(52, '::1', 'duta@gmail.com', 2, '2022-11-23 12:44:46', 1),
(53, '::1', 'duta@gmail.com', 2, '2022-11-28 22:14:19', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_permissions`
--

CREATE TABLE `auth_permissions` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_reset_attempts`
--

CREATE TABLE `auth_reset_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_tokens`
--

CREATE TABLE `auth_tokens` (
  `id` int(11) UNSIGNED NOT NULL,
  `selector` varchar(255) NOT NULL,
  `hashedValidator` varchar(255) NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `expires` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_users_permissions`
--

CREATE TABLE `auth_users_permissions` (
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis_barang`
--

CREATE TABLE `jenis_barang` (
  `id_jenis_barang` int(11) UNSIGNED NOT NULL,
  `id_transaksi` int(11) UNSIGNED NOT NULL,
  `nama_jenis_barang` varchar(255) NOT NULL,
  `harga_beli` int(10) UNSIGNED NOT NULL,
  `harga_jual` int(10) UNSIGNED NOT NULL,
  `banyak_barang` int(10) UNSIGNED NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `jenis_barang`
--

INSERT INTO `jenis_barang` (`id_jenis_barang`, `id_transaksi`, `nama_jenis_barang`, `harga_beli`, `harga_jual`, `banyak_barang`, `keterangan`, `created_at`, `updated_at`) VALUES
(1, 1, 'premium', 45000, 50000, 200, '', '2022-11-07 13:28:41', '2022-11-07 13:28:41'),
(2, 1, 'ekonomis', 8000, 10000, 200, '', '2022-11-07 13:29:03', '2022-11-07 13:29:03');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis_barang_toko`
--

CREATE TABLE `jenis_barang_toko` (
  `id_jenis_barang_toko` int(11) UNSIGNED NOT NULL,
  `id_jenis_barang` int(11) UNSIGNED NOT NULL,
  `banyak_barang` int(10) UNSIGNED NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `jtb`
--

CREATE TABLE `jtb` (
  `id_jtb` int(11) UNSIGNED NOT NULL,
  `id_transaksi` int(11) UNSIGNED NOT NULL,
  `jenis_barang` varchar(255) NOT NULL,
  `tipe_barang` varchar(255) NOT NULL,
  `banyak_barang` int(10) UNSIGNED NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `jtb`
--

INSERT INTO `jtb` (`id_jtb`, `id_transaksi`, `jenis_barang`, `tipe_barang`, `banyak_barang`, `created_at`, `updated_at`) VALUES
(15, 3, 'premium', 'sepatu', 5, '2022-11-10 11:07:16', '2022-11-10 11:07:16'),
(16, 3, 'premium', 'sepatu ekonomis', 5, '2022-11-10 11:07:16', '2022-11-10 11:07:16'),
(17, 3, 'ekonomis', 'sepatu ekonomis', 5, '2022-11-10 11:07:16', '2022-11-10 11:07:16'),
(30, 5, 'premium', 'sepatu', 5, '2022-11-11 19:14:06', '2022-11-11 19:14:06'),
(32, 8, 'premium', 'sepatu', 10, '2022-11-12 18:45:35', '2022-11-12 18:45:35'),
(35, 5, 'ekonomis', 'sepatu ekonomis', 5, '2022-11-15 15:46:50', '2022-11-15 15:46:50');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jtb_retur`
--

CREATE TABLE `jtb_retur` (
  `id_jtb_retur` int(11) NOT NULL,
  `id_transaksi` int(11) NOT NULL,
  `jenis_barang` varchar(255) NOT NULL,
  `tipe_barang` varchar(255) NOT NULL,
  `banyak_barang` int(11) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `jtb_retur`
--

INSERT INTO `jtb_retur` (`id_jtb_retur`, `id_transaksi`, `jenis_barang`, `tipe_barang`, `banyak_barang`, `created_at`, `updated_at`) VALUES
(3, 13, 'premium', 'sepatu', 200, '2022-11-16 00:53:21', '2022-11-17 11:48:54'),
(5, 13, 'premium', 'sepatu', 2, '2022-11-17 11:50:22', '2022-11-23 12:46:07');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(78, '2017-11-20-223112', 'Myth\\Auth\\Database\\Migrations\\CreateAuthTables', 'default', 'Myth\\Auth', 1667849211, 1),
(79, '2022-11-04-182942', 'App\\Database\\Migrations\\TransaksiKeGudang', 'default', 'App', 1667849211, 1),
(80, '2022-11-04-183028', 'App\\Database\\Migrations\\JenisBarang', 'default', 'App', 1667849211, 1),
(81, '2022-11-04-183036', 'App\\Database\\Migrations\\TipeBarang', 'default', 'App', 1667849211, 1),
(82, '2022-11-04-183152', 'App\\Database\\Migrations\\TransaksiKeToko', 'default', 'App', 1667849211, 1),
(83, '2022-11-04-183226', 'App\\Database\\Migrations\\JenisBarangToko', 'default', 'App', 1667849211, 1),
(84, '2022-11-04-183244', 'App\\Database\\Migrations\\TipeBarangToko', 'default', 'App', 1667849211, 1),
(85, '2022-11-04-183304', 'App\\Database\\Migrations\\Pendapatan', 'default', 'App', 1667849211, 1),
(86, '2022-11-04-183311', 'App\\Database\\Migrations\\Toko', 'default', 'App', 1667849211, 1),
(87, '2022-11-04-183704', 'App\\Database\\Migrations\\TransaksiReturBarang', 'default', 'App', 1667849211, 1),
(88, '2022-11-06-163902', 'App\\Database\\Migrations\\JTB', 'default', 'App', 1667849211, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendapatan`
--

CREATE TABLE `pendapatan` (
  `id_pendapatan` int(11) UNSIGNED NOT NULL,
  `tanggal` datetime NOT NULL,
  `id_jenis_barang_toko` int(11) UNSIGNED NOT NULL,
  `id_tipe_barang_toko` int(11) UNSIGNED NOT NULL,
  `id_toko` int(11) UNSIGNED NOT NULL,
  `banyak_barang` int(10) UNSIGNED NOT NULL,
  `pendapatan` int(10) UNSIGNED NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tipe_barang`
--

CREATE TABLE `tipe_barang` (
  `id_tipe_barang` int(11) UNSIGNED NOT NULL,
  `nama_tipe_barang` varchar(255) NOT NULL,
  `banyak_barang_tipe` int(10) UNSIGNED NOT NULL,
  `id_jenis_barang` int(11) UNSIGNED NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `tipe_barang`
--

INSERT INTO `tipe_barang` (`id_tipe_barang`, `nama_tipe_barang`, `banyak_barang_tipe`, `id_jenis_barang`, `created_at`, `updated_at`) VALUES
(1, 'sepatu', 100, 1, '2022-11-07 13:29:12', '2022-11-07 13:29:12'),
(2, 'sepatu ekonomis', 100, 2, '2022-11-07 13:29:23', '2022-11-07 13:29:23');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tipe_barang_toko`
--

CREATE TABLE `tipe_barang_toko` (
  `id_tipe_barang_toko` int(11) UNSIGNED NOT NULL,
  `id_tipe_barang` int(11) UNSIGNED NOT NULL,
  `id_jenis_barang_toko` int(11) UNSIGNED NOT NULL,
  `banyak_barang` int(10) UNSIGNED NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `toko`
--

CREATE TABLE `toko` (
  `id_toko` int(11) UNSIGNED NOT NULL,
  `nama_toko` varchar(255) NOT NULL,
  `alamat_toko` varchar(255) NOT NULL,
  `nomor_telepon_toko` varchar(15) NOT NULL,
  `nomor_telepon_kp_toko` varchar(15) NOT NULL,
  `nama_kp_toko` varchar(255) NOT NULL,
  `email_kp_toko` varchar(255) NOT NULL,
  `username_kp_toko` varchar(255) NOT NULL,
  `password_kp_toko` varchar(255) NOT NULL,
  `foto_kp_toko` varchar(255) NOT NULL DEFAULT 'default.svg',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `toko`
--

INSERT INTO `toko` (`id_toko`, `nama_toko`, `alamat_toko`, `nomor_telepon_toko`, `nomor_telepon_kp_toko`, `nama_kp_toko`, `email_kp_toko`, `username_kp_toko`, `password_kp_toko`, `foto_kp_toko`, `created_at`, `updated_at`) VALUES
(1, 'toko 2', 'ethanol', '087869187997', '087869187997', 'duta', 'duta@gmail.com', 'tantra23', 'sampah123', 'default.svg', '2022-11-08 08:04:58', '2022-11-08 08:04:58');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi_ke_gudang`
--

CREATE TABLE `transaksi_ke_gudang` (
  `id_transaksi` int(11) UNSIGNED NOT NULL,
  `asal_barang` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `biaya_ekspedisi` int(10) UNSIGNED NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `nota` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `transaksi_ke_gudang`
--

INSERT INTO `transaksi_ke_gudang` (`id_transaksi`, `asal_barang`, `tanggal`, `biaya_ekspedisi`, `keterangan`, `nota`, `created_at`, `updated_at`) VALUES
(1, 'tanah abang', '2022-11-08', 1000000, '', 'nota.svg', '2022-11-07 13:28:19', '2022-11-07 13:28:19');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi_ke_toko`
--

CREATE TABLE `transaksi_ke_toko` (
  `id_transaksi` int(11) UNSIGNED NOT NULL,
  `tanggal` date NOT NULL,
  `nama_toko` varchar(255) NOT NULL,
  `biaya_ekspedisi` int(10) UNSIGNED NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `pesan` int(11) NOT NULL DEFAULT 0,
  `status` int(10) NOT NULL DEFAULT 0,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `transaksi_ke_toko`
--

INSERT INTO `transaksi_ke_toko` (`id_transaksi`, `tanggal`, `nama_toko`, `biaya_ekspedisi`, `keterangan`, `pesan`, `status`, `created_at`, `updated_at`) VALUES
(3, '2022-11-12', 'toko 2', 1000000, '', 0, 0, '2022-11-08 07:47:55', '2022-11-11 21:40:03'),
(5, '2022-11-12', 'muhaymi23', 9000000, '', 0, 1, '2022-11-11 19:13:03', '2022-11-13 01:25:58'),
(7, '2022-11-12', 'duta', 1000000, '', 0, 0, '2022-11-11 21:25:35', '2022-11-11 21:25:35'),
(8, '2022-11-13', 'muhaymi23', 10000, '', 0, 2, '2022-11-12 18:40:26', '2022-11-12 19:41:13'),
(10, '2022-11-16', 'muhaymi23', 1000, 'o', 0, 0, '2022-11-15 11:29:53', '2022-11-21 02:16:38');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi_retur_barang`
--

CREATE TABLE `transaksi_retur_barang` (
  `id_transaksi` int(11) UNSIGNED NOT NULL,
  `data` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `biaya_ekspedisi` int(10) UNSIGNED NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `transaksi_retur_barang`
--

INSERT INTO `transaksi_retur_barang` (`id_transaksi`, `data`, `tanggal`, `keterangan`, `biaya_ekspedisi`, `status`, `created_at`, `updated_at`) VALUES
(13, 'Sabtu 2022-11-12 muhaymi23', '2022-11-18', 'p', 9000000, 0, '2022-11-15 09:33:24', '2022-11-23 12:45:47'),
(14, 'Sabtu 2022-11-12 muhaymi23', '2022-11-24', '', 1000009, 0, '2022-11-15 09:34:00', '2022-11-23 12:41:36'),
(16, 'Rabu 2022-11-16 muhaymi23', '2022-11-16', '', 9000000, 0, '2022-11-15 21:52:04', '2022-11-15 21:52:04');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `image` varchar(355) NOT NULL DEFAULT 'default.svg',
  `password_hash` varchar(255) NOT NULL,
  `reset_hash` varchar(255) DEFAULT NULL,
  `reset_at` datetime DEFAULT NULL,
  `reset_expires` datetime DEFAULT NULL,
  `activate_hash` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `status_message` varchar(255) DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 0,
  `force_pass_reset` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `fullname`, `image`, `password_hash`, `reset_hash`, `reset_at`, `reset_expires`, `activate_hash`, `status`, `status_message`, `active`, `force_pass_reset`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'muhayminurdin@gmail.com', 'muhaymi23', NULL, 'default.svg', '$2y$10$aZ4BPo2a42xtsGwUafSlIODpUzyVS.jTMqZfwPCX4ykgTb6VKa.AC', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2022-11-07 13:27:53', '2022-11-07 13:27:53', NULL),
(2, 'duta@gmail.com', 'duta', NULL, 'default.svg', '$2y$10$VRS2/IaXVTwL4sFvBZ9pmevlxmLkyi778tHwjj2IRR88AvCxl9e.y', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2022-11-11 19:20:09', '2022-11-11 19:20:09', NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `auth_groups`
--
ALTER TABLE `auth_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD KEY `auth_groups_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `group_id_permission_id` (`group_id`,`permission_id`);

--
-- Indeks untuk tabel `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD PRIMARY KEY (`id_AGU`),
  ADD KEY `auth_groups_users_user_id_foreign` (`user_id`),
  ADD KEY `group_id_user_id` (`group_id`,`user_id`);

--
-- Indeks untuk tabel `auth_logins`
--
ALTER TABLE `auth_logins`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`),
  ADD KEY `user_id` (`user_id`);

--
-- Indeks untuk tabel `auth_permissions`
--
ALTER TABLE `auth_permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `auth_tokens_user_id_foreign` (`user_id`),
  ADD KEY `selector` (`selector`);

--
-- Indeks untuk tabel `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD KEY `auth_users_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `user_id_permission_id` (`user_id`,`permission_id`);

--
-- Indeks untuk tabel `jenis_barang`
--
ALTER TABLE `jenis_barang`
  ADD PRIMARY KEY (`id_jenis_barang`),
  ADD KEY `jenis_barang_id_transaksi_foreign` (`id_transaksi`);

--
-- Indeks untuk tabel `jenis_barang_toko`
--
ALTER TABLE `jenis_barang_toko`
  ADD PRIMARY KEY (`id_jenis_barang_toko`),
  ADD KEY `jenis_barang_toko_id_jenis_barang_foreign` (`id_jenis_barang`);

--
-- Indeks untuk tabel `jtb`
--
ALTER TABLE `jtb`
  ADD PRIMARY KEY (`id_jtb`),
  ADD KEY `JTB_id_transaksi_foreign` (`id_transaksi`);

--
-- Indeks untuk tabel `jtb_retur`
--
ALTER TABLE `jtb_retur`
  ADD PRIMARY KEY (`id_jtb_retur`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pendapatan`
--
ALTER TABLE `pendapatan`
  ADD PRIMARY KEY (`id_pendapatan`),
  ADD KEY `pendapatan_id_jenis_barang_toko_foreign` (`id_jenis_barang_toko`),
  ADD KEY `pendapatan_id_tipe_barang_toko_foreign` (`id_tipe_barang_toko`),
  ADD KEY `pendapatan_id_toko_foreign` (`id_toko`);

--
-- Indeks untuk tabel `tipe_barang`
--
ALTER TABLE `tipe_barang`
  ADD PRIMARY KEY (`id_tipe_barang`),
  ADD KEY `tipe_barang_id_jenis_barang_foreign` (`id_jenis_barang`);

--
-- Indeks untuk tabel `tipe_barang_toko`
--
ALTER TABLE `tipe_barang_toko`
  ADD PRIMARY KEY (`id_tipe_barang_toko`),
  ADD KEY `tipe_barang_toko_id_tipe_barang_foreign` (`id_tipe_barang`),
  ADD KEY `tipe_barang_toko_id_jenis_barang_toko_foreign` (`id_jenis_barang_toko`);

--
-- Indeks untuk tabel `toko`
--
ALTER TABLE `toko`
  ADD PRIMARY KEY (`id_toko`);

--
-- Indeks untuk tabel `transaksi_ke_gudang`
--
ALTER TABLE `transaksi_ke_gudang`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indeks untuk tabel `transaksi_ke_toko`
--
ALTER TABLE `transaksi_ke_toko`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indeks untuk tabel `transaksi_retur_barang`
--
ALTER TABLE `transaksi_retur_barang`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `auth_groups`
--
ALTER TABLE `auth_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  MODIFY `id_AGU` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `auth_logins`
--
ALTER TABLE `auth_logins`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT untuk tabel `auth_permissions`
--
ALTER TABLE `auth_permissions`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `auth_tokens`
--
ALTER TABLE `auth_tokens`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `jenis_barang`
--
ALTER TABLE `jenis_barang`
  MODIFY `id_jenis_barang` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `jenis_barang_toko`
--
ALTER TABLE `jenis_barang_toko`
  MODIFY `id_jenis_barang_toko` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `jtb`
--
ALTER TABLE `jtb`
  MODIFY `id_jtb` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT untuk tabel `jtb_retur`
--
ALTER TABLE `jtb_retur`
  MODIFY `id_jtb_retur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- AUTO_INCREMENT untuk tabel `pendapatan`
--
ALTER TABLE `pendapatan`
  MODIFY `id_pendapatan` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tipe_barang`
--
ALTER TABLE `tipe_barang`
  MODIFY `id_tipe_barang` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tipe_barang_toko`
--
ALTER TABLE `tipe_barang_toko`
  MODIFY `id_tipe_barang_toko` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `toko`
--
ALTER TABLE `toko`
  MODIFY `id_toko` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `transaksi_ke_gudang`
--
ALTER TABLE `transaksi_ke_gudang`
  MODIFY `id_transaksi` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `transaksi_ke_toko`
--
ALTER TABLE `transaksi_ke_toko`
  MODIFY `id_transaksi` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `transaksi_retur_barang`
--
ALTER TABLE `transaksi_retur_barang`
  MODIFY `id_transaksi` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD CONSTRAINT `auth_groups_permissions_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD CONSTRAINT `auth_groups_users_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_users_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD CONSTRAINT `auth_tokens_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD CONSTRAINT `auth_users_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_users_permissions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `jenis_barang`
--
ALTER TABLE `jenis_barang`
  ADD CONSTRAINT `jenis_barang_id_transaksi_foreign` FOREIGN KEY (`id_transaksi`) REFERENCES `transaksi_ke_gudang` (`id_transaksi`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `jenis_barang_toko`
--
ALTER TABLE `jenis_barang_toko`
  ADD CONSTRAINT `jenis_barang_toko_id_jenis_barang_foreign` FOREIGN KEY (`id_jenis_barang`) REFERENCES `jenis_barang` (`id_jenis_barang`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `jtb`
--
ALTER TABLE `jtb`
  ADD CONSTRAINT `JTB_id_transaksi_foreign` FOREIGN KEY (`id_transaksi`) REFERENCES `transaksi_ke_toko` (`id_transaksi`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pendapatan`
--
ALTER TABLE `pendapatan`
  ADD CONSTRAINT `pendapatan_id_jenis_barang_toko_foreign` FOREIGN KEY (`id_jenis_barang_toko`) REFERENCES `jenis_barang_toko` (`id_jenis_barang_toko`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pendapatan_id_tipe_barang_toko_foreign` FOREIGN KEY (`id_tipe_barang_toko`) REFERENCES `tipe_barang_toko` (`id_tipe_barang_toko`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pendapatan_id_toko_foreign` FOREIGN KEY (`id_toko`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tipe_barang`
--
ALTER TABLE `tipe_barang`
  ADD CONSTRAINT `tipe_barang_id_jenis_barang_foreign` FOREIGN KEY (`id_jenis_barang`) REFERENCES `jenis_barang` (`id_jenis_barang`);

--
-- Ketidakleluasaan untuk tabel `tipe_barang_toko`
--
ALTER TABLE `tipe_barang_toko`
  ADD CONSTRAINT `tipe_barang_toko_id_jenis_barang_toko_foreign` FOREIGN KEY (`id_jenis_barang_toko`) REFERENCES `jenis_barang_toko` (`id_jenis_barang_toko`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tipe_barang_toko_id_tipe_barang_foreign` FOREIGN KEY (`id_tipe_barang`) REFERENCES `tipe_barang` (`id_tipe_barang`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
