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
					<label>Libellé du poste souhaité :</label>
					<select type=text name="libellePoste" >
						<option value=""></option>
						<option value=""></option>
						<option value=""></option>
					</select><br/>
					<input type=submit class="btn btn-primary" value="Envoyer"/>
				</fieldset>
		</form>
		
		
	';
	require_once'squelettePublic.php';
?>