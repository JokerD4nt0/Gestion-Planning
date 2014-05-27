<?php
	$titre="Formation";
	$contenu='
		<form method="POST">
			<legend>Veuillez indiquer les informations ci-dessous</legend>
				<fieldset>
				<label>Date de départ :</label>
					<input type="text" name="dateDebutFormation_Conge" placeholder="Date de départ" required/><br/>
					<label>Durée de l\'absence</label>
					<input type="text" name="dureeFormation_Conge" placeholder="Durée de l\'absence" required/><br/>
					<label>Libellé de la formation :</label>
					<input type="text" name="libelleFormation" placeholder="Libellé de la formation" required/><br/>
					<label>Niveau de la formation :</label>
					<select type="text" name="niveauFormation" placeholder="Niveau de la formation" required>
						<option value="BAC">BAC</option>
						<option value="BAC+2">BAC+2</option>
						<option value="BAC+3">BAC+3</option>
						<option value="BAC+5">BAC+5</option>
					</select><br/>
					<input type="submit" class="btn btn-primary" value="Envoyer" />
				</fieldset>
			</form>
	';
	if(isset($_POST['libelleFormation']))
	{
		$contenu.="<br/><strong>Votre demande a bien été enregistrée !</strong>";
	}
	require_once'squelettePrivee.php';
?>