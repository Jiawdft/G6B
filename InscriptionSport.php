<meta charset="UTF-8"> 

<?php


function InscriptionSport($Sport,$Information){
	$bdd = new PDO('mysql:host=localhost;dbname=test_site_internet;charset=utf8', 'root', '');
	$req = $bdd->prepare('INSERT INTO sport(numero_sport,sport, information) 
		VALUES(:numero_sport,:sport, :information)');
$req->execute(array(
	'numero_sport' => 0,
	'information' => $Information,
	'sport' => $Sport,
	));
echo 'Le sport a été ajouté '.'</br>';
}
//InscriptionSport('ping pong','Sport de raquette sur table');
//InscriptionSport('babyfoot','Sport de boule');

function AfficheurSport($numeroDuSport){
	$bdd = new PDO('mysql:host=localhost;dbname=test_site_internet;charset=utf8', 'root', '');
	$reponse = $bdd->query('SELECT * FROM sport');
	$donnees = $reponse->fetch();
	while($donnees['numero_sport']<>$numeroDuSport){
		$donnees = $reponse->fetch();
	}

echo 'Sport :' . $donnees['sport'].' information  : '.$donnees['information'].' Sport: '.$donnees['sport'].'</br>';
}
//AfficheurSport(2);

?>