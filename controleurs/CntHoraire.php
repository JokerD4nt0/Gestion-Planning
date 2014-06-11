<?php
	require_once"/../modeles/ModHoraire.php";
	require_once"/../vues/privee/VueHoraire.php";
	
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