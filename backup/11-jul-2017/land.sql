-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 11, 2017 at 01:02 PM
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
(1, 'admin@test.com', '$2a$12$194Ikhvx5AZ9.HijXdjutu2DtnItiLCeo9X8jeEkn.uTh6VHN6j.S', '7e2ae5a68b2c8f3ef88cdd77995a2511', 2, 1, '', 'Super', 'Admin', '0123456789', 'Dhaka, Bangladesh', 'default.png', '2016-09-27 05:30:48', '1499770518');

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
  `area` varchar(512) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `coverage_area`
--

INSERT INTO `coverage_area` (`id`, `area`, `image`) VALUES
(2, 'Mirpur', 'a6285caae0df1fe4eb5226dcab5fba12.jpg'),
(3, 'Gulshan', 'dfff17515a420861061e3d55f98651fa.jpg'),
(4, 'Mohammodpur', '4598a108c4edd0bb21e1e62b901b9f6b.jpg'),
(5, 'Bonani', '7db894c87c00eb5a34c1eef6cb1d641d.jpg'),
(6, 'Uttora', '33d93dc706b4f727c8b41edddd5b6b7d.jpg'),
(7, 'New Market', '9407a8457a75e47fb30deb9674dae7a9.jpg'),
(8, 'Bangla Motor', '1b5af1f2e57b52869f4eae0ebe927c27.jpg');

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
  `feat1` varchar(512) NOT NULL,
  `feat2` varchar(512) NOT NULL,
  `feat3` varchar(512) NOT NULL,
  `feat4` varchar(512) NOT NULL,
  `feat5` varchar(512) NOT NULL,
  `feat6` varchar(512) NOT NULL,
  `feat7` varchar(512) NOT NULL,
  `feat8` varchar(512) NOT NULL,
  `feat9` varchar(512) NOT NULL,
  `image` varchar(255) NOT NULL,
  `image2` varchar(255) NOT NULL,
  `image3` varchar(255) NOT NULL,
  `image4` varchar(255) NOT NULL,
  `image5` varchar(255) NOT NULL,
  `image6` varchar(255) NOT NULL,
  `image7` varchar(255) NOT NULL,
  `image8` varchar(255) NOT NULL,
  `image9` varchar(255) NOT NULL,
  `image10` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`id`, `area`, `name`, `size`, `address`, `price`, `short_desc`, `long_desc`, `feat1`, `feat2`, `feat3`, `feat4`, `feat5`, `feat6`, `feat7`, `feat8`, `feat9`, `image`, `image2`, `image3`, `image4`, `image5`, `image6`, `image7`, `image8`, `image9`, `image10`, `type`) VALUES
(1, 'Uttora', 'Special Package 01', '1400*500', '250 No Ali Road', '10,000', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'Key Feature 01', 'Key Feature 02', 'Key Feature 03', 'Key Feature 04', 'Key Feature 05', 'Key Feature 06', 'Key Feature 07', 'Key Feature 08', 'Key Feature 09', '45117435bc08f92c5c798b562011b8b3.jpg', 'dc0d9577b5ade0d2e8047434bd2c44eb.jpg', '7a7ab956cbd5bae69fe14270d086fddd.jpg', '7ec4f7bbb4de0d6147b4fd83474c0a2d.jpg', '1af57b0b7c0d44191d0eabd1a3d538f9.jpg', '5a5b5d943ad74002f8f73f8d50f898a6.jpg', 'a2e3afd1b4a7be3a88428d706210684c.jpg', '5c0fbe1a3285de803ac16521e23138f4.jpg', '493a8719303ea3ee1ede0977c8c7fa8e.jpg', '01e162c28b4f9cd5ef0828ef4d9988a8.jpg', 'Sale'),
(2, 'Gulshan', 'Special Package 02', '500*600', 'Rana Khan Road, ', '10,0000', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'From International', 'From International', 'From International', 'From International', 'From International', 'From International', 'From International', 'From International', 'From International', '5b5190e46d3ee7982dda22a69cb5c6ec.jpg', 'bdb24eb0a77fdb4ed627b4d0937431a8.jpg', 'b1dad4de90c4d1a7a2f9a109abc701b0.jpg', '826b1c98f5a46dcfce0d198b243dbdba.jpg', '8f5c9a960fddd43cb850019bfda46ff8.jpg', '8a7808a84fc70370dbb2056f0ff153b4.jpg', 'ab49869cbc0d36deedb11b53a46434e6.jpg', 'fff9518d37ffb0dec2bb0d2c3ce53364.jpg', '2dec3d454686f04660148010acc0eb33.jpg', '013eef0ad3a891617e5e6dc8a9f73759.jpg', 'Development');

-- --------------------------------------------------------

--
-- Table structure for table `pack_features`
--

CREATE TABLE IF NOT EXISTS `pack_features` (
  `id` int(11) NOT NULL,
  `feature` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `pack_images`
--

CREATE TABLE IF NOT EXISTS `pack_images` (
  `id` int(11) NOT NULL,
  `image` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `package`
--
ALTER TABLE `package`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
