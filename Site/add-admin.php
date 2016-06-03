<?php
//include 'modele/password_maker.php';

$AdresseMail='o@gmail.com';
$Mdp='coucou';
/*

	$AdresseMail=htmlspecialchars($AdresseMail);
	$Mdp=htmlspecialchars($Mdp);
	*/
	$bdd = new PDO('mysql:host=localhost;dbname=test_site_internet;charset=utf8', 'root', 'root');
	$req = $bdd->query('INSERT INTO admin(adresse_mail,passe) 
		VALUES(:adresse_mail,:passe');
	$req->execute(array(
	'adresse_mail' => $AdresseMail,
	'passe'=> $Mdp
	));


echo 'ok ca marche';



?>