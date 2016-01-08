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
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `sid` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `father_name` varchar(50) NOT NULL,
  `mother_name` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `gender` enum('m','f') NOT NULL DEFAULT 'f',
  `status_ARA` enum('0','1') NOT NULL DEFAULT '0',
  `status_MC` enum('0','1') NOT NULL DEFAULT '0',
  `category` enum('sc','st','obc','gen') NOT NULL DEFAULT 'gen',
  `s_mob_no` varchar(10) NOT NULL,
  `guardian_email` varchar(50) NOT NULL,
  `guardian_mob_no` varchar(10) NOT NULL,
  `branch` enum('it','cse') NOT NULL DEFAULT 'it',
  `jee_rank` varchar(10) NOT NULL,
  `jee_roll_no` varchar(10) DEFAULT NULL,
  `board` varchar(30) NOT NULL,
  `address` varchar(40) NOT NULL,
  `city` varchar(6) NOT NULL,
  `state` varchar(25) NOT NULL,
  `pin` varchar(6) NOT NULL,
  `batch` varchar(4) NOT NULL,
  `blood_group` enum('ABP','ABN','AP','AN','BP','BN','OP','ON') DEFAULT 'OP',
  `ip` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`sid`, `firstname`, `lastname`, `password`, `father_name`, `mother_name`, `dob`, `gender`, `status_ARA`, `status_MC`, `category`, `s_mob_no`, `guardian_email`, `guardian_mob_no`, `branch`, `jee_rank`, `jee_roll_no`, `board`, `address`, `city`, `state`, `pin`, `batch`, `blood_group`, `ip`) VALUES
(1, 'ABCC', 'MINNNNA', '585666', 'dMNOP', 'ANTOSH', '0000-00-00', 'm', '0', '0', 'gen', '2569896', 'BBaa@gmail.com', '458979', 'it', '658', '852', 'Cbse', 'MMMM', 'MUMBAI', 'MAHARATRA', '325896', '2013', '', ''),
(2, 'PQRS', 'VINNNDD', '4785', 'NHUI', 'NHUYT', '0000-00-00', 'm', '0', '0', 'gen', '858698569', 'nnjaa21@gmail.com', '58666', 'it', '5896', '2856', 'Cbse', 'TELNGGGNNNAa', 'HDRBD', 'JHUDI', '325252', '2013', '', ''),
(3, 'Ghk', 'mmana', '1254', 'dlme', 'seemm', '0000-00-00', 'm', '0', '0', 'gen', '98888', '25aa@gmail.com', '458888', 'cse', '55', '258', 'cbse', 'kkoota', 'city', 'rajj', '352585', '2013', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`sid`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
