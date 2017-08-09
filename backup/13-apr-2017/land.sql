-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 13, 2017 at 03:26 PM
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
(1, 'admin@test.com', '$2a$12$194Ikhvx5AZ9.HijXdjutu2DtnItiLCeo9X8jeEkn.uTh6VHN6j.S', '8001bfb98d770b659273de4c5e691d80', 2, 1, '', 'Super', 'Admin', '0123456789', 'Dhaka, Bangladesh', 'default.png', '2016-09-27 05:30:48', '1492089730');

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
  `eme_phn` varchar(50) NOT NULL,
  `appoint_phn` varchar(50) NOT NULL,
  `sun_thu` varchar(256) NOT NULL,
  `fri` varchar(256) NOT NULL,
  `sat` varchar(256) NOT NULL,
  `fb` varchar(256) NOT NULL,
  `twt` varchar(256) NOT NULL,
  `link` varchar(256) NOT NULL,
  `copyright` varchar(256) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `common_settings`
--

INSERT INTO `common_settings` (`id`, `logo`, `add`, `mail1`, `mail2`, `phn1`, `phn2`, `eme_phn`, `appoint_phn`, `sun_thu`, `fri`, `sat`, `fb`, `twt`, `link`, `copyright`) VALUES
(1, '8891a2789a101d6c42d32d4e034ec215.png', '1234 Street Name, City Name', 'first_mail@example.com', 'second_mail@example.com', '(800) 123-4567', '(800) 987-4321', '(800) 999-9999', ' +1 874 801 8014', ' 8:30 am to 5:00 pm', 'Closed', '9:30 am to 1:00 pm', 'facebook.com', 'twitter.com', 'linkedin.com', '© Copyright 2017. All Rights Reserved.');

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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`id`, `area`, `name`, `size`, `address`, `price`, `short_desc`, `long_desc`, `utility`, `image`, `image2`, `image3`, `image4`, `image5`, `type`) VALUES
(1, 'Uttora', 'package name 01', '1400*800', '15/3 no road', '10,0000', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '* Lorem Ipsum is simply dummy text of the printing and typesetting industry.\r\n* Lorem Ipsum is simply dummy text of the printing and typesetting industry.\r\n* Lorem Ipsum is simply dummy text of the printing and typesetting industry.\r\n* Lorem Ipsum is simply dummy text of the printing and typesetting industry.\r\n', '6fb0838a4788cbaed279e8c92537d89f.jpg', '69522a0ab4ab8e957aa26e46f66349f6.jpg', '413a3347f9bb06facd5a9190cb9ee128.jpg', '39be881bf2d7416f55374a78203afa3f.jpg', '2151411227b48490afb995cfca361b23.jpg', 'Sale'),
(2, 'Gulshan', 'Package name 02', '500*900', '13/5 Gulshan', '50,0000', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '* Lorem Ipsum is simply dummy text of the printing and typesetting industry.\r\n* Lorem Ipsum is simply dummy text of the printing and typesetting industry.\r\n* Lorem Ipsum is simply dummy text of the printing and typesetting industry.\r\n* Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '314d4f1f1b994fe3940dd7a8cb9cd47a.jpg', 'd2311dc454843e85ea3d6e88f7007f4f.jpg', 'a8d466a94d995e07bdc0af74f18260cf.jpg', 'f6c1906bc7d459bfb4aa4f066d14e0a4.jpg', 'd52f28ee9d2580593986d840a7a5e4d7.jpg', 'Sale'),
(3, 'Bonani', 'package name 03', '600*800', '1500*600 Bonani', '60,0000', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '* Lorem Ipsum is simply dummy text of the printing and typesetting industry.\r\n* Lorem Ipsum is simply dummy text of the printing and typesetting industry.\r\n *Lorem Ipsum is simply dummy text of the printing and typesetting industry.\r\n* Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'be3ae530d84c71724b41e4e1e96346e9.jpg', 'd49576c3f09b8f4dd2ed891e017f26af.jpg', 'a22e16d8f06dc79efb5a3ed76b177e76.jpg', '5dadd6cd38e8292d55432e0f6decfa9b.jpg', 'f02e35504d87c505da63fad82aeaf539.jpg', 'Sale');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE IF NOT EXISTS `slider` (
`id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `desc` text NOT NULL,
  `link` text NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `title`, `desc`, `link`, `image`) VALUES
(4, 'Specialists', '20 Years Caring About You', 'We are located in New York', '6445f4f3e96121b96f49ae24dd5a20fe.jpg'),
(5, 'Medical Appointment', 'Talk to us now to schedule a medical appointment', 'Online or Over the Phone', '30d6842de8c455e7d0ff203a41dca40a.jpg');

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
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
