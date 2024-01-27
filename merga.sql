-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 25, 2024 at 04:44 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `merga`
--

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(89) NOT NULL,
  `Name` varchar(55) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `subject` varchar(34) DEFAULT NULL,
  `message` varchar(255) DEFAULT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `Name`, `email`, `subject`, `message`, `date_created`) VALUES
(1, 'chara alamu', 'chexdd@gmail.com', 'This is good job', 'bro keep it up. we need bid thing from you. ', '2024-01-12 09:07:08'),
(2, 'Namtinael Getachew ', 'Nati@gmail.com', 'jabaadhu', 'kjzscbozakc', '2024-01-12 09:07:28');
