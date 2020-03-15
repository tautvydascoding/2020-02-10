-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 13, 2020 at 01:18 PM
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
-- Database: `monstrai`
--

-- --------------------------------------------------------

--
-- Table structure for table `monstrai`
--

CREATE TABLE `monstrai` (
  `ID` int(2) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Characteristics` varchar(50) NOT NULL,
  `Location` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `monstrai`
--

INSERT INTO `monstrai` (`ID`, `Name`, `Characteristics`, `Location`) VALUES
(1, 'Minotauras', 'Kanopos, Ragai, Kirvis, Muuu', 'Inferno'),
(2, 'Belzebubas', 'Svaistosi club\'u', 'Palestina'),
(3, 'Krakenas', 'Ciuptuvai', 'Vandenynas'),
(4, 'Titanas', 'Very old', 'Debesyse'),
(5, 'Giant', 'Truputi Aukstas', 'Irgi senas'),
(6, 'Svirtudys', 'Sviruoja', 'Underworld'),
(7, 'Lichking', 'Karalius', 'Citadele'),
(8, 'Kentauras', 'Arkliukas, su ietim', 'Gnomelandija'),
(9, 'Medusa', 'Gyvate', 'Underworld'),
(10, 'Diablo', 'Labai piktas', 'Lavaland');

-- --------------------------------------------------------

--
-- Table structure for table `monstru_img`
--

CREATE TABLE `monstru_img` (
  `ID` int(2) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Nuotrauka` varchar(255) NOT NULL,
  `monstrai_id` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `monstru_img`
--

INSERT INTO `monstru_img` (`ID`, `Name`, `Nuotrauka`, `monstrai_id`) VALUES
(1, 'Minotauras', 'minotaur.jpg', 1),
(2, 'Belzebubas', 'belzebubas.jpg', 2),
(3, 'Krakenas', 'Kraken.jpg', 3),
(4, 'Titanas', 'Titan.jpg', 4),
(5, 'Giant', 'giant.jpg', 5),
(6, 'Svirdulys', 'svirdulys.jpg\r\n', 6),
(7, 'Lichking', 'lich-king.jpg', 7),
(8, 'Kentauras', 'centaur.jpg', 8),
(9, 'Medusa', 'medusa.jpg', 9),
(10, 'Diablo', 'diablo.png', 10);

-- --------------------------------------------------------

--
-- Table structure for table `skillai`
--

CREATE TABLE `skillai` (
  `ID` int(2) NOT NULL,
  `Pavadinimas` varchar(20) NOT NULL,
  `Ka daro` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `skillai`
--

INSERT INTO `skillai` (`ID`, `Pavadinimas`, `Ka daro`) VALUES
(1, 'Anatomy', 'Boosts the effectiveness of the Healing skill. Adds damage to weapon skills'),
(2, 'Healing', 'Uses bandages to heal and cure yourself and others. With enough Anatomy it also allows you to resurrect other players'),
(3, 'Mace Fighting ', 'A melee skill that uses blunt wood and metal weapons to bash your foes.'),
(4, 'Animal Lore', 'Can be used to view stats on creatures and monsters.'),
(5, 'Tracking', 'Used to track animals, players, monsters and NPCs. A useful utility skill in PvP groups to track down victims.'),
(6, 'Enrage', 'Monster ability, that grants increased attack speed, movement speed and damage'),
(7, 'Lightning Nova', 'Deals lightning damage'),
(8, 'Unrighteous fire', 'It deals fire damage over time to nearby enemies.'),
(9, 'Dhuum', 'Dhuum does cool stuff.'),
(10, 'Critical strike', 'True skill.No resurrection spell can save you now. Your account has been banned.');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `idUsers` int(11) NOT NULL,
  `userNameUsers` tinytext NOT NULL,
  `passwordUsers` varchar(255) NOT NULL,
  `emailUsers` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`idUsers`, `userNameUsers`, `passwordUsers`, `emailUsers`) VALUES
(1, 'admin', '$2y$10$.yzPn52lkpP/XtIEhrRKc.64AxjTvz.e1kFdFt6m/CUV3eQYcyx5u', 'admin@admin.com'),
(40, 'www', '$2y$10$Z5RC1xuIO.MEYqS5uHH/VO0ecBQ.5BaLWmtOrxpdZeKbBEvAs7YJG', 'www@gmail.com'),
(42, 'eee', '$2y$10$XpZjdYs/.9NwIYwsKpBtH.3PNLSbMrFtHK9Yz7emDQTijxCRXrrtq', 'eee@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `monstrai`
--
ALTER TABLE `monstrai`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `monstru_img`
--
ALTER TABLE `monstru_img`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `skillai`
--
ALTER TABLE `skillai`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`idUsers`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `monstrai`
--
ALTER TABLE `monstrai`
  MODIFY `ID` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `monstru_img`
--
ALTER TABLE `monstru_img`
  MODIFY `ID` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `skillai`
--
ALTER TABLE `skillai`
  MODIFY `ID` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `idUsers` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
