-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 22, 2021 at 02:56 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `playerdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `players`
--

CREATE TABLE `players` (
  `id` int(11) NOT NULL,
  `playerno` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `city` varchar(50) NOT NULL,
  `tmatch` varchar(15) NOT NULL,
  `standard` int(11) NOT NULL,
  `image` text NOT NULL,
  `trscored` varchar(200) NOT NULL,
  `tiplayed` varchar(200) NOT NULL,
  `tnmatch` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `players`
--

INSERT INTO `players` (`id`, `playerno`, `name`, `city`, `tmatch`, `standard`, `image`, `trscored`, `tiplayed`, `tnmatch`) VALUES
(1, 1001, 'Aman', 'Durgapur', '9832420840', 4, '1.jpg', '', '', ''),
(2, 1002, 'Rohan', 'Durgapur', '9832420841', 4, '2.jpg', '', '', ''),
(3, 1003, 'Ritu', 'Durgapur', '9832420843', 4, '6.png', '', '', ''),
(4, 1004, 'Priya', 'Asansol', '9832420822', 4, '8.png', '', '', ''),
(5, 1001, 'Mohit', 'Asansol', '9832422520', 5, '3.jpg', '', '', ''),
(6, 1002, 'Amir', 'Asansol', '9832420823', 5, '4.jpg', '', '', ''),
(7, 1003, 'Suraj', 'Durgapur', '9832420849', 5, '5.png', '', '', ''),
(8, 1004, 'Puja', 'Asansol', '9832420840', 5, '9.png', '', '', ''),
(9, 12345, 'abdullah sami sami', 'dhaka', '100', 1, 'download.jpg', '200', '300', '400'),
(11, 75, 'Shakib', 'Bangladesh', '100', 1, 'istockphoto-1255328634-170667a.jpg', '1000', '300', '100');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `players`
--
ALTER TABLE `players`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `players`
--
ALTER TABLE `players`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
