-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 23, 2017 at 11:48 AM
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
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `area`
--

INSERT INTO `area` (`id`, `area`, `image`, `status`, `created`) VALUES
(13, 'Mirpur', '836cbad80508f85dbb5aa6e6e8636055.jpg', 0, '2017-07-20 07:55:27'),
(14, 'Uttora', '0a014720672ca041eff9b78564c9f43f.jpg', 0, '2017-07-20 07:55:52'),
(15, 'Gulshan', 'c508f46f6af69c20020bda44d09827b3.jpg', 0, '2017-07-20 07:56:21'),
(16, 'Dhanmondi', 'e38aa2851e4f484b1f51dd7bf9e7dec1.jpg', 0, '2017-07-20 07:57:05'),
(17, 'Muhammodpur', '59e4115c4df395b1712d115ccfd60ab9.jpg', 0, '2017-07-20 07:57:21');

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
(1, 'admin@test.com', '$2a$12$194Ikhvx5AZ9.HijXdjutu2DtnItiLCeo9X8jeEkn.uTh6VHN6j.S', 'b7da955c917e81eed36ddc9da22f4a44', 2, 1, '', 'Super', 'Admin', '0123456789', 'Dhaka, Bangladesh', 'default.png', '2016-09-27 05:30:48', '1500802942');

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
  `image2` varchar(255) NOT NULL,
  `image3` varchar(255) NOT NULL,
  `image4` varchar(255) NOT NULL,
  `image5` varchar(255) NOT NULL,
  `image6` varchar(255) NOT NULL,
  `image7` varchar(255) NOT NULL,
  `image8` varchar(255) NOT NULL,
  `image9` varchar(255) NOT NULL,
  `image10` varchar(255) NOT NULL,
  `status` int(1) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`id`, `area`, `name`, `size`, `add`, `price`, `s_desc`, `l_desc`, `type`, `m_image`, `image2`, `image3`, `image4`, `image5`, `image6`, `image7`, `image8`, `image9`, `image10`, `status`, `created`) VALUES
(1, 'Uttora', 'test', '500*6000', 'add', '50000', 's desc', 'l desc', 'Development', '15f86b3f5f9e3dd945f8b53fd003d967.jpg', '1846948bc37def61a8f886ead2bc7dda.jpg', '6ee3ce3aac632afeb878234b6941f6ab.jpg', '77329608dbb33a7f9388911b03497fae.jpg', '4af43ca3f4d0959ef372bb5ac3329d3f.png', '07c131350ec5d5282698db180bb34d87.png', 'd0bcfa946caf294438ad63606ec3f9d5.jpg', '70807b2196e3590c1df0854ce5c68536.jpg', '82df2bdc8b7a910e6ad6dfdf16d3a3d4.jpg', '66c4e2ebbde46396ee79feb5924cf719.jpg', 0, '2017-07-23 08:11:39'),
(2, 'Gulshan', 'test2', '10*90', 'add', '5000000', 's desc', 'l desc', 'Development', '6f2874429e818518305ffd191f485112.jpg', 'fa0134072e68947e612d58cf7f6b4160.png', 'e61d9c0e8a0c25a51d7f520358204969.png', '108c2b617467002303d5db03e879e13f.png', '38004db19dcd10ed23f6ec41a4e83b02.png', '8880bf5bb4c208cafe0c576ea95cee02.png', '85dfb10c2157082c20e8f9f70e4333e8.png', '681d8025a87027cd136dce706b6ecd58.png', '6107cefe88a4fb60a511099ab5c63680.png', 'd96d0bc5010cd90f040b745bf0bdc9ed.png', 0, '2017-07-23 08:17:43');

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
(1, 'key1 '),
(1, 'key2'),
(1, 'key3'),
(2, 'asdf'),
(2, 'fsdaf'),
(2, 'fgjhfgjh'),
(2, 'jghjfg');

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
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `title`, `desc`, `link`, `info_01`, `info_02`, `info_03`, `info_04`, `image`) VALUES
(5, 'First Slider', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'test_link', 'info 01', 'info 02', 'info 03', 'info 04', '33a74497045cba76f36d4ea449eaeee8.jpg'),
(6, 'Second Slider', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'test_link', 'info 01', 'info 02', 'info 03', 'info 04', '025ad232decb771c3a173df97c16b746.jpg'),
(9, 'asdf', 'asdf', 'asdf', 'asdf', 'asdf', 'asdf', 'asdf', '7e740a396af2db05747b871d4c64a732.jpg');

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
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
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
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
