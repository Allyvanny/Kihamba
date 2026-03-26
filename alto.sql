-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 01, 2025 at 09:56 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `alto`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `id` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `regno` varchar(50) NOT NULL,
  `phone_no` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`id`, `full_name`, `regno`, `phone_no`, `password`) VALUES
(1, 'Alto Desdery Kihamba', '23100533350059', '689115260', '5541c7b5a06c39b267a5efae6628e003'),
(13, 'Astery Desdery Kiyamba', '23100533356789', '+2550897654323', '5541c7b5a06c39b267a5efae6628e003'),
(14, 'Allen Desdery KIyamba ', '231005333500590123', '069451285151', 'f1534cd6b03bca4163d5773a988dc3bc'),
(15, 'Adelin Desdery Kiyamba', '23100533350059959', '068911526161', '0348dcd774a2892097b9d5c84ce882d3'),
(16, 'Apia Desdery Kihamba ', '231005333500591119', '068911526109', 'dde6ecd6406700aa000b213c843a3091'),
(22, 'Rose 🌹 Romward', '23100533350059599', '09847645', 'bb4694a26a39df7501f8bb8cbdd13e38');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `heading` varchar(255) NOT NULL,
  `myfile` varchar(255) NOT NULL,
  `description` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `heading`, `myfile`, `description`) VALUES
(31, 'Alto', 'alto2.png', 'my name'),
(32, 'Car', 'alto1.jpg', 'my car'),
(33, 'House', 'house1.jpg', 'my house'),
(34, 'Room', 'room4.jpg', 'my sebre');

-- --------------------------------------------------------

--
-- Table structure for table `materials`
--

CREATE TABLE `materials` (
  `id` int(11) NOT NULL,
  `tile` varchar(255) NOT NULL,
  `myfile` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `materials`
--

INSERT INTO `materials` (`id`, `tile`, `myfile`) VALUES
(1, 'sss', 'd.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `programme` varchar(250) NOT NULL,
  `phone` int(255) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `full_name`, `programme`, `phone`, `message`) VALUES
(21, 'Alto Dezdel Kihamba', 'Bachelor of Computer Science', 2147483647, 'Hi people, am so proud of being here my people. Thank you !'),
(22, 'Nicomed ', 'Bachelor of Computer Science', 2147483647, 'umeshindaje'),
(23, 'Juma Alphonce Mwambumbu', 'Bachelor of Computer Science', 689115260, 'asante kwa kila jambo latoka kwako '),
(24, 'tyfitoi', 'Bachelor of Computer Science', 0, ' jkuloi;'),
(25, 'lucy', 'Bachelor of Computer Science', 9878854, 'bvnmdgheilruq lwio'),
(26, 'lucy', 'Bachelor of Computer Science', 9878854, 'bvnmdgheilruq lwio'),
(27, 'Alto Mchokozi', 'Barchelor of Agribusiness', 6785432, 'Nimekumisi sanaaa '),
(28, 'Mariam ', 'Bachelor of Computer Science', 678543278, 'Nimekumc pia'),
(29, 'Jovin', 'Barchelor of ICT', 98765432, 'Njoo nyumbani');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `materials`
--
ALTER TABLE `materials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `materials`
--
ALTER TABLE `materials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
