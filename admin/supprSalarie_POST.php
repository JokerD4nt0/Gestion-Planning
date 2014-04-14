<?php
	require_once "../include/connectBDD_define.php";
	mysql_connect(DB_HOST,DB_LOGIN,DB_PASS);
	mysql_select_db(DB_BDD);
	$sql = "DELETE FROM salarie WHERE idSalarie={$_GET["idSalarie"]}";
	$req = mysql_query($sql) OR die('Erreur SQL !<br />'.$sql.'<br />'.mysql_error());
	header("Location: supprSalarie.php");
?>