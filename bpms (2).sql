-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2025 at 06:56 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bpms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_logs`
--

CREATE TABLE `admin_logs` (
  `id` int(11) NOT NULL,
  `logs` varchar(255) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_logs`
--

INSERT INTO `admin_logs` (`id`, `logs`, `date_created`) VALUES
(0, 'Admin logged in: admin', '2024-11-15 10:18:28'),
(0, 'Admin logged in: admin', '2024-11-15 15:26:02'),
(0, 'Admin logged in: admin', '2024-11-15 15:28:54'),
(0, 'Admin logged in: admin', '2024-11-15 15:34:26'),
(0, 'Admin logged in: admin', '2024-11-15 15:57:06'),
(0, 'Admin logged in: admin', '2024-11-15 15:59:02'),
(0, 'Admin edited blotter ID: 28, Complainant: Test3, Respondent: h', '2024-11-15 16:01:16'),
(0, 'Admin logged in: admin', '2024-11-15 16:37:51'),
(0, 'Admin logged in: admin', '2024-11-15 17:08:31'),
(0, 'Admin logged in: admin', '2024-11-15 18:14:09'),
(0, 'Admin logged in: admin', '2024-11-16 18:07:04'),
(0, 'Admin edited blotter ID: 29, Complainant: test, Respondent: h', '2024-11-16 18:43:37'),
(0, 'Admin edited blotter ID: 32, Complainant: asdasd, Respondent: asdeasd', '2024-11-16 19:11:23'),
(0, 'Admin edited blotter ID: 32, Complainant: asdasd, Respondent: asdeasd', '2024-11-16 23:42:10'),
(0, 'Admin edited blotter ID: 32, Complainant: asdasd, Respondent: asdeasd', '2024-11-16 23:42:11'),
(0, 'Admin edited blotter ID: 32, Complainant: asdasd, Respondent: asdeasd', '2024-11-16 23:42:12'),
(0, 'Admin edited blotter ID: 32, Complainant: asdasd, Respondent: asdeasd', '2024-11-16 23:42:12'),
(0, 'Admin edited blotter ID: 32, Complainant: asdasd, Respondent: asdeasd', '2024-11-16 23:42:12'),
(0, 'Admin edited blotter ID: 32, Complainant: asdasd, Respondent: asdeasd', '2024-11-16 23:42:13'),
(0, 'Admin edited blotter ID: 32, Complainant: asdasd, Respondent: asdeasd', '2024-11-16 23:42:14'),
(0, 'Admin edited blotter ID: 32, Complainant: asdasd, Respondent: asdeasd', '2024-11-16 23:42:14'),
(0, 'Admin edited blotter ID: 29, Complainant: test, Respondent: h', '2024-11-16 23:42:36'),
(0, 'Admin edited blotter ID: 28, Complainant: Test3, Respondent: h', '2024-11-16 23:46:32'),
(0, 'Admin deleted Blotter entry with ID: 30', '2024-11-16 23:50:53'),
(0, 'Admin deleted Blotter entry with ID: 31', '2024-11-16 23:50:56'),
(0, 'Admin logged in: admin', '2024-11-17 00:01:34'),
(0, 'Admin logged in: admin', '2024-11-17 00:03:37'),
(0, 'Admin logged in: admin', '2024-11-17 00:09:56'),
(0, 'Admin logged in: admin', '2024-11-17 00:17:32'),
(0, 'Admin logged in: admin', '2024-11-17 00:34:39'),
(0, 'Admin edited blotter ID: 35, Complainant: 111, Respondent: 111', '2024-11-17 00:51:35'),
(0, 'Admin edited blotter ID: 35, Complainant: 111, Respondent: 111', '2024-11-17 00:51:42'),
(0, 'Admin edited blotter ID: 35, Complainant: 111, Respondent: 111', '2024-11-17 01:07:56'),
(0, 'Admin edited blotter ID: 34, Complainant: adasdzxzc, Respondent: zxcasdasd', '2024-11-17 01:08:05'),
(0, 'Admin edited blotter ID: 33, Complainant: asdasd, Respondent: asdasd', '2024-11-17 01:08:17'),
(0, 'Admin logged in: admin', '2024-11-17 08:47:16'),
(0, 'Admin logged in: admin', '2024-11-17 09:10:49'),
(0, 'Admin logged in: admin', '2024-11-17 09:12:50'),
(0, 'Admin logged in: admin', '2024-11-17 09:43:19'),
(0, 'Admin logged in: admin', '2024-11-17 10:06:13'),
(0, 'Admin logged in: admin', '2024-11-17 10:13:15'),
(0, 'Admin logged in: admin', '2024-11-17 10:13:32'),
(0, 'Admin logged in: admin', '2024-11-17 10:24:09'),
(0, 'Admin logged in: admin', '2024-11-17 10:31:22'),
(0, 'Admin logged in: admin', '2024-11-17 10:35:10'),
(0, 'Admin logged in: admin', '2024-11-17 10:36:46'),
(0, 'Admin logged in: admin', '2024-11-17 11:45:35'),
(0, 'Admin logged in: admin', '2024-11-17 12:00:04'),
(0, 'Admin logged in: admin', '2024-11-17 12:03:50'),
(0, 'Admin edited blotter ID: 35, Complainant: 111, Respondent: 111', '2024-11-17 12:13:07'),
(0, 'Admin logged in: admin', '2024-11-17 12:24:48'),
(0, 'Admin logged in: admin', '2024-11-17 13:16:33'),
(0, 'Admin logged in: admin', '2024-11-17 13:28:22'),
(0, 'Admin logged in: admin', '2024-11-17 13:42:46'),
(0, 'Admin logged in: admin', '2024-11-17 18:48:14'),
(0, 'Admin logged in: admin', '2024-11-17 18:51:13'),
(0, 'Admin logged in: admin', '2024-11-17 18:52:15'),
(0, 'Admin logged in: admin', '2024-11-17 20:09:48'),
(0, 'Admin logged in: admin', '2024-11-17 23:19:29'),
(0, 'Admin logged in: admin', '2024-11-17 23:57:19'),
(0, 'Admin edited blotter ID: 35, Complainant: 111, Respondent: 111', '2024-11-18 01:36:38'),
(0, 'Admin edited blotter ID: 34, Complainant: adasdzxzc, Respondent: zxcasdasd', '2024-11-18 01:36:45'),
(0, 'Admin logged in: admin', '2024-12-11 15:24:55'),
(0, 'admin logged in as Administrator', '2024-12-17 04:48:57'),
(0, 'admin logged in as Administrator', '2024-12-17 04:54:26'),
(0, 'admin logged in as Administrator', '2024-12-17 05:26:26'),
(0, 'admin logged in as Administrator', '2024-12-17 05:26:59'),
(0, 'admin logged in as Administrator', '2024-12-17 05:48:12'),
(0, 'admin logged in as Administrator', '2024-12-17 05:50:02'),
(0, 'admin logged in as Administrator', '2024-12-17 05:54:23'),
(0, 'admin logged in as Administrator', '2024-12-17 05:58:42'),
(0, 'admin logged in as Administrator', '2024-12-17 10:00:05'),
(0, 'admin logged in as Administrator', '2024-12-17 11:46:18'),
(0, 'admin logged in as Administrator', '2024-12-18 10:35:58'),
(0, 'admin logged in as Administrator', '2024-12-24 06:06:59'),
(0, 'admin logged in as Administrator', '2024-12-28 06:28:13'),
(0, 'admin logged in as Administrator', '2024-12-28 09:22:40'),
(0, 'admin logged in as Administrator', '2024-12-28 09:24:04'),
(0, 'admin logged in as Administrator', '2024-12-30 15:57:17'),
(0, 'admin logged in as Administrator', '2025-01-03 02:43:47'),
(0, 'admin logged in as Administrator', '2025-01-04 09:53:55'),
(0, 'admin logged in as Administrator', '2025-01-04 09:55:04'),
(0, 'admin logged in as Administrator', '2025-01-04 11:45:59'),
(0, 'admin logged in as Administrator', '2025-01-04 11:54:17'),
(0, 'admin logged in as Administrator', '2025-01-05 11:28:21'),
(0, 'admin logged in as Administrator', '2025-01-05 11:58:30'),
(0, 'admin logged in as Administrator', '2025-01-05 13:22:12'),
(0, 'admin logged in as Administrator', '2025-01-05 13:33:57'),
(0, 'admin logged in as Administrator', '2025-01-05 13:37:39'),
(0, 'admin logged in as Administrator', '2025-01-06 11:25:12'),
(0, 'admin logged in as Administrator', '2025-01-07 03:21:53'),
(0, 'Admin updated Brgy Official: ID: 1, Name: Orlando M. Jimenez, Position: 4, Status: Active', '2025-01-07 03:24:24'),
(0, 'Admin updated Brgy Official: ID: 4, Name: Mariselda P. Madamba, Position: 7, Status: Active', '2025-01-07 03:24:54'),
(0, 'Admin updated Brgy Official: ID: 5, Name: Jerry C. Jimenez, Position: 8, Status: Active', '2025-01-07 03:25:21'),
(0, 'Admin updated Brgy Official: ID: 7, Name: Raymond L. Melchor, Position: 10, Status: Active', '2025-01-07 03:25:46'),
(0, 'Admin updated Brgy Official: ID: 19, Name: Alfredo J. Medrano, Position: 10, Status: Active', '2025-01-07 03:26:18'),
(0, 'Admin updated Brgy Official: ID: 8, Name: Marvin F. Cortez, Position: 11, Status: Active', '2025-01-07 03:26:42'),
(0, 'Admin updated Brgy Official: ID: 9, Name: Romer M. Salvador, Position: 12, Status: Active', '2025-01-07 03:27:06'),
(0, 'Admin updated Brgy Official: ID: 10, Name: Gregorio M. Domingo, Position: 13, Status: Active', '2025-01-07 03:27:47'),
(0, 'Admin updated Brgy Official: ID: 11, Name: Cherry Melchor, Position: 14, Status: Active', '2025-01-07 03:28:21'),
(0, 'Admin updated Brgy Official: ID: 12, Name: Jonathan M. Dugay, Position: 15, Status: Active', '2025-01-07 03:39:03'),
(0, 'Admin updated Brgy Official: ID: 13, Name: Leticia M. Ramos, Position: 16, Status: Active', '2025-01-07 03:39:21'),
(0, 'admin logged in as Administrator', '2025-01-07 10:09:15'),
(0, 'Admin updated Brgy Official: ID: 1, Name: Orlando M. Jimenez, Position: 4, Status: Active', '2025-01-07 10:11:33'),
(0, 'Admin updated Brgy Official: ID: 4, Name: Mariselda P. Madamba, Position: 7, Status: Active', '2025-01-07 10:11:53'),
(0, 'Admin updated Brgy Official: ID: 5, Name: Jerry C. Jimenez, Position: 8, Status: Active', '2025-01-07 10:12:07'),
(0, 'Admin updated Brgy Official: ID: 7, Name: Raymond L. Melchor, Position: 10, Status: Active', '2025-01-07 10:12:24'),
(0, 'Admin updated Brgy Official: ID: 19, Name: Alfredo J. Medrano, Position: 10, Status: Active', '2025-01-07 10:12:43'),
(0, 'Admin updated Brgy Official: ID: 8, Name: Marvin F. Cortez, Position: 11, Status: Active', '2025-01-07 10:13:02'),
(0, 'Admin updated Brgy Official: ID: 9, Name: Romer M. Salvador, Position: 12, Status: Active', '2025-01-07 10:13:26'),
(0, 'Admin updated Brgy Official: ID: 10, Name: Gregorio M. Domingo, Position: 13, Status: Active', '2025-01-07 10:13:41'),
(0, 'Admin updated Brgy Official: ID: 11, Name: Cherry Melchor, Position: 14, Status: Active', '2025-01-07 10:14:03'),
(0, 'admin logged in as Administrator', '2025-01-09 13:06:33'),
(0, 'admin logged in as Administrator', '2025-01-10 15:10:02'),
(0, 'admin logged in as Administrator', '2025-01-10 15:19:47'),
(0, 'Admin edited blotter ID: 35, Complainant: , Respondent: 111', '2025-01-10 15:28:26'),
(0, 'Admin edited blotter ID: 34, Complainant: , Respondent: zxcasdasd', '2025-01-10 15:29:14'),
(0, 'admin2 logged in as Administrator', '2025-01-10 16:02:14'),
(0, 'admin logged in as Administrator', '2025-01-10 16:04:43'),
(0, 'admin logged in as Administrator', '2025-01-11 02:00:50'),
(0, 'admin logged in as Administrator', '2025-01-11 02:02:38'),
(0, 'admin logged in as Administrator', '2025-01-11 03:39:17'),
(0, 'admin logged in as Administrator', '2025-01-11 08:50:58'),
(0, 'admin logged in as Administrator', '2025-01-11 12:17:25'),
(0, 'admin2 logged in as Administrator', '2025-01-12 14:22:10'),
(0, 'admin logged in as Administrator', '2025-01-12 19:12:12'),
(0, 'admin logged in as Administrator', '2025-01-24 12:44:02'),
(0, 'admin logged in as Administrator', '2025-01-24 22:04:48'),
(0, 'admin logged in as Administrator', '2025-01-24 22:43:00'),
(0, 'admin logged in as Administrator', '2025-02-05 21:07:47'),
(0, 'admin logged in as Administrator', '2025-02-20 12:44:56'),
(0, 'admin logged in as Administrator', '2025-02-20 13:36:33'),
(0, 'admin logged in as Administrator', '2025-03-14 13:36:37'),
(0, 'admin logged in as Administrator', '2025-03-16 09:23:36'),
(0, 'admin logged in as Administrator', '2025-03-16 09:30:44'),
(0, 'admin logged in as Administrator', '2025-03-16 09:33:05'),
(0, 'admin logged in as Administrator', '2025-03-16 09:37:13'),
(0, 'admin logged in as Administrator', '2025-03-16 09:49:01'),
(0, 'admin logged in as Administrator', '2025-03-16 09:55:10'),
(0, 'admin logged in as Administrator', '2025-03-16 09:59:14'),
(0, 'admin logged in as Administrator', '2025-03-16 10:38:30'),
(0, 'admin logged in as Administrator', '2025-03-16 11:00:13'),
(0, 'admin logged in as Administrator', '2025-03-16 11:10:00'),
(0, 'admin logged in as Administrator', '2025-03-16 11:12:47'),
(0, 'admin logged in as Administrator', '2025-03-16 11:59:05'),
(0, 'admin logged in as Administrator', '2025-03-16 12:21:15'),
(0, 'admin logged in as Administrator', '2025-03-16 12:38:23'),
(0, 'admin logged in as Administrator', '2025-03-18 01:00:50'),
(0, 'admin logged in as Administrator', '2025-03-18 01:13:37'),
(0, 'admin logged in as Administrator', '2025-03-18 01:29:03'),
(0, 'admin logged in as Administrator', '2025-03-24 11:41:19'),
(0, 'admin logged in as Administrator', '2025-03-24 16:43:05'),
(0, 'Admin edited blotter ID: 37, Complainant: , Respondent: dsa', '2025-03-24 16:43:48'),
(0, 'admin logged in as Administrator', '2025-04-02 11:47:37'),
(0, 'admin logged in as Administrator', '2025-04-07 11:16:52'),
(0, 'admin logged in as Administrator', '2025-04-07 11:58:52'),
(0, 'Admin edited blotter ID: 41, Complainant: , Respondent: test', '2025-04-07 11:59:03'),
(0, 'admin logged in as Administrator', '2025-04-17 12:06:19'),
(0, 'Admin edited blotter ID: 42, Complainant: Paul Christian Delina, Respondent: test', '2025-04-17 12:11:53'),
(0, 'Admin edited blotter ID: 43', '2025-04-17 12:14:00'),
(0, 'admin logged in as Administrator', '2025-04-17 12:33:21'),
(0, 'Admin edited blotter ID: 44', '2025-04-17 12:33:33'),
(0, 'Admin edited blotter ID: 44', '2025-04-17 12:33:42'),
(0, 'admin logged in as Administrator', '2025-04-17 12:36:32'),
(0, 'admin logged in as Administrator', '2025-04-17 12:43:19');

