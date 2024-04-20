-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2024 at 05:36 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sportmanegement`
--

-- --------------------------------------------------------

--
-- Table structure for table `coach`
--

CREATE TABLE `coach` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `game` varchar(255) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `contact` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `coach`
--

INSERT INTO `coach` (`id`, `name`, `game`, `gender`, `contact`) VALUES
(2, 'Janiv', 'Table tanis', 'Male', '9845762132'),
(3, 'Yujan', 'Table tanis', 'Male', '9845762132');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id` int(11) NOT NULL,
  `event_name` varchar(100) DEFAULT NULL,
  `from_date` date NOT NULL,
  `to_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id`, `event_name`, `from_date`, `to_date`) VALUES
(1, 'volleyball', '2024-04-18', '2024-05-03'),
(2, 'volleyball', '2024-04-11', '2024-05-15'),
(3, 'badminton', '2024-04-12', '2024-04-25'),
(9, 'football', '2024-04-25', '2024-04-26'),
(10, 'vollyball', '2024-04-25', '2024-04-26'),
(11, 'vollyball', '2024-04-25', '2024-04-26');

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

CREATE TABLE `inventory` (
  `id` int(11) NOT NULL,
  `item_id` varchar(50) NOT NULL,
  `item_name` varchar(100) NOT NULL,
  `category` varchar(50) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `inventory`
--

INSERT INTO `inventory` (`id`, `item_id`, `item_name`, `category`, `quantity`) VALUES
(1, '89', 'name', 'Sport Equipment', 56),
(2, '', 'bat', 'Sport Equipment', 6),
(3, '', 'bat', 'Training Gear', 12),
(4, '', 'bat', 'Training Gear', 12),
(5, '', 'Net', 'Training Gear', 16),
(6, '', 'bat', 'Sports Equipment', 6),
(7, '', 'bat', 'Uniforms', 22);

-- --------------------------------------------------------

--
-- Table structure for table `players`
--

CREATE TABLE `players` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `faculty` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `game` varchar(255) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `team` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `players`
--

INSERT INTO `players` (`id`, `name`, `faculty`, `phone`, `game`, `gender`, `team`) VALUES
(1, 'Amrit', '', '9860501', 'Volleyball', 'Male', 'BCA'),
(2, 'Amrit B.C.', '', '9860501', 'Volleyball', 'Male', 'BCA'),
(3, 'Amrit B.C.', '', '9860501', 'Volleyball', 'Male', 'BCA'),
(4, 'Pinde', '', '98465654', 'Futsal', 'male', 'BIM'),
(5, 'Yujan Rai', '', '97454655', 'Table Tennis', 'Male', 'BCA'),
(6, 'laxman rumba', '', '98465654', 'Table Tennis', 'Male', 'BIM'),
(7, 'laxman rumba', '', '98465654', 'Volleyball', 'Male', 'BCA'),
(8, 'Dina', '', '9845555665', 'Shot Put', 'Male', 'BIM'),
(9, 'Ram Chy', '', '9855446633', 'Futsal', 'Female', 'BBS'),
(10, 'Rabin Hod', '', '9860501145', 'Shot Put', 'Male', 'BBS'),
(11, 'Nitesh kumar', '', '9865554654', 'Shot Put', 'Male', 'BCA'),
(12, 'Rani Don', '', '98000058498', 'Shot Put', 'Female', 'BCA'),
(14, 'Haku Dada', '', '9860803467', 'Volleyball', 'Male', 'BCA'),
(15, 'Govinda b k', '', '978351425', 'Volleyball', 'Male', 'BCA'),
(16, 'Yujan', '', '92394735', 'Basketball', 'Male', 'BIM');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `userType` varchar(50) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password`, `userType`) VALUES
(7, 'Amrit', 'amirt@gmail.com', '$2y$10$4J9Hageq7UA39iD//8onWObSPSgbF4gaNkCUyl1N6GOnZx/9lRsza', 'admin'),
(8, 'rajendra', 'rajendr1@gmail.com', '$2y$10$Tb9D10GkE6YNQFHPntEAc.Jc68FYE1ne6YH31PuqJ/f1rkHhug0ce', 'user'),
(10, 'rajendra', 'rajendr2@gmail.com', '$2y$10$4l/TzrCwjg8EiciJgAKYzu5NjFw9BFcs52iKLvtX8u99osj5hxd8m', 'user'),
(11, 'bimal', 'bimal3@gmail.com', '$2y$10$YKUD9Xdx7iw4YtXaiYxQfuDX7L9zB12m/RDiXoQehx368jGQZylBy', 'user'),
(12, 'laxman', 'laxman@gmail.com', '$2y$10$RMDj.VovZm.//n1Fc0v70uBonQoSAL/Qc5waZ9VHcOj8nNq3.mQtW', 'user'),
(13, 'Ronak', 'ronak1@gmail.com', '$2y$10$vhbokQDLsRRuPh5j5BOdYeKOutTTtKkqlx0thnyJy2tZFYvSqHEl6', 'user'),
(14, 'Ronak', 'ronak2@gmail.com', '$2y$10$stbd9K21utIEJa.vizZ74uxFu5007hD/HEyfj5Zjo9VSczWt44gG6', 'user'),
(15, 'Ronak', 'ronak3@gmail.com', '$2y$10$ykiYiN4GsxXuYVoONlTEQ.ebNj/1Dq06mVOnimWXW5yujyi2.PGhC', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `coach`
--
ALTER TABLE `coach`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inventory`
--
ALTER TABLE `inventory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `players`
--
ALTER TABLE `players`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `coach`
--
ALTER TABLE `coach`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `inventory`
--
ALTER TABLE `inventory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `players`
--
ALTER TABLE `players`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
