-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 26, 2020 at 08:54 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.1.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `result`
--

-- --------------------------------------------------------

--
-- Table structure for table `director`
--

CREATE TABLE `director` (
  `ID` int(11) NOT NULL,
  `directorid` varchar(40) NOT NULL,
  `dpassword` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `director`
--

INSERT INTO `director` (`ID`, `directorid`, `dpassword`) VALUES
(1, 'd1', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `id` int(11) NOT NULL,
  `facultyid` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`id`, `facultyid`, `password`) VALUES
(1, 'jeet', '1234'),
(2, 'rpg', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `rdata`
--

CREATE TABLE `rdata` (
  `id` int(11) NOT NULL,
  `studentid` varchar(40) NOT NULL,
  `name` varchar(40) NOT NULL,
  `oot` int(11) NOT NULL,
  `ss` int(11) NOT NULL,
  `cn` int(11) NOT NULL,
  `dbms` int(11) NOT NULL,
  `daa` int(11) NOT NULL,
  `os` int(11) NOT NULL,
  `tc` int(11) NOT NULL,
  `cgpa` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rdata`
--

INSERT INTO `rdata` (`id`, `studentid`, `name`, `oot`, `ss`, `cn`, `dbms`, `daa`, `os`, `tc`, `cgpa`) VALUES
(1, 'ui18co01', 'tanish jain', 1, 3, 2, 2, 1, 2, 11, '1.8333333333333'),
(2, 'ui18co43', 'vatsal', 3, 2, 2, 1, 3, 4, 15, '2.5'),
(3, 'ui18co02', 'av2000', 3, 2, 4, 1, 3, 2, 15, '2.5'),
(4, 'ui18co43', 'tjkhjk', 2, 3, 1, 3, 2, 4, 15, '2.5'),
(5, 'ui18co34', 'harshil', 2, 1, 2, 2, 3, 3, 13, '2.1666666666667');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `studentid` varchar(40) NOT NULL,
  `spassword` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `studentid`, `spassword`) VALUES
(1, 'ui18co01', '1234'),
(2, 'ui18co02', '1234'),
(3, 'ui18co43', '1234'),
(5, 'ui18co05', '1234'),
(6, 'ui18co41', '1234'),
(7, 'ui18co06', '1234'),
(8, 'ui18co64', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `director`
--
ALTER TABLE `director`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rdata`
--
ALTER TABLE `rdata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `director`
--
ALTER TABLE `director`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `rdata`
--
ALTER TABLE `rdata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
