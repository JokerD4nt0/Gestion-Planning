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
?>