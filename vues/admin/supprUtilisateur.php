<?php
	include_once"/include/session.php";
	include_once"/include/header.php";
	include_once"/include/navbar.php";
?>



	<div class="container">
		<legend>Supprimer un Utilisateur</legend>
		<h1>Liste des utilisateurs :</h1>
			<?php
				require_once "/include/connectBDD_define.php";
				mysql_connect(DB_HOST,DB_LOGIN,DB_PASS);
				mysql_select_db(DB_BDD);
				$sql="SELECT * FROM authentifiant";
				$req = mysql_query($sql) OR die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error());
				while($data=mysql_fetch_assoc($req))
				{
					echo "<p><label>Login :</label> {$data["login"]}<br/>";
					echo "<label>Email :</label> {$data["email"]}<br/> ";
					echo "
					<a
						class='btn btn-warning'
						href='supprUtilisateur_POST.php?id={$data["id"]}'
						onClick='return confirm(\"Confirmer la suppression ?\")'
					>
						Supprimer
					</a>";
					echo "</p>";
				}
			?>
	</div>
		
		
<?php 
	include_once"/include/javascript.php";
	include_once"/include/footer.php"; 
?>