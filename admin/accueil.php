<?php
	include_once"../include/session.php";
	include_once"../include/connectBDD.php";
	include_once"../include/header.php";
	include_once"../include/navbar.php";
?>
<!-- Menu -->
<div class="container">
	<div class="row">
		<div class="span2">
		<legend>Menu</legend>
		<ul class="nav nav-pills nav-stacked">
				<li><a href="accueil.php">Mises à jour Gestion RH</a></li>
				<li><a href="listSalarie.php">Liste des salariés</a></li>
		</ul>
		</div>
		
		
		
<!-- Contenu -->
		<div class="span9">
			<legend>Dernières Mises à jour du logiciel Gestion RH :</legend>
			<p>
				Humanity Sport v0.17le<br/>
				<br/>
				+ corrections mineurs
				<br/>
				+ ajout de la fonction "Déconnexion"
				<br/>
				<br/>
				—————————————————————————————
				<br/>
				Humanity Sport v0.16le<br/>
				<br/>
				+ corrections mineurs
				<br/>
				<br/>
				—————————————————————————————
				<br/>
				Humanity Sport v0.15le<br/>
				<br/>
				+ corrections mineurs (supprSalarie.php et supprSalarie_POST fonctionnels)
				<br/>
				<br/>
				—————————————————————————————
				<br/>
				Humanity Sport v0.14le<br/>
				<br/>
				+ corrections mineurs<br/>
				+ GestionRH se nomme désormais HumanitySport !
				<br/>
				<br/>
				—————————————————————————————
				<br/>
				GestionRH v0.13<br/>
				<br/>
				+ corrections mineurs
				+ suppression en javacsript inclut !
				<br/>
				<br/>
				—————————————————————————————
				<br/>
				GestionRH v0.12<br/>
				<br/>
				+ corrections mineurs
				<br/>
				<br/>
				—————————————————————————————
				<br/>
				<br/>
				GestionRH v0.11<br/>
				<br/>
				+ modifUtilisateur.php & modifUtilisateur_POST.php terminés !!
				<br/>
				- Dans Salarié, la date doit être sous forme jj-mm-aaaa, et non aaaa-mm-jj
				<br/>
				<br/>
				—————————————————————————————
				<br/>
				<br/>
				GestionRH v0.10<br/>
				<br/>
				+ supprSalarie.php et supprPersonneExterne.php terminés !!
				<br/>
				- Dans les formulaires, il y a trop d'espaces entres les labels et les inputs. À corriger dans le bootstrap.css ou à imposer le graphisme dans le formulaire.css .
				<br/>
				<br/>
				—————————————————————————————
				<br/>
				<br/>
				GestionRH v0.09<br/>
				<br/>
				+ Mise en place de 3 includes de connexion à la BDD :<br/>
					• connectBDD.php,<br/>
					• connectBDD_MySQLi.php,<br/>
					• connectBDD_define.php<br/>
				Remarque : cela permet d'avoir plusieurs méthodes de connexion à la base de données, et donc 3 façons de coder différemment. Donc, cela donne une meilleure flexibilité dans le code quand il y a des erreurs dans l'une ou l'autre include.
				<br/>
				+ supprUtilisateur.php terminé !! Nous pouvons nous inspiré de ce code pour les autres fichier suppr (supprSalarie.php, supprPersonneExterne.php)
				<br/>
				- La suppression d'utilisateur se fait trop immediatement. Il faudrait ajouter par exemple une alert Javascript avant de supprimer un quelconque utilisateur.
			</p>
		</div>
	</div>
</div>
		
<?php 
	include_once"../include/javascript.php";
	include_once"../include/footer.php"; 
?>