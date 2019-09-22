-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: Jan 11, 2016 at 06:37 AM
-- Server version: 5.5.42
-- PHP Version: 5.6.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `isu_game`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstName` varchar(20) NOT NULL,
  `lastName` varchar(20) NOT NULL,
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
  `helpCount` varchar(10000) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstName`, `lastName`, `userName`, `password`, `email`, `location`, `items`, `unlock1`, `unlock2`, `unlock3`, `foodVines`, `vines`, `ladder`, `health`, `music`, `takenAlien`, `takenKey`, `takenPeanuts`, `takenMicro`, `takenFood`, `takenBar`, `helpCount`) VALUES
(1, 'Griffin', 'Cook', 'ggo', '$2y$10$8UsYQ.OGaSLMO', 'g_go@rocketmail.com', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0'),
(2, 'Mike', 'Charlton', 'Mike', '$2y$10$fFG3nfdiiKh5O', 'michael@charlton.com', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0'),
(3, 'Griffin', 'Cook', 'griffincook91', '$2y$10$VoLseJ7SI0lX0', 'griffin@cook.ca', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0'),
(4, 'Audrey', 'Cook', 'audrey', '$2y$10$ji.vBBrZI/NVZ', 'audrey@cook.ca', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0'),
(5, 'Big', 'Bird', 'bb', '$2y$10$p8A6HGdsIGHAlopfb.Ab9O6aXQSsWV/WVy9abXetsWfWGGBZiqP7G', 'bb@bb.com', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0'),
(6, 'yellow', 'mellower', 'colour', '$2y$10$hzFjAz8bEfHVr', 'yell@col.com', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0'),
(7, 'cool', 'coolson', 'cool', '$2y$10$rnPGumXJl5knu', 'coolio@yahoo.ca', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0'),
(8, 'hello', 'Johnson', 'hello', '$2y$10$UggNWJD7WcQ4L', 'hello@hi.com', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0'),
(9, 'Griffin', 'Cook', 'g', '$2y$10$iz8NtTlYD5MEOeWyr/F1eOeJhtZOnkAelnzLKSYftC50uJTu1irNq', 'ggo@gg.com', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0'),
(10, '2016', '2016', '2016', '$2y$10$64BgmeAPSw.35cZUvIvR8.egRcnjIi6Za6/PT6mjg2ynSJRR5I87S', '20@16.com', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0'),
(11, 'Audrey', 'Cook', 'audrey95', '$2y$10$UNzO22eWhJ5m746hES3lJebYtvv4HqGP.Q7F6.jAa18rvHRxQRCEK', 'pinky_jane@ymail.com', 'kitchen', 'a:3:{i:0;s:5:"alien";i:1;s:3:"key";i:2;s:15:"packi', 'n', 'n', 'n', 'n', 'n', 'n', '10', 'n', 'y', 'y', 'y', 'n', 'n', 'n', '0'),
(12, 'Griffin', 'Cook', 'gb', '$2y$10$Vm/0DIv4rg.ZYSyZLXf1t.mpYj4TN.nIBLARJzIFNHzsI9hkBe61W', 'gb@gb.com', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1'),
(13, 'Joanne', 'Joanne', 'Joanne', '$2y$10$hIqGJzXtL.Ni/TREDmH0te1KL3/VFIdjrojhOUo7FpfbXW8.zHO.y', 'blah.com', 'living room', 'a:1:{i:0;s:5:"alien";}', 'n', 'n', 'n', 'n', 'n', 'n', '6', 'n', 'y', 'n', 'n', 'n', 'n', 'n', '3'),
(14, 'Griffin', 'Cook', 'gc', '$2y$10$kR8uqRGgtGFlF/cXgyRc5eg1b3ESz1CMUiCAqVAJVqinPI1K70tAG', 'gc@yahoo.ca', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(15, 'bafsd', 'afds', 'afsd', '$2y$10$/5q.mB5T40m1g78ZLJR0BOnrPhMJhpsxBYFoWkDJxVJQ8AKWXZmQy', 'afsd', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(16, 'R', 'C', 'bucket', '$2y$10$cCKV.RUZ5Z3RPE2JiN3iD.ROUkKrpXNKT.eRo..Fdr9fH1HlShR0W', 'ifheisawake@yahoo.ca', 'living room', 'a:1:{i:0;s:10:"microscope";}', 'n', 'n', 'n', 'n', 'n', 'n', '5', 'n', 'n', 'n', 'n', 'y', 'n', 'n', '3'),
(17, 'qrew', 'qrwe', 'qrew', '$2y$10$fzc6gWqLQrZ1Ps1yqzB7ouAhafgWKBMaLy53mID15irTf.0m59/ru', 'qwer', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
