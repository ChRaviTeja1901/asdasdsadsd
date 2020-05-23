-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2020 at 04:16 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `testing`
--

-- --------------------------------------------------------

--
-- Table structure for table `chart_data`
--

CREATE TABLE `chart_data` (
  `id` int(20) NOT NULL,
  `year` varchar(50) NOT NULL,
  `species` varchar(50) NOT NULL,
  `population` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chart_data`
--

INSERT INTO `chart_data` (`id`, `year`, `species`, `population`) VALUES
(1, '2003', 'Cattle', '185'),
(2, '2003', 'Buffalo', '98'),
(3, '2003', 'Sheep', '62'),
(4, '2003', 'Goats', '15'),
(5, '2003', 'Poultry', '490'),
(6, '2003', 'Horses&Ponies', '1'),
(7, '2003', 'Pigs', '14'),
(8, '2007', 'Cattle', '200'),
(9, '2007', 'Buffalo', '106'),
(11, '2007', 'Sheep', '72'),
(12, '2007', 'Goats', '140'),
(13, '2007', 'Poultry', '650'),
(14, '2007', 'Horses&Ponies', '2'),
(15, '2007', 'Pigs', '12'),
(16, '2012', 'Cattle', '191'),
(17, '2012', 'Buffalo', '109'),
(18, '2012', 'Sheep', '66'),
(19, '2012', 'Goats', '136'),
(20, '2012', 'Poultry', '730'),
(21, '2012', 'Horses&Ponies', '2'),
(22, '2012', 'Pigs', '11'),
(23, '2017', 'Cattle', '200'),
(24, '2017', 'Buffalo', '115'),
(25, '2017', 'Sheep', '70'),
(26, '2017', 'Goats', '155'),
(27, '2017', 'Poultry', '750'),
(28, '2017', 'Horses&Ponies', '3'),
(29, '2017', 'Pigs', '15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chart_data`
--
ALTER TABLE `chart_data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chart_data`
--
ALTER TABLE `chart_data`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
