<?php
	require_once 'Modele.php';
	
	class Conge extends Modele
	{
		public function ajouterConge($motifConge,$commentaireConge)
		{
			$parametres=array
			(
				'motifConge'=>$motifConge,
				'commentaireConge'=>$commentaireConge
			);
			$requete = "INSERT INTO conge(motifConge,commentaireConge)
			VALUES (:motifConge,:commentaireConge);";
			return $this->executerRequete($requete,$parametres);
		}
	}
?>