<?php 

	$base = "inspiration";
	$hote = "localhost";
	$usager = "root";
	$motdepasse = "bitnami";
	$dsn = "mysql:dbname=".$base.";host=" . $hote;
	try{
		$basededonnees = new PDO($dsn, $usager, $motdepasse);
	}
	catch(PDOException $exception){
		echo 'Failed';
	}

?>