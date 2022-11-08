-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 08, 2022 at 05:20 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gkii_tiberias`
--

-- --------------------------------------------------------

--
-- Table structure for table `bpjpenasehat`
--

CREATE TABLE `bpjpenasehat` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bpjpenasehat`
--

INSERT INTO `bpjpenasehat` (`id`, `nama`, `created_at`, `updated_at`) VALUES
(1, 'Ivan', '2022-11-03 15:09:50', '2022-11-03 15:09:50'),
(2, 'Ivan', '2022-11-03 15:10:54', '2022-11-03 15:10:54');

-- --------------------------------------------------------

--
-- Table structure for table `bpjpengembalaan`
--

CREATE TABLE `bpjpengembalaan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bpjpengembalaan`
--

INSERT INTO `bpjpengembalaan` (`id`, `nama`, `created_at`, `updated_at`) VALUES
(1, 'Ivan Aprialdo', '2022-11-03 15:09:46', '2022-11-03 15:09:46');

-- --------------------------------------------------------

--
-- Table structure for table `bpjpengurusinti`
--

CREATE TABLE `bpjpengurusinti` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ketua` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `wakilketuasatu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `wakilketuadua` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sekretaris` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `wakilsekretaris` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bendehara` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `wakilbendehara` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `staftatausaha` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bpjpengurusinti`
--

INSERT INTO `bpjpengurusinti` (`id`, `ketua`, `wakilketuasatu`, `wakilketuadua`, `sekretaris`, `wakilsekretaris`, `bendehara`, `wakilbendehara`, `staftatausaha`, `created_at`, `updated_at`) VALUES
(1, 'Ivan A', 'Ivan B', 'Ivan C', 'Ivan D', 'Ivan E', 'Ivan Cc', 'Ivan G', 'Ivan H', '2022-11-03 15:10:09', '2022-11-03 15:10:09');

-- --------------------------------------------------------

--
-- Table structure for table `bpjseksipelayanan`
--

CREATE TABLE `bpjseksipelayanan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `spa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `spr` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sppemuda` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `spperkaria` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `spperkauan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `spmp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `spdstb` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `spim` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sps` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sha` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `spaset` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slmd` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `skpl` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bpjseksipelayanan`
--

INSERT INTO `bpjseksipelayanan` (`id`, `spa`, `spr`, `sppemuda`, `spperkaria`, `spperkauan`, `spmp`, `spdstb`, `spim`, `sps`, `sha`, `sp`, `spaset`, `slmd`, `skpl`, `created_at`, `updated_at`) VALUES
(1, 'YULIANI', 'MELAYA, S.Th.', 'YOPI FEBRYANTO, S.H.', 'HENDRO, S.Sos.', 'HANA MARLINDA', 'ANES, S.Pd.', 'SEBINUS, S.P.', 'ALEX FLANERY, S.Pd.K.', 'NOVITA, S.P., M.M.', 'RADIUS, S.H.', 'SYAHDAN, S.P.', 'YOSSAK', 'HARRY SAPUTRA', 'HENDRI KURNIAWAN', '2022-11-03 15:10:39', '2022-11-03 15:10:39');

-- --------------------------------------------------------

--
-- Table structure for table `bppelayanananak`
--

CREATE TABLE `bppelayanananak` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ketua` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sekretaris` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bendehara` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bppelayanananak`
--

INSERT INTO `bppelayanananak` (`id`, `ketua`, `sekretaris`, `bendehara`, `created_at`, `updated_at`) VALUES
(1, 'Ivan A', 'Ivan B', 'Ivan C', '2022-11-03 15:11:06', '2022-11-03 15:11:06');

-- --------------------------------------------------------

--
-- Table structure for table `bppelayananpemuda`
--

CREATE TABLE `bppelayananpemuda` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ketua` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sekretaris` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bendehara` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bppelayananpemuda`
--

INSERT INTO `bppelayananpemuda` (`id`, `ketua`, `sekretaris`, `bendehara`, `created_at`, `updated_at`) VALUES
(2, 'Ivan A', 'Ivan B', 'Ivan C', '2022-11-03 15:11:25', '2022-11-03 15:11:25');

-- --------------------------------------------------------

--
-- Table structure for table `bppelayananperkaria`
--

CREATE TABLE `bppelayananperkaria` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ketua` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sekretaris` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bendehara` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bppelayananperkaria`
--

INSERT INTO `bppelayananperkaria` (`id`, `ketua`, `sekretaris`, `bendehara`, `created_at`, `updated_at`) VALUES
(1, 'Ivan A', 'Ivan B', 'Ivan C', '2022-11-03 15:11:33', '2022-11-03 15:11:33');

