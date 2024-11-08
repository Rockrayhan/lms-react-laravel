-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 08, 2024 at 02:06 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel-e-learning`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'mr Admin', 'admin@gmail.com', NULL, '$2y$12$C3P4CpcLQzeSP2tuwq4phu5WYwjETSDVtllx.wllL9.u0mRVJPMmi', NULL, '2024-01-31 09:03:35', '2024-01-31 09:03:35');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(4, 'Programming', '2024-02-01 13:22:32', '2024-02-01 13:22:32'),
(5, 'Database', '2024-02-22 04:44:32', '2024-02-22 04:44:32'),
(6, 'Networking', '2024-02-01 13:23:31', '2024-02-01 13:23:31'),
(7, 'Digital Marketing', '2024-02-01 13:25:01', '2024-02-01 13:25:01');

-- --------------------------------------------------------

--
-- Table structure for table `catelogues`
--

CREATE TABLE `catelogues` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` varchar(512) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `catelogues`
--

INSERT INTO `catelogues` (`id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, ' Product Title 1 ', 'This is product description', '2024-01-22 09:45:21', '2024-01-22 09:45:21'),
(2, ' Product Title 2', 'This is product description', '2024-01-22 09:45:21', '2024-01-22 09:45:21'),
(3, ' Product Title 3', 'This is product description', '2024-01-22 09:45:21', '2024-01-22 09:45:21'),
(4, ' Product Title 4', 'This is product description', '2024-01-22 09:45:21', '2024-01-22 09:45:21'),
(5, 'title 5', 'asdasdasdasdasdasdad', '2024-01-22 10:05:21', '2024-01-22 10:05:21');

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
-- Table structure for table `instructors`
--

CREATE TABLE `instructors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `product_id` tinyint(4) DEFAULT NULL,
  `category_id` tinyint(11) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `instructors`
--

INSERT INTO `instructors` (`id`, `name`, `email`, `email_verified_at`, `password`, `product_id`, `category_id`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Mr. Instructor', 'instructor@gmail.com', NULL, '$2y$12$C3P4CpcLQzeSP2tuwq4phu5WYwjETSDVtllx.wllL9.u0mRVJPMmi', 1, 4, NULL, '2024-01-31 17:27:29', '2024-01-31 17:27:29'),
(2, 'instrucotr 22', 'instructor22@gmail.com', NULL, '$2y$12$C3P4CpcLQzeSP2tuwq4phu5WYwjETSDVtllx.wllL9.u0mRVJPMmi', 2, 7, NULL, '2024-02-01 13:46:17', '2024-02-01 13:46:17'),
(4, 'Instructor 3', 'instructor33@gmail.com', NULL, '$2y$12$eAtVtRxxu4pHffLsgGumaO0h0u0Xq09hshpJEIuXAS783ZNUoROdi', 7, 7, NULL, '2024-02-03 17:07:06', '2024-02-03 17:07:06');

-- --------------------------------------------------------

--
-- Table structure for table `lessons`
--

CREATE TABLE `lessons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` varchar(300) DEFAULT NULL,
  `video` varchar(300) DEFAULT NULL,
  `product_id` tinyint(4) DEFAULT NULL,
  `instructor_id` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lessons`
--

INSERT INTO `lessons` (`id`, `name`, `description`, `video`, `product_id`, `instructor_id`, `created_at`, `updated_at`) VALUES
(1, 'Simple Data Entry', NULL, 'https://www.youtube.com/embed/JMbMn7gy82I?si=Cy2doPrMoaspp_MF', 1, 1, NULL, NULL),
(2, 'Data Spamming', 'Data Spamming is very bad thing. If you spam data then you will be called as a spammer and you might get jail by the law of ICT. ', 'https://www.youtube.com/embed/FkF2jhaRJIs?si=zWBHWxgHjM-N40Ja', 2, 2, NULL, NULL),
(4, 'Basic English', NULL, 'https://www.youtube.com/embed/6LFjVC3cHjI?si=jKGHroFnGpRBHRtl', 4, 2, '2024-02-01 09:42:37', '2024-02-01 09:42:37'),
(5, 'What is data', NULL, 'https://www.youtube.com/embed/WnP6jDvupiY?si=WYC6FFYpqvXvROkz', 1, 1, '2024-02-01 10:09:43', '2024-02-01 10:09:43'),
(6, 'lesson from ins_1', NULL, 'https://www.youtube.com/embed/U3OjuMWCe8U?si=Rxvv0vSNc9TFRJyu', 1, 1, '2024-02-03 01:00:57', '2024-02-03 01:00:57'),
(7, 'lesson from ins_2', NULL, 'https://www.youtube.com/embed/QJieHPGZZ10?si=wIrlpVrJmnHz6F8y', 1, 2, '2024-02-03 01:06:06', '2024-02-03 01:06:06'),
(8, 'Basic Command', 'This is basic Description', 'https://www.youtube.com/embed/gd7BXuUQ91w?si=x65_6kt1GvskBHBf', 2, 1, '2024-02-09 07:42:04', '2024-02-09 07:42:04'),
(9, 'Advance Command', 'This is Advance Commands For Linux', 'https://www.youtube.com/embed/Uq1roUHF3xc?si=1_bydqshLIRZhJS5', 2, 1, '2024-02-09 08:00:29', '2024-02-09 08:00:29'),
(10, 'Advance Command 2', 'This is advance linux command part 2', NULL, 2, 1, '2024-02-09 08:03:04', '2024-02-09 08:03:04'),
(11, 'What is MS Office', NULL, 'https://www.youtube.com/embed/_UtHG5ix4kM?si=1-rr7qxBouMRewxC', 3, 1, '2024-02-24 06:46:44', '2024-02-24 06:46:44');

-- --------------------------------------------------------

--
-- Table structure for table `manufacturers`
--

CREATE TABLE `manufacturers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `country` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `manufacturers`
--

INSERT INTO `manufacturers` (`id`, `name`, `country`, `created_at`, `updated_at`) VALUES
(1, 'Jonson & Jonson', 'USA', '2024-01-22 15:49:09', '2024-01-22 15:49:09'),
(2, 'Healforce', 'China', '2024-01-22 15:49:09', '2024-01-22 15:49:09'),
(3, 'Meditron', 'Canada', '2024-01-22 15:49:09', '2024-01-22 15:49:09');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` tinyint(4) NOT NULL,
  `instructor_id` tinyint(4) NOT NULL,
  `msg` varchar(512) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `student_id`, `instructor_id`, `msg`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '213213asdasd', NULL, NULL);

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
(17, '2014_10_12_000000_create_users_table', 1),
(18, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(19, '2019_08_19_000000_create_failed_jobs_table', 1),
(20, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(21, '2024_01_04_084239_create_categories_table', 1),
(22, '2024_01_04_084331_create_products_table', 1),
(23, '2024_01_22_063606_create_admins_table', 2),
(24, '2024_01_22_064122_create_admins_table', 3),
(25, '2024_01_22_093435_create_catelogues_table', 4),
(26, '2024_01_22_154159_create_migrations_table', 5),
(27, '2024_01_23_070024_create_orders_table', 6),
(28, '2024_01_31_090131_create_admins_table', 7),
(29, '2024_01_31_170435_create_instructors_table', 8),
(30, '2024_01_31_171305_create_instructors_table', 9),
(31, '2024_02_01_113649_create_products_table', 10),
(32, '2024_02_01_134052_create_lessons_table', 11),
(33, '2024_02_02_042518_create_reviews_table', 12),
(34, '2024_02_03_012107_create_students_table', 13),
(35, '2024_02_09_051415_create_procourses_table', 14),
(36, '2024_02_14_160736_create_quizes_table', 15),
(37, '2024_02_16_111935_create_quizanswers_table', 16),
(38, '2024_02_19_005241_create_messages_table', 17);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_name` varchar(100) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `student_id` tinyint(4) NOT NULL,
  `product_id` tinyint(4) NOT NULL,
  `price` varchar(50) NOT NULL,
  `payment` varchar(50) NOT NULL,
  `t_id` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `student_name`, `phone`, `email`, `product_name`, `status`, `student_id`, `product_id`, `price`, `payment`, `t_id`, `created_at`, `updated_at`) VALUES
(9, 'Student 2', '0155555', 'stu2@gmail.com', 'Prompt Engineering', 1, 2, 4, '', '', '', '2024-02-04 17:03:15', '2024-02-04 17:03:15'),
(10, 'Student 1', '0155555', 'abc@gmail.com', 'Data Analysis', 1, 1, 1, '120.00', 'nagad', '', '2024-02-05 01:27:40', '2024-02-05 01:27:40'),
(11, 'Student 1', '0155555', 'masum@gmail.com', 'Graphics Design', 1, 1, 6, '150.00', 'nagad', 'a2s1d32as1d32a1ds', '2024-02-05 04:03:17', '2024-02-05 04:03:17'),
(12, 'Student 1', '0155555', 'abc@gmail.com', 'MS expert', 0, 1, 3, '140.00', 'nagad', 'asdasdasdas', '2024-02-05 04:29:48', '2024-02-18 07:39:41'),
(13, 'Student 1', '0155555', 'admin@gmail.com', 'AI learning', 0, 1, 5, '140.00', 'nagad', 'a2s1d32as1d32a1ds', '2024-02-05 06:15:44', '2024-02-05 10:14:59'),
(14, 'Student 1', '0155555', 'abc@gmail.com', 'Linux Basic To Advance', 1, 1, 2, '130.00', 'bkash', '3asd213asd', '2024-02-09 13:20:49', '2024-02-09 07:21:47'),
(15, 'masum', '0155555', 'admin@admin.com', 'Data Analysis', 0, 4, 1, '120.00', 'nagad', 'a2s1d32as1d32a1ds', '2024-02-28 07:35:29', '2024-02-28 01:40:34'),
(16, 'masum2', '1500000', 'asdasd@sasd.com', 'Data Analysis', 1, 5, 1, '120.00', 'bkash', 'asdasdasdas', '2024-03-12 05:53:50', '2024-03-11 23:57:40'),
(17, 'masum', '01721328992', 'jkjn@gmail.com', 'Linux Basic To Advance', 1, 4, 2, '130.00', 'nagad', 'asdasdasdasd', '2024-03-25 08:10:12', '2024-03-25 08:10:33');

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
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `procourses`
--

CREATE TABLE `procourses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` varchar(255) NOT NULL,
  `video` varchar(500) NOT NULL,
  `product_id` tinyint(4) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `procourses`
--

INSERT INTO `procourses` (`id`, `title`, `description`, `video`, `product_id`, `created_at`, `updated_at`) VALUES
(1, 'Data Analysis Pro Content', 'This is Pro Content Description', 'https://www.youtube.com/embed/hKukexmKPgk?si=bQRisSizCdWh9_XQ', 1, '2024-02-09 05:34:35', '2024-02-09 05:34:35');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `category_id` tinyint(4) NOT NULL,
  `manufacturer_id` tinyint(4) NOT NULL,
  `image` varchar(100) DEFAULT NULL,
  `instructor_id` tinyint(4) DEFAULT NULL,
  `student_id` tinyint(4) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `procourse_id` tinyint(4) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `price`, `category_id`, `manufacturer_id`, `image`, `instructor_id`, `student_id`, `status`, `procourse_id`, `created_at`, `updated_at`) VALUES
