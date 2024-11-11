-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 16, 2023 at 07:13 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `complaints`
--

-- --------------------------------------------------------

--
-- Table structure for table `complaint_team`
--

CREATE TABLE `complaint_team` (
  `id` int(11) NOT NULL,
  `Eid` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `department` text NOT NULL,
  `complaint` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `complaint_team`
--

INSERT INTO `complaint_team` (`id`, `Eid`, `email`, `department`, `complaint`) VALUES
(45, 'emp934', 'juthmini@gmail.com', 'legal', 'frrrrrrrr'),
(47, 'emp01', 'sewmisenarathq@gmail.com', 'finance', 'thi'),
(49, 'emp800', 'it22194862@my.sliit.lk', 'it', 'sewmi'),
(50, 'emp399', 'emp399@gmail.com', 'supply', 'gggggggggggg'),
(51, 'emp400', 'sewmisenarath@gmail.com', 'sales', 'huuuu');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `complaint_team`
--
ALTER TABLE `complaint_team`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `complaint_team`
--
ALTER TABLE `complaint_team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
