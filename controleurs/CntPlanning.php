<?php
	require_once"session.php";
	require_once"/../modeles/ModPlanning.php";
	// require_once"/../modeles/ModHoraire.php";
	
	try
	{
		$bdd = new Horaire;
		$horaires = array();
		
		$nombreHeuresTravail = $bdd->nombreHeuresTravail();
		$nombreHeuresReunion = $bdd->nombreHeuresReunion();
		$nombreHeuresPauseDej = $bdd->nombreHeuresPauseDej();
		$nombreHeuresNonAffecte = $bdd->nombreHeuresNonAffecte();
		
		$horairesLundi8h = $bdd->recupererLundi8h();
		$horairesLundi9h = $bdd->recupererLundi9h();
		$horairesLundi10h = $bdd->recupererLundi10h();
		$horairesLundi11h = $bdd->recupererLundi11h();
		$horairesLundi12h = $bdd->recupererLundi12h();
		$horairesLundi13h = $bdd->recupererLundi13h();
		$horairesLundi14h = $bdd->recupererLundi14h();
		$horairesLundi15h = $bdd->recupererLundi15h();
		$horairesLundi16h = $bdd->recupererLundi16h();
		$horairesLundi17h = $bdd->recupererLundi17h();
		$horairesLundi18h = $bdd->recupererLundi18h();
		
		
		
		$horairesMardi8h = $bdd->recupererMardi8h();
		$horairesMardi9h = $bdd->recupererMardi9h();
		$horairesMardi10h = $bdd->recupererMardi10h();
		$horairesMardi11h = $bdd->recupererMardi11h();
		$horairesMardi12h = $bdd->recupererMardi12h();
		$horairesMardi13h = $bdd->recupererMardi13h();
		$horairesMardi14h = $bdd->recupererMardi14h();
		$horairesMardi15h = $bdd->recupererMardi15h();
		$horairesMardi16h = $bdd->recupererMardi16h();
		$horairesMardi17h = $bdd->recupererMardi17h();
		$horairesMardi18h = $bdd->recupererMardi18h();
		
		
		
		$horairesMercredi8h = $bdd->recupererMercredi8h();
		$horairesMercredi9h = $bdd->recupererMercredi9h();
		$horairesMercredi10h = $bdd->recupererMercredi10h();
		$horairesMercredi11h = $bdd->recupererMercredi11h();
		$horairesMercredi12h = $bdd->recupererMercredi12h();
		$horairesMercredi13h = $bdd->recupererMercredi13h();
		$horairesMercredi14h = $bdd->recupererMercredi14h();
		$horairesMercredi15h = $bdd->recupererMercredi15h();
		$horairesMercredi16h = $bdd->recupererMercredi16h();
		$horairesMercredi17h = $bdd->recupererMercredi17h();
		$horairesMercredi18h = $bdd->recupererMercredi18h();
		
		
		
		$horairesJeudi8h = $bdd->recupererJeudi8h();
		$horairesJeudi9h = $bdd->recupererJeudi9h();
		$horairesJeudi10h = $bdd->recupererJeudi10h();
		$horairesJeudi11h = $bdd->recupererJeudi11h();
		$horairesJeudi12h = $bdd->recupererJeudi12h();
		$horairesJeudi13h = $bdd->recupererJeudi13h();
		$horairesJeudi14h = $bdd->recupererJeudi14h();
		$horairesJeudi15h = $bdd->recupererJeudi15h();
		$horairesJeudi16h = $bdd->recupererJeudi16h();
		$horairesJeudi17h = $bdd->recupererJeudi17h();
		$horairesJeudi18h = $bdd->recupererJeudi18h();
		
		
		
		$horairesVendredi8h = $bdd->recupererVendredi8h();
		$horairesVendredi9h = $bdd->recupererVendredi9h();
		$horairesVendredi10h = $bdd->recupererVendredi10h();
		$horairesVendredi11h = $bdd->recupererVendredi11h();
		$horairesVendredi12h = $bdd->recupererVendredi12h();
		$horairesVendredi13h = $bdd->recupererVendredi13h();
		$horairesVendredi14h = $bdd->recupererVendredi14h();
		$horairesVendredi15h = $bdd->recupererVendredi15h();
		$horairesVendredi16h = $bdd->recupererVendredi16h();
		$horairesVendredi17h = $bdd->recupererVendredi17h();
		$horairesVendredi18h = $bdd->recupererVendredi18h();
	}
	catch(Exception $e)
	{
		echo "Erreur : " . $e->getMessage();
	}
	
	require_once"/../vues/privee/VuePlanning.php";
?>