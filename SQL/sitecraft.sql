-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 23, 2024 at 03:59 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sitecraft`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `profile_picture` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `email`, `password`, `profile_picture`, `created_at`, `deleted_at`) VALUES
(1, 'Admin5', 'admin5@gmail.com', '$2y$10$TAjsfwjJBxaSkVR9lX8g7.kmml.Bepf1xRK0SfqAONwfLgKw0s1Jm', 'profile-2.jpg', '2024-08-20 15:20:48', NULL),
(2, 'Admin1', 'admin@gmail.com', '$2y$10$nJOuOnyMB4uN7cpXwG53..rLmCZoPMxiYe8MPGBW2u8LNobE2GGAC', 'profile-1.jpg', '2024-08-20 16:04:52', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `session_id` varchar(255) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_price` decimal(10,2) NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL,
  `added_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_id`, `session_id`, `product_id`, `product_name`, `product_price`, `product_image`, `quantity`, `added_at`) VALUES
(9, 'jab32nut0b2sbqqt6gcm5bu9ju', 8, 'Lorem ipsum dolor sit amet', 15.75, 'images/instagram-img-08.jpg', 1, '2024-07-25 21:35:47');

-- --------------------------------------------------------

--
-- Table structure for table `contact_form`
--

CREATE TABLE `contact_form` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `submitted_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_form`
--

INSERT INTO `contact_form` (`id`, `name`, `email`, `subject`, `message`, `submitted_at`) VALUES
(1, 'Aqsa', 'aqsajamil973@gmail.com', 'SiteCraft', 'hey, can you give me the tutorial of this site', '2024-07-12 00:07:14'),
(2, 'Aqsa', 'aqsajamil973@gmail.com', 'SiteCraft', 'hey, can you give me the tutorial of this site', '2024-07-12 00:08:18');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `total_amount` decimal(10,2) NOT NULL,
  `payment_method` varchar(50) NOT NULL,
  `order_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `payment_status` varchar(20) DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `total_amount`, `payment_method`, `order_date`, `payment_status`) VALUES
(1, 1, 0.00, '', '2024-07-25 22:43:39', ''),
(116, 1, 62.83, 'cod', '2024-07-26 16:36:46', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`id`, `order_id`, `product_id`, `quantity`, `price`) VALUES
(1, 116, 8, 1, 15.75),
(2, 116, 9, 2, 7.75),
(3, 116, 4, 2, 15.79);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `image`) VALUES
(1, 'Lorem ipsum dolor sit amet', 7.79, 'images/img-pro-1.jpeg'),
(2, 'Lorem ipsum dolor sit amet', 9.79, 'images/img-pro-02.jpg'),
(3, 'Lorem ipsum dolor sit amet', 10.79, 'images/img-pro-3.jpeg'),
(4, 'Lorem ipsum dolor sit amet', 15.79, 'images/img-pro-4.jpeg'),
(5, 'Lorem ipsum dolor sit amet', 9.75, 'images/img-pro-1.jpg'),
(6, 'Lorem ipsum dolor sit amet', 12.75, 'images/instagram-img-07.jpg'),
(7, 'Lorem ipsum dolor sit amet', 11.75, 'images/gallery-img-04.jpg'),
(8, 'Lorem ipsum dolor sit amet', 15.75, 'images/instagram-img-08.jpg'),
(9, 'Lorem ipsum dolor sit amet', 7.75, 'images/banner-2.jpg'),
(11, 'Lorem ipsum dolor sit amet', 14.75, 'images/gallery-img-01.jpg'),
(12, 'Lorem ipsum dolor sit amet', 10.79, 'images/gallery-img-02.jpg'),
(13, 'Lorem ipsum dolor sit amet', 5.79, 'images/gallery-img-03.jpg'),
(14, 'Lorem ipsum dolor sit amet', 10.79, 'images/gallery-img-05.jpg'),
(15, 'Lorem ipsum dolor sit amet', 8.79, 'images/gallery-img-06.jpg'),
(16, 'Lorem ipsum dolor sit amet', 17.79, 'images/gallery-img-07.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `store`
--

CREATE TABLE `store` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `published` tinyint(1) NOT NULL,
  `created_by` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `store`
--

INSERT INTO `store` (`id`, `name`, `category`, `logo`, `published`, `created_by`) VALUES
(2, 'Daraz', 'E-commerce Electronics Shop', '../User_Uploads/b4b5d8e27e043419c1db168eba051bb9.png', 0, 1),
(3, 'Ubuntu', 'E-commerce Appliance Shop', '../User_Uploads/46c19e623f20a536789d5282291c8ff8.jpg', 0, 1),
(5, 'Stoe', 'E-commerce Clothing Store', '../User_Uploads/8932b87e623f98e68199ca41f43e525e.jpg', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `code` mediumint(255) NOT NULL,
  `Status` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `deleted_at` datetime(6) DEFAULT NULL,
  `Status_Update` enum('active','inactive') DEFAULT 'inactive'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `code`, `Status`, `created_at`, `deleted_at`, `Status_Update`) VALUES
(1, 'Zohaibkhalid_0', 'Killerzobi893@gmail.com', '$2y$10$eTOnNQEzdmOcQEfcs.b4YOn7/8CwHAEWS/PAe/HL7MfNWCZO23GQK', 0, '', '2024-07-01 15:28:01', NULL, 'inactive'),
(13, 'Aqsa', 'aqsajamil973@gmail.com', '$2y$10$JC11by2Toh3RH65hXXJW8efOyBIB37Io0Kzleh6MDPB0b1BXFRDfG', 720849, 'verified', '2024-07-30 14:58:04', NULL, 'inactive');

-- --------------------------------------------------------

--
-- Table structure for table `usertable`
--

CREATE TABLE `usertable` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `code` mediumint(50) NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `contact_form`
--
ALTER TABLE `contact_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_id` (`order_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `store`
--
ALTER TABLE `store`
  ADD PRIMARY KEY (`id`),
  ADD KEY `created_by` (`created_by`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usertable`
--
ALTER TABLE `usertable`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `contact_form`
--
ALTER TABLE `contact_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=117;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `usertable`
--
ALTER TABLE `usertable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `order_details`
--
ALTER TABLE `order_details`
  ADD CONSTRAINT `order_details_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`);

--
-- Constraints for table `store`
--
ALTER TABLE `store`
  ADD CONSTRAINT `store_ibfk_1` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
