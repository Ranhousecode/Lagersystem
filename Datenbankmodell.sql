-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 14. Sep 2018 um 00:01
-- Server-Version: 10.1.34-MariaDB
-- PHP-Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `firmen_name`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `artikel`
--

CREATE TABLE `artikel` (
  `Artikelnummer` int(11) NOT NULL,
  `rechnungsnummer` int(11) NOT NULL,
  `Bezeichnung` varchar(200) NOT NULL,
  `Menge` int(10) NOT NULL,
  `Einzelpreis` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `fahrzeug`
--

CREATE TABLE `fahrzeug` (
  `ID` int(5) NOT NULL,
  `Hersteller` varchar(100) NOT NULL,
  `Modell` varchar(100) NOT NULL,
  `Baujahr` date NOT NULL,
  `KM-Stand` varchar(15) NOT NULL,
  `Bereifung` int(3) NOT NULL,
  `Ausstatung` varchar(240) NOT NULL,
  `Ankauf` int(15) NOT NULL,
  `Verkauf` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `fahrzeug_auschlachten`
--

CREATE TABLE `fahrzeug_auschlachten` (
  `ID` int(5) NOT NULL COMMENT 'Eindeutige ID',
  `ID_Fahrzeug` int(5) NOT NULL COMMENT 'Eindeutige Fahrzeug ID',
  `Ware` varchar(200) NOT NULL,
  `Menge` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `fahrzeug_defekt`
--

CREATE TABLE `fahrzeug_defekt` (
  `ID` int(5) NOT NULL COMMENT 'Eindeutige ID',
  `ID_Fahrzeug` int(5) NOT NULL COMMENT 'Eindeutige Fahrzeug ID',
  `Ware` varchar(200) NOT NULL,
  `Menge` varchar(200) CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `kunden_auftrag`
--

CREATE TABLE `kunden_auftrag` (
  `ID` int(11) NOT NULL,
  `Kundennummer` int(11) NOT NULL,
  `Hersteller` varchar(100) NOT NULL,
  `Modell` varchar(100) NOT NULL,
  `Angenommen` date NOT NULL,
  `Fertigstellung` date NOT NULL,
  `Abholung` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `kunden_bestellung`
--

CREATE TABLE `kunden_bestellung` (
  `ID` int(11) NOT NULL,
  `Kundennummer` int(11) NOT NULL,
  `Bestellnummer` int(11) NOT NULL,
  `bestelltdatum` date NOT NULL,
  `lieferdatum` date NOT NULL,
  `beschreibung` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `kunden_rechnung`
--

CREATE TABLE `kunden_rechnung` (
  `ID` int(11) NOT NULL,
  `Kundennummer` int(11) NOT NULL,
  `Rechnungsnummer` int(11) NOT NULL,
  `Rechnungsdatum` date NOT NULL,
  `Artikel` varchar(200) NOT NULL,
  `Betrag` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `kunden_stammdaten`
--

CREATE TABLE `kunden_stammdaten` (
  `ID` int(11) NOT NULL,
  `Anrede` enum('Herr','Frau','nicht angegeben') NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Vorname` varchar(100) NOT NULL,
  `Straße` varchar(200) NOT NULL,
  `Hausnummer` varchar(10) NOT NULL,
  `PLZ` int(7) NOT NULL,
  `Ort` varchar(100) NOT NULL,
  `Telefon` varchar(20) NOT NULL,
  `Handy` varchar(20) NOT NULL,
  `Kundennummer` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `passwort` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `vorname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nachname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`Artikelnummer`);

--
-- Indizes für die Tabelle `fahrzeug`
--
ALTER TABLE `fahrzeug`
  ADD PRIMARY KEY (`ID`);

--
-- Indizes für die Tabelle `fahrzeug_auschlachten`
--
ALTER TABLE `fahrzeug_auschlachten`
  ADD PRIMARY KEY (`ID`);

--
-- Indizes für die Tabelle `fahrzeug_defekt`
--
ALTER TABLE `fahrzeug_defekt`
  ADD PRIMARY KEY (`ID`);

--
-- Indizes für die Tabelle `kunden_auftrag`
--
ALTER TABLE `kunden_auftrag`
  ADD PRIMARY KEY (`ID`);

--
-- Indizes für die Tabelle `kunden_bestellung`
--
ALTER TABLE `kunden_bestellung`
  ADD PRIMARY KEY (`ID`);

--
-- Indizes für die Tabelle `kunden_rechnung`
--
ALTER TABLE `kunden_rechnung`
  ADD PRIMARY KEY (`ID`);

--
-- Indizes für die Tabelle `kunden_stammdaten`
--
ALTER TABLE `kunden_stammdaten`
  ADD PRIMARY KEY (`ID`);

--
-- Indizes für die Tabelle `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `artikel`
--
ALTER TABLE `artikel`
  MODIFY `Artikelnummer` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `fahrzeug`
--
ALTER TABLE `fahrzeug`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `fahrzeug_auschlachten`
--
ALTER TABLE `fahrzeug_auschlachten`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT COMMENT 'Eindeutige ID';

--
-- AUTO_INCREMENT für Tabelle `fahrzeug_defekt`
--
ALTER TABLE `fahrzeug_defekt`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT COMMENT 'Eindeutige ID';

--
-- AUTO_INCREMENT für Tabelle `kunden_auftrag`
--
ALTER TABLE `kunden_auftrag`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `kunden_bestellung`
--
ALTER TABLE `kunden_bestellung`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `kunden_rechnung`
--
ALTER TABLE `kunden_rechnung`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `kunden_stammdaten`
--
ALTER TABLE `kunden_stammdaten`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
