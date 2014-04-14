<?php
	include_once"../include/session.php";
	include_once"../include/connectBDD.php";
	include_once"../include/header.php";
	include_once"../include/navbar.php";
?>



	<div class="container">
		<legend>Modifier la fiche d'un Utilisateur</legend>
		<h1>Liste des utilisateurs :</h1>
		<?php
			
			
			
			$reponse = $bdd->query('SELECT * FROM authentifiant');
			while($donnees = $reponse->fetch())
			{
				?>
				<form action="modifUtilisateur_POST.php?id=<?php echo htmlspecialchars($donnees['id'])?>" method="POST">
				
						<label>Login :</label>
						<input type=text name="login" value="<?php echo htmlspecialchars($donnees['login']);?>"/><br/>
						
						<label>Email :</label>
						<input type=email name="email" value="<?php echo htmlspecialchars($donnees['email']);?>"/><br/>
						
						<input type=submit class="btn btn-info" value="Modifier"><br/><br/>
				</form>
				<?php
			}
			$reponse->closeCursor();
		
		?>
	</div>
	
	
	
<?php
	include_once"../include/javascript.php";
	include_once"../include/footer.php";
?>