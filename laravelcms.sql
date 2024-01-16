-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 16, 2024 at 06:57 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravelcms`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `article_id` bigint(20) UNSIGNED NOT NULL,
  `article_name` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `created_by` int(11) NOT NULL,
  `edited_by` int(11) NOT NULL,
  `date_verified_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`article_id`, `article_name`, `content`, `created_by`, `edited_by`, `date_verified_at`) VALUES
(5, 'Weather', '<article class=\"forecast\">\r\n  <h1>Weather forecast for Seattle</h1>\r\n  <article class=\"day-forecast\">\r\n    <h2>03 March 2018</h2>\r\n    <p>Rain.</p>\r\n  </article>\r\n  <article class=\"day-forecast\">\r\n    <h2>04 March 2018</h2>\r\n    <p>Periods of rain.</p>\r\n  </article>\r\n  <article class=\"day-forecast\">\r\n    <h2>05 March 2018</h2>\r\n    <p>Heavy rain.</p>\r\n  </article>\r\n</article>', 5, 5, '2024-01-16'),
(6, 'Jurrasic park', '<article class=\"film_review\">\r\n  <h2>Jurassic Park</h2>\r\n  <section class=\"main_review\">\r\n    <h3>Review</h3>\r\n    <p>Dinos were great!</p>\r\n  </section>\r\n  <section class=\"user_reviews\">\r\n    <h3>User reviews</h3>\r\n    <article class=\"user_review\">\r\n      <h4>Too scary!</h4>\r\n      <p>Way too scary for me.</p>\r\n      <footer>\r\n        <p>\r\n          Posted on\r\n          <time datetime=\"2015-05-16 19:00\">May 16</time>\r\n          by Lisa.\r\n        </p>\r\n      </footer>\r\n    </article>\r\n    <article class=\"user_review\">\r\n      <h4>Love the dinos!</h4>\r\n      <p>I agree, dinos are my favorite.</p>\r\n      <footer>\r\n        <p>\r\n          Posted on\r\n          <time datetime=\"2015-05-17 19:00\">May 17</time>\r\n          by Tom.\r\n        </p>\r\n      </footer>\r\n    </article>\r\n  </section>\r\n  <footer>\r\n    <p>\r\n      Posted on\r\n      <time datetime=\"2015-05-15 19:00\">May 15</time>\r\n      by Staff.\r\n    </p>\r\n  </footer>\r\n</article>', 5, 5, '2024-01-16');

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
(7, '2014_10_12_000000_create_users_table', 1),
(8, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(9, '2019_08_19_000000_create_failed_jobs_table', 1),
(10, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(11, '2024_01_15_171150_user_types', 1);

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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` bigint(20) UNSIGNED NOT NULL,
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

INSERT INTO `users` (`user_id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Ayush Kumar Singh', 'ayushsingh.offc08@gmail.com', '2024-01-15 12:00:45', '$2y$12$VBbGEz7BIZ5Wypbp5GxxY.u000MJorwkgH4/Cfc3I4fy6U.7AIl.y', 'tiYVBEBKzt9lPw3tWsd6kcA0YnVF3BsyqKdLbsn6Lt4Dlx88NOxZfZbcgO2c', '2024-01-15 12:00:45', '2024-01-15 12:00:45'),
(2, 'john', 'john@gmail.com', '2024-01-15 12:00:45', '$2y$12$v.pgaSZt4nkc5VQGOyUTtumRyy6rs9H6d8VKLE1zFqAbp06vTgDZ2', 'VamgYr28je', '2024-01-15 12:00:45', '2024-01-15 12:00:45'),
(3, 'diana prince', 'diana@gmail.com', '2024-01-15 12:00:45', '$2y$12$YPOOa90uVQEVFytdghA5.eFMoL8vEndxSsjyVa.a.Yho0Z5SmR57G', 'Ep29dbRzfb', '2024-01-15 12:00:45', '2024-01-15 12:00:45'),
(4, 'barry allen', 'barry@gmail.com', '2024-01-15 12:00:46', '$2y$12$h/9Yo1fZ0ne2U5y1MuffSO56XMUMJPAfxR4/wYWxg9ideQEaml6Wy', 'MN7jIUPEvE', '2024-01-15 12:00:46', '2024-01-15 12:00:46'),
(5, 'bruce wayne', 'bruce@gmail.com', '2024-01-15 12:00:46', '$2y$12$stSot3QI1qk84O2ael9DxOnSlh5eTcoGSGhj/QrDt53BlrvP6mF9m', 'ILOMz065GrooQO75H9eaN4S5Uup63pPMKU4WZqhzFczZyBkkySvMuK3raaLk', '2024-01-15 12:00:46', '2024-01-15 12:00:46'),
(6, 'clark kent', 'clark@gmail.com', '2024-01-15 12:00:46', '$2y$12$H4QzRfq0LvfIaOJRKz.SsOeh7GVZp4Isv4mqgkYH2ARHfh2aNjqYu', '8Ji8nsbVHa', '2024-01-15 12:00:46', '2024-01-15 12:00:46');

-- --------------------------------------------------------

--
-- Table structure for table `user_types`
--

CREATE TABLE `user_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `usertype` enum('A','E','U') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_types`
--

INSERT INTO `user_types` (`id`, `user_id`, `usertype`) VALUES
(1, '1', 'A'),
(2, '2', 'U'),
(3, '3', 'U'),
(4, '4', 'U'),
(5, '5', 'E'),
(6, '6', 'U');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`article_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_types`
--
ALTER TABLE `user_types`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `article_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user_types`
--
ALTER TABLE `user_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
