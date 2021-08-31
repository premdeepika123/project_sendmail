-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 30, 2021 at 05:48 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `curd_operation_demo`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(20) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `created_date` date NOT NULL DEFAULT current_timestamp(),
  `phone` varchar(255) NOT NULL,
  `update_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `email`, `password`, `gender`, `created_date`, `phone`, `update_date`) VALUES
(1, 'divya', 'divya123@gmail.com', '', '', '2021-08-25', '', '2021-08-26 00:00:00'),
(2, 'priya', 'priya@yahoo.co.in', '', '', '2021-08-25', '', '2021-08-26 00:00:00'),
(3, 'deepika', 'priscilladeepika123@gmail.com', '11111111', 'Female', '2021-08-25', '9515592804', '2021-08-26 00:00:00'),
(9, 'deepika', 'priscilladeepika123@gmail.com', '222222', 'Female', '2021-08-25', '1234567891', '2021-08-26 00:00:00'),
(10, 'deepika', 'priscilladeepika123@gmail.com', 'e3ceb5881a0a1fdaad01296d7554868d', 'Female', '2021-08-25', '1234567891', '2021-08-26 00:00:00'),
(11, 'Sebastin', 'sebastin@gmail.com', '6b4dccfb69c362b172bafdfc60c343e1', 'Male', '2021-08-26', '3543646466', '2021-08-26 00:00:00'),
(12, 'ricky', 'ricky@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Male', '2021-08-26', '2534464646', '2021-08-26 00:00:00'),
(13, 'sravya', 'sravya@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Female', '2021-08-28', '3534534543', '2021-08-28 23:22:49'),
(14, 'sravya', 'sravya@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Female', '2021-08-28', '3534534543', '2021-08-28 23:25:34'),
(15, 'sravya', 'sravya@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Female', '2021-08-28', '3534534543', '2021-08-28 23:25:49'),
(16, 'sravya', 'sravya@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Female', '2021-08-28', '3534534543', '2021-08-28 23:26:04'),
(17, 'priscilla', 'priscilladeepika84@gmail.com', 'abc123', 'Female', '2021-08-29', '4235465477', '2021-08-29 01:15:15'),
(18, 'priscilla', 'priscillapremdeepika@gmail.com', 'gardentomb', 'Female', '2021-08-29', '5436436466', '2021-08-29 01:17:05'),
(19, 'priscilla deepika', 'priscilladeepika123@gmail.com', 'c6fbd758b717564e0613a4e8b26b55a6', 'Female', '2021-08-29', '4534643646', '2021-08-29 01:26:22'),
(20, 'Deeps', 'priscilladeepika84@gmail.com', '5aa6f2b23c42dd1992f879167f3d5c9c', 'Female', '2021-08-29', '5464654547', '2021-08-29 01:27:14'),
(21, 'richard', 'richard@gmail.com', '1234567', 'Male', '2021-08-29', '3546457577', '2021-08-29 01:42:54'),
(22, 'daniel', 'daniel@gmail.com', '12345678', 'Female', '2021-08-29', '4557656868', '2021-08-29 01:45:57'),
(23, 'ricky', 'ricky@gmail.com', '121212', 'Male', '2021-08-29', '3435436576', '2021-08-29 01:47:31'),
(24, 'priscilla', 'priscilladeepika84@gmail.com', 'abc123', 'Female', '2021-08-29', '3242353346', '2021-08-29 12:56:50'),
(25, 'sirisha', 'sirisha@gmail.com', '123123', 'Female', '2021-08-29', '4657658651', '2021-08-29 12:57:37'),
(26, 'sirisha', 'sirisha@gmail.com', '123123', 'Female', '2021-08-29', '4657658651', '2021-08-29 12:58:15'),
(27, 'sirisha', 'sirisha@gmail.com', '123123', 'Female', '2021-08-29', '4657658651', '2021-08-29 13:00:32'),
(28, 'prachul', 'prachul@gmail.com', '545454', 'Male', '2021-08-29', '5465474745', '2021-08-29 13:02:10'),
(31, 'brighty', 'brighty@gmail.com', '12341234', 'Male', '2021-08-29', '54675676565', '2021-08-29 13:07:00'),
(32, 'daniel', 'daniel@gmail.com', '4297f44b13955235245b2497399d7a93', 'Male', '2021-08-30', '45654775777', '2021-08-30 01:03:47'),
(33, 'santosh', 'santosh@gmail.com', 'dc483e80a7a0bd9ef71d8cf973673924', 'Male', '2021-08-30', '45454576767', '2021-08-30 12:43:48'),
(34, 'tarun', 'tarun@gmail.com', '9ea5e6f10d48803ae38499c0d5e6d93f', 'Male', '2021-08-30', '4686787676', '2021-08-30 12:52:38'),
(35, 'tarun', 'tarun@gmail.com', '9ea5e6f10d48803ae38499c0d5e6d93f', 'Male', '2021-08-30', '4686787676', '2021-08-30 13:03:31'),
(36, 'tarun', 'tarun@gmail.com', '9ea5e6f10d48803ae38499c0d5e6d93f', 'Male', '2021-08-30', '4686787676', '2021-08-30 15:39:45'),
(37, 'tarun', 'tarun@gmail.com', '9ea5e6f10d48803ae38499c0d5e6d93f', 'Male', '2021-08-30', '4686787676', '2021-08-30 15:40:07'),
(38, 'rita', 'rita@gmail.com', '4297f44b13955235245b2497399d7a93', 'Female', '2021-08-30', '4346456547', '2021-08-30 20:43:42'),
(39, 'rita', 'rita@gmail.com', '4297f44b13955235245b2497399d7a93', 'Female', '2021-08-30', '4346456547', '2021-08-30 20:46:48'),
(40, 'jyotsna', 'priscilladeepika123@gmail.com', '4297f44b13955235245b2497399d7a93', 'Female', '2021-08-30', '4654575778', '2021-08-30 20:47:55'),
(41, 'jyotsna', 'priscilladeepika123@gmail.com', '4297f44b13955235245b2497399d7a93', 'Female', '2021-08-30', '4654575778', '2021-08-30 20:51:19'),
(42, 'usha', 'priscilladeepika84@gmail.com', 'b51e8dbebd4ba8a8f342190a4b9f08d7', 'Female', '2021-08-30', '5756756859', '2021-08-30 20:52:01'),
(43, 'usha', 'priscilladeepika84@gmail.com', 'b51e8dbebd4ba8a8f342190a4b9f08d7', 'Female', '2021-08-30', '5756756859', '2021-08-30 20:55:46'),
(44, 'usha', 'priscilladeepika84@gmail.com', 'b51e8dbebd4ba8a8f342190a4b9f08d7', 'Female', '2021-08-30', '5756756859', '2021-08-30 20:55:51'),
(45, 'usha', 'priscilladeepika84@gmail.com', 'b51e8dbebd4ba8a8f342190a4b9f08d7', 'Female', '2021-08-30', '5756756859', '2021-08-30 20:56:28'),
(46, 'deepa', 'priscilladeepika84@gmail.com', '4297f44b13955235245b2497399d7a93', 'Female', '2021-08-30', '5346465465', '2021-08-30 20:57:38'),
(47, 'deepa', 'priscilladeepika84@gmail.com', '4297f44b13955235245b2497399d7a93', 'Female', '2021-08-30', '5346465465', '2021-08-30 21:03:00'),
(48, 'deepa', 'priscilladeepika84@gmail.com', '4297f44b13955235245b2497399d7a93', 'Female', '2021-08-30', '5346465465', '2021-08-30 21:04:26'),
(49, 'deepa', 'priscilladeepika84@gmail.com', '4297f44b13955235245b2497399d7a93', 'Female', '2021-08-30', '5346465465', '2021-08-30 21:07:25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
