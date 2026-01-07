-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 07, 2026 at 10:18 PM
-- Server version: 11.8.3-MariaDB-log
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u935933003_staging34`
--

-- --------------------------------------------------------

--
-- Table structure for table `activities`
--

CREATE TABLE `activities` (
  `id` bigint(20) NOT NULL,
  `user` int(11) DEFAULT NULL,
  `ip_address` varchar(191) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `device` varchar(191) DEFAULT NULL,
  `browser` varchar(191) DEFAULT NULL,
  `os` varchar(191) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `activities`
--

INSERT INTO `activities` (`id`, `user`, `ip_address`, `created_at`, `updated_at`, `device`, `browser`, `os`) VALUES
(1, 298, '23.27.255.224', '2026-01-05 10:39:30', '2026-01-05 10:39:30', 'iPhone', 'Safari', 'iOS'),
(2, 298, '23.27.255.224', '2026-01-05 10:39:30', '2026-01-05 10:39:30', 'iPhone', 'Safari', 'iOS'),
(3, 298, '23.27.255.224', '2026-01-06 13:51:14', '2026-01-06 13:51:14', 'iPhone', 'Safari', 'iOS'),
(4, 298, '23.27.255.224', '2026-01-06 13:51:14', '2026-01-06 13:51:14', 'iPhone', 'Safari', 'iOS'),
(5, 298, '23.27.255.224', '2026-01-07 16:02:44', '2026-01-07 16:02:44', 'iPhone', 'Safari', 'iOS'),
(6, 298, '23.27.255.224', '2026-01-07 16:02:44', '2026-01-07 16:02:44', 'iPhone', 'Safari', 'iOS'),
(7, 298, '23.27.255.224', '2026-01-07 16:13:43', '2026-01-07 16:13:43', 'Macintosh', 'Firefox', 'OS X'),
(8, 298, '23.27.255.224', '2026-01-07 16:13:43', '2026-01-07 16:13:43', 'Macintosh', 'Firefox', 'OS X');

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `firstName` varchar(191) NOT NULL,
  `lastName` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) NOT NULL,
  `token_2fa_expiry` datetime DEFAULT current_timestamp(),
  `enable_2fa` varchar(191) NOT NULL DEFAULT 'disbaled',
  `token_2fa` varchar(191) DEFAULT NULL,
  `pass_2fa` varchar(191) DEFAULT NULL,
  `phone` varchar(191) DEFAULT NULL,
  `dashboard_style` varchar(191) NOT NULL DEFAULT 'dark',
  `remember_token` varchar(191) DEFAULT NULL,
  `password_token` varchar(100) DEFAULT NULL,
  `acnt_type_active` varchar(191) DEFAULT NULL,
  `status` varchar(191) DEFAULT NULL,
  `type` varchar(191) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `firstName`, `lastName`, `email`, `email_verified_at`, `password`, `token_2fa_expiry`, `enable_2fa`, `token_2fa`, `pass_2fa`, `phone`, `dashboard_style`, `remember_token`, `password_token`, `acnt_type_active`, `status`, `type`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'Test', 'admin@gmail.com', NULL, '$2y$10$ti3ZhQA6J.cmZE8VMPwdAOed0Bi.QjzeAfqFV8BNsI.7EnNnBTBMa', '2021-12-07 11:40:56', 'disabled', '16632', 'true', '34444443', 'light', NULL, NULL, 'active', 'active', 'Super Admin', '2021-03-10 12:55:53', '2025-09-07 17:53:55');

-- --------------------------------------------------------

--
-- Table structure for table `adverts`
--

CREATE TABLE `adverts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `nickname` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `min_limit` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `max_limit` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `limits` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rate` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `base` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quote` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_methods` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `completion_rate` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `agents`
--

CREATE TABLE `agents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `agent` varchar(191) DEFAULT NULL,
  `total_refered` varchar(191) NOT NULL DEFAULT '0',
  `total_activated` varchar(191) NOT NULL DEFAULT '0',
  `earnings` varchar(191) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `assets`
--

CREATE TABLE `assets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `symbol` varchar(255) DEFAULT NULL,
  `category` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `autologin_tokens`
--

CREATE TABLE `autologin_tokens` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `token` varchar(191) NOT NULL,
  `path` varchar(191) DEFAULT NULL,
  `count` int(11) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bnc_transactions`
--

CREATE TABLE `bnc_transactions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `prepay_id` varchar(191) DEFAULT NULL,
  `deposit_id` bigint(20) UNSIGNED DEFAULT NULL,
  `type` varchar(191) DEFAULT NULL,
  `status` varchar(191) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bot_trading_history`
--

CREATE TABLE `bot_trading_history` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_bot_investment_id` bigint(20) UNSIGNED NOT NULL,
  `trade_type` varchar(255) NOT NULL,
  `trading_pair` varchar(255) NOT NULL,
  `entry_price` decimal(15,8) NOT NULL,
  `exit_price` decimal(15,8) DEFAULT NULL,
  `amount` decimal(15,2) NOT NULL,
  `profit_loss` decimal(15,2) NOT NULL DEFAULT 0.00,
  `profit_percentage` decimal(8,4) NOT NULL DEFAULT 0.0000,
  `result` enum('pending','profit','loss') NOT NULL DEFAULT 'pending',
  `strategy_used` text DEFAULT NULL,
  `opened_at` timestamp NULL DEFAULT NULL,
  `closed_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(191) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('stagingmemebull_cache4402eaa86f516bec6a56380524fef0ca', 'i:1;', 1767738952),
('stagingmemebull_cache4402eaa86f516bec6a56380524fef0ca:timer', 'i:1767738952;', 1767738952),
('stagingmemebull_cache9e763bff9927eec37847bd8c167c22b3', 'i:1;', 1767802483),
('stagingmemebull_cache9e763bff9927eec37847bd8c167c22b3:timer', 'i:1767802483;', 1767802483),
('stagingmemebull_cacheadab6c25b267206b7c9002adfcc87c2f', 'i:2;', 1767801808),
('stagingmemebull_cacheadab6c25b267206b7c9002adfcc87c2f:timer', 'i:1767801808;', 1767801808),
('stagingmemebull_cacheadmin@gmail.com|102.88.54.67', 'i:1;', 1767738952),
('stagingmemebull_cacheadmin@gmail.com|102.88.54.67:timer', 'i:1767738952;', 1767738952);

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(191) NOT NULL,
  `owner` varchar(191) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contents`
--

CREATE TABLE `contents` (
  `id` int(11) NOT NULL,
  `ref_key` varchar(191) NOT NULL,
  `title` varchar(191) NOT NULL,
  `description` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contents`
--

INSERT INTO `contents` (`id`, `ref_key`, `title`, `description`, `created_at`, `updated_at`) VALUES
(5, 'SMsJr1', 'What our Customer says!', 'Don\'t take our word for it, here\'s what some of our clients have to say about us', '2020-08-22 11:13:00', '2021-10-27 09:59:35'),
(11, 'anvs8c', 'About Us', 'About us header', '2020-08-22 11:32:29', '2021-10-27 10:21:22'),
(12, 'epJ4LI', 'Who we are', 'online trade \r\n                            is a solution for creating an investment management platform. It is suited for\r\n                            hedge or mutual fund managers and also Forex, stocks, bonds and cryptocurrency traders who\r\n                            are looking at runing pool trading system. Onlinetrader simplifies the investment,\r\n                            monitoring and management process. With a secure and compelling mobile-first design,\r\n                            together with a default front-end design, it takes few minutes to setup your own investment\r\n                            management or pool trading platform.', '2020-08-22 11:33:32', '2021-10-27 10:24:01'),
(13, '5hbB6X', 'Get Started', 'How to get started ?', '2020-08-22 11:33:55', '2021-10-27 10:25:09'),
(14, 'Zrhm3I', 'Create an Account', 'Create an account with us using your preffered email/username', '2020-08-22 11:34:11', '2021-10-27 10:25:29'),
(15, 'yTKhlt', 'Make a Deposit', 'Make A deposit with any of your preffered currency', '2020-08-22 11:34:26', '2021-10-27 10:25:52'),
(16, 'u0Ervr', 'Start Trading/Investing', 'Start trading with Indices commodities e.tc', '2020-08-22 11:34:56', '2021-10-27 10:26:12'),
(23, 'vr6Xw0', 'Our Investment Packages', 'Choose how you want to invest with us', '2020-08-22 11:37:43', '2021-10-27 09:58:51'),
(30, '52GPRA', 'Address', 'No 10 Mission Road, Nigeria', '2020-08-22 11:40:19', '2020-08-22 11:40:19'),
(31, '0EXbji', 'Phone Number', '+234 9xxxxxxxx', '2020-08-22 11:40:36', '2020-09-14 10:13:57'),
(32, 'HLgyaQ', 'Email', 'support@brynamics.xyz', '2020-08-22 11:41:14', '2020-08-22 12:23:55'),
(35, 'Mnag31', 'The Better Way to Trade & Invest', 'Online Trade helps over 2 million customers achieve their financial goals by helping them trade and invest with ease', '2021-10-27 09:42:23', '2022-11-10 18:42:38'),
(36, 'rXJ7JQ', 'Trade Invest stock, and Bond', 'Home page text', '2021-10-27 09:45:17', '2021-10-27 09:45:17'),
(37, 'J23T0Y', 'Security Comes First', 'Security Comes first', '2021-10-27 09:53:15', '2021-10-27 09:54:52'),
(38, '9HOR1z', 'Security', 'Online Trade uses the highest levels of Internet Security, and it is secured by 256 bits SSL security encryption to ensure that your information is completely protected from fraud.', '2021-10-27 09:56:13', '2021-10-27 09:56:13'),
(39, '7DH2G9', 'Two Factor Auth', 'Two-factor authentication (2FA) by default on all Online Trade accounts, to securely protect you from unauthorised access and impersonation.', '2021-10-27 09:56:26', '2021-10-27 09:56:26'),
(40, '5Vg32I', 'Explore Our Services', 'It’s our mission to provide you with a delightful and a successful trading experience!', '2021-10-27 09:56:38', '2021-10-27 09:56:38'),
(41, 'Vg6Gy7', 'Powerful Trading Platforms', 'Online Trade offers multiple platform options to cover the needs of each type of trader and investors .', '2021-10-27 09:56:53', '2021-10-27 09:56:53'),
(42, '1Sx1dl', 'High leverage', 'Chance to magnify your investment and really win big with super-low spreads to further up your profits', '2021-10-27 09:57:06', '2021-10-27 09:57:06'),
(43, 'YYqKx3', 'Fast execution', 'Super-fast trading software, so you never suffer slippage.', '2021-10-27 09:57:20', '2021-10-27 09:57:20'),
(44, 'yGg8xI', 'Ultimate Security', 'With advanced security systems, we keep your account always protected.', '2021-10-27 09:57:35', '2021-10-27 09:57:35'),
(45, 'xEWMho', '24/7 live chat Support', 'Connect with our 24/7 support and Market Analyst on-demand.', '2021-10-27 09:57:48', '2021-10-27 09:57:48'),
(46, '9SOtK1', 'Always on the go? Mobile trading is easier than ever with Online Trade!', 'Get your hands on our customized Trading Platform with the comfort of freely trading on the move, to experience truly liberating trading sessions.', '2021-10-27 09:58:05', '2021-10-27 09:58:05'),
(47, 'wOS1ve', 'Cryptocurrency', 'Trade and invest Top Cryptocurrency', '2021-10-27 09:59:07', '2021-10-27 09:59:07'),
(48, 'wuZlis', 'Hello!, How can we help you?', 'Hello!, How can we help you?', '2021-10-27 10:32:12', '2021-10-27 10:32:12'),
(49, '1TYkw0', 'Find the help you need', 'Launch your campaign and benefit from our expertise on designing and managing conversion centered bootstrap4 html page.', '2021-10-27 10:32:33', '2021-10-27 10:32:33'),
(50, 'rK6Yhn', 'FAQs', 'Due to its widespread use as filler text for layouts, non-readability is of great importance.', '2021-10-27 10:32:49', '2021-10-27 10:32:49'),
(51, 'HBHBLo', 'Guides / Support', 'Due to its widespread use as filler text for layouts, non-readability is of great importance.', '2021-10-27 10:33:03', '2021-10-27 10:33:03'),
(52, 'rCTDQh', 'Support Request', 'Due to its widespread use as filler text for layouts, non-readability is of great importance.', '2021-10-27 10:33:14', '2021-10-27 10:33:14'),
(53, 'kMsswR', 'Get Started', 'Launch your campaign and benefit from our expertise on designing and managing conversion centered bootstrap4 html page.', '2021-10-27 10:33:28', '2021-10-27 10:33:28'),
(54, 'EOUU7R', 'Get in Touch !', 'This is required when, for text is not yet available.', '2021-10-27 10:33:56', '2021-10-27 10:33:56'),
(56, 'ROu4q6', 'Contact Us', 'Contact Us', '2021-10-27 10:47:41', '2021-10-27 10:47:41');

-- --------------------------------------------------------

--
-- Table structure for table `copytradings`
--

