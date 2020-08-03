-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2019. Ápr 09. 14:00
-- Kiszolgáló verziója: 10.1.30-MariaDB
-- PHP verzió: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `etterem`
--
CREATE DATABASE IF NOT EXISTS `etterem` DEFAULT CHARACTER SET utf8 COLLATE utf8_hungarian_ci;
USE `etterem`;

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `allapot`
--

CREATE TABLE `allapot` (
  `id` int(11) NOT NULL,
  `allapot` varchar(32) COLLATE utf8_hungarian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `kategoriak`
--

CREATE TABLE `kategoriak` (
  `id` int(11) NOT NULL,
  `kategoria` varchar(64) COLLATE utf8_hungarian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- A tábla adatainak kiíratása `kategoriak`
--

INSERT INTO `kategoriak` (`id`, `kategoria`) VALUES
(1, 'pizzák'),
(2, 'levesek'),
(3, 'halételek'),
(4, 'saláták'),
(5, 'desszertek'),
(6, 'sültek'),
(7, 'főzelék');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `meret`
--

CREATE TABLE `meret` (
  `id` int(11) NOT NULL,
  `meret` varchar(10) COLLATE utf8_hungarian_ci NOT NULL,
  `szorzo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `rendeles`
--

CREATE TABLE `rendeles` (
  `id` int(11) NOT NULL,
  `vid` int(11) NOT NULL,
  `aid` int(11) NOT NULL,
  `datum` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `termekek`
--

CREATE TABLE `termekek` (
  `id` int(11) NOT NULL,
  `nev` varchar(128) COLLATE utf8_hungarian_ci NOT NULL,
  `leiras` varchar(255) COLLATE utf8_hungarian_ci NOT NULL,
  `ar` int(11) NOT NULL,
  `kid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- A tábla adatainak kiíratása `termekek`
--

INSERT INTO `termekek` (`id`, `nev`, `leiras`, `ar`, `kid`) VALUES
(1, 'csontleves', 'cérnametélt', 800, 2),
(2, 'Paradicsomleves', 'Betűtésztával, húsgombóccal.', 400, 2),
(3, 'Pukkantós', 'Hagymás babos pizza, paradicsomos alappal, kolbásszal, kukoricával. Igazi ínyencség', 1200, 1),
(6, 'Pizza', 'Sajtos, sonkás, kukoricás, paradicsomos alappal.', 1000, 1),
(7, 'Steak', 'Félig átsülve.', 3000, 6),
(8, 'Oldalas', '(GD kedvence) Frissen vágott,ízletes pácban forgatott, sörrel leöntött, ízletes finomság', 1500, 6),
(9, 'Argentin Hekk sörtésztában', 'Prémium, gourmet alapanyagokból, rizs körettel', 1790, 3),
(10, 'Pörkölt', 'Jó húsos fini \r\npé\r\nksü\r\nti', 420, 7),
(11, 'Karamellás sültalma', 'Karamellában sült alma csokiba mártva', 1999, 5),
(12, 'Jó finom kalács', 'kóbászos csoda, nagyon fina kalya', 99, 2),
(13, 'Szódabikbakbóna', 'Csebabcsicsa', 2000, 5),
(14, 'fetás, lazacos palacsinta', 'A tejföl krémhez a tejfölt sózzuk, borsozzuk. A tejszínt habbá verjük. Beleforgatjuk a tejszínbe.', 3260, 3),
(15, 'Zumbakirály', '2kg hús, Győzike módra', 4000, 6),
(17, 'Rántott sertésborda', 'Fincsi, laktató', 1100, 6),
(21, 'Tejszínes-ananászos csirkemell', 'Megszórjuk egy kevés gyömbérrel, fahéjjal és a 2 kanál liszttel, gyorsan elkeverjük, majd ráöntjük a tejszínt. A tejföl t ízlés szerint kikeverjük a tejjel, hozzáöntjük a húshoz, végül pár perc alatt készre főzzük.', 2900, 6),
(22, 'Zsírszegény cézár saláta', '0,1%-os natúr joghurttal, jégsalátával, paradicsommal, teljes kiőrlésű kenyérdarabokkal, zabpehelyben meghentergetett csirkemellel', 2500, 4),
(23, 'Halászlé', 'halászlé, szigorúan tészta nélkül', 5000, 3),
(25, 'Trópusi palacsinta', 'Gyümölcsös palacsinta.\r\nA kész csokiöntetet a félretett tejjel higítjuk, és megmelegítjük. A palacsintára locsoljuk és meghintjük kókuszreszelékkel.', 1100, 5),
(26, 'pince pöri', 'Németh Sziszi módra', 1, 2),
(27, 'Tárkonyos raguleves', 'leveske\r\nnagyon fina', 950, 2),
(29, 'parajfőzelék', 'Kirsch módra', 0, 7),
(30, 'Brokkolisaláta', 'Egy egész fej brokkoli, barna cukor, majonéz, pirított bacon, reszelt sajt', 1400, 4),
(31, 'BBQ csirkés', 'paradicsomszósz, vöröshagyma, csirke husi, sajt, olíva, pritaminpaprika, bazsalikom, BBQ-szósz', 1680, 1),
(32, 'Krémes', 'házi', 500, 6),
(33, 'Currys karfiolsaláta', 'Finom, prémium karfiolsaláta', 1260, 4),
(34, 'Buffalo csirkés', 'pikáns par.alap,csirke husi,kéksajt, kaliforniai paprika,lilahagyma,sajt', 1690, 1),
(35, 'Csokis máklepény', 'lekvárral töltött mákos-csokis sütemény', 490, 5),
(36, 'Bartosista Tojásrántotta', 'Bartos Cs István módra elkészített tojás rántotta.\r\nÖsszetevők : Tojás, Föld,Fű,Faág,Bartos 1000jó', 1000, 5),
(37, 'JQuery leves', '$(\'.testClass\').on(\'paste\', function (e) {\r\n    var id = $(this);\r\n    var temp;\r\n    clearTimeout(temp);\r\n    temp = setTimeout(function() { \r\n       $(id).keyup();\r\n    }, 200);\r\n});', 20000, 2),
(38, 'kicsi adag szeretet', 'just for you\r\nmamátó nöked', 3916, 6);

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `tetelek`
--

CREATE TABLE `tetelek` (
  `rid` int(11) NOT NULL,
  `tid` int(11) NOT NULL,
  `mid` int(11) NOT NULL,
  `db` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `vevo`
--

CREATE TABLE `vevo` (
  `id` int(11) NOT NULL,
  `felhasznalonev` varchar(128) COLLATE utf8_hungarian_ci NOT NULL,
  `jelszo` varchar(255) COLLATE utf8_hungarian_ci NOT NULL,
  `telefonszam` int(11) NOT NULL,
  `lakcim` varchar(128) COLLATE utf8_hungarian_ci NOT NULL,
  `email` varchar(128) COLLATE utf8_hungarian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `allapot`
--
ALTER TABLE `allapot`
  ADD PRIMARY KEY (`id`);

--
-- A tábla indexei `kategoriak`
--
ALTER TABLE `kategoriak`
  ADD PRIMARY KEY (`id`);

--
-- A tábla indexei `meret`
--
ALTER TABLE `meret`
  ADD PRIMARY KEY (`id`);

--
-- A tábla indexei `rendeles`
--
ALTER TABLE `rendeles`
  ADD PRIMARY KEY (`id`);

--
-- A tábla indexei `termekek`
--
ALTER TABLE `termekek`
  ADD PRIMARY KEY (`id`);

--
-- A tábla indexei `vevo`
--
ALTER TABLE `vevo`
  ADD PRIMARY KEY (`id`);

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `allapot`
--
ALTER TABLE `allapot`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT a táblához `kategoriak`
--
ALTER TABLE `kategoriak`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT a táblához `meret`
--
ALTER TABLE `meret`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT a táblához `rendeles`
--
ALTER TABLE `rendeles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT a táblához `termekek`
--
ALTER TABLE `termekek`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT a táblához `vevo`
--
ALTER TABLE `vevo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
