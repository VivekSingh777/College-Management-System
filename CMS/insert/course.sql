-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 15, 2015 at 07:41 PM
-- Server version: 5.6.25
-- PHP Version: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cms`
--

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE IF NOT EXISTS `course` (
  `course_id` varchar(10) NOT NULL,
  `course_name` varchar(10) NOT NULL,
  `course_credit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_id`, `course_name`, `course_credit`) VALUES
('CS201', 'DS', 3),
('CS202', 'DS LAB', 3),
('CS203', 'CO', 5),
('CS205', 'INTRO CS', 2),
('CS206', 'OOPS', 3),
('CS207', 'OOPS LAB', 3),
('CS208', 'SST', 4),
('CS209', 'OS', 5),
('EL101', 'DLD', 5),
('EL102', 'BEC', 5),
('HM101', 'ENGLISH', 2),
('HM201', 'ECONOMICS', 3),
('IT101', 'C PROG.', 3),
('IT102', 'C LAB', 2),
('IT201', 'ITKS', 4),
('IT202', 'DAA', 4),
('IT203', 'INTRO IT', 2),
('MA101', 'DESCRETE', 4),
('MA102', 'CALCULAS', 4),
('MA201', 'PROB.', 4),
('PH101', 'PHYSICS', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`course_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
