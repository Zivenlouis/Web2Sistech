-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 01 Jul 2023 pada 19.23
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.5

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
-- Struktur dari tabel `tbl_admin_about`
--

CREATE TABLE `tbl_admin_about` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `about_title` varchar(255) NOT NULL,
  `about_content` text NOT NULL,
  `about_image` varchar(255) NOT NULL,
  `last_modified` datetime NOT NULL,
  `no_urut` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_admin_about`
--

INSERT INTO `tbl_admin_about` (`id`, `name`, `about_title`, `about_content`, `about_image`, `last_modified`, `no_urut`) VALUES
(1, 'SISTECH Header', '', '', '1.png', '2023-07-01 16:30:25', 1),
(2, 'SISTECH Description', 'SISTECH', 'SISTECH UPH Medan Campus has two study programs namely Information Systems and Informatics. Both have a vision of becoming partners in the industrial world.', '2.png', '2023-07-01 11:52:09', 2),
(3, 'HMPSSI Description', 'HMPSSI', 'HMPSSI-UPH is a Student Organization (OK) which was formed to answer the needs of students and improve the academic and non-academic quality of students. HMPSSI strives to encourage students to participate in every activity to create positive values of togetherness and kinship among Information Systems study program students.', '3.png', '2023-07-01 23:16:26', 3),
(4, 'HMPSSI Vision', 'BETTER TOGETHER', 'Menjadikan HMPSSI sebagai wadah mahasiswa/i berkumpul dan beraspirasi guna meningkatkan potensi mahasiswa/i program studi Sistem Informasi baik dalam bidang akademik maupun non-akademik dengan melaksanakan program kerja yang unggul dan berkualitas.', '', '2023-07-01 18:19:01', 4),
(5, 'HMPSSI Mission', 'FIT', '1.Facilitate\nMenyediakan wadah bagi mahasiswa/i melalui kesempatan bertumbuh dan berkembang guna menumbuhkan pribadi yang aktif, berkompeten dan berkarakter.\n2.Inspire\nMenginspirasi mahasiswa/i untuk mencari dan mengembangkan minat dan bakatnya masing-masing melalui program kerja yang membina, eksploratif dan informatif.\n3.Togetherness\nMenjalin hubungan baik antar organisasi di dalam, di luar UPH maupun antar mahasiswa/i program studi Sistem Informasi.', '', '2023-07-01 18:19:01', 5),
(6, 'HMPSIF Vision', 'HDD(Help - Devote - Develop)', 'Menjadikan HMPSIF sebagai organisasi yang berkomitmen dalam membantu, mempererat hubungan kebersamaan serta mengembangkan potensi yang dimiliki mahasiswa/i program studi Informatika baik dalam bidang akademik maupun non-akademik.', '', '2023-07-01 18:19:01', 7),
(7, 'HMPSIF Mission', 'DREAM', '1.Drive\nMenjadi wadah untuk menampung dan menyalur aspirasi serta bakat dari mahasiswa/i program studi Informatika.\n2.Relation\nMembangun hubungan yang harmonis antara sesama mahasiswa/i program studi Informatika.\n3.Educate	\nMengadakan program kerja yang dapat menjadi sumber ilmu dan wawasan mahasiswa/i program studi Informatika.\n4.Active	\nMenjadikan mahasiswa/i program studi Informatika sebagai mahasiswa/i yang lebih aktif dalam mengekspresikan diri melalui program kerja yang akan dilaksanakan.\n5.Model	\nMenjadi seorang pemimpin yang dapat memotivasi mahasiswa/i.', '', '2023-07-01 18:19:01', 8),
(8, 'HMPSIF Description', 'HMPSIF', 'HMPSIF-UPH is a Student Organization (OK) which was formed to answer the needs of students and improve the academic and non-academic quality of students. HMPSIF strives to encourage students to participate in every activity to create positive values of togetherness and kinship among Informatics study program students.', '4.png', '2023-07-02 00:08:31', 6);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_admin_events`
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_admin_events`
--

INSERT INTO `tbl_admin_events` (`id`, `event_title`, `event_description`, `price`, `active`, `event_long_image`, `event_square_image`, `time_created`, `last_modified`) VALUES
(6, 'Bangkit 2023', 'Aim Higher With Bangkit 2023 merupakan program kerja oleh Himpunan Mahasiswa Program Studi Sistem Informasi (HMPSSI) dan Himpunan Mahasiswa Program Studi Informatika (HMPTIF) UPH Kampus Medan yang bertujuan untuk memperkenalkan program MBKM terkhususnya Bangkit untuk mahasiswa/i UPH Kampus Medan...\r<br>\r<br>', 25000, '1', '649d3d458f960.png', '649d3d458f7a6.png', '2023-06-29 15:13:57', '2023-07-01 17:04:38'),
(7, 'Menara: Metaverse in Nusantara', 'Menara: Metaverse in Nusantara is an event held by SISTECH to introduce and enrich participants\' knowledge about the technology behind Metaverse and the development of Metaverse in Indonesia...', 35000, '0', '649d3d5a9308c.png', '649d3d5a92ee9.png', '2023-06-29 15:14:18', '2023-06-29 15:15:02'),
(8, 'Basic Coding Class', 'Techno has been eavesdropping, hearing rumors that some of you are confused on where to start your first coding journey. Therefore, we’re bringing back “Basic Coding Class” as a platform where you can learn about the fundamentals of coding and sharpen your logical skills...', 125000, '1', '649d3d6c509d4.png', '649d3d6c5084c.png', '2023-06-29 15:14:36', '2023-06-29 15:14:36'),
(9, 'D.O.T.S. 2022', 'Techno is cordially inviting you to join a thrilling event that we’ve curated wholeheartedly for you guys called “Day of Togetherness and Sharing”! Day of Togetherness and Sharing is an event that will bring all of you together in unity and get to know each other more', 0, '1', '649d3d7e6a764.png', '649d3d7e6a5e7.png', '2023-06-29 15:14:54', '2023-06-29 15:14:54');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_admin_home`
--

