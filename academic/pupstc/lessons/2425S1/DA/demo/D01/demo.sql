-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 23, 2024 at 01:00 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `demo`
--

-- --------------------------------------------------------

--
-- Table structure for table `Access`
--

CREATE TABLE `Access` (
  `AccessID` int(4) NOT NULL,
  `AccessLevelName` varchar(30) NOT NULL,
  `AccessDescription` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Access`
--

INSERT INTO `Access` (`AccessID`, `AccessLevelName`, `AccessDescription`) VALUES
(1, 'Member', 'This is a member of the organization.'),
(2, 'VIP', 'This is a VIP member of the organization. Has special privileges.'),
(3, 'Admin', 'This is a manager of the organization. Has all the access.');

-- --------------------------------------------------------

--
-- Table structure for table `Addresses`
--

CREATE TABLE `Addresses` (
  `ID` int(10) NOT NULL,
  `city` varchar(30) NOT NULL,
  `province` varchar(30) NOT NULL,
  `country` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Addresses`
--

INSERT INTO `Addresses` (`ID`, `city`, `province`, `country`) VALUES
(1, 'Makati City', 'NCR', 'PH'),
(2, 'Calamba', 'Laguna', 'PH'),
(3, 'San Pablo', 'Laguna', 'PH');

-- --------------------------------------------------------

--
-- Table structure for table `Blogs`
--

CREATE TABLE `Blogs` (
  `id` int(3) NOT NULL,
  `title` varchar(60) NOT NULL,
  `body` varchar(300) NOT NULL,
  `categories` varchar(15) NOT NULL,
  `date` varchar(25) NOT NULL,
  `author` varchar(30) NOT NULL,
  `image` varchar(50) DEFAULT NULL,
  `comments` varchar(4) NOT NULL DEFAULT '0',
  `is_new` varchar(6) NOT NULL DEFAULT 'false'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Blogs`
--

INSERT INTO `Blogs` (`id`, `title`, `body`, `categories`, `date`, `author`, `image`, `comments`, `is_new`) VALUES
(1, 'I am a new blog', 'Lorem ipsum dolor sit amet.', '', '2024-10-14', 'Steve Jobs', 'img-01.jpg', '36', 'true'),
(15, 'Test', 'Test', 'Test', 'Test', 'Test', NULL, '0', 'false');

-- --------------------------------------------------------

--
-- Table structure for table `Users`
--

CREATE TABLE `Users` (
  `id` int(2) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(35) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `address_id` int(10) NOT NULL,
  `access_level` int(2) NOT NULL DEFAULT 0,
  `is_deleted` varchar(3) NOT NULL DEFAULT 'no'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Users`
--

INSERT INTO `Users` (`id`, `username`, `password`, `first_name`, `last_name`, `address_id`, `access_level`, `is_deleted`) VALUES
(2, 'janeair', 'janeair', 'Jane', 'Air', 1, 1, 'no'),
(3, 'johndoe', 'john123', 'John', 'Doe', 1, 2, 'yes'),
(4, 'billdoe', 'bill123', 'Billy', 'Doe', 2, 3, 'no'),
(5, 'stjobs', 'stjobs', 'Steve', 'Jobs', 4, 4, 'no');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Access`
--
ALTER TABLE `Access`
  ADD PRIMARY KEY (`AccessID`);

--
-- Indexes for table `Addresses`
--
ALTER TABLE `Addresses`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `Blogs`
--
ALTER TABLE `Blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Users`
--
ALTER TABLE `Users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Access`
--
ALTER TABLE `Access`
  MODIFY `AccessID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `Addresses`
--
ALTER TABLE `Addresses`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `Blogs`
--
ALTER TABLE `Blogs`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `Users`
--
ALTER TABLE `Users`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
