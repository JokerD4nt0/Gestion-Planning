<?php
	$titre="Plannings";
	$contenu=
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
		
		<br/><br/>
		<legend>Vue sur le nombre des status horaires :</legend>
		<table border=1>
			<tr>
				<td>Nombre d\'heures de travail</td>
				<td>'.$nombreHeuresTravail.'</td>
			</tr>
			<tr>
				<td>Nombre d\'heures de réunion</td>
				<td>'.$nombreHeuresReunion.'</td>
			</tr>
			<tr>
				<td>Nombre d\'heures de pause déjeuner</td>
				<td>'.$nombreHeuresPauseDej.'</td>
			</tr>
			<tr>
				<td>Nombre d\'heures de non-affectation</td>
				<td>'.$nombreHeuresNonAffecte.'</td>
			</tr>
		</table>
	';
	require_once'squelettePrivee.php';
?>