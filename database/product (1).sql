-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 07, 2020 at 06:29 AM
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
(18, 'bàn dài 2', NULL, 11, 34, 3, 'viewFlipper5.jpg', '59', '8', '434', 0, 0, 0, '2020-07-06 10:38:28', '2020-07-06 10:38:28'),
(20, '11', NULL, 1111, 23232, 127, 'unnamed.png', '57', '8', '21312321       ', 0, 0, 0, '2020-07-06 11:08:05', '2020-07-06 14:17:13'),
(23, 'bàn dài veeeeeeeeeeeeeeee', NULL, 22, 22, 22, 'viewFlipper4.jpg', '57', '2', 'ssss', 0, 0, 0, '2020-07-07 04:24:29', '2020-07-07 04:24:29'),
(24, 'bàn dài v', NULL, 3, 33, 1, '32896091_2051968085124220_505489376969490432_o.jpg', '57', '2', '3333', 0, 0, 0, '2020-07-07 04:25:17', '2020-07-07 04:25:17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
