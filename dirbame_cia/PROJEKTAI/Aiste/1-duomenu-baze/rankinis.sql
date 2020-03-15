-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: Mar 15, 2020 at 03:59 PM
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
-- Database: `rankinis`
--

-- --------------------------------------------------------

--
-- Table structure for table `cempionatolentele`
--

CREATE TABLE `cempionatolentele` (
  `vieta` int(11) NOT NULL,
  `komanda` varchar(100) NOT NULL,
  `taskai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cempionatolentele`
--

INSERT INTO `cempionatolentele` (`vieta`, `komanda`, `taskai`) VALUES
(1, 'Klaipėdos „Dragūnas“', 26),
(2, 'Vilniaus VHC „Šviesa“', 25),
(3, 'Alytaus „Varsa-Stronglasas“', 18),
(4, 'RK “Kauno Ąžuolas - KTU”', 16),
(5, 'Vilniaus HC „Vilnius“', 16),
(6, 'Kauno „Granitas-Karys“', 15),
(7, 'Šiaulių „SC Dubysa“', 7),
(8, '„KKSC-RSSG-Grifas“', 5),
(9, 'Utenos HC „Utena“', 0);

-- --------------------------------------------------------

--
-- Table structure for table `fotos`
--

CREATE TABLE `fotos` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `naujienos_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `fotos`
--

INSERT INTO `fotos` (`id`, `name`, `naujienos_id`) VALUES
(1, 'DRA-DUB2.jpg', 4),
(2, 'GRA-DRA.jpg', 4),
(3, 'varsa-sviesa.jpg', 4),
(5, 'GRI-UTE2.jpg', 4),
(6, 'utena-vilnius.jpg', 4),
(7, 'VAR-GRA3.jpg', 27),
(8, 'VHC-GRA.jpg', 27),
(9, 'garliava-taurė2.jpg', 32),
(10, 'Šviesa-taurė2.jpg', 32),
(11, 'merginųu17Lenkija.jpg', 30),
(12, 'molėtai-supertaurė.jpg', 25),
(13, 'drawbowl_560.jpg', 29),
(14, 'Lietuva-Liuksemburge.jpg', 29),
(16, '36755838_692960924368846_5758244584819785728_o.jpg', 30),
(17, 'DSC_0959.jpg', 32),
(18, 'Lietuva-Liuksemburge.jpg', 25),
(19, 'Photo-23-of-26.jpg', 25),
(20, 'lietuva-turkija-2.jpg', 28),
(21, 'lietuva-turkija-2.jpg', 30),
(22, 'Lietuva-Portugalijoje.jpg', 31);

-- --------------------------------------------------------

--
-- Table structure for table `komandos`
--

CREATE TABLE `komandos` (
  `ID` int(11) NOT NULL,
  `Pavadinimas` varchar(60) NOT NULL,
  `Miestas` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `komandos`
--

INSERT INTO `komandos` (`ID`, `Pavadinimas`, `Miestas`) VALUES
(1, 'Vilniaus VHC „Šviesa“', 'Vilnius'),
(2, 'Klaipėdos „Dragūnas“', 'Klaipėda'),
(3, 'Alytaus „Varsa-Stronglasas“', 'Alytus'),
(4, 'Kauno „Granitas-Karys“', 'Kaunas'),
(5, 'RK “Kauno Ąžuolas - KTU”', 'Kaunas'),
(6, 'Vilniaus HC „Vilnius“', 'Vilnius'),
(7, 'Šiaulių „SC Dubysa“', 'Šiauliai'),
(8, '„KKSC-RSSG-Grifas“', 'Panevėžys'),
(9, 'Utenos HC „Utena“', 'Utena');

-- --------------------------------------------------------

--
-- Table structure for table `kontaktai`
--

CREATE TABLE `kontaktai` (
  `ID` int(11) NOT NULL,
  `gatve` varchar(60) NOT NULL,
  `miestas` varchar(20) NOT NULL,
  `pKodas` int(10) NOT NULL,
  `ePastas` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `kontaktai`
--

INSERT INTO `kontaktai` (`ID`, `gatve`, `miestas`, `pKodas`, `ePastas`) VALUES
(1, 'Žemaitės g. 6', 'Vilnius', 3117, 'info@rankinis.lt'),
(2, 'Aušros g. 42', 'Kaunas', 44158, 'info@rankinis.lt');

-- --------------------------------------------------------

--
-- Table structure for table `naujienos`
--

CREATE TABLE `naujienos` (
  `id` int(11) NOT NULL,
  `titel` text NOT NULL,
  `text` text NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `naujienos`
--

INSERT INTO `naujienos` (`id`, `titel`, `text`, `foto`) VALUES
(4, 'Po pirmųjų Baltijos lygos ketvirtfinalio mačų – skirtinga Lietuvos klubų situacija', 'Baltijos pirmenybių ketvirtfinalyje Lietuvos ekipoms sekėsi skirtingai. Klaipėdos „Dragūnas“ net ir žaisdamas išvykoje su Polvos „Serviti“ susikūrė 1 įvarčio persvarą, o Vilniaus „Šviesa“ į Latviją vyks su 4 įvarčių deficitu.\r\nŠeštadienį vykusiose rungtynėse „Šviesa“ namuose priėmė Dobelės „Tenax“ rankininkus. Vilniaus klubas į atkrintamąsias varžybas pateko, kaip B grupės nugalėtojas, o jų varžovai stipresnėje A grupėje užėmė 3 vietą.\r\n\r\nMačo pradžia geriau susiklostė svečiams iš Latvijos, kurie prabėgus 10 minučių buvo priekyje 6:5, prabėgus dar 10 minučių jau pirmavo 10:7. Po pirmojo kėlinio „Šviesos“ deficitas siekė 2 įvarčius – 13:15.\r\n\r\nAntroje susitikimo pusėje „Tenax“ pranašumas ėmė dar sparčiau augti ir likus 10 minučių latviai pirmavo 27:21, tačiau mačo pabaigoje „Šviesa“ priartėjo ir į Latviją vešis 4 įvarčių deficitą – 27:31.\r\n\r\nRezultatyviausias „Šviesos“ gretose su 7 įvarčiais buvo Karolis Bliuvas, po 4 pelnė Karolis Antanavičius ir Laurynas Palevičius. „Tenax“ ekipai net 9 įvarčius surinko Latvijos rinktinės marškinėliais Europos čempionate vilkėjęs Maris Veršakovas.\r\n\r\nIšvykoje žaidęs Klaipėdos „Dragūnas“ žengė pirmąjį žingsnį finalo ketverto link. Klaipėdiečiai mače su „Serviti“ šventė pergalę 29:28 (17:14) ir prieš atsakomąjį susitikimą namuose turės 1 įvarčio persvarą.\r\n\r\nMačas prasidėjo lygia kova ir šiokį tokį pranašumą Klaipėdos klubas sugebėjo susikurti tik pirmojo kėlinio pabaigoje – 17:14. Po pertraukos klaipėdiečiai nors ir kontroliavo situaciją likus 10 minučių iki mačo pabaigos vis dar pirmavo 3 įvarčiais (27:24), tačiau per mačo pabaigoje pradėjo strigti puolime ir jų pranašumas aptirpo – 29:28.\r\n\r\nKlaipėdos klubui po 6 įvarčius surinko Lukas Simėnas ir Žanas Gabrielius Virbauskas, Deividas Virbauskas ir Gytis Šmantauskas pridėjo po 5, 3 įmetė Benas Butkus, kurio metimas mačo pabaigoje ir sukūrė 1 įvarčio persvarą „Dragūnui“.\r\n\r\nVaržovams 6 įvarčius pelnė Henris Sillaste, 5 pridėjo Kristjanas Muuga.\r\n\r\nAtsakomieji Baltijos lygos ketvirtfinalio susitikimai bus žaidžiami kitą savaitgalį. Vieta finaliniame ketverte jau turi Minsko SKA. Kitoje ketvirtfinalio poroje po pirmo mačo Rihimiahio „Cocks“ turi 8 įvarčių persvarą prieš „Kehra/Horizon“ rankininkus.', 'antanavičius-tenax.jpg'),
(25, 'Įveikus Lenkijos barjerą, mūsų rinktinės lauktų Baltarusija', 'Lietuvos vyrų rankinio rinktinė sužinojo varžovus, su kuriais tektų grumtis paskutiniajame Pasaulio čempionato atrankos etape. Įveikus Lenkijos barjerą mūsų komandai tektų kitos kaimynės Baltarusijos iššūkis.\r\nBaltarusijos rinktinė 2020 metų Europos čempionate galutinėje įskaitoje užėmė 10 vietą. Pirmajame grupių etape jie įveikė Juodkalnijos ir Serbijos rinktinės ir į priekį praleido tik kroatus.\r\n\r\nBalandžio 16 dieną Lietuvos rankininkai pirmąsias rungtynes su Lenkija žais išvykoje, o atsakomasis mačas Vilniaus „Siemens“ arenoje bus žaidžiamas balandžio 19 dieną.\r\n\r\nPaskutiniojo atrankos etapo varžybos bus vykdomos birželio 5-11 dienomis. Šį barjerą įveikusi nacionalinė užsitikrins vietą 2021-ųjų metų planetos pirmenybėse, kurios šį kartą vyks Egipte. Viso čempionate dalyvaus 32 rinktinės.', 'Photo-23-of-26.jpg'),
(29, 'Lietuvos rankininkai EHF reitinge priartėjo prie 20-uko ir pateko į 3 burtų krepšelį', 'Prieš traukiant atrankos į 2022-ųjų metų Europos čempionato burtus 49 Senojo žemyno rinktinės buvo sureitinguotos, pagal pastarųjų kelių metų rezultatus.\r\nLietuvos rinktinė reitinge šiuo metu užėmė 21 vietą ir liko labai arti antrojo burtų krepšelio. Tiesa, mūsų šalies rinktinė reitinguojasi aukščiausiai iš visų Baltijos šalių (latviai – 25, estai – 33) ir aplenkė net 4 ką tik pasibaigusiame Europos čempionate dalyvavusias rinktines – Lenkija, Bosnija ir Hercegovina, Ukraina, Latvija.\r\n\r\nBūtent su lenkais, kurie šiuo metu dalijasi 25 poziciją su Latvija, mūsų šalies rinktinė žais pasaulio čempionato atrankos trečiajame etape balandžio mėnesį.\r\n\r\nVietą 2020 metų Europos pirmenybėse jau yra užsitikrinusios turnyro šeimininkės Vengrijos ir Slovakijos bei praėjusio čempionato finalininkės Ispanija ir Kroatija.\r\n\r\nBūtent ispanai naujausiame reitinge užėmė pirmąją vieta, antri liko norvegai, treti kelialapį jau turintys Kroatijos rankininkai.\r\n\r\nBurtai į Europos čempionato atranką bus traukiami balandžio 21-24 dienomis Bratislavoje. Prieš tai kovo 9 dieną dar bus ištraukti paskutiniojo pasaulio čempionato atrankos etapo burtai. Ten Lietuvos rinktinė patektų, įveikusi Lenkijos barjerą.\r\n\r\nEuropos čempionato atrankos krepšeliai:\r\n\r\n1: Norvegija, Švedija, Danija, Vokietija, Prancūzija, Slovėnija, Čekija, Islandija.\r\n\r\n2: Austrija, Baltarusija, Portugalija, Makedonija, Serbija, Rusija, Juodkalnija, Olandija.\r\n\r\n3: Šveicarija, Lietuva, Rumunija, Bosnija ir Herecegovina, Ukraina, Latvija, Lenkija, Belgija.\r\n\r\n4: Suomija, Italija, Turkija, Izraelis, Estija, Graikija, Kosovas, Farerų salos.', 'Lietuva-Liuksemburge.jpg'),
(30, 'Lietuvos merginų paplūdimio rinktinė tarp 8 stipriausių Europos komandų', 'Lietuvos merginų iki 17 metų paplūdimio rankinio Europos čempionate Lenkijoje pateko tarp 8 stipriausių Senojo žemyno komandų. Mūsų šalies rinktinė pirmosiose rungtynėse 0:2 nusileido Olandijos merginoms, bet 2:0 įveikė ukrainietės ir žengė į kitą varžybų etapą.\r\n\r\nPirmajame mače Lenkijoje vykstančiame čempionate Lietuvos rinktinė susitiko su viena stipriausių pasaulyje Olandijos bendraamžių komanda. Pirmojo kėlinuko metu lietuvaitės varžovėms nusileido rezultatu 14:24, o antrajame pralaimėjo 20:32. Daugiausiai taškų Lietuvos rinktinei pelnė Martyna Ustilaitė – 12, Mantė Voskresenskaja pridėjo 8, 6 pelnė Vakarė Damulevičiūtė, 4 – Vesta Jančytė, po 2 Goda Bernackaitė ir Skirmantė Gečaitė.\r\n\r\nAntrajame mače sprendėsi kelialapio į finalinį aštuonetą likimas, kadangi olandes ir ukrainietes įveikė sausu rezultatu 2:0.  Pirmasis kėlinukas dideliu rezultatyvumu nepasižymėjo ir pasibaigus jo laikui rezultatas buvo lygus 6:6, tačiau auksinį įvarti jau pasibaigus pagrindiniam laikui pelniusios Lietuvos merginos šventė pergalę 7:6. Antrasis kėlinukas lietuvaitėms klostėsi jau kur kas lengviau. Nuo pirmųjų minučių pirmavusi Lietuvos rinktinė laimėjo rezultatu 11:6 ir bendru rezultatu 2:0 įveikė ukrainietes. 8 taškus Lietuvos rinktinei pelnė Mantė Voskresenskaja, 4 – Vakarė Damulevičiūtė, po 3 Vesta Jančytė bei Martyna Ustilaitė.\r\n\r\nTarp aštuonių stipriausių Europos komandų patekusi Lietuvos merginų rinktinė varžysis vienoje grupėje su Vokietijos, Vengrijos ir Portugalijos rinktinėmis. Dvi stipriausios ekipos keliaus į pusfinalį, o kitos dvi tęs kovą dėl 5-8 vietų. Kol kas geriausias Lietuvos jaunimo rinktinių pasiektas rezultatas prieš du metus iškovota 8 vieta U17 merginų čempionate.\r\n\r\nVaikinams pasekti sėkmingu merginų pavyzdžiu nepavyko. Pirmą kartą jaunimo paplūdimio rankinio čempionate dalyvaujanti Lietuvos vaikinų iki 17 metų rinktinė pirmajame mače 0:2 (17:22; 8:28) nusileido Olandijos  rankininkams. 10 taškų šiame mače pelnė Romas Aukštikalnis, 7 – Edvinas Aidukonis, po 2 – Orestas Biknius, Justas Čimbaras, Airidas Petronis, Dominykas Tribušis.\r\n\r\nAntrajame mače lietuvaičiai taip pat rezultatu 0:2 (4:18; 4:18) nusileido Portugalijos rankininkams. 4 taškus Lietuvos rinktinei šiose rungtynėse pelnė Romas Aukštikalnis, kuris ir vėl buvo rezultatyviausias mūsų rinktinės žaidėjas. Po 2 taškus pridėjo Airidas Petronis ir Erikas Pūkas. Rytoj Lietuvos vaikinų rinktinės laukia paskutinės grupės rungtynės su bendraamžiais iš Vokietijos.', 'merginųu17Lenkija.jpg'),
(31, 'Lietuvos rinktinė pasirydomą Europos čempionato atrankoje baigė lygiosiomis Portugalijoje', 'Paskutiniosiose Europos čempionato atrankos ciklą Lietuvos rankinio rinktinė baigė lygiosiomis 28:28 (13:16) išvykoje su Portugalijos rinktine.\r\nLietuvos rankininkai prieš paskutiniąsias rungtynes dar turėjo galimybių kovoti dėl patekimo į Europos rankinio čempionatą užėmusi trečiąją vietą grupėje. Tiesa, lietuviams reikėjo ne tik iškovoti pergalę Portugalijoje, bet ir sulaukti palankių rezultatų kitose arenose.\r\n\r\nLietuvos rinktinei šiose rungtynėse negalėjo padėti visas būrys žaidėjų (Aidenas Malašinskas, Valdas Drabavičius, Rolandas Bernatonis, Benas Petreikis, Laurynas Palevičius, Ignas Grigas), tačiau, nepaisant to, Lietuvos rankininkai pirmosiomis rungtynių minutėmis varžovams nieko nenusileido. Vis dėlto, geriau antrąją pirmojo kėlinio dalį sužaidę šeimininkai po 30 minučių pirmavo 16:13.\r\n\r\nJau pirmosiomis antrojo kėlinio minutėmis Lietuvos rinktinei pavyko sumažinti atsilikimą iki minimumo (17:18), tačiau į tai vėl sėkmingesniu žaidimu atsakė šeimininkai, kurie vienu metu pirmavo net 4 įvarčiais (22:18). Mindaugo Dumčiaus vedama Lietuvos rinktinė vėl spurtavo ir lygino rezultatą (24:24). Nors paskutinėmis rungtynių minutėmis portugalai, kurių vartuose puikiai atrodė po keitimo į aikštę įėjęs vartininkas Bravo Quintana, vėl atitrūko (28:25), tačiau lietuviams per likusias minutes pavyko išlyginti rezultatą (28:28) ir dar turėjo paskutinę ataką tam, jog išplėštų pergalę. Per ją viskas, ką pavyko išpešti tai 9 metrų laisvas metimas, kurį metęs Mindaugas Dumčius varžovų vartininko nuginkluoti nesugebėjo.\r\n\r\nLietuvos rinktinė iškovojusi vieną tašką šiose rungtynėse pakilo į trečiąją vietą grupėje, tačiau pasibaigus kitų grupių rungtynėms paaiškėjo, jog pergalės Lietuvai taip pat būtų neužtekę. Lenkija 26:23 nugalėjo Izraelį, Serbija 32:31 įveikė šveicarus, o olandai 25:21 pranoko mūsų kaimynus latvius, kurie jau buvo užsitikrinę vietą čempionate. Visi šie trys rezultatai buvo neparankūs mūsų rinktinei, kuri dabar visų trečiąsias vietas užėmusių rinktinių liko 6, o viso į čempionatą pateko keturios geriausios trečiosios rinktinės.\r\n\r\nLietuva: Mindaugas Dumčius 9, Mindaugas Urbonas 6, Gerdas Babarskas ir Jonas Truchanovičius po 4, Vaidotas Grosas 3, Mindaugas Tarcijonas ir Žanas Gabrielius Virbauskas po 1.', 'Lietuva-Portugalijoje.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `rezultatai`
--

CREATE TABLE `rezultatai` (
  `ID` int(11) NOT NULL,
  `data` text NOT NULL,
  `sale` varchar(20) NOT NULL,
  `komandos` varchar(150) NOT NULL,
  `rezultatas` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `rezultatai`
--

INSERT INTO `rezultatai` (`ID`, `data`, `sale`, `komandos`, `rezultatas`) VALUES
(1, '2019-09-21 15:00:00', 'VK sporto salė', 'Vilniaus VHC „Šviesa“ - Utenos HC „Utena“', '41 : 20'),
(2, '2019-09-17 18:00:00', 'Rankinio centras', '„KKSC-RSSG-Grifas“ - Alytaus „Varsa-Stronglasas“', '28 : 36'),
(3, '2019-09-21 14:15:00', 'LSMU VA', 'Kauno „Granitas-Karys“ - Šiaulių „SC Dubysa“', '31 : 24'),
(4, '2019-09-21 14:00:00', 'HC Vilnius', 'Vilniaus HC „Vilnius“ - RK “Kauno Ąžuolas - KTU”', '29 : 33');

-- --------------------------------------------------------

--
-- Table structure for table `vartotojai`
--

CREATE TABLE `vartotojai` (
  `email` varchar(60) NOT NULL,
  `password` varchar(20) NOT NULL,
  `id` int(11) NOT NULL,
  `userType` varchar(10) NOT NULL,
  `userName` varchar(60) NOT NULL,
  `password-repeat` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `vartotojai`
--

INSERT INTO `vartotojai` (`email`, `password`, `id`, `userType`, `userName`, `password-repeat`) VALUES
('asd@ih.lt', 'asd', 11, 'user', '', ''),
('asdfa@ih.lt', 'asdfa', 13, 'user', '', ''),
('asdfaa@ih.lt', 'asdfaa', 14, 'user', '', ''),
('asdfghjkl@ih.lt', 'asdfghjkl', 15, 'user', '', ''),
('no@gmail.com', 'no', 16, 'user', '', ''),
('asdfghjklasdf@ih.lt', 'asdfghjkl', 17, 'user', '', ''),
('admin', 'admin', 18, 'admin', '', ''),
('labas@gmail.com', 'labas', 19, 'user', '', ''),
('naujas@gmail.com', 'naujas', 20, 'user', '', ''),
('aiste@gmail.com', 'aiste', 21, 'user', 'aiste', 'aiste');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cempionatolentele`
--
ALTER TABLE `cempionatolentele`
  ADD PRIMARY KEY (`vieta`);

--
-- Indexes for table `fotos`
--
ALTER TABLE `fotos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `komandos`
--
ALTER TABLE `komandos`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `kontaktai`
--
ALTER TABLE `kontaktai`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `naujienos`
--
ALTER TABLE `naujienos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rezultatai`
--
ALTER TABLE `rezultatai`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `vartotojai`
--
ALTER TABLE `vartotojai`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fotos`
--
ALTER TABLE `fotos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `komandos`
--
ALTER TABLE `komandos`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `kontaktai`
--
ALTER TABLE `kontaktai`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `naujienos`
--
ALTER TABLE `naujienos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `rezultatai`
--
ALTER TABLE `rezultatai`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `vartotojai`
--
ALTER TABLE `vartotojai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
