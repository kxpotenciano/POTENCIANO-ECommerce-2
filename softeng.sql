-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 24, 2021 at 04:43 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `softeng`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(1, 'Garena'),
(2, 'Genshin'),
(3, 'MobileLegends'),
(4, 'Valorant'),
(5, 'WildRift');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` bigint(50) UNSIGNED NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `product_price` decimal(15,2) UNSIGNED NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_image`, `product_price`, `product_name`, `category_id`) VALUES
(1, 'genesiscrystal', '49.00', '60 Genesis Crystals', 2),
(2, 'genesiscrystal', '249.00', '300 + 30 Genesis Crystals', 2),
(3, 'genesiscrystal', '749.00', '980 + 110 Genesis Crystals', 2),
(4, 'genesiscrystal', '1490.00', '1980 + 260 Genesis Crystals', 2),
(5, 'genesiscrystal', '2490.00', '3280 + 600 Genesis Crystals', 2),
(6, 'genesiscrystal', '4990.00', '6480 + 1600 Genesis Crystals', 2),
(7, 'welkin', '249.00', 'Blessing of the Welkin', 2),
(8, 'shells', '45.00', '50 Shells', 1),
(9, 'shells', '90.00', '100 Shells', 1),
(10, 'shells', '270.00', '300 Shells', 1),
(11, 'shells', '450.00', '500 Shells', 1),
(12, 'shells', '900.00', '1000 Shells', 1),
(13, 'mldias', '9.00', '10 Diamonds + 1', 3),
(14, 'mldias', '18.00', '20 Diamonds + 2', 3),
(15, 'mldias', '45.00', '51 Diamonds + 5', 3),
(16, 'mldias', '90.00', '102 Diamonds + 10', 3),
(17, 'mldias', '180.00', '203 Diamonds + 20', 3),
(18, 'mldias', '270.00', '303 Diamonds + 33', 3),
(19, 'mldias', '450.00', '504 Diamonds + 66', 3),
(20, 'mldias', '900.00', '1007 Diamonds + 156', 3),
(21, 'mldias', '1800.00', '2015 Diamonds + 383', 3),
(22, 'mldias', '4500.00', '5035 Diamonds + 1007', 3),
(23, 'valopoints', '45.00', '125 Valorant Points', 4),
(24, 'valopoints', '135.00', '380 Valorant Points', 4),
(25, 'valopoints', '270.00', '790 Valorant Points', 4),
(26, 'valopoints', '540.00', '1650 Valorant Points', 4),
(27, 'valopoints', '900.00', '2850 Valorant Points', 4),
(28, 'valopoints', '1800.00', '5800 Valorant Points', 4),
(29, 'valopoints', '3600.00', '12500 Valorant Points', 4),
(30, 'wildcore', '45.00', '125 Wild Cores', 5),
(31, 'wildcore', '135.00', '380 Wild Cores', 5),
(32, 'wildcore', '270.00', '790 Wild Cores', 5),
(33, 'wildcore', '540.00', '1650 Wild Cores', 5),
(34, 'wildcore', '900.00', '2850 Wild Cores', 5),
(35, 'wildcore', '1800.00', '5800 Wild Cores', 5),
(36, 'wildcore', '3600.00', '12500 Wild Cores', 5);

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `firstname` varchar(60) NOT NULL,
  `lastname` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`id`, `firstname`, `lastname`, `email`, `user_id`) VALUES
(1, 'test', 'test', 'test@gmail.com', 1),
(2, 'Nowel', 'Gatchalian', 'test@gmail.com', 2);

-- --------------------------------------------------------

--
-- Table structure for table `receipt`
--

CREATE TABLE `receipt` (
  `id` bigint(50) NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `mop` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(16) NOT NULL,
  `password` varchar(100) NOT NULL,
  `verification` bigint(20) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `verification`, `status`) VALUES
(1, 'test', '$2y$10$fCqJCgcCYe08KdkXsHyyB..ZrM9v4jxxg3Y1ldyNVZzxThWYGv2sK', 0, '0'),
(2, 'NowelGatchalian', '$2y$10$3uSCpInFbpbyAFlbDRCTZOacKDG8VxycludApS9aLh/8EL37qVx/W', 0, '0');

-- --------------------------------------------------------

--
-- Stand-in structure for view `user_data`
-- (See below for the actual view)
--
CREATE TABLE `user_data` (
`id` bigint(20) unsigned
,`username` varchar(16)
,`firstname` varchar(60)
,`lastname` varchar(60)
,`email` varchar(60)
);

-- --------------------------------------------------------

--
-- Structure for view `user_data`
--
DROP TABLE IF EXISTS `user_data`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `user_data`  AS SELECT `users`.`id` AS `id`, `users`.`username` AS `username`, `profile`.`firstname` AS `firstname`, `profile`.`lastname` AS `lastname`, `profile`.`email` AS `email` FROM (`users` join `profile` on(`users`.`id` = `profile`.`user_id`)) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `category_FK` (`category_id`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `receipt`
--
ALTER TABLE `receipt`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` bigint(50) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`);

--
-- Constraints for table `profile`
--
ALTER TABLE `profile`
  ADD CONSTRAINT `profile_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `profile_ibfk_3` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `receipt`
--
ALTER TABLE `receipt`
  ADD CONSTRAINT `receipt_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`),
  ADD CONSTRAINT `receipt_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
