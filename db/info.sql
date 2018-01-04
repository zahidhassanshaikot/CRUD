-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 03, 2018 at 01:03 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `info`
--

-- --------------------------------------------------------

--
-- Table structure for table `reghistory`
--

CREATE TABLE `reghistory` (
  `id` int(5) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone_number` varchar(20) NOT NULL,
  `date_of_birth` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `Address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reghistory`
--

INSERT INTO `reghistory` (`id`, `first_name`, `last_name`, `email`, `password`, `phone_number`, `date_of_birth`, `gender`, `Address`) VALUES
(3, '0', 'Islam', 'moshurislam@gmail.com', '12345', '0166666666666', '2018-01-26', 'male', 'kollanpur'),
(4, 'Zahid Hasan', 'Shaikot', 'zahidhassanshaikot@gmail.com', '12345', '01985986986', '1996-05-17', 'male', '35-Shukrabadh, Dhanmondi-32,DHaka'),
(5, 'Shakib Hasan', 'Shawn', 'ss@gmail.com', '11111', '01834508423', '2000-06-22', 'male', 'Uchai Pancbibi, Joypurhat'),
(6, 'Mohshin', 'Ali', 'mohshin5089@gmail.com', '12345', '01713715089', '1979-01-01', 'male', 'Panchbibi'),
(10, '', '', '', '', '', '', 'male', ''),
(11, 'Moshiur', 'Islam', 'mojaddedkawsar@gmail.com', '12345', '00000000000000', '2018-01-01', 'female', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `reghistory`
--
ALTER TABLE `reghistory`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `reghistory`
--
ALTER TABLE `reghistory`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
