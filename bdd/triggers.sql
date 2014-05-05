-- Mettre les triggers ici

CREATE TABLE candidat_histo (
  `idCandidat` int(11) NOT NULL AUTO_INCREMENT,  -- Colonnes Historisées
  `nomCandidat` varchar(25) DEFAULT NULL,
  `prenomCandidat` varchar(30) DEFAULT NULL,
  `commentaires` TEXT,
  
  date_histo DATETIME NOT NULL,                   -- Colonnes techniques
  utilisateur_histo VARCHAR(20) NOT NULL,
  evenement_histo CHAR(6) NOT NULL,
  PRIMARY KEY (idCandidat, date_histo)
) ENGINE=InnoDB;

DELIMITER //
CREATE TRIGGER after_update_candidat 
AFTER UPDATE ON candidat 
FOR EACH ROW
BEGIN
    INSERT INTO candidat_histo (
        idCandidat, 
        nomCandidat, 
        prenomCandidat,  
        commentaires, 
        date_histo, 
        utilisateur_histo, 
        evenement_histo)
    VALUES (
        OLD.idCandidat,
        OLD.nomCandidat,
		OLD.prenomCandidat,
        OLD.commentaires,

        NOW(),
        CURRENT_USER(),
        'UPDATE');
END //

CREATE TRIGGER after_delete_candidat 
AFTER DELETE ON candidat 
FOR EACH ROW
BEGIN
        INSERT INTO candidat_histo (
        idCandidat, 
        nomCandidat, 
        prenomCandidat,  
        commentaires, 
        date_histo, 
        utilisateur_histo, 
        evenement_histo)
    VALUES (
        OLD.idCandidat,
        OLD.nomCandidat,
		OLD.prenomCandidat,
        OLD.commentaires,

        NOW(),
        CURRENT_USER(),
        'UPDATE');
END //
DELIMITER ;