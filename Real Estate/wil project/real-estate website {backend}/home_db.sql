-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 23, 2024 at 09:12 PM
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
-- Database: `home_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `password`) VALUES
('BcjKNX58e4x7blqlvxG7', 'admin', '6216f8a75fd5bb3d5f22b6f9958cdede3fc086c2');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` varchar(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `number` varchar(10) NOT NULL,
  `message` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `name`, `email`, `number`, `message`) VALUES
('QFQDySWm6ZzJRX6EIx2N', 'User A', 'user01@gmail.com', '0987654321', 'Hello. Testing'),
('OuVkwjqTLUx8R3PRPPKG', 'User A', 'user01@gmail.com', '0987654321', 'Again');

-- --------------------------------------------------------

--
-- Table structure for table `property`
--

CREATE TABLE `property` (
  `id` varchar(20) NOT NULL,
  `user_id` varchar(20) NOT NULL,
  `property_name` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `price` varchar(10) NOT NULL,
  `type` varchar(10) NOT NULL,
  `offer` varchar(10) NOT NULL,
  `status` varchar(50) NOT NULL,
  `furnished` varchar(50) NOT NULL,
  `bhk` varchar(10) NOT NULL,
  `deposit` varchar(10) NOT NULL,
  `bedroom` varchar(10) NOT NULL,
  `bathroom` varchar(10) NOT NULL,
  `balcony` varchar(10) NOT NULL,
  `carpet` varchar(10) NOT NULL,
  `age` varchar(2) NOT NULL,
  `total_floors` varchar(2) NOT NULL,
  `room_floor` varchar(2) NOT NULL,
  `loan` varchar(50) NOT NULL,
  `lift` varchar(3) NOT NULL,
  `security_guard` varchar(3) NOT NULL,
  `play_ground` varchar(3) NOT NULL,
  `garden` varchar(3) NOT NULL,
  `water_supply` varchar(3) NOT NULL,
  `power_backup` varchar(3) NOT NULL,
  `parking_area` varchar(3) NOT NULL,
  `gym` varchar(3) NOT NULL,
  `shopping_mall` varchar(3) NOT NULL,
  `hospital` varchar(3) NOT NULL,
  `school` varchar(3) NOT NULL,
  `market_area` varchar(3) NOT NULL,
  `image_01` varchar(50) NOT NULL,
  `image_02` varchar(50) NOT NULL,
  `image_03` varchar(50) NOT NULL,
  `image_04` varchar(50) NOT NULL,
  `image_05` varchar(50) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `latitude` varchar(20) NOT NULL,
  `longitude` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `property`
--

INSERT INTO `property` (`id`, `user_id`, `property_name`, `address`, `price`, `type`, `offer`, `status`, `furnished`, `bhk`, `deposit`, `bedroom`, `bathroom`, `balcony`, `carpet`, `age`, `total_floors`, `room_floor`, `loan`, `lift`, `security_guard`, `play_ground`, `garden`, `water_supply`, `power_backup`, `parking_area`, `gym`, `shopping_mall`, `hospital`, `school`, `market_area`, `image_01`, `image_02`, `image_03`, `image_04`, `image_05`, `description`, `date`, `latitude`, `longitude`) VALUES
('6PuaFeLUvRe1SWPRlb5m', 'F97F3NuFg7Y8ocCsedA7', 'Flat in Dubai', 'Fountain Views, Downtown Dubai, Dubai, UAE', '500000', 'flat', 'sale', 'ready to move', 'semi-furnished', '2', '45000', '2', '2', '1', '870', '3', '10', '4', 'available', 'yes', 'yes', 'no', 'no', 'yes', 'yes', 'yes', 'no', 'yes', 'no', 'no', 'no', 'fPOKjHFPeofp0vYJv3QB.jpg', 'L7Rjm390x8kBF0Ntsmge.webp', 'jxvUDmAieEXLrdURDipS.jpg', 'KOzTDtsEnYK5zVizkQAP.jpg', '', 'Vacant', '2024-10-21', '', ''),
('p5aJTZr8xcobbn8MiYCl', 'F97F3NuFg7Y8ocCsedA7', 'House in George', '1234 Oakwood Drive, George, Western Cape, South Africa, 6529', '12000', 'house', 'rent', 'ready to move', 'semi-furnished', '2', '40000', '2', '2', '0', '950', '4', '2', '2', 'not available', 'no', 'no', 'no', 'no', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'no', 'yes', 'lv92jhgFHOhLgSGAUKPU.webp', 'GOLMfSCSVftI4x8PbTo5.webp', 'Zr6E6bIRi5gsFwtRkErs.jpg', 'vtvW5vcSVUhrfT9eTZIp.jpg', '', 'For rent', '2024-10-21', '', ''),
('Pyb2FQGbOQATDGSK2wLL', 'wBSgfJhgK3iwk26IWQ4O', 'House in Washington', '1600 Pennsylvania Avenue NW, Washington, DC 20500, USA', '15000', 'house', 'rent', 'ready to move', 'furnished', '2', '30000', '2', '2', '1', '800', '5', '2', '5', 'not available', 'no', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'no', 'yes', 'VGq5svqvIPOJdyRhVFNI.webp', 'g1V4EhRkKAarnGlKuwPq.jpg', 'HkBP9pZCWJUiit7HA6Rw.webp', 'dbtI4JaFTEn6Q78uRDRQ.jpg', 'B7BmRjeblZsZBUg8cKtg.jpg', 'Renting out for the next 3 years', '2024-10-23', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `requests`
--

CREATE TABLE `requests` (
  `id` varchar(20) NOT NULL,
  `property_id` varchar(20) NOT NULL,
  `sender` varchar(20) NOT NULL,
  `receiver` varchar(20) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `requests`
--

INSERT INTO `requests` (`id`, `property_id`, `sender`, `receiver`, `date`) VALUES
('CAcafni2bdfZ6Nro61Sh', 'p5aJTZr8xcobbn8MiYCl', 'wBSgfJhgK3iwk26IWQ4O', 'F97F3NuFg7Y8ocCsedA7', '2024-10-23');

-- --------------------------------------------------------

--
-- Table structure for table `saved`
--

CREATE TABLE `saved` (
  `id` varchar(20) NOT NULL,
  `property_id` varchar(20) NOT NULL,
  `user_id` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` varchar(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `number` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `number`, `email`, `password`) VALUES
('F97F3NuFg7Y8ocCsedA7', 'User A', '0987654321', 'user01@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef'),
('wBSgfJhgK3iwk26IWQ4O', 'User B', '0123456789', 'user02@gmail.com', '5f6955d227a320c7f1f6c7da2a6d96a851a8118f');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
