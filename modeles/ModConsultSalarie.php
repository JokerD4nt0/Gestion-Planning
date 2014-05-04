<?php
	require_once 'Salarie.php';
	require_once 'Contrat.php';

	try
	{
		$bdd = new Salarie;
		$salaries = array();
		$salaries = $bdd->recupererSalarie();

	}
	catch(Exception $e)
	{
		echo "Erreur : " . $e->getMessage();
	}