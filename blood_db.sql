-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 16, 2024 at 01:04 PM
-- Server version: 8.2.0
-- PHP Version: 8.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blood_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `blood_donors`
--

CREATE TABLE `blood_donors` (
  `id` int NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact_number` varchar(10) NOT NULL,
  `address` varchar(100) NOT NULL,
  `date_of_birth` date NOT NULL,
  `blood_group` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `equipments`
--

CREATE TABLE `equipments` (
  `id` int NOT NULL,
  `first_nameh` text,
  `last_nameh` text,
  `emailh` text,
  `contact_numberh` text NOT NULL,
  `cityh` text NOT NULL,
  `addressh` text NOT NULL,
  `equipment` text NOT NULL,
  `equipment_photo` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

-- --------------------------------------------------------

--
-- Table structure for table `feedbacks`
--

CREATE TABLE `feedbacks` (
  `id` int NOT NULL,
  `phoneh` text,
  `emailh` text,
  `genderh` text,
  `evaluateh` text,
  `helph` text,
  `viewh` text,
  `commentsh` text,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Dumping data for table `feedbacks`
--

INSERT INTO `feedbacks` (`id`, `phoneh`, `emailh`, `genderh`, `evaluateh`, `helph`, `viewh`, `commentsh`, `created_at`) VALUES
(1, 'Asha', 'asha@mail.com', 'Female', 'Good', 'Yes', 'Test', 'Test', '2024-01-16 12:36:01');

-- --------------------------------------------------------

--
-- Table structure for table `physiotherapy`
--

CREATE TABLE `physiotherapy` (
  `id` int NOT NULL,
  `title` text,
  `author` text,
  `email` text,
  `image` text,
  `video` text
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Dumping data for table `physiotherapy`
--

INSERT INTO `physiotherapy` (`id`, `title`, `author`, `email`, `image`, `video`) VALUES
(1, 'Natural treatment of the hand', 'Dr. Chad Woodard', 'upthecreak@creakyjoints.org', '9.jpg', '1.mp4'),
(2, 'Natural treatment of the Legs', 'Indea Yoga', 'indeayoga@gmail.com', '8.webp', '2.mp4'),
(3, 'Natural treatment of the Knee', 'Body Fix Exercises', 'bodyfixexercises@gmail.com', '3.jpg', '3.mp4'),
(4, 'Natural treatment of the Elbow', 'Jeffrey Peng MD', 'JeffreyPengMD@gmail.com', '6.jpg', '4.mp4'),
(5, 'Natural treatment of the neck', 'Dr.Rowe', 'info@bestspinecare.com', '0.jpg', '5.mp4'),
(6, 'Natural treatment of the Shoulder', 'Liebscher', 'simon.pieren@liebscher-bracht.com', '4.webp', '6.mp4');

-- --------------------------------------------------------

--
-- Table structure for table `user_auth`
--

CREATE TABLE `user_auth` (
  `id` int NOT NULL,
  `first_name` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `last_name` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `email` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `password` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `created_at` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_auth`
--

INSERT INTO `user_auth` (`id`, `first_name`, `last_name`, `email`, `password`, `created_at`) VALUES
(2, 'Eman', 'Raisi', 'e.yaqoob@outlook.com', '$2y$10$75bdxh5AwsgynZv0ECdwM.39bJ6VrLV.g8P7Ilt/d1G.156r7mz8K', '2024-01-16 12:57:40.431420'),
(3, 'System', 'Admin', 'admin@mail.com', '$2y$10$G9C6hVOXDAeD3z/tTiDgje7umD1WwwqQewzf/SzJ0HNDyWP5Th16u', '2024-01-16 12:04:43.481342');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blood_donors`
--
ALTER TABLE `blood_donors`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `equipments`
--
ALTER TABLE `equipments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedbacks`
--
ALTER TABLE `feedbacks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `physiotherapy`
--
ALTER TABLE `physiotherapy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_auth`
--
ALTER TABLE `user_auth`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blood_donors`
--
ALTER TABLE `blood_donors`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `equipments`
--
ALTER TABLE `equipments`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `feedbacks`
--
ALTER TABLE `feedbacks`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `physiotherapy`
--
ALTER TABLE `physiotherapy`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user_auth`
--
ALTER TABLE `user_auth`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
