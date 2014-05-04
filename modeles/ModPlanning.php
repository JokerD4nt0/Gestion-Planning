<?php
	require_once"/../controleurs/CntPlanning.php";
	require_once"/../controleurs/CntConnection.php";
	require_once"/../controleurs/CntConnectBDD.php";
	require_once"/../controleurs/CntSession.php";
	
	public class plannings{
		public function planningMensuel(){
			private $idPlanning;
			private $jourPlanning:
			private $moisPlanning;
			private $numJourPlanning;
			
			private $planningMensuel;
			private $donnees;
			private $requete;
			
			$idPlanning=$_POST['idPlanning'];
			$jourPlanning=$_POST['jourPlanning'];
			$moisPlanning=$_POST['moisPlanning'];
			$numJourPlannig=$_POST['numJourPlanning'];
			$requete="
				SELECT jourPlanning,moisPlanning,numJourPlanning,
				FROM planning
				WHERE idPlanning=".$idPlanning."
				AND jourPlanning=".$jourPlanning."
				AND moisPlanning=".$moisPlanning."
				AND numJourPlanning=".$numJourPlanning.";
			";
			$reponse=$this->executerRequete($requete);
			$planningMensuel=array();
			while($donnees=$reponse->fetch()){
				$planningMensuel[]=array(
					$donnees['idPlanning'];
					$donnees['jourPlanning'],
					$donnees['moisPlanning'],
					$donnees['numJourPlanning']
				);
			}
			return $planningMensuel;
		}
		
		public function planningHebdomadaire(){
			private $idPlanning;
			private $jourPlanning;
			private $semainePlanning;
			private $heurePlanning;
			private $statutHeure;
			private $requete;
			
			private $reponse;
			private $planningHebdomadaire;
			private $donnees;
			private $requete;
			
			$idPlanning=$_POST['idPlanning'];
			$jourPlanning=$_POST['jourPlanning'];
			$semainePlanning=$_POST['semainePlanning'];
			$heurePlanning=$_POST['heurePlanning'];
			$statutHeure=$_POST['statutHeure'];
			$requete="
				SELECT jourPlanning,heurePlanning,statutHeure,
				FROM planning
				WHERE idPlanning=".$idPlanning." 
				AND jourPlanning=".$jourPlanning."
				AND semainePlanning=".$semainePlanning."
				AND heurePlanning=".$moisPlanning."
				AND statutPlanning=".$statutHeure."
			";
			$reponse=$this->executerRequete($requete);
			$planningHebdomadaire=array();
			while($donnees=$reponse->fetch()){
				$planningHebdomadaire[]=array(
					$donnees['idPlanning'];
					$donnees['jourPlanning'];
					$donnees['semainePlanning'];
					$donnees['heurePlanning'];
					$donnees['statutHeure'];
				);
			}
			return $planningHebdomadaire;
		}
	}
?>