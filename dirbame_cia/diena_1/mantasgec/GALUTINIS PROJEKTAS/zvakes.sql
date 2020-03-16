-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: Mar 16, 2020 at 04:10 AM
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
-- Database: `zvakes`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `uname` varchar(11) NOT NULL,
  `upass` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `uname`, `upass`) VALUES
(1, 'mantasgec', 'mantasgec');

-- --------------------------------------------------------

--
-- Table structure for table `comment_table`
--

CREATE TABLE `comment_table` (
  `id` int(15) NOT NULL,
  `name` varchar(255) NOT NULL,
  `comment` text NOT NULL,
  `cur_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `comment_table`
--

INSERT INTO `comment_table` (`id`, `name`, `comment`, `cur_date`) VALUES
(55, 'mantas', 'geros zvakes', '2020-03-13');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `image` varchar(30) NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `image`, `text`) VALUES
(28, '1.jpg', '1.jpg'),
(31, '2.jpg', '2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `prekes1`
--

CREATE TABLE `prekes1` (
  `id` int(10) NOT NULL,
  `preke` varchar(30) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `aprasymas` varchar(255) NOT NULL,
  `kaina` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `prekes1`
--

INSERT INTO `prekes1` (`id`, `preke`, `foto`, `aprasymas`, `kaina`) VALUES
(1, 'karameline', 'upload_images/images/1.jpg', 'Tai unikalios, rankų darbo žvakės gaminamos iš natūralaus sojų pupelių vaško. Žvakių gamybai naudojamos medžiagos vien tik iš ekologiškų produktų, kurie savo sudėtyje neturi toksinų bei genetiškai modifikuotų medžiagų.  ', 13),
(2, 'persikine', 'upload_images/images/10.jpg', 'Tai unikalios, rankų darbo žvakės gaminamos iš natūralaus sojų pupelių vaško. Žvakių gamybai naudojamos medžiagos vien tik iš ekologiškų produktų, kurie savo sudėtyje neturi toksinų bei genetiškai modifikuotų medžiagų.  ', 15),
(3, 'naturali', 'upload_images/images/4.jpg', 'Tai unikalios, rankų darbo žvakės gaminamos iš natūralaus sojų pupelių vaško. Žvakių gamybai naudojamos medžiagos vien tik iš ekologiškų produktų, kurie savo sudėtyje neturi toksinų bei genetiškai modifikuotų medžiagų.  ', 13),
(4, 'kvapnioji', 'upload_images/images/9.jpg', 'Tai unikalios, rankų darbo žvakės gaminamos iš natūralaus sojų pupelių vaško. Žvakių gamybai naudojamos medžiagos vien tik iš ekologiškų produktų, kurie savo sudėtyje neturi toksinų bei genetiškai modifikuotų medžiagų.  ', 13);

-- --------------------------------------------------------

--
-- Table structure for table `userregister`
--

CREATE TABLE `userregister` (
  `name` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `user_level` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `userregister`
--

INSERT INTO `userregister` (`name`, `password`, `user_level`) VALUES
('admin', 'admin', 1),
('andrejus', 'andrius', NULL),
('mantas', 'gecas', NULL),
('varnas', 'juodas', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comment_table`
--
ALTER TABLE `comment_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prekes1`
--
ALTER TABLE `prekes1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userregister`
--
ALTER TABLE `userregister`
  ADD PRIMARY KEY (`name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comment_table`
--
ALTER TABLE `comment_table`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `prekes1`
--
ALTER TABLE `prekes1`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
