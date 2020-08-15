-- phpMyAdmin SQL Dump
-- version 4.6.6deb1+deb.cihar.com~xenial.2
-- https://www.phpmyadmin.net/
--
-- Gép: localhost
-- Létrehozás ideje: 2018. Máj 05. 09:27
-- Kiszolgáló verziója: 5.7.22-0ubuntu0.16.04.1
-- PHP verzió: 7.0.28-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `erdemes_muveszek`
--
CREATE DATABASE IF NOT EXISTS `erdemes_muveszek` DEFAULT CHARACTER SET utf8 COLLATE utf8_hungarian_ci;
USE `erdemes_muveszek`;

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `foglalkozas`
--

CREATE TABLE `foglalkozas` (
  `az` int(11) NOT NULL,
  `fognev` varchar(100) COLLATE utf8_hungarian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- A tábla adatainak kiíratása `foglalkozas`
--

INSERT INTO `foglalkozas` (`az`, `fognev`) VALUES
(1, 'filmrendező'),
(2, 'médiaművész'),
(3, 'operatőr'),
(4, 'producer'),
(5, 'fotóművész'),
(6, 'zeneszerző'),
(7, 'karmester'),
(8, 'textilművész'),
(9, 'grafikusművész'),
(10, 'festőművész'),
(11, 'táncművész'),
(12, 'koreográfus'),
(13, 'rendező'),
(14, 'díszlet- és jelmeztervező'),
(15, 'jelmeztervező'),
(16, 'színművész'),
(17, 'színésznő'),
(18, 'operaénekes'),
(19, 'hegedűművész'),
(20, 'szaxofonművész'),
(21, 'trombitaművész'),
(22, 'énekes'),
(23, 'karnagy'),
(24, 'orgonaművész'),
(25, 'gitárművész'),
(26, 'képzőművész'),
(27, 'szobrászművész'),
(28, 'éremművész'),
(29, 'tervezőgrafikus'),
(30, 'grafikus'),
(31, 'magánénekes'),
(32, 'zeneszerző'),
(33, 'balettmester'),
(34, 'balettművész'),
(35, 'dramaturg'),
(36, 'építész'),
(37, 'látvány- és díszlettervező'),
(38, 'költő'),
(39, 'humorista'),
(40, 'kárpit- és gobelinművész'),
(41, 'előadóművész'),
(42, 'lantművész'),
(43, 'táncpedagógus'),
(44, 'magántáncos'),
(45, 'festő'),
(46, 'táncművész'),
(47, 'zongaraművész'),
(48, 'zenész'),
(49, 'költő'),
(50, 'zeneigazgató'),
(51, 'előadóművész'),
(52, 'belsőépítész'),
(53, 'színész');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `kapcsolo`
--

CREATE TABLE `kapcsolo` (
  `fogaz` int(11) NOT NULL,
  `szemaz` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- A tábla adatainak kiíratása `kapcsolo`
--

INSERT INTO `kapcsolo` (`fogaz`, `szemaz`) VALUES
(1, 1),
(1, 2),
(1, 3),
(1, 4),
(1, 5),
(1, 94),
(1, 95),
(1, 96),
(1, 97),
(1, 98),
(1, 102),
(2, 2),
(3, 4),
(3, 7),
(3, 121),
(3, 122),
(4, 5),
(5, 6),
(5, 8),
(5, 9),
(5, 99),
(5, 100),
(6, 11),
(6, 67),
(6, 68),
(6, 157),
(6, 158),
(6, 159),
(7, 11),
(7, 57),
(7, 58),
(7, 59),
(7, 63),
(7, 103),
(7, 155),
(8, 12),
(8, 13),
(8, 14),
(9, 15),
(9, 74),
(9, 76),
(10, 16),
(10, 17),
(10, 74),
(10, 75),
(10, 76),
(10, 77),
(10, 86),
(10, 87),
(10, 88),
(10, 89),
(10, 90),
(10, 91),
(10, 92),
(10, 93),
(11, 18),
(12, 19),
(12, 111),
(12, 148),
(12, 151),
(12, 154),
(12, 162),
(13, 19),
(13, 20),
(13, 21),
(13, 28),
(13, 32),
(13, 53),
(13, 55),
(13, 123),
(13, 124),
(13, 125),
(13, 138),
(13, 144),
(14, 23),
(14, 83),
(15, 24),
(16, 22),
(16, 31),
(16, 32),
(16, 33),
(16, 34),
(16, 35),
(16, 36),
(16, 37),
(16, 38),
(16, 39),
(16, 40),
(16, 41),
(16, 43),
(16, 46),
(16, 47),
(16, 48),
(16, 49),
(16, 50),
(16, 51),
(16, 52),
(16, 53),
(16, 54),
(16, 105),
(16, 127),
(16, 128),
(16, 129),
(16, 130),
(16, 131),
(16, 132),
(16, 133),
(16, 134),
(16, 135),
(16, 136),
(16, 137),
(16, 138),
(16, 139),
(16, 140),
(16, 141),
(16, 142),
(16, 143),
(16, 144),
(16, 145),
(17, 25),
(17, 26),
(17, 27),
(17, 126),
(18, 65),
(18, 115),
(18, 116),
(18, 117),
(18, 118),
(18, 119),
(18, 120),
(18, 160),
(18, 161),
(19, 56),
(19, 62),
(19, 103),
(20, 60),
(21, 61),
(22, 54),
(23, 64),
(23, 66),
(23, 67),
(23, 106),
(24, 66),
(25, 68),
(26, 70),
(26, 108),
(26, 109),
(26, 110),
(27, 71),
(27, 72),
(27, 146),
(28, 71),
(28, 72),
(29, 73),
(30, 75),
(30, 101),
(30, 102),
(31, 69),
(31, 113),
(32, 78),
(33, 79),
(33, 153),
(34, 80),
(34, 81),
(34, 82),
(35, 84),
(36, 85),
(37, 85),
(38, 90),
(39, 104),
(40, 107),
(41, 104),
(42, 112),
(43, 111),
(44, 114),
(45, 111),
(46, 147),
(46, 148),
(46, 149),
(46, 150),
(46, 151),
(46, 152),
(46, 153),
(46, 154),
(47, 159),
(48, 156),
(49, 125),
(50, 155),
(51, 157),
(52, 10),
(53, 28),
(53, 29),
(53, 30),
(53, 42),
(53, 44),
(53, 45);

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `szemely`
--

CREATE TABLE `szemely` (
  `az` int(11) NOT NULL,
  `nev` varchar(100) COLLATE utf8_hungarian_ci NOT NULL,
  `ev` int(11) NOT NULL,
  `elozo` varchar(100) COLLATE utf8_hungarian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- A tábla adatainak kiíratása `szemely`
--

INSERT INTO `szemely` (`az`, `nev`, `ev`, `elozo`) VALUES
(1, 'Deák Krisztina', 2007, 'Balázs Béla-díjas'),
(2, 'Forgács Péter', 2007, 'Balázs Béla-díjas'),
(3, 'Gulyás Gyula', 2013, 'Balázs Béla-díjas'),
(4, 'Gulyás János Péter', 2013, 'Balázs Béla-díjas'),
(5, 'Kisfaludy András', 2013, 'Balázs Béla-díjas'),
(6, 'Kerekes Gábor', 2009, 'Balázs Béla-díjas'),
(7, 'Medvigy Gábor', 2009, 'Balázs Béla-díjas'),
(8, 'Baricz Katalin', 2007, 'Balogh Rudolf-díjas'),
(9, 'Szilágyi Lenke', 2008, 'Balogh Rudolf-díjas'),
(10, 'Csomay Zsófia', 2008, 'Ybl Miklós-díjas'),
(11, 'Selmeczi György', 2012, 'Erkel Ferenc-díjas'),
(12, 'Hauser Beáta', 2011, 'Ferenczy Noémi-díjas'),
(13, 'Kókay Krisztina', 2007, 'Ferenczy Noémi-díjas'),
(14, 'Rónai Éva', 2012, 'Ferenczy Noémi-díjas'),
(15, 'Sárkány Győző', 2012, 'Ferenczy Noémi-díjas'),
(16, 'Gáyor Tibor', 2009, ''),
(17, 'Gyémánt László', 2009, ''),
(18, 'Barta Dóra', 2007, 'Harangozó Gyula-díjas'),
(19, 'Goda Gábor', 2008, 'Harangozó Gyula-díjas'),
(20, 'Kalmár Tibor', 2007, 'Jászai Mari-díjas'),
(21, 'Mohácsi János', 2008, 'Jászai Mari-díjas'),
(22, 'Bajcsay Mária', 2013, 'Jászai Mari-díjas'),
(23, 'Kentaur (Erkel László)', 2013, 'Jászai Mari-díjas'),
(24, 'Tordai Hajnal', 2012, 'Jászai Mari-díjas'),
(25, 'Császár Angéla', 2011, 'Jászai Mari-díjas'),
(26, 'Gyöngyössy Katalin', 2011, 'Jászai Mari-díjas'),
(27, 'Ráckevei Anna', 2011, 'Jászai Mari-díjas'),
(28, 'Mácsai Pál', 2008, 'Jászai Mari-díjas'),
(29, 'Bogdán Zsolt', 2012, 'Jászai Mari-díjas'),
(30, 'Csikos Sándor', 2012, 'Jászai Mari-díjas'),
(31, 'Csuja Imre', 2010, 'Jászai Mari-díjas'),
(32, 'Csurka László', 2013, 'Jászai Mari-díjas'),
(33, 'Fekete Ernő', 2010, 'Jászai Mari-díjas'),
(34, 'Harsányi Gábor', 2011, 'Jászai Mari-díjas'),
(35, 'Hirtling István', 2012, 'Jászai Mari-díjas'),
(36, 'Kerekes Éva', 2009, 'Jászai Mari-díjas'),
(37, 'Körtvélyessy Zsolt', 2013, 'Jászai Mari-díjas'),
(38, 'Lorán Lenke', 2010, 'Jászai Mari-díjas'),
(39, 'Meszléry Judit', 2013, 'Jászai Mari-díjas'),
(40, 'Mihályi Győző', 2007, 'Jászai Mari-díjas'),
(41, 'Nagy Anna', 2013, 'Jászai Mari-díjas'),
(42, 'Nemcsák Károly', 2012, 'Jászai Mari-díjas'),
(43, 'Sunyovszky Szilvia', 2013, 'Jászai Mari-díjas'),
(44, 'Szarvas József', 2012, 'Jászai Mari-díjas'),
(45, 'Szervét Tibor', 2010, 'Jászai Mari-díjas'),
(46, 'Szűcs Nelli', 2013, 'Jászai Mari-díjas'),
(47, 'Takács Katalin', 2008, 'Jászai Mari-díjas'),
(48, 'Tordai Teri', 2012, 'Jászai Mari-díjas'),
(49, 'Tóth Ildikó', 2009, 'Jászai Mari-díjas'),
(50, 'Trill Zsolt', 2012, 'Jászai Mari-díjas'),
(51, 'Venczel Vera', 2010, 'Jászai Mari-díjas'),
(52, 'Voith Ági', 2013, 'Jászai Mari-díjas'),
(53, 'Korcsmáros György', 2010, 'Jászai Mari-díjas'),
(54, 'Kalocsai Zsuzsa', 2008, 'Jászai Mari-díjas'),
(55, 'Halasi Imre', 2010, 'Jászai Mari-díjas'),
(56, 'Keller András', 2012, 'Liszt Ferenc-díjas'),
(57, 'Gál Tamás', 2008, 'Liszt Ferenc-díjas'),
(58, 'Kesselyák Gergely', 2012, 'Liszt Ferenc-díjas'),
(59, 'Kovács László', 2007, 'Liszt Ferenc-díjas'),
(60, 'Dresch Mihály', 2011, 'Liszt Ferenc-díjas'),
(61, 'Geiger György', 2000, 'Liszt Ferenc-díjas'),
(62, 'Szecsődi Ferenc', 2009, 'Liszt Ferenc-díjas'),
(63, 'Erdei Péter', 2010, 'Liszt Ferenc-díjas'),
(64, 'Thész Gabriella', 2010, 'Liszt Ferenc-díjas'),
(65, 'Pitti Katalin', 2011, 'Liszt Ferenc-díjas'),
(66, 'Virágh András', 2012, 'Liszt Ferenc-díjas'),
(67, 'Tillai Aurél Ede', 2013, 'Liszt Ferenc-díjas'),
(68, 'László Attila', 2010, 'Liszt Ferenc-díjas'),
(69, 'Bazsinka Zsuzsanna', 2009, ''),
(70, 'Galántai György', 2007, 'Munkácsy Mihály-díjas'),
(71, 'Györfi Sándor', 2013, 'Munkácsy Mihály-díjas'),
(72, 'Lugossy Mária', 2012, 'Munkácsy Mihály-díjas'),
(73, 'Molnár Kálmán', 2013, 'Munkácsy Mihály-díjas'),
(74, 'Stefanovits Péter', 2011, 'Munkácsy Mihály-díjas'),
(75, 'Roskó Gábor', 2008, 'Munkácsy Mihály-díjas'),
(76, 'Haász István', 2010, 'Munkácsy Mihály-díjas'),
(77, 'Szikora Tamás', 2010, 'Munkácsy Mihály-díjas'),
(78, 'Jávori Ferenc', 2009, ''),
(79, 'id. Nagy Zoltán', 2003, ''),
(80, 'Kiss János', 2005, ''),
(81, 'Popova Aleszja', 2003, ''),
(82, 'Solymosi Tamás', 2006, ''),
(83, 'Both András', 2011, ''),
(84, 'Radnóti Zsuzsa', 2003, ''),
(85, 'Szegő György', 2002, ''),
(86, 'Ef Zámbó István', 2000, ''),
(87, 'Földi Péter', 2001, ''),
(88, 'Kárpáti Tamás', 2000, ''),
(89, 'Kisléghi Nagy Ádám', 2011, ''),
(90, 'Pál Lajos', 2002, ''),
(91, 'Pinczehelyi Sándor', 2004, ''),
(92, 'Ujházi Péter', 2004, ''),
(93, 'Záborszky Gábor', 2006, ''),
(94, 'Almási Tamás', 2005, ''),
(95, 'Enyedi Ildikó', 2000, ''),
(96, 'Janisch Attila', 2006, ''),
(97, 'Molnár György', 2003, ''),
(98, 'Szász János', 2001, ''),
(99, 'Benkő Imre', 2004, ''),
(100, 'Szebeni András', 2006, ''),
(101, 'Banga Ferenc', 2003, ''),
(102, 'Orosz István', 2005, ''),
(103, 'Ligeti András', 2002, ''),
(104, 'Fábry Sándor', 2002, ''),
(105, 'Szombathy Gyula', 2009, 'Jászai Mari-díjas'),
(106, 'Párkai István', 2001, ''),
(107, 'Péreli Zsuzsa', 2002, ''),
(108, 'Kovács Péter', 2000, ''),
(109, 'Lovas Ilona', 2005, ''),
(110, 'Türk Péter', 2010, ''),
(111, 'Roboz Ágnes', 2008, ''),
(112, 'L. Kecskés András', 2011, ''),
(113, 'Frankó Tünde', 2006, ''),
(114, 'Végh Krisztina', 2001, ''),
(115, 'Bándi János', 2010, ''),
(116, 'Berkes János', 2007, ''),
(117, 'Kertesi Ingrid', 2001, ''),
(118, 'Lukács Gyöngyi', 2003, ''),
(119, 'Sümegi Eszter', 2010, ''),
(120, 'Kovalik Balázs', 2000, ''),
(121, 'Máthé Tibor', 2001, ''),
(122, 'Zádori Ferenc', 2004, ''),
(123, 'Málnay Levente', 2005, ''),
(124, 'Meczner János', 2005, ''),
(125, 'Tompa Gábor', 2002, ''),
(126, 'Szirtes Ági', 2000, ''),
(127, 'Bács Ferenc', 2001, ''),
(128, 'Beregi Péter', 2010, ''),
(129, 'Börcsök Enikő', 2005, ''),
(130, 'Bubik István', 2000, ''),
(131, 'Csűrös Karola', 2006, ''),
(132, 'Dózsa László', 2011, ''),
(133, 'Gálffi László', 2003, ''),
(134, 'Heller Tamás', 2006, ''),
(135, 'Kállai Bori', 2004, ''),
(136, 'Kovács Lajos', 2004, ''),
(137, 'Kubik Anna', 2002, ''),
(138, 'Máté Gábor', 2003, ''),
(139, 'Nagy-Kálózy Eszter', 2000, ''),
(140, 'Oszvald Marika', 2002, ''),
(141, 'Pap Vera', 2001, ''),
(142, 'Pásztor Erzsi', 2006, ''),
(143, 'Piros Ildikó', 2003, ''),
(144, 'Senkálszky Endre', 2011, ''),
(145, 'Szacsvay László', 2001, ''),
(146, 'Gaál Tamás', 2006, ''),
(147, 'Bozsik Yvette', 2001, ''),
(148, 'Juronics Tamás', 2005, ''),
(149, 'Ladányi Andrea', 2004, ''),
(150, 'Medveczky Ilona', 2004, ''),
(151, 'Nagy József', 2011, ''),
(152, 'Román Sándor', 2006, ''),
(153, 'Zarnóczai Gizella', 2002, ''),
(154, 'Zsuráfszky Zoltán', 2002, ''),
(155, 'Makláry László', 2005, ''),
(156, 'Dés László', 2003, ''),
(157, 'Kathy-Horváth Lajos', 2011, ''),
(158, 'Sáry László', 2000, ''),
(159, 'Szakcsi Lakatos Béla', 2002, ''),
(160, 'Bátori Éva', 2005, ''),
(161, 'Fokanov Anatolij', 2004, ''),
(162, 'Harangozó Gyula', 2004, '');

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `foglalkozas`
--
ALTER TABLE `foglalkozas`
  ADD PRIMARY KEY (`az`);

--
-- A tábla indexei `szemely`
--
ALTER TABLE `szemely`
  ADD PRIMARY KEY (`az`);

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `foglalkozas`
--
ALTER TABLE `foglalkozas`
  MODIFY `az` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
--
-- AUTO_INCREMENT a táblához `szemely`
--
ALTER TABLE `szemely`
  MODIFY `az` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=163;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
