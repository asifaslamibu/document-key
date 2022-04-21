-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 21, 2022 at 12:32 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

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
(6, 19, 12, 1, '2022-03-21 16:25:45', 0),
(10, 19, 13, 1, '2022-03-21 16:47:50', 0),
(11, 0, 0, 0, '2022-03-24 11:02:19', 0),
(12, 20, 9, 1, '2022-03-24 15:25:09', 0),
(13, 26, 14, 1, '2022-03-25 16:43:36', 0),
(14, 0, 31, 1, '2022-03-30 10:48:03', 0),
(15, 28, 30, 2, '2022-03-30 10:50:28', 0),
(16, 28, 31, 1, '2022-03-30 11:00:28', 0),
(21, 28, 31, 2, '2022-04-04 12:07:58', 0),
(28, 33, 32, 2, '2022-04-04 14:39:21', 0),
(31, 28, 31, 7, '2022-04-06 16:22:03', 0);

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
(28, 'HR Departments', '2022-03-28 11:33:48', 0),
(33, 'Finance Department', '2022-04-04 11:11:54', 0),
(34, 'Social FIles', '2022-04-04 11:12:07', 0);

-- --------------------------------------------------------

--
-- Stand-in structure for view `cabs`
-- (See below for the actual view)
--
CREATE TABLE `cabs` (
`id` int(11)
,`cabinet_name` varchar(255)
,`created_at` datetime
,`folder_count` bigint(21)
);

-- --------------------------------------------------------

--
-- Table structure for table `custom_field`
--