(1, 'Data Analysis', 'This is product description', 120.00, 5, 1, '1706793311.jpg', 1, 2, 1, 1, '2024-02-01 11:47:26', '2024-02-01 07:15:11'),
(2, 'Linux Basic To Advance', 'This is product description', 130.00, 4, 1, '1707194661.jpg', 1, 2, 1, 0, '2024-02-01 11:47:26', '2024-02-20 03:44:47'),
(3, 'MS expert', 'This is product description', 140.00, 4, 2, '1707194754.png', 1, 2, 1, 0, '2024-02-01 11:47:26', '2024-02-24 04:07:56'),
(4, 'Prompt Engineering', 'This is product description', 150.00, 4, 2, '1707194775.jpg', 1, 2, 1, 0, '2024-02-01 11:47:26', '2024-02-24 04:08:14'),
(5, 'AI learning', 'This is product description', 140.00, 4, 3, '1707194794.png', 2, 2, 1, 0, '2024-02-01 11:47:26', '2024-02-24 04:09:05'),
(6, 'Graphics Design', 'This is product description', 150.00, 4, 3, '1707194815.jpg', 2, 2, 1, 0, '2024-02-01 11:47:26', '2024-02-24 04:09:16'),
(7, 'Facebook Marketing', 'This is product description', 140.00, 4, 3, '1707194829.jpg', 2, 2, 1, 0, '2024-02-01 11:47:26', '2024-02-24 04:09:32'),
(8, 'Digital Marketing', 'This is product description', 150.00, 4, 3, '1707194847.png', 2, 2, 1, 0, '2024-02-01 11:47:26', '2024-02-24 04:09:41');

