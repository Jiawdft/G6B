<?php
function add_membre_groupe($Mail,$Groupe){
	$Mail=htmlspecialchars($Mail);
	$Groupe=htmlspecialchars($Groupe);
	
	$bdd = new PDO('mysql:host=localhost;dbname=test_site_internet;charset=utf8', 'root', 'root');
	$req = $bdd->prepare('INSERT INTO groupe_contient_membre(groupe,membre) 
		VALUES(:groupe,
			:membre)');
$req->execute(array(
	'membre' => $Mail,
	'groupe' => $Groupe,
	));
}


?>