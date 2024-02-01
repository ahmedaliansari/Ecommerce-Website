-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 02, 2023 at 09:10 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rgistration`
--

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `id` int(11) NOT NULL,
  `msg` text NOT NULL,
  `sendrid` int(11) NOT NULL,
  `recvid` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`id`, `msg`, `sendrid`, `recvid`, `date`) VALUES
(52, 'haaa haaaaa haaaa haaaaaa', 73, 74, '2023-07-20 02:01:03'),
(56, 'ha bahi aj bohot tez barsoo ga', 75, 49, '2023-07-20 23:38:02'),
(58, 'dekho dekho', 75, 49, '2023-07-20 23:38:48'),
(59, 'nh', 73, 0, '2023-07-28 05:04:18'),
(60, 'hy', 73, 49, '2023-07-28 06:45:13'),
(61, 'h', 73, 49, '2023-07-28 06:45:43'),
(62, 'achaaaaaaaaaaaaaaaaaaaaaaa', 73, 49, '2023-07-28 06:46:02'),
(63, 'bolo', 49, 73, '2023-07-28 06:58:37'),
(64, 'acha', 73, 49, '2023-07-28 07:03:54');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `pid` int(11) NOT NULL,
  `pname` varchar(100) NOT NULL,
  `pprice` int(100) NOT NULL,
  `pdesc` varchar(100) NOT NULL,
  `pimg` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`pid`, `pname`, `pprice`, `pdesc`, `pimg`) VALUES
(6, ' iPhone 14', 430000, 'Apple iPhone 14 ; Type, Super Retina XDR OLED, HDR10, Dolby Vision, 800 nits (HBM), 1200 nits (peak)', '../images/images-removebg-preview.png'),
(7, ' iPhone 14', 430000, 'Apple iPhone 14 ; Type, Super Retina XDR OLED, HDR10, Dolby Vision, 800 nits (HBM), 1200 nits (peak)', '../images/images-removebg-preview.png'),
(8, ' iPhone 14', 430000, 'Apple iPhone 14 ; Type, Super Retina XDR OLED, HDR10, Dolby Vision, 800 nits (HBM), 1200 nits (peak)', '../images/images-removebg-preview.png'),
(9, ' iPhone 14', 430000, 'Apple iPhone 14 ; Type, Super Retina XDR OLED, HDR10, Dolby Vision, 800 nits (HBM), 1200 nits (peak)', '../images/images-removebg-preview.png'),
(10, 'Samsung', 50000, 'Samsung ultra S23 ; Type, Super Retina XDR OLED, HDR10, Dolby Vision, 800 nits (HBM), 1200 nits (pea', '../images/iphone-14-pro-finish-select-202209-6-7inch-deeppurple.jpg'),
(11, 'Samsung', 50000, 'Samsung ultra S23 ; Type, Super Retina XDR OLED, HDR10, Dolby Vision, 800 nits (HBM), 1200 nits (pea', '../images/iphone-14-pro-finish-select-202209-6-7inch-deeppurple.jpg'),
(12, 'Samsung', 50000, 'Samsung ultra S23 ; Type, Super Retina XDR OLED, HDR10, Dolby Vision, 800 nits (HBM), 1200 nits (pea', '../images/iphone-14-pro-finish-select-202209-6-7inch-deeppurple.jpg'),
(13, 'Samsung', 50000, 'Samsung ultra S23 ; Type, Super Retina XDR OLED, HDR10, Dolby Vision, 800 nits (HBM), 1200 nits (pea', '../images/iphone-14-pro-finish-select-202209-6-7inch-deeppurple.jpg'),
(15, 'oppo', 34000, 'Apple iPhone 14 ; Type, Super Retina XDR OLED, HDR10, Dolby Vision, 800 nits (HBM), 1200 nits (peak)', '../images/images-removebg-preview.png');

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `sid` int(100) NOT NULL,
  `pid` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`sid`, `pid`, `user_id`, `date`) VALUES
(4, 9, 73, '2007-07-22 19:00:00'),
(5, 13, 73, '2007-07-23 02:15:29'),
(16, 13, 73, '2023-07-07 07:04:11'),
(17, 8, 49, '2023-07-07 05:34:49'),
(20, 11, 73, '2023-07-29 23:41:00'),
(21, 11, 73, '2023-07-29 23:46:34'),
(22, 8, 73, '2023-07-29 23:47:34'),
(23, 15, 98, '2023-07-29 23:55:17');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `Name`, `Email`, `Password`, `image`) VALUES
(243, 'chinto', 'khan@gmail.com', '22', ''),
(244, 'Taha', 'tahasheikh1829@gmail.com', '333', ''),
(245, 'karachi', 'tahasheikh1829@gmail.com', '00000', ''),
(246, 'king khan', 'Shayankhan@123gmail.com', '1111', ''),
(247, 'Shayan khan bhidi', 'Shayankhan@123gmail.com', '2222', ''),
(248, 'Khan', 'khan123@gmail.com', '12345', 'images/336988289_167164089495898_6643106885511072346_n.jpg'),
(249, 'king khan', 'king123@gmail.com', '12345', 'image/336988289_167164089495898_6643106885511072346_n.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `sid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=250;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
