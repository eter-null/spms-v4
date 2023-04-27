-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2023 at 08:44 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spmsv4`
--

-- --------------------------------------------------------

--
-- Table structure for table `backlogdata`
--

CREATE TABLE `backlogdata` (
  `backlog_id` int(11) UNSIGNED NOT NULL,
  `id` int(11) DEFAULT NULL,
  `faculty_id` int(11) DEFAULT NULL,
  `semester` varchar(11) DEFAULT NULL,
  `section` int(11) DEFAULT NULL,
  `year` varchar(10) DEFAULT NULL,
  `course` varchar(191) DEFAULT NULL,
  `marks` int(10) DEFAULT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `backlogdata`
--

INSERT INTO `backlogdata` (`backlog_id`, `id`, `faculty_id`, `semester`, `section`, `year`, `course`, `marks`, `timestamp`) VALUES
(3, 1930921, 4525, 'ttt', 85, '85', 'ttt', 45, '2023-04-25 18:33:56'),
(4, 7878745, 8574, 'ooo', 85, '45', 'ppp', 96, '2023-04-25 18:36:48');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `backlogdata`
--
ALTER TABLE `backlogdata`
  ADD PRIMARY KEY (`backlog_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `backlogdata`
--
ALTER TABLE `backlogdata`
  MODIFY `backlog_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
