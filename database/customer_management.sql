-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 28, 2021 at 02:42 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `customer_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL DEFAULT '',
  `password` varchar(255) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `user_id` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `price` decimal(7,2) NOT NULL,
  `quantity` int(11) NOT NULL,
  `subtotal` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `product_id` int(22) NOT NULL,
  `name` varchar(200) NOT NULL,
  `desc` varchar(255) NOT NULL,
  `price` decimal(7,2) NOT NULL,
  `quantity` int(11) NOT NULL,
  `subtotal` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id`, `uid`, `user_email`, `product_id`, `name`, `desc`, `price`, `quantity`, `subtotal`) VALUES
(34, 7, 'mary@gmail.com', 6, 'CCTV Camera', 'Takes clear picture of everything object in your compound', '61.99', 7, '73.98'),
(35, 7, 'mary@gmail.com', 8, 'Logo Design', 'Smart logo for your company', '11.99', 1, '73.98');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `uid` varchar(200) NOT NULL,
  `user_email` varchar(200) NOT NULL,
  `product_id` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `desc` varchar(200) NOT NULL,
  `price` decimal(7,2) NOT NULL,
  `quantity` int(11) NOT NULL,
  `subtotal` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `desc` text NOT NULL,
  `price` decimal(7,2) NOT NULL,
  `rrp` decimal(7,2) NOT NULL DEFAULT 0.00,
  `quantity` int(11) NOT NULL,
  `img` text NOT NULL,
  `date_added` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `desc`, `price`, `rrp`, `quantity`, `img`, `date_added`) VALUES
(1, 'Smart Watch', 'Unique watch made with stainless steel, ideal for those that prefer interative watches.', '29.99', '0.00', 2, 'watch.jpg', '2020-09-13 17:55:22'),
(2, 'Website', 'Stunning, responsive and dynamic website ', '16.99', '19.99', 3, 'website.jpg', '2020-09-13 18:52:49'),
(3, 'Computer', 'Modern computers with high processing power', '9.99', '0.00', 3, 'computer.jpg', '2020-10-13 18:47:56'),
(4, 'Digital Camera', 'Take clear and perfect pcture', '69.99', '0.00', 7, 'camera.jpg', '2020-10-13 17:42:04'),
(5, 'Search engine', 'Faster browsing of the internet', '49.99', '0.00', 2, 'chrome.png', '2020-10-13 18:47:56'),
(6, 'CCTV Camera', 'Takes clear picture of everything object in your compound', '61.99', '0.00', 7, 'download.jpg', '2020-10-13 17:42:04'),
(7, 'Smart Television', 'Unique television made with stainless steel, ideal for those that prefer interative televisions.', '39.99', '0.00', 2, 'smarttv.jpg', '2019-03-13 17:55:22'),
(8, 'Logo Design', 'Smart logo for your company', '11.99', '19.99', 1, 'Logo.jpg', '2020-03-13 18:52:49'),
(9, 'Smart Phone', 'Unique phone made with stainless steel, ideal for those that prefer interative phones', '19.19', '0.00', 2, 'phone.jpg', '2020-03-13 18:47:56'),
(10, 'Sub Woofer', 'High sound quality product', '79.00', '0.00', 7, 'woofer1.jpg', '2020-03-13 17:42:04'),
(11, 'Laptop', 'Modern  portable laptops with high processing power and battery backup', '13.97', '0.00', 1, 'download(1).jng', '2020-03-13 18:47:56'),
(12, 'Security System', 'For quality alert in case of a breach', '39.09', '0.00', 7, 'alrm.jpg', '2020-03-13 17:42:04');

-- --------------------------------------------------------

--
-- Table structure for table `query`
--

