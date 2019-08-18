-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 18, 2019 at 04:44 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `school_board`
--

-- --------------------------------------------------------

--
-- Table structure for table `boards`
--

CREATE TABLE `boards` (
  `id_board` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `boards`
--

INSERT INTO `boards` (`id_board`, `name`) VALUES
(1, 'CSM'),
(2, 'CSMB');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `grades` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `average` text COLLATE utf8_unicode_ci NOT NULL,
  `board` varchar(250) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `grades`, `average`, `board`) VALUES
(1, 'Nikola', '7 6 8 9', '7.55', 'CSM'),
(33, 'Marija', '6 7 6 7', '6.5', ''),
(34, 'Lazar', '8 9 9 9', '8.75', 'CSM'),
(35, 'Marija', '9 9 6 8', '8', 'CSM'),
(36, 'Nikola', '8 9 9 9', '8.75', 'CSM'),
(37, 'Goran', '8 9 9 9', '8.75', 'CSM'),
(38, 'Lazar', '8 9 9 9', '8.75', 'CSM'),
(39, 'Goran', '6 6 6 6', '6', 'CSMD'),
(40, 'Nikola', '8 9 9 9', '8.75', 'CSM'),
(41, 'Mladen', '9 8 9 8', '8.5', 'CSM'),
(42, 'Xenia', '6 5 6 6', '5.75', 'CSMD'),
(43, 'Djordje', '6 5 6 6', '5.75', ''),
(44, 'Ivana', '9 8 9 10', '9', 'CSM'),
(45, 'Rada', '6 7 5 5', '5.75', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `boards`
--
ALTER TABLE `boards`
  ADD PRIMARY KEY (`id_board`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `boards`
--
ALTER TABLE `boards`
  MODIFY `id_board` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
