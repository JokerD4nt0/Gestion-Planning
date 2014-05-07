<?php
	$titre="Recrutement";
	$contenu='
		<form method="POST">
			<legend>Candidature</legend>
				<fieldset>
					<label for="nomCandidat">Nom :</label>
					<input type=text name="nomCandidat" placeholder="Nom" required /><br/>
					<label>Prénom :</label>
					<input type=text name="prenomCandidat" placeholder="Prénom" /><br/>
					<label for="emailCandidat">Email :</label>
					<input type=text name="emailCandidat" placeholder="Email" required /><br/>
					<label for="diplomesCandidat">Diplôme(s) :</label>
					<input type=text name="diplomesCandidat" placeholder="Diplomes" required /><br/>
					<label>Libellé du poste souhaité :</label>
					<select type=text name="posteSouhaiteCandidat" >';
					
	foreach($reponse as $donnees)
	{
		$contenu.='<option value ="'.$donnees[1].'">'.$donnees[1].'</option>';
	}
	$contenu.='
					</select><br/>
					<input type=submit class="btn btn-primary" value="Envoyer"/>
				</fieldset>
		</form>
	';
	if (isset($_POST['nomCandidat']))
	{
		$contenu.= "<br/><strong>Votre Candidature a été enregistré !</strong>";
	}
	require_once'squelettePublic.php';
?>