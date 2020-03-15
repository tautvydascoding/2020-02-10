-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 15, 2020 at 06:51 PM
-- Server version: 5.7.26
-- PHP Version: 7.2.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `parduotuve`
--

-- --------------------------------------------------------

--
-- Table structure for table `pardavejai`
--

CREATE TABLE `pardavejai` (
  `id` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `lname` varchar(60) NOT NULL,
  `location` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pardavejai`
--

INSERT INTO `pardavejai` (`id`, `name`, `lname`, `location`) VALUES
(3, 'Arunas', 'Grazuoliunas', 'Televizoriai'),
(6, 'Jurgis', 'Jurgelis', 'Buitinė technika'),
(11, 'Petras', 'Petraitis', 'Garso aparatūra'),
(13, 'Jurga ', 'Butkute', 'Grožio prekės'),
(28, 'Valdas', 'Medelis', 'TV');

-- --------------------------------------------------------

--
-- Table structure for table `prekes2`
--

CREATE TABLE `prekes2` (
  `id` int(11) NOT NULL,
  `profile_image` text NOT NULL,
  `bio` text NOT NULL,
  `bio2` varchar(100) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `prekes2`
--

INSERT INTO `prekes2` (`id`, `profile_image`, `bio`, `bio2`, `price`) VALUES
(7, '1584108368-sony2.jpg', 'SONY ZH8 | „Full Array“ LED | 8K | ', 'Didelis dinaminis diapazonas (HDR) | Išmanusis televizorius („Android TV“)', 1000),
(8, '1584108440-sony.jpg', 'SONY ZG9 | MASTER Series |„Full Array“ LED | 8K | ', '| Didelis dinaminis diapazonas (HDR) | Išmanusis televizorius („Android TV“)', 1500),
(12, '1584109525-skalbimo_masina.jpg', 'Skalbyklė BOSCH WAB24166SN ', 'Energijos sąnaudų efektyvumo klasė: A+++', 400),
(14, '1584109694-skalbimo masina_2.jpg', 'Skalbyklė Samsung WW70J5446FX/LE', 'Trumpas aprašymas', 300),
(28, '1584297187-skalbimo_masina.jpg', 'Nauja preke', 'Aprasymas', 200),
(29, '1584297893-skalbimo_masina.jpg', 'Skalbykle2', 'Testas', 300);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `user_type` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `user_type`, `password`) VALUES
(1, 'admin', 'admin@admin.lt', 'admin', '21232f297a57a5a743894a0e4a801fc3'),
(2, 'dalia', 'd@d.lt', 'user', '5e6e3d387a8e029ba1a6176684d524bd'),
(4, 'lina', 'l@l.lt', 'user', 'f6f4deb7dad1c2e5e0b4d6569dc3c1c5'),
(5, 'daiva', 'daiva@d.lt', 'user', '024d1d1170ce2d83bd788c9de17555de'),
(6, 'jonas', 'a@jonas.lt', 'user', '9c5ddd54107734f7d18335a5245c286b'),
(8, 'rokas', 'a@r.lt', 'user', 'b7433696216f6f2e16999f908ff9234e'),
(9, 'algis', 'algis@a.lt', 'user', 'ab9e2ec2e009b29acfa386e1256800ec'),
(29, 'inga', 'i@a.lt', 'user', '7ff8d6b8a2885c82c68a7ffabdd05361'),
(30, 'vida', 'vida@vida.lt', 'user', 'd1fded22db9fc8872e86fff12d511207'),
(31, 'ginta', 'ginta@ginta.lt', 'user', '76630fb9baa97c69bebc0f6aa7f2728b');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pardavejai`
--
ALTER TABLE `pardavejai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prekes2`
--
ALTER TABLE `prekes2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pardavejai`
--
ALTER TABLE `pardavejai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `prekes2`
--
ALTER TABLE `prekes2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
