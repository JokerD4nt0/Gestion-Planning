<?php
	// require_once'/../modeles/Modele.php';
	
	class Recrutement
	{
		private $idPoste;
		private $libellePoste;
		private $lieuPoste;
		private $typePoste;
		private $descriptifPoste;
		
		private $posteSouhaiter;
		private $donnees;
		private $requete;
		
		private function posteSouhaiter()
		{
			$idPoste=$_POST['idPoste'];
			$libellePoste=$_POST['libellePoste'];
			$lieuPoste=$_POST['lieuPoste'];
			$typePoste=$_POST['typePoste'];
			$descriptifPoste=$_POST['descriptifPoste'];
			$requete="
				SELECT *
				FROM poste
				WHERE idPoste=".$idPoste."
				AND libellePoste=".$libellePoste."
				AND lieuPoste=".$lieuPoste."
				AND typePoste=".$typePoste."
				AND descriptifPoste=".$descriptifPoste.";
			";
			$reponse=$this->executerRequete($requete);
			$planningSouhaiter=array();
			while($donnees=$reponse->fetch())
			{
				$posteSouhaiter[]=array(
					$donnees['idPoste'],
					$donnees['libellePoste'],
					$donnees['lieuPoste'],
					$donnees['typePoste'],
					$donnees['descriptifPoste']
				);
			}
			return $posteSouhaiter;
		}
	}
?>