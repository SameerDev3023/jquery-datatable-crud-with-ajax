-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: May 04, 2023 at 10:51 AM
-- Server version: 5.7.39
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ajax-filteration`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(99) NOT NULL,
  `image` varchar(99) NOT NULL,
  `name` varchar(99) NOT NULL,
  `email` varchar(99) NOT NULL,
  `phone` int(99) NOT NULL,
  `country` varchar(99) NOT NULL,
  `state` varchar(99) NOT NULL,
  `city` varchar(99) NOT NULL,
  `pass` varchar(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `image`, `name`, `email`, `phone`, `country`, `state`, `city`, `pass`) VALUES
(234, '64538d38ed4d5_IMG_1868.jpeg', 'Sameer Star', 'Sameer@gmail.com', 347328, 'India', 'Punjab', 'Malerkotla', 'Sameer'),
(235, '64538d41d9d8a_imgonline-com-ua-CompressToSize-gvT1naeBEK.jpg', 'Rahul Sharma', 'Rahul@gmail.com', 3438498, 'India', 'Chandigarh', 'Malerkotla', 'fd'),
(239, '64538dc68f1b5_imgonline-com-ua-CompressToSize-gvT1naeBEK.jpg', 'rohit sharma', 'rohit@gmail.com', 123, 'india', 'Punjab', 'chandigarh', '123456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(99) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=240;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
