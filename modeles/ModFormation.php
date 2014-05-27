<?php
	require_once 'Demande.php';
	require_once 'Formation.php';
	
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