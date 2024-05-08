-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2024 at 02:07 AM
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
(1, 7146, NULL, 0, '2024-05-07', NULL, '2024-05-07 21:39:59', '2024-05-07 21:39:59'),
(2, 6417, NULL, 0, '2024-05-07', NULL, '2024-05-07 21:40:21', '2024-05-07 21:40:21'),
(3, 2103, NULL, 1, '2024-05-07', NULL, '2024-05-07 21:41:26', '2024-05-07 21:41:26'),
(4, 7451, 'doctors1.jpg', 1, '2024-05-07', NULL, '2024-05-07 21:49:16', '2024-05-07 21:49:16');

-- --------------------------------------------------------

--
-- Table structure for table `ec_category`
--

CREATE TABLE `ec_category` (
  `id` int(11) NOT NULL,
  `cate_id` int(10) DEFAULT NULL,
  `cate_name` varchar(50) DEFAULT NULL,
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

INSERT INTO `ec_category` (`id`, `cate_id`, `cate_name`, `parent_id`, `status`, `added_on`, `updated_on`, `created_at`, `updated_at`) VALUES
(9, 7703, 'DeskTop', '', 1, '07 May, 2024', NULL, '2024-05-07 20:13:26', '2024-05-07 20:13:26'),
(10, 5725, 'keyboard', '7703', 1, '07 May, 2024', NULL, '2024-05-07 20:15:09', '2024-05-07 20:15:09');

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
(1, 6682, 7703, 5725, 1, 'asd', 'asd', '1', 0x617364, '12', '12', '12', 'asd', 'van3.png', NULL, NULL, NULL, NULL, '08 May, 2024', NULL, NULL, NULL, 12, 12, 12),
(2, 6682, 7703, 5725, 1, 'asd', 'asd', '1', 0x617364, '12', '12', '12', 'asd', 'van4.png', NULL, NULL, 'asd', NULL, '08 May, 2024', NULL, NULL, NULL, 12, 12, 12),
(3, 6682, 7703, 5725, 1, 'asd', 'asd', '1', 0x617364, '12', '12', '12', 'asd', 'van5.png', NULL, NULL, 'asd', NULL, '08 May, 2024', NULL, NULL, NULL, 12, 12, 12),
(4, 6682, 7703, 5725, 1, 'asd', 'asd', '1', 0x617364, '12', '12', '12', 'asd', 'van6.png', NULL, NULL, 'asd', NULL, '08 May, 2024', NULL, NULL, NULL, 12, 12, 12);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `ec_category`
--
ALTER TABLE `ec_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `ec_users`
--
ALTER TABLE `ec_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
