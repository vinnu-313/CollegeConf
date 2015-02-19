-- phpMyAdmin SQL Dump
-- version 4.2.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: Feb 19, 2015 at 07:14 PM
-- Server version: 5.5.38
-- PHP Version: 5.5.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `colconf`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
`uid` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `category` varchar(50) NOT NULL,
  `passwd` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uid`, `name`, `email`, `mobile`, `category`, `passwd`) VALUES
(4, 'Vinayaka V Patil', 'vinnu313@gmail.com', '9164218777', 'RnD', 'smruti'),
(5, 'Vinayaka', 'vinnu313@gmail.com', '9164218777', 'RnD', 'smruti'),
(6, 'Vinayaka', 'vinnu_313@yahoo.com', '9611715777', 'RnD', 'smruti'),
(7, 'Vinayaka', 'vinnu_313@yahoo.com', '9611715777', 'RnD', ''),
(8, 'Vinayaka', 'vinnu_313@yahoo.com', '9611715777', 'RnD', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;