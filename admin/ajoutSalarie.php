<?php
	include_once"../include/session.php";
	include_once"../include/connectBDD.php";
	include_once"../include/header.php";
	include_once"../include/navbar.php";
?>



	<div class="container">
		<form action="ajoutSalarie_POST.php" method="POST">
			<fieldset>
				<legend>Authentifiant</legend>
					<i>Informations : Le salarié doit se connecter grâce à son adresse e-mail afin de s'authentifier, ainsi que son mot de passe.</i><br/><br/>
					<label>E-mail : </label>
					<input name="emailSalarie" type=email placeholder="exemple@domaine.com" required> <br/>
					
					<label>Mot de passe : </label>
					<input type=password name="mdpSalarie" placeholder="Mot de Passe" required/> <br/>
					
					<label>Confirmation Mot de passe : </label>
					<input type=password name="confirmMdpSalarie" placeholder="Confirmation Mot de Passe" required/> <br/>
					
					
					
				<legend>Données personnelles :</legend>
					<label>Nom du salarié : </label>
					<input name="nomSalarie" type=text placeholder="Nom" required autofocus /><br/>
					
					<label>Prenom du salarié : </label>
					<input name="prenomSalarie" type=text placeholder="Prenom" required /><br/>
					
					<label>Date de naissance : </label>
					<input name="dateNaissanceSalarie" type=datetime placeholder="aaaa-mm-jj"/><br/>
					
					<label>Sexe</label>
						<ul>
							<li>
								Homme : 
								<input name="sexeSalarie" type="radio" value="H" />
							</li>
							
							<li>
								Femme : 
								<input name="sexeSalarie" type="radio" value="F" />
							</li>
						</ul>

						
						
					<legend>Coordonées</legend>
					<label>Adresse du domicile :</label>
					<input name="adresseSalarie" type=text placeholder="Adresse" /><br/>
					
					<label>Téléphone : </label>
					<input name="telSalarie" type=text placeholder="Téléphone"> <br/>
					
					
					
					<legend>Détails :</legend>
					<label>Salaire (net) :</label> <input name="salaireSalarie" type=text placeholder="€" /> <br/>
					
					<label>Diplômes :</label> <input name="diplomesSalarie" type=text placeholder="Diplômes" /> <br/>
					
					<label>Date de recrutement</label> <input name="dateRecrutementSalarie" placeholder="aaaa-mm-jj" /><br/>
						
					<input type="submit" class="btn btn-primary" value="Enregistrer"/>
			</fieldset>
		</form>
		
		
		<legend><font color=green>Liste des 3 derniers salariés :</font></legend>
		<?php
			$reponse = $bdd->query('SELECT * FROM salarie ORDER BY idSalarie DESC LIMIT 0,3');
			while($donnees = $reponse->fetch())
			{
		?>
		<p>
			<b>Nom du Salarié :</b> <?php echo htmlspecialchars($donnees['nomSalarie']);?><br/>
			<b>Prénom du Salarié :</b> <?php echo htmlspecialchars($donnees['prenomSalarie']);?><br/>
			<b>Date de naissance :</b> <?php echo htmlspecialchars($donnees['dateNaissanceSalarie']);?><br/>
			<b>Sexe :</b> <?php echo htmlspecialchars($donnees['sexeSalarie']);?><br/>
			<b>Adresse :</b> <?php echo htmlspecialchars($donnees['adresseSalarie']);?><br/>
			<b>Téléphone :</b> <?php echo htmlspecialchars($donnees['telSalarie']);?><br/>
			<b>Email :</b> <?php echo htmlspecialchars($donnees['emailSalarie']);?><br/>
			<b>Salaire(net) :</b> <?php echo htmlspecialchars($donnees['salaireSalarie']);?> €<br/>
			<b>Niveau Scolaire :</b> <?php echo htmlspecialchars($donnees['diplomesSalarie']);?><br/>
			<b>Date de recrutement :</b> <?php echo htmlspecialchars($donnees['dateRecrutementSalarie']);?>
		</p>
		</br></br></br>
		<?php
			}
			$reponse->closeCursor();
		?>
	</div>
	
	
	
<?php 
	include_once"../include/javascript.php";
	include_once"../include/footer.php";
?>	