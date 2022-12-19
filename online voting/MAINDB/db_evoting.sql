-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2022 at 07:14 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_evoting`
--

-- --------------------------------------------------------

--
-- Table structure for table `acc_info`
--

CREATE TABLE `acc_info` (
  `first_name` varchar(300) NOT NULL,
  `last_name` varchar(300) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `father_name` varchar(30) NOT NULL,
  `email` varchar(300) NOT NULL,
  `mobile_no` varchar(110) NOT NULL,
  `state` varchar(110) NOT NULL,
  `aadhar` varchar(110) NOT NULL,
  `pan` varchar(110) NOT NULL,
  `dob` varchar(100) NOT NULL,
  `profile_image` varchar(100) NOT NULL,
  `uid` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `acc_info`
--

INSERT INTO `acc_info` (`first_name`, `last_name`, `gender`, `father_name`, `email`, `mobile_no`, `state`, `aadhar`, `pan`, `dob`, `profile_image`, `uid`, `password`, `status`) VALUES
('Sandeep', 'G', 'Male', 'rajanna', 'gsandeep.trylogic@gmail.com', '9948039493', 'TG', '912398991122', 'pan', '1999-10-11', '226834.jpg', '12', '123456', 'Activate'),
('SADHANA', 'G', 'Female', 'RAJAN', 'sadhana@gmail.com', '9988899988', 'TG', '123456789', 'pan', '2001-10-10', '54042.png', '1234', '1234', 'Activate');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `ID` int(50) NOT NULL,
  `votername` varchar(100) NOT NULL,
  `feedback` varchar(700) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`ID`, `votername`, `feedback`) VALUES
(4, 'ss', 'test'),
(5, '', 'Testing working'),
(6, '', 'Test Test'),
(7, '', 'qwertyuj'),
(8, '', 'rerrredddr'),
(9, '$name', 'dfghjkl'),
(10, 'Sandeep G', 'Its very good'),
(11, '', 'asd'),
(12, '', 'ertyui'),
(13, '', 'wertyuio'),
(14, '', 'vbnm'),
(15, 'Sadhana', 'The application has good user interface and able to vote very easily..'),
(16, 'sadhana', 'Good ');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `aid` int(11) NOT NULL,
  `admin_username` varchar(30) NOT NULL,
  `admin_password` varchar(30) NOT NULL,
  `time_stamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`aid`, `admin_username`, `admin_password`, `time_stamp`) VALUES
