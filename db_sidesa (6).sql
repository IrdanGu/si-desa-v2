-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 05, 2025 at 07:53 AM
-- Server version: 8.0.30
-- PHP Version: 8.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sidesa`
--

-- --------------------------------------------------------

--
-- Table structure for table `agenda`
--

CREATE TABLE `agenda` (
  `id` bigint UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal` date NOT NULL,
  `jam` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `acara` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `agenda`
--

INSERT INTO `agenda` (`id`, `judul`, `tanggal`, `jam`, `acara`, `tempat`, `content`, `user_id`, `created_at`, `updated_at`) VALUES
(3, 'agenda rapat rutinan aparat', '1970-01-01', '14:00 WIB', 'Rapat maulid muhamad', 'masjid', 'kumpuln semua aparat dengan wajib', 1, '2024-05-21 20:09:07', '2024-05-25 08:22:08'),
(4, 'ajsjahjshja dd', '1970-01-01', '12:00 wib', 'koncing', 'mancagar', '<p>huhun</p>', 1, '2024-06-20 19:04:31', '2024-10-28 04:00:00'),
(5, 'ini aji', '1970-01-01', '12:00-14:00', 'posyandun', 'balai desa', '<p>ini adalah</p>', 1, '2024-10-28 04:04:28', '2024-11-07 23:23:36'),
(6, 'pembagian bantuan', '2024-11-14', '12:00-14:00', 'rumbu stunting', 'balai desa', '<p>ini harus dihadiri yaa</p>', 1, '2024-11-07 23:31:32', '2024-11-07 23:31:32'),
(7, 'pembagian uang nnsss', '1970-01-01', '12:00-14:00', 'posyandu', 'balai desa', '<p>ini pembagian uang</p>', 1, '2024-11-08 07:06:04', '2024-11-08 23:40:08');

-- --------------------------------------------------------

--
-- Table structure for table `agenda_karangtaruna`
--

