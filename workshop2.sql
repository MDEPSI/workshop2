-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mar 10 Avril 2018 à 11:22
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
CREATE DATABASE IF NOT EXISTS `workshop2` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `workshop2`;

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
