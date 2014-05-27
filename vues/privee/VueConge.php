<?php
	$titre="Demande de Congé";
	$contenu=
	'
		<form method="POST">
			<legend>Veuillez indiquer les informations ci-dessous</legend>
				<fieldset>
					<label>Date de départ :</label>
					<input type="text" name="dateDebutFormation_Conge" placeholder="Date de départ" required/><br/>
					<label>Durée de l\'absence</label>
					<input type="text" name="dureeFormation_Conge" placeholder="Durée de l\'absence" required/><br/>
					<label>Motif du congé :</label>
					<select type="text" name="motifConge" placeholder="Motif du congé" required>
						<option value="RTT">RTT</option>
						<option value="Maternité">Maternité</option>
						<option value="Paternité">Paternité</option>
						<option value="Sabbatique">Sabbatique</option>
					</select><br/>
					<label>Commentaire du congé :</label>
					<textarea name="commentaireConge" placeholder="Commentaire du congé" required></textarea><br/>
					<input type="submit" class="btn btn-primary" value="Envoyer" />
				</fieldset>
		</form>
	';
	if (isset($_POST['dateDebutFormation_Conge']))
	{
		$contenu.= "<br/><strong>Votre demande a bien été enregistrée !</strong>";
	}
	require_once'squelettePrivee.php';
?>