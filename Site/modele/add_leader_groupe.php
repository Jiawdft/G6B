<?php
function add_leader_groupe($Membre,$Groupe){
	$Sport=htmlspecialchars($Membre);
	$Groupe=htmlspecialchars($Groupe);
	
	$bdd = new PDO('mysql:host=localhost;dbname=test_site_internet;charset=utf8', 'root', 'root');
	$req = $bdd->prepare('INSERT INTO groupe_leader(membre,groupe) 
		VALUES(:membre,
			:groupe)');
$req->execute(array(
	'membre' => $Sport,
	'groupe' => $Groupe,
	));
}


?>