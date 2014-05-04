<?php
	abstract class Modele
	{
		private $bdd;/** Objet PDO d'accès à la BD */
		
		protected function executerRequete($sql, $parametres = null)
		{
			/**  Exécute une requête SQL éventuellement paramétrée
			* en parametres : $sql La requête SQL et $parametres tableau des valeurs associées à la requête
			* retourne  un PDOStatement : le résultat renvoyé par la requête*/
			
			
			
			if ($parametres == null)
			{
				$resultat = $this->getBdd()->query($sql); // exécution directe
				//echo $sql;
			}
				else
			{
				$resultat = $this->getBdd()->prepare($sql); // requête préparée
				$resultat->execute($parametres);
			}
				return $resultat;
		}

		
		private function getBdd()
		{
			/** Renvoie un objet de connexion à la BD en initialisant la connexion au besoin
			* retourne l'objet PDO de connexion à la BDD */
			
			
			
			if ($this->bdd == null)
			{            // Création de la connexion
				$this->bdd = new PDO('mysql:host=localhost;dbname=gestionrh;charset=utf8',
						'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
			}
			return $this->bdd;
		}
	}// Fin classe Modèle
?>