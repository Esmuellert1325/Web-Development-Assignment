-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Jan 10, 2022 at 02:21 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ragc`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `category` varchar(50) DEFAULT NULL,
  `title` varchar(100) DEFAULT NULL,
  `intro` varchar(120) DEFAULT NULL,
  `imgPath` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `category`, `title`, `intro`, `imgPath`) VALUES
(1, 'Games', 'How Super Mario became so popular', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iusto aperiam numquam animi autem repellendus laboriosam.', 'media/super-mario.png'),
(2, 'Games', 'Why and how we developed Axe Figth', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iusto aperiam numquam animi autem repellendus laboriosam.', 'media/axe.png'),
(3, 'Games', 'Work in progress Games', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. A, nisi pariatur nobis corporis nesciunt voluptatum!', 'media/loading.png'),
(4, 'Games', 'The feedback on Ambulance Action', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. A, nisi pariatur nobis corporis nesciunt voluptatum!', 'media/ambulance.png');

-- --------------------------------------------------------

--
-- Table structure for table `donation`
--

CREATE TABLE `donation` (
  `name` varchar(80) NOT NULL,
  `includes` varchar(150) DEFAULT NULL,
  `price` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donation`
--

INSERT INTO `donation` (`name`, `includes`, `price`) VALUES
('Elite Package', 'Receive access to ALL Games + 3 Exclusive Game Codes', 14.99),
('Premium Package', 'Receive access to Bronze and Silver Tier Games + 2 Exclusive Game Codes', 8.99),
('Standard Package', 'Receive access to Bronze Tier Games + 1 Exclusive Game Codes', 3.99);

-- --------------------------------------------------------

--
-- Table structure for table `games`
--

CREATE TABLE `games` (
  `id` int(11) NOT NULL,
  `gameName` varchar(80) DEFAULT NULL,
  `imgPath` varchar(100) DEFAULT NULL,
  `link` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `games`
--

INSERT INTO `games` (`id`, `gameName`, `imgPath`, `link`) VALUES
(1, 'Mario Reborn', 'media/super-mario.png', 'location.href = \'index.php\''),
(2, 'Axe Fight', 'media/axe.png', 'location.href = \'index.php\''),
(3, 'Car Crashing Course', 'media/vintage-car.png', 'location.href = \'index.php\''),
(4, 'Ping Pong Party', 'media/ping-pong.png', 'location.href = \'games/ping-pong/ping-pong.html\'');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donation`
--
ALTER TABLE `donation`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `games`
--
ALTER TABLE `games`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `games`
--
ALTER TABLE `games`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
