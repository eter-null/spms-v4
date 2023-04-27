-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2023 at 08:46 PM
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
-- Table structure for table `co_average`
--

CREATE TABLE `co_average` (
  `studentID` int(11) DEFAULT NULL,
  `courseID` varchar(191) DEFAULT NULL,
  `co1` int(10) DEFAULT NULL,
  `co2` int(10) DEFAULT NULL,
  `co3` int(10) DEFAULT NULL,
  `co4` int(10) DEFAULT NULL,
  `co5` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `co_average`
--

INSERT INTO `co_average` (`studentID`, `courseID`, `co1`, `co2`, `co3`, `co4`, `co5`) VALUES
(852963, 'kkk', 14, 14, 14, 14, 14),
(7895617, 'falling', 1000, 1000, 1000, 1000, 1000),
(7895617, 'falling', 1000, 1000, 1000, 1000, 1000),
(2147483647, 'IOIO', 65, 65, 65, 65, 65),
(2147483647, 'IOIO', 65, 65, 65, 65, 65),
(78789, 'IUIUU', 32, 32, 32, 32, 32),
(78789, 'IUIUU', 32, 32, 32, 32, 32),
(2030, 'win', 12, 12, 12, 12, 12),
(2030, 'win', 12, 12, 12, 12, 12),
(858585, 'iii', 14, 14, 14, 14, 14),
(858585, 'iii', 14, 14, 14, 14, 14),
(4567418, 'kkkk', 89, 89, 89, 89, 89),
(4567418, 'kkkk', 89, 89, 89, 89, 89),
(789, 'seojin', 78, 78, 78, 78, 78),
(789, 'seojin', 78, 78, 78, 78, 78),
(48965, 'uu', 85, 85, 85, 85, 85),
(48965, 'uu', 85, 85, 85, 85, 85),
(7878745, 'ppp', 96, 96, 96, 96, 96),
(7878745, 'ppp', 96, 96, 96, 96, 96);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
