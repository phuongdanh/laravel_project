-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 19, 2016 at 10:52 AM
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
  `keyWords` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `parent_id` int(11) NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=116 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `description`, `keyWords`, `parent_id`, `user_id`, `created_at`, `updated_at`) VALUES
(101, 'Áo khoác', 'ao-khoac', '', 'Ao khoac', 0, 1, '2016-07-14 21:48:03', '2016-07-14 23:17:42'),
(102, 'Áo thun, áo polo', 'ao-thun-ao-polo', '', 'Ao thun, ao polo', 0, 1, '2016-07-14 23:10:09', '2016-07-14 23:18:36'),
(103, 'Áo sơ mi', 'ao-so-mi', '', 'ao so mi', 0, 1, '2016-07-14 23:10:52', '2016-07-14 23:19:57'),
(104, 'Áo khoác thể thao', 'ao-khoac-the-thao', '', 'ao khoac the thao', 101, 1, '2016-07-14 23:11:41', '2016-07-14 23:11:41'),
(105, 'Áo khoac chống nắng', 'ao-khoac-chong-nang', '', 'ao khoac chong nang', 101, 1, '2016-07-14 23:12:01', '2016-07-14 23:12:01'),
(106, 'Áo khoác có mũ', 'ao-khoac-co-mu', '', 'ao khoac co mu', 101, 1, '2016-07-14 23:12:32', '2016-07-14 23:12:32'),
(107, 'Áo khoác da', 'ao-khoac-da', '', 'Ao khoac da', 101, 1, '2016-07-14 23:13:03', '2016-07-14 23:13:03'),
(108, 'Áo thun không cổ', 'ao-thun-khong-co', '', 'ao thun khong co', 102, 1, '2016-07-14 23:13:35', '2016-07-14 23:18:42'),
(109, 'Áo polo có cổ', 'ao-polo-co-co', '', 'ao polo có cổ', 102, 1, '2016-07-14 23:13:59', '2016-07-14 23:18:49'),
(110, 'Áo thun dài tay', 'ao-thun-dai-tay', '', 'ao thun dai tay', 102, 1, '2016-07-14 23:14:29', '2016-07-14 23:18:53'),
(111, 'Áo ba lỗ', 'ao-ba-lo', '', 'ao ba lo', 102, 1, '2016-07-14 23:14:46', '2016-07-14 23:19:01'),
(112, 'Áo len, áo lạnh', 'ao-len-ao-lanh', '', 'ao len, ao lanh', 102, 1, '2016-07-14 23:15:07', '2016-07-14 23:19:30'),
(113, 'Áo sơ mi dài tay', 'ao-so-mi-dai-tay', '', 'ao sơ mi dai tay', 103, 1, '2016-07-14 23:15:57', '2016-07-14 23:20:06'),
(114, 'Áo sơ mi ngắn tay', 'ao-so-mi-ngan-tay', '', 'ao so mi ngan tay', 103, 1, '2016-07-14 23:16:48', '2016-07-14 23:20:13'),
(115, 'Áo khoác modern', 'ao-khoac-modern', 'Là những lọa thời trang độc đáo và hiện đại nhất hiện nay', 'Ao khoac modern', 101, 1, '2016-07-14 23:56:16', '2016-07-14 23:56:16');

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
) ENGINE=InnoDB AUTO_INCREMENT=70 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `product_id`, `name`, `path`, `created_at`, `updated_at`) VALUES
(56, 28, '26025116817148330510891489134.Jpg', 'resources/upload/images/products/details/26025116817148330510891489134.Jpg', '2016-07-14 23:36:39', '2016-07-14 23:36:39'),
(57, 29, '278892063559506214670286862.Jpg', 'resources/upload/images/products/details/278892063559506214670286862.Jpg', '2016-07-14 23:39:55', '2016-07-14 23:39:55'),
(58, 31, '26413301471761216021208056656.Jpg', 'resources/upload/images/products/details/26413301471761216021208056656.Jpg', '2016-07-14 23:47:03', '2016-07-14 23:47:03'),
(59, 31, '31219204615791999041440720577.Jpg', 'resources/upload/images/products/details/31219204615791999041440720577.Jpg', '2016-07-14 23:47:03', '2016-07-14 23:47:03'),
(60, 35, '201979470974423514291409963.Jpg', 'resources/upload/images/products/details/201979470974423514291409963.Jpg', '2016-07-14 23:54:29', '2016-07-14 23:54:29'),
(61, 38, '193341312084677113351857278142.Jpg', 'resources/upload/images/products/details/193341312084677113351857278142.Jpg', '2016-07-15 00:04:09', '2016-07-15 00:04:09'),
(62, 38, '11380420161396301091213328851.Jpg', 'resources/upload/images/products/details/11380420161396301091213328851.Jpg', '2016-07-15 00:04:09', '2016-07-15 00:04:09'),
(63, 38, '667438058094517891942411646.Jpg', 'resources/upload/images/products/details/667438058094517891942411646.Jpg', '2016-07-15 00:04:09', '2016-07-15 00:04:09'),
(64, 39, '1719349551891200041947977620.Jpg', 'resources/upload/images/products/details/1719349551891200041947977620.Jpg', '2016-07-15 00:07:59', '2016-07-15 00:07:59'),
(65, 39, '28045114823383192662131761724.Jpg', 'resources/upload/images/products/details/28045114823383192662131761724.Jpg', '2016-07-15 00:07:59', '2016-07-15 00:07:59'),
(66, 40, '9308703231762131571293489587.jpg', 'resources/upload/images/products/details/9308703231762131571293489587.jpg', '2016-07-15 00:15:29', '2016-07-15 00:15:29'),
(67, 40, '22586178427981727883729354242.jpg', 'resources/upload/images/products/details/22586178427981727883729354242.jpg', '2016-07-15 00:15:29', '2016-07-15 00:15:29'),
(68, 43, '55511943584862158041539248193.jpg', 'resources/upload/images/products/details/55511943584862158041539248193.jpg', '2016-07-15 00:19:17', '2016-07-15 00:19:17'),
(69, 43, '167091805810523154482837000.jpg', 'resources/upload/images/products/details/167091805810523154482837000.jpg', '2016-07-15 00:19:17', '2016-07-15 00:19:17');

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
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `slug`, `price`, `saleprice`, `image`, `intro`, `quantity`, `liked`, `viewed`, `saled`, `description`, `cate_id`, `created_at`, `updated_at`, `keywords`) VALUES
(28, 'Áo Thun Nam MAESRATI Cá Tính', 'ao-thun-nam-maesrati-ca-tinh', 85000, 90000, '25904890225921.Jpg', 'Áo Thun Nam MAESRATI Cá Tính, có xuất xứ từ các nước phương Tây', 4, 0, 0, 0, '<p>Kiểu áo cổ tròn, tay ngắn năng động, thân áo in hình ngộ nghĩnh, cá tính cho bạn trai thêm vẻ khỏe khoắn, nam tính.</p>\r\n\r\n<ul>\r\n	<li>Áo cổ tròn tay ngắn tạo điểm nhấn với họa tiết trẻ trung, cá tính.</li>\r\n	<li>Dễ dàng mix cùng quần short, quần jean tạo nhiều phong cách mới lạ, cuốn hút.</li>\r\n	<li>Chất liệu thun thoáng mát, thấm hút hiệu quả giúp bạn trai tự tin vận động.</li>\r\n	<li>Thích hợp mặc đi chơi, dạo phố.</li>\r\n	<li>Thích hợp với bạn nam dưới 65Kg (tùy chiều cao).</li>\r\n</ul>\r\n', 108, '2016-07-14 23:36:39', '2016-07-14 23:37:10', 'Thun Nam MAESRATI'),
(29, 'Áo Sweater Nam Hoa Văn Thời Trang', 'ao-sweater-nam-hoa-van-thoi-trang', 58000, 100000, '23704486898639.Jpg', 'Áo Sweater Nam Hoa Văn Thời Trang', 6, 0, 0, 0, '<p>&Aacute;o sweater với chất liệu b&ecirc;n trong phần thun l&agrave; lớp l&ocirc;ng mềm mịn, gi&uacute;p bạn giữ ấm tối đa, kiểu &aacute;o đơn giản dễ d&agrave;ng mix c&ugrave;ng c&aacute;c trang phục kh&aacute;c tạo phong c&aacute;ch thời trang s&agrave;nh điệu.</p>\r\n\r\n<ul>\r\n	<li>Thiết kế trẻ trung với tay &aacute;o d&agrave;i, hoa văn v&agrave; m&agrave;u sắc phối h&agrave;i h&ograve;a kiểu d&aacute;ng năng động, s&agrave;nh điệu, cho c&aacute;c bạn nam tự tin khoe c&aacute; t&iacute;nh s&ocirc;i nổi.&nbsp;</li>\r\n	<li>Chất liệu<strong>&nbsp;</strong>thun nỉ với lớp l&ocirc;ng d&agrave;y mịn b&ecirc;n trong, co gi&atilde;n tốt v&agrave; giữ ấm hiệu quả, mang lại sự thoải m&aacute;i, tho&aacute;ng m&aacute;t, thấm h&uacute;t mồ h&ocirc;i tốt, ph&ugrave; hợp với c&aacute;c bạn trẻ y&ecirc;u th&iacute;ch hoạt động.</li>\r\n	<li>Size L: ph&ugrave; hợp với bạn dưới 70kg.&nbsp;</li>\r\n</ul>\r\n', 102, '2016-07-14 23:39:55', '2016-07-14 23:39:55', 'Sweater Nam'),
(30, 'Áo thun nam cổ tim cá tính', 'ao-thun-nam-co-tim-ca-tinh', 65000, 96000, '16215262554805.Jpg', 'Áo thun cổ tim cá tính', 8, 0, 0, 0, '<p>Thiết kế cổ tim ph&aacute; c&aacute;ch, m&agrave;u sắc trẻ trung mang đến n&eacute;t khỏe khoắn, nam t&iacute;nh cho bạn trai.</p>\r\n\r\n<ul>\r\n	<li>Thiết kế tinh tế với form &aacute;o chuẩn, cổ tim phối t&uacute;i thời trang mang lại cho bạn nam một c&aacute; t&iacute;nh mạnh mẽ.</li>\r\n	<li>&Aacute;o thun t&ocirc;n l&ecirc;n n&eacute;t trẻ trung, năng động cho bạn trẻ.</li>\r\n	<li>Dễ d&agrave;ng mix c&ugrave;ng c&aacute;c trang phục kh&aacute;c như quần short, jean, ...</li>\r\n	<li>Chất liệu thun c&aacute; sấu tho&aacute;ng m&aacute;t, dễ thấm h&uacute;t mồ h&ocirc;i, tạo sự tho&aacute;ng m&aacute;t khi mặc.</li>\r\n	<li>Ph&ugrave; hợp với bạn nam &lt;70kg.</li>\r\n	<li>T&ugrave;y chiều cao.</li>\r\n</ul>\r\n', 101, '2016-07-14 23:42:03', '2016-07-14 23:42:03', 'thun co tim ca tinh'),
(31, 'Áo Thun Thái 3D Thời Trang', 'ao-thun-thai-3d-thoi-trang', 120000, 150000, '108201905127466.Jpg', 'Áo Thun Thái 3D Thời Trang', 4, 0, 0, 0, '<p>Kiểu d&aacute;ng đơn giản với cổ tim, tay ngắn, &aacute;o in 3D nh&iacute; nhố cho bạn n&eacute;t c&aacute; t&iacute;nh, năng động.</p>\r\n\r\n<ul>\r\n	<li>Form &aacute;o vừa phải tạo n&eacute;t khỏe khoắn v&agrave; năng đ&ocirc;̣ng cho trang phục th&ecirc;m phần cuốn h&uacute;t.</li>\r\n	<li>Chất liệu&nbsp;thun cotton 4 chiều&nbsp;mềm mại, tho&aacute;ng m&aacute;t, con gi&atilde;n, thấm h&uacute;t mồ h&ocirc;i tốt.</li>\r\n	<li>Kiểu d&aacute;ng đơn giản với cổ tim, tay ngắn, &aacute;o in 3D nh&iacute; nhố cho bạn n&eacute;t c&aacute; t&iacute;nh, năng động.</li>\r\n	<li>Freesize, th&iacute;ch hợp với&nbsp;v&agrave; bạn nam dưới 65kg (t&ugrave;y chiều cao)</li>\r\n</ul>\r\n', 108, '2016-07-14 23:47:03', '2016-07-14 23:47:03', 'thun thai 3D'),
(32, 'Áo Thun Nam MAESRATI Cá Tính', 'ao-thun-nam-maesrati-ca-tinh', 85000, 90000, '25904890225921.Jpg', 'Áo Thun Nam MAESRATI Cá Tính, có xuất xứ từ các nước phương Tây', 4, 0, 0, 0, '<p>Kiểu áo cổ tròn, tay ngắn năng động, thân áo in hình ngộ nghĩnh, cá tính cho bạn trai thêm vẻ khỏe khoắn, nam tính.</p>\r\n\r\n<ul>\r\n	<li>Áo cổ tròn tay ngắn tạo điểm nhấn với họa tiết trẻ trung, cá tính.</li>\r\n	<li>Dễ dàng mix cùng quần short, quần jean tạo nhiều phong cách mới lạ, cuốn hút.</li>\r\n	<li>Chất liệu thun thoáng mát, thấm hút hiệu quả giúp bạn trai tự tin vận động.</li>\r\n	<li>Thích hợp mặc đi chơi, dạo phố.</li>\r\n	<li>Thích hợp với bạn nam dưới 65Kg (tùy chiều cao).</li>\r\n</ul>\r\n', 108, '2016-07-14 23:36:39', '2016-07-14 23:37:10', 'Thun Nam MAESRATI'),
(33, 'Áo thun nam cổ tim cá tính', 'ao-thun-nam-co-tim-ca-tinh', 65000, 96000, '16215262554805.Jpg', 'Áo thun cổ tim cá tính', 8, 0, 0, 0, '<p>Thiết kế cổ tim ph&aacute; c&aacute;ch, m&agrave;u sắc trẻ trung mang đến n&eacute;t khỏe khoắn, nam t&iacute;nh cho bạn trai.</p>\r\n\r\n<ul>\r\n	<li>Thiết kế tinh tế với form &aacute;o chuẩn, cổ tim phối t&uacute;i thời trang mang lại cho bạn nam một c&aacute; t&iacute;nh mạnh mẽ.</li>\r\n	<li>&Aacute;o thun t&ocirc;n l&ecirc;n n&eacute;t trẻ trung, năng động cho bạn trẻ.</li>\r\n	<li>Dễ d&agrave;ng mix c&ugrave;ng c&aacute;c trang phục kh&aacute;c như quần short, jean, ...</li>\r\n	<li>Chất liệu thun c&aacute; sấu tho&aacute;ng m&aacute;t, dễ thấm h&uacute;t mồ h&ocirc;i, tạo sự tho&aacute;ng m&aacute;t khi mặc.</li>\r\n	<li>Ph&ugrave; hợp với bạn nam &lt;70kg.</li>\r\n	<li>T&ugrave;y chiều cao.</li>\r\n</ul>\r\n', 101, '2016-07-14 23:42:03', '2016-07-14 23:42:03', 'thun co tim ca tinh'),
(34, 'Áo Sweater Nam Hoa Văn Thời Trang', 'ao-sweater-nam-hoa-van-thoi-trang', 58000, 100000, '23704486898639.Jpg', 'Áo Sweater Nam Hoa Văn Thời Trang', 6, 0, 0, 0, '<p>&Aacute;o sweater với chất liệu b&ecirc;n trong phần thun l&agrave; lớp l&ocirc;ng mềm mịn, gi&uacute;p bạn giữ ấm tối đa, kiểu &aacute;o đơn giản dễ d&agrave;ng mix c&ugrave;ng c&aacute;c trang phục kh&aacute;c tạo phong c&aacute;ch thời trang s&agrave;nh điệu.</p>\r\n\r\n<ul>\r\n	<li>Thiết kế trẻ trung với tay &aacute;o d&agrave;i, hoa văn v&agrave; m&agrave;u sắc phối h&agrave;i h&ograve;a kiểu d&aacute;ng năng động, s&agrave;nh điệu, cho c&aacute;c bạn nam tự tin khoe c&aacute; t&iacute;nh s&ocirc;i nổi.&nbsp;</li>\r\n	<li>Chất liệu<strong>&nbsp;</strong>thun nỉ với lớp l&ocirc;ng d&agrave;y mịn b&ecirc;n trong, co gi&atilde;n tốt v&agrave; giữ ấm hiệu quả, mang lại sự thoải m&aacute;i, tho&aacute;ng m&aacute;t, thấm h&uacute;t mồ h&ocirc;i tốt, ph&ugrave; hợp với c&aacute;c bạn trẻ y&ecirc;u th&iacute;ch hoạt động.</li>\r\n	<li>Size L: ph&ugrave; hợp với bạn dưới 70kg.&nbsp;</li>\r\n</ul>\r\n', 102, '2016-07-14 23:39:55', '2016-07-14 23:39:55', 'Sweater Nam'),
(35, 'Áo Vest Nam Viền Sọc Màu Thời Trang Cao Cấp', 'ao-vest-nam-vien-soc-mau-thoi-trang-cao-cap', 260000, 350000, '322202015735690.Jpg', 'Áo Vest Nam Viền Sọc Màu Thời Trang Cao Cấp', 4, 0, 0, 0, '<p>Kiểu d&aacute;ng đơn giản, hợp thời trang, tạo phong c&aacute;ch lịch l&atilde;m, sang trọng cho nam giới.</p>\r\n\r\n<ul>\r\n	<li>Thiết kế vừa sang trọng, lịch l&atilde;m vừa trẻ trung, năng động.</li>\r\n	<li>Mang đến cho ph&aacute;i mạnh vẻ&nbsp;sang trọng, lịch l&atilde;m v&agrave; v&ocirc; c&ugrave;ng c&aacute; t&iacute;nh.&nbsp;</li>\r\n	<li>Ph&ugrave; hợp cho những sự kiện, cuộc hẹn h&ograve; l&atilde;ng mạn, hay những buổi hẹn, party...</li>\r\n	<li>Chất liệu: Kaki H&agrave;n Quốc cao cấp k&egrave;m lớp d&ugrave; mềm mịn, tho&aacute;ng m&aacute;t.</li>\r\n</ul>\r\n', 107, '2016-07-14 23:54:29', '2016-07-14 23:54:29', 'ao vest nam'),
(36, 'Áo Khoác Kaki Nam Tay Phối Khóa Kéo Phá Cách', 'ao-khoac-kaki-nam-tay-phoi-khoa-keo-pha-cach', 250000, 300000, '134191946454390.Jpg', 'Áo khoác kaki nam thiết kế form dáng khỏe khoắn không chỉ giúp bảo vệ cơ thể mà còn mang đến phong cách trẻ trung, cá tính cho bạn trai.', 5, 0, 0, 0, '<p>&Aacute;o kho&aacute;c kaki nam thiết kế form d&aacute;ng khỏe khoắn kh&ocirc;ng chỉ gi&uacute;p bảo vệ cơ thể m&agrave; c&ograve;n mang đến phong c&aacute;ch trẻ trung, c&aacute; t&iacute;nh cho bạn trai.</p>\r\n\r\n<ul>\r\n	<li>Kiểu d&aacute;ng đơn giản nhưng kh&ocirc;ng k&eacute;m phần tinh tế cho bạn phong c&aacute;ch lạ v&agrave; cực chất, form &aacute;o chuẩn cho bạn nam vẻ hiện đại v&agrave; c&aacute; t&iacute;nh.</li>\r\n	<li>Thiết kế 2 t&uacute;i k&egrave;m n&uacute;t bấm tiện dụng, tay d&agrave;i phối kh&oacute;a k&eacute;o s&agrave;nh điệu, ph&aacute; c&aacute;ch.</li>\r\n	<li>&nbsp;C&oacute; thể diện ra ngo&agrave;i d&ugrave; thời tiết nắng n&oacute;ng hay se lạnh.</li>\r\n	<li>Bạn n&ecirc;n kết hợp &aacute;o kho&aacute;c với quần jeans, kaki... thể hiện đẳng cấp người mặc</li>\r\n	<li>Chất liệu: Kaki thun c&oacute; độ co d&atilde;n.</li>\r\n	<li>Th&iacute;ch hợp với bạn trai dưới 70Kg (t&ugrave;y chiều cao).</li>\r\n</ul>\r\n', 115, '2016-07-14 23:57:37', '2016-07-14 23:57:37', 'Ao khoac kaki'),
(37, ' Áo Khoác Cardigan Nam Viền Màu Cá Tính', 'ao-khoac-cardigan-nam-vien-mau-ca-tinh', 190000, 225000, '7112471616253.Jpg', 'Cardigan với thiết kế đơn giản, form áo đẹp, dễ dàng mix cùng các kiểu trang phục. Áo tạo điểm nhấn với phần tay viền màu phá cách.', 12, 0, 0, 0, '<p>Cardigan với thiết kế đơn giản, form &aacute;o đẹp, dễ d&agrave;ng mix c&ugrave;ng c&aacute;c kiểu trang phục. &Aacute;o tạo điểm nhấn với phần tay viền m&agrave;u ph&aacute; c&aacute;ch.</p>\r\n\r\n<ul>\r\n	<li>Thiết kế trẻ trung vừa giữ ấm v&agrave;o trời lạnh, vừa chống nắng, bụi khi đi đường.</li>\r\n	<li>M&agrave;u sắc trang nh&atilde; dễ mix với nhiều trang phục kh&aacute;c nhau, cho bạn phong c&aacute;ch năng động, c&aacute; t&iacute;nh.</li>\r\n	<li>Chất liệu thun g&acirc;n d&agrave;y dặn, tho&aacute;ng m&aacute;t, tạo cảm gi&aacute;c thoải m&aacute;i cho người mặc.</li>\r\n</ul>\r\n', 115, '2016-07-14 23:59:52', '2016-07-15 00:00:42', 'ao khoac cardigan'),
(38, 'Áo Khoác Nam Giả Măng Tô Thời Trang', 'ao-khoac-nam-gia-mang-to-thoi-trang', 256000, 300000, '29793375550433.Jpg', 'Áo khoác giả vest với kiểu dáng truyền thống cài nút đơn giản, nhưng không kém phần sành điệu, mang đến phong cách thời trang sành điệu hơn ở phái mạnh.', 4, 0, 0, 0, '<p>&Aacute;o kho&aacute;c giả vest với kiểu d&aacute;ng truyền thống c&agrave;i n&uacute;t đơn giản, nhưng kh&ocirc;ng k&eacute;m phần s&agrave;nh điệu, mang đến phong c&aacute;ch thời trang s&agrave;nh điệu hơn ở ph&aacute;i mạnh.</p>\r\n\r\n<ul>\r\n	<li>\r\n	<p>Thiết kế dạng vest nỗi bật với&nbsp;2 h&agrave;ng n&uacute;t thanh lịch.</p>\r\n	</li>\r\n	<li>\r\n	<p>&Aacute;o được may với chất liệu nỉ mềm tạo cảm gi&aacute;c thoải m&aacute;i cho người &nbsp;mặc</p>\r\n	</li>\r\n	<li>\r\n	<p>Kiểu d&aacute;ng&nbsp;trẻ trung, lịch l&atilde;m&nbsp;vừa năng động vừa ấm &aacute;p cho những ng&agrave;y se lạnh.</p>\r\n	</li>\r\n	<li>\r\n	<p>Gi&uacute;p bạn bảo vệ l&agrave;n da trong những ng&agrave;y nắng v&agrave; ấm &aacute;p hơn trong những ng&agrave;y se lạnh.</p>\r\n	</li>\r\n	<li>\r\n	<p>Dễ d&agrave;ng phối quần jean-&aacute;o thun hay quần t&acirc;y-&aacute;o sơ mi...</p>\r\n	</li>\r\n</ul>\r\n', 105, '2016-07-15 00:04:09', '2016-07-15 00:04:09', 'ao khoac mang to'),
(39, 'Áo Vest Nam Thời Trang', 'ao-vest-nam-thoi-trang', 360000, 400000, '188701673447005.Jpg', 'Kiểu dáng đơn giản, hợp thời trang, tạo phong cách lịch lãm, sang trọng cho nam giới.', 4, 0, 0, 0, '<p>Kiểu d&aacute;ng đơn giản, hợp thời trang, tạo phong c&aacute;ch lịch l&atilde;m, sang trọng cho nam giới.</p>\r\n\r\n<ul>\r\n	<li>\r\n	<p>&Aacute;o được may từ chất liệu&nbsp;vải kaki, mềm mại, tạo cảm gi&aacute;c&nbsp;thoải m&aacute;i&nbsp;cho người &nbsp;mặc.</p>\r\n	</li>\r\n	<li>\r\n	<p>Thiết kế vừa sang trọng, lịch l&atilde;m vừa trẻ trung, năng động.</p>\r\n	</li>\r\n	<li>\r\n	<p>Mang đến cho ph&aacute;i mạnh vẻ&nbsp;sang trọng, lịch l&atilde;m v&agrave; v&ocirc; c&ugrave;ng c&aacute; t&iacute;nh.&nbsp;</p>\r\n	</li>\r\n	<li>\r\n	<p>Ph&ugrave; hợp cho những sự kiện, cuộc hẹn h&ograve; l&atilde;ng mạn, hay những buổi hẹn, party...&nbsp;</p>\r\n	</li>\r\n</ul>\r\n', 115, '2016-07-15 00:07:59', '2016-07-15 00:07:59', 'vest nam'),
(40, 'Áo sơ mi nam hàn quốc cực đẹp', 'ao-so-mi-nam-han-quoc-cuc-dep', 250005, 260000, '29391326723333.jpg', 'Form áo đẹp, tôn vóc dáng và vẻ đẹp lịch thiệp chốn văn phòng của nam giới, mang đến phong cách thời trang sành điệu.', 5, 0, 0, 0, '<p>Form &aacute;o đẹp, t&ocirc;n v&oacute;c d&aacute;ng v&agrave; vẻ đẹp lịch thiệp chốn văn ph&ograve;ng của nam giới, mang đến phong c&aacute;ch thời trang s&agrave;nh điệu.</p>\r\n\r\n<ul>\r\n	<li>Kiểu &aacute;o sơ mi, cổ bẻ, kẻ caro phối m&agrave;u nổi bật với nhiều m&agrave;u sắc, đường may tinh tế, form &aacute;o đẹp t&ocirc;n vẻ lịch l&atilde;m v&agrave; sang trọng ở ph&aacute;i mạnh.</li>\r\n	<li>Chất liệu: Kate d&agrave;y dặn, thấm h&uacute;t mồ h&ocirc;i tốt, tạo cảm gi&aacute;c thoải m&aacute;i khi mặc.</li>\r\n</ul>\r\n', 113, '2016-07-15 00:15:28', '2016-07-15 00:15:28', 'Ao so mi dai tay'),
(41, 'Áo sơ mi nam hàn quốc cực đẹp', 'ao-so-mi-nam-han-quoc-cuc-dep', 250005, 260000, '29391326723333.jpg', 'Form áo đẹp, tôn vóc dáng và vẻ đẹp lịch thiệp chốn văn phòng của nam giới, mang đến phong cách thời trang sành điệu.', 5, 0, 0, 0, '<p>Form &aacute;o đẹp, t&ocirc;n v&oacute;c d&aacute;ng v&agrave; vẻ đẹp lịch thiệp chốn văn ph&ograve;ng của nam giới, mang đến phong c&aacute;ch thời trang s&agrave;nh điệu.</p>\r\n\r\n<ul>\r\n	<li>Kiểu &aacute;o sơ mi, cổ bẻ, kẻ caro phối m&agrave;u nổi bật với nhiều m&agrave;u sắc, đường may tinh tế, form &aacute;o đẹp t&ocirc;n vẻ lịch l&atilde;m v&agrave; sang trọng ở ph&aacute;i mạnh.</li>\r\n	<li>Chất liệu: Kate d&agrave;y dặn, thấm h&uacute;t mồ h&ocirc;i tốt, tạo cảm gi&aacute;c thoải m&aacute;i khi mặc.</li>\r\n</ul>\r\n', 113, '2016-07-15 00:15:28', '2016-07-15 00:15:28', 'Ao so mi dai tay'),
(42, ' Áo Khoác Cardigan Nam Viền Màu Cá Tính', 'ao-khoac-cardigan-nam-vien-mau-ca-tinh', 190000, 225000, '7112471616253.Jpg', 'Cardigan với thiết kế đơn giản, form áo đẹp, dễ dàng mix cùng các kiểu trang phục. Áo tạo điểm nhấn với phần tay viền màu phá cách.', 12, 0, 0, 0, '<p>Cardigan với thiết kế đơn giản, form &aacute;o đẹp, dễ d&agrave;ng mix c&ugrave;ng c&aacute;c kiểu trang phục. &Aacute;o tạo điểm nhấn với phần tay viền m&agrave;u ph&aacute; c&aacute;ch.</p>\r\n\r\n<ul>\r\n	<li>Thiết kế trẻ trung vừa giữ ấm v&agrave;o trời lạnh, vừa chống nắng, bụi khi đi đường.</li>\r\n	<li>M&agrave;u sắc trang nh&atilde; dễ mix với nhiều trang phục kh&aacute;c nhau, cho bạn phong c&aacute;ch năng động, c&aacute; t&iacute;nh.</li>\r\n	<li>Chất liệu thun g&acirc;n d&agrave;y dặn, tho&aacute;ng m&aacute;t, tạo cảm gi&aacute;c thoải m&aacute;i cho người mặc.</li>\r\n</ul>\r\n', 115, '2016-07-14 23:59:52', '2016-07-15 00:00:42', 'ao khoac cardigan'),
(43, 'Áo sơ mi Hàn Quốc', 'ao-so-mi-han-quoc', 150000, 150000, '229261485624470.jpg', 'Áo sơ mi Hàn Quốc', 4, 0, 0, 0, '<p>Form &aacute;o đẹp, t&ocirc;n v&oacute;c d&aacute;ng v&agrave; vẻ đẹp lịch thiệp chốn văn ph&ograve;ng của nam giới, mang đến phong c&aacute;ch thời trang s&agrave;nh điệu.</p>\r\n\r\n<ul>\r\n	<li>Kiểu &aacute;o sơ mi, cổ bẻ, kẻ caro phối m&agrave;u nổi bật với nhiều m&agrave;u sắc, đường may tinh tế, form &aacute;o đẹp t&ocirc;n vẻ lịch l&atilde;m v&agrave; sang trọng ở ph&aacute;i mạnh.</li>\r\n	<li>Chất liệu: Kate d&agrave;y dặn, thấm h&uacute;t mồ h&ocirc;i tốt, tạo cảm gi&aacute;c thoải m&aacute;i khi mặc.</li>\r\n</ul>\r\n', 110, '2016-07-15 00:19:17', '2016-07-15 00:19:17', 'ao so mi han quoc'),
(44, ' Áo Sơ Mi Nam Tay Ngắn Phối Nút Cá Tính', 'ao-so-mi-nam-tay-ngan-phoi-nut-ca-tinh', 190000, 200000, '24011605061397.Jpg', '\r\nÁo Sơ Mi Nam Tay Ngắn Phối Nút Cá Tính', 5, 0, 0, 0, '<p>Kiểu d&aacute;ng đơn giản, cổ bẻ cổ điển k&egrave;m tay ngắn thanh lịch cho trai vẻ ngo&agrave;i nam t&iacute;nh, lịch l&atilde;m.</p>\r\n\r\n<ul>\r\n	<li>&Aacute;o sơ mi nam với cổ bẻ cổ điển, tay ngắn&nbsp;phối n&uacute;t kiểu, form d&aacute;ng chuẩn t&ocirc;n vẻ nam t&iacute;nh, lịch l&atilde;m cho ph&aacute;i mạnh.</li>\r\n	<li>M&agrave;u sắc trang nh&atilde; c&ugrave;ng chất liệu vải c&oacute; độ tho&aacute;ng mang lại sự tự tin, hoạt b&aacute;t cho bạn trai.</li>\r\n	<li>Th&iacute;ch hợp mặc đi học, đi l&agrave;m,...</li>\r\n	<li>Chất liệu: kate</li>\r\n</ul>\r\n', 114, '2016-07-15 00:21:22', '2016-07-15 00:21:22', 'so mi ngan tay phoi nut');

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
) ENGINE=InnoDB AUTO_INCREMENT=84 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `product_sizes`
--

