-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 24, 2021 at 03:18 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `taiot`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id_admin` int(10) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jeniskelamin` enum('Laki-laki','Perempuan') COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id_admin`, `nama`, `jeniskelamin`, `username`, `password`, `level`, `created_at`, `updated_at`) VALUES
(1, 'Bimo Valerian', 'Laki-laki', 'admin', 'admin', 'admin', '2021-04-12 22:28:04', '2021-06-25 20:18:44'),
(10, 'Tobias Antasena', 'Laki-laki', 'admin2', 'admin2', 'admin', '2021-05-12 03:29:49', '2021-05-29 04:17:26'),
(12, 'Fena', 'Perempuan', 'admin3', 'admin3', 'admin', '2021-06-22 21:01:56', '2021-06-22 21:01:56'),
(13, 'Dona RI', 'Perempuan', 'admin4', 'admin4', 'admin', '2021-06-27 22:16:31', '2021-07-10 21:00:08'),
(16, 'haha', 'Perempuan', 'admin23', 'admin23', 'Admin', '2021-07-22 07:08:30', '2021-07-22 07:08:30');

-- --------------------------------------------------------

--
-- Table structure for table `devices`
--

CREATE TABLE `devices` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_pasien` int(10) UNSIGNED NOT NULL,
  `sensor` float NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `devices`
--

INSERT INTO `devices` (`id`, `id_pasien`, `sensor`, `created_at`, `updated_at`) VALUES
(1, 8, 0, '2021-07-21 06:32:35', '2021-07-21 06:32:35'),
(2, 6, 0, '2021-07-22 07:10:34', '2021-07-22 07:10:34'),
(3, 6, 0, '2021-07-22 07:10:37', '2021-07-22 07:10:37'),
(4, 5, 0, '2021-07-23 06:57:05', '2021-07-23 06:57:05'),
(5, 7, 0, '2021-07-23 06:58:32', '2021-07-23 06:58:32');

-- --------------------------------------------------------

--
-- Table structure for table `devs`
--

CREATE TABLE `devs` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_pasien` int(10) UNSIGNED DEFAULT NULL,
  `sensor` float DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `devs`
--

INSERT INTO `devs` (`id`, `id_pasien`, `sensor`, `created_at`, `updated_at`) VALUES
(1, 7, NULL, '2021-07-24 01:17:39', '2021-07-24 01:17:39');

-- --------------------------------------------------------

--
-- Table structure for table `dokters`
--

CREATE TABLE `dokters` (
  `id_dokter` int(10) UNSIGNED NOT NULL,
  `nama_dokter` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jeniskelamin` enum('Laki-laki','Perempuan') COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_telp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `institusi` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenjang` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `spesialis` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun_lulus` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dokters`
--

INSERT INTO `dokters` (`id_dokter`, `nama_dokter`, `jeniskelamin`, `no_telp`, `alamat`, `institusi`, `jenjang`, `spesialis`, `tahun_lulus`, `created_at`, `updated_at`) VALUES
(7, 'Dr. Chela, Sp.N', 'Perempuan', '08135647586', 'Karanganyar', 'UNS', 'S2', 'Saraf', '2018', '2021-04-12 20:07:39', '2021-05-02 00:22:18'),
(8, 'Dr. Pina, Sp.OT', 'Perempuan', '081239283283', 'Batang', 'UNS', 'S2', 'Ortopedi', '2018', '2021-04-12 20:08:14', '2021-04-22 01:18:35'),
(9, 'Dr. Bimo, SpPD', 'Laki-laki', '081325402709', 'Madiun', 'UNS', 'S2', 'Organ Dalam', '2018', '2021-04-12 20:19:35', '2021-04-22 01:22:56'),
(10, 'Dr. Roni Ahmad, Sp. A', 'Laki-laki', '08243551890', 'Yogyakarta', 'Universitas Indonesia', 'S2', 'Anak', '2016', '2021-06-22 20:32:42', '2021-06-22 20:33:06'),
(11, 'Dr. Dina Ria', 'Perempuan', '084119784230', 'Bandung', 'UGM', 'S1', 'Umum', '2019', '2021-06-22 20:34:17', '2021-06-22 20:34:17'),
(12, 'Dr. Rita Ora, Sp.OG', 'Perempuan', '082112415566', 'Solo', 'Undip', 'S2', 'Kandungan', '2017', '2021-06-22 20:35:22', '2021-06-22 20:35:22');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jadwals`
--

