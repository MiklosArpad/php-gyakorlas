-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2020. Okt 04. 16:01
-- Kiszolgáló verziója: 10.1.38-MariaDB
-- PHP verzió: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `kocsik`
--
CREATE DATABASE IF NOT EXISTS `kocsik` DEFAULT CHARACTER SET utf8 COLLATE utf8_hungarian_ci;
USE `kocsik`;

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `marka`
--

DROP TABLE IF EXISTS `marka`;
CREATE TABLE IF NOT EXISTS `marka` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nev` varchar(255) COLLATE utf8_hungarian_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- A tábla adatainak kiíratása `marka`
--

INSERT INTO `marka` (`id`, `nev`) VALUES
(1, 'BMW'),
(2, 'Audi'),
(3, 'Mercedes'),
(4, 'Chrysler'),
(5, 'Opel'),
(6, 'Volkswagen'),
(7, 'Toyota');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
