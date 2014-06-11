<?php
	require_once"session.php";
	require_once"/../modeles/ModFormation.php";
	require_once"/../vues/privee/VueFormation.php";
	
	try
	{
		$bddDemande=new Demande;
		if(isset($_POST['dateDebutFormation_Conge']))
		{
			$bddDemande->ajouterDemande
			(
				$_POST['dateDebutFormation_Conge'],
				$_POST['dureeFormation_Conge']
			);
		}
		
		$bddFormation=new Formation;
		if(isset($_POST['libelleFormation']))
		{
			$bddFormation->ajouterFormation
			(
				$_POST['libelleFormation'],
				$_POST['niveauFormation']
			);
		}
	}
	
	catch(exception $e)
	{
		echo "Erreur :".$e->getMessage();
	}
?>