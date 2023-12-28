-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 28, 2023 at 09:43 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gms`
--

-- --------------------------------------------------------

--
-- Table structure for table `chats`
--

CREATE TABLE `chats` (
  `id` int(11) NOT NULL,
  `text_id` varchar(60) NOT NULL,
  `sender_id` varchar(60) NOT NULL,
  `receiver_id` varchar(60) NOT NULL,
  `txt` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chats`
--

INSERT INTO `chats` (`id`, `text_id`, `sender_id`, `receiver_id`, `txt`) VALUES
(139, 'qnvzzvnd1f', 'cpoipxeyse', 'ukflyuzahv', 'Hey everyone');

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` int(11) NOT NULL,
  `group_id` varchar(60) NOT NULL,
  `group_name` varchar(120) NOT NULL,
  `created_by` varchar(60) NOT NULL,
  `created_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `group_id`, `group_name`, `created_by`, `created_on`) VALUES
(20, 'ukflyuzahv', 'Dark Night', 'cpoipxeyse', '2023-12-28 21:40:41'),
(21, 'jnqwsoloux', 'The great canal', 'cpoipxeyse', '2023-12-28 21:42:06');

-- --------------------------------------------------------

--
-- Table structure for table `topics`
--

CREATE TABLE `topics` (
  `id` int(11) NOT NULL,
  `topic_id` varchar(60) NOT NULL,
  `topic_name` varchar(120) NOT NULL,
  `created_by` varchar(60) NOT NULL,
  `created_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `topics`
--

INSERT INTO `topics` (`id`, `topic_id`, `topic_name`, `created_by`, `created_on`) VALUES
(10, 'rluvkpgqsu', 'How to get top of Mount Everest (Guide)', 'cpoipxeyse', '2023-12-28 21:41:29'),
(11, 'nndmiseclr', 'Ultimate guide for making pizzzza!', 'cpoipxeyse', '2023-12-28 21:42:34');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_code` varchar(60) NOT NULL,
  `username` varchar(60) NOT NULL,
  `password` varchar(120) NOT NULL,
  `avatar` varchar(60) NOT NULL,
  `created_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_code`, `username`, `password`, `avatar`, `created_on`) VALUES
(26, 'yxusfcuttn', 'nitinsingh', 'b585c4415b1fe50f2c31fa1698b271b7', 'avatar-1', '2022-05-30 06:48:53'),
(27, 'ublzbcfveu', 'nitinsxngh', '202cb962ac59075b964b07152d234b70', 'avatar-7', '2023-12-25 15:14:03'),
(28, 'oinizotjit', 'xxx', '202cb962ac59075b964b07152d234b70', 'avatar-2', '2023-12-28 20:56:57'),
(29, 'cpoipxeyse', 'admin', 'e6e061838856bf47e1de730719fb2609', 'avatar-4', '2023-12-28 21:30:35');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chats`
--
ALTER TABLE `chats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `topics`
--
ALTER TABLE `topics`
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
-- AUTO_INCREMENT for table `chats`
--
ALTER TABLE `chats`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=140;

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `topics`
--
ALTER TABLE `topics`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
