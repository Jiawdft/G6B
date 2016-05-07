<?php
function get_membres($mail)
{
	$bdd = new PDO('mysql:host=localhost;dbname=test_site_internet;charset=utf8', 'root', 'root');
	if($mail=='')
	{
	$reponse = $bdd->query('SELECT * FROM membre ORDER BY nom');
	$membres = $reponse->fetchAll();
	return $membres;
	}
	else
	{
	$reponse = $bdd->prepare('SELECT * FROM membre WHERE adresse_mail= :mail');
	$reponse -> execute(array(
		':mail' => $mail
		));
	$membres = $reponse->fetch();
	return $membres;
	}
}
?>