CREATE TABLE `custom_field` (
  `id` int(11) NOT NULL,
  `field_name` varchar(255) NOT NULL,
  `folder_id` int(11) NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `custom_field`
--

INSERT INTO `custom_field` (`id`, `field_name`, `folder_id`, `created_by`, `created_on`) VALUES
(1, 'File ID', 9, 0, '2022-03-24 12:01:18'),
(3, 'Employee Code', 14, 0, '2022-03-25 16:45:26'),
(4, 'Employee Name', 14, 0, '2022-03-25 16:45:26'),
(20, 'Company Name', 31, 0, '2022-04-06 16:26:47'),
(21, 'Company EMail', 31, 0, '2022-04-06 16:26:47');

-- --------------------------------------------------------

--
-- Table structure for table `file_data`
--

CREATE TABLE `file_data` (
  `id` int(11) NOT NULL,
  `folder_id` int(11) NOT NULL,
  `file_id` int(11) NOT NULL,
  `field_id` int(11) NOT NULL,
  `data` varchar(245) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `file_data`
--

INSERT INTO `file_data` (`id`, `folder_id`, `file_id`, `field_id`, `data`) VALUES
(3, 9, 2, 1, 's-12'),
(6, 9, 3, 1, 's-13'),
(7, 14, 5, 3, 'HS-123'),
(8, 14, 5, 4, 'Abdullah'),
(12, 14, 4, 4, 'Saad Siddique'),
(26, 9, 3, 2, 'samad'),
(31, 14, 4, 3, 'HC-18'),
(35, 9, 2, 2, 'same'),
(56, 31, 8, 5, 'sa12'),
(57, 31, 8, 6, 'sa'),
(58, 31, 9, 5, 'C_name'),
(59, 31, 9, 6, 'C_det'),
(60, 31, 11, 5, 'Server File'),
(61, 31, 11, 6, 'Server Details'),
(62, 31, 12, 5, 'sasadsd'),
(63, 31, 12, 6, 'sdadasda'),
(64, 31, 13, 5, 'Zmatt'),
(65, 31, 13, 6, 'Computer');

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
(13, 'Folder 2', 19, '2022-03-21 14:22:50', 0),
(14, 'Personal Files', 26, '2022-03-25 16:42:25', 0),
(16, 'Folder Creation', 20, '2022-03-28 11:20:32', 0),
(18, 'Folder CHeck', 22, '2022-03-28 11:23:25', 0),
(21, 'Samad', 26, '2022-03-28 11:26:00', 0),
(22, 'Saad', 19, '2022-03-28 11:26:38', 0),
(23, 'Folder', 19, '2022-03-28 11:27:01', 0),
(26, 'Folder', 20, '2022-03-28 11:27:57', 0),
(28, 'Folder', 26, '2022-03-28 11:28:28', 0),
(29, 'Xa', 26, '2022-03-28 11:28:53', 0),
(30, 'Personal Box', 28, '2022-03-28 11:38:40', 0),
(31, 'Company Files', 34, '2022-03-28 11:39:34', 0),
(39, 'Cabinet File', 33, '2022-04-08 15:28:39', 0);

-- --------------------------------------------------------

--
-- Table structure for table `log`
--

CREATE TABLE `log` (
  `id` int(222) NOT NULL,
  `user_id` varchar(222) NOT NULL,
  `file_type` varchar(222) NOT NULL,
  `file_id` varchar(222) NOT NULL,
  `datatime` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `log`
--

INSERT INTO `log` (`id`, `user_id`, `file_type`, `file_id`, `datatime`) VALUES
(297, '7', 'pdf', '1', '2022-04-08 12:27:03.000000'),
(298, '7', 'pdf', '1', '2022-04-08 12:27:03.000000'),
(299, '7', 'pdf', '1', '2022-04-08 12:27:03.000000'),
(300, '7', 'pdf', '2', '2022-04-08 12:27:11.000000'),
(301, '7', 'pdf', '3', '2022-04-08 12:27:12.000000'),
(302, '7', 'pdf', '4', '2022-04-08 12:27:13.000000'),
(303, '7', 'pdf', '5', '2022-04-08 12:27:15.000000'),
(304, '7', 'pdf', '6', '2022-04-08 12:27:15.000000'),
(305, '7', 'pdf', '7', '2022-04-08 12:27:16.000000'),
(306, '7', 'pdf', '8', '2022-04-08 12:27:17.000000'),
(307, '7', 'pdf', '9', '2022-04-08 12:27:19.000000'),
(308, '7', 'pdf', '2', '2022-04-08 12:27:31.000000');

-- --------------------------------------------------------

--
-- Table structure for table `privilege`
--

CREATE TABLE `privilege` (
  `id` int(233) NOT NULL,
  `privilege` varchar(233) NOT NULL,
  `cabinet_tab` varchar(244) NOT NULL,
  `folder_tab` varchar(244) NOT NULL,
  `acl_tab` varchar(244) NOT NULL,
  `custom_tab` varchar(244) NOT NULL,
  `user_tab` varchar(244) NOT NULL,
  `roles` varchar(244) NOT NULL,
  `create_at` datetime(6) NOT NULL,
  `create_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `privilege`
--

INSERT INTO `privilege` (`id`, `privilege`, `cabinet_tab`, `folder_tab`, `acl_tab`, `custom_tab`, `user_tab`, `roles`, `create_at`, `create_by`) VALUES
(45, 'user', '{\"create\":0,\"update\":0,\"deleted\":0,\"view\":\"1\"}', '{\"create\":0,\"update\":0,\"deleted\":0,\"view\":\"0\"}', '{\"create\":0,\"update\":0,\"deleted\":0,\"view\":\"0\"}', '{\"create\":0,\"update\":0,\"deleted\":0,\"view\":\"1\"}', '{\"create\":0,\"update\":0,\"deleted\":0,\"view\":\"1\"}', '{\"create\":0,\"update\":0,\"deleted\":0,\"view\":\"1\"}', '2022-04-06 11:55:59.000000', 0),
(46, 'Admin', '{\"create\":0,\"update\":0,\"deleted\":0,\"view\":\"1\"}', '{\"create\":0,\"update\":0,\"deleted\":0,\"view\":\"1\"}', '{\"create\":0,\"update\":0,\"deleted\":0,\"view\":\"1\"}', '{\"create\":0,\"update\":0,\"deleted\":0,\"view\":\"1\"}', '{\"create\":0,\"update\":0,\"deleted\":0,\"view\":\"1\"}', '{\"create\":0,\"update\":0,\"deleted\":0,\"view\":0}', '2022-04-06 14:11:29.000000', 0),
(47, 'Super Admin', '{\"create\":\"1\",\"update\":\"1\",\"deleted\":\"1\",\"view\":\"1\"}', '{\"create\":\"1\",\"update\":\"1\",\"deleted\":\"1\",\"view\":\"1\"}', '{\"create\":\"1\",\"update\":\"1\",\"deleted\":\"1\",\"view\":\"1\"}', '{\"create\":\"1\",\"update\":\"1\",\"deleted\":\"1\",\"view\":\"1\"}', '{\"create\":\"1\",\"update\":\"1\",\"deleted\":\"1\",\"view\":\"1\"}', '{\"create\":\"1\",\"update\":\"1\",\"deleted\":\"1\",\"view\":\"1\"}', '2022-04-06 16:04:40.000000', 0),
(48, 'visitor', '{\"create\":0,\"update\":0,\"deleted\":0,\"view\":\"1\"}', '{\"create\":0,\"update\":0,\"deleted\":0,\"view\":\"1\"}', '{\"create\":0,\"update\":0,\"deleted\":0,\"view\":\"1\"}', '{\"create\":0,\"update\":0,\"deleted\":0,\"view\":\"1\"}', '{\"create\":0,\"update\":0,\"deleted\":0,\"view\":\"1\"}', '{\"create\":0,\"update\":0,\"deleted\":0,\"view\":\"1\"}', '2022-04-06 16:16:18.000000', 0);

-- --------------------------------------------------------

--
-- Table structure for table `upload_files`
--

CREATE TABLE `upload_files` (
  `id` int(11) NOT NULL,
  `folder_id` int(11) NOT NULL,
  `doc_name` varchar(45) NOT NULL,
  `doc_type` varchar(45) NOT NULL,
  `doc_location` varchar(255) NOT NULL,
  `doc_data` longtext DEFAULT NULL,
  `uploaded_on` datetime NOT NULL DEFAULT current_timestamp(),
  `uploaded_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `upload_files`
--

INSERT INTO `upload_files` (`id`, `folder_id`, `doc_name`, `doc_type`, `doc_location`, `doc_data`, `uploaded_on`, `uploaded_by`) VALUES
(1, 31, 'server4.png.pdf', 'pdf', 'C:/xampp/htdocs/DK_User/uploads/HR%20Department/Company%20Files/server4.png.pdf', 'This agreemem is made on rhis Dim Day or March 202;, by and between Ship Search having its\r\nRegis‘ered Ofﬁce ar Office #1 509 Marine Faisal Building Shahrah~e-Faisal\r\nKarachi Paklsran herein after reiermd as Ship Search which expression shall uniess excluded by Cr\r\nrepugnanr to the wmexr, mean and included by Irs Authorized Legal Represenlarive, surcessnrs\r\nInlErESL Execulors. Administrator and Assignees) of First part\r\n\r\nAnd\r\nPZF Track (having its Reglslered oﬂine at Marine Faisal Building, ofﬁce» 209, 2nd floor, Shahrah-e-\r\nFalxal, Block-5 PECHS Extenslon Black 6 PECHS, Karachi, Karachi City, Sindh 754m), PAKISTAN, harem\r\nzilEr referred tu as PZFTrack which expression shall unless excluded by 01 repugnant tn the context,\r\nmean and included by itssharehciders, Directors, Legal represemalive, successors interesigxecutorl\r\nAdministrator and Assignees) ul Second pan\r\n\r\n', '2022-04-01 12:42:39', 2),
(2, 31, 'server4.png', 'pdf', 'uploads/HR Department/Company Files/server4.png.pdf', 'This agreemem is made on rhis Dim Day or March 202;, by and between Ship Search having its\r\nRegis‘ered Ofﬁce ar Office #1 509 Marine Faisal Building Shahrah~e-Faisal\r\nKarachi Paklsran herein after reiermd as Ship Search which expression shall uniess excluded by Cr\r\nrepugnanr to the wmexr, mean and included by Irs Authorized Legal Represenlarive, surcessnrs\r\nInlErESL Execulors. Administrator and Assignees) of First part\r\n\r\nAnd\r\nPZF Track (having its Reglslered oﬂine at Marine Faisal Building, ofﬁce» 209, 2nd floor, Shahrah-e-\r\nFalxal, Block-5 PECHS Extenslon Black 6 PECHS, Karachi, Karachi City, Sindh 754m), PAKISTAN, harem\r\nzilEr referred tu as PZFTrack which expression shall unless excluded by 01 repugnant tn the context,\r\nmean and included by itssharehciders, Directors, Legal represemalive, successors interesigxecutorl\r\nAdministrator and Assignees) ul Second pan\r\n\r\n', '2022-04-01 13:03:46', 1),
(3, 31, 'server2.png', 'pdf', 'uploads/HR Department/Company Files/server2.png', '', '2022-04-01 14:14:58', 1),
(4, 31, 'server4.png', 'pdf', 'uploads/HR Department/Company Files/server4.png', 'This agreemem is made on rhis Dim Day or March 202;, by and between Ship Search having its\r\nRegis‘ered Ofﬁce ar Office #1 509 Marine Faisal Building Shahrah~e-Faisal\r\nKarachi Paklsran herein after reiermd as Ship Search which expression shall uniess excluded by Cr\r\nrepugnanr to the wmexr, mean and included by Irs Authorized Legal Represenlarive, surcessnrs\r\nInlErESL Execulors. Administrator and Assignees) of First part\r\n\r\nAnd\r\nPZF Track (having its Reglslered oﬂine at Marine Faisal Building, ofﬁce» 209, 2nd floor, Shahrah-e-\r\nFalxal, Block-5 PECHS Extenslon Black 6 PECHS, Karachi, Karachi City, Sindh 754m), PAKISTAN, harem\r\nzilEr referred tu as PZFTrack which expression shall unless excluded by 01 repugnant tn the context,\r\nmean and included by itssharehciders, Directors, Legal represemalive, successors interesigxecutorl\r\nAdministrator and Assignees) ul Second pan\r\n\r\n', '2022-04-04 11:42:17', 1),
(5, 31, 'server4.png', 'pdf', 'uploads/HR Department/Company Files/server4.png', 'This agreemem is made on rhis Dim Day or March 202;, by and between Ship Search having its\r\nRegis‘ered Ofﬁce ar Office #1 509 Marine Faisal Building Shahrah~e-Faisal\r\nKarachi Paklsran herein after reiermd as Ship Search which expression shall uniess excluded by Cr\r\nrepugnanr to the wmexr, mean and included by Irs Authorized Legal Represenlarive, surcessnrs\r\nInlErESL Execulors. Administrator and Assignees) of First part\r\n\r\nAnd\r\nPZF Track (having its Reglslered oﬂine at Marine Faisal Building, ofﬁce» 209, 2nd floor, Shahrah-e-\r\nFalxal, Block-5 PECHS Extenslon Black 6 PECHS, Karachi, Karachi City, Sindh 754m), PAKISTAN, harem\r\nzilEr referred tu as PZFTrack which expression shall unless excluded by 01 repugnant tn the context,\r\nmean and included by itssharehciders, Directors, Legal represemalive, successors interesigxecutorl\r\nAdministrator and Assignees) ul Second pan\r\n\r\n', '2022-04-04 12:43:00', 1),
(6, 31, 'server4.png', 'pdf', 'uploads/HR Department/Company Files/server4.png', 'This agreemem is made on rhis Dim Day or March 202;, by and between Ship Search having its\r\nRegis‘ered Ofﬁce ar Office #1 509 Marine Faisal Building Shahrah~e-Faisal\r\nKarachi Paklsran herein after reiermd as Ship Search which expression shall uniess excluded by Cr\r\nrepugnanr to the wmexr, mean and included by Irs Authorized Legal Represenlarive, surcessnrs\r\nInlErESL Execulors. Administrator and Assignees) of First part\r\n\r\nAnd\r\nPZF Track (having its Reglslered oﬂine at Marine Faisal Building, ofﬁce» 209, 2nd floor, Shahrah-e-\r\nFalxal, Block-5 PECHS Extenslon Black 6 PECHS, Karachi, Karachi City, Sindh 754m), PAKISTAN, harem\r\nzilEr referred tu as PZFTrack which expression shall unless excluded by 01 repugnant tn the context,\r\nmean and included by itssharehciders, Directors, Legal represemalive, successors interesigxecutorl\r\nAdministrator and Assignees) ul Second pan\r\n\r\n', '2022-04-04 12:49:24', 1),
(7, 31, 'server4.png.pdf', 'pdf', 'uploads/HR Department/Company Files/server4.png', 'This agreemem is made on rhis Dim Day or March 202;, by and between Ship Search having its\r\nRegis‘ered Ofﬁce ar Office #1 509 Marine Faisal Building Shahrah~e-Faisal\r\nKarachi Paklsran herein after reiermd as Ship Search which expression shall uniess excluded by Cr\r\nrepugnanr to the wmexr, mean and included by Irs Authorized Legal Representative, surcessnrs\r\ninterest Executors. Administrator and Assignees) of First part\r\n\r\nAnd\r\nPZF Track (having its Reglslered oﬂine at Marine Faisal Building, ofﬁce» 209, 2nd floor, Shahrah-e-\r\nFalxal, Block-5 PECHS Extension Black 6 PECHS, Karachi, Karachi City, Sindh 754m), PAKISTAN, harem\r\nzilEr referred tu as PZFTrack which expression shall unless excluded by 01 repugnant tn the context,\r\nmean and included by itssharehciders, Directors, Legal representative, successors interesigxecutorl\r\nAdministrator and Assignees) ul Second pan\r\n\r\n', '2022-04-06 16:38:17', 1),
(8, 31, 'server4.png.pdf', 'pdf', 'uploads/HR Department/Company Files/server4.png', 'This agreemem is made on rhis Dim Day or March 202;, by and between Ship Search having its\r\nRegis‘ered Ofﬁce ar Office #1 509 Marine Faisal Building Shahrah~e-Faisal\r\nKarachi Paklsran herein after reiermd as Ship Search which expression shall uniess excluded by Cr\r\nrepugnanr to the wmexr, mean and included by Irs Authorized Legal Represenlarive, surcessnrs\r\nInlErESL Execulors. Administrator and Assignees) of First part\r\n\r\nAnd\r\nPZF Track (having its Reglslered oﬂine at Marine Faisal Building, ofﬁce» 209, 2nd floor, Shahrah-e-\r\nFalxal, Block-5 PECHS Extenslon Black 6 PECHS, Karachi, Karachi City, Sindh 754m), PAKISTAN, harem\r\nzilEr referred tu as PZFTrack which expression shall unless excluded by 01 repugnant tn the context,\r\nmean and included by itssharehciders, Directors, Legal represemalive, successors interesigxecutorl\r\nAdministrator and Assignees) ul Second pan\r\n\r\n', '2022-04-06 16:44:21', 1),
(9, 31, 'server4.png.pdf', 'pdf', 'uploads/HR Department/Company Files/server4.png', 'This agreemem is made on rhis Dim Day or March 202;, by and between Ship Search having its\r\nRegis‘ered Ofﬁce ar Office #1 509 Marine Faisal Building Shahrah~e-Faisal\r\nKarachi Paklsran herein after reiermd as Ship Search which expression shall uniess excluded by Cr\r\nrepugnanr to the wmexr, mean and included by Irs Authorized Legal Represenlarive, surcessnrs\r\nInlErESL Execulors. Administrator and Assignees) of First part\r\n\r\nAnd\r\nPZF Track (having its Reglslered oﬂine at Marine Faisal Building, ofﬁce» 209, 2nd floor, Shahrah-e-\r\nFalxal, Block-5 PECHS Extenslon Black 6 PECHS, Karachi, Karachi City, Sindh 754m), PAKISTAN, harem\r\nzilEr referred tu as PZFTrack which expression shall unless excluded by 01 repugnant tn the context,\r\nmean and included by itssharehciders, Directors, Legal represemalive, successors interesigxecutorl\r\nAdministrator and Assignees) ul Second pan\r\n\r\n', '2022-04-06 16:48:56', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `privilege` varchar(244) NOT NULL,
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

INSERT INTO `users` (`id`, `username`, `privilege`, `email`, `password`, `isActive`, `created_at`, `created_by`, `last_login_at`) VALUES
(1, ' basit', '47', 'basit@gmail.com', '123456', 1, '2022-03-21 12:40:25', 0, '0000-00-00 00:00:00'),
(2, 'hamza', '47', 'ahmed@gmail.com', '123456', 1, '2022-03-21 13:14:32', 0, '0000-00-00 00:00:00'),
(7, 'asif', '47', 'ali@gmail.com', '123456', 1, '2022-04-06 14:12:15', 0, '0000-00-00 00:00:00'),
(8, 'abdullah', '48', 'abdullah@gmail.com', '123456', 1, '2022-04-08 14:17:12', 0, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Stand-in structure for view `vw_acl`
-- (See below for the actual view)
--
CREATE TABLE `vw_acl` (
`username` varchar(255)
,`user_id` int(11)
,`acl_id` int(11)
,`cabinet_name` varchar(255)
,`cabinet_id` int(11)
,`Expr1` mediumtext
);

-- --------------------------------------------------------

--
-- Structure for view `cabs`
--
DROP TABLE IF EXISTS `cabs`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `cabs`  AS SELECT `cabinets`.`id` AS `id`, `cabinets`.`cabinet_name` AS `cabinet_name`, `cabinets`.`created_at` AS `created_at`, (select count(0) from `folders` where `folders`.`cabinet_id` = `cabinets`.`id`) AS `folder_count` FROM `cabinets` ;

-- --------------------------------------------------------

--
-- Structure for view `vw_acl`
--
DROP TABLE IF EXISTS `vw_acl`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vw_acl`  AS SELECT `u`.`username` AS `username`, `a`.`user_id` AS `user_id`, `a`.`id` AS `acl_id`, `c`.`cabinet_name` AS `cabinet_name`, `a`.`cabinet_id` AS `cabinet_id`, group_concat(`f`.`folder_name` separator ',') AS `Expr1` FROM (((`acl` `a` join `cabinets` `c` on(`c`.`id` = `a`.`cabinet_id`)) join `folders` `f` on(`f`.`id` = `a`.`folder_id`)) join `users` `u` on(`u`.`id` = `a`.`user_id`)) GROUP BY `a`.`user_id`, `a`.`cabinet_id` ;

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
-- Indexes for table `custom_field`
--
ALTER TABLE `custom_field`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `file_data`
--
ALTER TABLE `file_data`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `unique_index` (`file_id`,`field_id`),
  ADD KEY `folders_connection_idx` (`folder_id`),
  ADD KEY `file_connection_idx` (`file_id`),
  ADD KEY `field_connection_idx` (`field_id`);

--
-- Indexes for table `folders`
--
ALTER TABLE `folders`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `unique_index` (`folder_name`,`cabinet_id`);

--
-- Indexes for table `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `privilege`
--
ALTER TABLE `privilege`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `upload_files`
--
ALTER TABLE `upload_files`
  ADD PRIMARY KEY (`id`),
  ADD KEY `folder_con_idx` (`folder_id`),
  ADD KEY `users_connection_idx` (`uploaded_by`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `cabinets`
--
ALTER TABLE `cabinets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `custom_field`
--
ALTER TABLE `custom_field`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `file_data`
--
ALTER TABLE `file_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `folders`
--
ALTER TABLE `folders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `log`
--
ALTER TABLE `log`
  MODIFY `id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=309;

--
-- AUTO_INCREMENT for table `privilege`
--
ALTER TABLE `privilege`
  MODIFY `id` int(233) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `upload_files`
--
ALTER TABLE `upload_files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `upload_files`
--
ALTER TABLE `upload_files`
  ADD CONSTRAINT `folder_con` FOREIGN KEY (`folder_id`) REFERENCES `folders` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `users_connection` FOREIGN KEY (`uploaded_by`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
