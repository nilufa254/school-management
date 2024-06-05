-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 27, 2023 at 08:17 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `edu-academy`
--

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `ID` tinyint(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `short` varchar(30) NOT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp(),
  `updated` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`ID`, `name`, `short`, `created`, `updated`) VALUES
(1, 'Class-6', 'cls-6', '2023-12-16 20:54:33', '2023-12-16 20:54:33'),
(4, 'Class-7', 'cls-7', '2023-12-17 18:59:03', '2023-12-17 18:59:03'),
(5, 'Class-8', 'cls-8', '2023-12-24 19:45:06', '2023-12-24 19:45:06');

-- --------------------------------------------------------

--
-- Table structure for table `section`
--

CREATE TABLE `section` (
  `ID` tinyint(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `short` varchar(30) NOT NULL,
  `class_id` tinyint(11) NOT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp(),
  `updated` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `section`
--

INSERT INTO `section` (`ID`, `name`, `short`, `class_id`, `created`, `updated`) VALUES
(1, 'Section-A', 'Sec-a', 1, '2023-12-16 15:56:04', '2023-12-16 15:56:04'),
(3, 'Section-B', 'sec-b', 1, '2023-12-16 13:40:03', '2023-12-16 13:40:03'),
(7, 'Section-A', 'sec-a', 4, '2023-12-18 07:15:02', '2023-12-18 07:15:02'),
(8, 'Section-B', 'sec-b', 4, '2023-12-18 09:49:24', '2023-12-18 09:49:24'),
(11, 'Section-A', 'sec-a', 5, '2023-12-24 19:47:50', '2023-12-24 19:47:50');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `ID` tinyint(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `phone_num` text NOT NULL,
  `section_id` tinyint(11) NOT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp(),
  `updated` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`ID`, `image`, `name`, `address`, `phone_num`, `section_id`, `created`, `updated`) VALUES
(1, '  http://localhost/edu-academy/uploads/pic-1.avif', 'Bernice Bell', 'Dhainagar, Shibganj, Chapai-Nawabganj', '   01765348921', 1, '2023-12-18 16:16:26', '2023-12-18 16:16:26'),
(2, '  http://localhost/edu-academy/uploads/pic-14.jpg', 'Melinda Yesmin', 'Godagari,Rajshahi', '    01732456798', 1, '2023-12-18 18:45:53', '2023-12-18 18:45:53'),
(3, '    http://localhost/edu-academy/uploads/pic-13.jpg', 'Nancy Correia', 'Kushtia, Khulna', '      01765432459', 1, '2023-12-24 19:48:41', '2023-12-24 19:48:41'),
(4, 'http://localhost/edu-academy/uploads/pic-36.jpg', 'Sheila Knight', 'Damkura,Rajshahi', '   01776539875', 1, '2023-12-25 21:20:23', '2023-12-25 21:20:23'),
(5, '  http://localhost/edu-academy/uploads/pic-7.jpg', 'Rosemary E. Kelly', 'Kolabagan,Rajshahi', '  01376587698', 1, '2023-12-25 21:21:45', '2023-12-25 21:21:45'),
(6, '  http://localhost/edu-academy/uploads/pic-9.jpg', 'Thelma Falkner ', 'Newmarket,Rajshahi', '  01765439876', 1, '2023-12-25 21:23:41', '2023-12-25 21:23:41'),
(7, '  http://localhost/edu-academy/uploads/pic-15.avif', 'Norman Raymond', 'Bagmara,Rajshahi', '   01376581234', 3, '2023-12-25 21:25:23', '2023-12-25 21:25:23'),
(8, ' http://localhost/edu-academy/uploads/pic-16.avif', 'Merina Ismart', 'Terokhadia,Rajshahi', ' 01865432987', 3, '2023-12-25 21:27:08', '2023-12-25 21:27:08'),
(9, '  http://localhost/edu-academy/uploads/pic-17.avif', 'Sadia Islam', 'Chapai-Nawabganj', '  01976543298', 3, '2023-12-25 21:29:06', '2023-12-25 21:29:06'),
(10, '  http://localhost/edu-academy/uploads/pic-18.jpg', 'Hazel Wass', 'Nowdapara,Rajshahi', '    01765432459', 3, '2023-12-25 21:40:40', '2023-12-25 21:40:40'),
(11, '  http://localhost/edu-academy/uploads/pic-21.avif', 'David Moore', 'Singra,Natore', '   01376581234', 3, '2023-12-25 21:42:20', '2023-12-25 21:42:20'),
(12, ' http://localhost/edu-academy/uploads/pic-23.avif', 'Pedro Leroy', 'Durgapur,Rajshahi', '   01765439878', 3, '2023-12-25 21:47:58', '2023-12-25 21:47:58'),
(14, ' http://localhost/edu-academy/uploads/pic-25.jpg', 'Mary  Carroll', 'Bogura', '  01776539875', 7, '2023-12-25 21:52:47', '2023-12-25 21:52:47'),
(15, 'http://localhost/edu-academy/uploads/pic-26.avif', 'Jean  Harper', 'Newmarket,Rajshahi', ' 01765439880', 7, '2023-12-26 15:38:47', '2023-12-26 15:38:47'),
(16, 'http://localhost/edu-academy/uploads/pic-20.jpg', 'Mallory Benoit', 'Boaliya,Rajshahi', ' 01776539854', 7, '2023-12-26 15:40:03', '2023-12-26 15:40:03'),
(17, 'http://localhost/edu-academy/uploads/pic-27.avif', 'Connie Masters', 'Gonokpara,Rajshahi', ' 017765398564', 7, '2023-12-26 15:41:08', '2023-12-26 15:41:08'),
(18, 'http://localhost/edu-academy/uploads/pic-28.jpg', 'Maria  Wahl', 'Signra,Natore', ' 01376587657', 7, '2023-12-26 15:42:07', '2023-12-26 15:42:07'),
(19, 'http://localhost/edu-academy/uploads/pic-29.avif', 'Stephanie Saunders', 'Signra,Natore', '   01765432478', 7, '2023-12-26 15:43:08', '2023-12-26 15:43:08'),
(20, 'http://localhost/edu-academy/uploads/pic-30.jpg', 'Henry Robinson', 'Newmarket,Rajshahi', '  013765812765', 8, '2023-12-26 15:44:14', '2023-12-26 15:44:14'),
(21, 'http://localhost/edu-academy/uploads/pic-31.avif', 'Donnie  Stricker', 'Newmarket,Rajshahi', ' 013765876876', 8, '2023-12-26 15:45:42', '2023-12-26 15:45:42'),
(22, 'http://localhost/edu-academy/uploads/pic-33.avif', 'Willie  Kemp', 'Signra,Natore', '  01376581234', 8, '2023-12-26 15:46:42', '2023-12-26 15:46:42'),
(23, 'http://localhost/edu-academy/uploads/pic-34.jpg', 'Wendy  Soto', 'Newmarket,Rajshahi', ' 01765439876', 8, '2023-12-26 15:47:52', '2023-12-26 15:47:52'),
(24, 'http://localhost/edu-academy/uploads/pic-35.avif', 'Joyce Guerin', 'Kolabagan,Rajshahi', ' 01376587698', 8, '2023-12-26 15:49:39', '2023-12-26 15:49:39'),
(25, 'http://localhost/edu-academy/uploads/pic-37.avif', 'Shawna D. Johnson', 'Signra,Natore', '   01765432459', 8, '2023-12-26 15:50:25', '2023-12-26 15:50:25');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` tinyint(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `name`, `email`, `password`) VALUES
(1, 'Nonima Sultana', 'nonima@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(3, 'Nilufa Yesmin', 'nilufa70@gmail.com', 'e2fc714c4727ee9395f324cd2e7f331f');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `section`
--
ALTER TABLE `section`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `class`
--
ALTER TABLE `class`
  MODIFY `ID` tinyint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `section`
--
ALTER TABLE `section`
  MODIFY `ID` tinyint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `ID` tinyint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` tinyint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
