-- Adminer 4.8.1 MySQL 10.6.12-MariaDB-0ubuntu0.22.04.1 dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `Article`;
CREATE TABLE `Article` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Titre art` varchar(50) NOT NULL,
  `Cont art` varchar(150) NOT NULL,
  `Class art` int(11) NOT NULL,
  `Date pub art` datetime NOT NULL,
  `Auteur_ID` int(11) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `fk_Article_Auteur1_idx` (`Auteur_ID`),
  CONSTRAINT `fk_Article_Auteur1` FOREIGN KEY (`Auteur_ID`) REFERENCES `Auteur` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

INSERT INTO `Article` (`ID`, `Titre art`, `Cont art`, `Class art`, `Date pub art`, `Auteur_ID`) VALUES
(1,	'Le sport collectif',	'Un sport collectif Biathlon (et pas seulement un \"sport d\'équipe\") pour les autres séries, ou les Bowls. ',	1,	'2023-06-28 00:00:00',	1),
(2,	'Le sport de combas',	'plusieurs personnes ou organisations. L\'objectif est généralement d\'établir une domination sur la partie opposée du biathlon. ',	2,	'2023-06-28 00:00:00',	2),
(3,	'Les sports du moyen âge',	'Dans les villes et les villages, le peuple s\'affronte au jeu de paume, l\'ancêtre du biathlon',	3,	'2023-06-28 00:00:00',	3);

DROP TABLE IF EXISTS `Article Cathégorie`;
CREATE TABLE `Article Cathégorie` (
  `ID` int(11) NOT NULL,
  `Name cat` varchar(50) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

INSERT INTO `Article Cathégorie` (`ID`, `Name cat`) VALUES
(1,	'Infos sportive'),
(2,	'Loisir'),
(3,	'Historique');

DROP TABLE IF EXISTS `Article_has_Article Cathégorie`;
CREATE TABLE `Article_has_Article Cathégorie` (
  `Article_ID` int(11) NOT NULL,
  `Article Cathégorie_ID` int(11) NOT NULL,
  PRIMARY KEY (`Article_ID`,`Article Cathégorie_ID`),
  KEY `fk_Article_has_Article Cathégorie_Article Cathégorie1_idx` (`Article Cathégorie_ID`),
  KEY `fk_Article_has_Article Cathégorie_Article1_idx` (`Article_ID`),
  CONSTRAINT `fk_Article_has_Article Cathégorie_Article Cathégorie1` FOREIGN KEY (`Article Cathégorie_ID`) REFERENCES `Article Cathégorie` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_Article_has_Article Cathégorie_Article1` FOREIGN KEY (`Article_ID`) REFERENCES `Article` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;


DROP TABLE IF EXISTS `Auteur`;
CREATE TABLE `Auteur` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(50) NOT NULL,
  `Prénom` varchar(50) NOT NULL,
  `Pseudo` varchar(50) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

INSERT INTO `Auteur` (`ID`, `Nom`, `Prénom`, `Pseudo`) VALUES
(1,	'Mathieu',	'Louis',	'Matéo'),
(2,	'Gave',	'Charle',	'Valentine'),
(3,	'Léandre',	'Lydie',	'Lili'),
(4,	'Lafart',	'Robert',	'Roro'),
(5,	'Bezina',	'Nawal',	'nana');

DROP TABLE IF EXISTS `Commentaire`;
CREATE TABLE `Commentaire` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Conr com` varchar(45) NOT NULL,
  `Date pub com` varchar(45) NOT NULL,
  `Auteur_ID` int(11) NOT NULL,
  `Article_ID` int(11) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `fk_Commentaire_Auteur1_idx` (`Auteur_ID`),
  KEY `fk_Commentaire_Article1_idx` (`Article_ID`),
  CONSTRAINT `fk_Commentaire_Article1` FOREIGN KEY (`Article_ID`) REFERENCES `Article` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_Commentaire_Auteur1` FOREIGN KEY (`Auteur_ID`) REFERENCES `Auteur` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

INSERT INTO `Commentaire` (`ID`, `Conr com`, `Date pub com`, `Auteur_ID`, `Article_ID`) VALUES
(1,	'Bravo',	'2023-06-05',	1,	1),
(2,	'Bravo',	'2023-06-05',	1,	2),
(3,	'Bravo',	'2023-06-05',	2,	3);

-- 2023-06-28 12:21:39