CREATE TABLE `tbl_admin_home` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `last_modified` datetime NOT NULL,
  `dataImage` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_admin_home`
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
-- Struktur dari tabel `tbl_admin_profile`
--

CREATE TABLE `tbl_admin_profile` (
  `profile_id` int(11) NOT NULL,
  `profile_title` varchar(40) NOT NULL,
  `profile_description` varchar(40) NOT NULL,
  `profile_image_1` varchar(255) DEFAULT NULL,
  `profile_image_2` varchar(255) DEFAULT NULL,
  `profile_image_3` varchar(255) NOT NULL,
  `data_created` datetime NOT NULL,
  `last_modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_admin_profile`
--

INSERT INTO `tbl_admin_profile` (`profile_id`, `profile_title`, `profile_description`, `profile_image_1`, `profile_image_2`, `profile_image_3`, `data_created`, `last_modified`) VALUES
(119, 'governing body', 'hmpssi 2022/2023', '64982559781a4.png', '64982559781a9.png', '64982559781aa.png', '2023-06-25 13:53:28', '2023-06-25 18:30:33'),
(120, 'internal relation', 'hmpssi 2022/2023', '6497e494ee382.png', '6497e494ee38e.png', '6497e494ee38f.', '2023-06-25 13:54:12', '2023-06-25 13:54:12'),
(121, 'external relations', 'hmpssi 2022/2023', '6497e63de298d.png', '6497e63de2994.png', '6497e63de2995.', '2023-06-25 14:01:17', '2023-06-25 14:01:17'),
(123, 'COMMUNICATION MEDIA AND INFORMATION', 'HMPSSI 2022/2023', '6497e70cd1234.png', '6497e70cd1239.png', '6497e70cd123a.png', '2023-06-25 14:04:44', '2023-06-25 14:04:44'),
(124, 'governing body', 'hmpsif 2022/2023', '6497e75c4672a.png', '6497e75c4672f.png', '6497e75c46730.png', '2023-06-25 14:06:04', '2023-06-25 14:06:04'),
(125, 'public relation ', 'hmpsif 2022/2023', '6497e7819d690.png', '6497e7819d694.png', '6497e7819d695.png', '2023-06-25 14:06:41', '2023-06-25 14:06:41'),
(126, 'it development', 'HMPSif 2022/2023', '6497e7d971224.png', '6497e7d97122a.png', '6497e7d97122b.png', '2023-06-25 14:08:09', '2023-06-25 14:08:09'),
(127, 'COMMUNICATION MEDIA AND INFORMATION', 'HMPSif 2022/2023	', '6497e81181ad4.png', '6497e81181ad8.png', '6497e81181ad9.', '2023-06-25 14:09:05', '2023-06-25 14:09:05');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_akun`
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_akun`
--

INSERT INTO `tbl_akun` (`id`, `first_name`, `last_name`, `email`, `nim`, `class`, `line`, `password`, `major`, `intake`, `remember_token`, `verification_code`, `update_verification_time`) VALUES
(15, 'Ziven', 'Louis', 'zivenlouisuph@gmail.com', '03082210017', '21TI2', 'zivenlouis25', '12345678', 'Informatics', '2021', '86855eb68c3231c2391b1bad6bd4be05', NULL, '2023-06-30 14:53:53');

--
-- Trigger `tbl_akun`
--
DELIMITER $$
CREATE TRIGGER `update_trigger` BEFORE UPDATE ON `tbl_akun` FOR EACH ROW BEGIN
   SET NEW.update_verification_time = NOW();
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_akun_admin`
--