-- --------------------------------------------------------

--
-- Table structure for table `bppelayananperkauan`
--

CREATE TABLE `bppelayananperkauan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ketua` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sekretaris` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bendehara` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bppelayananperkauan`
--

INSERT INTO `bppelayananperkauan` (`id`, `ketua`, `sekretaris`, `bendehara`, `created_at`, `updated_at`) VALUES
(1, 'Ivan A', 'Ivan B', 'Ivan C', '2022-11-03 15:11:40', '2022-11-03 15:11:40');

-- --------------------------------------------------------

--
-- Table structure for table `bppelayananremaja`
--

CREATE TABLE `bppelayananremaja` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ketua` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sekretaris` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bendehara` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bppelayananremaja`
--

INSERT INTO `bppelayananremaja` (`id`, `ketua`, `sekretaris`, `bendehara`, `created_at`, `updated_at`) VALUES
(1, 'Ivan A', 'Ivan B', 'Ivan C', '2022-11-03 15:11:12', '2022-11-03 15:11:12');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Renungan', 'renungan', '2022-11-03 15:08:49', '2022-11-03 15:08:49'),
(2, 'Program GKII Tiberias Sekadau', 'program-gkii-tiberias-sekadau', '2022-11-03 15:08:49', '2022-11-03 15:08:49'),
(3, 'Kegiatan GKII Tiberias Sekadau', 'kegiatan-gkii-tiberias-sekadau', '2022-11-03 15:08:49', '2022-11-03 15:08:49');

-- --------------------------------------------------------

--
-- Table structure for table `data_jemaat`
--

CREATE TABLE `data_jemaat` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `ttl` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` enum('pria','wanita') COLLATE utf8mb4_unicode_ci NOT NULL,
  `pekerjaan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `statusbaptis` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `nohp` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `data_jemaat`
--

INSERT INTO `data_jemaat` (`id`, `nama`, `alamat`, `ttl`, `gender`, `pekerjaan`, `statusbaptis`, `nohp`, `created_at`, `updated_at`) VALUES
(1, 'Ivan Aprialdo', 'Jalan Selat Sumba 2 Gg Harapan 3', '04042001', 'pria', 'Mahasiswa', 'Belum', '089528603835', '2022-11-03 15:16:28', '2022-11-03 15:16:28');

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
-- Table structure for table `galery`
--

CREATE TABLE `galery` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `deskripsi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galery`
--

INSERT INTO `galery` (`id`, `deskripsi`, `gambar`, `created_at`, `updated_at`) VALUES
(1, 'kegiatan gkii tiberias sekadau', '1667488652p2.JPG', '2022-11-03 15:17:32', '2022-11-03 15:17:32');

-- --------------------------------------------------------

--
-- Table structure for table `ibadahremaja`
--

CREATE TABLE `ibadahremaja` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `wsleader` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pemainmusik` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pkhotbah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hari` date NOT NULL,
  `jam` time NOT NULL,
  `tempat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ibadahremaja`
--

INSERT INTO `ibadahremaja` (`id`, `wsleader`, `pemainmusik`, `pkhotbah`, `hari`, `jam`, `tempat`, `created_at`, `updated_at`) VALUES
(1, 'Ivan Aprialdo', 'Ivan Fales', 'Alvi Risky', '2022-11-17', '23:13:00', 'Gereja Gkii Tiberias Sekadau', '2022-11-03 15:13:31', '2022-11-03 15:13:31');

-- --------------------------------------------------------

--
-- Table structure for table `ikeluarga`
--

CREATE TABLE `ikeluarga` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `wsleader` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pemainmusik` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pkhotbah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hari` date NOT NULL,
  `jam` time NOT NULL,
  `tempat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ikeluarga`
--

INSERT INTO `ikeluarga` (`id`, `wsleader`, `pemainmusik`, `pkhotbah`, `hari`, `jam`, `tempat`, `alamat`, `created_at`, `updated_at`) VALUES
(1, 'Ivan Aprialdo', 'Ivan Fales', 'Alvi Risky', '2022-11-01', '01:14:00', 'Gereja Gkii Tiberias Sekadau', 'Jalan Selat Sumba 2 Gg Harapan 3', '2022-11-03 15:14:08', '2022-11-03 15:14:08');

-- --------------------------------------------------------

--
-- Table structure for table `iminggu`
--

CREATE TABLE `iminggu` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `wsleader` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `singer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pemainmusik` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pkhotbah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pendoa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ptgskolekte` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pentamu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `petparkir` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hari` date NOT NULL,
  `jam` time NOT NULL,
  `tempat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `iminggu`
