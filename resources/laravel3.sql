-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 12, 2024 at 01:10 PM
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
-- Database: `laravel3`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `password` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `username`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'daffarizqy', 'daffa1@gmail.com', '$2y$10$uxlTK/M0wzPfk3BtYqz1lO8Rzevh/sJTvPVN2wS5M699PIbTVCTB6', '2024-05-06 04:57:10', '2024-05-06 04:57:10'),
(2, 'daffarizqy', 'daffa2@gmail.com', '$2y$10$sOPcRmi0rEFnMzq1Yi23F.ylmcnZ4Obr8hOI0PYGajuF7omQtOk52', '2024-05-08 23:39:20', '2024-05-08 23:39:20'),
(3, 'daffarizqy', 'daffa4@gmail.com', '$2y$10$OHL44YXhJ.WHJzaOPFm6NeQZhctIRJno4v0wVcSajj1IG0VdsUAre', '2024-05-08 23:40:04', '2024-05-08 23:40:04');

-- --------------------------------------------------------

--
-- Table structure for table `biayas`
--

CREATE TABLE `biayas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_product` varchar(191) NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `type` enum('income','expense') NOT NULL,
  `description` varchar(191) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `biayas`
--

INSERT INTO `biayas` (`id`, `name_product`, `amount`, `type`, `description`, `start_date`, `end_date`, `created_at`, `updated_at`) VALUES
(1, 'Nastar', 90000.00, 'income', 'enak', '2024-05-06', '2024-05-06', '2024-05-06 04:58:42', '2024-05-06 04:58:42');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_kategori` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `nama_kategori`, `created_at`, `updated_at`) VALUES
(1, 'kue kering', '2024-05-06 06:48:44', '2024-05-06 06:48:44'),
(2, 'Kue Basah', '2024-05-06 06:49:44', '2024-05-06 06:49:44');

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
-- Table structure for table `keranjang`
--

CREATE TABLE `keranjang` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `quantity` int(11) NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `keranjang`
--

INSERT INTO `keranjang` (`id`, `quantity`, `product_id`, `user_id`, `created_at`, `updated_at`) VALUES
(36, 1, 1, 1, '2024-05-12 00:36:58', '2024-05-12 00:36:58'),
(37, 1, 1, 1, '2024-05-12 00:37:01', '2024-05-12 00:37:01'),
(38, 1, 1, 1, '2024-05-12 00:37:01', '2024-05-12 00:37:01'),
(39, 1, 1, 1, '2024-05-12 00:37:02', '2024-05-12 00:37:02'),
(40, 1, 1, 1, '2024-05-12 00:37:02', '2024-05-12 00:37:02'),
(41, 1, 1, 1, '2024-05-12 00:37:02', '2024-05-12 00:37:02'),
(42, 1, 1, 1, '2024-05-12 00:37:03', '2024-05-12 00:37:03'),
(43, 1, 1, 1, '2024-05-12 00:37:31', '2024-05-12 00:37:31'),
(44, 1, 1, 1, '2024-05-12 00:38:46', '2024-05-12 00:38:46'),
(45, 1, 1, 1, '2024-05-12 00:40:59', '2024-05-12 00:40:59'),
(46, 1, 1, 1, '2024-05-12 00:43:05', '2024-05-12 00:43:05'),
(47, 1, 2, 1, '2024-05-12 00:43:34', '2024-05-12 00:43:34'),
(48, 1, 1, 1, '2024-05-12 00:43:48', '2024-05-12 00:43:48'),
(49, 1, 4, 1, '2024-05-12 02:18:07', '2024-05-12 02:18:07'),
(50, 5, 1, 1, '2024-05-12 02:18:35', '2024-05-12 02:18:35'),
(51, 5, 1, 1, '2024-05-12 02:18:36', '2024-05-12 02:18:36');

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
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_04_27_075013_create_products_table', 1),
(6, '2024_04_27_075020_create_categories_table', 1),
(7, '2024_04_27_080043_create_biayas_table', 1),
(8, '2024_05_06_113250_keranjang', 1),
(9, '2024_05_06_113905_order', 1),
(10, '2024_05_06_115636_admins', 2),
(11, '2024_05_07_021412_keranjang', 3);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_date` date NOT NULL,
  `total_price` decimal(10,2) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(191) NOT NULL,
  `token` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `name_product` varchar(191) NOT NULL,
  `gambar` varchar(191) DEFAULT NULL,
  `price` decimal(10,2) NOT NULL,
  `description` text DEFAULT NULL,
  `image` varchar(191) DEFAULT NULL,
  `stock` int(11) NOT NULL,
  `date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name_product`, `gambar`, `price`, `description`, `image`, `stock`, `date`, `created_at`, `updated_at`) VALUES
