-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 21, 2022 at 03:05 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dockey`
--

-- --------------------------------------------------------

--
-- Table structure for table `acl`
--

CREATE TABLE `acl` (
  `id` int(11) NOT NULL,
  `cabinet_id` int(11) NOT NULL,
  `folder_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `created_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `acl`
--

INSERT INTO `acl` (`id`, `cabinet_id`, `folder_id`, `user_id`, `created_at`, `created_by`) VALUES
(1, 19, 10, 2, '2022-03-21 16:10:46', 0),
(2, 19, 12, 2, '2022-03-21 16:10:46', 0),
(3, 19, 13, 2, '2022-03-21 16:10:46', 0),
(5, 19, 10, 1, '2022-03-21 16:25:45', 0),
(6, 19, 12, 1, '2022-03-21 16:25:45', 0),
(10, 19, 13, 1, '2022-03-21 16:47:50', 0);

-- --------------------------------------------------------

--
-- Table structure for table `cabinets`
--

CREATE TABLE `cabinets` (
  `id` int(11) NOT NULL,
  `cabinet_name` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `created_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cabinets`
--

INSERT INTO `cabinets` (`id`, `cabinet_name`, `created_at`, `created_by`) VALUES
(19, 'LocalVault', '2022-03-21 11:31:09', 0),
(20, 'Treasury', '2022-03-21 11:57:15', 0),
(22, 'Secret Society', '2022-03-21 13:03:51', 0),
(24, 'Soc', '2022-03-21 13:17:53', 0),
(25, 'Soci', '2022-03-21 13:18:21', 0);

-- --------------------------------------------------------

--
-- Table structure for table `folders`
--

CREATE TABLE `folders` (
  `id` int(11) NOT NULL,
  `folder_name` varchar(255) NOT NULL,
  `cabinet_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `created_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `folders`
--

INSERT INTO `folders` (`id`, `folder_name`, `cabinet_id`, `created_at`, `created_by`) VALUES
(9, 'Local_Storage', 20, '2022-03-21 12:03:37', 0),
(10, 'Local_Storage', 19, '2022-03-21 12:07:17', 0),
(12, 'Folder 1', 19, '2022-03-21 14:22:41', 0),
(13, 'Folder 2', 19, '2022-03-21 14:22:50', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `isActive` int(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `last_login_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `isActive`, `created_at`, `created_by`, `last_login_at`) VALUES
(1, 'Samad', 'abdulsamadq67@gmail.com', '123456', 1, '2022-03-21 12:40:25', 0, '0000-00-00 00:00:00'),
(2, 'hamza', 'ahmed@gmail.com', '123456', 1, '2022-03-21 13:14:32', 0, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Stand-in structure for view `vw_acl`
-- (See below for the actual view)
--
CREATE TABLE `vw_acl` (
`username` varchar(255)
,`user_id` int(11)
,`cabinet_name` varchar(255)
,`cabinet_id` int(11)
,`Expr1` mediumtext
);

-- --------------------------------------------------------

--
-- Structure for view `vw_acl`
--
DROP TABLE IF EXISTS `vw_acl`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vw_acl`  AS SELECT `u`.`username` AS `username`, `a`.`user_id` AS `user_id`, `c`.`cabinet_name` AS `cabinet_name`, `a`.`cabinet_id` AS `cabinet_id`, group_concat(`f`.`folder_name` separator ',') AS `Expr1` FROM (((`acl` `a` join `cabinets` `c` on(`c`.`id` = `a`.`cabinet_id`)) join `folders` `f` on(`f`.`id` = `a`.`folder_id`)) join `users` `u` on(`u`.`id` = `a`.`user_id`)) GROUP BY `a`.`user_id`, `a`.`cabinet_id` ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `acl`
--
ALTER TABLE `acl`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `unique_index` (`user_id`,`cabinet_id`,`folder_id`);

--
-- Indexes for table `cabinets`
--
ALTER TABLE `cabinets`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cabinet_name` (`cabinet_name`);

--
-- Indexes for table `folders`
--
ALTER TABLE `folders`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `unique_index` (`folder_name`,`cabinet_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `acl`
--
ALTER TABLE `acl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `cabinets`
--
ALTER TABLE `cabinets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `folders`
--
ALTER TABLE `folders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
