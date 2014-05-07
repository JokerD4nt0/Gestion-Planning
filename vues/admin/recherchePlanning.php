<?php
	include_once"../include/session.php";
	include_once"../include/connectBDD.php";
	include_once"../include/header.php";
	include_once"../include/navbar.php";
	$titre="Planning";
	$contenu='
	';
// ?>
<!-- Contenu -->

<div class="container">
	<legend>Plannings des salariés</legend>
	<?php
	// on vérifie d'abord l'existence du POST et aussi si la requete n'est pas vide
		if(isset($_POST['requete']) && $_POST['requete'] != NULL) .{
			mysql_connect('localhost','root','');
			// on se connecte à MySQL. Je vous laisse remplacer les différentes informations pour adapter ce code à votre site.
			mysql_select_db('gestionrh'); 
			// on crée une variable $requete pour faciliter l'écriture de la requête SQL, mais aussi pour empêcher les éventuels malins qui utiliseraient du PHP ou du JS, avec la fonction htmlspecialchars().
			$requete = htmlspecialchars($_POST['requete']); 
			 // la requête, que vous devez maintenant comprendre ;)
			$query = mysql_query("SELECT * FROM salarie WHERE nomSalarie OR prenomSalarie LIKE '%$requete%' ORDER BY nomSalarie ASC") or die (mysql_error());
			// on utilise la fonction mysql_num_rows pour compter les résultats pour vérifier par après
			$nb_resultats = mysql_num_rows($query); 
			// si le nombre de résultats est supérieur à 0, on continue
		if($nb_resultats != 0) {
			// maintenant, on va afficher les résultats et la page qui les donne ainsi que leur nombre, avec un peu de code HTML pour faciliter la tâche.
	?>
		<h3>Résultats de votre recherche.</h3>
		<p>Nous avons trouvé 
		<?php
		// on affiche le nombre de résultats 
			echo $nb_resultats; 
			// on vérifie le nombre de résultats pour orthographier correctement. 
			if($nb_resultats > 1) { echo ' résultats'; } else { echo ' résultat'; } 
		?>
		dans notre base de données. Voici les Salariés que nous avons trouvées :<br/><br/>
		<?php
		 // on fait un while pour afficher la liste des fonctions trouvées, ainsi que l'id qui permettra de faire le lien vers la page de la fonction
			while($donnees = mysql_fetch_array($query)){
		?>
		<a href="recherchePlanning.php?id=<?php echo $donnees['idSalarie']; ?>"><?php echo $donnees['nomSalarie']." ".$donnees['prenomSalarie']; ?></a><br/>
		<?php
		// fin de la boucle
			} 
		?><br/><br/>
		<a href="recherchePlanning.php">Faire une nouvelle recherche</a></p>
		<?php
		// Fini d'afficher les résultats ! Maintenant, nous allons afficher l'éventuelle erreur en cas d'échec de recherche et le formulaire.
		} 
		// de nouveau, un peu de HTML
		else{ 
		?>
			<h3>Pas de résultats</h3>
			<p>Nous n'avons trouvé aucun résultat pour votre requête "<? echo $_POST['requete']; ?>". <a href="rechercher.php">Réessayez</a> avec autre chose.</p>
		<?php
		// Fini d'afficher l'erreur ^^
		}
		// on ferme mysql, on n'en a plus besoin
		mysql_close(); 
		}
		// et voilà le formulaire, en HTML de nouveau !
		else{ 
		?>
			<p>Vous allez faire une recherche dans notre base de données concernant les Salariés. Tapez une requête pour réaliser une recherche.</p>
			<form action="recherchePlanning.php" method="Post">
				<input type="text" name="requete" size="10"/><br/><br/>
				<input type="submit" class="btn btn-primary" value="Ok"/>
			</form>
		<?php
		}
		// et voilà, c'est fini !
	?>
	<a href="accueil.php" class="btn btn-primary">Retour à l'accueil</a>		
</div>
<?php
	include_once"../include/javascript.php";
	include_once"../include/footer.php"; 
	require_once'squelettePrivee.php';
?>