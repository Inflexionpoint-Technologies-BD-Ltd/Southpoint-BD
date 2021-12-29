-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 29, 2021 at 10:48 AM
-- Server version: 10.3.32-MariaDB-log-cll-lve
-- PHP Version: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `soutpzry_southpoint`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `title`, `image`, `content`, `created_at`, `updated_at`) VALUES
(3, 'Company Introduction', 'images/RklrIzpXwccLSi8eghSX3uaY1OnbVq3p6oG0G3cE.png', 'Bangladesh with a teeming population of approximately 180 million people is mostly dependent on her inbound Remittances, now boasting of a whopping 25 Billion Dollars per annum.\r\n\r\nThe chief commodities of export include Jute, Tea, Ceramics, Leather Products, Garments and profoundly the export of Manpower and this valiant sector injects or contributes a healthy ratio of 9% of our total GDP directly, the core of our National Exchequer.\r\n\r\nThis rapidly growing Manpower sector of Bangladesh comprises 2,000 (Two Thousand) Government Licenced Recruiting Agencies and South Point Overseas Limited (RL-622) with a through professional outfit and a technically advanced Training Centre along with a Joint Venture Partnership with Singapore Piling and Civil Engineering Pte. Ltd. which is presently known as Singapore Engineering & Construction Pte. Ltd. and close association with BCA of the Government of Singapore provide constructive impetus to organize the complete chain of training and test under the instructional curriculum of the Government of Singapore.\r\n\r\nSouth Point Overseas Ltd. established an Overseas Training Centre (OTC) under the name of ‘Singapore Engineering & Construction - South Point Skills Centre’ located at Ashulia, 12 km North-West of Hazrat Shahjalal Intl. Airport stretching over a landscape of more than 9 acres with a covered space exceeding 2,00,000 sft. Singapore Engineering & Construction - South Point Skills Centre is currently the largest Training & Test Centre in Bangladesh. \r\n\r\nWithin two decades of operations, South Point Overseas Ltd. has successfully despatched exactly 20,116 workers to Singapore alone as of the last date of August 2021. Details are as under:', '2021-08-04 00:18:30', '2021-09-14 12:21:33');

-- --------------------------------------------------------

--
-- Table structure for table `areas`
--

CREATE TABLE `areas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `area` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `client_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `areas`
--

