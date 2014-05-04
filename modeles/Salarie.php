<?php
require_once 'Modele.php';
class Salarie extends Modele
{
	public function existeSalarie ($idSalarie)
	{
		$requete = " SELECT * FROM salarie WHERE idSalarie=\"$idSalarie\";"; 
		$reponse = $this->executerRequete($requete);
		return $reponse->fetch();
	}
	public function ajouterSalarie($nomSalarie,$prenomSalarie,$dateNaissanceSalarie,$libelleContrat)
	{
		$parametres=array
		(
			'nomSalarie'=>$nomSalarie,
			'prenomSalarie'=>$prenomSalarie,
			'dateNaissanceSalarie'=>$dateNaissanceSalarie,
			'libelleContrat'=>$libelleContrat
		);
		$requete = "INSERT INTO salarie(nomSalarie, prenomSalarie, dateNaissanceSalarie, libelleContrat) values (:nomSalarie,:prenomSalarie,:dateNaissanceSalarie,:libelleContrat);"; 
		return $this->executerRequete($requete,$parametres);
	}
	public function recupererSalarie()
	{
		$requete = " SELECT * FROM salarie;"; 
		$reponse = $this->executerRequete($requete);
		$salarie=array();
		while($donnees = $reponse->fetch())
		{
			$salarie[]=array
			(
				$donnees['idSalarie'],
				$donnees['nomSalarie'],
				$donnees['prenomSalarie'],
				$donnees['dateNaissanceSalarie'],
				$donnees['libelleContrat']
			);
		}
		return $salarie;
	}
} //Fin classe Salarie