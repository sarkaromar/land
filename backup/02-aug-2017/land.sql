-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 02, 2017 at 03:13 PM
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
(1, 'admin@test.com', '$2a$12$194Ikhvx5AZ9.HijXdjutu2DtnItiLCeo9X8jeEkn.uTh6VHN6j.S', 'ede9c7115e13c0af7af6f0bdd481a7be', 2, 1, '', 'Super', 'Admin', '0123456789', 'Dhaka, Bangladesh', 'default.png', '2016-09-27 05:30:48', '1501678429');

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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`id`, `area`, `name`, `size`, `add`, `price`, `s_desc`, `l_desc`, `type`, `m_image`, `status`, `created`) VALUES
(1, 'Utttora', 'test package', '1500 sft', 'address', '5000000', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer tookLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took', 'Sale', '0d83fa79f0a2afa86ab5707acff83d13.jpg', 0, '2017-08-02 11:08:41'),
(2, 'Mirpur', 'TEST PACKAGE 02', '1600 sft', 'test add ', 'price 50000', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer tookLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer tookLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took', 'Development', '343c48750db42cd9f49e1a164f4607ec.jpg', 0, '2017-08-02 11:51:02');

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
(1, 'k1'),
(1, 'k2'),
(1, 'k3'),
(1, 'k4'),
(1, 'k5'),
(2, 'key 01'),
(2, 'key 02'),
(2, 'key 03'),
(2, 'key 04'),
(2, 'key 05');

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
(1, 'cb54ce639412fef6fcd32b4bb977d38e.jpg'),
(1, '0b788478faa97270c8a7e14ea83fceb1.jpg'),
(1, '2ab108c80ba682d63e0bb0d4102a7ed2.jpg'),
(1, 'f546af0c4569e59076eac6fb16b4a5d6.jpg'),
(1, '9e26ac247bb6243868564a07cbf4a41d.jpg'),
(2, 'b7e549cef0e92a533b0ae0e3d22db1fa.jpg'),
(2, 'f222ea95e8b63e0347c0e1504ae9bb09.jpg'),
(2, 'c684d214fc41f0c3da802e8792e8dc97.jpg'),
(2, '4270e1bac3b5f983e2b01b8b6a28d69f.jpg'),
(2, '4d3620e7195f5136af113fd2fe8d3427.jpg');

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
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
