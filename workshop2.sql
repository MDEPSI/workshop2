-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 12 avr. 2018 à 11:51
-- Version du serveur :  5.7.19
-- Version de PHP :  5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `workshop2`
--

-- --------------------------------------------------------

--
-- Structure de la table `apprenant`
--

DROP TABLE IF EXISTS `apprenant`;
CREATE TABLE IF NOT EXISTS `apprenant` (
  `ID` bigint(4) NOT NULL AUTO_INCREMENT,
  `ID_EQUIPE` bigint(4) DEFAULT NULL,
  `NOM` char(32) DEFAULT NULL,
  `PRENOM` char(32) DEFAULT NULL,
  `LOGIN` char(32) DEFAULT NULL,
  `PASSWORD` char(32) DEFAULT NULL,
  PRIMARY KEY (`ID`),
  KEY `FK_APPRENANT_EQUIPE` (`ID_EQUIPE`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `apprenant`
--

INSERT INTO `apprenant` (`ID`, `ID_EQUIPE`, `NOM`, `PRENOM`, `LOGIN`, `PASSWORD`) VALUES
(3, NULL, 'Allon', 'Levy', 'lallon', 'Lallon'),
(4, NULL, 'Bacard', 'Hugo', 'hbacard', 'Hbacard'),
(5, NULL, 'Dupond', 'Maxime', 'mdupond', 'Mdupond'),
(6, NULL, 'David', 'Lucas', 'ldavid', 'Ldavid'),
(7, NULL, 'Durand', 'Jeremy', 'jdurand', 'Jdurand'),
(8, NULL, 'DLC', 'Henri', 'hdlc', 'Hdlc'),
(9, NULL, 'Faro', 'Jean', 'jfaro', 'Jfaro'),
(10, NULL, 'Tallin', 'Jack', 'jtallin', 'Jtallin'),
(11, NULL, 'Radou', 'Phillipe', 'pradou', 'Pradou'),
(12, NULL, 'Harvey', 'Leon', 'lharvey', 'Lharvey'),
(13, NULL, 'Cassin', 'Zoe', 'zcassin', 'Zcassin'),
(14, NULL, 'Velonne', 'Lucie', 'lvelonne', 'Lvelonne'),
(15, NULL, 'Goubert', 'Armelle', 'agoubert', 'Agoubert'),
(16, NULL, 'Soitef', 'Melissa', 'msoitef', 'Msoitef'),
(22, NULL, 'Geraud', 'Gaston', 'ggeraud', 'Ggeraud'),
(23, NULL, 'Oulla', 'Ange', 'aoulla', 'Aoulla'),
(24, NULL, 'Darou', 'John', 'jdarou', 'Jdarou'),
(25, NULL, 'Olive', 'France', 'folive', 'Folive');

-- --------------------------------------------------------

--
-- Structure de la table `equipe`
--

DROP TABLE IF EXISTS `equipe`;
CREATE TABLE IF NOT EXISTS `equipe` (
  `ID` bigint(4) NOT NULL AUTO_INCREMENT,
  `ID_PROJET` bigint(4) DEFAULT NULL,
  `LIBELLE` char(32) DEFAULT NULL,
  `NBJETONS` bigint(4) DEFAULT NULL,
  PRIMARY KEY (`ID`),
  KEY `FK_EQUIPE_PROJET` (`ID_PROJET`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `intervenant`
--

DROP TABLE IF EXISTS `intervenant`;
CREATE TABLE IF NOT EXISTS `intervenant` (
  `ID` bigint(4) NOT NULL AUTO_INCREMENT,
  `NOM` char(32) DEFAULT NULL,
  `PRENOM` char(32) DEFAULT NULL,
  `LOGIN` char(32) DEFAULT NULL,
  `PASSWORD` char(32) DEFAULT NULL,
  `STATUS` char(32) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `intervenant`
--

INSERT INTO `intervenant` (`ID`, `NOM`, `PRENOM`, `LOGIN`, `PASSWORD`, `STATUS`) VALUES
(6, 'Dujardin', 'Mireille', 'mdujardin', 'Mdujardin', 'Libre'),
(7, 'Dessi', 'Leonie', 'ldessi', 'ldessi', 'Libre'),
(8, 'Duroc', 'John', 'jduroc', 'Jduroc', 'Occupé'),
(9, 'Floche', 'Clark', 'cfloche', 'Cfloche', 'Occupé'),
(10, 'Talou', 'Renan', 'rtalou', 'Rtalou', 'Libre'),
(11, 'David', 'Lucas', 'ldavid', 'Ldavid', 'Occupé');

-- --------------------------------------------------------

--
-- Structure de la table `projet`
--

DROP TABLE IF EXISTS `projet`;
CREATE TABLE IF NOT EXISTS `projet` (
  `ID` bigint(4) NOT NULL AUTO_INCREMENT,
  `ID_RESPONSABLE` bigint(4) NOT NULL,
  `LIBELLE` char(32) DEFAULT NULL,
  `NBJETONS` bigint(4) DEFAULT NULL,
  PRIMARY KEY (`ID`),
  KEY `FK_PROJET_RESPONSABLE` (`ID_RESPONSABLE`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `projet`
--

INSERT INTO `projet` (`ID`, `ID_RESPONSABLE`, `LIBELLE`, `NBJETONS`) VALUES
(6, 4, 'Projet Reseau', 15),
(7, 4, 'Projet Web', 10),
(8, 5, 'Projet Java', 10);

-- --------------------------------------------------------

--
-- Structure de la table `projet_intervenant`
--

DROP TABLE IF EXISTS `projet_intervenant`;
CREATE TABLE IF NOT EXISTS `projet_intervenant` (
  `ID` bigint(4) NOT NULL,
  `ID_1` bigint(4) NOT NULL,
  PRIMARY KEY (`ID`,`ID_1`),
  KEY `FK_PROJET_INTERVENANT_INTERVENANT` (`ID_1`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `projet_intervenant`
--

INSERT INTO `projet_intervenant` (`ID`, `ID_1`) VALUES
(6, 8),
(6, 9),
(7, 10),
(8, 11);

-- --------------------------------------------------------

--
-- Structure de la table `responsable`
--

DROP TABLE IF EXISTS `responsable`;
CREATE TABLE IF NOT EXISTS `responsable` (
  `ID` bigint(4) NOT NULL AUTO_INCREMENT,
  `NOM` char(32) DEFAULT NULL,
  `PRENOM` char(32) DEFAULT NULL,
  `LOGIN` char(32) DEFAULT NULL,
  `PASSWORD` char(32) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `responsable`
--

INSERT INTO `responsable` (`ID`, `NOM`, `PRENOM`, `LOGIN`, `PASSWORD`) VALUES
(4, 'Bob', 'Glasse', 'bglasse', 'Bglasse'),
(5, 'David', 'Lucas', 'ldavid', 'Ldavid');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `apprenant`
--
ALTER TABLE `apprenant`
  ADD CONSTRAINT `apprenant_ibfk_1` FOREIGN KEY (`ID_EQUIPE`) REFERENCES `equipe` (`ID`);

--
-- Contraintes pour la table `equipe`
--
ALTER TABLE `equipe`
  ADD CONSTRAINT `equipe_ibfk_1` FOREIGN KEY (`ID_PROJET`) REFERENCES `projet` (`ID`);

--
-- Contraintes pour la table `projet`
--
ALTER TABLE `projet`
  ADD CONSTRAINT `projet_ibfk_1` FOREIGN KEY (`ID_RESPONSABLE`) REFERENCES `responsable` (`ID`);

--
-- Contraintes pour la table `projet_intervenant`
--
ALTER TABLE `projet_intervenant`
  ADD CONSTRAINT `projet_intervenant_ibfk_1` FOREIGN KEY (`ID`) REFERENCES `projet` (`ID`),
  ADD CONSTRAINT `projet_intervenant_ibfk_2` FOREIGN KEY (`ID_1`) REFERENCES `intervenant` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
