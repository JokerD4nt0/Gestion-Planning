<?php
	require_once 'Modele.php';
	
	class Demande extends Modele
	{
		public function ajouterDemande($dateDebutFormation_Conge,$dureeFormation_Conge)
		{
			$parametres=array
			(
				'dateDebutFormation_Conge'=>$dateDebutFormation_Conge,
				'dureeFormation_Conge'=>$dureeFormation_Conge
			);
			$requete="INSERT INTO demande(dateDebutFormation_Conge,dureeFormation_Conge)
			VALUES(:dateDebutFormation_Conge,:dureeFormation_Conge);";
			return $this->executerRequete($requete,$parametres);
		}
	}
?>