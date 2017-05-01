-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2017 at 02:33 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nasa`
--

-- --------------------------------------------------------

--
-- Table structure for table `list`
--

CREATE TABLE `list` (
  `id` int(11) NOT NULL,
  `name` varchar(112) NOT NULL,
  `esi` decimal(12,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `list`
--

INSERT INTO `list` (`id`, `name`, `esi`) VALUES
(1, 'Finland', '75.10'),
(2, 'Norway', '73.40'),
(3, 'Uruguay', '71.80'),
(4, 'Sweden', '71.70'),
(5, 'Iceland', '70.80'),
(6, 'Canada', '64.40'),
(7, 'Switzerland', '63.70'),
(8, 'Guyana', '62.90'),
(9, 'Argentina', '62.70'),
(10, 'Austria', '62.70'),
(11, 'Brazil', '62.20'),
(12, 'Gabon', '61.70'),
(13, 'Australia', '61.00'),
(14, 'New Zealand', '60.90'),
(15, 'Latvia', '60.40'),
(16, 'Peru', '60.40'),
(17, 'Paraguay', '59.70'),
(18, 'Costa Rica', '59.60'),
(19, 'Croatia', '59.50'),
(20, 'Bolivia', '59.50'),
(21, 'Ireland', '59.20'),
(22, 'Lithuania', '58.90'),
(24, 'Malaysia', '54.00'),
(25, 'North Korea', '29.20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `list`
--
ALTER TABLE `list`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `list`
--
ALTER TABLE `list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