--

INSERT INTO `iminggu` (`id`, `wsleader`, `singer`, `pemainmusik`, `pkhotbah`, `pendoa`, `ptgskolekte`, `pentamu`, `petparkir`, `hari`, `jam`, `tempat`, `created_at`, `updated_at`) VALUES
(1, 'Ivan Aprialdo', 'ivan', 'Ivan Fales', 'Komit', 'ivannn', 'andriyana', 'Ivan', 'Ivan', '2022-11-16', '02:15:00', 'Gereja Gkii Tiberias Sekadau', '2022-11-03 15:15:53', '2022-11-03 15:15:53');

-- --------------------------------------------------------

--
-- Table structure for table `ipemuda`
--

CREATE TABLE `ipemuda` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `wsleader` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pemainmusik` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pkhotbah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hari` date NOT NULL,
  `jam` time NOT NULL,
  `tempat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ipemuda`
--

INSERT INTO `ipemuda` (`id`, `wsleader`, `pemainmusik`, `pkhotbah`, `hari`, `jam`, `tempat`, `created_at`, `updated_at`) VALUES
(1, 'Ivan Aprialdo 1', 'Iwan', 'vannnn', '2022-11-14', '01:15:00', 'Gereja Gkii Tiberias Sekadau', '2022-11-03 15:15:23', '2022-11-03 15:15:23');

-- --------------------------------------------------------

--
-- Table structure for table `iperkaria`
--

CREATE TABLE `iperkaria` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `wsleader` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pemainmusik` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pkhotbah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hari` date NOT NULL,
  `jam` time NOT NULL,
  `tempat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `iperkaria`
--

INSERT INTO `iperkaria` (`id`, `wsleader`, `pemainmusik`, `pkhotbah`, `hari`, `jam`, `tempat`, `created_at`, `updated_at`) VALUES
(1, 'Ivan Aprialdo', 'Ivan Fales', 'Komit', '2022-11-09', '02:13:00', 'Gereja Gkii Tiberias Sekadau', '2022-11-03 15:13:50', '2022-11-03 15:13:50');

-- --------------------------------------------------------

--
-- Table structure for table `iperkauan`
--

CREATE TABLE `iperkauan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `wsleader` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pemainmusik` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pkhotbah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hari` date NOT NULL,
  `jam` time NOT NULL,
  `tempat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `iperkauan`
--

INSERT INTO `iperkauan` (`id`, `wsleader`, `pemainmusik`, `pkhotbah`, `hari`, `jam`, `tempat`, `created_at`, `updated_at`) VALUES
(1, 'Ivan Aprialdo', 'Ivan Ronaldo', 'Alvi Risky', '2022-11-02', '03:14:00', 'Gereja Gkii Tiberias Sekadau Hilir Kabupaten', '2022-11-03 15:14:54', '2022-11-03 15:14:54');

-- --------------------------------------------------------

--
-- Table structure for table `ipersedoapemuda`
--

CREATE TABLE `ipersedoapemuda` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `wsleader` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pemainmusik` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pkhotbah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hari` date NOT NULL,
  `jam` time NOT NULL,
  `tempat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ipersedoapemuda`
--

INSERT INTO `ipersedoapemuda` (`id`, `wsleader`, `pemainmusik`, `pkhotbah`, `hari`, `jam`, `tempat`, `alamat`, `created_at`, `updated_at`) VALUES
(1, 'Ivan Aprialdo', 'Ivan Fales', 'Alvi Risky', '2022-11-02', '00:14:00', 'Gereja Gkii Tiberias Sekadau', 'Jalan Selat Sumba 2 Gg Harapan 3', '2022-11-03 15:14:29', '2022-11-03 15:14:29');

-- --------------------------------------------------------

--
-- Table structure for table `isekolah`
--

CREATE TABLE `isekolah` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `wsleader` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pemainmusik` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pbwcerita` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hari` date NOT NULL,
  `jam` time NOT NULL,
  `tempat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `isekolah`
--

INSERT INTO `isekolah` (`id`, `wsleader`, `pemainmusik`, `pbwcerita`, `hari`, `jam`, `tempat`, `created_at`, `updated_at`) VALUES
(1, 'Ivan Aprialdo', 'Ivan Fales', 'Toga', '2022-11-15', '00:16:00', 'Gereja Gkii Tiberias Sekadau Hilir Kabupaten', '2022-11-03 15:16:13', '2022-11-03 15:16:13');

-- --------------------------------------------------------

--
-- Table structure for table `kolekte`
--

CREATE TABLE `kolekte` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nominal` int(11) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kolekte`
--

INSERT INTO `kolekte` (`id`, `nominal`, `tanggal`, `created_at`, `updated_at`) VALUES
(1, 1000000, '2022-11-01', '2022-11-03 15:17:00', '2022-11-03 15:17:00');

-- --------------------------------------------------------

--
-- Table structure for table `kontak`
--

CREATE TABLE `kontak` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nophone1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nophone2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nophone3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kontak`
--

