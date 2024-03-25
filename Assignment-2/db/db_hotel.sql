-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 25, 2024 at 02:58 AM
-- Server version: 8.2.0
-- PHP Version: 8.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_rooms`
--

DROP TABLE IF EXISTS `tbl_rooms`;
CREATE TABLE IF NOT EXISTS `tbl_rooms` (
  `id` int NOT NULL AUTO_INCREMENT,
  `room_title` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `room_price` int NOT NULL,
  `room_availability` tinyint(1) NOT NULL,
  `room_desc` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `room_img` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tbl_rooms`
--

INSERT INTO `tbl_rooms` (`id`, `room_title`, `room_price`, `room_availability`, `room_desc`, `room_img`) VALUES
(1, 'Single room', 100, 1, 'Featuring a comfortable single bed adorned with crisp linens, you\'ll enjoy a restful night\'s sleep. The room is thoughtfully designed with modern amenities including a flat-screen TV, high-speed Wi-Fi, and a work desk, making it ideal for both work and relaxation.', '0'),
(2, 'Junior Suites', 150, 0, 'Welcome to our luxurious Junior Suites, where comfort meets elegance. Designed with your utmost satisfaction in mind, our Junior Suites offer a spacious retreat for both leisure and business travelers alike.', '0'),
(3, 'Triple room', 200, 1, 'Welcome to our triple rooms, where comfort meets convenience for groups or families seeking a memorable stay. Our spacious triple rooms are thoughtfully designed to accommodate three guests comfortably, offering ample space and modern amenities to ensure a relaxing retreat.', '0'),
(4, 'Presidential Suites', 300, 1, 'Each Presidential Suite is meticulously designed to reflect modern elegance and timeless charm, providing guests with a sanctuary of unparalleled luxury. From the moment you step through the door, you\'ll be enveloped in a world of indulgence and exclusivity.', '0'),
(5, 'Double Room\r\n', 170, 0, 'Indulge in comfort and style in our inviting double rooms, designed to provide you with a serene sanctuary during your stay. Whether you\'re traveling for business or leisure, our thoughtfully appointed accommodations offer everything you need for a relaxing and enjoyable experience.', '0');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
