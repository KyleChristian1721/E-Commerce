-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 30, 2022 at 03:22 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `user_id`, `product_id`, `quantity`) VALUES
(1, 9, 1, 4),
(3, 9, 4, 6),
(4, 9, 12, 2),
(7, 16, 29, 1),
(9, 17, 30, 1),
(11, 18, 30, 1);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `cat_slug` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `cat_slug`) VALUES
(4, 'Products', '');

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE `details` (
  `id` int(11) NOT NULL,
  `sales_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`id`, `sales_id`, `product_id`, `quantity`) VALUES
(21, 11, 29, 1);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `name` text NOT NULL,
  `description` text NOT NULL,
  `slug` varchar(200) NOT NULL,
  `price` double NOT NULL,
  `photo` varchar(200) NOT NULL,
  `date_view` date NOT NULL,
  `counter` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `name`, `description`, `slug`, `price`, `photo`, `date_view`, `counter`) VALUES
(28, 4, 'GrayOff Treatment Buy 2 50% Off Promo', '<p><strong>Regular Price:</strong> <s>P&nbsp;6,380.00</s></p>\r\n\r\n<p><strong>Discount Price: </strong>P&nbsp;3,190.00</p>\r\n\r\n<p>GrayOFF&nbsp;is the anti-gray hair treatment that brings back color to your hair without using artificial colour pigments. The revolutionary technology of&nbsp;GrayOFF&nbsp;is able to boost the natural pigment production while protecting from future depigmentation.&nbsp;GrayOFF&nbsp;provides excellent results for both men and women.</p>\r\n', 'grayoff-treatment-buy-2-50-promo', 3190, 'grayoff-treatment-buy-2-50-promo_1643428052.png', '2022-01-29', 2),
(29, 4, 'GrayOff Treatment Buy 3 50% Off Promo', '<p><strong>Regular Price:</strong> <s>P&nbsp;8,980.00</s></p>\r\n\r\n<p><strong>Discount Price:</strong> P&nbsp;4,490.00</p>\r\n\r\n<p>GrayOFF&nbsp;is the anti-gray hair treatment that brings back color to your hair without using artificial colour pigments. The revolutionary technology of&nbsp;GrayOFF&nbsp;is able to boost the natural pigment production while protecting from future depigmentation.&nbsp;GrayOFF&nbsp;provides excellent results for both men and women.</p>\r\n', 'grayoff-treatment-buy-3-50-promo', 4490, 'grayoff-treatment-buy-3-50-promo_1643428061.png', '2022-01-29', 8),
(30, 4, 'GrayOff Treatment 50% Off Promo', '<p><strong>Regular Price:</strong> <s>P&nbsp;3,980.00</s></p>\r\n\r\n<p><strong>Discount Price:</strong> P&nbsp;1,990.00</p>\r\n\r\n<p>GrayOFF&nbsp;is the anti-gray hair treatment that brings back color to your hair without using artificial colour pigments. The revolutionary technology of&nbsp;GrayOFF&nbsp;is able to boost the natural pigment production while protecting from future depigmentation.&nbsp;GrayOFF&nbsp;provides excellent results for both men and women.</p>\r\n', 'grayoff-treatment-50-promo', 1990, 'grayoff-treatment-50-promo_1643428039.png', '2022-01-29', 5);

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `pay_id` varchar(50) NOT NULL,
  `sales_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`id`, `user_id`, `pay_id`, `sales_date`) VALUES
(11, 18, 'PAYID-MH2T3PY93X88930CJ535334R', '2022-01-29');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(60) NOT NULL,
  `type` int(1) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `contact_info` varchar(100) NOT NULL,
  `photo` varchar(200) NOT NULL,
  `status` int(1) NOT NULL,
  `activate_code` varchar(15) NOT NULL,
  `reset_code` varchar(15) NOT NULL,
  `created_on` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `type`, `firstname`, `lastname`, `address`, `contact_info`, `photo`, `status`, `activate_code`, `reset_code`, `created_on`) VALUES
(1, 'admin@grayoff.com', '$2y$10$kagAtJiWUF68H31GinjbgeQJ7WSwT0BRs0bjwEnLPyFzL1KjYEC8m', 1, 'Kyle ', 'De Castro', '', '', '', 1, '', '', '2022-01-01'),
(18, 'xogiji3129@peykesabz.com', '$2y$10$2zd6g9.8haqVisTr0zDMv.u.NCOUq97fg5959UuddWZgJgzkVO0XW', 0, 'Natasha', 'Dela Cruz', '123 Street City', '+639955954943', '', 1, 'fr4gOCNQRp97', '', '2022-01-29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `details`
--
ALTER TABLE `details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
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
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `details`
--
ALTER TABLE `details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
