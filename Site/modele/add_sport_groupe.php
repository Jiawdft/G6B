<?php
function add_sport_groupe($Sport,$Groupe){
	$Sport=htmlspecialchars($Sport);
	$Groupe=htmlspecialchars($Groupe);
	
	$bdd = new PDO('mysql:host=localhost;dbname=test_site_internet;charset=utf8', 'root', 'root');
	$req = $bdd->prepare('INSERT INTO sport_groupe(sport,groupe) 
		VALUES(:sport,
			:groupe)');
$req->execute(array(
	'sport' => $Sport,
	'groupe' => $Groupe,
	));
}


?>