INSERT INTO `kontak` (`id`, `email`, `nophone1`, `nophone2`, `nophone3`, `facebook`, `created_at`, `updated_at`) VALUES
(1, 'gkii.tiberias.skd@gmail.com', '0822 5226 3769', '0812 5491 0142', '0812 5756 6301', 'GKII Tiberias Sekadau', '2022-11-03 15:19:09', '2022-11-03 15:19:09');

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
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_06_23_120428_create_posts_table', 1),
(6, '2022_06_23_141935_create_categories_table', 1),
(7, '2022_07_01_085040_add_is_admin_to_users_table', 1),
(8, '2022_07_18_082120_pesan', 1),
(9, '2022_07_22_110905_data_jemaat', 1),
(10, '2022_07_31_111531_ibadahkeluarga', 1),
(11, '2022_07_31_111531_ibadahminggu', 1),
(12, '2022_07_31_111531_ibadahpemuda', 1),
(13, '2022_07_31_111531_ibadahperkaria', 1),
(14, '2022_07_31_111531_ibadahperkauan', 1),
(15, '2022_07_31_111531_ibadahpersedoapemuda', 1),
(16, '2022_07_31_111531_ibadahremaja', 1),
(17, '2022_07_31_111531_ibadahsekolah', 1),
(18, '2022_07_31_111531_kontak', 1),
(19, '2022_07_31_111531_pelayanananak', 1),
(20, '2022_07_31_111531_pelayananpemuda', 1),
(21, '2022_07_31_111531_pelayananperkaria', 1),
(22, '2022_07_31_111531_pelayananperkauan', 1),
(23, '2022_07_31_111531_pelayananremaja', 1),
(24, '2022_07_31_111531_penasehat', 1),
(25, '2022_07_31_111531_pengembalaan', 1),
(26, '2022_07_31_111531_pengurusinti', 1),
(27, '2022_07_31_111531_seksipelayanan', 1),
(28, '2022_08_28_155234_saldobulanan', 1),
(29, '2022_08_28_183419_kolekte', 1),
(30, '2022_08_28_183419_persepuluhan', 1),
(31, '2022_08_31_182737_galery', 1),
(32, '2022_09_06_211644_create_permission_tables', 1);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 1),
(2, 'App\\Models\\User', 2);

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
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `persepuluhan`
--

CREATE TABLE `persepuluhan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nominal` int(11) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `persepuluhan`
--

INSERT INTO `persepuluhan` (`id`, `nominal`, `tanggal`, `created_at`, `updated_at`) VALUES
(1, 5000, '2022-11-08', '2022-11-03 15:17:14', '2022-11-03 15:17:14');

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
-- Table structure for table `pesan`
--

