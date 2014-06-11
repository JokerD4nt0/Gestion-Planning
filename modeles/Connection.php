<?php
	abstract class Connection
	{
		public function connectBDD()
		{
			try
			{
				$bdd = new PDO('mysql:host=localhost;dbname=gestionrh', 'root', '');
				$bdd->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
			}
			catch(Exception $exception){
				die('Erreur : '.$exception->getMessage());
			}
		}
		
		public function connectBDD_define()
		{
			define("DB_HOST","localhost");
			define("DB_LOGIN","root");
			define("DB_PASS","");
			define("DB_BDD","gestionrh");
		}
		
		public function authentification($emailSalarie,$mdpSalarie)
		{
			if(!empty($_POST)){
				$emailSalarie = $_POST["emailSalarie"];
				$mdpSalarie = sha1($_POST["mdpSalarie"]."c3R".TRUE);
				$sql = "SELECT * FROM salarie WHERE emailSalarie='".$emailSalarie."' AND mdpSalarie='".$mdpSalarie."'";
				$request = mysqli_query($connexion, $sql);
					
				if(mysqli_num_rows($request) == 0){
					$erreur="<b><font color=red>Erreur d'authentification ! Veuillez entrer un identifiant ou mot de passe valide</font></b>";
				}
				else{
					Session_start();
					$_SESSION["emailSalarie"] = $emailSalarie;
					header("Location:../vues/privee/indexPrivee.php");
				}
			}

			if (isset($erreur)){
				echo("<span id=\"erreur\">".$erreur."</span><br />");
			}
			
			elseif (isset($_GET["erreur"])){
				echo("<span id=\"erreur\">Accès interdit</span><br />");
			}
		}
	}
?>