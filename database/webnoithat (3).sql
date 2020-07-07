-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 07, 2020 at 06:45 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webnoithat`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `account` varchar(50) NOT NULL,
  `password` varchar(50) DEFAULT NULL,
  `phone` char(15) DEFAULT NULL,
  `status` tinytext DEFAULT '1',
  `level` tinytext DEFAULT '1',
  `avatar` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updata_up` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `address`, `email`, `account`, `password`, `phone`, `status`, `level`, `avatar`, `created_at`, `updata_up`) VALUES
(3, '000', '111', 'vanthuonghcmue@gmail.com', '1111', '11111', '1111', '1', '1', 'viewFlipper4.jpg', '2020-06-04 21:58:18', '2020-07-06 04:37:15'),
(5, 'dsdsa', 'ádsad', 'vanthuonghcmue@gmail.com', 'fdfsdf', 'sfdsfsdfds', '2234324324', '1', '1', 'viewFlipper3.jpg', '2020-07-03 06:13:24', '2020-07-06 04:35:01'),
(9, 'fksdjfdjkjfk', 'ldsdsjkds', 'dhsd@hdhsjdhsd', 'kasdsadhdh', '', '29873823872', '1', '1', 'viewFlipper5.jpg', '2020-07-03 09:59:12', '2020-07-03 09:59:12'),
(11, 'dssssss111', '3dfgfg@dsadad', 'vanthuonghcmue@gmail.com', 'hjw87d', '444', '777777777', '1', '1', 'images.png', '2020-07-06 04:39:33', '2020-07-06 10:30:56');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `slug` varchar(100) DEFAULT NULL,
  `images` varchar(100) DEFAULT NULL,
  `banner` varchar(100) DEFAULT NULL,
  `home` tinyint(100) DEFAULT 0,
  `status` tinyint(4) DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `slug`, `images`, `banner`, `home`, `status`, `created_at`, `updated`) VALUES
(57, 'bàn', NULL, NULL, NULL, 0, 0, '2020-06-18 01:16:58', '2020-06-18 01:16:58'),
(59, 'ghế', NULL, NULL, NULL, 0, 0, '2020-06-22 07:25:17', '2020-06-22 07:25:17'),
(60, 'Asus', NULL, NULL, NULL, 0, 0, '2020-06-22 07:25:25', '2020-06-22 07:25:25'),
(61, 'thuongrrrrr', NULL, NULL, NULL, 0, 0, '2020-06-22 07:25:30', '2020-06-23 16:53:02'),
(64, 'ghế1111111111111111111111111111', NULL, NULL, NULL, 0, 0, '2020-06-30 15:04:13', '2020-07-01 06:45:55'),
(68, 'ghế', NULL, NULL, NULL, 0, 0, '2020-07-03 03:19:43', '2020-07-03 03:19:43');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `slug` varchar(100) DEFAULT NULL,
  `soluong` int(11) NOT NULL DEFAULT 1,
  `gia` int(11) DEFAULT NULL,
  `sale` tinyint(4) DEFAULT 0,
  `avatar` varchar(100) DEFAULT NULL,
  `category` varchar(50) DEFAULT NULL,
  `type` varchar(50) NOT NULL,
  `content` text DEFAULT NULL,
  `head` int(11) NOT NULL DEFAULT 0,
  `view` int(11) DEFAULT 0,
  `hot` tinyint(4) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updata_up` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `slug`, `soluong`, `gia`, `sale`, `avatar`, `category`, `type`, `content`, `head`, `view`, `hot`, `created_at`, `updata_up`) VALUES
(16, '77', NULL, 21, 21, 21, 'viewFlipper4.jpg', '61', '4', '2112 ', 0, 0, 0, '2020-07-06 04:47:14', '2020-07-06 10:33:57'),
(17, 'bàn dài', NULL, 1, 23, 12, 'viewFlipper1.jpg', '57', '2', '23232', 0, 0, 0, '2020-07-06 04:47:41', '2020-07-06 04:47:41'),
(20, '11', NULL, 1111, 23232, 127, 'unnamed.png', '57', '8', '21312321       ', 0, 0, 0, '2020-07-06 11:08:05', '2020-07-06 14:17:13'),
(23, 'bàn dài veeeeeeeeeeeeeeee', NULL, 22, 22, 22, 'viewFlipper4.jpg', '57', '2', 'ssss', 0, 0, 0, '2020-07-07 04:24:29', '2020-07-07 04:24:29'),
(25, 'nnm', NULL, 4, 888, 99, 'viewFlipper5.jpg', '57', '2', 'ljj', 0, 0, 0, '2020-07-07 04:35:48', '2020-07-07 04:35:48');

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

CREATE TABLE `type` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `category` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `type`
--

INSERT INTO `type` (`id`, `name`, `category`) VALUES
(2, '111111', 57),
(3, '1111', 57),
(4, 'tsssssssssssss', 61),
(5, 'tssssss', 57),
(6, 'tssssss', 57),
(8, 't', 57);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `phone` char(15) DEFAULT NULL,
  `Account` varchar(50) NOT NULL,
  `password` varchar(50) DEFAULT NULL,
  `avatar` varchar(100) DEFAULT NULL,
  `status` tinyint(4) DEFAULT 1,
  `token` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updata_up` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `address`, `phone`, `Account`, `password`, `avatar`, `status`, `token`, `created_at`, `updata_up`) VALUES
(1, '11111', 'Vanthuonghcmue@gmail.com', '351 Lạc Long Quân', '111', 'thuongpro2', '03451976412', 'viewFlipper2.jpg', 1, NULL, NULL, NULL),
(6, 'dssssss11111111111111111111111111', 'vanthuonghcmue@gmail.com', 'đâsd', '111', 'fffg', '00000', 'viewFlipper1.jpg', 1, '1', NULL, NULL),
(7, 'dghsadgsa', 'vanthuonghcmue@gmail.com', '11111111', '5454635', 'sadsadsadsa', '43243243', '105630090_214793609562347_8774062554505333533_n.jpg', 1, '1', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `type`
--
ALTER TABLE `type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