-- --------------------------------------------------------

--
-- Table structure for table `announcements`
--

CREATE TABLE `announcements` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `thumbnail` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `announcements`
--

INSERT INTO `announcements` (`id`, `title`, `content`, `thumbnail`, `created_at`, `updated_at`, `deleted_at`) VALUES
(41, '123', '123', '2022053002303616539138366294b8ec6a520.png', '2022-05-30 12:30:36', NULL, NULL),
(42, 'Oplan Linis', 'maglinis mula purok 1 hanggang purok 6', '202410220333491729560829671700fd6fdc3.', '2024-10-22 01:33:49', NULL, NULL),
(43, 'Arko Painting', 'Magpapatulong po ang Sk Chairman sa nalalapit na pagpipintor sa brgy cariño arko, nitong darating na January 18, 2025. Inaasahan po namin kayo', '202501100359481736524788678143f428298.', '2025-01-10 15:59:48', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `certificates`
--

CREATE TABLE `certificates` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `url` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `certificates`
--

INSERT INTO `certificates` (`id`, `name`, `url`) VALUES
(1, 'Barangay Certificate', 'generate_brgy_cert.php'),
(4, 'Certificate of Indigency', 'generate_indi_cert.php'),
(5, 'Business Clearance', 'generate_business_permit.php'),
(7, 'Certificate of Guardianship', 'generate_guardian_cert.php'),
(10, 'First Time Jobseekers Assistance Act RA 11261', 'generate_jobseeker_cert.php');

-- --------------------------------------------------------

--
-- Table structure for table `certificate_requests`
--

CREATE TABLE `certificate_requests` (
  `id` int(10) UNSIGNED NOT NULL,
  `resident_id` int(10) UNSIGNED NOT NULL,
  `payment_id` int(10) UNSIGNED DEFAULT NULL,
  `certificate_id` int(10) UNSIGNED NOT NULL,
  `status` enum('resolved','rejected','pending') NOT NULL DEFAULT 'pending',
  `memo` varchar(100) DEFAULT NULL,
  `data` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`data`)),
  `supporting_document` varchar(255) NOT NULL,
  `url` varchar(100) DEFAULT NULL,
  `feedback` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `certificate_requests`
