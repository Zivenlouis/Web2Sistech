-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Jul 22, 2023 at 10:48 AM
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
-- Table structure for table `tbl_admin_about`
--

CREATE TABLE `tbl_admin_about` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `about_title` varchar(255) NOT NULL,
  `about_content` text NOT NULL,
  `about_image` varchar(255) NOT NULL,
  `last_modified` datetime NOT NULL,
  `no_urut` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_admin_about`
--

INSERT INTO `tbl_admin_about` (`id`, `name`, `about_title`, `about_content`, `about_image`, `last_modified`, `no_urut`) VALUES
(1, 'SISTECH Header', 'SISTECH Header', '', '64a662160edf7.png', '2023-07-06 13:41:26', 1),
(2, 'SISTECH Description', 'SISTECH', 'SISTECH UPH Medan Campus has two study programs namely Information Systems and Informatics. Both have a vision of becoming partners in the industrial world.dsfsd', '64a6621f135f1.png', '2023-07-06 13:41:35', 2),
(3, 'HMPSSI Description', 'HMPSSI', 'HMPSSI-UPH is a Student Organization (OK) which was formed to answer the needs of students and improve the academic and non-academic quality of students. HMPSSI strives to encourage students to participate in every activity to create positive values of togetherness and kinship among Information Systems study program students.', '3.png', '2023-07-01 23:16:26', 3),
(4, 'HMPSSI Vision', 'BETTER TOGETHER', 'Menjadikan HMPSSI sebagai wadah mahasiswa/i berkumpul dan beraspirasi guna meningkatkan potensi mahasiswa/i program studi Sistem Informasi baik dalam bidang akademik maupun non-akademik dengan melaksanakan program kerja yang unggul dan berkualitas.', '', '2023-07-01 18:19:01', 4),
(5, 'HMPSSI Mission', 'FIT', '1.Facilitate\nMenyediakan wadah bagi mahasiswa/i melalui kesempatan bertumbuh dan berkembang guna menumbuhkan pribadi yang aktif, berkompeten dan berkarakter.\n2.Inspire\nMenginspirasi mahasiswa/i untuk mencari dan mengembangkan minat dan bakatnya masing-masing melalui program kerja yang membina, eksploratif dan informatif.\n3.Togetherness\nMenjalin hubungan baik antar organisasi di dalam, di luar UPH maupun antar mahasiswa/i program studi Sistem Informasi.', '', '2023-07-01 18:19:01', 5),
(6, 'HMPSIF Vision', 'HMPSIF', 'Menjadikan HMPSIF sebagai organisasi yang berkomitmen dalam membantu, mempererat hubungan kebersamaan serta mengembangkan potensi yang dimiliki mahasiswa/i program studi Informatika baik dalam bidang akademik maupun non-akademik.', '64a6627d11e72.png', '2023-07-06 13:43:09', 7),
(7, 'HMPSIF Mission', 'DREAM', '1.Drive\nMenjadi wadah untuk menampung dan menyalur aspirasi serta bakat dari mahasiswa/i program studi Informatika.\n2.Relation\nMembangun hubungan yang harmonis antara sesama mahasiswa/i program studi Informatika.\n3.Educate	\nMengadakan program kerja yang dapat menjadi sumber ilmu dan wawasan mahasiswa/i program studi Informatika.\n4.Active	\nMenjadikan mahasiswa/i program studi Informatika sebagai mahasiswa/i yang lebih aktif dalam mengekspresikan diri melalui program kerja yang akan dilaksanakan.\n5.Model	\nMenjadi seorang pemimpin yang dapat memotivasi mahasiswa/i.', '', '2023-07-01 18:19:01', 8),
(8, 'HMPSIF Description', 'HDD(Help - Devote - Develop)', 'HMPSIF-UPH is a Student Organization (OK) which was formed to answer the needs of students and improve the academic and non-academic quality of students. HMPSIF strives to encourage students to participate in every activity to create positive values of togetherness and kinship among Informatics study program students.', '4.png', '2023-07-02 00:08:31', 6);

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
(6, 'Bangkit 2023', 'Aim Higher With Bangkit 2023 merupakan program kerja oleh Himpunan Mahasiswa Program Studi Sistem Informasi (HMPSSI) dan Himpunan Mahasiswa Program Studi Informatika (HMPTIF) UPH Kampus Medan yang bertujuan untuk memperkenalkan program MBKM terkhususnya Bangkit untuk mahasiswa/i UPH Kampus Medan...', 25000, '1', '64a526200885f.png', '64a52d56eec17.png', '2023-06-29 15:13:57', '2023-07-05 15:44:06'),
(7, 'Menara: Metaverse in Nusantara', 'Menara: Metaverse in Nusantara is an event held by SISTECH to introduce and enrich participants\' knowledge about the technology behind Metaverse and the development of Metaverse in Indonesia...', 35000, '0', '64a5262dc76cf.png', '64a52d6482e11.png', '2023-06-29 15:14:18', '2023-07-05 15:44:20'),
(8, 'Basic Coding Class', 'Techno has been eavesdropping, hearing rumors that some of you are confused on where to start your first coding journey. Therefore, we’re bringing back “Basic Coding Class” as a platform where you can learn about the fundamentals of coding and sharpen your logical skills...', 125000, '1', '64a526380a191.png', '64a52d6f154e4.png', '2023-06-29 15:14:36', '2023-07-05 15:44:31'),
(9, 'D.O.T.S. 2022', 'Techno is cordially inviting you to join a thrilling event that we’ve curated wholeheartedly for you guys called “Day of Togetherness and Sharing”! Day of Togetherness and Sharing is an event that will bring all of you together in unity and get to know each other more', 0, '1', '64a52640a120b.png', '64a52d763bd79.png', '2023-06-29 15:14:54', '2023-07-05 15:44:38');

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
(1, 'On Going 1', '2023-07-20 19:26:25', '64b927f1784a2.png'),
(2, 'On Going 2', '2023-07-05 15:42:30', '64a52cf613db9.png'),
(3, 'On Going 3', '2023-06-29 11:06:29', '649d034529312.png'),
(4, 'Past Events 1', '2023-06-29 11:06:34', '649d034ad3b7b.png'),
(5, 'Past Events 2', '2023-06-29 11:06:38', '649d034e5abb2.png'),
(6, 'Past Events 3', '2023-06-29 11:06:42', '649d035259195.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin_profile`
--

