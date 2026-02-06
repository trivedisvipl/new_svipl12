-- phpMyAdmin SQL Dump
-- version 5.2.3-1.fc41.remi
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 05, 2026 at 07:18 AM
-- Server version: 10.11.11-MariaDB
-- PHP Version: 8.5.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `new_svipl12`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `username`, `email_verified_at`, `password`, `image`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin User', 'admin@example.com', 'admin', '2026-01-30 07:29:27', '$2y$12$zPhgxd4CP0GCSb4RanROsO9CJQZ.2ASsWwWyCFdc7jSXUY5gU37Ni', NULL, 'hcLYNOowF7', '2026-01-30 07:29:27', '2026-01-30 07:29:27');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `blog_category_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `short_description` text DEFAULT NULL,
  `description` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `posted_by_image` varchar(255) DEFAULT NULL,
  `posted_by` varchar(255) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `meta_title` varchar(255) DEFAULT NULL,
  `meta_keywords` varchar(255) DEFAULT NULL,
  `meta_description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `blog_category_id`, `title`, `slug`, `short_description`, `description`, `image`, `posted_by_image`, `posted_by`, `date`, `status`, `meta_title`, `meta_keywords`, `meta_description`, `created_at`, `updated_at`) VALUES
(1, 1, 'Website - The quickest way to take your business online', 'website-the-quickest-way-to-take-your-business-online', 'When it’s time to get your business online, your first idea may be to build a website. While a website can be quite effective for your online presence, it’s not the only option. In this lesson, we’ll share the benefits of launching a website and explore four other ways to build a digital home for your business: local listings on Google and review sites, social media, mobile apps, and YouTube.', '<p>When it’s time to get your business online, your first idea may be to build a website. While a website can be quite effective for your online presence, it’s not the only option. In this lesson, we’ll share the benefits of launching a website and explore four other ways to build a digital home for your business: local listings on Google and review sites, social media, mobile apps, and YouTube.</p><p>When it’s time to get your business online, your first idea may be to build a website. While a website can be quite effective for your online presence, it’s not the only option. In this lesson, we’ll share the benefits of launching a website and explore four other ways to build a digital home for your business: local listings on Google and review sites, social media, mobile apps, and YouTube.</p><h4>Options for getting online</h4><p>When it’s time to get your business online, your first idea may be to build a website. While a website can be quite effective for your online presence, it’s not the only option. In this lesson, we’ll share the benefits of launching a website and explore four other ways to build a digital home for your business: local listings on Google and review sites, social media, mobile apps, and YouTube.</p><p>When it’s time to get your business online, your first idea may be to build a website. While a website can be quite effective for your online presence, it’s not the only option. In this lesson, we’ll share the benefits of launching a website and explore four other ways to build a digital home for your business: local listings on Google and review sites, social media, mobile apps, and YouTube.</p>', '1258416183.webp', '1253152637.webp', 'SVIPL', '2026-01-15', 1, 'Website', 'Website - The quickest way to take your business online', 'When it’s time to get your business online, your first idea may be to build a website. While a website can be quite effective for your online presence, it’s not the only option. In this lesson, we’ll share the benefits of launching a website and explore four other ways to build a digital home for your business: local listings on Google and review sites, social media, mobile apps, and YouTube.', '2026-01-31 01:47:19', '2026-02-05 01:13:16'),
(2, 1, 'sdf', 'sdf', 'sdf', '<p>asdsad</p>', '1574952077.webp', '566672314.webp', 'sad', '2026-02-13', 1, 'sad', 'asd', 'ad', '2026-02-05 01:13:54', '2026-02-05 01:13:56');

-- --------------------------------------------------------

--
-- Table structure for table `blog_category`
--

CREATE TABLE `blog_category` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_category`
--

