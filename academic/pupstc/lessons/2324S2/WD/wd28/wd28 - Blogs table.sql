-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 18, 2023 at 03:17 PM
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
-- Table structure for table `Blogs`
--

CREATE TABLE `Blogs` (
  `id` int(3) NOT NULL,
  `title` varchar(60) NOT NULL,
  `body` varchar(300) NOT NULL DEFAULT 'test',
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
(1, 'This is a blog title from the DB', 'There is a clickable image with beautiful hover effect and active title link for each post item. Left side is a sticky menu bar. Right side is a blog content that will scroll up and down', 'Travel', 'January 18, 2023', 'John Doe', 'img-01.jpg', '36', 'true'),
(2, 'This is another blog from the DB', 'There is a clickable image with beautiful hover effect and active title link for each post item. Left side is a sticky menu bar. Right side is a blog content that will scroll up and down 2', 'Events', 'June 16, 2020', 'Adam Sam', 'img-02.jpg', '48', 'false'),
(3, 'This is the third blog from the DB with no image', 'There is a clickable image with beautiful hover effect and active title link for each post item. Left side is a sticky menu bar. Right side is a blog content that will scroll up and down 3', 'Creative', 'June 24, 2021', 'John Walker', NULL, '0', 'false'),
(4, 'NEW BLOG', 'I am a new entry', 'Entertainment', 'January 19, 2023', 'Charles Babbage', 'img-03.jpg', '54', 'true');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Blogs`
--
ALTER TABLE `Blogs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Blogs`
--
ALTER TABLE `Blogs`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
