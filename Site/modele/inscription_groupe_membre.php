<?php 

function inscription_groupe_membre($mail,$groupe){
	$mail=htmlspecialchars($mail);
	$groupe=htmlspecialchars($groupe);
	$bdd = new PDO('mysql:host=localhost;dbname=test_site_internet;charset=utf8', 'root', 'root');
	$req = $bdd->prepare('INSERT INTO groupe_contient_membre(membre,groupe) 
		VALUES(:membre,:groupe)');
$req->execute(array(
	'membre' => $mail,
	'groupe' => $groupe,
	));

}

 ?>