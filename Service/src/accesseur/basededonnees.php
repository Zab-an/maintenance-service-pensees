<?php 

	$base = "inspiration";
	$hote = "localhost";
	$usager = "root";
	$motdepasse = "bitnami";
	$dsn = "mysql:dbname=".$base.";host=" . $hote;
	$basededonnees = new PDO($dsn, $usager, $motdepasse);

?>