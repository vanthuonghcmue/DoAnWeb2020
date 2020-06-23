-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 23, 2020 at 07:12 AM
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
-- Table structure for table `adims`
--

CREATE TABLE `adims` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `phone` char(15) DEFAULT NULL,
  `status` tinytext DEFAULT '1',
  `level` tinytext DEFAULT '1',
  `avatar` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updata_up` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
(61, 'thuong', NULL, NULL, NULL, 0, 0, '2020-06-22 07:25:30', '2020-06-22 07:25:30');

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

INSERT INTO `product` (`id`, `name`, `slug`, `soluong`, `gia`, `sale`, `avatar`, `category`, `content`, `head`, `view`, `hot`, `created_at`, `updata_up`) VALUES
(9, 'bàn dài veeeeeeeeeeeeeeee', NULL, 15, 55555555, 127, '1.jpg', '61', '5555555555555', 0, 0, 0, '2020-06-22 12:58:50', '2020-06-22 12:58:50'),
(10, 'bàn dài 2', NULL, 3, 555555555, 127, 'bg-3.jpg', '57', 'wwwwwwwwwww', 0, 0, 0, '2020-06-22 13:54:50', '2020-06-22 13:54:50'),
(11, 'bàn dài veeeeeeeeeeeeeeee', NULL, 33, 11114, 127, 'bg-1.jpg', '57', '222222222eeeeeeeeeeeeee', 0, 0, 0, '2020-06-22 17:23:45', '2020-06-22 17:23:45'),
(12, 'fsdfsff66', NULL, 6666555, 66666, 127, 'bg-2.jpg', '60', 'cfcc', 0, 0, 0, '2020-06-23 04:16:54', '2020-06-23 04:16:54');

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
  `password` varchar(50) DEFAULT NULL,
  `avatar` varchar(100) DEFAULT NULL,
  `status` tinyint(4) DEFAULT 1,
  `token` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updata_up` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adims`
--
ALTER TABLE `adims`
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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adims`
--
ALTER TABLE `adims`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
