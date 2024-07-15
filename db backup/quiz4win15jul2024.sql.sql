-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2024 at 09:59 AM
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
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `acl_phinxlog`
--

CREATE TABLE `acl_phinxlog` (
  `version` bigint(20) NOT NULL,
  `migration_name` varchar(100) DEFAULT NULL,
  `start_time` timestamp NULL DEFAULT NULL,
  `end_time` timestamp NULL DEFAULT NULL,
  `breakpoint` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `acl_phinxlog`
--

INSERT INTO `acl_phinxlog` (`version`, `migration_name`, `start_time`, `end_time`, `breakpoint`) VALUES
(20141229162641, 'CakePhpDbAcl', '2024-07-09 12:35:16', '2024-07-09 12:35:16', 0);

-- --------------------------------------------------------

--
-- Table structure for table `acos`
--

CREATE TABLE `acos` (
  `id` int(11) NOT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `model` varchar(255) DEFAULT NULL,
  `foreign_key` int(11) DEFAULT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `lft` int(11) DEFAULT NULL,
  `rght` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `aros`
--

CREATE TABLE `aros` (
  `id` int(11) NOT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `model` varchar(255) DEFAULT NULL,
  `foreign_key` int(11) DEFAULT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `lft` int(11) DEFAULT NULL,
  `rght` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `aros_acos`
--

CREATE TABLE `aros_acos` (
  `id` int(11) NOT NULL,
  `aro_id` int(11) NOT NULL,
  `aco_id` int(11) NOT NULL,
  `_create` varchar(2) NOT NULL DEFAULT '0',
  `_read` varchar(2) NOT NULL DEFAULT '0',
  `_update` varchar(2) NOT NULL DEFAULT '0',
  `_delete` varchar(2) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(49, '3,01.25'),
(50, '13'),
(51, '12'),
(52, '10'),
(53, '11');

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
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

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
-- Table structure for table `phinxlog`
--

CREATE TABLE `phinxlog` (
  `version` bigint(20) NOT NULL,
  `migration_name` varchar(100) DEFAULT NULL,
  `start_time` timestamp NULL DEFAULT NULL,
  `end_time` timestamp NULL DEFAULT NULL,
  `breakpoint` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `phinxlog`
--

INSERT INTO `phinxlog` (`version`, `migration_name`, `start_time`, `end_time`, `breakpoint`) VALUES
(20231025092955, 'CreateQuetionsDetail', '2023-10-25 04:16:18', '2023-10-25 04:16:18', 0),
(20240613113136, 'CreateUsers', '2024-06-13 06:02:13', '2024-06-13 06:02:13', 0);

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
(11, 'Today is Monday. After 61 days, it will be:', 1),
(16, 'A is two years older than B who is twice as old as C. If the total of the ages of A, B and C be 27, then how old is B?', 1);

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
(153, 11, 'd', '45', '2024-04-01 22:54:21', '2024-04-16 19:53:35'),
(171, 16, 'a', '50', '2024-07-01 10:59:19', '2024-07-01 11:06:32'),
(172, 16, 'b', '52', '2024-07-01 10:59:19', '2024-07-01 11:06:32'),
(173, 16, 'c', '51', '2024-07-01 10:59:19', '2024-07-01 11:06:32'),
(174, 16, 'd', '53', '2024-07-01 10:59:19', '2024-07-01 11:06:32');

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
  `quizs_id` int(11) NOT NULL,
  `date_start_from` datetime DEFAULT NULL,
  `date_valid_till` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tests`
--

INSERT INTO `tests` (`id`, `test_name`, `slots_id`, `status`, `quizs_id`, `date_start_from`, `date_valid_till`) VALUES
(1, 'math junior ', 1, 1, 1, '2024-07-19 00:00:00', '2024-07-19 00:10:00'),
(2, 'math advance', 2, 1, 1, '2024-07-20 15:00:00', '2024-07-20 15:10:00');

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
(20, 15, 1, 47),
(21, 16, 1, 52);

-- --------------------------------------------------------

--
-- Table structure for table `tests_results`
--

CREATE TABLE `tests_results` (
  `id` int(11) NOT NULL,
  `users_id` int(11) NOT NULL,
  `tests_id` int(11) NOT NULL,
  `comparisons` text DEFAULT NULL,
  `score` int(11) NOT NULL,
  `status` int(11) DEFAULT NULL,
  `time_taken` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tests_results`
--

INSERT INTO `tests_results` (`id`, `users_id`, `tests_id`, `comparisons`, `score`, `status`, `time_taken`) VALUES
(1, 1, 1, '{\"2\":{\"selected\":\"10\"},\"3\":{\"selected\":\"10\"},\"4\":{\"selected\":\"\"},\"5\":{\"selected\":\"\"},\"6\":{\"selected\":\"24\"},\"7\":{\"selected\":\"\"},\"8\":{\"selected\":\"33\"},\"9\":{\"selected\":\"\"},\"10\":{\"selected\":\"\"},\"11\":{\"selected\":\"45\"},\"16\":{\"selected\":\"52\"}}', 2, 0, 500),
(2, 1, 2, '{\"2\":{\"selected\":\"10\"},\"3\":{\"selected\":\"10\"},\"4\":{\"selected\":\"\"},\"5\":{\"selected\":\"\"},\"6\":{\"selected\":\"24\"},\"7\":{\"selected\":\"\"},\"8\":{\"selected\":\"33\"},\"9\":{\"selected\":\"\"},\"10\":{\"selected\":\"\"},\"11\":{\"selected\":\"45\"},\"16\":{\"selected\":\"52\"}}', 4, 2, 420),
(3, 2, 2, '{\"2\":{\"selected\":\"10\"},\"3\":{\"selected\":\"10\"},\"4\":{\"selected\":\"\"},\"5\":{\"selected\":\"\"},\"6\":{\"selected\":\"24\"},\"7\":{\"selected\":\"\"},\"8\":{\"selected\":\"33\"},\"9\":{\"selected\":\"\"},\"10\":{\"selected\":\"\"},\"11\":{\"selected\":\"45\"},\"16\":{\"selected\":\"52\"}}', 4, 1, 153),
(4, 3, 1, '{\"2\":{\"selected\":\"10\"},\"3\":{\"selected\":\"10\"},\"4\":{\"selected\":\"\"},\"5\":{\"selected\":\"\"},\"6\":{\"selected\":\"24\"},\"7\":{\"selected\":\"\"},\"8\":{\"selected\":\"33\"},\"9\":{\"selected\":\"\"},\"10\":{\"selected\":\"\"},\"11\":{\"selected\":\"45\"},\"16\":{\"selected\":\"52\"}}', 5, 1, 513),
(5, 7, 1, '{\"2\":{\"selected\":\"8\"},\"3\":{\"selected\":\"12\"},\"4\":{\"selected\":\"14\"},\"5\":{\"selected\":\"20\"},\"6\":{\"selected\":\"22\"},\"7\":{\"selected\":\"26\"},\"8\":{\"selected\":\"30\"},\"9\":{\"selected\":\"35\"},\"10\":{\"selected\":\"39\"},\"11\":{\"selected\":\"44\"},\"16\":{\"selected\":\"51\"}}', 2, 1, 564),
(6, 8, 1, '{\"2\":{\"selected\":\"6\"},\"3\":{\"selected\":\"12\"},\"4\":{\"selected\":\"15\"},\"5\":{\"selected\":\"21\"},\"6\":{\"selected\":\"23\"},\"7\":{\"selected\":\"26\"},\"8\":{\"selected\":\"33\"},\"9\":{\"selected\":\"35\"},\"10\":{\"selected\":\"41\"},\"11\":{\"selected\":\"45\"},\"16\":{\"selected\":\"51\"}}', 8, 1, 315);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `profile_icon_name` varchar(500) DEFAULT NULL,
  `group_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `profile_icon_name`, `group_id`) VALUES
(1, 'monster', '$2y$10$5yaG2U/r0d.4PGuCuUlpdOwaG3gaBT/ZUwTbaO1cmLKv2LGSX5ww6', 'monster@gmail.com', 'user3-128x128.jpg', NULL),
(2, 'shantanu', '$2y$10$jkAwkYC/lKrf1c5VYm683eRZRbzjdHQqyEb9d1tKcR.hiNxFKprv6', 'shantanu@gmail.com', 'shantanu.jpg', NULL),
(3, 'shivam', '$2y$10$Yl8pZGI9nJwPuEHZZi.DheoS35vjJbYJNqSqyLHQajTTq5Jh/Eo8y', 'shivam@gmail.com', 'shivam.jpg', NULL),
(4, 'raj', '$2y$10$oQg/TraTnkmoxcsEjPmmteJz9fGe9eq7oD8/hQIV9m8Sbxv04K2tu', 'raj@gmail.com', 'ssinvite1.jpeg', NULL),
(5, 'shrirang', '$2y$10$yYz7KZrNNmFUPP4tpNwu4OTO/0Wrx/XaakzK4XRNlXyZ394dQL78C', 'shrirang@gmail.com', 'user6-128x128.jpg', NULL),
(6, 'ganesh', '$2y$10$YvirmGhjak29b0S9M/nr5ukTf8AwkX.uyE35GvCFsA6MCqNgl6S8O', 'ganesh@gmail.com', 'avatar5.png', NULL),
(7, 'sanket', '$2y$10$.nDq.0TBGZRLoqUTG8CHjOhkZz164XHoDdqTQNKddJUIvj4qXjB8G', 'sanket@gmail.com', 'avatar04.png', NULL),
(8, 'tanaya', '$2y$10$N8lsywDt8J7uDL2oCBbNvuCMfkjuNb9.5L62TJMZ9ljNiiFnChJYW', 'tanaya@gmail.com', 'avatar3.png', NULL),
(9, 'sachin', '$2y$10$yRbLnYGfqLRYmNWoQBlJ8.eBOAl8tSKfap1xpT.j4P44E8sr1jfUO', 'sachin@gmail.com', 'ssinvite1.jpeg', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `acl_phinxlog`
--
ALTER TABLE `acl_phinxlog`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `acos`
--
ALTER TABLE `acos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lft` (`lft`,`rght`),
  ADD KEY `alias` (`alias`);

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `aros`
--
ALTER TABLE `aros`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lft` (`lft`,`rght`),
  ADD KEY `alias` (`alias`);

--
-- Indexes for table `aros_acos`
--
ALTER TABLE `aros_acos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `aro_id` (`aro_id`,`aco_id`),
  ADD KEY `aco_id` (`aco_id`);

--
-- Indexes for table `available_options_values`
--
ALTER TABLE `available_options_values`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
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
-- Indexes for table `phinxlog`
--
ALTER TABLE `phinxlog`
  ADD PRIMARY KEY (`version`);

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
-- Indexes for table `tests_results`
--
ALTER TABLE `tests_results`
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
-- AUTO_INCREMENT for table `acos`
--
ALTER TABLE `acos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `answers`
--
ALTER TABLE `answers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `aros`
--
ALTER TABLE `aros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `aros_acos`
--
ALTER TABLE `aros_acos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `available_options_values`
--
ALTER TABLE `available_options_values`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `quetions_details`
--
ALTER TABLE `quetions_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=175;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tests_details`
--
ALTER TABLE `tests_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tests_results`
--
ALTER TABLE `tests_results`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
