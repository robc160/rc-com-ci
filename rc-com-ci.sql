-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 04, 2018 at 05:56 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rc-com-ci`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `category` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `author` varchar(45) NOT NULL,
  `title` varchar(200) NOT NULL,
  `body` text NOT NULL,
  `cover_image` varchar(50) NOT NULL DEFAULT 'no_image.png',
  `video` varchar(30) NOT NULL,
  `published` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `date`, `author`, `title`, `body`, `cover_image`, `video`, `published`) VALUES
(1, '2017-07-28 19:40:04', 'Rob C', 'HTML5 for Beginners: Lesson 1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam malesuada mattis tortor, quis ultricies diam gravida vel. Sed vestibulum auctor ligula et posuere. Praesent ultricies, neque ut suscipit sollicitudin, massa urna pharetra ligula, quis fermentum purus ante non quam. Nunc auctor arcu id nisi iaculis rhoncus. Suspendisse potenti. Sed cursus libero eget nunc dapibus dignissim. Sed nec dui vel metus iaculis auctor at ut ex. Phasellus eget justo sollicitudin, blandit odio quis, placerat mi.', '/public/images/html5-1-th.png', '', 1),
(2, '2017-07-28 19:40:04', 'Rob C', 'HTML5 for Beginners: Lesson 2', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam malesuada mattis tortor, quis ultricies diam gravida vel. Sed vestibulum auctor ligula et posuere. ', '/public/images/html5-2-th.png', '', 1),
(3, '2018-06-03 22:17:18', 'RobC', 'Installing and setting up Samba file server', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi maximus dignissim purus, sit amet facilisis risus feugiat a. Vivamus scelerisque elementum enim, a sagittis libero condimentum at. Nunc massa orci, scelerisque at venenatis quis, porttitor sit amet lectus. Duis hendrerit lorem id ultrices sodales. ', '/public/images/setting-up-samba.png', 'no url', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
