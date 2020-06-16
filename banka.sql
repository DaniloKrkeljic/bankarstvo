-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 16, 2020 at 10:34 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `banka`
--

-- --------------------------------------------------------

--
-- Table structure for table `racun`
--

CREATE TABLE `racun` (
  `id` int(10) UNSIGNED NOT NULL,
  `vlasnik_jmbg` bigint(45) UNSIGNED NOT NULL,
  `stanje` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `racun`
--

INSERT INTO `racun` (`id`, `vlasnik_jmbg`, `stanje`) VALUES
(1, 2873141241412, 6251),
(2, 2938491929394, 1252),
(3, 5819293949192, 21521);

-- --------------------------------------------------------

--
-- Stand-in structure for view `stanje`
-- (See below for the actual view)
--
CREATE TABLE `stanje` (
`ime` varchar(255)
,`prezime` varchar(255)
,`adresa` varchar(255)
,`stanje` int(11)
);

-- --------------------------------------------------------

--
-- Table structure for table `vlasnik`
--

CREATE TABLE `vlasnik` (
  `jmbg` bigint(45) UNSIGNED NOT NULL,
  `ime` varchar(255) NOT NULL,
  `prezime` varchar(255) NOT NULL,
  `adresa` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `vlasnik`
--

INSERT INTO `vlasnik` (`jmbg`, `ime`, `prezime`, `adresa`) VALUES
(2873141241412, 'Bozo', 'Stanic', 'Uciteljska 21'),
(2938491929394, 'Somal', 'Kleparevic', 'Panteona Velikog 421'),
(5819293949192, 'Vesna', 'Pantelic', 'Somska 451');

-- --------------------------------------------------------

--
-- Structure for view `stanje`
--
DROP TABLE IF EXISTS `stanje`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `stanje`  AS  select `vlasnik`.`ime` AS `ime`,`vlasnik`.`prezime` AS `prezime`,`vlasnik`.`adresa` AS `adresa`,`racun`.`stanje` AS `stanje` from (`vlasnik` join `racun` on(`vlasnik`.`jmbg` = `racun`.`vlasnik_jmbg`)) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `racun`
--
ALTER TABLE `racun`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_racun_vlasnik_jmbg` (`vlasnik_jmbg`);

--
-- Indexes for table `vlasnik`
--
ALTER TABLE `vlasnik`
  ADD PRIMARY KEY (`jmbg`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `racun`
--
ALTER TABLE `racun`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `racun`
--
ALTER TABLE `racun`
  ADD CONSTRAINT `fk_racun_vlasnik_jmbg` FOREIGN KEY (`vlasnik_jmbg`) REFERENCES `vlasnik` (`jmbg`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
