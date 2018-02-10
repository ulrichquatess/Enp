-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 19, 2018 at 07:50 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `enp`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` int(10) UNSIGNED NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `content`, `created_at`, `updated_at`) VALUES
(1, 'Am Quatess Software Engineer Hope Your enjoy your stay at this wonderful', '2017-11-26 02:29:06', '2017-11-27 10:44:19'),
(2, 'On This Sites You would learn Many New Interesting Topics Stay Tune and subscribe for more Information', '2017-11-26 02:29:29', '2017-11-27 10:45:43'),
(3, 'Latest Technology Topic By Churchill Mambe', '2017-11-26 02:29:52', '2017-11-27 10:46:17'),
(4, 'Friends cast back together for special', '2017-11-26 02:30:09', '2017-11-26 02:30:09'),
(5, 'Oscar Oscar nominations to be announced', '2017-11-26 02:30:25', '2017-11-26 02:30:25');

-- --------------------------------------------------------

--
-- Table structure for table `businesses`
--

CREATE TABLE `businesses` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `businesses`
--

INSERT INTO `businesses` (`id`, `title`, `content`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Lorem ipsum eu usu assum liberavisse, ut munere praesent complectitur mea. Sit an option maiorum', '<p><span style=\"color: #333333; font-family: Roboto, sans-serif; font-size: 13px;\">Lorem ipsum eu usu assum liberavisse, ut munere praesent complectitur mea. Sit an option maiorum principes. Ne per probo magna idque, est veniam exerci appareat no...</span><span style=\"color: #333333; font-family: Roboto, sans-serif; font-size: 13px;\">Lorem ipsum eu usu assum liberavisse, ut munere praesent complectitur mea. Sit an option maiorum principes. Ne per probo magna idque, est veniam exerci appareat no...</span><span style=\"color: #333333; font-family: Roboto, sans-serif; font-size: 13px;\">Lorem ipsum eu usu assum liberavisse, ut munere praesent complectitur mea. Sit an option maiorum principes. Ne per probo magna idque, est veniam exerci appareat no...</span></p>', '1511453616.jpg', '2017-11-23 15:13:36', '2017-11-23 15:26:45'),
(2, 'Lorem ipsum eu usu assum liberavisse, ut munere praesent complectitur mea. Sit an option maiorum', '<p><span style=\"color: #333333; font-family: Roboto, sans-serif; font-size: 13px;\">Lorem ipsum eu usu assum liberavisse, ut munere praesent complectitur mea. Sit an option maiorum principes. Ne per probo magna idque, est veniam exerci appareat no...</span><span style=\"color: #333333; font-family: Roboto, sans-serif; font-size: 13px;\">Lorem ipsum eu usu assum liberavisse, ut munere praesent complectitur mea. Sit an option maiorum principes. Ne per probo magna idque, est veniam exerci appareat no...</span><span style=\"color: #333333; font-family: Roboto, sans-serif; font-size: 13px;\">Lorem ipsum eu usu assum liberavisse, ut munere praesent complectitur mea. Sit an option maiorum principes. Ne per probo magna idque, est veniam exerci appareat no...</span><span style=\"color: #333333; font-family: Roboto, sans-serif; font-size: 13px;\">Lorem ipsum eu usu assum liberavisse, ut munere praesent complectitur mea. Sit an option maiorum principes. Ne per probo magna idque, est veniam exerci appareat no...</span></p>', '1511453653.jpg', '2017-11-23 15:14:14', '2017-11-23 15:27:13'),
(3, 'Business 3', '<p><span style=\"color: #333333; font-family: Roboto, sans-serif; font-size: 13px;\">Lorem ipsum eu usu assum liberavisse, ut munere praesent complectitur mea. Sit an option maiorum principes. Ne per probo magna idque, est veniam exerci appareat no...</span><span style=\"color: #333333; font-family: Roboto, sans-serif; font-size: 13px;\">Lorem ipsum eu usu assum liberavisse, ut munere praesent complectitur mea. Sit an option maiorum principes. Ne per probo magna idque, est veniam exerci appareat no...</span><span style=\"color: #333333; font-family: Roboto, sans-serif; font-size: 13px;\">Lorem ipsum eu usu assum liberavisse, ut munere praesent complectitur mea. Sit an option maiorum principes. Ne per probo magna idque, est veniam exerci appareat no...</span><span style=\"color: #333333; font-family: Roboto, sans-serif; font-size: 13px;\">Lorem ipsum eu usu assum liberavisse, ut munere praesent complectitur mea. Sit an option maiorum principes. Ne per probo magna idque, est veniam exerci appareat no...</span><span style=\"color: #333333; font-family: Roboto, sans-serif; font-size: 13px;\">Lorem ipsum eu usu assum liberavisse, ut munere praesent complectitur mea. Sit an option maiorum principes. Ne per probo magna idque, est veniam exerci appareat no...</span></p>', '1511453722.jpg', '2017-11-23 15:15:22', '2017-11-23 15:15:22'),
(4, 'Business 4', '<p><span style=\"color: #333333; font-family: Roboto, sans-serif; font-size: 13px;\">Lorem ipsum eu usu assum liberavisse, ut munere praesent complectitur mea. Sit an option maiorum principes. Ne per probo magna idque, est veniam exerci appareat no...</span><span style=\"color: #333333; font-family: Roboto, sans-serif; font-size: 13px;\">Lorem ipsum eu usu assum liberavisse, ut munere praesent complectitur mea. Sit an option maiorum principes. Ne per probo magna idque, est veniam exerci appareat no...</span><span style=\"color: #333333; font-family: Roboto, sans-serif; font-size: 13px;\">Lorem ipsum eu usu assum liberavisse, ut munere praesent complectitur mea. Sit an option maiorum principes. Ne per probo magna idque, est veniam exerci appareat no...</span><span style=\"color: #333333; font-family: Roboto, sans-serif; font-size: 13px;\">Lorem ipsum eu usu assum liberavisse, ut munere praesent complectitur mea. Sit an option maiorum principes. Ne per probo magna idque, est veniam exerci appareat no...</span></p>', '1511453754.jpg', '2017-11-23 15:15:54', '2017-11-23 15:15:54');

-- --------------------------------------------------------

--
-- Table structure for table `business_comments`
--

CREATE TABLE `business_comments` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `approve` tinyint(1) DEFAULT NULL,
  `business_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `business_comments`
