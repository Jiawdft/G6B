<?php
function add_sport_groupe($Sport,$Groupe){
	$Sport=htmlspecialchars($Sport);
	$Groupe=htmlspecialchars($Groupe);
	
	$bdd = new PDO('mysql:host=localhost;dbname=test_site_internet;charset=utf8', 'root', 'root');
	$req = $bdd->prepare('INSERT INTO sport_groupe(id_sport,id_groupe) 
		VALUES(:id_sport,
			:id_groupe)');
$req->execute(array(
	'id_sport' => $Sport,
	'id_groupe' => $Groupe,
	));
}


?>