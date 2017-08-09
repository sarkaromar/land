-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 13, 2017 at 12:48 PM
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
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `area`
--

INSERT INTO `area` (`id`, `area`, `image`, `status`, `created`) VALUES
(2, 'Mirpur', 'a6285caae0df1fe4eb5226dcab5fba12.jpg', 1, '2017-07-13 08:20:40'),
(3, 'Gulshan', 'dfff17515a420861061e3d55f98651fa.jpg', 1, '2017-07-13 08:20:43'),
(4, 'Mohammodpur', '4598a108c4edd0bb21e1e62b901b9f6b.jpg', 1, '2017-07-13 08:20:45'),
(5, 'Bonani', '7db894c87c00eb5a34c1eef6cb1d641d.jpg', 1, '2017-07-13 08:20:47'),
(6, 'Uttora', '33d93dc706b4f727c8b41edddd5b6b7d.jpg', 1, '2017-07-13 08:20:50'),
(7, 'New Market', '9407a8457a75e47fb30deb9674dae7a9.jpg', 1, '2017-07-13 08:20:52'),
(8, 'Bangla Motor', '1b5af1f2e57b52869f4eae0ebe927c27.jpg', 1, '2017-07-13 08:20:54');

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
(1, 'admin@test.com', '$2a$12$194Ikhvx5AZ9.HijXdjutu2DtnItiLCeo9X8jeEkn.uTh6VHN6j.S', '882ebbbb1f5db7080101bf75fa4207a2', 2, 1, '', 'Super', 'Admin', '0123456789', 'Dhaka, Bangladesh', 'default.png', '2016-09-27 05:30:48', '1499942695');

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
  `status` int(1) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`id`, `area`, `name`, `size`, `add`, `price`, `s_desc`, `l_desc`, `type`, `m_image`, `status`, `created`) VALUES
(1, 'Uttora', 'Special Package 01', '1400*500', '250 No Ali Road', '10,000', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'Sale', '', 1, '2017-07-13 08:21:01'),
(2, 'Gulshan', 'Special Package 02', '500*600', 'Rana Khan Road, ', '10,0000', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'Development', '', 1, '2017-07-13 08:21:03'),
(3, 'Mohammodpur', 'asdf', 'sss', 'aa', 'pp', 'ssdd', 'lldd', 'Agro', 'da4fc02654b1f541ca53073bee8a553d.jpg', 0, '2017-07-13 10:26:47'),
(4, 'Mirpur', 'hj,gjkgjk', 'ghjk', 'kghjk', 'gkghjkghj', 'ghjk', 'kgjkghjk', 'Sale', '643da456fc44611f13fa61ebfb095516.jpg', 0, '2017-07-13 10:45:33'),
(5, 'Mirpur', 'hj,gjkgjk', 'ghjk', 'kghjk', 'gkghjkghj', 'ghjk', 'kgjkghjk', 'Sale', 'd168c7130b0ea75a04fb15a0e51967d4.jpg', 0, '2017-07-13 10:46:23'),
(6, 'Mirpur', 'hj,gjkgjk', 'ghjk', 'kghjk', 'gkghjkghj', 'ghjk', 'kgjkghjk', 'Sale', '8459ecfb669ddb04709d4241da58f53c.jpg', 0, '2017-07-13 10:47:41');

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
(3, 'kk 1'),
(4, 'ghjkgjkg'),
(4, 'ghjkgjk'),
(4, 'ghjkgjkg'),
(5, 'ghjkgjkg'),
(5, 'jkhjk'),
(5, 'hjk'),
(6, 'ghjkgjkg'),
(6, 'jkljkljkl'),
(6, 'jkl');

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
(1, '314952274ca31dcc0bdb27e1905fbbee.jpg'),
(1, '1150ea0a7ec7fe0eed07eb9e9b6737cb.jpg'),
(1, 'aaa8d2c2325118372d35daebbf7c6ef9.jpg'),
(1, 'e2f07d2a4c693b22e425f091c24d9696.jpg'),
(1, '42f1a061e9008837567f46eedbffb8ea.jpg'),
(1, '769650e047204ed7ac68e5e4ed37153e.jpg');

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
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `title`, `desc`, `link`, `info_01`, `info_02`, `info_03`, `info_04`, `image`) VALUES
(5, 'First Slider', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'test_link', 'info 01', 'info 02', 'info 03', 'info 04', '33a74497045cba76f36d4ea449eaeee8.jpg'),
(6, 'Second Slider', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'test_link', 'info 01', 'info 02', 'info 03', 'info 04', '025ad232decb771c3a173df97c16b746.jpg'),
(7, 'Third Slider', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'test_link', 'info 01', 'info 02', 'info 03', 'info 04', '708d793e3d0268fadf531ff69bb1a38e.jpg'),
(8, 'Fourth Slider', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'test_link', 'info 01', 'info 02', 'info 03', 'info 04', '3e730474f30950a9bbf2a78c40cef896.jpg');

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
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
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
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