INSERT INTO `areas` (`id`, `area`, `client_id`, `created_at`, `updated_at`) VALUES
(1, 'Singapore Piling & Civil Engineering Pte. Ltd.', '1', '2021-08-15 04:06:43', '2021-08-15 04:28:52'),
(3, 'Li Hua Construction Pte Ltd.', '1', '2021-08-15 04:42:28', '2021-08-15 04:42:28'),
(4, 'Kenzo Construction Pte Ltd.', '1', '2021-08-15 04:43:39', '2021-08-15 04:43:39'),
(5, 'Lim Sin Kook Construction Pte Ltd.', '1', '2021-08-15 04:43:49', '2021-08-15 04:43:49'),
(6, 'Costoba Design and Build Pte Ltd.', '1', '2021-08-15 04:43:57', '2021-08-15 04:43:57'),
(7, 'Zim Sia Construction Pte Ltd.', '1', '2021-08-15 04:44:11', '2021-08-15 04:44:11'),
(8, 'W&P Construction Pte Ltd.', '1', '2021-08-15 04:44:19', '2021-08-15 04:44:19'),
(9, 'Transasia Builders', '1', '2021-08-15 04:44:29', '2021-08-15 04:44:29'),
(10, 'Boon Tian Construction Pte Ltd.', '1', '2021-08-15 04:44:45', '2021-08-15 04:44:45'),
(11, 'Zed Speed Engineering and Construction Pte Ltd. SINGAPORE', '1', '2021-08-15 04:44:57', '2021-08-15 04:44:57'),
(12, 'A.S.B. Pte Ltd. – Chan Chook Farm Pte Ltd.', '1', '2021-08-15 04:45:06', '2021-08-15 04:45:06'),
(13, 'Camelian Building Construction Pte Ltd.', '1', '2021-08-15 04:45:19', '2021-08-15 04:45:19'),
(14, 'Accolade Construction Pte Ltd.', '1', '2021-08-15 04:45:28', '2021-08-15 04:45:28'),
(15, 'Rowang Builder Singapore Pte Ltd.', '1', '2021-08-15 04:45:35', '2021-08-15 04:45:35'),
(16, 'Thong Hang Construction and Trading Singapore Pte Ltd.', '1', '2021-08-15 04:45:43', '2021-08-15 04:45:43'),
(17, 'Asiafirst Construction Pte Ltd.', '1', '2021-08-15 04:45:53', '2021-08-15 04:45:53'),
(18, 'Tengs Construction Pte Ltd.', '1', '2021-08-15 04:46:03', '2021-08-15 04:46:03'),
(19, 'Growth Land Pte Ltd.', '1', '2021-08-15 04:46:10', '2021-08-15 04:46:10'),
(20, 'View Hoock Building and Civil Construction Pte Ltd', '1', '2021-08-15 04:46:20', '2021-08-15 04:46:20'),
(21, 'Kasem Industries SDN.BHD.', '4', '2021-08-15 10:06:04', '2021-08-15 10:06:04'),
(23, 'Davex Engineering (M) SDN.BHD.', '4', '2021-08-15 10:09:25', '2021-08-15 10:09:25'),
(24, 'Win Wood Work SDN.BHD.', '4', '2021-08-15 10:09:39', '2021-08-15 10:09:39'),
(25, 'Noble Carpets SDN.BHD.', '4', '2021-08-15 10:09:49', '2021-08-15 10:09:49'),
(26, 'Southern Furniture SDN.BHD', '4', '2021-08-15 10:09:56', '2021-08-15 10:09:56'),
(27, 'B.T. Industries.', '4', '2021-08-15 10:10:04', '2021-08-15 10:10:04'),
(28, 'Gento Precision Engineering SDN.BHD.', '4', '2021-08-15 10:10:12', '2021-08-15 10:10:12'),
(29, 'Kasem Industries SDN.BHD.', '4', '2021-08-15 10:10:20', '2021-08-15 10:10:20'),
(30, 'Davex Engineering (M) SDN.BHD.', '4', '2021-08-15 10:10:27', '2021-08-15 10:10:27'),
(31, 'Win Wood Work SDN.BHD.', '4', '2021-08-15 10:10:34', '2021-08-15 10:10:34'),
(32, 'Noble Carpets SDN.BHD.', '4', '2021-08-15 10:10:48', '2021-08-15 10:10:48'),
(33, 'Southern Furniture SDN.BHD.', '4', '2021-08-15 10:10:55', '2021-08-15 10:10:55'),
(34, 'B.T. Industries.', '4', '2021-08-15 10:11:05', '2021-08-15 10:11:05'),
(35, 'Arabian Gulf Co.', '5', '2021-08-15 10:11:15', '2021-08-15 10:11:15'),
(36, 'Twaik Est.', '5', '2021-08-15 10:11:21', '2021-08-15 10:11:21'),
(37, 'Zahran Oper. & Main . Co. Ltd.', '5', '2021-08-15 10:11:29', '2021-08-15 10:11:29'),
(38, 'Khaled Bin Ibrahim Al Babtain', '5', '2021-08-15 10:11:34', '2021-08-15 10:11:34'),
(39, 'Arabian Maintenance & Technical Services Co. Ltd.', '5', '2021-08-15 10:11:42', '2021-08-15 10:11:42'),
(40, 'Waleed Alhakami Est.', '5', '2021-08-15 10:11:48', '2021-08-15 10:11:48'),
(41, 'National Cleaning Company', '6', '2021-08-15 10:11:58', '2021-08-15 10:11:58'),
(42, 'Wael Al-Nusif Trading & Co. W.L.L.', '6', '2021-08-15 10:12:05', '2021-08-15 10:12:05'),
(43, 'Ghanem Hamd Al-Dabbous', '6', '2021-08-15 10:12:11', '2021-08-15 10:12:11'),
(44, 'Care Services Kuwait', '6', '2021-08-15 10:12:18', '2021-08-15 10:12:18'),
(45, 'Damac Draigh general Trading Co.', '6', '2021-08-15 10:12:25', '2021-08-15 10:12:25'),
(46, 'Damac Al Otaibai', '7', '2021-08-15 10:12:32', '2021-08-15 10:12:32'),
(47, 'Bel hasa Projects LLC.', '7', '2021-08-15 10:12:38', '2021-08-15 10:12:38');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `top` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `left` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `title`, `status`, `top`, `left`, `created_at`, `updated_at`) VALUES
(1, 'Singapore', 'active', '57', '74', '2021-08-14 11:51:53', '2021-09-08 13:46:42'),
(4, 'Malaysia', 'active', '60', '74', '2021-08-14 12:07:31', '2021-08-20 22:26:59'),
(5, 'Saudi Arabia', 'active', '48', '58', '2021-08-14 12:08:06', '2021-08-20 22:23:12'),
(6, 'Kuwait', 'active', '46', '59', '2021-08-14 12:08:33', '2021-08-20 22:26:37'),
(7, 'UAE', 'active', '48', '61', '2021-08-14 12:08:47', '2021-09-10 15:42:35'),
(8, 'Serbia', 'hold', '40', '52', '2021-09-10 17:59:28', '2021-09-10 18:02:37'),
(9, 'Korea', 'hold', '43', '80', '2021-09-10 18:03:35', '2021-09-10 18:05:01'),
(10, 'Japan', 'hold', '43', '84', '2021-09-10 18:06:01', '2021-09-10 18:07:40');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `map` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `place` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `title`, `map`, `place`, `address`, `tel`, `email`, `created_at`, `updated_at`) VALUES
(2, 'Head Office', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d29209.13785097664!2d90.415244!3d23.777949!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x1b87fe1c61dae7f4!2sSouth%20Point!5e0!3m2!1sen!2sbd!4v1628406672340!5m2!1sen!2sbd', 'South Point Head Office', 'House# 6-A, Road# 2, Gulshan-1, Dhaka-1212, Bangladesh', 'Tel: +880-2-222261057-8', 'corpoff@southpointbd.com', '2021-08-08 00:54:36', '2021-09-16 10:21:08'),
(3, 'Training Center', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d466843.6740928163!2d90.312933!3d23.917397!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xed97ee300b4dd6b3!2sSingapore%20Piling%20South%20Point%20Test%20Centre!5e0!3m2!1sen!2sbd!4v1628408048976!5m2!1sen!2sbd', 'South Point Training Center', 'Goshbag, Zirabo, Ashulia, Savar, Dhaka, Bangladesh', 'Tel: +88-02-7791375, Fax: 02-7791376', 'training@southpointbd.com', '2021-08-08 01:38:17', '2021-09-16 10:20:08');

-- --------------------------------------------------------

--
-- Table structure for table `documents`
--

CREATE TABLE `documents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `documents`
--

INSERT INTO `documents` (`id`, `title`, `created_at`, `updated_at`) VALUES
(4, 'Recruiting License', '2021-08-12 05:05:27', '2021-08-12 05:05:27'),
(5, 'Documents for Singapore', '2021-08-12 05:06:32', '2021-08-12 05:06:32'),
(6, 'Documents for Saudi Arabia', '2021-08-12 05:08:34', '2021-08-12 05:08:34');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `footers`
--

CREATE TABLE `footers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tel` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `footers`
--

INSERT INTO `footers` (`id`, `title`, `address`, `tel`, `email`, `created_at`, `updated_at`) VALUES
(1, 'SOUTH POINT OVERSEAS LIMITED', 'House # 6-A, Road # 2, Gulshan-1, Dhaka-1212,        Bangladesh', '+880-2-222261057-8', 'corpoff@southpointbd.com', '2021-08-02 05:14:31', '2021-09-16 14:41:05'),
(2, 'TRAINING CENTRE', 'Ghoshbag, Zirabo, Ashulia, Savar, Dhaka, Bangladesh', '+880-2-44071011', 'training@southpointbd.com', '2021-08-03 04:10:25', '2021-09-11 12:18:10');

-- --------------------------------------------------------

--
-- Table structure for table `home_contets`
--

CREATE TABLE `home_contets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_contets`
--

INSERT INTO `home_contets` (`id`, `title`, `content`, `created_at`, `updated_at`) VALUES
(1, 'Company Highlights', 'Largest Training & Test Centre facility in Bangladesh.\r\nLocated on the Highway over an area of 9 Acres’ land.\r\nState of Art facilities of training, accommodation, and dining.\r\nFour storied accommodation facilities for over 3000 students.\r\nDining and cooking facilities where over 1000 students can dine at a time.\r\nTwo separate PE-approved steel-structured Sheds of over 50,000 ft each for Training & Testing.\r\nInfra-structural facilities to train on 22 Construction Trades.\r\nThe excellent passing rate of over 85% per monthly Test conducted by BCA, Singapore.\r\nAtomic Energy certified own X-ray Room for Welding Trade.\r\n7000 sft separate Training and Test Shed for Welding Trade.\r\nOwn Power Supply Generation for the whole campus besides Govt. Power Supply provisions.', '2021-08-20 01:37:05', '2021-08-20 01:37:05');

-- --------------------------------------------------------

--
-- Table structure for table `infrastructures`
--

CREATE TABLE `infrastructures` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `infrastructures`
--

INSERT INTO `infrastructures` (`id`, `title`, `content`, `created_at`, `updated_at`) VALUES
(1, 'South Point Training And Selection Centre', 'Professional approach in selecting manpower is the specialty of South Point in order to ensure development of human resources in the best form. Keeping in view of the same, South Point Training and Selection Centre has been established. This is a full-fledged training institute. It provides various training to develop the skills and language proficiency. The institute also caters training according to specific requirement of employer. The institute is also used as a selection centre because of its inbuilt facilities. Success story of ‘South Point Overseas Limited” is the result of its state of the art facilities and well-knit team work comprising of qualified & resourceful instructors from different discipline.', '2021-08-05 01:36:58', '2021-08-05 01:53:39');

-- --------------------------------------------------------

--
-- Table structure for table `infrastructure_images`
--

CREATE TABLE `infrastructure_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `infrastructure_images`
--

INSERT INTO `infrastructure_images` (`id`, `title`, `image`, `content`, `created_at`, `updated_at`) VALUES
(4, 'Training shade 1', 'images/VJ6ZSU6ZwhyLSoUWI0sCuTgtz8USYoqszO3AV83N.jpg', 'The 50,000 sft training shade constructed to accommodate the training of various trades.', '2021-08-05 03:38:34', '2021-09-11 13:09:16'),
(5, 'Training Shade 2', 'images/E7fQ1LIG9uj4WF7IHik6qrjQYrLyB3nijHEpwAJA.jpg', 'Recently constructed 50,000 sft training shade to facilitate the growing needs of workers.', '2021-08-05 03:39:13', '2021-09-11 13:11:25'),
(6, 'Additional Training Shade', 'images/amy3KZf25nlypS0uOVQpcCl0oJTF7MJcqFSHTl8W.jpg', 'To ensure a focused environment, an individual fully equipped Welding Shade comprising of 7,000 sft is established.', '2021-08-05 03:40:35', '2021-09-16 14:58:32'),
(7, 'X-Ray Room', 'images/NSkZ7P3pjXfN24la8ThBOR21aSFslhuynIGudf1N.jpg', 'State-of-the-art x-ray room, equipped with the latest x-ray machine, is used for the welding trade.', '2021-08-05 03:41:00', '2021-09-16 15:01:00'),
(8, 'Central Store', 'images/IxDlI8LwnixhHecpP8HjzSHdOyvvQ7tefOvVb0GK.jpg', '6,000 sft central store ensures all the required items for training and other activities.', '2021-08-05 03:41:50', '2021-09-16 15:05:55'),
(9, 'Students Dormitory', 'images/JaWVEvGwOJWh92ZeoG8IGAzqr1SUTawzKQy3MUmg.jpg', '4 storied dormitory accommodates 1000 students.', '2021-08-05 03:42:20', '2021-09-16 15:07:48'),
(10, 'Dining & Kitchen', 'images/S5ePu6ZFNEan1eOO2B1evuoHn1F5IczEBXHQbW1r.jpg', 'Fully equipped Dining & Kitchen shades ensuring hygiene environment and quality food.', '2021-08-05 03:43:20', '2021-09-16 15:12:31'),
(11, 'Classroom', 'images/njU9ispwhNPaeC0OnmAzEzYcVr920vS4W85rkluP.jpg', 'The test room has tested more than 35,000 trainees already, with a passing rate of above 85%.', '2021-08-05 03:43:53', '2021-09-16 15:17:56'),
(12, 'Shower Zone', 'images/LyigM47cjDpIpKdCH7QdInrxosAVL3Cv72YNWCeR.jpg', 'A complete Shower Zone with modern amenities', '2021-12-28 12:21:30', '2021-12-28 14:07:12'),
(13, 'Dormitory-1', 'images/9xQo7qkPJ9Re4183nmHMlGiNnCzOMYMS9csIdM4I.jpg', 'Front View of the Dormitory-1', '2021-12-28 13:07:11', '2021-12-28 13:07:11'),
(14, 'Dormitory-2', 'images/iDMAoVLxkLNNfVf550evnk1ifgWBPFdOFc81P7oG.jpg', 'Front View of the Dormitory-2', '2021-12-28 13:34:58', '2021-12-28 13:34:58'),
(15, 'Dormitory-1 & 2 With Toilet Zone', 'images/SraaTti3b07A8pW0eT0um0U0mhNFRW45mAiaKduT.jpg', 'Another View of the Dormitory-1 & 2 with Toilet Zone', '2021-12-28 13:38:41', '2021-12-28 14:14:08'),
(16, 'Classroom', 'images/Tolj5P8SC5MdRB2NbvTVpA3er01rLExaHYegie0q.jpg', 'Front View (3D) of the Modern Classroom', '2021-12-28 13:44:41', '2021-12-28 14:08:28'),
(17, 'Classroom', 'images/1Kt8fCpCJAvL7Z2R8XJ3dn93gw30gEAyrhEkSaTj.jpg', '3D View of the Classroom in different angle', '2021-12-28 13:47:26', '2021-12-28 14:09:58'),
(18, '3 Storied Office Building', 'images/coqODmkxMXfSCIb6oQ3DYfX5xEUH5qNw5XR7HG3P.jpg', '3D View of 3 Storied Office Building with Reception, Recruitment Room, Admin Block, IT Room etc', '2021-12-28 13:54:55', '2021-12-28 14:12:22'),
(19, 'Training & Testing Shade', 'images/R2ODOhoSnuT5TYlEQbdg0stIjYUGSc8swiPVIA1C.jpg', 'A modern Training & Testing Shade with approx 30,000 sft including Surveillance system', '2021-12-28 14:23:38', '2021-12-28 14:26:17');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `name`, `position`, `image`, `message`, `created_at`, `updated_at`) VALUES
(3, 'Manzur Kader', 'Managing Director', 'images/4tJAtsuWeMCAgXMwqZmBTePLXSdTkQ9JiyFQ5Peg.jpg', 'Way back in 1998, South Point Traders Limited stepped into Training Business alongside our sister concern, South Point Overseas Limited (RL-622), which has made a deep impact on the vibrating Export Sector of Bangladesh, that is the export of manpower to our valued overseas clients.\r\n\r\nOver a span of two decades of operations in the turbulent arena of manpower, the training house has now bloomed fully and has matured up as a specialized broad-based business house with the corporate slogan “Challenging the new frontiers’’.\r\n\r\nIn fact, my innate desire was to enter the World of International Trading and Commerce during the successful handling of the Human Resources deployment to various parts of the world.\r\n\r\nI would like to put my hands together in appreciation of our Professional Staff Members who are highly dedicated and innovative to meet our challenges.\r\n\r\nI owe much for today’s South Point Traders Limited claim to be a top notcher business house, including the grand success in the arena of recruitment services, where commitments stand on its value-based morals and I strongly believe that with your valued patronage South Point Traders Limited can touch the zenith of professionalism and hold the spectrum of overall success. \r\n\r\nI thank you sincerely and welcome you all to the South Point Family.', '2021-08-04 00:14:24', '2021-09-07 17:17:46');

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
(4, '2021_07_27_110700_create_trades_table', 1),
(5, '2021_07_28_082543_create_trainings_table', 2),
(7, '2021_07_29_034334_create_abouts_table', 3),
(9, '2021_07_29_055654_create_messages_table', 4),
(10, '2021_07_29_102123_create_profiles_table', 5),
(13, '2021_08_01_071937_create_infrastructure_images_table', 8),
(14, '2021_08_02_045146_create_contacts_table', 9),
(15, '2021_08_02_073425_create_sliders_table', 10),
(17, '2021_08_02_104839_create_footers_table', 12),
(18, '2021_08_01_053951_create_infrastructures_table', 13),
(26, '2021_08_10_061805_create_recruitments_table', 14),
(27, '2021_08_10_061851_create_documents_table', 14),
(28, '2021_08_10_061910_create_papers_table', 14),
(29, '2021_08_10_100854_create_services_table', 14),
(32, '2021_08_01_033033_create_clients_table', 15),
(33, '2021_08_15_093141_create_areas_table', 16),
(34, '2021_08_02_100029_create_home_contets_table', 17);

-- --------------------------------------------------------

--
-- Table structure for table `papers`
--

CREATE TABLE `papers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `document_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `papers`
--

INSERT INTO `papers` (`id`, `image`, `content`, `document_id`, `created_at`, `updated_at`) VALUES
(4, 'images/sntJPoetPcXjnUeqbJN9i8gqog0iNp9jRcZYcc4m.jpg', 'Recruiting License', 4, '2021-08-12 05:06:08', '2021-10-04 13:25:06'),
(5, 'images/8CarZCY3f0TknWhTpJ82jgxqSaWfRkWLN4T59pjr.jpg', 'Notarial Certificate', 5, '2021-08-12 05:07:05', '2021-08-12 05:07:05'),
(6, 'images/1MzVqH0idRMBTQKjFgGKnlDyKydbzmk3NiTXjyFS.jpg', 'Power of Attorney', 5, '2021-08-12 05:07:29', '2021-08-12 05:07:29'),
(7, 'images/lmJ8Jn1oDWSa3VmF4k7ZZBFC8OO3DL7BOHQhSG5I.jpg', 'Demand Letter', 5, '2021-08-12 05:07:52', '2021-08-12 05:07:52'),
(8, 'images/gwBb7HgyiOS3tNRtI2tBCP2vMfPALF5M58dUJBBM.jpg', 'Work Agreement', 5, '2021-08-12 05:08:11', '2021-08-12 05:08:11'),
(9, 'images/uodyAMxybtB4Y2ouEzyauxIOrCutE1HlxKpreHlW.jpg', 'Authorization Letter', 6, '2021-08-12 05:09:02', '2021-09-20 09:24:44'),
(10, 'images/Zreh35EfICIbPsxeotjf01U50z57O6fBnoVZjL2G.jpg', 'Power of Attorney', 6, '2021-08-12 05:09:27', '2021-09-20 09:27:33'),
(11, 'images/73GhnjQQ5mamK7oM5ENfwJZ0ix5cfe4gbcaCuRvQ.jpg', 'Demand Letter', 6, '2021-08-12 05:09:47', '2021-09-20 09:25:45');

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
-- Table structure for table `profiles`
--

CREATE TABLE `profiles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `profiles`
--

INSERT INTO `profiles` (`id`, `title`, `content`, `created_at`, `updated_at`) VALUES
(3, 'Name of the Company', 'South Point Overseas Limited.', '2021-08-04 00:21:45', '2021-08-04 00:21:45'),
(4, 'Date of Registration', '20th December, 1998.', '2021-08-04 00:22:04', '2021-08-04 00:22:04'),
(5, 'License Number', 'RL-622', '2021-08-04 00:24:31', '2021-09-16 14:32:31'),
(6, 'Address & contacts of Corporate Office', 'House # 6-A, Road # 2, Gulshan-1, Dhaka-1212, Bangladesh.Tel. # +880-2-222261057-8, E-mail: corpoff@southpointbd.com, Website: southpointbd.com', '2021-08-04 00:24:47', '2021-09-16 09:31:58'),
(7, 'Training & Testing Centre', 'Singapore Engineering & Construction - South Point Skills Centre', '2021-08-04 00:25:01', '2021-09-11 09:39:27'),
(8, 'Address of Training & Test Centre', 'Goshbag, Zirabo, Ashulia, Savar, Dhaka, Bangladesh.', '2021-08-04 00:25:17', '2021-09-16 09:32:39'),
(9, 'Ticketing & Travelling Agency', 'Victory Travels Ltd. and Anowar Tours & Travels Ltd. Dhaka, Bangladesh.', '2021-08-04 00:25:44', '2021-09-11 09:51:03'),
(10, 'Medical Centre', 'Gulshan Clinic Limited. Dhaka, Bangladesh.', '2021-08-04 00:25:59', '2021-09-11 09:44:56'),
(11, 'Sister Concerns', 'South Point Traders Ltd. & South Point Holdings (Pte.) Ltd.', '2021-08-04 00:26:13', '2021-08-04 00:26:13'),
(12, 'Bankers', 'Standard Chartered Bank, United Commercial Bank Ltd, Mutual Trust Bank Ltd, Eastern Bank Ltd.', '2021-08-04 00:26:33', '2021-09-16 14:30:14'),
(13, 'Number of employees', 'Corporate Office- 35 & Training Centre- 75', '2021-08-04 00:26:48', '2021-09-16 14:31:44'),
(14, 'Membership', 'Bangladesh Association of International Recruiting Agents (BAlRA).\r\nDhaka Chamber of Commerce and Industries (DCCI).', '2021-08-04 00:27:04', '2021-08-04 00:27:04');

-- --------------------------------------------------------

--
-- Table structure for table `recruitments`
--

CREATE TABLE `recruitments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `recruitments`
--

INSERT INTO `recruitments` (`id`, `title`, `content`, `created_at`, `updated_at`) VALUES
(1, 'Recruitment', 'Recruitment of workers is done at the corporate office and the center’s recruitment cell. A thorough security background of every individual, minimum educational level, physical appearance & endurance, fitness level, and previous experiences are the prerequisites considered when selecting a trainee. After recruitment, each trainee has to go through a thorough medical test at our approved Medical Centre. Trainees requiring additional training are then mobilized at the center as per mobilization schedules. Trainees are issued with working dress, safety boots, hand gloves, sun caps, and helmets as standard issues.', '2021-08-11 21:29:04', '2021-08-12 05:01:23');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `content`, `created_at`, `updated_at`) VALUES
(1, 'Selection and recruitment of workers in the appropriate category.', '2021-08-12 05:01:48', '2021-08-12 05:01:48'),
(2, 'Provide Skills Development Training in the construction industry trades.', '2021-08-12 05:01:59', '2021-08-12 05:01:59'),
(3, 'Conduct Skills Tests.', '2021-08-12 05:02:09', '2021-08-12 05:02:09'),
(4, 'Undertake medical fitness tests.', '2021-08-12 05:02:16', '2021-08-12 05:02:16'),
(5, 'Visa Processing.', '2021-08-12 05:02:23', '2021-08-12 05:02:23'),
(6, 'Undertake completion of Ministry of Manpower formalities.', '2021-08-12 05:02:30', '2021-08-12 05:02:30'),
(7, 'Make traveling arrangement.', '2021-08-12 05:02:36', '2021-08-12 05:02:36'),
(8, 'Maintain database of worker profiles.', '2021-08-12 05:02:45', '2021-08-12 05:02:45');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `image`, `content`, `created_at`, `updated_at`) VALUES
(13, 'images/8FdkInhRcsGSFvKOVrmBv4egea8KPv8K0DJLZpF5.png', 'Welcome to South Point Overseas Limited', '2021-09-10 16:26:18', '2021-10-03 16:07:18'),
(17, 'images/txVMoAiU7zBdDukprbesORZjgtxgpldlo6UK8HiZ.jpg', 'Historic Mural created by Zainul Abedin aptly named \"The Struggle\" expressing the hardworking ethics of the Bangladeshi People', '2021-09-15 18:45:48', '2021-09-19 20:51:54'),
(18, 'images/OvmARYgRCzZvnmrnOEaurUSDUHscITxkQvjWUHfV.gif', 'Historical speech of 7th March 1971, Father of the Nation, Bangabandhu, now restored in the heritage of UNESCO.', '2021-09-15 18:55:10', '2021-09-19 20:52:35'),
(19, 'images/Iy9JEU8YUyy7ggGCkR5NONAChsBCTDPpEygWxd5f.gif', 'Historical surrender by Lt. Gen Niazi (in charge of Pakistan Army) and a nation was born on 16th December 1971.', '2021-09-15 18:58:45', '2021-09-19 20:53:05'),
(20, 'images/x9TkmxeQCwQ4BcV67ZlRortmmg6LPw6mAstGB1mk.jpg', 'Bangladesh & India Head of State signing joint collaboration treaty in 1974.', '2021-09-15 19:03:34', '2021-09-19 20:55:37');

