<?php 
function new_event($nom,$description,$date,$adresse,$groupe){
	$nom=htmlspecialchars($nom);
	$description=htmlspecialchars($description);
	$groupe=htmlspecialchars($groupe);
	$adresse=htmlspecialchars($adresse);
	include_once'../modele/connexion_sql.php';
	$req = $bdd->prepare('INSERT INTO event(nom,description,date,adresse,groupe) 
		VALUES(:nom,:description,:date,:adresse,:groupe)');
	$req->execute(array(
	'nom' => $nom,
	'description' => $description,
	'date' => $date,
	'adresse' => $adresse,
	'groupe' => $groupe,
	));
}
 ?>