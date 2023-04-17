-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2023 at 07:36 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crud`
--

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `Stu_ID` int(55) NOT NULL,
  `Stu_Name` varchar(55) NOT NULL,
  `Stu_Address` varchar(55) NOT NULL,
  `Stu_Class` int(55) NOT NULL,
  `Stu_Mobile` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`Stu_ID`, `Stu_Name`, `Stu_Address`, `Stu_Class`, `Stu_Mobile`) VALUES
(1, 'Akash Kumar Maurya', 'Mamura 66 Noida', 2, '8808154505'),
(2, 'Bablu Singh', 'Sector 132', 1, '9832345434'),
(3, 'Aman Pandey', 'Noida Sector 65', 5, '9954344565'),
(4, 'Shubham Yadav', 'Jaunpur ', 5, '6754345465'),
(5, 'Pooja Patel', 'Rampur Jaunpur', 1, '7567565675'),
(6, 'Pradeep Maurya', 'Mumbai', 3, '9854345465'),
(8, 'Ashish Kumar Maurya', 'Gaddopur Mariahu', 6, '7575316350'),
(9, 'Deepak Vishvakarma', 'Pune', 7, '8754345454');

-- --------------------------------------------------------

--
-- Table structure for table `student_class`
--

CREATE TABLE `student_class` (
  `Class_ID` int(11) NOT NULL,
  `Class_Name` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_class`
--

INSERT INTO `student_class` (`Class_ID`, `Class_Name`) VALUES
(1, 'BCA'),
(2, 'MCA'),
(3, 'M.Tech'),
(4, 'PHD'),
(5, 'B.Tech'),
(6, 'BSC'),
(7, 'MSC'),
(8, 'BA'),
(9, 'Any Deploma'),
(10, '10th'),
(11, '12th');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`Stu_ID`);

--
-- Indexes for table `student_class`
--
ALTER TABLE `student_class`
  ADD PRIMARY KEY (`Class_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `Stu_ID` int(55) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `student_class`
--
ALTER TABLE `student_class`
  MODIFY `Class_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
