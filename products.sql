-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 25, 2021 at 09:04 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `products`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart_quantity`
--

CREATE TABLE `cart_quantity` (
  `product_name` varchar(50) CHARACTER SET utf8 NOT NULL,
  `product_quantity` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart_quantity`
--

INSERT INTO `cart_quantity` (`product_name`, `product_quantity`) VALUES
('jeans', 5),
('laptop', 20);

-- --------------------------------------------------------

--
-- Table structure for table `cart_table`
--

CREATE TABLE `cart_table` (
  `product_id` int(4) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `product_price` decimal(8,2) NOT NULL,
  `product_color` varchar(50) NOT NULL,
  `product_size` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart_table`
--

INSERT INTO `cart_table` (`product_id`, `product_name`, `product_price`, `product_color`, `product_size`) VALUES
(2, 'Jeans', '550.00', 'Blue', '34'),
(4, 'Laptop', '60000.00', 'BLACK', '15');

-- --------------------------------------------------------

--
-- Table structure for table `login_history`
--

CREATE TABLE `login_history` (
  `login_id` int(10) NOT NULL,
  `login_time` varchar(255) NOT NULL,
  `login_device` varchar(255) NOT NULL,
  `login_location` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login_history`
--

INSERT INTO `login_history` (`login_id`, `login_time`, `login_device`, `login_location`) VALUES
(8, '2021-10-25 12:49:35', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:93.0) Gecko/20100101 Firefox/93.0', 'Dhaka Bangladesh 1206'),
(9, '2021-10-25 12:51:42', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:93.0) Gecko/20100101 Firefox/93.0', 'Dhaka Bangladesh 1206'),
(10, '2021-10-25 12:58:50', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:93.0) Gecko/20100101 Firefox/93.0', 'Dhaka Bangladesh 1206'),
(11, '2021-10-25 13:00:31', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:93.0) Gecko/20100101 Firefox/93.0', 'Dhaka Bangladesh 1206');

-- --------------------------------------------------------

--
-- Table structure for table `products_table`
--

CREATE TABLE `products_table` (
  `product_id` int(4) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `product_price` varchar(10) NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `product_color` varchar(50) NOT NULL,
  `product_size` varchar(50) NOT NULL,
  `product_description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products_table`
--

INSERT INTO `products_table` (`product_id`, `product_name`, `product_price`, `product_image`, `product_color`, `product_size`, `product_description`) VALUES
(1, 'Pant', '1000', 'shop.png', 'Green', '34', 'This is a pant'),
(3, 'Shoes', '1500', 'shoes.jpg', 'Black', '8', 'This is a pair of Shoe'),
(4, 'Laptop', '60000', 'reward.png', 'BLACK', '18', 'This is a extra updated laptop');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login_history`
--
ALTER TABLE `login_history`
  ADD PRIMARY KEY (`login_id`);

--
-- Indexes for table `products_table`
--
ALTER TABLE `products_table`
  ADD PRIMARY KEY (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login_history`
--
ALTER TABLE `login_history`
  MODIFY `login_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `products_table`
--
ALTER TABLE `products_table`
  MODIFY `product_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
