<?php 
function new_event($nom,$description,$date,$groupe){
	$nom=htmlspecialchars($nom);
	$description=htmlspecialchars($description);
	$groupe=htmlspecialchars($groupe)
	include_once'../modele/connexion_sql.php';
	$req = $bdd->prepare('INSERT INTO event(nom,description,date,groupe) 
		VALUES(:nom,:description,:date,:groupe)');
	$req->execute(array(
	'nom' => $nom,
	'description' => $description,
	'date' => $date,
	'groupe' => $groupe,
	));
}
 ?>