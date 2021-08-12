-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 26, 2021 at 05:09 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bloodbank`
--

-- --------------------------------------------------------

--
-- Table structure for table `donate`
--

CREATE TABLE `donate` (
  `id` int(39) NOT NULL,
  `name` varchar(30) NOT NULL,
  `place` varchar(39) NOT NULL,
  `bunit` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donate`
--

INSERT INTO `donate` (`id`, `name`, `place`, `bunit`) VALUES
(11, 'shrvani', 'hospital', '9');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `massage` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `massage`) VALUES
(7, 'shrvani', 'nothing');

-- --------------------------------------------------------

--
-- Table structure for table `join_us`
--

CREATE TABLE `join_us` (
  `id` int(40) NOT NULL,
  `fname` varchar(40) NOT NULL,
  `no` int(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `address` varchar(40) NOT NULL,
  `city` varchar(40) NOT NULL,
  `state` varchar(40) NOT NULL,
  `zip` int(40) NOT NULL,
  `history` varchar(40) NOT NULL,
  `bgroup` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `join_us`
--

INSERT INTO `join_us` (`id`, `fname`, `no`, `email`, `address`, `city`, `state`, `zip`, `history`, `bgroup`) VALUES
(1, 'rutuja deshmukh', 2147483647, 'rutujadeshmukh823@gmail.com', 'near hunamn temple juna dhamangaon ,dham', 'amravati', 'Maharashtra', 444709, 'no', 'A +'),
(2, 'sakshi boralkar', 2147483647, 'sakshi@1gmail.com', 'Amravati', 'amravati', 'Nagaland', 12345, 'no', 'A -'),
(3, 'sakshi boralkar', 2147483647, 'sakshi@1gmail.com', 'Amravati', 'amravati', 'Nagaland', 12345, 'no', 'A -'),
(4, 'anushree ', 2147483647, 'anushree@1gmail.com', 'amravati', 'amravati', 'Mizoram', 23788, 'no', 'B -'),
(5, 'as', 65365, 'zdhnfxjklk@', 'jhjfhd', 'adf', 'Kerala', 2134, 'no', 'A -');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `id` int(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `doctor_name` varchar(30) NOT NULL,
  `doctor_pri` varchar(30) NOT NULL,
  `bunit` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`id`, `name`, `doctor_name`, `doctor_pri`, `bunit`) VALUES
(6, 'ankita deshmukh', 'dr.gupta', 'dbimages/Screenshot (31).png', '4'),
(7, 'rutuja', 'rutuja deshmukh', 'dbimages/Screenshot (31).png', '6'),
(8, 'Ankita', 'dr.gupta', 'dbimages/18BE0338(6th).png', '456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `donate`
--
ALTER TABLE `donate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `join_us`
--
ALTER TABLE `join_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `donate`
--
ALTER TABLE `donate`
  MODIFY `id` int(39) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `join_us`
--
ALTER TABLE `join_us`
  MODIFY `id` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
