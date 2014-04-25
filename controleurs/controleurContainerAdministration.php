<?php
		If(!empty($_POST))
		{
			$emailSalarie = $_POST["emailSalarie"];
			$mdpSalarie = sha1($_POST["mdpSalarie"]."c3R".TRUE);
			$sql = "SELECT * FROM salarie WHERE emailSalarie='".$emailSalarie."' AND mdpSalarie='".$mdpSalarie."'";
			$request = mysqli_query($connexion, $sql);
			
			If(mysqli_num_rows($request) == 0)
			{
				$erreur="<b><font color=red>Erreur d'authentification ! Veuillez entrer un identifiant ou mot de passe valide</font></b>";
			}
			Else
			{
				Session_start();
				$_SESSION["emailSalarie"] = $emailSalarie;
				header("Location:../admin/accueil.php");
			}
		}
		
		
		
		if (isset($erreur))
		{
			echo("<span id=\"erreur\">".$erreur."</span><br />");
		}
		
		elseif (isset($_GET["erreur"]))
		{
			echo("<span id=\"erreur\">Accès interdit</span><br />");
		}
?>