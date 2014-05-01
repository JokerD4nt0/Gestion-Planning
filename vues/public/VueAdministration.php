<?php
	require_once"/../../include/connectBDD_MySQLi.php";
	$titre="Administration";
	$contenu=
	'
		<form class="form-signin" method="POST" action="index.php?page=Administration">
			<h2 class="form-signin-heading">Veuillez vous authentifier</h2>
				<input name="emailSalarie" type="text" class="form-control" placeholder="Authentifiant" autofocus>
				<input name="mdpSalarie" type="password" class="form-control" placeholder="Mot de passe">
				<label class="checkbox">
				<input type="checkbox" value="remember-me">Se souvenir de moi
				</label>
				<button class="btn btn-lg btn-primary btn-block" type="submit">Se connecter</button>
				</form>
				<a href="index.php" class="btn btn-info">Retour à l\'accueil</a>
	';
	If(!empty($_POST))
		{
			$emailSalarie = $_POST["emailSalarie"];
			$mdpSalarie = sha1($_POST["mdpSalarie"]."c3R".TRUE);
			$sql = "SELECT * FROM salarie WHERE emailSalarie='".$emailSalarie."' AND mdpSalarie='".$mdpSalarie."'";
			$request = mysqli_query($connexion, $sql);
			
			If(mysqli_num_rows($request) == 0)
			{
				$erreur="<b><font color=red>Erreur d'authentification ! Veuillez entrer un identifiant ou mot de passe valide</font></b>";
			}
			Else
			{
				Session_start();
				$_SESSION["emailSalarie"] = $emailSalarie;
				header("Location:vues/privee/indexPrivee.php");
			}
		}

		if (isset($erreur))
		{
			echo("<span id=\"erreur\">".$erreur."</span><br />");
		}
		
		elseif (isset($_GET["erreur"]))
		{
			echo("<span id=\"erreur\">Accès interdit</span><br />");
		}
	// connexion();
	require_once'squelettePublic.php';
?>