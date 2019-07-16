-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 13, 2018 at 10:00 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `alcon`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_student_enrollment`
--

CREATE TABLE `tbl_student_enrollment` (
  `enrollment_id` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `the_day` varchar(15) NOT NULL,
  `Time_In` varchar(15) NOT NULL,
  `Time_Out` varchar(15) NOT NULL DEFAULT '0000',
  `Memo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_student_information`
--

CREATE TABLE `tbl_student_information` (
  `Id` int(11) NOT NULL,
  `Student_id` int(15) NOT NULL,
  `Student_Name` varchar(50) NOT NULL,
  `Class_No` varchar(15) NOT NULL,
  `CRN` int(10) NOT NULL,
  `Instructor_Name` varchar(50) NOT NULL,
  `Semester` varchar(15) NOT NULL DEFAULT 'Fall 2018'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_student_information`
--

INSERT INTO `tbl_student_information` (`Id`, `Student_id`, `Student_Name`, `Class_No`, `CRN`, `Instructor_Name`, `Semester`) VALUES
(1, 1005, 'Riswan Agyeman', 'MA121-001', 4005, 'Kennedy Osten', 'Fall 2018'),
(2, 1006, 'Isaac Quarshie', 'MA121-001', 4006, 'Kennedy Osten', 'Fall 2018');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_student_enrollment`
--
ALTER TABLE `tbl_student_enrollment`
  ADD PRIMARY KEY (`enrollment_id`),
  ADD KEY `id` (`id`),
  ADD KEY `id_2` (`id`);

--
-- Indexes for table `tbl_student_information`
--
ALTER TABLE `tbl_student_information`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_student_enrollment`
--
ALTER TABLE `tbl_student_enrollment`
  MODIFY `enrollment_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_student_information`
--
ALTER TABLE `tbl_student_information`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_student_enrollment`
--
ALTER TABLE `tbl_student_enrollment`
  ADD CONSTRAINT `tbl_student_enrollment_ibfk_1` FOREIGN KEY (`id`) REFERENCES `tbl_student_information` (`Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
