-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 19, 2020 at 03:44 AM
-- Server version: 5.7.24
-- PHP Version: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(55) NOT NULL,
  `password` varchar(55) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

DROP TABLE IF EXISTS `profile`;
CREATE TABLE IF NOT EXISTS `profile` (
  `student_id` int(10) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(55) NOT NULL,
  `othername` varchar(55) NOT NULL,
  `lastname` varchar(55) NOT NULL,
  `gender` varchar(55) NOT NULL,
  `email` varchar(55) NOT NULL,
  `username` varchar(55) NOT NULL,
  `password` varchar(55) NOT NULL,
  `address` varchar(75) NOT NULL,
  `logs` varchar(12) NOT NULL,
  PRIMARY KEY (`student_id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`student_id`, `firstname`, `othername`, `lastname`, `gender`, `email`, `username`, `password`, `address`, `logs`) VALUES
(11, 'Adeniyi', 'Adeolas', 'adeoye', 'Male', 'ola@gmail.com', 'haywhy', '12345678', ' 4, ade street, abeokua', '5'),
(4, 'ola', 'adeola', 'olaoo', 'male', 'adeola@gmail.com', 'ola', 'ola', 'ogunstate', '5'),
(8, 'ola', 'adeola', 'olaoo', 'male', 'adeola@gmail.com', 'ola', '1234616955', ' ogunstate', '0');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
