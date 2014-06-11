<?php
	require_once 'Modele.php';
	
	class Poste extends Modele
	{
		public function recupererPoste()
		{
			$requete = " SELECT * FROM poste;"; 
			$reponse = $this->executerRequete($requete);
			$poste=array();
			while($donnees = $reponse->fetch())
			{
				$poste[]=array
				(
					$donnees['idPoste'],
					$donnees['libellePoste'],
					$donnees['lieuPoste'],
					$donnees['typePoste'],
					$donnees['descriptifPoste']
				);
			}
			return $poste;
		}
	}
?>