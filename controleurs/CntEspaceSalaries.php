<?php
	require_once"/../vues/public/VueEspaceSalaries.php";
	// require_once"/../modeles/ModEspaceSalaries.php";
	
	function connexion()
	{
		$serveur = "localhost";
		$log_connect = "root";
		$pass_connect = "";
		$database = "gestionrh";
		
		$connexion = mysqli_connect($serveur, $log_connect, $pass_connect, $database);
		mysqli_query($connexion,"SET NAME UTF8");
		return($connexion);	
	}
	$connexion = connexion();
	
	if(!empty($_POST))
	{
		$idSalarie = $_POST["idSalarie"];

		$mdpSalarie = sha1($_POST["mdpSalarie"]."c3R".TRUE);
		$sql = "SELECT * FROM salarie
		WHERE idSalarie='".$idSalarie."'
		AND mdpSalarie='".$mdpSalarie."'
		";
		$request = mysqli_query($connexion, $sql);
		
		If(mysqli_num_rows($request) == 0)
		{
			$erreur="<b><font color=red>Erreur d'authentification ! Veuillez entrer un identifiant ou mot de passe valide</font></b>";
		}
		Else
		{
			Session_start();
			$_SESSION["idSalarie"] = $idSalarie;
			header("Location:index.php?page=AccueilPrivee");
		}
	}

	if (isset($erreur))
	{
		echo("<span id=\"erreur\">".$erreur."</span><br />");
	}
?>