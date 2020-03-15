-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 15, 2020 at 01:21 PM
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
-- Table structure for table `pom`
--

CREATE TABLE `pom` (
  `id` int(11) NOT NULL,
  `dydis` varchar(100) NOT NULL,
  `kaina` varchar(100) NOT NULL,
  `aprasymas` varchar(100) NOT NULL,
  `foto` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pom`
--

INSERT INTO `pom` (`id`, `dydis`, `kaina`, `aprasymas`, `foto`) VALUES
(1, '15 dydis', '24 eur', 'ranku darbo pom pom gaminiai', 'img/pom-pom/1.jpg'),
(2, '20 dydis', '24 eur', 'ranku darbo pom pom gaminiai', 'img/pom-pom/2.jpg'),
(3, '25 dydis', '26 eur', 'ranku darbo pom pom gaminiai', 'img/pom-pom/3.jpg'),
(4, '30 dydis', '28 eur', 'ranku darbo pom pom gaminiai', 'img/pom-pom/4.jpg'),
(5, '35 dydis', '30 eur', 'ranku darbo pom pom gaminiai', 'img/pom-pom/5.jpg'),
(6, '40 dydis', '32 eur', 'ranku darbo pom pom gaminiai', 'img/pom-pom/6.jpg'),
(7, '45 dydis', '40 eur', 'ranku darbo pom pom gaminiai', 'img/pom-pom/7.jpg'),
(8, '50 dydis', '40 eur', 'ranku darbo pom pom gaminiai', 'img/pom-pom/8.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pom`
--
ALTER TABLE `pom`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pom`
--
ALTER TABLE `pom`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
