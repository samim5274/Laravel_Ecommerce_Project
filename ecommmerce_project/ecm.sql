-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 27, 2024 at 09:58 PM
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
-- Database: `ecm`
--

-- --------------------------------------------------------

--
-- Table structure for table `catagories`
--

CREATE TABLE `catagories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `catagories`
--

INSERT INTO `catagories` (`id`, `category_name`, `created_at`, `updated_at`) VALUES
(1, 'Men', NULL, NULL),
(2, 'women', NULL, NULL),
(3, 'fashion', NULL, NULL),
(4, 'Boy', NULL, NULL),
(5, 'Girl', NULL, NULL),
(6, 'Infant', NULL, NULL),
(7, 'Dress', NULL, NULL),
(8, 'Shoes', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fname` varchar(255) DEFAULT NULL,
  `lname` varchar(255) DEFAULT NULL,
  `dob` varchar(255) DEFAULT NULL,
  `phone` int(11) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `fname`, `lname`, `dob`, `phone`, `username`, `password`, `created_at`, `updated_at`, `image`) VALUES
(18, 'Jamser', 'Ali', '2000-11-11', 2, 'ali', 'j', '2024-04-25 12:08:09', '2024-04-25 12:08:09', '/images/employee/employee-17140684891.png|/images/employee/employee-17140684892.png|/images/employee/employee-17140684893.png'),
(19, 'Rifat', 'Hossain', '2001-05-05', 3, 'hossain', 'r', '2024-04-25 12:10:02', '2024-04-25 12:10:02', '/images/employee/employee-17140686021.jpg|/images/employee/employee-17140686022.jpg|/images/employee/employee-17140686023.jpg'),
(20, 'kabbik', 'ahmed', '2024-04-04', 43234, 'ahmed335', 'k', '2024-04-25 12:16:12', '2024-04-25 12:16:12', '/images/employee/employee-17140689721.jpg|/images/employee/employee-17140689722.jpg|/images/employee/employee-17140689723.jpg'),
(21, 'Lal', 'Mia', '2024-04-12', 982839, 'lalon329', 'l', '2024-04-25 12:18:00', '2024-04-25 12:18:00', '/images/employee/employee-17140690801.jpg|/images/employee/employee-17140690802.jpg|/images/employee/employee-17140690803.jpg'),
(22, 'Akib', 'Hossain', '2000-02-03', 23923, 'akib', 'a', '2024-04-26 11:12:07', '2024-04-26 11:12:07', '/images/employee/employee-17141515261.jpg|/images/employee/employee-17141515262.jpg|/images/employee/employee-17141515263.jpg'),
(23, 'samim', 'hossain', '2024-04-10', 32165487, 'samim', 's', '2024-04-27 10:05:46', '2024-04-27 10:05:46', '/images/employee/employee-17142339461.JPG|/images/employee/employee-17142339462.JPG'),
(24, 'Ariyan', 'Ahmed', '2024-04-13', 3937292, 'ariyan', 'a', '2024-04-27 11:56:29', '2024-04-27 11:56:29', '/images/employee/employee-17142405891.JPG|/images/employee/employee-17142405892.JPG|/images/employee/employee-17142405893.JPG'),
(25, 'Kobirul', 'Kobir', '2024-04-03', 93829283, 'kobir', 'k', '2024-04-27 11:57:01', '2024-04-27 11:57:01', '/images/employee/employee-17142406211.JPG|/images/employee/employee-17142406212.JPG|/images/employee/employee-17142406213.JPG|/images/employee/employee-17142406214.JPG'),
(26, 'Mostak', 'Hossain', '2024-04-01', 1234654897, 'mostak', 'm', '2024-04-27 11:57:46', '2024-04-27 11:57:46', '/images/employee/employee-17142406661.JPG|/images/employee/employee-17142406662.JPG|/images/employee/employee-17142406663.JPG');

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
(6, '2014_10_12_000000_create_users_table', 1),
(7, '2014_10_12_100000_create_password_resets_table', 1),
(8, '2019_08_19_000000_create_failed_jobs_table', 1),
(9, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(10, '2024_03_03_052956_create_products_table', 1),
(11, '2024_03_09_102846_add_colums_to_product_table', 2),
(12, '2024_03_09_103612_create_catagories_table', 2),
(15, '2024_04_20_181511_create_new_user_table', 3),
(16, '2024_04_20_183152_create_employees_table', 4),
(17, '2024_04_21_045348_add_image_to_employee_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `amount` int(11) NOT NULL,
  `qty` int(11) DEFAULT NULL,
  `price` int(11) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `detail` varchar(255) DEFAULT NULL,
  `catagory_id` int(11) DEFAULT NULL,
  `size` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `image`, `amount`, `qty`, `price`, `is_active`, `created_at`, `updated_at`, `detail`, `catagory_id`, `size`) VALUES
(1, 'Black Ball Pen', '/images/uploads/product_17095729341.jpg | /images/uploads/product_17095729342.jpg | /images/uploads/product_17095729343.jpg | /images/uploads/product_17095729344.jpg', 12, NULL, 5, 1, '2024-03-04 10:45:50', '2024-03-04 10:45:50', 'This is product detail', 1, ''),
(2, 'Red ball pen', '/images/uploads/product-17095756091.jpg | /images/uploads/product-17095756092.jpg | /images/uploads/product-17095756093.jpg', 12, NULL, 6, 1, '2024-03-04 10:49:51', '2024-03-04 10:49:51', 'This is product detail', 2, ''),
(3, 'A4 page', '/images/uploads/product-17100506521.jpg | /images/uploads/product-17100506522.jpg | /images/uploads/product-17100506523.jpg', 7, NULL, 450, 1, '2024-03-04 10:50:33', '2024-03-04 10:50:33', 'This is product detail', 3, ''),
(4, 'High Lighter', '/images/uploads/product-17095756521.jpg | /images/uploads/product-17095756522.jpg | /images/uploads/product-17095756523.jpg', 10, NULL, 34, 1, '2024-03-04 10:51:37', '2024-03-04 10:51:37', 'This is product detail', 1, ''),
(7, 'Men Solid T-shirt', '/images/uploads/product_17095728811.jpg | /images/uploads/product_17095728812.jpg | /images/uploads/product_17095728813.jpg', 10, NULL, 450, 1, '2024-03-04 11:21:21', '2024-03-04 11:21:21', 'This is product detail', 4, ''),
(8, 'Men T-shirt', '/images/uploads/product_17095729341.jpg | /images/uploads/product_17095729342.jpg | /images/uploads/product_17095729343.jpg | /images/uploads/product_17095729344.jpg', 10, NULL, 150, 1, '2024-03-04 11:22:14', '2024-03-04 11:22:14', 'This is product detail', 4, ''),
(9, 'Men Solid T-shirt', '/images/uploads/product-17095729921.jpg | /images/uploads/product-17095729922.jpg | /images/uploads/product-17095729923.jpg', 60, NULL, 450, 5, '2024-03-04 11:23:12', '2024-03-04 11:23:12', 'This is product detail', 1, ''),
(10, 'Shoe', '/images/uploads/product-17095756091.jpg | /images/uploads/product-17095756092.jpg | /images/uploads/product-17095756093.jpg', 12, NULL, 450, 1, '2024-03-04 12:06:49', '2024-03-04 12:06:49', 'This is product detail', 1, ''),
(11, 'Men Watch', '/images/uploads/product-17095756521.jpg | /images/uploads/product-17095756522.jpg | /images/uploads/product-17095756523.jpg', 30, NULL, 500, 1, '2024-03-04 12:07:32', '2024-03-04 12:07:32', 'This is product detail', 1, ''),
(12, 'A4 page', '/images/uploads/product-17099771771.jpg | /images/uploads/product-17099771772.jpg', 10, NULL, 5, 1, '2024-03-09 03:39:37', '2024-03-09 03:39:37', 'This is product detail', 5, ''),
(13, 'Men T-shirt', '/images/uploads/product-17100121541.jpg | /images/uploads/product-17100121542.jpg | /images/uploads/product-17100121543.jpg', 10, NULL, 450, 1, '2024-03-09 13:22:34', '2024-03-09 13:22:34', 'This is product details.', 5, NULL),
(14, 'Boys Full T-shirt', '/images/uploads/product-17100506521.jpg | /images/uploads/product-17100506522.jpg | /images/uploads/product-17100506523.jpg', 152, NULL, 150, 1, '2024-03-10 00:04:12', '2024-03-10 00:04:12', 'This is detail', 5, NULL),
(15, 'Women shit', '/images/uploads/product-17100508751.jpg | /images/uploads/product-17100508752.jpg | /images/uploads/product-17100508753.jpg', 12, NULL, 950, 1, '2024-03-10 00:07:55', '2024-03-10 00:07:55', 'This is product detail', 6, NULL),
(16, 'Girl Item', '/images/uploads/product-17100508911.jpg | /images/uploads/product-17100508912.jpg', 12, NULL, 120, 1, '2024-03-10 00:08:11', '2024-03-10 00:08:11', 'This is product detail', 8, NULL),
(17, 'Men Watch', '/images/uploads/product-17100509061.jpg | /images/uploads/product-17100509062.jpg | /images/uploads/product-17100509063.jpg', 120, NULL, 4550, 1, '2024-03-10 00:08:26', '2024-03-10 00:08:26', 'This is product detail', 7, NULL),
(18, 'Men Shoe', '/images/uploads/product-17100509291.jpg | /images/uploads/product-17100509292.jpg | /images/uploads/product-17100509293.jpg', 120, NULL, 1220, 1, '2024-03-10 00:08:49', '2024-03-10 00:08:49', 'This is product detail', 3, NULL),
(19, 'Ball', '/images/uploads/product-17100524881.jpg | /images/uploads/product-17100524882.jpg | /images/uploads/product-17100524883.jpg', 465, NULL, 4565, 1, '2024-03-10 00:34:48', '2024-03-10 00:34:48', NULL, 8, NULL),
(20, 'Double Peties Burger', '/images/uploads/product-17136331001.jpg | /images/uploads/product-17136331002.jpg', 120, NULL, 500, 1, '2024-04-20 11:11:40', '2024-04-20 11:11:40', NULL, NULL, NULL),
(21, 'Prothoma Islam', '/images/uploads/product-17137181181.jpeg | /images/uploads/product-17137181182.jpeg', 120, NULL, 500, 1, '2024-04-21 10:48:38', '2024-04-21 10:48:38', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `mobile` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `is_active` tinyint(1) DEFAULT 1,
  `is_admin` tinyint(1) DEFAULT 0,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `mobile`, `email_verified_at`, `password`, `is_active`, `is_admin`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'asdf', 'asdf@gmail.com', '123456789', '0000-00-00 00:00:00', 'a', 1, 0, NULL, NULL, NULL),
(12, 'asdf', 'samim@gmail.com', '321654', NULL, '', 1, 0, NULL, '2024-03-03 17:34:58', '2024-03-03 17:34:58'),
(16, 'qwe', 'qwer@gmail.com', '321654', NULL, 'd', 1, 0, NULL, '2024-03-03 17:37:52', '2024-03-03 17:37:52'),
(17, 'qwe2343', 'qwedsgr@gmail.com', '321654', NULL, 'c', 1, 0, NULL, '2024-03-03 17:39:24', '2024-03-03 17:39:24'),
(19, 'akib', 'akib@gmail.com', '321654', NULL, 'd', 1, 0, NULL, '2024-03-04 15:20:13', '2024-03-04 15:20:13'),
(21, 'samim', 'samim1234@gmail.com', '012345648', NULL, 's', 1, 0, NULL, '2024-03-09 09:39:06', '2024-03-09 09:39:06'),
(22, 'abul', 'abul1123@gmail.com', '', NULL, 'a', 1, 0, NULL, '2024-03-10 05:20:26', '2024-03-10 05:20:26'),
(23, 'ami', 'ami654@gmail.com', '', NULL, 'a', 1, 0, NULL, '2024-03-10 05:22:25', '2024-03-10 05:22:25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `catagories`
--
ALTER TABLE `catagories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `catagories`
--
ALTER TABLE `catagories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
