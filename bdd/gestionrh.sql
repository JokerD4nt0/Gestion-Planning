#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------

CREATE DATABASE IF NOT EXISTS `gestionrh` DEFAULT
CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `gestionrh`;

CREATE TABLE Salarie(
        idSalarie              int (11) Auto_increment  NOT NULL ,
        emailSalarie           Varchar (30) ,
        mdpSalarie             Varchar (40) ,
        nomSalarie             Varchar (20) ,
        prenomSalarie          Varchar (20) ,
        dateNaissanceSalarie   Date ,
        sexeSalarie            Char (1) ,
        adresseSalarie         Varchar (20) ,
        telSalarie             Int ,
        diplomesSalarie        Varchar (30) ,
        salaireSalarie         Float ,
        dateRecrutementSalarie Date ,
        idPlanning             Int ,
        idPoste                Int ,
        PRIMARY KEY (idSalarie )
)ENGINE=InnoDB;


CREATE TABLE Employe(
        idSalarie Int NOT NULL ,
        PRIMARY KEY (idSalarie )
)ENGINE=InnoDB;


CREATE TABLE Interimaire(
        dateFinContrat Date ,
        idSalarie      Int NOT NULL ,
        PRIMARY KEY (idSalarie )
)ENGINE=InnoDB;


CREATE TABLE Planning(
        idPlanning    int (11) Auto_increment  NOT NULL ,
        moisPlanning  Varchar (25) ,
        anneePlanning Varchar (25) ,
        idSalarie     Int ,
        idHoraire     Int ,
        PRIMARY KEY (idPlanning )
)ENGINE=InnoDB;


CREATE TABLE Rh(
        datePriseFonctionRh Date ,
        mdpRh               Varchar (40) ,
        idSalarie           Int NOT NULL ,
        PRIMARY KEY (idSalarie )
)ENGINE=InnoDB;


CREATE TABLE Demande(
        idDemande                int (11) Auto_increment  NOT NULL ,
        dateDemande              Date ,
		etatDemande              Varchar (25) ,
        dateValidationDemande    Date ,
        dateDebutFormation_Conge Date ,
        dureeFormation_Conge     Varchar (25) ,
        idSalarie                Int ,
        idRH                     Int ,
        PRIMARY KEY (idDemande )
)ENGINE=InnoDB;


CREATE TABLE Conge(
        motifConge       Varchar (25) ,
        commentaireConge Text (255) ,
        idDemande        Int NOT NULL ,
        PRIMARY KEY (idDemande )
)ENGINE=InnoDB;


CREATE TABLE Formation(
        libelleFormation Varchar (25) ,
        niveauFormation  Varchar (25) ,
        idDemande        Int NOT NULL ,
        PRIMARY KEY (idDemande )
)ENGINE=InnoDB;


CREATE TABLE Candidat(
        idCandidat          int (11) Auto_increment  NOT NULL ,
        nomCandidat         Varchar (25) ,
        prenomCandidat      Varchar (30) ,
        emailCandidat       Varchar (30) ,
        diplomesCandidat    Varchar (25) ,
		posteSouhaiteCandidat Varchar(25) ,
        commentaireCandidat Text (255) ,
        PRIMARY KEY (idCandidat )
)ENGINE=InnoDB;


CREATE TABLE Poste(
        idPoste         int (11) Auto_increment  NOT NULL ,
        libellePoste    Varchar (25) ,
        lieuPoste       Varchar (40) ,
        typePoste       Varchar (25) ,
        descriptifPoste Text ,
        PRIMARY KEY (idPoste )
)ENGINE=InnoDB;


CREATE TABLE Candidature(
        idCandidature   int (11) Auto_increment  NOT NULL ,
        dateCandidature Date ,
        etatCandidature Varchar (25) ,
        idPoste         Int ,
        idCandidat      Int ,
        idSalarie       Int ,
        PRIMARY KEY (idCandidature )
)ENGINE=InnoDB;


CREATE TABLE Horaire(
        idHoraire     int (11) Auto_increment  NOT NULL ,
        jourHoraire   Varchar (25) ,
        heureDebut    Varchar (25) ,
        heureFin      Varchar (25) ,
        statutHoraire Varchar (25) ,
        PRIMARY KEY (idHoraire )
)ENGINE=InnoDB;

