-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 27, 2024 at 05:04 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `univercity`
--

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE `answers` (
  `id` int(11) NOT NULL,
  `quetions_id` varchar(10) NOT NULL,
  `status` varchar(10) NOT NULL,
  `quetions_details_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `available_options_values`
--

CREATE TABLE `available_options_values` (
  `id` int(11) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `available_options_values`
--

INSERT INTO `available_options_values` (`id`, `description`) VALUES
(6, '12'),
(7, '11'),
(8, '12.50'),
(9, '11.50'),
(10, 'ONE NUMBER IS 1.4 AND THE OTHER NUMBER IS 5.4'),
(11, 'ONE NUMBER IS 2.5 AND THE OTHER NUMBER IS 5'),
(12, 'ONE NUMBER IS 1.5 AND THE OTHER NUMBER IS 5.5'),
(13, 'ONE NUMBER IS  5 AND THE OTHER NUMBER IS 5.5'),
(14, 'Mumbai'),
(15, 'Delhi'),
(16, 'Maharashtra'),
(17, 'Kashmir'),
(18, '455'),
(19, '460'),
(20, '485'),
(21, '480'),
(22, '25'),
(23, '24'),
(24, '26'),
(25, '23'),
(26, '2.91 m'),
(27, '3 m'),
(28, '5.82 m'),
(29, 'None of these'),
(30, '48'),
(31, '46'),
(32, '45'),
(33, '42'),
(34, '72'),
(35, '75'),
(36, '70'),
(37, '80'),
(38, '38'),
(39, '40'),
(40, '35'),
(41, '36'),
(42, 'Wednesday'),
(43, 'Saturday'),
(44, 'Tuesday'),
(45, 'Thursday'),
(46, '26.32'),
(47, '3,131.25'),
(48, '3,201.25'),
(49, '3,01.25');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` int(11) NOT NULL,
  `department_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `department_name`) VALUES
(1, 'Information Technology'),
(2, 'Mechanicals'),
(3, 'Civil'),
(4, 'Electronics'),
(5, 'Knowledge');

-- --------------------------------------------------------

--
-- Table structure for table `library`
--

CREATE TABLE `library` (
  `id` int(11) NOT NULL,
  `departments_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `order_no` varchar(255) NOT NULL,
  `customers_id` int(11) DEFAULT NULL,
  `warehouses_id` int(11) NOT NULL,
  `products_id` int(11) NOT NULL,
  `type` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `order_no`, `customers_id`, `warehouses_id`, `products_id`, `type`) VALUES
