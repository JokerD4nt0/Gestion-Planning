<?php
	require_once 'Modele.php';
	class Candidat extends Modele
	{
		public function ajouterCandidat($nomCandidat,$prenomCandidat,$emailCandidat,$diplomesCandidat,$posteSouhaiteCandidat)
		{
			$parametres=array
			(
				'nomCandidat'=>$nomCandidat,
				'prenomCandidat'=>$prenomCandidat,
				'emailCandidat'=>$emailCandidat,
				'diplomesCandidat'=>$diplomesCandidat,
				'posteSouhaiteCandidat'=>$posteSouhaiteCandidat
			);
			$requete = "INSERT INTO candidat(nomCandidat, prenomCandidat, emailCandidat, diplomesCandidat, posteSouhaiteCandidat) 
			VALUES (:nomCandidat,:prenomCandidat,:emailCandidat,:diplomesCandidat,:posteSouhaiteCandidat);"; 
			return $this->executerRequete($requete,$parametres);
		}
		public function recupererCandidat()
		{
			$requete = " SELECT * FROM candidat;"; 
			$reponse = $this->executerRequete($requete);
			$candidat=array();
			while($donnees = $reponse->fetch())
			{
				$candidat[]=array
				(
					$donnees['idCandidat'],
					$donnees['nomCandidat'],
					$donnees['prenomCandidat'],
					$donnees['emailCandidat'],
					$donnees['diplomesCandidat'],
					$donnees['posteSouhaiteCandidat']
				);
			}
			return $candidat;
		}
	}
?>