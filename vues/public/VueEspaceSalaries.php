<?php
	$titre="Espace Salariés";
	$contenu=
	'
		<form class="form-signin" method="POST" action="index.php?page=EspaceSalaries">
			<h2 class="form-signin-heading">Veuillez vous authentifier</h2>
				<input name="idSalarie" type="text" class="form-control" placeholder="Identifiant" autofocus>
				<input name="mdpSalarie" type="password" class="form-control" placeholder="Mot de passe">
				<button class="btn btn-lg btn-primary btn-block" type="submit">Se connecter</button>
			</form>

	';
	require_once'squelettePublic.php';
?>