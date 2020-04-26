-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 25, 2020 at 10:01 PM
-- Server version: 5.7.23
-- PHP Version: 7.1.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `coupons`
--

CREATE TABLE `coupons` (
  `id_coupons` int(11) NOT NULL,
  `deal` int(11) NOT NULL,
  `code` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `coupons`
--

INSERT INTO `coupons` (`id_coupons`, `deal`, `code`) VALUES
(1, 999999, 123),
(2, 1000, 1234),
(3, 1234567, 12345),
(4, 888888, 123456),
(5, 60000, 420),
(6, 999999, 88),
(7, 1000, 1337),
(8, 10000, 1338);

-- --------------------------------------------------------

--
-- Table structure for table `coupons_unused`
--

CREATE TABLE `coupons_unused` (
  `id_coupons_unused` int(11) NOT NULL,
  `coupons_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `coupons_unused`
--

INSERT INTO `coupons_unused` (`id_coupons_unused`, `coupons_id`) VALUES
(1, 6);

-- --------------------------------------------------------

--
-- Table structure for table `orderhistory`
--

CREATE TABLE `orderhistory` (
  `id_orderhistory` int(11) NOT NULL,
  `event_date` date NOT NULL,
  `orders_ids` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orderhistory`
--

INSERT INTO `orderhistory` (`id_orderhistory`, `event_date`, `orders_ids`) VALUES
(4, '2020-04-16', '7, 8'),
(5, '2020-04-17', '7, 8, 11, 12, 13, 14'),
(6, '2020-04-25', '1, 2'),
(7, '2020-04-25', '1, 2'),
(8, '2020-04-25', '1, 2'),
(9, '2020-04-25', '1, 2'),
(10, '2020-04-25', '1, 2'),
(11, '2020-04-25', '1, 2'),
(12, '2020-04-25', '1, 2'),
(13, '2020-04-25', '1, 2'),
(14, '2020-04-25', '1, 2'),
(15, '2020-04-25', '1, 2, 3'),
(16, '2020-04-25', '1, 2, 3');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id_orders` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `orders_orderdetails_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id_orders`, `user_id`, `orders_orderdetails_id`) VALUES
(1, 1, 3),
(2, 1, 6),
(3, 1, 7);

-- --------------------------------------------------------

--
-- Table structure for table `orders_orderdetails`
--

CREATE TABLE `orders_orderdetails` (
  `id_orders_orderdetails` int(11) NOT NULL,
  `products_id` int(11) DEFAULT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orders_orderdetails`
--

INSERT INTO `orders_orderdetails` (`id_orders_orderdetails`, `products_id`, `quantity`) VALUES
(1, 2, 2),
(2, 2, 4),
(3, 2, 500),
(4, 2, 500),
(5, 2, 420),
(6, 4, 420),
(7, 1, 3000);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id_products` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `image_name` varchar(100) NOT NULL,
  `short_description` varchar(100) NOT NULL,
  `long_description` text NOT NULL,
  `category` varchar(100) NOT NULL,
  `inventory` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id_products`, `product_name`, `price`, `image_name`, `short_description`, `long_description`, `category`, `inventory`) VALUES
(1, 'GPU 1', '100.00', '../images/gpu_1.jpg', 'GPU 1', 'This is a long description of GPU 1.', 'GPU', 100),
(2, 'GPU 2', '200.00', '../images/gpu_2.jpg', 'GPU 2', 'This is a long description of GPU 2.', 'GPU', 100),
(3, 'GPU 3', '300.00', '../images/gpu_3.jpg', 'GPU 3', 'This is a long description of GPU 3.', 'GPU', 100),
(4, 'GPU 4', '400.00', '../images/gpu_4.jpg', 'GPU 4', 'This is a long description of GPU 4.', 'GPU', 100),
(5, 'GPU 5', '500.00', '../images/gpu_5.jpg', 'GPU 5', 'This is a long description of GPU 5.', 'GPU', 100),
(6, 'GPU 6', '600.00', '../images/gpu_6.jpg', 'GPU 6', 'This is a long description of GPU 6.', 'GPU', 100);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_roles`
--

CREATE TABLE `tbl_roles` (
  `id` int(11) NOT NULL,
  `role_type` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_roles`
--

INSERT INTO `tbl_roles` (`id`, `role_type`) VALUES
(0, 'NULL'),
(1, 'ADMIN');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `FirstName` text NOT NULL,
  `LastName` text NOT NULL,
  `Email` text NOT NULL,
  `Username` text NOT NULL,
  `Password` text NOT NULL,
  `Role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `FirstName`, `LastName`, `Email`, `Username`, `Password`, `Role`) VALUES
(1, 'Derek', 'Lundy', 'derek@gmail.com', 'DereksUsername', 'DereksPassword', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `coupons`
--
ALTER TABLE `coupons`
  ADD PRIMARY KEY (`id_coupons`);

--
-- Indexes for table `coupons_unused`
--
ALTER TABLE `coupons_unused`
  ADD PRIMARY KEY (`id_coupons_unused`),
  ADD KEY `couponKey_idx` (`coupons_id`);

--
-- Indexes for table `orderhistory`
--
ALTER TABLE `orderhistory`
  ADD PRIMARY KEY (`id_orderhistory`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id_orders`),
  ADD KEY `user_id_idx` (`user_id`),
  ADD KEY `orders_id_idx` (`orders_orderdetails_id`);

--
-- Indexes for table `orders_orderdetails`
--
ALTER TABLE `orders_orderdetails`
  ADD PRIMARY KEY (`id_orders_orderdetails`),
  ADD KEY `productKey_idx` (`products_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id_products`);

--
-- Indexes for table `tbl_roles`
--
ALTER TABLE `tbl_roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `roleKY_idx` (`Role`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `coupons`
--
ALTER TABLE `coupons`
  MODIFY `id_coupons` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `coupons_unused`
--
ALTER TABLE `coupons_unused`
  MODIFY `id_coupons_unused` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `orderhistory`
--
ALTER TABLE `orderhistory`
  MODIFY `id_orderhistory` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id_orders` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `orders_orderdetails`
--
ALTER TABLE `orders_orderdetails`
  MODIFY `id_orders_orderdetails` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id_products` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_roles`
--
ALTER TABLE `tbl_roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `coupons_unused`
--
ALTER TABLE `coupons_unused`
  ADD CONSTRAINT `couponKey` FOREIGN KEY (`coupons_id`) REFERENCES `coupons` (`id_coupons`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orderdetailsKey` FOREIGN KEY (`orders_orderdetails_id`) REFERENCES `orders_orderdetails` (`id_orders_orderdetails`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `user_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`id_user`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `orders_orderdetails`
--
ALTER TABLE `orders_orderdetails`
  ADD CONSTRAINT `productKey` FOREIGN KEY (`products_id`) REFERENCES `products` (`id_products`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `rolekey` FOREIGN KEY (`Role`) REFERENCES `tbl_roles` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
