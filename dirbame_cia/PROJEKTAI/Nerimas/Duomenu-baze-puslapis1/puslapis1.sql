-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 16, 2020 at 06:58 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `puslapis1`
--

-- --------------------------------------------------------

--
-- Table structure for table `crud`
--

CREATE TABLE `crud` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `crud`
--

INSERT INTO `crud` (`id`, `name`, `location`) VALUES
(8, 'Vienassdfg', 'Du'),
(9, 'Vienas', 'Dusg'),
(14, 'vardas', 'location'),
(15, 'vardas', 'location'),
(16, 'vardas', 'location'),
(17, 'vardas', 'location'),
(19, 'Tomas', 'Tomaitis'),
(20, 'Tomasds', 'Tomaitis'),
(21, 'Tomas', 'Tomaitis'),
(22, 'Lauris', 'Laurynas'),
(23, 'Tomas', 'Tomaitis'),
(24, 'Tomasasd', 'Tomaitis'),
(26, 'Tomas', 'Tomaitisasd');

-- --------------------------------------------------------

--
-- Table structure for table `nuotraukos`
--

CREATE TABLE `nuotraukos` (
  `foto1` int(11) NOT NULL,
  `foto2` int(11) NOT NULL,
  `foto3` int(11) NOT NULL,
  `foto4` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `prekes`
--

CREATE TABLE `prekes` (
  `Pavadinimas` varchar(260) NOT NULL,
  `id` int(11) NOT NULL,
  `Kaina` float NOT NULL,
  `Nuolaida` float NOT NULL,
  `Pozicija` int(11) NOT NULL,
  `Kiekis` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `prekes`
--

INSERT INTO `prekes` (`Pavadinimas`, `id`, `Kaina`, `Nuolaida`, `Pozicija`, `Kiekis`) VALUES
('MaikeS', 1, 90, 0, 0, 49),
('MaikeM', 2, 90, 0, 0, 49),
('MaikeR', 3, 45, 10, 3, 14),
('BullsKepure', 8, 30, 27, 203, 14),
('LakersDzemperis', 11, 80, 10, 1, 6),
('KobeBryantSortai', 13, 40, 0, 23, 13),
('', 14, 0, 0, 0, 0),
('LakersDzemperisS', 15, 175, 0, 9, 56),
('LakersDzemperisXL', 16, 175, 0, 9, 56),
('ChicagoBullssapranga', 17, 340, 0, 50, 12);

-- --------------------------------------------------------

--
-- Table structure for table `registracija`
--

CREATE TABLE `registracija` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registracija`
--

INSERT INTO `registracija` (`id`, `username`, `password`) VALUES
(15, 'admin', 'adminas123456'),
(16, 'admin', 'adminas123456'),
(18, 'admin', 'asfsafasfasfsdfsdfdsf'),
(19, '', ''),
(21, 'Adminas', 'Adminas'),
(22, 'admin', ''),
(24, 'testuser', 'dsfgdfhdfhd'),
(25, 'testuser', 'test'),
(33, 'TOmasas', 'Batonas'),
(34, 'testuser', ''),
(42, '', ''),
(58, '', ''),
(60, '', ''),
(63, '', ''),
(65, '', ''),
(69, 'testusererg', ''),
(70, 'testusererg', ''),
(71, 'testusererg', ''),
(72, 'testusererg', ''),
(73, 'testusererg', ''),
(74, 'testusererg', ''),
(75, 'testusererg', ''),
(76, 'testusererg', ''),
(77, 'testuserasdasd', 'testasdasd'),
(78, 'naujasesuas', 'aasd');

-- --------------------------------------------------------

--
-- Table structure for table `straipsniai`
--

CREATE TABLE `straipsniai` (
  `id` int(11) NOT NULL,
  `Pavadinimas` varchar(260) NOT NULL,
  `Aprasymas` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `crud`
--
ALTER TABLE `crud`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prekes`
--
ALTER TABLE `prekes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registracija`
--
ALTER TABLE `registracija`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `straipsniai`
--
ALTER TABLE `straipsniai`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `crud`
--
ALTER TABLE `crud`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `prekes`
--
ALTER TABLE `prekes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `registracija`
--
ALTER TABLE `registracija`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `straipsniai`
--
ALTER TABLE `straipsniai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
