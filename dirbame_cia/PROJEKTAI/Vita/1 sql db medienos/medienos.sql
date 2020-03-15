-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 2020 m. Kov 15 d. 19:21
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
-- Database: `medienos`
--

-- --------------------------------------------------------

--
-- Sukurta duomenų struktūra lentelei `apiemus`
--

DROP TABLE IF EXISTS `apiemus`;
CREATE TABLE IF NOT EXISTS `apiemus` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mintis` varchar(400) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Sukurta duomenų kopija lentelei `apiemus`
--

INSERT INTO `apiemus` (`id`, `mintis`) VALUES
(1, 'Mes esame imone dirbanti Lietuvos rinkoje jau 20 metu.'),
(2, 'Musu meistru komanda turi ilgamete darbo patirti.');

-- --------------------------------------------------------

--
-- Sukurta duomenų struktūra lentelei `comments`
--

DROP TABLE IF EXISTS `comments`;
CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `author` text NOT NULL,
  `message` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

--
-- Sukurta duomenų kopija lentelei `comments`
--

INSERT INTO `comments` (`id`, `author`, `message`) VALUES
(1, 'Jonas', 'Dekui uz greita pristatyma'),
(2, 'Tadas', 'Rekomenduoju'),
(3, 'Saulius', 'Dekui uz greita pristatyma'),
(4, 'Rimas', 'Rekomenduoju si gamini'),
(5, 'Zita', 'geras gaminys uz prieimnama kaina'),
(6, 'martynas', 'gaminys uz prieinama kaina'),
(12, 'bronius', 'gera kaina.'),
(11, 'zenius', 'geras gaminys'),
(13, 'linas', 'kas nutiko?'),
(14, 'rokas', 'geri mediniai baldai');

-- --------------------------------------------------------

--
-- Sukurta duomenų struktūra lentelei `gaminiai`
--

DROP TABLE IF EXISTS `gaminiai`;
CREATE TABLE IF NOT EXISTS `gaminiai` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `preke` varchar(40) NOT NULL,
  `aprasas` varchar(100) NOT NULL,
  `dydis` varchar(30) NOT NULL,
  `kaina` int(10) NOT NULL,
  `meistro` varchar(20) NOT NULL,
  `foto` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=50 DEFAULT CHARSET=utf8;

--
-- Sukurta duomenų kopija lentelei `gaminiai`
--

INSERT INTO `gaminiai` (`id`, `preke`, `aprasas`, `dydis`, `kaina`, `meistro`, `foto`) VALUES
(1, 'kede-11', 'patogi ir tvirta', '75 cm', 25, 'LM', 'pav1.jpg'),
(2, 'fotelis-17', 'fotelis su patogiu atlosu', '65cm', 20, 'JJ', 'pav2.jpg'),
(3, 'stalas-23', 'staliukas su apvaliais kampais', '100cm', 125, 'LM', 'pav3.jpg'),
(4, 'komoda-12', 'didele su 3 stalciais', '120cm', 120, 'LL', 'pav4.jpg'),
(32, 'kreslas-17', 'supamas su porankiiais', '65cm', 20, 'JJ', 'pav5.jpg'),
(31, 'komoda-12', 'didelis baldas su stalciaiis', '120cm', 120, 'LL', 'pav6.jpg'),
(33, 'fotelis-12', 'fotelis lauko ', '120cm', 120, 'LL', 'pav7.jpg'),
(37, 'fotelis-27', 'supamas', '85 cm', 159, 'SD', 'pav11.jpg');

-- --------------------------------------------------------

--
-- Sukurta duomenų struktūra lentelei `kontaktai`
--

DROP TABLE IF EXISTS `kontaktai`;
CREATE TABLE IF NOT EXISTS `kontaktai` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `adresas` varchar(80) CHARACTER SET latin1 NOT NULL,
  `miestas` varchar(60) CHARACTER SET latin1 NOT NULL,
  `kodas` varchar(10) CHARACTER SET latin1 NOT NULL,
  `telef` varchar(20) CHARACTER SET latin1 NOT NULL,
  `elpastas` varchar(40) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Sukurta duomenų kopija lentelei `kontaktai`
--

INSERT INTO `kontaktai` (`id`, `adresas`, `miestas`, `kodas`, `telef`, `elpastas`) VALUES
(1, 'Saules g. 14', 'Vilnius', '32456', '+370-656-12345', 'saules@mail.lt'),
(2, 'Laisves pr g. 8', 'Kaunas', '53765', '+370-656-43572', 'kauno@mail.lt'),
(3, 'Ausros g. 22', 'Klaipeda', '45324', '+370-656-34563', 'ausros@mail.lt'),
(4, 'Ryto g. 8', 'Siauliai', '23765', '+370-656-43572', 'ryto@mail.lt'),
(5, 'Vytauto g. 22', 'Panevezys', '45324', '+370-636-34563', 'panev@mail.lt');

-- --------------------------------------------------------

--
-- Sukurta duomenų struktūra lentelei `meistrai`
--

DROP TABLE IF EXISTS `meistrai`;
CREATE TABLE IF NOT EXISTS `meistrai` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `vardas` varchar(40) CHARACTER SET latin1 NOT NULL,
  `pavarde` varchar(80) CHARACTER SET latin1 NOT NULL,
  `patirtis` varchar(300) CHARACTER SET latin1 NOT NULL,
  `gaminiai` varchar(50) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Sukurta duomenų kopija lentelei `meistrai`
--

INSERT INTO `meistrai` (`id`, `vardas`, `pavarde`, `patirtis`, `gaminiai`) VALUES
(1, 'Jonas', 'Jonaitis', 'Darbas mediniu baldu gamybos srityje', 'JJ'),
(2, 'Linas', 'Linaitis', 'Stalius su ilgamete patirtimi', 'JJ');

-- --------------------------------------------------------

--
-- Sukurta duomenų struktūra lentelei `nuotraukos`
--

DROP TABLE IF EXISTS `nuotraukos`;
CREATE TABLE IF NOT EXISTS `nuotraukos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `prekes_id` int(11) NOT NULL,
  `nuotrauka` varchar(250) NOT NULL,
  `pavad` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- Sukurta duomenų kopija lentelei `nuotraukos`
