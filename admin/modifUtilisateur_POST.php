<?php
	include_once"../include/header.php";
	include_once"../include/connectBDD.php";
	
	$requete = $bdd->prepare(
	"
		UPDATE authentifiant
		SET
			login=:login,
			email=:email
		WHERE id=:id
	");
	
	$requete->execute(array
	(
		'login' => $_POST['login'],
		'email' => $_POST['email'],
		'id' => $_REQUEST['id']
	));
	echo
	"
		<body>
			<p>L'utilisateur a bien été modifié !</p><br/>
			<a class='btn btn-default' href='modifUtilisateur.php'>Retour</a>
		</body>
	";
?>