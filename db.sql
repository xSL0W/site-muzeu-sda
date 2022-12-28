-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 28, 2022 at 03:05 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `muzeu`
--

-- --------------------------------------------------------

--
-- Table structure for table `dashboard`
--

CREATE TABLE `dashboard` (
  `id` int(11) NOT NULL,
  `title` text,
  `footer` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dashboard`
--

INSERT INTO `dashboard` (`id`, `title`, `footer`) VALUES
(1, 'Muzeul National Secuiesc', '(&copy;) Muzeul Secuiesc 2022 <hr class=\"divider\" /> <a style:\"font-size:6\">Developed by Helios</a>');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(256) DEFAULT NULL,
  `short_content` text NOT NULL,
  `content` longtext,
  `category` varchar(128) DEFAULT NULL,
  `created_by` int(11) NOT NULL,
  `language` varchar(8) NOT NULL,
  `created_at` varchar(128) NOT NULL,
  `thumbnail_path` varchar(256) NOT NULL,
  `posted_by` int(8) NOT NULL,
  `posted_at_unix` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `short_content`, `content`, `category`, `created_by`, `language`, `created_at`, `thumbnail_path`, `posted_by`, `posted_at_unix`) VALUES
(1, 'titlu 1', 'descriere scurta 1 descriere scurta 1 descriere scurta 1 descriere scurta 1 ', 'continut 1 continut 1 continut 1 continut 1 continut 1 continut 1 continut 1 continut 1 continut 1 continut 1 continut 1 continut 1 continut 1 continut 1 continut 1 continut 1 continut 1 continut 1 continut 1 continut 1 continut 1 continut 1 continut 1 continut 1 continut 1 continut 1 continut 1 continut 1 continut 1 continut 1 continut 1 continut 1 continut 1 continut 1 continut 1 continut 1 continut 1 continut 1 continut 1 continut 1 continut 1 continut 1 continut 1 continut 1 continut 1 continut 1 continut 1 ', 'test1', 1, 'ro', '21/12/2022', '../assets/img/portfolio/fullsize/1.jpg', 1, '2022-12-28 01:35:11'),
(2, 'test2', 'descriere scurta 2  descriere scurta 2  descriere scurta 2  descriere scurta 2  descriere scurta 2  descriere scurta 2  descriere scurta 2  ', 'continut 2 continut 2 continut 2 continut 2 continut 2 continut 2 continut 2 continut 2 continut 2 continut 2 continut 2 continut 2 continut 2 continut 2 continut 2 continut 2 continut 2 continut 2 continut 2 continut 2 continut 2 continut 2 continut 2 continut 2 continut 2 continut 2 continut 2 continut 2 continut 2 continut 2 continut 2 continut 2 continut 2 ', 'test2', 2, 'ro', '21/12/2022', '../assets/img/portfolio/fullsize/2.jpg', 2, '2022-12-28 01:35:13');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(32) NOT NULL,
  `email` varchar(64) DEFAULT NULL,
  `pass` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `pass`) VALUES
(1, 'xslow@gmail.com', '$2y$10$bArmNGEfPjzRiF/e1hx6Fuf1HQ3MF0XbttVQ/pRsrQHQ1M6qHOj8q'),
(2, 'geojeo@gmail.com\r\n', '$2y$10$bArmNGEfPjzRiF/e1hx6Fuf1HQ3MF0XbttVQ/pRsrQHQ1M6qHOj8q');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dashboard`
--
ALTER TABLE `dashboard`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dashboard`
--
ALTER TABLE `dashboard`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
