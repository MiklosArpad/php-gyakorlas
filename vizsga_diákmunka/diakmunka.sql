-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2018. Ápr 22. 20:55
-- Kiszolgáló verziója: 10.1.25-MariaDB
-- PHP verzió: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `diakmunka`
--
CREATE DATABASE IF NOT EXISTS `diakmunka` DEFAULT CHARACTER SET utf8 COLLATE utf8_hungarian_ci;
USE `diakmunka`;

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `felhasznalo`
--

CREATE TABLE `felhasznalo` (
  `felhasznaloaz` int(11) NOT NULL,
  `nev` varchar(100) COLLATE utf8_hungarian_ci NOT NULL,
  `szulido` date NOT NULL,
  `jelszo` varchar(60) COLLATE utf8_hungarian_ci NOT NULL,
  `diak` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- A tábla adatainak kiíratása `felhasznalo`
--

INSERT INTO `felhasznalo` (`felhasznaloaz`, `nev`, `szulido`, `jelszo`, `diak`) VALUES
(1, 'Kos Péter', '1987-11-05', 'kosp', 1),
(2, 'Port Imre', '1990-05-05', 'pori', 1),
(3, 'Kovács Imre', '1984-03-02', 'kovi', 1),
(4, 'Horváth Emil', '1988-05-02', 'hore', 1),
(5, 'Kapos Petra', '1985-12-23', 'kapp', 1),
(6, 'Csóka Anna', '1981-11-30', 'csoa', 1),
(7, 'Nyúl Tamás', '1988-02-16', 'nyut', 1),
(8, 'Ordasi Emma', '1989-01-03', 'orde', 1),
(9, 'Koppány Olga', '1984-02-28', 'kopo', 1),
(10, 'Kozma Patrícia', '1983-06-01', 'kozp', 1),
(11, 'Admin', '2018-04-22', 'admin', 0);

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `munka`
--

CREATE TABLE `munka` (
  `munkaid` int(11) NOT NULL,
  `mhelyid` int(11) NOT NULL,
  `felhasznaloaz` int(11) DEFAULT NULL,
  `allas` varchar(100) COLLATE utf8_hungarian_ci NOT NULL,
  `datum` date NOT NULL,
  `oradij` int(11) NOT NULL,
  `oraszam` int(11) NOT NULL,
  `kozepiskolas` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- A tábla adatainak kiíratása `munka`
--

INSERT INTO `munka` (`munkaid`, `mhelyid`, `felhasznaloaz`, `allas`, `datum`, `oradij`, `oraszam`, `kozepiskolas`) VALUES
(1, 1, 1, 'kézbesítő', '2003-07-02', 400, 4, 0),
(2, 1, 2, 'ügyfélszolgálati munkatárs', '2003-07-03', 300, 4, 0),
(3, 2, 1, 'kisegítő', '2003-07-01', 500, 4, 1),
(4, 2, 2, 'eladó', '2003-07-01', 350, 4, 0),
(5, 1, 1, 'kézbesítő', '2003-07-03', 450, 6, 0),
(6, 1, 2, 'futár', '2003-07-06', 300, 5, 1),
(7, 2, 0, 'eladó', '2003-07-07', 400, 6, 0),
(8, 9, 0, 'kisegítő', '2003-06-19', 300, 4, 0),
(9, 9, 6, 'takarító', '2003-06-19', 400, 4, 0),
(10, 9, 6, 'takarító', '2003-06-20', 400, 4, 0),
(11, 9, 8, 'kisegítő', '2003-06-21', 300, 6, 1),
(12, 9, 8, 'kisegítő', '2003-06-22', 300, 6, 1),
(13, 9, 6, 'takarító', '2003-06-23', 400, 4, 0),
(14, 6, 4, 'ruhatáros', '2003-09-11', 400, 4, 0),
(15, 6, 7, 'ruhatáros', '2003-09-11', 400, 4, 0),
(16, 6, 5, 'pincér', '2003-06-11', 450, 6, 0),
(17, 6, 5, 'pincér', '2003-06-12', 450, 6, 0),
(18, 8, 9, 'eladó', '2003-07-21', 500, 4, 0),
(19, 8, 9, 'eladó', '2003-07-22', 500, 4, 0),
(20, 8, 10, 'takarító', '2003-08-10', 350, 6, 1),
(21, 8, 10, 'takarító', '2003-08-11', 350, 6, 1),
(22, 11, 5, 'eladó', '2003-05-10', 400, 4, 0),
(23, 11, 6, 'raktáros', '2003-05-20', 300, 4, 0),
(24, 11, 5, 'eladó', '2003-06-23', 300, 6, 0),
(25, 10, 0, 'takarító', '2003-07-29', 250, 4, 1),
(26, 10, 0, 'takarító', '2003-07-30', 250, 4, 1),
(27, 10, 3, 'takarító', '2003-07-31', 300, 4, 1),
(28, 10, 3, 'takarító', '2003-08-01', 300, 4, 1),
(29, 10, 8, 'eladó', '2003-09-12', 300, 6, 1),
(30, 10, 8, 'eladó', '2003-09-13', 300, 6, 1),
(31, 7, 8, 'ruhatáros', '2003-08-20', 200, 4, 1),
(32, 7, 8, 'ruhatáros', '2003-08-21', 200, 4, 1),
(33, 7, 0, 'ruhatáros', '2003-08-22', 200, 4, 1),
(34, 7, 0, 'ruhatáros', '2003-08-23', 200, 4, 1),
(35, 4, 0, 'raktáros', '2003-10-10', 300, 6, 0),
(36, 4, 0, 'raktáros', '2003-10-11', 300, 6, 0),
(37, 4, 0, 'raktáros', '2003-10-12', 300, 6, 0),
(38, 5, 7, 'eladó', '2003-06-05', 400, 4, 0),
(39, 5, 7, 'eladó', '2003-06-06', 400, 4, 0),
(40, 5, 7, 'eladó', '2003-06-07', 400, 4, 0),
(41, 11, 0, 'eladó', '2003-07-07', 400, 6, 0);

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `munkaado`
--

CREATE TABLE `munkaado` (
  `mhelyid` int(11) NOT NULL,
  `nev` varchar(100) COLLATE utf8_hungarian_ci NOT NULL,
  `telepules` varchar(100) COLLATE utf8_hungarian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- A tábla adatainak kiíratása `munkaado`
--

INSERT INTO `munkaado` (`mhelyid`, `nev`, `telepules`) VALUES
(1, 'Bicaj Futárszolgálat', 'Csepűfalva'),
(2, 'Soós Pékség', 'Szombati'),
(3, 'Pokol Vagyonvédelem', 'Komád'),
(4, 'Vass Kereskedés', 'Zombrád'),
(5, 'Kati Virágbolt', 'Komád'),
(6, 'Fekete Kávéház', 'Szombati'),
(7, 'Körúti Kávéház', 'Csepűfalva'),
(8, 'Királyi Cukrászat', 'Zombrád'),
(9, 'Konty Fodrászat', 'Szombati'),
(10, 'Falat Pékség', 'Komád'),
(11, 'Korr Vaskereskedés', 'Csepűfalva');

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `felhasznalo`
--
ALTER TABLE `felhasznalo`
  ADD PRIMARY KEY (`felhasznaloaz`);

--
-- A tábla indexei `munka`
--
ALTER TABLE `munka`
  ADD PRIMARY KEY (`munkaid`);

--
-- A tábla indexei `munkaado`
--
ALTER TABLE `munkaado`
  ADD PRIMARY KEY (`mhelyid`);

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `felhasznalo`
--
ALTER TABLE `felhasznalo`
  MODIFY `felhasznaloaz` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT a táblához `munka`
--
ALTER TABLE `munka`
  MODIFY `munkaid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
--
-- AUTO_INCREMENT a táblához `munkaado`
--
ALTER TABLE `munkaado`
  MODIFY `mhelyid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
