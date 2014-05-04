<?php
	require_once 'Salarie.php';
	require_once 'Contrat.php';
	
	try
	{
		$bddContrat=new Contrat;
		$reponse=$bddContrat->recupererContrat();
		
		
		
		$bddSalarie=new Salarie;
		if (isset($_POST['nomSalarie']))
		{
			$bddSalarie->ajouterSalarie($_POST['nomSalarie'],$_POST['prenomSalarie'],$_POST['dateNaissanceSalarie'],$_POST['libelleContrat']);
		}
	}
	
	catch(Exception $e)
	{
		echo "Erreur : " . $e->getMessage();
	}