(1, 'Nastar', NULL, 90000.00, 'Nastar adalah kue khas Indonesia yang terkenal akan rasa manisnya yang lezat dan teksturnya yang renyah. Kue nastar biasanya terdiri dari dua bagian utama, yaitu bagian luar yang berupa kue kering berwarna kuning keemasan dan bagian dalam yang diisi dengan selai nanas atau selai jeruk. Kue ini sering disajikan pada berbagai acara, seperti perayaan hari raya, pernikahan, atau sebagai camilan di waktu senggang.\r\n\r\nKeunikan nastar terletak pada proses pembuatannya yang melibatkan perpaduan antara adonan kue yang renyah dan manis dengan rasa segar dan asam dari selai nanas atau selai jeruk. Proses pembuatannya juga membutuhkan keterampilan khusus dalam membentuk dan mengisi kue agar menghasilkan kue nastar yang sempurna.\r\n\r\nKue nastar juga memiliki sejarah yang kaya dan menjadi bagian penting dari budaya kuliner Indonesia. Kata kunci yang terkait dengan nastar antara lain adalah: kue kering, kue tradisional, selai nanas, camilan, renyah, manis, rasa segar, tekstur, dan perayaan.\r\n\r\n#kue nastar\r\n#cookies nastar\r\n#nastar enak di jakarta\r\n#nastar harga\r\n#nastar homemade\r\n#harga nastar\r\n#nastar indonesia\r\n#jual nastar terdekat\r\n#jual nastar', '1715002762.jpg', 20, '2024-04-20', '2024-05-06 06:05:45', '2024-05-12 03:19:34'),
(2, 'Palm Cheese', NULL, 40000.00, '\"Palm Cheese\" adalah produk kue keju yang lezat dan menggugah selera yang diproduksi dengan hati-hati menggunakan bahan-bahan berkualitas tinggi dan resep yang disempurnakan. Kue keju ini memiliki rasa yang khas dan tekstur yang lembut, menjadikannya pilihan yang sempurna untuk memuaskan keinginan akan rasa manis dan gurih.\r\n\r\nDiperkaya dengan keju pilihan yang melimpah, \"Palm Cheese\" memberikan cita rasa yang kaya dan lembut di setiap gigitannya. Kombinasi sempurna antara rasa keju yang melimpah dan rasa manis yang lembut membuatnya menjadi favorit bagi pecinta kue di seluruh kalangan.\r\n\r\nSetiap gigitan \"Palm Cheese\" membawa Anda pada perjalanan rasa yang memikat, dari manisnya gula hingga rasa gurih dan kaya dari keju yang meleleh di mulut Anda. Tidak hanya lezat untuk dinikmati sendiri, tetapi kue ini juga sempurna untuk berbagi dengan keluarga dan teman-teman di setiap kesempatan istimewa.\r\n\r\nNikmati kelezatan \"Palm Cheese\" yang sempurna untuk menemani secangkir kopi di pagi hari atau sebagai camilan yang memuaskan kapan pun Anda inginkan. Jangan lewatkan kesempatan untuk merasakan kenikmatan unik dari kue keju yang istimewa ini. Segera nikmati \"Palm Cheese\" dan temukan kenikmatannya sendiri!', '1715001144.jpg', 20, '2024-04-20', '2024-05-06 06:12:24', '2024-05-11 02:02:39'),
(3, 'Palm Almond', NULL, 50000.00, 'Hadiri setiap acara dengan sentuhan elegan dari Kue Kering Palm Almond kami. Dibuat dengan teliti menggunakan bahan-bahan pilihan, setiap gigitan adalah perpaduan sempurna antara rasa lezat dan tekstur yang renyah, menghadirkan pengalaman yang tak terlupakan bagi lidah Anda.\r\n\r\nSentuhan Kaya Rasa dalam Setiap Gigitan\r\n\r\nKue Kering Palm Almond kami adalah perpaduan ajaib antara kekayaan rasa palm sugar dan aroma gurih almond yang memukau. Dibentuk dengan hati-hati dan dipanggang dengan sempurna, setiap kue menawarkan kesempurnaan rasa yang mengejutkan dan memuaskan.', '1715003287.jpg', 20, '2024-05-06', '2024-05-06 06:48:07', '2024-05-12 03:14:41'),
(4, 'Brownies', NULL, 90000.00, 'Dalam setiap gigitan, hadirnya kelezatan yang tak tertandingi. Kami dengan bangga mempersembahkan Brownies Premium kami, penciptaan terbaik dari cokelat pilihan dan rahasia resep turun-temurun kami. Dibuat dengan teliti, setiap potongan menjanjikan pengalaman yang memanjakan lidah dan merangsang indera.\r\n\r\nKualitas Terbaik dari Bahan Pilihan\r\n\r\nKami berkomitmen pada kualitas terbaik, hanya menggunakan bahan-bahan berkualitas tinggi. Cokelat pilihan kami dipilih secara selektif untuk memberikan aroma yang kaya dan rasa yang mendalam. Kombinasi sempurna antara cokelat hitam yang kuat dan manisnya cokelat susu menciptakan harmoni cita rasa yang tak terlupakan.\r\n\r\nTekstur yang Menggoda\r\n\r\nTekstur brownies kami adalah kunci utama dari pengalaman tak tertandingi. Dengan lapisan luar yang renyah dan tengah yang lembut, setiap gigitan memberikan sensasi yang memuaskan. Kami memahami bahwa kelezatan sejati terletak pada perpaduan antara rasa dan tekstur yang sempurna.', '1715003460.jpg', 10, '2024-05-06', '2024-05-06 06:51:00', '2024-05-12 01:07:25'),
(5, 'Bolen', NULL, 60000.00, 'Dengan keharuman lembut pisang segar yang melonjak dari setiap putaran pastri yang lembut dan renyah, Bolen Pisang Premium kami adalah simbol autentik dari kelezatan tropis. Dibuat dengan teliti menggunakan pisang pilihan dan bahan-bahan berkualitas tinggi, setiap gigitan membawa Anda ke surga rasa yang tak terlupakan.\r\n\r\nSiap untuk disajikan sebagai camilan istimewa di tengah hari yang sibuk, sebagai teman setia di acara santai bersama keluarga, atau sebagai hadiah istimewa bagi mereka yang Anda sayangi, Bolen Pisang Premium kami adalah pilihan sempurna untuk memuaskan selera Anda yang menginginkan kelezatan tropis yang autentik. Rasakan kelembutan, nikmati kelezatan.', '1715003494.jpg', 20, '2024-05-06', '2024-05-06 06:51:35', '2024-05-12 01:04:26'),
(6, 'Bluder', NULL, 80000.00, 'Bawa pengalaman roti yang tak tertandingi ke dalam hidangan Anda dengan Roti Bluder kami. Dipanggang dengan hati-hati untuk mencapai keseimbangan sempurna antara kerenyahan luar dan kelembutan dalam, setiap gigitan Roti Bluder adalah perpaduan yang menggugah selera dan memuaskan hasrat akan rasa yang autentik\r\n\r\nKelezatan yang Tak Tertandingi dalam Setiap Gigitan\r\n\r\nRasakan kelezatan yang tak tertandingi dengan setiap gigitan Roti Bluder. Dengan rasa manis yang merayu, diselingi dengan sentuhan gurih yang memikat, Roti Bluder kami menghadirkan pengalaman rasa yang memanjakan lidah dan meninggalkan kenangan yang tak terlupakan.', '1715003551.jpg', 20, '2024-05-06', '2024-05-06 06:52:31', '2024-05-12 02:02:18');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `password` varchar(191) NOT NULL,
  `phone` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `phone`, `created_at`, `updated_at`) VALUES
(1, 'daffarizqy13', 'daffa3@gmail.com', '$2y$10$dVPkKHFHVmrblb7KbeftBOMNS2fWvGfMfWBri4ATANxhdgLqh5.7W', '0895372400000', '2024-05-06 08:04:39', '2024-05-08 22:22:09'),
(2, 'daffarizqy', 'daffa@gmail.com', '$2y$10$4WtHEnL.o9FEiAB71PRR7eCeeqw4VLT0871b49yDRZl0QJilgHipe', '086368618669', '2024-05-11 21:14:07', '2024-05-11 21:14:07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `biayas`
--
ALTER TABLE `biayas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `keranjang`
--
ALTER TABLE `keranjang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `keranjang_product_id_foreign` (`product_id`),
  ADD KEY `keranjang_user_id_foreign` (`user_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_user_id_foreign` (`user_id`);

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
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `biayas`
--
ALTER TABLE `biayas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `keranjang`
--
ALTER TABLE `keranjang`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `keranjang`
--
ALTER TABLE `keranjang`
  ADD CONSTRAINT `keranjang_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `keranjang_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