(1, 'test123', 1, 2, 1, 'Inward'),
(2, 'ord2324_1', 2, 4, 2, 'Outward'),
(3, 'oreder1234', 2, 2, 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `orders_details`
--

CREATE TABLE `orders_details` (
  `id` int(11) NOT NULL,
  `type` int(11) DEFAULT NULL COMMENT '1-In,2-Out',
  `orders_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders_details`
--

INSERT INTO `orders_details` (`id`, `type`, `orders_id`) VALUES
(1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_code` varchar(255) NOT NULL,
  `warehouse_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_name`, `product_code`, `warehouse_id`) VALUES
(1, 'pen drive', 'php12', 1),
(2, 'charger', 'ch123', 2),
(3, 'charger', 'ch123', 3),
(4, 'laptop', 'ch123', 3),
(5, 'bottle', 'b123', 3),
(6, 'mouse', 'm123', 3);

-- --------------------------------------------------------

--
-- Table structure for table `quetions`
--

CREATE TABLE `quetions` (
  `id` int(11) NOT NULL,
  `tittle` text NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `quetions`
--

INSERT INTO `quetions` (`id`, `tittle`, `status`) VALUES
(2, '(6 ÷ 3) * (5 + 1) ', 1),
(3, 'You have two numbers, and their sum is 7. One of the numbers is three times the other. What are the two numbers?', 1),
(4, 'what is capital of india ?', 1),
(5, '60 Times of 8 Equals to', 1),
(6, 'If you travel at maximum speed of 6 mph upstream with a river current of 2 mph, how far will it travel in 6 hours?', 1),
(7, 'A rectangular park 60 m long and 40 m wide has two concrete crossroads running in the middle of the park and rest of the park has been used as a lawn. If the area of the lawn is 2109 sq. m, then what is the width of the road?', 1),
(8, 'If 30% of a certain number is 12.6, what is the number?', 1),
(9, 'Complete the series 2, 5, 9, 19, 37.......', 1),
(10, 'What is the average of first five multiples of 12?', 1),
(11, 'Today is Monday. After 61 days, it will be:', 1);

-- --------------------------------------------------------

--
-- Table structure for table `quetions_details`
--

CREATE TABLE `quetions_details` (
  `id` int(11) NOT NULL,
  `quetions_id` int(11) NOT NULL,
  `answers_options_key` varchar(10) NOT NULL,
  `available_options_values_id` text NOT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp(),
  `modified` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `quetions_details`
--

INSERT INTO `quetions_details` (`id`, `quetions_id`, `answers_options_key`, `available_options_values_id`, `created`, `modified`) VALUES
(114, 2, 'a', '6', '2024-04-01 22:54:21', '2024-04-02 11:42:49'),
(115, 2, 'b', '8', '2024-04-01 22:54:21', '2024-04-02 11:42:49'),
(116, 2, 'c', '10', '2024-04-01 22:54:21', '2024-04-16 18:47:19'),
(117, 2, 'd', '9', '2024-04-01 22:54:21', '2024-04-02 11:42:49'),
(118, 3, 'a', '10', '2024-04-01 22:54:21', '2024-04-02 11:46:39'),
(119, 3, 'b', '11', '2024-04-01 22:54:21', '2024-04-02 11:46:39'),
(120, 3, 'c', '12', '2024-04-01 22:54:21', '2024-04-02 11:46:39'),
(121, 3, 'd', '13', '2024-04-01 22:54:21', '2024-04-02 11:46:39'),
(122, 4, 'a', '14', '2024-04-01 22:54:21', '2024-04-02 15:14:45'),
(123, 4, 'b', '15', '2024-04-01 22:54:21', '2024-04-02 15:14:45'),
(124, 4, 'c', '16', '2024-04-01 22:54:21', '2024-04-02 15:14:45'),
(125, 4, 'd', '17', '2024-04-01 22:54:21', '2024-04-02 15:14:45'),
(126, 5, 'a', '18', '2024-04-01 22:54:21', '2024-04-02 15:43:25'),
(127, 5, 'b', '19', '2024-04-01 22:54:21', '2024-04-02 15:43:25'),
(128, 5, 'c', '20', '2024-04-01 22:54:21', '2024-04-02 15:43:25'),
(129, 5, 'd', '21', '2024-04-01 22:54:21', '2024-04-02 15:43:25'),
(130, 6, 'a', '22', '2024-04-01 22:54:21', '2024-04-02 15:43:25'),
(131, 6, 'b', '23', '2024-04-01 22:54:21', '2024-04-02 15:43:25'),
(132, 6, 'c', '24', '2024-04-01 22:54:21', '2024-04-02 15:43:25'),
(133, 6, 'd', '25', '2024-04-01 22:54:21', '2024-04-02 15:43:25'),
(134, 7, 'a', '26', '2024-04-01 22:54:21', '2024-04-02 16:43:15'),
(135, 7, 'b', '27', '2024-04-01 22:54:21', '2024-04-02 16:56:58'),
(136, 7, 'c', '28', '2024-04-01 22:54:21', '2024-04-02 16:43:15'),
(137, 7, 'd', '29', '2024-04-01 22:54:21', '2024-04-02 16:43:15'),
(138, 8, 'a', '30', '2024-04-01 22:54:21', '2024-04-02 17:07:40'),
(139, 8, 'b', '31', '2024-04-01 22:54:21', '2024-04-02 17:07:40'),
(140, 8, 'c', '32', '2024-04-01 22:54:21', '2024-04-02 17:07:40'),
(141, 8, 'd', '33', '2024-04-01 22:54:21', '2024-04-02 17:07:40'),
(142, 9, 'a', '34', '2024-04-01 22:54:21', '2024-04-02 17:44:33'),
(143, 9, 'b', '35', '2024-04-01 22:54:21', '2024-04-02 17:44:33'),
(144, 9, 'c', '36', '2024-04-01 22:54:21', '2024-04-02 17:44:33'),
(145, 9, 'd', '37', '2024-04-01 22:54:21', '2024-04-02 17:44:33'),
(146, 10, 'a', '38', '2024-04-01 22:54:21', '2024-04-02 17:49:35'),
(147, 10, 'b', '39', '2024-04-01 22:54:21', '2024-04-02 17:49:35'),
(148, 10, 'c', '40', '2024-04-01 22:54:21', '2024-04-02 17:49:35'),
(149, 10, 'd', '41', '2024-04-01 22:54:21', '2024-04-02 17:49:35'),
(150, 11, 'a', '42', '2024-04-01 22:54:21', '2024-04-03 17:31:31'),
(151, 11, 'b', '43', '2024-04-01 22:54:21', '2024-04-03 17:31:31'),
(152, 11, 'c', '44', '2024-04-01 22:54:21', '2024-04-03 17:31:31'),
(153, 11, 'd', '45', '2024-04-01 22:54:21', '2024-04-16 19:53:35');

-- --------------------------------------------------------

--
-- Table structure for table `quizs`
--

CREATE TABLE `quizs` (
  `id` int(11) NOT NULL,
  `quiz_name` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `departments_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `quizs`
--

INSERT INTO `quizs` (`id`, `quiz_name`, `status`, `departments_id`) VALUES
(1, 'mathematics', 1, 5);

-- --------------------------------------------------------

--
-- Table structure for table `slots`
--

CREATE TABLE `slots` (
  `id` int(11) NOT NULL,
  `slots_name` varchar(255) NOT NULL,
  `start_time` datetime NOT NULL,
  `end_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `slots`
--

INSERT INTO `slots` (`id`, `slots_name`, `start_time`, `end_time`) VALUES
(1, 'evening first', '2023-10-18 18:00:00', '2023-10-19 19:00:00'),
(2, 'morning shift', '2023-10-20 10:00:00', '2023-10-20 11:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tests`
--

CREATE TABLE `tests` (
  `id` int(11) NOT NULL,
  `test_name` varchar(255) NOT NULL,
  `slots_id` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `quizs_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tests`
--

INSERT INTO `tests` (`id`, `test_name`, `slots_id`, `status`, `quizs_id`) VALUES
(1, 'math junior ', 1, 1, 1),
(2, 'math advance', 2, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tests_details`
--

CREATE TABLE `tests_details` (
  `id` int(11) NOT NULL,
  `quetions_id` int(11) NOT NULL,
  `tests_id` int(11) NOT NULL,
  `available_options_values_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tests_details`
--

INSERT INTO `tests_details` (`id`, `quetions_id`, `tests_id`, `available_options_values_id`) VALUES
(2, 2, 1, 6),
(11, 3, 1, 12),
(12, 4, 1, 15),
(13, 5, 1, 21),
(14, 6, 1, 23),
(15, 7, 1, 27),
(16, 8, 1, 33),
(17, 9, 1, 35),
(18, 10, 1, 41),
(19, 11, 1, 43),
(20, 15, 1, 47);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `available_options_values`
--
ALTER TABLE `available_options_values`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `description` (`description`) USING HASH;

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `library`
--
ALTER TABLE `library`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders_details`
--
ALTER TABLE `orders_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quetions`
--
ALTER TABLE `quetions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quetions_details`
--
ALTER TABLE `quetions_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quizs`
--
ALTER TABLE `quizs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slots`
--
ALTER TABLE `slots`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tests`
--
ALTER TABLE `tests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tests_details`
--
ALTER TABLE `tests_details`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answers`
--
ALTER TABLE `answers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `available_options_values`
--
ALTER TABLE `available_options_values`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `library`
--
ALTER TABLE `library`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `orders_details`
--
ALTER TABLE `orders_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `quetions`
--
ALTER TABLE `quetions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `quetions_details`
--
ALTER TABLE `quetions_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=171;

--
-- AUTO_INCREMENT for table `quizs`
--
ALTER TABLE `quizs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `slots`
--
ALTER TABLE `slots`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tests`
--
ALTER TABLE `tests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tests_details`
--
ALTER TABLE `tests_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
