-- phpMyAdmin SQL Dump
-- version 4.1.13
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 07, 2016 at 02:55 PM
-- Server version: 5.5.37
-- PHP Version: 5.5.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `isu_game`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstName` varchar(20) NOT NULL,
  `lastName` varchar(20) NOT NULL,
  `nickName` varchar(20) NOT NULL,
  `userName` varchar(20) NOT NULL,
  `password` varchar(256) NOT NULL,
  `email` varchar(50) NOT NULL,
  `location` varchar(50) NOT NULL,
  `items` varchar(50) NOT NULL,
  `unlock1` varchar(50) NOT NULL,
  `unlock2` varchar(50) NOT NULL,
  `unlock3` varchar(50) NOT NULL,
  `foodVines` varchar(50) NOT NULL,
  `vines` varchar(50) NOT NULL,
  `ladder` varchar(50) NOT NULL,
  `health` varchar(50) NOT NULL,
  `music` varchar(50) NOT NULL,
  `takenAlien` varchar(50) NOT NULL,
  `takenKey` varchar(50) NOT NULL,
  `takenPeanuts` varchar(50) NOT NULL,
  `takenMicro` varchar(50) NOT NULL,
  `takenFood` varchar(50) NOT NULL,
  `takenBar` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstName`, `lastName`, `nickName`, `userName`, `password`, `email`, `location`, `items`, `unlock1`, `unlock2`, `unlock3`, `foodVines`, `vines`, `ladder`, `health`, `music`, `takenAlien`, `takenKey`, `takenPeanuts`, `takenMicro`, `takenFood`, `takenBar`) VALUES
(1, 'Griffin', 'Cook', 'ggo', 'ggo', '$2y$10$8UsYQ.OGaSLMO', 'g_go@rocketmail.com', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(2, 'Mike', 'Charlton', 'Spidey', 'Mike', '$2y$10$fFG3nfdiiKh5O', 'michael@charlton.com', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(3, 'Griffin', 'Cook', 'ggo', 'griffincook91', '$2y$10$VoLseJ7SI0lX0', 'griffin@cook.ca', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(4, 'Audrey', 'Cook', 'Audrey', 'audrey', '$2y$10$ji.vBBrZI/NVZ', 'audrey@cook.ca', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(5, 'Big', 'Bird', 'Tweet', 'bb', '$2y$10$p8A6HGdsIGHAlopfb.Ab9O6aXQSsWV/WVy9abXetsWfWGGBZiqP7G', 'bb@bb.com', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(6, 'yellow', 'mellower', 'yellower', 'colour', '$2y$10$hzFjAz8bEfHVr', 'yell@col.com', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(7, 'cool', 'coolson', 'cool', 'cool', '$2y$10$rnPGumXJl5knu', 'coolio@yahoo.ca', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(8, 'hello', 'Johnson', 'hello', 'hello', '$2y$10$UggNWJD7WcQ4L', 'hello@hi.com', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(9, 'Griffin', 'Cook', 'ggo', 'g', '$2y$10$iz8NtTlYD5MEOeWyr/F1eOeJhtZOnkAelnzLKSYftC50uJTu1irNq', 'ggo@gg.com', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(10, '2016', '2016', '2016', '2016', '$2y$10$64BgmeAPSw.35cZUvIvR8.egRcnjIi6Za6/PT6mjg2ynSJRR5I87S', '20@16.com', 'bedroom', 'a:2:{i:0;s:0:"";i:1;s:4:"food";}', 'y', 'n', 'n', 'n', 'n', 'n', '0', 'n', 'n', 'y', 'n', 'n', 'y', 'n');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
