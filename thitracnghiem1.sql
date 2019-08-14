-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 14, 2019 at 03:05 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.2.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `thitracnghiem1`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `hoten` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` text COLLATE utf8_unicode_ci NOT NULL,
  `diachi` varchar(150) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `hoten`, `email`, `password`, `diachi`) VALUES
(1, 'Huỳnh Minh Thông', 'thonghuynh@gmail.com', '$2y$10$3W4g4dMD2dGlQUzd8sb5UOy23SFmI3A/d5eTd1HvsqzAuwuRxuhCC', 'vinh long'),
(3, 'thonghuynh', 'thonghuynhit@gmail.com', '$2y$10$iPf5zuWs6wbfDAR7/pgp6uKD.P.ZLiPSnarBUTdxB7SH8AfE2qo.e', 'viet nam'),
(4, 'Huỳnh Minh Thông', 'thongt@gmail.com', '$2y$10$PPnKG9RO/WiIgY3mWcECUOKowvcP0fItAh.y.DD3vJC1blK3TVGYy', 'Vĩnh Long');

-- --------------------------------------------------------

--
-- Table structure for table `cauhoi`
--

CREATE TABLE `cauhoi` (
  `id` int(11) NOT NULL,
  `noidung` text COLLATE utf8_unicode_ci NOT NULL,
  `mucdo` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `id_dethi` int(11) NOT NULL,
  `id_dapan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cauhoi`
--

INSERT INTO `cauhoi` (`id`, `noidung`, `mucdo`, `id_dethi`, `id_dapan`) VALUES
(2, '<p>thiết bị n&agrave;o sau đ&acirc;y d&ugrave;ng để kết nối mạng ?</p>', '0', 2, 4),
(12, 'câu 1 : thiết bị nào sau đây dùng để kết nối mạng ? 1', '0', 17, 3),
(13, 'câu 1 : thiết bị nào sau đây dùng để kết nối mạng ?', '0', 18, 3),
(14, 'câu 1 : thiết bị nào sau đây dùng để kết nối mạng ?', '0', 18, 3),
(35, '<p>lap tring ios</p>', '1', 3, 4),
(36, '<p>hoc lap trinh php mvc</p>', '1', 9, 3),
(37, '<p><img alt=\"\" src=\"/ckfinder/userfiles/images/Screen%20Shot%202019-08-07%20at%2023_45_37.png\" style=\"height:54px; width:90px\" />&nbsp;day la loi gi</p>', '1', 9, 1);

-- --------------------------------------------------------

--
-- Table structure for table `cautraloi`
--

CREATE TABLE `cautraloi` (
  `id` int(11) NOT NULL,
  `noidung` text COLLATE utf8_unicode_ci NOT NULL,
  `id_cauhoi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cautraloi`
--

INSERT INTO `cautraloi` (`id`, `noidung`, `id_cauhoi`) VALUES
(1, '1Router', 2),
(4, 'Bộ nhớ trong, Bộ nhớ ngoài', 2),
(5, 'Chia sẻ tài nguyên', 2),
(6, 'Primary memory', 2),
(43, '3', 12),
(44, '4', 12),
(45, '1', 12),
(46, '2', 12),
(47, '1', 13),
(48, '2', 13),
(49, '3', 13),
(50, '4', 13),
(51, '1', 14),
(52, '2', 14),
(53, '3', 14),
(54, '4', 14),
(135, '1', 35),
(136, '2', 35),
(137, '3', 35),
(138, '4', 35),
(139, 'no qua de', 36),
(140, 'o muc trung binh', 36),
(141, 'hoi kho', 36),
(142, 'qua kho', 36),
(143, 'xuong hang', 37),
(144, '4', 37),
(145, 'Chia sẻ tài nguyên 1', 37),
(146, 'Primary memory 1', 37);

-- --------------------------------------------------------

--
-- Table structure for table `dapan`
--

CREATE TABLE `dapan` (
  `id` int(11) NOT NULL,
  `traloi` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `dapan`
--

INSERT INTO `dapan` (`id`, `traloi`) VALUES
(1, 'A'),
(2, 'B'),
(3, 'C'),
(4, 'D');

-- --------------------------------------------------------

--
-- Table structure for table `dethi`
--

CREATE TABLE `dethi` (
  `id` int(11) NOT NULL,
  `tendethi` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `thoigianbatdau` datetime NOT NULL,
  `thoigianketthuc` datetime NOT NULL,
  `thoigianlambai` time NOT NULL,
  `id_nguoirade` int(11) NOT NULL,
  `trangthai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `dethi`
--

