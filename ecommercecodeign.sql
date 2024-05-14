-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 13, 2024 at 06:09 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
  `status` int(11) NOT NULL DEFAULT 1,
  `pro_image` varchar(255) DEFAULT NULL,
  `added_on` varchar(30) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ec_cart`
--

INSERT INTO `ec_cart` (`id`, `cart_id`, `user_id`, `pro_id`, `pro_qty`, `pro_name`, `pro_price`, `slug`, `status`, `pro_image`, `added_on`, `created_at`, `updated_at`) VALUES
(37, 5814, 6020, 6754, 1, 'asdtest', 11, 'asdtest', 2, 'product-16.jpg', '2024-05-13', '2024-05-13 02:26:02', '2024-05-13 03:36:27'),
(38, 9301, 6020, 2206, 1, 'Ear Bud', 122, 'ear-bud', 2, 'product-11.jpg', '2024-05-13', '2024-05-13 02:26:03', '2024-05-13 03:36:27'),
(39, 8069, 6020, 9368, 1, 'asd', 12, 'asd', 2, 'product-1.jpg', '2024-05-13', '2024-05-13 02:26:04', '2024-05-13 03:36:27');

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
  `slug` text NOT NULL,
  `status` int(5) DEFAULT NULL,
  `added_on` varchar(30) DEFAULT NULL,
  `updated_on` varchar(30) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ec_category`
--

INSERT INTO `ec_category` (`id`, `cate_id`, `cate_name`, `cat_image`, `parent_id`, `slug`, `status`, `added_on`, `updated_on`, `created_at`, `updated_at`) VALUES
(11, 5455, 'Headphone', 'product-cat-1.png', '', 'headphones', 1, '08 May, 2024', NULL, '2024-05-08 17:11:29', '2024-05-12 23:35:59'),
(12, 3893, 'mobiles', 'product-cat-2.png', '', 'mobiles', 1, '08 May, 2024', NULL, '2024-05-08 17:11:43', '2024-05-12 23:35:49'),
(13, 9759, 'speaker', 'product-cat-3.png', '3893', 'speaker', 1, '08 May, 2024', NULL, '2024-05-08 17:11:59', '2024-05-12 23:27:17'),
(14, 7624, 'pouch 3@', 'product-11.jpg', '', 'pouch-3', 1, '13 May, 2024', NULL, '2024-05-12 23:18:28', '2024-05-12 23:18:28');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ec_order`
--

CREATE TABLE `ec_order` (
  `id` int(11) NOT NULL,
  `order_id` varchar(50) DEFAULT NULL,
  `payment_id` varchar(50) DEFAULT NULL,
  `pro_id` int(10) DEFAULT NULL,
  `user_id` int(10) DEFAULT NULL,
  `pro_image` varchar(200) DEFAULT NULL,
  `pro_name` text DEFAULT NULL,
  `pro_qty` int(15) DEFAULT NULL,
  `slug` text DEFAULT NULL,
  `delivery_charge` int(15) DEFAULT NULL,
  `total` varchar(15) DEFAULT NULL,
  `cart_detail` text NOT NULL,
  `pay_mode` text DEFAULT NULL,
  `cust_name` varchar(200) DEFAULT NULL,
  `cust_email` varchar(50) DEFAULT NULL,
  `cust_mobile` varchar(20) DEFAULT NULL,
  `pincode` varchar(10) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `address2` text DEFAULT NULL,
  `state` varchar(20) DEFAULT NULL,
  `city` varchar(20) DEFAULT NULL,
  `country` varchar(100) NOT NULL,
  `zip` varchar(20) DEFAULT NULL,
  `added_on` varchar(30) DEFAULT NULL,
  `delivery_date` varchar(30) DEFAULT NULL,
  `order_date` varchar(30) DEFAULT NULL,
  `order_status` varchar(30) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL,
  `ip` varchar(50) DEFAULT NULL,
  `updated_on` varchar(30) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ec_order`
--