CREATE TABLE `tbl_akun_admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_akun_admin`
--

INSERT INTO `tbl_akun_admin` (`id`, `username`, `name`, `password`) VALUES
(1, 'admin', 'Admin', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_events_registration`
--

CREATE TABLE `tbl_events_registration` (
  `id` varchar(255) NOT NULL,
  `event_id` int(11) NOT NULL,
  `account_id` int(11) NOT NULL,
  `payment_status` varchar(255) NOT NULL,
  `payment_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_events_registration`
--

INSERT INTO `tbl_events_registration` (`id`, `event_id`, `account_id`, `payment_status`, `payment_time`) VALUES
('649e89c146d92', 6, 15, 'Pending', '0000-00-00 00:00:00'),
('649e8a174bc7e', 6, 15, 'Pending', '0000-00-00 00:00:00'),
('649e8b1f0a373', 6, 15, 'Pending', '0000-00-00 00:00:00'),
('649e8e182e593', 6, 15, 'Pending', '0000-00-00 00:00:00'),
('649e8e46e3df4', 6, 15, 'Pending', '0000-00-00 00:00:00'),
('649e8e582fb90', 6, 15, 'Pending', '0000-00-00 00:00:00'),
('649e8e8ada147', 6, 15, 'Success', '2023-06-30 15:13:09'),
('649e929c6cb17', 8, 15, 'Success', '2023-06-30 15:32:29');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_admin_about`
--
ALTER TABLE `tbl_admin_about`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_admin_events`
--
ALTER TABLE `tbl_admin_events`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_admin_home`
--
ALTER TABLE `tbl_admin_home`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_admin_profile`
--
ALTER TABLE `tbl_admin_profile`
  ADD PRIMARY KEY (`profile_id`);

--
-- Indeks untuk tabel `tbl_akun`
--
ALTER TABLE `tbl_akun`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indeks untuk tabel `tbl_akun_admin`
--
ALTER TABLE `tbl_akun_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_events_registration`
--
ALTER TABLE `tbl_events_registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_admin_about`
--
ALTER TABLE `tbl_admin_about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `tbl_admin_events`
--
ALTER TABLE `tbl_admin_events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `tbl_admin_profile`
--
ALTER TABLE `tbl_admin_profile`
  MODIFY `profile_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=129;

--
-- AUTO_INCREMENT untuk tabel `tbl_akun`
--
ALTER TABLE `tbl_akun`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `tbl_akun_admin`
--
ALTER TABLE `tbl_akun_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
