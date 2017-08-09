-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2017 at 11:52 AM
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
(1, 'admin@test.com', '$2a$12$194Ikhvx5AZ9.HijXdjutu2DtnItiLCeo9X8jeEkn.uTh6VHN6j.S', '69ec6a14b385461e73fc5606e41181d0', 2, 1, '', 'Super', 'Admin', '0123456789', 'Dhaka, Bangladesh', 'default.png', '2016-09-27 05:30:48', '1492422364');

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
-- Table structure for table `coverage_area`
--

CREATE TABLE IF NOT EXISTS `coverage_area` (
`id` int(11) NOT NULL,
  `area` varchar(512) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `coverage_area`
--

INSERT INTO `coverage_area` (`id`, `area`) VALUES
(1, 'Uttora'),
(2, 'Gulshan'),
(3, 'Bonani'),
(4, 'Mirpur'),
(5, 'Savar'),
(6, 'test');

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE IF NOT EXISTS `package` (
`id` int(11) NOT NULL,
  `area` varchar(512) NOT NULL,
  `name` varchar(512) NOT NULL,
  `size` varchar(512) NOT NULL,
  `address` varchar(512) NOT NULL,
  `price` varchar(255) NOT NULL,
  `short_desc` text NOT NULL,
  `long_desc` text NOT NULL,
  `utility` varchar(512) NOT NULL,
  `image` varchar(255) NOT NULL,
  `image2` varchar(255) NOT NULL,
  `image3` varchar(255) NOT NULL,
  `image4` varchar(255) NOT NULL,
  `image5` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`id`, `area`, `name`, `size`, `address`, `price`, `short_desc`, `long_desc`, `utility`, `image`, `image2`, `image3`, `image4`, `image5`, `type`) VALUES
(1, 'Uttora', 'package name 01', '1400*800', '15/3 no road', '10,0000', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '* Lorem Ipsum is simply dummy text of the printing and typesetting industry.\r\n* Lorem Ipsum is simply dummy text of the printing and typesetting industry.\r\n* Lorem Ipsum is simply dummy text of the printing and typesetting industry.\r\n* Lorem Ipsum is simply dummy text of the printing and typesetting industry.\r\n', '6fb0838a4788cbaed279e8c92537d89f.jpg', '69522a0ab4ab8e957aa26e46f66349f6.jpg', '413a3347f9bb06facd5a9190cb9ee128.jpg', '39be881bf2d7416f55374a78203afa3f.jpg', '2151411227b48490afb995cfca361b23.jpg', 'Sale'),
(2, 'Gulshan', 'Package name 02', '500*900', '13/5 Gulshan', '50,0000', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '* Lorem Ipsum is simply dummy text of the printing and typesetting industry.\r\n* Lorem Ipsum is simply dummy text of the printing and typesetting industry.\r\n* Lorem Ipsum is simply dummy text of the printing and typesetting industry.\r\n* Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '314d4f1f1b994fe3940dd7a8cb9cd47a.jpg', 'd2311dc454843e85ea3d6e88f7007f4f.jpg', 'a8d466a94d995e07bdc0af74f18260cf.jpg', 'f6c1906bc7d459bfb4aa4f066d14e0a4.jpg', 'd52f28ee9d2580593986d840a7a5e4d7.jpg', 'Sale'),
(3, 'Bonani', 'package name 03', '600*800', '1500*600 Bonani', '60,0000', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '* Lorem Ipsum is simply dummy text of the printing and typesetting industry.\r\n* Lorem Ipsum is simply dummy text of the printing and typesetting industry.\r\n *Lorem Ipsum is simply dummy text of the printing and typesetting industry.\r\n* Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'be3ae530d84c71724b41e4e1e96346e9.jpg', 'd49576c3f09b8f4dd2ed891e017f26af.jpg', 'a22e16d8f06dc79efb5a3ed76b177e76.jpg', '5dadd6cd38e8292d55432e0f6decfa9b.jpg', 'f02e35504d87c505da63fad82aeaf539.jpg', 'Sale'),
(4, 'Savar', 'test Package Name', '8000*9000', '15/46, ABCD, Road', '60,000,00', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. ', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. ', '* Lorem Ipsum is simply dummy text of the printing and typesetting industry. \r\n* Lorem Ipsum is simply dummy text of the printing and typesetting industry. \r\n* Lorem Ipsum is simply dummy text of the printing and typesetting industry. \r\n* Lorem Ipsum is simply dummy text of the printing and typesetting industry. ', 'ac2b1999b97b1b75151186c94abc5a9e.jpg', 'b25ff7e6fd3acb816e073c2981314767.jpg', 'b4a41f4057c1143ff7b6610fa86a173c.jpg', '0e49d47eaf7c2288d7219c69713181c8.jpg', 'bec9ab842e187207bee83cc40b06d4c1.jpg', 'Sale'),
(5, 'Gulshan', 'Package 01', '600*800', '15 no east ', '60,000,00', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. ', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. ', '* Lorem Ipsum is simply dummy text of the printing and typesetting industry. \r\n*Lorem Ipsum is simply dummy text of the printing and typesetting industry. \r\n*Lorem Ipsum is simply dummy text of the printing and typesetting industry. \r\n*Lorem Ipsum is simply dummy text of the printing and typesetting industry. ', '12a654500de1fe320cad0f9540293024.jpg', '9434e2f16682fb488bfb663d3b498a67.jpg', '7854c07e887cc96652e36826da626752.jpg', 'e207591187580886591484c7dec3b86a.jpg', 'd3fdc05202a4a7cce31c1ed5d98504f4.jpg', 'Development'),
(6, 'Mirpur', 'Package name 03', '6000*7000', '15/3 abcds', '80,000,00', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. ', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. ', '* Lorem Ipsum is simply dummy text of the printing and typesetting industry. \r\n* Lorem Ipsum is simply dummy text of the printing and typesetting industry. \r\n* Lorem Ipsum is simply dummy text of the printing and typesetting industry. ', '193476c6b17a3b30d9f572ba78f3e548.jpg', '14166d5db2266f2c24f95c1664d3cf3e.jpg', 'b02316cf292fbeace87082099ada5f28.jpg', '85e3beea2f08f1052baa79d4e557f51a.jpg', 'db0617202166efe339f44aef1be94485.jpg', 'Development'),
(7, 'Mirpur', 'Special Package 01', '900*8000', 'Address: Address: PO Box 859, La Corner St, Sanfransisco, CA 52698 x', '10,0000, 00 ', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the  ', '* Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.\r\n* Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetti', '012fead8c8a1c261ac8acaa4a4856505.jpg', 'a1331bbce32e3ea8e190a1459d50b944.jpg', 'd7fda0b2f51e99d4a9cd911bbd17c759.jpg', '4d0a7fe7094d63be205f7dc353e788f5.jpg', 'c31d1112045890276c5c0387365f3a95.jpg', 'Sale');

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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `title`, `desc`, `link`, `info_01`, `info_02`, `info_03`, `info_04`, `image`) VALUES
(1, 'Package Name 01', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. ', 'link', 'North-East', '1400*900', '', '2,00,000', '32ac6a546a68996cadfc066c867b54ff.jpg'),
(2, 'Package Name 02', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. ', 'link', 'North-East', '800*900', '', '1,0,0000', 'a8f3ba91f6b720eaec3166b1da1adbe2.jpg'),
(3, 'Package Name 03', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. ', 'link', 'North-East', '600*700', '', '3,40,0000', '3d0586bc9c98eff74311c149c8ceec84.jpg');

--
-- Indexes for dumped tables
--

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
-- Indexes for table `coverage_area`
--
ALTER TABLE `coverage_area`
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
-- AUTO_INCREMENT for table `coverage_area`
--
ALTER TABLE `coverage_area`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `package`
--
ALTER TABLE `package`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
