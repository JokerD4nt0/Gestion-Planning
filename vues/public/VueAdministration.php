<?php
	$titre="Administration";
	$contenu=
	'
		<form class="form-signin" method="POST" action="index.php?page=Administration">
			<h2 class="form-signin-heading">Veuillez vous authentifier</h2>
				<input name="emailSalarie" type="text" class="form-control" placeholder="Authentifiant" autofocus>
				<input name="mdpSalarie" type="password" class="form-control" placeholder="Mot de passe">
				<!--<label class="checkbox">
				<input type="checkbox" value="remember-me">Se souvenir de moi
				</label>-->
				<button class="btn btn-lg btn-primary btn-block" type="submit">Se connecter</button>
			</form>

	';
	require_once'squelettePublic.php';
?>