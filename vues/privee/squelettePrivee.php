<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="">

		<title>Humanity Sport</title>
		
		<!-- Links -->
			<!-- Favicon -->
			<link rel="shortcut icon" href="favicon.png">
			
			<!-- Bootstrap core CSS -->
			<link href="vues/css/bootstrap.css" rel="stylesheet">
			
			<!-- Custom styles for this template -->
			<link href="vues/css/navbar-fixed-top.css" rel="stylesheet">
			<link href="vues/css/form.css" rel="stylesheet">

			<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
			<!--[if lt IE 9]>
			  <script src="../../assets/js/html5shiv.js"></script>
			  <script src="../../assets/js/respond.min.js"></script>
			<![endif]-->
	</head>
<!-- Menu -->
<body>
<?php
	function echoActiveClassIfRequestMatches($requestUri)
	{
		$current_file_name = basename($_SERVER['REQUEST_URI'], ".php");

		if ($current_file_name == $requestUri)
			echo 'class="active"';
	}
?>
<!-- Fixed navbar -->
		<div class="navbar navbar-default navbar-fixed-top">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="accueil.php">Humanity Sport</a>
		</div>
		<div class="navbar-collapse collapse">
			<ul class="nav navbar-nav">
				<li <?php echoActiveClassIfRequestMatches("accueil");?>>
					<a href="accueil.php">Accueil</a>
				</li>
				<li 
				<?php
				echoActiveClassIfRequestMatches("ajoutSalarie");
				echoActiveClassIfRequestMatches("modifSalarie");
				echoActiveClassIfRequestMatches("supprSalarie");
				?> class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">Gestion du personnel <b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li class="dropdown-header">Ajout</li>
							<li <?php echoActiveClassIfRequestMatches("ajoutSalarie");?>><a href="ajoutSalarie.php">Ajouter un salari�</a></li>
						
						<li class="divider"></li>
						
						<li class="dropdown-header">Modification</li>
							<li <?php echoActiveClassIfRequestMatches("modifSalarie");?>><a href="modifSalarie.php">Modification d'un salari�</a></li>
						
						<li class="divider"></li>
						
						<li class="dropdown-header">Suppression</li>
							<li <?php echoActiveClassIfRequestMatches("supprSalarie");?>><a href="supprSalarie.php">Suppression d'un salari�</a></li>
					</ul>
					
				</li>
				<li <?php echoActiveClassIfRequestMatches("planning");?>>
					<a href="planning.php">Planning</a>
				</li>
			</ul>
			<ul class ="nav navbar-nav navbar-right">
				<li>Bienvenue <?php echo $_SESSION['emailSalarie']?> !</li>
				<li>
					<a href="../controleurs/CntsessionDestroy.php">D�connexion</a>
				</li>
			</ul>
		</div><!--/.nav-collapse -->
	</div>
</div>
	<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
	<!-- Contenu -->
	<div class="span9">
		<legend>Derni�res Mises � jour du logiciel Gestion RH :</legend>
		<p>
				Humanity Sport v0.17le<br/>
				<br/>
				+ corrections mineurs
				<br/>
				+ ajout de la fonction "D�connexion"
				<br/>
				<br/>
				�����������������������������
				<br/>
				Humanity Sport v0.16le<br/>
				<br/>
				+ corrections mineurs
				<br/>
				<br/>
				�����������������������������
				<br/>
				Humanity Sport v0.15le<br/>
				<br/>
				+ corrections mineurs (supprSalarie.php et supprSalarie_POST fonctionnels)
				<br/>
				<br/>
				�����������������������������
				<br/>
				Humanity Sport v0.14le<br/>
				<br/>
				+ corrections mineurs<br/>
				+ GestionRH se nomme d�sormais HumanitySport !
				<br/>
				<br/>
				�����������������������������
				<br/>
				GestionRH v0.13<br/>
				<br/>
				+ corrections mineurs
				+ suppression en javacsript inclut !
				<br/>
				<br/>
				�����������������������������
				<br/>
				GestionRH v0.12<br/>
				<br/>
				+ corrections mineurs
				<br/>
				<br/>
				�����������������������������
				<br/>
				<br/>
				GestionRH v0.11<br/>
				<br/>
				+ modifUtilisateur.php & modifUtilisateur_POST.php termin�s !!
				<br/>
				- Dans Salari�, la date doit �tre sous forme jj-mm-aaaa, et non aaaa-mm-jj
				<br/>
				<br/>
				�����������������������������
				<br/>
				<br/>
				GestionRH v0.10<br/>
				<br/>
				+ supprSalarie.php et supprPersonneExterne.php termin�s !!
				<br/>
				- Dans les formulaires, il y a trop d'espaces entres les labels et les inputs. � corriger dans le bootstrap.css ou � imposer le graphisme dans le formulaire.css .
				<br/>
				<br/>
				�����������������������������
				<br/>
				<br/>
				GestionRH v0.09<br/>
				<br/>
				+ Mise en place de 3 includes de connexion � la BDD :<br/>
					� connectBDD.php,<br/>
					� connectBDD_MySQLi.php,<br/>
					� connectBDD_define.php<br/>
				Remarque : cela permet d'avoir plusieurs m�thodes de connexion � la base de donn�es, et donc 3 fa�ons de coder diff�remment. Donc, cela donne une meilleure flexibilit� dans le code quand il y a des erreurs dans l'une ou l'autre include.
				<br/>
				+ supprUtilisateur.php termin� !! Nous pouvons nous inspir� de ce code pour les autres fichier suppr (supprSalarie.php, supprPersonneExterne.php)
				<br/>
				- La suppression d'utilisateur se fait trop immediatement. Il faudrait ajouter par exemple une alert Javascript avant de supprimer un quelconque utilisateur.
			</p>
		</div>
	</div>
</div>
<script src="vues/js/jquery.js"></script>
	<script src="vues/js/bootstrap.min.js"></script>
</body>