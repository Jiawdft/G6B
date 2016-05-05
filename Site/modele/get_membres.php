<?php
function get_membres($membre)
{
	$bdd = new PDO('mysql:host=localhost;dbname=test_site_internet;charset=utf8', 'root', 'root');
	if($membre='')
	{
	$reponse = $bdd->query('SELECT * FROM membre ORDER BY membre');
	$membres = $reponse->fetchAll();
	return $membres;
	}
	else
	{
	$reponse = $bdd->prepare('SELECT * FROM membre WHERE membre= :membre');
	$reponse -> execute(array(
		':membre' => $membre
		));
	$membres = $reponse->fetch();
	return $membres;
	}
}
?>