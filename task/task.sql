-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 29, 2021 at 01:26 PM
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
-- Table structure for table `addresses`
--

CREATE TABLE `addresses` (
  `vstreet` varchar(75) NOT NULL,
  `vcity` varchar(75) NOT NULL,
  `vstate` varchar(75) NOT NULL,
  `vzip` int(10) NOT NULL,
  `uid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `addresses`
--

INSERT INTO `addresses` (`vstreet`, `vcity`, `vstate`, `vzip`, `uid`) VALUES
('street1', 'Udaipur', 'Rajasthan', 313024, 5),
('house180', 'udhampur', 'jammu', 182101, 5),
('house180', 'udhampur', 'jammu', 182101, 4),
('house 180 ward 9', 'Udhampur', 'Alaska', 313025, 3),
('street1', 'Udaipur', 'Rajasthan', 313024, 3),
('debari', 'Udaipur', 'Rajasthan', 313001, 3),
('house180', 'udhampur', 'jammu', 182101, 4),
('Cp', 'Delhi', 'Delhi', 123211, 4),
('Cp', 'Delhi', 'Delhi', 123211, 4),
('jaipur', 'jaipur', 'Rajasthan', 303030, 4),
('jaipur', 'jaipur', 'Rajasthan', 303030, 4),
('jaipur', 'jaipur', 'Rajasthan', 303030, 4);

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
  `status` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_detail`
--

INSERT INTO `user_detail` (`id`, `username`, `dob`, `photo`, `email`, `gender`, `password`, `status`) VALUES
(3, 'test1', '', 'http://[::1]/task/uploads/IMG_20190828_1425089.jpg', 'test@gmail.com', 'female', '$2y$10$XF.jNppAvX9oQQj7n3KRUeYlYZS23cX8MRKZmY..N0O0kMjsVkG4m', 0),
(4, 'Pratyaksh', NULL, 'http://[::1]/task/uploads/IMG_20200202_130723_52432.jpg', 'pratyaksh@gmail.com', 'male', '$2y$10$vUXmep7PEfsUaabDY0p41u0.J2APwSm3DUfnab/N4fNSoGqrWNpJW', 1),
(5, 'samaksh', NULL, 'http://[::1]/task/uploads/IMG_20200202_130723_52424.jpg', 'samaksh@gmail.com', 'male', '$2y$10$Cq0uUQ5kLb7TDUPPFt.eL.gB6wfV4X6ZHRmf9RpMlwvDTjGmVsK8.', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addresses`
--
ALTER TABLE `addresses`
  ADD KEY `user_id` (`uid`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `addresses`
--
ALTER TABLE `addresses`
  ADD CONSTRAINT `addresses_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `user_detail` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
