-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 06, 2017 at 11:46 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `land`
--

-- --------------------------------------------------------

--
-- Table structure for table `area`
--

CREATE TABLE IF NOT EXISTS `area` (
`id` int(11) NOT NULL,
  `area` varchar(512) NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` int(1) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `area`
--

INSERT INTO `area` (`id`, `area`, `image`, `status`, `created`) VALUES
(20, 'Utttora', '5388048e4a6c8fc4fc1a0fe5db64c446.jpg', 0, '2017-07-27 11:31:18'),
(21, 'Mirpur', 'f6dc6a2c72d70721319aafeb946a5289.jpg', 0, '2017-07-27 11:31:28'),
(22, 'Gulshan', 'a97adbc65c3e2238ae99d0f694289e1b.jpg', 0, '2017-07-27 11:31:41');

-- --------------------------------------------------------

--
-- Table structure for table `back_users`
--

CREATE TABLE IF NOT EXISTS `back_users` (
`id` int(11) NOT NULL,
  `email` varchar(128) NOT NULL,
  `password` varchar(70) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `token` varchar(100) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `level` int(1) NOT NULL,
  `status` int(1) NOT NULL,
  `IP` varchar(100) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `first_name` varchar(25) CHARACTER SET utf8 NOT NULL,
  `last_name` varchar(25) CHARACTER SET utf8 NOT NULL,
  `phn` varchar(30) CHARACTER SET utf8 NOT NULL,
  `address` text CHARACTER SET utf8 NOT NULL,
  `avatar` varchar(20) CHARACTER SET utf8 NOT NULL DEFAULT 'default.png',
  `joined_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `online_timestamp` varchar(30) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `back_users`
--

INSERT INTO `back_users` (`id`, `email`, `password`, `token`, `level`, `status`, `IP`, `first_name`, `last_name`, `phn`, `address`, `avatar`, `joined_date`, `online_timestamp`) VALUES
(1, 'admin@test.com', '$2a$12$194Ikhvx5AZ9.HijXdjutu2DtnItiLCeo9X8jeEkn.uTh6VHN6j.S', 'e40abc0c7ba1298b6676c4e40432726a', 2, 1, '', 'Super', 'Admin', '0123456789', 'Dhaka, Bangladesh', 'default.png', '2016-09-27 05:30:48', '1502012541');

-- --------------------------------------------------------

--
-- Table structure for table `common_settings`
--

CREATE TABLE IF NOT EXISTS `common_settings` (
`id` int(11) NOT NULL,
  `logo` varchar(128) NOT NULL,
  `add` text NOT NULL,
  `mail1` varchar(512) NOT NULL,
  `mail2` varchar(512) NOT NULL,
  `phn1` varchar(50) NOT NULL,
  `phn2` varchar(50) NOT NULL,
  `hot_phn` varchar(50) NOT NULL,
  `fb` varchar(256) NOT NULL,
  `twt` varchar(256) NOT NULL,
  `link` varchar(256) NOT NULL,
  `g_plus` varchar(256) NOT NULL,
  `copyright` varchar(256) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `common_settings`
--

INSERT INTO `common_settings` (`id`, `logo`, `add`, `mail1`, `mail2`, `phn1`, `phn2`, `hot_phn`, `fb`, `twt`, `link`, `g_plus`, `copyright`) VALUES
(1, '35cb22ea359d12bc877b14a172a8eb85.png', 'Address: PO Box 859, La Corner St, Sanfransisco, CA 52698', 'email1@domain.com', 'email2@domain2.com', '(800) 123-4567', '(800) 987-4321', ' +99 99 88 77 66', 'https://www.facebook.com/', 'https://twitter.com/', 'https://www.linkedin.com/', 'https://plus.google.com/', '© Copyright 2017.  All Rights Reserved.');

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE IF NOT EXISTS `package` (
`id` int(11) NOT NULL,
  `area` varchar(512) NOT NULL,
  `name` varchar(512) NOT NULL,
  `size` varchar(512) NOT NULL,
  `add` varchar(512) NOT NULL,
  `price` varchar(255) NOT NULL,
  `s_desc` text NOT NULL,
  `l_desc` text NOT NULL,
  `type` varchar(255) NOT NULL,
  `m_image` varchar(256) NOT NULL COMMENT 'main image',
  `status` int(1) NOT NULL DEFAULT '0',
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`id`, `area`, `name`, `size`, `add`, `price`, `s_desc`, `l_desc`, `type`, `m_image`, `status`, `created`) VALUES
(3, 'Mirpur', 'Test Package 1', '12000 1', '1 Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', '2000000 1', '1 Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', '1 Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 'Sale', '17cab8862f8b885e02b5113019e9bdc7.jpg', 1, '2017-08-06 09:07:43'),
(5, 'Mirpur', 'TEST PACKAGE 2', '1400 sft', '102 No, Mirpur-1', '50,000.00 Tjk', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen bookLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen bookLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book', 'Development', 'a2865a694b0d1ddd90ebab0483bbe016.jpg', 1, '2017-08-06 09:05:57'),
(6, 'Gulshan', 'TEST PACKAGE 3', '1300 sft', '250, Gulshan Road', '20,0000', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen bookLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen bookLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book', 'Agro', '02327820c8cddd1e9dd347bfb6cf5f27.jpg', 1, '2017-08-06 09:07:20'),
(7, 'Mirpur', 'TEST PACKAGE 04', '1800 sft', 'mirpur-1, Dhaka-1216', '10,000,00', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen bookLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen bookLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book', 'Industries', '568dbcd60c0f45a999f4078869d82823.jpg', 1, '2017-08-06 09:08:50');

-- --------------------------------------------------------

--
-- Table structure for table `pack_features`
--

CREATE TABLE IF NOT EXISTS `pack_features` (
  `id` int(11) NOT NULL,
  `feature` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pack_features`
--

INSERT INTO `pack_features` (`id`, `feature`) VALUES
(3, 'feat 1'),
(3, 'feat 1'),
(5, 'key 01'),
(5, 'key 02'),
(5, 'key 03'),
(5, 'key 04'),
(6, 'key 01'),
(6, 'key 02'),
(6, 'key 03'),
(7, 'key 01'),
(7, 'key 02'),
(7, 'key 03');

-- --------------------------------------------------------

--
-- Table structure for table `pack_images`
--

CREATE TABLE IF NOT EXISTS `pack_images` (
  `id` int(11) NOT NULL,
  `image` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pack_images`
--

INSERT INTO `pack_images` (`id`, `image`) VALUES
(3, '59dd4e9da86845f0e40ce54a8f4591a8.jpg'),
(3, '09b2c53061bc40f09f2ab353b86357b9.jpg'),
(5, '773c0f40bafbfe272c4628fe9440bbc6.jpg'),
(5, '59ac3ca50584565f9741c422523c7fbf.jpg'),
(5, 'd0693557ac0cdf0d2481e6e42a67aee7.jpg'),
(5, '2e871cc37c48f259386587272b744198.jpg'),
(6, '13b0fd6d6f5e5c388e987c009f505402.jpg'),
(6, '5fed1d5a961ece621370c7f2749ce2e4.jpg'),
(6, '8c921ed8df8e79b78cf9d1cceba13e1d.jpg'),
(6, '291f762c2c169683d6a9110f7b0c4daf.jpg'),
(6, 'b7f2cf411557cac78ca138819e29b114.jpg'),
(7, 'f299de2d7584a680f38034deffdac9fa.jpg'),
(7, '7c307316db8a9cd6adeb55d1ef51f7db.jpg'),
(7, '60ef4b836a9044e126e73373de867098.jpg'),
(7, 'f85c14fe54f5f61ee3b5192b462810da.jpg'),
(7, 'ca8d6ad4401e0fe3e5b499b246c48704.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE IF NOT EXISTS `slider` (
`id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `desc` text NOT NULL,
  `link` text NOT NULL,
  `info_01` varchar(512) NOT NULL,
  `info_02` varchar(512) NOT NULL,
  `info_03` varchar(512) NOT NULL,
  `info_04` varchar(512) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `title`, `desc`, `link`, `info_01`, `info_02`, `info_03`, `info_04`, `image`) VALUES
(5, 'First Slider', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'test_link', 'info 01', 'info 02', 'info 03', 'info 04', '33a74497045cba76f36d4ea449eaeee8.jpg'),
(6, 'Second Slider', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'test_link', 'info 01', 'info 02', 'info 03', 'info 04', '025ad232decb771c3a173df97c16b746.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `area`
--
ALTER TABLE `area`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `back_users`
--
ALTER TABLE `back_users`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `common_settings`
--
ALTER TABLE `common_settings`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `package`
--
ALTER TABLE `package`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `area`
--
ALTER TABLE `area`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `back_users`
--
ALTER TABLE `back_users`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `common_settings`
--
ALTER TABLE `common_settings`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `package`
--
ALTER TABLE `package`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