-- --------------------------------------------------------

--
-- Table structure for table `quizanswers`
--

CREATE TABLE `quizanswers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` tinyint(4) NOT NULL,
  `question_number` varchar(50) NOT NULL,
  `selected_option` varchar(50) NOT NULL,
  `is_correct` tinyint(1) DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `quizanswers`
--

INSERT INTO `quizanswers` (`id`, `student_id`, `question_number`, `selected_option`, `is_correct`, `created_at`, `updated_at`) VALUES
(1, 1, '1', 'option4', 0, '2024-02-16 07:52:10', '2024-02-16 07:52:10'),
(2, 1, '2', 'option2', 0, '2024-02-16 07:52:11', '2024-02-16 07:52:11'),
(3, 1, '1', 'option4', NULL, '2024-02-16 08:41:36', '2024-02-16 08:41:36'),
(4, 1, '2', 'option3', NULL, '2024-02-16 08:41:36', '2024-02-16 08:41:36'),
(5, 1, '1', 'option4', NULL, '2024-02-16 08:42:10', '2024-02-16 08:42:10'),
(6, 1, '2', 'option3', NULL, '2024-02-16 08:42:10', '2024-02-16 08:42:10'),
(7, 1, '1', 'option4', 0, '2024-02-16 08:45:18', '2024-02-16 08:45:18'),
(8, 1, '2', 'option3', 0, '2024-02-16 08:45:18', '2024-02-16 08:45:18'),
(9, 1, '1', 'option3', 0, '2024-02-16 19:49:00', '2024-02-16 19:49:00'),
(10, 1, '2', 'option2', 0, '2024-02-16 19:49:00', '2024-02-16 19:49:00');

