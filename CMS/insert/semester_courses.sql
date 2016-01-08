-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 15, 2015 at 07:44 PM
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
-- Table structure for table `semester_courses`
--

CREATE TABLE IF NOT EXISTS `semester_courses` (
  `sem_id` varchar(10) NOT NULL,
  `course_id` varchar(10) NOT NULL,
  `type` enum('core','elective') NOT NULL DEFAULT 'core'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `semester_courses`
--

INSERT INTO `semester_courses` (`sem_id`, `course_id`, `type`) VALUES
('1', 'EL101', 'core'),
('1', 'HM101', 'core'),
('1', 'IT101', 'core'),
('1', 'IT102', 'core'),
('1', 'MA101', 'core'),
('1', 'PH101', 'core'),
('2', 'CS201', 'core'),
('2', 'CS202', 'core'),
('2', 'CS203', 'core'),
('2', 'CS205', 'core'),
('2', 'EL102', 'core'),
('2', 'IT203', 'core'),
('2', 'MA102', 'core'),
('3', 'CS206', 'core'),
('3', 'CS207', 'core'),
('3', 'CS208', 'core'),
('3', 'CS209', 'core'),
('3', 'HM201', 'core'),
('3', 'IT201', 'core'),
('3', 'IT202', 'core'),
('3', 'MA201', 'core'),
('4', 'CS210', 'core'),
('4', 'CS211', 'core'),
('4', 'CS212', 'core'),
('4', 'CS213', 'core'),
('4', 'CS214', 'core'),
('4', 'HM202', 'core'),
('4', 'IT204', 'core'),
('4', 'IT205', 'core'),
('4', 'IT206', 'core');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `semester_courses`
--
ALTER TABLE `semester_courses`
  ADD PRIMARY KEY (`sem_id`,`course_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
