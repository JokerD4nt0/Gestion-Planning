<?php
	require_once 'Modele.php';
	class Horaire extends Modele
	{
		// public function recupererHoraire()
		// {
			// $requete = " SELECT * FROM horaire;"; 
			// $reponse = $this->executerRequete($requete);
			// $horaire=array();
			// while($donnees = $reponse->fetch())
			// {
				// $horaire[]=array
				// (
					// $donnees['idHoraire'],
					// $donnees['jourHoraire'],
					// $donnees['heureDebut'],
					// $donnees['heureFin'],
					// $donnees['statutHoraire']		
				// );
			// }
			// return $horaire;
		// }
		public function recupererLundi8h()
		{
			$requete =
			"
				SELECT statutHoraire FROM horaire, planning, salarie
				WHERE jourHoraire='Lundi'
				AND heureDebut='8h00'
				AND horaire.idPlanning=planning.idPlanning
				AND planning.idPlanning=salarie.idPlanning
				AND salarie.idSalarie=".$_SESSION['idSalarie'].";
			";
			$reponse = $this->executerRequete($requete);
			$donnees = $reponse->fetch();
			$horaireLundi8h =$donnees['statutHoraire'];
			return $horaireLundi8h;
		}
		public function recupererLundi9h()
		{
			$requete =
			"
				SELECT statutHoraire FROM horaire, planning, salarie
				WHERE jourHoraire='Lundi'
				AND heureDebut='9h00'
				AND horaire.idPlanning=planning.idPlanning
				AND planning.idPlanning=salarie.idPlanning
				AND salarie.idSalarie=".$_SESSION['idSalarie'].";;
			";
			$reponse = $this->executerRequete($requete);
			$donnees = $reponse->fetch();
			$horaireLundi9h =$donnees['statutHoraire'];
			return $horaireLundi9h;
		}
		public function recupererLundi10h()
		{
			$requete =
			"
				SELECT statutHoraire FROM horaire, planning, salarie
				WHERE jourHoraire='Lundi'
				AND heureDebut='10h00'
				AND horaire.idPlanning=planning.idPlanning
				AND planning.idPlanning=salarie.idPlanning
				AND salarie.idSalarie=".$_SESSION['idSalarie'].";;
			";
			$reponse = $this->executerRequete($requete);
			$donnees = $reponse->fetch();
			$horaireLundi10h =$donnees['statutHoraire'];
			return $horaireLundi10h;
		}
		public function recupererLundi11h()
		{
			$requete =
			"
				SELECT statutHoraire FROM horaire, planning, salarie
				WHERE jourHoraire='Lundi'
				AND heureDebut='11h00'
				AND horaire.idPlanning=planning.idPlanning
				AND planning.idPlanning=salarie.idPlanning
				AND salarie.idSalarie=".$_SESSION['idSalarie'].";;
			";
			$reponse = $this->executerRequete($requete);
			$donnees = $reponse->fetch();
			$horaireLundi11h =$donnees['statutHoraire'];
			return $horaireLundi11h;
		}
		public function recupererLundi12h()
		{
			$requete =
			"
				SELECT statutHoraire FROM horaire, planning, salarie
				WHERE jourHoraire='Lundi'
				AND heureDebut='12h00'
				AND horaire.idPlanning=planning.idPlanning
				AND planning.idPlanning=salarie.idPlanning
				AND salarie.idSalarie=".$_SESSION['idSalarie'].";;
			";
			$reponse = $this->executerRequete($requete);
			$donnees = $reponse->fetch();
			$horaireLundi12h =$donnees['statutHoraire'];
			return $horaireLundi12h;
		}
		public function recupererLundi13h()
		{
			$requete =
			"
				SELECT statutHoraire FROM horaire, planning, salarie
				WHERE jourHoraire='Lundi'
				AND heureDebut='13h00'
				AND horaire.idPlanning=planning.idPlanning
				AND planning.idPlanning=salarie.idPlanning
				AND salarie.idSalarie=".$_SESSION['idSalarie'].";;
			";
			$reponse = $this->executerRequete($requete);
			$donnees = $reponse->fetch();
			$horaireLundi13h =$donnees['statutHoraire'];
			return $horaireLundi13h;
		}
		public function recupererLundi14h()
		{
			$requete =
			"
				SELECT statutHoraire FROM horaire, planning, salarie
				WHERE jourHoraire='Lundi'
				AND heureDebut='14h00'
				AND horaire.idPlanning=planning.idPlanning
				AND planning.idPlanning=salarie.idPlanning
				AND salarie.idSalarie=".$_SESSION['idSalarie'].";;
			";
			$reponse = $this->executerRequete($requete);
			$donnees = $reponse->fetch();
			$horaireLundi14h =$donnees['statutHoraire'];
			return $horaireLundi14h;
		}
		public function recupererLundi15h()
		{
			$requete =
			"
				SELECT statutHoraire FROM horaire, planning, salarie
				WHERE jourHoraire='Lundi'
				AND heureDebut='15h00'
				AND horaire.idPlanning=planning.idPlanning
				AND planning.idPlanning=salarie.idPlanning
				AND salarie.idSalarie=".$_SESSION['idSalarie'].";;
			";
			$reponse = $this->executerRequete($requete);
			$donnees = $reponse->fetch();
			$horaireLundi15h =$donnees['statutHoraire'];
			return $horaireLundi15h;
		}
		public function recupererLundi16h()
		{
			$requete =
			"
				SELECT statutHoraire FROM horaire, planning, salarie
				WHERE jourHoraire='Lundi'
				AND heureDebut='16h00'
				AND horaire.idPlanning=planning.idPlanning
				AND planning.idPlanning=salarie.idPlanning
				AND salarie.idSalarie=".$_SESSION['idSalarie'].";;
			";
			$reponse = $this->executerRequete($requete);
			$donnees = $reponse->fetch();
			$horaireLundi16h =$donnees['statutHoraire'];
			return $horaireLundi16h;
		}
		public function recupererLundi17h()
		{
			$requete =
			"
				SELECT statutHoraire FROM horaire, planning, salarie
				WHERE jourHoraire='Lundi'
				AND heureDebut='17h00'
				AND horaire.idPlanning=planning.idPlanning
				AND planning.idPlanning=salarie.idPlanning
				AND salarie.idSalarie=".$_SESSION['idSalarie'].";;
			";
			$reponse = $this->executerRequete($requete);
			$donnees = $reponse->fetch();
			$horaireLundi17h =$donnees['statutHoraire'];
			return $horaireLundi17h;
		}
		public function recupererLundi18h()
		{
			$requete =
			"
				SELECT statutHoraire FROM horaire, planning, salarie
				WHERE jourHoraire='Lundi'
				AND heureDebut='18h00'
				AND horaire.idPlanning=planning.idPlanning
				AND planning.idPlanning=salarie.idPlanning
				AND salarie.idSalarie=".$_SESSION['idSalarie'].";;
			";
			$reponse = $this->executerRequete($requete);
			$donnees = $reponse->fetch();
			$horaireLundi18h =$donnees['statutHoraire'];
			return $horaireLundi18h;
		}
		public function recupererMardi8h()
		{
			$requete =
			"
				SELECT statutHoraire FROM horaire, planning, salarie
				WHERE jourHoraire='Mardi'
				AND heureDebut='8h00'
				AND horaire.idPlanning=planning.idPlanning
				AND planning.idPlanning=salarie.idPlanning
				AND salarie.idSalarie=".$_SESSION['idSalarie'].";;
			";
			$reponse = $this->executerRequete($requete);
			$donnees = $reponse->fetch();
			$horaireMardi8h =$donnees['statutHoraire'];
			return $horaireMardi8h;
		}
		public function recupererMardi9h()
		{
			$requete =
			"
				SELECT statutHoraire FROM horaire, planning, salarie
				WHERE jourHoraire='Mardi'
				AND heureDebut='9h00'
				AND horaire.idPlanning=planning.idPlanning
				AND planning.idPlanning=salarie.idPlanning
				AND salarie.idSalarie=".$_SESSION['idSalarie'].";;
			";
			$reponse = $this->executerRequete($requete);
			$donnees = $reponse->fetch();
			$horaireMardi9h =$donnees['statutHoraire'];
			return $horaireMardi9h;
		}
		public function recupererMardi10h()
		{
			$requete =
			"
				SELECT statutHoraire FROM horaire, planning, salarie
				WHERE jourHoraire='Mardi'
				AND heureDebut='10h00'
				AND horaire.idPlanning=planning.idPlanning
				AND planning.idPlanning=salarie.idPlanning
				AND salarie.idSalarie=".$_SESSION['idSalarie'].";;
			";
			$reponse = $this->executerRequete($requete);
			$donnees = $reponse->fetch();
			$horaireMardi10h =$donnees['statutHoraire'];
			return $horaireMardi10h;
		}
		public function recupererMardi11h()
		{
			$requete =
			"
				SELECT statutHoraire FROM horaire, planning, salarie
				WHERE jourHoraire='Mardi'
				AND heureDebut='11h00'
				AND horaire.idPlanning=planning.idPlanning
				AND planning.idPlanning=salarie.idPlanning
				AND salarie.idSalarie=".$_SESSION['idSalarie'].";;
			";
			$reponse = $this->executerRequete($requete);
			$donnees = $reponse->fetch();
			$horaireMardi11h =$donnees['statutHoraire'];
			return $horaireMardi11h;
		}
		public function recupererMardi12h()
		{
			$requete =
			"
				SELECT statutHoraire FROM horaire, planning, salarie
				WHERE jourHoraire='Mardi'
				AND heureDebut='12h00'
				AND horaire.idPlanning=planning.idPlanning
				AND planning.idPlanning=salarie.idPlanning
				AND salarie.idSalarie=".$_SESSION['idSalarie'].";;
			";
			$reponse = $this->executerRequete($requete);
			$donnees = $reponse->fetch();
			$horaireMardi12h =$donnees['statutHoraire'];
			return $horaireMardi12h;
		}
		public function recupererMardi13h()
		{
			$requete =
			"
				SELECT statutHoraire FROM horaire, planning, salarie
				WHERE jourHoraire='Mardi'
				AND heureDebut='13h00'
				AND horaire.idPlanning=planning.idPlanning
				AND planning.idPlanning=salarie.idPlanning
				AND salarie.idSalarie=".$_SESSION['idSalarie'].";;
			";
			$reponse = $this->executerRequete($requete);
			$donnees = $reponse->fetch();
			$horaireMardi13h =$donnees['statutHoraire'];
			return $horaireMardi13h;
		}
		public function recupererMardi14h()
		{
			$requete =
			"
				SELECT statutHoraire FROM horaire, planning, salarie
				WHERE jourHoraire='Mardi'
				AND heureDebut='14h00'
				AND horaire.idPlanning=planning.idPlanning
				AND planning.idPlanning=salarie.idPlanning
				AND salarie.idSalarie=".$_SESSION['idSalarie'].";;
			";
			$reponse = $this->executerRequete($requete);
			$donnees = $reponse->fetch();
			$horaireMardi14h =$donnees['statutHoraire'];
			return $horaireMardi14h;
		}
		public function recupererMardi15h()
		{
			$requete =
			"
				SELECT statutHoraire FROM horaire, planning, salarie
				WHERE jourHoraire='Mardi'
				AND heureDebut='15h00'
				AND horaire.idPlanning=planning.idPlanning
				AND planning.idPlanning=salarie.idPlanning
				AND salarie.idSalarie=".$_SESSION['idSalarie'].";;
			";
			$reponse = $this->executerRequete($requete);
			$donnees = $reponse->fetch();
			$horaireMardi15h =$donnees['statutHoraire'];
			return $horaireMardi15h;
		}
		public function recupererMardi16h()
		{
			$requete =
			"
				SELECT statutHoraire FROM horaire, planning, salarie
				WHERE jourHoraire='Mardi'
				AND heureDebut='16h00'
				AND horaire.idPlanning=planning.idPlanning
				AND planning.idPlanning=salarie.idPlanning
				AND salarie.idSalarie=".$_SESSION['idSalarie'].";;
			";
			$reponse = $this->executerRequete($requete);
			$donnees = $reponse->fetch();
			$horaireMardi16h =$donnees['statutHoraire'];
			return $horaireMardi16h;
		}
		public function recupererMardi17h()
		{
			$requete =
			"
				SELECT statutHoraire FROM horaire, planning, salarie
				WHERE jourHoraire='Mardi'
				AND heureDebut='17h00'
				AND horaire.idPlanning=planning.idPlanning
				AND planning.idPlanning=salarie.idPlanning
				AND salarie.idSalarie=".$_SESSION['idSalarie'].";;
			";
			$reponse = $this->executerRequete($requete);
			$donnees = $reponse->fetch();
			$horaireMardi17h =$donnees['statutHoraire'];
			return $horaireMardi17h;
		}
		public function recupererMardi18h()
		{
			$requete =
			"
				SELECT statutHoraire FROM horaire, planning, salarie
				WHERE jourHoraire='Mardi'
				AND heureDebut='18h00'
				AND horaire.idPlanning=planning.idPlanning
				AND planning.idPlanning=salarie.idPlanning
				AND salarie.idSalarie=".$_SESSION['idSalarie'].";;
			";
			$reponse = $this->executerRequete($requete);
			$donnees = $reponse->fetch();
			$horaireMardi18h =$donnees['statutHoraire'];
			return $horaireMardi18h;
		}
		public function recupererMercredi8h()
		{
			$requete =
			"
				SELECT statutHoraire FROM horaire, planning, salarie
				WHERE jourHoraire='Mercredi'
				AND heureDebut='8h00'
				AND horaire.idPlanning=planning.idPlanning
				AND planning.idPlanning=salarie.idPlanning
				AND salarie.idSalarie=".$_SESSION['idSalarie'].";;
			";
			$reponse = $this->executerRequete($requete);
			$donnees = $reponse->fetch();
			$horaireMercredi8h =$donnees['statutHoraire'];
			return $horaireMercredi8h;
		}
		public function recupererMercredi9h()
		{
			$requete =
			"
				SELECT statutHoraire FROM horaire, planning, salarie
				WHERE jourHoraire='Mercredi'
				AND heureDebut='9h00'
				AND horaire.idPlanning=planning.idPlanning
				AND planning.idPlanning=salarie.idPlanning
				AND salarie.idSalarie=".$_SESSION['idSalarie'].";;
			";
			$reponse = $this->executerRequete($requete);
			$donnees = $reponse->fetch();
			$horaireMercredi9h =$donnees['statutHoraire'];
			return $horaireMercredi9h;
		}
		public function recupererMercredi10h()
		{
			$requete =
			"
				SELECT statutHoraire FROM horaire, planning, salarie
				WHERE jourHoraire='Mercredi'
				AND heureDebut='10h00'
				AND horaire.idPlanning=planning.idPlanning
				AND planning.idPlanning=salarie.idPlanning
				AND salarie.idSalarie=".$_SESSION['idSalarie'].";;
			";
			$reponse = $this->executerRequete($requete);
			$donnees = $reponse->fetch();
			$horaireMercredi10h =$donnees['statutHoraire'];
			return $horaireMercredi10h;
		}
		public function recupererMercredi11h()
		{
			$requete =
			"
				SELECT statutHoraire FROM horaire, planning, salarie
				WHERE jourHoraire='Mercredi'
				AND heureDebut='11h00'
				AND horaire.idPlanning=planning.idPlanning
				AND planning.idPlanning=salarie.idPlanning
				AND salarie.idSalarie=".$_SESSION['idSalarie'].";;
			";
			$reponse = $this->executerRequete($requete);
			$donnees = $reponse->fetch();
			$horaireMercredi11h =$donnees['statutHoraire'];
			return $horaireMercredi11h;
		}
		public function recupererMercredi12h()
		{
			$requete =
			"
				SELECT statutHoraire FROM horaire, planning, salarie
				WHERE jourHoraire='Mercredi'
				AND heureDebut='12h00'
				AND horaire.idPlanning=planning.idPlanning
				AND planning.idPlanning=salarie.idPlanning
				AND salarie.idSalarie=".$_SESSION['idSalarie'].";;
			";
			$reponse = $this->executerRequete($requete);
			$donnees = $reponse->fetch();
			$horaireMercredi12h =$donnees['statutHoraire'];
			return $horaireMercredi12h;
		}
		public function recupererMercredi13h()
		{
			$requete =
			"
				SELECT statutHoraire FROM horaire, planning, salarie
				WHERE jourHoraire='Mercredi'
				AND heureDebut='13h00'
				AND horaire.idPlanning=planning.idPlanning
				AND planning.idPlanning=salarie.idPlanning
				AND salarie.idSalarie=".$_SESSION['idSalarie'].";;
			";
			$reponse = $this->executerRequete($requete);
			$donnees = $reponse->fetch();
			$horaireMercredi13h =$donnees['statutHoraire'];
			return $horaireMercredi13h;
		}
		public function recupererMercredi14h()
		{
			$requete =
			"
				SELECT statutHoraire FROM horaire, planning, salarie
				WHERE jourHoraire='Mercredi'
				AND heureDebut='14h00'
				AND horaire.idPlanning=planning.idPlanning
				AND planning.idPlanning=salarie.idPlanning
				AND salarie.idSalarie=".$_SESSION['idSalarie'].";;
			";
			$reponse = $this->executerRequete($requete);
			$donnees = $reponse->fetch();
			$horaireMercredi14h =$donnees['statutHoraire'];
			return $horaireMercredi14h;
		}
		public function recupererMercredi15h()
		{
			$requete =
			"
				SELECT statutHoraire FROM horaire, planning, salarie
				WHERE jourHoraire='Mercredi'
				AND heureDebut='15h00'
				AND horaire.idPlanning=planning.idPlanning
				AND planning.idPlanning=salarie.idPlanning
				AND salarie.idSalarie=".$_SESSION['idSalarie'].";;
			";
			$reponse = $this->executerRequete($requete);
			$donnees = $reponse->fetch();
			$horaireMercredi15h =$donnees['statutHoraire'];
			return $horaireMercredi15h;
		}
		public function recupererMercredi16h()
		{
			$requete =
			"
				SELECT statutHoraire FROM horaire, planning, salarie
				WHERE jourHoraire='Mercredi'
				AND heureDebut='16h00'
				AND horaire.idPlanning=planning.idPlanning
				AND planning.idPlanning=salarie.idPlanning
				AND salarie.idSalarie=".$_SESSION['idSalarie'].";;
			";
			$reponse = $this->executerRequete($requete);
			$donnees = $reponse->fetch();
			$horaireMercredi16h =$donnees['statutHoraire'];
			return $horaireMercredi16h;
		}
		public function recupererMercredi17h()
		{
			$requete =
			"
				SELECT statutHoraire FROM horaire, planning, salarie
				WHERE jourHoraire='Mercredi'
				AND heureDebut='17h00'
				AND horaire.idPlanning=planning.idPlanning
				AND planning.idPlanning=salarie.idPlanning
				AND salarie.idSalarie=".$_SESSION['idSalarie'].";;
			";
			$reponse = $this->executerRequete($requete);
			$donnees = $reponse->fetch();
			$horaireMercredi17h =$donnees['statutHoraire'];
			return $horaireMercredi17h;
		}
		public function recupererMercredi18h()
		{
			$requete =
			"
				SELECT statutHoraire FROM horaire, planning, salarie
				WHERE jourHoraire='Mercredi'
				AND heureDebut='18h00'
				AND horaire.idPlanning=planning.idPlanning
				AND planning.idPlanning=salarie.idPlanning
				AND salarie.idSalarie=".$_SESSION['idSalarie'].";;
			";
			$reponse = $this->executerRequete($requete);
			$donnees = $reponse->fetch();
			$horaireMercredi18h =$donnees['statutHoraire'];
			return $horaireMercredi18h;
		}
		public function recupererJeudi8h()
		{
			$requete =
			"
				SELECT statutHoraire FROM horaire, planning, salarie
				WHERE jourHoraire='Jeudi'
				AND heureDebut='8h00'
				AND horaire.idPlanning=planning.idPlanning
				AND planning.idPlanning=salarie.idPlanning
				AND salarie.idSalarie=".$_SESSION['idSalarie'].";;
			";
			$reponse = $this->executerRequete($requete);
			$donnees = $reponse->fetch();
			$horaireJeudi8h =$donnees['statutHoraire'];
			return $horaireJeudi8h;
		}
		public function recupererJeudi9h()
		{
			$requete =
			"
				SELECT statutHoraire FROM horaire, planning, salarie
				WHERE jourHoraire='Jeudi'
				AND heureDebut='9h00'
				AND horaire.idPlanning=planning.idPlanning
				AND planning.idPlanning=salarie.idPlanning
				AND salarie.idSalarie=".$_SESSION['idSalarie'].";;
			";
			$reponse = $this->executerRequete($requete);
			$donnees = $reponse->fetch();
			$horaireJeudi9h =$donnees['statutHoraire'];
			return $horaireJeudi9h;
		}
		public function recupererJeudi10h()
		{
			$requete =
			"
				SELECT statutHoraire FROM horaire, planning, salarie
				WHERE jourHoraire='Jeudi'
				AND heureDebut='10h00'
				AND horaire.idPlanning=planning.idPlanning
				AND planning.idPlanning=salarie.idPlanning
				AND salarie.idSalarie=".$_SESSION['idSalarie'].";;
			";
			$reponse = $this->executerRequete($requete);
			$donnees = $reponse->fetch();
			$horaireJeudi10h =$donnees['statutHoraire'];
			return $horaireJeudi10h;
		}
		public function recupererJeudi11h()
		{
			$requete =
			"
				SELECT statutHoraire FROM horaire, planning, salarie
				WHERE jourHoraire='Jeudi'
				AND heureDebut='11h00'
				AND horaire.idPlanning=planning.idPlanning
				AND planning.idPlanning=salarie.idPlanning
				AND salarie.idSalarie=".$_SESSION['idSalarie'].";;
			";
			$reponse = $this->executerRequete($requete);
			$donnees = $reponse->fetch();
			$horaireJeudi11h =$donnees['statutHoraire'];
			return $horaireJeudi11h;
		}
		public function recupererJeudi12h()
		{
			$requete =
			"
				SELECT statutHoraire FROM horaire, planning, salarie
				WHERE jourHoraire='Jeudi'
				AND heureDebut='12h00'
				AND horaire.idPlanning=planning.idPlanning
				AND planning.idPlanning=salarie.idPlanning
				AND salarie.idSalarie=".$_SESSION['idSalarie'].";;
			";
			$reponse = $this->executerRequete($requete);
			$donnees = $reponse->fetch();
			$horaireJeudi12h =$donnees['statutHoraire'];
			return $horaireJeudi12h;
		}
		public function recupererJeudi13h()
		{
			$requete =
			"
				SELECT statutHoraire FROM horaire, planning, salarie
				WHERE jourHoraire='Jeudi'
				AND heureDebut='13h00'
				AND horaire.idPlanning=planning.idPlanning
				AND planning.idPlanning=salarie.idPlanning
				AND salarie.idSalarie=".$_SESSION['idSalarie'].";				;
			";
			$reponse = $this->executerRequete($requete);
			$donnees = $reponse->fetch();
			$horaireJeudi13h =$donnees['statutHoraire'];
			return $horaireJeudi13h;
		}
		public function recupererJeudi14h()
		{
			$requete =
			"
				SELECT statutHoraire FROM horaire, planning, salarie
				WHERE jourHoraire='Jeudi'
				AND heureDebut='14h00'
				AND horaire.idPlanning=planning.idPlanning
				AND planning.idPlanning=salarie.idPlanning
				AND salarie.idSalarie=".$_SESSION['idSalarie'].";;
			";
			$reponse = $this->executerRequete($requete);
			$donnees = $reponse->fetch();
			$horaireJeudi14h =$donnees['statutHoraire'];
			return $horaireJeudi14h;
		}
		public function recupererJeudi15h()
		{
			$requete =
			"
				SELECT statutHoraire FROM horaire, planning, salarie
				WHERE jourHoraire='Jeudi'
				AND heureDebut='15h00'
				AND horaire.idPlanning=planning.idPlanning
				AND planning.idPlanning=salarie.idPlanning
				AND salarie.idSalarie=".$_SESSION['idSalarie'].";;
			";
			$reponse = $this->executerRequete($requete);
			$donnees = $reponse->fetch();
			$horaireJeudi15h =$donnees['statutHoraire'];
			return $horaireJeudi15h;
		}
		public function recupererJeudi16h()
		{
			$requete =
			"
				SELECT statutHoraire FROM horaire, planning, salarie
				WHERE jourHoraire='Jeudi'
				AND heureDebut='16h00'
				AND horaire.idPlanning=planning.idPlanning
				AND planning.idPlanning=salarie.idPlanning
				AND salarie.idSalarie=".$_SESSION['idSalarie'].";;
			";
			$reponse = $this->executerRequete($requete);
			$donnees = $reponse->fetch();
			$horaireJeudi16h =$donnees['statutHoraire'];
			return $horaireJeudi16h;
		}
		public function recupererJeudi17h()
		{
			$requete =
			"
				SELECT statutHoraire FROM horaire, planning, salarie
				WHERE jourHoraire='Jeudi'
				AND heureDebut='17h00'
				AND horaire.idPlanning=planning.idPlanning
				AND planning.idPlanning=salarie.idPlanning
				AND salarie.idSalarie=".$_SESSION['idSalarie'].";;
			";
			$reponse = $this->executerRequete($requete);
			$donnees = $reponse->fetch();
			$horaireJeudi17h =$donnees['statutHoraire'];
			return $horaireJeudi17h;
		}
		public function recupererJeudi18h()
		{
			$requete =
			"
				SELECT statutHoraire FROM horaire, planning, salarie
				WHERE jourHoraire='Jeudi'
				AND heureDebut='18h00'
				AND horaire.idPlanning=planning.idPlanning
				AND planning.idPlanning=salarie.idPlanning
				AND salarie.idSalarie=".$_SESSION['idSalarie'].";;
			";
			$reponse = $this->executerRequete($requete);
			$donnees = $reponse->fetch();
			$horaireJeudi18h =$donnees['statutHoraire'];
			return $horaireJeudi18h;
		}
		public function recupererVendredi8h()
		{
			$requete =
			"
				SELECT statutHoraire FROM horaire, planning, salarie
				WHERE jourHoraire='Vendredi'
				AND heureDebut='8h00'
				AND horaire.idPlanning=planning.idPlanning
				AND planning.idPlanning=salarie.idPlanning
				AND salarie.idSalarie=".$_SESSION['idSalarie'].";;
			";
			$reponse = $this->executerRequete($requete);
			$donnees = $reponse->fetch();
			$horaireVendredi8h =$donnees['statutHoraire'];
			return $horaireVendredi8h;
		}
		public function recupererVendredi9h()
		{
			$requete =
			"
				SELECT statutHoraire FROM horaire, planning, salarie
				WHERE jourHoraire='Vendredi'
				AND heureDebut='9h00'
				AND horaire.idPlanning=planning.idPlanning
				AND planning.idPlanning=salarie.idPlanning
				AND salarie.idSalarie=".$_SESSION['idSalarie'].";;
			";
			$reponse = $this->executerRequete($requete);
			$donnees = $reponse->fetch();
			$horaireVendredi9h =$donnees['statutHoraire'];
			return $horaireVendredi9h;
		}
		public function recupererVendredi10h()
		{
			$requete =
			"
				SELECT statutHoraire FROM horaire, planning, salarie
				WHERE jourHoraire='Vendredi'
				AND heureDebut='10h00'
				AND horaire.idPlanning=planning.idPlanning
				AND planning.idPlanning=salarie.idPlanning
				AND salarie.idSalarie=".$_SESSION['idSalarie'].";;
			";
			$reponse = $this->executerRequete($requete);
			$donnees = $reponse->fetch();
			$horaireVendredi10h =$donnees['statutHoraire'];
			return $horaireVendredi10h;
		}
		public function recupererVendredi11h()
		{
			$requete =
			"
				SELECT statutHoraire FROM horaire, planning, salarie
				WHERE jourHoraire='Vendredi'
				AND heureDebut='11h00'
				AND horaire.idPlanning=planning.idPlanning
				AND planning.idPlanning=salarie.idPlanning
				AND salarie.idSalarie=".$_SESSION['idSalarie'].";;
			";
			$reponse = $this->executerRequete($requete);
			$donnees = $reponse->fetch();
			$horaireVendredi11h =$donnees['statutHoraire'];
			return $horaireVendredi11h;
		}
		public function recupererVendredi12h()
		{
			$requete =
			"
				SELECT statutHoraire FROM horaire, planning, salarie
				WHERE jourHoraire='Vendredi'
				AND heureDebut='12h00'
				AND horaire.idPlanning=planning.idPlanning
				AND planning.idPlanning=salarie.idPlanning
				AND salarie.idSalarie=".$_SESSION['idSalarie'].";				;
			";
			$reponse = $this->executerRequete($requete);
			$donnees = $reponse->fetch();
			$horaireVendredi12h =$donnees['statutHoraire'];
			return $horaireVendredi12h;
		}
		public function recupererVendredi13h()
		{
			$requete =
			"
				SELECT statutHoraire FROM horaire, planning, salarie
				WHERE jourHoraire='Vendredi'
				AND heureDebut='13h00'
				AND horaire.idPlanning=planning.idPlanning
				AND planning.idPlanning=salarie.idPlanning
				AND salarie.idSalarie=".$_SESSION['idSalarie'].";				;
			";
			$reponse = $this->executerRequete($requete);
			$donnees = $reponse->fetch();
			$horaireVendredi13h =$donnees['statutHoraire'];
			return $horaireVendredi13h;
		}
		public function recupererVendredi14h()
		{
			$requete =
			"
				SELECT statutHoraire FROM horaire, planning, salarie
				WHERE jourHoraire='Vendredi'
				AND heureDebut='14h00'
				AND horaire.idPlanning=planning.idPlanning
				AND planning.idPlanning=salarie.idPlanning
				AND salarie.idSalarie=".$_SESSION['idSalarie'].";;
			";
			$reponse = $this->executerRequete($requete);
			$donnees = $reponse->fetch();
			$horaireVendredi14h =$donnees['statutHoraire'];
			return $horaireVendredi14h;
		}
		public function recupererVendredi15h()
		{
			$requete =
			"
				SELECT statutHoraire FROM horaire, planning, salarie
				WHERE jourHoraire='Vendredi'
				AND heureDebut='15h00'
				AND horaire.idPlanning=planning.idPlanning
				AND planning.idPlanning=salarie.idPlanning
				AND salarie.idSalarie=".$_SESSION['idSalarie'].";;
			";
			$reponse = $this->executerRequete($requete);
			$donnees = $reponse->fetch();
			$horaireVendredi15h =$donnees['statutHoraire'];
			return $horaireVendredi15h;
		}
		public function recupererVendredi16h()
		{
			$requete =
			"
				SELECT statutHoraire FROM horaire, planning, salarie
				WHERE jourHoraire='Vendredi'
				AND heureDebut='16h00'
				AND horaire.idPlanning=planning.idPlanning
				AND planning.idPlanning=salarie.idPlanning
				AND salarie.idSalarie=".$_SESSION['idSalarie'].";;
			";
			$reponse = $this->executerRequete($requete);
			$donnees = $reponse->fetch();
			$horaireVendredi16h =$donnees['statutHoraire'];
			return $horaireVendredi16h;
		}
		public function recupererVendredi17h()
		{
			$requete =
			"
				SELECT statutHoraire FROM horaire, planning, salarie
				WHERE jourHoraire='Vendredi'
				AND heureDebut='17h00'
				AND horaire.idPlanning=planning.idPlanning
				AND planning.idPlanning=salarie.idPlanning
				AND salarie.idSalarie=".$_SESSION['idSalarie'].";				;
			";
			$reponse = $this->executerRequete($requete);
			$donnees = $reponse->fetch();
			$horaireVendredi17h =$donnees['statutHoraire'];
			return $horaireVendredi17h;
		}
		public function recupererVendredi18h()
		{
			$requete =
			"
				SELECT statutHoraire FROM horaire, planning, salarie
				WHERE jourHoraire='Vendredi'
				AND heureDebut='18h00'
				AND horaire.idPlanning=planning.idPlanning
				AND planning.idPlanning=salarie.idPlanning
				AND salarie.idSalarie=".$_SESSION['idSalarie'].";				;
			";
			$reponse = $this->executerRequete($requete);
			$donnees = $reponse->fetch();
			$horaireVendredi18h =$donnees['statutHoraire'];
			return $horaireVendredi18h;
		}
	}
?>