CREATE TABLE `pesan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subjek` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `pesan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `published_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `category_id`, `user_id`, `title`, `slug`, `image`, `excerpt`, `body`, `published_at`, `created_at`, `updated_at`) VALUES
(1, 3, 1, 'Kunjungan gereja gkii tiberias sekadau', 'kunjungan-gereja-gkii-tiberias-sekadau', 'post-images/LgkaPc0vAuphWluJqjjuHymlo5isVly8u0tMd1sn.jpg', 'is simply dummy text of the printing and typesetting industry.&nbsp;Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s,&nbsp;when an unknown printer took a galley of type and...', '<div>is simply dummy text of the printing and typesetting industry.&nbsp;<br>Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s,&nbsp;<br>when an unknown printer took a galley of type and scrambled it to make a<br>&nbsp;type specimen book. It has survived not only five centuries, but also the leap<br>&nbsp;into electronic typesetting, remaining essentially unchanged. It was&nbsp;<br><br></div>', NULL, '2022-11-03 15:12:55', '2022-11-03 15:21:31'),
(2, 2, 1, 'Kunjungan Kerja Gkii tiberias sekadau', 'kunjungan-kerja-gkii-tiberias-sekadau', 'post-images/4mWK3E11FkN4dWMUl4WJm50otWohjcQzcmh0cWG2.jpg', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distrib...', '<div>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing</div>', NULL, '2022-11-03 15:20:50', '2022-11-03 15:20:50');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'staf_tu', 'web', '2022-11-03 15:08:49', '2022-11-03 15:08:49'),
(2, 'bpj', 'web', '2022-11-03 15:08:49', '2022-11-03 15:08:49');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `saldo_bulanan`
--

CREATE TABLE `saldo_bulanan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nominal` bigint(20) DEFAULT NULL,
  `bulan` enum('Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `saldo_bulanan`
--

INSERT INTO `saldo_bulanan` (`id`, `nominal`, `bulan`, `created_at`, `updated_at`) VALUES
(1, 123456, 'Januari', '2022-11-03 15:16:42', '2022-11-03 15:16:42');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `phone`, `password`, `created_at`, `updated_at`, `is_admin`) VALUES
(1, 'Ivan Aprialdo', 'ivanaprialdo', '089520498844', '$2y$10$O9Dy9lESAXMoSI6gf04JGe7RU0rnd73K/vGuAKxKGFCQGhQxSeZFy', '2022-11-03 15:08:49', '2022-11-03 15:08:49', 0),
(2, 'Badan Pengurus Jemaat', 'badanpengurusjemaat', '089513591811', '$2y$10$F9hRmXGerVhv/LAp7yOARepQ3AADI1lQuaSOGEIjT3eV51M5mhEgO', '2022-11-03 15:08:49', '2022-11-03 15:08:49', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bpjpenasehat`
--
ALTER TABLE `bpjpenasehat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bpjpengembalaan`
--
ALTER TABLE `bpjpengembalaan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bpjpengurusinti`
--
ALTER TABLE `bpjpengurusinti`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bpjseksipelayanan`
--
ALTER TABLE `bpjseksipelayanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bppelayanananak`
--
ALTER TABLE `bppelayanananak`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bppelayananpemuda`
--
ALTER TABLE `bppelayananpemuda`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bppelayananperkaria`
--
ALTER TABLE `bppelayananperkaria`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bppelayananperkauan`
--
ALTER TABLE `bppelayananperkauan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bppelayananremaja`
--
ALTER TABLE `bppelayananremaja`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_name_unique` (`name`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`);

--
-- Indexes for table `data_jemaat`
--
ALTER TABLE `data_jemaat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `galery`
--
ALTER TABLE `galery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ibadahremaja`
--
ALTER TABLE `ibadahremaja`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ikeluarga`
--
ALTER TABLE `ikeluarga`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `iminggu`
--
ALTER TABLE `iminggu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ipemuda`
--
ALTER TABLE `ipemuda`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `iperkaria`
--
ALTER TABLE `iperkaria`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `iperkauan`
--
ALTER TABLE `iperkauan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ipersedoapemuda`
--
ALTER TABLE `ipersedoapemuda`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `isekolah`
--
ALTER TABLE `isekolah`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kolekte`
--
ALTER TABLE `kolekte`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kontak`
--
ALTER TABLE `kontak`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `persepuluhan`
--
ALTER TABLE `persepuluhan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `posts_slug_unique` (`slug`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `saldo_bulanan`
--
ALTER TABLE `saldo_bulanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_phone_unique` (`phone`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bpjpenasehat`
--
ALTER TABLE `bpjpenasehat`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `bpjpengembalaan`
--
ALTER TABLE `bpjpengembalaan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bpjpengurusinti`
--
ALTER TABLE `bpjpengurusinti`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bpjseksipelayanan`
--
ALTER TABLE `bpjseksipelayanan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bppelayanananak`
--
ALTER TABLE `bppelayanananak`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bppelayananpemuda`
--
ALTER TABLE `bppelayananpemuda`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `bppelayananperkaria`
--
ALTER TABLE `bppelayananperkaria`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bppelayananperkauan`
--
ALTER TABLE `bppelayananperkauan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bppelayananremaja`
--
ALTER TABLE `bppelayananremaja`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `data_jemaat`
--
ALTER TABLE `data_jemaat`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `galery`
--
ALTER TABLE `galery`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ibadahremaja`
--
ALTER TABLE `ibadahremaja`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ikeluarga`
--
ALTER TABLE `ikeluarga`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `iminggu`
--
ALTER TABLE `iminggu`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ipemuda`
--
ALTER TABLE `ipemuda`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `iperkaria`
--
ALTER TABLE `iperkaria`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `iperkauan`
--
ALTER TABLE `iperkauan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ipersedoapemuda`
--
ALTER TABLE `ipersedoapemuda`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `isekolah`
--
ALTER TABLE `isekolah`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kolekte`
--
ALTER TABLE `kolekte`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kontak`
--
ALTER TABLE `kontak`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `persepuluhan`
--
ALTER TABLE `persepuluhan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `saldo_bulanan`
--
ALTER TABLE `saldo_bulanan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
