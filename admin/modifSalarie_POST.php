<?php
	include_once"../include/header.php";
	include_once"../include/connectBDD.php";
	
	$requete = $bdd->prepare(
	"
		UPDATE salarie
		SET
			nomSalarie=:nomSalarie,
			prenomSalarie=:prenomSalarie,
			dateNaissanceSalarie=:dateNaissanceSalarie,
			sexeSalarie=:sexeSalarie,
			adresseSalarie=:adresseSalarie,
			telSalarie=:telSalarie,
			emailSalarie=:emailSalarie,
			salaireSalarie=:salaireSalarie,
			diplomesSalarie=:diplomesSalarie
		WHERE idSalarie=:idSalarie
	");
	
	$requete->execute(array
	(
		'nomSalarie' => $_POST['nomSalarie'],
		'prenomSalarie' => $_POST['prenomSalarie'],
		'dateNaissanceSalarie' => $_POST['dateNaissanceSalarie'],
		'sexeSalarie' => $_POST['sexeSalarie'],
		'adresseSalarie' => $_POST['adresseSalarie'],
		'telSalarie' => $_POST['telSalarie'],
		'emailSalarie' => $_POST['emailSalarie'],
		'salaireSalarie' => $_POST['salaireSalarie'],
		'diplomesSalarie' => $_POST['diplomesSalarie'],
		'idSalarie' => $_REQUEST['idSalarie']
	));
	echo
	"
		<body>
			<p>Le salarié a bien été modifié !</p><br/>
			<a class='btn btn-default' href='modifSalarie.php'>Retour</a>
		</body>
	";
?>