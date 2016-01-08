-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 15, 2015 at 07:45 PM
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
-- Table structure for table `student_course_faculty_grade`
--

CREATE TABLE IF NOT EXISTS `student_course_faculty_grade` (
  `sid` varchar(10) NOT NULL,
  `course_id` varchar(10) NOT NULL,
  `fid` varchar(30) NOT NULL,
  `gid` varchar(10) NOT NULL,
  `acadyear` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_course_faculty_grade`
--

INSERT INTO `student_course_faculty_grade` (`sid`, `course_id`, `fid`, `gid`, `acadyear`) VALUES
('1', 'CS210', '12', 'BB', ''),
('1', 'CS211', '12', 'CC', ''),
('1', 'EL101', '3', 'BB', ''),
('1', 'HM101', '1', 'BB', ''),
('1', 'HM202', '14', 'BB', ''),
('1', 'HM203', '15', 'AB', ''),
('1', 'IT101', '4', 'AB', ''),
('1', 'IT102', '4', 'BC', ''),
('1', 'IT204', '8', 'AA', ''),
('1', 'IT205', '4', 'AA', ''),
('1', 'IT206', '4', 'BC', ''),
('1', 'IT207', '16', 'BC', ''),
('1', 'MA101', '2', 'BC', ''),
('1', 'PH101', '6', 'BB', ''),
('2', 'CS206', '12', 'AB', ''),
('2', 'CS207', '12', 'BC', ''),
('2', 'CS210', '12', 'BC', ''),
('2', 'CS211', '12', 'CC', ''),
('2', 'EL101', '3', 'BB', ''),
('2', 'HM202', '1', 'AA', ''),
('2', 'HM202', '14', 'BC', ''),
('2', 'HM203', '15', 'CD', ''),
('2', 'IT101', '4', 'BC', ''),
('2', 'IT102', '4', 'BB', ''),
('2', 'IT204', '8', 'BC', ''),
('2', 'IT205', '4', 'CC', ''),
('2', 'IT206', '4', 'BB', ''),
('2', 'IT207', '16', 'CC', ''),
('2', 'MA201', '2', 'BC', ''),
('2', 'MA202', '2', 'CC', ''),
('2', 'PH101', '6', 'AB', ''),
('3', 'CS206', '12', 'BC', ''),
('3', 'CS207', '12', 'BB', ''),
('3', 'CS208', '2', 'CD', ''),
('3', 'CS209', '4', 'AB', ''),
('3', 'CS210', '12', 'BB', ''),
('3', 'CS211', '12', 'BC', ''),
('3', 'CS212', '13', 'AB', ''),
('3', 'CS213', '13', 'BC', ''),
('3', 'CS214', '11', 'AA', ''),
('3', 'EL101', '3', 'AA', ''),
('3', 'HM101', '1', 'BC', ''),
('3', 'HM201', '10', 'AA', ''),
('3', 'HM202', '14', 'CD', ''),
('3', 'HM203', '15', 'BC', ''),
('3', 'MA101', '2', 'CD', ''),
('3', 'MA201', '2', 'BC', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student_course_faculty_grade`
--
ALTER TABLE `student_course_faculty_grade`
  ADD PRIMARY KEY (`sid`,`course_id`,`fid`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
