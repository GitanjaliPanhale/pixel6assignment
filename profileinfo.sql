-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 05, 2021 at 08:54 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pixel6`
--

-- --------------------------------------------------------

--
-- Table structure for table `profileinfo`
--

CREATE TABLE `profileinfo` (
  `id` int(11) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `state` varchar(30) NOT NULL,
  `city` varchar(30) NOT NULL,
  `photo` text NOT NULL,
  `graduation` varchar(30) NOT NULL,
  `grade` varchar(20) NOT NULL,
  `year` int(11) NOT NULL,
  `special` varchar(30) NOT NULL,
  `college` varchar(30) NOT NULL,
  `primary` text NOT NULL,
  `secondary` text NOT NULL,
  `certificate` varchar(30) NOT NULL,
  `pit` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profileinfo`
--

INSERT INTO `profileinfo` (`id`, `firstname`, `lastname`, `gender`, `email`, `phone`, `state`, `city`, `photo`, `graduation`, `grade`, `year`, `special`, `college`, `primary`, `secondary`, `certificate`, `pit`) VALUES
(7, 'Gitanjali', 'Panhale', 'female', 'gitspanhale@gmail.com', '7218835340', 'maharastra', 'loni', '', 'MCS', '8.0CGPA', 2020, 'computer science', 'pune university', 'html,css', 'php,java', 'none', 'I rate myself 3/5 on php and i am familier with its version php5.\r\nThank you!!');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `profileinfo`
--
ALTER TABLE `profileinfo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `profileinfo`
--
ALTER TABLE `profileinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