-- --------------------------------------------------------

--
-- Table structure for table `trades`
--

CREATE TABLE `trades` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `trades`
--

INSERT INTO `trades` (`id`, `image`, `content`, `created_at`, `updated_at`) VALUES
(3, 'images/cCGkQAEzvOKABxsiUW4KQ2fMaDI7OlWhpnBjzQgJ.jpg', 'Steel Reinforcement', '2021-08-03 02:01:29', '2021-08-03 02:01:29'),
(4, 'images/qVh7R37bpxNF24zZpxWuupzbGNtfJGlR7FriROdc.jpg', 'Timber Formwork', '2021-08-03 03:39:32', '2021-09-11 11:42:32'),
(5, 'images/kmzICkgvmJ3VvLogZtiH74ikTIhSaGXINsoHHc6z.jpg', 'Plumbing & Pipefitting', '2021-08-03 04:32:05', '2021-09-11 11:42:12'),
(6, 'images/HYaPNDcFCi63nIK34ItHkZORb5AQ5u8cfNBGPsvy.jpg', 'Electrical Wiring Installation', '2021-08-03 04:32:31', '2021-09-11 11:42:53'),
(7, 'images/dryCQKlI8pvxhygipf00t6rH7nT9nWwvIVKHUi49.jpg', 'Waterproofing', '2021-08-03 04:35:54', '2021-09-11 11:43:20'),
(8, 'images/zUB4I7XkesH7vcUrsuwvgDMXliiX71YHPQH8Nc37.jpg', 'Suspended Ceiling Installation (Acoustical)', '2021-08-03 04:36:15', '2021-09-11 11:44:26'),
(10, 'images/fQykY5XDZzPExsIatnDfreBgiNVFMmjDEVvlGzBG.jpg', 'Suspended Ceiling Installation (Fibrous Plaster) Ceiling (FPC)', '2021-08-03 04:37:01', '2021-09-11 11:46:28'),
(11, 'images/uLXGrYqi4NevTIuSr21jjZXChxbOWCVzYhhUqZbu.jpg', 'Doors & Windows Installation (Timber)', '2021-08-03 04:37:20', '2021-09-11 11:47:09'),
(12, 'images/XZeStbVRqKsl8ru7qFl6Db2cnB1PhgvgY5stwfV6.jpg', 'Cladding Installation', '2021-08-03 04:37:38', '2021-09-11 11:47:48'),
(13, 'images/QHI7HjJeniAy2wrRPSpn7dKJMZfei2FrKalWNpVT.jpg', 'Joinery', '2021-08-03 04:38:17', '2021-09-11 11:52:19'),
(14, 'images/zq9PxI627TYdT24p32Ryn9cmQSZMx4X1EKO2uwSt.jpg', 'Ducting Installation for Air-con & Ventilation', '2021-08-03 04:38:36', '2021-09-11 11:53:56'),
(15, 'images/YQMTydld8EA7TA01O3IOBzge746Cg3gsbi4ChICb.jpg', 'Thermal Insulation', '2021-08-03 04:39:03', '2021-09-11 11:54:32'),
(16, 'images/sktHHnuPmLyrYdQxsLEWcufwP0FVRQRioe6xvVnj.jpg', 'Enhanced Aluminium Formwork', '2021-08-03 04:39:18', '2021-09-11 11:55:31'),
(17, 'images/3ToZibDDhI9TsrCafjqSpVkeVE7NUOOmsFSYcgtn.jpg', 'Fire Sprinkler Installation', '2021-08-03 04:39:37', '2021-09-11 11:56:37'),
(18, 'images/iCFuXAJAmUdCe0dE6vzyFj73LYPXKZP05fy51PC7.jpg', 'PIPE FITTING', '2021-08-03 04:39:56', '2021-09-11 11:57:25'),
(19, 'images/UyqMNvp71x57WebfijId6YRuFD7CKLV5rC2NIhOg.jpg', 'STRUCTURAL STEEL FITTING', '2021-08-03 04:40:13', '2021-09-11 11:57:50'),
(20, 'images/z0vsLUtv7wGqgimoFpY4SYH2yHrWhVCE92dO0aDB.jpg', 'PLASTERING', '2021-08-03 04:40:33', '2021-09-11 11:58:06'),
(21, 'images/pT7xGfO5aNIICkxI1nQOOLAvxj6UPvHfD2W0Yu87.png', 'TILING', '2021-08-03 04:40:52', '2021-09-11 11:58:23'),
(22, 'images/3tA6KWYTpEnUzTuWo76bpdxwfG2e3huxtTOHeSMQ.jpg', 'CURTAINWALL Installation', '2021-08-03 04:41:12', '2021-09-11 11:58:54'),
(23, 'images/W4TRrGoqH6JeSPt9lGHs4kHwPMj8GRJ7ubLMXvWU.jpg', 'glazing', '2021-08-03 04:43:45', '2021-08-03 04:43:45'),
(24, 'images/d9p9XFrmITdE2xIiyysq34meeDiLWRovtYVmmRbU.jpg', 'welding', '2021-08-03 04:44:07', '2021-08-03 04:44:07');

