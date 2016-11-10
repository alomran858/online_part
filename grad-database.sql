-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 10, 2016 at 11:32 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `grad`
--

-- --------------------------------------------------------

--
-- Table structure for table `topic`
--

CREATE TABLE `topic` (
  `id` int(20) NOT NULL,
  `topic` varchar(30) NOT NULL,
  `createdby` int(11) NOT NULL,
  `startdate` date NOT NULL,
  `finishdate` date NOT NULL,
  `list` int(30) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `topic`
--

INSERT INTO `topic` (`id`, `topic`, `createdby`, `startdate`, `finishdate`, `list`, `status`) VALUES
(1, 'dsdsds', 0, '2016-10-20', '2016-10-21', 0, 0),
(2, 'errere', 0, '2016-10-20', '2016-04-04', 0, 0),
(3, 'ewewewew', 0, '2016-10-18', '2016-10-13', 0, 0),
(4, 'ewewewew', 0, '2016-10-18', '2016-10-13', 0, 0),
(5, '#Saudi ', 0, '2016-10-12', '2016-10-09', 0, 0),
(6, '?????', 0, '2016-11-01', '2016-12-02', 0, 0),
(7, '?????? ', 1, '2016-01-11', '2016-11-23', 0, 0),
(8, '?????? ', 1, '2016-01-11', '2016-11-23', 0, 0),
(10, '??????', 1, '2016-11-11', '2016-11-24', 1, 1),
(11, '??????', 1, '2016-11-01', '2016-11-16', 1, 1),
(12, 'الهلال', 1, '2016-11-02', '2016-11-02', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `city` varchar(20) DEFAULT NULL,
  `phone` int(20) DEFAULT NULL,
  `password` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(40) DEFAULT NULL,
  `country` varchar(30) DEFAULT NULL,
  `name` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `city`, `phone`, `password`, `username`, `email`, `country`, `name`) VALUES
(1, NULL, NULL, '121212', 'dsdsds', 'alomran858@gmail.com', NULL, NULL),
(2, NULL, NULL, '121212', 'dssdds', 'ddd@dd.cc', NULL, NULL),
(3, NULL, NULL, '121212', 'fdfdfd', 'alomran8858@gmail.com', NULL, NULL),
(4, NULL, NULL, '121212', 'dddss', 'alomrdan858@gmail.com', NULL, NULL),
(5, NULL, NULL, '121212', 'abdulrahman858', 'alomran858@gmail.com3', NULL, NULL),
(6, NULL, NULL, '121212', 'abdu', 'a.5.a.502@hotmail.com', NULL, NULL),
(7, NULL, NULL, '123321123', 'dhoom', 'alo@p.c', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `topic`
--
ALTER TABLE `topic`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `topic`
--
ALTER TABLE `topic`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
