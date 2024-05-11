-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 12, 2024 at 01:33 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommercecodeign`
--

-- --------------------------------------------------------

--
-- Table structure for table `ec_banner`
--

CREATE TABLE `ec_banner` (
  `id` int(11) NOT NULL,
  `banner_id` int(10) DEFAULT NULL,
  `banner_image` varchar(200) DEFAULT NULL,
  `status` int(5) DEFAULT NULL,
  `added_on` varchar(30) DEFAULT NULL,
  `updated_on` varchar(30) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ec_banner`
--

INSERT INTO `ec_banner` (`id`, `banner_id`, `banner_image`, `status`, `added_on`, `updated_on`, `created_at`, `updated_at`) VALUES
(1, 1740, 'slider-img-1.png', 1, '2024-05-08', NULL, '2024-05-08 16:30:03', '2024-05-08 16:30:03'),
(2, 1343, 'slider-img-2.png', 1, '2024-05-08', NULL, '2024-05-08 16:30:09', '2024-05-08 16:30:09');

-- --------------------------------------------------------

--
-- Table structure for table `ec_cart`
--

CREATE TABLE `ec_cart` (
  `id` int(11) NOT NULL,
  `cart_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `pro_id` int(11) DEFAULT NULL,
  `pro_qty` int(11) DEFAULT NULL,
  `pro_name` varchar(255) DEFAULT NULL,
  `pro_price` float DEFAULT NULL,
  `slug` varchar(200) DEFAULT NULL,
  `pro_image` varchar(255) DEFAULT NULL,
  `added_on` varchar(30) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ec_cart`
--

INSERT INTO `ec_cart` (`id`, `cart_id`, `user_id`, `pro_id`, `pro_qty`, `pro_name`, `pro_price`, `slug`, `pro_image`, `added_on`, `created_at`, `updated_at`) VALUES
(13, 9555, 3756, 9368, 1, 'asd', 12, 'asd', 'product-1.jpg', '2024-05-10', '2024-05-10 20:28:43', '2024-05-10 20:28:43'),
(17, 2580, 9764, 2206, 1, 'Ear Bud', 123, 'ear-bud', 'product-11.jpg', '2024-05-11', '2024-05-11 17:59:28', '2024-05-11 17:59:28'),
(18, 1351, 9764, 9368, 1, 'asd', 12, 'asd', 'product-1.jpg', '2024-05-11', '2024-05-11 20:18:05', '2024-05-11 20:18:05'),
(19, 9110, 6371, 6754, 7, 'asdtest', 11, 'asdtest', 'product-16.jpg', '2024-05-12', '2024-05-11 22:21:26', '2024-05-11 23:28:55'),
(20, 8319, 6371, 2206, 7, 'Ear Bud', 122, 'ear-bud', 'product-11.jpg', '2024-05-12', '2024-05-11 22:21:47', '2024-05-11 23:29:05');

-- --------------------------------------------------------

--
-- Table structure for table `ec_category`
--

CREATE TABLE `ec_category` (
  `id` int(11) NOT NULL,
  `cate_id` int(10) DEFAULT NULL,
  `cate_name` varchar(50) DEFAULT NULL,
  `cat_image` text DEFAULT NULL,
  `parent_id` varchar(10) DEFAULT NULL,
  `status` int(5) DEFAULT NULL,
  `added_on` varchar(30) DEFAULT NULL,
  `updated_on` varchar(30) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ec_category`
--

INSERT INTO `ec_category` (`id`, `cate_id`, `cate_name`, `cat_image`, `parent_id`, `status`, `added_on`, `updated_on`, `created_at`, `updated_at`) VALUES
(11, 5455, 'Headphone', 'product-cat-1.png', '', 1, '08 May, 2024', NULL, '2024-05-08 17:11:29', '2024-05-08 17:11:29'),
(12, 3893, 'mobiles', 'product-cat-2.png', '', 1, '08 May, 2024', NULL, '2024-05-08 17:11:43', '2024-05-08 17:11:43'),
(13, 9759, 'speaker', 'product-cat-3.png', '', 1, '08 May, 2024', NULL, '2024-05-08 17:11:59', '2024-05-08 17:11:59');

-- --------------------------------------------------------

--
-- Table structure for table `ec_customer`
--

CREATE TABLE `ec_customer` (
  `id` int(11) NOT NULL,
  `user_id` int(10) DEFAULT NULL,
  `phone` varchar(40) DEFAULT NULL,
  `country` varchar(30) DEFAULT NULL,
  `state` varchar(30) DEFAULT NULL,
  `city` varchar(30) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `pincode` int(10) DEFAULT NULL,
  `added_on` varchar(30) DEFAULT NULL,
  `updated_on` varchar(30) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ec_pincode`
--

CREATE TABLE `ec_pincode` (
  `id` int(11) NOT NULL,
  `pincode` varchar(20) DEFAULT NULL,
  `delivery_charge` varchar(20) DEFAULT NULL,
  `status` int(5) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ec_pincode`
--

INSERT INTO `ec_pincode` (`id`, `pincode`, `delivery_charge`, `status`, `created_at`, `updated_at`) VALUES
(1, '123', '123', 1, '2024-05-07 21:12:43', '2024-05-07 21:12:43');

-- --------------------------------------------------------

--
-- Table structure for table `ec_product`
--

CREATE TABLE `ec_product` (
  `id` int(11) NOT NULL,
  `prod_id` int(11) DEFAULT NULL,
  `category` int(11) DEFAULT NULL,
  `sub_category` int(11) DEFAULT NULL,
  `status` int(11) NOT NULL,
  `pro_name` text DEFAULT NULL,
  `brand` varchar(50) DEFAULT NULL,
  `featured` text DEFAULT NULL,
  `description` longblob DEFAULT NULL,
  `meta_title` text DEFAULT NULL,
  `meta_keywords` text DEFAULT NULL,
  `meta_desc` text DEFAULT NULL,
  `highlights` text NOT NULL,
  `pro_main_image` varchar(255) DEFAULT NULL,
  `gallery_image` varchar(255) DEFAULT NULL,
  `sold` int(5) DEFAULT NULL,
  `slug` text DEFAULT NULL,
  `ip` varchar(50) DEFAULT NULL,
  `added_on` varchar(30) DEFAULT NULL,
  `updated_on` varchar(30) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `stock` int(5) DEFAULT NULL,
  `mrp` float NOT NULL,
  `selling_price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ec_product`
--

INSERT INTO `ec_product` (`id`, `prod_id`, `category`, `sub_category`, `status`, `pro_name`, `brand`, `featured`, `description`, `meta_title`, `meta_keywords`, `meta_desc`, `highlights`, `pro_main_image`, `gallery_image`, `sold`, `slug`, `ip`, `added_on`, `updated_on`, `created_at`, `updated_at`, `stock`, `mrp`, `selling_price`) VALUES
(5, 9368, 5455, NULL, 1, 'asd', 'asd', '1', 0x6173646164, '12', '112', '12', 'asdad', 'product-1.jpg', NULL, NULL, 'asd', NULL, '08 May, 2024', NULL, NULL, NULL, 12, 12, 12),
(6, 2206, 5455, NULL, 1, 'Ear Bud', 'asd', '1', 0x656172627564656172627564656172627564656172627564656172627564656172627564656172627564656172627564656172627564656172627564656172627564656172627564656172627564656172627564656172627564656172627564656172627564656172627564656172627564656172627564656172627564656172627564656172627564656172627564656172627564656172627564656172627564656172627564656172627564656172627564656172627564656172627564656172627564656172627564656172627564656172627564656172627564656172627564656172627564656172627564656172627564656172627564656172627564656172627564656172627564656172627564656172627564656172627564656172627564656172627564656172627564656172627564656172627564656172627564656172627564656172627564656172627564656172627564656172627564656172627564656172627564656172627564656172627564656172627564656172627564656172627564656172627564656172627564656172627564656172627564656172627564656172627564656172627564656172627564656172627564656172627564656172627564656172627564656172627564656172627564656172627564656172627564656172627564656172627564656172627564656172627564656172627564656172627564656172627564656172627564656172627564656172627564656172627564656172627564656172627564656172627564656172627564, '123', '123', '123', 'earbudearbudearbudearbudearbudearbudearbudearbudearbudearbudearbudearbudearbudearbudearbudearbudearbudearbudearbudearbudearbudearbudearbudearbudearbudearbudearbudearbudearbudearbudearbudearbudearbudearbudearbudearbudearbudearbudearbudearbudearbudearbudearbudearbudearbudearbudearbudearbud', 'product-11.jpg', NULL, NULL, 'ear-bud', NULL, '08 May, 2024', NULL, NULL, NULL, 12, 123, 122),
(7, 6754, 5455, NULL, 1, 'asdtest', 'asdtest', '1', 0x61736474657374206173647465737420617364746573746173647465737420617364746573742061736474657374206173647465737420617364746573742061736474657374206173647465737420617364746573742061736474657374206173647465737420617364746573742061736474657374206173647465737420617364746573742061736474657374206173647465737420617364746573742061736474657374617364746573746173647465737461736474657374617364746573742061736474657374206173647465737420617364746573742061736474657374206173647465737420617364746573742061736474657374206173647465737420617364746573742061736474657374, '12', '12', '12', 'asdtest asdtest asdtestasdtest asdtest asdtest asdtest asdtest asdtest asdtest asdtest asdtest asdtest asdtest asdtest asdtest asdtest asdtest asdtest asdtest asdtestasdtestasdtestasdtestasdtest asdtest asdtest asdtest asdtest asdtest asdtest asdtest asdtest asdtest asdtest', 'product-16.jpg', NULL, NULL, 'asdtest', NULL, '08 May, 2024', NULL, NULL, NULL, 12, 12, 11);

-- --------------------------------------------------------

--
-- Table structure for table `ec_users`
--

CREATE TABLE `ec_users` (
  `id` int(11) NOT NULL,
  `user_id` int(10) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` int(100) DEFAULT NULL,
  `status` varchar(5) DEFAULT NULL,
  `ip` varchar(50) DEFAULT NULL,
  `added_on` varchar(30) DEFAULT NULL,
  `updated_on` varchar(30) DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ec_banner`
--
ALTER TABLE `ec_banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ec_cart`
--
ALTER TABLE `ec_cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ec_category`
--
ALTER TABLE `ec_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ec_customer`
--
ALTER TABLE `ec_customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ec_pincode`
--
ALTER TABLE `ec_pincode`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ec_product`
--
ALTER TABLE `ec_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ec_users`
--
ALTER TABLE `ec_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ec_banner`
--
ALTER TABLE `ec_banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ec_cart`
--
ALTER TABLE `ec_cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `ec_category`
--
ALTER TABLE `ec_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `ec_customer`
--
ALTER TABLE `ec_customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ec_pincode`
--
ALTER TABLE `ec_pincode`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ec_product`
--
ALTER TABLE `ec_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `ec_users`
--
ALTER TABLE `ec_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