-- --------------------------------------------------------

--
-- Table structure for table `trainings`
--

CREATE TABLE `trainings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `trainings`
--

INSERT INTO `trainings` (`id`, `title`, `content`, `created_at`, `updated_at`) VALUES
(1, 'Training Activities', 'Training is the heart of all activities. With that view in mind, South Point Overseas Ltd. has catered for an elaborate training facility through its Training Centre.\r\n\r\nAt Singapore Piling South Point Test Centre, the training never ceases to work. Training strategy is translated into well-rehearsed weekly programs developed to suit the training needs of different groups. The training curriculums are conducted by highly qualified and time tested trainers closely monitored by the Group Supervisors and Training Managers.', '2021-07-28 04:35:05', '2021-07-28 05:38:19'),
(5, 'Final test/ selection', 'On average 60% to 70% trainees from the Final Group qualifies through the simulation test to go for the final test. The test is held every month. Trainees tested for employment in Singapore are tested by the Testers from BUILDING AND CONSTRUCTION AUTHORITY (BCA) of Singapore. The results are declared and published by BCA in about 10 day’s time. Final test for Employers from other countries are done by the center Management in presence of the Employer’s representatives / delegates. At SINGAPORE PILING SOUTH POINT TEST CENTRES some 1200 plus trainees from all trades participate in the final test every month. Successful trainees join employment with their overseas employers in about 8 to 10 weeks time (provided all other administrative arrangements and preparations are settled by the worker) from date of passing the test.', '2021-08-03 03:48:58', '2021-08-03 03:48:58');

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
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Tahmid', 'spoint@agni.com', '2021-08-20 04:00:13', '$2y$10$NqGIb1.ybhoxPG9z0ZOp6eaXERNEFQxZY6xRal2Jsk8qVGaloCfzi', 'gnaAaieJvyBwj71DieJIUtAojH1aa0cHw1JyfobQn1FE2TruzdJvXbL5TB7f', '2021-08-20 04:00:13', '2021-08-20 04:00:13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `areas`
--
ALTER TABLE `areas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `documents`
--
ALTER TABLE `documents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `footers`
--
ALTER TABLE `footers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_contets`
--
ALTER TABLE `home_contets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `infrastructures`
--
ALTER TABLE `infrastructures`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `infrastructure_images`
--
ALTER TABLE `infrastructure_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `papers`
--
ALTER TABLE `papers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `recruitments`
--
ALTER TABLE `recruitments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trades`
--
ALTER TABLE `trades`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trainings`
--
ALTER TABLE `trainings`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `areas`
--
ALTER TABLE `areas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `documents`
--
ALTER TABLE `documents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `footers`
--
ALTER TABLE `footers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `home_contets`
--
ALTER TABLE `home_contets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `infrastructures`
--
ALTER TABLE `infrastructures`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `infrastructure_images`
--
ALTER TABLE `infrastructure_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `papers`
--
ALTER TABLE `papers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `recruitments`
--
ALTER TABLE `recruitments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `trades`
--
ALTER TABLE `trades`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `trainings`
--
ALTER TABLE `trainings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
