-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 10, 2017 at 02:33 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_students`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login`
--

CREATE TABLE `tbl_login` (
  `userid` varchar(100) NOT NULL,
  `password` varchar(20) NOT NULL,
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `totalmarks` int(5) NOT NULL,
  `photo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_login`
--

INSERT INTO `tbl_login` (`userid`, `password`, `firstname`, `lastname`, `totalmarks`, `photo`) VALUES
('abc', 'abc', 'ABC', 'XYZ', 300, 'no_photo.gif'),
('admin', 'admin@123', 'Pritesh', 'Patel', 200, 'cute-little-low-res-chicken.png'),
('pritesh', 'pritesh', 'Pritesh', 'Patel', 320, 'Chicken.png'),
('root', 'root@123', '', '', 0, 'clittle.png'),
('test', 'test@123', 'Test', 'Test End', 340, 'no_photo.gif'),
('xyz', 'xyz', 'XYZ-XYZ', 'ABC', 100, 'singing-chicken-icon-150x150.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_login`
--
ALTER TABLE `tbl_login`
  ADD PRIMARY KEY (`userid`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
