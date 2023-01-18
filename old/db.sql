-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2023 at 03:02 AM
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
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL,
  `text` varchar(64) NOT NULL,
  `image_path` varchar(255) NOT NULL,
  `lang` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `text`, `image_path`, `lang`) VALUES
(1, 'name1', 'text1', 'https://roatamare.files.wordpress.com/2015/08/copiii-la-muzeu-roata-mare-giant-forest-museum.jpg', 'ro'),
(2, 'name2', 'text2', 'https://roatamare.files.wordpress.com/2015/08/copiii-la-muzeu-roata-mare-ringling-museum.jpg', 'ro');

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
  `description` text NOT NULL,
  `content` longtext,
  `category` int(8) NOT NULL DEFAULT '0',
  `thumbnail_path` varchar(256) NOT NULL,
  `posted_by` int(8) NOT NULL,
  `posted_at_unix` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `lang` varchar(8) NOT NULL DEFAULT 'ro'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `description`, `content`, `category`, `thumbnail_path`, `posted_by`, `posted_at_unix`, `lang`) VALUES
(1, 'titlu 1', 'descriere scurta 1 descriere scurta 1 descriere scurta 1 descriere scurta 1 ', 'continut 1 continut 1 continut 1 continut 1 continut 1 continut 1 continut 1 continut 1 continut 1 continut 1 continut 1 continut 1 continut 1 continut 1 continut 1 continut 1 continut 1 continut 1 continut 1 continut 1 continut 1 continut 1 continut 1 continut 1 continut 1 continut 1 continut 1 continut 1 continut 1 continut 1 continut 1 continut 1 continut 1 continut 1 continut 1 continut 1 continut 1 continut 1 continut 1 continut 1 continut 1 continut 1 continut 1 continut 1 continut 1 continut 1 continut 1 ', 1, 'https://images.adsttc.com/media/images/627e/dec9/3e4b/318f/a100/0024/slideshow/courtesy_of_studio_malka_architecture.jpg?1652481733', 1, '2023-01-14 00:03:58', 'ro'),
(2, 'test22222222222', 'descriere scurta 2  descriere scurta 2  descriere scurta 2  descriere scurta 2  descriere scurta 2  descriere scurta 2  descriere scurta 2  ', 'continut 2 continut 2 continut 2 continut 2 continut 2 continut 2 continut 2 continut 2 continut 2 continut 2 continut 2 continut 2 continut 2 continut 2 continut 2 continut 2 continut 2 continut 2 continut 2 continut 2 continut 2 continut 2 continut 2 continut 2 continut 2 continut 2 continut 2 continut 2 continut 2 continut 2 continut 2 continut 2 continut 2 ', 1, 'https://images.adsttc.com/media/images/627e/dec9/3e4b/318f/a100/0024/slideshow/courtesy_of_studio_malka_architecture.jpg?1652481733', 2, '2023-01-14 00:03:57', 'ro'),
(3, 'neagoe', 'da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da ', 'da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da ', 1, 'https://images.adsttc.com/media/images/627e/dec9/3e4b/318f/a100/0024/slideshow/courtesy_of_studio_malka_architecture.jpg?1652481733', 1, '2023-01-13 23:16:27', 'ro'),
(4, 'neagoe', 'da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da ', 'da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da ', 2, 'http://zigzagprinromania.com/blog/wp-content/uploads/2018/03/Muzeul.National.Secuiesc.Logo-22-of-23-1024x576.jpg', 1, '2023-01-13 23:16:29', 'en'),
(5, 'titlu 1', 'descriere scurta 1 descriere scurta 1 descriere scurta 1 descriere scurta 1 ', 'continut 1 continut 1 continut 1 continut 1 continut 1 continut 1 continut 1 continut 1 continut 1 continut 1 continut 1 continut 1 continut 1 continut 1 continut 1 continut 1 continut 1 continut 1 continut 1 continut 1 continut 1 continut 1 continut 1 continut 1 continut 1 continut 1 continut 1 continut 1 continut 1 continut 1 continut 1 continut 1 continut 1 continut 1 continut 1 continut 1 continut 1 continut 1 continut 1 continut 1 continut 1 continut 1 continut 1 continut 1 continut 1 continut 1 continut 1 ', 2, 'https://images.adsttc.com/media/images/627e/dec9/3e4b/318f/a100/0024/slideshow/courtesy_of_studio_malka_architecture.jpg?1652481733', 1, '2023-01-14 00:03:59', 'ro'),
(6, 'test22222222', 'descriere scurta 2  descriere scurta 2  descriere scurta 2  descriere scurta 2  descriere scurta 2  descriere scurta 2  descriere scurta 2  ', 'continut 2 continut 2 continut 2 continut 2 continut 2 continut 2 continut 2 continut 2 continut 2 continut 2 continut 2 continut 2 continut 2 continut 2 continut 2 continut 2 continut 2 continut 2 continut 2 continut 2 continut 2 continut 2 continut 2 continut 2 continut 2 continut 2 continut 2 continut 2 continut 2 continut 2 continut 2 continut 2 continut 2 ', 2, 'https://images.adsttc.com/media/images/627e/dec9/3e4b/318f/a100/0024/slideshow/courtesy_of_studio_malka_architecture.jpg?1652481733', 2, '2023-01-14 00:04:00', 'ro'),
(7, 'neagoe', 'da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da ', 'da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da da ', 2, 'https://images.adsttc.com/media/images/627e/dec9/3e4b/318f/a100/0024/slideshow/courtesy_of_studio_malka_architecture.jpg?1652481733', 1, '2023-01-13 23:16:33', 'ro');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(32) NOT NULL,
  `email` varchar(64) DEFAULT NULL,
  `name` varchar(128) DEFAULT NULL,
  `pass` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `name`, `pass`) VALUES
(1, 'xslow@gmail.com', 'Alex Stan', '$2y$10$bArmNGEfPjzRiF/e1hx6Fuf1HQ3MF0XbttVQ/pRsrQHQ1M6qHOj8q'),
(2, 'geojeo@gmail.com\r\n', 'Vrinceanu Georgiana', '$2y$10$bArmNGEfPjzRiF/e1hx6Fuf1HQ3MF0XbttVQ/pRsrQHQ1M6qHOj8q');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

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
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `dashboard`
--
ALTER TABLE `dashboard`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
