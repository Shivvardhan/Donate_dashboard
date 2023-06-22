-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2023 at 03:38 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sanju`
--

-- --------------------------------------------------------

--
-- Table structure for table `donate`
--

CREATE TABLE `donate` (
  `id` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `full_name` varchar(60) NOT NULL,
  `dob` date NOT NULL,
  `email` text NOT NULL,
  `phone` int(11) NOT NULL,
  `country` text NOT NULL,
  `state` text NOT NULL,
  `city` text NOT NULL,
  `address` text NOT NULL,
  `pincode` int(11) NOT NULL,
  `pan` varchar(25) NOT NULL,
  `eligibilty` varchar(30) NOT NULL,
  `Status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donate`
--

INSERT INTO `donate` (`id`, `amount`, `full_name`, `dob`, `email`, `phone`, `country`, `state`, `city`, `address`, `pincode`, `pan`, `eligibilty`, `Status`) VALUES
(1, 2000, 'shivvardhan singh sikarwar', '2003-03-01', 'shivvardhan52@gmail.com', 2147483647, 'India', 'Madhya Pradesh', 'Gwalior', 'shinde ki chawwani , lashkar gwalior', 474009, '521GHK', 'eligible', ''),
(2, 0, '', '0000-00-00', '', 0, '', '', '', '', 0, '', '', ''),
(3, 2000, 'shivvardhan singh sikarwar', '2003-03-01', 'shivvardhan52@gmail.com', 2147483647, 'India', 'Madhya Pradesh', 'Gwalior', 'shinde ki chawwani , lashkar gwalior', 474009, '521GHK', 'eligible', ''),
(4, 0, '', '0000-00-00', '', 0, '', '', '', '', 0, '', '', ''),
(5, 1500, 'shivvardhan singh sikarwar', '2003-03-01', 'shivvardhan52@gmail.com', 2147483647, 'India', 'Madhya Pradesh', 'Gwalior', 'shinde ki chawwani , lashkar gwalior', 474009, '521GHKYY', 'eligible', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `donate`
--
ALTER TABLE `donate`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `donate`
--
ALTER TABLE `donate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
