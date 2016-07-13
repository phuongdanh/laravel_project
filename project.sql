-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 12, 2016 at 09:04 AM
-- Server version: 5.6.25
-- PHP Version: 5.5.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `parent_id` int(11) NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `description`, `parent_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Ao so mi', 'Ao so mi', 'Co nhan hieu ra uy tin trong nganh thoi trang', 0, 1, '2016-06-28 01:23:48', '2016-06-28 01:23:48'),
(2, 'Ao thun', 'Ao thun', 'Co nhan hieu ra uy tin trong nganh thoi trang', 0, 1, '2016-06-28 01:23:59', '2016-06-28 01:23:59'),
(5, 'Ao so mi han quoc', 'Ao so mi han quoc', 'Ao so mi Han Quoc', 1, 1, '2016-06-28 01:38:25', '2016-06-28 01:38:25'),
(6, 'Asm HQ1', 'Asm HQ1', 'Asm HQ1', 5, 1, '2016-06-28 01:49:39', '2016-06-28 01:49:39'),
(7, 'Asm HQ2', 'Asm HQ2', 'Asm HQ2', 5, 1, '2016-06-28 01:49:47', '2016-06-28 01:49:47'),
(8, 'Ao so mi cua Italia', 'Ao so mi cua Italia', 'Ao so mi cua Italia', 1, 1, '2016-06-28 01:50:21', '2016-06-28 01:50:21'),
(9, 'Asm I1', 'Asm I1', 'Asm I2', 8, 1, '2016-06-28 01:50:49', '2016-06-28 01:50:49');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(10) unsigned NOT NULL,
  `product_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE IF NOT EXISTS `contacts` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `favorites`
--

CREATE TABLE IF NOT EXISTS `favorites` (
  `id` int(10) unsigned NOT NULL,
  `product_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE IF NOT EXISTS `images` (
  `id` int(10) unsigned NOT NULL,
  `product_id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `path` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=54 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `product_id`, `name`, `path`, `created_at`, `updated_at`) VALUES
