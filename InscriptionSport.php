<meta charset="UTF-8"> 

<?php


function InscriptionSport($Sport,$Information){
	$bdd = new PDO('mysql:host=localhost;dbname=test_site_internet;charset=utf8', 'root', '');
	$req = $bdd->prepare('INSERT INTO sport(sport, information) 
		VALUES(:sport, :information)');
$req->execute(array(
	'information' => $Information,
	'sport' => $Sport
	));
echo 'Le sport a été ajouté '.'</br>';
}
InscriptionSport('ping pong','Sport de raquette sur table');
InscriptionSport('babyfoot','Sport de boule');

function AfficheurSport($nomDuSport){
	$bdd = new PDO('mysql:host=localhost;dbname=test_site_internet;charset=utf8', 'root', '');
	$reponse = $bdd->query('SELECT * FROM sport');
	$donnees = $reponse->fetch();
	while($donnees['sport']<>$nomDuSport){
		$donnees = $reponse->fetch();
	}

echo 'Sport :' . $donnees['sport'].' information  : '.$donnees['information'].' Sport: '.$donnees['sport'].'</br>';
}
AfficheurSport('babyfoot');

?>