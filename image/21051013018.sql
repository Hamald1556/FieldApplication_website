-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 31, 2022 at 12:07 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `21051013018`
--

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(66) NOT NULL,
  `fname` varchar(77) NOT NULL,
  `sname` varchar(77) NOT NULL,
  `tname` varchar(77) NOT NULL,
  `phone` bigint(77) NOT NULL,
  `email` varchar(77) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(33) NOT NULL DEFAULT 'user',
  `activation_status` varchar(30) NOT NULL DEFAULT 'Not activated'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `fname`, `sname`, `tname`, `phone`, `email`, `password`, `role`, `activation_status`) VALUES
(48, 'ramadhani', 'mussa', 'ally', 787591677, 'admin@gmail.com', '$2y$10$B1ng1a2D.zyMofCKjxcTTOIGmd.nR6UWRdvWpqeMiAaA5SmOS4a62', 'admin', 'Activated'),
(80, 'justine', 'laurent', 'cr', 23456, 'justinemihayo06@gmail.com', '$2y$10$zCwp8JG6iUn5UeapTYBoQOIRr0OGD0zJqSlFJ1xUQS.zdJYIRY3Fa', 'user', 'Not activated'),
(82, 'yusuph', 'ramadhani', 'geja', 2345678, 'yusufugeja@gmail.com', '$2y$10$cK/fXr2nXguMkwIpSDkz9Oo5TnJ8WrORQ9CfwsXqD3bgc4zf5fOP6', 'user', 'Activated'),
(89, 'hamadi', 'ally', 'rajabu', 3344555, 'tindwahamadi@gmail.com', '$2y$10$lGJ5or9EXcCYbF3EoY1FPOfovkE7eXS2xV6IXWBlkNV1c2oH23h7G', 'user', 'Activated'),
(90, 'salum', 'ally', 'salum', 345678, 'bmatengwa24@gmail.com', '$2y$10$0OB7Dw96xSsHOZkGYs6O/eBWmcUcd5.isnNg4rRRq232K6kYBW4GG', 'user', 'Activated'),
(91, 'emmanuel', 'daniel', 'ally', 2345678, 'emmanueldaniel7216@gmail.com', '$2y$10$IMDCXkBxIsroCWevRpeGOu5jeEkauZFHEUOvxn9mCRsaj64Mee4ey', 'user', 'Not activated'),
(92, 'mavo', 'bus', 'giha', 786889955, 'vash@gmail.com', '$2y$10$5mMSwvyu2bJ4gFHPQmpaR.l2ypKbdF8sXawOD3bqX7O2cY4Tqvk6.', 'user', 'Not activated'),
(93, 'lucy', 'john', 'john', 45678, 'lucyjohnerick@gmail.com', '$2y$10$QdDOJUD3X0rHxTRVIgpIT.RGUWl1g0AOs0GqNqkoXcqIuLCAAqiku', 'user', 'Activated');

-- --------------------------------------------------------

--
-- Table structure for table `submit`
--

CREATE TABLE `submit` (
  `id` int(44) NOT NULL,
  `first_name` varchar(44) NOT NULL,
  `last_name` varchar(44) NOT NULL,
  `email` varchar(44) NOT NULL,
  `course` varchar(88) NOT NULL,
  `field` varchar(66) NOT NULL,
  `dept` varchar(66) NOT NULL,
  `uni_college` varchar(88) NOT NULL,
  `picha` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `submit`
--

INSERT INTO `submit` (`id`, `first_name`, `last_name`, `email`, `course`, `field`, `dept`, `uni_college`, `picha`) VALUES
(33, 'shabani', 'juma', 'abushiri@gmail.com', 'pharmacist', 'hospital', 'biomedical', 'saut mtwara', 'passpot.jpg'),
(34, 'sophia', 'tindwa', 'sophytindwa98@gmail.com', 'human resource', 'ward', 'mtendaji', 'homboro', 'passpot.jpg'),
(37, 'hamadi', 'ally', 'rajabu@gmail.com', 'pharmacist', 'hospital', 'biomedical', 'arusha technical college', 'passpot.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `submit`
--
ALTER TABLE `submit`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(66) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;

--
-- AUTO_INCREMENT for table `submit`
--
ALTER TABLE `submit`
  MODIFY `id` int(44) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