--

INSERT INTO `nuotraukos` (`id`, `prekes_id`, `nuotrauka`, `pavad`) VALUES
(1, 2, 'fotelis', 'pav2.jpg'),
(2, 1, 'kede', 'pav3.jpg'),
(3, 2, 'fotelis', 'pav1.jpg'),
(4, 3, 'stalas', 'pav5.jpg'),
(5, 4, 'komoda', 'pav7.jpg'),
(6, 4, 'komoda', 'pav6.jpg'),
(7, 2, 'fotelis', 'pav5.jpg'),
(8, 3, 'stalas', 'pav4.jpg'),
(9, 2, 'fotelis', 'pav7.jpg'),
(10, 1, 'kede', 'pav2.jpg'),
(11, 1, 'kede', 'pav3.jpg'),
(12, 1, 'kede', 'pav4.jpg');

-- --------------------------------------------------------

--
-- Sukurta duomenų struktūra lentelei `vartotojai`
--

DROP TABLE IF EXISTS `vartotojai`;
CREATE TABLE IF NOT EXISTS `vartotojai` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `vardas` varchar(40) NOT NULL,
  `pavarde` varchar(80) NOT NULL,
  `elpastas` varchar(60) NOT NULL,
  `slaptaz` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=28 DEFAULT CHARSET=utf8;

--
-- Sukurta duomenų kopija lentelei `vartotojai`
--

INSERT INTO `vartotojai` (`id`, `vardas`, `pavarde`, `elpastas`, `slaptaz`) VALUES
(1, 'Jonas', 'Jonaitis', 'kitas@litas.ltu', 'mitas'),
(2, 'Kitas', 'Justas', 'litas@litas.kt', '$2y$10$37zbjCCgT4SEit3oXfo1IOb68z4kcWK62nYYINO6LTINzuMspkQa2'),
(27, '', '', '', '$2y$10$/drB0Q7lVudZ5sL6f7iboeQ7al94cafunyfjCrtxuc3uuxm6TSJSG'),
(25, 'Linas', 'Linauskas', 'linas@linas.lt', '$2y$10$pC.wrzNLWCvuxIawUCrqQOSlIpitOdjNXbHLxOumykM0eLyXZIL/G'),
(5, 'Saule', 'Justas', 'mano.litas@litas.ktu', '$2y$10$DuscUtIb3R5mn3wAqjNwc.aFHuKYBc8xRc1YW6vVYTvub2XzTMDpW'),
(24, 'Linas', 'Linauskas', 'linas@linas.lt', '$2y$10$JH0djrCFTyt.On.CWmI03ulQqpXIg2.WPTmx5S4YMzRHMbxJZsw76'),
(7, 'mano', 'Saulute', 'qwert@qwert.as', '$2y$10$SkuhJtI.bpxpY1dUk0eQZOj1dc3iqQeDbSLGRDQHbsGQFj6PZcs9K'),
(21, 'Tomas ', 'Tamaitis', 'tomas@litas.kt', '$2y$10$.1FiqYg4os5hZmI3Gg6MPOknSW.lajmFTxuTuHAJrEzjQjb4g2MDe'),
(26, 'Linas', 'Linutis', 'linas@linas.lt', '$2y$10$1e675/dB2djFjzdUtU5E3eysCScS86v4hpn4ADJbIKIpk5hhEZ.Fa'),
(23, 'Linas', 'Linaitis', 'linas@linas.lt', '$2y$10$uc2omtjb7BMOEvo45szoRODNLut4jA0qCRRLF4fD5mhoY9hjtYlpO'),
(20, 'Admin', 'Adminas', 'admin@admin.lt', '$2y$10$5STdNgRhhCCHyQt1iai1M.xwy/Y8CJmg2UviFXCjwHpZBlEcA6XfG'),
(19, 'Saule', 'Saulute', 'kitas@kitas.kt', '$2y$10$W3xGIUC7nJ2u00c8IqKEvuQkeanrG3C6tCpz3/qaMa.Ap.kOwsmRm'),
(15, 'Tomas ', 'Tomaitis', 'mano.litas@litas.ktu', '$2y$10$85Y9XSfNRl4YOV1abso1UeIZt.PeWR69s3CTlvkgcpnfyJd3KVrY6');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