CREATE TABLE `query` (
  `id` int(11) NOT NULL,
  `query_id` varchar(11) NOT NULL,
  `email_id` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `task_type` varchar(255) NOT NULL,
  `prority` varchar(255) NOT NULL,
  `query` longtext NOT NULL,
  `attachment` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `admin_remark` longtext NOT NULL,
  `posting_date` date NOT NULL,
  `admin_remark_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `query`
--

INSERT INTO `query` (`id`, `query_id`, `email_id`, `subject`, `task_type`, `prority`, `query`, `attachment`, `status`, `admin_remark`, `posting_date`, `admin_remark_date`) VALUES
(1, '8', 'kikiruidenis@gmail.com', 'Software', 'ot1', 'important', 'ww', '', 'Open', '', '2020-10-10', '2020-10-10 08:45:36'),
(2, '9', 'kikiruidenis@gmail.com', 'Software', 'ot1', 'important', 'ww', '', 'Open', '', '2020-10-10', '2020-10-10 08:48:03'),
(3, '10', 'kikiruidenis@gmail.com', 'Software', 'ot2', 'question', 'What are the types of software you offer?', '', 'Open', 'Website and application ', '2020-10-10', '2020-10-10 08:48:40'),
(4, '', 'kikiruidenis@gmail.com', 'products', 'ot1', 'important', 'get back to me', '', 'Open', 'Okay', '2020-10-10', '2020-10-10 08:59:19'),
(5, '', 'kikiruidenis@gmail.com', 'products', 'ot1', '', 'wwe', '', 'Open', '', '2020-10-10', '2020-10-10 09:02:39'),
(6, '', 'kikiruidenis@gmail.com', 'Software', 'ot2', 'urgent(functional problem)', 'yes', '', 'Open', '', '2020-10-10', '2020-10-10 09:03:46'),
(7, '', 'kikiruidenis@gmail.com', 'products', 'ot1', 'urgent(functional problem)', 'no', '', 'Open', '', '2020-10-10', '2020-10-10 09:10:44'),
(8, '', 'denis@gmail.com', 'Cameras', 'ot1', 'important', 'Do you have quality cameras?', '', 'Open', 'yes', '2020-10-15', '2020-10-15 19:33:25'),
(9, '', 'denis@gmail.com', 'CCtv camers', 'ot1', 'important', 'de', '', 'Open', '', '2020-10-16', '2020-10-16 14:13:35'),
(10, '', 'mary@gmail.com', 'products', 'ot2', 'important', 'I need some computers', '', 'Open', '', '2021-01-09', '2021-01-09 08:54:10');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `mobile` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `user_image` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `posting_date` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `mobile`, `gender`, `user_image`, `address`, `posting_date`) VALUES
(1, 'Kikirui', 'kikiruidenis@gmail.com', 'Kikirui06', '0702209976', 'm', NULL, '2022kericho', '2020-10-10 07:44:40'),
(6, 'Denis', 'denis@gmail.com', '123456', '07678904566', 'm', NULL, NULL, '2020-11-25 17:45:07'),
(7, 'Mary', 'mary@gmail.com', 'mary', '0798123456', 'm', NULL, NULL, '2020-11-25 17:45:39'),
(8, 'Naomy', 'naomy@gmail.com', 'naomy', '0785132457', 'f', NULL, '657 nyeri', '2020-11-25 17:47:29');

-- --------------------------------------------------------

--
-- Table structure for table `usercheck`
--

CREATE TABLE `usercheck` (
  `id` int(11) NOT NULL,
  `logindate` varchar(255) DEFAULT NULL,
  `logintime` varchar(255) DEFAULT NULL,
  `user_id` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usercheck`
--

INSERT INTO `usercheck` (`id`, `logindate`, `logintime`, `user_id`, `username`, `email`) VALUES
(1, '2020/10/12', '12:40:21pm', '1', 'Kikirui', 'kikiruidenis@gmail.com'),
(2, '2020/10/13', '10:00:31am', '1', 'Kikirui', 'kikiruidenis@gmail.com'),
(3, '2020/10/13', '09:34:35pm', '1', 'Kikirui', 'kikiruidenis@gmail.com'),
(4, '2020/10/14', '07:59:51am', '1', 'Kikirui', 'kikiruidenis@gmail.com'),
(5, '2020/10/14', '08:05:11am', '1', 'Kikirui', 'kikiruidenis@gmail.com'),
(6, '2020/10/14', '08:23:38pm', '1', 'Kikirui', 'kikiruidenis@gmail.com'),
(7, '2020/10/14', '09:46:51pm', '2', 'Anthony Kamau', 'kamau12@gmail.com'),
(8, '2020/10/14', '10:01:28pm', '3', 'Denis', 'denis@gmail.com'),
(9, '2020/10/14', '10:10:50pm', '3', 'Denis', 'denis@gmail.com'),
(10, '2020/10/15', '06:32:00am', '3', 'Denis', 'denis@gmail.com'),
(11, '2020/10/15', '05:30:52pm', '3', 'Denis', 'denis@gmail.com'),
(12, '2020/10/15', '09:32:30pm', '3', 'Denis', 'denis@gmail.com'),
(13, '2020/10/16', '08:29:43am', '3', 'Denis', 'denis@gmail.com'),
(14, '2020/10/16', '09:38:36am', '3', 'Denis', 'denis@gmail.com'),
(15, '2020/10/16', '09:39:32am', '3', 'Denis', 'denis@gmail.com'),
(16, '2020/10/16', '09:59:34am', '3', 'Denis', 'denis@gmail.com'),
(17, '2020/10/16', '10:07:07am', '3', 'Denis', 'denis@gmail.com'),
(18, '2020/10/16', '10:34:52am', '3', 'Denis', 'denis@gmail.com'),
(19, '2020/10/16', '11:37:14am', '3', 'Kikirui', 'denis@gmail.com'),
(20, '2020/10/16', '12:42:07pm', '3', 'Kikirui', 'denis@gmail.com'),
(21, '2020/10/16', '01:58:20pm', '3', 'Kikirui', 'denis@gmail.com'),
(22, '2020/10/16', '02:00:05pm', '4', 'Kimani', 'kimani@gmail.com'),
(23, '2020/10/16', '03:39:41pm', '3', 'Kikirui', 'denis@gmail.com'),
(24, '2020/10/16', '03:42:18pm', '3', 'Kikirui', 'denis@gmail.com'),
(25, '2020/10/16', '03:46:57pm', '3', 'Kikirui', 'denis@gmail.com'),
(26, '2020/10/16', '03:48:44pm', '3', 'Kikirui', 'denis@gmail.com'),
(27, '2020/10/16', '04:04:44pm', '3', 'Kikirui', 'denis@gmail.com'),
(28, '2020/10/18', '03:28:07pm', '3', 'Kikirui', 'denis@gmail.com'),
(29, '2020/11/08', '08:59:54am', '3', 'Kikirui', 'denis@gmail.com'),
(30, '2020/11/08', '09:09:32am', '3', 'Kikirui', 'denis@gmail.com'),
(31, '2020/11/08', '11:11:51am', '3', 'Kikirui', 'denis@gmail.com'),
(32, '2020/11/17', '09:36:01am', '3', 'Kikirui', 'denis@gmail.com'),
(33, '2020/11/25', '10:51:36am', '1', 'Kikirui', 'kikiruidenis@gmail.com'),
(34, '2020/11/25', '05:13:36pm', '1', 'Kikirui', 'kikiruidenis@gmail.com'),
(35, '2020/11/25', '09:33:19pm', '6', 'Denis', 'denis@gmail.com'),
(36, '2020/11/26', '10:23:59am', '6', 'Denis', 'denis@gmail.com'),
(37, '2020/11/26', '10:33:07am', '6', 'Denis', 'denis@gmail.com'),
(38, '2020/11/26', '10:52:08am', '6', 'Denis', 'denis@gmail.com'),
(39, '2020/11/26', '10:53:02am', '6', 'Denis', 'denis@gmail.com'),
(40, '2020/11/26', '12:09:38pm', '6', 'Denis', 'denis@gmail.com'),
(41, '2020/11/27', '08:16:09am', '6', 'Denis', 'denis@gmail.com'),
(42, '2020/11/28', '09:55:38am', '7', 'Mary', 'mary@gmail.com'),
(43, '2020/11/28', '10:24:23am', '6', 'Denis', 'denis@gmail.com'),
(44, '2020/11/28', '12:06:32pm', '7', 'Mary', 'mary@gmail.com'),
(45, '2020/11/28', '12:40:51pm', '6', 'Denis', 'denis@gmail.com'),
(46, '2020/11/28', '01:06:52pm', '7', 'Mary', 'mary@gmail.com'),
(47, '2020/11/28', '03:47:29pm', '8', 'Naomy', 'naomy@gmail.com'),
(48, '2020/11/28', '03:47:30pm', '8', 'Naomy', 'naomy@gmail.com'),
(49, '2020/11/28', '04:01:05pm', '6', 'Denis', 'denis@gmail.com'),
(50, '2020/12/13', '08:38:38am', '6', 'Denis', 'denis@gmail.com'),
(51, '2021/01/09', '09:29:25am', '6', 'Denis', 'denis@gmail.com'),
(52, '2021/01/09', '09:42:12am', '6', 'Denis', 'denis@gmail.com'),
(53, '2021/01/09', '09:43:57am', '7', 'Mary', 'mary@gmail.com'),
(54, '2021/01/09', '10:02:30am', '1', 'Kikirui', 'kikiruidenis@gmail.com'),
(55, '2021/01/09', '10:10:50am', '6', 'Denis', 'denis@gmail.com'),
(56, '2021/01/09', '10:12:28am', '1', 'Kikirui', 'kikiruidenis@gmail.com'),
(57, '2021/01/26', '06:20:39pm', '6', 'Denis', 'denis@gmail.com'),
(58, '2021/01/26', '07:26:22pm', '6', 'Denis', 'denis@gmail.com'),
(59, '2021/01/28', '02:29:56pm', '6', 'Denis', 'denis@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `query`
--
ALTER TABLE `query`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usercheck`
--
ALTER TABLE `usercheck`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `query`
--
ALTER TABLE `query`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `usercheck`
--
ALTER TABLE `usercheck`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
