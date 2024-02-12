-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2023 at 05:36 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `finaldb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admintb`
--

CREATE TABLE `admintb` (
  `id` int(255) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admintb`
--

INSERT INTO `admintb` (`id`, `user_name`, `password`, `fname`, `lname`, `email`) VALUES
(1, 'Roms_01', '813b1bac43f9bcb77f29b2a25bdac871', 'rommel', 'montalbo', 'Rommel@gmail.com'),
(2, 'efrilyn_01', 'badbddcdf652ab226666157a24fb2582', 'efrilyn', 'quindoza', 'efrilyn@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `evaltbl`
--

CREATE TABLE `evaltbl` (
  `officername` varchar(100) NOT NULL,
  `q1` varchar(100) NOT NULL,
  `q2` varchar(100) NOT NULL,
  `q3` varchar(100) NOT NULL,
  `q4` varchar(100) NOT NULL,
  `q5` varchar(100) NOT NULL,
  `q6` varchar(100) NOT NULL,
  `q7` varchar(100) NOT NULL,
  `q8` varchar(100) NOT NULL,
  `q9` varchar(100) NOT NULL,
  `q10` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `evaltbl`
--

INSERT INTO `evaltbl` (`officername`, `q1`, `q2`, `q3`, `q4`, `q5`, `q6`, `q7`, `q8`, `q9`, `q10`) VALUES
('Officer 1', 'Strongly Agree', 'Agree', 'Neutral', 'DisAgree', 'Strongly DisAgree', 'Strongly Agree', 'Strongly DisAgree', 'Strongly Agree', 'Strongly DisAgree', 'Strongly Agree');

-- --------------------------------------------------------

--
-- Table structure for table `officertb`
--

CREATE TABLE `officertb` (
  `Officername` varchar(100) NOT NULL,
  `id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `officertb`
--

INSERT INTO `officertb` (`Officername`, `id`) VALUES
('Officer 1', 37);

-- --------------------------------------------------------

--
-- Table structure for table `usertb`
--

CREATE TABLE `usertb` (
  `id` int(255) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `platoon` varchar(100) NOT NULL DEFAULT 'platoon',
  `gender` varchar(100) NOT NULL DEFAULT 'gender',
  `course` varchar(100) NOT NULL DEFAULT 'course'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `usertb`
--

INSERT INTO `usertb` (`id`, `user_name`, `password`, `fname`, `lname`, `email`, `platoon`, `gender`, `course`) VALUES
(1, 'Roms_01', '813b1bac43f9bcb77f29b2a25bdac871', 'rommel', 'montalbo', 'rommel@gmail.com', 'Alpha 2nd Platoon', 'gender', 'course'),
(2, 'Lovely', 'd728d8efb6398ee3873fc8f6840c6c06', 'lovely', 'pantaleon', 'lovely@gmail.com', 'Alpha 1st Platoon', 'gender', 'course'),
(3, 'kristian_01', '2d45fcad1f3a6ba83897884694db6e23', 'kristian', 'Avenido', 'kristian@gmail.com', 'Bravo 2nd Platoon', 'gender', 'course'),
(4, 'Angelica_01', '620952f109a48d92ba3d317ef6267a4b', 'angelica', 'ligan', 'angelica@gmail.com', 'Alpha 1st Platoon', 'gender', 'course'),
(5, 'rhen_01', 'fd9ab41e47a9ef4f6477a8a000bf404f', 'rene boy', 'bravo', 'rene@gmail.com', 'Bravo 2nd Platoon', 'gender', 'course'),
(6, 'axel_01', 'af3e84b9731260f09e8fec1e7dc4fda4', 'axel', 'villarta', 'axel@gmail.com', 'Alpha 2nd Platoon', 'male', 'bsit'),
(7, 'Siomairice', '7cbd880cddae2770ef6166ca20117e5e', 'Mj', 'Nocete', 'Mj@gmail.com', 'Alpha 2nd Platoon', 'Male', 'BSIT'),
(8, 'pogiganda', '0b41002c67f6dd243fcb6305c2781111', 'pogi', 'ganda', 'pogi@gmail.com', 'Alpha 2nd Platoon', 'Male', 'BSBA'),
(9, 'julie_01', '62b9099793d48bde8ba2f4c1315feabd', 'julie ann', 'quilbio', 'julie@gmail.com', 'Delta 2nd Platoon', 'Female', 'BSIT'),
(10, 'lhorivel_01', 'f733b9605d677f4c2c0e12264cb6304c', 'Lhorivel', 'Secuya', 'lhorivel@gmail.com', 'Alpha 2nd Platoon', 'Female', 'BSIT');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admintb`
--
ALTER TABLE `admintb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `officertb`
--
ALTER TABLE `officertb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usertb`
--
ALTER TABLE `usertb`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admintb`
--
ALTER TABLE `admintb`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `officertb`
--
ALTER TABLE `officertb`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `usertb`
--
ALTER TABLE `usertb`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
