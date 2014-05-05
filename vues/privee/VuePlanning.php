<?php
	$titre="Plannings";
	$contenu=
	'
		<table border=1>
			<tr>
				<td>ID Planning</td>
				<td>Mois</td>
				<td>Année</td>
				<td>ID Salarié</td>
			</tr>
	';
	
	foreach ($plannings as $tabPlanning)
	{
		$contenu.=
		"
			<p>
				<tr>
					<td>".$tabPlanning[0]."</td>
					<td>".$tabPlanning[1]."</td>
					<td>".$tabPlanning[2]."</td>
					<td>".$tabPlanning[3]."</td>
				</tr>
		";
	}
	$contenu.= '</p></table><br/>';
	$contenu.=
	'
		<table border=1>
			<tr>
				<td>ID Horaire</td>
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
					<td>".$tabHoraire[0]."</td>
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
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td>9h00</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td>10h00</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td>11h00</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td>12h00</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td>13h00</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td>14h00</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td>15h00</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td>16h00</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td>17h00</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td>18h00</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
		</table>
	';
	require_once'squelettePrivee.php';
?>