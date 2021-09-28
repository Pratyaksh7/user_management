-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 27, 2021 at 11:44 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `task`
--

-- --------------------------------------------------------

--
-- Table structure for table `user_detail`
--

CREATE TABLE `user_detail` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `dob` varchar(10) DEFAULT NULL,
  `photo` varchar(200) NOT NULL,
  `email` varchar(30) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `password` varchar(150) NOT NULL,
  `vstreet` varchar(20) NOT NULL,
  `vcity` varchar(20) NOT NULL,
  `vstate` varchar(20) NOT NULL,
  `vzip` int(10) NOT NULL,
  `status` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_detail`
--

INSERT INTO `user_detail` (`id`, `username`, `dob`, `photo`, `email`, `gender`, `password`, `street`, `city`, `state`, `zip`, `status`) VALUES
(3, 'test1', '', 'http://[::1]/task/uploads/IMG_20190828_1425089.jpg', 'test@gmail.com', 'female', '$2y$10$XF.jNppAvX9oQQj7n3KRUeYlYZS23cX8MRKZmY..N0O0kMjsVkG4m', 'street1', 'Udaipur', 'Rajasthan', 313024, 0),
(4, 'Pratyaksh', NULL, 'http://[::1]/task/uploads/Snapchat-604597079.jpg', 'pratyaksh@gmail.com', 'male', '$2y$10$vUXmep7PEfsUaabDY0p41u0.J2APwSm3DUfnab/N4fNSoGqrWNpJW', 'debari', 'Udaipur', 'Rajasthan', 313001, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_detail`
--
ALTER TABLE `user_detail`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_detail`
--
ALTER TABLE `user_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
