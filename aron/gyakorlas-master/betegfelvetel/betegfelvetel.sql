-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2020. Jan 05. 16:55
-- Kiszolgáló verziója: 10.1.32-MariaDB
-- PHP verzió: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `betegfelvetel`
--
DROP IF EXISTS `betegfelvetel`;
CREATE DATABASE IF NOT EXISTS `betegfelvetel` DEFAULT CHARACTER SET utf8 COLLATE utf8_hungarian_ci;
USE `betegfelvetel`;

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `beteg`
--

DROP TABLE IF EXISTS `beteg`;
CREATE TABLE IF NOT EXISTS `beteg` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `szallitoazon` int(11) NOT NULL,
  `nev` varchar(255) COLLATE utf8_hungarian_ci NOT NULL,
  `taj-szam` varchar(255) COLLATE utf8_hungarian_ci NOT NULL,
  `vercsoport` varchar(255) COLLATE utf8_hungarian_ci NOT NULL,
  `eletkor` int(11) NOT NULL,
  `nem` varchar(255) COLLATE utf8_hungarian_ci NOT NULL,
  `lakcim` varchar(255) COLLATE utf8_hungarian_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `taj-szam` (`taj-szam`),
  KEY `szallitoazon` (`szallitoazon`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- A tábla adatainak kiíratása `beteg`
--

INSERT INTO `beteg` (`id`, `szallitoazon`, `nev`, `taj-szam`, `vercsoport`, `eletkor`, `nem`, `lakcim`) VALUES
(1, 1, 'Illés Károly', '234-889-101', 'AB+', 45, 'férfi', '6554 Nyékládháza, vasút sor 45.'),
(2, 2, 'Sümeg Béla', '112-023-858', 'AB-', 34, 'férfi', '6723 Szeged, Pentelei sor 4.'),
(3, 3, 'Krecsmár Ágota', '987-011-658', 'B-', 35, 'nő', '4500 Vaskút, Velemér sor 45.'),
(4, 3, 'Szabó Izabella', '444-211-667', 'B+', 18, 'nő', '3261 Abasár, Kollár Mihály utca 4.'),
(6, 4, 'Király Emese', '122-938-411', 'B+', 22, 'nő', '2681 Galgagyörk, Vitéz utca 48.'),
(7, 5, 'Boldizsár Gréta', '111-922-322', 'A-', 17, 'nő', '2483 Gárdony, Oldalkosár utca 33.'),
(8, 4, 'Balogh Dániel', '333-677-133', '0+', 38, 'férfi', '9722 Gencsapáti, Hód utca 33.'),
(9, 3, 'Váradi Patrícia', '001-227-777', '0-', 23, 'nő', '4254 Nyíradony, Bükkös utca 68.'),
(10, 3, 'Molnár Péter', '555-663-121', '0+', 67, 'férfi', '4564 Nyírmada, Follár Kelemen utca 4.'),
(11, 2, 'Kérges György', '189-999-570', 'AB-', 44, 'férfi', '6923 Óföldeák, Magaslati út 3.'),
(12, 1, 'Lakatos Gergely', '309-505-677', 'AB+', 89, 'férfi', '8635 Ordacsehi, Budai Béla utca 8.'),
(13, 5, 'Török László ', '928-837-269', 'A+', 38, 'férfi', '9825 Oszkó, hegyi út 39.'),
(14, 5, 'Takács Julianna', '133-344-577', 'A+', 48, 'nő', '3242 Parádsasvár, Újhelyi út 27.'),
(15, 4, 'Kerekes Zsófia', '001-202-056', 'A-', 43, 'nő', '3387 Pétervására, 48-as utca 19.'),
(16, 5, 'Lakatos Aranka', '129-149-188', '0-', 29, 'nő', '2095 Pilisszántó, Boros Béla utca 17.'),
(17, 1, 'Kocsis Beáta', '289-367-014', 'AB-', 55, 'nő', '6762 Sándorfalva, Szegedi út 78.'),
(18, 1, 'Sárközi Éva', '288-355-609', 'A-', 27, 'nő', '7562 Segesd, Szőlő utca 16.'),
(19, 4, 'Gereben István', '999-666-108', 'B+', 16, 'férfi', '8439 Sikátor, Geller utca 7.'),
(20, 1, 'Sipos Tamás', '230-789-444', 'A-', 21, 'férfi', '2083 Solymár, Pilisi utca 232.'),
(21, 3, 'Fodor Piroska', '723-965-321', 'A-', 34, 'nő', '2367 Újhartyán, Duna utca 365.'),
(22, 4, 'Lengyel Ildikó', '731-954-765', 'AB+', 72, 'nő', '8490 Úrkút, Berzence László sor 2.'),
(23, 5, 'Holló Ervin', '348-111-630', 'A-', 58, 'férfi', '2225 Üllő, Hetes utca 34.'),
(26, 2, 'Simon Ferenc', '296-589-430', '0-', 12, 'férfi', '6430 Bácsalmás, Bajai út 42.'),
(27, 2, 'Pataki Ágota', '169-840-763', '0+', 37, 'nő', '6500 Baja, Fehér Gábor utca 27.'),
(28, 4, 'Szűcs Lajos', '146-641-777', '0-', 53, '', '9944 Bajánsenye, Pataji út 17.'),
(29, 5, 'Oláh Mihály', '060-181-292', 'A+', 43, 'férfi', '6764 Balástya, Fekete János utca 26.'),
(30, 2, 'Horváth Angéla', '134-976-888', 'A+', 40, 'nő', '8604 Bálványos, Füredi utca 39.');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `betegszallito`
--

DROP TABLE IF EXISTS `betegszallito`;
CREATE TABLE IF NOT EXISTS `betegszallito` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nev` varchar(255) COLLATE utf8_hungarian_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `nev` (`nev`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- A tábla adatainak kiíratása `betegszallito`
--

INSERT INTO `betegszallito` (`id`, `nev`) VALUES
(5, 'Dialisys kft.'),
(1, 'Medicaltrans kft.'),
(2, 'Mentőangyal kft.'),
(4, 'PatientLogistic kft.'),
(3, 'SzegedMentők kft.');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) COLLATE utf8_hungarian_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_hungarian_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_hungarian_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_hungarian_ci NOT NULL,
  `active` tinyint(4) DEFAULT NULL,
  `rights` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `felhasznalonev` (`email`),
  UNIQUE KEY `jelszo` (`password`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- A tábla adatainak kiíratása `user`
--

INSERT INTO `user` (`id`, `email`, `password`, `name`, `address`, `active`, `rights`) VALUES
(1, 'piramis@gmail.com', 'berengar', 'Larsson', '5642 Doboz', NULL, NULL);

--
-- Megkötések a kiírt táblákhoz
--

--
-- Megkötések a táblához `beteg`
--
ALTER TABLE `beteg`
  ADD CONSTRAINT `beteg_ibfk_1` FOREIGN KEY (`szallitoazon`) REFERENCES `betegszallito` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