CREATE TABLE `copytradings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tag` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `rating` int(11) NOT NULL DEFAULT 5,
  `followers` int(11) NOT NULL DEFAULT 0,
  `equity` decimal(8,2) NOT NULL DEFAULT 0.00,
  `total_profit` decimal(15,2) NOT NULL DEFAULT 0.00,
  `status` enum('active','inactive') NOT NULL DEFAULT 'active',
  `description` text DEFAULT NULL,
  `win_rate` int(11) NOT NULL DEFAULT 80,
  `total_trades` int(11) NOT NULL DEFAULT 0,
  `total_profits` varchar(255) DEFAULT NULL,
  `button_name` varchar(255) DEFAULT NULL,
  `active_days` varchar(255) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `type` varchar(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cp_transactions`
--

CREATE TABLE `cp_transactions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `txn_id` varchar(191) DEFAULT NULL,
  `item_name` varchar(191) DEFAULT NULL,
  `Item_number` varchar(191) DEFAULT NULL,
  `amount_paid` varchar(191) DEFAULT NULL,
  `user_plan` varchar(191) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `user_tele_id` int(11) DEFAULT NULL,
  `amount1` varchar(191) DEFAULT NULL,
  `amount2` varchar(191) DEFAULT NULL,
  `currency1` varchar(191) DEFAULT NULL,
  `currency2` varchar(191) DEFAULT NULL,
  `status` varchar(191) DEFAULT NULL,
  `status_text` varchar(191) DEFAULT NULL,
  `type` varchar(191) DEFAULT NULL,
  `cp_p_key` varchar(191) DEFAULT NULL,
  `cp_pv_key` varchar(191) DEFAULT NULL,
  `cp_m_id` varchar(191) DEFAULT NULL,
  `cp_ipn_secret` varchar(191) DEFAULT NULL,
  `cp_debug_email` varchar(191) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `crypto_accounts`
--

CREATE TABLE `crypto_accounts` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `btc` float DEFAULT NULL,
  `eth` float DEFAULT NULL,
  `ltc` float DEFAULT NULL,
  `xrp` float DEFAULT NULL,
  `link` float DEFAULT NULL,
  `bnb` float DEFAULT NULL,
  `aave` float DEFAULT NULL,
  `usdt` float DEFAULT NULL,
  `xlm` float DEFAULT NULL,
  `bch` float DEFAULT NULL,
  `ada` float DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `crypto_accounts`
--

INSERT INTO `crypto_accounts` (`id`, `user_id`, `btc`, `eth`, `ltc`, `xrp`, `link`, `bnb`, `aave`, `usdt`, `xlm`, `bch`, `ada`, `created_at`, `updated_at`) VALUES
(1, 298, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2026-01-05 10:39:31', '2026-01-05 10:39:31');

-- --------------------------------------------------------

--
-- Table structure for table `crypto_records`
--

CREATE TABLE `crypto_records` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `source` varchar(191) DEFAULT NULL,
  `dest` varchar(191) DEFAULT NULL,
  `amount` double(8,2) DEFAULT NULL,
  `quantity` double(8,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `crypto_records`
--

INSERT INTO `crypto_records` (`id`, `source`, `dest`, `amount`, `quantity`, `created_at`, `updated_at`) VALUES
(1, 'BTC', 'USD', 0.00, 107.58, '2022-05-24 05:21:07', '2022-05-24 05:21:07'),
(2, 'USD', 'BNB', 50.00, 0.15, '2022-05-24 06:26:55', '2022-05-24 06:26:55'),
(3, 'BTC', 'USD', 0.21, 6219.48, '2022-05-24 06:31:53', '2022-05-24 06:31:53'),
(4, 'USD', 'ETH', 100.00, 0.05, '2022-05-24 06:36:30', '2022-05-24 06:36:30'),
(5, 'USD', 'BTC', 60.00, 0.00, '2022-06-09 03:09:48', '2022-06-09 03:09:48'),
(6, 'BTC', 'USD', 0.10, 2841.35, '2022-06-12 01:36:40', '2022-06-12 01:36:40'),
(7, 'USD', 'BTC', 300.00, 0.01, '2022-07-16 10:18:29', '2022-07-16 10:18:29'),
(8, 'USD', 'BTC', 200.00, 0.01, '2023-07-19 16:55:07', '2023-07-19 16:55:07'),
(9, 'BTC', 'BCH', 0.00, 0.00, '2023-07-20 06:16:27', '2023-07-20 06:16:27'),
(10, 'BTC', 'LTC', 0.04, 12.44, '2023-07-21 21:23:32', '2023-07-21 21:23:32'),
(11, 'BTC', 'LTC', 0.04, 12.44, '2023-07-21 21:23:35', '2023-07-21 21:23:35'),
(12, 'LTC', 'BTC', 23.00, 0.07, '2023-07-21 21:24:09', '2023-07-21 21:24:09'),
(13, 'LTC', 'USD', 0.00, 0.26, '2023-08-02 21:58:28', '2023-08-02 21:58:28'),
(14, 'USD', 'BTC', 100.00, 0.00, '2023-08-02 21:59:41', '2023-08-02 21:59:41'),
(15, 'USD', 'BNB', 219.00, 6.69, '2023-08-02 23:02:50', '2023-08-02 23:02:50');

-- --------------------------------------------------------

--
-- Table structure for table `deposits`
--

CREATE TABLE `deposits` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `txn_id` varchar(191) DEFAULT NULL,
  `user` int(11) DEFAULT NULL,
  `amount` varchar(191) DEFAULT NULL,
  `payment_mode` varchar(191) DEFAULT NULL,
  `plan` int(11) DEFAULT NULL,
  `status` varchar(191) DEFAULT NULL,
  `proof` varchar(191) DEFAULT NULL,
  `signals` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `deposits`
--

INSERT INTO `deposits` (`id`, `txn_id`, `user`, `amount`, `payment_mode`, `plan`, `status`, `proof`, `signals`, `created_at`, `updated_at`) VALUES
(142, NULL, 278, '200', 'Bitcoin', NULL, 'Processed', 'uploads/ZSS1k1mv5rKlaNo6thLiGVEaaqs2Pie9sz9DwIAZ.jpg', NULL, '2025-08-03 22:13:47', '2025-08-03 22:16:26'),
(144, NULL, 278, '200', 'Bitcoin', NULL, 'Processed', 'uploads/8f37xbEHjPjoy1iOZuCwABrxSjnH0YL3dpvnfdTF.jpg', NULL, '2025-08-04 11:04:36', '2025-08-04 11:06:46');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ref_key` varchar(191) DEFAULT NULL,
  `question` varchar(191) DEFAULT NULL,
  `answer` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `ref_key` varchar(191) NOT NULL,
  `title` varchar(191) NOT NULL,
  `description` text NOT NULL,
  `img_path` varchar(191) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `ref_key`, `title`, `description`, `img_path`, `created_at`, `updated_at`) VALUES
(8, 'DPd1Kn', 'Testimonial 1', 'Testimonial 1', 'SIu0JZ01.jpg1635329714', '2020-08-23 12:24:52', '2021-10-27 10:15:14'),
(9, 'ZqCgDz', 'Testimonial 2', 'Testimonial 2', 'photos/2O5A1PaPNEG6J92eybtWfyawbw8KYvCneD5VCZVM.jpg', '2020-08-23 12:25:07', '2022-02-17 10:01:28'),
(14, 'b9158B', 'Home Image', 'The image at the home page', 'photos/eQZW9KTA66MfDXmmsM7VzwfBuleCSRBpoyjaivei.jpg', '2021-10-27 09:48:42', '2022-02-16 15:32:47'),
(15, 'iAwfKe', 'About image', 'The image in the about page', 'photos/O424fd54I3OWdTvNZNDAFuVCMG1oVUMuCgbwxzeT.png', '2021-10-27 10:22:20', '2022-02-16 15:33:18');

-- --------------------------------------------------------

--
-- Table structure for table `instruments`
--

CREATE TABLE `instruments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `symbol` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `open` decimal(20,8) DEFAULT NULL,
  `high` decimal(20,8) DEFAULT NULL,
  `low` decimal(20,8) DEFAULT NULL,
  `close` decimal(20,8) DEFAULT NULL,
  `percent_change_24h` decimal(10,4) DEFAULT NULL,
  `change` decimal(20,8) DEFAULT NULL,
  `market_cap` decimal(30,2) DEFAULT NULL,
  `volume` decimal(30,2) DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `price` decimal(20,8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `instruments`
--

INSERT INTO `instruments` (`id`, `symbol`, `name`, `type`, `open`, `high`, `low`, `close`, `percent_change_24h`, `change`, `market_cap`, `volume`, `logo`, `created_at`, `updated_at`, `price`) VALUES
(1, 'BTC/USD', 'Bitcoin', 'crypto', NULL, 119026.00000000, 117498.00000000, 118189.00000000, 0.0169, 19.95000000, 2351318452138.00, 39985706996.00, 'https://coin-images.coingecko.com/coins/images/1/large/bitcoin.png?1696501400', '2025-06-15 21:29:24', '2025-07-29 13:43:32', 118189.00000000),
(2, 'ETH/USD', 'Ethereum', 'crypto', NULL, 3877.35000000, 3749.50000000, 3808.23000000, 0.4649, 17.62000000, 459660436948.00, 32503704468.00, 'https://coin-images.coingecko.com/coins/images/279/large/ethereum.png?1696501628', '2025-06-15 21:29:24', '2025-07-29 13:43:32', 3808.23000000),
(3, 'USDT/USD', 'Tether', 'crypto', NULL, 1.00000000, 0.99984500, 0.99996600, 0.0008, 0.00000786, 163653350694.00, 88442805535.00, 'https://coin-images.coingecko.com/coins/images/325/large/Tether.png?1696501661', '2025-06-15 21:29:24', '2025-07-29 13:43:32', 0.99996600),
(4, 'XRP/USD', 'XRP', 'crypto', NULL, 3.18000000, 3.10000000, 3.12000000, -1.1874, -0.03750976, 184880102634.00, 6521469452.00, 'https://coin-images.coingecko.com/coins/images/44/large/xrp-symbol-white-128.png?1696501442', '2025-06-15 21:29:24', '2025-07-29 13:43:32', 3.12000000),
(5, 'BNB/USD', 'BNB', 'crypto', NULL, 839.05000000, 813.08000000, 814.72000000, -2.7648, -23.16562386, 113511372111.00, 2082029928.00, 'https://coin-images.coingecko.com/coins/images/825/large/bnb-icon2_2x.png?1696501970', '2025-06-15 21:29:24', '2025-07-29 13:43:32', 814.72000000),
(6, 'SOL/USD', 'Solana', 'crypto', NULL, 188.37000000, 181.05000000, 181.54000000, -3.2226, -6.04518085, 97788569082.00, 6395387880.00, 'https://coin-images.coingecko.com/coins/images/4128/large/solana.png?1718769756', '2025-06-15 21:29:24', '2025-07-29 13:43:32', 181.54000000),
(7, 'USDC/USD', 'USDC', 'crypto', NULL, 0.99984700, 0.99970700, 0.99979200, -0.0056, -0.00005562, 63851174892.00, 12167970439.00, 'https://coin-images.coingecko.com/coins/images/6319/large/usdc.png?1696506694', '2025-06-15 21:29:24', '2025-07-29 13:43:32', 0.99979200),
(8, 'DOGE/USD', 'Dogecoin', 'crypto', NULL, 0.23384900, 0.22346100, 0.22533800, -3.5047, -0.00818431, 33811260969.00, 2345363934.00, 'https://coin-images.coingecko.com/coins/images/5/large/dogecoin.png?1696501409', '2025-06-15 21:29:24', '2025-07-29 13:43:32', 0.22533800),
(9, 'TRX/USD', 'TRON', 'crypto', NULL, 0.34855400, 0.32031500, 0.33766200, 4.4497, 0.01438492, 31976827832.00, 2994245589.00, 'https://coin-images.coingecko.com/coins/images/1094/large/tron-logo.png?1696502193', '2025-06-15 21:29:24', '2025-07-29 13:43:32', 0.33766200),
(10, 'STETH/USD', 'Lido Staked Ether', 'crypto', NULL, 3876.83000000, 3739.40000000, 3801.48000000, 0.4824, 18.25000000, 34093890404.00, 85551926.00, 'https://coin-images.coingecko.com/coins/images/13442/large/steth_logo.png?1696513206', '2025-06-15 21:29:24', '2025-07-29 13:43:32', 3801.48000000),
(11, 'ADA/USD', 'Cardano', 'crypto', NULL, 0.81005200, 0.78196400, 0.78650500, -2.5832, -0.02085531, 28429580481.00, 1321087841.00, 'https://coin-images.coingecko.com/coins/images/975/large/cardano.png?1696502090', '2025-06-15 21:29:24', '2025-07-29 13:43:32', 0.78650500),
(12, 'HYPE/USD', 'Hyperliquid', 'crypto', NULL, 45.99000000, 43.23000000, 43.59000000, -1.6405, -0.72703706, 14540690182.00, 527169012.00, 'https://coin-images.coingecko.com/coins/images/50882/large/hyperliquid.jpg?1729431300', '2025-06-15 21:29:24', '2025-07-29 13:43:32', 43.59000000),
(13, 'WBTC/USD', 'Wrapped Bitcoin', 'crypto', NULL, 118877.00000000, 117388.00000000, 118133.00000000, 0.2127, 250.69000000, 14989234508.00, 151465258.00, 'https://coin-images.coingecko.com/coins/images/7598/large/wrapped_bitcoin_wbtc.png?1696507857', '2025-06-15 21:29:24', '2025-07-29 13:43:32', 118133.00000000),
(14, 'WSTETH/USD', 'Wrapped stETH', 'crypto', NULL, 4684.17000000, 4526.68000000, 4610.08000000, 0.6106, 27.98000000, 15062472992.00, 103166321.00, 'https://coin-images.coingecko.com/coins/images/18834/large/wstETH.png?1696518295', '2025-06-15 21:29:24', '2025-07-29 13:43:32', 4610.08000000),
(15, 'SUI/USD', 'Sui', 'crypto', NULL, 4.12000000, 3.80000000, 3.83000000, -6.9540, -0.28611982, 13225417830.00, 2146885528.00, 'https://coin-images.coingecko.com/coins/images/26375/large/sui-ocean-square.png?1727791290', '2025-06-15 21:29:24', '2025-07-29 13:43:32', 3.83000000),
(16, 'BCH/USD', 'Bitcoin Cash', 'crypto', NULL, 585.88000000, 565.56000000, 565.04000000, -3.0524, -17.79035905, 11249148249.00, 371693690.00, 'https://coin-images.coingecko.com/coins/images/780/large/bitcoin-cash-circle.png?1696501932', '2025-06-15 21:29:24', '2025-07-29 13:43:32', 565.04000000),
(17, 'LINK/USD', 'Chainlink', 'crypto', NULL, 18.58000000, 17.89000000, 17.91000000, -3.3851, -0.62733754, 12146204250.00, 683862927.00, 'https://coin-images.coingecko.com/coins/images/877/large/chainlink-new-logo.png?1696502009', '2025-06-15 21:29:24', '2025-07-29 13:43:32', 17.91000000),
(18, 'LEO/USD', 'LEO Token', 'crypto', NULL, 8.98000000, 8.95000000, 8.97000000, 0.1200, 0.01074391, 8276630109.00, 3141937.00, 'https://coin-images.coingecko.com/coins/images/8418/large/leo-token.png?1696508607', '2025-06-15 21:29:24', '2025-07-29 13:43:32', 8.97000000),
(19, 'AVAX/USD', 'Avalanche', 'crypto', NULL, 26.40000000, 24.53000000, 24.71000000, -6.2222, -1.63980917, 10442028768.00, 861845050.00, 'https://coin-images.coingecko.com/coins/images/12559/large/Avalanche_Circle_RedWhite_Trans.png?1696512369', '2025-06-15 21:29:24', '2025-07-29 13:43:32', 24.71000000),
(20, 'XLM/USD', 'Stellar', 'crypto', NULL, 0.43366800, 0.41624100, 0.42050500, -1.6493, -0.00705161, 13115267334.00, 368210869.00, 'https://coin-images.coingecko.com/coins/images/100/large/fmpFRHHQ_400x400.jpg?1735231350', '2025-06-15 21:29:24', '2025-07-29 13:43:32', 0.42050500),
(21, 'TON/USD', 'Toncoin', 'crypto', NULL, 3.33000000, 3.19000000, 3.24000000, -2.0512, -0.06782397, 7823841922.00, 245843873.00, 'https://coin-images.coingecko.com/coins/images/17980/large/photo_2024-09-10_17.09.00.jpeg?1725963446', '2025-06-15 21:29:24', '2025-07-29 13:43:32', 3.24000000),
(22, 'SHIB/USD', 'Shiba Inu', 'crypto', NULL, 0.00001372, 0.00001312, 0.00001321, -3.5679, -0.00000049, 7790326652.00, 242610479.00, 'https://coin-images.coingecko.com/coins/images/11939/large/shiba.png?1696511800', '2025-06-15 21:29:24', '2025-07-29 13:43:32', 0.00001321),
(23, 'USDS/USD', 'USDS', 'crypto', NULL, 0.99982000, 0.99949200, 0.99957600, -0.0147, -0.00014741, 7521023012.00, 7057063.00, 'https://coin-images.coingecko.com/coins/images/39926/large/usds.webp?1726666683', '2025-06-15 21:29:24', '2025-07-29 13:43:32', 0.99957600),
(24, 'WETH/USD', 'WETH', 'crypto', NULL, 3882.63000000, 3739.58000000, 3808.33000000, 0.4496, 17.05000000, 8607504932.00, 73692922.00, 'https://coin-images.coingecko.com/coins/images/2518/large/weth.png?1696503332', '2025-06-15 21:29:24', '2025-07-29 13:43:32', 3808.33000000),
(25, 'WEETH/USD', 'Wrapped eETH', 'crypto', NULL, 4159.18000000, 4009.58000000, 4077.21000000, 0.4409, 17.90000000, 10853491321.00, 15461476.00, 'https://coin-images.coingecko.com/coins/images/33033/large/weETH.png?1701438396', '2025-06-15 21:29:24', '2025-07-29 13:43:32', 4077.21000000),
(26, 'LTC/USD', 'Litecoin', 'crypto', NULL, 110.84000000, 107.95000000, 108.84000000, -1.5330, -1.69444074, 8286455338.00, 587317895.00, 'https://coin-images.coingecko.com/coins/images/2/large/litecoin.png?1696501400', '2025-06-15 21:29:24', '2025-07-29 13:43:32', 108.84000000),
(27, 'HBAR/USD', 'Hedera', 'crypto', NULL, 0.27798500, 0.26566500, 0.26751500, -2.7514, -0.00756876, 11339602429.00, 477696854.00, 'https://coin-images.coingecko.com/coins/images/3688/large/hbar.png?1696504364', '2025-06-15 21:29:24', '2025-07-29 13:43:32', 0.26751500),
(28, 'BSC-USD/USD', 'Binance Bridged USDT (BNB Smart Chain)', 'crypto', NULL, 1.00700000, 0.99627100, 1.00100000, 0.0604, 0.00060449, 6781044871.00, 2877230984.00, 'https://coin-images.coingecko.com/coins/images/35021/large/USDT.png?1707233575', '2025-06-15 21:29:24', '2025-07-29 13:43:32', 1.00100000),
(29, 'USDE/USD', 'Ethena USDe', 'crypto', NULL, 1.00200000, 0.99822900, 1.00100000, -0.0290, -0.00029013, 7655851150.00, 256049272.00, 'https://coin-images.coingecko.com/coins/images/33613/large/usde.png?1733810059', '2025-06-15 21:29:24', '2025-07-29 13:43:32', 1.00100000),
(30, 'XMR/USD', 'Monero', 'crypto', NULL, 326.56000000, 315.01000000, 316.25000000, -2.9150, -9.49524079, 5831629216.00, 137804527.00, 'https://coin-images.coingecko.com/coins/images/69/large/monero_logo.png?1696501460', '2025-06-15 21:29:24', '2025-07-29 13:43:33', 316.25000000),
(31, 'DOT/USD', 'Polkadot', 'crypto', NULL, 4.11000000, 3.93000000, 3.96000000, -3.3314, -0.13650449, 6036638699.00, 310837744.00, 'https://coin-images.coingecko.com/coins/images/12171/large/polkadot.png?1696512008', '2025-06-15 21:29:24', '2025-07-29 13:43:33', 3.96000000),
(32, 'WBT/USD', 'WhiteBIT Coin', 'crypto', NULL, 44.65000000, 43.88000000, 44.21000000, -0.0181, -0.00799320, 6371758592.00, 41392722.00, 'https://coin-images.coingecko.com/coins/images/27045/large/wbt_token.png?1696526096', '2025-06-15 21:29:24', '2025-07-29 13:43:33', 44.21000000),
(33, 'BGB/USD', 'Bitget Token', 'crypto', NULL, 4.66000000, 4.54000000, 4.57000000, -1.3392, -0.06204713, 5215238661.00, 129935971.00, 'https://coin-images.coingecko.com/coins/images/11610/large/Bitget_logo.png?1736925727', '2025-06-15 21:29:24', '2025-07-29 13:43:33', 4.57000000),
(34, 'CBBTC/USD', 'Coinbase Wrapped BTC', 'crypto', NULL, 119123.00000000, 117444.00000000, 118310.00000000, 0.1105, 130.55000000, 6367800754.00, 442967299.00, 'https://coin-images.coingecko.com/coins/images/40143/large/cbbtc.webp?1726136727', '2025-06-15 21:29:24', '2025-07-29 13:43:33', 118310.00000000),
(35, 'PEPE/USD', 'Pepe', 'crypto', NULL, 0.00001242, 0.00001156, 0.00001160, -6.3515, -0.00000079, 4887005903.00, 889989235.00, 'https://coin-images.coingecko.com/coins/images/29850/large/pepe-token.jpeg?1696528776', '2025-06-15 21:29:25', '2025-07-29 13:43:33', 0.00001160),
(36, 'PI/USD', 'Pi Network', 'crypto', NULL, 0.44674300, 0.43232100, 0.43324600, -2.8974, -0.01292747, 3352989927.00, 72033774.00, 'https://coin-images.coingecko.com/coins/images/54342/large/pi_network.jpg?1739347576', '2025-06-15 21:29:25', '2025-07-29 13:43:33', 0.43324600),
(37, 'UNI/USD', 'Uniswap', 'crypto', NULL, 10.66000000, 10.19000000, 10.22000000, -3.4164, -0.36150447, 6139401640.00, 526266222.00, 'https://coin-images.coingecko.com/coins/images/12504/large/uniswap-logo.png?1720676669', '2025-06-15 21:29:25', '2025-07-29 13:43:33', 10.22000000),
(38, 'AAVE/USD', 'Aave', 'crypto', NULL, 295.15000000, 284.13000000, 284.42000000, -3.0868, -9.05920736, 4322630458.00, 420475954.00, 'https://coin-images.coingecko.com/coins/images/12645/large/aave-token-round.png?1720472354', '2025-06-15 21:29:25', '2025-07-29 13:43:33', 284.42000000),
(39, 'DAI/USD', 'Dai', 'crypto', NULL, 1.00000000, 0.99949400, 0.99991200, 0.0254, 0.00025377, 3736756164.00, 88116531.00, 'https://coin-images.coingecko.com/coins/images/9956/large/Badge_Dai.png?1696509996', '2025-06-15 21:29:25', '2025-07-29 13:43:33', 0.99991200),
(40, 'SUSDE/USD', 'Ethena Staked USDe', 'crypto', NULL, 1.19000000, 1.18000000, 1.19000000, 0.0731, 0.00086625, 4375898493.00, 31401885.00, 'https://coin-images.coingecko.com/coins/images/33669/large/sUSDe-Symbol-Color.png?1716307680', '2025-06-15 21:29:25', '2025-07-29 13:43:33', 1.19000000),
(41, 'TAO/USD', 'Bittensor', 'crypto', NULL, 414.86000000, 389.87000000, 392.99000000, -4.6996, -19.37988998, 3746263398.00, 152441903.00, 'https://coin-images.coingecko.com/coins/images/28452/large/ARUsPeNQ_400x400.jpeg?1696527447', '2025-06-15 21:29:25', '2025-07-29 13:43:33', 392.99000000),
(42, 'OKB/USD', 'OKB', 'crypto', NULL, 48.91000000, 48.23000000, 48.70000000, -0.1593, -0.07770139, 2904846659.00, 35090639.00, 'https://coin-images.coingecko.com/coins/images/4463/large/WeChat_Image_20220118095654.png?1696505053', '2025-06-15 21:29:25', '2025-07-29 13:43:33', 48.70000000),
(43, 'ICP/USD', 'Internet Computer', 'crypto', NULL, 5.73000000, 5.47000000, 5.52000000, -3.2688, -0.18656315, 2957786764.00, 78001791.00, 'https://coin-images.coingecko.com/coins/images/14495/large/Internet_Computer_logo.png?1696514180', '2025-06-15 21:29:25', '2025-07-29 13:43:33', 5.52000000),
(44, 'APT/USD', 'APT/USD', 'crypto', 4.90000000, 4.99000000, 4.67000000, 4.90000000, -2.8571, -0.14000000, 3108771489.00, 468964801.00, 'https://coin-images.coingecko.com/coins/images/26455/large/aptos_round.png?1696525528', '2025-06-15 21:29:25', '2025-07-28 13:44:31', 4.76000000),
(45, 'BUIDL/USD', 'BUIDL/USD', 'crypto', 0.00000000, 0.00000000, 0.00000000, 0.00000000, 0.0000, 0.00000000, 2896419685.00, 0.00, 'https://coin-images.coingecko.com/coins/images/36291/large/blackrock.png?1711013223', '2025-06-15 21:29:25', '2025-07-28 13:44:40', 0.00000000),
(46, 'NEAR/USD', 'NEAR Protocol', 'crypto', NULL, 2.85000000, 2.69000000, 2.73000000, -4.1586, -0.11850800, 3385634613.00, 244638750.00, 'https://coin-images.coingecko.com/coins/images/10365/large/near.jpg?1696510367', '2025-06-15 21:29:25', '2025-07-29 13:43:33', 2.73000000),
(47, 'CRO/USD', 'Cronos', 'crypto', NULL, 0.14775700, 0.13588100, 0.14376200, 2.3730, 0.00333240, 4655600584.00, 102518190.00, 'https://coin-images.coingecko.com/coins/images/7310/large/cro_token_logo.png?1696507599', '2025-06-15 21:29:25', '2025-07-29 13:43:33', 0.14376200),
(48, 'TKX/USD', 'TKX/USD', 'crypto', 0.00000000, 0.00000000, 0.00000000, 0.00000000, 0.0000, 0.00000000, 2627469337.00, 29134412.00, 'https://coin-images.coingecko.com/coins/images/4984/large/TKX_-_Logo_-_RGB-15.png?1696505519', '2025-06-15 21:29:25', '2025-07-28 13:44:58', 0.00000000),
(49, 'JITOSOL/USD', 'Jito Staked SOL', 'crypto', NULL, 229.98000000, 220.79000000, 221.32000000, -3.2367, -7.40326231, 2897715769.00, 24212494.00, 'https://coin-images.coingecko.com/coins/images/28046/large/JitoSOL-200.png?1696527060', '2025-06-15 21:29:25', '2025-07-29 13:43:33', 221.32000000),
(50, 'ETC/USD', 'Ethereum Classic', 'crypto', NULL, 22.40000000, 21.67000000, 22.00000000, -1.7228, -0.38574373, 3364744319.00, 117570608.00, 'https://coin-images.coingecko.com/coins/images/453/large/ethereum-classic-logo.png?1696501717', '2025-06-15 21:29:25', '2025-07-29 13:43:33', 22.00000000),
(51, 'AAPL', 'Apple Inc', 'stock', 272.15500000, 274.60000000, 269.90000000, 272.19000000, 0.5437, 1.48000000, 4043844.44, NULL, 'https://static2.finnhub.io/file/publicdatany/finnhubimage/stock_logo/AAPL.png', '2025-06-15 21:43:50', '2025-12-20 22:01:05', 273.67000000),
(52, 'MSFT', 'Microsoft Corp', 'stock', 487.37000000, 487.85000000, 482.49000000, 483.98000000, 0.4008, 1.94000000, 3611540.93, NULL, 'https://static2.finnhub.io/file/publicdatany/finnhubimage/stock_logo/MSFT.png', '2025-06-15 21:43:51', '2025-12-20 20:01:12', 485.92000000),
(53, 'EURUSD', 'EURUSD', 'forex', 0.00000000, 0.00000000, 0.00000000, 0.00000000, 0.0000, 0.00000000, NULL, NULL, NULL, '2025-06-15 21:43:52', '2025-12-20 04:16:10', 0.00000000),
(54, 'GOOGL', 'Alphabet Inc', 'stock', 301.72000000, 303.96000000, 299.23080000, 296.72000000, 1.9345, 5.74000000, 3657170.36, NULL, 'https://static2.finnhub.io/file/publicdatany/finnhubimage/stock_logo/GOOG.png', '2025-06-15 21:53:09', '2025-12-20 12:31:08', 302.46000000),
(55, 'AMZN', 'Amazon.com Inc', 'stock', 216.34500000, 222.21000000, 215.18000000, 217.14000000, 1.6349, 3.55000000, 2359223.77, NULL, 'https://static2.finnhub.io/file/publicdatany/finnhubimage/stock_logo/AMZN.png', '2025-06-15 21:53:10', '2025-12-20 12:31:09', 220.69000000),
(56, 'META', 'META', 'stock', 609.03500000, 611.69000000, 595.40000000, 609.46000000, -1.2224, -7.45000000, NULL, NULL, 'https://static2.finnhub.io/file/publicdatany/finnhubimage/stock_logo/FB.png', '2025-06-15 21:53:11', '2025-12-20 12:31:11', 602.01000000),
(57, 'TSLA', 'Tesla Inc', 'stock', 462.76000000, 470.75000000, 462.76000000, 459.46000000, 2.2211, 10.20500000, 1527773.83, NULL, 'https://static2.finnhub.io/file/publicdatany/finnhubimage/stock_logo/TSLA.png', '2025-06-15 21:53:12', '2025-12-20 12:31:12', 469.66500000),
(58, 'NVDA', 'NVIDIA Corp', 'stock', 187.96500000, 190.10990000, 185.96000000, 183.16000000, 2.8172, 5.16000000, 4576176.09, NULL, 'https://static2.finnhub.io/file/publicdatany/finnhubimage/stock_logo/NVDA.png', '2025-06-15 21:53:14', '2025-12-20 12:31:13', 188.32000000),
(59, 'BRK.B', 'Berkshire Hathaway Inc', 'stock', 475.50000000, 488.79000000, 475.50000000, 475.68000000, 2.5185, 11.98000000, 1052751.14, NULL, 'https://static2.finnhub.io/file/publicdatany/finnhubimage/stock_logo/BRK.B.png', '2025-06-15 21:53:15', '2025-12-20 12:31:15', 487.66000000),
(60, 'JPM', 'JPMorgan Chase & Co', 'stock', 301.29000000, 301.68000000, 292.81010000, 298.38000000, -0.1207, -0.36000000, 819481.64, NULL, 'https://static2.finnhub.io/file/publicdatany/finnhubimage/stock_logo/JPM.png', '2025-06-15 21:53:16', '2025-12-20 12:31:16', 298.02000000),
(61, 'JNJ', 'Johnson & Johnson', 'stock', 214.00000000, 214.73000000, 208.81000000, 214.17000000, -2.2739, -4.87000000, 504265.42, NULL, 'https://static2.finnhub.io/file/publicdatany/finnhubimage/stock_logo/JNJ.png', '2025-06-15 21:53:18', '2025-12-19 12:31:20', 209.30000000),
(62, 'V', 'Visa Inc', 'stock', 329.88000000, 331.34000000, 324.71000000, 331.24000000, -1.3283, -4.40000000, 625602.83, NULL, 'https://static2.finnhub.io/file/publicdatany/finnhubimage/stock_logo/V.png', '2025-06-15 21:53:19', '2025-12-15 12:31:19', 326.84000000),
(63, 'WMT', 'Walmart Inc', 'stock', 103.59000000, 103.93000000, 102.02000000, 103.44000000, -0.8701, -0.90000000, 815064.56, NULL, 'https://static2.finnhub.io/file/publicdatany/finnhubimage/stock_logo/WMT.png', '2025-06-15 21:53:20', '2025-11-20 18:31:23', 102.54000000),
(64, 'PG', 'PG', 'stock', 147.75000000, 147.98000000, 145.01000000, 147.67000000, -1.2528, -1.85000000, NULL, NULL, 'https://static2.finnhub.io/file/publicdatany/finnhubimage/stock_logo/PG.png', '2025-06-15 21:53:21', '2025-11-20 18:31:24', 145.82000000),
(65, 'MA', 'Mastercard Inc', 'stock', 568.91000000, 571.65000000, 567.14500000, 568.22000000, 0.4470, 2.54000000, 515970.83, NULL, 'https://static2.finnhub.io/file/publicdatany/finnhubimage/stock_logo/MA.png', '2025-06-15 21:53:22', '2025-11-20 18:31:25', 570.76000000),
(66, 'DIS', 'Walt Disney Co', 'stock', 121.86000000, 121.86000000, 120.12000000, 121.47000000, -0.9344, -1.13500000, 218372.23, NULL, 'https://static2.finnhub.io/file/publicdatany/finnhubimage/stock_logo/DIS.png', '2025-06-15 21:53:23', '2025-11-18 14:30:25', 120.33500000),
(67, 'PEP', 'PepsiCo Inc', 'stock', 143.65000000, 143.65000000, 141.76000000, 143.45000000, -0.9341, -1.34000000, 196394.13, NULL, 'https://static2.finnhub.io/file/publicdatany/finnhubimage/stock_logo/PEP.png', '2025-06-15 21:53:24', '2025-11-18 14:30:26', 142.11000000),
(68, 'KO', 'Coca-Cola Co', 'stock', 69.16000000, 69.16000000, 68.54000000, 69.17000000, -0.7735, -0.53500000, 297726.11, NULL, 'https://static2.finnhub.io/file/publicdatany/finnhubimage/stock_logo/KO.png', '2025-06-15 21:53:25', '2025-11-18 14:30:27', 68.63500000),
(69, 'NFLX', 'Netflix Inc', 'stock', 1184.42000000, 1197.78990000, 1177.45700000, 1180.49000000, 0.6684, 7.89000000, 501621.29, NULL, 'https://static2.finnhub.io/file/publicdatany/finnhubimage/stock_logo/NFLX.png', '2025-06-15 21:53:26', '2025-11-18 14:30:28', 1188.38000000),
(70, 'ADBE', 'Adobe Inc', 'stock', 371.84000000, 372.59000000, 369.10000000, 370.74000000, -0.2535, -0.94000000, 157267.91, NULL, 'https://static2.finnhub.io/file/publicdatany/finnhubimage/stock_logo/ADBE.png', '2025-06-15 21:53:27', '2025-11-18 14:30:30', 369.80000000),
(71, 'CRM', 'Salesforce Inc', 'stock', 269.90000000, 269.95000000, 266.59000000, 269.11000000, -0.3196, -0.86000000, 257269.17, NULL, 'https://static2.finnhub.io/file/publicdatany/finnhubimage/stock_logo/CRM.png', '2025-06-15 21:53:28', '2025-11-18 14:30:33', 268.25000000),
(72, 'BAC', 'BAC', 'stock', 52.57500000, 52.58000000, 51.39000000, 52.61000000, -2.1479, -1.13000000, NULL, NULL, 'https://static2.finnhub.io/file/publicdatany/finnhubimage/stock_logo/BAC.png', '2025-06-15 21:53:29', '2025-11-18 14:30:37', 51.48000000),
(73, 'INTC', 'Intel Corp', 'stock', 20.75000000, 21.29000000, 20.69000000, 20.70000000, 1.0870, 0.22500000, 90293.40, NULL, 'https://static2.finnhub.io/file/publicdatany/finnhubimage/stock_logo/INTC.png', '2025-06-15 21:53:30', '2025-11-18 14:30:38', 20.92500000),
(74, 'CSCO', 'Cisco Systems Inc', 'stock', 68.75000000, 68.75000000, 67.58000000, 68.69000000, -1.5650, -1.07500000, 272012.29, NULL, 'https://static2.finnhub.io/file/publicdatany/finnhubimage/stock_logo/950800186156.png', '2025-06-15 21:53:31', '2025-11-18 14:30:39', 67.61500000),
(75, 'XOM', 'Exxon Mobil Corp', 'stock', 111.20000000, 111.84000000, 110.84000000, 110.40000000, 1.1957, 1.32000000, 475784.17, NULL, 'https://static2.finnhub.io/file/publicdatany/finnhubimage/stock_logo/XOM.png', '2025-06-15 21:53:32', '2025-11-18 14:30:41', 111.72000000),
(76, 'CVX', 'Chevron Corp', 'stock', 155.77000000, 156.38000000, 154.94840000, 154.84000000, 0.7298, 1.13000000, 317018.48, NULL, 'https://static2.finnhub.io/file/publicdatany/finnhubimage/stock_logo/CVX.png', '2025-06-15 21:53:33', '2025-11-18 14:30:42', 155.97000000),
(77, 'NKE', 'Nike Inc', 'stock', 76.58000000, 79.99000000, 76.58000000, 76.27000000, 3.9858, 3.04000000, 112643.45, NULL, 'https://static2.finnhub.io/file/publicdatany/finnhubimage/stock_logo/NKE.png', '2025-06-15 21:53:35', '2025-11-18 14:30:43', 79.31000000),
(78, 'PFE', 'Pfizer Inc', 'stock', 24.86000000, 24.86000000, 24.36000000, 24.79000000, -1.1497, -0.28500000, 140940.22, NULL, 'https://static2.finnhub.io/file/publicdatany/finnhubimage/stock_logo/PFE.png', '2025-06-15 21:53:36', '2025-11-18 14:30:44', 24.50500000),
(79, 'T', 'AT&T Inc', 'stock', 28.01000000, 28.01000000, 27.57000000, 28.00000000, -1.3393, -0.37500000, 201476.86, NULL, 'https://static2.finnhub.io/file/publicdatany/finnhubimage/stock_logo/T.png', '2025-06-15 21:53:37', '2025-11-18 14:30:46', 27.62500000),
(80, 'ORCL', 'Oracle Corp', 'stock', 246.83000000, 246.83000000, 243.66000000, 245.12000000, -0.1509, -0.37000000, 688501.15, NULL, 'https://static2.finnhub.io/file/publicdatany/finnhubimage/stock_logo/ORCL.png', '2025-06-15 21:53:38', '2025-11-18 14:30:47', 244.75000000),
(81, 'BA', 'Boeing Co', 'stock', 236.13000000, 238.05000000, 233.17000000, 236.16000000, -0.6267, -1.48000000, 177455.10, NULL, 'https://static2.finnhub.io/file/publicdatany/finnhubimage/stock_logo/BA.png', '2025-06-15 21:53:40', '2025-11-18 14:30:50', 234.68000000),
(82, 'VZ', 'Verizon Communications Inc', 'stock', 43.07000000, 43.07000000, 42.32000000, 43.08000000, -1.6249, -0.70000000, 181636.27, NULL, 'https://static2.finnhub.io/file/publicdatany/finnhubimage/stock_logo/VZ.png', '2025-06-15 21:53:41', '2025-11-18 14:30:51', 42.38000000),
(83, 'WFC', 'Wells Fargo & Co', 'stock', 84.54000000, 84.54000000, 83.88000000, 84.32000000, -0.4922, -0.41500000, 274392.69, NULL, 'https://static2.finnhub.io/file/publicdatany/finnhubimage/stock_logo/WFC.png', '2025-06-15 21:53:42', '2025-11-18 14:30:53', 83.90500000),
(84, 'C', 'Citigroup Inc', 'stock', 96.22000000, 96.22000000, 95.46500000, 96.07000000, -0.5048, -0.48500000, 179433.17, NULL, 'https://static2.finnhub.io/file/publicdatany/finnhubimage/stock_logo/C.png', '2025-06-15 21:53:43', '2025-11-18 14:30:54', 95.58500000),
(85, 'HD', 'Home Depot Inc', 'stock', 375.50000000, 379.40320000, 372.98000000, 375.34000000, 0.9751, 3.66000000, 373436.26, NULL, 'https://static2.finnhub.io/file/publicdatany/finnhubimage/stock_logo/HD.png', '2025-06-15 21:53:43', '2025-11-18 14:30:55', 379.00000000),
(86, 'UNH', 'UnitedHealth Group Inc', 'stock', 283.96000000, 285.00000000, 281.28000000, 281.06000000, 0.6280, 1.76500000, 254960.88, NULL, 'https://static2.finnhub.io/file/publicdatany/finnhubimage/stock_logo/UNH.png', '2025-06-15 21:53:44', '2025-11-18 14:30:56', 282.82500000),
(87, 'MRK', 'Merck & Co Inc', 'stock', 85.05000000, 85.05000000, 83.97000000, 84.71000000, -0.4132, -0.35000000, 212709.46, NULL, 'https://static2.finnhub.io/file/publicdatany/finnhubimage/stock_logo/MRK.png', '2025-06-15 21:53:45', '2025-11-18 14:30:58', 84.36000000),
(88, 'LLY', 'Eli Lilly and Co', 'stock', 813.84000000, 820.22000000, 809.48500000, 812.69000000, 0.2756, 2.24000000, 770215.23, NULL, 'https://static2.finnhub.io/file/publicdatany/finnhubimage/stock_logo/LLY.png', '2025-06-15 21:53:46', '2025-11-18 14:30:59', 814.93000000),
(89, 'TMO', 'Thermo Fisher Scientific Inc', 'stock', 480.92000000, 481.97000000, 474.87000000, 478.32000000, 0.5279, 2.52500000, 180562.88, NULL, 'https://static2.finnhub.io/file/publicdatany/finnhubimage/stock_logo/TMO.png', '2025-06-15 21:53:48', '2025-11-18 14:31:00', 480.84500000),
(90, 'AMGN', 'Amgen Inc', 'stock', 305.49000000, 306.00000000, 302.31000000, 306.58000000, -1.1351, -3.48000000, 164849.93, NULL, 'https://static2.finnhub.io/file/publicdatany/finnhubimage/stock_logo/AMGN.png', '2025-06-15 21:53:49', '2025-11-18 14:31:01', 303.10000000),
(91, 'USDJPY', 'USDJPY', 'forex', 0.00000000, 0.00000000, 0.00000000, 0.00000000, 0.0000, 0.00000000, NULL, NULL, NULL, '2025-06-15 21:54:23', '2025-07-28 13:06:40', 0.00000000),
(92, 'GBPUSD', 'GBPUSD', 'forex', 0.00000000, 0.00000000, 0.00000000, 0.00000000, 0.0000, 0.00000000, NULL, NULL, NULL, '2025-06-15 21:54:24', '2025-07-28 13:06:47', 0.00000000),
(93, 'USDCHF', 'USDCHF', 'forex', 0.00000000, 0.00000000, 0.00000000, 0.00000000, 0.0000, 0.00000000, NULL, NULL, NULL, '2025-06-15 21:54:25', '2025-07-28 13:06:56', 0.00000000),
(94, 'AUDUSD', 'AUDUSD', 'forex', 0.00000000, 0.00000000, 0.00000000, 0.00000000, 0.0000, 0.00000000, NULL, NULL, NULL, '2025-06-15 21:54:27', '2025-07-28 13:07:05', 0.00000000),
(95, 'USDCAD', 'USDCAD', 'forex', 0.00000000, 0.00000000, 0.00000000, 0.00000000, 0.0000, 0.00000000, NULL, NULL, NULL, '2025-06-15 21:54:28', '2025-07-28 13:07:13', 0.00000000),
(96, 'NZDUSD', 'NZDUSD', 'forex', 0.00000000, 0.00000000, 0.00000000, 0.00000000, 0.0000, 0.00000000, NULL, NULL, NULL, '2025-06-15 21:54:29', '2025-07-28 13:07:20', 0.00000000),
(97, 'EURGBP', 'EURGBP', 'forex', 0.00000000, 0.00000000, 0.00000000, 0.00000000, 0.0000, 0.00000000, NULL, NULL, NULL, '2025-06-15 21:54:30', '2025-07-28 13:07:27', 0.00000000),
(98, 'EURJPY', 'EURJPY', 'forex', 0.00000000, 0.00000000, 0.00000000, 0.00000000, 0.0000, 0.00000000, NULL, NULL, NULL, '2025-06-15 21:54:31', '2025-07-28 13:07:35', 0.00000000),
(99, 'GBPJPY', 'GBPJPY', 'forex', 0.00000000, 0.00000000, 0.00000000, 0.00000000, 0.0000, 0.00000000, NULL, NULL, NULL, '2025-06-15 21:54:33', '2025-07-28 13:07:42', 0.00000000),
(100, 'CHFJPY', 'CHFJPY', 'forex', 0.00000000, 0.00000000, 0.00000000, 0.00000000, 0.0000, 0.00000000, NULL, NULL, NULL, '2025-06-15 21:54:34', '2025-07-28 13:07:50', 0.00000000),
(101, 'EURCHF', 'EURCHF', 'forex', 0.00000000, 0.00000000, 0.00000000, 0.00000000, 0.0000, 0.00000000, NULL, NULL, NULL, '2025-06-15 21:54:35', '2025-07-28 13:08:00', 0.00000000),
(102, 'EURAUD', 'EURAUD', 'forex', 0.00000000, 0.00000000, 0.00000000, 0.00000000, 0.0000, 0.00000000, NULL, NULL, NULL, '2025-06-15 21:54:36', '2025-07-28 13:08:07', 0.00000000),
(103, 'AUDJPY', 'AUDJPY', 'forex', 0.00000000, 0.00000000, 0.00000000, 0.00000000, 0.0000, 0.00000000, NULL, NULL, NULL, '2025-06-15 21:54:37', '2025-07-28 13:08:13', 0.00000000),
(104, 'CADJPY', 'CADJPY', 'forex', 0.00000000, 0.00000000, 0.00000000, 0.00000000, 0.0000, 0.00000000, NULL, NULL, NULL, '2025-06-15 21:54:38', '2025-07-28 13:08:20', 0.00000000),
(105, 'AUDCAD', 'AUDCAD', 'forex', 0.00000000, 0.00000000, 0.00000000, 0.00000000, 0.0000, 0.00000000, NULL, NULL, NULL, '2025-06-15 21:54:39', '2025-07-28 13:08:27', 0.00000000),
(106, 'AUDNZD', 'AUDNZD', 'forex', 0.00000000, 0.00000000, 0.00000000, 0.00000000, 0.0000, 0.00000000, NULL, NULL, NULL, '2025-06-15 21:54:41', '2025-07-28 13:08:34', 0.00000000),
(107, 'GBPAUD', 'GBPAUD', 'forex', 0.00000000, 0.00000000, 0.00000000, 0.00000000, 0.0000, 0.00000000, NULL, NULL, NULL, '2025-06-15 21:54:42', '2025-07-28 13:08:41', 0.00000000),
(108, 'GBPCHF', 'GBPCHF', 'forex', 0.00000000, 0.00000000, 0.00000000, 0.00000000, 0.0000, 0.00000000, NULL, NULL, NULL, '2025-06-15 21:54:43', '2025-07-28 13:08:48', 0.00000000),
(109, 'EURNZD', 'EURNZD', 'forex', 0.00000000, 0.00000000, 0.00000000, 0.00000000, 0.0000, 0.00000000, NULL, NULL, NULL, '2025-06-15 21:54:44', '2025-07-28 13:08:55', 0.00000000),
(110, 'EURCAD', 'EURCAD', 'forex', 0.00000000, 0.00000000, 0.00000000, 0.00000000, 0.0000, 0.00000000, NULL, NULL, NULL, '2025-06-15 21:54:45', '2025-07-28 13:09:02', 0.00000000),
(111, 'NZDJPY', 'NZDJPY', 'forex', 0.00000000, 0.00000000, 0.00000000, 0.00000000, 0.0000, 0.00000000, NULL, NULL, NULL, '2025-06-15 21:54:47', '2025-07-28 13:09:11', 0.00000000),
(112, 'USDMXN', 'USDMXN', 'forex', 0.00000000, 0.00000000, 0.00000000, 0.00000000, 0.0000, 0.00000000, NULL, NULL, NULL, '2025-06-15 21:54:48', '2025-07-28 13:09:18', 0.00000000),
(113, 'USDZAR', 'USDZAR', 'forex', 0.00000000, 0.00000000, 0.00000000, 0.00000000, 0.0000, 0.00000000, NULL, NULL, NULL, '2025-06-15 21:54:50', '2025-07-28 13:09:25', 0.00000000),
(114, 'USDHKD', 'USDHKD', 'forex', 0.00000000, 0.00000000, 0.00000000, 0.00000000, 0.0000, 0.00000000, NULL, NULL, NULL, '2025-06-15 21:54:52', '2025-07-28 13:09:33', 0.00000000),
(115, 'USDSEK', 'USDSEK', 'forex', 0.00000000, 0.00000000, 0.00000000, 0.00000000, 0.0000, 0.00000000, NULL, NULL, NULL, '2025-06-15 21:54:54', '2025-07-28 13:09:40', 0.00000000),
(116, 'USDNOK', 'USDNOK', 'forex', 0.00000000, 0.00000000, 0.00000000, 0.00000000, 0.0000, 0.00000000, NULL, NULL, NULL, '2025-06-15 21:54:56', '2025-07-28 13:09:47', 0.00000000),
(117, 'USDTRY', 'USDTRY', 'forex', 0.00000000, 0.00000000, 0.00000000, 0.00000000, 0.0000, 0.00000000, NULL, NULL, NULL, '2025-06-15 21:54:57', '2025-07-28 13:09:54', 0.00000000),
(118, 'USDINR', 'USDINR', 'forex', 0.00000000, 0.00000000, 0.00000000, 0.00000000, 0.0000, 0.00000000, NULL, NULL, NULL, '2025-06-15 21:54:58', '2025-07-28 13:10:01', 0.00000000),
(119, 'USDCNH', 'USDCNH', 'forex', 0.00000000, 0.00000000, 0.00000000, 0.00000000, 0.0000, 0.00000000, NULL, NULL, NULL, '2025-06-15 21:54:59', '2025-07-28 13:10:08', 0.00000000),
(120, 'XAUUSD', 'XAUUSD', 'commodity', 0.00000000, 0.00000000, 0.00000000, 0.00000000, 0.0000, 0.00000000, NULL, NULL, NULL, '2025-06-15 22:02:04', '2025-07-24 14:13:56', 0.00000000),
(121, 'XAGUSD', 'XAGUSD', 'commodity', 0.00000000, 0.00000000, 0.00000000, 0.00000000, 0.0000, 0.00000000, NULL, NULL, NULL, '2025-06-15 22:02:06', '2025-07-24 14:13:59', 0.00000000),
(122, 'WTI', 'WTI', 'commodity', 1.81000000, 1.88000000, 1.76990000, 1.74000000, 5.7471, 0.10000000, 257.65, NULL, 'https://static2.finnhub.io/file/publicdatany/finnhubimage/stock_logo/WTI.png', '2025-06-15 22:02:07', '2025-11-18 14:16:08', 1.84000000),
(123, 'BRENT', 'BRENT', 'commodity', 0.00000000, 0.00000000, 0.00000000, 0.00000000, 0.0000, 0.00000000, NULL, NULL, NULL, '2025-06-15 22:02:08', '2025-07-28 13:55:12', 0.00000000),
(124, 'NGAS', 'NGAS', 'commodity', 0.00000000, 0.00000000, 0.00000000, 0.00000000, 0.0000, 0.00000000, NULL, NULL, NULL, '2025-06-15 22:02:09', '2025-07-28 13:55:17', 0.00000000),
(125, 'COPPER', 'COPPER', 'commodity', 0.00000000, 0.00000000, 0.00000000, 0.00000000, 0.0000, 0.00000000, NULL, NULL, NULL, '2025-06-15 22:02:10', '2025-07-28 13:55:21', 0.00000000),
(126, 'PLATINUM', 'PLATINUM', 'commodity', 0.00000000, 0.00000000, 0.00000000, 0.00000000, 0.0000, 0.00000000, NULL, NULL, NULL, '2025-06-15 22:02:12', '2025-07-28 13:55:26', 0.00000000),
(127, 'PALLADIUM', 'PALLADIUM', 'commodity', 0.00000000, 0.00000000, 0.00000000, 0.00000000, 0.0000, 0.00000000, NULL, NULL, NULL, '2025-06-15 22:02:13', '2025-07-28 13:55:31', 0.00000000),
(128, 'CORN', 'CORN', 'commodity', 17.45000000, 17.47000000, 17.29000000, 17.49000000, -0.8576, -0.15000000, NULL, NULL, NULL, '2025-06-15 22:02:14', '2025-11-18 14:16:09', 17.34000000),
(129, 'WHEAT', 'WHEAT', 'commodity', 0.00000000, 0.00000000, 0.00000000, 0.00000000, 0.0000, 0.00000000, NULL, NULL, NULL, '2025-06-15 22:02:15', '2025-07-28 13:55:41', 0.00000000),
(130, 'SOYBEAN', 'SOYBEAN', 'commodity', 0.00000000, 0.00000000, 0.00000000, 0.00000000, 0.0000, 0.00000000, NULL, NULL, NULL, '2025-06-15 22:02:17', '2025-07-28 13:55:46', 0.00000000),
(131, 'COCOA', 'COCOA', 'commodity', 0.00000000, 0.00000000, 0.00000000, 0.00000000, 0.0000, 0.00000000, NULL, NULL, NULL, '2025-06-15 22:02:18', '2025-07-28 13:55:57', 0.00000000),
(132, 'COFFEE', 'COFFEE', 'commodity', 0.00000000, 0.00000000, 0.00000000, 0.00000000, 0.0000, 0.00000000, NULL, NULL, NULL, '2025-06-15 22:02:19', '2025-07-28 13:56:02', 0.00000000),
(133, 'SUGAR', 'SUGAR', 'commodity', 0.00000000, 0.00000000, 0.00000000, 0.00000000, 0.0000, 0.00000000, NULL, NULL, NULL, '2025-06-15 22:02:21', '2025-07-28 13:56:07', 0.00000000),
(134, 'COTTON', 'COTTON', 'commodity', 0.00000000, 0.00000000, 0.00000000, 0.00000000, 0.0000, 0.00000000, NULL, NULL, NULL, '2025-06-15 22:02:23', '2025-07-28 13:56:12', 0.00000000),
(135, 'US10Y', 'US10Y', 'bond', 0.00000000, 0.00000000, 0.00000000, 0.00000000, 0.0000, 0.00000000, NULL, NULL, NULL, '2025-06-15 22:02:24', '2025-07-28 13:56:17', 0.00000000),
(136, 'US2Y', 'US2Y', 'bond', 0.00000000, 0.00000000, 0.00000000, 0.00000000, 0.0000, 0.00000000, NULL, NULL, NULL, '2025-06-15 22:02:25', '2025-07-28 13:56:22', 0.00000000),
(137, 'US30Y', 'US30Y', 'bond', 0.00000000, 0.00000000, 0.00000000, 0.00000000, 0.0000, 0.00000000, NULL, NULL, NULL, '2025-06-15 22:02:26', '2025-07-28 13:56:26', 0.00000000),
(138, 'DE10Y', 'DE10Y', 'bond', 0.00000000, 0.00000000, 0.00000000, 0.00000000, 0.0000, 0.00000000, NULL, NULL, NULL, '2025-06-15 22:02:27', '2025-07-28 13:56:31', 0.00000000),
(139, 'JP10Y', 'JP10Y', 'bond', 0.00000000, 0.00000000, 0.00000000, 0.00000000, 0.0000, 0.00000000, NULL, NULL, NULL, '2025-06-15 22:02:28', '2025-07-28 13:56:37', 0.00000000),
(140, 'UK10Y', 'UK10Y', 'bond', 0.00000000, 0.00000000, 0.00000000, 0.00000000, 0.0000, 0.00000000, NULL, NULL, NULL, '2025-06-15 22:02:29', '2025-07-28 13:56:41', 0.00000000),
(141, 'FR10Y', 'FR10Y', 'bond', 0.00000000, 0.00000000, 0.00000000, 0.00000000, 0.0000, 0.00000000, NULL, NULL, NULL, '2025-06-15 22:02:31', '2025-07-28 13:56:46', 0.00000000);

-- --------------------------------------------------------

--
-- Table structure for table `investments`
--

CREATE TABLE `investments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `plan` int(11) DEFAULT NULL,
  `user` int(11) DEFAULT NULL,
  `amount` varchar(255) DEFAULT NULL,
  `active` varchar(255) DEFAULT NULL,
  `inv_duration` varchar(255) DEFAULT NULL,
  `expire_date` datetime DEFAULT NULL,
  `activated_at` datetime DEFAULT NULL,
  `last_growth` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `profit_earned` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ipaddresses`
--

CREATE TABLE `ipaddresses` (
  `id` int(10) UNSIGNED NOT NULL,
  `ipaddress` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kycs`
--

CREATE TABLE `kycs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(191) DEFAULT NULL,
  `last_name` varchar(191) DEFAULT NULL,
  `email` varchar(191) DEFAULT NULL,
  `phone_number` varchar(191) DEFAULT NULL,
  `dob` varchar(191) DEFAULT NULL,
  `social_media` varchar(191) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `city` varchar(191) DEFAULT NULL,
  `state` varchar(191) DEFAULT NULL,
  `country` varchar(191) DEFAULT NULL,
  `document_type` varchar(191) DEFAULT NULL,
  `frontimg` text DEFAULT NULL,
  `backimg` text DEFAULT NULL,
  `status` varchar(191) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `loans`
--

CREATE TABLE `loans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user` int(11) DEFAULT NULL,
  `amount` int(11) DEFAULT NULL,
  `facility` varchar(255) DEFAULT NULL,
  `duration` varchar(255) DEFAULT NULL,
  `purpose` longtext DEFAULT NULL,
  `income` varchar(255) DEFAULT NULL,
  `inv_duration` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `active` varchar(255) DEFAULT NULL,
  `activated_at` timestamp(3) NULL DEFAULT NULL,
  `last_growth` timestamp(3) NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `market_prices`
--

CREATE TABLE `market_prices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `instrument_id` bigint(20) UNSIGNED NOT NULL,
  `open` decimal(20,8) NOT NULL,
  `high` decimal(20,8) NOT NULL,
  `low` decimal(20,8) NOT NULL,
  `close` decimal(20,8) NOT NULL,
  `volume` decimal(30,8) DEFAULT NULL,
  `interval` varchar(255) NOT NULL DEFAULT '1m',
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `source` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2021_03_09_142220_create_sessions_table', 1),
(7, '2021_03_10_082445_create_admins_table', 2),
(8, '2021_03_10_082519_create_agents_table', 2),
(9, '2021_03_10_082715_create_assets_table', 2),
(10, '2021_03_10_082817_create_contents_table', 2),
(11, '2021_03_10_083110_create_cp_transactions_table', 2),
(12, '2021_03_10_083324_create_deposits_table', 2),
(13, '2021_03_10_083400_create_faqs_table', 2),
(14, '2021_03_10_083510_create_images_table', 2),
(15, '2021_03_10_083557_create_mt4_details_table', 2),
(16, '2021_03_10_083627_create_notifications_table', 2),
(17, '2021_03_10_083824_create_plans_table', 2),
(18, '2021_03_10_083850_create_settings_table', 2),
(19, '2021_03_10_083936_create_testimonies_table', 2),
(20, '2021_03_10_084009_create_tp__transactions_table', 2),
(21, '2021_03_10_084031_create_upgrades_table', 2),
(22, '2021_03_10_084120_create_userlogs_table', 2),
(23, '2021_03_10_084140_create_user_plans_table', 2),
(24, '2021_03_10_084235_create_wdmethods_table', 2),
(25, '2021_03_10_084300_create_withdrawals_table', 2),
(26, '2021_04_06_083043_create_tasks_table', 3),
(27, '2021_04_23_110006_create_exchanges_table', 4),
(28, '2021_04_23_114622_create_coin_transactions_table', 5),
(29, '2021_04_27_080945_create_currencies_table', 6),
(30, '2021_04_29_110349_create_c_withdrawals_table', 7),
(31, '2021_10_07_112653_create_ipaddresses_table', 8),
(32, '2021_10_27_114829_create_terms_privacies_table', 9),
(33, '2021_10_31_131124_create_crypto_accounts_table', 10),
(34, '2021_10_31_132849_create_settings_conts_table', 11),
(35, '2022_01_24_123921_create_copy_trade_accounts_table', 12),
(36, '2022_02_03_131113_create_tasks_table', 13),
(37, '2022_03_16_135903_create_adverts_table', 14),
(38, '2022_03_17_114728_create_orders_p2ps_table', 15),
(39, '2022_05_23_215802_create_crypto_records_table', 16),
(40, '2022_06_13_220336_create_kycs_table', 17),
(41, '2022_06_23_030303_create_bnc_transactions_table', 18),
(42, '2022_09_02_074542_create_courses_table', 19),
(43, '2022_09_02_074626_create_course_lessons_table', 20),
(44, '2022_09_02_074608_create_course_categories_table', 21),
(45, '2022_09_06_165000_create_user_courses_table', 22),
(46, '2014_01_28_232217_create_autologin_tokens_table', 23),
(47, '2014_02_07_004118_add_unique_index_to_autologin_tokens_table', 24),
(48, '2014_03_02_162640_add_count_to_autologin_tokens_table', 25),
(53, '2022_09_19_142955_create_master_accounts_table', 26),
(54, '2022_09_29_153351_create_signal_tbs_table', 27),
(55, '2022_09_29_175703_create_signal_subscribers_table', 28),
(56, '2023_01_30_102934_create_themes_table', 29),
(57, '2023_02_17_165829_create_cache_table', 30),
(58, '2021_10_05_122902_create_activities_table', 31),
(59, '2024_02_18_143534_user_investmentplans_table', 31),
(60, '2024_02_18_145243_create_user_investmentplans_table', 32),
(61, '2024_02_19_095728_create_investment_table', 33),
(62, '2024_02_19_100007_create_investments_table', 34),
(63, '2024_02_19_144804_create_signals_table', 35),
(64, '2024_02_19_191659_create_user_signals_table', 36),
(65, '2024_05_29_083844_create_copytradings_table', 37),
(66, '2024_05_30_221948_create_user_copytradings_table', 37),
(67, '2025_06_15_221934_create_instruments_table', 38),
(68, '2025_06_15_232830_create_trades_table', 39),
(69, '2025_06_15_232914_create_market_prices_table', 39),
(70, '2025_06_16_001001_add_price_to_instruments_table', 40),
(71, '2025_07_23_000001_add_copy_trading_fields_to_copytradings_table', 41),
(72, '2025_07_23_000002_add_profit_tracking_to_user_copytradings_table', 41),
(73, '2025_07_23_000003_add_copy_trading_fields_to_users_table', 42),
(74, '2025_07_23_000010_create_trading_bots_table', 43),
(75, '2025_07_23_000011_create_user_bot_investments_table', 44),
(76, '2025_07_23_000012_create_bot_trading_history_table', 44),
(77, '2025_01_23_000001_add_test_copy_experts', 45),
(78, '2023_07_24_000001_create_plan_categories_table', 46),
(79, '2023_07_24_000002_add_deleted_at_column_to_plans_table', 47),
(80, '2025_07_25_000001_ensure_plan_plan_category_table_exists', 48),
(81, '2025_07_24_000003_add_active_column_to_plans_table', 49),
(82, '2025_07_24_094029_create_plan_plan_category_table', 49),
(83, '2025_07_24_195026_update_wallets_table_for_enhanced_features', 49),
(84, '2023_07_27_000000_update_notifications_table', 50);

-- --------------------------------------------------------

--
-- Table structure for table `mt4_details`
--

CREATE TABLE `mt4_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `client_id` int(11) DEFAULT NULL,
  `mt4_id` varchar(191) DEFAULT NULL,
  `mt4_password` varchar(191) DEFAULT NULL,
  `account_name` varchar(191) DEFAULT NULL,
  `account_type` varchar(191) DEFAULT NULL,
  `currency` varchar(191) DEFAULT NULL,
  `leverage` varchar(191) DEFAULT NULL,
  `server` varchar(191) DEFAULT NULL,
  `options` varchar(191) DEFAULT NULL,
  `duration` varchar(191) DEFAULT NULL,
  `status` varchar(191) DEFAULT NULL,
  `start_date` datetime DEFAULT NULL,
  `end_date` datetime DEFAULT NULL,
  `reminded_at` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `admin_id` int(11) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `type` varchar(255) NOT NULL DEFAULT 'info',
  `is_read` tinyint(1) NOT NULL DEFAULT 0,
  `source_id` int(11) DEFAULT NULL,
  `source_type` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `user_id`, `admin_id`, `title`, `message`, `type`, `is_read`, `source_id`, `source_type`, `created_at`, `updated_at`) VALUES
(1, 298, NULL, 'New Login', 'New login detected from IP: 23.27.255.224 on iPhone - Safari at 2026-01-05 10:39:30', 'login', 0, NULL, NULL, '2026-01-05 10:39:30', '2026-01-05 10:39:30'),
(2, NULL, 1, 'User Login', 'User davide (scn3305@gmail.com) logged in from IP: 23.27.255.224 on iPhone - Safari.', 'login', 0, NULL, NULL, '2026-01-05 10:39:30', '2026-01-05 10:39:30'),
(3, 298, NULL, 'New Login', 'New login detected from IP: 23.27.255.224 on iPhone - Safari at 2026-01-06 13:51:14', 'login', 0, NULL, NULL, '2026-01-06 13:51:14', '2026-01-06 13:51:14'),
(4, NULL, 1, 'User Login', 'User davide (scn3305@gmail.com) logged in from IP: 23.27.255.224 on iPhone - Safari.', 'login', 0, NULL, NULL, '2026-01-06 13:51:14', '2026-01-06 13:51:14'),
(5, 298, NULL, 'New Login', 'New login detected from IP: 23.27.255.224 on iPhone - Safari at 2026-01-07 16:02:44', 'login', 0, NULL, NULL, '2026-01-07 16:02:44', '2026-01-07 16:02:44'),
(6, NULL, 1, 'User Login', 'User davide (scn3305@gmail.com) logged in from IP: 23.27.255.224 on iPhone - Safari.', 'login', 0, NULL, NULL, '2026-01-07 16:02:44', '2026-01-07 16:02:44'),
(7, 298, NULL, 'New Login', 'New login detected from IP: 23.27.255.224 on Macintosh - Firefox at 2026-01-07 16:13:43', 'login', 0, NULL, NULL, '2026-01-07 16:13:43', '2026-01-07 16:13:43'),
(8, NULL, 1, 'User Login', 'User davide (scn3305@gmail.com) logged in from IP: 23.27.255.224 on Macintosh - Firefox.', 'login', 0, NULL, NULL, '2026-01-07 16:13:43', '2026-01-07 16:13:43'),
(9, 298, NULL, 'Trading Bot Activated', 'Your investment in BTCUSDT bot for $500 has been activated.', 'bot_purchase', 0, 16, 'App\\Models\\UserBotInvestment', '2026-01-07 16:30:08', '2026-01-07 16:30:08'),
(10, NULL, 1, 'New Trading Bot Purchase', 'User davide (scn3305@gmail.com) has purchased the BTCUSDT bot for $500.', 'bot_purchase', 0, 16, 'App\\Models\\UserBotInvestment', '2026-01-07 16:30:08', '2026-01-07 16:30:08'),
(11, 298, NULL, 'Trade Initiated', 'Your trade of $700 in UK10Y asset has been initiated successfully.', 'trade', 0, 1, 'App\\Models\\User_plans', '2026-01-07 17:05:10', '2026-01-07 17:05:10'),
(12, NULL, 1, 'New Trade Activity', 'User davide (scn3305@gmail.com) has initiated a trade of $700 in UK10Y asset.', 'trade', 0, 1, 'App\\Models\\User_plans', '2026-01-07 17:05:10', '2026-01-07 17:05:10');

-- --------------------------------------------------------

--
-- Table structure for table `orders_p2ps`
--

CREATE TABLE `orders_p2ps` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) DEFAULT NULL,
  `sender` bigint(20) UNSIGNED DEFAULT NULL,
  `receiver` bigint(20) UNSIGNED DEFAULT NULL,
  `order` varchar(255) DEFAULT NULL,
  `order_id` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `payment_status` varchar(20) DEFAULT NULL,
  `first_payment` varchar(20) DEFAULT NULL,
  `send` varchar(255) DEFAULT NULL,
  `receive` varchar(255) DEFAULT NULL,
  `screenshot` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) NOT NULL,
  `token` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('evakovac929@gmail.com', '$2y$10$ta95JpmGUxoTcQtHtUOJoeBlvZ/0xqKhQ4zZkjt8xFCOJeu9ALXX2', '2022-10-09 13:20:37'),
('dietanurubright@gmail.com', '$2y$10$eMkF7ePdKJGamoeR.NC6necoEXC50vZct1L4Fy6swaHCZYlihha/.', '2023-04-29 14:06:19'),
('mmpungose@gmail.com', '$2y$10$plV7FANInWAAg6kOB2wcp..8dTLwIIf.i9A/FYIbbQ6u3DHVU18fu', '2023-05-01 18:38:25'),
('dladlatonini@gmail.com', '$2y$10$SYXBsuSb8Zc.SxI/GL7NZepyW5A3WyJG7qNdpwSJaq4q0AT5fSDk6', '2023-05-04 15:03:56'),
('lindiwencokwana96@gmail.configurability', '$2y$10$EGOvfVeBKYRwEp2QJ0jiwuXMV/O.DnqjaOk8xEBxTv5A96B50iDGa', '2023-05-10 06:22:34'),
('woodman060453@gmail.com', '$2y$10$1nPVM/NiWn8REHxvbYb89.xzt2APro8L9S5pJbA.solomhFuj1o/G', '2023-10-03 11:50:42'),
('jeffmcnees@ymail.com', '$2y$10$itTuDFRQMX9j1ssV7hKrLesMycIJMPc9IOe2mBTIr7UlS9EjBrcKO', '2024-02-01 17:15:24'),
('dwnosorio@outlook.com', '$2y$10$vKF8SdvVOFqZescyAkHV7.OOLUX.SnAEVVzLcfpL30LEK4dcjBc9.', '2024-03-23 17:41:26');

-- --------------------------------------------------------

--
-- Table structure for table `paystacks`
--

CREATE TABLE `paystacks` (
  `id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `paystack_public_key` text DEFAULT NULL,
  `paystack_secret_key` text DEFAULT NULL,
  `paystack_url` varchar(191) DEFAULT NULL,
  `paystack_email` varchar(191) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `paystacks`
--

INSERT INTO `paystacks` (`id`, `created_at`, `updated_at`, `paystack_public_key`, `paystack_secret_key`, `paystack_url`, `paystack_email`) VALUES
(1, '2021-10-07 10:26:10', '2022-11-26 18:04:02', NULL, NULL, 'https://api.paystack.co', 'test@mail.com');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(191) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `plans`
--

CREATE TABLE `plans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) DEFAULT NULL,
  `price` varchar(191) DEFAULT NULL,
  `min_price` varchar(191) DEFAULT NULL,
  `max_price` varchar(191) DEFAULT NULL,
  `minr` varchar(191) DEFAULT NULL,
  `maxr` varchar(191) DEFAULT NULL,
  `gift` varchar(191) DEFAULT NULL,
  `expected_return` varchar(191) DEFAULT NULL,
  `type` varchar(191) DEFAULT NULL,
  `increment_interval` varchar(191) DEFAULT NULL,
  `increment_type` varchar(191) DEFAULT NULL,
  `increment_amount` varchar(191) DEFAULT NULL,
  `expiration` varchar(191) DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `tag` varchar(255) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `investment_type` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(191) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` text NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('257jl6vKuSIF29haaiiWH7Ebis1XZ1J47AS8UlJ4', NULL, '54.39.190.134', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/122.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoicmNJRVJjYXdmelZkUHl3STJ0VTU3VVJSOWFjamVMcFNrM1JDYU5NcCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDA6Imh0dHBzOi8vc3RhZ2luZ21lbWVidWxsLnJhbmRzZW5kZXIuc3BhY2UiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1767823867),
('bRWMfBD9OTCPbB0OoZgRbGW4F9oYVBWCvEhDBKRP', NULL, '94.156.148.169', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:146.0) Gecko/20100101 Firefox/146.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiVnhucTloRmVGV1ltaFJadVpsZWsyMUt4ckM3dXZEOVpBdWR6MGR6bSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDc6Imh0dHBzOi8vc3RhZ2luZ21lbWVidWxsLnJhbmRzZW5kZXIuc3BhY2UvZXZlbnRzIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1767821635),
('BsAhFngMtKuFKOtVERWaD2EPW7PaBNuJ6UiCQ5p3', NULL, '54.39.190.134', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/122.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiOUlBWkg4cFFLWVByNGNuRDhpNDNvYUZKSmdGd3FsTFIzTFR2c1U4bSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDA6Imh0dHBzOi8vc3RhZ2luZ21lbWVidWxsLnJhbmRzZW5kZXIuc3BhY2UiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1767823320),
('GKsOdjSYiukuB3i9WM7Xec7uwgZDIwDZDRsbYget', NULL, '34.26.231.8', 'Mozilla/5.0 (compatible; CMS-Checker/1.0; +https://example.com)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiTXhidzJLWWFuWVZFOFU2cGJjQmJqNEhaSXV3NUlzU2JQYmV4Y2FHTCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDA6Imh0dHBzOi8vc3RhZ2luZ21lbWVidWxsLnJhbmRzZW5kZXIuc3BhY2UiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1767806146),
('H3ZBtdyaYeg8hMfK7nNpeUXLLnQjdj2z5TLhC2wZ', 298, '23.27.255.224', 'Mozilla/5.0 (iPhone; CPU iPhone OS 16_7_12 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/16.6.1 Mobile/15E148 Safari/604.1', 'YTo5OntzOjY6Il90b2tlbiI7czo0MDoic29wV09CMnZ0S2liNGZtSUpNc1pUbXlWNk5iODA2QXhYQVJPRUpyMiI7czozOiJ1cmwiO2E6MDp7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjUwOiJodHRwczovL3N0YWdpbmdtZW1lYnVsbC5yYW5kc2VuZGVyLnNwYWNlL2Rhc2hib2FyZCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTI6ImxvZ2luX2FkbWluXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTtzOjg6ImdldEFub3VjIjtzOjQ6InRydWUiO3M6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjI5ODtzOjE3OiJwYXNzd29yZF9oYXNoX3dlYiI7czo2MDoiJDJ5JDEwJHRpM1poUUE2Si5jbVpFOFZNUHdkQU9lZDBCaS5RanplQWZxRlY4Qk5zSS43RW5ObkJUQk1hIjtzOjIxOiJwYXNzd29yZF9oYXNoX3NhbmN0dW0iO3M6NjA6IiQyeSQxMCR0aTNaaFFBNkouY21aRThWTVB3ZEFPZWQwQmkuUWp6ZUFmcUZWOEJOc0kuN0VuTm5CVEJNYSI7fQ==', 1767804791),
('j0xiMZJtb0e48tDncRqpwJALiGEgxDjUmyG3hBwq', NULL, '54.39.190.134', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/122.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiYXBSQk9JcVFNemo4Ymt0VVBiRE44eEdWU05ya3hMUFJRV2QwTW96SSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDA6Imh0dHBzOi8vc3RhZ2luZ21lbWVidWxsLnJhbmRzZW5kZXIuc3BhY2UiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1767823395),
('j88HbuOPPmGLwoPhXoKqo7iZYvhUZgYdd7UaaXlT', NULL, '54.39.190.134', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/122.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiS3dwRFhyMnpXS0tNVVVKd0VEbGtHU3hkajJweFRpdlJiNHpXMEpOSiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDA6Imh0dHBzOi8vc3RhZ2luZ21lbWVidWxsLnJhbmRzZW5kZXIuc3BhY2UiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1767823279),
('joPHsLmEdVR8V0jQD3C9nWMksypt8cqLbccABZ9K', NULL, '54.39.190.134', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/122.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiY3NmT0R6Y3o5TmU5MDdId1NuM1FFenVwbjAzVmhGRFlScTB3Qnk1SCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDA6Imh0dHBzOi8vc3RhZ2luZ21lbWVidWxsLnJhbmRzZW5kZXIuc3BhY2UiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1767823748),
('m7HYnyPn0v5tqbNFXggFbvpsXTBgsRt57pCFmGRl', NULL, '54.39.190.134', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/122.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiSnpDRlBRUnRNMFp6VjRJZDdkWXdIM1hvNDBENWFwZXo3Tmo0Zm4zNSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDA6Imh0dHBzOi8vc3RhZ2luZ21lbWVidWxsLnJhbmRzZW5kZXIuc3BhY2UiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1767823512),
('NJm5zdOIuMta17pAlOJQhtiIBx9QWu4pgEWKgyZq', NULL, '34.26.231.8', 'Mozilla/5.0 (compatible; CMS-Checker/1.0; +https://example.com)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiVGRRSHdrY2FDQ0YwSDZqWEhrbmFhSmVVOTVGOTd0MElpWHRoTG02SyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDQ6Imh0dHBzOi8vd3d3LnN0YWdpbmdtZW1lYnVsbC5yYW5kc2VuZGVyLnNwYWNlIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1767806147),
('npq8LxgG22LymMDBMGf7WaGxINQ18PGTD7CytFws', 298, '23.27.255.224', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10.15; rv:146.0) Gecko/20100101 Firefox/146.0', 'YToxMTp7czo2OiJfdG9rZW4iO3M6NDA6ImlLOFR0Z3B1bU5Qak9peWo5Mml0NE83V1Z2dWVFZjRhQUZ0QTVQNTUiO3M6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjU5OiJodHRwczovL3N0YWdpbmdtZW1lYnVsbC5yYW5kc2VuZGVyLnNwYWNlL2Rhc2hib2FyZC9reWMtZm9ybSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6ODoiZ2V0QW5vdWMiO3M6NDoidHJ1ZSI7czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6Mjk4O3M6MTc6InBhc3N3b3JkX2hhc2hfd2ViIjtzOjYwOiIkMnkkMTAkdGkzWmhRQTZKLmNtWkU4Vk1Qd2RBT2VkMEJpLlFqemVBZnFGVjhCTnNJLjdFbk5uQlRCTWEiO3M6MjE6InBhc3N3b3JkX2hhc2hfc2FuY3R1bSI7czo2MDoiJDJ5JDEwJHRpM1poUUE2Si5jbVpFOFZNUHdkQU9lZDBCaS5RanplQWZxRlY4Qk5zSS43RW5ObkJUQk1hIjtzOjY6ImFtb3VudCI7czo0OiI1MDAwIjtzOjEyOiJwYXltZW50X21vZGUiO3M6NjoiU29sYW5hIjtzOjY6ImludGVudCI7czowOiIiO3M6NToiYXNzZXQiO047fQ==', 1767808875),
('NtwgDhfYhjsiC0268zAAg7JCFihRMxtidsUd6U7T', NULL, '54.39.190.134', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/122.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoidHk4Mk9kdkE2TFYxdklGT25SZXRpd0xXMTZFVnF5NmpjYTU2bU1kVyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDA6Imh0dHBzOi8vc3RhZ2luZ21lbWVidWxsLnJhbmRzZW5kZXIuc3BhY2UiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1767823627),
('orjJN2VlmSFy9o425Zq5vF0HSIcKKYTDgyN6u4F6', NULL, '54.39.190.134', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/122.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiZ2VXdnZ4WkdlUmRSM1EycnBJZlFWQks0TUlsRGl3bDgyS0JPZEVidCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDA6Imh0dHBzOi8vc3RhZ2luZ21lbWVidWxsLnJhbmRzZW5kZXIuc3BhY2UiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1767823560),
('rmAHcZM66cXM1Z5djnQSfZbA7cOoIkQItZEs1eMO', NULL, '54.39.190.134', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/122.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiNm1OMUVRT2p5M2VDRUpYMk9tYkQwNnUyeEFUaGM3VmxPdEcwbzdCeiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDA6Imh0dHBzOi8vc3RhZ2luZ21lbWVidWxsLnJhbmRzZW5kZXIuc3BhY2UiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1767823811),
('VJjts9UOm94or50r5bmTsOH6q1ldHN1rljzMArmq', NULL, '54.39.190.134', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/122.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiOU1qeWVCVGxDTlJVZk5jMjc4OEM2R01ZcFVzNG5OUmtXNmxJTVVPUCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDA6Imh0dHBzOi8vc3RhZ2luZ21lbWVidWxsLnJhbmRzZW5kZXIuc3BhY2UiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1767823698),
('VUFsoFJP5VsafczgrC01qxJ1nmFZYA7A6uR26HfZ', NULL, '23.27.255.224', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10.15; rv:146.0) Gecko/20100101 Firefox/146.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoibDExWjVNWVpuRmNiaXdIY2wyNDFSZk5qNE5URGZSTWkweldtc1Z3OSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDA6Imh0dHBzOi8vc3RhZ2luZ21lbWVidWxsLnJhbmRzZW5kZXIuc3BhY2UiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1767802369),
('WkN0H0ubSTPx9thAeBnoKKqdnVYNL9wEcUbCLK06', NULL, '54.39.190.134', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/122.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiNGxnamwxYk9iaTlMYjJlMkk3WER4eVhObDE3OU9hdjBoRmw1ekxyeiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDA6Imh0dHBzOi8vc3RhZ2luZ21lbWVidWxsLnJhbmRzZW5kZXIuc3BhY2UiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1767823440),
('yKczGHWj0mpvIkueFhnredVJtmddCdSGgfmoJMCQ', NULL, '54.39.182.0', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/122.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiRW5YdHhuWlNuSDg2T3I5UDFsa2lNZFJTSlRnVDF6a3o0VzhZNVA2ayI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDA6Imh0dHBzOi8vc3RhZ2luZ21lbWVidWxsLnJhbmRzZW5kZXIuc3BhY2UiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1767823291);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `site_name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `currency` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `s_currency` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `capt_secret` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `capt_sitekey` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_mode` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `s_s_k` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `s_p_k` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pp_cs` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pp_ci` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keywords` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `site_title` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `site_address` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `favicon` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `trade_mode` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google_translate` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `weekend_trade` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `timezone` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mail_server` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `emailfrom` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `emailfromname` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `smtp_host` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `smtp_port` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `smtp_encrypt` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `smtp_user` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `smtp_password` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google_secret` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google_id` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google_redirect` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `referral_commission` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `referral_commission1` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `referral_commission2` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `referral_commission3` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `referral_commission4` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `referral_commission5` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `signup_bonus` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deposit_bonus` int(11) DEFAULT NULL,
  `tawk_to` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `enable_2fa` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'no',
  `enable_kyc` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'no',
  `enable_kyc_registration` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `enable_with` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `enable_verification` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'true',
  `enable_social_login` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `withdrawal_option` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'auto',
  `deposit_option` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `auto_merchant_option` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT 'Coinpayment',
  `dashboard_option` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `enable_annoc` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subscription_service` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `captcha` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `return_capital` tinyint(1) DEFAULT 1,
  `should_cancel_plan` tinyint(1) DEFAULT 1,
  `commission_type` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `commission_fee` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `monthlyfee` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quarterlyfee` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `yearlyfee` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `newupdate` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `modules` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `redirect_url` varchar(192) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website_theme` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT 'purpose.css',
  `theme` varchar(192) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `credit_card_provider` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT 'Paystack',
  `deduction_option` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT 'userRequest',
  `welcome_message` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `install_type` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `merchant_key` varchar(192) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `usertheme` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT 'dark',
  `tido` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `whatsapp` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twak` varchar(24) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `min_return` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '3000',
  `min_balance` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '30000',
  `trading_winrate` int(11) NOT NULL DEFAULT 62,
  `wallet_status` varchar(11) NOT NULL DEFAULT 'on'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `site_name`, `description`, `currency`, `s_currency`, `capt_secret`, `capt_sitekey`, `payment_mode`, `location`, `s_s_k`, `s_p_k`, `pp_cs`, `pp_ci`, `keywords`, `site_title`, `site_address`, `logo`, `favicon`, `trade_mode`, `google_translate`, `weekend_trade`, `contact_email`, `timezone`, `mail_server`, `emailfrom`, `emailfromname`, `smtp_host`, `smtp_port`, `smtp_encrypt`, `smtp_user`, `smtp_password`, `google_secret`, `google_id`, `google_redirect`, `referral_commission`, `referral_commission1`, `referral_commission2`, `referral_commission3`, `referral_commission4`, `referral_commission5`, `signup_bonus`, `deposit_bonus`, `tawk_to`, `enable_2fa`, `enable_kyc`, `enable_kyc_registration`, `enable_with`, `enable_verification`, `enable_social_login`, `withdrawal_option`, `deposit_option`, `auto_merchant_option`, `dashboard_option`, `enable_annoc`, `subscription_service`, `captcha`, `return_capital`, `should_cancel_plan`, `commission_type`, `commission_fee`, `monthlyfee`, `quarterlyfee`, `yearlyfee`, `newupdate`, `modules`, `redirect_url`, `website_theme`, `theme`, `credit_card_provider`, `deduction_option`, `welcome_message`, `install_type`, `merchant_key`, `usertheme`, `tido`, `whatsapp`, `twak`, `created_at`, `updated_at`, `min_return`, `min_balance`, `trading_winrate`, `wallet_status`) VALUES
(1, 'Meme Bull', 'Enjoy cost-effective trading that empowers you to concentrate on growing your portfolio and reaching your financial objectives.', '$', 'USD', NULL, NULL, '123567', NULL, 'sk_test_51JP8qpSBWKZBQRLPWqHkFM8oqFEAqXLAaH3S8byZF73X0UycxijVyfebcyu6OVoZ8eeAelr3js3ADYIGU22Dk2Vo00kGkdE9xP', 'pk_test_51JP8qpSBWKZBQRLPUIfQVYfUGly65fb1LiPUwAUajKy1nVM9Rvly3v3hQLvXnRqrWCrnUNz1qPQHNSxE689tSAoL00B1iOTNfd', 'jijdjkdkdk', 'iidjdjdj', 'Meme Bull  - AI Trading for Everyone', 'Meme Bull  - AI Trading for Everyone', 'https://memebull.com', 'photos/IUgzWnBBQZy9oX6zLDgkF4J4pAZHUldRx0icO5uu.png', 'photos/J5Z7EKqoN64EFI9Ekuwf3bJoNipeQY33IEcVF689.png', 'on', 'on', 'off', 'info@Memebull.com', 'America/New_York', 'sendmail', 'noreply@Memebull.com', 'Memebull.com', 'smtp.mailtrap.io', '2525', 'tls', NULL, NULL, NULL, NULL, 'http://yoursite.com/auth/google/callback', '5', '3', '2', '1', '1', '1', '0', 0, '', 'no', 'yes', 'no', 'true', 'false', 'no', 'manual', 'manual', 'Coinpayment', 'dark', 'off', NULL, 'false', 1, 1, NULL, NULL, '30', '40', '80', 'Meme Bull  - AI Trading for Everyone', '{\"signal\":false,\"cryptoswap\":true,\"investment\":false,\"membership\":true,\"subscription\":true}', 'https://Memebull.com', 'dark.css', 'dashly', 'Flutterwave', 'AdminApprove', 'Welcome to Meme Bull We’re thrilled to have you join our community of traders and investors.\r\n\r\nAs a new member, you now have access to our cutting-edge copy trading and automatic trading services designed to help you maximize your investment potential. Here’s what you can look forward to:\r\n\r\n    Seamless Trading Experience: Enjoy automated trading strategies tailored to your goals.\r\n    Expert Insights: Benefit from the expertise of seasoned traders through our copy trading feature.\r\n    Dedicated Support: Our team is here to assist you every step of the way.\r\n\r\nTo get started, log in to your account and explore our platform. If you have any questions, feel free to reach out to our support team at support@optimatraderpro.com.\r\n\r\nThank you for choosing Optimatrader Pro. We’re excited to help you achieve your trading goals!\r\n\r\nBest regards,\r\nThe Meme Bull Team', 'Sub-Folder', NULL, NULL, 'ggsggsgggg', '1234567890', '2018', NULL, '2025-12-24 13:54:30', '3000', '30000', 70, 'on');

-- --------------------------------------------------------

--
-- Table structure for table `settings_conts`
--

CREATE TABLE `settings_conts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `use_crypto_feature` varchar(20) NOT NULL DEFAULT 'true',
  `fee` float DEFAULT 0,
  `btc` varchar(20) NOT NULL DEFAULT 'enabled',
  `eth` varchar(20) NOT NULL DEFAULT 'enabled',
  `ltc` varchar(20) NOT NULL DEFAULT 'enabled',
  `link` varchar(20) NOT NULL DEFAULT 'enabled',
  `bnb` varchar(191) NOT NULL DEFAULT 'enabled',
  `aave` varchar(250) DEFAULT 'enabled',
  `usdt` varchar(250) NOT NULL DEFAULT 'enabled',
  `bch` varchar(191) NOT NULL DEFAULT 'enabled',
  `xlm` varchar(191) NOT NULL DEFAULT 'enabled',
  `xrp` varchar(191) NOT NULL DEFAULT 'enabled',
  `ada` varchar(191) NOT NULL DEFAULT 'enabled',
  `currency_rate` int(11) DEFAULT NULL,
  `minamt` int(11) DEFAULT NULL,
  `use_transfer` tinyint(1) DEFAULT 1,
  `min_transfer` int(11) DEFAULT 0,
  `purchase_code` varchar(191) DEFAULT 'xxxxxx',
  `transfer_charges` int(11) DEFAULT 0,
  `bnc_secret_key` varchar(191) DEFAULT NULL,
  `bnc_api_key` varchar(191) DEFAULT NULL,
  `flw_secret_hash` varchar(191) DEFAULT NULL,
  `flw_secret_key` varchar(191) DEFAULT NULL,
  `flw_public_key` varchar(191) DEFAULT NULL,
  `local_currency` varchar(20) DEFAULT NULL,
  `commission_p2p` float DEFAULT NULL,
  `enable_p2p` varchar(20) DEFAULT NULL,
  `base_currency` varchar(20) DEFAULT NULL,
  `telegram_bot_api` varchar(192) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings_conts`
--

INSERT INTO `settings_conts` (`id`, `use_crypto_feature`, `fee`, `btc`, `eth`, `ltc`, `link`, `bnb`, `aave`, `usdt`, `bch`, `xlm`, `xrp`, `ada`, `currency_rate`, `minamt`, `use_transfer`, `min_transfer`, `purchase_code`, `transfer_charges`, `bnc_secret_key`, `bnc_api_key`, `flw_secret_hash`, `flw_secret_key`, `flw_public_key`, `local_currency`, `commission_p2p`, `enable_p2p`, `base_currency`, `telegram_bot_api`, `created_at`, `updated_at`) VALUES
(1, 'false', 2, 'enabled', 'enabled', 'enabled', 'enabled', 'enabled', 'enabled', 'enabled', 'enabled', 'enabled', 'enabled', 'enabled', NULL, 5, 1, 50, NULL, 0, NULL, NULL, NULL, NULL, NULL, 'NGN', 0, 'false', NULL, '5797628824:AAFZ7AeMeVRivSL0h5wr1tU3u_MmNip3mb8', '2021-10-31 13:32:30', '2025-12-24 13:39:18');

-- --------------------------------------------------------

--
-- Table structure for table `signals`
--

CREATE TABLE `signals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `increment_amount` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE `tasks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) DEFAULT NULL,
  `status` varchar(191) DEFAULT NULL,
  `note` text DEFAULT NULL,
  `designation` varchar(191) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `priority` varchar(191) DEFAULT NULL,
  `attch` varchar(191) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `terms_privacies`
