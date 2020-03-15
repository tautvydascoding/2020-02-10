-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 15, 2020 at 01:19 PM
-- Server version: 5.7.24
-- PHP Version: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sapnu_gaudykles`
--

-- --------------------------------------------------------

--
-- Table structure for table `gaudykles`
--

CREATE TABLE `gaudykles` (
  `id` int(11) NOT NULL,
  `dydis` varchar(100) NOT NULL,
  `spalva` varchar(100) NOT NULL,
  `kaina` varchar(100) NOT NULL,
  `aprasymas` varchar(100) NOT NULL,
  `foto` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `gaudykles`
--

INSERT INTO `gaudykles` (`id`, `dydis`, `spalva`, `kaina`, `aprasymas`, `foto`) VALUES
(1, '50 dydis', 'balta', '40 eur', 'ranku darbo gaudykles', 'img/sapnu-gaudykles/50.jpg'),
(2, '45 dydis', 'juoda', '40 eur', 'ranku darbo gaudykles', 'img/sapnu-gaudykles/45.jpg'),
(3, '40 dydis', 'balta', '36 eur', 'ranku darbo gaudykles', 'img/sapnu-gaudykles/40.jpg'),
(4, '35 dydis', 'juoda', '32 eur', 'ranku darbo gaudykles', 'img/sapnu-gaudykles/35.jpg'),
(5, '30 dydis', 'balta', '24 eur', 'ranku darbo gaudykles', 'img/sapnu-gaudykles/30.jpg'),
(6, '25 dydis', 'juoda', '16 eur', 'ranku darbo gaudykles', 'img/sapnu-gaudykles/25.jpg'),
(7, '20 dydis', 'balta', '16 eur', 'ranku darbo gaudykles', 'img/sapnu-gaudykles/20.jpg'),
(8, '15 dydis', 'juoda', '15 eur', 'ranku darbo gaudykles', 'img/sapnu-gaudykles/15.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gaudykles`
--
ALTER TABLE `gaudykles`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gaudykles`
--
ALTER TABLE `gaudykles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
