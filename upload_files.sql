-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 07, 2022 at 10:40 AM
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
(1, 31, 'server4.png.pdf', 'pdf', 'C:/xampp/htdocs/DK_User/uploads/HR%20Department/Company%20Files/server4.png.pdf', 'This agreemem is made on rhis Dim Day or March 202;, by and between Ship Search having its\r\nRegis‘ered Ofﬁce ar Office #1 509 Marine Faisal Building Shahrah~e-Faisal\r\nKarachi Paklsran herein after reiermd as Ship Search which expression shall uniess excluded by Cr\r\nrepugnanr to the wmexr, mean and included by Irs Authorized Legal Represenlarive, surcessnrs\r\nInlErESL Execulors. Administrator and Assignees) of First part\r\n\r\nAnd\r\nPZF Track (having its Reglslered oﬂine at Marine Faisal Building, ofﬁce» 209, 2nd floor, Shahrah-e-\r\nFalxal, Block-5 PECHS Extenslon Black 6 PECHS, Karachi, Karachi City, Sindh 754m), PAKISTAN, harem\r\nzilEr referred tu as PZFTrack which expression shall unless excluded by 01 repugnant tn the context,\r\nmean and included by itssharehciders, Directors, Legal represemalive, successors interesigxecutorl\r\nAdministrator and Assignees) ul Second pan\r\n\r\n', '2022-04-01 12:42:39', 1),
(2, 31, 'server4.png', 'pdf', 'uploads/HR Department/Company Files/server4.png.pdf', 'This agreemem is made on rhis Dim Day or March 202;, by and between Ship Search having its\r\nRegis‘ered Ofﬁce ar Office #1 509 Marine Faisal Building Shahrah~e-Faisal\r\nKarachi Paklsran herein after reiermd as Ship Search which expression shall uniess excluded by Cr\r\nrepugnanr to the wmexr, mean and included by Irs Authorized Legal Represenlarive, surcessnrs\r\nInlErESL Execulors. Administrator and Assignees) of First part\r\n\r\nAnd\r\nPZF Track (having its Reglslered oﬂine at Marine Faisal Building, ofﬁce» 209, 2nd floor, Shahrah-e-\r\nFalxal, Block-5 PECHS Extenslon Black 6 PECHS, Karachi, Karachi City, Sindh 754m), PAKISTAN, harem\r\nzilEr referred tu as PZFTrack which expression shall unless excluded by 01 repugnant tn the context,\r\nmean and included by itssharehciders, Directors, Legal represemalive, successors interesigxecutorl\r\nAdministrator and Assignees) ul Second pan\r\n\r\n', '2022-04-01 13:03:46', 1),
(3, 31, 'server2.png', 'pdf', 'uploads/HR Department/Company Files/server2.png', '', '2022-04-01 14:14:58', 1),
(4, 31, 'server4.png', 'pdf', 'uploads/HR Department/Company Files/server4.png', 'This agreemem is made on rhis Dim Day or March 202;, by and between Ship Search having its\r\nRegis‘ered Ofﬁce ar Office #1 509 Marine Faisal Building Shahrah~e-Faisal\r\nKarachi Paklsran herein after reiermd as Ship Search which expression shall uniess excluded by Cr\r\nrepugnanr to the wmexr, mean and included by Irs Authorized Legal Represenlarive, surcessnrs\r\nInlErESL Execulors. Administrator and Assignees) of First part\r\n\r\nAnd\r\nPZF Track (having its Reglslered oﬂine at Marine Faisal Building, ofﬁce» 209, 2nd floor, Shahrah-e-\r\nFalxal, Block-5 PECHS Extenslon Black 6 PECHS, Karachi, Karachi City, Sindh 754m), PAKISTAN, harem\r\nzilEr referred tu as PZFTrack which expression shall unless excluded by 01 repugnant tn the context,\r\nmean and included by itssharehciders, Directors, Legal represemalive, successors interesigxecutorl\r\nAdministrator and Assignees) ul Second pan\r\n\r\n', '2022-04-04 11:42:17', 1),
(5, 31, 'server4.png', 'pdf', 'uploads/HR Department/Company Files/server4.png', 'This agreemem is made on rhis Dim Day or March 202;, by and between Ship Search having its\r\nRegis‘ered Ofﬁce ar Office #1 509 Marine Faisal Building Shahrah~e-Faisal\r\nKarachi Paklsran herein after reiermd as Ship Search which expression shall uniess excluded by Cr\r\nrepugnanr to the wmexr, mean and included by Irs Authorized Legal Represenlarive, surcessnrs\r\nInlErESL Execulors. Administrator and Assignees) of First part\r\n\r\nAnd\r\nPZF Track (having its Reglslered oﬂine at Marine Faisal Building, ofﬁce» 209, 2nd floor, Shahrah-e-\r\nFalxal, Block-5 PECHS Extenslon Black 6 PECHS, Karachi, Karachi City, Sindh 754m), PAKISTAN, harem\r\nzilEr referred tu as PZFTrack which expression shall unless excluded by 01 repugnant tn the context,\r\nmean and included by itssharehciders, Directors, Legal represemalive, successors interesigxecutorl\r\nAdministrator and Assignees) ul Second pan\r\n\r\n', '2022-04-04 12:43:00', 1),
(6, 31, 'server4.png', 'pdf', 'uploads/HR Department/Company Files/server4.png', 'This agreemem is made on rhis Dim Day or March 202;, by and between Ship Search having its\r\nRegis‘ered Ofﬁce ar Office #1 509 Marine Faisal Building Shahrah~e-Faisal\r\nKarachi Paklsran herein after reiermd as Ship Search which expression shall uniess excluded by Cr\r\nrepugnanr to the wmexr, mean and included by Irs Authorized Legal Represenlarive, surcessnrs\r\nInlErESL Execulors. Administrator and Assignees) of First part\r\n\r\nAnd\r\nPZF Track (having its Reglslered oﬂine at Marine Faisal Building, ofﬁce» 209, 2nd floor, Shahrah-e-\r\nFalxal, Block-5 PECHS Extenslon Black 6 PECHS, Karachi, Karachi City, Sindh 754m), PAKISTAN, harem\r\nzilEr referred tu as PZFTrack which expression shall unless excluded by 01 repugnant tn the context,\r\nmean and included by itssharehciders, Directors, Legal represemalive, successors interesigxecutorl\r\nAdministrator and Assignees) ul Second pan\r\n\r\n', '2022-04-04 12:49:24', 1),
(7, 31, 'server4.png.pdf', 'pdf', 'uploads/HR Department/Company Files/server4.png', 'This agreemem is made on rhis Dim Day or March 202;, by and between Ship Search having its\r\nRegis‘ered Ofﬁce ar Office #1 509 Marine Faisal Building Shahrah~e-Faisal\r\nKarachi Paklsran herein after reiermd as Ship Search which expression shall uniess excluded by Cr\r\nrepugnanr to the wmexr, mean and included by Irs Authorized Legal Representative, surcessnrs\r\ninterest Executors. Administrator and Assignees) of First part\r\n\r\nAnd\r\nPZF Track (having its Reglslered oﬂine at Marine Faisal Building, ofﬁce» 209, 2nd floor, Shahrah-e-\r\nFalxal, Block-5 PECHS Extension Black 6 PECHS, Karachi, Karachi City, Sindh 754m), PAKISTAN, harem\r\nzilEr referred tu as PZFTrack which expression shall unless excluded by 01 repugnant tn the context,\r\nmean and included by itssharehciders, Directors, Legal representative, successors interesigxecutorl\r\nAdministrator and Assignees) ul Second pan\r\n\r\n', '2022-04-06 16:38:17', 1),
(8, 31, 'server4.png.pdf', 'pdf', 'uploads/HR Department/Company Files/server4.png', 'This agreemem is made on rhis Dim Day or March 202;, by and between Ship Search having its\r\nRegis‘ered Ofﬁce ar Office #1 509 Marine Faisal Building Shahrah~e-Faisal\r\nKarachi Paklsran herein after reiermd as Ship Search which expression shall uniess excluded by Cr\r\nrepugnanr to the wmexr, mean and included by Irs Authorized Legal Represenlarive, surcessnrs\r\nInlErESL Execulors. Administrator and Assignees) of First part\r\n\r\nAnd\r\nPZF Track (having its Reglslered oﬂine at Marine Faisal Building, ofﬁce» 209, 2nd floor, Shahrah-e-\r\nFalxal, Block-5 PECHS Extenslon Black 6 PECHS, Karachi, Karachi City, Sindh 754m), PAKISTAN, harem\r\nzilEr referred tu as PZFTrack which expression shall unless excluded by 01 repugnant tn the context,\r\nmean and included by itssharehciders, Directors, Legal represemalive, successors interesigxecutorl\r\nAdministrator and Assignees) ul Second pan\r\n\r\n', '2022-04-06 16:44:21', 1),
(9, 31, 'server4.png.pdf', 'pdf', 'uploads/HR Department/Company Files/server4.png', 'This agreemem is made on rhis Dim Day or March 202;, by and between Ship Search having its\r\nRegis‘ered Ofﬁce ar Office #1 509 Marine Faisal Building Shahrah~e-Faisal\r\nKarachi Paklsran herein after reiermd as Ship Search which expression shall uniess excluded by Cr\r\nrepugnanr to the wmexr, mean and included by Irs Authorized Legal Represenlarive, surcessnrs\r\nInlErESL Execulors. Administrator and Assignees) of First part\r\n\r\nAnd\r\nPZF Track (having its Reglslered oﬂine at Marine Faisal Building, ofﬁce» 209, 2nd floor, Shahrah-e-\r\nFalxal, Block-5 PECHS Extenslon Black 6 PECHS, Karachi, Karachi City, Sindh 754m), PAKISTAN, harem\r\nzilEr referred tu as PZFTrack which expression shall unless excluded by 01 repugnant tn the context,\r\nmean and included by itssharehciders, Directors, Legal represemalive, successors interesigxecutorl\r\nAdministrator and Assignees) ul Second pan\r\n\r\n', '2022-04-06 16:48:56', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `upload_files`
--
ALTER TABLE `upload_files`
  ADD PRIMARY KEY (`id`),
  ADD KEY `folder_con_idx` (`folder_id`),
  ADD KEY `users_connection_idx` (`uploaded_by`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `upload_files`
--
ALTER TABLE `upload_files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

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
