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
-- Table structure for table `faculty`
--

CREATE TABLE IF NOT EXISTS `faculty` (
  `fid` varchar(30) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `gender` enum('m','f') NOT NULL DEFAULT 'f',
  `degree` varchar(10) NOT NULL,
  `degree_field` varchar(35) NOT NULL,
  `f_mob_no` varchar(10) DEFAULT NULL,
  `f_email` varchar(50) DEFAULT NULL,
  `address` varchar(60) NOT NULL,
  `city` varchar(6) NOT NULL,
  `state` varchar(25) NOT NULL,
  `pin` varchar(6) NOT NULL,
  `join_date` date NOT NULL,
  `blood_group` enum('ABP','ABN','AP','AN','BP','BN','OP','ON') DEFAULT 'OP',
  `ip` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`fid`, `firstname`, `lastname`, `password`, `gender`, `degree`, `degree_field`, `f_mob_no`, `f_email`, `address`, `city`, `state`, `pin`, `join_date`, `blood_group`, `ip`) VALUES
('1', 'MB', 'BHORANI', '', 'm', '', '', NULL, NULL, '', '', '', '', '0000-00-00', '', ''),
('11', 'GAGAN', 'GURGE', '5f4dcc3b5aa765d61d8327deb882cf99', 'm', '', '', '', '', '', '', '', '', '0000-00-00', '', '1'),
('12', 'PM', 'JATT', '', 'm', '', '', NULL, NULL, '', '', '', '', '0000-00-00', '', ''),
('13', 'JIGNESH', 'BATT', '', 'm', '', '', NULL, NULL, '', '', '', '', '0000-00-00', '', ''),
('15', 'AMIT', 'MISHRA', '', 'm', '', '', NULL, NULL, '', '', '', '', '0000-00-00', '', ''),
('16', 'NABIN', 'SHAHU', '', 'm', '', '', NULL, NULL, '', '', '', '', '0000-00-00', '', ''),
('2', 'PRATIK', 'SHAH', '', 'm', '', '', NULL, NULL, '', '', '', '', '0000-00-00', '', ''),
('2333', 'vikash', 'saini', '5f4dcc3b5aa765d61d8327deb882cf99', 'm', 'phd', '5', '9601860923', 'vkrsaini678@gmail.com', 'ward no 018', 'Mandwa', 'raj', '333704', '2015-11-15', '', '192.192.192.192'),
('3', 'BISWJEET', 'MISHRA', '', 'm', '', '', NULL, NULL, '', '', '', '', '0000-00-00', '', ''),
('4', 'PRASHNJEET', 'MAJUNDAR', '', 'm', '', '', NULL, NULL, '', '', '', '', '0000-00-00', '', ''),
('6', 'GUATUM', 'DUTTA', '', 'm', '', '', NULL, NULL, '', '', '', '', '0000-00-00', '', ''),
('7', 'MAJAD', 'JAVERI', '', 'm', '', '', NULL, NULL, '', '', '', '', '0000-00-00', '', ''),
('8', 'MANIK LAL', 'DAS', '', 'm', '', '', NULL, NULL, '', '', '', '', '0000-00-00', '', ''),
('9', 'RAHUL', 'DUBEY', '', 'm', '', '', NULL, NULL, '', '', '', '', '0000-00-00', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`fid`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
