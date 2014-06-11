<?php
	include_once"/include/session.php";
	include_once"/include/connectBDD.php";
	include_once"/include/header.php";
	include_once"/include/navbar.php";
?>



	<div class="container">
		<h1>Supprimer un Salarié</h1>
		<legend>Liste des salariés : </legend>
			<?php
				require_once "/include/connectBDD_define.php";
				mysql_connect(DB_HOST,DB_LOGIN,DB_PASS);
				mysql_select_db(DB_BDD);
				$sql="SELECT * FROM salarie ";
				$req = mysql_query($sql) OR die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error());
				while($data=mysql_fetch_assoc($req))
				{
					echo "<p><label>Nom du salarié : </label> {$data["nomSalarie"]}<br/>";
					echo "<label>Prénom du salarié :</label> {$data["prenomSalarie"]}<br/> ";
					echo "
					<a 
						class='btn btn-warning'
						href='supprSalarie_POST.php?idSalarie={$data["idSalarie"]}'
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