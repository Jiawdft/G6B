<?php 
function quitter_groupe($mail,$groupe){
	$mail=htmlspecialchars($mail);
	$groupe=htmlspecialchars($groupe);
	$bdd = new PDO('mysql:host=localhost;dbname=test_site_internet;charset=utf8', 'root', 'root');
	$req = $bdd->prepare('DELETE FROM groupe_contient_membre WHERE membre=:mail AND groupe=:groupe');
	$req->execute(array(
		'groupe' => $groupe,
		'mail' => $mail,
	));

}