INSERT INTO `product_sizes` (`id`, `product_id`, `size_id`, `created_at`, `updated_at`) VALUES
(44, 28, 1, '2016-07-14 23:37:11', '2016-07-14 23:37:11'),
(45, 28, 2, '2016-07-14 23:37:11', '2016-07-14 23:37:11'),
(46, 28, 3, '2016-07-14 23:37:11', '2016-07-14 23:37:11'),
(47, 29, 3, '2016-07-14 23:39:55', '2016-07-14 23:39:55'),
(54, 35, 2, '2016-07-14 23:54:29', '2016-07-14 23:54:29'),
(59, 36, 2, '2016-07-15 00:00:09', '2016-07-15 00:00:09'),
(60, 36, 3, '2016-07-15 00:00:09', '2016-07-15 00:00:09'),
(61, 31, 1, '2016-07-15 00:00:30', '2016-07-15 00:00:30'),
(62, 31, 2, '2016-07-15 00:00:30', '2016-07-15 00:00:30'),
(63, 31, 3, '2016-07-15 00:00:30', '2016-07-15 00:00:30'),
(64, 37, 1, '2016-07-15 00:00:42', '2016-07-15 00:00:42'),
(65, 37, 2, '2016-07-15 00:00:42', '2016-07-15 00:00:42'),
(66, 37, 3, '2016-07-15 00:00:42', '2016-07-15 00:00:42'),
(67, 37, 4, '2016-07-15 00:00:42', '2016-07-15 00:00:42'),
(68, 38, 2, '2016-07-15 00:04:24', '2016-07-15 00:04:24'),
(69, 38, 3, '2016-07-15 00:04:24', '2016-07-15 00:04:24'),
(70, 38, 4, '2016-07-15 00:04:24', '2016-07-15 00:04:24'),
(71, 34, 2, '2016-07-15 00:04:36', '2016-07-15 00:04:36'),
(72, 34, 3, '2016-07-15 00:04:36', '2016-07-15 00:04:36'),
(73, 39, 2, '2016-07-15 00:07:59', '2016-07-15 00:07:59'),
(74, 39, 3, '2016-07-15 00:07:59', '2016-07-15 00:07:59'),
(75, 39, 4, '2016-07-15 00:07:59', '2016-07-15 00:07:59'),
(76, 40, 2, '2016-07-15 00:15:29', '2016-07-15 00:15:29'),
(77, 40, 3, '2016-07-15 00:15:29', '2016-07-15 00:15:29'),
(78, 43, 2, '2016-07-15 00:19:17', '2016-07-15 00:19:17'),
(79, 43, 3, '2016-07-15 00:19:18', '2016-07-15 00:19:18'),
(80, 43, 4, '2016-07-15 00:19:18', '2016-07-15 00:19:18'),
(81, 44, 2, '2016-07-15 00:21:22', '2016-07-15 00:21:22'),
(82, 44, 3, '2016-07-15 00:21:22', '2016-07-15 00:21:22'),
(83, 44, 4, '2016-07-15 00:21:22', '2016-07-15 00:21:22');

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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `address`, `role`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Tu', 'Phuong Danh', 'tuphuongdanh1996@gmail.com', '63 Mai Lao Bang', 3, 'danhchutich23', 'jshdkfhskdhfjsjfn78576469865858', '2016-06-01 17:00:00', '2016-06-23 17:00:00'),
(2, '', '', 'danhchutich@gmail.com', '', 0, '', NULL, '2016-07-18 20:24:06', '2016-07-18 20:24:06');

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
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=116;
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
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=70;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=45;
--
-- AUTO_INCREMENT for table `product_sizes`
--
ALTER TABLE `product_sizes`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=84;
--
-- AUTO_INCREMENT for table `sizes`
--
ALTER TABLE `sizes`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
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
