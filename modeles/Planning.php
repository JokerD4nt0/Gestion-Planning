<?php
	require_once 'Modele.php';
	
	class Planning extends Modele
	{
		public function recupererPlanning()
		{
			$requete =
			"
				SELECT * FROM planning;
			"; 
			$reponse = $this->executerRequete($requete);
			$planning=array();
			while($donnees = $reponse->fetch())
			{
				$planning[]=array
				(
					$donnees['idPlanning'],
					$donnees['moisPlanning'],
					$donnees['anneePlanning'],
					$donnees['idSalarie']
				);
			}
			return $planning;
		}
	}
?>