<?php
	require_once "../include/connectBDD_define.php";
	mysql_connect(DB_HOST,DB_LOGIN,DB_PASS);
	mysql_select_db(DB_BDD);
	$sql = "DELETE FROM authentifiant WHERE id={$_GET["id"]}";
	$req = mysql_query($sql) OR die('Erreur SQL !<br />'.$sql.'<br />'.mysql_error());
	header("Location: supprUtilisateur.php");
?>