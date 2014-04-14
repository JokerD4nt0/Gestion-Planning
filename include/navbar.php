<!-- Fixed navbar -->
<?php
	function echoActiveClassIfRequestMatches($requestUri)
	{
		$current_file_name = basename($_SERVER['REQUEST_URI'], ".php");

		if ($current_file_name == $requestUri)
			echo 'class="active"';
	}
?>
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
				<li <?=echoActiveClassIfRequestMatches("accueil")?>>
					<a href="accueil.php">Accueil</a>
				</li>
				<li
				<?=echoActiveClassIfRequestMatches("ajoutSalarie")?>
				<?=echoActiveClassIfRequestMatches("modifSalarie")?>
				<?=echoActiveClassIfRequestMatches("supprSalarie")?>
				class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">Gestion du personnel <b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li class="dropdown-header">Ajout</li>
							<li <?=echoActiveClassIfRequestMatches("ajoutSalarie")?>><a href="ajoutSalarie.php">Ajouter un salarié</a></li>
							<!--<li><a href="ajoutPersonneExterne.php">Ajouter une personne externe</a></li>-->
						
						<li class="divider"></li>
						
						<li class="dropdown-header">Modification</li>
							<li <?=echoActiveClassIfRequestMatches("modifSalarie")?>><a href="modifSalarie.php">Modification d'un salarié</a></li>
							<!--<li><a href="modifPersonneExterne.php">Modification d'une personne externe</a></li>-->
						
						<li class="divider"></li>
						
						<li class="dropdown-header">Suppression</li>
							<li <?=echoActiveClassIfRequestMatches("supprSalarie")?>><a href="supprSalarie.php">Suppression d'un salarié</a></li>
							<!--<li><a href="supprPersonneExterne.php">Suppression d'une personne externe</a></li>-->
					</ul>
					
				</li>
				<li <?=echoActiveClassIfRequestMatches("planning")?>>
					<a href="planning.php">Planning</a>
				</li>
			</ul>
			<ul class ="nav navbar-nav navbar-right">
				<li>Bienvenue <?php echo $_SESSION['emailSalarie']?> !</li>
				<li>
					<a href="../include/sessionDestroy.php">Déconnexion</a>
				</li>
			</ul>
		</div><!--/.nav-collapse -->
	</div>
</div>