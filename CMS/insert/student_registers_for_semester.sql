-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 15, 2015 at 07:46 PM
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
-- Table structure for table `student_registers_for_semester`
--

CREATE TABLE IF NOT EXISTS `student_registers_for_semester` (
  `sid` int(11) NOT NULL,
  `sem_id` varchar(10) NOT NULL,
  `acadyear` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_registers_for_semester`
--

INSERT INTO `student_registers_for_semester` (`sid`, `sem_id`, `acadyear`) VALUES
(1, '1', '0000-00-00'),
(1, '2', '0000-00-00'),
(1, '3', '0000-00-00'),
(1, '4', '0000-00-00'),
(2, '1', '0000-00-00'),
(2, '2', '0000-00-00'),
(2, '3', '0000-00-00'),
(2, '4', '0000-00-00'),
(3, '1', '0000-00-00'),
(3, '2', '0000-00-00'),
(3, '3', '0000-00-00'),
(3, '4', '0000-00-00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student_registers_for_semester`
--
ALTER TABLE `student_registers_for_semester`
  ADD PRIMARY KEY (`sid`,`sem_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
