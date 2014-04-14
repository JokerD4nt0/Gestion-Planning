-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Lun 17 Février 2014 à 12:16
-- Version du serveur: 5.5.24-log
-- Version de PHP: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `gestionrh`
--
DROP DATABASE IF EXISTS `gestionrh`;
CREATE DATABASE IF NOT EXISTS `gestionrh` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `gestionrh`;


-- --------------------------------------------------------

--
-- Structure de la table `authentifiant`
--

CREATE TABLE IF NOT EXISTS `authentifiant` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `login` varchar(20) DEFAULT NULL,
  `password` varchar(40) DEFAULT NULL,
  `email` varchar(30) NOT NULL,
  `dateCreation` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Contenu de la table `authentifiant`
--

INSERT INTO `authentifiant` (`id`, `login`, `password`, `email`, `dateCreation`) VALUES
(1, 'long', '8e9e073e70db91b9353a7b2919f86642e743d9f5', '', '0000-00-00 00:00:00'),
(2, 'adrien', '17d9cbc5f47611875ad06482b0b570d84b24278a', '', '0000-00-00 00:00:00'),
(3, 'preston', '29c451be644da75cfd0a906bb8644f4bd8f3ef49', '', '0000-00-00 00:00:00'),
(4, 'sophie', '7cb7e21b9bd99b6970b22dea8c90a508cae673b2', '', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `employe`
--

CREATE TABLE IF NOT EXISTS `employe` (
  `idEmploye` int(8) NOT NULL AUTO_INCREMENT,
  `typeEmploye` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`idEmploye`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `interimaire`
--

CREATE TABLE IF NOT EXISTS `interimaire` (
  `idInterimaire` int(8) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`idInterimaire`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `salarie`
--

CREATE TABLE IF NOT EXISTS `salarie` (
  `idSalarie` int(8) NOT NULL AUTO_INCREMENT,
  `nomSalarie` varchar(20) DEFAULT NULL,
  `prenomSalarie` varchar(20) DEFAULT NULL,
  `dateNaissanceSalarie` date DEFAULT NULL,
  `lieuNaissanceSalarie` varchar(40) DEFAULT NULL,
  `sexeSalarie` varchar(1) DEFAULT NULL,
  `groupeSanguinSalarie` varchar(3) DEFAULT NULL,
  `situationFamilialeSalarie` varchar(30) DEFAULT NULL,
  `adresseSalarie` varchar(50) DEFAULT NULL,
  `telSalarie` varchar(12) DEFAULT NULL,
  `emailSalarie` varchar(20) DEFAULT NULL,
  `numBadgeSalarie` varchar(10) DEFAULT NULL,
  `zoneAutoriseeSalarie` varchar(10) DEFAULT NULL,
  `salaireSalarie` float(8,2) DEFAULT NULL,
  `niveauScolaireSalarie` varchar(10) DEFAULT NULL,
  `libelleServiceSalarie` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`idSalarie`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `salarie`
--

INSERT INTO `salarie` (`idSalarie`, `nomSalarie`, `prenomSalarie`, `dateNaissanceSalarie`, `lieuNaissanceSalarie`, `sexeSalarie`, `groupeSanguinSalarie`, `situationFamilialeSalarie`, `adresseSalarie`, `telSalarie`, `emailSalarie`, `numBadgeSalarie`, `zoneAutoriseeSalarie`, `salaireSalarie`, `niveauScolaireSalarie`, `libelleServiceSalarie`) VALUES
(1, 'HOANG', 'Long', '1988-06-23', 'Levallois-Perret', 'H', 'O+', 'CÃ©libataire', '65 avenue du GÃ©nÃ©ral de Gaulle', '0618531032', 'longhoang@hotmail.fr', '007', 'A', 0.00, 'Bac+1', 'Videur'),
(2, 'MORLA', 'Adrien', '0000-00-00', '', 'H', '', 'CÃ©libataire', '', '', '', '', NULL, 0.00, 'Bac+1', 'Physicien des herbes'),
(3, 'SIGER', 'Preston', '0000-00-00', '', 'H', '', 'FiancÃ©', '', '', '', '', '', 0.00, 'Bac+1', 'Ultra IngÃ©nieur'),
(4, 'NGUYEN', 'Sophie', '0000-00-00', '', 'F', '', '', '', '', '', '', 'A', NULL, 'Bac+5', 'Super Woman');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
