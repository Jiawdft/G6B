<?php
include 'modele/password_maker.php';

$AdresseMail='o@gmail.com';
$Mdp='coucou';


	$AdresseMail=htmlspecialchars($AdresseMail);
	$Mdp=htmlspecialchars($Mdp);
	function inscription_membre($AdresseMail,$Mdp){
	include_once'/modele/connexion_sql.php';
	$req = $bdd->prepare('INSERT INTO admin(adresse_mail,passe) 
		VALUES(:adresse_mail,:passe)');
	$req->execute(array(
	'adresse_mail' => $AdresseMail,
	'passe'=> password_maker($Mdp)
	));}

inscription_membre($AdresseMail,$Mdp);
echo 'ok ca marche';

?>