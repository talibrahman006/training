-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 11, 2019 at 07:30 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Database: `todo`
--

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE `tasks` (
  `taskid` int(7) NOT NULL,
  `name` varchar(500) NOT NULL DEFAULT 'untitledtask',
  `description` text NOT NULL,
  `starttime` date NOT NULL,
  `stoptime` date NOT NULL,
  `location` varchar(250) NOT NULL,
  `status` tinyint(4) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`taskid`, `name`, `description`, `starttime`, `stoptime`, `location`, `status`) VALUES
(1, 'complete training', 'complete training', '2019-01-01', '2019-01-17', 'shuats', 0),
(2, 'learn Python', 'complete learning of python', '2019-01-10', '2019-07-10', 'shuats', 0),
(3, 'aniket agarwal', 'student', '2019-01-05', '2019-01-18', 'allahabad', 0),
(4, 'aniket agarwal', 'student', '2019-01-05', '2019-01-18', 'allahabad', 0),
(5, 'ujjwal agarwal', 'Description', '2019-01-04', '2019-01-26', 'allahabad', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`taskid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `taskid` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;
