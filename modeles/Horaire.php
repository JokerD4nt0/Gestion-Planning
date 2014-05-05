<?php
	require_once 'Modele.php';
	class Horaire extends Modele
	{
		public function recupererHoraire()
		{
			$requete = " SELECT * FROM horaire;"; 
			$reponse = $this->executerRequete($requete);
			$horaire=array();
			while($donnees = $reponse->fetch())
			{
				$horaire[]=array
				(
					$donnees['idHoraire'],
					$donnees['jourHoraire'],
					$donnees['heureDebut'],
					$donnees['heureFin'],
					$donnees['statutHoraire']		
				);
			}
			return $horaire;
		}
	}
?>