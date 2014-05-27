<?php
	require_once 'Demande.php';
	require_once 'Conge.php';
	
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
		
		$bddConge = new Conge;
		if(isset($_POST['motifConge']))
		{
			$bddConge->ajouterConge
			(
				$_POST['motifConge'],
				$_POST['commentaireConge']
			);
		}
	}
	catch(exception $e)
	{
		echo "Erreur :".$e->getMessage();
	}
?>