--

INSERT INTO `certificate_requests` (`id`, `resident_id`, `payment_id`, `certificate_id`, `status`, `memo`, `data`, `supporting_document`, `url`, `feedback`, `created_at`, `updated_at`, `deleted_at`) VALUES
(25, 26, 30, 1, '', 'School ', '{}', '', 'generate_brgy_cert.php?id=26&request_id=25', '', '2024-11-17 02:58:27', '2024-11-17 03:04:48', NULL),
(26, 26, 32, 4, '', 'medical', '{}', '', 'generate_indi_cert.php?id=26&request_id=26', '', '2024-11-17 02:58:33', '2024-11-17 03:53:36', NULL),
(27, 26, 31, 5, '', 'business', '{\"name\":\"Gasoline Station\",\"owner_1\":\"jusep\",\"owner_2\":\"Marie\",\"nature\":\"AJ Gasoline Station\"}', '', 'generate_business_permit.php?id=26&request_id=27', '', '2024-11-17 02:59:19', '2024-11-17 03:45:55', NULL),
(29, 28, 33, 1, '', 'testing cert', '{}', '', 'generate_brgy_cert.php?id=28&request_id=29', '', '2024-11-17 04:03:36', '2024-11-17 04:04:02', NULL),
(30, 26, 34, 3, '', '4PS Certification Payment', NULL, '', NULL, '', '2024-11-17 04:25:29', NULL, NULL),
(31, 27, 35, 4, '', 'Certificate of Indigency Payment', NULL, '', NULL, '', '2024-11-17 04:25:58', NULL, NULL),
(33, 28, 41, 5, '', 'Business Certification', '{\"name\":\"Sari sari Store\",\"owner_1\":\"allen\",\"owner_2\":\"sof\",\"nature\":\"ABS store\"}', '', 'generate_business_permit.php?id=28&request_id=33', '', '2024-11-17 05:55:37', '2024-11-17 17:36:13', NULL),
(35, 28, 39, 7, '', 'School', '{\"guardian_name\":\"Juan\"}', '', 'generate_guardian_cert.php?id=28&request_id=35', '', '2024-11-17 10:41:44', '2024-11-17 17:35:46', NULL),
(36, 28, 40, 5, '', 'Business Cert', '{\"name\":\"Gasoline Station\",\"owner_1\":\"jusep\",\"owner_2\":\"allen\",\"nature\":\"ABSD Store\"}', '', 'generate_business_permit.php?id=28&request_id=36', '', '2024-11-17 10:50:08', '2024-11-17 17:35:57', NULL),
(37, 28, 36, 7, '', 'Medical', '{\"guardian_name\":\"Peter\"}', '', 'generate_guardian_cert.php?id=28&request_id=37', '', '2024-11-17 12:09:34', '2024-11-17 13:15:12', NULL),
(41, 28, 38, 10, '', 'First Time Jobseeker', '{\"year_residence\":\"10\"}', '', 'generate_jobseeker_cert.php?id=28&request_id=41', '', '2024-11-17 15:57:05', '2024-11-17 17:35:25', NULL),
(42, 27, 42, 1, '', 'Barangay Clearance Payment', NULL, '', NULL, '', '2024-12-17 05:29:17', NULL, NULL),
(43, 41, 43, 4, '', 'Enter Feedback', NULL, '', NULL, '', '2024-12-17 05:39:11', NULL, NULL),
(44, 41, 44, 4, '', 'Enter Feedback', NULL, '', NULL, '', '2024-12-17 05:39:13', NULL, NULL),
(45, 19, 45, 1, '', 'Barangay Clearance Payment', NULL, '', NULL, '', '2024-12-17 05:41:08', NULL, NULL),
(46, 24, NULL, 1, 'pending', 'requirements ', '{}', 'uploads/IMG20240615153257.jpg', 'generate_brgy_cert.php?id=24&request_id=46', '', '2024-12-17 05:44:53', '2024-12-17 05:44:53', NULL),
(47, 24, NULL, 4, 'pending', 'medical purpose', '{}', 'uploads/Screenshot_2024-12-17-13-45-23-61_40deb401b9ffe8e1df2f1cc5ba480b12.jpg', 'generate_indi_cert.php?id=24&request_id=47', '', '2024-12-17 05:45:46', '2024-12-17 05:45:46', NULL),
(48, 24, 47, 5, '', 'opening business', '{\"name\":\"tracy store\",\"owner_1\":\"Tracy Mercado \",\"owner_2\":\"\",\"nature\":\"sari sari store\"}', 'uploads/Screenshot_2024-12-17-13-42-46-83_40deb401b9ffe8e1df2f1cc5ba480b12.jpg', 'generate_business_permit.php?id=24&request_id=48', '', '2024-12-17 05:46:48', '2024-12-17 06:12:24', NULL),
(49, 24, 46, 7, '', 'requirements ', '{\"guardian_name\":\"Josephine Mercado\"}', 'uploads/Screenshot_2024-12-17-13-41-56-25_40deb401b9ffe8e1df2f1cc5ba480b12.jpg', 'generate_guardian_cert.php?id=24&request_id=49', '', '2024-12-17 05:47:58', '2024-12-17 05:50:29', NULL),
(50, 24, 60, 5, '', 'Opening a business in brgy carino', '{\"name\":\"Wapin\",\"owner_1\":\"Pol\",\"owner_2\":\"Cris\",\"nature\":\"Hardware\"}', 'uploads/2batchfilepad.png', 'generate_business_permit.php?id=24&request_id=50', 'Enter Feedback', '2024-12-17 06:16:40', '2025-01-07 10:15:18', NULL),
(51, 20, 49, 1, '', 'Barangay Clearance Payment', NULL, '', NULL, '', '2024-12-17 11:46:41', NULL, NULL),
(52, 19, 50, 1, '', 'Barangay Clearance Payment', NULL, '', NULL, 'Barangay Clearance Payment', '2025-01-05 11:59:05', NULL, NULL),
(54, 27, 52, 4, '', 'Enter Feedback', NULL, '', NULL, 'Enter Feedback', '2025-01-05 12:08:32', NULL, NULL),
(55, 27, 53, 4, '', 'Enter Feedback', NULL, '', NULL, 'Enter Feedback', '2025-01-05 12:08:32', NULL, NULL),
(56, 27, 54, 1, '', 'Barangay Clearance Payment', NULL, '', NULL, 'Barangay Clearance Payment', '2025-01-05 12:25:12', NULL, NULL),
(57, 27, 55, 4, '', 'Enter Feedback', NULL, '', NULL, 'Enter Feedback', '2025-01-05 12:28:37', NULL, NULL),
(60, 27, 58, 1, '', 'Barangay Clearance Payment', NULL, '', NULL, 'Barangay Clearance Payment', '2025-01-06 11:25:24', NULL, NULL),
(61, 27, 59, 4, '', 'Enter Feedback', NULL, '', NULL, 'Enter Feedback', '2025-01-06 11:25:46', NULL, NULL),
(62, 27, 61, 1, '', 'Barangay Clearance Payment', NULL, '', NULL, 'Barangay Clearance Payment', '2025-01-09 13:06:46', NULL, NULL),
(63, 41, 62, 4, '', 'Enter Feedback', NULL, '', NULL, 'Enter Feedback', '2025-01-09 13:10:26', NULL, NULL),
(64, 30, 65, 4, '', 'educational assistance', '{}', 'uploads/vaccinationcard.jpg', 'generate_indi_cert.php?id=30&request_id=64', 'Balik mayang hapon', '2025-01-10 15:34:24', '2025-01-10 15:45:43', NULL),
(65, 30, 64, 10, '', 'work', '{}', 'uploads/vaccinationcard.jpg', 'generate_jobseeker_cert.php?id=30&request_id=65', 'Balik po kayo dito mamayang hapon mga 5pm', '2025-01-10 15:35:13', '2025-01-10 15:40:33', NULL),
(67, 30, 67, 5, '', 'closing business', '{\"name\":\"lugawan ni aling berta\",\"owner_1\":\"Janet\",\"owner_2\":\"Ganda\",\"nature\":\"Food\"}', 'uploads/vaccinationcard.jpg', 'generate_business_permit.php?id=30&request_id=67', 'Bukas pa po kami mag oopen sa brgy, balik na lang po kayo bukas ng 5pm at magdala ng 90 pesos para sa payment ', '2025-01-10 15:56:30', '2025-01-10 15:57:56', NULL),
(68, 30, 69, 7, '', 'Ayuda', '{\"guardian_name\":\"Gretchen Enriquez\"}', 'uploads/vaccinationcard.jpg', 'generate_guardian_cert.php?id=30&request_id=68', 'Enter Feedback', '2025-01-10 15:57:53', '2025-01-10 16:06:19', NULL),
(69, 41, 70, 4, '', 'Enter Feedback', NULL, '', NULL, 'Enter Feedback', '2025-01-10 16:09:01', NULL, NULL),
(71, 29, 84, 1, '', 'For Work', '{}', 'uploads/inbound1668936037473051501.pdf', 'generate_brgy_cert.php?id=29&request_id=71', 'Barangay Clearance Payment', '2025-01-11 09:03:15', '2025-04-17 04:39:00', NULL),
(73, 30, 75, 1, '', 'Barangay Clearance Payment', NULL, '', NULL, 'Barangay Clearance Payment', '2025-01-12 19:21:12', NULL, NULL),
(74, 37, 76, 4, '', 'Enter Feedback', NULL, '', NULL, 'Enter Feedback', '2025-01-12 19:22:15', NULL, NULL),
(75, 27, 77, 1, '', 'Barangay Clearance Payment', NULL, '', NULL, 'Barangay Clearance Payment', '2025-01-24 14:48:11', NULL, NULL),
(76, 34, 78, 1, '', 'Barangay Clearance Payment', NULL, '', NULL, 'Barangay Clearance Payment', '2025-03-16 09:25:11', NULL, NULL),
(77, 35, 80, 4, '', 'COI', '{}', 'uploads/1393069.jpg', 'generate_indi_cert.php?id=35&request_id=77', 'Enter Feedbackhwjsbs', '2025-03-16 09:47:54', '2025-03-16 11:59:53', NULL),
(78, 27, 81, 1, '', 'Barangay Clearance Payment', NULL, '', NULL, 'Barangay Clearance Payment', '2025-03-16 12:21:47', NULL, NULL),
(79, 34, 82, 1, '', 'Barangay Clearance Payment', NULL, '', NULL, 'Barangay Clearance Payment', '2025-04-07 03:23:00', NULL, NULL),
(80, 27, 83, 1, '', 'Barangay Clearance Payment', NULL, '', NULL, 'Barangay Clearance Payment', '2025-04-17 04:38:36', NULL, NULL),
(81, 6, 85, 5, '', 'Enter Feedback', NULL, '', NULL, 'Enter Feedback', '2025-04-17 04:39:11', NULL, NULL),
(82, 41, 86, 4, '', 'Enter Feedback', NULL, '', NULL, 'Enter Feedback', '2025-04-17 04:44:34', NULL, NULL),
(83, 49, 87, 4, '', 'Enter Feedback', NULL, '', NULL, 'Enter Feedback', '2025-04-17 04:45:09', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `resident_id` int(10) UNSIGNED DEFAULT NULL,
  `details` varchar(100) DEFAULT NULL,
  `amount` decimal(10,2) NOT NULL,
  `mode` enum('online','cash') NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `user_id`, `resident_id`, `details`, `amount`, `mode`, `created_at`, `updated_at`, `deleted_at`) VALUES
