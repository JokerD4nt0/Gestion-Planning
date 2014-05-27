<?php
	require_once 'Modele.php';
	
	class Formation extends Modele
	{
		public function ajouterFormation($libelleFormation,$niveauFormation)
		{
			$parametres=array
			(
				'libelleFormation'=>$libelleFormation,
				'niveauFormation'=>$niveauFormation
			);
			$requete="INSERT INTO formation(libelleFormation,niveauFormation)
			VALUES(:libelleFormation,:niveauFormation);";
			return $this->executerRequete($requete,$parametres);
		}
	}
?>