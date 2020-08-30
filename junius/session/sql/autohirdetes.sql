CREATE DATABASE IF NOT EXISTS `autohirdetes` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_hungarian_ci;
USE `autohirdetes`;


DROP TABLE IF EXISTS `autok`;
CREATE TABLE IF NOT EXISTS `autok` (
  `rendszam` varchar(7) COLLATE utf8mb4_hungarian_ci NOT NULL,
  `marka` varchar(20) COLLATE utf8mb4_hungarian_ci NOT NULL,
  `modell` varchar(20) COLLATE utf8mb4_hungarian_ci NOT NULL,
  PRIMARY KEY (`rendszam`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_hungarian_ci;


INSERT INTO `autok` (`rendszam`, `marka`, `modell`) VALUES
('ABC-123', 'Volkswagen', 'Polo'),
('DEF-456', 'Volkswagen', 'Golf');


DROP TABLE IF EXISTS `felhasznalok`;
CREATE TABLE IF NOT EXISTS `felhasznalok` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `felhasznalonev` varchar(10) COLLATE utf8mb4_hungarian_ci NOT NULL,
  `jelszo` varchar(10) COLLATE utf8mb4_hungarian_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `felhasznalonev` (`felhasznalonev`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_hungarian_ci;


INSERT INTO `felhasznalok` (`id`, `felhasznalonev`, `jelszo`) VALUES
(1, 'jbence', '12345'),
(2, 'kisbalazs', '12345'),
(6, 'taron', '12345'),
(7, 'marpad', '12345'),
(8, 'bbence', '12345'),
(9, 'ezegynagyo', 'ezegynagyo'),
(10, 'rogjeropgj', 'irjgrpjgro'),
(11, 'nagyonnagy', 'nagyonnagy');
