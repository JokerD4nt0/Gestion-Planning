<?php
	include_once"/include/session.php";
	include_once"/include/connectBDD.php";
	include_once"/include/header.php";
	include_once"/include/navbar.php";
?>



	<div class="container">
		<h1>Modifier la fiche d'un Salarié</h1>
		<legend>Liste des salariés :</legend>
		<?php
			
			
			
			$reponse = $bdd->query('SELECT * FROM salarie');
			while($donnees = $reponse->fetch())
			{
				?>
				<form action="modifSalarie_POST.php?idSalarie=<?php echo htmlspecialchars($donnees['idSalarie'])?>" method="POST">
						<label>Nom :</label>
						<input type=text name="nomSalarie" value="<?php echo htmlspecialchars($donnees['nomSalarie']);?>"/><br/>
						
						<label>Prénom :</label>
						<input type=text name="prenomSalarie" value="<?php echo htmlspecialchars($donnees['prenomSalarie']);?>"/><br/>
						
						<label>Date de Naissance :</label>
						<input type=text name="dateNaissanceSalarie" value="<?php echo htmlspecialchars($donnees['dateNaissanceSalarie']);?>"/><br/>
						
						<label>Sexe :</label>
						<input type=text name="sexeSalarie" value="<?php echo htmlspecialchars($donnees['sexeSalarie']);?>"/><br/>
						
						<label>Adresse :</label>
						<input type=text name="adresseSalarie" value="<?php echo htmlspecialchars($donnees['adresseSalarie']);?>"/><br/>
						
						<label>Téléphone :</label>
						<input type=text name="telSalarie" value="<?php echo htmlspecialchars($donnees['telSalarie']);?>"/><br/>
						
						<label>Email :</label>
						<input type=text name="emailSalarie" value="<?php echo htmlspecialchars($donnees['emailSalarie']);?>"/><br/>
						
						<label>Salaire (net):</label>
						<input type=text name="salaireSalarie" value="<?php echo htmlspecialchars($donnees['salaireSalarie']);?>"/><br/>
						
						<label>Diplômes :</label>
						<input type=text name="niveauScolaireSalarie" value="<?php echo htmlspecialchars($donnees['diplomesSalarie']);?>"/><br/>
						
						<input type=submit class="btn btn-info" value="Modifier"><br/><br/><br/>
				</form>
				<?php
			}
			$reponse->closeCursor();
		?>
	</div>
	
	
	
<?php
	include_once"/include/javascript.php";
	include_once"/include/footer.php";
?>	