CREATE TABLE `agenda_karangtaruna` (
  `id` bigint UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal` date NOT NULL,
  `jam` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `acara` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `agenda_karangtaruna`
--

INSERT INTO `agenda_karangtaruna` (`id`, `judul`, `tanggal`, `jam`, `acara`, `tempat`, `content`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'karangtaruna best', '1970-01-01', '12:00-14:00', 'rumbu stunting untuk anak', 'balai desa', '<p>ini harus dihadiri</p><p><br></p>', 1, '2024-11-08 17:35:23', '2024-11-08 17:36:48'),
(2, 'Agenda rapat karangtaruna', '2024-05-23', '12:00 wib', 'maulid muhamad', 'baledesa', '<p>hhg</p>', 1, '2024-05-21 06:44:51', '2024-05-21 06:44:51'),
(3, 'agenda rutinan yang harus dilakukan', '2024-05-09', '12:00 wib', 'pembagian sembako', 'posyandu', '<p>ini harus dihadiri dengan banyak orang ya</p>', 1, '2024-05-21 17:29:29', '2024-05-21 17:29:29'),
(6, 'ajsjahjshja dd', '1970-01-01', '12:00 wib', 'konci', 'mancagar', 'okokokokok', 1, '2024-06-20 18:48:57', '2024-10-28 03:58:27'),
(7, 'ajsjahjshja dd', '2024-06-22', '12:00 wib', 'konci', 'mancagar', '<p>jijik</p>', 1, '2024-06-20 18:51:23', '2024-06-20 18:51:23'),
(8, 'ajsjahjshja dd', '2024-06-18', '12:00 wib', 'konci', 'mancagar', '<p>jujunaaaa</p>', 1, '2024-06-20 18:52:10', '2024-06-20 18:52:10'),
(9, 'ajsjahjshja dd', '2024-06-18', '12:00 wib', 'konci', 'mancagar', '<p>nununnn</p>', 1, '2024-06-20 18:52:53', '2024-06-20 18:52:53');

-- --------------------------------------------------------

--
-- Table structure for table `aparatur_desas`
--

CREATE TABLE `aparatur_desas` (
  `id` bigint UNSIGNED NOT NULL,
  `gambar_struktur` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `aparatur_desas`
--

INSERT INTO `aparatur_desas` (`id`, `gambar_struktur`, `created_at`, `updated_at`) VALUES
(7, 'gambar/aparatur desa mancagar 1.png', '2024-05-18 08:04:18', '2024-06-08 03:25:46');

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id` bigint UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id`, `judul`, `slug`, `content`, `gambar`, `user_id`, `created_at`, `updated_at`) VALUES
(8, 'desa macagar', 'desa-macagar', '<p><b>Secara umum Desa Mancagar terletak pada ketinggian 400 Mdpl (Meter dari permukaan laut&nbsp;) dengan kontur permukaan&nbsp; tanah 80 % &nbsp;datar dan&nbsp; 20 % berbukit dan 0% berupa lereng :</b></p><ol><li>ini adalah desa yang sangat bagus</li><li>ini adalah desa yang sangat bagus</li><li>ini adalah desa yang sangat bagus</li><li>ini adalah desa yang sangat bagus</li><li>ini adalah desa yang sangat bagus</li></ol>', 'gambar/6bK303ylAjUhfHPVMmKS1Zms4MEz1RThFKPaUjBS.jpg', 1, '2024-05-18 00:35:09', '2024-05-20 01:04:56'),
(10, 'desa mancagar dcd', 'desa-mancagar-dcd', '<p>ini adaalah yang harus dolakukan dan wajib ada ini adalah kunci dari kesuksesan yang pernah ada</p><p><span style=\"white-space-collapse: preserve;\">Hari/Tanggal&nbsp; &nbsp;&nbsp; &nbsp; : 05 Januari 2024<br>&nbsp; &nbsp; Jam &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: 11.00 Wita<br>&nbsp; &nbsp; Acara &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: Rapat Rutin Staf/Perangkat Desa Mancagar Tahun 2024<br>&nbsp; &nbsp;Tempat &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;:&nbsp;Kantor Perbekel Banjarasem</span><br></p>', 'gambar/3zNoeRxL14KiOB6ZaYxW1CGCanYdiePRk3nwDMka.jpg', 1, '2024-05-18 01:01:40', '2024-05-22 17:53:10'),
(13, 'Desa Mancagar Berhasil membuat sebuah sistem', 'desa-mancagar-berhasil-membuat-sebuah-sistem', '<p style=\"border: 0px solid rgb(227, 227, 227); --tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness: proximity; --tw-gradient-from-position: ; --tw-gradient-via-position: ; --tw-gradient-to-position: ; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(69,89,164,.5); --tw-ring-offset-shadow: 0 0 transparent; --tw-ring-shadow: 0 0 transparent; --tw-shadow: 0 0 transparent; --tw-shadow-colored: 0 0 transparent; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; --tw-contain-size: ; --tw-contain-layout: ; --tw-contain-paint: ; --tw-contain-style: ; margin-right: 0px; margin-bottom: 1.25em; margin-left: 0px; color: rgb(13, 13, 13); font-family: ui-sans-serif, -apple-system, system-ui, &quot;Segoe UI&quot;, Roboto, Ubuntu, Cantarell, &quot;Noto Sans&quot;, sans-serif, Helvetica, &quot;Apple Color Emoji&quot;, Arial, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; white-space-collapse: preserve;\"><span style=\"border: 0px solid rgb(227, 227, 227); --tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness: proximity; --tw-gradient-from-position: ; --tw-gradient-via-position: ; --tw-gradient-to-position: ; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(69,89,164,.5); --tw-ring-offset-shadow: 0 0 transparent; --tw-ring-shadow: 0 0 transparent; --tw-shadow: 0 0 transparent; --tw-shadow-colored: 0 0 transparent; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; --tw-contain-size: ; --tw-contain-layout: ; --tw-contain-paint: ; --tw-contain-style: ; font-weight: 600; color: var(--tw-prose-bold);\">Desa Sukamaju Berhasil Tingkatkan Produksi Pertanian Melalui Program Inovatif</span></p><p style=\"border: 0px solid rgb(227, 227, 227); --tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness: proximity; --tw-gradient-from-position: ; --tw-gradient-via-position: ; --tw-gradient-to-position: ; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(69,89,164,.5); --tw-ring-offset-shadow: 0 0 transparent; --tw-ring-shadow: 0 0 transparent; --tw-shadow: 0 0 transparent; --tw-shadow-colored: 0 0 transparent; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; --tw-contain-size: ; --tw-contain-layout: ; --tw-contain-paint: ; --tw-contain-style: ; margin: 1.25em 0px; color: rgb(13, 13, 13); font-family: ui-sans-serif, -apple-system, system-ui, &quot;Segoe UI&quot;, Roboto, Ubuntu, Cantarell, &quot;Noto Sans&quot;, sans-serif, Helvetica, &quot;Apple Color Emoji&quot;, Arial, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; white-space-collapse: preserve;\"><span style=\"border: 0px solid rgb(227, 227, 227); --tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness: proximity; --tw-gradient-from-position: ; --tw-gradient-via-position: ; --tw-gradient-to-position: ; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(69,89,164,.5); --tw-ring-offset-shadow: 0 0 transparent; --tw-ring-shadow: 0 0 transparent; --tw-shadow: 0 0 transparent; --tw-shadow-colored: 0 0 transparent; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; --tw-contain-size: ; --tw-contain-layout: ; --tw-contain-paint: ; --tw-contain-style: ; font-weight: 600; color: var(--tw-prose-bold);\">Sukamaju, 1 Juni 2024</span> – Desa Sukamaju, sebuah desa kecil yang terletak di Kabupaten Banyuwangi, Jawa Timur, telah berhasil meningkatkan produksi pertanian mereka secara signifikan melalui program inovatif yang diperkenalkan awal tahun ini. Program tersebut, yang diberi nama \"Sukamaju Sejahtera\", berfokus pada penerapan teknologi modern dan praktik pertanian berkelanjutan.</p><p style=\"border: 0px solid rgb(227, 227, 227); --tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness: proximity; --tw-gradient-from-position: ; --tw-gradient-via-position: ; --tw-gradient-to-position: ; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(69,89,164,.5); --tw-ring-offset-shadow: 0 0 transparent; --tw-ring-shadow: 0 0 transparent; --tw-shadow: 0 0 transparent; --tw-shadow-colored: 0 0 transparent; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; --tw-contain-size: ; --tw-contain-layout: ; --tw-contain-paint: ; --tw-contain-style: ; margin: 1.25em 0px; color: rgb(13, 13, 13); font-family: ui-sans-serif, -apple-system, system-ui, &quot;Segoe UI&quot;, Roboto, Ubuntu, Cantarell, &quot;Noto Sans&quot;, sans-serif, Helvetica, &quot;Apple Color Emoji&quot;, Arial, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; white-space-collapse: preserve;\">Kepala Desa Sukamaju, Bapak Andi Prasetyo, menjelaskan bahwa program ini melibatkan penggunaan sistem irigasi tetes, pupuk organik, dan teknik bercocok tanam yang ramah lingkungan. \"Kami ingin memastikan bahwa pertanian di desa kami tidak hanya produktif tetapi juga berkelanjutan. Dengan menerapkan teknologi dan metode baru, kami berharap dapat meningkatkan kesejahteraan petani dan menjaga kelestarian lingkungan,\" ujarnya.</p><p style=\"border: 0px solid rgb(227, 227, 227); --tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness: proximity; --tw-gradient-from-position: ; --tw-gradient-via-position: ; --tw-gradient-to-position: ; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(69,89,164,.5); --tw-ring-offset-shadow: 0 0 transparent; --tw-ring-shadow: 0 0 transparent; --tw-shadow: 0 0 transparent; --tw-shadow-colored: 0 0 transparent; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; --tw-contain-size: ; --tw-contain-layout: ; --tw-contain-paint: ; --tw-contain-style: ; margin: 1.25em 0px; color: rgb(13, 13, 13); font-family: ui-sans-serif, -apple-system, system-ui, &quot;Segoe UI&quot;, Roboto, Ubuntu, Cantarell, &quot;Noto Sans&quot;, sans-serif, Helvetica, &quot;Apple Color Emoji&quot;, Arial, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; white-space-collapse: preserve;\">Hasil dari program ini sangat menggembirakan. Produksi padi meningkat sebesar 25% dibandingkan dengan tahun sebelumnya. Selain itu, tanaman hortikultura seperti sayuran dan buah-buahan juga menunjukkan peningkatan produksi yang signifikan. Petani di Desa Sukamaju kini dapat menghasilkan lebih banyak hasil panen dengan kualitas yang lebih baik.</p><p style=\"border: 0px solid rgb(227, 227, 227); --tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness: proximity; --tw-gradient-from-position: ; --tw-gradient-via-position: ; --tw-gradient-to-position: ; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(69,89,164,.5); --tw-ring-offset-shadow: 0 0 transparent; --tw-ring-shadow: 0 0 transparent; --tw-shadow: 0 0 transparent; --tw-shadow-colored: 0 0 transparent; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; --tw-contain-size: ; --tw-contain-layout: ; --tw-contain-paint: ; --tw-contain-style: ; margin: 1.25em 0px; color: rgb(13, 13, 13); font-family: ui-sans-serif, -apple-system, system-ui, &quot;Segoe UI&quot;, Roboto, Ubuntu, Cantarell, &quot;Noto Sans&quot;, sans-serif, Helvetica, &quot;Apple Color Emoji&quot;, Arial, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; white-space-collapse: preserve;\">Pak Surya, seorang petani setempat, menyatakan rasa syukurnya atas program ini. \"Dulu, kami sering mengalami kesulitan air dan kualitas tanah yang menurun. Tapi sekarang, dengan sistem irigasi tetes dan pupuk organik, tanaman kami tumbuh lebih subur dan hasil panennya lebih melimpah,\" kata Surya.</p><p style=\"border: 0px solid rgb(227, 227, 227); --tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness: proximity; --tw-gradient-from-position: ; --tw-gradient-via-position: ; --tw-gradient-to-position: ; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(69,89,164,.5); --tw-ring-offset-shadow: 0 0 transparent; --tw-ring-shadow: 0 0 transparent; --tw-shadow: 0 0 transparent; --tw-shadow-colored: 0 0 transparent; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; --tw-contain-size: ; --tw-contain-layout: ; --tw-contain-paint: ; --tw-contain-style: ; margin: 1.25em 0px; color: rgb(13, 13, 13); font-family: ui-sans-serif, -apple-system, system-ui, &quot;Segoe UI&quot;, Roboto, Ubuntu, Cantarell, &quot;Noto Sans&quot;, sans-serif, Helvetica, &quot;Apple Color Emoji&quot;, Arial, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; white-space-collapse: preserve;\">Program \"Sukamaju Sejahtera\" tidak hanya fokus pada aspek teknis pertanian tetapi juga memberikan pelatihan kepada petani mengenai manajemen keuangan dan pemasaran. Dengan demikian, para petani dapat menjual hasil panen mereka dengan harga yang lebih menguntungkan dan mengelola pendapatan mereka dengan lebih baik.</p><p style=\"border: 0px solid rgb(227, 227, 227); --tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness: proximity; --tw-gradient-from-position: ; --tw-gradient-via-position: ; --tw-gradient-to-position: ; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(69,89,164,.5); --tw-ring-offset-shadow: 0 0 transparent; --tw-ring-shadow: 0 0 transparent; --tw-shadow: 0 0 transparent; --tw-shadow-colored: 0 0 transparent; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; --tw-contain-size: ; --tw-contain-layout: ; --tw-contain-paint: ; --tw-contain-style: ; margin: 1.25em 0px; color: rgb(13, 13, 13); font-family: ui-sans-serif, -apple-system, system-ui, &quot;Segoe UI&quot;, Roboto, Ubuntu, Cantarell, &quot;Noto Sans&quot;, sans-serif, Helvetica, &quot;Apple Color Emoji&quot;, Arial, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; white-space-collapse: preserve;\">Bupati Banyuwangi, Ibu Dewi Sartika, memberikan apresiasi tinggi kepada Desa Sukamaju atas inisiatif mereka. \"Desa Sukamaju telah menunjukkan bahwa dengan inovasi dan semangat kerja keras, kemajuan di sektor pertanian dapat dicapai. Kami berharap desa-desa lain dapat mengikuti jejak Desa Sukamaju dalam meningkatkan kesejahteraan masyarakatnya,\" kata Bupati Dewi Sartika dalam kunjungannya ke desa tersebut.</p><p style=\"border: 0px solid rgb(227, 227, 227); --tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness: proximity; --tw-gradient-from-position: ; --tw-gradient-via-position: ; --tw-gradient-to-position: ; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(69,89,164,.5); --tw-ring-offset-shadow: 0 0 transparent; --tw-ring-shadow: 0 0 transparent; --tw-shadow: 0 0 transparent; --tw-shadow-colored: 0 0 transparent; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; --tw-contain-size: ; --tw-contain-layout: ; --tw-contain-paint: ; --tw-contain-style: ; margin: 1.25em 0px; color: rgb(13, 13, 13); font-family: ui-sans-serif, -apple-system, system-ui, &quot;Segoe UI&quot;, Roboto, Ubuntu, Cantarell, &quot;Noto Sans&quot;, sans-serif, Helvetica, &quot;Apple Color Emoji&quot;, Arial, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; white-space-collapse: preserve;\">Keberhasilan Desa Sukamaju dalam meningkatkan produksi pertanian ini diharapkan dapat menjadi contoh bagi desa-desa lain di Indonesia. Dengan semangat gotong royong dan inovasi, desa-desa di seluruh negeri dapat mencapai kemajuan yang signifikan dan berkelanjutan.</p>', 'gambar/mHmURGrb7FPkTbD5asHw8oavMoliK3PBXhCZU5dL.jpg', 2, '2024-06-01 05:11:54', '2024-06-03 16:12:48');

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('admindesa@gmail.com|127.0.0.1', 'i:1;', 1736758240),
('admindesa@gmail.com|127.0.0.1:timer', 'i:1736758240;', 1736758240),
('rizko123@gmail.com|127.0.0.1', 'i:1;', 1736757445),
('rizko123@gmail.com|127.0.0.1:timer', 'i:1736757445;', 1736757445);

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `email_notifications`
--

CREATE TABLE `email_notifications` (
  `id` bigint UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `galery`
--

CREATE TABLE `galery` (
  `id_galery` bigint UNSIGNED NOT NULL,
  `nama` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galery`
--

INSERT INTO `galery` (`id_galery`, `nama`, `gambar`, `created_at`, `updated_at`) VALUES
(4, 'sdsdds', 'gambar/55Yq67OG8kAC2Qb5ratBEfddGPwokd0v3N2WPre4.jpg', '2024-05-23 01:48:49', '2024-12-14 01:54:20'),
(5, 'wewewewewe', 'gambar/Kw7ehyepaZ9HqwSpykK3ctW2cnheYvVNVSfG3f4h.jpg', '2024-05-23 01:54:05', '2024-05-23 01:54:05'),
(7, 'ini', 'gambar/I7NQhq21ZSNCxvSzUJdJLL5RJ1L9RLO2dIUp50Fa.jpg', '2024-06-25 02:12:33', '2024-06-25 02:12:33'),
(8, 'iiii', 'gambar/30381oYvf8vX1WujmxAB2N22IoUP0NiGxeFAkL1i.jpg', '2024-06-25 03:20:07', '2024-06-25 03:20:07'),
(9, 'uiiui', 'gambar/vwKvUpkCEJgylp5VByDDmxIrehO4EAaJKXdeOeEr.jpg', '2024-06-25 04:53:01', '2024-06-25 04:53:01'),
(10, 'uu', 'gambar/oO1U2QSHmMohiARVHmskf45ZN7mHI3tEKEhb192t.png', '2024-06-25 05:08:14', '2024-06-25 05:08:14'),
(11, 'iioo', 'gambar/27mf4Ziewjx6Amh1O539nbKjF8FHzhzP6lWHNskN.jpg', '2024-06-25 05:08:38', '2024-06-25 05:08:38');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint UNSIGNED NOT NULL,
  `reserved_at` int UNSIGNED DEFAULT NULL,
  `available_at` int UNSIGNED NOT NULL,
  `created_at` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kepala_desa`
--

CREATE TABLE `kepala_desa` (
  `id` bigint UNSIGNED NOT NULL,
  `nama_ttd` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ttd` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kepala_desa`
--

INSERT INTO `kepala_desa` (`id`, `nama_ttd`, `ttd`, `created_at`, `updated_at`) VALUES
(1, 'ZAENAL SUPENA', 'gambar/zt2EmOG1gBIyrVXNxBXV38YFaoQFWEBH5luyJZxo.png', '2024-11-01 07:04:02', '2024-11-11 02:04:59');

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
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2024_05_10_141840_create_strukturdesas_table', 1),
(5, '2024_05_14_064927_create_aparatur_desas_table', 1),
(6, '2024_05_15_133924_create_beritas_table', 2),
(7, '2024_05_17_125224_create_penduduks_table', 3),
(8, '2024_05_17_135422_create_kks_table', 3),
(9, '2024_05_20_083354_create_agendas_table', 4),
(10, '2024_05_21_124721_create_agenda_karangtarunas_table', 5),
(11, '2024_05_23_022157_create_galeries_table', 6),
(12, '2024_05_23_124405_create_surats_table', 7),
(13, '2024_05_24_085858_suratt', 8),
(14, '2024_05_27_121044_create_potensi_desas_table', 9),
(15, '2024_06_04_053048_create_surat__keterangan_usahas_table', 10),
(16, '2024_06_05_005353_surat_keterangan_usaha', 11),
(17, '2024_06_13_132911_surattt', 12),
(18, '2024_06_16_004832_suratt_ku', 13),
(19, '2024_06_30_153536_create_email_notifications_table', 14),
(20, '2024_07_18_161707_add_birthdate_column', 15),
(21, '2024_08_13_234842_suratt_domisili', 16),
(22, '2024_09_26_081424_users_surat', 17),
(23, '2024_10_28_002036_kepaladesa', 18),
(24, '2024_10_28_004953_kepaladesa', 19),
(25, '2024_11_01_130932_create_kepala_desa_table', 20),
(26, '2024_11_01_133815_create_surat_domisili_table', 21),
(27, '2024_11_02_040515_create_surat_ktm_table', 22),
(28, '2024_11_02_041910_create_surat_keterangan_usaha_table', 23),
(29, '2025_01_08_102020_create_users_table', 24);

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
-- Table structure for table `penduduk`
--

CREATE TABLE `penduduk` (
  `nik` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_kk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_lengkap` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hubungan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat_lahir` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pendidikan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pekerjaan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dusun` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rt` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rw` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `penduduk`
--

INSERT INTO `penduduk` (`nik`, `no_kk`, `nama_lengkap`, `jenis_kelamin`, `hubungan`, `tempat_lahir`, `tanggal_lahir`, `status`, `pendidikan`, `pekerjaan`, `dusun`, `rt`, `rw`, `desa`) VALUES
('3171034501951002', '3208301004200003', 'YATI OKTAPIANI', 'P ', 'Istri', 'KUNINGAN', '1995-01-05', 'Kawin', 'Tamat SLTA', 'Mengrs Rmh Tangga', 'puhun', '01', '01', 'mancagar'),
('3171042211700005', '3171041201094773', 'AHMAD SUBANDI', 'LK', 'Kpl. Keluarga', 'KUNINGAN', '1970-11-22', 'Kawin', 'Tamat SLTA', 'Buruh Harian Lepas', 'puhun', '01', '01', 'mancagar'),
('3171045703710003', '3171041201094773', 'ENOK KURNIA MULIAWATI', 'P ', 'Istri', 'JAKARTA', '1971-03-17', 'Kawin', 'Tamat SLTA', 'Mengrs Rmh Tangga', 'puhun', '01', '01', 'mancagar'),
('3174041404800015', '3174041805111048', 'MUHAMAD MARLILI', 'LK', 'Kpl. Keluarga', 'KUNINGAN', '1980-04-14', 'Kawin', 'Tamat SLTA', 'Wiraswasta', 'puhun', '01', '01', 'mancagar'),
('3174044207111006', '3174041805111048', 'VIXCY FLORENZA PUTRI', 'P', 'Anak', 'JAKARTA', '2011-07-02', 'Blm Kawin', 'Tamat SD', 'Pelajar', 'puhun', '01', '01', 'mancagar'),
('3174045607131004', '3174041805111048', 'VANIA AZKAYLANADHIFA', 'P', 'Anak', 'JAKARTA', '2013-07-16', 'Blm Kawin', 'Blm Tamat SD', 'Pelajar', 'puhun', '01', '01', 'mancagar'),
('3175012005690014', '3175011111111012', 'HASAN', 'LK', 'Kpl. Keluarga', 'KUNINGAN', '1969-05-20', 'Janda/Duda', 'Tamat SLTA', 'Buruh Harian Lepas', 'puhun', '01', '01', 'mancagar'),
('3201315111020006', '3208070602067771', 'IRMA SITI RAHMAHWATI', 'P', 'Cucu', 'KUNINGAN', '2002-11-11', 'Blm Kawin', 'Tamat SD', 'Buruh Harian Lepas', 'puhun', '01', '01', 'mancagar'),
('3208021204850001', '3208022306100003', 'EMAN SULAEMAN', 'LK', 'Kpl. Keluarga', 'KUNINGAN', '1985-04-12', 'Kawin', 'Tamat SLTP', 'Buruh Harian Lepas', 'puhun', '01', '01', 'mancagar'),
('3208021212970003', '3208072801220006', 'TAUFIK HIDAYAT, S. Pd', 'LK', 'Kpl. Keluarga', 'KUNINGAN', '1997-12-12', 'Kawin', 'Tamat S-1', 'Karyawan Honorer', 'puhun', '01', '01', 'mancagar'),
('3208060608820001', '3208061104120003', 'ROSADI', 'LK', 'Kpl_Keluarga', 'KUNINGAN', '1983-02-01', 'Kawin', 'Tamat SD', 'Wiraswasta', 'puhun', '01', '01', 'mancagar'),
('3208062611950001', '3208070809210006', 'ADI NOPIANDI', 'LK', 'Kpl. Keluarga', 'KUNINGAN', '1995-11-26', 'Kawin', 'Tamat SLTP', 'Pedagang ', 'puhun', '01', '01', 'mancagar'),
('3208070105150001', '3208071809140001', 'FAUZIA MEYLANI PUTRI', 'P ', 'Anak', 'KUNINGAN', '2015-05-01', 'Blm Kawin', 'Blm Tamat SD', 'Pelajar', 'puhun', '01', '01', 'mancagar'),
('3208070106220001', '3208072801220006', 'HAIDAR ATHARRAZKA HAMIZAN', 'LK', 'Anak', 'KUNINGAN', '2022-06-01', 'Blm Kawin', 'Blm Sekolah', 'Belum Bekerja', 'puhun', '01', '01', 'mancagar'),
('3208070107760388', '3208070602067749', 'WAWAN RIDWAN', 'LK', 'Kpl. Keluarga', 'KUNINGAN', '1976-07-01', 'Janda/Duda', 'Tamat SD', 'Buruh Harian Lepas', 'puhun', '01', '01', 'mancagar'),
('3208070110590001', '3208072907080002', 'SAPTARI', 'LK', 'Kpl. Keluarga', 'KUNINGAN', '1959-10-01', 'Kawin', 'Tamat SD', 'Petani', 'puhun', '01', '01', 'mancagar'),
('3208070202160003', '3208072507180006', 'ROBI', 'LK', 'Anak', 'KUNINGAN', '2016-02-02', 'Blm Kawin', 'Blm Tamat SD', 'Pelajar', 'puhun', '01', '01', 'mancagar'),
('3208070204710001', '3208070502070003', 'NANA SETIANA', 'LK', 'Kpl. Keluarga', 'KUNINGAN', '1971-04-02', 'Kawin', 'Tamat SLTA', 'Perangkat Desa', 'puhun', '01', '01', 'mancagar'),
('3208070207600008', '3208070602067767', 'HASAN', 'LK', 'Kpl. Keluarga', 'TANGGERANG', '1960-07-02', 'Kawin', 'Tamat SD', 'Petani / Pekebun', 'puhun', '01', '01', 'mancagar'),
('3208070304680008', '3208070602067816', 'TOHADI', 'LK', 'Kpl. Keluarga', 'KUNINGAN', '1968-04-03', 'Janda/Duda', 'Tamat SD', 'Buruh Harian Lepas', 'puhun', '01', '01', 'mancagar'),
('3208070405750005', '3208071811080048', 'USNADI', 'LK', 'Kpl. Keluarga', 'KUNINGAN', '1975-05-04', 'Janda/Duda', 'Tamat SD', 'Karyawan Swasta', 'puhun', '01', '01', 'mancagar'),
('3208070408990001', '3208072711060001', 'ILHAM RIDHO ASYSYFA`A', 'LK', 'Anak', 'BEKASI', '1999-08-04', 'Blm Kawin', 'Tamat SLTA', 'Karyawan Swasta', 'puhun', '01', '01', 'mancagar'),
('3208070409090002', '3208070501110021', 'MUHAMMAD ALFIANSYAH', 'LK', 'Anak', 'KUNINGAN', '2009-09-04', 'Blm Kawin', 'Tamat SD', 'Pelajar', 'puhun', '01', '01', 'mancagar'),
('3208070409980006', '3208070602067747', 'DEDEN NURYADI', 'LK', 'Anak', 'KUNINGAN', '1998-09-04', 'Blm Kawin', 'Tamat SLTA', 'Buruh Harian Lepas', 'puhun', '01', '01', 'mancagar'),
('3208070410130001', '3208070106120005', 'JUANDIKA WIDIYANTO', 'LK', 'Anak', 'KUNINGAN', '2013-10-04', 'Blm Kawin', 'Blm Tamat SD', 'Pelajar', 'puhun', '01', '01', 'mancagar'),
('3208070410420002', '320871811080049', 'SUKARTA', 'LK', 'Kpl. Keluarga', 'KUNINGAN', '1942-10-04', 'Janda/Duda', 'Tamat SD', 'Petani', 'puhun', '01', '01', 'mancagar'),
('3208070410560003', '3208072408070001', 'CARSAN', 'LK', 'Kpl. Keluarga', 'KUNINGAN', '1956-10-04', 'Kawin', 'Tamat SD', 'Buruh Tani', 'puhun', '01', '01', 'mancagar'),
('3208070502820001', '3208070106120005', 'KUSYANTO', 'LK', 'Kpl. Keluarga', 'KUNINGAN', '1982-02-05', 'Kawin', 'Tamat SLTP', 'Wiraswasta', 'puhun', '01', '01', 'mancagar'),
('3208070505680005', '3208070602067752', 'WARHADI', 'LK', 'Kpl. Keluarga', 'KUNINGAN', '1968-05-05', 'Kawin', 'Tamat SD', 'Buruh Harian Lepas', 'puhun', '01', '01', 'mancagar'),
('3208070506670008', '3208070511070006', 'DUDUNG', 'LK', 'Kpl. Keluarga', 'KUNINGAN', '1967-06-05', 'Kawin', 'Tamat SD', 'Wiraswasta', 'puhun', '01', '01', 'mancagar'),
('3208070507420006', '3208070602067754', 'DARLAM', 'LK', 'Kpl. Keluarga', 'KUNINGAN', '1942-07-05', 'Janda/Duda', 'Tamat SD', 'Belum/ Tidak Bekerja', 'puhun', '01', '01', 'mancagar'),
('3208070512840005', '3208071811080053', 'TATANG SUPRIYATNA', 'LK', 'Kpl. Keluarga', 'KUNINGAN', '1984-12-05', 'Kawin', 'Tamat SD', 'Wiraswasta', 'puhun', '01', '01', 'mancagar'),
('3208070603230002', '3208072705220004', 'MUHAMMAD AZKANDRA PRATAMA', 'LK', 'Anak', 'KUNINGAN', '2023-03-06', 'Blm Kawin', 'Blm Sekolah', 'Belum Bekerja', 'puhun', '01', '01', 'mancagar'),
('3208070607470006', '3208070602067764', 'KARPU', 'LK', 'Kpl_Keluarga', 'KUNINGAN', '1947-07-06', 'Janda/Duda', 'Tamat SD', 'Petani', 'puhun', '01', '01', 'mancagar'),
('3208070608010007', '3208070702062214', 'MOCHAMAD  WILLIE\nRACHMAN', 'LK', 'Anak', 'KUNINGAN', '2001-08-06', 'Belum\nKawin', 'Tamat SLTA', 'Buruh Harian Lepas', 'puhun', '01', '01', 'mancagar'),
('3208070705680004', '3208070602067746', 'SAHARI', 'LK', 'Kpl. Keluarga', 'KUNINGAN', '1968-05-07', 'Kawin', 'Tamat SD', 'Sopir', 'puhun', '01', '01', 'mancagar'),
('3208070710760004', '3208070501110021', 'UNAN', 'LK', 'Kpl. Keluarga', 'KUNINGAN', '1976-10-07', 'Kawin', 'Tamat SD', 'Buruh Harian Lepas', 'puhun', '01', '01', 'mancagar'),
('3208070804720008', '3208070602067755', 'UNTUNG', 'LK', 'Kpl. Keluarga', 'KUNINGAN', '1972-04-08', 'Kawin', 'Tamat SLTP', 'Buruh Harian Lepas', 'puhun', '01', '01', 'mancagar'),
('3208070805720010', '3208070602067762', 'SUKRA', 'LK', 'Kpl. Keluarga', 'KUNINGAN', '1972-05-08', 'Kawin', 'Tamat SD', 'Petani', 'puhun', '01', '01', 'mancagar'),
('3208070806020011', '3208070602067756', 'TEGUH MAULANA', 'LK', 'Anak', 'KUNINGAN', '2002-06-08', 'Blm Kawin', 'Tamat SLTA', 'Karyawan Swasta', 'puhun', '01', '01', 'mancagar'),
('3208070807200003', '3208061104120003', 'RAYYAN DZAKKI SETIAWAN', 'LK', 'Anak', 'KUNINGAN', '2020-07-08', 'Blm Kawin', 'Blm Sekolah', 'Belum Bekerja', 'puhun', '01', '01', 'mancagar'),
('3208070808780011', '3208070602067747', 'JAJAT JATNIKA', 'LK', 'Kpl. Keluarga', 'KUNINGAN', '1978-08-08', 'Kawin', 'Tamat SD', 'Buruh Tani', 'puhun', '01', '01', 'mancagar'),
('3208070903510001', '3208070602067774', 'SUTISNA', 'LK', 'Kpl. Keluarga', 'KUNINGAN', '1957-03-09', 'Kawin', 'Tamat SD', 'Petani', 'puhun', '01', '01', 'mancagar'),
('3208070905100001', '3208070602067762', 'MUHAMMAD VAUZAN RIFA`I', 'LK', 'Anak', 'KUNINGAN', '2010-05-09', 'Blm Kawin', 'Tamat SD', 'Pelajar', 'puhun', '01', '01', 'mancagar'),
('3208070909820008', '3208070301110026', 'DULATA', 'LK', 'Kpl. Keluarga', 'KUNINGAN', '1982-09-09', 'Kawin', 'Tamat SD', 'Wiraswasta', 'puhun', '01', '01', 'mancagar'),
('3208071007550007', '3208070301110028', 'ENDO SUKANDA', 'LK', 'Kpl. Keluarga', 'KUNINGAN', '1955-07-10', 'Kawin', 'Tamat SD', 'Wiraswasta', 'puhun', '01', '01', 'mancagar'),
('3208071009860007', '3208072709160003', 'RIO TRIONO', 'LK', 'Kpl. Keluarga', 'KUNINGAN', '1986-09-10', 'Kawin', 'Tamat SD', 'Buruh Harian Lepas', 'puhun', '01', '01', 'mancagar'),
('3208071107670001', '3208072308100001', 'JUHADI', 'LK', 'Kpl. Keluarga', 'KUNINGAN', '1967-07-11', 'Kawin', 'Tamat SLTP', 'Petani', 'puhun', '01', '01', 'mancagar'),
('3208071109010001', '3208070602067762', 'DAVIT ARDIANSYAH', 'LK', 'Anak', 'KUNINGAN', '2001-09-11', 'Blm Kawin', 'Tamat SD', 'Belum Bekerja', 'puhun', '01', '01', 'mancagar'),
('3208071206200003', '3174041805111048', 'MUHAMAD RIILLY AL-FATIH', 'LK', 'Anak', 'KUNINGAN', '2020-06-16', 'Blm Kawin', 'Blm Sekolah', 'Belum Bekerja', 'puhun', '01', '01', 'mancagar'),
('3208071307550002', '3208070602067780', 'USTAMA', 'LK', 'Kpl. Keluarga', 'KUNINGAN', '1955-07-13', 'Kawin', 'Tamat SD', 'Buruh Harian Lepas', 'puhun', '01', '01', 'mancagar'),
('3208071502760001', '3208070602067759', 'EMON', 'LK', 'Kpl. Keluarga', 'KUNINGAN', '1976-02-15', 'Kawin', 'Tamat SD', 'Buruh Harian Lepas', 'puhun', '01', '01', 'mancagar'),
('3208071508690001', '3208070602067791', 'AMIR', 'LK', 'Kpl. Keluarga', 'KUNINGAN', '1969-08-15', 'Kawin', 'Tamat SD', 'Petani', 'puhun', '01', '01', 'mancagar'),
('3208071510470001', '3208070602067758', 'KASNA', 'LK', 'Kpl. Keluarga', 'KUNINGAN', '1947-10-15', 'Kawin', 'Tamat SD', 'Petani', 'puhun', '01', '01', 'mancagar'),
('3208071606970004', '3208070602067749', 'RISTIONO', 'LK', 'Famili lain', 'KUNINGAN', '1997-06-16', 'Blm Kawin', 'Tamat SD', 'Buruh Harian Lepas', 'puhun', '01', '01', 'mancagar'),
('3208071612850001', '3208071112100009', 'DARMAN', 'LK', 'Kpl. Keluarga', 'CILACAP', '1985-12-16', 'Kawin', 'Tamat SLTP', 'Buruh Harian Lepas', 'puhun', '01', '01', 'mancagar'),
('3208071703060003', '3171041201094773', 'PAIQ PRATAMA', 'LK', 'Anak', 'JAKARTA', '2005-02-03', 'Blm Kawin', 'Tamat SLTA', 'Buruh Harian Lepas', 'puhun', '01', '01', 'mancagar'),
('3208071703960008', '3208070602067762', 'AYIF HARYONO', 'LK', 'Anak', 'KUNINGAN', '1996-03-17', 'Blm Kawin', 'Tamat SLTP', 'Belum Bekerja', 'puhun', '01', '01', 'mancagar'),
('3208071704900003', '3208070602067771', 'IKIN MUHAMMAD SODIKIN', 'LK', 'Anak', 'KUNINGAN', '1990-04-17', 'Blm Kawin', 'Tamat SD', 'Buruh Harian Lepas', 'puhun', '01', '01', 'mancagar'),
('3208071708000002', '3208070602067746', 'AGUS PRIYANTO', 'LK', 'Anak', 'KUNINGAN', '2000-08-17', 'Blm Kawin', 'Tamat SLTA', 'Buruh Harian Lepas', 'puhun', '01', '01', 'mancagar'),
('3208071806010008', '3208070602067761', 'AHMADI NURWALIMAH', 'LK', 'Anak', 'KUNINGAN', '2001-06-18', 'Blm Kawin', 'Tamat SLTA', 'Buruh Harian Lepas', 'puhun', '01', '01', 'mancagar'),
('3208071902890006', '3208071209130001', 'WAWAN IRAWAN', 'LK', 'Kpl. Keluarga', 'KUNINGAN', '1989-02-19', 'Kawin', 'Tamat SLTA', 'Karyawan Swasta', 'puhun', '01', '01', 'mancagar'),
('3208072006150002', '3208070301110026', 'GALIH RAMADHANI', 'LK', 'Anak', 'KUNINGAN', '2015-06-20', 'Blm Kawin', 'Blm Tamat SD', 'Pelajar', 'puhun', '01', '01', 'mancagar'),
('3208072107010003', '3208072308100001', 'WIDIYANTO', 'LK', 'Anak', 'KUNINGAN', '2001-07-21', 'Blm Kawin', 'Tamat SLTP', 'Buruh Harian Lepas', 'puhun', '01', '01', 'mancagar'),
('3208072107930007', '3208070602067776', 'UCI SANUSI', 'LK', 'Anak', 'KUNINGAN', '1993-07-21', 'Kawin', 'Tamat SLTP', 'Buruh Harian Lepas', 'puhun', '01', '01', 'mancagar'),
('3208072212030002', '3208070511070006', 'DICY', 'LK', 'Anak', 'KUNINGAN', '2003-12-22', 'Blm Kawin', 'Tamat SLTA', 'Belum Bekerja', 'puhun', '01', '01', 'mancagar'),
('3208072307990004', '3208070602067755', 'ANTON', 'LK', 'Anak', 'KUNINGAN', '1999-07-23', 'Blm Kawin', 'Tamat SLTP', 'Buruh Harian Lepas', 'puhun', '01', '01', 'mancagar'),
('3208072308760011', '3208072711060001', 'AGUS H. WAHYUDIN', 'LK', 'Kpl. Keluarga', 'JAKARTA', '1976-08-23', 'Kawin', 'Tamat SD', 'Buruh Harian Lepas', 'puhun', '01', '01', 'mancagar'),
('3208072403570002', '3208070602067751', 'YAHYA', 'LK', 'Kpl. Keluarga', 'KUNINGAN', '1957-03-24', 'Janda/Duda', 'Tamat SD', 'Petani', 'puhun', '01', '01', 'mancagar'),
('3208072404060002', '3208070602067761', 'BAGAS CAHYA SAPUTRA', 'LK', 'Anak', 'KUNINGAN', '2006-04-24', 'Blm Kawin', 'Tamat SLTP', 'Pelajar', 'puhun', '01', '01', 'mancagar'),
('3208072406690004', '3208070602067776', 'SADRI', 'LK', 'Kpl. Keluarga', 'KUNINGAN', '1969-06-24', 'Kawin', 'Tamat SD', 'Buruh Tani', 'puhun', '01', '01', 'mancagar'),
('3208072407120001', '3208061104120003', 'RADITYA RAMDHANI', 'LK', 'Anak', 'KUNINGAN', '2012-07-24', 'Blm Kawin', 'Blm Tamat SD', 'Pelajar', 'puhun', '01', '01', 'mancagar'),
('3208072408070001', '3208070502070003', 'MUHAMAD SALMAN ALPARIZI', 'LK', 'Anak', 'KUNINGAN', '2007-08-24', 'Blm Kawin', 'Tamat SLTP', 'Pelajar', 'puhun', '01', '01', 'mancagar'),
('3208072509000004', '3208070602067614', 'IVAN ARFIYANSYAH', 'LK', 'Anak ', 'KUNINGAN', '2000-09-25', 'Blm Kawin', 'Tamat SLTA', 'Buruh Harian Lepas', 'puhun', '01', '01', 'mancagar'),
('3208072605790002', '3208070602067761', 'WAWAN', 'LK', 'Kpl. Keluarga', 'KUNINGAN', '1979-05-26', 'Kawin', 'Tamat SD', 'Buruh Tani', 'puhun', '01', '01', 'mancagar'),
('3208072705020003', '3208070602067747', 'ADE KURNIAWAN', 'LK', 'Anak', 'KUNINGAN', '2002-05-27', 'Blm Kawin', 'Tamat SLTA', 'Buruh Harian Lepas', 'puhun', '01', '01', 'mancagar'),
('3208072707640001', '3208070702062214', 'TEDI MOCH. TAKDIR', 'LK', 'Kpl. Keluarga', 'KUNINGAN', '1964-07-27', 'Kawin', 'Tamat SLTA', 'Wiraswasta', 'puhun', '01', '01', 'mancagar'),
('3208072708720001', '3208071512110005', 'NANA SUPRIANA', 'LK', 'Kpl. Keluarga', 'KUNINGAN', '1972-08-27', 'Janda/Duda', 'Tamat SD', 'Wiraswasta', 'puhun', '01', '01', 'mancagar'),
('3208072803050001', '3208072711060001', 'HAFIDZ HARRIST NUGRAHA', 'LK', 'Anak', 'BEKASI', '2005-03-28', 'Blm Kawin', 'Tamat SLTA', 'Belum Bekerja', 'puhun', '01', '01', 'mancagar'),
('3208072808910006', '3208070306150005', 'YADI RUHYADI', 'LK', 'Kpl. Keluarga', 'KUNINGAN', '1991-08-28', 'Kawin', 'Tamat SLTP', 'Wiraswasta', 'puhun', '01', '01', 'mancagar'),
('3208072811000003', '3208070602067759', 'MUHAMAD AGUS ALI', 'LK', 'Anak', 'KUNINGAN', '2000-11-28', 'Blm Kawin', 'Tamat SLTA', 'Buruh Harian Lepas', 'puhun', '01', '01', 'mancagar'),
('3208072903140001', '3208071209130001', 'REVAN ALFARIZKI', 'LK', 'Anak', 'KUNINGAN', '2014-03-29', 'Blm Kawin', 'Blm Tamat SD', 'Pelajar', 'puhun', '01', '01', 'mancagar'),
('3208072905200001', '3208022306100003', 'GAISHAN RAFFASYA', 'LK', 'Anak', 'KUNINGAN', '2020-05-29', 'Blm Kawin', 'Blm Sekolah', 'Belum Bekerja', 'puhun', '01', '01', 'mancagar'),
('3208072907010004', '3208070602067752', 'ALDIYANSYAH', 'LK', 'Anak', 'KUNINGAN', '2001-07-29', 'Blm Kawin', 'Tamat SLTA', 'Karyawan Swasta', 'puhun', '01', '01', 'mancagar'),
('3208073107070001', '3208070301110028', 'MUHAMAD A`RIFAI', 'LK', 'Cucu', 'JAKARTA', '2007-07-31', 'Blm Kawin', 'Tamat SLTP', 'Pelajar', 'puhun', '01', '01', 'mancagar'),
('3208073110880002', '3208073105120002', 'CECENG SARMAN', 'LK', 'Kpl. Keluarga', 'KUNINGAN', '1988-10-31', 'Kawin', 'Tamat SLTA', 'Wiraswasta', 'puhun', '01', '01', 'mancagar'),
('3208074105060001', '3208090307170007', 'MEYLANI RATU AZAHRA', 'P', 'Anak', 'KUNINGAN', '2009-05-01', 'Blm Kawin', 'Tamat SD', 'Pelajar', 'puhun', '01', '01', 'mancagar'),
('3208074107490133', '3208070705070018', 'CANTI', 'P ', 'Kpl. Keluarga', 'KUNINGAN', '1949-07-01', 'Janda/Duda', 'Tdk Prnh Sklh', 'Mengrs Rmh Tangga', 'puhun', '01', '01', 'mancagar'),
('3208074205600004', '3208070602067773', 'ROHANAH', 'P ', 'Istri', 'KUNINGAN', '1960-05-02', 'Kawin', 'Tamat SD', 'Mengrs Rmh Tangga', 'puhun', '01', '01', 'mancagar'),
('3208074207870006', '3208072507180006', 'FINA TRIANA', 'P ', 'Istri', 'KUNINGAN', '1987-07-02', 'Kawin', 'Tamat SLTP', 'Mengrs Rmh Tangga', 'puhun', '01', '01', 'mancagar'),
('3208074209030001', '3208090307170007', 'STEFANNY MALIKA\nAUDINA', 'P', 'Anak', 'KUNINGAN', '2003-09-02', 'Blm Kawin', 'Tamat SLTA', 'Buruh Harian Lepas', 'puhun', '01', '01', 'mancagar'),
('3208074212160001', '3216220804070224', 'ALESHA FATTITURAHMA', 'P ', 'Anak', 'KUNINGAN', '2016-12-02', 'Blm Kawin', 'Blm Tamat SD', 'Pelajar', 'puhun', '01', '01', 'mancagar'),
('3208074212670005', '3208070602067614', 'NURJANAH', 'P ', 'Kpl. Keluarga', 'KUNINGAN', '1967-12-02', 'Janda/Duda', 'Tamat SLTP', 'Mengrs Rmh Tangga', 'puhun', '01', '01', 'mancagar'),
('3208074304940011', '3208061104120003', 'APRIYANI', 'P ', 'Istri', 'KUNINGAN', '1994-04-03', 'Kawin', 'Tamat SLTP', 'Mengrs Rmh Tangga', 'puhun', '01', '01', 'mancagar'),
('3208074310760002', '3208090307170007', 'YAYAH  HAERIYAH', 'P', 'Kpl. Keluarga', 'KUNINGAN', '1976-10-03', 'Janda/Duda', 'Tamat SLTA', 'Pensiunan', 'puhun', '01', '01', 'mancagar'),
('3208074401900009', '3208071811080053', 'JUMIYATI', 'P ', 'Istri', 'KUNINGAN', '1989-01-04', 'Kawin', 'Tamat SLTP', 'Mengrs Rmh Tangga', 'puhun', '01', '01', 'mancagar'),
('3208074405210001', '3208073105120002', 'GHANIA GRISELDA SARMALINA', 'P', 'Anak', 'KUNINGAN', '2021-05-04', 'Blm Kawin', 'Blm Sekolah', 'Belum Bekerja', 'puhun', '01', '01', 'mancagar'),
('3208074406740008', '3208070602067776', 'SARMI', 'P ', 'Istri', 'KUNINGAN', '1974-06-04', 'Kawin', 'Tamat SLTP', 'Mengrs Rmh Tangga', 'puhun', '01', '01', 'mancagar'),
('3208074408170001', '3208071112100009', 'AURORA PUTRI AZZAHRA', 'P', 'Anak', 'KUNINGAN', '2017-08-04', 'Blm Kawin', 'Blm Sekolah', 'Belum Bekerja', 'puhun', '01', '01', 'mancagar'),
('3208074410020008', '3208070908220002', 'PEPI PUJIYANTI', 'P', 'Istri', 'KUNINGAN', '2002-01-04', 'Kawin', 'Tdk Tmt SD', 'Mengrs Rmh Tangga', 'puhun', '01', '01', 'mancagar'),
('3208074505770006', '3208070602067759', 'KUSTI', 'P ', 'Istri', 'KUNINGAN', '1977-05-05', 'Kawin', 'Tamat SD', 'Mengrs Rmh Tangga', 'puhun', '01', '01', 'mancagar'),
('3208074509880006', '3208071209130001', 'MIA ROSMIATI', 'P', 'Istri', 'KUNINGAN', '1988-09-05', 'Kawin', 'Tamat SLTA', 'Mengrs Rmh Tangga', 'puhun', '01', '01', 'mancagar'),
('3208074605000009', '3208070809210006', 'MELIAWATI', 'P ', 'Istri', 'KUNINGAN', '2000-05-06', 'Kawin', 'Tamat SLTA', 'Mengrs Rmh Tangga', 'puhun', '01', '01', 'mancagar'),
('3208074607950002', '3208070306150005', 'WASTINI', 'P ', 'Istri', 'KUNINGAN', '1995-07-06', 'Kawin', 'Tamat SLTP', 'Mengrs Rmh Tangga', 'puhun', '01', '01', 'mancagar'),
('3208074608730008', '3208070602067752', 'NUNUNG', 'P ', 'Istri', 'KUNINGAN', '1973-08-06', 'Kawin', 'Tamat SD', 'Mengrs Rmh Tangga', 'puhun', '01', '01', 'mancagar'),
('3208074610750004', '3208070602067761', 'LILI HAIRI', 'P ', 'Istri', 'KUNINGAN', '1975-10-06', 'Kawin', 'Tamat SD', 'Mengrs Rmh Tangga', 'puhun', '01', '01', 'mancagar'),
('3208074611500004', '3208070602067771', 'ASNI', 'P', 'Kpl. Keluarga', 'KUNINGAN', '1950-11-06', 'Janda/Duda', 'Tamat SD', 'Buruh Tani', 'puhun', '01', '01', 'mancagar'),
('3208074704670009', '3208072907080002', 'IRAH', 'P ', 'Istri', 'KUNINGAN', '1967-04-07', 'Kawin', 'Tamat SD', 'Mengrs Rmh Tangga', 'puhun', '01', '01', 'mancagar'),
('3208074708790007', '3208070602067747', 'IKA IKANAH', 'P ', 'Istri', 'KUNINGAN', '1979-08-07', 'Kawin', 'Tamat SD', 'Mengrs Rmh Tangga', 'puhun', '01', '01', 'mancagar'),
('3208074710900007', '3208070501110021', 'ENDANG AMBARSARI', 'P ', 'Istri', 'PURWAKARTA', '1990-10-07', 'Kawin', 'Tamat SD', 'Mengrs Rmh Tangga', 'puhun', '01', '01', 'mancagar'),
('3208074805780001', '3208072711060001', 'SUSILAWATI', 'P ', 'Istri', 'KUNINGAN', '1978-05-08', 'Kawin', 'Tamat SLTA', 'Mengrs Rmh Tangga', 'puhun', '01', '01', 'mancagar'),
('3208074808890010', '3208073105120002', 'KARLINA', 'P ', 'Istri', 'KUNINGAN', '1989-08-08', 'Kawin', 'Tamat SLTA', 'Mengrs Rmh Tangga', 'puhun', '01', '01', 'mancagar'),
('3208075005760007', '3208070602067762', 'SUSI SUSILAWATI', 'P ', 'Istri', 'KUNINGAN', '1979-07-16', 'Kawin', 'Tamat SD', 'Mengrs Rmh Tangga', 'puhun', '01', '01', 'mancagar'),
('3208075005770011', '3208070702062214', 'SUPARTI', 'P', 'Istri', 'KUNINGAN', '1977-05-10', 'Kawin', 'Tamat SD', 'Mengrs Rmh Tangga', 'puhun', '01', '01', 'mancagar'),
('3208075009760003', '3208072308100001', 'KATIRAH', 'P ', 'Istri', 'KUNINGAN', '1976-09-10', 'Kawin', 'Tamat SD', 'Mengrs Rmh Tangga', 'puhun', '01', '01', 'mancagar'),
('3208075102730007', '3208070502070003', 'MARIJAH', 'P ', 'Istri', 'KUNINGAN', '1973-02-11', 'Kawin', 'Tamat SD', 'Mengrs Rmh Tangga', 'puhun', '01', '01', 'mancagar'),
('3208075105880003', '3208070106120005', 'IYAN ROSYANI', 'P ', 'Istri', 'KUNINGAN', '1988-05-11', 'Kawin', 'Tamat SLTA', 'Mengrs Rmh Tangga', 'puhun', '01', '01', 'mancagar'),
('3208075106950004', '3208070907200002', 'ATIN', 'P ', 'Istri', 'KUNINGAN', '1995-06-11', 'Kawin', 'Tamat SLTA', 'Mengrs Rmh Tangga', 'puhun', '01', '01', 'mancagar'),
('3208075111120002', '3208073105120002', 'GISEL GLADIES SARMALINA', 'P ', 'Anak', 'KUNINGAN', '2012-11-11', 'Blm Kawin', 'Blm Tamat SD', 'Pelajar', 'puhun', '01', '01', 'mancagar'),
('3208075205560001', '3208070602067774', 'ISAH', 'P ', 'Istri', 'KUNINGAN', '1956-05-12', 'Kawin', 'Tamat SD', 'Mengrs Rmh Tangga', 'puhun', '01', '01', 'mancagar'),
('3208075304650004', '3208070602067780', 'WATI', 'P ', 'Istri', 'KUNINGAN', '1965-04-13', 'Kawin', 'Tamat SLTP', 'Mengrs Rmh Tangga', 'puhun', '01', '01', 'mancagar'),
('3208075305970008', '3208070602067745', 'PIPIT TRIYANI', 'P ', 'Anak', 'KUNINGAN', '1997-05-13', 'Kawin', 'Tamat SLTP', 'Buruh Harian Lepas', 'puhun', '01', '01', 'mancagar'),
('3208075309230001', '3208070809210006', 'LUTFIA MIESAADHIRA', 'P', 'Anak', 'KUNINGAN', '2023-09-13', 'Blm Kawin', 'Blm Sekolah', 'Belum Bekerja', 'puhun', '01', '01', 'mancagar'),
('3208075312600001', '3208070602067767', 'SUWINAH', 'P', 'Istri', 'KUNINGAN', '1960-12-13', 'Kawin', 'Tamat SD', 'Mengrs Rmh Tangga', 'puhun', '01', '01', 'mancagar'),
('3208075405200001', '3208070810080004', 'ANDREENA NAIRA PUTRI MALIKA', 'P', 'Anak', 'KUNINGAN', '2020-05-14', 'Blm Kawin', 'Blm Sekolah', 'Belum Bekerja', 'puhun', '01', '01', 'mancagar'),
('3208075501160001', '3208070501110021', 'REGINA PUTRI PERTIWI', 'P ', 'Anak', 'KUNINGAN', '2016-01-15', 'Blm Kawin', 'Blm Tamat SD', 'Pelajar', 'puhun', '01', '01', 'mancagar'),
('3208075506620003', '3208070602067745', 'DOAT', 'P ', 'Kpl. Keluarga', 'KUNINGAN', '1962-06-15', 'Janda/Duda', 'Tamat SD', 'Mengrs Rmh Tangga', 'puhun', '01', '01', 'mancagar'),
('3208075507590005', '3208070602067775', 'JUMSARI', 'P ', 'Kpl. Keluarga', 'KUNINGAN', '1959-07-15', 'Janda/Duda', 'Tamat SD', 'Mengrs Rmh Tangga', 'puhun', '01', '01', 'mancagar'),
('3208075508610001', '3208070602067791', 'WARSITI', 'P ', 'Istri', 'KUNINGAN', '1961-08-15', 'Kawin', 'Tamat SLTP', 'Mengrs Rmh Tangga', 'puhun', '01', '01', 'mancagar'),
('3208075604100002', '3208070810080004', 'ALINDA APRILIAN', 'P ', 'Anak', 'KUNINGAN', '2010-04-16', 'Blm Kawin', 'Tamat SD', 'Pelajar', 'puhun', '01', '01', 'mancagar'),
('3208075703220001', '3208070809210006', 'SHYAFANA ZEA ALMAHYRA', 'P', 'Anak', 'KUNINGAN', '2022-03-17', 'Blm Kawin', 'Blm Sekolah', 'Belum Bekerja', 'puhun', '01', '01', 'mancagar'),
('3208075807970002', '3208070602067751', 'INDRIYANI', 'P ', 'Anak', 'KUNINGAN', '1997-07-18', 'Blm Kawin', 'Tamat SLTP', 'Buruh Harian Lepas', 'puhun', '01', '01', 'mancagar'),
('3208075904850009', '3208070301110026', 'KARTINI', 'P ', 'Istri', 'TANGERANG', '1985-04-19', 'Kawin', 'Tamat SD', 'Mengrs Rmh Tangga', 'puhun', '01', '01', 'mancagar'),
('3208075905120001', '3208071811080053', 'WULANDARI', 'P ', 'Anak', 'KUNINGAN', '2012-05-19', 'Blm Kawin', 'Blm Tamat SD', 'Pelajar', 'puhun', '01', '01', 'mancagar'),
('3208076003630002', '3208070301110028', 'IIM HALIMAH', 'P ', 'Istri', 'KUNINGAN', '1963-03-20', 'Kawin', 'Tamat SD', 'Mengrs Rmh Tangga', 'puhun', '01', '01', 'mancagar'),
('3208076101150001', '3208301004200003', 'YAFIKA SHOPIANA PUTRI', 'P ', 'Anak', 'KUNINGAN', '2015-01-21', 'Blm Kawin', 'Blm Tamat SD', 'Pelajar', 'puhun', '01', '01', 'mancagar'),
('3208076107160001', '3208301004200003', 'YAFITA JULIYANTI', 'P ', 'Anak', 'KUNINGAN', '2016-07-21', 'Blm Kawin', 'Blm Tamat SD', 'Pelajar', 'puhun', '01', '01', 'mancagar'),
('3208076108990003', '3208072705220004', 'AYURISA', 'P ', 'Istri', 'KUNINGAN', '1999-08-21', 'Kawin', 'Tamat SLTA', 'Mengrs Rmh Tangga', 'puhun', '01', '01', 'mancagar'),
('3208076112920003', '3208071809140001', 'WIDANINGSIH', 'P ', 'Istri', 'KUNINGAN', '1992-12-21', 'Kawin', 'Tamat SLTP', 'Mengrs Rmh Tangga', 'puhun', '01', '01', 'mancagar'),
('3208076204080001', '3208070702062214', 'REGITA CAHYA\nPRAMESTI', 'P', 'Anak', 'KUNINGAN', '2008-04-22', 'Belum\nKawin', 'Tamat SLTP', 'Pelajar', 'puhun', '01', '01', 'mancagar'),
('3208076205200001', '3208071811080053', 'SYAKIRA DEVA ARSYA', 'P ', 'Anak', 'KUNINGAN', '2020-05-22', 'Blm Kawin', 'Blm Sekolah', 'Belum Bekerja', 'puhun', '01', '01', 'mancagar'),
('3208076212200001', '3208070907200002', 'KHALISA AIZA NAADHIRA', 'P', 'Anak', 'KUNINGAN', '2020-12-22', 'Blm Kawin', 'Blm Sekolah', 'Belum Bekerja', 'puhun', '01', '01', 'mancagar'),
('3208076212860004', '3208071112100009', 'IJAH ADIJAH', 'P ', 'Istri', 'KUNINGAN', '1986-12-22', 'Kawin', 'Tamat SLTP', 'Mengrs Rmh Tangga', 'puhun', '01', '01', 'mancagar'),
('3208076310190001', '3208071209130001', 'INTAN AULIA AZZAHRA', 'P', 'Anak', 'KUNINGAN', '2019-10-23', 'Blm Kawin', 'Blm Sekolah', 'Belum Bekerja', 'puhun', '01', '01', 'mancagar'),
('3208076404130002', '3208070602067761', 'NAYSILA APRILIANA DEWI', 'P ', 'Anak', 'KUNINGAN', '2013-04-24', 'Blm Kawin', 'Blm Tamat SD', 'Pelajar', 'puhun', '01', '01', 'mancagar'),
('3208076409660005', '3208070602067756', 'URI', 'P ', 'Kpl. Keluarga', 'KUNINGAN', '1966-09-24', 'Janda/Duda', 'Tamat SLTA', 'Mengrs Rmh Tangga', 'puhun', '01', '01', 'mancagar'),
('3208076501130001', '3208070602067747', 'NAILA SANTIKA PUTRI', 'P ', 'Anak', 'KUNINGAN', '2013-01-25', 'Blm Kawin', 'Blm Tamat SD', 'Pelajar', 'puhun', '01', '01', 'mancagar'),
('3208076511530001', '3208070602067758', 'WASNI', 'P ', 'Istri', 'KUNINGAN', '1953-11-25', 'Kawin', 'Tamat SD', 'Mengrs Rmh Tangga', 'puhun', '01', '01', 'mancagar'),
('3208076604740003', '3208070602067755', 'WIWIN DASWINI', 'P ', 'Istri', 'KUNINGAN', '1974-04-26', 'Kawin', 'Tamat SD', 'Mengrs Rmh Tangga', 'puhun', '01', '01', 'mancagar'),
('3208076802590001', '3208070602067765', 'AYUTI', 'P ', 'Kpl. Keluarga', 'KUNINGAN', '1959-02-28', 'Janda/Duda', 'Tamat SD', 'Mengrs Rmh Tangga', 'puhun', '01', '01', 'mancagar'),
('3208076909620003', '3208070602067779', 'SRI ASTUTI', 'P ', 'Kpl. Keluarga', 'SEMARANG', '1962-09-29', 'Janda/Duda', 'Tamat SLTP', 'Mengrs Rmh Tangga', 'puhun', '01', '01', 'mancagar'),
('3208077006700004', '3208070602067746', 'JUMIATI', 'P ', 'Istri', 'KUNINGAN', '1970-06-30', 'Kawin', 'Tamat SD', 'Mengrs Rmh Tangga', 'puhun', '01', '01', 'mancagar'),
('3208077108860002', '3208070810080004', 'TATI HARYATI', 'P ', 'Istri', 'KUNINGAN', '1986-08-31', 'Kawin', 'Tamat SLTA', 'Mengrs Rmh Tangga', 'puhun', '01', '01', 'mancagar'),
('3208077110220001', '3208070908220002', 'ANDIN SHAPUTRI', 'P', 'Anak', 'KUNINGAN', '2022-10-31', 'Blm Kawin', 'Blm Sekolah', 'Belum Bekerja', 'puhun', '01', '01', 'mancagar'),
('3208081010100002', '3208071111140002', 'GANESH ACHMAD MAULANA', 'LK', 'Anak', 'KUNINGAN', '2010-10-10', 'Blm Kawin', 'Tamat SD', 'Pelajar', 'puhun', '01', '01', 'mancagar'),
('3208081311020001', '3208080602062727', 'MUHAMMAD FIQI AL-ANSHORY', 'LK', 'Anak', 'KUNINGAN', '2002-11-13', 'Blm Kawin', 'Tamat SLTA', 'Pelajar', 'puhun', '01', '01', 'mancagar'),
('3208081408050001', '3208071111140002', 'RIZQI AGUSTIANI', 'LK', 'Anak', 'KUNINGAN', '2005-08-14', 'Blm Kawin', 'Tamat SLTA', 'Belum Bekerja', 'puhun', '01', '01', 'mancagar'),
('3208082503000001', '3208080602062727', 'MUHAMAD ABIZARD AL-AZIZ', 'LK', 'Anak', 'KUNINGAN', '2000-03-25', 'Blm Kawin', 'Tamat SLTA', 'Pelajar', 'puhun', '01', '01', 'mancagar'),
('3208083012740001', '3208080602062727', 'SANUSI', 'LK', 'Kpl. Keluarga', 'KUNINGAN', '1974-12-30', 'Kawin', 'Tamat SLTA', 'Wiraswasta', 'puhun', '01', '01', 'mancagar'),
('3208084507720004', '3208071111140002', 'TITIN SUMARTINI', 'P ', 'Kpl. Keluarga', 'KUNINGAN', '1972-07-05', 'Janda/Duda', 'Tamat S-1', 'Pegawai Negeri Sipil', 'puhun', '01', '01', 'mancagar'),
('3208085207780004', '3208080602062727', 'LELA NURLAELA', 'P', 'Istri', 'KUNINGAN', '1978-07-12', 'Kawin', 'TAMAT S1', 'Pegawai Negeri Sipil', 'puhun', '01', '01', 'mancagar'),
('3208102203990009', '3208070908220002', 'RIMAN IRPANTO', 'LK', 'Kpl. Keluarga', 'KUNINGAN', '1999-03-22', 'Kawin', 'Tamat SD', 'Buruh Harian Lepas', 'puhun', '01', '01', 'mancagar'),
('3208110107900333', '3208071809140001', 'RASDI', 'LK', 'Kpl. Keluarga', 'KUNINGAN', '1979-10-10', 'Kawin', 'Tamat SD', 'Buruh Harian Lepas', 'puhun', '01', '01', 'mancagar'),
('3208170206820005', '3208070810080004', 'JUJU JUNAEDI', 'LK', 'Kpl. Keluarga', 'KUNINGAN', '1982-06-02', 'Kawin', 'Tamat SLTP', 'Wiraswasta', 'puhun', '01', '01', 'mancagar'),
('3208301402860003', '3208301004200003', 'RASWANTO', 'LK', 'Kpl. Keluarga', 'KUNINGAN', '1986-02-14', 'Kawin', 'Tamat SD', 'Buruh Harian Lepas', 'puhun', '01', '01', 'mancagar'),
('3208302704230001', '3208301004200003', 'RASYA MUHAMMAD ATHAYA', 'LK', 'Anak', 'KUNINGAN', '2023-04-27', 'Blm Kawin', 'Blm Sekolah', 'Belum Bekerja', 'puhun', '01', '01', 'mancagar'),
('3208304710970002', '3208072801220006', 'EEN', 'P', 'Istri', 'KUNINGAN', '1997-06-18', ' Kawin', 'Tamat S-1', 'Mengrs Rmh Tangga', 'puhun', '01', '01', 'mancagar'),
('3209070304550003', '3208070602067773', 'TARSUM', 'LK', 'Kpl. Keluarga', 'KUNINGAN', '1955-04-03', 'Kawin', 'Tamat SD', 'Petani', 'puhun', '01', '01', 'mancagar'),
('3209172609000007', '3208072705220004', 'CHANDRA WIJAYA', 'LK', 'Kpl. Keluarga', 'CIREBON', '2000-09-26', 'Kawin', 'Tamat SD', 'Buruh Harian Lepas', 'puhun', '01', '01', 'mancagar'),
('3210051006920021', '3208070907200002', 'ZAENAL ARIPIN', 'LK', 'Kpl. Keluarga', 'MAJALENGKA', '1992-06-10', 'Kawin', 'Tamat SLTA', 'Karyawan Swasta', 'puhun', '01', '01', 'mancagar'),
('3215156507890002', '3174041805111048', 'ROCHMA PUSPARINI', 'P ', 'Istri', 'JAKARTA', '1989-07-25', 'Kawin', 'Tamat SLTP', 'Mengrs Rmh Tangga', 'puhun', '01', '01', 'mancagar'),
('3216220401060001', '3216220804070224', 'CHANDRA BHAKTI PERMANA', 'LK', 'Anak', 'BEKASI', '2006-01-04', 'Blm Kawin', 'Tamat SLTP', 'Belum Bekerja', 'puhun', '01', '01', 'mancagar'),
('3216221602710001', '3216220804070224', 'WARMAN', 'LK', 'Kpl. Keluarga', 'KUNINGAN', '1971-02-16', 'Kawin', 'Tamat SLTA', 'Karyawan Swasta', 'puhun', '01', '01', 'mancagar'),
('3216222901000001', '3216220804070224', 'DIMAS LISMANSYAH', 'LK', 'Anak', 'BEKASI', '2000-01-29', 'Blm Kawin', 'Tamat SLTA', 'Buruh Harian Lepas', 'puhun', '01', '01', 'mancagar'),
('3216224103780006', '3216220804070224', 'LILIS SULISTIAWATI', 'P ', 'Istri', 'JAKARTA', '1978-03-01', 'Kawin', 'Tamat SLTP', 'Mengrs Rmh Tangga', 'puhun', '01', '01', 'mancagar'),
('3216224302080001', '3216220804070224', 'KIRANI SIFA DEWI', 'P ', 'Anak', 'BEKASI', '2008-02-03', 'Blm Kawin', 'Tamat SLTP', 'Pelajar', 'puhun', '01', '01', 'mancagar'),
('3275100210070005', '3174041805111048', 'RAMADHAN BAGAS ADITYA', 'LK', 'Anak', 'BEKASI', '2007-10-02', 'Blm Kawin', 'Tamat SLTP', 'Pelajar', 'puhun', '01', '01', 'mancagar'),
('3275106001130002', '3174041805111048', 'KHEYLA PUTRI AFIFAH', 'P', 'Anak', 'BEKASI', '2013-01-20', 'Blm Kawin', 'Blm Tamat SD', 'Pelajar', 'puhun', '01', '01', 'mancagar'),
('3301231707980003', '3208072507180006', 'YULI HARSONO', 'LK', 'Kpl. Keluarga', 'CILACAP', '1998-07-17', 'Kawin', 'Tamat SLTP', 'Buruh Harian Lepas', 'puhun', '01', '01', 'mancagar'),
('3310142002100002', '3208022306100003', 'RAKA AMBAR ISMOYO', 'LK', 'Anak', 'KLATEN', '2010-02-20', 'Blm Kawin', 'Tamat SD', 'Pelajar', 'puhun', '01', '01', 'mancagar'),
('3310144704800004', '3208022306100003', 'ERAWATI', 'P ', 'Istri', 'KUNINGAN', '1979-09-20', 'Kawin', 'Tamat SLTP', 'Mengrs Rmh Tangga', 'puhun', '01', '01', 'mancagar'),
('3310145504030004', '3208022306100003', 'KARISMA OKTAVIA', 'P ', 'Anak', 'KLATEN', '2003-04-15', 'Blm Kawin', 'Tamat SLTA', 'Belum Bekerja', 'puhun', '01', '01', 'mancagar'),
('3310146005040001', '3208022306100003', 'DIKA RAMADANI', 'P ', 'Anak', 'KLATEN', '2004-05-20', 'Blm Kawin', 'Tamat SLTA', 'Belum Bekerja', 'puhun', '01', '01', 'mancagar');

-- --------------------------------------------------------

--
-- Table structure for table `potensi_desa`
--

CREATE TABLE `potensi_desa` (
  `id` bigint UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `potensi_desa`
--

INSERT INTO `potensi_desa` (`id`, `judul`, `slug`, `content`, `gambar`) VALUES
(4, 'Potensi Desa  Mancagar', 'potensi-desa-mancagar', '<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Desa Mancagar dikenal sebagai salah satu pusat pertanian yang produktif di wilayah ini. Tanah yang subur dan iklim yang ideal memungkinkan berbagai jenis tanaman pangan dan hortikultura tumbuh dengan baik. Penduduk desa sebagian besar mengandalkan pertanian sebagai sumber mata pencaharian utama, dengan berbagai produk unggulan seperti padi, jagung, sayuran, dan buah-buahan.</p><p><img src=\"data:image/jpeg;base64,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\" data-filename=\"Screenshot 2024-09-13 162411.jpg\" style=\"width: 402px;\"><br></p><p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Salah satu keunggulan pertanian di Desa Mancagar adalah penggunaan teknik pertanian modern yang ramah lingkungan. Para petani di desa ini mengadopsi metode pertanian organik dan praktik keberlanjutan untuk meningkatkan hasil panen sekaligus menjaga keseimbangan ekosistem. Selain itu, desa ini juga memiliki program koperasi tani yang membantu petani dalam hal permodalan, pemasaran, dan pelatihan</p><table class=\"table table-bordered\"><tbody></tbody></table><p></p><table class=\"table table-bordered\" style=\"background-color: rgb(255, 255, 255); color: rgb(0, 0, 0); font-size: 1rem;\"><tbody><tr></tr></tbody></table>', 'gambar/nszLx5Ph8TPU5SBQ3n0TGY03sOmHiVMlAyEb7nhO.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
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
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('7zOLbXqoUf9SH92DnN27ViEl6BZeRqA2cur63N1y', 7, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36 Avast/131.0.0.0', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiVE50bU5HYmJXbjc5Y3pYemlVVWJObkt2RFZkblF1NW1CcUFwMkZISyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9zdXJhdCI7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjc7czo0OiJhdXRoIjthOjE6e3M6MjE6InBhc3N3b3JkX2NvbmZpcm1lZF9hdCI7aToxNzM2NzU2MTg2O319', 1736756186),
('9j2IAPE5GfqEYsNcSYLR1pp1tn2caiARxOxwfMfz', 9, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36 Avast/131.0.0.0', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoib3FXQjc2MlgwVzJ2SzBKQXRqMmlJeVNoTkFUWFI3T2FKaGprRWdLQSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9zdXJhdCI7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjk7czo0OiJhdXRoIjthOjE6e3M6MjE6InBhc3N3b3JkX2NvbmZpcm1lZF9hdCI7aToxNzM3MzM0ODUwO319', 1737334851),
('Aq9Z8uRDEKkZLJSrnXazK8GtTJ8EEA6Xn2ZzzoNF', 7, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36 Avast/131.0.0.0', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiQ0NmQjFzdnU0ZndzZFlWbkN4ZkxoRklpbmRzTWRrRnZjTXZUdTZ1WSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9zdXJhdCI7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjc7czo0OiJhdXRoIjthOjE6e3M6MjE6InBhc3N3b3JkX2NvbmZpcm1lZF9hdCI7aToxNzM2NzU2MjAxO319', 1736756202),
('ATeyDKeZlZpgffdn9nUJzWH3voIyrFzndC7Bv8VW', 9, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36 Avast/131.0.0.0', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoieVZBaGVYWTNyaFRqYnpFQkVDRUF6Um9qTkFOS2M0amw5UGk1U1l0WCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjk7czo0OiJhdXRoIjthOjE6e3M6MjE6InBhc3N3b3JkX2NvbmZpcm1lZF9hdCI7aToxNzM3MzM0ODcxO319', 1737334895),
('C18hE3vaD5rdtWPUi4Efh3QOSXcP3Fm4gmZ1rQZe', 7, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36 Avast/131.0.0.0', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoieTU4M044bUxMamhxZmpHalk2ZjY0cnI4MVZ6cnJDVWhHSVZsRjdyWSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9zdXJhdCI7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjc7czo0OiJhdXRoIjthOjE6e3M6MjE6InBhc3N3b3JkX2NvbmZpcm1lZF9hdCI7aToxNzM3MDg3Mzc0O319', 1737087381),
('CwxkzEWGOwHNAxKtSnIx9ynSJUW3XwjTPJKZbvAl', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36 Avast/131.0.0.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiYkpxa3BBQUxBYVExSGYzVWUwV2lrR09hRUEyaUI1NEE4alh5MG1QbiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9zdXJhdCI7fX0=', 1736756971),
('ghgXQmTCfOoHLIQV4FvGPhJ7KU9KTFwOpG0NMuuF', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36 Avast/131.0.0.0', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiYlRnM1VYYU16eDJpRTZvSExxTUxPdmJQdHpqY05JNk9xMmVnS3R0NCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9kYXNoYm9hcmQiO31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO3M6NDoiYXV0aCI7YToxOntzOjIxOiJwYXNzd29yZF9jb25maXJtZWRfYXQiO2k6MTczNjc1NDk2MDt9fQ==', 1736755922),
('IUN6muMcIyqo2ylApX3Kd9ubZ0jjvU1O0FONPXv6', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36 Avast/131.0.0.0', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiWXFsbmJpZk9Dc3F2dVFONFRsOTJzRVQzWFczVVAyRU51QjlXSEFPZiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzI6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC91c2VyL2luZGV4Ijt9czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTtzOjQ6ImF1dGgiO2E6MTp7czoyMToicGFzc3dvcmRfY29uZmlybWVkX2F0IjtpOjE3MzczMzQwODM7fX0=', 1737334825),
('jf4oFnO0SmvmPmnV34DxsRNXgcdHbLMcMjUqENH3', 7, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36 Avast/131.0.0.0', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoic0l0MTZsZm5BRWZxY1B3ZFhMUDRGSnhrV3Y4cm1JWXJldXlVMUp1aiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9zdXJhdCI7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjc7czo0OiJhdXRoIjthOjE6e3M6MjE6InBhc3N3b3JkX2NvbmZpcm1lZF9hdCI7aToxNzM3MDg3MzU3O319', 1737087357),
('JfOHsWjN8c5cE3blmDy60j6ebxUVJddU8YLsCfVL', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36 Avast/131.0.0.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiMERSZXZxaG9TdnM3UWg4WXgwOUd2RlFxbTNGNzBiMTk4N0I5bFFWbiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9zdXJhdCI7fX0=', 1736753585),
('jvVXQlLVVTOgi9saZxSNpCU8ilDVXuEQVeMWQKIN', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36 Avast/131.0.0.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiRWNzQzVQYlI4OWZiN2Z4dTRkWjh2c203ZlAwQWYyOVl1dUNRUmVCQSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9zdXJhdCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1737086011),
('Kys5xc8sxIdkjqzkNtlEbAcdTqlKIthjylpKn4zc', 7, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36 Avast/131.0.0.0', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiMDEwamJHU0VKWGtYTnJSZ3VzSm9jNnNQYmtZOFVZQzdOOGV2MHFhdSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9zdXJhdCI7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjc7czo0OiJhdXRoIjthOjE6e3M6MjE6InBhc3N3b3JkX2NvbmZpcm1lZF9hdCI7aToxNzM3MDg2NDk4O319', 1737086498),
('l9peGWEY0XtbNvC54a5ANNaI0Lw3ZW0LUqi7rIw6', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoidjhxcktTbW5JU2FvdkM3Qms4QWE2TFZsN2p0WkRlV0tqdTk2TWNxViI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzM6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9zdXJhdC9pbmRleCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7czo0OiJhdXRoIjthOjE6e3M6MjE6InBhc3N3b3JkX2NvbmZpcm1lZF9hdCI7aToxNzM2NzU4MzU3O319', 1736758376),
('Lb171g6GqYLKGZLUTsOra5uhM74Gr2YEPOF4Eghl', 7, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiV3hvUVBtNFVVN3l1eExKWU1CazZPNlpaUm5WWERteHB3Z2tHSlJrZCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9zdXJhdCI7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjc7czo0OiJhdXRoIjthOjE6e3M6MjE6InBhc3N3b3JkX2NvbmZpcm1lZF9hdCI7aToxNzM2NzU4NTA0O319', 1736758638),
('MdNZXXQCExrWpiiGuE2khika6KiY5PI38oYD9fFP', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36 Avast/131.0.0.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiWmx0bzJHT0ZoOW9mcnIxY2NNSkFZSklxa0dFS1pmMHdnbWZHRWd3YyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9zdXJhdCI7fX0=', 1737332277),
('OH8MtZCvfhHzD49IZ5sXMMWtwBpCtLhSOVMT0x2Q', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36 Avast/131.0.0.0', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiamhTNFVTUHgwU3dDeUJzUEJGRXNYSmtWVWpLTFREVkZzbHRSamFmeCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzM6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9zdXJhdC9pbmRleCI7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7czo0OiJhdXRoIjthOjE6e3M6MjE6InBhc3N3b3JkX2NvbmZpcm1lZF9hdCI7aToxNzM3MDg3MjI3O319', 1737087278),
('PaTKaYCWa75ChG1tL2ef97LFw5uOrrsfi82NRG0i', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36 Avast/131.0.0.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoibGdTd1ZTNW1JWFQwTXdFeXBQNTV4UUtoN2dZTEdnd1RNcHBad29vNCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9zdXJhdCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1736753568),
('QePnJb3d0hJs6vxk4RfxHzQEqPZinHiRAANLJE8r', 7, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36 Avast/131.0.0.0', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiM3JnZGlUSmMwbmVKSlJ4dU4yd1V1ZGtleXdRYzd1Y1pxNzRxQUZOaSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9zdXJhdCI7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjc7czo0OiJhdXRoIjthOjE6e3M6MjE6InBhc3N3b3JkX2NvbmZpcm1lZF9hdCI7aToxNzM3MDg2NzY5O319', 1737086770),
('ruKeOUYz6uxbH0RCqEraimtSB3lhFXqWYi5R5j9R', 7, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36 Avast/131.0.0.0', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoia3RXRGg5MDVKTHcwUHdoWWRTZkxZRFpHRGVITDVEb3BCZVNlUGFOdiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9zdXJhdCI7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjc7czo0OiJhdXRoIjthOjE6e3M6MjE6InBhc3N3b3JkX2NvbmZpcm1lZF9hdCI7aToxNzM3MDg2NzUwO319', 1737086751),
('SnApnjjjqaUU5uDSEs1dGVV3Lv91LDbTr1VVEdHG', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36 Avast/131.0.0.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiRndxNnBIVjJSRG02c2JzckJ0b2VLbEhFRm9zVEUzWVU5UEZxZTA1MCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9sb2dpbiI7fX0=', 1736758053),
('ssC0Xs3utoeVLYZL2ko6G8iNk3qteiq0ePRdcJ8V', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36 Avast/131.0.0.0', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoib0pYVXpoU05WTEZMV2V5MG1HSUtQQmRhRTQzaDVCQ25LSUVQM1V2aSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NTI6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9zdXJhdF9rZXRlcmFuZ2FuZG9taXNpbGkvaW5kZXgiO31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO3M6NDoiYXV0aCI7YToxOntzOjIxOiJwYXNzd29yZF9jb25maXJtZWRfYXQiO2k6MTczNzA4NjE2ODt9fQ==', 1737086221),
('Sw0R8WUQqIhqQRXh2ig5ySpxCYdnob2A10YX7ujK', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiRU5DMXQxMUg5MmFUNDFXUVR5ZndsY01SQUtiVzNlVG5LZk5adFZSSCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9sb2dpbiI7fX0=', 1736758640),
('Tn9zIpltl2BwdsCC4loOLuVBHwhVwCg3MkeoHW8o', 7, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36 Avast/131.0.0.0', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiaU51MENQMFFZWnhBdG5ZRDMzbkd0SUFoUE1XanhQTlNKMzViOURmTSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9zdXJhdCI7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjc7czo0OiJhdXRoIjthOjE6e3M6MjE6InBhc3N3b3JkX2NvbmZpcm1lZF9hdCI7aToxNzM3MDg2ODQwO319', 1737086840),
('uIhGAfEc3cmJNftfW1bGQi5BIf4at4JKoni0DhQi', 7, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36 Avast/131.0.0.0', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiSWRZUTFlM3FsTGFJSEdGNXE0b2FXZEZ6V1JiMkhHbUxzSW1xTFB1bSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9zdXJhdCI7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjc7czo0OiJhdXRoIjthOjE6e3M6MjE6InBhc3N3b3JkX2NvbmZpcm1lZF9hdCI7aToxNzM2NzUzNjIwO319', 1736753621),
('UMogV4MhTziNQgmQbsYPlmF8PopYCPqCeQFD6xVP', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36 Avast/131.0.0.0', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoidkRLNnlSc0tGNUJFcjVBUllvcFNBVHBSSmIwaFpMcW5obFZDemI3RiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzY6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9wZW5kdWR1ay9pbmRleCI7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7czo0OiJhdXRoIjthOjE6e3M6MjE6InBhc3N3b3JkX2NvbmZpcm1lZF9hdCI7aToxNzM2NzUzNjg4O319', 1736753973),
('VAyTAww1l0E5Sznil8nzLKN7BTyX5lDE5ScYqY99', 7, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36 Avast/131.0.0.0', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiSzlCaEZtOVBoWVU4UmtVUnZwWklNYUJ3Z2RSWkd0Z2lNTnc1MFIydyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9zdXJhdCI7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjc7czo0OiJhdXRoIjthOjE6e3M6MjE6InBhc3N3b3JkX2NvbmZpcm1lZF9hdCI7aToxNzM3MDg2OTMxO319', 1737086931),
('W1q0yF2tzyCHvN5geW9c95gRqyr9B66OrMYEZklC', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiVXdjUzVKVnp4S3F3eWJKZlkxemc4UmFtOGVtbkQxd2tVdURoVldKeiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9zdXJhdCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1736757956),
('WpOs4GVtFUWilrvEP8cOkQ2VUrJznGIDyEwReppo', 7, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36 Avast/131.0.0.0', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiTExWdmxSQzlob0FtUWNQcktaTktJcFVTWGNDcWZYN2FHaUlMWERjaSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9zdXJhdCI7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjc7czo0OiJhdXRoIjthOjE6e3M6MjE6InBhc3N3b3JkX2NvbmZpcm1lZF9hdCI7aToxNzM3MDg2ODU5O319', 1737086859),
('xA7GiqJ9NvVpS3oTQEwnGOvXHsJsVfGNPIlcULO0', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36 Avast/131.0.0.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiaFVWRWNROW9YZ2I5dFZEUjl4OFJLWU5nMTdEY0pDREtKdnVzRWt0dyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9sb2dpbiI7fX0=', 1737089031);

-- --------------------------------------------------------

--
-- Table structure for table `surat`
--

CREATE TABLE `surat` (
  `id` bigint UNSIGNED NOT NULL,
  `nik` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_surat` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_kk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat_lahir` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `status_penduduk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pekerjaan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dusun` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rt` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rw` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_kades` bigint UNSIGNED NOT NULL,
  `nama_ttd` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ttd` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pilihsurat` enum('Surat Keterangan Tidak Mampu','Surat Keterangan Usaha','Surat Keterangan Domisili') COLLATE utf8mb4_unicode_ci NOT NULL,
  `permohonan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('Approve','Cancel') COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_read` tinyint(1) NOT NULL DEFAULT '0',
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `surat`
--

INSERT INTO `surat` (`id`, `nik`, `no_surat`, `no_kk`, `nama`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `status_penduduk`, `pekerjaan`, `dusun`, `rt`, `rw`, `id_kades`, `nama_ttd`, `ttd`, `pilihsurat`, `permohonan`, `no_hp`, `status`, `is_read`, `user_id`, `created_at`, `updated_at`) VALUES
(1, '3171034501951002', '1', '3208301004200003', 'YATI OKTAPIANI', 'P', 'KUNINGAN', '1995-01-05', 'Kawin', 'Mengrs Rmh Tangga', 'puhun', '01', '01', 1, 'ZAENAL SUPENA', 'gambar/SPBLNlWq06aR898Lrp5lpguIZq35kQZ7wFJY8zpN.png', 'Surat Keterangan Tidak Mampu', 'untuk perkuliahan', '0898878787', 'Approve', 1, 1, '2024-11-01 21:46:31', '2024-11-01 21:51:58'),
(2, '3171034501951002', '1', '3208301004200003', 'YATI OKTAPIANI', 'P', 'KUNINGAN', '1995-01-05', 'Kawin', 'Mengrs Rmh Tangga', 'puhun', '01', '01', 1, 'ZAENAL SUPENA', 'gambar/zt2EmOG1gBIyrVXNxBXV38YFaoQFWEBH5luyJZxo.png', 'Surat Keterangan Tidak Mampu', 'untuk perkuliahan', '0897766776676', 'Approve', 1, 1, '2024-11-11 16:39:43', '2024-11-11 16:41:56'),
(3, '3171034501951002', '3', '3208301004200003', 'YATI OKTAPIANI', 'P', 'KUNINGAN', '1995-01-05', 'Kawin', 'Mengrs Rmh Tangga', 'puhun', '01', '01', 1, 'ZAENAL SUPENA', 'gambar/zt2EmOG1gBIyrVXNxBXV38YFaoQFWEBH5luyJZxo.png', 'Surat Keterangan Tidak Mampu', 'untuk perkuliahan', '08998767675665657', 'Approve', 1, 1, '2024-12-05 07:54:23', '2024-12-05 07:55:22'),
(4, '3171034501951002', '1', '3208301004200003', 'YATI OKTAPIANI', 'P', 'KUNINGAN', '1995-01-05', 'Kawin', 'Mengrs Rmh Tangga', 'puhun', '01', '01', 1, 'ZAENAL SUPENA', 'gambar/zt2EmOG1gBIyrVXNxBXV38YFaoQFWEBH5luyJZxo.png', 'Surat Keterangan Tidak Mampu', 'untuk perkuliahan', '0897766776676', 'Approve', 1, 1, '2024-12-23 00:16:24', '2025-01-07 19:01:14'),
(5, '3171034501951002', '1', '3208301004200003', 'YATI OKTAPIANI', 'P', 'KUNINGAN', '1995-01-05', 'Kawin', 'Mengrs Rmh Tangga', 'puhun', '01', '01', 1, 'ZAENAL SUPENA', 'gambar/zt2EmOG1gBIyrVXNxBXV38YFaoQFWEBH5luyJZxo.png', 'Surat Keterangan Tidak Mampu', 'bgg', '0898878787', 'Approve', 1, 1, '2025-01-07 19:00:36', '2025-01-07 19:01:03'),
(6, '3171045703710003', '2', '3171041201094773', 'ENOK KURNIA MULIAWATI', 'P', 'JAKARTA', '1971-03-17', 'Kawin', 'Mengrs Rmh Tangga', 'puhun', '01', '01', 1, 'ZAENAL SUPENA', 'gambar/zt2EmOG1gBIyrVXNxBXV38YFaoQFWEBH5luyJZxo.png', 'Surat Keterangan Tidak Mampu', 'untuk perkuliahan', '0897766776676', 'Approve', 1, 1, '2025-01-07 20:56:03', '2025-01-07 20:56:32'),
(7, '3171034501951002', '3', '3208301004200003', 'YATI OKTAPIANI', 'P', 'KUNINGAN', '1995-01-05', 'Kawin', 'Mengrs Rmh Tangga', 'puhun', '01', '01', 1, 'ZAENAL SUPENA', 'gambar/zt2EmOG1gBIyrVXNxBXV38YFaoQFWEBH5luyJZxo.png', 'Surat Keterangan Tidak Mampu', 'untuk perkuliahan', '0898878787', 'Approve', 1, 1, '2025-01-10 04:10:52', '2025-01-19 17:58:23'),
(8, '3171034501951002', '2', '3208301004200003', 'YATI OKTAPIANI', 'P', 'KUNINGAN', '1995-01-05', 'Kawin', 'Mengrs Rmh Tangga', 'puhun', '01', '01', 1, 'ZAENAL SUPENA', 'gambar/zt2EmOG1gBIyrVXNxBXV38YFaoQFWEBH5luyJZxo.png', 'Surat Keterangan Tidak Mampu', 'untuk perkuliahan', '0898878787', 'Approve', 1, 7, '2025-01-10 05:30:08', '2025-01-10 06:06:49');

-- --------------------------------------------------------

--
-- Table structure for table `surat_domisili`
--

CREATE TABLE `surat_domisili` (
  `id` bigint UNSIGNED NOT NULL,
  `nik` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_surat` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_kk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat_lahir` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `status_penduduk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pekerjaan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dusun` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rt` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rw` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_kades` bigint UNSIGNED NOT NULL,
  `nama_ttd` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ttd` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pilihsurat` enum('Surat Keterangan Tidak Mampu','Surat Keterangan Usaha','Surat Keterangan Domisili') COLLATE utf8mb4_unicode_ci NOT NULL,
  `permohonan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('Approve','Cancel') COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_read` tinyint(1) NOT NULL DEFAULT '0',
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `surat_domisili`
--

INSERT INTO `surat_domisili` (`id`, `nik`, `no_surat`, `no_kk`, `nama`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `status_penduduk`, `pekerjaan`, `dusun`, `rt`, `rw`, `id_kades`, `nama_ttd`, `ttd`, `pilihsurat`, `permohonan`, `no_hp`, `status`, `is_read`, `user_id`, `created_at`, `updated_at`) VALUES
(1, '3171034501951002', '1', '3208301004200003', 'YATI OKTAPIANI', 'P', 'KUNINGAN', '1995-01-05', 'Kawin', 'Mengrs Rmh Tangga', 'puhun', '01', '01', 1, 'ZAENAL SUPENA', 'gambar/SPBLNlWq06aR898Lrp5lpguIZq35kQZ7wFJY8zpN.png', 'Surat Keterangan Domisili', 'untuk perkuliahan', '0898878787', 'Approve', 0, 1, '2024-11-01 07:29:14', '2024-11-01 07:30:04'),
(4, '3171034501951002', '2', '3208301004200003', 'YATI OKTAPIANI', 'P', 'KUNINGAN', '1995-01-05', 'Kawin', 'Mengrs Rmh Tangga', 'puhun', '01', '01', 1, 'ZAENAL SUPENA', 'gambar/1CkObFvW0rkTFAP48zteB6qm6jDjAMbfaYZm0NCY.png', 'Surat Keterangan Domisili', 'untuk perkuliahan', '0898878787', 'Approve', 1, 1, '2024-11-07 22:53:31', '2024-11-07 22:53:56'),
(5, '3171034501951002', '1', '3208301004200003', 'YATI OKTAPIANI', 'P', 'KUNINGAN', '1995-01-05', 'Kawin', 'Mengrs Rmh Tangga', 'puhun', '01', '01', 1, 'ZAENAL SUPENA', 'gambar/1CkObFvW0rkTFAP48zteB6qm6jDjAMbfaYZm0NCY.png', 'Surat Keterangan Domisili', 'untuk perkuliahan', '0898878787', 'Approve', 1, 1, '2024-11-08 00:59:48', '2025-01-07 19:01:55'),
(6, '3171034501951002', '3', '3208301004200003', 'YATI OKTAPIANI', 'P', 'KUNINGAN', '1995-01-05', 'Kawin', 'Mengrs Rmh Tangga', 'puhun', '01', '01', 1, 'ZAENAL SUPENA', 'gambar/pZCGvmcQ07NGqjvu50MLHbU9xu4xv7BIHLMOaexI.png', 'Surat Keterangan Domisili', 'untuk perkuliahan', '0898878787', 'Approve', 1, 1, '2024-11-11 01:50:05', '2024-11-11 01:50:23'),
(7, '3171034501951002', '4', '3208301004200003', 'YATI OKTAPIANI', 'P', 'KUNINGAN', '1995-01-05', 'Kawin', 'Mengrs Rmh Tangga', 'puhun', '01', '01', 1, 'ZAENAL SUPENA', 'gambar/zt2EmOG1gBIyrVXNxBXV38YFaoQFWEBH5luyJZxo.png', 'Surat Keterangan Domisili', 'untuk perkuliahan', '0898878787', 'Approve', 1, 1, '2024-11-11 02:06:52', '2024-11-11 02:07:05'),
(8, '3171034501951002', '5', '3208301004200003', 'YATI OKTAPIANI', 'P', 'KUNINGAN', '1995-01-05', 'Kawin', 'Mengrs Rmh Tangga', 'puhun', '01', '01', 1, 'ZAENAL SUPENA', 'gambar/zt2EmOG1gBIyrVXNxBXV38YFaoQFWEBH5luyJZxo.png', 'Surat Keterangan Domisili', 'untuk perkuliahan', '0898878787', 'Approve', 1, 1, '2024-11-11 16:39:01', '2024-11-11 16:48:38'),
(9, '3171034501951002', '6', '3208301004200003', 'YATI OKTAPIANI', 'P', 'KUNINGAN', '1995-01-05', 'Kawin', 'Mengrs Rmh Tangga', 'puhun', '01', '01', 1, 'ZAENAL SUPENA', 'gambar/zt2EmOG1gBIyrVXNxBXV38YFaoQFWEBH5luyJZxo.png', 'Surat Keterangan Domisili', 'untuk perkuliahan', '0896345465656', 'Approve', 1, 1, '2024-11-13 22:17:47', '2024-11-13 22:19:26'),
(10, '3174041404800015', '1', '3174041805111048', 'MUHAMAD MARLILI', 'LK', 'KUNINGAN', '1980-04-14', 'Kawin', 'Wiraswasta', 'puhun', '01', '01', 1, 'ZAENAL SUPENA', 'gambar/zt2EmOG1gBIyrVXNxBXV38YFaoQFWEBH5luyJZxo.png', 'Surat Keterangan Domisili', 'untuk perkuliahan', '0897766776676', 'Approve', 1, 1, '2025-01-07 19:08:08', '2025-01-07 19:08:54'),
(11, '3171034501951002', '2', '3208301004200003', 'YATI OKTAPIANI', 'P', 'KUNINGAN', '1995-01-05', 'Kawin', 'Mengrs Rmh Tangga', 'puhun', '01', '01', 1, 'ZAENAL SUPENA', 'gambar/zt2EmOG1gBIyrVXNxBXV38YFaoQFWEBH5luyJZxo.png', 'Surat Keterangan Domisili', 'untuk perkuliahan', '0897766776676', 'Approve', 1, 7, '2025-01-10 06:25:29', '2025-01-19 17:58:03');

-- --------------------------------------------------------

--
-- Table structure for table `surat__keteranganusaha`
--

CREATE TABLE `surat__keteranganusaha` (
  `id` bigint UNSIGNED NOT NULL,
  `nik` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_surat` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_kk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat_lahir` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `status_penduduk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pekerjaan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dusun` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rt` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rw` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_kades` bigint UNSIGNED NOT NULL,
  `nama_ttd` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ttd` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bidang_usaha` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pilihsurat` enum('Surat Keterangan Tidak Mampu','Surat Keterangan Usaha','Surat Keterangan Domisili') COLLATE utf8mb4_unicode_ci NOT NULL,
  `permohonan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('Approve','Cancel') COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_read` tinyint(1) NOT NULL DEFAULT '0',
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `surat__keteranganusaha`
--

INSERT INTO `surat__keteranganusaha` (`id`, `nik`, `no_surat`, `no_kk`, `nama`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `status_penduduk`, `pekerjaan`, `dusun`, `rt`, `rw`, `id_kades`, `nama_ttd`, `ttd`, `bidang_usaha`, `pilihsurat`, `permohonan`, `no_hp`, `status`, `is_read`, `user_id`, `created_at`, `updated_at`) VALUES
(1, '3171034501951002', '1', '3208301004200003', 'YATI OKTAPIANI', 'P', 'KUNINGAN', '1995-01-05', 'Kawin', 'Mengrs Rmh Tangga', 'puhun', '01', '01', 1, 'ZAENAL SUPENA', 'gambar/zt2EmOG1gBIyrVXNxBXV38YFaoQFWEBH5luyJZxo.png', '0', 'Surat Keterangan Usaha', 'untuk perkuliahan', '0898878787', 'Approve', 1, 1, '2024-11-13 06:07:54', '2024-11-13 06:15:18'),
(2, '3171034501951002', '2', '3208301004200003', 'YATI OKTAPIANI', 'P', 'KUNINGAN', '1995-01-05', 'Kawin', 'Mengrs Rmh Tangga', 'puhun', '01', '01', 1, 'ZAENAL SUPENA', 'gambar/zt2EmOG1gBIyrVXNxBXV38YFaoQFWEBH5luyJZxo.png', 'Pertanian (petani sayur-sayuran)', 'Surat Keterangan Usaha', 'untuk perkuliahan', '0898878787', 'Approve', 1, 1, '2024-11-13 10:43:45', '2024-11-13 10:46:53'),
(3, '3171042211700005', '1', '3171041201094773', 'AHMAD SUBANDI', 'LK', 'KUNINGAN', '1970-11-22', 'Kawin', 'Buruh Harian Lepas', 'puhun', '01', '01', 1, 'ZAENAL SUPENA', 'gambar/zt2EmOG1gBIyrVXNxBXV38YFaoQFWEBH5luyJZxo.png', 'Pertanian (petani sayur-sayuran)', 'Surat Keterangan Usaha', 'untuk usaha', '0897766776676', 'Approve', 1, 1, '2025-01-07 19:06:34', '2025-01-07 19:08:31'),
(4, '3171034501951002', '2', '3208301004200003', 'YATI OKTAPIANI', 'P', 'KUNINGAN', '1995-01-05', 'Kawin', 'Mengrs Rmh Tangga', 'puhun', '01', '01', 1, 'ZAENAL SUPENA', 'gambar/zt2EmOG1gBIyrVXNxBXV38YFaoQFWEBH5luyJZxo.png', 'pertanian', 'Surat Keterangan Usaha', 'untuk perkuliahan', '0898878787', 'Approve', 1, 7, '2025-01-10 06:14:04', '2025-01-10 06:17:34');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` enum('admin','karangtaruna','user') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `birthdate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `level`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `birthdate`) VALUES
(1, 'admin', 'agung@gmail.com', 'admin', NULL, '$2y$12$r9tWBCGk9SbdTn5MXdJj5eRynIXXLefkleGH7na762S6UlqYk2osW', 'pG8BzomigQor29NNxtNbvygIKjd5gKabhrRUpBhjQkTKji97WahAES5GOrGi', '2024-05-14 02:04:46', '2024-05-14 02:04:46', NULL),
(2, 'rizko', 'rizko123@gmail.com', 'karangtaruna', NULL, '$2y$12$NU.LoB4UbP9o1gWxugJSl.Xbt5IA3xokopr/mh6nNZrWfCQ9vS8k6', 'q1ZOBMw254Qa4TMQzlt1N2HpyI6CHXbzPaMDse1CA5ZoLcIEw6oQBQD42iap', '2024-05-25 04:26:29', '2024-05-25 04:26:29', NULL),
(3, 'admin', 'admin@gmail.com', 'admin', NULL, 'admin123', NULL, NULL, NULL, NULL),
(4, 'Admin Sidesa', 'agungrizki640@gmail.com', 'admin', NULL, '$2y$12$WrvmeP7zxwncTlAwwTk3T.O7OFuz8/1F1TyG0d4bElgTjOEs9Gssy', 'HQfiKrdO4mSS4IZVZ6KOCUKd9tiWTfufLJuKq0lwF7bRyrtrasEfv48jaXyL', '2024-06-30 09:19:27', '2024-06-30 09:19:27', NULL),
(5, 'rizki', 'rizki123@gmail.com', 'user', NULL, '$2y$12$pXvbxbGed79ltDGzgS4tKeQdwORXrrKDqt2TClZOj7Urq5JKr1OJy', NULL, '2025-01-08 05:55:22', '2025-01-08 05:55:22', NULL),
(6, 'riza', 'riza@gmail.com', 'user', NULL, '$2y$12$MVryvpSb/1/g2uRojjsw0e.TOGOtuVlGhBSjTiyRwnd2cJXlFyvAa', NULL, '2025-01-09 01:06:34', '2025-01-09 01:06:34', NULL),
(7, 'rizal', 'rizal@gmail.com', 'user', NULL, '$2y$12$lpNc0oErW6H1H2vTHy8Ice4ZAepAjERJMo08NxF0rURyPF46vsD06', NULL, '2025-01-09 05:43:34', '2025-01-09 05:43:34', NULL),
(8, 'Agung Rizki Nugraha', 'Agung Rizki Nugraha@gmail.com', 'user', NULL, '$2y$12$NRLKtM2g9e9CZSf7gHigaOPKQgyGStFVzNkw1viNH83mIAvivNhRK', NULL, '2025-01-13 00:37:24', '2025-01-13 00:37:24', NULL),
(9, 'iwan muhamad ridwan', 'iwanmuhamadridwan@gmail.com', 'user', NULL, '$2y$12$bV65tvvemWhJQfsg3yYM1.RbDzmzRSfstrmGdWTOeznLtN4y6VDj.', NULL, '2025-01-19 18:00:17', '2025-01-19 18:00:17', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `userss`
--

CREATE TABLE `userss` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users_surat`
--

CREATE TABLE `users_surat` (
  `id` bigint UNSIGNED NOT NULL,
  `nik` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agenda`
--
ALTER TABLE `agenda`
  ADD PRIMARY KEY (`id`),
  ADD KEY `agenda_user_id_foreign` (`user_id`);

--
-- Indexes for table `agenda_karangtaruna`
--
ALTER TABLE `agenda_karangtaruna`
  ADD PRIMARY KEY (`id`),
  ADD KEY `agenda_karangtaruna_user_id_foreign` (`user_id`);

--
-- Indexes for table `aparatur_desas`
--
ALTER TABLE `aparatur_desas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `berita_slug_unique` (`slug`),
  ADD KEY `berita_user_id_foreign` (`user_id`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `email_notifications`
--
ALTER TABLE `email_notifications`
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
  ADD PRIMARY KEY (`id_galery`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kepala_desa`
--
ALTER TABLE `kepala_desa`
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
-- Indexes for table `penduduk`
--
ALTER TABLE `penduduk`
  ADD PRIMARY KEY (`nik`);

--
-- Indexes for table `potensi_desa`
--
ALTER TABLE `potensi_desa`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `potensi_desa_slug_unique` (`slug`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `surat`
--
ALTER TABLE `surat`
  ADD PRIMARY KEY (`id`),
  ADD KEY `surat_user_id_foreign` (`user_id`),
  ADD KEY `surat_nik_foreign` (`nik`),
  ADD KEY `surat_id_kades_foreign` (`id_kades`);

--
-- Indexes for table `surat_domisili`
--
ALTER TABLE `surat_domisili`
  ADD PRIMARY KEY (`id`),
  ADD KEY `surat_domisili_user_id_foreign` (`user_id`),
  ADD KEY `surat_domisili_nik_foreign` (`nik`),
  ADD KEY `surat_domisili_id_kades_foreign` (`id_kades`);

--
-- Indexes for table `surat__keteranganusaha`
--
ALTER TABLE `surat__keteranganusaha`
  ADD PRIMARY KEY (`id`),
  ADD KEY `surat__keteranganusaha_user_id_foreign` (`user_id`),
  ADD KEY `surat__keteranganusaha_nik_foreign` (`nik`),
  ADD KEY `surat__keteranganusaha_id_kades_foreign` (`id_kades`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `userss`
--
ALTER TABLE `userss`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `userss_email_unique` (`email`);

--
-- Indexes for table `users_surat`
--
ALTER TABLE `users_surat`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_surat_nik_unique` (`nik`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agenda`
--
ALTER TABLE `agenda`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `agenda_karangtaruna`
--
ALTER TABLE `agenda_karangtaruna`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `aparatur_desas`
--
ALTER TABLE `aparatur_desas`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `email_notifications`
--
ALTER TABLE `email_notifications`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `galery`
--
ALTER TABLE `galery`
  MODIFY `id_galery` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kepala_desa`
--
ALTER TABLE `kepala_desa`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `potensi_desa`
--
ALTER TABLE `potensi_desa`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `surat`
--
ALTER TABLE `surat`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `surat_domisili`
--
ALTER TABLE `surat_domisili`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `surat__keteranganusaha`
--
ALTER TABLE `surat__keteranganusaha`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `userss`
--
ALTER TABLE `userss`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users_surat`
--
ALTER TABLE `users_surat`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `agenda`
--
ALTER TABLE `agenda`
  ADD CONSTRAINT `agenda_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `agenda_karangtaruna`
--
ALTER TABLE `agenda_karangtaruna`
  ADD CONSTRAINT `agenda_karangtaruna_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `berita`
--
ALTER TABLE `berita`
  ADD CONSTRAINT `berita_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `surat`
--
ALTER TABLE `surat`
  ADD CONSTRAINT `surat_id_kades_foreign` FOREIGN KEY (`id_kades`) REFERENCES `kepala_desa` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `surat_nik_foreign` FOREIGN KEY (`nik`) REFERENCES `penduduk` (`nik`) ON DELETE CASCADE,
  ADD CONSTRAINT `surat_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `surat_domisili`
--
ALTER TABLE `surat_domisili`
  ADD CONSTRAINT `surat_domisili_id_kades_foreign` FOREIGN KEY (`id_kades`) REFERENCES `kepala_desa` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `surat_domisili_nik_foreign` FOREIGN KEY (`nik`) REFERENCES `penduduk` (`nik`) ON DELETE CASCADE,
  ADD CONSTRAINT `surat_domisili_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `surat__keteranganusaha`
--
ALTER TABLE `surat__keteranganusaha`
  ADD CONSTRAINT `surat__keteranganusaha_id_kades_foreign` FOREIGN KEY (`id_kades`) REFERENCES `kepala_desa` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `surat__keteranganusaha_nik_foreign` FOREIGN KEY (`nik`) REFERENCES `penduduk` (`nik`) ON DELETE CASCADE,
  ADD CONSTRAINT `surat__keteranganusaha_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `users_surat`
--
ALTER TABLE `users_surat`
  ADD CONSTRAINT `users_surat_nik_foreign` FOREIGN KEY (`nik`) REFERENCES `penduduk` (`nik`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
