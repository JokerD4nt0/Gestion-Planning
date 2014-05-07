<?php
	require_once 'Candidat.php';
	require_once 'Poste.php';
	
	try
	{
		$bddPoste = new Poste;
		$reponse = $bddPoste->recupererPoste();
		
		$bddCandidat = new Candidat;
		if(isset($_POST['nomCandidat']))
		{
			$bddCandidat->ajouterCandidat
			(
				$_POST['nomCandidat'],
				$_POST['prenomCandidat'],
				$_POST['emailCandidat'],
				$_POST['diplomesCandidat'],
				$_POST['posteSouhaiteCandidat']
			);
		}
	}
	catch(exception $e)
	{
		echo "Erreur : " . $e->getMessage();
	}
	
	// class Recrutement
	// {
		// private $idPoste;
		// private $libellePoste;
		// private $lieuPoste;
		// private $typePoste;
		// private $descriptifPoste;
		
		// private $posteSouhaiter;
		// private $donnees;
		// private $requete;
		
		// private function posteSouhaiter()
		// {
			// $idPoste=$_POST['idPoste'];
			// $libellePoste=$_POST['libellePoste'];
			// $lieuPoste=$_POST['lieuPoste'];
			// $typePoste=$_POST['typePoste'];
			// $descriptifPoste=$_POST['descriptifPoste'];
			// $requete="
				// SELECT *
				// FROM poste
				// WHERE idPoste=".$idPoste."
				// AND libellePoste=".$libellePoste."
				// AND lieuPoste=".$lieuPoste."
				// AND typePoste=".$typePoste."
				// AND descriptifPoste=".$descriptifPoste.";
			// ";
			// $reponse=$this->executerRequete($requete);
			// $planningSouhaiter=array();
			// while($donnees=$reponse->fetch())
			// {
				// $posteSouhaiter[]=array(
					// $donnees['idPoste'],
					// $donnees['libellePoste'],
					// $donnees['lieuPoste'],
					// $donnees['typePoste'],
					// $donnees['descriptifPoste']
				// );
			// }
			// return $posteSouhaiter;
		// }
	// }
?>