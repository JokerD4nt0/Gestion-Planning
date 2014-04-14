<?php

// Ceci est le code de Vincent. Marche-t-il ?
	
			$destinataire = "longhoang@hotmail.fr";
			$sujet = "Demande de contact";
			$message = "
			<html>
			<head>
			<title>Contact</title>
			<style>
			body
			{
			 background-color:#bbb0ff;
			 width:800px;
			}
			p
			{
			color:#ff0000;
			font-family:arial,sans-seritif;
			}
			a
			{
			color;#000;
			text-decoration:none;
			font-weight:bold;
			}
			</style>
			</head>
			<body>
			<h1>Boujours inscription validé</h1>
			<p>plus de 200 video vous attendents sur newdzign.com</p>
			</body>
			</html>
			
			
			
			";
$headers="MIME-Version : 1.0"."\r\n";
$headers.="Content-type:text/html;charset=iso-8859-1";

mail($destinataire,$sujet,$message,$headers);		
			
	
?>