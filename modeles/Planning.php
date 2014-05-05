<?php
	require_once 'Modele.php';
	class Planning extends Modele
	{
		// public function existePlanning ($idPlanning)
		// {
			// $requete = " SELECT * FROM planning WHERE idPlanning=\"$idPlanning\";"; 
			// $reponse = $this->executerRequete($requete);
			// return $reponse->fetch();
		// }
		public function recupererPlanning()
		{
			$requete = " SELECT * FROM planning;"; 
			$reponse = $this->executerRequete($requete);
			$planning=array();
			while($donnees = $reponse->fetch())
			{
				$planning[]=array
				(
					$donnees['idPlanning'],
					$donnees['jourPlanning'],
					$donnees['numJourPlanning'],
					$donnees['moisPlanning']
				);
			}
			return $planning;
		}
	}
?>