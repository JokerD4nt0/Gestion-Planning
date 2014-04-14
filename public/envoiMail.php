<?php
	if(isset($_POST) && isset($_POST['nomCandidat']) && isset($_POST['emailCandidat']) && isset($_POST['motivationCandidat']))
	{
		if(!empty($_POST['nomCandidat']) && !empty($_POST['emailCandidat']) && !empty($_POST['motivationCandidat']))
		{
			$destinataire = "longhoang@hotmail.fr";
			$sujet = "Demande de contact";
			$message = "Nom : ".$_POST['nomCandidat']."\r\n";
			$message .= "Adresse email : ".$_POST['emailCandidat']."\r\n";
			$message .= "Message : ".$_POST['motivationCandidat']."\r\n";
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
		}
	}
?>