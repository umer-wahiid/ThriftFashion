-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 14, 2022 at 12:54 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `thriftfashionweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `brand` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `brand`, `created_at`, `updated_at`) VALUES
(1, 'Gucci', '2022-08-11 17:35:11', '2022-08-11 17:35:11'),
(2, 'Zara', '2022-08-11 17:35:20', '2022-08-11 17:35:20'),
(3, 'Armani', '2022-08-11 17:35:28', '2022-08-11 17:35:28'),
(4, 'Versace', '2022-08-11 17:35:47', '2022-08-11 17:35:47'),
(5, 'Zellbury', '2022-08-13 12:07:52', '2022-08-13 12:07:52'),
(6, 'Limelight', '2022-08-13 12:08:01', '2022-08-13 12:08:01'),
(7, 'Khaadi', '2022-08-13 12:08:09', '2022-08-13 12:08:09'),
(8, 'Beechtree', '2022-08-13 12:08:20', '2022-08-13 12:08:20'),
(9, 'Gul Ahmed', '2022-08-13 12:08:29', '2022-08-13 12:08:29'),
(10, 'Al Karam Studio', '2022-08-13 12:08:44', '2022-08-13 12:08:44');

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `user_id`, `product_id`, `quantity`, `status`, `created_at`, `updated_at`) VALUES
(1, 5, 5, 1, 1, '2022-08-14 05:49:09', '2022-08-14 05:49:09');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category`, `created_at`, `updated_at`) VALUES
(3, 'Man', '2022-08-13 12:06:40', '2022-08-13 12:06:40'),
(4, 'Women', '2022-08-13 12:06:46', '2022-08-13 12:06:46'),
(5, 'Kid', '2022-08-13 12:06:50', '2022-08-13 12:06:50');

-- --------------------------------------------------------

--
-- Table structure for table `checkouts`
--

CREATE TABLE `checkouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `order_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `checkouts`
--

