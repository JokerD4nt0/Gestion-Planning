<?php
	require_once 'Modele.php';
	class Planning extends Modele
	{
		public function recupererPlanning()
		{
			$requete =
			"
				SELECT moisPlanning, anneePlanning, nomSalarie, prenomSalarie FROM planning, salarie
				WHERE planning.idSalarie=salarie.idSalarie
			"; 
			$reponse = $this->executerRequete($requete);
			$planning=array();
			while($donnees = $reponse->fetch())
			{
				$planning[]=array
				(
					$donnees['moisPlanning'],
					$donnees['anneePlanning'],
					$donnees['nomSalarie'],
					$donnees['prenomSalarie']
				);
			}
			return $planning;
		}
	}
?>