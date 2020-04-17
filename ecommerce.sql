-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 16, 2020 at 05:17 PM
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
-- Table structure for table `orderhistory`
--

CREATE TABLE `orderhistory` (
  `ID_orderHistory` int(11) NOT NULL,
  `event_date` datetime NOT NULL,
  `orders_id` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orderhistory`
--

INSERT INTO `orderhistory` (`ID_orderHistory`, `event_date`, `orders_id`) VALUES
(4, '2020-04-16 16:53:30', '7, 8');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `ID_orders` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `orders_orderDetails_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`ID_orders`, `user_id`, `orders_orderDetails_id`) VALUES
(7, 1, 9),
(8, 1, 10),
(10, 4, 12);

-- --------------------------------------------------------

--
-- Table structure for table `orders_orderdetails`
--

CREATE TABLE `orders_orderdetails` (
  `ID_order_orderDetails` int(11) NOT NULL,
  `product_ids` int(11) DEFAULT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orders_orderdetails`
--

INSERT INTO `orders_orderdetails` (`ID_order_orderDetails`, `product_ids`, `quantity`) VALUES
(9, 4, 4),
(10, 2, 2),
(12, 3, 3);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ecommerce`
--

CREATE TABLE `tbl_ecommerce` (
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
-- Dumping data for table `tbl_ecommerce`
--

INSERT INTO `tbl_ecommerce` (`id_products`, `product_name`, `price`, `image_name`, `short_description`, `long_description`, `category`, `inventory`) VALUES
(1, 'GPU 1', '100.00', '../images/gpu_1.jpg', 'GPU 1', 'This is a long description of GPU 1.', 'GPU', 100),
(2, 'GPU 2', '200.00', '../images/gpu_2.jpg', 'GPU 2', 'This is a long description of GPU 2.', 'GPU', 100),
(3, 'GPU 3', '300.00', '../images/gpu_3.jpg', 'GPU 3', 'This is a long description of GPU 3.', 'GPU', 100),
(4, 'GPU 4', '400.00', '../images/gpu_4.jpg', 'GPU 4', 'This is a long description of GPU 4.', 'GPU', 100),
(5, 'GPU 5', '500.00', '../images/gpu_5.jpg', 'GPU 5', 'This is a long description of GPU 5.', 'GPU', 500);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_roles`
--

CREATE TABLE `tbl_roles` (
  `id` int(11) NOT NULL,
  `role_type` varchar(45) DEFAULT NULL,
  `users_ID_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_roles`
--

INSERT INTO `tbl_roles` (`id`, `role_type`, `users_ID_user`) VALUES
(1, 'ADMIN', 1),
(2, 'ADMIN', 3);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID_user` int(11) NOT NULL,
  `FirstName` text NOT NULL,
  `LastName` text NOT NULL,
  `Email` text NOT NULL,
  `Username` text NOT NULL,
  `Password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID_user`, `FirstName`, `LastName`, `Email`, `Username`, `Password`) VALUES
(1, 'Derek', 'Lundy', 'derek@gmail.com', 'DereksUsername', 'DereksPassword'),
(3, 'Alex', 'Ralph', 'alexr@gmail.com', 'AlexsUsername', 'AlexsPassword'),
(4, 'Tammy', 'Ploegman', 'tammyp@gmail.com', 'TammysUsername', 'TammysPassword');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orderhistory`
--
ALTER TABLE `orderhistory`
  ADD PRIMARY KEY (`ID_orderHistory`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`ID_orders`),
  ADD KEY `user_id_idx` (`user_id`),
  ADD KEY `orderDetails_id_idx` (`orders_orderDetails_id`);

--
-- Indexes for table `orders_orderdetails`
--
ALTER TABLE `orders_orderdetails`
  ADD PRIMARY KEY (`ID_order_orderDetails`);

--
-- Indexes for table `tbl_ecommerce`
--
ALTER TABLE `tbl_ecommerce`
  ADD PRIMARY KEY (`id_products`);

--
-- Indexes for table `tbl_roles`
--
ALTER TABLE `tbl_roles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_tbl_roles_users_idx` (`users_ID_user`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orderhistory`
--
ALTER TABLE `orderhistory`
  MODIFY `ID_orderHistory` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `ID_orders` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `orders_orderdetails`
--
ALTER TABLE `orders_orderdetails`
  MODIFY `ID_order_orderDetails` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_ecommerce`
--
ALTER TABLE `tbl_ecommerce`
  MODIFY `id_products` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_roles`
--
ALTER TABLE `tbl_roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orderDetails_id` FOREIGN KEY (`orders_orderDetails_id`) REFERENCES `orders_orderdetails` (`ID_order_orderDetails`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `user_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`ID_user`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tbl_roles`
--
ALTER TABLE `tbl_roles`
  ADD CONSTRAINT `fk_tbl_roles_users` FOREIGN KEY (`users_ID_user`) REFERENCES `users` (`ID_user`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
