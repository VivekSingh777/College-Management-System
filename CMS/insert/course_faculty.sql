-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 15, 2015 at 07:42 PM
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
-- Table structure for table `course_faculty`
--

CREATE TABLE IF NOT EXISTS `course_faculty` (
  `fid` varchar(30) NOT NULL,
  `course_id` varchar(10) NOT NULL,
  `acadyear` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course_faculty`
--

INSERT INTO `course_faculty` (`fid`, `course_id`, `acadyear`) VALUES
('1', 'HM101', '2013'),
('2', 'MA102', '2013'),
('2', 'MA201', '2013'),
('3', 'EL101', '2013'),
('4', 'CS205', '2013'),
('4', 'IT101', '2013'),
('4', 'IT102', '2013'),
('6', 'PH101', '2013'),
('7', 'EL102', '2013'),
('8', 'CS201', '2013'),
('8', 'CS202', '2013'),
('8', 'IT203', '2013'),
('9', 'CS203', '2013');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course_faculty`
--
ALTER TABLE `course_faculty`
  ADD PRIMARY KEY (`fid`,`course_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
