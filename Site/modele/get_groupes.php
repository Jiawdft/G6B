<?php
function get_groupes()
{
	$bdd = new PDO('mysql:host=localhost;dbname=test_site_internet;charset=utf8', 'root', 'root');
	$reponse = $bdd->query('SELECT * FROM groupe');
	$groupes = $reponse->fetchAll();
	return $groupes;
}

?>