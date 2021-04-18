-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 13, 2021 at 06:25 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `school_management_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` varchar(20) NOT NULL,
  `name` varchar(70) NOT NULL,
  `email` varchar(70) NOT NULL,
  `password` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`) VALUES
('100', 'Anirban Saha', 'anirban@gmail.com', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `book_info`
--

CREATE TABLE `book_info` (
  `serialno` int(3) NOT NULL,
  `isbn` int(4) NOT NULL,
  `booktitle` varchar(30) NOT NULL,
  `author` varchar(10) NOT NULL,
  `edition` varchar(10) NOT NULL,
  `categories` varchar(20) NOT NULL,
  `bookfile` varchar(30) NOT NULL,
  `bookcopy` int(3) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book_info`
--

INSERT INTO `book_info` (`serialno`, `isbn`, `booktitle`, `author`, `edition`, `categories`, `bookfile`, `bookcopy`) VALUES
(1, 1000, ' the solar bones', 'Mike Croma', '2nd', 'thriller', 'the cold millions.jpg', 1),
(4, 0, 'These Truth Earth', 'Kowsik Dat', '4th', 'mystery', '', 4);

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `id` int(3) NOT NULL,
  `course_name` varchar(20) NOT NULL,
  `class` varchar(10) NOT NULL,
  `description` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id`, `course_name`, `class`, `description`) VALUES
(1, 'Bangla', 'Seven', 'Bangla Text Book Approved by NCTB');

-- --------------------------------------------------------

--
-- Table structure for table `issuedbookdetails`
--

CREATE TABLE `issuedbookdetails` (
  `serialno` int(3) NOT NULL,
  `isbn` int(4) NOT NULL,
  `studentroll` int(3) NOT NULL,
  `issuesdate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `returndate` date NOT NULL,
  `returnstatus` int(2) NOT NULL,
  `fine` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `issuedbookdetails`
--

INSERT INTO `issuedbookdetails` (`serialno`, `isbn`, `studentroll`, `issuesdate`, `returndate`, `returnstatus`, `fine`) VALUES
(2, 1111, 13, '2021-04-12 19:13:17', '0000-00-00', 1, 3),
(6, 1000, 12, '2021-04-12 19:18:54', '2021-04-15', 0, 21),
(8, 1100, 18, '2021-04-12 19:23:21', '2021-04-14', 0, 45);

-- --------------------------------------------------------

--
-- Table structure for table `librarian`
--

CREATE TABLE `librarian` (
  `id` int(3) NOT NULL,
  `librarianid` int(4) NOT NULL,
  `name` varchar(20) NOT NULL,
  `mail` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `dob` date NOT NULL,
  `password` varchar(20) NOT NULL,
  `mobileno` int(11) NOT NULL,
  `address` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `librarian`
--

INSERT INTO `librarian` (`id`, `librarianid`, `name`, `mail`, `gender`, `dob`, `password`, `mobileno`, `address`) VALUES
(1, 1111, 'Abdul Kader', 'kader@gmail.com', 'male', '1998-04-15', '56781234', 1855759093, 'savar,dhaka'),
(2, 1111, 'Kowsik', 'kowsik@gmail.com', 'male', '1994-04-05', '11111111', 1855759333, 'sirajgonj'),
(3, 1111, 'Kowsik', 'kowsik@gmail.com', 'male', '1994-04-05', '11111111', 1855759333, 'sirajgonj'),
(4, 2121, 'Kowsik dev', 'kowsik@gmail.com', 'male', '1994-04-05', '11111111', 1855759333, 'sirajgonj'),
(5, 3121, 'Kowsik dev', 'kowsik@gmail.com', 'male', '1994-04-05', '11111111', 1855759333, 'sirajgonj');

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `noticeid` int(4) NOT NULL,
  `noticetitle` varchar(40) NOT NULL,
  `noticedetails` varchar(200) NOT NULL,
  `time` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`noticeid`, `noticetitle`, `noticedetails`, `time`) VALUES
(1, 'New books now available on our library', 'New books now available on our library. Please bring your student id along to borrow books', '0000-00-00 00:00:00.000000'),
(2, 'azzzzzzzzzzzzzzzzzzzzzzzzzzzz', 'zaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '2021-04-09 18:00:00.000000'),
(3, 'Php and mysql with web', 'learn webdevelopment to read Php and mysql  book.Available in our library.', '2021-04-11 18:00:00.000000');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` varchar(20) NOT NULL,
  `name` varchar(70) NOT NULL,
  `email` varchar(70) NOT NULL,
  `mobile` varchar(70) NOT NULL,
  `gender` varchar(70) NOT NULL,
  `dob` varchar(10) NOT NULL,
  `class` varchar(10) NOT NULL,
  `section` varchar(10) NOT NULL,
  `roll` varchar(70) NOT NULL,
  `p_address` varchar(70) NOT NULL,
  `password` varchar(70) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `email`, `mobile`, `gender`, `dob`, `class`, `section`, `roll`, `p_address`, `password`, `status`) VALUES
('', 'kader', 'kader@gmail.com', '01866759092', 'male', '1998/10/6', 'four', 'C', '13', 'savar', '22222222', 1),
('3', 'anirban', 'anirban@gmail.com', '01945678901', 'male', '1998-5-6', 'seven', '', '12', 'kuril', '22222222', 0),
('301', 'Bishowjit Datta', 'bishowjit@gmail.com', '01758621119', 'male', '2010/12/02', 'Six', 'A', '18', 'Banani,Dhaka', '7890', 0);

-- --------------------------------------------------------

--
-- Table structure for table `studentslibraryaccount`
--

CREATE TABLE `studentslibraryaccount` (
  `serialno` int(3) NOT NULL,
  `roll` int(3) NOT NULL,
  `name` varchar(20) NOT NULL,
  `mail` varchar(20) NOT NULL,
  `gender` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `studentslibraryaccount`
--

INSERT INTO `studentslibraryaccount` (`serialno`, `roll`, `name`, `mail`, `gender`) VALUES
(11, 12, 'anirban', 'anirban@gmail.com', 'male'),
(12, 13, 'kader', 'kader@gmail.com', 'male');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `id` varchar(20) NOT NULL,
  `name` varchar(70) NOT NULL,
  `email` varchar(70) NOT NULL,
  `mobile` varchar(70) NOT NULL,
  `gender` varchar(70) NOT NULL,
  `dob` date NOT NULL,
  `password` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`id`, `name`, `email`, `mobile`, `gender`, `dob`, `password`) VALUES
('200', 'Kowshik Chakraborty', 'kowshik@gmail.com', '01764199181', 'male', '1984-08-09', '4567');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `book_info`
--
ALTER TABLE `book_info`
  ADD PRIMARY KEY (`serialno`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `issuedbookdetails`
--
ALTER TABLE `issuedbookdetails`
  ADD PRIMARY KEY (`serialno`);

--
-- Indexes for table `librarian`
--
ALTER TABLE `librarian`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`noticeid`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `studentslibraryaccount`
--
ALTER TABLE `studentslibraryaccount`
  ADD PRIMARY KEY (`serialno`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book_info`
--
ALTER TABLE `book_info`
  MODIFY `serialno` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `issuedbookdetails`
--
ALTER TABLE `issuedbookdetails`
  MODIFY `serialno` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `librarian`
--
ALTER TABLE `librarian`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `noticeid` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `studentslibraryaccount`
--
ALTER TABLE `studentslibraryaccount`
  MODIFY `serialno` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
