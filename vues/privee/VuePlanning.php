<?php
	$titre="Plannings";
	$contenu='
	<table border=1>
		<tr>
			<td>ID Planning</td>
			<td>Mois</td>
			<td>Année</td>
			<td>ID Salarié</td>
		</tr>
	';
	
	foreach ($plannings as $tab)
	{
		$contenu.=
		"
			<p>
				<tr>
					<td>".$tab[0]."</td>
					<td>".$tab[1]."</td>
					<td>".$tab[2]."</td>
					<td>".$tab[3]."</td>
				</tr>
		";
	}
	$contenu.= '</p></table>';
	require_once'squelettePrivee.php';
?>