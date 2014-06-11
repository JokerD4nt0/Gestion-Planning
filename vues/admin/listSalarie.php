<?php
	include_once"/include/session.php";
	include_once"/include/connectBDD.php";
	include_once"/include/header.php";
	include_once"/include/navbar.php";
?>
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
			<legend>Liste des salariés</legend>
				<?php
					$reponse = $bdd->query('SELECT * FROM salarie ORDER BY idSalarie DESC');
					while($donnees = $reponse->fetch())
					{
				?>
				<p>
					<b>Nom :</b> <?php echo htmlspecialchars($donnees['nomSalarie']);?><br/>
					<b>Prenom :</b> <?php echo htmlspecialchars($donnees['prenomSalarie']);?><br/>
					<b>Date de Naissance :</b> <?php echo htmlspecialchars($donnees['dateNaissanceSalarie']);?>
				</p>
				<?php
					}
					$reponse->closeCursor();
				?>
				<a href="accueil.php" class="btn btn-primary">Retour à l'accueil</a>
		</div>
	</div>
</div>
<?php 
	include_once"/include/javascript.php";
	include_once"/include/footer.php"; 
?>