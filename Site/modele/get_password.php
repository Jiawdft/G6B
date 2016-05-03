<?php
function get_password($AdresseMail){
	$bdd = new PDO('mysql:host=localhost;dbname=test_site_internet;charset=utf8', 'root', 'root');
	$req = $bdd->prepare('SELECT mdp FROM membre WHERE adresse_mail = :adresse_mail');
	$req->execute(array(
		':numero_membre' => $AdresseMail
		));
		$donnees = $req->fetch();
	return $donnees['mdp'];

}
 

?>