-- --------------------------------------------------------

--
-- Table structure for table `quizes`
--

CREATE TABLE `quizes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `question` varchar(100) NOT NULL,
  `option1` varchar(50) NOT NULL,
  `option2` varchar(50) NOT NULL,
  `option3` varchar(50) NOT NULL,
  `option4` varchar(50) NOT NULL,
  `correct_answer` varchar(50) NOT NULL,
  `marks` tinyint(4) NOT NULL,
  `product_id` tinyint(4) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `quizes`
--

INSERT INTO `quizes` (`id`, `question`, `option1`, `option2`, `option3`, `option4`, `correct_answer`, `marks`, `product_id`, `created_at`, `updated_at`) VALUES
(3, 'what is Lenux', 'yes', 'no', 'very good', 'idk', 'option4', 2, 2, '2024-02-16 13:09:40', '2024-02-16 13:09:40'),
(4, 'how are you ?', 'me', 'you', 'us', 'we', 'option3', 2, 2, '2024-02-16 13:14:52', '2024-02-16 13:14:52');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL,
  `occupation` varchar(50) NOT NULL,
  `description` varchar(200) NOT NULL,
  `student_id` tinyint(4) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `rating` tinyint(4) NOT NULL DEFAULT 5,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `name`, `occupation`, `description`, `student_id`, `status`, `rating`, `created_at`, `updated_at`) VALUES
(1, 'Best in the world', 'Web Developer', 'This is the review Description', 1, 1, 5, NULL, NULL),
(2, 'Most Electrifying Course Ever', 'UI/UX Designer', 'This is the review Description', 1, 1, 4, NULL, NULL),
(3, 'This is Phenominul', 'Student', 'This is the review Description', 2, 0, 3, NULL, NULL),
(5, 'review from stu_1', 'new learner', 'asdsadasdasdasd', 1, 0, 1, '2024-02-03 01:53:09', '2024-02-03 02:36:13'),
(6, 'nice one in the market', 'fast lerner', 'this is review description', 1, 1, 5, '2024-02-04 22:51:18', '2024-02-04 22:51:18'),
(7, 'review form me', 'asasd', 'asdasdasdasdsa', 1, 1, 3, '2024-02-04 23:21:00', '2024-02-04 23:21:00');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `product_id` tinyint(4) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `email`, `email_verified_at`, `password`, `product_id`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Student 1', 'stu1@gmail.com', NULL, '$2y$12$C3P4CpcLQzeSP2tuwq4phu5WYwjETSDVtllx.wllL9.u0mRVJPMmi', NULL, NULL, '2024-02-03 01:48:14', '2024-02-03 01:48:14'),
(2, 'Student 2', 'stu2@gmail.com', NULL, '$2y$12$C3P4CpcLQzeSP2tuwq4phu5WYwjETSDVtllx.wllL9.u0mRVJPMmi', NULL, NULL, '2024-02-03 01:48:14', '2024-02-03 01:48:14'),
(3, 'new student', 'stu3@gmail.com', NULL, '$2y$12$IC/NrI03QePGrG4YacZ4GOQnlw5MEOJr7D8iABUzjrxx1/Dios42a', NULL, NULL, '2024-02-05 07:33:04', '2024-02-05 07:33:04'),
(4, 'masum', 'masum@gmail.com', NULL, '$2y$12$Ms4fvzV4CJL7L6cxSDo72uHJ8zQ5IAIyBoO3ul8a48KatqOiZe29O', NULL, NULL, '2024-02-05 07:36:09', '2024-02-05 07:36:09'),
(5, 'masum2', 'masum2@gmail.com', NULL, '$2y$12$WDMy/Tjzu1sAWJw7Z0qMZu8q9XXnZjyjzxJ852/FTpt9NTNu2r/v2', NULL, NULL, '2024-03-11 06:26:33', '2024-03-11 06:26:33');

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
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Mr. User', 'abc@gmail.com', NULL, '$2y$12$C3P4CpcLQzeSP2tuwq4phu5WYwjETSDVtllx.wllL9.u0mRVJPMmi', NULL, '2024-01-21 09:19:55', '2024-01-21 09:19:55'),
(2, 'User 22', 'user22@gmail.com', NULL, '$2y$12$C3P4CpcLQzeSP2tuwq4phu5WYwjETSDVtllx.wllL9.u0mRVJPMmi', NULL, '2024-02-02 04:39:01', '2024-02-02 04:39:01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `catelogues`
--
ALTER TABLE `catelogues`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `instructors`
--
ALTER TABLE `instructors`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `instructors_email_unique` (`email`);

--
-- Indexes for table `lessons`
--
ALTER TABLE `lessons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `manufacturers`
--
ALTER TABLE `manufacturers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `procourses`
--
ALTER TABLE `procourses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quizanswers`
--
ALTER TABLE `quizanswers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quizes`
--
ALTER TABLE `quizes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `students_email_unique` (`email`);

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `catelogues`
--
ALTER TABLE `catelogues`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `instructors`
--
ALTER TABLE `instructors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `lessons`
--
ALTER TABLE `lessons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `manufacturers`
--
ALTER TABLE `manufacturers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `procourses`
--
ALTER TABLE `procourses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `quizanswers`
--
ALTER TABLE `quizanswers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `quizes`
--
ALTER TABLE `quizes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
