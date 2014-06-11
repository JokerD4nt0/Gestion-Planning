<?php
	require_once"/../modeles/ModRecrutement.php";
	
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
	
	require_once"/../vues/public/VueRecrutement.php";
?>