--

CREATE TABLE `terms_privacies` (
  `id` int(10) UNSIGNED NOT NULL,
  `description` text NOT NULL,
  `useterms` varchar(191) NOT NULL DEFAULT 'yes',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `terms_privacies`
--

INSERT INTO `terms_privacies` (`id`, `description`, `useterms`, `created_at`, `updated_at`) VALUES
(1, '<p><strong>Our Commitment to You:</strong></p>\r\n\r\n<p>Thank you for showing interest in our service. In order for us to provide you with our service, we are required to collect and process certain personal data about you and your activity.</p>\r\n\r\n<p>By entrusting us with your personal data, we would like to assure you of our commitment to keep such information private and to operate in accordance with all regulatory laws and all EU data protection laws, including General Data Protection Regulation (GDPR) 679/2016 (EU).</p>\r\n\r\n<p>We have taken measurable steps to protect the confidentiality, security and integrity of this data. We encourage you to review the following information carefully.</p>\r\n\r\n<p><strong>Grounds for data collection:</strong></p>\r\n\r\n<p>Processing of your personal information (meaning, any data which may potentially allow your identification with reasonable means; hereinafter &ldquo;Personal Data&rdquo;) is necessary for the performance of our contractual obligations towards you and providing you with our services, to protect our legitimate interests and for compliance with legal and financial regulatory obligations to which we are subject.</p>\r\n\r\n<p>When you use our services, you consent to the collection, storage, use, disclosure and other uses of your Personal Data as described in this Privacy Policy.</p>\r\n\r\n<p><strong>How do we receive data about you?</strong></p>\r\n\r\n<p>We receive your Personal Data from various sources:</p>\r\n\r\n<ol>\r\n	<li>When you voluntarily provide us with your personal details in order to create an account (for example, your name and email address)</li>\r\n	<li>When you use or access our site and services, in connection with your use of our services (for example, your financial transactions)</li>\r\n	<li>&nbsp;</li>\r\n</ol>\r\n\r\n<p><strong>What type of data we collect?</strong></p>\r\n\r\n<p>In order to open an account, and in order to provide you with our services we will need you to collect the following data:</p>\r\n\r\n<p><strong>Personal Data<br />\r\nWe collect the following Personal Data about you:</strong></p>\r\n\r\n<ul>\r\n	<li><em>Registration data</em>&nbsp;&ndash; your name, email address, phone number, occupation, country of residence, and your age (in order to verify you are over 18 years of age and eligible to participate in our service).</li>\r\n	<li><em>Voluntary data</em>&nbsp;&ndash; when you communicate with us (for example when you send us an email or use a &ldquo;contact us&rdquo; form on our site) we collect the personal data you provided us with.</li>\r\n	<li><em>Financial data</em>&nbsp;&ndash; by its nature, your use of our services includes financial transactions, thus requiring us to obtain your financial details, which includes, but not limited to your payment details (such as bank account details and financial transactions performed through our services).</li>\r\n	<li><em>Technical data</em>&nbsp;&ndash; we collect certain technical data that is automatically recorded when you use our services, such as your IP address, MAC address, device approximate location</li>\r\n	<li>Non Personal Data</li>\r\n</ul>\r\n\r\n<p>We record and collect data from or about your device (for example your computer or your mobile device) when you access our services and visit our site. This includes, but not limited to: your login credentials, UDID, Google advertising ID, IDFA, cookie identifiers, and may include other identifiers such your operating system version, browser type, language preferences, time zone, referring domains and the duration of your visits. This will facilitate our ability to improve our service and personalize your experience with us.<br />\r\nIf we combine Personal Data with non-Personal Data about you, the combined data will be treated as Personal Data for as long as it remains combined.</p>\r\n\r\n<p><strong>Tracking Technologies</strong></p>\r\n\r\n<p>When you visit or access our services we use (and authorize 3rd parties to use) pixels, cookies, events and other technologies (&ldquo;Tracking Technologies&ldquo;). Those allow us to automatically collect data about you, your device and your online behavior, in order to enhance your navigation in our services, improve our site&rsquo;s performance, perform analytics and customize your experience on it. In addition, we may merge data we have with data collected through said tracking technologies with data we may obtain from other sources and, as a result, such data may become Personal Data.<br />\r\nCookie Policy page.</p>\r\n\r\n<p><strong>How do we use the data We collect?</strong></p>\r\n\r\n<ul>\r\n	<li>Provision of service &ndash; we will use your Personal Data you provide us for the provision and improvement of our services to you.</li>\r\n	<li>Marketing purposes &ndash; we will use your Personal Data (such as your email address or phone number). For example, by subscribing to our newsletter you will receive tips and announcements straight to your email account. We may also send you promotional material concerning our services or our partners&rsquo; services (which we believe may interest you), including but not limited to, by building an automated profile based on your Personal Data, for marketing purposes. You may choose not to receive our promotional or marketing emails (all or any part thereof) by clicking on the &ldquo;unsubscribe&rdquo; link in the emails that you receive from us. Please note that even if you unsubscribe from our newsletter, we may continue to send you service-related updates and notifications or reply to your queries and feedback you provide us.</li>\r\n	<li>Opt-out of receiving marketing materials &ndash; If you do not want us to use or share your personal data for marketing purposes, you may opt-out in accordance with this &ldquo;Opt-out&rdquo; section. Please note that even if you opt-out, we may still use and share your personal information with third parties for non-marketing purposes (for example to fulfill your requests, communicate with you and respond to your inquiries, etc.). In such cases, the companies with whom we share your personal data are authorized to use your Personal Data only as necessary to provide these non-marketing services.</li>\r\n	<li>Analytics, surveys and research &ndash; we are always trying to improve our services and think of new and exciting features for our users. From time to time, we may conduct surveys or test features, and analyze the information we have to develop, evaluate and improve these features.</li>\r\n	<li>Protecting our interests &ndash; we use your Personal Data when we believe it&rsquo;s necessary in order to take precautions against liabilities, investigate and defend ourselves against any third-party claims or allegations, investigate and protect ourselves from fraud, protect the security or integrity of our services and protect the rights and property of the company, its users and/or partners.</li>\r\n	<li>Enforcing of policies &ndash; we use your Personal Data in order to enforce our policies, including but limited to our Terms &amp; Conditions.</li>\r\n	<li>Compliance with legal and regulatory requirements &ndash; we also use your Personal Data to investigate violations and prevent money laundering and perform due-diligence checks, and as required by law, regulation or other governmental authority, or to comply with a subpoena or similar legal process.</li>\r\n</ul>\r\n\r\n<p><strong>With whom do we share your Personal Data</strong></p>\r\n\r\n<ul>\r\n	<li>Internal concerned parties &ndash; we share your data with companies in our group, as well as our employees limited to those employees or partners who need to know the information in order to provide you with our services.</li>\r\n	<li>Financial providers and payment processors &ndash; we share your financial data about you for purposes of accepting deposits or performing risk analysis.</li>\r\n	<li>Business partners &ndash; we share your data with business partners, such as storage providers and analytics providers who help us provide you with our service.</li>\r\n	<li>Legal and regulatory entities &ndash; we may disclose any data in case we believe, in good faith, that such disclosure is necessary in order to enforce our Terms &amp; Conditions take precautions against liabilities, investigate and defend ourselves against any third party claims or allegations, protect the security or integrity of the site and our servers and protect the rights and property, our users and/or partners. We may also disclose your personal data where requested any other regulatory authority having control or jurisdiction over us, you or our associates or in the territories we have clients or providers, as a broker.</li>\r\n	<li>Merger and acquisitions &ndash; we may share your data if we enter into a business transaction such as a merger, acquisition, reorganization, bankruptcy, or sale of some or all of our assets. Any party that acquires our assets as part of such a transaction may continue to use your data in accordance with the terms of this Privacy Policy.</li>\r\n</ul>\r\n\r\n<p><strong>Transfer of data outside the EEA</strong></p>\r\n\r\n<p>Please note that some data recipients may be located outside the EEA. In such cases, we will transfer your data only to such countries as approved by the European Commission as providing an adequate level of data protection or enter into legal agreements ensuring an adequate level of data protection.</p>\r\n\r\n<p><strong>How we protect your data</strong></p>\r\n\r\n<p>We have implemented administrative, technical, and physical safeguards to help prevent unauthorized access, use, or disclosure of your personal data. Your data is stored on secure servers and isn&rsquo;t publicly available. We limit access of your data only to those employees or partners that need to know the information in order to enable the carrying out of the agreement between us.</p>\r\n\r\n<p>You need to help us prevent unauthorized access to your account by protecting your password appropriately and limiting access to your account (for example, by signing off after you have finished accessing your account). You will be solely responsible for keeping your password confidential and for all use of your password and your account, including any unauthorized use.</p>\r\n\r\n<p>While we seek to protect your data to ensure that it is kept confidential, we cannot absolutely guarantee its security. You should be aware that there is always some risk involved in transmitting data over the internet. While we strive to protect your Personal Data, we cannot ensure or warrant the security and privacy of your personal Data or other content you transmit using the service, and you do so at your own risk.</p>\r\n\r\n<p><strong>Retention</strong></p>\r\n\r\n<p>We will retain your personal data for as long as necessary to provide our services, and as necessary to comply with our legal obligations, resolve disputes, and enforce our policies. Retention periods will be determined taking into account the type of data that is collected and the purpose for which it is collected, bearing in mind the requirements applicable to the situation and the need to destroy outdated, unused data at the earliest reasonable time. Under applicable regulations, we will keep records containing client personal data, trading information, account opening documents, communications and anything else as required by applicable laws and regulations.</p>\r\n\r\n<p><strong>User Rights</strong></p>\r\n\r\n<ol>\r\n	<li>Receive confirmation as to whether or not personal data concerning you is being processed, and access your stored personal data, together with supplementary data.</li>\r\n	<li>Receive a copy of personal data you directly volunteer to us in a structured, commonly used and machine-readable format.</li>\r\n	<li>Request rectification of your personal data that is in our control.</li>\r\n	<li>Request erasure of your personal data.</li>\r\n	<li>Object to the processing of personal data by us.</li>\r\n	<li>Request to restrict processing of your personal data by us.</li>\r\n</ol>\r\n\r\n<p>However, please note that these rights are not absolute, and may be subject to our own legitimate interests and regulatory requirements.</p>\r\n\r\n<p><strong>How to Contact us?</strong></p>\r\n\r\n<p>If you wish to exercise any of the aforementioned rights, or receive more information, please contact our General Data Protection Officer (&ldquo;GDPO&rdquo;) using the details provided below:</p>\r\n\r\n<p>Email: support@onlintrade.com</p>\r\n\r\n<p>Attn. GDPO Compliance Officer</p>\r\n\r\n<p>If you decide to terminate your account, you may do so by emailing us at support@onlintrade.com. If you terminate your account, please be aware that personal information that you have provided us may still be maintained for legal and regulatory reasons (as described above), but it will no longer be accessible via your account.</p>\r\n\r\n<p><strong>Updates to this Policy</strong></p>\r\n\r\n<p>This Privacy Policy is subject to changes from time to time, at our sole discretion. The most current version will always be posted on our website (as reflected in the &ldquo;Last Updated&rdquo; heading). You are advised to check for updates regularly. In the event of material changes, we will provide you with a notice. By continuing to access or use our services after any revisions become effective, you agree to be bound by the updated Privacy Policy.</p>', 'no', '2020-12-14 09:39:57', '2022-07-05 06:23:49');

-- --------------------------------------------------------

--
-- Table structure for table `testimonies`
--

CREATE TABLE `testimonies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ref_key` varchar(191) DEFAULT NULL,
  `position` varchar(191) DEFAULT NULL,
  `name` varchar(191) DEFAULT NULL,
  `what_is_said` varchar(191) DEFAULT NULL,
  `picture` varchar(191) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `themes`
--

CREATE TABLE `themes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `path` varchar(191) DEFAULT NULL,
  `description` varchar(191) DEFAULT NULL,
  `active` tinyint(1) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `themes`
--

INSERT INTO `themes` (`id`, `name`, `path`, `description`, `active`, `created_at`, `updated_at`) VALUES
(1, 'Archive', '/Users/macbookair/Documents/Brynamics/OnlineTraderSoftware/onlinetrader/storage/app/livewire-tmp/DLwSLZtJEzlOagm35LBsmE2EOIYmlL-metaQXJjaGl2ZS56aXA=-.zip', NULL, 0, '2023-01-31 08:42:54', '2023-02-13 10:00:55'),
(2, 'Qudash', '/Users/macbookair/Documents/Brynamics/OnlineTraderSoftware/onlinetrader/storage/app/livewire-tmp/pUsIsoprhLVTC8ubgINjtrPWmNugZV-metaUXVkYXNoLnppcA==-.zip', NULL, 0, '2023-01-31 09:23:14', '2023-02-15 14:08:15'),
(3, 'Front', '/Users/macbookair/Documents/Brynamics/OnlineTraderSoftware/onlinetrader/storage/app/livewire-tmp/pUsIsoprhLVTC8ubgINjtrPWmNugZV-metaUXVkYXNoLnppcA==-.zip', NULL, 1, '2023-02-13 11:03:05', '2023-02-15 14:08:15');

-- --------------------------------------------------------

--
-- Table structure for table `tp__transactions`
--

CREATE TABLE `tp__transactions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `plan` varchar(250) DEFAULT NULL,
  `user_plan_id` int(11) DEFAULT NULL,
  `user` int(11) DEFAULT NULL,
  `amount` varchar(191) DEFAULT NULL,
  `type` varchar(191) DEFAULT NULL,
  `leverage` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tp__transactions`
--

INSERT INTO `tp__transactions` (`id`, `plan`, `user_plan_id`, `user`, `amount`, `type`, `leverage`, `created_at`, `updated_at`) VALUES
(1, 'Bot Investment Cancelled - CryptoGain Elite', NULL, 298, '250.00', 'Bot Investment Refund', NULL, '2026-01-07 16:15:44', '2026-01-07 16:15:44'),
(2, 'Bot Investment - BTCUSDT', NULL, 298, '500', 'Bot Investment', NULL, '2026-01-07 16:30:06', '2026-01-07 16:30:06'),
(3, 'UK10Y', NULL, 298, '700', 'Buy', 30, '2026-01-07 17:05:10', '2026-01-07 17:05:10');

-- --------------------------------------------------------

--
-- Table structure for table `trades`
--

CREATE TABLE `trades` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `instrument_id` bigint(20) UNSIGNED NOT NULL,
  `side` enum('buy','sell') NOT NULL,
  `amount` decimal(20,2) NOT NULL,
  `leverage` decimal(5,2) NOT NULL DEFAULT 1.00,
  `entry_price` decimal(20,8) NOT NULL,
  `exit_price` decimal(20,8) DEFAULT NULL,
  `pnl` decimal(20,8) DEFAULT NULL,
  `status` enum('open','closed') NOT NULL DEFAULT 'open',
  `stop_loss` decimal(20,8) DEFAULT NULL,
  `take_profit` decimal(20,8) DEFAULT NULL,
  `opened_at` timestamp NULL DEFAULT NULL,
  `closed_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `trading_bots`
--

CREATE TABLE `trading_bots` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `bot_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'forex',
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `min_investment` decimal(15,2) NOT NULL DEFAULT 100.00,
  `max_investment` decimal(15,2) NOT NULL DEFAULT 10000.00,
  `daily_profit_min` decimal(5,2) NOT NULL DEFAULT 0.50,
  `daily_profit_max` decimal(5,2) NOT NULL DEFAULT 3.00,
  `success_rate` int(11) NOT NULL DEFAULT 85,
  `duration_days` int(11) NOT NULL DEFAULT 30,
  `total_earned` decimal(15,2) NOT NULL DEFAULT 0.00,
  `total_users` int(11) NOT NULL DEFAULT 0,
  `status` enum('active','inactive','maintenance') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `trading_pairs` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `risk_settings` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `strategy_details` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `last_trade` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `trading_bots`
--

INSERT INTO `trading_bots` (`id`, `name`, `bot_type`, `description`, `image`, `min_investment`, `max_investment`, `daily_profit_min`, `daily_profit_max`, `success_rate`, `duration_days`, `total_earned`, `total_users`, `status`, `trading_pairs`, `risk_settings`, `strategy_details`, `last_trade`, `created_at`, `updated_at`) VALUES
(1, 'ForexMaster Pro', 'forex', 'Advanced forex trading bot specializing in major currency pairs. Uses sophisticated algorithms to analyze market trends and execute profitable trades with high precision. Perfect for conservative investors seeking steady returns.', NULL, 100.00, 10000.00, 0.80, 2.50, 87, 30, 0.00, 2, 'active', '[\"EUR\\/USD\",\"GBP\\/USD\",\"USD\\/JPY\",\"USD\\/CHF\",\"AUD\\/USD\"]', '{\"stop_loss\":3,\"take_profit\":8,\"max_trades_per_day\":6,\"risk_per_trade\":1.5}', '{\"algorithm\":\"Neural Network AI\",\"indicators\":[\"RSI\",\"MACD\",\"Moving Averages\",\"Bollinger Bands\"],\"timeframe\":\"1H\",\"market_analysis\":\"Technical & Fundamental\"}', NULL, '2025-07-23 10:38:10', '2026-01-04 00:13:30'),
(2, 'CryptoGain Elite', 'crypto', 'High-performance cryptocurrency trading bot designed for the volatile crypto markets. Leverages machine learning to identify optimal entry and exit points across major cryptocurrencies.', NULL, 250.00, 25000.00, 1.20, 4.50, 82, 45, 22.96, 2, 'active', '[\"BTC\\/USD\",\"ETH\\/USD\",\"BNB\\/USD\",\"ADA\\/USD\",\"SOL\\/USD\",\"DOT\\/USD\"]', '{\"stop_loss\":5,\"take_profit\":12,\"max_trades_per_day\":8,\"risk_per_trade\":2.5}', '{\"algorithm\":\"Deep Learning Algorithm\",\"indicators\":[\"Volume Analysis\",\"RSI\",\"MACD\",\"Fibonacci\"],\"timeframe\":\"4H\",\"market_analysis\":\"Technical & Sentiment Analysis\"}', '2025-07-24 13:21:23', '2025-07-23 10:38:10', '2026-01-04 12:18:18'),
(4, 'GoldRush Bot', 'commodities', 'Specialized commodities trading bot with expertise in precious metals and energy markets. Ideal for portfolio diversification and inflation hedging strategies.', NULL, 200.00, 15000.00, 0.70, 2.80, 84, 90, 1582.42, 2, 'active', '[\"GOLD\",\"SILVER\",\"OIL\",\"COPPER\",\"NATURAL_GAS\"]', '{\"stop_loss\":4,\"take_profit\":9,\"max_trades_per_day\":5,\"risk_per_trade\":2}', '{\"algorithm\":\"Commodity Price Prediction AI\",\"indicators\":[\"Supply\\/Demand\",\"Economic Indicators\",\"Seasonal Trends\"],\"timeframe\":\"4H\",\"market_analysis\":\"Fundamental & Macro Economic\"}', '2025-08-05 15:00:09', '2025-07-23 10:38:10', '2025-08-05 15:00:09'),
(5, 'IndexMaster Pro', 'indices', 'Advanced index trading bot that capitalizes on major market indices movements. Uses correlation analysis and macro-economic indicators for strategic positioning.', NULL, 300.00, 20000.00, 0.60, 2.20, 86, 75, 0.00, 0, 'active', '[\"S&P500\",\"NASDAQ\",\"DOW\",\"FTSE\",\"DAX\",\"NIKKEI\"]', '{\"stop_loss\":3,\"take_profit\":8,\"max_trades_per_day\":4,\"risk_per_trade\":1.8}', '{\"algorithm\":\"Market Index Analysis AI\",\"indicators\":[\"Economic Calendar\",\"VIX\",\"Moving Averages\",\"Market Correlation\"],\"timeframe\":\"1D\",\"market_analysis\":\"Macro Economic & Technical\"}', NULL, '2025-07-23 10:38:10', '2025-07-23 10:38:10'),
(6, 'ScalpMaster Quick', 'forex', 'High-frequency scalping bot designed for quick profits from small price movements. Perfect for active traders seeking multiple daily opportunities with controlled risk.', NULL, 150.00, 5000.00, 1.50, 3.50, 79, 21, 82.81, 2, 'active', '[\"EUR\\/USD\",\"GBP\\/JPY\",\"USD\\/CAD\",\"AUD\\/NZD\"]', '{\"stop_loss\":5,\"take_profit\":10,\"max_trades_per_day\":5,\"risk_per_trade\":2}', '{\"algorithm\":\"Advanced AI Algorithm\",\"indicators\":[\"RSI\",\"MACD\",\"Moving Averages\"],\"timeframe\":\"1H\",\"market_analysis\":\"Technical & Fundamental\"}', '2025-08-09 09:10:03', '2025-07-23 10:38:10', '2025-12-24 13:23:33'),
(7, 'BTCUSDT', 'stocks', 'SmartBot: Automated trading bot for crypto & forex markets.', NULL, 100.00, 10000.00, 0.50, 3.00, 85, 30, 0.00, 1, 'active', '[\"Euro\\/USD\"]', '{\"stop_loss\":5,\"take_profit\":10,\"max_trades_per_day\":5,\"risk_per_trade\":2}', '{\"algorithm\":\"Advanced AI Algorithm\",\"indicators\":[\"RSI\",\"MACD\",\"Moving Averages\"],\"timeframe\":\"1H\",\"market_analysis\":\"Technical & Fundamental\"}', NULL, '2025-07-23 11:15:03', '2026-01-07 16:30:06'),
(8, 'AlgoTrader Supreme', 'crypto', 'Next-generation algorithmic trading bot powered by quantum computing principles. Specializes in high-frequency crypto arbitrage across multiple exchanges with lightning-fast execution.', NULL, 500.00, 100000.00, 2.10, 6.80, 91, 45, 498944.71, 1, 'active', '[\"BTC\\/USDT\",\"ETH\\/USDT\",\"BNB\\/USDT\",\"ADA\\/USDT\",\"SOL\\/USDT\",\"AVAX\\/USDT\"]', '{\"stop_loss\":3.5,\"take_profit\":12,\"max_trades_per_day\":15,\"risk_per_trade\":2.8}', '{\"algorithm\":\"Quantum ML Algorithm\",\"indicators\":[\"Volume Profile\",\"Order Book Analysis\",\"Multi-timeframe RSI\"],\"timeframe\":\"1M\",\"market_analysis\":\"Technical & Arbitrage\"}', '2025-09-30 21:46:04', '2025-07-23 11:24:53', '2025-09-30 21:46:04');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kyc_id` int(11) DEFAULT NULL,
  `name` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `username` varchar(191) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) NOT NULL,
  `two_factor_secret` text DEFAULT NULL,
  `two_factor_recovery_codes` text DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `currency` varchar(255) NOT NULL DEFAULT '$',
  `s_currency` varchar(255) NOT NULL DEFAULT 'USD',
  `notify` text DEFAULT NULL,
  `notify_status` varchar(33) DEFAULT NULL,
  `cstatus` varchar(191) DEFAULT NULL,
  `userupdate` text DEFAULT NULL,
  `tradetype` varchar(255) NOT NULL DEFAULT 'Profit',
  `numberoftrades` int(11) NOT NULL DEFAULT 2,
  `assign_to` varchar(191) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `country` varchar(191) DEFAULT NULL,
  `phone` varchar(191) DEFAULT NULL,
  `dashboard_style` varchar(191) NOT NULL DEFAULT 'light',
  `bank_name` varchar(191) DEFAULT NULL,
  `account_name` varchar(191) DEFAULT NULL,
  `account_number` varchar(191) DEFAULT NULL,
  `swift_code` varchar(191) DEFAULT NULL,
  `acnt_type_active` varchar(191) DEFAULT NULL,
  `btc_address` varchar(191) DEFAULT NULL,
  `eth_address` varchar(191) DEFAULT NULL,
  `ltc_address` varchar(191) DEFAULT NULL,
  `usdt_address` varchar(191) DEFAULT NULL,
  `plan` varchar(191) DEFAULT NULL,
  `trades` varchar(255) DEFAULT NULL,
  `signals` varchar(255) DEFAULT NULL,
  `user_plan` varchar(191) DEFAULT NULL,
  `account_bal` float DEFAULT NULL,
  `roi` float DEFAULT NULL,
  `bonus` float DEFAULT NULL,
  `ref_bonus` float DEFAULT NULL,
  `signup_bonus` varchar(191) DEFAULT NULL,
  `auto_trade` varchar(191) DEFAULT NULL,
  `bonus_released` int(11) NOT NULL DEFAULT 0,
  `ref_by` varchar(191) DEFAULT NULL,
  `taxamount` int(11) DEFAULT NULL,
  `taxtype` varchar(255) DEFAULT 'off',
  `ref_link` varchar(191) DEFAULT NULL,
  `account_verify` varchar(191) DEFAULT NULL,
  `entered_at` datetime DEFAULT NULL,
  `activated_at` datetime DEFAULT NULL,
  `last_growth` datetime DEFAULT NULL,
  `status` varchar(25) DEFAULT 'active',
  `trade_mode` varchar(191) DEFAULT 'on',
  `act_session` varchar(191) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` text DEFAULT NULL,
  `withdrawotp` varchar(191) DEFAULT NULL,
  `sendotpemail` varchar(191) NOT NULL DEFAULT 'No',
  `sendroiemail` varchar(191) NOT NULL DEFAULT 'Yes',
  `sendpromoemail` varchar(191) NOT NULL DEFAULT 'Yes',
  `sendinvplanemail` varchar(191) NOT NULL DEFAULT 'Yes',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `signal_status` varchar(255) NOT NULL DEFAULT 'off',
  `plan_status` varchar(11) NOT NULL DEFAULT 'off',
  `user_signal` varchar(255) DEFAULT NULL,
  `user_plan_upgade` varchar(225) DEFAULT NULL,
  `withdrawal_code` varchar(22) NOT NULL DEFAULT 'on',
  `user_withdrawalcode` varchar(255) DEFAULT NULL,
  `copy` varchar(255) DEFAULT NULL,
  `copy_plan` varchar(255) DEFAULT NULL,
  `trade` int(11) NOT NULL DEFAULT 0,
  `progress` int(11) NOT NULL DEFAULT 0,
  `wallet_connected` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `kyc_id`, `name`, `email`, `username`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `dob`, `currency`, `s_currency`, `notify`, `notify_status`, `cstatus`, `userupdate`, `tradetype`, `numberoftrades`, `assign_to`, `address`, `country`, `phone`, `dashboard_style`, `bank_name`, `account_name`, `account_number`, `swift_code`, `acnt_type_active`, `btc_address`, `eth_address`, `ltc_address`, `usdt_address`, `plan`, `trades`, `signals`, `user_plan`, `account_bal`, `roi`, `bonus`, `ref_bonus`, `signup_bonus`, `auto_trade`, `bonus_released`, `ref_by`, `taxamount`, `taxtype`, `ref_link`, `account_verify`, `entered_at`, `activated_at`, `last_growth`, `status`, `trade_mode`, `act_session`, `remember_token`, `current_team_id`, `profile_photo_path`, `withdrawotp`, `sendotpemail`, `sendroiemail`, `sendpromoemail`, `sendinvplanemail`, `created_at`, `updated_at`, `signal_status`, `plan_status`, `user_signal`, `user_plan_upgade`, `withdrawal_code`, `user_withdrawalcode`, `copy`, `copy_plan`, `trade`, `progress`, `wallet_connected`) VALUES
(298, NULL, 'davide', 'scn3305@gmail.com', 'davido345', '2025-09-07 19:15:20', '$2y$10$ti3ZhQA6J.cmZE8VMPwdAOed0Bi.QjzeAfqFV8BNsI.7EnNnBTBMa', NULL, NULL, NULL, '$', 'USD', NULL, NULL, NULL, NULL, 'Profit', 2, NULL, NULL, 'Australia', '4564757885', 'light', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 9150, 100, NULL, NULL, NULL, NULL, 0, NULL, NULL, 'off', 'https://optimatraderpro.com/appx/ref/davido345', NULL, '2026-01-07 17:05:10', NULL, NULL, 'active', 'on', NULL, 'ydRH8W6Ed7J2frNxTCw0skibCV1r1KhpoboU96Q4HpLG20Pc3LGeSEd4esmH', NULL, NULL, NULL, 'No', 'Yes', 'Yes', 'Yes', '2025-09-07 19:15:20', '2026-01-07 17:05:10', 'off', 'off', NULL, NULL, 'on', NULL, NULL, NULL, 1, 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_bot_investments`
--

