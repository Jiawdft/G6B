<meta charset="UTF-8">
<?php
include'bdd.php';
$req = $bdd->prepare('INSERT INTO groupe(nom,information, codepostal) 
		VALUES(:nom,:information,:codepostal)');
$req->execute(array(
	'nom' => 'Robert',
	'information' => 'Rien',
	'codepostal'=>75000,
	));
echo 'Le groupe a été ajouté '.'</br>';





?>