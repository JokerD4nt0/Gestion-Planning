<?php
	try
	{
		$bdd = new PDO('mysql:host=localhost;dbname=gestionrh', 'root', '');
		$bdd->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	}
	catch(Exception $exception)
	{
		die('Erreur : '.$exception->getMessage());
	}
	$reponse = $bdd->query('SELECT idSalarie FROM salarie
	WHERE emailSalarie = "longhoang@hotmail.fr"');
	while($donnees = $reponse->fetch())
	{
?>

<input type=text name="idSalarie" value="<?php echo htmlspecialchars($donnees['idSalarie']); ?>"/>
<?php
	}
	$reponse->closeCursor();
	
	
	if (isset($_POST['idSalarie']
?>