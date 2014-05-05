-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Jeu 01 Mai 2014 à 15:18
-- Version du serveur: 5.6.12-log
-- Version de PHP: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `gestionrh`
--
CREATE DATABASE IF NOT EXISTS `gestionrh` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `gestionrh`;

-- --------------------------------------------------------

--
-- Structure de la table `candidat`
--

CREATE TABLE IF NOT EXISTS `candidat` (
  `idCandidat` int(11) NOT NULL AUTO_INCREMENT,
  `posteSouhaite` varchar(25) DEFAULT NULL,
  `nomCandidat` varchar(25) DEFAULT NULL,
  `prenomCandidat` varchar(30) DEFAULT NULL,
  `emailCandidat` varchar(30) DEFAULT NULL,
  `diplomesCandidat` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`idCandidat`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `candidature`
--

CREATE TABLE IF NOT EXISTS `candidature` (
  `idCandidature` int(11) NOT NULL AUTO_INCREMENT,
  `dateCandidature` date DEFAULT NULL,
  `etatCandidature` varchar(25) DEFAULT NULL,
  `idPoste` int(11) DEFAULT NULL,
  `idCandidat` int(11) DEFAULT NULL,
  `idSalarie` int(11) DEFAULT NULL,
  PRIMARY KEY (`idCandidature`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `conge`
--

CREATE TABLE IF NOT EXISTS `conge` (
  `motifConge` varchar(25) DEFAULT NULL,
  `commentaireConge` varchar(25) DEFAULT NULL,
  `idDemande` int(11) NOT NULL,
  PRIMARY KEY (`idDemande`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `demande`
--

CREATE TABLE IF NOT EXISTS `demande` (
  `idDemande` int(11) NOT NULL AUTO_INCREMENT,
  `dateDemande` date DEFAULT NULL,
  `dateValidationDemande` date DEFAULT NULL,
  `dateDebutFormation_Conge` date DEFAULT NULL,
  `dureeFormation_Conge` varchar(25) DEFAULT NULL,
  `idSalarie` int(11) DEFAULT NULL,
  `idSalarieRh` int(11) DEFAULT NULL,
  PRIMARY KEY (`idDemande`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `employe`
--

CREATE TABLE IF NOT EXISTS `employe` (
  `idSalarie` int(11) NOT NULL,
  PRIMARY KEY (`idSalarie`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `formation`
--

CREATE TABLE IF NOT EXISTS `formation` (
  `libelleFormation` varchar(25) DEFAULT NULL,
  `niveauFormation` varchar(25) DEFAULT NULL,
  `idDemande` int(11) NOT NULL,
  PRIMARY KEY (`idDemande`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `interimaire`
--

CREATE TABLE IF NOT EXISTS `interimaire` (
  `dateFinContrat` date DEFAULT NULL,
  `idSalarie` int(11) NOT NULL,
  PRIMARY KEY (`idSalarie`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `planning`
--

CREATE TABLE IF NOT EXISTS `planning` (
  `idPlanning` int(11) NOT NULL AUTO_INCREMENT,
  `moisPlanning` varchar(25) DEFAULT NULL,
  `anneePlanning` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`idPlanning`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `horaire`
--

CREATE TABLE IF NOT EXISTS `horaire` (
  `idHoraire` int(11) NOT NULL AUTO_INCREMENT,
  `jourHoraire` varchar(25) DEFAULT NULL,
  `heureDebut` varchar(25) DEFAULT NULL,
  `heureFin` varchar(25) DEFAULT NULL,
  `statutHoraire` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`idHoraire`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `poste`
--

CREATE TABLE IF NOT EXISTS `poste` (
  `idPoste` int(11) NOT NULL AUTO_INCREMENT,
  `libellePoste` varchar(25) DEFAULT NULL,
  `lieuPoste` varchar(25) DEFAULT NULL,
  `typePoste` varchar(25) DEFAULT NULL,
  `descriptifPoste` text,
  PRIMARY KEY (`idPoste`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `rh`
--

CREATE TABLE IF NOT EXISTS `rh` (
  `datePriseFonctionRh` date DEFAULT NULL,
  `mdpRh` varchar(40) DEFAULT NULL,
  `idSalarie` int(11) NOT NULL,
  PRIMARY KEY (`idSalarie`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `salarie`
--

CREATE TABLE IF NOT EXISTS `salarie` (
  `idSalarie` int(11) NOT NULL AUTO_INCREMENT,
  `emailSalarie` varchar(30) DEFAULT NULL,
  `mdpSalarie` varchar(40) DEFAULT NULL,
  `nomSalarie` varchar(20) DEFAULT NULL,
  `prenomSalarie` varchar(20) DEFAULT NULL,
  `dateNaissanceSalarie` date DEFAULT NULL,
  `sexeSalarie` char(1) DEFAULT NULL,
  `adresseSalarie` varchar(20) DEFAULT NULL,
  `telSalarie` int(11) DEFAULT NULL,
  `diplomesSalarie` varchar(30) DEFAULT NULL,
  `salaireSalarie` float DEFAULT NULL,
  `dateRecrutementSalarie` date DEFAULT NULL,
  `idPlanning` int(11) NOT NULL,
  `idPoste` int(11) DEFAULT NULL,
  PRIMARY KEY (`idSalarie`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `salarie`
--

INSERT INTO `salarie` (`idSalarie`, `emailSalarie`, `mdpSalarie`, `nomSalarie`, `prenomSalarie`, `dateNaissanceSalarie`, `sexeSalarie`, `adresseSalarie`, `telSalarie`, `diplomesSalarie`, `salaireSalarie`, `dateRecrutementSalarie`, `idPlanning`, `idPoste`) VALUES
(1, 'longhoang@hotmail.fr', '8e9e073e70db91b9353a7b2919f86642e743d9f5', 'HOANG', 'Long', '1988-06-23', 'H', '', 0, '', 0, '2014-04-02', 0, NULL),
(2, 'adrien.morla66@gmail.com', '17d9cbc5f47611875ad06482b0b570d84b24278a', 'MORLA', 'Adrien', '0000-00-00', 'H', '', 0, '', 0, '2014-04-02', 0, NULL),
(3, 'sigerpreston@hotmail.com', '29c451be644da75cfd0a906bb8644f4bd8f3ef49', 'SIGER', 'Preston', '0000-00-00', 'H', '', 0, '', 0, '0000-00-00', 0, NULL),
(4, '', '', 'NGUYEN', 'Sophie', '0000-00-00', 'F', '', 0, '', 0, '0000-00-00', 0, NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
