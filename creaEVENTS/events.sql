-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 09 Mars 2023 à 22:52
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `events`
--

-- --------------------------------------------------------

--
-- Structure de la table `evenements`
--

CREATE TABLE IF NOT EXISTS `evenements` (
  `IDevent` int(255) NOT NULL AUTO_INCREMENT,
  `Libelle` varchar(255) DEFAULT NULL,
  `Prixticket` int(255) DEFAULT NULL,
  `Createur` varchar(255) DEFAULT NULL,
  `IDmember` int(255) DEFAULT NULL,
  `Lieu` varchar(255) DEFAULT NULL,
  `Periode` date DEFAULT NULL,
  `type` varchar(255) NOT NULL,
  `billeterie` int(255) DEFAULT '0',
  `Feespaid` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`IDevent`),
  KEY `IDmember` (`IDmember`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Contenu de la table `evenements`
--

INSERT INTO `evenements` (`IDevent`, `Libelle`, `Prixticket`, `Createur`, `IDmember`, `Lieu`, `Periode`, `type`, `billeterie`, `Feespaid`) VALUES
(1, 'cotisez pour moi', 500, 'Wazo237', 1, 'PAPOSY', '2023-03-09', 'Rassemblement', 0, 0),
(2, 'GAZO', 2000, 'Wazo237', 1, 'Bambou lounge', '2023-03-09', 'Musical', 0, 0),
(3, 'match', 3000, 'Wazo237', 1, 'Stade Ahmadou Ahidjo', '2023-03-09', 'Rassemblement', 0, 1),
(4, 'prettyPetals', 50000, 'ateucani', 3, 'Canal Olympia', '2023-03-09', 'Rassemblement', 0, 1),
(5, 'concert', 1000, 'spartacus', 4, 'Canal Olympia', '2023-03-10', 'Musical', 0, 1);

-- --------------------------------------------------------

--
-- Structure de la table `membres`
--

CREATE TABLE IF NOT EXISTS `membres` (
  `IDmember` int(255) NOT NULL AUTO_INCREMENT,
  `Noms` varchar(255) NOT NULL,
  `Prenoms` varchar(255) NOT NULL,
  `CNI` varchar(255) NOT NULL,
  `Profession` varchar(255) NOT NULL,
  `events` int(255) NOT NULL DEFAULT '0',
  `tickets` int(255) NOT NULL DEFAULT '0',
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`IDmember`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `membres`
--

INSERT INTO `membres` (`IDmember`, `Noms`, `Prenoms`, `CNI`, `Profession`, `events`, `tickets`, `login`, `password`) VALUES
(1, 'EYOUM', 'Yann', '2015003251', 'Eleve/Etudiant', 0, 0, 'Wazo237', '666'),
(2, 'koukem', 'lauriace', '2015003251', 'Eleve/Etudiant', 0, 0, 'laury', 'laury20'),
(3, 'cani', 'canie', '123456', 'pas encore connu', 0, 0, 'ateucani', 'ateucani2000'),
(4, 'nandjou', 'franck', '2015003251', 'Eleve/Etudiant', 0, 0, 'spartacus', '77542534');

-- --------------------------------------------------------

--
-- Structure de la table `tickets`
--

CREATE TABLE IF NOT EXISTS `tickets` (
  `IDticket` int(255) NOT NULL AUTO_INCREMENT,
  `event` varchar(255) DEFAULT NULL,
  `IDevent` int(255) DEFAULT NULL,
  `acheteur` varchar(255) DEFAULT NULL,
  `IDmember` int(255) DEFAULT NULL,
  PRIMARY KEY (`IDticket`),
  KEY `IDevent` (`IDevent`),
  KEY `IDmember` (`IDmember`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `tickets`
--

INSERT INTO `tickets` (`IDticket`, `event`, `IDevent`, `acheteur`, `IDmember`) VALUES
(1, 'concert', 5, 'Wazo237', 1);

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `evenements`
--
ALTER TABLE `evenements`
  ADD CONSTRAINT `evenements_ibfk_1` FOREIGN KEY (`IDmember`) REFERENCES `membres` (`IDmember`);

--
-- Contraintes pour la table `tickets`
--
ALTER TABLE `tickets`
  ADD CONSTRAINT `tickets_ibfk_1` FOREIGN KEY (`IDevent`) REFERENCES `evenements` (`IDevent`),
  ADD CONSTRAINT `tickets_ibfk_2` FOREIGN KEY (`IDmember`) REFERENCES `membres` (`IDmember`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