INSERT INTO `dethi` (`id`, `tendethi`, `thoigianbatdau`, `thoigianketthuc`, `thoigianlambai`, `id_nguoirade`, `trangthai`) VALUES
(2, 'ứng dụng công nghệ thông tin cơ bản', '2019-09-01 09:00:00', '2019-09-01 10:30:00', '01:30:00', 1, 1),
(3, 'Lâp Trình Laravel Framework', '2019-08-20 00:00:00', '2019-08-09 00:00:00', '03:00:00', 2, 0),
(9, 'Lập Trình ExpressJS', '2019-08-11 00:00:00', '2019-11-28 00:00:00', '01:00:00', 2, 0),
(22, 'Lập Trình ExpressJS', '2019-08-15 00:00:00', '2019-08-16 00:00:00', '00:00:00', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `ketqua`
--

CREATE TABLE `ketqua` (
  `id` int(11) NOT NULL,
  `id_thisinh` int(11) NOT NULL,
  `socaudung` int(11) NOT NULL,
  `socausai` int(11) NOT NULL,
  `diem` float NOT NULL,
  `id_dethi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ketqua`
--

INSERT INTO `ketqua` (`id`, `id_thisinh`, `socaudung`, `socausai`, `diem`, `id_dethi`) VALUES
(1, 2, 15, 15, 10, 2),
(7, 11, 22, 12, 8, 2);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `nguoirade`
--

CREATE TABLE `nguoirade` (
  `id` int(11) NOT NULL,
  `hoten` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `ngaysinh` date NOT NULL,
  `gioitinh` int(11) NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` text COLLATE utf8_unicode_ci NOT NULL,
  `diachi` varchar(150) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `nguoirade`
--

INSERT INTO `nguoirade` (`id`, `hoten`, `ngaysinh`, `gioitinh`, `email`, `password`, `diachi`) VALUES
(1, 'Huỳnh Minh Thông', '2019-08-18', 1, 'thonghuynhit@gmail.com', '$2y$10$EypGcK.Fd4aqqFHH5eKKkOwLgCTG5wWjgZ8J.gR4BpRnmvY9YknIi', 'Vĩnh Long'),
(2, 'Lionel Messi', '2019-08-17', 1, 'thonghuynh@gmail.com', '$2y$10$taFHDmtp1Y5xQxc5mEJ0leCcSVqig/IkpNFoGnukO9lKb3jZj3QU2', 'Vĩnh Long');

-- --------------------------------------------------------

--
-- Table structure for table `thisinh`
--

CREATE TABLE `thisinh` (
  `id` int(11) NOT NULL,
  `hoten` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `ngaysinh` date NOT NULL,
  `gioitinh` int(11) NOT NULL,
  `email` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `diachi` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `password` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `thisinh`
--

INSERT INTO `thisinh` (`id`, `hoten`, `ngaysinh`, `gioitinh`, `email`, `diachi`, `password`) VALUES
(1, 'thonghuynh', '2019-07-01', 1, 'thonghuynhi123t@gmail.com', 'vinh long', '$2y$10$rI1z7x6k7YMBgs7iUso2XuIhmMd1F8yNh5guj8n4OuJgukMhlxvf6'),
(2, 'huynh minh thong 123', '1999-12-21', 1, 'abc12@gmail.com', 'viet nam', '$2y$10$9WKmLCniTk2kzho4Asj/JO..KnGp2lJ8bRnmAaU8CHN23L0CPwbZK'),
(4, 'acb', '1993-06-18', 0, 'acb@gmail.com', 'viet nam', '$2y$10$DQ9Dus5WrcKLJ1DZ8XlYk.7F7YmX/mYH4hY7EIXyZCaBPJ4MF6NGG'),
(6, 'thonghuynhit', '1999-12-21', 1, 'thonghuynhit@gmail.com', 'nguyen hue', '123'),
(8, 'nguyen phuoc hao', '1999-12-21', 1, 'hao123@gmail.com', 'vinh long', '123'),
(11, 'Lionel Messi', '1987-07-17', 1, 'messi@gmail.com', 'Barcelona', '$2y$10$SrNRC5UPUAor4rOOBPKH4OqdowaF2K0EEPC9PSuXfxjaQLWQ1Nfcy');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cauhoi`
--
ALTER TABLE `cauhoi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cautraloi`
--
ALTER TABLE `cautraloi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dapan`
--
ALTER TABLE `dapan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dethi`
--
ALTER TABLE `dethi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ketqua`
--
ALTER TABLE `ketqua`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nguoirade`
--
ALTER TABLE `nguoirade`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `thisinh`
--
ALTER TABLE `thisinh`
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
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `cauhoi`
--
ALTER TABLE `cauhoi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `cautraloi`
--
ALTER TABLE `cautraloi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=147;

--
-- AUTO_INCREMENT for table `dapan`
--
ALTER TABLE `dapan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `dethi`
--
ALTER TABLE `dethi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `ketqua`
--
ALTER TABLE `ketqua`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `nguoirade`
--
ALTER TABLE `nguoirade`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `thisinh`
--
ALTER TABLE `thisinh`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