--

INSERT INTO `business_comments` (`id`, `name`, `email`, `comment`, `approve`, `business_id`, `created_at`, `updated_at`) VALUES
(1, 'ulrich', 'ulrichquatess@gmail.com', 'ULRICHQUATESS@GMAIL.COMULRICHQUATESS@GMAIL.COM', 1, 1, '2017-12-02 12:54:09', '2017-12-02 12:54:09'),
(2, 'ulrich', 'ulrichquatess@gmail.com', 'refresh', 0, 1, '2017-12-02 12:55:19', '2017-12-02 12:55:19'),
(3, 'df', 'df', 'df', 0, 4, '2017-12-09 12:55:55', '2017-12-09 12:55:55');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `approved` tinyint(1) NOT NULL,
  `entrepreneur_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `name`, `email`, `comment`, `approved`, `entrepreneur_id`, `created_at`, `updated_at`) VALUES
(1, 'Quatess', 'quatess@gmail.com', 'Lorem ipsum no has veniam elaboraret constituam, ne nibh posidonium vel. Has ad quaeque omittantur, malis abhorreant eam no, qui...Lorem ipsum no has veniam elaboraret constituam, ne nibh posidonium vel. Has ad quaeque omittantur, malis abhorreant eam no, qui...Lorem ipsum no has veniam elaboraret constituam, ne nibh posidonium vel. Has ad quaeque omittantur, malis abhorreant eam no, qui...', 1, 2, '2017-11-24 06:30:12', '2017-11-24 06:30:12'),
(2, 'Xavie', 'xavier@gmail.com', 'Ei brute deserunt delicata nam, mundi moderatius ex quo. Id per modo molestie lobortis, perfecto corrumpit omittantur nec an. Alb..Ei brute deserunt delicata nam, mundi moderatius ex quo. Id per modo molestie lobortis, perfecto corrumpit omittantur nec an. Alb..Ei brute deserunt delicata nam, mundi moderatius ex quo. Id per modo molestie lobortis, perfecto corrumpit omittantur nec an. Alb..', 0, 1, '2017-11-24 06:57:50', '2017-11-24 06:57:50'),
(3, 'ulrich', 'tassaulrich@gmail.com', 'Ei brute deserunt delicata nam, mundi moderatius ex quo. Id per modo molestie lobortis, perfecto corrumpit omittantur nec an. Alb..Ei brute deserunt delicata nam, mundi moderatius ex quo. Id per modo molestie lobortis, perfecto corrumpit omittantur nec an. Alb..', 0, 1, '2017-11-24 07:00:29', '2017-11-24 07:00:29'),
(4, 'poyo', 'poyo@yahoo.com', 'Ei brute deserunt delicata nam, mundi moderatius ex quo. Id per modo molestie lobortis, perfecto corrumpit omittantur nec an. Alb..Ei brute deserunt delicata nam, mundi moderatius ex quo. Id per modo molestie lobortis, perfecto corrumpit omittantur nec an. Alb..', 1, 1, '2017-11-24 07:04:59', '2017-11-24 07:04:59'),
(5, 't.i', 't.i@yahoo.com', 'Women in Hollywood, according to new study', 1, 1, '2017-11-24 07:13:56', '2017-11-24 07:13:56'),
(6, 'chief', 'chief@yahoo.com', 'hello', 1, 6, '2017-11-27 13:23:56', '2017-11-27 13:23:56'),
(7, 'yuzz', 'ulrichquatess@gmail.com', 'Lorem ipsum no has veniam elaboraret constituam, ne nibh posidonium vel. Has ad quaeque omittantur,Lorem ipsum no has veniam elaboraret constituam, ne nibh posidonium vel. Has ad quaeque omittantur,Lorem ipsum no has veniam elaboraret constituam, ne nibh posidonium vel. Has ad quaeque omittantur,', 1, 2, '2017-11-29 14:58:44', '2017-11-29 14:58:44'),
(8, 'f', 'df', 'fdfdf', 0, 7, '2017-12-04 02:28:27', '2017-12-04 02:28:27'),
(9, 'benz', 'tassaulrich@gmail.com', 'comment her', 0, 6, '2017-12-08 14:21:57', '2017-12-08 14:21:57'),
(10, 'xc', 'xc', 'xc', 0, 1, '2017-12-09 12:37:11', '2017-12-09 12:37:11'),
(11, 'sd', 'ds', 'sdse', 1, 5, '2017-12-09 12:41:55', '2017-12-09 12:41:55');

-- --------------------------------------------------------

--
-- Table structure for table `entrepreneurs`
--

CREATE TABLE `entrepreneurs` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `entrepreneurs`
--

INSERT INTO `entrepreneurs` (`id`, `name`, `title`, `content`, `facebook`, `twitter`, `linkedin`, `image`, `created_at`, `updated_at`) VALUES
(1, 'John Doe', 'Creating Strategy Lorem ipsum dolor sit amet, consectetur adipisicing elit,', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Et harum quidem rerum facilis est et expedita distinctio.</p>', 'https://www.facebook.com/', 'https://twitter.com/', 'https://www.linkedin.com/', '1514337683.png', '2017-11-22 00:29:08', '2017-12-27 00:21:25'),
(2, 'John Doe 2', 'Sample Content', '<p>Lorem ipsum eu usu assum liberavisse, ut munere praesent complectitur mea. Sit an option maiorum principes. Ne per probo magna idque, est veniam exerci appareat no. Sit at amet propriae intellegebat, natum iusto forensibus duo ut. Pro hinc aperiri...</p>', 'https://www.facebook.com/', 'https://twitter.com/', 'http://linkedin.com/', '1514337721.png', '2017-11-22 01:39:48', '2017-12-27 00:22:02'),
(3, 'John Doe 3', 'Sample Content 2', 'Lorem ipsum eu usu assum liberavisse, ut munere praesent complectitur mea. Sit an option maiorum principes. Ne per probo magna idque, est veniam exerci appareat no. Sit at amet propriae intellegebat, natum iusto forensibus duo ut. Pro hinc aperiri...', 'https://www.facebook.com/', 'https://twitter.com/', 'https://www.linkedin.com/', '1511318447.jpg', '2017-11-22 01:40:47', '2017-11-24 00:10:16'),
(4, 'John Doe 4', 'Sample Content 3', 'Lorem ipsum eu usu assum liberavisse, ut munere praesent complectitur mea. Sit an option maiorum principes. Ne per probo magna idque, est veniam exerci appareat no. Sit at amet propriae intellegebat, natum iusto forensibus duo ut. Pro hinc aperiri...', 'https://www.facebook.com/', 'https://twitter.com/', 'https://www.linkedin.com/', '1511318493.jpg', '2017-11-22 01:41:33', '2017-11-24 00:10:30'),
(5, 'John Doe 5', 'Sample Content 4', 'Lorem ipsum eu usu assum liberavisse, ut munere praesent complectitur mea. Sit an option maiorum principes. Ne per probo magna idque, est veniam exerci appareat no. Sit at amet propriae intellegebat, natum iusto forensibus duo ut. Pro hinc aperiri...', 'https://www.facebook.com/', 'https://twitter.com/', 'http://linkedin.com/', '1511318536.jpg', '2017-11-22 01:42:16', '2017-11-24 00:09:55'),
(6, 'John Doe 6', 'Sample Content 5', 'Lorem ipsum eu usu assum liberavisse, ut munere praesent complectitur mea. Sit an option maiorum principes. Ne per probo magna idque, est veniam exerci appareat no. Sit at amet propriae intellegebat, natum iusto forensibus duo ut. Pro hinc aperiri...', NULL, NULL, NULL, '1511318585.jpg', '2017-11-22 01:43:06', '2017-11-22 01:43:06'),
(7, 'John Doe 10', 'Sample Content 9', '<p><span style=\"color: #333333; font-family: Roboto, sans-serif; font-size: 13px;\">Lorem ipsum eu usu assum liberavisse, ut munere praesent complectitur mea. Sit an option maiorum principes. Ne per probo magna idque, est veniam exerci appareat no...</span><span style=\"color: #333333; font-family: Roboto, sans-serif; font-size: 13px;\">Lorem ipsum eu usu assum liberavisse, ut munere praesent complectitur mea. Sit an option maiorum principes. Ne per probo magna idque, est veniam exerci appareat no...</span></p>', 'https://www.facebook.com/', 'https://twitter.com/', 'https://www.linkedin.com/', '1511345630.jpg', '2017-11-22 09:13:50', '2017-11-24 00:11:34'),
(8, 'John Doe 11', 'Sample Content 10', '<p><span style=\"color: #333333; font-family: Roboto, sans-serif; font-size: 13px;\">Lorem ipsum eu usu assum liberavisse, ut munere praesent complectitur mea. Sit an option maiorum principes. Ne per probo magna idque, est veniam exerci appareat no...</span><span style=\"color: #333333; font-family: Roboto, sans-serif; font-size: 13px;\">Lorem ipsum eu usu assum liberavisse, ut munere praesent complectitur mea. Sit an option maiorum principes. Ne per probo magna idque, est veniam exerci appareat no...</span><span style=\"color: #333333; font-family: Roboto, sans-serif; font-size: 13px;\">Lorem ipsum eu usu assum liberavisse, ut munere praesent complectitur mea. Sit an option maiorum principes. Ne per probo magna idque, est veniam exerci appareat no...</span></p>', 'https://www.facebook.com/', 'https://twitter.com/', 'https://www.linkedin.com/', '1511345686.jpg', '2017-11-22 09:14:46', '2017-11-24 00:11:21');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2017_11_21_233453_create_admins_table', 1),
(4, '2017_11_22_001352_create_entrepreneurs_table', 1),
(5, '2017_11_23_153727_create_businesses_table', 2),
(6, '2017_11_23_173400_create_technologies_table', 3),
(7, '2017_11_23_202824_create_articles_table', 4),
(8, '2017_11_24_112334_create_teams_table', 5),
(9, '2017_11_26_025315_create_socials_table', 6),
(10, '2017_11_26_025336_create_profiles_table', 6),
(12, '2017_12_09_114017_create_religions_table', 7);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE `profiles` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `religions`
--

CREATE TABLE `religions` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `religions`
--

INSERT INTO `religions` (`id`, `title`, `content`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Christianity', 'We learn more about love in christianity', NULL, '2017-12-09 11:15:33', '2017-12-09 11:15:33');

-- --------------------------------------------------------

--
-- Table structure for table `socials`
--

CREATE TABLE `socials` (
  `id` int(10) UNSIGNED NOT NULL,
  `facebook` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `twitter` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `linkedin` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `socials`
--

INSERT INTO `socials` (`id`, `facebook`, `twitter`, `linkedin`, `created_at`, `updated_at`) VALUES
(1, 'https://www.facebook.com/', 'https://twitter.com/', 'https://www.linkedin.com/', '2017-11-26 02:21:45', '2017-11-26 02:21:45');

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `name`, `email`, `description`, `image`, `facebook`, `twitter`, `linkedin`, `created_at`, `updated_at`) VALUES
(1, 'Tassa Ulrich', 'ulrichquatess@gmail.com', 'I am a Software Developer presently having internship at Njorku', '1511524306.jpg', 'https://www.facebook.com/', 'https://twitter.com/', 'https://www.linkedin.com/', '2017-11-24 10:51:46', '2017-11-24 10:52:21');

-- --------------------------------------------------------

--
-- Table structure for table `technologies`
--

CREATE TABLE `technologies` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `technologies`
--

INSERT INTO `technologies` (`id`, `title`, `content`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Technology', '<p><span style=\"color: #333333; font-family: Roboto, sans-serif; font-size: 13px;\">Lorem ipsum eu usu assum liberavisse, ut munere praesent complectitur mea. Sit an option maiorum principes. Ne per probo magna idque, est veniam exerci appareat no...Lorem ipsum eu usu assum ...</span><span style=\"color: #333333; font-family: Roboto, sans-serif; font-size: 13px;\">Lorem ipsum eu usu assum liberavisse, ut munere praesent complectitur mea. Sit an option maiorum principes. Ne per probo magna idque, est veniam exerci appareat no...Lorem ipsum eu usu assum ...</span><span style=\"color: #333333; font-family: Roboto, sans-serif; font-size: 13px;\">Lorem ipsum eu usu assum liberavisse, ut munere praesent complectitur mea. Sit an option maiorum principes. Ne per probo magna idque, est veniam exerci appareat no...Lorem ipsum eu usu assum ...</span></p>', '1511460687.jpg', '2017-11-23 17:11:27', '2017-11-23 17:11:27'),
(2, 'Technology 1', '<p><span style=\"color: #333333; font-family: Roboto, sans-serif; font-size: 13px;\">Lorem ipsum eu usu assum liberavisse, ut munere praesent complectitur mea. Sit an option maiorum principes. Ne per probo magna idque, est veniam exerci appareat no...Lorem ipsum eu usu assum ...</span><span style=\"color: #333333; font-family: Roboto, sans-serif; font-size: 13px;\">Lorem ipsum eu usu assum liberavisse, ut munere praesent complectitur mea. Sit an option maiorum principes. Ne per probo magna idque, est veniam exerci appareat no...Lorem ipsum eu usu assum ...</span><span style=\"color: #333333; font-family: Roboto, sans-serif; font-size: 13px;\">Lorem ipsum eu usu assum liberavisse, ut munere praesent complectitur mea. Sit an option maiorum principes. Ne per probo magna idque, est veniam exerci appareat no...Lorem ipsum eu usu assum ...</span><span style=\"color: #333333; font-family: Roboto, sans-serif; font-size: 13px;\">Lorem ipsum eu usu assum liberavisse, ut munere praesent complectitur mea. Sit an option maiorum principes. Ne per probo magna idque, est veniam exerci appareat no...Lorem ipsum eu usu assum ...</span></p>', '1511460721.jpg', '2017-11-23 17:12:01', '2017-11-23 17:12:01'),
(3, 'Technology 2', '<p><span style=\"color: #333333; font-family: Roboto, sans-serif; font-size: 13px;\">Lorem ipsum eu usu assum liberavisse, ut munere praesent complectitur mea. Sit an option maiorum principes. Ne per probo magna idque, est veniam exerci appareat no...Lorem ipsum eu usu assum ...</span><span style=\"color: #333333; font-family: Roboto, sans-serif; font-size: 13px;\">Lorem ipsum eu usu assum liberavisse, ut munere praesent complectitur mea. Sit an option maiorum principes. Ne per probo magna idque, est veniam exerci appareat no...Lorem ipsum eu usu assum ...</span><span style=\"color: #333333; font-family: Roboto, sans-serif; font-size: 13px;\">Lorem ipsum eu usu assum liberavisse, ut munere praesent complectitur mea. Sit an option maiorum principes. Ne per probo magna idque, est veniam exerci appareat no...Lorem ipsum eu usu assum ...</span><span style=\"color: #333333; font-family: Roboto, sans-serif; font-size: 13px;\">Lorem ipsum eu usu assum liberavisse, ut munere praesent complectitur mea. Sit an option maiorum principes. Ne per probo magna idque, est veniam exerci appareat no...Lorem ipsum eu usu assum ...</span></p>', '1511460753.jpg', '2017-11-23 17:12:33', '2017-11-23 17:12:33'),
(4, 'Technology 3', '<p><span style=\"color: #333333; font-family: Roboto, sans-serif; font-size: 13px;\">Lorem ipsum eu usu assum liberavisse, ut munere praesent complectitur mea. Sit an option maiorum principes. Ne per probo magna idque, est veniam exerci appareat no...Lorem ipsum eu usu assum ...</span><span style=\"color: #333333; font-family: Roboto, sans-serif; font-size: 13px;\">Lorem ipsum eu usu assum liberavisse, ut munere praesent complectitur mea. Sit an option maiorum principes. Ne per probo magna idque, est veniam exerci appareat no...Lorem ipsum eu usu assum ...</span><span style=\"color: #333333; font-family: Roboto, sans-serif; font-size: 13px;\">Lorem ipsum eu usu assum liberavisse, ut munere praesent complectitur mea. Sit an option maiorum principes. Ne per probo magna idque, est veniam exerci appareat no...Lorem ipsum eu usu assum ...</span><span style=\"color: #333333; font-family: Roboto, sans-serif; font-size: 13px;\">Lorem ipsum eu usu assum liberavisse, ut munere praesent complectitur mea. Sit an option maiorum principes. Ne per probo magna idque, est veniam exerci appareat no...Lorem ipsum eu usu assum ...</span></p>', '1511460809.jpg', '2017-11-23 17:13:29', '2017-11-23 17:13:29'),
(5, 'Technology 4', '<p><span style=\"color: #333333; font-family: Roboto, sans-serif; font-size: 13px;\">Lorem ipsum eu usu assum liberavisse, ut munere praesent complectitur mea. Sit an option maiorum principes. Ne per probo magna idque, est veniam exerci appareat no...Lorem ipsum eu usu assum ...</span><span style=\"color: #333333; font-family: Roboto, sans-serif; font-size: 13px;\">Lorem ipsum eu usu assum liberavisse, ut munere praesent complectitur mea. Sit an option maiorum principes. Ne per probo magna idque, est veniam exerci appareat no...Lorem ipsum eu usu assum ...</span><span style=\"color: #333333; font-family: Roboto, sans-serif; font-size: 13px;\">Lorem ipsum eu usu assum liberavisse, ut munere praesent complectitur mea. Sit an option maiorum principes. Ne per probo magna idque, est veniam exerci appareat no...Lorem ipsum eu usu assum ...</span><span style=\"color: #333333; font-family: Roboto, sans-serif; font-size: 13px;\">Lorem ipsum eu usu assum liberavisse, ut munere praesent complectitur mea. Sit an option maiorum principes. Ne per probo magna idque, est veniam exerci appareat no...Lorem ipsum eu usu assum ...</span></p>', '1511460859.jpg', '2017-11-23 17:14:19', '2017-11-23 17:14:19'),
(6, 'Technology 5', '<p><span style=\"color: #333333; font-family: Roboto, sans-serif; font-size: 13px;\">Lorem ipsum eu usu assum liberavisse, ut munere praesent complectitur mea. Sit an option maiorum principes. Ne per probo magna idque, est veniam exerci appareat no...Lorem ipsum eu usu assum ...</span><span style=\"color: #333333; font-family: Roboto, sans-serif; font-size: 13px;\">Lorem ipsum eu usu assum liberavisse, ut munere praesent complectitur mea. Sit an option maiorum principes. Ne per probo magna idque, est veniam exerci appareat no...Lorem ipsum eu usu assum ...</span><span style=\"color: #333333; font-family: Roboto, sans-serif; font-size: 13px;\">Lorem ipsum eu usu assum liberavisse, ut munere praesent complectitur mea. Sit an option maiorum principes. Ne per probo magna idque, est veniam exerci appareat no...Lorem ipsum eu usu assum ...</span><span style=\"color: #333333; font-family: Roboto, sans-serif; font-size: 13px;\">Lorem ipsum eu usu assum liberavisse, ut munere praesent complectitur mea. Sit an option maiorum principes. Ne per probo magna idque, est veniam exerci appareat no...Lorem ipsum eu usu assum ...</span><span style=\"color: #333333; font-family: Roboto, sans-serif; font-size: 13px;\">Lorem ipsum eu usu assum liberavisse, ut munere praesent complectitur mea. Sit an option maiorum principes. Ne per probo magna idque, est veniam exerci appareat no...Lorem ipsum eu usu assum ...</span></p>', '1511460897.jpg', '2017-11-23 17:14:57', '2017-11-23 17:14:57'),
(7, 'Technology 6', '<p><span style=\"color: #333333; font-family: Roboto, sans-serif; font-size: 13px;\">Lorem ipsum eu usu assum liberavisse, ut munere praesent complectitur mea. Sit an option maiorum principes. Ne per probo magna idque, est veniam exerci appareat no...Lorem ipsum eu usu assum ...</span><span style=\"color: #333333; font-family: Roboto, sans-serif; font-size: 13px;\">Lorem ipsum eu usu assum liberavisse, ut munere praesent complectitur mea. Sit an option maiorum principes. Ne per probo magna idque, est veniam exerci appareat no...Lorem ipsum eu usu assum ...</span><span style=\"color: #333333; font-family: Roboto, sans-serif; font-size: 13px;\">Lorem ipsum eu usu assum liberavisse, ut munere praesent complectitur mea. Sit an option maiorum principes. Ne per probo magna idque, est veniam exerci appareat no...Lorem ipsum eu usu assum ...</span><span style=\"color: #333333; font-family: Roboto, sans-serif; font-size: 13px;\">Lorem ipsum eu usu assum liberavisse, ut munere praesent complectitur mea. Sit an option maiorum principes. Ne per probo magna idque, est veniam exerci appareat no...Lorem ipsum eu usu assum ...</span><span style=\"color: #333333; font-family: Roboto, sans-serif; font-size: 13px;\">Lorem ipsum eu usu assum liberavisse, ut munere praesent complectitur mea. Sit an option maiorum principes. Ne per probo magna idque, est veniam exerci appareat no...Lorem ipsum eu usu assum ...</span></p>', '1511460929.jpg', '2017-11-23 17:15:29', '2017-11-23 17:15:29'),
(8, 'Technology 7', '<p><span style=\"color: #333333; font-family: Roboto, sans-serif; font-size: 13px;\">Lorem ipsum eu usu assum liberavisse, ut munere praesent complectitur mea. Sit an option maiorum principes. Ne per probo magna idque, est veniam exerci appareat no...Lorem ipsum eu usu assum ...</span><span style=\"color: #333333; font-family: Roboto, sans-serif; font-size: 13px;\">Lorem ipsum eu usu assum liberavisse, ut munere praesent complectitur mea. Sit an option maiorum principes. Ne per probo magna idque, est veniam exerci appareat no...Lorem ipsum eu usu assum ...</span><span style=\"color: #333333; font-family: Roboto, sans-serif; font-size: 13px;\">Lorem ipsum eu usu assum liberavisse, ut munere praesent complectitur mea. Sit an option maiorum principes. Ne per probo magna idque, est veniam exerci appareat no...Lorem ipsum eu usu assum ...</span><span style=\"color: #333333; font-family: Roboto, sans-serif; font-size: 13px;\">Lorem ipsum eu usu assum liberavisse, ut munere praesent complectitur mea. Sit an option maiorum principes. Ne per probo magna idque, est veniam exerci appareat no...Lorem ipsum eu usu assum ...</span></p>', '1511460964.jpg', '2017-11-23 17:16:04', '2017-11-23 17:16:04');

-- --------------------------------------------------------

--
-- Table structure for table `technology_comments`
--

CREATE TABLE `technology_comments` (
  `id` int(200) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(110) NOT NULL,
  `comment` text NOT NULL,
  `approved` tinyint(1) NOT NULL,
  `technology_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `technology_comments`