INSERT INTO `blog_category` (`id`, `name`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Bussiness', 'bussiness', 1, '2026-01-31 01:45:37', '2026-01-31 01:45:37');

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `career`
--

CREATE TABLE `career` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `position` varchar(255) DEFAULT NULL,
  `skills` varchar(255) DEFAULT NULL,
  `notice_period` varchar(255) DEFAULT NULL,
  `experience` varchar(255) DEFAULT NULL,
  `resume` varchar(255) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `career`
--

INSERT INTO `career` (`id`, `name`, `email`, `phone`, `position`, `skills`, `notice_period`, `experience`, `resume`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Vrundik Svipl', 'rjob@gmail.com', '9999999999', '1', 'test', '3', '5', NULL, 1, '2026-02-02 01:46:21', '2026-02-02 01:46:21'),
(2, 'Vrundik Sviplds', 'info@agrikotagro.com', '7777777777', '3', 'test', '3d', '2', '/tmp/phpjvhk46vjojgl7jjLhIN', 1, '2026-02-02 01:50:43', '2026-02-02 01:50:43'),
(3, 'Vrundik Svipl', 'trivedi.svipl@gmail.com', '9999999999', '1', 'test', '3', '5', '/tmp/phpdn8309k2ms1tabaiaGp', 1, '2026-02-02 01:53:01', '2026-02-02 01:53:01'),
(4, 'Vrundik Svipl', 'rjob@gmail.com', '9999999999', 'test', 'test', '12', 'test', '1363276704.pdf', 1, '2026-02-05 00:58:16', '2026-02-05 00:58:16');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`id`, `name`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Abel Building Solutions', '1183117853.webp', 1, '2026-01-31 00:25:59', '2026-01-31 00:25:59'),
(2, 'Agricola Credit Union', '1158730109.webp', 1, '2026-01-31 00:26:20', '2026-01-31 00:26:20'),
(3, 'Care Free', '1966241421.webp', 1, '2026-01-31 00:26:37', '2026-01-31 00:26:37'),
(4, 'The Gp Service', '1059085225.webp', 1, '2026-01-31 00:26:56', '2026-01-31 00:26:56'),
(5, 'Icare Labs', '518321534.webp', 1, '2026-01-31 00:27:06', '2026-01-31 00:27:06'),
(6, 'JobsTT', '657662511.webp', 1, '2026-01-31 00:27:18', '2026-01-31 00:27:18'),
(7, 'Malta Tours', '2120816453.webp', 1, '2026-01-31 00:27:40', '2026-01-31 00:27:40'),
(8, 'Office Finder', '1482777764.webp', 1, '2026-01-31 00:27:53', '2026-01-31 00:27:53'),
(9, 'Premier Medical', '1025308623.webp', 1, '2026-01-31 00:28:04', '2026-01-31 00:28:04'),
(10, 'Pscu Credit Union', '261915037.webp', 1, '2026-01-31 00:28:17', '2026-01-31 00:28:17'),
(11, 'Qlc Commercial Specialists', '1610694130.webp', 1, '2026-01-31 00:28:38', '2026-01-31 00:28:38'),
(12, 'QLZH', '138817127.webp', 1, '2026-01-31 00:28:45', '2026-01-31 00:28:45'),
(13, 'Quicklets Letting Specialists', '1086613475.webp', 1, '2026-01-31 00:29:09', '2026-01-31 00:29:09'),
(14, 'Rangoli', '1642016078.webp', 1, '2026-01-31 00:29:17', '2026-01-31 00:29:17'),
(15, 'Saggar', '124639193.webp', 1, '2026-01-31 00:29:25', '2026-01-31 00:29:25'),
(16, 'Shraddha', '1820610428.webp', 1, '2026-01-31 00:29:43', '2026-01-31 00:29:43'),
(17, 'Sumit Bag & Nursery', '1451123077.webp', 1, '2026-01-31 00:30:03', '2026-01-31 00:30:03'),
(18, 'Zanzi Homes', '287223161.webp', 1, '2026-01-31 00:30:15', '2026-01-31 00:30:15');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `phone`, `message`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Vrundik Svipl', 'trivedi.svipl@gmail.com', '7777777777', 'asdsadadasdasd', 1, '2026-02-05 00:15:43', '2026-02-05 00:15:43');

-- --------------------------------------------------------

--
-- Table structure for table `expertise`
--

CREATE TABLE `expertise` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `short_description` text DEFAULT NULL,
  `description` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `meta_title` varchar(255) DEFAULT NULL,
  `meta_keywords` varchar(255) DEFAULT NULL,
  `meta_description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `expertise`
--

INSERT INTO `expertise` (`id`, `title`, `slug`, `short_description`, `description`, `image`, `status`, `meta_title`, `meta_keywords`, `meta_description`, `created_at`, `updated_at`) VALUES
(1, 'dasdsa', 'dasdsa', 'SVIPL welcomes you to our Search Engine Optimisation India Company cheap SEO company team, where eac...', '<p><span style=\"background-color:rgb(255,255,255);color:rgb(31,31,31);font-family:;\"><span style=\"-webkit-text-stroke-width:0px;display:inline !important;float:none;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;orphans:2;text-align:start;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:pre-wrap;widows:2;word-spacing:0px;\" noto=\"\" sans=\"\">SVIPL welcomes you to our Search Engine Optimisation India Company cheap SEO company team, where eac...SVIPL welcomes you to our Search Engine Optimisation India Company cheap SEO company team, where eac...SVIPL welcomes you to our Search Engine Optimisation India Company cheap SEO company team, where eac...SVIPL welcomes you to our Search Engine Optimisation India Company cheap SEO company team, where eac...SVIPL welcomes you to our Search Engine Optimisation India Company cheap SEO company team, where eac...</span></span></p>', '876037173.webp', 1, 'dasdsa', 'dasdsa', 'dasdsa', '2026-01-31 04:04:38', '2026-02-05 01:29:37'),
(2, 'asd', 'asd', 'asd', '<h2>asd</h2>', '373056946.webp', 1, NULL, NULL, NULL, '2026-02-05 01:29:59', '2026-02-05 01:29:59');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2026_01_16_091524_create_slider_table', 1),
(5, '2026_01_16_092419_create_expertise_table', 1),
(6, '2026_01_16_092925_create_testimonials_table', 1),
(7, '2026_01_16_093901_create_blog_category_table', 1),
(8, '2026_01_16_094010_create_blog_table', 1),
(9, '2026_01_16_095337_create_client_table', 1),
(10, '2026_01_16_102028_create_setting_table', 1),
(11, '2026_01_19_073449_create_team_table', 1),
(12, '2026_01_19_073506_create_portfolio_category_table', 1),
(13, '2026_01_19_073520_create_portfolio_table', 1),
(14, '2026_01_19_073536_create_career_table', 1),
(15, '2026_01_19_073551_create_contact_table', 1),
(16, '2026_01_19_093017_create_portfolio_image_table', 1),
(17, '2026_01_22_062902_create_admin_table', 1),
(18, '2026_01_22_065620_add_username_to_admin_table', 1),
(19, '2026_01_29_062231_set_portfolio_id_default_to_null', 1),
(20, '2026_01_29_070812_add_img_c', 1),
(21, '2026_02_05_063924_add_meta_table', 2),
(22, '2026_02_05_065720_add_meta_table', 3),
(23, '2026_02_05_065743_add_meta_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `portfolio`
--

CREATE TABLE `portfolio` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `portfolio_category_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `short_description` text DEFAULT NULL,
  `description` text DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `meta_title` varchar(255) DEFAULT NULL,
  `meta_keywords` varchar(255) DEFAULT NULL,
  `meta_description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `portfolio`
--

INSERT INTO `portfolio` (`id`, `portfolio_category_id`, `title`, `slug`, `image`, `short_description`, `description`, `status`, `meta_title`, `meta_keywords`, `meta_description`, `created_at`, `updated_at`) VALUES
(1, 1, 'JobsTT', 'jobstt', '2066760362.webp', 'JobsTT.com is an online Recruitment Platform dedicated to creating more value for Employers and Jobseekers, by providing them with innovative tools and an engaging experience.', '<p>JobsTT.com is an online Recruitment Platform dedicated to creating more value for Employers and Jobseekers, by providing them with innovative tools and an engaging experience.</p><h4>What we did</h4><ul><li>Responsive design</li><li>Web Application development</li><li>QA</li></ul><h4>Project model</h4><ul><li>Jobseeker able to register and login to search for different job posted by employer</li><li>Jobseeker will get notification for relevant category job they like most</li><li>Employer able to register and post jobs</li><li>Employer can scrutinize jobseeker application and send success or failure notification</li></ul>', 1, 'asd', 'asd', 'das', '2026-01-31 00:23:07', '2026-02-05 01:31:07'),
(2, 2, 'ads', 'ads', '1563403329.webp', 'asd', '<p>sa</p>', 1, 'sda', NULL, NULL, '2026-02-05 01:31:27', '2026-02-05 01:31:27');

-- --------------------------------------------------------

--
-- Table structure for table `portfolio_category`
--

CREATE TABLE `portfolio_category` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `portfolio_category`
--

INSERT INTO `portfolio_category` (`id`, `name`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Ecommerce', 'ecommerce', 1, '2026-01-31 00:17:41', '2026-01-31 00:17:41'),
(2, 'Responsive', 'responsive', 1, '2026-01-31 00:17:47', '2026-01-31 00:17:47'),
(3, 'Mobile Application', 'mobile-application', 1, '2026-01-31 00:17:53', '2026-01-31 00:17:53'),
(4, 'Healthcare', 'healthcare', 1, '2026-01-31 00:18:00', '2026-01-31 00:18:00'),
(5, 'Financial Services', 'financial-services', 1, '2026-01-31 00:18:11', '2026-01-31 00:18:11'),
(6, 'Insurance', 'insurance', 1, '2026-01-31 00:18:17', '2026-01-31 00:18:17');

-- --------------------------------------------------------

--
-- Table structure for table `portfolio_image`
--

CREATE TABLE `portfolio_image` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `portfolio_id` bigint(20) UNSIGNED DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `sess_id` varchar(255) DEFAULT NULL,
  `disp_order` int(11) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `portfolio_image`
--

INSERT INTO `portfolio_image` (`id`, `portfolio_id`, `image`, `sess_id`, `disp_order`, `status`, `created_at`, `updated_at`) VALUES
(2, 1, '454541079.webp', NULL, 2, 1, '2026-01-31 00:23:06', '2026-01-31 00:23:07'),
(3, 1, '214098211.webp', NULL, 3, 1, '2026-01-31 00:49:47', '2026-01-31 00:49:47');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('JJh2ckd0AnSHM1F2FEQOHDWCvGpNkoAbXjvbPe0O', NULL, '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/144.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiRzhGUWZrRHRhS3lCZGdxc0Zza2dBM0t4VzAwS0dDcWdBdjZGaUlTNCI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6MzE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9wb3J0Zm9saW8iO3M6NToicm91dGUiO3M6MTM6Im91ci1wb3J0Zm9saW8iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUyOiJsb2dpbl9hZG1pbl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7fQ==', 1770275849);

-- --------------------------------------------------------

--
-- Table structure for table `setting`
--

CREATE TABLE `setting` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `page` varchar(255) DEFAULT NULL,
  `key` varchar(255) DEFAULT NULL,
  `value` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `setting`
--

INSERT INTO `setting` (`id`, `page`, `key`, `value`, `created_at`, `updated_at`) VALUES
(1, 'home', '_token', 'KoSbJouRl1N45fvGM8vSKwxdqsT8UcpiPH3Ptv3q', '2026-01-31 00:15:12', '2026-02-04 05:19:29'),
(2, 'home', 'fb', 'https://www.facebook.com/', '2026-01-31 00:15:12', '2026-01-31 00:15:12'),
(3, 'home', 'instagram', 'https://www.facebook.com/', '2026-01-31 00:15:12', '2026-01-31 00:15:12'),
(4, 'home', 'twitter', 'https://www.facebook.com/', '2026-01-31 00:15:12', '2026-01-31 00:15:12'),
(5, 'home', 'linkedin', 'https://www.facebook.com/', '2026-01-31 00:15:12', '2026-01-31 00:15:12'),
(6, 'home', 'phone1', '+91 94275 62346', '2026-01-31 00:15:12', '2026-01-31 00:15:12'),
(7, 'home', 'phone2', '+91 99799 07964', '2026-01-31 00:15:12', '2026-01-31 00:15:12'),
(8, 'home', 'email', 'sviplfive@gmail.com', '2026-01-31 00:15:12', '2026-01-31 00:15:12'),
(9, 'home', 'about_description', '<p><strong>SVIPL</strong> is a premier Web Solution agency to help client to redefine there idea to digital solution. The team at svipl.in understands that each client has a different story and unique digital goals. Regardless of business size, industry, or technology, our talented team has a proven track record of delivering exciting, high-performing digital solutions that produce positive results for businesses across the globe.We as agency has worked with wide variety of client in many different industries and achieved best online result from our expertise team of web developers and designers.</p><p><strong>Our goal</strong> is our client success. From project discussion to success implementation we as a team of technical expertise deliver digital solution that help out client business to grow.</p>', '2026-01-31 00:15:12', '2026-01-31 00:15:12'),
(10, 'home', 'footer_about', 'Siddhivinayak Infocom Pvt. Ltd. previously named as Siddhi Vinayak Software firmed on 15th December 2005 with 5 person in Rajkot, Gujarat with the determination to go higher and higher in the industry.', '2026-01-31 00:15:12', '2026-01-31 00:15:12'),
(11, 'home', 'address', '802, Runway Heights, Ayodhya Chowk BRTS Bus Stop, 150 Feet Ring Road, Rajkot, Gujarat-360007', '2026-01-31 00:15:12', '2026-01-31 00:15:12'),
(12, 'home', 'header_logo', '77382153.webp', '2026-01-31 00:15:12', '2026-01-31 00:15:12'),
(13, 'home', 'about_image', '1359294649.webp', '2026-01-31 00:15:12', '2026-01-31 00:15:12'),
(14, 'home', 'footer_logo', '1675955265.webp', '2026-01-31 00:15:12', '2026-01-31 00:15:12'),
(15, 'home', 'address_2', 'Quicklest, Zanzihomes & QLC Headquarters Cali House, Vjal ir-Rihan, San Gwann ,Malta', '2026-02-02 04:59:03', '2026-02-02 04:59:03'),
(16, 'why-choose', '_token', 'KoSbJouRl1N45fvGM8vSKwxdqsT8UcpiPH3Ptv3q', '2026-02-03 04:20:57', '2026-02-04 02:25:10'),
(17, 'why-choose', 'creative_agency_description', '<h2>Why Choose <span style=\"color:hsl(11,80%,54%);\"><span>SVIPL</span></span><span>&nbsp;</span></h2><p>We have highly skilled engineers with excellent technical knowledge and experience in using the latest software standards. We have built a large pool of knowledge that we apply to deliver solutions that meet client\'s needs, expectations and budget. By putting our clients at the heart of everything we do, we are proud that we are still supporting our very first business client.</p><p>&nbsp;</p><p><strong>18+</strong> years of experience in web design &amp; development. 100% Custom design &amp; development. Fast projects delivery also W3C Valid XHTML and CSS Code and 100% Semantic and SEO XHTML and CSS also have Cross browser Compatible sites. Do Discounts for loyal customers and we have 98% of satisfied clients</p>', '2026-02-03 04:20:57', '2026-02-03 05:34:07'),
(18, 'why-choose', 'why_choose_heading', '<h3 class=\"text-black font-weight-600 mrgn_25b font-40 font-lg-35 font-md-30\">Why The <span style=\"color:hsl(11,80%,54%);\">SVIPL</span> Ranked Top Among The Leading <span style=\"color:hsl(11,80%,54%);\">Web &amp; App Development </span>Companies</h3><p>We love what we do and are passionate about helping our clients be successful. We would welcome the opportunity to help you take your business to the next level and achieve your business goals.&nbsp;</p>', '2026-02-03 04:20:57', '2026-02-03 04:29:47'),
(19, 'why-choose', 'why_choose_description_1', '<h3><span style=\"color:hsl(11,80%,54%);\"><span>Streamlined Project</span></span><span> </span>Management</h3><p>Project management is very crucial for efficiently handling any project. It helps in the proper allocation of tasks and meeting deadlines. It increases the probability of success of any project, but if project management is executed properly.</p>', '2026-02-03 04:20:57', '2026-02-03 05:23:47'),
(20, 'why-choose', 'why_choose_description_2', '<h3>A Dedicated <span style=\"color:hsl(11,80%,54%);\"><span>Team of Experts</span></span></h3><p>Our dedicated team of qualified technical engineers, developers and project managers will provide proactive services and deliver smart and tailored IT solutions to support your growth and optimize your business processes.</p>', '2026-02-03 04:20:57', '2026-02-03 05:23:47'),
(21, 'why-choose', 'why_choose_description_3', '<h3 class=\"text-black font-weight-600 mrgn_25b font-40 font-lg-35 font-md-30\"><span style=\"color:hsl(11,80%,54%);\">Cost </span>efficiency</h3><p>One of the key objectives of IT outsourcing has always been cost-effectiveness. In fact, a pricing model plays a pivotal role in forming a successful outsourcing relationship by aligning to the interests and expectations of both the clients and the service provider.</p>', '2026-02-03 04:20:57', '2026-02-03 04:45:44'),
(22, 'why-choose', 'why_choose_description_4', '<h3 class=\"text-black font-weight-600 mrgn_25b font-40 font-lg-35 font-md-30\">Long-Term <span style=\"color:hsl(11,80%,54%);\">Relationship</span>&nbsp;</h3><p>SVIPL have a proven history of successful, long-term relationships with clients globally. Our professional team are good in building lasting relationships and working together efficiently.</p>', '2026-02-03 04:20:57', '2026-02-03 04:45:44'),
(23, 'why-choose', 'why_choose_description_5', '<h3 class=\"text-black font-weight-600 mrgn_25b font-40 font-lg-35 font-md-30\"><span style=\"color:hsl(11,80%,54%);\">Timely responses</span> to emergency</h3><p>The most important attribute of good customer service is a fast response time. How quickly do you respond to your own customers?</p><p>&nbsp;</p><p>We at SVIPL never delay to respond our clients when needed becuase we understand the value of business. Our team always stand up by 24/7 to take care of project so you can take a good sleep. Speed of response is utmost important for us.</p>', '2026-02-03 04:20:57', '2026-02-03 05:27:34'),
(24, 'why-choose', 'why_choose_description_6', '<h3 class=\"text-black font-weight-600 mrgn_25b font-40 font-lg-35 font-md-30\">Completion of Project in <span style=\"color:hsl(11,80%,54%);\">Given Time</span>&nbsp;</h3><p>Completing a project on time never seems to happen. You\'re always working down to the last minute, things break at the worst moment. But completing a Project in Given Time is easier than you think, as long as you are willing to take the time in advance to prepare like a pro.</p>', '2026-02-03 04:20:57', '2026-02-03 04:45:44'),
(25, 'why-choose', 'creative_agency_image', '452996680.webp', '2026-02-03 04:20:57', '2026-02-03 04:37:46'),
(26, 'why-choose', 'why_choose_image_1', '1083674688.webp', '2026-02-03 04:37:46', '2026-02-03 04:37:46'),
(27, 'why-choose', 'why_choose_image_2', '712012796.webp', '2026-02-03 04:37:46', '2026-02-03 04:37:46'),
(28, 'why-choose', 'why_choose_image_3', '1867557634.webp', '2026-02-03 04:37:46', '2026-02-03 04:37:46'),
(29, 'why-choose', 'why_choose_image_4', '1944995653.webp', '2026-02-03 04:37:46', '2026-02-03 04:37:46'),
(30, 'why-choose', 'why_choose_image_5', '1603089797.webp', '2026-02-03 04:37:46', '2026-02-03 04:37:46'),
(31, 'why-choose', 'why_choose_image_6', '263729138.webp', '2026-02-03 04:37:46', '2026-02-03 04:37:46'),
(32, 'mission', 'vision', '<p>To become a prime performer in the global marketplace by providing highly innovative web and mobile app designing, development and internet marketing services that will drive our clients business towards growth. Worldwide reputation is the dream of every company and we want to achieve it through our experience.</p><p>Our vision is to be the largest global mobile/web development company. Focused on constant innovation as our key for achieving the ultimate goal of success and emerge as globally recognized company by providing the superior quality services and solutions. We stick to the following principles in delivering our vision:</p><ul><li>SVIPL believes in exploring new opportunities that maximizes the business value, consistent growth and sustainability using our core competencies.</li><li>Meeting expectations of our customers, employees, and partners.</li><li>Operate globally and bring the benefits of IT to improve the quality of the products and services of our clients.</li><li>Be a vibrant organization where openness, trust, teamwork, simplicity, and innovation are valued and promoted.</li><li>We values integrity, commitment, excellence, teamwork, transparency, and satisfaction for our clients and ourselves.</li><li>Globally recognized for providing quality Services to its customers worldwide while adhering to our core values.</li></ul>', '2026-02-04 02:25:10', '2026-02-04 04:05:50'),
(33, 'mission', 'mission', '<p>Your Dream Is Our Mission To serve our customers, we do our best to deliver technically sound and affordable business solutions while ensuring exceptional customer support throughout the process.</p><p>Being professional web development, mobile application and digital marketing company. Our mission is to provide customer-centric, result-oriented, cost-competitive innovative &amp; functional IT Solutions to our valuable global clients. We stick to the following principles in delivering our mission:</p><ul><li>We understand needs and requirements of our customer and make technology to resolve the needs.</li><li>We believe to explore new opportunities that maximizes the business value, consistent growth and sustainability.</li><li>Empower our clients to respond faster and more intuitively to changing market dynamics.</li><li>Enable them to become more agile and competitive through leveraging new technologies.</li><li>Help our clients to bring great products to market in less time and at less cost Collaborate with our clients in their continued success.</li></ul>', '2026-02-04 02:25:10', '2026-02-04 04:05:50'),
(34, 'mission', 'values_1', 'Our team is built on professionalism and mutual respect', '2026-02-04 02:25:10', '2026-02-04 02:25:10'),
(35, 'mission', 'values_2', 'We appreciate autonomy of decisions our people make', '2026-02-04 02:25:10', '2026-02-04 02:25:10'),
(36, 'mission', 'values_3', 'We keep our promises and build relationships of trust', '2026-02-04 02:25:10', '2026-02-04 02:25:10'),
(37, 'mission', 'values_4', 'We encourage our people constant professional development', '2026-02-04 02:25:10', '2026-02-04 02:25:10'),
(38, 'mission', 'vision_image', '1728738598.webp', '2026-02-04 02:25:10', '2026-02-04 02:25:10'),
(39, 'mission', 'mission_image', '1673691552.webp', '2026-02-04 02:25:10', '2026-02-04 02:29:52'),
(40, 'mission', 'values_image_1', '878001650.webp', '2026-02-04 02:25:10', '2026-02-04 04:02:47'),
(41, 'mission', 'values_image_2', '851841046.webp', '2026-02-04 02:25:10', '2026-02-04 04:02:47'),
(42, 'mission', 'values_image_3', '312508672.webp', '2026-02-04 02:25:10', '2026-02-04 04:02:47'),
(43, 'mission', 'values_image_4', '1806472490.webp', '2026-02-04 02:25:10', '2026-02-04 04:02:47'),
(44, 'mission', '_token', 'KoSbJouRl1N45fvGM8vSKwxdqsT8UcpiPH3Ptv3q', '2026-02-04 02:29:52', '2026-02-04 02:29:52'),
(45, 'process', '_token', 'KoSbJouRl1N45fvGM8vSKwxdqsT8UcpiPH3Ptv3q', '2026-02-04 04:47:53', '2026-02-04 04:47:53'),
(46, 'process', 'process_description_1', '<div><h4>1. Requirement Gathering</h4><p>Most people ignore this critical step in the development process. To ensure that your website is on the right path, gathering information about the business is necessary. Know the goals of the business. Do you want to sell products and services? Or do you want to improve branding and work on online visibility? Now research your target audience. Are the audience teenagers or children? Or are they adults people? All the things are necessary to make a web development successful.</p><h4>2. Prototype (Design &amp; layout)</h4><p>With all the information that has been gathered from stage one, the design and implementation strategies are planned according to the type of website and target audience. A site map is created in this phase.</p><p>For building a full-fledged website having impeccable features and functionalities, it is important to plan wisely. There has to be a detailed list of all the areas of the website and the sub-topics. This is a guide that describes what content will be there on the site, and there is an easy to understand navigational system.</p><p>Think of the best user interface that is created for easy navigation. The wireframes give an outline of the pages of the website.</p><p>Take the help of tools for creating the wireframe. All the planning process should have the involvement of the client. So, the client has an idea about the blueprint of the project.</p><p>Next is to determine the look and feel of the website. In the design phase, it is essential to embed elements like the logo of the company and the colors that help to enhance to identify the company on the website.</p><p>The designer gives life to the graphics, typography, colors, animations, buttons, drop-down and pop-up menus, and more as per the project requirement.</p><p>It is the responsibility of the web designer to create one or more than one prototype for the website. This is basically a jpeg image of the final design. Designers give companies access to the work flow so that they can view the progress of the development.</p><p>Meeting the demand of the audience with the help of web design is also crucial. If the design is mundane, the website will not be able to capture the user’s attention, and this will increase the bounce rate. The elements should reflect the brand image as well as the business vision.</p><h4>3. Development</h4><p>The development is a stage where the website is built while maintaining the essence of the website’s purpose. All the graphic elements are taken into consideration and are used to generate a functional website.</p><p>The process begins with first developing the home page followed by the interior pages. The main focus is given to the navigational structure of the site.</p><p>Content Management System, interactive contact us forms, shopping carts are made functional in this development step. The web design &amp; development company suggest changes that are done after consideration.</p><p>Do you know that a successful website needs an understanding of the front end web development and backend development? This means valid HTML/CSS codes are compiled as per the web standards to enhance the functionality for a larger audience.</p><h4>4. Testing &amp; Quality Assurance</h4><p>During the software testing phase, testers put the code through its paces.</p><p><strong>Testers check for&nbsp;</strong></p><ul><li>Code quality</li><li>That code meets the stated requirements</li><li>That code is performant</li><li>Evidence of secure development principals</li><li>Some teams automate all their testing. Other teams test manually, but most do a combination of the two.</li></ul><p>The output of software testing is a better solution that meets edge cases and user needs. Developers can’t code for every eventuality; the fresh perspective that testing brings can help.</p><p>Testers are the main people involved at this stage. They will often seek clarification from developers or product owners.</p><h4>4. Deployment</h4><p>In simple projects, this will be as simple as deploying the code onto a web server. In large projects, this could involve integration with many different systems.</p><p>The output from this stage is usable software. For some projects, this phase also encompasses the creation of documentation and marketing material.</p><p>At this stage, the operations team focuses on deploying the software. The product owners work with content writers to produce documentation such as user manuals.</p><h4>6. Support &amp; Maintenance</h4><p>The web development stages don’t end after deployment. There are many post-deployment tasks that take place. Some elements are changed as per the user’s feedback, support, and maintenance.</p><p>One good way to grab potential visitors and repeat their visits is to keep updating the content and adding new products on a regular basis. The website drives by CMS allows the customer to edit the content.</p></div>', '2026-02-04 04:47:53', '2026-02-04 04:47:53'),
(47, 'process', 'process_description_2', '<p>Web development is a constant journey that can be made better every day. Web development life cycle involves understanding the client’s requirements, market research, knowledge about the target audience, planning, design, development, testing, and maintenance.</p><p>&nbsp;</p><p>Hire an outsourcing team of web developers in India that adheres to all the steps mentioned above and develops an aesthetically appealing website.</p>', '2026-02-04 04:47:53', '2026-02-04 04:53:22'),
(48, 'process', 'development_process_image', '112461806.webp', '2026-02-04 04:47:53', '2026-02-04 04:50:39'),
(49, 'home', 'meta_title', 'SVIPL', '2026-02-04 05:19:29', '2026-02-04 05:19:29'),
(50, 'home', 'meta_keywords', 'WEB DEVLOPMENT', '2026-02-04 05:19:29', '2026-02-04 05:19:29'),
(51, 'home', 'meta_description', 'SVIPL is a premier Web Solution agency to help client to redefine there idea to digital solution. The team at svipl.in understands that each client has a different story and unique digital goals. Regardless of business size, industry, or technology, our talented team has a proven track record of delivering exciting, high-performing digital solutions that produce positive results for businesses across the globe.We as agency has worked with wide variety of client in many different industries and achieved best online result from our expertise team of web developers and designers.', '2026-02-04 05:19:29', '2026-02-04 05:19:29'),
(52, 'home', 'meta_image', '1119613072.webp', '2026-02-04 05:19:29', '2026-02-04 05:31:26'),
(53, 'mission', 'meta_title', 'Mission & Vision', '2026-02-04 05:44:39', '2026-02-04 05:44:39'),
(54, 'mission', 'meta_keywords', 'Mission in Svipl, Vision in Svipl', '2026-02-04 05:44:39', '2026-02-04 05:44:39'),
(55, 'mission', 'meta_description', 'To become a prime performer in the global marketplace by providing highly innovative web and mobile app designing, development and internet marketing services that will drive our clients business towards growth. Worldwide reputation is the dream of every company and we want to achieve it through our experience. Your Dream Is Our Mission To serve our customers, we do our best to deliver technically sound and affordable business solutions while ensuring exceptional customer support throughout the process.', '2026-02-04 05:44:39', '2026-02-04 05:44:39'),
(56, 'mission', 'meta_image', '950492663.webp', '2026-02-04 05:44:39', '2026-02-04 05:44:39'),
(57, 'process', 'meta_title', 'Our Process Page', '2026-02-04 05:46:42', '2026-02-04 05:46:42'),
(58, 'process', 'meta_keywords', 'DEV Process Page', '2026-02-04 05:46:42', '2026-02-04 05:46:42'),
(59, 'process', 'meta_description', 'The web development stages don’t end after deployment. There are many post-deployment tasks that take place. Some elements are changed as per the user’s feedback, support, and maintenance.\r\n\r\nOne good way to grab potential visitors and repeat their visits is to keep updating the content and adding new products on a regular basis. The website drives by CMS allows the customer to edit the content.', '2026-02-04 05:46:42', '2026-02-04 05:46:42'),
(60, 'process', 'meta_image', '410564515.webp', '2026-02-04 05:46:42', '2026-02-04 05:46:42'),
(61, 'why-choose', 'meta_title', 'We Are Creative Agency', '2026-02-04 05:50:40', '2026-02-04 05:50:40'),
(62, 'why-choose', 'meta_keywords', 'SVIPL never delay', '2026-02-04 05:50:40', '2026-02-04 05:50:40'),
(63, 'why-choose', 'meta_description', 'Completing a project on time never seems to happen. You\'re always working down to the last minute, things break at the worst moment. But completing a Project in Given Time is easier than you think, as long as you are willing to take the time in advance to prepare like a pro.', '2026-02-04 05:50:40', '2026-02-04 05:50:40'),
(64, 'why-choose', 'meta_image', '1189109513.webp', '2026-02-04 05:50:40', '2026-02-04 05:50:40'),
(65, 'contact', '_token', 'KoSbJouRl1N45fvGM8vSKwxdqsT8UcpiPH3Ptv3q', '2026-02-04 06:53:58', '2026-02-04 06:53:58'),
(66, 'contact', 'meta_title', 'Contact Us Page', '2026-02-04 06:53:58', '2026-02-04 06:53:58'),
(67, 'contact', 'meta_keywords', 'Contact SVIPL', '2026-02-04 06:53:58', '2026-02-04 06:53:58'),
(68, 'contact', 'meta_description', 'Contact SVIPLContact SVIPLContact SVIPLContact SVIPLContact SVIPL', '2026-02-04 06:53:58', '2026-02-04 06:53:58'),
(69, 'contact', 'meta_image', '429012335.webp', '2026-02-04 06:53:58', '2026-02-04 06:53:58'),
(70, 'careers', '_token', 'KoSbJouRl1N45fvGM8vSKwxdqsT8UcpiPH3Ptv3q', '2026-02-04 06:56:44', '2026-02-04 06:56:44'),
(71, 'careers', 'meta_title', 'Careers', '2026-02-04 06:56:44', '2026-02-04 06:56:44'),
(72, 'careers', 'meta_keywords', 'Careers', '2026-02-04 06:56:44', '2026-02-04 06:56:44'),
(73, 'careers', 'meta_description', 'Careers', '2026-02-04 06:56:44', '2026-02-04 06:56:44'),
(74, 'careers', 'meta_image', '751166051.webp', '2026-02-04 06:56:44', '2026-02-04 06:56:44'),
(75, 'blog', '_token', 'KoSbJouRl1N45fvGM8vSKwxdqsT8UcpiPH3Ptv3q', '2026-02-04 06:59:55', '2026-02-04 06:59:55'),
(76, 'blog', 'meta_title', 'Blog', '2026-02-04 06:59:55', '2026-02-04 06:59:55'),
(77, 'blog', 'meta_keywords', 'Blog', '2026-02-04 06:59:55', '2026-02-04 06:59:55'),
(78, 'blog', 'meta_description', 'Blog', '2026-02-04 06:59:55', '2026-02-04 06:59:55'),
(79, 'blog', 'meta_image', '1074131116.webp', '2026-02-04 06:59:55', '2026-02-04 06:59:55'),
(80, 'services', '_token', 'KoSbJouRl1N45fvGM8vSKwxdqsT8UcpiPH3Ptv3q', '2026-02-04 07:06:01', '2026-02-04 07:06:01'),
(81, 'services', 'meta_title', 'Services', '2026-02-04 07:06:01', '2026-02-04 07:06:01'),
(82, 'services', 'meta_keywords', 'Services', '2026-02-04 07:06:01', '2026-02-04 07:06:01'),
(83, 'services', 'meta_description', 'ServicesServicesServicesServices', '2026-02-04 07:06:01', '2026-02-04 07:06:01'),
(84, 'services', 'meta_image', '796945623.webp', '2026-02-04 07:06:01', '2026-02-04 07:06:01'),
(85, 'portfolio', '_token', 'KoSbJouRl1N45fvGM8vSKwxdqsT8UcpiPH3Ptv3q', '2026-02-04 07:13:30', '2026-02-04 07:13:30'),
(86, 'portfolio', 'meta_title', 'dsf', '2026-02-04 07:13:30', '2026-02-04 07:13:30'),
(87, 'portfolio', 'meta_keywords', 'fds', '2026-02-04 07:13:30', '2026-02-04 07:13:30'),
(88, 'portfolio', 'meta_description', 'sdf', '2026-02-04 07:13:30', '2026-02-04 07:13:30'),
(89, 'portfolio', 'meta_image', '464803467.webp', '2026-02-04 07:13:30', '2026-02-04 07:13:30');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `title`, `description`, `link`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Website & Applications Design Company', '“We engineer purpose-driven, customer centric outcomes for a global clientele of startups and enterprises, empowering them to grow into true-technology enabled leaders.”', 'contact-us', '171262259.webp', 1, '2026-01-31 00:16:23', '2026-01-31 00:16:23');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `position` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `linkedin` varchar(255) DEFAULT NULL,
  `mail` varchar(255) DEFAULT NULL,
  `instagram` varchar(255) DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `name`, `country`, `position`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, 'John H.', 'Ireland', 'CEO', 'I would have no problem recommending SVIPL, he is a very professional web designer and a pleasure to work with. I am very happy with the website that he created for me, and best of all he completed my project on time and to budget.', 1, '2026-01-31 06:51:51', '2026-01-31 06:51:51'),
(2, 'Joe D.', 'Ireland', 'Business Owner', 'I found him good to deal with and his follow up was good which was a bonus.Would not have any difficulty working with them again.', 1, '2026-01-31 06:52:35', '2026-01-31 06:52:35');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Test User', 'test@example.com', '2026-01-30 07:26:51', '$2y$12$UrxXla4CpXoV5MtLN09Ie.X4MoRn0CPTP2gj6Q09sZcrdUOH9Yak2', '7OlsyFkfr8', '2026-01-30 07:26:52', '2026-01-30 07:26:52');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admin_email_unique` (`email`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `blog_title_unique` (`title`),
  ADD KEY `blog_blog_category_id_foreign` (`blog_category_id`);

--
-- Indexes for table `blog_category`
--
ALTER TABLE `blog_category`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `blog_category_name_unique` (`name`);

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
-- Indexes for table `career`
--
ALTER TABLE `career`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `expertise`
--
ALTER TABLE `expertise`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `expertise_title_unique` (`title`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- Indexes for table `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `portfolio_title_unique` (`title`),
  ADD KEY `portfolio_portfolio_category_id_foreign` (`portfolio_category_id`);

--
-- Indexes for table `portfolio_category`
--
ALTER TABLE `portfolio_category`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `portfolio_category_name_unique` (`name`);

--
-- Indexes for table `portfolio_image`
--
ALTER TABLE `portfolio_image`
  ADD PRIMARY KEY (`id`),
  ADD KEY `portfolio_image_portfolio_id_foreign` (`portfolio_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `testimonials_name_unique` (`name`);

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
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `blog_category`
--
ALTER TABLE `blog_category`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `career`
--
ALTER TABLE `career`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `expertise`
--
ALTER TABLE `expertise`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `portfolio_category`
--
ALTER TABLE `portfolio_category`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `portfolio_image`
--
ALTER TABLE `portfolio_image`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `setting`
--
ALTER TABLE `setting`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blog`
--
ALTER TABLE `blog`
  ADD CONSTRAINT `blog_blog_category_id_foreign` FOREIGN KEY (`blog_category_id`) REFERENCES `blog_category` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `portfolio`
--
ALTER TABLE `portfolio`
  ADD CONSTRAINT `portfolio_portfolio_category_id_foreign` FOREIGN KEY (`portfolio_category_id`) REFERENCES `portfolio_category` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `portfolio_image`
--
ALTER TABLE `portfolio_image`
  ADD CONSTRAINT `portfolio_image_portfolio_id_foreign` FOREIGN KEY (`portfolio_id`) REFERENCES `portfolio` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
