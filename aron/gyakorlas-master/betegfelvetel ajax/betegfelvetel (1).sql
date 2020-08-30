-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2020. Ápr 10. 22:08
-- Kiszolgáló verziója: 10.4.11-MariaDB
-- PHP verzió: 7.4.1

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
CREATE DATABASE IF NOT EXISTS `betegfelvetel` DEFAULT CHARACTER SET utf8 COLLATE utf8_hungarian_ci;
USE `betegfelvetel`;

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `beteg`
--

CREATE TABLE `beteg` (
  `id` int(11) NOT NULL,
  `szallitoazon` int(11) NOT NULL,
  `nev` varchar(255) COLLATE utf8_hungarian_ci NOT NULL,
  `taj-szam` varchar(255) COLLATE utf8_hungarian_ci NOT NULL,
  `vercsoport` varchar(255) COLLATE utf8_hungarian_ci NOT NULL,
  `eletkor` int(11) NOT NULL,
  `nem` varchar(255) COLLATE utf8_hungarian_ci NOT NULL,
  `lakcim` varchar(255) COLLATE utf8_hungarian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

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

CREATE TABLE `betegszallito` (
  `id` int(11) NOT NULL,
  `nev` varchar(50) COLLATE utf8_hungarian_ci NOT NULL,
  `illetekes` varchar(30) COLLATE utf8_hungarian_ci NOT NULL,
  `ar` int(11) NOT NULL,
  `varos` varchar(30) COLLATE utf8_hungarian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- A tábla adatainak kiíratása `betegszallito`
--

INSERT INTO `betegszallito` (`id`, `nev`, `illetekes`, `ar`, `varos`) VALUES
(1, 'Physicians Total Care, Inc.', 'Kearney McCollum', 44806, 'Krasnaya Gorka'),
(2, 'Best Choice', 'Emylee Shipley', 20464, 'Al Qaryatayn'),
(3, 'KAISER FOUNDATION HOSPITALS', 'Braden Pratchett', 35479, 'Pesochnoye'),
(4, 'Allergy Laboratories, Inc.', 'Caryl Gallyhaock', 44978, 'Кондово'),
(5, 'State of Florida DOH Central Pharmacy', 'Emylee Thom', 25817, 'Novalja'),
(6, 'Clinical Solutions Wholesale', 'Michaella Woollacott', 25632, 'Viana do Castelo'),
(7, 'Shionogi Inc.', 'Cross Corbie', 41759, 'Staffanstorp'),
(8, 'VIATREXX BIO INCORPORATED', 'Goldie Leser', 19054, 'Dakoro'),
(9, 'ALK-Abello, Inc.', 'Teodoro Berrington', 24224, 'Polonne'),
(10, 'West-ward Pharmaceutical Corp.', 'Merill Allright', 10384, 'Karátoulas'),
(11, 'CHAIN DRUG MARKETING ASSOCIATION INC', 'Christie Cato', 39740, 'Gosë e Madhe'),
(12, 'AMO Hangzhou Co., LTD', 'Gwyneth Markwelley', 24781, 'Huiwan'),
(13, 'Perrigo New York Inc', 'Winn Tyrer', 34801, 'Ottawa'),
(14, 'A-S Medication Solutions LLC', 'Jo ann Truss', 18665, 'Jiukou'),
(15, 'Strides Arcolab Limited', 'Felicio Littlecote', 33808, 'Zhengdun'),
(16, 'Taylor James LTD', 'Ambrosius Sumsion', 43073, 'Viradouro'),
(17, 'PD-Rx Pharmaceuticals, Inc.', 'Chelsie Hagston', 11522, 'Mỏ Cày'),
(18, 'Ranbaxy Pharmaceuticals Inc.', 'Laura Oulett', 15886, 'Lengshuitan'),
(19, 'MedVantx, Inc.', 'Carlyn Tarpey', 37024, 'Kachar'),
(20, 'Boots Retail USA Inc', 'Lionel Pappi', 20625, 'Lila'),
(21, 'Cardinal Health', 'Hastings Dearl', 15766, 'Jimeta'),
(22, 'Ranbaxy Pharmaceuticals Inc.', 'Guglielmo Lydon', 41720, 'Chão de Couce'),
(23, 'Unit Dose Services', 'Cordelie Duffill', 36128, 'Sungaipuntik'),
(24, 'Newton Laboratories, Inc.', 'Kelsey Rantoull', 35613, 'Lộc Bình'),
(25, 'Epic Pharma, LLC', 'Bernie Chaudhry', 32871, 'Carpenter'),
(26, 'St Marys Medical Park Pharmacy', 'Harri Potten', 41234, 'Mosina'),
(27, 'Richmond Division of Wyeth', 'Chase Gorke', 46428, 'Arklow'),
(28, 'Kroger Company', 'Corbet Brosnan', 46031, 'Netishyn'),
(29, 'Costco Wholesale Company', 'Cris Sivess', 44219, 'Batu'),
(30, 'Cardinal Health', 'Errick Junkison', 38750, 'Huasahuasi'),
(31, 'Blue Water Industrial Products, Inc.', 'Hannah Bellino', 29638, 'Maubara'),
(32, 'Conopco Inc. d/b/a Unilever', 'Elle Mouatt', 11615, 'Xiema'),
(33, 'Barr Laboratories Inc.', 'Martina Treece', 21536, 'Almodôvar'),
(34, 'McKesson Contract Packaging', 'Trix Scini', 37483, 'Gempol'),
(35, 'G.S. COSMECEUTICAL USA, INC.', 'Gianina Bootes', 19548, 'Knivsta'),
(36, 'AMAROS CO., LTD.', 'Natal Barhem', 26898, 'Maglajani'),
(37, 'Mikart, Inc.', 'Justin Scurr', 32648, 'Chaloem Phra Kiat'),
(38, 'Babor Cosmetics America, Corp', 'Patty Mowsdill', 15943, 'Taremskoye'),
(39, 'Cardinal Health', 'Debi Philippart', 19475, 'Aleshtar'),
(40, 'Amneal Pharmaceuticals', 'Evan Labon', 29400, 'Sylhet'),
(41, 'Kosan Kozmetik Sanayi ve Ticaret A.S.', 'Phillip Brook', 25144, 'Tabou'),
(42, 'Qualitest Pharmaceuticals', 'Koressa Connah', 13603, 'Himeji'),
(43, 'Pfizer Consumer Healthcare', 'Elfreda Hacquard', 24008, 'Bezlyudivka'),
(44, 'Barr Laboratories Inc.', 'Virge Parriss', 18850, 'Yantianhe'),
(45, 'Premier Value', 'Zerk Giles', 43360, 'Tbilisskaya'),
(46, 'Dyad Medical Sourcing, LLC', 'Arnuad Arrandale', 33505, 'Caluya'),
(47, 'Nelco Laboratories, Inc.', 'Stacie Williams', 10956, 'Havířov'),
(48, 'L\'Oreal USA Products Inc', 'Hadley Marchent', 22141, 'Chumen'),
(49, 'Physicians Total Care, Inc.', 'Augustine Purkess', 20333, 'Kubang'),
(50, 'Rising Pharmaceuticals, Inc', 'Isiahi Standrin', 24320, 'Hola Prystan’'),
(51, 'Formulated Solutions', 'Simone Roughey', 45572, 'Kompóti'),
(52, 'Aphena Pharma Solutions - Tennessee, LLC', 'Mariette Attock', 39438, 'Batanovtsi'),
(53, 'St Marys Medical Park Pharmacy', 'Kyla Jickells', 30453, 'Jagabaya Dua'),
(54, 'Physicians Total Care, Inc.', 'Cole Pallin', 44418, 'Marquard'),
(55, 'ALK-Abello, Inc.', 'Arnuad Litton', 18242, 'Socorro'),
(56, 'REMEDYREPACK INC.', 'Javier Pepin', 39345, 'Wujing'),
(57, 'West-ward Pharmaceutical Corp', 'Angelico Mesant', 21330, 'Alberton'),
(58, 'The Magni Company', 'Vaclav Hayer', 35130, 'Awilega'),
(59, 'Gambro Renal Products', 'Zorana Whitters', 36461, 'Shchigry'),
(60, 'Medicis Pharmaceutical Corp', 'Eartha Atcheson', 34428, 'Jianshan'),
(61, 'Topco Associates LLC', 'Micah Pettersen', 37612, 'San Pedro'),
(62, 'TRIGEN Laboratories, Inc.', 'Ulberto Aldus', 14174, 'Kebonsari Kidul'),
(63, 'Kosan Kozmetik Sanayi ve Ticaret A.S.', 'Malachi Allot', 35266, 'Planá'),
(64, 'Physicians Total Care, Inc.', 'Stephenie Pineaux', 14710, 'Áyios Nikólaos'),
(65, 'Lake Erie Medical DBA Quality Care Products LLC', 'Collin Fawdrey', 32445, 'Deh-e Now'),
(66, 'Nutri-Dyn Products Ltd. dba Professional Health Pr', 'Cyril Haslam', 44849, 'Kebonkaret'),
(67, 'NCS HealthCare of KY, Inc dba Vangard Labs', 'Nilson Champney', 32806, 'Lerrnanist'),
(68, 'Fred\'s Inc.', 'Marti Riggs', 19748, 'Horodok'),
(69, 'Supervalu Inc.', 'Wes Mum', 29783, 'Punta de Piedra'),
(70, 'The Kroger Co.', 'Emlyn Norcott', 10733, 'Shiniujiang'),
(71, 'Endo Pharmaceuticals', 'Tirrell Holtum', 35894, 'Bang Lamung'),
(72, 'Accord Healthcare Inc.', 'Celinda Barnfield', 30262, 'Prachuap Khiri Khan'),
(73, 'Wockhardt Limited', 'Jeramie Quesne', 19791, 'Weiting'),
(74, 'Akorn, Inc.', 'Marc Evitt', 49901, 'Zaandam'),
(75, 'REMEDYREPACK INC.', 'Bertrando Birtonshaw', 19077, 'Bhairāhawā'),
(76, 'NATURE REPUBLIC CO., LTD.', 'Dennis Tedahl', 30725, 'Örebro'),
(77, 'Chattem, Inc.', 'Mycah Luckin', 34676, 'Ushi'),
(78, 'Breckenridge Pharmaceutical, Inc.', 'Mufi Shearme', 43308, 'Aranas Sur'),
(79, 'Allure Labs, Inc', 'Garfield Aguirrezabal', 15729, 'La Foa'),
(80, 'Carribbean Medical Brokers d.b.a. Specialty Medica', 'Winthrop Strathe', 36762, 'Lawrenceville'),
(81, 'Hospira, Inc.', 'Nada Breinl', 28588, 'Idkū'),
(82, 'Physicians Total Care, Inc.', 'Netty Westell', 48874, 'Nakhon Phanom'),
(83, 'ALK-Abello, Inc.', 'Annamarie O\'Kuddyhy', 16274, 'Charopó'),
(84, 'AstraZeneca Pharmaceuticals LP', 'Sisile Smaling', 30428, 'Lamadelaine'),
(85, 'Cardinal Health', 'Cathi Sangar', 27211, 'Jianzhatan'),
(86, 'Nelco Laboratories, Inc.', 'Stephanie Yalden', 18280, 'Bagadó'),
(87, 'Baxter Healthcare Corporation', 'Goldie Saxton', 10979, 'Itapetinga'),
(88, 'Dr. Reddy\'s Laboratories Limited', 'Trever Ordidge', 32442, 'Arras'),
(89, 'Wockhardt Limited', 'Nikolia Kardos-Stowe', 20066, 'Behbahān'),
(90, 'Antigen Laboratories, Inc.', 'Nicky Gasnell', 43479, 'Sinanju'),
(91, 'MULTALER ET CIE S.A.S.', 'Anitra Barthropp', 19680, 'Kefang'),
(92, 'Roerig', 'Alexandrina Bussy', 15940, 'Kremidivka'),
(93, 'AvKARE, Inc.', 'Sabina Conring', 43195, 'Bagong Pagasa'),
(94, 'Apotheca Company', 'Gerrie Starzaker', 37594, 'Turze Pole'),
(95, 'Physician Therapeutics LLC', 'Lionello Woolis', 20798, 'Buchou'),
(96, 'PHOENIX HEALTHCARE SOLUTIONS, LLC', 'Erv Aylett', 27887, 'Mayong'),
(97, 'Stephen L. LaFrance Pharmacy, Inc.', 'Imogen Martinelli', 33671, 'Beira'),
(98, 'Gremed Manufacturing LLC', 'Glenna Pooke', 16186, 'Jaguarari'),
(99, 'Ulta', 'Enrichetta Sparham', 49919, 'Ōnojō'),
(100, 'Physicians Total Care, Inc.', 'Nita Lendon', 49533, 'Doloon'),
(101, 'Nelco Laboratories, Inc.', 'Uriel Benez', 33299, 'Onan Ganjang Satu'),
(102, 'Exact-Rx, Inc.', 'Leoine Hortop', 10833, 'Xinyan'),
(103, 'Allergy Laboratories, Inc.', 'Allyce Wenderott', 17719, 'Henglan'),
(104, 'WALGREEN CO.', 'Sherline Kidney', 22557, 'Paris 12'),
(105, 'Safecor Health, LLC', 'Yurik Float', 18962, 'Zouila'),
(106, 'PD-Rx Pharmaceuticals, Inc.', 'Mabel Pennycuick', 28909, 'Yelizavetinskaya'),
(107, 'Physicians Total Care, Inc.', 'Gerta Vittery', 40511, 'Springfield'),
(108, 'Ventura Corporation LTD', 'Gib Thebeau', 26637, 'Nanggorak'),
(109, 'State of Florida DOH Central Pharmacy', 'Rivalee McLarty', 20963, 'Sukasirna'),
(110, 'Bio-Pharm, Inc.', 'Blanca Braidwood', 43454, 'Shawan'),
(111, 'Preferred Pharmaceuticals, Inc.', 'Mathian Burnitt', 47267, 'Cirangkong'),
(112, 'Western Family Foods Inc', 'Marthena O\'Grady', 40620, 'Miaoyu'),
(113, 'Mylan Pharmaceuticals Inc.', 'Ardella Mates', 10481, 'Dragomer'),
(114, 'Deb USA, Inc.', 'Norri Gear', 14231, 'Kiili'),
(115, 'Dolgencorp, LLC', 'Terrel McKenny', 38943, 'Huabeitun'),
(116, 'REMEDYREPACK INC.', 'Vic Trett', 15663, 'Dudchany'),
(117, 'Medline Industries, Inc.', 'Domeniga Ruspine', 40906, 'Nizhniye Achaluki'),
(118, 'Aidarex Pharmaceuticals LLC', 'Christiana Antushev', 20661, 'Tempursari Wetan'),
(119, 'Nelco Laboratories, Inc.', 'Gabriele Leinster', 32139, 'Joyabaj'),
(120, 'Cadila Healthcare Limited', 'Marten Alvey', 44126, 'Criciúma'),
(121, 'Sandoz Inc.', 'Gearard McCurry', 18418, 'Xiangfu'),
(122, 'KAISER FOUNDATION HOSPITALS', 'Kerrill Joselson', 49811, 'Huangshapu'),
(123, 'Stat Rx USA', 'Ira Skettles', 44707, 'Qiaolin'),
(124, 'Mylan Pharmaceuticals Inc.', 'Vinnie Todarini', 35892, 'Sypniewo'),
(125, 'Avon Products, Inc.', 'Tucker Treweela', 40118, 'Agiásos'),
(126, 'Professional Disposables International, Inc.', 'Ozzie Iannello', 17560, 'Calilegua'),
(127, 'REMEDYREPACK INC.', 'Vonny Ciciotti', 33893, 'Haylaastay'),
(128, 'Lake Erie Medical DBA Quality Care Products LLC', 'Samson Gozard', 47080, 'Shilovo'),
(129, 'STAT RX USA LLC', 'Marlin Joe', 32123, 'Krajan'),
(130, 'Uriel Pharmacy Inc.', 'Gladi Anmore', 25848, 'El Calvario'),
(131, 'Supervalu Inc', 'Barris Izzard', 15821, 'Tongbang'),
(132, 'Have and Be Co., Ltd.', 'Kris Catteroll', 42522, 'Tracal'),
(133, 'KMART CORPORATION', 'Redford Aaronson', 40568, 'Portobelo'),
(134, 'Nelco Laboratories, Inc.', 'Dari Pilfold', 21494, 'Mindupok'),
(135, 'NARTEX LABORATORIOS HOMEOPATICOS SA DE CV', 'Lay Oakland', 47761, 'RMI Capitol'),
(136, 'Pfizer Laboratories Div Pfizer Inc', 'Malvin Gookey', 22486, 'Barra dos Coqueiros'),
(137, 'Conopco Inc. d/b/a Unilever', 'Jacquetta Huban', 19513, 'Anshan'),
(138, 'Target Corp', 'Nancey Tathacott', 16670, 'Perpignan'),
(139, 'Ventura Corporation (San Juan, P.R)', 'Asa Saban', 49498, 'Kanghe'),
(140, 'Laser Pharmaceuticals LLC', 'Kingsly Tireman', 30337, 'Perivólia'),
(141, 'Dharma Research, inc.', 'Ardyce Poser', 42712, 'Nangong'),
(142, 'Middlesex Gases and Technologies, Inc.', 'Arlina Elcome', 38793, 'Alvide'),
(143, 'Physicians Total Care, Inc.', 'Raphael Burbank', 14650, 'Kohāt'),
(144, 'Sun Pharmaceutical Industries Limited', 'Phaidra Wayte', 21223, 'Jiworejo'),
(145, 'L Perrigo Company', 'Walden Chatwood', 46625, 'Luohe'),
(146, 'HyVee Inc', 'Blake Gilhouley', 14002, 'San Fernando'),
(147, 'G.D. Searle LLC Division of Pfizer Inc', 'Selig Authers', 17911, 'Cincinnati'),
(148, 'Major Pharmaceuticals', 'Olin Render', 35258, 'Xiyuan'),
(149, 'Goldline Laboratories, Inc.', 'Burk Piola', 17106, 'Ciomas'),
(150, 'BJWC (Berkley & Jensen / BJ\'s)', 'Townsend McOrkill', 49070, 'Artur Nogueira'),
(151, 'Teva Parenteral Medicines, Inc.', 'Maridel Kitley', 48263, 'Ninove'),
(152, 'American Health Packaging', 'Donny McGinley', 36224, 'Graz'),
(153, 'Dr. Reddy\'s Laboratories Limited', 'Alla Dickons', 17824, 'Mvuma'),
(154, 'Carver Korea Co.,Ltd', 'Ryun Jozef', 42298, 'Daigo'),
(155, 'Preferred Pharmaceuticals, Inc.', 'Asher Dodshon', 35924, 'Acacías'),
(156, 'Novartis Consumer Health, Inc.', 'Knox Nutting', 38945, 'Getafe'),
(157, 'Bare Escentuals Beauty, Inc.', 'Ulick Jellybrand', 20042, 'Kingisepp'),
(158, 'H.E.B', 'Rosa Gemmill', 32299, 'Oslo'),
(159, 'APP Pharmaceuticals, LLC', 'Sydelle Turpey', 22560, 'Barra dos Coqueiros'),
(160, 'Natural Immunogenics Corp.', 'Felicdad Birtles', 29873, 'Butigui'),
(161, 'Golden State Medical Supply', 'Adan Hailston', 34008, 'Roche Terre'),
(162, 'PD-Rx Pharmaceuticals, Inc.', 'Sheffie Guidera', 23922, 'Sumbergedong'),
(163, 'Matrixx Initiatives, Inc.', 'Nichole Crommett', 28630, 'Cilegong'),
(164, 'Apotex Corp.', 'De witt Lyes', 13687, 'Karangtawar'),
(165, 'Uriel Pharmacy Inc', 'Kennith Antoszewski', 42640, 'Huagai'),
(166, 'Speer Laboratories, LLC', 'Brittaney Zeal', 38928, 'Xiangcunxiang'),
(167, 'Dispensing Solutions, Inc.', 'Trude Searchwell', 45946, 'Toyama-shi'),
(168, 'HEB', 'Hannie Hammell', 48934, 'Guatraché'),
(169, 'Teva Pharmaceuticals USA Inc', 'Gabriel Bedwell', 15794, 'Prelog'),
(170, 'Natural Health Supply', 'Josefina Masic', 44310, 'La Jagua de Ibirico'),
(171, 'Carver Korea Co.,Ltd', 'Annalee Greenshiels', 30365, 'Zheleznogorsk'),
(172, 'SAFEWAY INC.', 'Angelle Zanicchelli', 39223, 'Novotitarovskaya'),
(173, 'Antigen Laboratories, Inc.', 'Cathleen Halesworth', 42265, 'Tegalrejo'),
(174, 'Oceanside Pharmaceuticals', 'Shelley Kunat', 17157, 'São Pedro Gafanhoeira'),
(175, 'UNITHER Manufacturing LLC', 'Patton Croutear', 22965, 'Shuikou'),
(176, 'McKesson Packaging Services Business Unit of McKes', 'Bea Sampson', 13007, 'Penengahan'),
(177, 'Glenmark Generics Inc., USA', 'Alayne Brockhurst', 32830, 'Chenggang'),
(178, 'HOMEOLAB USA INC.', 'Katerine Berceros', 39611, 'Tierralta'),
(179, 'ALK-Abello, Inc.', 'Jeannette Chaimson', 37416, 'Ganting'),
(180, 'Chattem, Inc.', 'Darrell Burchess', 21404, 'Karoya'),
(181, 'Cephalon, Inc.', 'Lela Bernardez', 32830, 'Trollhättan'),
(182, 'Sanum Kehlbeck GmbH & Co. KG', 'Bondy Hummerston', 44508, 'Iradan'),
(183, 'St Marys Medical Park Pharmacy', 'Franzen Harlock', 19423, 'Trilj'),
(184, 'Neutrogena Corporation', 'Gussie Jephcote', 36569, 'Tosontsengel'),
(185, 'Cipla Limited', 'Conni Fossett', 36443, 'Borisovka'),
(186, 'BB17, LLC', 'Steffane Benzi', 28807, 'Paris 15'),
(187, 'Valeant Pharmaceuticals North America LLC', 'Andrea Melding', 31753, 'Richky'),
(188, 'Covis Pharmaceuticals, Inc.', 'Maurise Middlebrook', 40272, 'Cajazeiras'),
(189, 'Guangzhou Jing Xiu Tang Pharmaceutical Company Lim', 'Marj Jeaffreson', 43701, 'Zhemtala'),
(190, 'Meijer Distribution Inc', 'Iolande Blamire', 35943, 'Baclayon'),
(191, 'APP Pharmaceuticals, LLC', 'Nertie MacNamee', 40332, 'Nigríta'),
(192, 'Med-Health Pharma, LLC', 'Clyde Markova', 15884, 'Guyangan'),
(193, 'Bryant Ranch Prepack', 'Kirstin Orthmann', 18020, 'La Virginia'),
(194, 'Novartis Pharmaceuticals Corporation', 'Heinrick Osgordby', 32569, 'Goubangzi'),
(195, 'TGone Remedies Ltd', 'Byrann Redan', 28243, 'Lincuo'),
(196, 'Apotheca Company', 'Christa Peyzer', 48581, 'Fanhu'),
(197, 'Hospira, Inc.', 'Tova Puddin', 43626, 'As Sab‘ Biyār'),
(198, 'Blenheim Pharmacal, Inc.', 'Clim Kline', 26798, 'Jalupang Dua'),
(199, 'Fresenius Kabi USA, LLC', 'Saw Pyffe', 10556, 'San Antonio'),
(200, 'Meijer Distribution Inc', 'Cicily Bernucci', 40917, 'Tukuyu');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8_hungarian_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_hungarian_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_hungarian_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_hungarian_ci NOT NULL,
  `active` tinyint(4) DEFAULT NULL,
  `rights` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- A tábla adatainak kiíratása `user`
--

INSERT INTO `user` (`id`, `email`, `password`, `name`, `address`, `active`, `rights`) VALUES
(1, 'piramis@gmail.com', 'berengar', 'Larsson', '5642 Doboz', NULL, NULL);

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `beteg`
--
ALTER TABLE `beteg`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `taj-szam` (`taj-szam`),
  ADD KEY `szallitoazon` (`szallitoazon`);

--
-- A tábla indexei `betegszallito`
--
ALTER TABLE `betegszallito`
  ADD PRIMARY KEY (`id`);

--
-- A tábla indexei `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `felhasznalonev` (`email`),
  ADD UNIQUE KEY `jelszo` (`password`);

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `beteg`
--
ALTER TABLE `beteg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT a táblához `betegszallito`
--
ALTER TABLE `betegszallito`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=201;

--
-- AUTO_INCREMENT a táblához `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