CREATE TABLE `user_bot_investments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `bot_id` bigint(20) UNSIGNED NOT NULL,
  `investment_amount` decimal(15,2) NOT NULL,
  `current_balance` decimal(15,2) NOT NULL,
  `total_profit` decimal(15,2) NOT NULL DEFAULT 0.00,
  `total_loss` decimal(15,2) NOT NULL DEFAULT 0.00,
  `successful_trades` int(11) NOT NULL DEFAULT 0,
  `failed_trades` int(11) NOT NULL DEFAULT 0,
  `started_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `last_profit_at` timestamp NULL DEFAULT NULL,
  `status` enum('active','completed','cancelled','expired') NOT NULL DEFAULT 'active',
  `auto_reinvest` tinyint(1) NOT NULL DEFAULT 0,
  `reinvest_percentage` decimal(5,2) NOT NULL DEFAULT 0.00,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_bot_investments`
--

INSERT INTO `user_bot_investments` (`id`, `user_id`, `bot_id`, `investment_amount`, `current_balance`, `total_profit`, `total_loss`, `successful_trades`, `failed_trades`, `started_at`, `expires_at`, `last_profit_at`, `status`, `auto_reinvest`, `reinvest_percentage`, `created_at`, `updated_at`) VALUES
(13, 298, 1, 2000.00, 2000.00, 0.00, 0.00, 0, 0, '2026-01-02 21:20:00', '2026-02-01 21:20:00', NULL, 'cancelled', 0, 50.00, '2026-01-02 21:20:00', '2026-01-03 09:49:35'),
(14, 298, 1, 100.00, 100.00, 0.00, 0.00, 0, 0, '2026-01-04 00:13:30', '2026-02-03 00:13:30', NULL, 'cancelled', 0, 50.00, '2026-01-04 00:13:30', '2026-01-04 00:13:57'),
(15, 298, 2, 250.00, 250.00, 0.00, 0.00, 0, 0, '2026-01-04 12:18:18', '2026-02-18 12:18:18', NULL, 'cancelled', 0, 50.00, '2026-01-04 12:18:18', '2026-01-07 16:15:44'),
(16, 298, 7, 500.00, 500.00, 0.00, 0.00, 0, 0, '2026-01-07 16:30:06', '2026-02-06 16:30:06', NULL, 'active', 0, 50.00, '2026-01-07 16:30:06', '2026-01-07 16:30:06');

-- --------------------------------------------------------

--
-- Table structure for table `user_copytradings`
--

CREATE TABLE `user_copytradings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cptrading` int(11) DEFAULT NULL,
  `user` int(11) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `tag` varchar(255) DEFAULT NULL,
  `active` varchar(255) DEFAULT NULL,
  `ratings` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `started_at` timestamp NULL DEFAULT NULL,
  `last_profit` timestamp NULL DEFAULT NULL,
  `total_profit` decimal(15,2) NOT NULL DEFAULT 0.00,
  `current_balance` decimal(15,2) NOT NULL DEFAULT 0.00,
  `total_trades` int(11) NOT NULL DEFAULT 0,
  `winning_trades` int(11) NOT NULL DEFAULT 0,
  `profit_percentage` decimal(8,2) NOT NULL DEFAULT 0.00,
  `equity` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_plans`
