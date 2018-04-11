-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mer 11 Avril 2018 à 09:15
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `workshop2`
--

-- --------------------------------------------------------

--
-- Structure de la table `apprenant`
--

CREATE TABLE IF NOT EXISTS `apprenant` (
  `ID` bigint(4) NOT NULL AUTO_INCREMENT,
  `ID_EQUIPE` bigint(4) DEFAULT NULL,
  `NOM` char(32) DEFAULT NULL,
  `PRENOM` char(32) DEFAULT NULL,
  `LOGIN` char(32) DEFAULT NULL,
  `PASSWORD` char(32) DEFAULT NULL,
  PRIMARY KEY (`ID`),
  KEY `FK_APPRENANT_EQUIPE` (`ID_EQUIPE`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Contenu de la table `apprenant`
--

INSERT INTO `apprenant` (`ID`, `ID_EQUIPE`, `NOM`, `PRENOM`, `LOGIN`, `PASSWORD`) VALUES
(2, NULL, 'DUPONT', 'Maxime', 'login', 'password'),
(10, 5, '$nom10', '$prenom', '$login', '$password'),
(11, 5, '$nom', '$prenom11', '$login', '$password'),
(12, 6, '$nom', '$prenom', '$login', '$password'),
(13, 5, '$nom', '$prenom', '$login', '$password'),
(14, 5, '$nom', '$prenom', '$login', '$password');

-- --------------------------------------------------------

--
-- Structure de la table `equipe`
--

CREATE TABLE IF NOT EXISTS `equipe` (
  `ID` bigint(4) NOT NULL AUTO_INCREMENT,
  `ID_PROJET` bigint(4) DEFAULT NULL,
  `LIBELLE` char(32) DEFAULT NULL,
  `NBJETONS` bigint(4) DEFAULT NULL,
  PRIMARY KEY (`ID`),
  KEY `FK_EQUIPE_PROJET` (`ID_PROJET`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Contenu de la table `equipe`
--

INSERT INTO `equipe` (`ID`, `ID_PROJET`, `LIBELLE`, `NBJETONS`) VALUES
(5, 1, '$libelle5', 5),
(6, 1, '$libelle', 0),
(7, 1, '$libelle', 0),
(8, 1, '$libelle', 20);

-- --------------------------------------------------------

--
-- Structure de la table `intervenant`
--

CREATE TABLE IF NOT EXISTS `intervenant` (
  `ID` bigint(4) NOT NULL AUTO_INCREMENT,
  `NOM` char(32) DEFAULT NULL,
  `PRENOM` char(32) DEFAULT NULL,
  `LOGIN` char(32) DEFAULT NULL,
  `PASSWORD` char(32) DEFAULT NULL,
  `STATUS` char(32) DEFAULT NULL,
  `SPECIALITE` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Contenu de la table `intervenant`
--

INSERT INTO `intervenant` (`ID`, `NOM`, `PRENOM`, `LOGIN`, `PASSWORD`, `STATUS`, `SPECIALITE`) VALUES
(1, 'NOM', 'PRENOM', 'login', 'password', 'ok', NULL),
(2, '$nom', '$prenom', '$login', '$password', '$status', NULL),
(3, '$nom', '$prenom', '$login', '$password', '$status', NULL),
(4, '$nom', '$prenom', '$login', '$password', '$status', NULL),
(5, '$nom', '$prenom', '$login', '$password', '$status', NULL),
(6, '$nom', '$prenom', '$login', '$password', '$status', NULL),
(7, '$nom', '$prenom', '$login', '$password', '$status', NULL),
(8, '$nom', '$prenom', '$login', '$password', '$status', NULL),
(9, '$nom', '$prenom', '$login', '$password', '$status', NULL),
(10, '$nom', '$prenom', '$login', '$password', '$status', NULL),
(11, '$nom', '$prenom', '$login', '$password', '$status', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `projet`
--

CREATE TABLE IF NOT EXISTS `projet` (
  `ID` bigint(4) NOT NULL AUTO_INCREMENT,
  `ID_RESPONSABLE` bigint(4) NOT NULL,
  `LIBELLE` char(32) DEFAULT NULL,
  `NBJETONS` bigint(4) DEFAULT NULL,
  PRIMARY KEY (`ID`),
  KEY `FK_PROJET_RESPONSABLE` (`ID_RESPONSABLE`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Contenu de la table `projet`
--

INSERT INTO `projet` (`ID`, `ID_RESPONSABLE`, `LIBELLE`, `NBJETONS`) VALUES
(1, 1, '$libelle1', 20),
(2, 1, '$libelle', 20),
(3, 1, '$libelle', 20),
(4, 1, '$libelle', 20),
(5, 1, '$libelle', 20),
(6, 1, '$libelle', 20),
(7, 1, '$libelle', 20),
(8, 1, '$libelle', 20),
(9, 1, '$libelle', 20),
(10, 1, '$libelle', 20),
(11, 1, '$libelle', 20);

-- --------------------------------------------------------

--
-- Structure de la table `projet_intervenant`
--

CREATE TABLE IF NOT EXISTS `projet_intervenant` (
  `ID` bigint(4) NOT NULL,
  `ID_1` bigint(4) NOT NULL,
  PRIMARY KEY (`ID`,`ID_1`),
  KEY `FK_PROJET_INTERVENANT_INTERVENANT` (`ID_1`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `projet_intervenant`
--

INSERT INTO `projet_intervenant` (`ID`, `ID_1`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `responsable`
--

CREATE TABLE IF NOT EXISTS `responsable` (
  `ID` bigint(4) NOT NULL AUTO_INCREMENT,
  `NOM` char(32) DEFAULT NULL,
  `PRENOM` char(32) DEFAULT NULL,
  `LOGIN` char(32) DEFAULT NULL,
  `PASSWORD` char(32) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `responsable`
--

INSERT INTO `responsable` (`ID`, `NOM`, `PRENOM`, `LOGIN`, `PASSWORD`) VALUES
(1, 'RESP', 'PEDAGO', 'login', 'pass');

--
-- Contraintes pour les tables exportées
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
  ADD CONSTRAINT `projet_intervenant_ibfk_2` FOREIGN KEY (`ID_1`) REFERENCES `intervenant` (`ID`),
  ADD CONSTRAINT `projet_intervenant_ibfk_1` FOREIGN KEY (`ID`) REFERENCES `projet` (`ID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