ALTER TABLE Salarie ADD CONSTRAINT FK_Salarie_idPlanning FOREIGN KEY (idPlanning) REFERENCES Planning(idPlanning);
ALTER TABLE Salarie ADD CONSTRAINT FK_Salarie_idPoste FOREIGN KEY (idPoste) REFERENCES Poste(idPoste);
ALTER TABLE Employe ADD CONSTRAINT FK_Employe_idSalarie FOREIGN KEY (idSalarie) REFERENCES Salarie(idSalarie);
ALTER TABLE Interimaire ADD CONSTRAINT FK_Interimaire_idSalarie FOREIGN KEY (idSalarie) REFERENCES Salarie(idSalarie);
ALTER TABLE Planning ADD CONSTRAINT FK_Planning_idSalarie FOREIGN KEY (idSalarie) REFERENCES Salarie(idSalarie);
ALTER TABLE Planning ADD CONSTRAINT FK_Planning_idHoraire FOREIGN KEY (idHoraire) REFERENCES Horaire(idHoraire);
ALTER TABLE Rh ADD CONSTRAINT FK_Rh_idSalarie FOREIGN KEY (idSalarie) REFERENCES Salarie(idSalarie);
ALTER TABLE Demande ADD CONSTRAINT FK_Demande_idSalarie FOREIGN KEY (idSalarie) REFERENCES Salarie(idSalarie);
ALTER TABLE Demande ADD CONSTRAINT FK_Demande_idRH FOREIGN KEY (idRH) REFERENCES Salarie(idSalarie);
ALTER TABLE Conge ADD CONSTRAINT FK_Conge_idDemande FOREIGN KEY (idDemande) REFERENCES Demande(idDemande);
ALTER TABLE Formation ADD CONSTRAINT FK_Formation_idDemande FOREIGN KEY (idDemande) REFERENCES Demande(idDemande);
ALTER TABLE Candidature ADD CONSTRAINT FK_Candidature_idPoste FOREIGN KEY (idPoste) REFERENCES Poste(idPoste);
ALTER TABLE Candidature ADD CONSTRAINT FK_Candidature_idCandidat FOREIGN KEY (idCandidat) REFERENCES Candidat(idCandidat);
ALTER TABLE Candidature ADD CONSTRAINT FK_Candidature_idSalarie FOREIGN KEY (idSalarie) REFERENCES Salarie(idSalarie);

--
-- Contenu de la table `salarie`
--

INSERT INTO `salarie` (`idSalarie`, `emailSalarie`, `mdpSalarie`, `nomSalarie`, `prenomSalarie`, `dateNaissanceSalarie`, `sexeSalarie`, `adresseSalarie`, `telSalarie`, `diplomesSalarie`, `salaireSalarie`, `dateRecrutementSalarie`, `idPlanning`, `idPoste`) VALUES
(1, 'longhoang@hotmail.fr', '8e9e073e70db91b9353a7b2919f86642e743d9f5', 'HOANG', 'Long', '1988-06-23', 'H', '', 0, '', 0, '2014-04-02', NULL, NULL),
(2, 'adrien.morla66@gmail.com', '17d9cbc5f47611875ad06482b0b570d84b24278a', 'MORLA', 'Adrien', '0000-00-00', 'H', '', 0, '', 0, '2014-04-02', NULL, NULL),
(3, 'sigerpreston@hotmail.com', '29c451be644da75cfd0a906bb8644f4bd8f3ef49', 'SIGER', 'Preston', '0000-00-00', 'H', '', 0, '', 0, '0000-00-00', NULL, NULL),
(4, '', '', 'NGUYEN', 'Sophie', '0000-00-00', 'F', '', 0, '', 0, '0000-00-00', NULL, NULL);

--
-- Contenu de la table `horaire`
--

INSERT INTO `horaire` (idHoraire, jourHoraire, heureDebut, heureFin, StatutHoraire) VALUES 
(1,"Lundi","8h00","9h00","Travail"),
(2,"Lundi","9h00","10h00","Réunion")
;
--
-- Contenu de la table planning
--

INSERT INTO `planning` (idPlanning, moisPlanning, anneePlanning, idSalarie, idHoraire) VALUES
(1,"Mai","2014",1,1);

--
-- Contenu de la table poste
--

INSERT INTO `poste` (idPoste, libellePoste, lieuPoste, typePoste, descriptifPoste) VALUES
(1,"Développeur PHP","Equipe Développement","Informatique","Développement HTML/CSS, Javascript, PHP..."),
(2,"Chef de projet","Equipe Développement","Informatique","Cohésion de groupe");