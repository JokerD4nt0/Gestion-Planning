<?php
	require_once"Horaire.php";
	
	try
	{
		$bdd = new Horaire;
		$horaires = array();
		$horaires = $bdd->recupererHoraire();
	}
	catch(Exception $e)
	{
		echo "Erreur : " . $e->getMessage();
	}
?>