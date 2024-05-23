-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2024 at 10:31 AM
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
-- Database: `web_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `webtable`
--

CREATE TABLE `webtable` (
  `ID` int(16) NOT NULL,
  `USERNAME` varchar(15) NOT NULL,
  `PASSWORD` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `webtables`
--

CREATE TABLE `webtables` (
  `id` int(11) NOT NULL,
  `user_id` bigint(100) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL,
  `email` varchar(150) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `age` int(10) NOT NULL,
  `telephone` int(15) NOT NULL,
  `country` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `webtables`
--

INSERT INTO `webtables` (`id`, `user_id`, `user_name`, `password`, `email`, `gender`, `age`, `telephone`, `country`) VALUES
(1, 9223372036854775807, 'valantine', '$2y$10$yiREJkapfu0X5jndF.GDyepePtKMQmyn2R0k.qOFhM8ieSa0TZEUi', 'tuyizerevalentine0@gmail.com', 'female', 23, 789521344, 'Rwanda'),
(2, 9223372036854775807, 'valantine', '$2y$10$GSEgdmonFaoR8zQlJKhu5udnFSzUibLrTmTFhh9CUnMii8gyhXMnC', 'tuyizerevalentine0@gmail.com', 'female', 23, 789521344, 'Rwanda');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `webtable`
--
ALTER TABLE `webtable`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `webtables`
--
ALTER TABLE `webtables`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `webtable`
--
ALTER TABLE `webtable`
  MODIFY `ID` int(16) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `webtables`
--
ALTER TABLE `webtables`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
