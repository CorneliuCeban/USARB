-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Dic 05, 2019 alle 18:30
-- Versione del server: 10.1.37-MariaDB
-- Versione PHP: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cornelshop`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `comenzi`
--

CREATE TABLE `comenzi` (
  `id` int(11) NOT NULL,
  `data` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `adresa` varchar(50) NOT NULL,
  `tel` varchar(15) NOT NULL,
  `status` varchar(20) NOT NULL,
  `id_client` int(10) NOT NULL,
  `id_produs` int(11) NOT NULL,
  `bucati` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struttura della tabella `conturi`
--

CREATE TABLE `conturi` (
  `id` int(11) NOT NULL,
  `loghin` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `conturi`
--

INSERT INTO `conturi` (`id`, `loghin`, `password`) VALUES
(1, 'admin', 'admin'),
(2, 'nume1', '123456'),
(3, 'nume2', 'aaabbb');

-- --------------------------------------------------------

--
-- Struttura della tabella `produse`
--

CREATE TABLE `produse` (
  `id` int(11) NOT NULL,
  `categorie` varchar(50) NOT NULL,
  `marca` varchar(50) NOT NULL,
  `model` varchar(50) NOT NULL,
  `descriere` text NOT NULL,
  `pret` int(10) NOT NULL,
  `stoc` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `produse`
--

INSERT INTO `produse` (`id`, `categorie`, `marca`, `model`, `descriere`, `pret`, `stoc`) VALUES
(3, 'telefon', 'samsung', 's10-black-128gb', 'ram 4gb\r\nsnapdragon\r\nmemorie 128gb', 13000, 5),
(4, 'telefon', 'samsung', 's10-gold-128gb', 'ram 4gb\r\nsnapdragon\r\nmemorie 128gb', 13800, 3),
(5, 'laptop', 'acer', 'jj-8gb-i7', 'ijhuhid\r\nsdfsd\r\ndsfsdf', 18350, 2);

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `comenzi`
--
ALTER TABLE `comenzi`
  ADD PRIMARY KEY (`id`);

--
-- Indici per le tabelle `conturi`
--
ALTER TABLE `conturi`
  ADD PRIMARY KEY (`id`);

--
-- Indici per le tabelle `produse`
--
ALTER TABLE `produse`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `comenzi`
--
ALTER TABLE `comenzi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT per la tabella `conturi`
--
ALTER TABLE `conturi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT per la tabella `produse`
--
ALTER TABLE `produse`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
