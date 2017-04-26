-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2017 at 03:14 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nes`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_marks`
--

CREATE TABLE `tbl_marks` (
  `marks_id` int(11) NOT NULL,
  `test_type` varchar(100) NOT NULL,
  `Marathi` varchar(100) NOT NULL,
  `Hindi` int(100) NOT NULL,
  `English` varchar(100) NOT NULL,
  `Maths` varchar(100) NOT NULL,
  `GSci` varchar(100) NOT NULL,
  `SoSci` varchar(100) NOT NULL,
  `MAT` varchar(100) NOT NULL,
  `Computer` varchar(100) NOT NULL,
  `marks_date` varchar(100) NOT NULL,
  `stud_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_marks`
--

INSERT INTO `tbl_marks` (`marks_id`, `test_type`, `Marathi`, `Hindi`, `English`, `Maths`, `GSci`, `SoSci`, `MAT`, `Computer`, `marks_date`, `stud_id`) VALUES
(1, 'UnitI', '2', 2, '2', '2', '2', '2', '2', '2', '2017-04-26 1:33 pm', 1),
(2, 'UnitI', '', 0, '', '', '', '', '', '', '2017-04-26 2:47 pm', 1),
(3, 'UnitI', '2', 2, '2', '2', '2', '2', '2', '2', '2017-04-26 2:48 pm', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_student`
--

CREATE TABLE `tbl_student` (
  `stud_id` int(11) NOT NULL,
  `stud_name` varchar(100) NOT NULL,
  `stud_standard` varchar(100) NOT NULL,
  `stud_rollno` varchar(100) NOT NULL,
  `stud_parent_No` varchar(100) NOT NULL,
  `stud_address` varchar(200) NOT NULL,
  `stud_dob` datetime NOT NULL,
  `stud_activestatus` varchar(50) NOT NULL,
  `teacher_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_student`
--

INSERT INTO `tbl_student` (`stud_id`, `stud_name`, `stud_standard`, `stud_rollno`, `stud_parent_No`, `stud_address`, `stud_dob`, `stud_activestatus`, `teacher_id`) VALUES
(1, 'poonam', '7A', '2', '4545454545', 'pune', '2017-04-11 18:30:00', '', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_teacher`
--

CREATE TABLE `tbl_teacher` (
  `teacher_id` int(11) NOT NULL,
  `teacher_username` varchar(100) NOT NULL,
  `teacher_name` varchar(100) NOT NULL,
  `teacher_standard` varchar(100) NOT NULL,
  `teacher_email` varchar(250) NOT NULL,
  `teacher_password` varchar(100) NOT NULL,
  `teacher_number` varchar(50) NOT NULL,
  `teacher_role` varchar(50) NOT NULL,
  `teacher_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_teacher`
--

INSERT INTO `tbl_teacher` (`teacher_id`, `teacher_username`, `teacher_name`, `teacher_standard`, `teacher_email`, `teacher_password`, `teacher_number`, `teacher_role`, `teacher_date`) VALUES
(1, 'Santosh', 'Santosh Bhosale', 'superadmin', 'santosh.bhosale123@gmail.com', 'e6e061838856bf47e1de730719fb2609', '7709326583', 'Principal', '2017-04-20 00:00:00'),
(2, 'sajjan', 'sajjan S magade', '7A', 'santo@gmail.com', 'e6e061838856bf47e1de730719fb2609', '8787878788', 'classteacher', '2017-04-20 03:13:00'),
(3, 'pallavi', 'pallavi gadekar', '7C', 'pallavi@gmail.com', 'e6e061838856bf47e1de730719fb2609', '8787878787', 'classteacher', '2017-04-21 11:40:00'),
(4, 'suraj', 'suraj jadhav', '8A', 'suraj@gmail.com', '7878', '8787878787', 'classteacher', '2017-04-21 12:25:00'),
(5, 'sss', 'ss', 'ss', 's@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99', '1111111111', 'classteacher', '2017-04-21 03:11:00'),
(6, 'sanjay', 'sanjay bankar', '7B', 'saasas123@gmail.com', 'e6e061838856bf47e1de730719fb2609', '1111111111', 'classteacher', '2017-04-21 03:12:00'),
(7, 'swapnil', 'swapnil tipugade', '5A', 'sw@gmail.com', 'e6e061838856bf47e1de730719fb2609', '4545454545', 'classteacher', '2017-04-24 11:55:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_marks`
--
ALTER TABLE `tbl_marks`
  ADD PRIMARY KEY (`marks_id`),
  ADD KEY `stud_id` (`stud_id`);

--
-- Indexes for table `tbl_student`
--
ALTER TABLE `tbl_student`
  ADD PRIMARY KEY (`stud_id`),
  ADD KEY `teacher_id` (`teacher_id`);

--
-- Indexes for table `tbl_teacher`
--
ALTER TABLE `tbl_teacher`
  ADD PRIMARY KEY (`teacher_id`),
  ADD KEY `teacher_number` (`teacher_number`),
  ADD KEY `teacher_email` (`teacher_email`),
  ADD KEY `teacher_username` (`teacher_username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_marks`
--
ALTER TABLE `tbl_marks`
  MODIFY `marks_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_student`
--
ALTER TABLE `tbl_student`
  MODIFY `stud_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_teacher`
--
ALTER TABLE `tbl_teacher`
  MODIFY `teacher_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
