-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2017 at 11:58 AM
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
(1, 'jeet jadhav', '7A', '21', '456321458222', 'bhalawni', '2017-03-31 18:30:00', '', 2),
(2, 'raviraaj', '7A', '6017', '7878787878', 'bhalawni', '2017-03-31 18:30:00', '', 2),
(3, 'mahadev ghadage', '', '45', '8787877878', 'mahud', '2017-04-04 18:30:00', '', 0),
(4, 'pallavi', '8A', '18', '7878788888', 'bhalawni', '2017-04-08 18:30:00', '', 0),
(5, 'ss', '2A', '2', '7777777777', 'sss', '2017-04-15 18:30:00', '', 0),
(6, 'sanjay', '5A', '7', '7878787878', 'ss', '2017-04-07 18:30:00', '', 0),
(7, 'ss', 'dsasas', '11', '2121232321', 'ss', '2017-04-06 18:30:00', '', 0),
(8, 'dnyanesh', '7A', '5', '7854521578', 'aaa', '2017-03-31 18:30:00', '', 2),
(9, 'ss', '7A', '77', '7877788787', 'sss', '2017-04-06 18:30:00', '', 0),
(10, 'ww', '7A', '2', '7854565452', 'sss', '2017-04-08 18:30:00', '', 0),
(11, 'ttt', '7A', '34', '4345345666', 'rrr', '2017-04-06 18:30:00', '', 0),
(12, 'fsfsfd', '7A', '45', '4564645646', 'ghfhg', '2017-04-21 18:30:00', '', 0),
(13, 'sss', '7A', '12', '1121111111', 'ww', '2017-04-13 18:30:00', '', 0),
(14, 'dnyanesh', '7A', '23', '7789878548', 'satara', '2017-04-08 18:30:00', '', 0),
(15, 'sss', '7A', '47', '1212121212', 'ss', '2017-04-15 18:30:00', '', 0),
(16, 'sss', '7A', '22', '4545454545', 'sss', '2017-04-08 18:30:00', '', 0),
(17, 'poonam', '7A', '20', '7854455555', 'nagar', '2017-04-07 18:30:00', '', 2),
(18, 'monica', '6A', '85', '7878787878', 'ss', '2017-04-01 18:30:00', '', 11),
(19, 'sss', '6A', '232', '1254444444', 'sasa', '2017-04-07 18:30:00', '', 11);

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
(7, 'swapnil', 'swapnil tipugade', '5A', 'sw@gmail.com', 'e6e061838856bf47e1de730719fb2609', '4545454545', 'classteacher', '2017-04-24 11:55:00'),
(10, 'abc', 'ABC', '4A', 'abc@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', '7894568147', 'classteacher', '2017-04-24 12:07:00'),
(11, 'akshay', 'akshay powal', '8A', 'a123@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '7894564564', 'classteacher', '2017-04-24 12:08:00'),
(12, 'harsh', 'harsh hajare', '6A', 'h@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '1234567898', 'classteacher', '2017-04-24 03:26:00');

--
-- Indexes for dumped tables
--

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
-- AUTO_INCREMENT for table `tbl_student`
--
ALTER TABLE `tbl_student`
  MODIFY `stud_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `tbl_teacher`
--
ALTER TABLE `tbl_teacher`
  MODIFY `teacher_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
