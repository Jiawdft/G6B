<?php
function inscription_groupe($Nom,$CodePostal,$Info){
	$bdd = new PDO('mysql:host=localhost;dbname=test_site_internet;charset=utf8', 'root', '');
	$req = $bdd->prepare('INSERT INTO groupe(nom,information, codepostal) 
		VALUES(:nom,:information,:codepostal)');
$req->execute(array(
	'nom' => $Nom,
	'information' => $Info,
	'codepostal'=>$CodePostal,
	));
}
?>