(1, 'admin', 'admin', '2022-05-14 04:33:55');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `id` int(5) NOT NULL,
  `full_name` varchar(32) NOT NULL,
  `email` varchar(32) NOT NULL,
  `voter_id` int(10) NOT NULL,
  `voted_for` varchar(32) NOT NULL,
  `dateandtime` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id`, `full_name`, `email`, `voter_id`, `voted_for`, `dateandtime`) VALUES
(1, 'Bill Hill', 'virginhill@gmail.com', 696978, 'JM', '2022-05-14 04:53:07'),
(3, 'David J Jackson', 'jckgn@gmail.com', 753960, 'JM', '2022-05-14 04:53:07'),
(4, 'David Murphy', 'murphyuniverse@mail.com', 789674, 'JM', '2022-05-14 04:53:07'),
(5, 'Max Gerber', 'kgerber@gmail.com', 612002, 'JM', '2022-05-14 04:53:07'),
(6, 'Patricia Bidwell', 'bidwellp@gmail.com', 3687430, 'JM', '2022-05-14 04:53:07'),
(7, 'Sebastian Chaney', 'sebsta@gmail.com', 3674629, 'JRZ', '2022-05-14 04:53:07'),
(8, 'Pennie Hain', 'pennisch@gmail.com', 9989378, 'DM', '2022-05-14 04:53:07'),
(9, 'Margaret K Vinson', 'margaretfk@gmail.com', 2294940, 'MAD', '2022-05-14 04:53:07'),
(10, 'Jerry J Hudkins', 'puticns@gmail.com', 6066483, 'MAD', '2022-05-14 04:53:07'),
(11, 'Michael C Wilson', 'wilsonc@yahoo.com', 9749403, 'JRZ', '2022-05-14 04:53:07'),
(12, 'Robert French', 'robertof@gmail.com', 9566678, 'MAD', '2022-05-14 04:53:07'),
(13, 'Bernard T Hamilton', 'hamiltonb@gmail.com', 696969, 'JM', '2022-05-14 04:53:07'),
(14, 'Lawrence C Godsey', 'godsey1169@gmail.com', 124588, 'DM', '2022-05-14 04:53:07'),
(15, 'Ivan Blackwell', 'rndiwelvan@gmail.com', 696478, 'DM', '2022-05-14 04:53:07'),
(16, 'Christine Pennie', 'pennict@gmail.com', 452200, 'DM', '2022-05-14 04:53:07'),
(17, 'Bruno Denn', 'denbru@gmail.com', 178540, 'MAD', '2022-05-14 04:53:07'),
(18, 'Will Williams', 'williamswi@gmail.com', 369741, 'DM', '2022-05-14 04:53:07'),
(19, 'James Barnes', 'barnesismine@gmail.com', 852145, 'DM', '2022-05-14 04:53:07'),
(20, 'Tommy Hiddle', 'hiddlet@gmail.com', 852000, 'DM', '2022-05-14 04:53:07'),
(21, 'John Stelpw', 'stejo@gmail.com', 782200, 'DM', '2022-05-14 04:53:07'),
(22, 'James Rhoades', 'rhoadesj02@gmail.com', 197352, 'JRZ', '2022-05-14 04:53:07'),
(23, 'Mia Adams', 'adams.mia6@gmail.com', 699660, 'JRZ', '2022-05-14 04:53:07'),
(24, 'Amy Nelcon', 'nelconam@gmail.com', 719645, 'MAD', '2022-05-14 04:53:07'),
(25, 'Henry Doe', 'henry7755@gmail.com', 123121, 'JW', '2022-05-14 04:53:07'),
(26, 'Thomas Yorkke', 'yorkehead@gmail.com', 130058, 'JW', '2022-05-14 04:53:07'),
(27, 'Colin Greenwwod', 'greenco002@gmail.com', 703969, 'JW', '2022-05-14 04:53:07'),
(29, 'Harry Denn', 'harryden66@gmail.com', 852069, 'DM', '2022-05-14 04:53:07'),
(30, 'Johnny Moore', 'moorejh@gmail.com', 852476, 'JM', '2022-05-14 04:53:07'),
(31, 'Marky Doee', 'marky667@gmail.com', 710009, 'DM', '2022-05-14 04:53:07'),
(32, 'Danny', 'danny2@gmail.com', 555520, 'MAD', '2022-05-14 04:53:07'),
(33, '', '', 0, '', '2022-05-14 04:53:07'),
(34, 'Sandeep G', 'gsandeep.trylogic@gmail.com', 2147483647, 'JM', '2022-05-14 04:53:07'),
(35, 'Sandeep G', 'gsandeep.trylogic@gmail.com', 2147483647, 'JM', '2022-05-14 04:53:07'),
(36, 'Sandeep G', 'gsandeep.trylogic@gmail.com', 2147483647, 'JM', '2022-05-14 04:53:07'),
(37, '', '', 0, '', '2022-05-14 04:53:07'),
(38, '', '', 0, '', '2022-05-14 04:53:07'),
(39, '', '', 0, '', '2022-05-14 04:53:07'),
(40, 'Sandeep G', 'gsandeep.trylogic@gmail.com', 1212321231, 'JM', '2022-05-14 04:53:07'),
(41, '', '', 0, '', '2022-05-14 04:53:07'),
(42, 'Sandeep G', 'gsandeep.trylogic@gmail.com', 79928881, 'JM', '2022-05-14 04:53:07'),
(43, '', '', 0, '', '2022-05-14 04:53:07'),
(44, '', '', 0, '', '2022-05-14 04:53:07'),
(45, 'Sandeep G', 'gsandeep.trylogic@gmail.com', 2147483647, 'JM', '2022-05-14 04:53:07'),
(46, '', '', 0, '', '2022-05-14 04:53:07'),
(47, 'Sandeep G', 'gsandeep.trylogic@gmail.com', 2147483647, 'JM', '2022-05-14 04:53:07'),
(48, '', '', 0, '', '2022-05-14 04:53:07'),
(49, 'Sandeep G', 'gsandeep.trylogic@gmail.com', 56789, 'JM', '2022-05-14 04:53:07'),
(50, 'Sandeep G', 'gsandeep.trylogic@gmail.com', 90989, 'JRZ', '2022-05-14 04:53:07'),
(51, '', '', 0, '', '2022-05-14 04:53:07'),
(52, '', '', 0, '', '2022-05-14 04:53:07'),
(53, 'Sandeep G', 'gsandeep.trylogic@gmail.com', 2147483647, 'JM', '2022-05-14 04:53:07'),
(54, 'Sandeep', 'sandeep@gmail.com', 2147483647, 'JM', '2022-05-14 04:53:07'),
(55, 'Vamshi', '8@hma', 999999999, 'JM', '2022-05-14 04:53:07'),
(56, 'Sandeep G', 'gsandeep.trylogic@gmail.com', 2147483647, 'JM', '2022-05-14 04:53:07'),
(57, 'Vamshi', 'sandeep@gmail.com', 2147483647, 'JM', '2022-05-14 04:53:07'),
(58, 'SA', 'sandeep@gmail.com', 1212112211, 'JM', '2022-05-14 04:53:07'),
(59, 'SA', 'sandeep@gmail.com', 1212112211, 'JM', '2022-05-14 04:53:07'),
(60, 'a', 'a@fs.com', 2147483647, 'JM', '2022-05-14 04:53:07'),
(61, 'vamsi', 'a@gmail.com', 2147483647, 'JM', '2022-05-14 04:53:07'),
(62, 'Vamshi', '1231223@nfo.com', 12344321, 'JM', '2022-05-14 04:53:07'),
(63, 'cv', 'SW@SS.CC', 2147483647, 'JM', '2022-05-14 04:53:07'),
(64, 'Sandeep G', 'gsandeep.trylogic@gmail.com', 90909090, 'JM', '2022-05-14 04:53:07'),
(65, '', '', 0, '', '2022-05-14 04:53:07'),
(66, '', '', 0, '', '2022-05-14 04:53:07'),
(67, '', '', 0, '', '2022-05-14 04:53:07'),
(68, '', '', 0, '', '2022-05-14 04:53:07'),
(69, '', '', 0, '', '2022-05-14 04:53:07'),
(70, '', '', 0, '', '2022-05-14 04:53:07'),
(71, '', '', 0, '', '2022-05-14 04:53:07'),
(72, '', '', 0, '', '2022-05-14 04:53:07'),
(73, '', '', 0, '', '2022-05-14 04:53:07'),
(74, '', '', 0, '', '2022-05-14 04:53:07'),
(75, '', '', 0, '', '2022-05-14 04:53:07'),
(76, '', '', 0, '', '2022-05-14 04:53:07'),
(77, '', '', 0, '', '2022-05-14 04:53:07'),
(85, 'Sandeep G', 'gsandeep.trylogic@gmail.com', 90099000, 'JM', '2022-05-14 04:53:07'),
(86, 'Sandeep G', 'gsandeep.trylogic@gmail.com', 23456789, 'JM', '2022-05-14 04:53:07'),
(87, 'Sandeep G', 'gsandeep.trylogic@gmail.com', 234432, 'JM', '2022-05-14 04:53:07'),
(88, 'Sandeep G', 'gsandeep.trylogic@gmail.com', 1234567890, 'JM', '2022-05-14 04:53:07'),
(89, '234567', '345678@ghjk.ghj', 456789, 'JM', '2022-05-14 04:53:07'),
(90, 'Sandeep G', 'gsandeep.trylogic@gmail.com', 11111, 'JM', '2022-05-14 04:53:07'),
(91, 'SANDEEP G', 'sandeep@gmail.com', 12332123, 'JM', '2022-05-14 04:53:07'),
(92, 'qqqqqq', 'a@s.cc', 1234, 'JM', '2022-05-14 04:53:07'),
(93, 'Sandeep G', 'gsandeep.trylogic@gmail.com', 1223332, 'JM', '2022-05-14 04:53:07'),
(94, 'Sandeep G', 'gsandeep.trylogic@gmail.com', 1234567, 'JM', '2022-05-14 04:53:07'),
(95, 'Sandeep G', 'gsandeep.trylogic@gmail.com', 23456789, 'JM', '2022-05-14 04:53:07'),
(96, 'Sandeep G', 'gsandeep.trylogic@gmail.com', 3456789, 'JM', '2022-05-14 04:53:07'),
(100, 'Sadhana', 'sadhana@gmail.com', 1234567, 'JM', '2022-05-14 04:53:07'),
(101, 'sadhana', 'sadhana@gmail.com', 123455433, 'JM', '2022-05-14 04:57:55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `ID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
