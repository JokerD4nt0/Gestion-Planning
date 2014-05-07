<?php
	$titre="Plannings";
	$contenu=
	'
		<legend>Vue sur les plannings annuels :</legend>
		<table border=1>
			<tr>
				<td>Nom du Salarié</td>
				<td>Prénom du Salarié</td>
				<td>Mois</td>
				<td>Année</td>
			</tr>
	';
	
	foreach ($plannings as $tabPlanning)
	{
		$contenu.=
		"
			<p>
				<tr>
					<td>".$tabPlanning[2]."</td>
					<td>".$tabPlanning[3]."</td>
					<td>".$tabPlanning[0]."</td>
					<td>".$tabPlanning[1]."</td>
				</tr>
		";
	}
	$contenu.= '</p></table><br/>';
	$contenu.=
	'
		<legend>Vue sur les plannings hebdomadaire :</legend>
		<table border=1>
			<tr>
				<td>Jour</td>
				<td>Heure Début</td>
				<td>Heure Fin</td>
				<td>Statut Horaire</td>
			</tr>
	';
	
	foreach ($horaires as $tabHoraire)
	{
		$contenu.=
		"
			<p>
				<tr>
					<td>".$tabHoraire[1]."</td>
					<td>".$tabHoraire[2]."</td>
					<td>".$tabHoraire[3]."</td>
					<td>".$tabHoraire[4]."</td>
				</tr>
		";
	}
	$contenu.= '</p></table><br/>';
	
	$contenu.=
	'
		<legend>Vue sur l\'emploi du temps :</legend>
		<table border=1>
			<tr>
				<td>Heure</td>
				<td>Lundi</td>
				<td>Mardi</td>
				<td>Mercredi</td>
				<td>Jeudi</td>
				<td>Vendredi</td>
			</tr>
			<tr>
				<td>8h00</td>
				<td>'.$horairesLundi8h.'</td>
				<td>'.$horairesMardi8h.'</td>
				<td>'.$horairesMercredi8h.'</td>
				<td>'.$horairesJeudi8h.'</td>
				<td>'.$horairesVendredi8h.'</td>
			</tr>
			<tr>
				<td>9h00</td>
				<td>'.$horairesLundi9h.'</td>
				<td>'.$horairesMardi9h.'</td>
				<td>'.$horairesMercredi9h.'</td>
				<td>'.$horairesJeudi9h.'</td>
				<td>'.$horairesVendredi9h.'</td>
			</tr>
			<tr>
				<td>10h00</td>
				<td>'.$horairesLundi10h.'</td>
				<td>'.$horairesMardi10h.'</td>
				<td>'.$horairesMercredi10h.'</td>
				<td>'.$horairesJeudi10h.'</td>
				<td>'.$horairesVendredi10h.'</td>
			</tr>
			<tr>
				<td>11h00</td>
				<td>'.$horairesLundi11h.'</td>
				<td>'.$horairesMardi11h.'</td>
				<td>'.$horairesMercredi11h.'</td>
				<td>'.$horairesJeudi11h.'</td>
				<td>'.$horairesVendredi11h.'</td>
			</tr>
			<tr>
				<td>12h00</td>
				<td>'.$horairesLundi12h.'</td>
				<td>'.$horairesMardi12h.'</td>
				<td>'.$horairesMercredi12h.'</td>
				<td>'.$horairesJeudi12h.'</td>
				<td>'.$horairesVendredi12h.'</td>
			</tr>
			<tr>
				<td>13h00</td>
				<td>'.$horairesLundi13h.'</td>
				<td>'.$horairesMardi13h.'</td>
				<td>'.$horairesMercredi13h.'</td>
				<td>'.$horairesJeudi13h.'</td>
				<td>'.$horairesVendredi13h.'</td>
			</tr>
			<tr>
				<td>14h00</td>
				<td>'.$horairesLundi14h.'</td>
				<td>'.$horairesMardi14h.'</td>
				<td>'.$horairesMercredi14h.'</td>
				<td>'.$horairesJeudi14h.'</td>
				<td>'.$horairesVendredi14h.'</td>
			</tr>
			<tr>
				<td>15h00</td>
				<td>'.$horairesLundi15h.'</td>
				<td>'.$horairesMardi15h.'</td>
				<td>'.$horairesMercredi15h.'</td>
				<td>'.$horairesJeudi15h.'</td>
				<td>'.$horairesVendredi15h.'</td>
			</tr>
			<tr>
				<td>16h00</td>
				<td>'.$horairesLundi16h.'</td>
				<td>'.$horairesMardi16h.'</td>
				<td>'.$horairesMercredi16h.'</td>
				<td>'.$horairesJeudi16h.'</td>
				<td>'.$horairesVendredi16h.'</td>
			</tr>
			<tr>
				<td>17h00</td>
				<td>'.$horairesLundi17h.'</td>
				<td>'.$horairesMardi17h.'</td>
				<td>'.$horairesMercredi17h.'</td>
				<td>'.$horairesJeudi17h.'</td>
				<td>'.$horairesVendredi17h.'</td>
			</tr>
			<tr>
				<td>18h00</td>
				<td>'.$horairesLundi18h.'</td>
				<td>'.$horairesMardi18h.'</td>
				<td>'.$horairesMercredi18h.'</td>
				<td>'.$horairesJeudi18h.'</td>
				<td>'.$horairesVendredi18h.'</td>
			</tr>
		</table>
	';
	require_once'squelettePrivee.php';
?>