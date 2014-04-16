<?php
	include_once"../include/session.php";
	include_once"../include/connectBDD.php";
	include_once"../include/header.php";
	include_once"../include/navbar.php";
?>
<!-- Menu -->
<div class="container">
	<div class ="row">
		<legend>Plannings des salariés</legend>
		<ul class="nav nav-pills nav-stacked">
		</ul>
	</div>
</div>

<!-- Contenu -->
<!-- L'affichage dois ce présenter sous la forme d'un calendirer avec les heures et les jours (comme un agenda). 
Quand on rentre l'ID d'un salarié, son planning ce génère automatiquement en fonction de ses heures de travaiiles-->
	<div class="span9">
		<legend>EN TRAVAUX !</legend>
			<table>
				<tr>
					<?php
						$reponse = $bdd->query('SELECT * FROM planning');
						while($donnees = $reponse->fetch()){
					?>
					<p>
						<td><b>Jour :</b> <?php echo htmlspecialchars($donnees['jourPlanning']);?><br/></td>
						<td><b>Mois :</b> <?php echo htmlspecialchars($donnees['moisPlanning']);?><br/></td>
						<td><b>Année :</b> <?php echo htmlspecialchars($donnees['anneePlanning']);?><br/></td>
						<td><b>Heure :</b> <?php echo htmlspecialchars($donnees['heurePlanning']);?><br/></td>
						<td><b>Numéro de salarié :</b> <?php echo htmlspecialchars($donnees['idSalarie']);?><br/></td>
					</p>
					<?php
						}
						$reponse->closeCursor();
					?>
				</tr>
			</table>
			<a href="accueil.php" class="btn btn-primary">Retour à l'accueil</a>		
	</div>
<?php 
	include_once"../include/javascript.php";
	include_once"../include/footer.php"; 
?>