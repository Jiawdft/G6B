<?php
include 'modele/password_maker.php';

$AdresseMail='o@gmail.com';
$Mdp='coucou';


	$AdresseMail=htmlspecialchars($AdresseMail);
	$Mdp=htmlspecialchars($Mdp);
	function inscription_membre(){
	include_once'/modele/connexion_sql.php';
	$req = $bdd->prepare('INSERT INTO admin(adresse_mail,passe) 
		VALUES(:adresse_mail,:passe)');
	$req->execute(array(
	'adresse_mail' => 'o@gmail.com',
	'passe'=> password_maker('coucou')
	));}

inscription_membre();
echo 'ok ca marche';

?>