(17, 12, '403554190136220544102663909.PNG', 'resources/upload/images/products/details/403554190136220544102663909.PNG', '2016-07-06 19:48:28', '2016-07-06 19:48:28'),
(18, 12, '23417472957878190121540626.PNG', 'resources/upload/images/products/details/23417472957878190121540626.PNG', '2016-07-06 19:48:28', '2016-07-06 19:48:28'),
(19, 13, '1239683509168413877349093750.PNG', 'resources/upload/images/products/details/1239683509168413877349093750.PNG', '2016-07-06 19:48:33', '2016-07-06 19:48:33'),
(20, 13, '2733884990320913371174773829.PNG', 'resources/upload/images/products/details/2733884990320913371174773829.PNG', '2016-07-06 19:48:33', '2016-07-06 19:48:33'),
(21, 14, '177858192225270302136235797.PNG', 'resources/upload/images/products/details/177858192225270302136235797.PNG', '2016-07-06 19:48:36', '2016-07-06 19:48:36'),
(22, 14, '2280748561315184521192156071.PNG', 'resources/upload/images/products/details/2280748561315184521192156071.PNG', '2016-07-06 19:48:36', '2016-07-06 19:48:36'),
(30, 18, '263981672515275153591987437740.PNG', 'resources/upload/images/products/details/263981672515275153591987437740.PNG', '2016-07-07 21:38:39', '2016-07-07 21:38:39'),
(31, 18, '2810815352635826165393997073.PNG', 'resources/upload/images/products/details/2810815352635826165393997073.PNG', '2016-07-07 21:38:39', '2016-07-07 21:38:39'),
(34, 19, '15564263794631151251340879260.PNG', 'resources/upload/images/products/details/15564263794631151251340879260.PNG', '2016-07-07 21:39:33', '2016-07-07 21:39:33'),
(35, 20, '26847209314643718732372117366.jpg', 'resources/upload/images/products/details/26847209314643718732372117366.jpg', '2016-07-08 01:59:33', '2016-07-08 01:59:33'),
(37, 22, '6779123717135828824650666631.jpg', 'resources/upload/images/products/details/6779123717135828824650666631.jpg', '2016-07-08 02:01:19', '2016-07-08 02:01:19'),
(38, 23, '2543123101241532324514881065.jpg', 'resources/upload/images/products/details/2543123101241532324514881065.jpg', '2016-07-08 02:02:53', '2016-07-08 02:02:53'),
(50, 23, '22221495997441261911786310701.jpg', 'resources/upload/images/products/details/22221495997441261911786310701.jpg', '2016-07-08 02:24:08', '2016-07-08 02:24:08'),
(52, 24, '228301584849016114711233967839.jpg', 'resources/upload/images/products/details/228301584849016114711233967839.jpg', '2016-07-11 19:58:27', '2016-07-11 19:58:27'),
(53, 24, '138207310615029829833563701.jpg', 'resources/upload/images/products/details/138207310615029829833563701.jpg', '2016-07-11 23:16:41', '2016-07-11 23:16:41');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2016_06_28_013612_create_categories_table', 1),
('2016_06_28_014529_create_products_table', 2),
('2016_06_28_014638_create_orders_table', 2),
('2016_06_28_014703_create_images_table', 2),
('2016_06_28_014731_create_sizes_table', 2),
('2016_06_28_020051_create_product_sizes_table', 3),
('2016_06_28_020115_create_comments_table', 3),
('2016_06_28_020146_create_favorites_table', 3),
('2016_06_28_020212_create_contacts_table', 3),
('2016_07_06_081743_create_addCollumn_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `customerInfo` text COLLATE utf8_unicode_ci NOT NULL,
  `cartInfo` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `saleprice` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `intro` text COLLATE utf8_unicode_ci NOT NULL,
  `quantity` int(11) NOT NULL,
  `liked` int(11) NOT NULL,
  `viewed` int(11) NOT NULL,
  `saled` int(11) NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `cate_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `keywords` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `slug`, `price`, `saleprice`, `image`, `intro`, `quantity`, `liked`, `viewed`, `saled`, `description`, `cate_id`, `created_at`, `updated_at`, `keywords`) VALUES
(1, 'Ao thun soc trang den', 'Ao thun soc trang den', 150000, 200000, '', 'La loai trang phuc duoc gii tre kha yeu thich hien nay', 9, 0, 0, 0, 'La loai trang phuc duoc gii tre kha yeu thich hien nay', 2, '2016-07-06 01:47:26', '2016-07-06 01:47:26', 'Ao thun soc trang'),
(2, 'Ao thun soc trang den', 'Ao thun soc trang den', 150000, 200000, '', 'La loai trang phuc duoc gii tre kha yeu thich hien nay', 9, 0, 0, 0, 'La loai trang phuc duoc gii tre kha yeu thich hien nay', 2, '2016-07-06 01:55:49', '2016-07-06 01:55:49', 'Ao thun soc trang'),
(12, 'Ao so mi trang cuc dep', 'Ao so mi trang cuc dep', 12365, 2346545, '244341924670604.PNG', 'Ao so mi trang cuc dep', 8, 0, 0, 0, 'Ao so mi trang cuc dep', 2, '2016-07-06 19:48:28', '2016-07-06 19:48:28', 'Ao so mi trang cuc dep'),
(13, 'Ao so mi trang cuc dep', 'Ao so mi trang cuc dep', 12365, 2346545, '258871473775954.PNG', 'Ao so mi trang cuc dep', 8, 0, 0, 0, 'Ao so mi trang cuc dep', 2, '2016-07-06 19:48:33', '2016-07-06 19:48:33', 'Ao so mi trang cuc dep'),
(14, 'Ao so mi trang cuc dep', 'Ao so mi trang cuc dep', 12365, 2346545, '264561542328722.PNG', 'Ao so mi trang cuc dep', 8, 0, 0, 0, 'Ao so mi trang cuc dep', 2, '2016-07-06 19:48:36', '2016-07-06 19:48:36', 'Ao so mi trang cuc dep'),
(15, 'Ao so mi trang cuc dep', 'Ao so mi trang cuc dep', 12365, 2346545, '30445764083748.PNG', 'Ao so mi trang cuc dep', 8, 0, 0, 0, 'Ao so mi trang cuc dep', 2, '2016-07-06 19:48:38', '2016-07-06 19:48:38', 'Ao so mi trang cuc dep'),
(18, 'áo mới nhât', 'ao-moi-nhat', 233666, 566974, '22186986473741.PNG', 'Áo mới nhất', 5, 0, 0, 0, 'Áo mới nhất', 1, '2016-07-07 21:38:39', '2016-07-08 01:43:36', 'Áo mới nhất'),
(19, 'áo mới nhât', 'ao-moi-nhat', 233666, 566974, '6427681892620.PNG', 'Áo mới nhất', 5, 0, 0, 0, 'Áo mới nhất1111', 2, '2016-07-07 21:39:33', '2016-07-08 01:43:04', 'Áo mới nhất11111'),
(20, 'Ao moi sdfsdfsdf ', 'Ao moi sdfsdfsdf ', 444, 65656, '28210520265442.jpg', 'ao moi nha', 5, 0, 0, 0, 'Ao moi nha', 2, '2016-07-08 01:59:33', '2016-07-08 01:59:33', 'Ao moi nha'),
(21, 'Ao moi sdfsdfsdf ', 'Ao moi sdfsdfsdf ', 444, 65656, '278941070788287.jpg', 'ao moi nha', 5, 0, 0, 0, 'Ao moi nha', 2, '2016-07-08 02:00:40', '2016-07-08 02:00:40', 'Ao moi nha'),
(22, 'Ao moi sdfsdfsdf ', 'Ao moi sdfsdfsdf ', 444, 65656, '92141873724806.jpg', 'ao moi nha', 5, 0, 0, 0, 'Ao moi nha', 2, '2016-07-08 02:01:18', '2016-07-08 02:01:18', 'Ao moi nha'),
(23, 'Ao moi sdfsdfsdf ', 'ao-moi-sdfsdfsdf', 444, 65656, '25115414887785.jpg', 'ao moi nha', 5, 0, 0, 0, 'Ao moi nha', 1, '2016-07-08 02:02:53', '2016-07-11 19:05:30', 'Ao moi nha'),
(24, 'Ao thun ho bao', 'ao-thun-ho-bao', 20000, 30000, '18159279096577.jpg', 'Ao thun nay mac vao ai cung phai so', 46, 0, 0, 0, 'Ao thun nay mac vao ai cung phai so', 1, '2016-07-11 19:58:27', '2016-07-11 23:17:01', 'Ao thun nay mac vao ai cung phai so');

-- --------------------------------------------------------

--
-- Table structure for table `product_sizes`
--

CREATE TABLE IF NOT EXISTS `product_sizes` (
  `id` int(10) unsigned NOT NULL,
  `product_id` int(10) unsigned NOT NULL,
  `size_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `product_sizes`
--

INSERT INTO `product_sizes` (`id`, `product_id`, `size_id`, `created_at`, `updated_at`) VALUES
(16, 24, 2, '2016-07-11 23:17:27', '2016-07-11 23:17:27'),
(17, 24, 3, '2016-07-11 23:17:27', '2016-07-11 23:17:27'),
(18, 24, 4, '2016-07-11 23:17:27', '2016-07-11 23:17:27');

-- --------------------------------------------------------

--
-- Table structure for table `sizes`
--

CREATE TABLE IF NOT EXISTS `sizes` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sizes`
--

INSERT INTO `sizes` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'S', 'Small', NULL, NULL),
(2, 'M', 'Medium', NULL, NULL),
(3, 'L', 'Large', NULL, NULL),
(4, 'XL', 'Extra Large', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL,
  `firstname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `role` int(11) NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `address`, `role`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Tu', 'Phuong Danh', 'tuphuongdanh1996@gmail.com', '63 Mai Lao Bang', 3, 'danhchutich23', 'jshdkfhskdhfjsjfn78576469865858', '2016-06-01 17:00:00', '2016-06-23 17:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categories_user_id_foreign` (`user_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_product_id_foreign` (`product_id`),
  ADD KEY `comments_user_id_foreign` (`user_id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `favorites`
--
ALTER TABLE `favorites`
  ADD PRIMARY KEY (`id`),
  ADD KEY `favorites_product_id_foreign` (`product_id`),
  ADD KEY `favorites_user_id_foreign` (`user_id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `images_product_id_foreign` (`product_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_user_id_foreign` (`user_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_cate_id_foreign` (`cate_id`);

--
-- Indexes for table `product_sizes`
--
ALTER TABLE `product_sizes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_sizes_product_id_foreign` (`product_id`),
  ADD KEY `product_sizes_size_id_foreign` (`size_id`);

--
-- Indexes for table `sizes`
--
ALTER TABLE `sizes`
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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `favorites`
--
ALTER TABLE `favorites`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=54;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `product_sizes`
--
ALTER TABLE `product_sizes`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `sizes`
--
ALTER TABLE `sizes`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `categories_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `comments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `favorites`
--
ALTER TABLE `favorites`
  ADD CONSTRAINT `favorites_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `favorites_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `images_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_cate_id_foreign` FOREIGN KEY (`cate_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `product_sizes`
--
ALTER TABLE `product_sizes`
  ADD CONSTRAINT `product_sizes_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `product_sizes_size_id_foreign` FOREIGN KEY (`size_id`) REFERENCES `sizes` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
