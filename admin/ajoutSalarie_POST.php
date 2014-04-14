<?php
	include_once "../include/header.php";
	include_once "../include/connectBDD.php";
	if($_POST['mdpSalarie'] == $_POST['confirmMdpSalarie'])
	{
		$requete = $bdd->prepare('INSERT INTO salarie
		(
			emailSalarie,
			mdpSalarie,
			nomSalarie,
			prenomSalarie,
			dateNaissanceSalarie,
			sexeSalarie,
			adresseSalarie,
			telSalarie,
			diplomesSalarie,
			salaireSalarie,
			dateRecrutementSalarie
		) VALUES(?,?,?,?,?,?,?,?,?,?,?)');
		
		
		
		$requete->execute(array
		(
			$_POST['emailSalarie'],
			sha1($_POST['mdpSalarie']."c3R".TRUE),
			$_POST['nomSalarie'],
			$_POST['prenomSalarie'],
			$_POST['dateNaissanceSalarie'],
			$_POST['sexeSalarie'],
			$_POST['adresseSalarie'],
			$_POST['telSalarie'],
			$_POST['diplomesSalarie'],
			$_POST['salaireSalarie'],
			$_POST['dateRecrutementSalarie']
		));
		
		
		
		echo
		"
			<body>
				<p>Le salarié a bien été enregistré !</p>
				<a class='btn btn-primary' href='ajoutSalarie.php'>Retour</a>
			</body>
		";
		
		
		
	}
	
	else
	{
		echo
		"
			<body>
				<p>Les deux champs \"Mot de passe\" et \"Confirmation Mot de passe\" ne sont pas identiques !</p>
				<a class='btn btn-primary' href='ajoutSalarie.php'>Retour</a>
			</body>
		";
	}
?>