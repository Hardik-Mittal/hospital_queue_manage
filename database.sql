-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 13, 2020 at 07:57 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `sno` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `concern` varchar(200) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`sno`, `name`, `email`, `concern`, `date`) VALUES
(1, 'admin', 'abhinav.anand.1999.ok@gmail.com', 'sdfghjkl;', '2020-05-13 14:27:18'),
(2, 'admin', 'abhinav.anand.1999.ok@gmail.com', 'aqswdfgbnhm,', '2020-05-13 14:27:25'),
(3, 'admin', 'abhinav.anand.1999.ok@gmail.com', 'aqswdfgbnhm,', '2020-05-13 14:29:45'),
(4, 'admin', 'abhinav.anand.1999.ok@gmail.com', 'aqswdfgbnhm,', '2020-05-13 14:30:55');

-- --------------------------------------------------------

--
-- Table structure for table `dbmedi`
--

CREATE TABLE `dbmedi` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `department` varchar(50) NOT NULL,
  `time` datetime NOT NULL DEFAULT current_timestamp(),
  `age` int(11) NOT NULL,
  `description` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `hospitalq`
--

CREATE TABLE `hospitalq` (
  `sno` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `department` varchar(20) NOT NULL,
  `age` int(11) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `descr` varchar(200) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hospitalq`
--

INSERT INTO `hospitalq` (`sno`, `name`, `email`, `gender`, `department`, `age`, `date`, `descr`, `user_id`) VALUES
(1, 'name', 'abhinav.anand.1999.ok@gmail.com', 'male', 'Orthopedic', 12, '2020-05-13 16:14:54', '', 0),
(2, 'name', 'abhinav.anand.1999.ok@gmail.com', 'male', 'Orthopedic', 12, '2020-05-13 16:15:26', '', 0),
(3, 'name', 'abhinav.anand.1999.ok@gmail.com', 'male', 'Orthopedic', 12, '2020-05-13 16:15:29', '', 0),
(4, 'admin', 'abhinav.anand.1999.ok@gmail.com', 'male', 'Orthopedic', 23, '2020-05-13 16:15:39', 'q2werftghyjk', 0),
(5, 'admin4', 'abhinav.anand.1999.ok@gmail.com', 'male', 'Digestive', 324, '2020-05-13 17:47:20', 'wsdfghj', 0),
(6, 'admin4', 'abhinav.anand.1999.ok@gmail.com', 'male', 'Digestive', 324, '2020-05-13 17:49:05', 'wsdfghj', 0),
(7, 'admin4', 'abhinav.anand.1999.ok@gmail.com', 'male', 'Digestive', 324, '2020-05-13 17:49:07', 'wsdfghj', 0),
(8, 'Ayush Anand', 'abhinav.anand.1999.ok@gmail.com', 'male', 'Neuro', 23, '2020-05-13 17:49:20', '2wedrfghj', 0),
(9, 'Ayush Anand', 'abhinav.anand.1999.ok@gmail.com', 'male', 'Neuro', 23, '2020-05-13 17:51:07', '2wedrfghj', 1),
(10, 'hgj', 'abhinav.anand.1999.ok@gmail.com', 'male', 'Digestive', 89, '2020-05-13 17:51:23', 'asdfvbnm,', 1),
(11, 'hello', 'abhinav.anand.1999.ok@gmail.com', 'male', 'Physician', 67, '2020-05-13 17:53:27', 'werty', 4),
(12, 'hello', 'abhinav.anand.1999.ok@gmail.com', 'male', 'Physician', 67, '2020-05-13 18:04:13', 'werty', 4),
(13, 'admin', 'abhinav.anand.1999.ok@gmail.com', 'male', 'Orthopedic', 34, '2020-05-13 18:26:38', '23456789dfghjkl./', 4);

-- --------------------------------------------------------

--
-- Table structure for table `medhist`
--

CREATE TABLE `medhist` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `gender` char(20) NOT NULL,
  `department` varchar(50) NOT NULL,
  `time` datetime NOT NULL,
  `age` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `gender` char(20) NOT NULL,
  `department` varchar(50) NOT NULL,
  `time` datetime NOT NULL,
  `age` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `post2`
--

CREATE TABLE `post2` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `gender` char(20) NOT NULL,
  `department` varchar(50) NOT NULL,
  `time` datetime NOT NULL,
  `age` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`) VALUES
(1, 'zaptianblade', '$2y$10$BzgKSDlKqOVLIjxLgfJCMO6l8h9M7Gjh/RFlvEoryTT1C/gKHMjAi', '2020-05-13 00:31:28'),
(2, 'Abhinav Anand', '$2y$10$bfQ20A8LBVHsi4Zq5VLW7uKML3pmUhs7BrIdyGFTnynITmbA8Ubce', '2020-05-13 01:51:47'),
(3, 'hello', '$2y$10$D0Bzi/bhqLq0Jjqx93wycO9l3NH5EKAdTd9bq3V.WaKL0H1VRY7fi', '2020-05-13 11:15:41'),
(4, 'hello455', '$2y$10$wXsGzSGCuccMIhGTzUHWjeJXhN4.GiqerfkT3PlSp7mLu1yJx8Ide', '2020-05-13 14:07:37');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `dbmedi`
--
ALTER TABLE `dbmedi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hospitalq`
--
ALTER TABLE `hospitalq`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `medhist`
--
ALTER TABLE `medhist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post2`
--
ALTER TABLE `post2`
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
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `dbmedi`
--
ALTER TABLE `dbmedi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hospitalq`
--
ALTER TABLE `hospitalq`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `medhist`
--
ALTER TABLE `medhist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `post2`
--
ALTER TABLE `post2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