CREATE TABLE `tbl_admin_profile` (
  `id` int(11) NOT NULL,
  `profile_title` varchar(40) NOT NULL,
  `profile_description` varchar(40) NOT NULL,
  `profile_image_1` varchar(255) DEFAULT NULL,
  `profile_image_2` varchar(255) DEFAULT NULL,
  `profile_image_3` varchar(255) NOT NULL,
  `data_created` datetime NOT NULL,
  `last_modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_admin_profile`
--

INSERT INTO `tbl_admin_profile` (`id`, `profile_title`, `profile_description`, `profile_image_1`, `profile_image_2`, `profile_image_3`, `data_created`, `last_modified`) VALUES
(119, 'governing body', 'hmpssi 2022/2023', '64a52b8ee66d5.png', '64a52b99792cb.png', '64a52b99ebeaa.png', '2023-06-25 13:53:28', '2023-07-05 15:36:41'),
(120, 'internal relation', 'hmpssi 2022/2023', '64a52bb0de80a.png', '64a52bb158a95.png', '6497e494ee38f.', '2023-06-25 13:54:12', '2023-07-05 15:37:04'),
(121, 'external relations', 'hmpssi 2022/2023', '64a52bf82893e.png', '64a52bf89c023.png', '6497e63de2995.', '2023-06-25 14:01:17', '2023-07-05 15:38:16'),
(123, 'COMMUNICATION MEDIA AND INFORMATION', 'HMPSSI 2022/2023', '64a52c04e4090.png', '64a52c055f104.png', '64a52c05d2937.png', '2023-06-25 14:04:44', '2023-07-05 15:38:28'),
(124, 'governing body', 'hmpsif 2022/2023', '64a52c10a6122.png', '64a52c1131340.png', '64a52c11a33b0.png', '2023-06-25 14:06:04', '2023-07-05 15:38:40'),
(125, 'public relation ', 'hmpsif 2022/2023', '64a52c247f1cf.png', '64a52c2507c15.png', '64a52c257f15a.png', '2023-06-25 14:06:41', '2023-07-05 15:39:00'),
(126, 'it development', 'HMPSif 2022/2023', '64a52c2fcdf18.png', '64a52c305504f.png', '64a52c30d30c0.png', '2023-06-25 14:08:09', '2023-07-05 15:39:11'),
(127, 'COMMUNICATION MEDIA AND INFORMATION', 'HMPSif 2022/2023	', '64a52c67549c1.png', '64a52c67dd37d.png', '6497e81181ad9.', '2023-06-25 14:09:05', '2023-07-05 15:40:07');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin_user`
--

CREATE TABLE `tbl_admin_user` (
  `id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `nim` varchar(100) NOT NULL,
  `class` varchar(100) NOT NULL,
  `line_id` varchar(100) NOT NULL,
  `major` varchar(100) NOT NULL,
  `intake` varchar(100) NOT NULL,
  `time_created` datetime NOT NULL,
  `last_modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_akun`
--

CREATE TABLE `tbl_akun` (
  `id` int(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `class` varchar(10) NOT NULL,
  `nim` varchar(20) NOT NULL,
  `line` varchar(30) NOT NULL,
  `major` varchar(30) NOT NULL,
  `intake` varchar(20) NOT NULL,
  `active` varchar(10) NOT NULL,
  `remember_token` varchar(255) NOT NULL,
  `verification_code` varchar(8) DEFAULT NULL,
  `update_verification_time` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_akun`
--

INSERT INTO `tbl_akun` (`id`, `first_name`, `last_name`, `email`, `password`, `class`, `nim`, `line`, `major`, `intake`, `active`, `remember_token`, `verification_code`, `update_verification_time`) VALUES
(15, 'Ziven', 'Louis', 'zivenlouisuph@gmail.com', '12345678', '21TI2', '03082210017', 'zivenlouis25', 'Informatics', '2021', '1', '144dfbf443507838292bd88446a3042e', 'S-276204', '2023-07-10 20:02:19'),
(17, 'Irwanto', 'Kocak', 'zivenlouis25@gmail.com', '12345678', '21TI2', '03082210017', 'zivenlouis25', 'Informatics', '2021', '1', '83f58a9d90498fcc5f110e1127c96b90', 'S-930030', '2023-07-10 19:55:11'),
(18, 'Kuraku', 'Raninja', 'erickleonardo123123@gmail.com', 'sushitei', '21ti2', '030303030303', 'memakannasi', 'Informatics', '2021', '1', '787b5039d7251a8db3063c9e87c1d3fb', 'S-019108', '2023-07-10 18:13:27'),
(19, 'Darren', 'Oswaldo', 'darrenoswldo@gmail.com', '12345678', '21TI2', '03082210018', 'darren_ot', 'Informatics', '2021', '1', '', NULL, NULL),
(20, 'Gilbert', 'Januar', 'zivenlouis31@gmail.com', '12345678', '21TI1', '03082210020', 'zivenlouis25', 'Informatics', '2021', '1', '', NULL, '2023-07-08 13:32:27'),
(21, 'Erick', 'Leonardo', '03082210007@student.uph.edu', '123123123', '21ti1', '03082210007', 'erickleonardo1234', 'Informatics', '2021', '1', 'e344485f185a05110cdeca69c3208e65', NULL, '2023-07-10 18:00:13'),
(22, 'Lala', 'Lili', 'liasandy92@gmail.com', '11111111', '21si2', '03082210000', 'kapurbarus', 'System Information', '2021', '1', '', NULL, NULL),
(23, 'Jason', 'Tjoa', 'tjoajason2003@gmail.com', '11111111', '21TI2', '03082210003', 'tjoajason', 'Informatics', '2021', '1', '', 'S-022499', '2023-07-10 19:54:35'),
(24, 'Andi', 'Tjoa', 'jasontjoa2003@gmail.com', '13572468', '21TI2', '03082210003', 'tjoajason', 'Informatics', '2021', '1', '', 'S-044091', '2023-07-10 19:43:33'),
(25, 'Amir', 'Ahmad', '03082210003@student.uph.edu', '12345678', '21TI2', '03082210003', 'tjoajason', 'Informatics', '2021', '1', '', NULL, '2023-07-10 19:43:58'),
(26, 'Oswaldo', 'Tan', 'evotingindonesia23@gmail.com', '12345678', '21TI2', '03082210003', 'tjoajason', 'Informatics', '2021', '1', '', NULL, '2023-07-10 19:44:06'),
(27, 'Irwanto', 'Ganteng', 'iwganteng@gmail.com', '12345678', '21TI2', '03082210024', 'Irwantokocak', 'Informatics', '2021', '1', '', NULL, NULL);

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
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_akun_admin`
--

INSERT INTO `tbl_akun_admin` (`id`, `username`, `name`, `password`, `role`) VALUES
(1, 'admin2', 'Admin2', 'admin2', 'Normal'),
(2, 'admin', 'Admin', 'admin', 'Master');

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
('649e8e8ada147', 6, 15, 'Success', '2023-06-30 15:13:09'),
('649e929c6cb17', 8, 15, 'Success', '2023-06-30 15:32:29'),
('64a90340d3a0a', 9, 17, 'Success', '2023-07-08 13:33:39'),
('64a904fdb01d1', 6, 17, 'Pending', '0000-00-00 00:00:00'),
('64abe1f485fcc', 6, 19, 'Success', '2023-07-10 17:48:59'),
('64abe45542fa9', 6, 18, 'Success', '2023-07-10 17:59:41'),
('64abe4b774e1b', 6, 23, 'Success', '2023-07-10 18:00:28'),
('64abe4c5ed8dc', 6, 21, 'Success', '2023-07-10 18:01:00'),
('64abe50d54508', 6, 24, 'Success', '2023-07-10 18:02:13'),
('64abe53fde75f', 6, 22, 'Success', '2023-07-10 18:03:07'),
('64abe5439e37d', 6, 17, 'Pending', '0000-00-00 00:00:00'),
('64abe5ba5f151', 9, 26, 'Success', '2023-07-10 18:04:27'),
('64ac01ac3e3b9', 8, 27, 'Success', '2023-07-10 20:04:13'),
('64ae6684268d3', 6, 17, 'Pending', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin_about`
--
ALTER TABLE `tbl_admin_about`
  ADD PRIMARY KEY (`id`);

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
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `tbl_admin_about`
--
ALTER TABLE `tbl_admin_about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_admin_events`
--
ALTER TABLE `tbl_admin_events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_admin_profile`
--
ALTER TABLE `tbl_admin_profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=129;

--
-- AUTO_INCREMENT for table `tbl_akun`
--
ALTER TABLE `tbl_akun`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `tbl_akun_admin`
--
ALTER TABLE `tbl_akun_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
