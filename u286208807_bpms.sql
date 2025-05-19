-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 19, 2025 at 04:58 AM
-- Server version: 10.11.10-MariaDB-log
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u286208807_bpms`
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
(152, 'admin logged in as Administrator', '2025-03-24 04:35:07'),
(153, 'admin logged in as Administrator', '2025-03-28 00:09:34'),
(154, 'admin logged in as Administrator', '2025-03-28 00:12:17'),
(155, 'admin logged in as Administrator', '2025-03-28 00:14:26'),
(156, 'admin logged in as Administrator', '2025-03-28 00:23:59'),
(157, 'admin logged in as Administrator', '2025-03-28 00:34:21'),
(158, 'admin logged in as Administrator', '2025-04-01 02:12:03'),
(159, 'admin logged in as Administrator', '2025-04-03 11:20:53'),
(160, 'admin logged in as Administrator', '2025-04-06 23:50:12'),
(161, 'admin logged in as Administrator', '2025-04-07 03:26:08'),
(162, 'Admin edited blotter ID: 41, Complainant: , Respondent: test', '2025-04-07 03:38:11'),
(163, 'Admin edited blotter ID: 42, Complainant: , Respondent: test', '2025-04-07 03:41:24'),
(164, 'admin logged in as Administrator', '2025-04-07 03:51:42'),
(165, 'admin logged in as Administrator', '2025-04-07 04:01:01'),
(166, 'admin logged in as Administrator', '2025-04-07 04:27:19'),
(167, 'admin logged in as Administrator', '2025-04-07 09:01:46'),
(168, 'Admin updated Brgy Official: ID: 28, Name: Orlando M. Jimenez, Position: 1, Status: Active', '2025-04-07 09:02:36'),
(169, 'admin logged in as Administrator', '2025-04-07 09:40:12'),
(170, 'admin logged in as Administrator', '2025-04-07 09:47:19'),
(171, 'admin logged in as Administrator', '2025-04-07 09:50:04'),
(172, 'Admin edited blotter ID: 43, Complainant: , Respondent: Kapitan', '2025-04-07 09:54:13'),
(173, 'admin logged in as Administrator', '2025-04-07 09:58:47'),
(174, 'admin logged in as Administrator', '2025-04-07 10:01:04'),
(175, 'admin logged in as Administrator', '2025-04-07 10:01:40'),
(176, 'admin logged in as Administrator', '2025-04-07 10:03:06'),
(177, 'admin logged in as Administrator', '2025-04-07 11:01:47'),
(178, 'admin logged in as Administrator', '2025-04-07 11:34:32'),
(179, 'Admin updated Brgy Official: ID: 27, Name: Cherry Melchor , Position: 3, Status: Active', '2025-04-07 11:36:08'),
(180, 'admin logged in as Administrator', '2025-04-10 06:46:29'),
(181, 'admin logged in as Administrator', '2025-04-10 07:00:51'),
(182, 'admin logged in as Administrator', '2025-04-10 07:03:33'),
(183, 'admin logged in as Administrator', '2025-04-10 07:05:47'),
(184, 'admin logged in as Administrator', '2025-04-10 09:04:31'),
(185, 'admin logged in as Administrator', '2025-04-10 09:12:48'),
(186, 'admin logged in as Administrator', '2025-04-10 09:16:10'),
(187, 'admin logged in as Administrator', '2025-04-10 09:19:18'),
(188, 'admin logged in as Administrator', '2025-04-10 09:21:55'),
(189, 'admin logged in as Administrator', '2025-04-10 09:22:21'),
(190, 'admin logged in as Administrator', '2025-04-10 09:28:42'),
(191, 'Admin updated Brgy Official: ID: 28, Name: Orlando M. Jimenez, Position: 1, Status: Active', '2025-04-10 09:30:30'),
(192, 'Admin updated Brgy Official: ID: 26, Name: Gregorio M. Domingo , Position: 2, Status: Active', '2025-04-10 09:30:44'),
(193, 'admin logged in as Administrator', '2025-04-10 09:41:20'),
(194, 'Admin updated Brgy Official: ID: 28, Name: Orlando M. Jimenez, Position: 1, Status: Active', '2025-04-10 09:44:28'),
(195, 'admin logged in as Administrator', '2025-04-11 00:17:21'),
(196, 'admin logged in as Administrator', '2025-04-11 00:23:26'),
(197, 'admin logged in as Administrator', '2025-04-11 00:28:37'),
(198, 'admin logged in as Administrator', '2025-04-11 00:41:34'),
(199, 'admin logged in as Administrator', '2025-04-11 00:56:08'),
(200, 'Admin deleted Blotter entry with ID: 42', '2025-04-11 00:57:08'),
(201, 'Admin deleted Blotter entry with ID: 43', '2025-04-11 00:57:11'),
(202, 'Admin edited blotter ID: 44, Complainant: , Respondent: Kapitan Orlando', '2025-04-11 00:59:20'),
(203, 'admin logged in as Administrator', '2025-04-11 00:59:34'),
(204, 'admin logged in as Administrator', '2025-04-14 10:08:04'),
(205, 'admin logged in as Administrator', '2025-04-14 10:21:19'),
(206, 'admin logged in as Administrator', '2025-04-17 13:42:50'),
(207, 'Admin deleted Blotter entry with ID: 44', '2025-04-17 13:43:19'),
(208, 'Admin edited blotter ID: 45', '2025-04-17 13:43:45'),
(209, 'Admin edited blotter ID: 45', '2025-04-17 13:43:52'),
(210, 'Admin edited blotter ID: 45', '2025-04-17 13:46:11'),
(211, 'admin logged in as Administrator', '2025-04-18 01:39:33'),
(212, 'admin logged in as Administrator', '2025-04-18 10:08:41'),
(213, 'admin logged in as Administrator', '2025-04-18 10:26:04'),
(214, 'admin logged in as Administrator', '2025-04-19 04:50:32'),
(215, 'admin logged in as Administrator', '2025-04-19 05:01:32'),
(216, 'admin logged in as Administrator', '2025-04-19 05:04:43'),
(217, 'admin logged in as Administrator', '2025-04-20 04:14:03'),
(218, 'admin logged in as Administrator', '2025-04-20 10:42:15'),
(219, 'admin logged in as Administrator', '2025-04-21 00:34:04'),
(220, 'admin logged in as Administrator', '2025-04-21 00:39:36'),
(221, 'admin logged in as Administrator', '2025-04-21 00:42:30'),
(222, 'admin logged in as Administrator', '2025-04-21 00:42:46'),
(223, 'Admin edited blotter ID: 47', '2025-04-21 00:43:33'),
(224, 'admin logged in as Administrator', '2025-04-21 00:45:06'),
(225, 'Admin edited blotter ID: 47', '2025-04-21 00:45:51'),
(226, 'Admin edited blotter ID: 47', '2025-04-21 00:46:18'),
(227, 'Admin edited blotter ID: 48', '2025-04-21 00:46:37'),
(228, 'admin logged in as Administrator', '2025-04-21 00:47:23'),
(229, 'Admin edited blotter ID: 48', '2025-04-21 00:47:49'),
(230, 'admin logged in as Administrator', '2025-04-21 00:50:00'),
(231, 'Admin edited blotter ID: 47', '2025-04-21 00:50:33'),
(232, 'Admin edited blotter ID: 48', '2025-04-21 00:50:56'),
(233, 'Admin edited blotter ID: 48', '2025-04-21 00:51:31'),
(234, 'Admin updated Brgy Official: ID: 31, Name: Jonathan Dugay, Position: 4, Status: Active', '2025-04-21 03:17:08'),
(235, 'admin logged in as Administrator', '2025-04-22 00:29:58'),
(236, 'admin logged in as Administrator', '2025-04-22 00:33:55'),
(237, 'admin logged in as Administrator', '2025-04-22 00:40:00'),
(238, 'Admin edited blotter ID: 49', '2025-04-22 00:41:17'),
(239, 'admin logged in as Administrator', '2025-04-22 00:51:03'),
(240, 'admin logged in as Administrator', '2025-04-22 13:21:00'),
(241, 'Admin edited blotter ID: 47', '2025-04-22 13:21:15'),
(242, 'Admin edited blotter ID: 47', '2025-04-22 13:26:01'),
(243, 'Admin edited blotter ID: 49', '2025-04-22 13:26:08'),
(244, 'Admin edited blotter ID: 49', '2025-04-22 13:27:30'),
(245, 'admin logged in as Administrator', '2025-04-23 03:03:15'),
(246, 'admin logged in as Administrator', '2025-04-24 00:52:58'),
(247, 'admin logged in as Administrator', '2025-04-24 00:54:10'),
(248, 'admin logged in as Administrator', '2025-04-24 00:58:06'),
(249, 'Admin edited blotter ID: 47', '2025-04-24 00:58:26'),
(250, 'Admin edited blotter ID: 48', '2025-04-24 00:58:53'),
(251, 'Admin edited blotter ID: 47', '2025-04-24 00:59:12'),
(252, 'Admin edited blotter ID: 46', '2025-04-24 00:59:36'),
(253, 'Admin deleted Blotter entry with ID: 49', '2025-04-24 01:01:00'),
(254, 'admin logged in as Administrator', '2025-04-24 01:18:45'),
(255, 'Admin edited blotter ID: 45', '2025-04-24 01:18:58'),
(256, 'Admin edited blotter ID: 45', '2025-04-24 01:19:04'),
(257, 'Admin edited blotter ID: 50', '2025-04-24 01:19:31'),
(258, 'Admin edited blotter ID: 50', '2025-04-24 01:19:40'),
(259, 'Admin edited blotter ID: 50', '2025-04-24 01:19:47'),
(260, 'Admin edited blotter ID: 45', '2025-04-24 01:53:26'),
(261, 'admin logged in as Administrator', '2025-04-24 02:18:11'),
(262, 'admin logged in as Administrator', '2025-04-24 02:19:41'),
(263, 'Admin edited blotter ID: 48', '2025-04-24 02:20:01'),
(264, 'Admin edited blotter ID: 52', '2025-04-24 02:21:13'),
(265, 'Admin edited blotter ID: 47', '2025-04-24 02:21:22'),
(266, 'Admin edited blotter ID: 47', '2025-04-24 02:21:34'),
(267, 'Admin edited blotter ID: 51', '2025-04-24 02:22:05'),
(268, 'Admin edited blotter ID: 51', '2025-04-24 02:22:17'),
(269, 'Admin edited blotter ID: 50', '2025-04-24 02:23:34'),
(270, 'admin logged in as Administrator', '2025-04-24 02:23:52'),
(271, 'Admin edited blotter ID: 48', '2025-04-24 02:24:56'),
(272, 'Admin edited blotter ID: 48', '2025-04-24 02:25:29'),
(273, 'admin logged in as Administrator', '2025-04-24 02:27:57'),
(274, 'Admin edited blotter ID: 47', '2025-04-24 02:28:42'),
(275, 'admin logged in as Administrator', '2025-04-24 02:31:12'),
(276, 'admin logged in as Administrator', '2025-04-24 04:59:58'),
(277, 'admin logged in as Administrator', '2025-04-25 05:28:17'),
(278, 'admin logged in as Administrator', '2025-04-25 05:29:33'),
(279, 'admin logged in as Administrator', '2025-04-27 01:21:45'),
(280, 'admin logged in as Administrator', '2025-04-29 02:19:28'),
(281, 'admin logged in as Administrator', '2025-04-29 02:22:18'),
(282, 'admin logged in as Administrator', '2025-04-29 07:55:21'),
(283, 'staff Add Purok', '2025-04-29 07:57:21'),
(284, 'admin logged in as Administrator', '2025-04-29 07:57:49'),
(285, 'admin logged in as Administrator', '2025-04-29 07:58:57'),
(286, 'staff Modified Blotter/Incident Report', '2025-04-29 08:01:29'),
(287, 'admin logged in as Administrator', '2025-04-29 08:01:40'),
(288, 'admin logged in as Administrator', '2025-04-29 08:04:58'),
(289, 'administrator Processed Certificate Request', '2025-04-29 08:05:39'),
(290, 'admin logged in as Administrator', '2025-04-29 08:09:00'),
(291, 'administrator Processed Certificate Request', '2025-04-29 08:11:07'),
(292, 'admin logged in as Administrator', '2025-04-29 08:14:03'),
(293, 'admin logged in as Administrator', '2025-04-29 08:14:03'),
(294, 'administrator Processed Certificate Request', '2025-04-29 08:14:39'),
(295, 'admin logged in as Administrator', '2025-04-29 08:15:45'),
(296, 'admin logged in as Administrator', '2025-04-29 08:19:15'),
(297, 'admin logged in as Administrator', '2025-04-29 08:23:46'),
(298, 'administrator Processed Certificate Request', '2025-04-29 08:23:55'),
(299, 'admin logged in as Administrator', '2025-04-29 08:24:34'),
(300, 'admin logged in as Administrator', '2025-04-29 08:28:24'),
(301, 'admin logged in as Administrator', '2025-04-29 08:31:41'),
(302, 'admin logged in as Administrator', '2025-04-29 08:32:52'),
(303, 'administrator Processed Certificate Request', '2025-04-29 08:33:30'),
(304, 'admin logged in as Administrator', '2025-04-29 08:36:29'),
(305, 'admin logged in as Administrator', '2025-04-29 12:00:04'),
(306, 'admin logged in as Administrator', '2025-04-29 12:07:22'),
(307, 'staff Add Purok', '2025-04-29 12:11:11'),
(308, 'admin logged in as Administrator', '2025-04-29 12:11:49'),
(309, 'user Reject Certificate Request', '2025-04-30 11:33:11'),
(310, 'user Reject Certificate Request', '2025-04-30 11:33:16'),
(311, 'user Reject Certificate Request', '2025-04-30 11:34:25'),
(312, 'user Reject Certificate Request', '2025-04-30 11:34:40'),
(313, 'user Add Blotter/Incident Report', '2025-04-30 11:43:34'),
(314, 'user Reject Certificate Request', '2025-04-30 11:53:36'),
(315, 'user Reject Certificate Request', '2025-04-30 11:54:15'),
(316, 'user Reject Certificate Request', '2025-04-30 11:54:20'),
(317, 'admin logged in as Administrator', '2025-04-30 11:56:23'),
(318, 'user Reject Certificate Request', '2025-04-30 11:56:44'),
(319, 'user Reject Certificate Request', '2025-04-30 11:56:54'),
(320, 'administrator Processed Certificate Request', '2025-04-30 11:57:55'),
(321, 'administrator Reject Certificate Request', '2025-04-30 11:58:05'),
(322, 'administrator Reject Certificate Request', '2025-04-30 11:58:09'),
(323, 'administrator Reject Certificate Request', '2025-04-30 11:58:16'),
(324, 'administrator Reject Certificate Request', '2025-04-30 11:58:27'),
(325, 'admin logged in as Administrator', '2025-04-30 12:01:42'),
(326, 'user Reject Certificate Request', '2025-04-30 12:02:09'),
(327, 'admin logged in as Administrator', '2025-04-30 12:03:08'),
(328, ' Modified Resident Information', '2025-04-30 12:04:34'),
(329, 'user Reject Certificate Request', '2025-04-30 12:09:49'),
(330, 'user Reject Certificate Request', '2025-04-30 12:11:08'),
(331, 'user Reject Certificate Request', '2025-04-30 12:12:18'),
(332, 'admin logged in as Administrator', '2025-04-30 12:14:36'),
(333, 'administrator Reject Certificate Request', '2025-04-30 12:15:38'),
(334, 'administrator Reject Certificate Request', '2025-04-30 12:18:19'),
(335, 'administrator Reject Certificate Request', '2025-04-30 12:18:36'),
(336, 'admin logged in as Administrator', '2025-04-30 13:14:50'),
(337, 'admin logged in as Administrator', '2025-04-30 13:40:29'),
(338, 'admin logged in as Administrator', '2025-04-30 14:17:36'),
(339, 'admin logged in as Administrator', '2025-04-30 15:51:28'),
(340, ' Modified Resident Information', '2025-04-30 16:12:08'),
(341, 'admin logged in as Administrator', '2025-05-01 01:05:31'),
(342, 'admin logged in as Administrator', '2025-05-05 23:40:55'),
(343, 'admin Reject Certificate Request', '2025-05-05 23:41:44'),
(344, 'admin Reject Certificate Request', '2025-05-05 23:41:57'),
(345, 'admin Reject Certificate Request', '2025-05-05 23:42:23'),
(346, 'admin Reject Certificate Request', '2025-05-05 23:42:54'),
(347, 'admin Reject Certificate Request', '2025-05-05 23:44:11'),
(348, 'admin logged in as Administrator', '2025-05-05 23:47:51'),
(349, 'admin logged in as Administrator', '2025-05-05 23:50:17'),
(350, 'admin logged in as Administrator', '2025-05-05 23:50:39'),
(351, 'admin logged in as Administrator', '2025-05-06 01:09:27'),
(352, 'kagawad1 Add Blotter/Incident Report', '2025-05-08 15:26:56'),
(353, 'admin logged in as Administrator', '2025-05-08 15:27:07'),
(354, 'admin logged in as Administrator', '2025-05-10 05:11:32'),
(355, 'admin logged in as Administrator', '2025-05-10 05:27:50'),
(356, 'admin logged in as Administrator', '2025-05-11 07:44:46'),
(357, 'admin Processed Certificate Request', '2025-05-11 07:45:23'),
(358, 'admin Processed Certificate Request', '2025-05-11 07:49:34'),
(359, 'admin Processed Certificate Request', '2025-05-11 07:51:06'),
(360, 'admin Processed Certificate Request', '2025-05-11 07:54:42'),
(361, 'admin Processed Certificate Request', '2025-05-11 07:55:43'),
(362, 'admin Processed Certificate Request', '2025-05-11 07:56:22'),
(363, 'admin Processed Certificate Request', '2025-05-11 07:57:05'),
(364, 'admin logged in as Administrator', '2025-05-11 08:21:10'),
(365, 'admin Processed Certificate Request', '2025-05-11 08:38:00'),
(366, 'admin logged in as Administrator', '2025-05-11 11:39:17'),
(367, 'admin logged in as Administrator', '2025-05-12 00:55:55'),
(368, 'admin Processed Certificate Request', '2025-05-12 01:00:40'),
(369, 'admin logged in as Administrator', '2025-05-12 01:05:11'),
(370, 'admin logged in as Administrator', '2025-05-12 05:40:45'),
(371, 'admin logged in as Administrator', '2025-05-12 08:30:02'),
(372, 'admin logged in as Administrator', '2025-05-12 14:07:36'),
(373, 'admin logged in as Administrator', '2025-05-12 14:22:16'),
(374, 'admin Processed Certificate Request', '2025-05-12 14:22:47'),
(375, 'admin logged in as Administrator', '2025-05-12 14:34:26'),
(376, 'admin logged in as Administrator', '2025-05-12 14:36:31'),
(377, 'admin logged in as Administrator', '2025-05-12 14:37:58'),
(378, 'admin logged in as Administrator', '2025-05-12 14:38:01'),
(379, 'admin logged in as Administrator', '2025-05-12 14:42:59'),
(380, ' Modified Resident Information', '2025-05-12 14:45:31'),
(381, 'admin logged in as Administrator', '2025-05-12 20:24:39'),
(382, 'admin logged in as Administrator', '2025-05-13 00:33:43'),
(383, 'admin Processed Certificate Request', '2025-05-13 00:34:00'),
(384, 'admin logged in as Administrator', '2025-05-13 02:56:26'),
(385, 'admin logged in as Administrator', '2025-05-13 04:00:35'),
(386, 'admin Processed Certificate Request', '2025-05-13 04:02:20'),
(387, 'admin Processed Certificate Request', '2025-05-13 04:02:20'),
(388, 'admin Processed Certificate Request', '2025-05-13 04:03:06'),
(389, 'admin Processed Certificate Request', '2025-05-13 04:04:29'),
(390, 'admin Processed Certificate Request', '2025-05-13 04:05:24'),
(391, 'admin Processed Certificate Request', '2025-05-13 04:06:03'),
(392, 'admin Processed Certificate Request', '2025-05-13 04:06:23'),
(393, 'admin Processed Certificate Request', '2025-05-13 04:06:51'),
(394, 'admin logged in as Administrator', '2025-05-13 04:09:37'),
(395, 'admin Add Announcement', '2025-05-13 04:13:28'),
(396, 'admin logged in as Administrator', '2025-05-13 04:15:08'),
(397, 'admin logged in as Administrator', '2025-05-13 04:15:08'),
(398, 'admin Edited Brgy Information', '2025-05-13 04:21:48'),
(399, 'admin Edited Brgy Information', '2025-05-13 04:24:48'),
(400, 'admin logged in as Administrator', '2025-05-13 06:19:25'),
(401, 'admin logged in as Administrator', '2025-05-13 06:27:16'),
(402, 'admin Processed Certificate Request', '2025-05-13 06:29:43'),
(403, 'admin logged in as Administrator', '2025-05-13 06:29:55'),
(404, 'admin Processed Certificate Request', '2025-05-13 06:30:32'),
(405, 'Paolo Add Blotter/Incident Report', '2025-05-13 06:33:52'),
(406, 'admin logged in as Administrator', '2025-05-13 06:34:22'),
(407, 'admin Modified Blotter/Incident Report', '2025-05-13 06:35:28'),
(408, 'admin logged in as Administrator', '2025-05-13 06:54:57'),
(409, 'admin logged in as Administrator', '2025-05-13 13:28:39'),
(410, 'admin logged in as Administrator', '2025-05-13 13:46:09'),
(411, 'admin logged in as Administrator', '2025-05-13 16:24:26'),
(412, 'admin logged in as Administrator', '2025-05-14 15:10:50'),
(413, 'admin logged in as Administrator', '2025-05-14 15:18:54'),
(414, 'admin logged in as Administrator', '2025-05-15 06:25:55'),
(415, 'admin Processed Certificate Request', '2025-05-15 06:26:13'),
(416, 'admin Processed Certificate Request', '2025-05-15 06:26:30'),
(417, 'admin Processed Certificate Request', '2025-05-15 06:26:45'),
(418, 'admin Processed Certificate Request', '2025-05-15 06:27:01'),
(419, 'admin Processed Certificate Request', '2025-05-15 06:27:16'),
(420, 'admin logged in as Administrator', '2025-05-16 03:29:19');

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
(44, 'Oplan Linis', 'Purok 1 to purok 7', '20250328122114174312127467e5eb7a41b37.', '2025-03-28 00:21:14', NULL, NULL),
(45, '2025 Election Day', 'What: Votation Day\r\nWhen: May 12\r\nWhere: CArino, Elementary', '2025051304132817471096086822c6e864cac.png', '2025-05-13 04:13:28', NULL, NULL);

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
  `status` enum('resolved','rejected','pending','released') NOT NULL DEFAULT 'pending',
  `memo` varchar(100) DEFAULT NULL,
  `data` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`data`)),
  `supporting_document` varchar(255) NOT NULL,
  `url` varchar(100) DEFAULT NULL,
  `feedback` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL,
  `isRead` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `certificate_requests`
--

INSERT INTO `certificate_requests` (`id`, `resident_id`, `payment_id`, `certificate_id`, `status`, `memo`, `data`, `supporting_document`, `url`, `feedback`, `created_at`, `updated_at`, `deleted_at`, `isRead`) VALUES
(87, 86, 88, 4, '', 'Enter Feedback dflhfoufo', NULL, '', NULL, 'Enter Feedback dflhfoufo', '2025-04-07 11:10:05', NULL, NULL, 0),
(89, 85, 89, 4, '', 'ccfjfh', NULL, '', NULL, 'ccfjfh', '2025-04-07 11:17:36', NULL, NULL, 0),
(90, 85, 90, 4, '', 'jvku6roiin', NULL, '', NULL, 'jvku6roiin', '2025-04-07 11:19:46', NULL, NULL, 0),
(95, 94, 95, 4, '', 'get it by april 11', NULL, '', NULL, 'get it by april 11', '2025-04-10 07:06:20', NULL, NULL, 0),
(102, 41, 142, 1, 'released', 'Forda Working student po', '{}', 'uploads/Screenshot_20250406-093708.jpg', 'generate_brgy_cert.php?id=41&request_id=102', 'Ready to pick up on May 13, 5pm. Please Prepare 50 Pesos for the Payment.', '2025-04-11 00:21:51', '2025-05-13 04:06:51', NULL, 1),
(104, 41, 113, 5, 'released', 'Para makatulong sa gastusin dito sa bahay', '{\"name\":\"Pol\",\"owner_1\":\"Ana\",\"owner_2\":\"Alex\",\"nature\":\"Motorshop\"}', 'uploads/Screenshot_20250410-174502.jpg', 'generate_business_permit.php?id=41&request_id=104', 'Ready to pick up', '2025-04-11 00:27:02', '2025-04-29 08:03:32', NULL, 1),
(106, 41, 109, 10, 'released', 'Gusto mag working student para sa pag aaral', '{}', 'uploads/Screenshot_20250324-083410.jpg', 'generate_jobseeker_cert.php?id=41&request_id=106', 'Enter Feedback', '2025-04-11 00:28:12', '2025-04-29 08:03:32', NULL, 1),
(107, 106, 104, 4, '', 'Enter Feedback', NULL, '', NULL, 'Enter Feedback', '2025-04-17 13:46:40', NULL, NULL, 0),
(108, 106, 105, 4, '', 'Enter Feedback', NULL, '', NULL, 'Enter Feedback', '2025-04-17 13:52:12', NULL, NULL, 0),
(109, 43, 110, 4, 'released', 'medical assistace', '{}', 'uploads/b238c448-41e7-40dc-b184-00c3c548f6e3.jpg', 'generate_indi_cert.php?id=43&request_id=109', 'please pick up the document', '2025-04-18 10:27:45', '2025-04-18 10:28:21', NULL, 0),
(110, 39, 111, 4, 'released', 'Enter Feedback', NULL, '', NULL, 'Enter Feedback', '2025-04-20 10:42:26', NULL, NULL, 0),
(111, 41, 114, 7, 'released', 'For adoption ', '{\"guardian_name\":\"Nelia\"}', 'uploads/Screenshot_20250422-083210.jpg', 'generate_guardian_cert.php?id=41&request_id=111', 'Ready to pick up on brgy hall 5pm', '2025-04-22 00:33:39', '2025-04-29 08:03:32', NULL, 1),
(112, 39, 116, 1, 'released', 'Barangay Clearance Payment', NULL, '', NULL, 'Barangay Clearance Payment', '2025-04-25 05:29:00', NULL, NULL, 0),
(113, 41, 117, 1, 'released', 'Educational purposes', '{}', 'uploads/received_1839549363254514.jpeg', 'generate_brgy_cert.php?id=41&request_id=113', 'Please pick up and pay 20 pesos', '2025-04-29 02:22:02', '2025-04-29 08:03:32', NULL, 1),
(114, 41, 118, 1, 'released', 'school', '{}', 'uploads/pngtree-happy-birthday-golden-typography-text-with-balloons-png-image_4388366.jpeg', 'generate_brgy_cert.php?id=41&request_id=114', 'pickup ', '2025-04-29 08:04:35', '2025-04-29 08:06:17', NULL, 1),
(115, 41, 141, 4, 'released', 'Work', '{}', 'uploads/1393069.jpg', 'generate_indi_cert.php?id=41&request_id=115', 'Ready to pick up on May 13, 5pm. Please Prepare 50 Pesos for the Payment.', '2025-04-29 08:07:49', '2025-05-13 04:06:23', NULL, 1),
(116, 41, 140, 4, 'released', 'assistance', '{}', 'uploads/IMG20250424091134.jpg', 'generate_indi_cert.php?id=41&request_id=116', 'Ready to pick up on May 13, 5pm. Please Prepare 50 Pesos for the Payment.', '2025-04-29 08:13:53', '2025-05-13 04:06:03', NULL, 1),
(117, 41, 139, 1, 'released', 'das', '{}', 'uploads/ChatGPT Image Apr 28, 2025, 11_14_18 PM.png', 'generate_brgy_cert.php?id=41&request_id=117', 'Ready to pick up on May 13, 5pm. Please Prepare 50 Pesos for the Payment.', '2025-04-29 08:17:27', '2025-05-13 04:07:34', NULL, 1),
(118, 41, 138, 1, 'released', 'dsa', '{}', 'uploads/ChatGPT Image Apr 28, 2025, 11_14_18 PM.png', 'generate_brgy_cert.php?id=41&request_id=118', 'Ready to pick up on May 13, 5pm. Please Prepare 50 Pesos for the Payment. ', '2025-04-29 08:23:03', '2025-05-13 04:04:29', NULL, 1),
(119, 47, 122, 4, 'rejected', 'assistance', '{}', 'uploads/Screenshot_2025-04-29-16-16-19-00_40deb401b9ffe8e1df2f1cc5ba480b12.jpg', 'generate_indi_cert.php?id=47&request_id=119', 'Please pickup', '2025-04-29 08:32:41', '2025-04-30 11:54:15', NULL, 1),
(120, 47, NULL, 4, 'rejected', 'assistance ', '{}', 'uploads/Screenshot_2025-04-30-19-48-14-76_c37d74246d9c81aa0bb824b57eaf7062.jpg', 'generate_indi_cert.php?id=47&request_id=120', '', '2025-04-30 11:53:17', '2025-04-30 11:53:36', NULL, 0),
(121, 47, 123, 4, 'rejected', 'assistance', '{}', 'uploads/Screenshot_2025-04-30-19-53-42-65_40deb401b9ffe8e1df2f1cc5ba480b12.jpg', 'generate_indi_cert.php?id=47&request_id=121', 'Pickup the document and ready for payment ', '2025-04-30 11:54:37', '2025-05-05 23:44:11', NULL, 1),
(122, 47, NULL, 5, 'rejected', 'opening bussiness', '{\"name\":\"Lyka Store \",\"owner_1\":\"Lyka Dichoso\",\"owner_2\":\"Angel Dichoso\",\"nature\":\"sari sari store\"}', 'uploads/Screenshot_2025-04-30-19-56-59-66_40deb401b9ffe8e1df2f1cc5ba480b12.jpg', 'generate_business_permit.php?id=47&request_id=122', '', '2025-04-30 12:01:12', '2025-04-30 12:02:09', NULL, 0),
(123, 41, 137, 4, 'released', 'School', '{}', 'uploads/Screenshot_20250430-195729.jpg', 'generate_indi_cert.php?id=41&request_id=123', 'Ready to pick up on May 13, 5pm. Please Prepare 50 Pesos for the Payment.', '2025-04-30 12:02:11', '2025-05-13 04:07:34', NULL, 1),
(124, 48, NULL, 4, 'rejected', 'School', '{}', 'uploads/Screenshot_20250430-195729.jpg', 'generate_indi_cert.php?id=48&request_id=124', '', '2025-04-30 12:07:04', '2025-04-30 12:15:38', NULL, 0),
(125, 41, 136, 1, 'released', 'For work compliance ', '{}', 'uploads/Screenshot_20250430-194840.jpg', 'generate_brgy_cert.php?id=41&request_id=125', 'Ready to pick up on May 13, 5pm. Please Prepare 50 Pesos for the Payment.', '2025-04-30 12:09:35', '2025-05-13 04:07:34', NULL, 1),
(126, 41, 124, 1, 'released', 'Barangay Clearance Payment', NULL, '', NULL, 'Barangay Clearance Payment', '2025-05-11 07:45:23', '2025-05-12 05:39:39', NULL, 1),
(127, 41, 125, 4, 'released', 'Enter Feedback', NULL, '', NULL, 'Enter Feedback', '2025-05-11 07:49:34', '2025-05-12 05:39:39', NULL, 1),
(128, 41, 126, 4, 'released', 'Enter Feedback', NULL, '', NULL, 'Enter Feedback', '2025-05-11 07:51:06', '2025-05-12 05:39:39', NULL, 1),
(129, 111, 127, 4, 'released', 'Enter Feedback', NULL, '', NULL, 'Enter Feedback', '2025-05-11 07:54:42', NULL, NULL, 0),
(130, 111, 128, 4, 'released', 'Enter Feedback', NULL, '', NULL, 'Enter Feedback', '2025-05-11 07:55:43', NULL, NULL, 0),
(131, 106, 129, 4, 'released', 'Enter Feedback', NULL, '', NULL, 'Enter Feedback', '2025-05-11 07:56:22', NULL, NULL, 0),
(132, 106, 130, 4, 'released', 'Enter Feedback', NULL, '', NULL, 'Enter Feedback', '2025-05-11 07:57:05', NULL, NULL, 0),
(133, 111, 131, 4, 'released', 'okay na', NULL, '', NULL, 'okay na', '2025-05-11 08:38:00', NULL, NULL, 0),
(134, 106, 132, 4, 'released', 'Enter Feedback', NULL, '', NULL, 'Enter Feedback', '2025-05-12 01:00:40', NULL, NULL, 0),
(135, 41, NULL, 4, 'pending', 'For work requirements ', '{}', 'uploads/Screenshot_20250512-090608.jpg', 'generate_indi_cert.php?id=41&request_id=135', '', '2025-05-12 05:40:10', '2025-05-12 05:40:10', NULL, 0),
(136, 47, NULL, 5, 'pending', 'Opening business ', '{\"name\":\"Lyka Sari Sari Store\",\"owner_1\":\"Lyka Dichoso\",\"owner_2\":\"Angel Dichoso\",\"nature\":\"Store\"}', 'uploads/Screenshot_2025-05-12-10-11-11-90_a23b203fd3aafc6dcb84e438dda678b6.jpg', 'generate_business_permit.php?id=47&request_id=136', '', '2025-05-12 07:30:44', '2025-05-12 07:30:44', NULL, 0),
(137, 41, NULL, 5, 'pending', 'To gain extra income', '{\"name\":\"Pols water refilling station\",\"owner_1\":\"Paul Christian Delina\",\"owner_2\":\"Janet Enriquez\",\"nature\":\"Water refilling station\"}', 'uploads/2notes.png', 'generate_business_permit.php?id=41&request_id=137', '', '2025-05-12 07:30:47', '2025-05-12 07:30:47', NULL, 0),
(138, 9, 133, 5, 'released', 'Enter Feedback', NULL, '', NULL, 'Enter Feedback', '2025-05-12 14:22:47', NULL, NULL, 0),
(139, 9, 134, 5, 'released', 'Enter Feedback', NULL, '', NULL, 'Enter Feedback', '2025-05-13 00:34:00', NULL, NULL, 0),
(140, 41, 144, 4, 'released', 'For first time job seeker', '{}', 'uploads/Screenshot 2025-02-23 132449.png', 'generate_indi_cert.php?id=41&request_id=140', 'jxbslj', '2025-05-13 04:09:14', '2025-05-13 06:55:19', NULL, 1),
(141, 57, 143, 4, 'released', 'For work', '{}', 'uploads/Screenshot 2025-03-07 004807.png', 'generate_indi_cert.php?id=57&request_id=141', 'balik po kayo bukas ng 5pm. 50 pesos', '2025-05-13 06:22:54', '2025-05-13 06:32:40', NULL, 1),
(142, 52, 145, 1, 'released', 'Barangay Clearance Payment', NULL, '', NULL, 'Barangay Clearance Payment', '2025-05-15 06:26:13', NULL, NULL, 0),
(143, 52, 146, 4, 'released', 'Enter Feedback', NULL, '', NULL, 'Enter Feedback', '2025-05-15 06:26:30', NULL, NULL, 0),
(144, 9, 147, 5, 'released', 'Enter Feedback', NULL, '', NULL, 'Enter Feedback', '2025-05-15 06:26:45', NULL, NULL, 0),
(145, 111, 148, 4, 'released', 'Enter Feedback', NULL, '', NULL, 'Enter Feedback', '2025-05-15 06:27:01', NULL, NULL, 0),
(146, 106, 149, 4, 'released', 'Enter Feedback', NULL, '', NULL, 'Enter Feedback', '2025-05-15 06:27:16', NULL, NULL, 0);

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
(82, 1, 38, 'Barangay Clearance Payment', 25.00, 'cash', '2025-04-03 11:25:38', NULL, NULL),
(83, 1, 38, 'Enter Feedback', 25.00, 'cash', '2025-04-03 11:27:40', NULL, NULL),
(84, 1, 38, 'Barangay Clearance Payment', 25.00, 'cash', '2025-04-07 03:26:18', NULL, NULL),
(85, 1, 37, 'Barangay Clearance Payment', 25.00, 'cash', '2025-04-07 10:01:58', NULL, NULL),
(86, 1, 37, 'Enter Feedback', 25.00, 'cash', '2025-04-07 10:03:47', NULL, NULL),
(87, 1, 37, 'Barangay Clearance Payment 25 gcash number is 08408428928', 25.00, 'cash', '2025-04-07 11:03:13', NULL, NULL),
(88, 1, 86, 'Enter Feedback dflhfoufo', 25.00, 'cash', '2025-04-07 11:10:05', NULL, NULL),
(89, 1, 85, 'ccfjfh', 25.00, 'cash', '2025-04-07 11:17:36', NULL, NULL),
(90, 1, 85, 'jvku6roiin', 25.00, 'cash', '2025-04-07 11:19:46', NULL, NULL),
(91, 1, 37, 'wieinvw', 25.00, 'cash', '2025-04-07 11:21:45', NULL, NULL),
(92, 1, 37, 'Enter Feedback', 25.00, 'cash', '2025-04-10 06:47:47', NULL, NULL),
(93, 1, 37, 'Enter Feedback', 25.00, 'cash', '2025-04-10 06:48:51', NULL, NULL),
(94, 1, 39, 'Enter Feedback', 25.00, 'cash', '2025-04-10 07:00:04', NULL, NULL),
(95, 1, 94, 'get it by april 11', 25.00, 'cash', '2025-04-10 07:06:20', NULL, NULL),
(96, 1, 40, 'Pick up the documents ', 25.00, 'cash', '2025-04-10 09:16:40', NULL, NULL),
(97, 1, 40, 'Pick up until 5pm', 25.00, 'cash', '2025-04-10 09:19:44', NULL, NULL),
(98, 1, 39, 'pick up', 25.00, 'cash', '2025-04-10 09:23:05', NULL, NULL),
(99, 1, 37, 'Balik ng 5pm para sa pick up', 25.00, 'cash', '2025-04-10 09:25:30', NULL, NULL),
(100, 1, 37, 'Balik kayo ng 5pm dito', 25.00, 'cash', '2025-04-10 09:29:10', NULL, NULL),
(101, 1, 39, 'Enter Feedbackighj', 25.00, 'cash', '2025-04-10 09:45:00', NULL, NULL),
(102, 1, 39, 'Enter Feedbackighj', 25.00, 'cash', '2025-04-10 09:45:00', NULL, NULL),
(103, 1, 41, 'Pakuha na lang po dito mamayang hapon around 4pm to 5pm. ', 50.00, 'cash', '2025-04-11 00:30:52', NULL, NULL),
(104, 1, 106, 'Enter Feedback', 25.00, 'cash', '2025-04-17 13:46:40', NULL, NULL),
(105, 1, 106, 'Enter Feedback', 25.00, 'cash', '2025-04-17 13:52:12', NULL, NULL),
(106, 1, 41, 'Enter Feedback', 25.00, 'cash', '2025-04-17 13:53:43', NULL, NULL),
(107, 1, 41, 'Enter Feedback', 25.00, 'cash', '2025-04-17 13:54:13', NULL, NULL),
(108, 1, 41, 'Enter Feedback', 25.00, 'cash', '2025-04-17 13:54:35', NULL, NULL),
(109, 1, 41, 'Enter Feedback', 25.00, 'cash', '2025-04-17 13:56:42', NULL, NULL),
(110, 1, 43, 'please pick up the document', 25.00, 'cash', '2025-04-18 10:28:21', NULL, NULL),
(111, 1, 39, 'Enter Feedback', 25.00, 'cash', '2025-04-20 10:42:26', NULL, NULL),
(112, 1, 41, 'Ready to pick up', 25.00, 'cash', '2025-04-22 00:30:40', NULL, NULL),
(113, 1, 41, 'Ready to pick up', 25.00, 'cash', '2025-04-22 00:31:05', NULL, NULL),
(114, 1, 41, 'Ready to pick up on brgy hall 5pm', 25.00, 'cash', '2025-04-22 00:34:46', NULL, NULL),
(115, 0, 41, 'Barangay Clearance Payment 50', 50.00, 'cash', '2025-04-24 00:53:47', NULL, NULL),
(116, 1, 39, 'Barangay Clearance Payment', 25.00, 'cash', '2025-04-25 05:29:00', NULL, NULL),
(117, 1, 41, 'Please pick up and pay 20 pesos', 25.00, 'cash', '2025-04-29 02:22:53', NULL, NULL),
(118, 1, 41, 'pickup ', 25.00, 'cash', '2025-04-29 08:05:39', NULL, NULL),
(119, 1, 41, 'Ready to pick up at 5pm. 50 pesos each', 50.00, 'cash', '2025-04-29 08:11:07', NULL, NULL),
(120, 1, 41, 'please pickup', 25.00, 'cash', '2025-04-29 08:14:39', NULL, NULL),
(121, 1, 41, 'Barangay Clearance Payment', 25.00, 'cash', '2025-04-29 08:23:55', NULL, NULL),
(122, 1, 47, 'Please pickup', 25.00, 'cash', '2025-04-29 08:33:30', NULL, NULL),
(123, 1, 47, 'Pickup the document and ready for payment ', 25.00, 'cash', '2025-04-30 11:57:55', NULL, NULL),
(124, 1, 41, 'Barangay Clearance Payment', 25.00, 'cash', '2025-05-11 07:45:23', NULL, NULL),
(125, 1, 41, 'Enter Feedback', 25.00, 'cash', '2025-05-11 07:49:34', NULL, NULL),
(126, 1, 41, 'Enter Feedback', 25.00, 'cash', '2025-05-11 07:51:06', NULL, NULL),
(127, 1, 111, 'Enter Feedback', 25.00, 'cash', '2025-05-11 07:54:42', NULL, NULL),
(128, 1, 111, 'Enter Feedback', 25.00, 'cash', '2025-05-11 07:55:43', NULL, NULL),
(129, 1, 106, 'Enter Feedback', 25.00, 'cash', '2025-05-11 07:56:22', NULL, NULL),
(130, 1, 106, 'Enter Feedback', 25.00, 'cash', '2025-05-11 07:57:05', NULL, NULL),
(131, 1, 111, 'okay na', 25.00, 'cash', '2025-05-11 08:38:00', NULL, NULL),
(132, 1, 106, 'Enter Feedback', 25.00, 'cash', '2025-05-12 01:00:40', NULL, NULL),
(133, 1, 9, 'Enter Feedback', 25.00, 'cash', '2025-05-12 14:22:47', NULL, NULL),
(134, 1, 9, 'Enter Feedback', 25.00, 'cash', '2025-05-13 00:34:00', NULL, NULL),
(135, 1, 41, 'Ready to pick up on May 13, 5pm. Please Prepare 50 Pesos for the Payment.', 25.00, 'cash', '2025-05-13 04:02:20', NULL, NULL),
(136, 1, 41, 'Ready to pick up on May 13, 5pm. Please Prepare 50 Pesos for the Payment.', 25.00, 'cash', '2025-05-13 04:02:20', NULL, NULL),
(137, 1, 41, 'Ready to pick up on May 13, 5pm. Please Prepare 50 Pesos for the Payment.', 25.00, 'cash', '2025-05-13 04:03:06', NULL, NULL),
(138, 1, 41, 'Ready to pick up on May 13, 5pm. Please Prepare 50 Pesos for the Payment. ', 25.00, 'cash', '2025-05-13 04:04:29', NULL, NULL),
(139, 1, 41, 'Ready to pick up on May 13, 5pm. Please Prepare 50 Pesos for the Payment.', 25.00, 'cash', '2025-05-13 04:05:24', NULL, NULL),
(140, 1, 41, 'Ready to pick up on May 13, 5pm. Please Prepare 50 Pesos for the Payment.', 25.00, 'cash', '2025-05-13 04:06:03', NULL, NULL),
(141, 1, 41, 'Ready to pick up on May 13, 5pm. Please Prepare 50 Pesos for the Payment.', 25.00, 'cash', '2025-05-13 04:06:23', NULL, NULL),
(142, 1, 41, 'Ready to pick up on May 13, 5pm. Please Prepare 50 Pesos for the Payment.', 25.00, 'cash', '2025-05-13 04:06:51', NULL, NULL),
(143, 1, 57, 'balik po kayo bukas ng 5pm. 50 pesos', 50.00, 'cash', '2025-05-13 06:29:43', NULL, NULL),
(144, 1, 41, 'jxbslj', 25.00, 'cash', '2025-05-13 06:30:32', NULL, NULL),
(145, 1, 52, 'Barangay Clearance Payment', 25.00, 'cash', '2025-05-15 06:26:13', NULL, NULL),
(146, 1, 52, 'Enter Feedback', 25.00, 'cash', '2025-05-15 06:26:30', NULL, NULL),
(147, 1, 9, 'Enter Feedback', 25.00, 'cash', '2025-05-15 06:26:45', NULL, NULL),
(148, 1, 111, 'Enter Feedback', 25.00, 'cash', '2025-05-15 06:27:01', NULL, NULL),
(149, 1, 106, 'Enter Feedback', 25.00, 'cash', '2025-05-15 06:27:16', NULL, NULL);

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
(1, 'Purok 1', 'Riverside'),
(2, 'Purok 2', 'Doña Aurora '),
(3, 'Purok 3', 'Ilang ilang'),
(4, 'Purok 4', 'Santan'),
(5, 'Purok 5', 'Rosal '),
(6, 'Purok 6', 'Bantog'),
(7, 'Purok 7', 'Sampaguita '),
(11, 'Purok 8', 'Dalandan');

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
(36, '', 141, 'Filipino', NULL, 'tracy', 'batac', 'mercao', 'tin', 'makati', '2001-10-04', 23, 'Single', 'Female', 4, 'Active', 'Register', '09678765672', 'mercado@gmail.com', 'NA', ' Paniqui, Tarlac ', 1, 0, 0, 0, NULL, '2025-03-24 14:40:58', '2025-04-18 10:11:04', NULL, '', ''),
(37, '', 142, 'Filipino', NULL, 'Pol', '', 'Del', '', 'Cariño', '2002-10-26', 22, 'Single', 'Male', 3, 'Active', 'Register', '0986494948', 'poldel26@gmail.com', 'Student', ' Cariño, Purok 3 ', 1, 1, 1, 0, NULL, '2025-03-28 00:08:50', '2025-04-07 09:46:45', NULL, 'pwd_20250328120850174312053067e5e892cdf9c.jpg', '4ps_20250328120850174312053067e5e892cc1d9.jpg'),
(38, '', 144, 'Filipino', NULL, 'jayvan', 'ganitano', 'balasta', 'banban', 'paniqui', '2001-01-01', 24, 'Single', 'Male', 1, 'Active', 'Register', '138123891', '.@gmail.com', '1231782937', ' awdawdawdaw ', 1, 0, 0, 0, NULL, '2025-04-01 02:13:24', '2025-04-18 10:13:13', NULL, '', ''),
(39, 'nationalID_20250410065330174426801067f76aeac4c2c.jpg', 145, 'Filipino', NULL, 'Regina', 'Parayno', 'Arceo', 'Reg', 'Quezon City', '1992-01-11', 33, 'Married', 'Female', 1, 'Active', 'Register', '09293369006', 'rparceo_emerald@yahoo.com', 'Teacher', 'Carino, Paniqui', 1, 0, 0, 0, NULL, '2025-04-10 06:53:30', NULL, NULL, '', ''),
(40, 'nationalID_20250410091207174427632767f78b671c333.jpg', 146, 'Filipino', NULL, 'tracy', 'batac', 'mercado', NULL, 'paniqui', '2001-04-04', 24, 'Single', 'Female', 3, 'Active', 'Register', '094515151', 'mercadotracy@gmail.com', 'none', 'paniqui ', 1, 0, 0, 0, NULL, '2025-04-10 09:12:07', NULL, NULL, '', ''),
(41, '', 147, 'Filipino', NULL, 'Paul Christian', 'D.', 'Deliña', 'Pol', 'Cariño', '2002-10-06', 22, 'Single', 'Male', 3, 'Active', 'Register', '09695882954', 'poldel@gmail.com', 'Student', ' Cariño, Paniqui, Tarlac ', 1, 0, 0, 0, NULL, '2025-04-11 00:13:08', '2025-04-11 00:19:34', NULL, '', ''),
(42, 'nationalID_202504181017301744971450680226baafdf3.jpg', 148, 'Filipino', NULL, 'josephine ', 'batac', 'mercado', 'josie', 'makati', '1983-03-21', 42, 'Married', 'Female', 2, 'Active', 'Register', '0976235153', 'josie@gmail.com', 'house wife', 'dumalay', 1, 0, 0, 0, NULL, '2025-04-18 10:17:30', NULL, NULL, '', ''),
(43, 'nationalID_2025041810192917449715696802273157d19.jpg', 149, 'Filipino', NULL, 'romeo', 'mendoza', 'mercado', NULL, 'tarlac', '1976-08-09', 48, 'Married', 'Male', 3, 'Active', 'Register', '0972635325', 'romeo@gmail.com', 'diser', 'ifefiwefi', 1, 0, 0, 0, NULL, '2025-04-18 10:19:29', NULL, NULL, '', ''),
(44, 'nationalID_20250419045319174503839968032c3f8d65d.jpg', 151, 'Filipino', NULL, 'Marie Angel', 'Cortez', 'Dichoso', 'angel', 'paniqui', '1991-12-04', 33, 'Married', 'Female', 5, 'Inactive', 'Register', '09464646451', 'angel@gmail.com', 'Vendor', 'sentro ', 1, 0, 0, 0, NULL, '2025-04-19 04:53:19', NULL, NULL, '', ''),
(45, 'nationalID_20250419045547174503854768032cd38cf87.jpg', 152, 'Filipino', NULL, 'Michelle grace ', 'Pasion ', 'Madamba', 'Mich', 'paniqui', '2001-11-01', 23, 'Single', 'Female', 6, 'Active', 'Register', '094646464', 'michelle@gmail.com', 'sale lady', 'Santan', 1, 0, 0, 0, NULL, '2025-04-19 04:55:47', NULL, NULL, '', ''),
(46, 'nationalID_20250419045912174503875268032da0f08fb.jpg', 153, 'Filipino', NULL, 'John rome', 'Batac', 'Mercado', 'Bitong', 'makati city', '2003-04-27', 21, 'Single', 'Male', 7, 'Canceled', 'Unregister', '094646464', 'johnrome@gmail.com', 'Mcdo staff', 'Dumalay', 1, 0, 0, 0, NULL, '2025-04-19 04:59:12', NULL, NULL, '', ''),
(47, 'nationalID_20250429083119174591547968108e57917dc.jpg', 154, 'Filipino', NULL, 'Lyka', 'Cortez', 'Dichoso', NULL, 'tarlac', '2002-04-04', 23, 'Single', 'Female', 1, 'Active', 'Register', '6464677', 'lyka@gmail.com', 'none', 'sjshsh', 1, 0, 0, 0, NULL, '2025-04-29 08:31:19', NULL, NULL, '', ''),
(48, '', 155, 'Filipino', NULL, 'Alex', 'C.', 'Deliña', 'Alex', 'Cariño', '1976-10-26', 48, 'Married', 'Male', 3, 'Canceled', 'Register', '09096859431', 'alex@gmail.com', 'Tricycle Driver', ' Carino, Paniqui, Tarlac ', 1, 0, 0, 0, NULL, '2025-04-30 11:17:34', '2025-04-30 12:04:34', NULL, '', ''),
(49, 'nationalID_202505110858531746953933682066cde280d.jpeg', 156, 'Filipino', NULL, 'Justine Wayne ', NULL, 'Fajardo', 'Tine', 'Tarlac', '2001-06-02', 23, 'Single', 'Male', 1, 'Active', 'Register', '09703417866', 'justinewaynefajardo02@gmail.com', 'Assistant cook', 'Justinewaynefajardo02@gmail.com', 1, 0, 0, 0, NULL, '2025-05-11 08:58:53', NULL, NULL, '', ''),
(50, '', 157, 'Filipino', NULL, 'Mark Anthony ', '', 'Mendoza', '', 'Cariño, Paniqui, Tarlac', '1996-07-11', 28, 'Married', 'Male', 6, 'Active', 'Register', '09123456789', 'hakdugen12345@gmail.com', 'Student ', ' Cariño, Paniqui, Tarlac ', 1, 0, 0, 0, NULL, '2025-05-12 14:34:03', '2025-05-12 14:45:31', NULL, '', ''),
(51, 'nationalID_202505120242201747060940682208cc8139c.jpeg', 158, 'Filipino', NULL, 'Kayleigh ', NULL, 'De leon', 'Kylii', 'Cariño, Paniqui, Tarlac', '2003-08-13', 21, 'Married', 'Female', 6, 'Active', 'Register', '09987654321', 'Kyliii@gmail.com', 'Flight attendant ', 'Cariño, Paniqui, Tarlac ', 1, 0, 0, 0, NULL, '2025-05-12 14:42:20', NULL, NULL, '', ''),
(52, NULL, 159, 'Filipino', NULL, 'Jayvi ', NULL, 'Aquino ', 'Bork', 'Cariño, Paniqui, Tarlac', '1998-07-09', 26, 'Single', 'Male', 5, 'Active', 'Register', '09164534675', 'JayviAquino@gmail.com', '09164534675', 'Cariño, Paniqui, Tarlac ', 1, 0, 0, 0, NULL, '2025-05-13 02:46:31', NULL, NULL, '', ''),
(53, NULL, 160, 'Filipino', NULL, 'Mark Christian ', NULL, 'Valdez', 'Mak', 'Cariño, Paniqui, Tarlac', '1963-06-28', 61, 'Married', 'Male', 5, 'Active', 'Register', '09172619776', 'mak@gmail.com', 'Construction worker', 'Cariño Paniqui Tarlac ', 1, 0, 0, 1, NULL, '2025-05-13 02:49:26', NULL, NULL, '', ''),
(54, 'nationalID_2025051302514117471047016822b3bd87fd6.jpg', 161, 'Filipino', NULL, 'Christopher ', NULL, 'Reguindin', 'Topher', 'Cariño, Paniqui, Tarlac', '1987-10-08', 37, 'Married', 'Male', 5, 'Active', 'Register', '09157361864', 'Christopher@gmail.com', 'Merchandiser', 'Cariño Paniqui Tarlac ', 1, 0, 0, 0, NULL, '2025-05-13 02:51:41', NULL, NULL, '', ''),
(55, 'nationalID_2025051302534317471048236822b437c56ad.jpg', 162, 'Filipino', NULL, 'Carl', NULL, 'Macaraeg', 'Carl', 'Cariño, Paniqui, Tarlac', '2004-08-19', 20, 'Single', 'Male', 5, 'Active', 'Register', '09761853945', 'Carl@gmail.com', 'LGU head', 'Cariño Paniqui Tarlac ', 1, 0, 0, 0, NULL, '2025-05-13 02:53:43', NULL, NULL, '', ''),
(56, 'nationalID_2025051302561317471049736822b4cdd36be.jpg', 163, 'Filipino', NULL, 'Marione', NULL, 'Dela cruz', 'Tunal', 'Cariño, Paniqui, Tarlac', '1986-01-09', 39, 'Married', 'Male', 5, 'Active', 'Register', '09461158329', 'marione@gmail.com', 'Basurero', 'Cariño Paniqui Tarlac ', 1, 0, 0, 0, NULL, '2025-05-13 02:56:13', NULL, NULL, '', ''),
(57, 'nationalID_2025051306190717471171476822e45b1effc.png', 164, 'Filipino', NULL, 'Paolo', NULL, 'Mercado', NULL, 'carinno', '2010-05-03', 15, 'Single', 'Male', 2, 'Active', 'Register', '0976388473', 'paolo@gmail.com', 'student', 'carino', 1, 0, 1, 0, NULL, '2025-05-13 06:19:07', NULL, NULL, '', '');

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
(9, 143, 'kagawad1', 'kagawad1 logged in as Staff', '2025-03-28 00:15:34'),
(10, 143, 'kagawad1', 'kagawad1 logged in as Staff', '2025-04-21 05:35:06'),
(11, 143, 'kagawad1', 'kagawad1 logged in as Staff', '2025-04-27 00:55:19'),
(12, 143, 'kagawad1', 'kagawad1 logged in as Staff', '2025-04-29 07:56:25'),
(13, 143, 'kagawad1', 'kagawad1 logged in as Staff', '2025-04-29 08:01:04'),
(14, 143, 'kagawad1', 'kagawad1 logged in as Staff', '2025-04-29 08:35:41'),
(15, 143, 'kagawad1', 'kagawad1 logged in as Staff', '2025-04-29 12:10:01'),
(16, 143, 'kagawad1', 'kagawad1 logged in as Staff', '2025-05-01 00:41:24'),
(17, 143, 'kagawad1', 'kagawad1 logged in as Staff', '2025-05-05 23:44:46'),
(18, 143, 'kagawad1', 'kagawad1 logged in as Staff', '2025-05-08 15:25:46'),
(19, 143, 'kagawad1', 'kagawad1 logged in as Staff', '2025-05-12 05:38:52'),
(20, 143, 'kagawad1', 'kagawad1 logged in as Staff', '2025-05-12 15:10:06');

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
(45, 36, 'test', 'mga purok tres', 'Incident', 'carino', '2025-04-10', '21:43:00', 'test', 'Test', 'Settled'),
(46, 41, 'Kaitan', 'Tricycle driver', 'Concern in surroundings', 'Plaza near sampalok', '2025-04-21', '00:36:00', 'Walang ilaw, at sira yung poste ng kuryente', 'All Goods Na Po', 'Scheduled'),
(47, 41, 'Kapitan ', 'Manong Juan', 'Misunderstanding', 'Chocolate Hills', '2025-04-21', '00:37:00', 'Disgrasya po', 'All Settled Na Po Sa Both Parties. Salamat Po', 'Settled'),
(48, 41, 'Kapitan', 'Motorcycle driver and Kagawad Recto', 'Misunderstanding', 'Chocolate Hills', '2025-04-21', '00:38:00', 'Disgrasya po', 'Nasa Hosital Na Siya', 'Settled'),
(50, 41, 'Tanod', 'Mang June', 'Misunderstanding', 'Kwarog Street', '2025-04-24', '10:25:00', 'Sobrang lasing, sa daan na siya humiga', 'Nakauwi na po si mang June. Hinatid po ng tanod ng barangay', 'Settled'),
(51, 41, 'Kagawad 2', 'Kapit bahay namin at kami rin', 'Misunderstanding', 'Purok 3', '2025-04-24', '01:04:00', 'Sobrang ingay ng speaker nila. Hindi makatulong yung anak ko na 1year old palang', '', 'Settled'),
(52, 41, 'Kagawad 3', 'Kwarog Mendez', 'Incident', 'Kanto ng purok 3 at 4', '2025-04-24', '10:22:00', 'Nanakawan', 'Na Recovered Na Yung Nanakaw Na Cellphone ', 'Settled'),
(53, 41, '', 'Tricycle drivers ', 'Concern in surroundings', 'Near Plasa of Purok 3', '2025-04-30', '11:41:00', 'Putol na poste ng kuryente', '', 'Active'),
(54, 37, '', 'Manong Juan', 'Misunderstanding', 'Near plaza', '2025-05-08', '23:26:00', 'Walang kuryente ', '', 'Active'),
(55, 57, 'kapitan', 'Tricycle driver', 'Concern in surroundings', 'near plaza', '2025-05-13', '06:33:00', 'sirang daan', 'okay na po siya', 'Settled');

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
(1, 'Tarlac', 'Paniqui', 'Carino', '0919-1234569', 'VISION\r\n\r\nTo attain the above vision, the basic services must be available to a majority of the people of Paniqui.\r\n\r\nMISSION\r\n\r\nThe municipality of the Paniqui envision as the center for trade, commerce and industry, education and agro-tourism in Northern Tarlac inhabited by God-fearing, healthy, self-reliant, and well-disciplined citizenry who live in a peaceful, environment-friendly and disaster-resilient community and globally competitive economy governed by reliable and responsible leadership. ', '13052025042448cropped-cropped-40060795.jpg', '28032025003451images(1).jpeg', '28032025003451images.jpeg');

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
(22, 'Mariselda Madamba ', '11', '2', '2023-10-02', '2026-10-02', 'Active'),
(23, 'Jerry C. Jimenez', '10', '2', '2023-10-02', '2026-10-02', 'Active'),
(24, 'Raymond L. Melchor ', '4', '2', '2023-10-02', '2026-10-02', 'Active'),
(25, 'Marvin F. Cortez', '11', '2', '2023-10-02', '2026-10-02', 'Active'),
(26, 'Gregorio M. Domingo ', '3', '2', '2023-10-02', '2026-10-02', 'Active'),
(27, 'Cherry Melchor ', '11', '3', '2023-10-02', '2026-10-02', 'Active'),
(28, 'Orlando M. Jimenez', '11', '1', '2023-10-02', '2026-10-02', 'Active'),
(29, 'Alfredo J. Medrano', '11', '2', '2023-10-02', '2026-10-02', 'Active'),
(30, 'Romer M. Salvador', '11', '2', '2023-10-02', '2026-10-02', 'Active'),
(31, 'Jonathan Dugay', '11', '4', '2025-04-01', '2025-07-18', 'Active');

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
(9, 'Pols water refilling station ', 'Paul Christian Deliña ', 'Janet Enriquez ', 'Water refilling station ', '2025-05-12');

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
(1, 'Barangay Captain', 1),
(2, 'Barangay Kagawad', 2),
(3, 'SK Chairman', 3),
(4, 'Secretary', 4),
(5, 'Treasurer', 5);

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
(1, '09496042760', 'Kagawad Mariselda '),
(2, '09213655793', 'Kagawad Jerry '),
(3, '09236652608', 'Kagawad Raymond '),
(4, '09984033341', 'Kagawad Alfredo'),
(5, '09692325768', 'Kagawad Marvin'),
(6, '09292528579', 'Kagawad Romer'),
(7, '09695883189', 'Kagawad Gregorio '),
(8, '09391057259', 'SK Chairman Cherry '),
(9, '09682434567', 'Secretary'),
(10, '09076255580', 'Barangay Captain Orlando '),
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
(1, 'admin', '', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'administrator', '20250407032839174399651967f34667800a9.png', '2021-05-03 02:33:03', 1),
(141, 'tracy01', 'pedro@gmail.com', '73513d168eaa00412d4cbacbffb70edf5ebe4ece', 'user', '', '2025-03-24 14:40:58', 1),
(142, 'Poldel', 'poldel26@gmail.com', '84aa3cec54e1c7f205f980b92177e747106083d6', 'user', '', '2025-03-28 00:08:50', 1),
(143, 'kagawad1', '', '272460989894a7a8dd6715bdab8be7b3c0e66796', 'staff', NULL, '2025-03-28 00:15:11', 0),
(144, 'jayvan01', '.@gmail.com', 'f28eefd76f78f09890bdef6af98bb8602b3ff84e', 'user', '', '2025-04-01 02:13:24', 1),
(145, 'rhegz11', 'rparceo_emerald@yahoo.com', '43b123bb072fbc6f5d2834cb03dfbb09658df2ea', 'user', 'profile_20250410065330174426801067f76aeac4fd6.jpg', '2025-04-10 06:53:30', 1),
(146, 'tracy', 'mercadotracy@gmail.com', '13b29251df8b2d4e1ce3c0b67419486e1818433e', 'user', NULL, '2025-04-10 09:12:07', 1),
(147, 'Paul', 'poldel@gmail.com', 'c3687ab9880c26dfe7ab966a8a1701b5e017c2ff', 'user', '20250411121934174433077467f860165ff9d.jpg', '2025-04-11 00:13:08', 1),
(148, 'josie@gmail.com', 'josie@gmail.com', 'c4a7b0a74b110afa6ce74ce9397bafe483dee631', 'user', NULL, '2025-04-18 10:17:30', 1),
(149, 'romeo01', 'romeo@gmail.com', 'fe5f78125f1d2ef6bf582221ae68b0945c575ebd', 'user', NULL, '2025-04-18 10:19:29', 1),
(151, 'Angel', 'angel@gmail.com', 'e7e0012d7c5d6a237e9c2fa621e20e5ee9a596d8', 'user', NULL, '2025-04-19 04:53:19', 1),
(152, 'michelle', 'michelle@gmail.com', '1dc42ba79efa07f518d939be8452d6f35ad3ad01', 'user', NULL, '2025-04-19 04:55:47', 1),
(153, 'johnrome', 'johnrome@gmail.com', '5450c5c9f41e0f6de227c137bb2103d7d6a86d06', 'user', NULL, '2025-04-19 04:59:12', 1),
(154, 'lyka', 'lyka@gmail.com', 'a91796864de47e307d8f80a62e6b9492f03e0e1c', 'user', NULL, '2025-04-29 08:31:19', 1),
(155, 'Alex', 'alex@gmail.com', '64542dbabb81dfd446e0cf4f319567c72ee57c7b', 'user', '20250430041208174602952868124bd82ccd0.JPG', '2025-04-30 11:17:34', 1),
(156, 'Justine021213', 'justinewaynefajardo02@gmail.com', '1c22bab5674e213caa7769298e0da4b64ef25e0e', 'user', 'profile_202505110858531746953933682066cde4075.jpeg', '2025-05-11 08:58:53', 1),
(157, 'Mark Anthony ', 'hakdugen12345@gmail.com', '8c3d4271af6f872386344e0f94f2ac6e54d93da1', 'user', 'profile_202505120234031747060443682206db5aac6.jpeg', '2025-05-12 14:34:03', 1),
(158, 'Kylii', 'Kyliii@gmail.com', '5d0c3ba1276b3be83668cdaabd52933a8e335d9b', 'user', 'profile_202505120242201747060940682208cc815bb.jpeg', '2025-05-12 14:42:20', 1),
(159, 'Jayvi', 'JayviAquino@gmail.com', '7dc816887b51eb8cff753930208460743ceb9b02', 'user', NULL, '2025-05-13 02:46:31', 1),
(160, 'Mak', 'mak@gmail.com', 'ada02777525b865bbcff02cfdaa4e25b1df80ef1', 'user', 'profile_2025051302492617471045666822b336e9f99.jpg', '2025-05-13 02:49:26', 1),
(161, 'Topher', 'Christopher@gmail.com', '96816614fda701873d570554163933c499382017', 'user', 'profile_2025051302514117471047016822b3bd882a9.jpg', '2025-05-13 02:51:41', 0),
(162, 'Carl', 'Carl@gmail.com', '517d4ebb9c6ba5d24ad22b12b206fa478ecdd7bb', 'user', 'profile_2025051302534317471048236822b437c59a1.jpg', '2025-05-13 02:53:43', 0),
(163, 'Marione', 'marione@gmail.com', '5e94a44b74c533bf1d4e40307b87cc4b01e7f23b', 'user', 'profile_2025051302561317471049736822b4cdd3aef.jpg', '2025-05-13 02:56:13', 1),
(164, 'Paolo', 'paolo@gmail.com', 'a64eabdd15e7cdb74a1aebab6d3c9034124740a7', 'user', NULL, '2025-05-13 06:19:07', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_logs`
--
ALTER TABLE `admin_logs`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `admin_logs`
--
ALTER TABLE `admin_logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=421;

--
-- AUTO_INCREMENT for table `announcements`
--
ALTER TABLE `announcements`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `certificates`
--
ALTER TABLE `certificates`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `certificate_requests`
--
ALTER TABLE `certificate_requests`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=147;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=150;

--
-- AUTO_INCREMENT for table `purok`
--
ALTER TABLE `purok`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `residents`
--
ALTER TABLE `residents`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `staff_logs`
--
ALTER TABLE `staff_logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tblblotter`
--
ALTER TABLE `tblblotter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `tblpermit`
--
ALTER TABLE `tblpermit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tblposition`
--
ALTER TABLE `tblposition`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=165;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