CREATE TABLE `jadwals` (
  `id_jadwal` int(10) UNSIGNED NOT NULL,
  `id_dokter` int(10) UNSIGNED NOT NULL,
  `id_poli` int(10) UNSIGNED NOT NULL,
  `hari` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jam` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jadwals`
--

INSERT INTO `jadwals` (`id_jadwal`, `id_dokter`, `id_poli`, `hari`, `jam`, `created_at`, `updated_at`) VALUES
(2, 7, 3, 'Senin', '18.00-20.00', '2021-04-12 20:09:26', '2021-07-13 02:36:09'),
(4, 11, 8, 'Senin', '16.00-19.00', '2021-05-12 03:50:08', '2021-07-13 02:37:56'),
(5, 10, 4, 'Selasa', '10.00-13.00', '2021-07-06 11:26:25', '2021-07-13 02:38:10'),
(6, 11, 8, 'Selasa', '12.30-15.30', '2021-07-06 11:28:19', '2021-07-13 02:38:23'),
(7, 8, 2, 'Rabu', '08.00-11.00', '2021-07-06 11:28:39', '2021-07-13 02:38:41'),
(8, 12, 6, 'Rabu', '13.00-15.00', '2021-07-06 11:29:16', '2021-07-13 02:39:01'),
(9, 11, 8, 'Rabu', '11.00-13.00', '2021-07-13 02:39:41', '2021-07-22 07:04:25'),
(10, 9, 8, 'Kamis', '12.00-14.00', '2021-07-13 02:40:14', '2021-07-13 02:40:14'),
(11, 10, 2, 'Kamis', '14.00-15.00', '2021-07-13 02:40:49', '2021-07-13 02:40:49'),
(13, 11, 2, 'Jumat', '12-00-13.00', '2021-07-22 07:04:11', '2021-07-22 07:04:11');

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
(1, '2021_03_25_163738_create_ruang_table', 1),
(2, '2021_03_26_174623_create_obat_table', 1),
(3, '2021_03_29_102707_create_resep_table', 1),
(4, '2021_04_04_115323_create_admins_table', 1),
(5, '2021_04_04_115842_create_dokters_table', 1),
(6, '2021_04_04_120840_create_pasiens_table', 1),
(7, '2021_04_04_121206_create_perawats_table', 1),
(8, '2021_04_04_121627_create_periksas_table', 1),
(9, '2021_04_04_121843_create_polis_table', 1),
(10, '2021_04_04_122017_create_rekam_medis_table', 1),
(12, '2021_04_04_124411_create_jadwals_table', 1),
(70, '2014_10_12_000000_create_users_table', 2),
(71, '2014_10_12_100000_create_password_resets_table', 2),
(72, '2019_08_19_000000_create_failed_jobs_table', 2),
(73, '2021_06_16_070756_create_devices_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `obat`
--

CREATE TABLE `obat` (
  `id_obat` int(10) UNSIGNED NOT NULL,
  `nama_obat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis` enum('Serbuk','Tablet','Pil','Kapsul','Sirup') COLLATE utf8mb4_unicode_ci NOT NULL,
  `kandungan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `obat`
--

INSERT INTO `obat` (`id_obat`, `nama_obat`, `jenis`, `kandungan`, `created_at`, `updated_at`) VALUES
(1, 'Paramex', 'Kapsul', 'Paracetamol', '2021-04-04 21:21:44', '2021-04-04 21:21:44'),
(2, 'Mylanta', 'Sirup', 'magnesium hidroksida, simethicone', '2021-04-06 21:42:06', '2021-05-12 03:32:49'),
(4, 'Teofilin', 'Tablet', 'Salbutamol', '2021-05-12 03:33:50', '2021-05-12 03:33:50'),
(6, 'Esomeprazole', 'Kapsul', 'Ezomeprazole Na 40mg', '2021-06-22 20:17:17', '2021-06-22 20:17:17'),
(8, 'Ibuprofen', 'Tablet', 'Ibuprofen 400mg', '2021-07-14 01:48:29', '2021-07-14 01:48:29');

-- --------------------------------------------------------

--
-- Table structure for table `pasiens`
--

CREATE TABLE `pasiens` (
  `id_pasien` int(10) UNSIGNED NOT NULL,
  `nama_pasien` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jeniskelamin` enum('Laki-laki','Perempuan') COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_lahir` date NOT NULL,
  `tempat_lahir` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `pekerjaan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pasiens`
--

INSERT INTO `pasiens` (`id_pasien`, `nama_pasien`, `jeniskelamin`, `tgl_lahir`, `tempat_lahir`, `alamat`, `pekerjaan`, `created_at`, `updated_at`) VALUES
(3, 'Bunarti', 'Perempuan', '1998-07-15', 'Jakarta', 'Jl. Jend. Sudirman Jakarta Selatan', 'Ibu Rumah Tangga', '2021-04-12 20:19:04', '2021-06-25 22:22:51'),
(5, 'Ageng', 'Laki-laki', '2000-01-03', 'Madiun', 'Pilangbango RT. 16 RW. 4 Madiun', 'Mahasiswa', '2021-05-13 23:54:46', '2021-06-24 22:13:27'),
(6, 'Monica', 'Perempuan', '2000-04-24', 'Madiun', 'Tiron Kab. Madiun', 'Mahasiswa', '2021-05-22 22:55:15', '2021-06-22 20:22:54'),
(7, 'Toni Stark', 'Laki-laki', '1984-06-04', 'Yogyakarta', 'Jl. Ring Road No.4 Yogyakarta', 'Influencer', '2021-06-22 20:22:09', '2021-06-22 20:22:41'),
(8, 'Laras Puspita', 'Perempuan', '2000-04-04', 'Madiun', 'Jl. Angrek Manis Rejo Kab. Madiun', 'Mahasiswa', '2021-06-22 20:24:35', '2021-06-25 23:34:08'),
(9, 'Doni Ahmad H', 'Laki-laki', '1998-09-22', 'Surabaya', 'Jl. Gubeng Surabaya', 'Karyawan Swasta', '2021-06-22 20:30:02', '2021-06-22 20:30:02'),
(10, 'bimmo', 'Laki-laki', '2021-07-06', 'Madiun', 'Jl. Ringin', 'Mahasiswa', '2021-07-06 11:24:01', '2021-07-06 11:24:01'),
(11, 'Nicki Minaj', 'Perempuan', '1993-02-22', 'Kab. Madiun', 'Takeran Kab. Madiun', 'Sales', '2021-07-13 02:34:49', '2021-07-13 02:34:49'),
(12, 'Olivia Roro', 'Perempuan', '2001-02-19', 'Magetan', 'Jl. Takeran Raya', 'Admin Sosmed', '2021-07-19 11:45:11', '2021-07-19 11:45:11'),
(13, 'lona', 'Perempuan', '2000-03-12', 'Surabaya', 'Ketintang', 'Pegawaii', '2021-07-22 07:05:30', '2021-07-22 07:05:40');

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
-- Table structure for table `perawats`
--

CREATE TABLE `perawats` (
  `id_perawat` int(10) UNSIGNED NOT NULL,
  `nama_perawat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jeniskelamin` enum('Laki-laki','Perempuan') COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `perawats`
--

INSERT INTO `perawats` (`id_perawat`, `nama_perawat`, `jeniskelamin`, `username`, `password`, `level`, `created_at`, `updated_at`) VALUES
(2, 'Rena S', 'Perempuan', 'renaa', 'renaa', 'perawat', '2021-04-06 22:18:48', '2021-06-22 21:05:43'),
(5, 'Mono', 'Perempuan', 'mono', 'mono', 'perawat', '2021-05-10 23:09:55', '2021-06-22 21:05:53'),
(6, 'Dika R', 'Laki-laki', 'dikaa', 'dikaa', 'perawat', '2021-05-29 05:05:57', '2021-05-29 05:05:57'),
(7, 'perper', 'Laki-laki', 'perawat', 'perawat', 'perawat', '2021-06-21 04:09:38', '2021-07-12 20:26:46');

-- --------------------------------------------------------

--
-- Table structure for table `periksas`
--

CREATE TABLE `periksas` (
  `id_periksa` int(10) UNSIGNED NOT NULL,
  `tgl_periksa` date NOT NULL,
  `status` enum('Antri','Check Up','Rawat Inap','Selesai') COLLATE utf8mb4_unicode_ci NOT NULL,
  `proses` enum('Tunggu Ruang','Dapat Ruang') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_ruang` int(10) UNSIGNED DEFAULT NULL,
  `id_pasien` int(10) UNSIGNED NOT NULL,
  `id_dokter` int(10) UNSIGNED NOT NULL,
  `tgl_masuk` date DEFAULT NULL,
  `tgl_keluar` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `periksas`
--

INSERT INTO `periksas` (`id_periksa`, `tgl_periksa`, `status`, `proses`, `id_ruang`, `id_pasien`, `id_dokter`, `tgl_masuk`, `tgl_keluar`, `created_at`, `updated_at`) VALUES
(28, '2021-07-16', 'Selesai', 'Dapat Ruang', 3, 5, 11, '2021-07-16', '2021-07-18', '2021-07-16 06:18:17', '2021-07-16 06:31:58'),
(29, '2021-07-16', 'Selesai', 'Dapat Ruang', 3, 11, 7, '2021-07-16', '2021-07-19', '2021-07-16 13:54:20', '2021-07-19 10:49:30'),
(30, '2021-07-19', 'Selesai', NULL, NULL, 5, 10, NULL, NULL, '2021-07-19 11:48:33', '2021-07-19 11:49:02'),
(31, '2021-07-22', 'Check Up', NULL, NULL, 10, 10, NULL, NULL, '2021-07-22 07:06:09', '2021-07-22 07:09:23');

-- --------------------------------------------------------

--
-- Table structure for table `polis`
--

CREATE TABLE `polis` (
  `id_poli` int(10) UNSIGNED NOT NULL,
  `nama_poli` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `inventaris` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `polis`
--

INSERT INTO `polis` (`id_poli`, `nama_poli`, `inventaris`, `created_at`, `updated_at`) VALUES
(1, 'Poli Gigi', 'Meja, Kursi', '2021-04-06 22:36:32', '2021-04-06 22:36:32'),
(2, 'Saraf', 'EKG', '2021-04-06 22:47:49', '2021-04-06 22:47:49'),
(3, 'Jantung', 'Radiologi', '2021-04-12 20:09:09', '2021-04-12 20:09:09'),
(4, 'Anak', 'Meja, Wastafel', '2021-05-12 03:42:50', '2021-05-12 03:43:07'),
(6, 'Kandungan', 'USG', '2021-06-27 22:20:44', '2021-06-27 22:20:44'),
(8, 'Umum', 'Meja, Kursi', '2021-07-08 02:07:27', '2021-07-08 02:07:27');

-- --------------------------------------------------------

--
-- Table structure for table `rekam_medis`
--

CREATE TABLE `rekam_medis` (
  `id_rekammedis` int(10) UNSIGNED NOT NULL,
  `tgl_periksa` date NOT NULL,
  `id_pasien` int(10) UNSIGNED NOT NULL,
  `id_dokter` int(10) UNSIGNED NOT NULL,
  `tb` float NOT NULL,
  `bb` float NOT NULL,
  `tensi` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `diagnosa` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `keluhan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rekam_medis`
--

INSERT INTO `rekam_medis` (`id_rekammedis`, `tgl_periksa`, `id_pasien`, `id_dokter`, `tb`, `bb`, `tensi`, `diagnosa`, `keluhan`, `keterangan`, `created_at`, `updated_at`) VALUES
(14, '2021-07-16', 11, 10, 160, 50, '110/80', 'Darah Rendah', 'Pusing, Kunang-kunang', 'Minum Resep yang telah diberikan secara rutin', '2021-07-16 06:27:07', '2021-07-16 06:27:07'),
(15, '2021-07-22', 10, 10, 170, 60, '110/30', 'Anemia', 'Pusing', '-', '2021-07-22 07:10:16', '2021-07-22 07:10:16');

-- --------------------------------------------------------

--
-- Table structure for table `resep`
--

CREATE TABLE `resep` (
  `id_resep` int(10) UNSIGNED NOT NULL,
  `id_pasien` int(10) UNSIGNED NOT NULL,
  `id_obat` int(10) UNSIGNED NOT NULL,
  `aturan_minum` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `resep`
--

INSERT INTO `resep` (`id_resep`, `id_pasien`, `id_obat`, `aturan_minum`, `keterangan`, `created_at`, `updated_at`) VALUES
(8, 11, 4, '3x sehari', '-', '2021-07-14 02:41:51', '2021-07-14 02:41:51');

-- --------------------------------------------------------

--
-- Table structure for table `ruang`
--

CREATE TABLE `ruang` (
  `id_ruang` int(10) UNSIGNED NOT NULL,
  `nama_ruang` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fasilitas` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ketersediaan` enum('Tersedia','Tidak Tersedia') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ruang`
--

INSERT INTO `ruang` (`id_ruang`, `nama_ruang`, `fasilitas`, `jenis`, `ketersediaan`, `created_at`, `updated_at`) VALUES
(2, 'Melati', '2 Kasur, 1 TV, AC, Kamar Mandi', 'Kelas 2', 'Tersedia', '2021-04-12 20:29:06', '2021-07-15 15:02:15'),
(3, 'Dahlia', '3 Kasur, Kipas Angin, TV, Kamar Mandi', 'Kelas 3', 'Tersedia', '2021-04-13 01:40:35', '2021-07-15 14:33:53'),
(5, 'Anggrek', '1 Kasur, 1 TV, AC, Kamar Mandi', 'Kelas 1', 'Tersedia', '2021-05-12 03:31:23', '2021-07-15 15:02:23'),
(6, 'Kamboja', '1 Kasur, 1 TV, AC, Kamar Mandi', 'Kelas 1', 'Tersedia', '2021-06-27 22:09:10', '2021-07-15 14:32:30'),
(10, 'Ruang Tunggu', 'Kursi', '-', 'Tersedia', '2021-07-15 15:11:40', '2021-07-15 15:11:40');

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
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `devices`
--
ALTER TABLE `devices`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_pasien` (`id_pasien`);

--
-- Indexes for table `devs`
--
ALTER TABLE `devs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_pasien` (`id_pasien`);

--
-- Indexes for table `dokters`
--
ALTER TABLE `dokters`
  ADD PRIMARY KEY (`id_dokter`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jadwals`
--
ALTER TABLE `jadwals`
  ADD PRIMARY KEY (`id_jadwal`),
  ADD KEY `id_dokter` (`id_dokter`),
  ADD KEY `id_poli` (`id_poli`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `obat`
--
ALTER TABLE `obat`
  ADD PRIMARY KEY (`id_obat`);

--
-- Indexes for table `pasiens`
--
ALTER TABLE `pasiens`
  ADD PRIMARY KEY (`id_pasien`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `perawats`
--
ALTER TABLE `perawats`
  ADD PRIMARY KEY (`id_perawat`);

--
-- Indexes for table `periksas`
--
ALTER TABLE `periksas`
  ADD PRIMARY KEY (`id_periksa`),
  ADD KEY `id_dokter` (`id_dokter`),
  ADD KEY `id_pasien` (`id_pasien`),
  ADD KEY `id_ruang` (`id_ruang`);

--
-- Indexes for table `polis`
--
ALTER TABLE `polis`
  ADD PRIMARY KEY (`id_poli`);

--
-- Indexes for table `rekam_medis`
--
ALTER TABLE `rekam_medis`
  ADD PRIMARY KEY (`id_rekammedis`),
  ADD KEY `id_pasien` (`id_pasien`),
  ADD KEY `id_dokter` (`id_dokter`);

--
-- Indexes for table `resep`
--
ALTER TABLE `resep`
  ADD PRIMARY KEY (`id_resep`),
  ADD KEY `id_obat` (`id_obat`),
  ADD KEY `id_pasien` (`id_pasien`);

--
-- Indexes for table `ruang`
--
ALTER TABLE `ruang`
  ADD PRIMARY KEY (`id_ruang`);

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
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id_admin` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `devices`
--
ALTER TABLE `devices`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `devs`
--
ALTER TABLE `devs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `dokters`
--
ALTER TABLE `dokters`
  MODIFY `id_dokter` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jadwals`
--
ALTER TABLE `jadwals`
  MODIFY `id_jadwal` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `obat`
--
ALTER TABLE `obat`
  MODIFY `id_obat` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `pasiens`
--
ALTER TABLE `pasiens`
  MODIFY `id_pasien` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `perawats`
--
ALTER TABLE `perawats`
  MODIFY `id_perawat` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `periksas`
--
ALTER TABLE `periksas`
  MODIFY `id_periksa` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `polis`
--
ALTER TABLE `polis`
  MODIFY `id_poli` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `rekam_medis`
--
ALTER TABLE `rekam_medis`
  MODIFY `id_rekammedis` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `resep`
--
ALTER TABLE `resep`
  MODIFY `id_resep` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `ruang`
--
ALTER TABLE `ruang`
  MODIFY `id_ruang` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `devices`
--
ALTER TABLE `devices`
  ADD CONSTRAINT `devices_ibfk_1` FOREIGN KEY (`id_pasien`) REFERENCES `pasiens` (`id_pasien`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `devs`
--
ALTER TABLE `devs`
  ADD CONSTRAINT `devs_ibfk_1` FOREIGN KEY (`id_pasien`) REFERENCES `pasiens` (`id_pasien`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `jadwals`
--
ALTER TABLE `jadwals`
  ADD CONSTRAINT `jadwals_ibfk_1` FOREIGN KEY (`id_dokter`) REFERENCES `dokters` (`id_dokter`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `jadwals_ibfk_2` FOREIGN KEY (`id_poli`) REFERENCES `polis` (`id_poli`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `periksas`
--
ALTER TABLE `periksas`
  ADD CONSTRAINT `periksas_ibfk_1` FOREIGN KEY (`id_dokter`) REFERENCES `dokters` (`id_dokter`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `periksas_ibfk_2` FOREIGN KEY (`id_pasien`) REFERENCES `pasiens` (`id_pasien`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `periksas_ibfk_3` FOREIGN KEY (`id_ruang`) REFERENCES `ruang` (`id_ruang`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `rekam_medis`
--
ALTER TABLE `rekam_medis`
  ADD CONSTRAINT `rekam_medis_ibfk_1` FOREIGN KEY (`id_pasien`) REFERENCES `pasiens` (`id_pasien`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `rekam_medis_ibfk_2` FOREIGN KEY (`id_dokter`) REFERENCES `dokters` (`id_dokter`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `resep`
--
ALTER TABLE `resep`
  ADD CONSTRAINT `resep_ibfk_1` FOREIGN KEY (`id_obat`) REFERENCES `obat` (`id_obat`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `resep_ibfk_2` FOREIGN KEY (`id_pasien`) REFERENCES `pasiens` (`id_pasien`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