INSERT INTO `ec_order` (`id`, `order_id`, `payment_id`, `pro_id`, `user_id`, `pro_image`, `pro_name`, `pro_qty`, `slug`, `delivery_charge`, `total`, `cart_detail`, `pay_mode`, `cust_name`, `cust_email`, `cust_mobile`, `pincode`, `address`, `address2`, `state`, `city`, `country`, `zip`, `added_on`, `delivery_date`, `order_date`, `order_status`, `status`, `ip`, `updated_on`, `created_at`, `updated_at`) VALUES
(1, NULL, NULL, NULL, 6020, NULL, NULL, 3, NULL, 50, '195', '', NULL, 'Stella Gamble', 'dybajiwy@mailinator.com', '+1 (382) 222-5813', NULL, 'Hic nesciunt reicie', NULL, NULL, 'Minus et sunt molest', 'New York US', '18624', '2024-05-13', '2024-06-02', '2024-05-13', 'pending', '1', '::1', NULL, '2024-05-13 03:09:42', '2024-05-13 03:09:42'),
(2, NULL, NULL, NULL, 6020, NULL, NULL, 3, NULL, 50, '195', '', 'cod', 'Stella Gamble', 'dybajiwy@mailinator.com', '+1 (382) 222-5813', NULL, 'Hic nesciunt reicie', NULL, NULL, 'Minus et sunt molest', 'New York US', '18624', '2024-05-13', '2024-06-02', '2024-05-13', 'pending', '1', '::1', NULL, '2024-05-13 03:10:51', '2024-05-13 03:10:51'),
(3, '8603', NULL, NULL, 6020, NULL, NULL, 3, NULL, 50, '195', '', 'cod', 'Stella Gamble', 'dybajiwy@mailinator.com', '+1 (382) 222-5813', NULL, 'Hic nesciunt reicie', NULL, NULL, 'Minus et sunt molest', 'New York US', '18624', '2024-05-13', '2024-06-02', '2024-05-13', 'pending', '1', '::1', NULL, '2024-05-13 03:11:46', '2024-05-13 03:11:46'),
(4, '3029', NULL, NULL, 6020, NULL, NULL, 3, NULL, 50, '195', '', 'cod', 'Stella Gamble', 'dybajiwy@mailinator.com', '+1 (382) 222-5813', NULL, 'Hic nesciunt reicie', 'Hic nesciunt reicie', NULL, 'Minus et sunt molest', 'New York US', '18624', '2024-05-13', '2024-06-02', '2024-05-13', 'pending', '1', '::1', NULL, '2024-05-13 03:12:47', '2024-05-13 03:12:47'),
(5, '6844', NULL, NULL, 6020, NULL, NULL, 3, NULL, 50, '195', '', 'cod', 'Stella Gamble', 'dybajiwy@mailinator.com', '+1 (382) 222-5813', NULL, 'Hic nesciunt reicie', 'Hic nesciunt reicie', 'New York US', 'Minus et sunt molest', 'Quis anim aliquam qu', '18624', '2024-05-13', '2024-06-02', '2024-05-13', 'pending', '1', '::1', NULL, '2024-05-13 03:14:10', '2024-05-13 03:14:10'),
(6, '6407', NULL, NULL, 6020, NULL, NULL, 3, NULL, 50, '195', '[{\"id\":\"37\",\"cart_id\":\"5814\",\"user_id\":\"6020\",\"pro_id\":\"6754\",\"pro_qty\":\"1\",\"pro_name\":\"asdtest\",\"pro_price\":\"11\",\"slug\":\"asdtest\",\"pro_image\":\"product-16.jpg\",\"added_on\":\"2024-05-13\",\"created_at\":\"2024-05-12 19:26:02\",\"updated_at\":\"2024-05-12 19:26:02\"},{\"id\":\"38\",\"cart_id\":\"9301\",\"user_id\":\"6020\",\"pro_id\":\"2206\",\"pro_qty\":\"1\",\"pro_name\":\"Ear Bud\",\"pro_price\":\"122\",\"slug\":\"ear-bud\",\"pro_image\":\"product-11.jpg\",\"added_on\":\"2024-05-13\",\"created_at\":\"2024-05-12 19:26:03\",\"updated_at\":\"2024-05-12 19:26:03\"},{\"id\":\"39\",\"cart_id\":\"8069\",\"user_id\":\"6020\",\"pro_id\":\"9368\",\"pro_qty\":\"1\",\"pro_name\":\"asd\",\"pro_price\":\"12\",\"slug\":\"asd\",\"pro_image\":\"product-1.jpg\",\"added_on\":\"2024-05-13\",\"created_at\":\"2024-05-12 19:26:04\",\"updated_at\":\"2024-05-12 19:26:04\"}]', 'cod', 'Stella Gamble', 'dybajiwy@mailinator.com', '+1 (382) 222-5813', NULL, 'Hic nesciunt reicie', 'Hic nesciunt reicie', 'New York US', 'Minus et sunt molest', 'Quis anim aliquam qu', '18624', '2024-05-13', '2024-06-02', '2024-05-13', 'pending', '1', '::1', NULL, '2024-05-13 03:20:25', '2024-05-13 03:20:25'),
(7, '4364', NULL, NULL, 6020, NULL, NULL, 3, NULL, 50, '195', '[{\"id\":\"37\",\"cart_id\":\"5814\",\"user_id\":\"6020\",\"pro_id\":\"6754\",\"pro_qty\":\"1\",\"pro_name\":\"asdtest\",\"pro_price\":\"11\",\"slug\":\"asdtest\",\"pro_image\":\"product-16.jpg\",\"added_on\":\"2024-05-13\",\"created_at\":\"2024-05-12 19:26:02\",\"updated_at\":\"2024-05-12 19:26:02\"},{\"id\":\"38\",\"cart_id\":\"9301\",\"user_id\":\"6020\",\"pro_id\":\"2206\",\"pro_qty\":\"1\",\"pro_name\":\"Ear Bud\",\"pro_price\":\"122\",\"slug\":\"ear-bud\",\"pro_image\":\"product-11.jpg\",\"added_on\":\"2024-05-13\",\"created_at\":\"2024-05-12 19:26:03\",\"updated_at\":\"2024-05-12 19:26:03\"},{\"id\":\"39\",\"cart_id\":\"8069\",\"user_id\":\"6020\",\"pro_id\":\"9368\",\"pro_qty\":\"1\",\"pro_name\":\"asd\",\"pro_price\":\"12\",\"slug\":\"asd\",\"pro_image\":\"product-1.jpg\",\"added_on\":\"2024-05-13\",\"created_at\":\"2024-05-12 19:26:04\",\"updated_at\":\"2024-05-12 19:26:04\"}]', 'cod', 'Stella Gamble', 'dybajiwy@mailinator.com', '+1 (382) 222-5813', NULL, 'Hic nesciunt reicie', 'Hic nesciunt reicie', 'New York US', 'Minus et sunt molest', 'Quis anim aliquam qu', '18624', '2024-05-13', '2024-06-02', '2024-05-13', 'pending', '1', '::1', NULL, '2024-05-13 03:21:03', '2024-05-13 03:21:03'),
(8, '4223', NULL, NULL, 6020, NULL, NULL, 3, NULL, 50, '195', '[{\"id\":\"37\",\"cart_id\":\"5814\",\"user_id\":\"6020\",\"pro_id\":\"6754\",\"pro_qty\":\"1\",\"pro_name\":\"asdtest\",\"pro_price\":\"11\",\"slug\":\"asdtest\",\"pro_image\":\"product-16.jpg\",\"added_on\":\"2024-05-13\",\"created_at\":\"2024-05-12 19:26:02\",\"updated_at\":\"2024-05-12 19:26:02\"},{\"id\":\"38\",\"cart_id\":\"9301\",\"user_id\":\"6020\",\"pro_id\":\"2206\",\"pro_qty\":\"1\",\"pro_name\":\"Ear Bud\",\"pro_price\":\"122\",\"slug\":\"ear-bud\",\"pro_image\":\"product-11.jpg\",\"added_on\":\"2024-05-13\",\"created_at\":\"2024-05-12 19:26:03\",\"updated_at\":\"2024-05-12 19:26:03\"},{\"id\":\"39\",\"cart_id\":\"8069\",\"user_id\":\"6020\",\"pro_id\":\"9368\",\"pro_qty\":\"1\",\"pro_name\":\"asd\",\"pro_price\":\"12\",\"slug\":\"asd\",\"pro_image\":\"product-1.jpg\",\"added_on\":\"2024-05-13\",\"created_at\":\"2024-05-12 19:26:04\",\"updated_at\":\"2024-05-12 19:26:04\"}]', 'cod', 'Stella Gamble', 'dybajiwy@mailinator.com', '+1 (382) 222-5813', NULL, 'Hic nesciunt reicie', 'Hic nesciunt reicie', 'New York US', 'Minus et sunt molest', 'Quis anim aliquam qu', '18624', '2024-05-13', '2024-06-02', '2024-05-13', 'pending', '1', '::1', NULL, '2024-05-13 03:21:24', '2024-05-13 03:21:24'),
(9, '4771', NULL, NULL, 6020, NULL, NULL, 3, NULL, 50, '195', '[{\"id\":\"37\",\"cart_id\":\"5814\",\"user_id\":\"6020\",\"pro_id\":\"6754\",\"pro_qty\":\"1\",\"pro_name\":\"asdtest\",\"pro_price\":\"11\",\"slug\":\"asdtest\",\"pro_image\":\"product-16.jpg\",\"added_on\":\"2024-05-13\",\"created_at\":\"2024-05-12 19:26:02\",\"updated_at\":\"2024-05-12 19:26:02\"},{\"id\":\"38\",\"cart_id\":\"9301\",\"user_id\":\"6020\",\"pro_id\":\"2206\",\"pro_qty\":\"1\",\"pro_name\":\"Ear Bud\",\"pro_price\":\"122\",\"slug\":\"ear-bud\",\"pro_image\":\"product-11.jpg\",\"added_on\":\"2024-05-13\",\"created_at\":\"2024-05-12 19:26:03\",\"updated_at\":\"2024-05-12 19:26:03\"},{\"id\":\"39\",\"cart_id\":\"8069\",\"user_id\":\"6020\",\"pro_id\":\"9368\",\"pro_qty\":\"1\",\"pro_name\":\"asd\",\"pro_price\":\"12\",\"slug\":\"asd\",\"pro_image\":\"product-1.jpg\",\"added_on\":\"2024-05-13\",\"created_at\":\"2024-05-12 19:26:04\",\"updated_at\":\"2024-05-12 19:26:04\"}]', 'cod', 'Stella Gamble', 'dybajiwy@mailinator.com', '+1 (382) 222-5813', NULL, 'Hic nesciunt reicie', 'Hic nesciunt reicie', 'New York US', 'Minus et sunt molest', 'Quis anim aliquam qu', '18624', '2024-05-13', '2024-06-02', '2024-05-13', 'pending', '1', '::1', NULL, '2024-05-13 03:21:42', '2024-05-13 03:21:42'),
(10, '2692', NULL, NULL, 6020, NULL, NULL, 3, NULL, 50, '195', '[{\"id\":\"37\",\"cart_id\":\"5814\",\"user_id\":\"6020\",\"pro_id\":\"6754\",\"pro_qty\":\"1\",\"pro_name\":\"asdtest\",\"pro_price\":\"11\",\"slug\":\"asdtest\",\"pro_image\":\"product-16.jpg\",\"added_on\":\"2024-05-13\",\"created_at\":\"2024-05-12 19:26:02\",\"updated_at\":\"2024-05-12 19:26:02\"},{\"id\":\"38\",\"cart_id\":\"9301\",\"user_id\":\"6020\",\"pro_id\":\"2206\",\"pro_qty\":\"1\",\"pro_name\":\"Ear Bud\",\"pro_price\":\"122\",\"slug\":\"ear-bud\",\"pro_image\":\"product-11.jpg\",\"added_on\":\"2024-05-13\",\"created_at\":\"2024-05-12 19:26:03\",\"updated_at\":\"2024-05-12 19:26:03\"},{\"id\":\"39\",\"cart_id\":\"8069\",\"user_id\":\"6020\",\"pro_id\":\"9368\",\"pro_qty\":\"1\",\"pro_name\":\"asd\",\"pro_price\":\"12\",\"slug\":\"asd\",\"pro_image\":\"product-1.jpg\",\"added_on\":\"2024-05-13\",\"created_at\":\"2024-05-12 19:26:04\",\"updated_at\":\"2024-05-12 19:26:04\"}]', 'cod', 'Stella Gamble', 'dybajiwy@mailinator.com', '+1 (382) 222-5813', NULL, 'Hic nesciunt reicie', 'Hic nesciunt reicie', 'New York US', 'Minus et sunt molest', 'Quis anim aliquam qu', '18624', '2024-05-13', '2024-06-02', '2024-05-13', 'pending', '1', '::1', NULL, '2024-05-13 03:22:36', '2024-05-13 03:22:36'),
(11, '9536', NULL, NULL, 6020, NULL, NULL, 3, NULL, 50, '195', 'false', 'cod', 'Shafira Marks', 'xoxeti@mailinator.com', '+1 (903) 122-3258', NULL, 'Rerum temporibus con', 'Rerum temporibus con', 'Tokyo Japan', 'Nostrud animi nisi ', 'Occaecat dolorem nul', '50590', '2024-05-13', '2024-06-02', '2024-05-13', 'pending', '1', '::1', NULL, '2024-05-13 03:31:33', '2024-05-13 03:31:33'),
(12, '4676', NULL, NULL, 6020, NULL, NULL, 3, NULL, 50, '195', '[{\"id\":\"37\",\"cart_id\":\"5814\",\"user_id\":\"6020\",\"pro_id\":\"6754\",\"pro_qty\":\"1\",\"pro_name\":\"asdtest\",\"pro_price\":\"11\",\"slug\":\"asdtest\",\"status\":\"1\",\"pro_image\":\"product-16.jpg\",\"added_on\":\"2024-05-13\",\"created_at\":\"2024-05-12 19:26:02\",\"updated_at\":\"2024-05-12 20:31:59\"},{\"id\":\"38\",\"cart_id\":\"9301\",\"user_id\":\"6020\",\"pro_id\":\"2206\",\"pro_qty\":\"1\",\"pro_name\":\"Ear Bud\",\"pro_price\":\"122\",\"slug\":\"ear-bud\",\"status\":\"1\",\"pro_image\":\"product-11.jpg\",\"added_on\":\"2024-05-13\",\"created_at\":\"2024-05-12 19:26:03\",\"updated_at\":\"2024-05-12 20:32:07\"},{\"id\":\"39\",\"cart_id\":\"8069\",\"user_id\":\"6020\",\"pro_id\":\"9368\",\"pro_qty\":\"1\",\"pro_name\":\"asd\",\"pro_price\":\"12\",\"slug\":\"asd\",\"status\":\"1\",\"pro_image\":\"product-1.jpg\",\"added_on\":\"2024-05-13\",\"created_at\":\"2024-05-12 19:26:04\",\"updated_at\":\"2024-05-12 20:32:04\"}]', 'cod', 'Shafira Marks', 'xoxeti@mailinator.com', '+1 (903) 122-3258', NULL, 'Rerum temporibus con', 'Rerum temporibus con', 'Tokyo Japan', 'Nostrud animi nisi ', 'Occaecat dolorem nul', '50590', '2024-05-13', '2024-06-02', '2024-05-13', 'pending', '1', '::1', NULL, '2024-05-13 03:32:14', '2024-05-13 03:32:14'),
(13, '4071', NULL, NULL, 6020, NULL, NULL, 3, NULL, 50, '195', '[{\"id\":\"37\",\"cart_id\":\"5814\",\"user_id\":\"6020\",\"pro_id\":\"6754\",\"pro_qty\":\"1\",\"pro_name\":\"asdtest\",\"pro_price\":\"11\",\"slug\":\"asdtest\",\"status\":\"1\",\"pro_image\":\"product-16.jpg\",\"added_on\":\"2024-05-13\",\"created_at\":\"2024-05-12 19:26:02\",\"updated_at\":\"2024-05-12 20:31:59\"},{\"id\":\"38\",\"cart_id\":\"9301\",\"user_id\":\"6020\",\"pro_id\":\"2206\",\"pro_qty\":\"1\",\"pro_name\":\"Ear Bud\",\"pro_price\":\"122\",\"slug\":\"ear-bud\",\"status\":\"1\",\"pro_image\":\"product-11.jpg\",\"added_on\":\"2024-05-13\",\"created_at\":\"2024-05-12 19:26:03\",\"updated_at\":\"2024-05-12 20:32:07\"},{\"id\":\"39\",\"cart_id\":\"8069\",\"user_id\":\"6020\",\"pro_id\":\"9368\",\"pro_qty\":\"1\",\"pro_name\":\"asd\",\"pro_price\":\"12\",\"slug\":\"asd\",\"status\":\"1\",\"pro_image\":\"product-1.jpg\",\"added_on\":\"2024-05-13\",\"created_at\":\"2024-05-12 19:26:04\",\"updated_at\":\"2024-05-12 20:32:04\"}]', 'cod', 'Shafira Marks', 'xoxeti@mailinator.com', '+1 (903) 122-3258', NULL, 'Rerum temporibus con', 'Rerum temporibus con', 'Tokyo Japan', 'Nostrud animi nisi ', 'Occaecat dolorem nul', '50590', '2024-05-13', '2024-06-02', '2024-05-13', 'pending', '1', '::1', NULL, '2024-05-13 03:33:19', '2024-05-13 03:33:19'),
(14, '2559', NULL, NULL, 6020, NULL, NULL, 3, NULL, 50, '195', '[{\"id\":\"37\",\"cart_id\":\"5814\",\"user_id\":\"6020\",\"pro_id\":\"6754\",\"pro_qty\":\"1\",\"pro_name\":\"asdtest\",\"pro_price\":\"11\",\"slug\":\"asdtest\",\"status\":\"1\",\"pro_image\":\"product-16.jpg\",\"added_on\":\"2024-05-13\",\"created_at\":\"2024-05-12 19:26:02\",\"updated_at\":\"2024-05-12 20:31:59\"},{\"id\":\"38\",\"cart_id\":\"9301\",\"user_id\":\"6020\",\"pro_id\":\"2206\",\"pro_qty\":\"1\",\"pro_name\":\"Ear Bud\",\"pro_price\":\"122\",\"slug\":\"ear-bud\",\"status\":\"1\",\"pro_image\":\"product-11.jpg\",\"added_on\":\"2024-05-13\",\"created_at\":\"2024-05-12 19:26:03\",\"updated_at\":\"2024-05-12 20:32:07\"},{\"id\":\"39\",\"cart_id\":\"8069\",\"user_id\":\"6020\",\"pro_id\":\"9368\",\"pro_qty\":\"1\",\"pro_name\":\"asd\",\"pro_price\":\"12\",\"slug\":\"asd\",\"status\":\"1\",\"pro_image\":\"product-1.jpg\",\"added_on\":\"2024-05-13\",\"created_at\":\"2024-05-12 19:26:04\",\"updated_at\":\"2024-05-12 20:32:04\"}]', 'cod', 'Shafira Marks', 'xoxeti@mailinator.com', '+1 (903) 122-3258', NULL, 'Rerum temporibus con', 'Rerum temporibus con', 'Tokyo Japan', 'Nostrud animi nisi ', 'Occaecat dolorem nul', '50590', '2024-05-13', '2024-06-02', '2024-05-13', 'pending', '1', '::1', NULL, '2024-05-13 03:33:27', '2024-05-13 03:33:27'),
(15, '9713', NULL, NULL, 6020, NULL, NULL, 3, NULL, 50, '195', '[{\"id\":\"37\",\"cart_id\":\"5814\",\"user_id\":\"6020\",\"pro_id\":\"6754\",\"pro_qty\":\"1\",\"pro_name\":\"asdtest\",\"pro_price\":\"11\",\"slug\":\"asdtest\",\"status\":\"1\",\"pro_image\":\"product-16.jpg\",\"added_on\":\"2024-05-13\",\"created_at\":\"2024-05-12 19:26:02\",\"updated_at\":\"2024-05-12 20:31:59\"},{\"id\":\"38\",\"cart_id\":\"9301\",\"user_id\":\"6020\",\"pro_id\":\"2206\",\"pro_qty\":\"1\",\"pro_name\":\"Ear Bud\",\"pro_price\":\"122\",\"slug\":\"ear-bud\",\"status\":\"1\",\"pro_image\":\"product-11.jpg\",\"added_on\":\"2024-05-13\",\"created_at\":\"2024-05-12 19:26:03\",\"updated_at\":\"2024-05-12 20:32:07\"},{\"id\":\"39\",\"cart_id\":\"8069\",\"user_id\":\"6020\",\"pro_id\":\"9368\",\"pro_qty\":\"1\",\"pro_name\":\"asd\",\"pro_price\":\"12\",\"slug\":\"asd\",\"status\":\"1\",\"pro_image\":\"product-1.jpg\",\"added_on\":\"2024-05-13\",\"created_at\":\"2024-05-12 19:26:04\",\"updated_at\":\"2024-05-12 20:32:04\"}]', 'cod', 'Shafira Marks', 'xoxeti@mailinator.com', '+1 (903) 122-3258', NULL, 'Rerum temporibus con', 'Rerum temporibus con', 'Tokyo Japan', 'Nostrud animi nisi ', 'Occaecat dolorem nul', '50590', '2024-05-13', '2024-06-02', '2024-05-13', 'pending', '1', '::1', NULL, '2024-05-13 03:33:35', '2024-05-13 03:33:35'),
(16, '7399', NULL, NULL, 6020, NULL, NULL, 3, NULL, 50, '195', '[{\"id\":\"37\",\"cart_id\":\"5814\",\"user_id\":\"6020\",\"pro_id\":\"6754\",\"pro_qty\":\"1\",\"pro_name\":\"asdtest\",\"pro_price\":\"11\",\"slug\":\"asdtest\",\"status\":\"1\",\"pro_image\":\"product-16.jpg\",\"added_on\":\"2024-05-13\",\"created_at\":\"2024-05-12 19:26:02\",\"updated_at\":\"2024-05-12 20:31:59\"},{\"id\":\"38\",\"cart_id\":\"9301\",\"user_id\":\"6020\",\"pro_id\":\"2206\",\"pro_qty\":\"1\",\"pro_name\":\"Ear Bud\",\"pro_price\":\"122\",\"slug\":\"ear-bud\",\"status\":\"1\",\"pro_image\":\"product-11.jpg\",\"added_on\":\"2024-05-13\",\"created_at\":\"2024-05-12 19:26:03\",\"updated_at\":\"2024-05-12 20:32:07\"},{\"id\":\"39\",\"cart_id\":\"8069\",\"user_id\":\"6020\",\"pro_id\":\"9368\",\"pro_qty\":\"1\",\"pro_name\":\"asd\",\"pro_price\":\"12\",\"slug\":\"asd\",\"status\":\"1\",\"pro_image\":\"product-1.jpg\",\"added_on\":\"2024-05-13\",\"created_at\":\"2024-05-12 19:26:04\",\"updated_at\":\"2024-05-12 20:32:04\"}]', 'cod', 'Shafira Marks', 'xoxeti@mailinator.com', '+1 (903) 122-3258', NULL, 'Rerum temporibus con', 'Rerum temporibus con', 'Tokyo Japan', 'Nostrud animi nisi ', 'Occaecat dolorem nul', '50590', '2024-05-13', '2024-06-02', '2024-05-13', 'pending', '1', '::1', NULL, '2024-05-13 03:34:01', '2024-05-13 03:34:01'),
(17, '6765', NULL, NULL, 6020, NULL, NULL, 3, NULL, 50, '195', '[{\"id\":\"37\",\"cart_id\":\"5814\",\"user_id\":\"6020\",\"pro_id\":\"6754\",\"pro_qty\":\"1\",\"pro_name\":\"asdtest\",\"pro_price\":\"11\",\"slug\":\"asdtest\",\"status\":\"1\",\"pro_image\":\"product-16.jpg\",\"added_on\":\"2024-05-13\",\"created_at\":\"2024-05-12 19:26:02\",\"updated_at\":\"2024-05-12 20:31:59\"},{\"id\":\"38\",\"cart_id\":\"9301\",\"user_id\":\"6020\",\"pro_id\":\"2206\",\"pro_qty\":\"1\",\"pro_name\":\"Ear Bud\",\"pro_price\":\"122\",\"slug\":\"ear-bud\",\"status\":\"1\",\"pro_image\":\"product-11.jpg\",\"added_on\":\"2024-05-13\",\"created_at\":\"2024-05-12 19:26:03\",\"updated_at\":\"2024-05-12 20:32:07\"},{\"id\":\"39\",\"cart_id\":\"8069\",\"user_id\":\"6020\",\"pro_id\":\"9368\",\"pro_qty\":\"1\",\"pro_name\":\"asd\",\"pro_price\":\"12\",\"slug\":\"asd\",\"status\":\"1\",\"pro_image\":\"product-1.jpg\",\"added_on\":\"2024-05-13\",\"created_at\":\"2024-05-12 19:26:04\",\"updated_at\":\"2024-05-12 20:32:04\"}]', 'cod', 'Shafira Marks', 'xoxeti@mailinator.com', '+1 (903) 122-3258', NULL, 'Rerum temporibus con', 'Rerum temporibus con', 'Tokyo Japan', 'Nostrud animi nisi ', 'Occaecat dolorem nul', '50590', '2024-05-13', '2024-06-02', '2024-05-13', 'pending', '1', '::1', NULL, '2024-05-13 03:36:27', '2024-05-13 03:36:27');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ec_product`
--

INSERT INTO `ec_product` (`id`, `prod_id`, `category`, `sub_category`, `status`, `pro_name`, `brand`, `featured`, `description`, `meta_title`, `meta_keywords`, `meta_desc`, `highlights`, `pro_main_image`, `gallery_image`, `sold`, `slug`, `ip`, `added_on`, `updated_on`, `created_at`, `updated_at`, `stock`, `mrp`, `selling_price`) VALUES
(5, 9368, 5455, NULL, 1, 'asd', 'asd', '1', 0x6173646164, '12', '112', '12', 'asdad', 'product-1.jpg', NULL, NULL, 'asd', NULL, '08 May, 2024', NULL, NULL, NULL, 12, 12, 12),
(6, 2206, 7624, NULL, 1, 'Ear Bud', 'asd', '1', 0x656172627564656172627564656172627564656172627564656172627564656172627564656172627564656172627564656172627564656172627564656172627564656172627564656172627564656172627564656172627564656172627564656172627564656172627564656172627564656172627564656172627564656172627564656172627564656172627564656172627564656172627564656172627564656172627564656172627564656172627564656172627564656172627564656172627564656172627564656172627564656172627564656172627564656172627564656172627564656172627564656172627564656172627564656172627564656172627564656172627564656172627564656172627564656172627564656172627564656172627564656172627564656172627564656172627564656172627564656172627564656172627564656172627564656172627564656172627564656172627564656172627564656172627564656172627564656172627564656172627564656172627564656172627564656172627564656172627564656172627564656172627564656172627564656172627564656172627564656172627564656172627564656172627564656172627564656172627564656172627564656172627564656172627564656172627564656172627564656172627564656172627564656172627564656172627564656172627564656172627564656172627564656172627564656172627564656172627564656172627564656172627564656172627564, '123', '123', '123', 'earbudearbudearbudearbudearbudearbudearbudearbudearbudearbudearbudearbudearbudearbudearbudearbudearbudearbudearbudearbudearbudearbudearbudearbudearbudearbudearbudearbudearbudearbudearbudearbudearbudearbudearbudearbudearbudearbudearbudearbudearbudearbudearbudearbudearbudearbudearbudearbud', 'product-11.jpg', NULL, NULL, 'ear-bud', NULL, '08 May, 2024', NULL, NULL, NULL, 12, 123, 122),
(7, 6754, 5455, 7624, 1, 'asdtest', 'asdtest', '1', 0x61736474657374206173647465737420617364746573746173647465737420617364746573742061736474657374206173647465737420617364746573742061736474657374206173647465737420617364746573742061736474657374206173647465737420617364746573742061736474657374206173647465737420617364746573742061736474657374206173647465737420617364746573742061736474657374617364746573746173647465737461736474657374617364746573742061736474657374206173647465737420617364746573742061736474657374206173647465737420617364746573742061736474657374206173647465737420617364746573742061736474657374, '12', '12', '12', 'asdtest asdtest asdtestasdtest asdtest asdtest asdtest asdtest asdtest asdtest asdtest asdtest asdtest asdtest asdtest asdtest asdtest asdtest asdtest asdtest asdtestasdtestasdtestasdtestasdtest asdtest asdtest asdtest asdtest asdtest asdtest asdtest asdtest asdtest asdtest', 'product-16.jpg', NULL, NULL, 'asdtest', NULL, '08 May, 2024', NULL, NULL, NULL, 12, 12, 11);

-- --------------------------------------------------------

--
-- Table structure for table `ec_users`
--

CREATE TABLE `ec_users` (
  `id` int(11) NOT NULL,
  `user_id` int(10) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phone` varchar(20) NOT NULL,
  `password` varchar(100) DEFAULT NULL,
  `status` varchar(5) DEFAULT NULL,
  `ip` varchar(50) DEFAULT NULL,
  `added_on` varchar(30) DEFAULT NULL,
  `updated_on` varchar(30) DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ec_users`
--

INSERT INTO `ec_users` (`id`, `user_id`, `username`, `email`, `phone`, `password`, `status`, `ip`, `added_on`, `updated_on`, `updated_at`, `created_at`) VALUES
(1, 6020, 'StellaGamble', 'dybajiwy@mailinator.com', '+1 (382) 222-5813', '1', '1', '::1', '2024-05-13', NULL, '2024-05-13 02:39:45', '2024-05-13 02:39:45'),
(2, 6020, 'Stella Gamble', 'dybajiwy@mailinator.com', '+1 (382) 222-5813', '1', '1', '::1', '2024-05-13', NULL, '2024-05-13 02:40:12', '2024-05-13 02:40:12'),
(3, 6020, 'Stella Gamble', 'dybajiwy@mailinator.com', '+1 (382) 222-5813', '+1(382)222-5813', '1', '::1', '2024-05-13', NULL, '2024-05-13 02:40:55', '2024-05-13 02:40:55'),
(4, 6020, 'Stella Gamble', 'dybajiwy@mailinator.com', '+1 (382) 222-5813', '+1(382)222-5813', '1', '::1', '2024-05-13', NULL, '2024-05-13 03:09:24', '2024-05-13 03:09:24'),
(5, 6020, 'Stella Gamble', 'dybajiwy@mailinator.com', '+1 (382) 222-5813', '+1(382)222-5813', '1', '::1', '2024-05-13', NULL, '2024-05-13 03:09:42', '2024-05-13 03:09:42'),
(6, 6020, 'Stella Gamble', 'dybajiwy@mailinator.com', '+1 (382) 222-5813', '+1(382)222-5813', '1', '::1', '2024-05-13', NULL, '2024-05-13 03:10:51', '2024-05-13 03:10:51'),
(7, 6020, 'Stella Gamble', 'dybajiwy@mailinator.com', '+1 (382) 222-5813', '+1(382)222-5813', '1', '::1', '2024-05-13', NULL, '2024-05-13 03:11:46', '2024-05-13 03:11:46'),
(8, 6020, 'Stella Gamble', 'dybajiwy@mailinator.com', '+1 (382) 222-5813', '+1(382)222-5813', '1', '::1', '2024-05-13', NULL, '2024-05-13 03:12:47', '2024-05-13 03:12:47'),
(9, 6020, 'Stella Gamble', 'dybajiwy@mailinator.com', '+1 (382) 222-5813', '+1(382)222-5813', '1', '::1', '2024-05-13', NULL, '2024-05-13 03:14:10', '2024-05-13 03:14:10'),
(10, 6020, 'Stella Gamble', 'dybajiwy@mailinator.com', '+1 (382) 222-5813', '+1(382)222-5813', '1', '::1', '2024-05-13', NULL, '2024-05-13 03:20:25', '2024-05-13 03:20:25'),
(11, 6020, 'Stella Gamble', 'dybajiwy@mailinator.com', '+1 (382) 222-5813', '+1(382)222-5813', '1', '::1', '2024-05-13', NULL, '2024-05-13 03:21:03', '2024-05-13 03:21:03'),
(12, 6020, 'Stella Gamble', 'dybajiwy@mailinator.com', '+1 (382) 222-5813', '+1(382)222-5813', '1', '::1', '2024-05-13', NULL, '2024-05-13 03:21:24', '2024-05-13 03:21:24'),
(13, 6020, 'Stella Gamble', 'dybajiwy@mailinator.com', '+1 (382) 222-5813', '+1(382)222-5813', '1', '::1', '2024-05-13', NULL, '2024-05-13 03:21:42', '2024-05-13 03:21:42'),
(14, 6020, 'Stella Gamble', 'dybajiwy@mailinator.com', '+1 (382) 222-5813', '+1(382)222-5813', '1', '::1', '2024-05-13', NULL, '2024-05-13 03:22:36', '2024-05-13 03:22:36'),
(15, 6020, 'Shafira Marks', 'xoxeti@mailinator.com', '+1 (903) 122-3258', '+1(903)122-3258', '1', '::1', '2024-05-13', NULL, '2024-05-13 03:31:33', '2024-05-13 03:31:33'),
(16, 6020, 'Shafira Marks', 'xoxeti@mailinator.com', '+1 (903) 122-3258', '+1(903)122-3258', '1', '::1', '2024-05-13', NULL, '2024-05-13 03:32:14', '2024-05-13 03:32:14'),
(17, 6020, 'Shafira Marks', 'xoxeti@mailinator.com', '+1 (903) 122-3258', '+1(903)122-3258', '1', '::1', '2024-05-13', NULL, '2024-05-13 03:33:19', '2024-05-13 03:33:19'),
(18, 6020, 'Shafira Marks', 'xoxeti@mailinator.com', '+1 (903) 122-3258', '+1(903)122-3258', '1', '::1', '2024-05-13', NULL, '2024-05-13 03:33:27', '2024-05-13 03:33:27'),
(19, 6020, 'Shafira Marks', 'xoxeti@mailinator.com', '+1 (903) 122-3258', '+1(903)122-3258', '1', '::1', '2024-05-13', NULL, '2024-05-13 03:33:35', '2024-05-13 03:33:35'),
(20, 6020, 'Shafira Marks', 'xoxeti@mailinator.com', '+1 (903) 122-3258', '+1(903)122-3258', '1', '::1', '2024-05-13', NULL, '2024-05-13 03:34:01', '2024-05-13 03:34:01'),
(21, 6020, 'Shafira Marks', 'xoxeti@mailinator.com', '+1 (903) 122-3258', '+1(903)122-3258', '1', '::1', '2024-05-13', NULL, '2024-05-13 03:36:27', '2024-05-13 03:36:27');

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
-- Indexes for table `ec_order`
--
ALTER TABLE `ec_order`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `ec_category`
--
ALTER TABLE `ec_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `ec_customer`
--
ALTER TABLE `ec_customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ec_order`
--
ALTER TABLE `ec_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
