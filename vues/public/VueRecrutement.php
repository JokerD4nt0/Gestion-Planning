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
					<select type=text name="diplomesCandidat" required>
						<option value="Baccalauréat">Baccalauréat</option>
						<option value="CAP">CAP</option>
						<option value="BTS/DUT">BTS/DUT</option>
						<option value="Licence">Licence</option>
						<option value="Master">Master</option>
						<option value="Doctorat">Doctorat</option>
					</select><br/>
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
	
	
	
	if(isset($_POST) && isset($_POST['nomCandidat']) && isset($_POST['emailCandidat']))
	{
		// if(!empty($_POST['nomCandidat']) && !empty($_POST['emailCandidat']))
		// {
			$destinataire = "longhoang@hotmail.fr";
			$sujet = "Demande de candidature";
			$message = "Nom : ".$_POST['nomCandidat']."\r\n";
			$message .= "Adresse email : ".$_POST['emailCandidat']."\r\n";
			$entete = 'From: '.$_POST['emailCandidat']."\r\n".
				'Reply-To: '.$_POST['emailCandidat']."\r\n".
			'X-Mailer: PHP/'.phpversion();
			if (mail($destinataire,$sujet,$message,$entete))
			{
				echo 'Message envoyé';
			}
			else
			{
				echo "Une erreur est survenue lors de l'envoi du formulaire par email";
			}
		// }
	}
	
	
	
	require_once'squelettePublic.php';
?>