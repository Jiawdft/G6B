<meta charset="UTF-8"> 

<?php

function RechercheGroupe($Sport,$CodePostal){
	$bdd = new PDO('mysql:host=localhost;dbname=test_site_internet;charset=utf8', 'root', 'root');
	if ($Sport==''){
		$req = $bdd->prepare('SELECT nom FROM groupe WHERE codepostal = :codepostal');
	$req->execute(array(
		':codepostal' => $CodePostal
		));
	}elseif($CodePostal==''){
		$req = $bdd->prepare('SELECT nom FROM groupe WHERE sport = :sport');
		$req->execute(array(
			':sport' => $Sport
		));
	}else{
	$req = $bdd->prepare('SELECT nom FROM groupe WHERE sport = :sport AND codepostal = :codepostal');
	$req->execute(array(
		':sport' => $Sport,
		':codepostal' => $CodePostal
		));
	}
	while ($donnees = $req->fetch())
	{
		echo $donnees['nom'].'</br>';
	}
}

RechercheGroupe('karaté',75000);
RechercheGroupe('judo','');

include 'mdpTest.php';
echo hashPassword('coucou').'</br>';
echo NewPassword('coucou').'</br>';

?>