INSERT INTO `checkouts` (`id`, `user_id`, `order_id`, `total`, `status`, `created_at`, `updated_at`) VALUES
(1, 5, 'OR-2', 24, 0, '2022-08-14 05:53:32', '2022-08-14 05:53:32');

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `country_id` int(11) NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact` int(11) NOT NULL,
  `message` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `contact`, `message`, `created_at`, `updated_at`) VALUES
(1, 'awais', 'awais@gmail.com', 31231231, 'uisdyfgdaiszjfbchD(AUS', '2022-08-11 18:37:02', '2022-08-11 18:37:02'),
(2, 'awais', 'awais@gmail.com', 31231231, 'asrfsadref', '2022-08-11 18:41:14', '2022-08-11 18:41:14'),
(3, 'asad', 'asad@gmail.com', 23454, 'srtgdsfgsdfg', '2022-08-12 10:09:48', '2022-08-12 10:09:48');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `deals`
--

CREATE TABLE `deals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact` int(11) NOT NULL,
  `message` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `contact`, `message`, `created_at`, `updated_at`) VALUES
(1, 'noman', 'awais@gmail.com', 34234, 'vxcsfgdasfg', '2022-08-12 10:15:50', '2022-08-12 10:15:50'),
(2, 'asad', 'asad@gmail.com', 23454, 'aesdfasdfas', '2022-08-13 20:18:28', '2022-08-13 20:18:28');

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
(33, '2014_10_12_000000_create_users_table', 1),
(34, '2014_10_12_100000_create_password_resets_table', 1),
(35, '2019_08_19_000000_create_failed_jobs_table', 1),
(36, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(37, '2022_08_10_144040_create_brands_table', 1),
(38, '2022_08_10_144103_create_carts_table', 1),
(39, '2022_08_10_144127_create_categories_table', 1),
(40, '2022_08_10_144149_create_checkouts_table', 1),
(41, '2022_08_10_144350_create_countries_table', 1),
(42, '2022_08_10_144407_create_cities_table', 1),
(43, '2022_08_10_144431_create_deals_table', 1),
(44, '2022_08_10_144507_create_feedback_table', 1),
(45, '2022_08_10_144529_create_orders_table', 1),
(46, '2022_08_10_144551_create_payments_table', 1),
(47, '2022_08_10_144617_create_products_table', 1),
(48, '2022_08_10_172254_create_contacts_table', 1),
(49, '2022_08_11_072808_create_roles_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `cart_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `order_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `desc` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `cart_id`, `product_id`, `order_id`, `quantity`, `price`, `desc`, `status`, `created_at`, `updated_at`) VALUES
(1, 5, 1, 5, 'OR-1', 1, 24, 'Men\'s Denim Pant Stretch Fit Cotton Fabric Back Insignia Pocket Antique Shank & Rivet', 2, '2022-08-14 05:51:15', '2022-08-14 05:53:38'),
(2, 5, 1, 5, 'OR-2', 1, 24, 'Men\'s Denim Pant Stretch Fit Cotton Fabric Back Insignia Pocket Antique Shank & Rivet', 2, '2022-08-14 05:53:32', '2022-08-14 05:53:36');

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
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `payment` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cat_id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `product` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) DEFAULT NULL,
  `stock` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `discount` int(11) DEFAULT NULL,
  `discounted_price` int(11) NOT NULL,
  `image` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `cat_id`, `brand_id`, `product`, `desc`, `price`, `stock`, `status`, `discount`, `discounted_price`, `image`, `created_at`, `updated_at`) VALUES
(4, 3, 2, 'Men\'s Black Jeans Pant', 'Men\'s Denim Pant Stretch Fit Cotton Fabric Stretchable Fabric Back Insignia Pocket Antique Silver Shank', 20, 10, 1, 10, 18, 'admin/assets/img\\phpB6A9.tmp', '2022-08-13 12:11:33', '2022-08-13 12:11:33'),
(5, 3, 3, 'Men\'s Light Blue Jeans', 'Men\'s Denim Pant Stretch Fit Cotton Fabric Back Insignia Pocket Antique Shank & Rivet', 30, 5, 1, 20, 24, 'admin/assets/img\\php27D4.tmp', '2022-08-13 12:15:19', '2022-08-13 12:15:19'),
(6, 3, 5, 'Men\'s Mid Blue Jeans', 'Men\'s Denim Pant Slim Fit Cotton Fabric Back Insignia Pocket Antique Shank & Rivet', 15, 50, 1, 40, 9, 'admin/assets/img\\php1E1C.tmp', '2022-08-13 12:16:22', '2022-08-13 12:16:22'),
(7, 3, 2, 'Men\'s Beige Chino Pant', 'Men\'s Chino Pant Slim Fit Extra Flexible Blended Cotton Fabric Decorative Inner Waistband Edenrobe Engraved Horn Buttons', 25, 25, 1, 12, 22, 'admin/assets/img\\php8FA.tmp', '2022-08-13 12:17:22', '2022-08-13 12:17:22'),
(8, 3, 6, 'Men\'s Pink Shirt', 'Men\'s Shirt Slim Fit Cotton Fabric Printed Stripe Pattern Button Up Collar Cut Cuff Edenrobe Engraved Buttons', NULL, 25, 1, NULL, 10, 'admin/assets/img\\php47F6.tmp', '2022-08-13 12:22:00', '2022-08-13 12:22:00'),
(9, 3, 4, 'Men\'s Light Blue Shirt', 'Men\'s Shirt Slim Fit Cotton Fabric Button Down Collar Contemporary Pattern Print Barrel Cuff Edenrobe Engraved Buttons', 20, 30, 1, 10, 18, 'admin/assets/img\\php80E6.tmp', '2022-08-13 12:26:37', '2022-08-13 12:26:37'),
(10, 3, 5, 'Men\'s Blue & White Shirt', 'Men\'s Formal Shirt Regular Fit Cotton Fabric Button Down Collar French Placket Barrel Cuff Edenrobe Engraved Buttons', NULL, 35, 1, NULL, 70, 'admin/assets/img\\php1DC9.tmp', '2022-08-13 12:29:28', '2022-08-13 12:29:28'),
(12, 3, 9, 'Men\'s Grey Shirt', 'Men\'s Formal Shirt Regular Fit Cotton Fabric Button Up Collar French Placket Barrel Cuff Edenrobe Engraved Buttons', 50, 5, 1, 10, 45, 'admin/assets/img\\phpEF5C.tmp', '2022-08-13 12:32:33', '2022-08-13 12:32:33'),
(13, 3, 2, 'Men\'s Grey Basic Tee', 'Men\'s Basic Tee Regular Fit Cotton Fabric Crew Neck', 10, 10, 1, 40, 6, 'admin/assets/img\\php83EE.tmp', '2022-08-13 12:36:28', '2022-08-13 12:36:28'),
(14, 3, 4, 'Men\'s Teal Blue Basic Tee', 'Men\'s Basic Tee Regular Fit Cotton Fabric Crew Neck', NULL, 50, 1, NULL, 20, 'admin/assets/img\\php6B19.tmp', '2022-08-13 12:39:38', '2022-08-13 12:39:38'),
(15, 3, 1, 'Men\'s Burgundy Basic Tee', 'Men\'s Basic Tee Regular Fit Cotton Fabric Crew Neck', NULL, 5, 1, NULL, 10, 'admin/assets/img\\php26A9.tmp', '2022-08-13 12:40:26', '2022-08-13 12:40:26'),
(16, 3, 1, 'Men\'s Green Graphic Tee', 'Men\'s Graphic Tee Regular Fit Cotton Fabric Round Neck Half Sleeves', NULL, 20, 1, NULL, 30, 'admin/assets/img\\php2E08.tmp', '2022-08-13 12:41:33', '2022-08-13 12:41:33'),
(17, 4, 10, 'Women\'s Yellow & White Pret', 'Women\'s Yellow & White Pret - EWTKE22-67985 (SD)', 50, 10, 1, 10, 45, 'admin/assets/img\\php6E46.tmp', '2022-08-13 12:47:17', '2022-08-13 12:47:17'),
(18, 4, 9, 'Women\'s Black & Grey Pret', 'Women\'s Black & Grey Pret - EWTKP22-68133 (ST)', NULL, 40, 1, NULL, 30, 'admin/assets/img\\php59A1.tmp', '2022-08-13 12:48:18', '2022-08-13 12:48:18'),
(19, 4, 7, 'Women\'s Pink & Black Pret', 'Women\'s Pink & Black Pret - EWTKP22-68085', 60, 30, 1, 10, 54, 'admin/assets/img\\php2F03.tmp', '2022-08-13 12:49:12', '2022-08-13 12:49:12'),
(20, 4, 9, 'Women\'s Royal Blue Pret', 'Women\'s Royal Blue Pret - EWTKE22-67893 (ST)', 60, 30, 1, 50, 30, 'admin/assets/img\\php2AC5.tmp', '2022-08-13 12:51:22', '2022-08-13 12:51:22'),
(21, 5, 2, 'Boy\'s Electric Blue Polo Shirt', 'Boys\' Polo Shirt Regular Fit Cotton Fabric Rib Collar & Cuff Half Sleeves Chest & Bottom Print', NULL, 20, 1, NULL, 5, 'admin/assets/img\\php2761.tmp', '2022-08-13 12:53:32', '2022-08-13 12:53:32'),
(22, 5, 3, 'Boy\'s White & Black Polo Shirt', 'Boys\' Polo Shirt Regular Fit Cotton Fabric Rib Collar & Cuff Half Sleeves All-Over Print', 10, 50, 1, 30, 7, 'admin/assets/img\\phpAEAC.tmp', '2022-08-13 13:02:51', '2022-08-13 13:02:51'),
(23, 5, 7, 'Boy\'s Navy Blue Kurta', 'Boy\'s Navy Blue Kurta - EBTK22-3845', 30, 5, 1, 10, 27, 'admin/assets/img\\phpFF77.tmp', '2022-08-13 13:04:17', '2022-08-13 13:04:17'),
(24, 5, 9, 'Boy\'s Light Brown Kurta Shalwar', 'Boy\'s Light Brown Kurta Shalwar - EBTKS22-3802', 20, 10, 1, 30, 14, 'admin/assets/img\\php64B5.tmp', '2022-08-13 13:05:49', '2022-08-13 13:05:49');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `role`, `created_at`, `updated_at`) VALUES
(1, 'Admin', '2022-08-11 15:15:07', '2022-08-11 15:15:07'),
(2, 'User', '2022-08-11 15:15:15', '2022-08-11 15:15:15');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact` int(11) NOT NULL,
  `address` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role_id`, `name`, `username`, `email`, `password`, `contact`, `address`, `country`, `city`, `image`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 2, 'noman', 'noman', 'awais@gmail.com', '1234', 31231231, 'xzxcxczcvdcsd', 'pakistan', 'karachi', 'admin/assets/user_images\\php2608.tmp', NULL, '2022-08-11 16:59:24', '2022-08-11 22:08:16'),
(2, 2, 'ali', 'ali', 'noman1@gmail.com', '$2y$10$SSLWty2cUfIsp5XIuNT/IOVaFZz0ERpQl3iA.AldLgJJ4gzwr.MjW', 12345, 'sfaasdf', 'pakistan', 'karachi', 'admin/assets/user_images\\phpEBC6.tmp', NULL, '2022-08-11 22:12:55', '2022-08-11 22:22:44'),
(5, 2, 'asad', 'asad', 'asad@gmail.com', '$2y$10$lK889/EshjBkCg.PaSASSOjWQh/VY80Dr5yzuxEsHo7D1a0u53J0m', 23454, 'xzxcxczcvdcsd', 'pakistan', 'karachi', 'admin/assets/users_images\\phpB76D.tmp', NULL, '2022-08-11 23:19:53', '2022-08-11 23:19:53');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `brands_brand_unique` (`brand`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_category_unique` (`category`);

--
-- Indexes for table `checkouts`
--
ALTER TABLE `checkouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `deals`
--
ALTER TABLE `deals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
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
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `payments_payment_unique` (`payment`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_password_unique` (`password`),
  ADD UNIQUE KEY `users_contact_unique` (`contact`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `checkouts`
--
ALTER TABLE `checkouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `deals`
--
ALTER TABLE `deals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