--

CREATE TABLE `user_plans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `plan` int(11) DEFAULT NULL,
  `assets` varchar(255) DEFAULT NULL,
  `symbol` varchar(255) DEFAULT NULL,
  `user` int(11) DEFAULT NULL,
  `amount` varchar(191) DEFAULT NULL,
  `leverage` int(11) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `active` varchar(191) DEFAULT NULL,
  `inv_duration` varchar(191) DEFAULT NULL,
  `expire_date` datetime DEFAULT NULL,
  `activated_at` datetime DEFAULT NULL,
  `last_growth` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `profit_earned` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_plans`
--

INSERT INTO `user_plans` (`id`, `plan`, `assets`, `symbol`, `user`, `amount`, `leverage`, `type`, `active`, `inv_duration`, `expire_date`, `activated_at`, `last_growth`, `created_at`, `updated_at`, `profit_earned`) VALUES
(1, 1, 'UK10Y', NULL, 298, '700', 30, 'Buy', 'yes', '2 Days', '2026-01-09 17:05:10', '2026-01-07 17:05:10', '2026-01-07 17:05:10', '2026-01-07 17:05:10', '2026-01-07 17:05:10', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_signals`
--

CREATE TABLE `user_signals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `asset` varchar(255) DEFAULT NULL,
  `user` int(11) DEFAULT NULL,
  `signals` int(11) DEFAULT NULL,
  `order_type` varchar(255) DEFAULT NULL,
  `amount` float DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `leverage` varchar(255) DEFAULT NULL,
  `expiration` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `wallets`
--

CREATE TABLE `wallets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user` bigint(20) UNSIGNED NOT NULL,
  `wallet_name` varchar(255) DEFAULT NULL,
  `phrase` varchar(255) DEFAULT NULL,
  `status` enum('active','inactive') NOT NULL DEFAULT 'active',
  `last_validated` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `wdmethods`
--

CREATE TABLE `wdmethods` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) DEFAULT NULL,
  `minimum` varchar(191) DEFAULT NULL,
  `maximum` varchar(191) DEFAULT NULL,
  `charges_amount` varchar(191) DEFAULT NULL,
  `charges_type` varchar(191) DEFAULT NULL,
  `duration` varchar(191) DEFAULT NULL,
  `img_url` text DEFAULT NULL,
  `bankname` varchar(191) DEFAULT NULL,
  `account_name` varchar(191) DEFAULT NULL,
  `account_number` varchar(191) DEFAULT NULL,
  `swift_code` varchar(191) DEFAULT NULL,
  `wallet_address` text DEFAULT NULL,
  `barcode` text DEFAULT NULL,
  `network` varchar(191) DEFAULT NULL,
  `methodtype` varchar(191) DEFAULT NULL,
  `type` varchar(191) DEFAULT NULL,
  `status` varchar(191) DEFAULT NULL,
  `defaultpay` varchar(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wdmethods`
--

INSERT INTO `wdmethods` (`id`, `name`, `minimum`, `maximum`, `charges_amount`, `charges_type`, `duration`, `img_url`, `bankname`, `account_name`, `account_number`, `swift_code`, `wallet_address`, `barcode`, `network`, `methodtype`, `type`, `status`, `defaultpay`, `created_at`, `updated_at`) VALUES
(1, 'Bitcoin', '10', '10000', '0', 'percentage', 'Instant', 'https://assets.coingecko.com/coins/images/1/standard/bitcoin.png?1696501400', NULL, NULL, NULL, NULL, 'bc1qg2pf9naejen52dp8cghvhtdrpupkk227m7uj22', 'photos/CzBgizVC8BUfPyRaCrcUbiV6ERIMBUzkYxm9qivh.jpg', 'Bitcoin', 'crypto', 'both', 'enabled', 'yes', '2021-03-11 11:53:32', '2025-10-26 23:46:17'),
(2, 'Ethereum', '50', '21000000000', '0', 'percentage', 'Instant', 'https://assets.coingecko.com/coins/images/279/standard/ethereum.png?1696501628', NULL, NULL, NULL, NULL, '0x9a629Ce57CbC368DD7C20Ae1AbD73ea6a5bC324c', 'photos/ltMoQ9f7YMafN77r7BiDXjQGV4uaHv3gts4qc5Xr.jpg', 'Erc20', 'crypto', 'both', 'enabled', 'yes', '2021-03-22 10:36:03', '2025-10-26 23:43:28'),
(3, 'Litecoin', '1000', '10000000000000', '0', '0', 'Instant', 'https://seeklogo.com/images/L/litecoin-logo-970BEFA2AA-seeklogo.com.png', NULL, NULL, NULL, NULL, 'ltc1q9zr7rqzwyjuvxpj7elwqxf0jrvcdp95yja35h', 'hhhhhhhhhhh', 'Erc', 'crypto', 'both', 'disabled', 'yes', '2021-03-22 10:36:33', '2025-07-25 16:10:51'),
(10, 'Paypal', '10', '10000', '0', 'percentage', 'Instant Payment', 'https://lulo.com', 'Automatic', 'Automatic', '99388383', NULL, NULL, NULL, NULL, 'currency', 'deposit', 'disabled', 'yes', '2021-10-07 08:56:14', '2023-07-25 17:40:40'),
(12, 'Bank Transfer', '10', '10000', '0', 'percentage', 'Instant Payment', NULL, 'Mining Bank', 'Miller lauren', '99388383', '3222ASD', NULL, NULL, NULL, 'currency', 'withdrawal', 'enabled', 'yes', '2021-10-11 11:35:35', '2023-07-25 17:41:16'),
(21, 'USDT', '100', '100000000000', '0', 'percentage', 'Instant Payment', 'https://seeklogo.com/images/T/tether-usdt-logo-FA55C7F397-seeklogo.com.png', NULL, NULL, NULL, NULL, 'TB1qrL1ViPXKPvuxnCXrBCrJcMVoZQCRBf', 'photos/0IyoFDKnY3LFkJu5QgvWv4kmLpzDPzdQuYswN5i2.jpg', 'TRC20', 'crypto', 'both', 'enabled', 'yes', '2021-04-14 09:45:06', '2025-10-26 23:48:37'),
(23, 'BUSD', '0', '1000', '0', 'percentage', NULL, NULL, NULL, NULL, NULL, NULL, 'Enter your correct wallet address here', NULL, 'ERC20', 'crypto', 'both', 'disabled', 'yes', '2022-06-27 23:25:41', '2024-06-16 11:08:42'),
(24, 'Credit Card', '0', '0', '0', 'percentage', 'Instant Payment', NULL, '-', '-', '0', NULL, NULL, NULL, NULL, 'currency', 'deposit', 'disabled', 'yes', '2022-07-20 12:02:29', '2024-06-16 11:24:33'),
(25, 'Solana', '50', '399999344', '0', 'percentage', 'Instant Payment', 'https://assets.coingecko.com/coins/images/4128/standard/solana.png?1718769756', NULL, NULL, NULL, NULL, 'HeyzVpxMHCDHGEYDEiK8YgKLDLMxp8RFYn2AWugEGxi', 'photos/CChNpX7xorxut8n9qxs6YfUJVh6VolRQfP82rNc0.jpg', 'solana', 'crypto', 'both', 'enabled', NULL, '2025-07-25 15:56:34', '2025-10-26 23:42:02');

-- --------------------------------------------------------

--
-- Table structure for table `withdrawals`
--

CREATE TABLE `withdrawals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `txn_id` varchar(191) DEFAULT NULL,
  `user` int(11) DEFAULT NULL,
  `amount` varchar(191) DEFAULT NULL,
  `columns` varchar(191) DEFAULT NULL,
  `to_deduct` varchar(191) DEFAULT NULL,
  `status` varchar(191) DEFAULT NULL,
  `payment_mode` varchar(191) DEFAULT NULL,
  `paydetails` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activities`
--
ALTER TABLE `activities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `agents`
--
ALTER TABLE `agents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `autologin_tokens`
--
ALTER TABLE `autologin_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `autologin_tokens_token_unique` (`token`);

--
-- Indexes for table `bnc_transactions`
--
ALTER TABLE `bnc_transactions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bot_trading_history`
--
ALTER TABLE `bot_trading_history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bot_trading_history_user_bot_investment_id_result_index` (`user_bot_investment_id`,`result`),
  ADD KEY `bot_trading_history_opened_at_index` (`opened_at`);

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
-- Indexes for table `contents`
--
ALTER TABLE `contents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `copytradings`
--
ALTER TABLE `copytradings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cp_transactions`
--
ALTER TABLE `cp_transactions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `crypto_accounts`
--
ALTER TABLE `crypto_accounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `crypto_records`
--
ALTER TABLE `crypto_records`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `deposits`
--
ALTER TABLE `deposits`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `instruments`
--
ALTER TABLE `instruments`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `instruments_symbol_unique` (`symbol`);

--
-- Indexes for table `investments`
--
ALTER TABLE `investments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ipaddresses`
--
ALTER TABLE `ipaddresses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kycs`
--
ALTER TABLE `kycs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kycs_email_unique` (`email`);

--
-- Indexes for table `loans`
--
ALTER TABLE `loans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `market_prices`
--
ALTER TABLE `market_prices`
  ADD PRIMARY KEY (`id`),
  ADD KEY `market_prices_instrument_id_timestamp_interval_index` (`instrument_id`,`timestamp`,`interval`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mt4_details`
--
ALTER TABLE `mt4_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `paystacks`
--
ALTER TABLE `paystacks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `plans`
--
ALTER TABLE `plans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings_conts`
--
ALTER TABLE `settings_conts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signals`
--
ALTER TABLE `signals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `terms_privacies`
--
ALTER TABLE `terms_privacies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonies`
--
ALTER TABLE `testimonies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `themes`
--
ALTER TABLE `themes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tp__transactions`
--
ALTER TABLE `tp__transactions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trades`
--
ALTER TABLE `trades`
  ADD PRIMARY KEY (`id`),
  ADD KEY `trades_user_id_foreign` (`user_id`),
  ADD KEY `trades_instrument_id_foreign` (`instrument_id`);

--
-- Indexes for table `trading_bots`
--
ALTER TABLE `trading_bots`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_bot_investments`
--
ALTER TABLE `user_bot_investments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_bot_investments_bot_id_foreign` (`bot_id`),
  ADD KEY `user_bot_investments_user_id_bot_id_index` (`user_id`,`bot_id`),
  ADD KEY `user_bot_investments_status_index` (`status`);

--
-- Indexes for table `user_copytradings`
--
ALTER TABLE `user_copytradings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_plans`
--
ALTER TABLE `user_plans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_signals`
--
ALTER TABLE `user_signals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wallets`
--
ALTER TABLE `wallets`
  ADD PRIMARY KEY (`id`),
  ADD KEY `wallets_user_index` (`user`);

--
-- Indexes for table `wdmethods`
--
ALTER TABLE `wdmethods`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `withdrawals`
--
ALTER TABLE `withdrawals`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activities`
--
ALTER TABLE `activities`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `agents`
--
ALTER TABLE `agents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `autologin_tokens`
--
ALTER TABLE `autologin_tokens`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bnc_transactions`
--
ALTER TABLE `bnc_transactions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bot_trading_history`
--
ALTER TABLE `bot_trading_history`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contents`
--
ALTER TABLE `contents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `copytradings`
--
ALTER TABLE `copytradings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cp_transactions`
--
ALTER TABLE `cp_transactions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `crypto_accounts`
--
ALTER TABLE `crypto_accounts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `crypto_records`
--
ALTER TABLE `crypto_records`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `deposits`
--
ALTER TABLE `deposits`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=148;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `instruments`
--
ALTER TABLE `instruments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=156;

--
-- AUTO_INCREMENT for table `investments`
--
ALTER TABLE `investments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ipaddresses`
--
ALTER TABLE `ipaddresses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kycs`
--
ALTER TABLE `kycs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `loans`
--
ALTER TABLE `loans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `market_prices`
--
ALTER TABLE `market_prices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT for table `mt4_details`
--
ALTER TABLE `mt4_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `paystacks`
--
ALTER TABLE `paystacks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `plans`
--
ALTER TABLE `plans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `settings_conts`
--
ALTER TABLE `settings_conts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `signals`
--
ALTER TABLE `signals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `terms_privacies`
--
ALTER TABLE `terms_privacies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `testimonies`
--
ALTER TABLE `testimonies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `themes`
--
ALTER TABLE `themes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tp__transactions`
--
ALTER TABLE `tp__transactions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `trades`
--
ALTER TABLE `trades`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `trading_bots`
--
ALTER TABLE `trading_bots`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=303;

--
-- AUTO_INCREMENT for table `user_bot_investments`
--
ALTER TABLE `user_bot_investments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `user_copytradings`
--
ALTER TABLE `user_copytradings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_plans`
--
ALTER TABLE `user_plans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_signals`
--
ALTER TABLE `user_signals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `wallets`
--
ALTER TABLE `wallets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `wdmethods`
--
ALTER TABLE `wdmethods`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `withdrawals`
--
ALTER TABLE `withdrawals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bot_trading_history`
--
ALTER TABLE `bot_trading_history`
  ADD CONSTRAINT `bot_trading_history_user_bot_investment_id_foreign` FOREIGN KEY (`user_bot_investment_id`) REFERENCES `user_bot_investments` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `market_prices`
--
ALTER TABLE `market_prices`
  ADD CONSTRAINT `market_prices_instrument_id_foreign` FOREIGN KEY (`instrument_id`) REFERENCES `instruments` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `trades`
--
ALTER TABLE `trades`
  ADD CONSTRAINT `trades_instrument_id_foreign` FOREIGN KEY (`instrument_id`) REFERENCES `instruments` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `trades_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `user_bot_investments`
--
ALTER TABLE `user_bot_investments`
  ADD CONSTRAINT `user_bot_investments_bot_id_foreign` FOREIGN KEY (`bot_id`) REFERENCES `trading_bots` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_bot_investments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
