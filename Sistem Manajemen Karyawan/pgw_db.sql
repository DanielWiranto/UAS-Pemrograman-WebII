-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 06, 2022 at 12:28 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pgw_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `no` int(10) NOT NULL,
  `name` varchar(50) CHARACTER SET armscii8 COLLATE armscii8_bin NOT NULL,
  `age` int(20) NOT NULL,
  `salary` int(20) NOT NULL,
  `date_of_birth` date NOT NULL,
  `date_of_join` date NOT NULL,
  `keahlian` varchar(50) CHARACTER SET armscii8 COLLATE armscii8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`no`, `name`, `age`, `salary`, `date_of_birth`, `date_of_join`, `keahlian`) VALUES
(1, 'Daniel Wiranto', 22, 20000, '1999-06-18', '2022-04-04', 'Web Design'),
(11, 'Rudianto', 24, 500000, '1998-12-22', '2022-06-01', 'Front-End'),
(12, 'Budi Susilo', 30, 7606060, '1992-04-12', '2019-02-02', 'System Engineer'),
(13, 'Ratna Fitri', 22, 50000, '2000-01-22', '2020-12-02', 'Back End Engineer');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `no` int(11) NOT NULL,
  `name` varchar(20) CHARACTER SET armscii8 COLLATE armscii8_bin NOT NULL,
  `password` varchar(20) CHARACTER SET armscii8 COLLATE armscii8_bin NOT NULL,
  `type` enum('admin','hr') CHARACTER SET armscii8 COLLATE armscii8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`no`, `name`, `password`, `type`) VALUES
(1, 'Daniel', 'secret', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `time`
--

CREATE TABLE `time` (
  `no` int(10) NOT NULL,
  `name` varchar(50) CHARACTER SET armscii8 COLLATE armscii8_bin NOT NULL,
  `day` enum('Minggu','Senin','Selasa','Rabu','Kamis','Jumat','Sabtu') CHARACTER SET armscii8 COLLATE armscii8_bin NOT NULL,
  `time_in` time(6) NOT NULL,
  `time_out` time(6) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `time`
--

INSERT INTO `time` (`no`, `name`, `day`, `time_in`, `time_out`, `date`) VALUES
(11, 'Rudianto', 'Senin', '09:00:00.000000', '09:00:00.000000', '2022-06-05'),
(1, 'Daniel Wiranto', 'Senin', '09:00:00.000000', '09:00:00.000000', '2022-06-05'),
(11, 'Rudianto', 'Selasa', '09:00:00.000000', '09:00:00.000000', '2022-06-06'),
(12, 'Budi Susilo', 'Senin', '09:00:00.000000', '20:00:00.000000', '2022-06-05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
