-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Czas generowania: 02 Lis 2015, 01:31
-- Wersja serwera: 5.6.26
-- Wersja PHP: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `edutech`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `textareas`
--

CREATE TABLE IF NOT EXISTS `textareas` (
  `id` int(11) NOT NULL,
  `position` int(11) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `textareas`
--

INSERT INTO `textareas` (`id`, `position`, `content`) VALUES
(2, 3, 'Test 2'),
(3, 2, 'Test 3'),
(4, 4, 'Test 4'),
(6, 1, 'Test 1');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indexes for table `textareas`
--
ALTER TABLE `textareas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `position` (`position`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `textareas`
--
ALTER TABLE `textareas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
