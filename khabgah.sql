-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 29, 2015 at 12:34 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `khabgah`
--
CREATE DATABASE IF NOT EXISTS `khabgah` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `khabgah`;

-- --------------------------------------------------------

--
-- Table structure for table `usersystem`
--

CREATE TABLE IF NOT EXISTS `usersystem` (
  `userid` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `melicode` varchar(10) NOT NULL,
  `mobilenumber` varchar(255) NOT NULL,
  `reshte` varchar(255) NOT NULL,
  `dore` varchar(255) NOT NULL,
  `maghta` varchar(255) NOT NULL,
  `fathername` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `taeed` int(11) NOT NULL,
  `peygiri` varchar(255) NOT NULL,
  `roll` tinyint(2) NOT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `usersystem`
--

INSERT INTO `usersystem` (`userid`, `firstname`, `lastname`, `melicode`, `mobilenumber`, `reshte`, `dore`, `maghta`, `fathername`, `username`, `password`, `email`, `taeed`, `peygiri`, `roll`) VALUES
(3, 'c', 'cc', '0', 'c', 'c', 'c', 'c', 'c', 'c', '4a8a08f09d37b73795649038408b5f33', 'c', 1, '1325894877', 1),
(4, '', '', '0', '', '', '', '', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', 0, '1142299003', 1),
(5, 'فرشید', 'رضایی', '0018363512', '09354614194', 'کامپی', 'روزانه', 'کارشناسی', 'مهدی', 'farshid', 'af4a57797a8428477fa9ebd4ea7397ba', 'farshid.net1@yahoo.com', 0, '1165888276', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