--

INSERT INTO `technology_comments` (`id`, `name`, `email`, `comment`, `approved`, `technology_id`, `created_at`, `updated_at`) VALUES
(1, 'Arrah', 'arrahettah@yahoo.com', 'Lorem ipsum no has veniam elaboraret constituam, ne nibh posidonium vel. Has ad quaeque omittantur, malis abhorreant eam no, qui...Lorem ipsum no has veniam elaboraret constituam, ne nibh posidonium vel. Has ad quaeque omittantur, malis abhorreant eam no, qui...', 1, 5, '2017-11-24 07:43:21', '2017-11-24 07:43:21'),
(2, 'admin', 'admin@gmail.com', 'admin', 1, 3, '2017-12-29 09:13:34', '2017-12-29 09:13:34'),
(3, 'tr', 'tassaulrich@yahoo.com', 'rt', 1, 3, '2017-12-29 09:14:00', '2017-12-29 09:14:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `image`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'ulrich', 'ulrichquatess@gmail.com', NULL, '$2y$10$A7IsChD4nt4s3RCQtYuq.OJxEhfS2dgcNEdufRzdkTdL90OBieRzu', 'v2NXnbH76ybePCSpG2BywO7AVyZ8gsacU4bTfCejnMXWpd32xv34W3pq2d5m', '2017-11-22 00:19:17', '2017-11-22 00:19:17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `businesses`
--
ALTER TABLE `businesses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `business_comments`
--
ALTER TABLE `business_comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `entrepreneurs`
--
ALTER TABLE `entrepreneurs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `religions`
--
ALTER TABLE `religions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `socials`
--
ALTER TABLE `socials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `technologies`
--
ALTER TABLE `technologies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `technology_comments`
--
ALTER TABLE `technology_comments`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `businesses`
--
ALTER TABLE `businesses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `business_comments`
--
ALTER TABLE `business_comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `entrepreneurs`
--
ALTER TABLE `entrepreneurs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `religions`
--
ALTER TABLE `religions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `socials`
--
ALTER TABLE `socials`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `technologies`
--
ALTER TABLE `technologies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `technology_comments`
--
ALTER TABLE `technology_comments`
  MODIFY `id` int(200) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
