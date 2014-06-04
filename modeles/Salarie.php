<?php
	require_once 'Modele.php';
	class Salarie extends Modele
	{
		public function recupererSalarie()
		{
			$requete = " SELECT * FROM Salarie;"; 
			$reponse = $this->executerRequete($requete);
			$salarie=array();
			while($donnees = $reponse->fetch())
			{
				$salarie[]=array
				(
					$donnees['idSalarie'],
					$donnees['emailSalarie'],
					$donnees['mdpSalarie'],
					$donnees['nomSalarie'],
					$donnees['prenomSalarie'],
					$donnees['dateNaissanceSalarie'],
					$donnees['sexeSalarie'],
					$donnees['adresseSalarie'],
					$donnees['telSalarie'],
					$donnees['diplomesSalarie'],
					$donnees['salaireSalarie'],
					$donnees['dateRecrutementSalarie'],
					$donnees['idPlanning'],
					$donnees['idPoste']
				);
			}
			return $salarie;
		}
	}
?>