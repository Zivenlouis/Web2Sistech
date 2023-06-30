-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Jun 30, 2023 at 07:39 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_web2`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin_events`
--

CREATE TABLE `tbl_admin_events` (
  `id` int(11) NOT NULL,
  `event_title` varchar(255) NOT NULL,
  `event_description` text NOT NULL,
  `price` int(11) NOT NULL,
  `active` varchar(1) NOT NULL,
  `event_long_image` varchar(255) NOT NULL,
  `event_square_image` varchar(255) NOT NULL,
  `time_created` datetime NOT NULL,
  `last_modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_admin_events`
--

INSERT INTO `tbl_admin_events` (`id`, `event_title`, `event_description`, `price`, `active`, `event_long_image`, `event_square_image`, `time_created`, `last_modified`) VALUES
(6, 'Bangkit 2023', 'Aim Higher With Bangkit 2023 merupakan program kerja oleh Himpunan Mahasiswa Program Studi Sistem Informasi (HMPSSI) dan Himpunan Mahasiswa Program Studi Informatika (HMPTIF) UPH Kampus Medan yang bertujuan untuk memperkenalkan program MBKM terkhususnya Bangkit untuk mahasiswa/i UPH Kampus Medan...', 25000, '1', '649d3d458f960.png', '649d3d458f7a6.png', '2023-06-29 15:13:57', '2023-06-29 15:13:57'),
(7, 'Menara: Metaverse in Nusantara', 'Menara: Metaverse in Nusantara is an event held by SISTECH to introduce and enrich participants\' knowledge about the technology behind Metaverse and the development of Metaverse in Indonesia...', 35000, '0', '649d3d5a9308c.png', '649d3d5a92ee9.png', '2023-06-29 15:14:18', '2023-06-29 15:15:02'),
(8, 'Basic Coding Class', 'Techno has been eavesdropping, hearing rumors that some of you are confused on where to start your first coding journey. Therefore, we’re bringing back “Basic Coding Class” as a platform where you can learn about the fundamentals of coding and sharpen your logical skills...', 125000, '1', '649d3d6c509d4.png', '649d3d6c5084c.png', '2023-06-29 15:14:36', '2023-06-29 15:14:36'),
(9, 'D.O.T.S. 2022', 'Techno is cordially inviting you to join a thrilling event that we’ve curated wholeheartedly for you guys called “Day of Togetherness and Sharing”! Day of Togetherness and Sharing is an event that will bring all of you together in unity and get to know each other more', 0, '1', '649d3d7e6a764.png', '649d3d7e6a5e7.png', '2023-06-29 15:14:54', '2023-06-29 15:14:54');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin_home`
--

CREATE TABLE `tbl_admin_home` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `last_modified` datetime NOT NULL,
  `dataImage` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_admin_home`
--

INSERT INTO `tbl_admin_home` (`id`, `name`, `last_modified`, `dataImage`) VALUES
(1, 'On Going 1', '2023-06-29 11:06:21', '649d033dc257d.png'),
(2, 'On Going 2', '2023-06-29 11:06:25', '649d0341eae56.png'),
(3, 'On Going 3', '2023-06-29 11:06:29', '649d034529312.png'),
(4, 'Past Events 1', '2023-06-29 11:06:34', '649d034ad3b7b.png'),
(5, 'Past Events 2', '2023-06-29 11:06:38', '649d034e5abb2.png'),
(6, 'Past Events 3', '2023-06-29 11:06:42', '649d035259195.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin_profile`
--

CREATE TABLE `tbl_admin_profile` (
  `profile_id` int(11) NOT NULL,
  `profile_title` varchar(40) NOT NULL,
  `profile_description` varchar(40) NOT NULL,
  `profile_image_1` blob DEFAULT NULL,
  `profile_image_2` blob DEFAULT NULL,
  `profile_image_3` blob NOT NULL,
  `data_created` datetime NOT NULL,
  `last_modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_admin_profile`
--

INSERT INTO `tbl_admin_profile` (`profile_id`, `profile_title`, `profile_description`, `profile_image_1`, `profile_image_2`, `profile_image_3`, `data_created`, `last_modified`) VALUES
(119, 'governing body', 'hmpssi 2022/2023', 0x363439383235353937383161342e706e67, 0x363439383235353937383161392e706e67, 0x363439383235353937383161612e706e67, '2023-06-25 13:53:28', '2023-06-25 18:30:33'),
(120, 'internal relation', 'hmpssi 2022/2023', 0x363439376534393465653338322e706e67, 0x363439376534393465653338652e706e67, 0x363439376534393465653338662e, '2023-06-25 13:54:12', '2023-06-25 13:54:12'),
(121, 'external relations', 'hmpssi 2022/2023', 0x363439376536336465323938642e706e67, 0x363439376536336465323939342e706e67, 0x363439376536336465323939352e, '2023-06-25 14:01:17', '2023-06-25 14:01:17'),
(123, 'COMMUNICATION MEDIA AND INFORMATION', 'HMPSSI 2022/2023', 0x363439376537306364313233342e706e67, 0x363439376537306364313233392e706e67, 0x363439376537306364313233612e706e67, '2023-06-25 14:04:44', '2023-06-25 14:04:44'),
(124, 'governing body', 'hmpsif 2022/2023', 0x363439376537356334363732612e706e67, 0x363439376537356334363732662e706e67, 0x363439376537356334363733302e706e67, '2023-06-25 14:06:04', '2023-06-25 14:06:04'),
(125, 'public relation ', 'hmpsif 2022/2023', 0x363439376537383139643639302e706e67, 0x363439376537383139643639342e706e67, 0x363439376537383139643639352e706e67, '2023-06-25 14:06:41', '2023-06-25 14:06:41'),
(126, 'it development', 'HMPSif 2022/2023', 0x363439376537643937313232342e706e67, 0x363439376537643937313232612e706e67, 0x363439376537643937313232622e706e67, '2023-06-25 14:08:09', '2023-06-25 14:08:09'),
(127, 'COMMUNICATION MEDIA AND INFORMATION', 'HMPSif 2022/2023	', 0x363439376538313138316164342e706e67, 0x363439376538313138316164382e706e67, 0x363439376538313138316164392e, '2023-06-25 14:09:05', '2023-06-25 14:09:05');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_akun`
--

CREATE TABLE `tbl_akun` (
  `id` int(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `nim` varchar(50) NOT NULL,
  `class` varchar(50) NOT NULL,
  `line` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `major` varchar(255) NOT NULL,
  `intake` varchar(255) NOT NULL,
  `remember_token` varchar(255) NOT NULL,
  `verification_code` varchar(8) DEFAULT NULL,
  `update_verification_time` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_akun`
--

INSERT INTO `tbl_akun` (`id`, `first_name`, `last_name`, `email`, `nim`, `class`, `line`, `password`, `major`, `intake`, `remember_token`, `verification_code`, `update_verification_time`) VALUES
(15, 'Ziven', 'Louis', 'zivenlouisuph@gmail.com', '03082210017', '21TI2', 'zivenlouis25', '12345678', 'Informatics', '2021', '', NULL, NULL);

--
-- Triggers `tbl_akun`
--
DELIMITER $$
CREATE TRIGGER `update_trigger` BEFORE UPDATE ON `tbl_akun` FOR EACH ROW BEGIN
   SET NEW.update_verification_time = NOW();
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_akun_admin`
--

CREATE TABLE `tbl_akun_admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_akun_admin`
--

INSERT INTO `tbl_akun_admin` (`id`, `username`, `name`, `password`) VALUES
(1, 'admin', 'Admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_events_registration`
--

CREATE TABLE `tbl_events_registration` (
  `id` varchar(255) NOT NULL,
  `event_id` int(11) NOT NULL,
  `account_id` int(11) NOT NULL,
  `payment_status` varchar(255) NOT NULL,
  `payment_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_events_registration`
--

INSERT INTO `tbl_events_registration` (`id`, `event_id`, `account_id`, `payment_status`, `payment_time`) VALUES
('649d35320f780', 1, 15, 'Pending', '0000-00-00 00:00:00'),
('649d354e4d930', 1, 15, 'Pending', '0000-00-00 00:00:00'),
('649d364433c1f', 1, 15, 'Pending', '0000-00-00 00:00:00'),
('649d36683cc08', 1, 15, 'Pending', '0000-00-00 00:00:00'),
('649d3bc21152e', 1, 15, 'Pending', '0000-00-00 00:00:00'),
('649d3ed08b4b6', 6, 15, 'Pending', '0000-00-00 00:00:00'),
('649d3ef8b79fc', 9, 15, 'Pending', '0000-00-00 00:00:00'),
('649d3f2f75156', 8, 15, 'Pending', '0000-00-00 00:00:00'),
('649d4412169c7', 6, 15, 'Pending', '0000-00-00 00:00:00'),
('649d4428e70e4', 6, 15, 'Pending', '0000-00-00 00:00:00'),
('649d44907a84f', 6, 15, 'Pending', '0000-00-00 00:00:00'),
('649d44bddb73c', 8, 15, 'Pending', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin_events`
--
ALTER TABLE `tbl_admin_events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_admin_home`
--
ALTER TABLE `tbl_admin_home`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_admin_profile`
--
ALTER TABLE `tbl_admin_profile`
  ADD PRIMARY KEY (`profile_id`);

--
-- Indexes for table `tbl_akun`
--
ALTER TABLE `tbl_akun`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `tbl_akun_admin`
--
ALTER TABLE `tbl_akun_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_events_registration`
--
ALTER TABLE `tbl_events_registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin_events`
--
ALTER TABLE `tbl_admin_events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_admin_profile`
--
ALTER TABLE `tbl_admin_profile`
  MODIFY `profile_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=129;

--
-- AUTO_INCREMENT for table `tbl_akun`
--
ALTER TABLE `tbl_akun`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tbl_akun_admin`
--
ALTER TABLE `tbl_akun_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
