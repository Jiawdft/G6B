<meta charset="UTF-8"> 

<?php


function InscriptionGroupe($Nom,$CodePostal,$Info){
	$bdd = new PDO('mysql:host=localhost;dbname=test_site_internet;charset=utf8', 'root', '');
	$req = $bdd->prepare('INSERT INTO groupe(nom,information, codepostal) 
		VALUES(:nom,:information,:codepostal)');
$req->execute(array(
	'nom' => $Nom,
	'information' => $Info,
	'codepostal'=>$CodePostal,
	));
echo 'Le groupe a été ajouté '.'</br>';
}


InscriptionGroupe('Monsieur Tout le Monde',75000,'');
InscriptionGroupe('Get fit',75000,'');

function AfficheurGroupe($nomDuGroupe){
	$bdd = new PDO('mysql:host=localhost;dbname=test_site_internet;charset=utf8', 'root', '');
	$reponse = $bdd->query('SELECT * FROM groupe');
	$donnees = $reponse->fetch();
	while($donnees['nom']<>$nomDuGroupe){
		$donnees = $reponse->fetch();
	}

echo 'Nom :' . $donnees['codepostal'].'</br>';
}
AfficheurGroupe('Get fit');

?>