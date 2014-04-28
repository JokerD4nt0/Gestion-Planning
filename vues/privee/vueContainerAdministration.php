<?php
require_once"../vues/vueHeaderAdmin.php";
?>
<body>
    <div class="container">

      <form class="form-signin" method="POST" action="../admin/accueil.php">
        <h2 class="form-signin-heading">Veuillez vous authentifier</h2>
        <input name="emailSalarie" type="text" class="form-control" placeholder="Authentifiant" autofocus>
        <input name="mdpSalarie" type="password" class="form-control" placeholder="Mot de passe">
        <label class="checkbox">
          <input type="checkbox" value="remember-me">Se souvenir de moi
        </label>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Se connecter</button>
      </form>
	<a href="../index.php" class="btn btn-info">Retour à l'accueil</a>
    </div> <!-- /container -->
</body>
<?php
	require_once"../vues/vueJavascript.php";
	require_once"../vues/vueFooter.php";
?>