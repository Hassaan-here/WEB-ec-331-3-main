-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 06, 2024 at 06:47 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pugc`
--

-- --------------------------------------------------------

--
-- Table structure for table `administration`
--

CREATE TABLE `administration` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `administration`
--

INSERT INTO `administration` (`id`, `name`, `designation`, `image`) VALUES
(1, 'Mr. Umair Ali', 'Deputy registrar', 'assets/img/team/faculty/Umair_Ali.png'),
(2, 'Ms. Saima Nadeem', 'Sr. Librarian', 'assets/img/team/faculty/Saima_Nadeem.jpg'),
(3, 'Muhammad Sajid Akhtar', 'Deputy Registrar', 'assets/img/team/faculty/Sajid_Akhtar.jpeg\r\n'),
(4, 'Mr. Imran Javed', 'Estate Officer', 'assets/img/team/faculty/Imran_Javed.png'),
(5, 'Mr. Abrar Ahmad Khan', 'Network Administrator', 'assets/img/team/faculty/Abrar_Ahmad_Khan.png\r\n'),
(6, 'Muhammad Shahbaz Cheema', 'PS to Director General', 'assets/img/team/faculty/Shahbaz_Cheema.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`id`, `name`, `designation`, `image`) VALUES
(1, 'Prof. Dr. Naveed Iqbal Chaudhry', 'Professor', 'assets/img/team/faculty/Naveed_Iqbal_Chaudhry.jpg'),
(2, 'Dr. Naveed Ahmad Jhamat', 'Incharge / Assistant Professor', 'assets/img/team/faculty/Naveed_Ahmad_Jhamat.jpg'),
(3, 'Dr. Salman Naseer', 'Assistant Professor', 'assets/img/team/faculty/Salman_Naseer.jpg'),
(4, 'Dr. Ghulam Mustafa', 'Assistant Professor', 'assets/img/team/faculty/Ghulam_Mustafa.jpg'),
(5, 'Miss Farhana Aziz Rana', 'Incharge / Assistant Professor in Department of Law', 'assets/img/team/faculty/Farhana_Aziz_Rana.jpg'),
(6, 'Mr. Muhammad Younas', 'Assistant Professor', 'assets/img/team/faculty/Muhammad_Younas.jpg'),
(7, 'Miss Aadila Hussain', 'Incharge / Lecturer', 'assets/img/team/faculty/Aadila_Hussain.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `student_inquiries`
--

CREATE TABLE `student_inquiries` (
  `id` int(11) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student_inquiries`
--

INSERT INTO `student_inquiries` (`id`, `full_name`, `email`, `message`) VALUES
(1, 'TestUser', 'test@gmail.com', 'Hello world!');


--
-- Indexes for dumped tables
--

--
-- Indexes for table `administration`
--
ALTER TABLE `administration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_inquiries`
--
ALTER TABLE `student_inquiries`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `administration`
--
ALTER TABLE `administration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `student_inquiries`
--
ALTER TABLE `student_inquiries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