(6, 11, 1, 'Barangay Clearance Payment', '200.00', 'online', '2022-05-22 09:35:30', NULL, NULL),
(7, 11, 1, 'Certificate of Indigency Payment', '200.00', 'online', '2022-05-22 09:52:50', NULL, NULL),
(8, 11, 1, 'Certificate of Indigency Payment', '2.00', 'online', '2022-05-22 09:53:39', NULL, NULL),
(9, 11, 6, 'Business Permit Payment', '2.00', 'online', '2022-05-22 10:23:47', NULL, NULL),
(10, 11, 2, '4PS Certification Payment', '21.00', 'online', '2022-05-22 10:34:12', NULL, NULL),
(11, 11, 13, 'Barangay Clearance Payment', '12.00', 'online', '2022-05-22 12:56:10', NULL, NULL),
(12, 11, 13, 'Barangay Clearance Payment', '12.00', 'online', '2022-05-22 12:56:26', NULL, NULL),
(13, 11, 13, 'Barangay Clearance Payment', '12.00', 'online', '2022-05-22 12:56:36', NULL, NULL),
(14, 11, 1, 'Cutting Permit Payment', '123.00', 'online', '2022-05-22 13:04:13', NULL, NULL),
(15, 11, 9, 'Barangay Clearance Payment', '222.00', 'online', '2022-05-24 15:38:50', NULL, NULL),
(16, 11, 9, 'Barangay Clearance Payment', '12.00', 'online', '2022-05-24 15:40:10', NULL, NULL),
(17, 11, 9, 'Business Permit Payment', '12312.00', 'online', '2022-06-03 15:31:50', NULL, NULL),
(18, 11, 13, 'Barangay Clearance Payment', '213.00', 'cash', '2024-08-29 09:11:24', NULL, NULL),
(19, 11, 6, 'Business Permit Payment', '312.00', 'cash', '2024-08-29 09:14:23', NULL, NULL),
(20, 11, 13, 'Barangay Clearance Payment', '86.00', 'cash', '2024-10-21 04:59:35', NULL, NULL),
(21, 11, 18, 'Barangay Clearance Payment', '464.00', 'cash', '2024-10-21 12:12:10', NULL, NULL),
(22, 11, 18, 'Barangay Clearance Payment', '34.00', 'cash', '2024-10-28 15:12:08', NULL, NULL),
(23, 11, 18, 'Barangay Clearance Payment', '34.00', 'cash', '2024-10-28 15:12:42', NULL, NULL),
(24, 11, 19, 'Barangay Clearance Payment', '4343.00', 'cash', '2024-10-29 12:28:10', NULL, NULL),
(25, 11, 19, 'Barangay Clearance Payment', '25.00', 'cash', '2024-11-15 02:20:25', NULL, NULL),
(26, 11, 26, 'Barangay Clearance Payment', '25.00', 'cash', '2024-11-15 10:14:24', NULL, NULL),
(27, 11, 26, 'Barangay Clearance Payment', '25.00', 'cash', '2024-11-17 02:25:32', NULL, NULL),
(28, 11, 28, 'Barangay Clearance Payment', '25.00', 'cash', '2024-11-17 02:31:41', NULL, NULL),
(29, 11, 28, 'Business Permit Payment', '25.00', 'cash', '2024-11-17 02:37:54', NULL, NULL),
(30, 130, 26, 'Barangay Clearance Payment', '25.00', 'cash', '2024-11-17 03:04:48', NULL, NULL),
(31, 11, 26, 'Business Permit Payment', '25.00', 'cash', '2024-11-17 03:45:55', NULL, NULL),
(32, 11, 26, 'Certificate of Indigency Payment', '25.00', 'cash', '2024-11-17 03:53:36', NULL, NULL),
(33, 11, 28, 'Barangay Clearance Payment', '25.00', 'cash', '2024-11-17 04:04:02', NULL, NULL),
(34, 11, 26, '4PS Certification Payment', '10.00', 'cash', '2024-11-17 04:25:29', NULL, NULL),
(35, 11, 27, 'Certificate of Indigency Payment', '25.00', 'cash', '2024-11-17 04:25:58', NULL, NULL),
(36, 11, 28, 'Certificate of Indigency Payment', '25.00', 'cash', '2024-11-17 13:15:12', NULL, NULL),
(37, 11, 35, 'Certificate of Indigency Payment', '25.00', 'cash', '2024-11-17 14:31:13', NULL, NULL),
(38, 11, 28, 'First Time Jobseeker Payment', '25.00', 'cash', '2024-11-17 17:35:25', NULL, NULL),
(39, 11, 28, 'Certificate of Guardianship Payment', '25.00', 'cash', '2024-11-17 17:35:46', NULL, NULL),
(40, 11, 28, 'Business Permit Payment', '25.00', 'cash', '2024-11-17 17:35:57', NULL, NULL),
(41, 11, 28, 'Business Permit Payment', '25.00', 'cash', '2024-11-17 17:36:13', NULL, NULL),
(42, 11, 27, 'Barangay Clearance Payment', '25.00', 'cash', '2024-12-17 05:29:17', NULL, NULL),
(43, 11, 41, 'Enter Feedback', '25.00', 'cash', '2024-12-17 05:39:11', NULL, NULL),
(44, 11, 41, 'Enter Feedback', '25.00', 'cash', '2024-12-17 05:39:13', NULL, NULL),
(45, 11, 19, 'Barangay Clearance Payment', '25.00', 'cash', '2024-12-17 05:41:08', NULL, NULL),
(46, 11, 24, 'Enter Feedback', '25.00', 'cash', '2024-12-17 05:50:29', NULL, NULL),
(47, 11, 24, 'Pwede niyo na pong kunin later December 17, 5pm', '150.00', 'cash', '2024-12-17 06:12:24', NULL, NULL),
(48, 11, 24, 'Kunin mamayang gabi', '25.00', 'cash', '2024-12-17 06:21:05', NULL, NULL),
(49, 11, 20, 'Barangay Clearance Payment', '25.00', 'cash', '2024-12-17 11:46:41', NULL, NULL),
(50, 11, 19, 'Barangay Clearance Payment', '25.00', 'cash', '2025-01-05 11:59:05', NULL, NULL),
(51, 11, 35, 'Enter Feedback', '25.00', 'cash', '2025-01-05 12:07:31', NULL, NULL),
(52, 11, 27, 'Enter Feedback', '25.00', 'cash', '2025-01-05 12:08:32', NULL, NULL),
(53, 11, 27, 'Enter Feedback', '25.00', 'cash', '2025-01-05 12:08:32', NULL, NULL),
(54, 11, 27, 'Barangay Clearance Payment', '25.00', 'cash', '2025-01-05 12:25:12', NULL, NULL),
(55, 11, 27, 'Enter Feedback', '25.00', 'cash', '2025-01-05 12:28:37', NULL, NULL),
(56, 11, 35, 'Enter Feedback', '25.00', 'cash', '2025-01-05 12:32:04', NULL, NULL),
(57, 11, 35, 'Enter Feedback', '25.00', 'cash', '2025-01-05 12:32:05', NULL, NULL),
(58, 11, 27, 'Barangay Clearance Payment', '25.00', 'cash', '2025-01-06 11:25:24', NULL, NULL),
(59, 11, 27, 'Enter Feedback', '25.00', 'cash', '2025-01-06 11:25:46', NULL, NULL),
(60, 11, 24, 'Enter Feedback', '25.00', 'cash', '2025-01-07 10:15:18', NULL, NULL),
(61, 11, 27, 'Barangay Clearance Payment', '25.00', 'cash', '2025-01-09 13:06:46', NULL, NULL),
(62, 11, 41, 'Enter Feedback', '25.00', 'cash', '2025-01-09 13:10:26', NULL, NULL),
(63, 11, 30, 'Balik po kayo dito mamayang hapon mga 5pm', '25.00', 'cash', '2025-01-10 15:40:25', NULL, NULL),
(64, 11, 30, 'Balik po kayo dito mamayang hapon mga 5pm', '25.00', 'cash', '2025-01-10 15:40:33', NULL, NULL),
(65, 11, 30, 'Balik mayang hapon', '25.00', 'cash', '2025-01-10 15:45:43', NULL, NULL),
(66, 11, 30, 'Punta po kayo mamayang hapon', '25.00', 'cash', '2025-01-10 15:52:01', NULL, NULL),
(67, 11, 30, 'Bukas pa po kami mag oopen sa brgy, balik na lang po kayo bukas ng 5pm at magdala ng 90 pesos para s', '25.00', 'cash', '2025-01-10 15:57:56', NULL, NULL),
(68, 112, 30, 'Enter Feedback', '25.00', 'cash', '2025-01-10 16:03:53', NULL, NULL),
(69, 112, 30, 'Enter Feedback', '25.00', 'cash', '2025-01-10 16:06:19', NULL, NULL),
(70, 112, 41, 'Enter Feedback', '25.00', 'cash', '2025-01-10 16:09:01', NULL, NULL),
(71, 11, 29, 'Barangay Clearance Payment', '25.00', 'cash', '2025-01-11 12:17:56', NULL, NULL),
(72, 112, 29, 'Barangay Clearance Payment', '25.00', 'cash', '2025-01-12 14:23:12', NULL, NULL),
(73, 112, 29, 'Barangay Clearance Payment', '25.00', 'cash', '2025-01-12 14:23:12', NULL, NULL),
(74, 112, 35, 'Enter Feedback', '25.00', 'cash', '2025-01-12 14:37:00', NULL, NULL),
(75, 11, 30, 'Barangay Clearance Payment', '25.00', 'cash', '2025-01-12 19:21:12', NULL, NULL),
(76, 11, 37, 'Enter Feedback', '25.00', 'cash', '2025-01-12 19:22:15', NULL, NULL),
(77, 11, 27, 'Barangay Clearance Payment', '25.00', 'cash', '2025-01-24 14:48:11', NULL, NULL),
(78, 11, 34, 'Barangay Clearance Payment', '25.00', 'cash', '2025-03-16 09:25:11', NULL, NULL),
(79, 11, 35, 'Enter Feedback', '25.00', 'cash', '2025-03-16 09:57:06', NULL, NULL),
(80, 11, 35, 'Enter Feedbackhwjsbs', '25.00', 'cash', '2025-03-16 11:59:53', NULL, NULL),
(81, 11, 27, 'Barangay Clearance Payment', '25.00', 'cash', '2025-03-16 12:21:47', NULL, NULL),
(82, 11, 34, 'Barangay Clearance Payment', '25.00', 'cash', '2025-04-07 03:23:00', NULL, NULL),
(83, 11, 27, 'Barangay Clearance Payment', '25.00', 'cash', '2025-04-17 04:38:36', NULL, NULL),
(84, 11, 29, 'Barangay Clearance Payment', '25.00', 'cash', '2025-04-17 04:39:00', NULL, NULL),
(85, 11, 6, 'Enter Feedback', '25.00', 'cash', '2025-04-17 04:39:11', NULL, NULL),
(86, 11, 41, 'Enter Feedback', '25.00', 'cash', '2025-04-17 04:44:34', NULL, NULL),
(87, 11, 49, 'Enter Feedback', '25.00', 'cash', '2025-04-17 04:45:09', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `purok`
--

CREATE TABLE `purok` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `details` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `purok`
--

INSERT INTO `purok` (`id`, `name`, `details`) VALUES
(1, 'Purok 1', 'ebw'),
(2, 'Purok 2', 'rggr'),
(3, 'Purok 3', 'ehe'),
(4, 'Purok 4', 'dsfdsf'),
(5, 'Purok 5', 'rewrew'),
(6, 'Purok 6', 'rewrewr'),
(7, 'Purok 7', 'rew'),
(9, 'Purok 1', 'ebw');

-- --------------------------------------------------------

--
-- Table structure for table `residents`
--

CREATE TABLE `residents` (
  `id` int(10) UNSIGNED NOT NULL,
  `national_id` varchar(100) DEFAULT NULL,
  `account_id` int(10) UNSIGNED NOT NULL,
  `citizenship` varchar(50) DEFAULT NULL,
  `picture` text DEFAULT NULL,
  `firstname` varchar(50) DEFAULT NULL,
  `middlename` varchar(50) DEFAULT NULL,
  `lastname` varchar(50) DEFAULT NULL,
  `alias` varchar(20) DEFAULT NULL,
  `birthplace` varchar(80) DEFAULT NULL,
  `birthdate` date DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `civilstatus` varchar(20) DEFAULT NULL,
  `gender` varchar(20) DEFAULT NULL,
  `purok_id` int(10) UNSIGNED NOT NULL,
  `voterstatus` varchar(20) DEFAULT NULL,
  `identified_as` varchar(30) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `occupation` varchar(100) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `resident_type` int(11) DEFAULT 1,
  `is_4ps` tinyint(1) DEFAULT 0,
  `is_pwd` tinyint(1) DEFAULT 0,
  `is_senior` tinyint(1) DEFAULT 0,
  `remarks` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL,
  `pwd_id` varchar(255) NOT NULL,
  `4ps_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `residents`
--

INSERT INTO `residents` (`id`, `national_id`, `account_id`, `citizenship`, `picture`, `firstname`, `middlename`, `lastname`, `alias`, `birthplace`, `birthdate`, `age`, `civilstatus`, `gender`, `purok_id`, `voterstatus`, `identified_as`, `phone`, `email`, `occupation`, `address`, `resident_type`, `is_4ps`, `is_pwd`, `is_senior`, `remarks`, `created_at`, `updated_at`, `deleted_at`, `pwd_id`, `4ps_id`) VALUES
(19, '', 121, 'Filipino', NULL, 'Paul Christian', 'Duque', 'Delina', '', 'Camiling, Tarlac', '2002-10-06', 22, 'Single', 'Male', 3, 'Yes', 'Positive', '09695882955', 'paul@gmail.com', 'Student', ' Carino, Paniqui ', 1, 0, 0, 0, NULL, '2024-10-29 07:08:14', '2024-11-16 16:08:53', NULL, '', ''),
(20, NULL, 122, 'Filipino', NULL, 'Tracy', 'Batac', 'Mercado', 'Mamaw', 'Carino, Paniqui', '2000-10-04', 24, 'Widow', 'Female', 4, 'Yes', 'Register', '09675483970', 'tracy@gmail.com', 'None', 'Carino, Paniqui', 1, 0, 0, 0, NULL, '2024-10-29 07:13:04', NULL, NULL, '', ''),
(21, NULL, 123, 'Filipino', NULL, 'Mark Anthony', '-', 'Mendoza', 'Multo', 'Carino, Paniqui', '2008-11-05', 15, 'Married', 'Male', 3, 'No', NULL, '09674578249', 'mark@gmail.com', 'Farmer', 'Carino, Paniqui', 1, 0, 0, 0, NULL, '2024-10-29 07:21:59', NULL, NULL, '', ''),
(22, NULL, 124, 'Filipino', NULL, 'Justine Wayne', '-', 'Fajardo', 'Lover Boy', 'Carino, Paniqui', '2001-01-01', 23, 'Widow', 'Male', 5, 'Yes', 'Unidentified', '09764598567', 'justine@gmail.com', 'Tricycle Driver', 'Carino, Paniqui', 1, 0, 1, 0, NULL, '2024-10-29 07:41:42', NULL, NULL, '', ''),
(23, NULL, 125, 'Filipino', NULL, 'Manny', '-', 'Pacuiao', 'Pacman', 'Carino', '1969-12-25', 54, 'Married', 'Male', 7, 'Yes', 'Register', '09764598769', 'pacman@gmail.com', 'Boxer ', 'Carino, Paniqui', 1, 0, 0, 0, NULL, '2024-10-29 07:49:10', NULL, NULL, '', ''),
(24, '', 126, 'Filipino', NULL, 'Testing', '-', 'Pang', 'Test', 'Carino', '2006-06-13', 18, 'Married', 'Female', 1, 'No', 'Unidentified', '09823456980', 'test@gmail.com', 'None', ' Carino ', 1, 1, 1, 0, NULL, '2024-10-29 07:54:45', '2024-10-29 07:56:11', NULL, '', ''),
(25, '', 129, 'Filipino', NULL, 'allen', 'test', 'test', 'test', 'test', '1999-06-03', 25, 'Single', 'Male', 1, 'Yes', 'Unidentified', '091293123123123123', 'test@gmail.com', 'test', ' teststeststest ', 1, 0, 0, 0, NULL, '2024-11-15 02:14:38', '2024-11-15 09:57:41', NULL, '', ''),
(26, '', 131, 'Filipino', NULL, 'test1', 'test1', 'test1', 'ets1', 'test', '2024-11-18', 20, 'Single', 'Male', 1, 'Yes', 'Unidentified', '9009012312312331', 'testtest@gmail.com', 'stude nt', ' teststets ', 1, 1, 0, 0, NULL, '2024-11-15 08:37:19', '2024-11-17 01:42:06', NULL, '', ''),
(27, '', 132, 'Filipino', NULL, 'allen', 'd', 'adskjhajksd', 'asdaqsdad', 'asdasdasd', '2009-11-16', 15, 'Single', 'Male', 1, 'Yes', 'Unidentified', '09123817238718237', 'allencandela0@gmail.com', 'test', ' 123123123123 ', 1, 0, 0, 0, NULL, '2024-11-16 16:03:13', '2024-11-17 00:47:39', NULL, '', ''),
(28, '', 133, 'Filipino', NULL, 'allen jusep', 'D', 'De Leon', 'len', 'asdasd', '2009-11-09', 15, 'Single', 'Male', 1, 'Yes', 'Unidentified', '091293123123123123', 'allencandela0@gmail.com', 'test', ' adsdasd ', 1, 0, 0, 0, NULL, '2024-11-17 02:12:10', '2024-11-17 10:51:56', NULL, '', ''),
(29, '', 134, 'Filipino', NULL, 'Badong', 'Yolanda', 'Narda', 'Prend', 'Ramos tarlac', '2000-01-01', 25, 'Married', 'Male', 1, 'Yes', 'Unidentified', '09090909090', 'akoaysiakonga@gmail.com', 'None', ' Ramos tarlac ', 1, 0, 0, 0, NULL, '2025-01-10 11:42:47', '2025-01-10 15:51:38', NULL, '', ''),
(30, NULL, 135, 'Filipino', NULL, 'Janet', NULL, 'enriquez', NULL, 'Tarlac', '2003-06-17', 21, 'Single', 'Female', 3, 'Yes', 'Register', '09092921969', 'enriquez.janet17@gmail.com', 'n/a', 'carino paniqui tarlac', 1, 0, 0, 0, NULL, '2025-01-10 15:24:25', NULL, NULL, '', ''),
(31, NULL, 136, 'Filipino', NULL, 'Marc Roy', NULL, 'Alcanzarin', 'Loy', 'Camiling, Tarlac', '2002-03-21', 22, 'Single', 'Male', 3, 'Yes', 'Register', '09613824110', 'marcroyalcanzarinn.21@gmail.com', 'Student', 'Sinilian 3rd, Camiling, Tarlac', 1, 0, 0, 0, NULL, '2025-01-11 09:00:07', NULL, NULL, '', ''),
(32, NULL, 137, 'Filipino', NULL, 'dsadsa', 'dsadas', 'dasdsa', 'dsadsa', 'sdadas', '1995-11-07', 29, 'Single', 'Male', 2, 'Yes', 'Register', '231321321', 'gianpineda091124@gmail.com', '231321', 'dsadsa', 1, 0, 0, 0, NULL, '2025-01-24 14:39:03', NULL, NULL, '', ''),
(33, 'wallpaperflare.com_wallpaper (1).jpg', 138, 'Filipino', NULL, 'dsadsa', 'dsadas', 'dasdsa', 'dsadsa', 'sdadas', '1995-11-16', 29, 'Single', 'Male', 2, 'Yes', 'Register', '231321321', 'gianpineda091132124@gmail.com', '231321', 'dsadsa', 1, 0, 0, 0, NULL, '2025-01-24 14:42:31', '2025-02-05 13:10:49', NULL, '', ''),
(34, 'nationalID_20250220063504174002970467b6bf0811b33.jpeg', 139, 'Filipino', NULL, 'dsadsa', 'dsadas', 'dasdsa', NULL, 'sdadas', '2007-06-19', 17, 'Single', 'Male', 1, 'No', NULL, '321321312312', 'testest123@email.com', '2331232', 'dsadas', 1, 1, 1, 0, NULL, '2025-02-20 05:35:04', NULL, NULL, 'pwd_20250220063504174002970467b6bf0811915.jpg', '4ps_20250220063504174002970467b6bf08114fa.jpg'),
(35, '', 140, 'Filipino', NULL, 'test', 'test', 'test', 'test', 'test', '2001-01-01', 24, 'Single', 'Male', 1, 'Active', 'Unidentified', '1234567901', 'testtesttest@gmail.com', 'test', ' test ', 1, 0, 0, 0, NULL, '2025-03-16 09:30:26', '2025-04-02 04:01:51', NULL, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `staff_logs`
--

CREATE TABLE `staff_logs` (
  `id` int(11) NOT NULL,
  `staff_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `log_message` varchar(255) NOT NULL,
  `login_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `staff_logs`
--

INSERT INTO `staff_logs` (`id`, `staff_id`, `username`, `log_message`, `login_time`) VALUES
(1, 113, 'kagawad1', 'kagawad1 logged in as Staff', '2024-12-17 05:32:56'),
(2, 113, 'kagawad1', 'kagawad1 logged in as Staff', '2024-12-18 00:12:49'),
(3, 120, 'sk', 'sk logged in as Staff', '2025-01-10 16:03:36'),
(4, 113, 'kagawad1', 'kagawad1 logged in as Staff', '2025-01-10 16:04:13'),
(5, 113, 'kagawad1', 'kagawad1 logged in as Staff', '2025-03-16 09:27:38'),
(6, 113, 'kagawad1', 'kagawad1 logged in as Staff', '2025-03-16 10:03:27'),
(7, 113, 'kagawad1', 'kagawad1 logged in as Staff', '2025-03-16 11:06:45'),
(8, 113, 'kagawad1', 'kagawad1 logged in as Staff', '2025-03-16 11:22:35'),
(9, 112, 'admin2', 'admin2 logged in as Staff', '2025-03-24 04:23:00');

-- --------------------------------------------------------

--
-- Table structure for table `tblblotter`
--

CREATE TABLE `tblblotter` (
  `id` int(11) NOT NULL,
  `complainant` int(12) DEFAULT NULL,
  `respondent` varchar(100) DEFAULT NULL,
  `victim` varchar(100) DEFAULT NULL,
  `type` varchar(100) DEFAULT NULL,
  `location` varchar(100) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `time` time DEFAULT NULL,
  `details` varchar(10000) DEFAULT NULL,
  `feedback` varchar(1000) NOT NULL,
  `status` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblblotter`
--

INSERT INTO `tblblotter` (`id`, `complainant`, `respondent`, `victim`, `type`, `location`, `date`, `time`, `details`, `feedback`, `status`) VALUES
(41, 0, 'test', 'test', '', 'test', '2025-04-02', '12:17:00', 'test', 'test', 'Scheduled'),
(42, 0, 'test', 'test', '', 'test', '2025-04-17', '12:07:00', 'test', 'test', 'Settled'),
(43, 19, 'test', 'mga purok tres', '', 'carino', '2025-04-17', '12:13:00', 'test', 'test', 'Settled'),
(44, 24, 'test', 'mga purok tres', 'Concern in surroundings', 'carino', '2025-04-17', '06:30:00', 'test', '', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `tblbrgy_info`
--

CREATE TABLE `tblbrgy_info` (
  `id` int(11) NOT NULL,
  `province` varchar(100) DEFAULT NULL,
  `town` varchar(100) DEFAULT NULL,
  `brgy_name` varchar(50) DEFAULT NULL,
  `number` varchar(50) DEFAULT NULL,
  `text` text DEFAULT NULL,
  `image` varchar(200) DEFAULT NULL,
  `city_logo` varchar(100) DEFAULT NULL,
  `brgy_logo` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblbrgy_info`
--

INSERT INTO `tblbrgy_info` (`id`, `province`, `town`, `brgy_name`, `number`, `text`, `image`, `city_logo`, `brgy_logo`) VALUES
(1, 'Tarlac', 'Paniqui', 'Carino', '0919-1234569', 'Mission and Vision', '22052022140518280057777_309540994678537_4506971625188184492_n.png', '11012025034123p.jpg', '11012025034123c.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tblchairmanship`
--

CREATE TABLE `tblchairmanship` (
  `id` int(11) NOT NULL,
  `title` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblchairmanship`
--

INSERT INTO `tblchairmanship` (`id`, `title`) VALUES
(2, 'Presiding Officer'),
(3, 'Committee on Appropriation'),
(4, 'Committee on Peace & Order'),
(5, 'Committee on Health'),
(6, 'Committee on Education'),
(7, 'Committee on Rules'),
(8, 'Committee on Infrastructure '),
(9, 'Committee on Solid Waste'),
(10, 'Committee on Sports'),
(11, 'No Chairmanship');

-- --------------------------------------------------------

--
-- Table structure for table `tbldocuments`
--

CREATE TABLE `tbldocuments` (
  `no` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `number` int(11) DEFAULT NULL,
  `requested_documents` varchar(50) DEFAULT NULL,
  `purpose` varchar(50) DEFAULT NULL,
  `date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbldocuments`
--

INSERT INTO `tbldocuments` (`no`, `name`, `email`, `number`, `requested_documents`, `purpose`, `date`) VALUES
(1, 'amar', 'amar@gmail.com', 910201645, 'certificate', 'school', '2022-04-20 06:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tblfpscert`
--

CREATE TABLE `tblfpscert` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `current_location` varchar(100) DEFAULT NULL,
  `applied` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblfpscert`
--

INSERT INTO `tblfpscert` (`id`, `name`, `current_location`, `applied`) VALUES
(1, 'RENATO R. ALMO', 'Metro Manila', '2022-04-15'),
(2, 'Annie May Barrera', 'Manila', '2022-04-18'),
(3, 'trytr', '5454', '2022-05-21');

-- --------------------------------------------------------

--
-- Table structure for table `tblofficials`
--

CREATE TABLE `tblofficials` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `chairmanship` varchar(50) DEFAULT NULL,
  `position` varchar(50) DEFAULT NULL,
  `termstart` date DEFAULT NULL,
  `termend` date DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblofficials`
--

INSERT INTO `tblofficials` (`id`, `name`, `chairmanship`, `position`, `termstart`, `termend`, `status`) VALUES
(1, 'Orlando M. Jimenez', '2', '4', '2023-11-08', '2021-05-01', 'Active'),
(4, 'Mariselda P. Madamba', '3', '7', '2023-11-09', '2021-04-24', 'Active'),
(5, 'Jerry C. Jimenez', '4', '8', '2023-11-09', '2022-03-24', 'Active'),
(7, 'Raymond L. Melchor', '6', '10', '2023-11-09', '2021-04-03', 'Active'),
(8, 'Marvin F. Cortez', '7', '11', '2023-11-09', '2021-04-03', 'Active'),
(9, 'Romer M. Salvador', '8', '12', '2023-11-09', '2021-04-03', 'Active'),
(10, 'Gregorio M. Domingo', '9', '13', '2023-11-09', '2021-04-03', 'Active'),
(11, 'Cherry Melchor', '10', '14', '2023-11-09', '2021-04-03', 'Active'),
(12, 'Jonathan M. Dugay', '11', '15', '2020-07-08', '2021-04-03', 'Active'),
(13, 'Leticia M. Ramos', '11', '16', '2020-10-07', '2021-04-03', 'Active'),
(14, 'Ernie Jeash Villahermosa', '5', NULL, '2022-05-18', '2022-05-20', 'Active'),
(15, 'Ernie Jeash Villahermosa', '5', NULL, '2022-05-18', '2022-05-20', 'Active'),
(16, 'Ernie Jeash Villahermosa', '5', NULL, '2022-05-18', '2022-05-20', 'Active'),
(19, 'Alfredo J. Medrano', '5', '10', '2023-11-09', '2022-05-20', 'Active'),
(20, 'Gregorio M. Domingo', '9', '7', '2023-03-01', '2025-03-01', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `tblpermit`
--

CREATE TABLE `tblpermit` (
  `id` int(11) NOT NULL,
  `name` varchar(80) DEFAULT NULL,
  `owner1` varchar(200) DEFAULT NULL,
  `owner2` varchar(80) DEFAULT NULL,
  `nature` varchar(220) DEFAULT NULL,
  `applied` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblpermit`
--

INSERT INTO `tblpermit` (`id`, `name`, `owner1`, `owner2`, `nature`, `applied`) VALUES
(4, 'SH Food Group 1', 'SH Food Group 1', 'SH Food Group 2', 'SH Food Group 1', '2021-04-30'),
(5, 'Atrium Salon & Studio', 'SH Food Group 213', '', 'Atrium Salon & Studio', '2021-04-30'),
(6, '12', '123', '123', '123', '2022-05-22'),
(7, '123', '123', '123', '123', '2022-06-03'),
(8, '123', '123', '123', '123', '2022-06-03');

-- --------------------------------------------------------

--
-- Table structure for table `tblposition`
--

CREATE TABLE `tblposition` (
  `id` int(11) NOT NULL,
  `position` varchar(50) DEFAULT NULL,
  `order` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblposition`
--

INSERT INTO `tblposition` (`id`, `position`, `order`) VALUES
(4, 'Barangay Captain', 1),
(13, 'Barangay Kagawad', 8),
(14, 'SK Chairman', 9),
(15, 'Secretary', 10),
(16, 'Treasurer', 11);

-- --------------------------------------------------------

--
-- Table structure for table `tblprecinct`
--

CREATE TABLE `tblprecinct` (
  `id` int(11) NOT NULL,
  `precinct` varchar(100) DEFAULT NULL,
  `details` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblprecinct`
--

INSERT INTO `tblprecinct` (`id`, `precinct`, `details`) VALUES
(1, '0987666666', 'Kagawad1'),
(2, '09562423232', 'Kagawad2'),
(3, '09873627552', 'Kagawad3'),
(4, '09873456352', 'Kagawad4'),
(5, '09463857635', 'Kagawad5'),
(6, '0985744231', 'Kagawad6'),
(7, '09693424989', 'Kagawad7'),
(8, '90686254886', 'SK Chairman'),
(9, '09682434567', 'Secretary'),
(10, '09828383333', 'Barangay Captain'),
(11, '09488675614', '𝗠𝗗𝗥𝗥𝗠𝗖 𝗣𝗔𝗡𝗜𝗤𝗨𝗜'),
(12, '09089882818', '𝗣𝗡𝗣 𝗣𝗔𝗡𝗜𝗤𝗨𝗜'),
(13, '09231357153', '𝗕𝗙𝗣 𝗣𝗔𝗡𝗜𝗤𝗨𝗜'),
(14, '8009882818', '𝗥𝗛𝗨-𝗜 PANIQUI');

-- --------------------------------------------------------

--
-- Table structure for table `tblrequest`
--

CREATE TABLE `tblrequest` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `pcs` int(11) DEFAULT NULL,
  `type` varchar(50) DEFAULT NULL,
  `location` varchar(50) DEFAULT NULL,
  `applied` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblrequest`
--

INSERT INTO `tblrequest` (`id`, `name`, `pcs`, `type`, `location`, `applied`) VALUES
(1, 'Annie May Barrera', 6, 'coconut', 'buri', '2022-04-15'),
(2, 'RENATO R. ALMO', 6, 'nara', 'Dist. 8', '2022-04-15'),
(3, 'Ian Figuracion', 100, 'Flywood', 'Arado City', '2022-04-18'),
(4, 'trytr', 12, '12', '122', '2022-05-22');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_support`
--

CREATE TABLE `tbl_support` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(60) DEFAULT NULL,
  `number` varchar(20) DEFAULT NULL,
  `subject` varchar(100) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `date` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_support`
--

INSERT INTO `tbl_support` (`id`, `name`, `email`, `number`, `subject`, `message`, `date`) VALUES
(1, 'Annie May C. Barrera', 'anniemaybarrera@gmail.com', '09102016346', 'data', 'Hello sir can I have a COPY OF BRGY. CERTIFICATE?', '2022-04-18 21:01:17'),
(2, 'Annie May C. Barrera', 'anniemaybarrera@gmail.com', '09102016346', 'Clearance', 'school', '2022-04-20 23:53:27'),
(7, 'amar', 'waylimthai@gmail.com', '0987666666', 'technical', 'bb', '2022-04-21 01:50:45'),
(8, '12', '1231@asdasd.ad', '12', '12', '12', '2022-05-30 12:21:12'),
(9, '12', '1231@asdasd.ad', '12', '12', '12', '2022-05-30 12:22:57');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(100) NOT NULL,
  `user_type` enum('administrator','staff','user') NOT NULL,
  `avatar` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `isVerify` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `user_type`, `avatar`, `created_at`, `isVerify`) VALUES
(11, 'admin', '', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'administrator', '20250324044328174278780867e0d4e07c7bb.png', '2021-05-03 02:33:03', 1),
(112, 'admin2', '', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'staff', NULL, '2024-10-29 05:06:07', 0),
(113, 'kagawad1', '', '272460989894a7a8dd6715bdab8be7b3c0e66796', 'staff', NULL, '2024-10-29 05:07:47', 0),
(114, 'kagawad2', '', 'e915eeba000ac7a635c51b8e2f0b07af67f0dea2', 'staff', NULL, '2024-10-29 05:49:09', 0),
(115, 'kagawad3', '', '2b5c4a3dfaa827ea428d677303c99e19d9c795ee', 'staff', NULL, '2024-10-29 05:50:48', 0),
(116, 'kagawad4', '', '2ee6171163546da9bf252d5b3668323571d134e4', 'staff', NULL, '2024-10-29 05:52:37', 0),
(117, 'kagawad5', '', '1cb794bf27e78d88d8d9149892351f204885a3e1', 'staff', NULL, '2024-10-29 05:53:03', 0),
(118, 'kagawad6', '', 'cfc910244d51e90b0c305c978c444cbc16885d3d', 'staff', NULL, '2024-10-29 05:53:25', 0),
(119, 'kagawad7', '', 'e8426b276c7b282c25e84ea786af686f4c512bd5', 'staff', NULL, '2024-10-29 05:54:04', 0),
(120, 'sk', '', '766a6e8998aefe2117d62c2d48411e43161ffa11', 'staff', NULL, '2024-10-29 05:54:28', 0),
(121, 'Paul Christian D. Delina', '', '6a0f4790648e7afbf1dac87071688021ade9fe2f', 'user', '', '2024-10-29 07:08:14', 1),
(122, 'Tracy B. Mercado', '', '9bc0343b6296545f430b07504c161d85c7f24bc9', 'user', NULL, '2024-10-29 07:13:04', 0),
(123, 'Mark Anthony Mendoza', '', '028618b93ba74607b386b71aed10f5422d8f2783', 'user', NULL, '2024-10-29 07:21:59', 0),
(124, 'Justine Wayne Fajardo', '', '76cdf551d90283b5853aa63c68fac8cf4865803e', 'user', NULL, '2024-10-29 07:41:41', 0),
(125, 'Manny Paquiao', '', '46b62869840495020b9d07a853bb2502e265b63b', 'user', 'profile_2024102908491017301881506720937606dab.png', '2024-10-29 07:49:10', 0),
(126, 'test', '', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'user', '', '2024-10-29 07:54:44', 1),
(127, 'Admin3', '', '$2y$10$tBIC/1UgvS1CRF6KskyAQO8oU2tX.vKgeBlFuC8GSfh...', 'administrator', '', '2024-11-15 02:11:23', 0),
(129, 'Test@test', '', '664819d8c5343676c9225b5ed00a5cdc6f3a1ff3', 'user', '', '2024-11-15 02:14:38', 0),
(130, 'subadmin', '', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'staff', NULL, '2024-11-15 07:31:18', 0),
(131, 'test1', '', 'da600f1541332de644f495dff3c30294a640e9bb', 'user', '20241117024653173180801367394b0dd337a.png', '2024-11-15 08:37:19', 1),
(132, 'allen0293', '', '70836a1f04b5d1219a521234efa1ac98f940a2c9', 'user', '20241117014908173180454867393d84d561c.png', '2024-11-16 16:03:13', 1),
(133, '123@mail', 'allencandela0@gmail.com', '70836a1f04b5d1219a521234efa1ac98f940a2c9', 'user', '', '2024-11-17 02:12:10', 1),
(134, 'Badong123', 'akoaysiakonga@gmail.com', '0ea22671875899416321384e35cf9e6e5e3c3dbc', 'user', 'profile_202501101142471736509367678107b7ccecb.jpg', '2025-01-10 11:42:47', 1),
(135, 'bebangqt_', 'enriquez.janet17@gmail.com', 'd20a9df3cd8c1861a455df36482163a5aff2302a', 'user', NULL, '2025-01-10 15:24:25', 1),
(136, 'Marrrccc', 'marcroyalcanzarinn.21@gmail.com', '4cdd49c7bc396b48c2ada4fee4ce38191fe18ad2', 'user', 'profile_20250111090007173658600767823317e9308.jpg', '2025-01-11 09:00:07', 1),
(137, 'testtest', 'gianpineda091124@gmail.com', '719855e8f4ebd94341277b0b0d50b75c5187133f', 'user', 'profile_2025012403390317377295436793a60779a06.png', '2025-01-24 14:39:03', 0),
(138, 'testtest123', 'gianpineda091132124@gmail.com', '719855e8f4ebd94341277b0b0d50b75c5187133f', 'user', 'profile_2025012403423117377297516793a6d745daf.png', '2025-01-24 14:42:31', 0),
(139, 'testest1234', 'testest123@email.com', '719855e8f4ebd94341277b0b0d50b75c5187133f', 'user', 'profile_20250220063504174002970467b6bf0811d6a.jpeg', '2025-02-20 05:35:04', 0),
(140, 'fortesting', 'testtesttest@gmail.com', '1dea813a396d20be6deaaf5e8661447c6c0ddf11', 'user', '', '2025-03-16 09:30:26', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `announcements`
--
ALTER TABLE `announcements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `certificates`
--
ALTER TABLE `certificates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `certificate_requests`
--
ALTER TABLE `certificate_requests`
  ADD PRIMARY KEY (`id`),
  ADD KEY `resident_id` (`resident_id`),
  ADD KEY `payment_id` (`payment_id`),
  ADD KEY `certificate_id` (`certificate_id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `resident_id` (`resident_id`);

--
-- Indexes for table `purok`
--
ALTER TABLE `purok`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `residents`
--
ALTER TABLE `residents`
  ADD PRIMARY KEY (`id`),
  ADD KEY `account_id` (`account_id`),
  ADD KEY `purok_id` (`purok_id`);

--
-- Indexes for table `staff_logs`
--
ALTER TABLE `staff_logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblblotter`
--
ALTER TABLE `tblblotter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblbrgy_info`
--
ALTER TABLE `tblbrgy_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblchairmanship`
--
ALTER TABLE `tblchairmanship`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbldocuments`
--
ALTER TABLE `tbldocuments`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `tblfpscert`
--
ALTER TABLE `tblfpscert`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblofficials`
--
ALTER TABLE `tblofficials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblpermit`
--
ALTER TABLE `tblpermit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblposition`
--
ALTER TABLE `tblposition`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblprecinct`
--
ALTER TABLE `tblprecinct`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblrequest`
--
ALTER TABLE `tblrequest`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_support`
--
ALTER TABLE `tbl_support`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `announcements`
--
ALTER TABLE `announcements`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `certificates`
--
ALTER TABLE `certificates`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `certificate_requests`
--
ALTER TABLE `certificate_requests`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- AUTO_INCREMENT for table `purok`
--
ALTER TABLE `purok`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `residents`
--
ALTER TABLE `residents`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `staff_logs`
--
ALTER TABLE `staff_logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tblblotter`
--
ALTER TABLE `tblblotter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `tblbrgy_info`
--
ALTER TABLE `tblbrgy_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblchairmanship`
--
ALTER TABLE `tblchairmanship`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbldocuments`
--
ALTER TABLE `tbldocuments`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblfpscert`
--
ALTER TABLE `tblfpscert`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tblofficials`
--
ALTER TABLE `tblofficials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tblpermit`
--
ALTER TABLE `tblpermit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tblposition`
--
ALTER TABLE `tblposition`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tblprecinct`
--
ALTER TABLE `tblprecinct`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tblrequest`
--
ALTER TABLE `tblrequest`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_support`
--
ALTER TABLE `tbl_support`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=141;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
