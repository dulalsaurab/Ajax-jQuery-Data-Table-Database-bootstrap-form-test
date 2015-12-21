-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 21, 2015 at 06:41 PM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.5.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `telephone`
--

-- --------------------------------------------------------

--
-- Table structure for table `directory`
--

CREATE TABLE `directory` (
  `sn` int(7) NOT NULL,
  `title` varchar(15) NOT NULL,
  `name` varchar(25) NOT NULL,
  `phoneno` int(15) NOT NULL,
  `mobileno` int(15) NOT NULL,
  `email` varchar(35) NOT NULL,
  `address` varchar(35) NOT NULL,
  `companyname` varchar(35) NOT NULL,
  `companyaddress` varchar(35) NOT NULL,
  `companyno` int(15) NOT NULL,
  `companyemail` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `directory`
--

INSERT INTO `directory` (`sn`, `title`, `name`, `phoneno`, `mobileno`, `email`, `address`, `companyname`, `companyaddress`, `companyno`, `companyemail`) VALUES
(16, '', 'Rozer That', 2147483647, 2147483647, 'rojer.that@gmail.com', 'Westros', 'Link Ink', 'Westros Boulevard ', 2147483647, 'rojer.that@linkink.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `directory`
--
ALTER TABLE `directory`
  ADD PRIMARY KEY (`sn`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `directory`
--
ALTER TABLE `directory`
  MODIFY `sn` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
