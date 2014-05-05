<?php
	$titre="Horaire";
	$contenu='
	<table border=1>
		<tr>
			<td>ID Horaire</td>
			<td>Jour</td>
			<td>Heure Début</td>
			<td>Heure Fin</td>
			<td>Statut Horaire</td>
		</tr>
	';
	
	foreach ($horaires as $tab)
	{
		$contenu.=
		"
			<p>
				<tr>
					<td>".$tab[0]."</td>
					<td>".$tab[1]."</td>
					<td>".$tab[2]."</td>
					<td>".$tab[3]."</td>
					<td>".$tab[4]."</td>
				</tr>
		";
	}
	$contenu.= '</p></table>';
	require_once'squelettePrivee.php';
?>